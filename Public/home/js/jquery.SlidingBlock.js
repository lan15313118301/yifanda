;
(function($) {
	var pluginName = "SlidingBlock";
	var defaults = {
		event_type: 'mouseenter',
		cur_idx: 0,
		cur_class: 'current',
		slider_tm: 400,
		delay_tm: 300,
		slider_h: '4px',
		
		slider_btm: 0,
		slider_class: 'sliding-block',
		before_show: true,
		cur_show: false,
		ele_inner: 'ul',
		ele_child: 'li'
	}

	function Plugin(elements, options) {
		this.elements = elements;
		this._defaults = defaults;
		this._name = pluginName;
		this.settings = $.extend(this, {}, defaults, options);
		this.init();
	}
	Plugin.prototype = {
		init: function() {
			var _this = this,
				_ele = $(_this.elements),
				_ele_inner = _ele.children(_this.settings.ele_inner),
				_ele_child = _ele_inner.children(_this.settings.ele_child);
			var slider_fix = '<div class="' + _this.settings.slider_class + '"></div>';
			var slider_move = '<div class="' + _this.settings.slider_class + ' ' + _this.settings.slider_class + '-move' + '"></div>';
			var _slider_fix = $(slider_fix),
				_slider_move = $(slider_move);
			var _cur_idx = _this.settings.cur_idx,
				cur_nav = _ele_child.eq(_cur_idx),
				cur_nav_left = cur_nav.offset().left,
				cur_nav_p_left = cur_nav.position().left,
				cur_nav_m_left = parseInt(cur_nav.css('margin-left')),
				cur_nav_w = cur_nav.width(),
				cur_nav_outerW = cur_nav.outerWidth();
			cur_nav.addClass(_this.settings.cur_class).siblings().removeClass(_this.settings.cur_class);
			_slider_fix.css({
				'position': 'absolute',
				'bottom': _this.settings.slider_btm,
				'height': _this.settings.slider_h
			});
			_slider_move.css({
				'position': 'absolute',
				'bottom': _this.settings.slider_btm,
				'height': _this.settings.slider_h
			});
			if(_this.settings.before_show) {
				_slider_fix.appendTo(cur_nav).css({
					'left': 0,
					'width': cur_nav_w
				});
				_slider_move.appendTo(cur_nav).css({
					'left': 0,
					'width': cur_nav_w
				});
			} else {
				_slider_fix.appendTo(_ele).css({
					'z-index': 0,
					'width': cur_nav_w,
					'left': cur_nav_p_left + cur_nav_m_left
				});
				_slider_move.appendTo(_ele).css({
					'z-index': 0,
					'width': cur_nav_w,
					'left': cur_nav_p_left + cur_nav_m_left
				});
			}
			if(_this.settings.cur_show) {
				_slider_fix.css('visibility', 'visible');
			} else {
				_slider_fix.css('visibility', 'hidden');
			}
			_this.mouseFollow(_this, cur_nav_left, cur_nav_p_left, cur_nav_m_left, cur_nav_w, _slider_move);
		},
		mouseFollow: function(_this, cur_nav_left, cur_nav_p_left, cur_nav_m_left, cur_nav_w, _slider_move) {
			var _ele = $(_this.elements);
			var _timer = null;
			_ele.stop(true, true).on(_this.settings.event_type, _this.settings.ele_child, function(e) {
				var _li = $(this),
					_liWidth = _li.outerWidth(),
					_li_w = _li.width(),
					_liLeft = _li.offset().left,
					_liPosLeft = _li.position().left,
					_liMarLeft = parseInt(_li.css('margin-left'));
				if(_timer) {
					clearTimeout(_timer);
				}
				if(_this.settings.before_show) {
					_timer = setTimeout(function() {
						_slider_move.stop(true, true).animate({
							'width': _liWidth,
							'left': _liLeft - cur_nav_left
						}, _this.settings.slider_tm);
					}, _this.settings.delay_tm);
				} else {
					_timer = setTimeout(function() {
						_slider_move.stop(true, true).animate({
							'width': _li_w,
							'left': _liPosLeft + _liMarLeft
						}, _this.settings.slider_tm);
					}, _this.settings.delay_tm);
				}
				_li.addClass('active').siblings().removeClass('active');
			});
			_ele.mouseleave(function() {
				if(_timer) {
					clearTimeout(_timer);
					_timer = null;
				}
				if(_this.settings.before_show) {
					_slider_move.stop(true, true).animate({
						'width': cur_nav_w,
						'left': 0
					}, _this.settings.slider_tm);
				} else {
					_slider_move.stop(true, true).animate({
						'width': cur_nav_w,
						'left': cur_nav_p_left + cur_nav_m_left
					}, _this.settings.slider_tm);
				}
				$(_this.settings.ele_child).removeClass('active');
			});
		}
	}
	$.fn[pluginName] = function(options) {
		var _this = this;
		_this.each(function() {
			$.data(_this, "plugin_" + pluginName, new Plugin(this, options));
		});
		return _this;
	};
})(jQuery);