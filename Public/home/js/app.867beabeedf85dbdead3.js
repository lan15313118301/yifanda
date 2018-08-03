!
function(t) {
	function e(s) {
		if (i[s]) return i[s].exports;
		var n = i[s] = {
			i: s,
			l: !1,
			exports: {}
		};
		return t[s].call(n.exports, n, n.exports, e), n.l = !0, n.exports
	}
	var i = {};
	e.m = t, e.c = i, e.i = function(t) {
		return t
	}, e.d = function(t, i, s) {
		e.o(t, i) || Object.defineProperty(t, i, {
			configurable: !1,
			enumerable: !0,
			get: s
		})
	}, e.n = function(t) {
		var i = t && t.__esModule ?
		function() {
			return t.
		default
		} : function() {
			return t
		};
		return e.d(i, "a", i), i
	}, e.o = function(t, e) {
		return Object.prototype.hasOwnProperty.call(t, e)
	}, e.p = "javascript/", e(e.s = 37)
}([function(t, e) {
	t.exports = function(t, e, i, s) {
		function n() {
			function n() {
				a = Number(new Date), i.apply(l, h)
			}
			function o() {
				r = void 0
			}
			var l = this,
				c = Number(new Date) - a,
				h = arguments;
			s && !r && n(), r && clearTimeout(r), void 0 === s && c > t ? n() : !0 !== e && (r = setTimeout(s ? o : n, void 0 === s ? t - c : t))
		}
		var r, a = 0;
		return "boolean" != typeof e && (s = i, i = e, e = void 0), n
	}
}, function(t, e, i) {
	"use strict";
	t.exports = function() {
		document.querySelectorAll("[data-bg-src]").forEach(function(t) {
			if (t.classList.add("bg-progressive"), "" !== t.getAttribute("data-bg-src")) {
				var e = t.getAttribute("data-bg-src"),
					i = new Image;
				i.src = e, i.onload = function() {
					t.style.backgroundImage = "url(" + e + ")"
				}
			}
		})
	}
}, function(t, e, i) {
	"use strict";

	function s(t, e) {
		return -1 != t.indexOf(e)
	}
	Object.defineProperty(e, "__esModule", {
		value: !0
	});
	var n = navigator.userAgent;
	e.
default = {
		contains: s,
		isiOS: function() {
			return s(n, "iPhone") || s(n, "iPad") || s(n, "iPod")
		},
		isAndroid: function() {
			return s(n, "Android")
		},
		isInWeChat: function() {
			return s(n, "MicroMessenger")
		},
		isInQQ: function() {
			return s(n, "QQ") && !s(n, "MicroMessenger")
		},
		isInWeibo: function() {
			return s(n, "Weibo")
		},
		isSafari: function() {
			return s(n, "Safari") && !s(n, "Chrome")
		}
	}
}, function(t, e, i) {
	var s, n, r;
	!
	function(a, o) {
		n = [i(36)], s = o, void 0 !== (r = "function" == typeof s ? s.apply(e, n) : s) && (t.exports = r)
	}(0, function(t) {
		function e(t) {
			if (t in h.style) return t;
			for (var e = ["Moz", "Webkit", "O", "ms"], i = t.charAt(0).toUpperCase() + t.substr(1), s = 0; s < e.length; ++s) {
				var n = e[s] + i;
				if (n in h.style) return n
			}
		}
		function i(t) {
			return "string" == typeof t && this.parse(t), this
		}
		function s(t, e, i) {
			!0 === e ? t.queue(i) : e ? t.queue(e, i) : t.each(function() {
				i.call(this)
			})
		}
		function n(e) {
			var i = [];
			return t.each(e, function(e) {
				e = t.camelCase(e), e = t.transit.propertyMap[e] || t.cssProps[e] || e, e = o(e), u[e] && (e = o(u[e])), -1 === t.inArray(e, i) && i.push(e)
			}), i
		}
		function r(e, i, s, r) {
			var a = n(e);
			t.cssEase[s] && (s = t.cssEase[s]);
			var o = c(i) + " " + s;
			parseInt(r, 10) > 0 && (o += " " + c(r));
			var l = [];
			return t.each(a, function(t, e) {
				l.push(e + " " + o)
			}), l.join(", ")
		}
		function a(e, i) {
			i || (t.cssNumber[e] = !0), t.transit.propertyMap[e] = u.transform, t.cssHooks[e] = {
				get: function(i) {
					return t(i).css("transit:transform").get(e)
				},
				set: function(i, s) {
					var n = t(i).css("transit:transform");
					n.setFromString(e, s), t(i).css({
						"transit:transform": n
					})
				}
			}
		}
		function o(t) {
			return t.replace(/([A-Z])/g, function(t) {
				return "-" + t.toLowerCase()
			})
		}
		function l(t, e) {
			return "string" != typeof t || t.match(/^[\-0-9\.]+$/) ? "" + t + e : t
		}
		function c(e) {
			var i = e;
			return "string" != typeof i || i.match(/^[\-0-9\.]+/) || (i = t.fx.speeds[i] || t.fx.speeds._default), l(i, "ms")
		}
		t.transit = {
			version: "0.9.12",
			propertyMap: {
				marginLeft: "margin",
				marginRight: "margin",
				marginBottom: "margin",
				marginTop: "margin",
				paddingLeft: "padding",
				paddingRight: "padding",
				paddingBottom: "padding",
				paddingTop: "padding"
			},
			enabled: !0,
			useTransitionEnd: !1
		};
		var h = document.createElement("div"),
			u = {},
			p = navigator.userAgent.toLowerCase().indexOf("chrome") > -1;
		u.transition = e("transition"), u.transitionDelay = e("transitionDelay"), u.transform = e("transform"), u.transformOrigin = e("transformOrigin"), u.filter = e("Filter"), u.transform3d = function() {
			return h.style[u.transform] = "", h.style[u.transform] = "rotateY(90deg)", "" !== h.style[u.transform]
		}();
		var f = {
			transition: "transitionend",
			MozTransition: "transitionend",
			OTransition: "oTransitionEnd",
			WebkitTransition: "webkitTransitionEnd",
			msTransition: "MSTransitionEnd"
		},
			d = u.transitionEnd = f[u.transition] || null;
		for (var _ in u) u.hasOwnProperty(_) && void 0 === t.support[_] && (t.support[_] = u[_]);
		return h = null, t.cssEase = {
			_default: "ease",
			in : "ease-in",
			out: "ease-out",
			"in-out": "ease-in-out",
			snap: "cubic-bezier(0,1,.5,1)",
			easeInCubic: "cubic-bezier(.550,.055,.675,.190)",
			easeOutCubic: "cubic-bezier(.215,.61,.355,1)",
			easeInOutCubic: "cubic-bezier(.645,.045,.355,1)",
			easeInCirc: "cubic-bezier(.6,.04,.98,.335)",
			easeOutCirc: "cubic-bezier(.075,.82,.165,1)",
			easeInOutCirc: "cubic-bezier(.785,.135,.15,.86)",
			easeInExpo: "cubic-bezier(.95,.05,.795,.035)",
			easeOutExpo: "cubic-bezier(.19,1,.22,1)",
			easeInOutExpo: "cubic-bezier(1,0,0,1)",
			easeInQuad: "cubic-bezier(.55,.085,.68,.53)",
			easeOutQuad: "cubic-bezier(.25,.46,.45,.94)",
			easeInOutQuad: "cubic-bezier(.455,.03,.515,.955)",
			easeInQuart: "cubic-bezier(.895,.03,.685,.22)",
			easeOutQuart: "cubic-bezier(.165,.84,.44,1)",
			easeInOutQuart: "cubic-bezier(.77,0,.175,1)",
			easeInQuint: "cubic-bezier(.755,.05,.855,.06)",
			easeOutQuint: "cubic-bezier(.23,1,.32,1)",
			easeInOutQuint: "cubic-bezier(.86,0,.07,1)",
			easeInSine: "cubic-bezier(.47,0,.745,.715)",
			easeOutSine: "cubic-bezier(.39,.575,.565,1)",
			easeInOutSine: "cubic-bezier(.445,.05,.55,.95)",
			easeInBack: "cubic-bezier(.6,-.28,.735,.045)",
			easeOutBack: "cubic-bezier(.175, .885,.32,1.275)",
			easeInOutBack: "cubic-bezier(.68,-.55,.265,1.55)"
		}, t.cssHooks["transit:transform"] = {
			get: function(e) {
				return t(e).data("transform") || new i
			},
			set: function(e, s) {
				var n = s;
				n instanceof i || (n = new i(n)), "WebkitTransform" !== u.transform || p ? e.style[u.transform] = n.toString() : e.style[u.transform] = n.toString(!0), t(e).data("transform", n)
			}
		}, t.cssHooks.transform = {
			set: t.cssHooks["transit:transform"].set
		}, t.cssHooks.filter = {
			get: function(t) {
				return t.style[u.filter]
			},
			set: function(t, e) {
				t.style[u.filter] = e
			}
		}, t.fn.jquery < "1.8" && (t.cssHooks.transformOrigin = {
			get: function(t) {
				return t.style[u.transformOrigin]
			},
			set: function(t, e) {
				t.style[u.transformOrigin] = e
			}
		}, t.cssHooks.transition = {
			get: function(t) {
				return t.style[u.transition]
			},
			set: function(t, e) {
				t.style[u.transition] = e
			}
		}), a("scale"), a("scaleX"), a("scaleY"), a("translate"), a("rotate"), a("rotateX"), a("rotateY"), a("rotate3d"), a("perspective"), a("skewX"), a("skewY"), a("x", !0), a("y", !0), i.prototype = {
			setFromString: function(t, e) {
				var s = "string" == typeof e ? e.split(",") : e.constructor === Array ? e : [e];
				s.unshift(t), i.prototype.set.apply(this, s)
			},
			set: function(t) {
				var e = Array.prototype.slice.apply(arguments, [1]);
				this.setter[t] ? this.setter[t].apply(this, e) : this[t] = e.join(",")
			},
			get: function(t) {
				return this.getter[t] ? this.getter[t].apply(this) : this[t] || 0
			},
			setter: {
				rotate: function(t) {
					this.rotate = l(t, "deg")
				},
				rotateX: function(t) {
					this.rotateX = l(t, "deg")
				},
				rotateY: function(t) {
					this.rotateY = l(t, "deg")
				},
				scale: function(t, e) {
					void 0 === e && (e = t), this.scale = t + "," + e
				},
				skewX: function(t) {
					this.skewX = l(t, "deg")
				},
				skewY: function(t) {
					this.skewY = l(t, "deg")
				},
				perspective: function(t) {
					this.perspective = l(t, "px")
				},
				x: function(t) {
					this.set("translate", t, null)
				},
				y: function(t) {
					this.set("translate", null, t)
				},
				translate: function(t, e) {
					void 0 === this._translateX && (this._translateX = 0), void 0 === this._translateY && (this._translateY = 0), null !== t && void 0 !== t && (this._translateX = l(t, "px")), null !== e && void 0 !== e && (this._translateY = l(e, "px")), this.translate = this._translateX + "," + this._translateY
				}
			},
			getter: {
				x: function() {
					return this._translateX || 0
				},
				y: function() {
					return this._translateY || 0
				},
				scale: function() {
					var t = (this.scale || "1,1").split(",");
					return t[0] && (t[0] = parseFloat(t[0])), t[1] && (t[1] = parseFloat(t[1])), t[0] === t[1] ? t[0] : t
				},
				rotate3d: function() {
					for (var t = (this.rotate3d || "0,0,0,0deg").split(","), e = 0; e <= 3; ++e) t[e] && (t[e] = parseFloat(t[e]));
					return t[3] && (t[3] = l(t[3], "deg")), t
				}
			},
			parse: function(t) {
				var e = this;
				t.replace(/([a-zA-Z0-9]+)\((.*?)\)/g, function(t, i, s) {
					e.setFromString(i, s)
				})
			},
			toString: function(t) {
				var e = [];
				for (var i in this) if (this.hasOwnProperty(i)) {
					if (!u.transform3d && ("rotateX" === i || "rotateY" === i || "perspective" === i || "transformOrigin" === i)) continue;
					"_" !== i[0] && (t && "scale" === i ? e.push(i + "3d(" + this[i] + ",1)") : t && "translate" === i ? e.push(i + "3d(" + this[i] + ",0)") : e.push(i + "(" + this[i] + ")"))
				}
				return e.join(" ")
			}
		}, t.fn.transition = t.fn.transit = function(e, i, n, a) {
			var o = this,
				l = 0,
				h = !0,
				p = t.extend(!0, {}, e);
			"function" == typeof i && (a = i, i = void 0), "object" == typeof i && (n = i.easing, l = i.delay || 0, h = void 0 === i.queue || i.queue, a = i.complete, i = i.duration), "function" == typeof n && (a = n, n = void 0), void 0 !== p.easing && (n = p.easing, delete p.easing), void 0 !== p.duration && (i = p.duration, delete p.duration), void 0 !== p.complete && (a = p.complete, delete p.complete), void 0 !== p.queue && (h = p.queue, delete p.queue), void 0 !== p.delay && (l = p.delay, delete p.delay), void 0 === i && (i = t.fx.speeds._default), void 0 === n && (n = t.cssEase._default), i = c(i);
			var f = r(p, i, n, l),
				_ = t.transit.enabled && u.transition,
				m = _ ? parseInt(i, 10) + parseInt(l, 10) : 0;
			if (0 === m) {
				return s(o, h, function(t) {
					o.css(p), a && a.apply(o), t && t()
				}), o
			}
			var v = {},
				g = function(e) {
					var i = !1,
						s = function() {
							i && o.unbind(d, s), m > 0 && o.each(function() {
								this.style[u.transition] = v[this] || null
							}), "function" == typeof a && a.apply(o), "function" == typeof e && e()
						};
					m > 0 && d && t.transit.useTransitionEnd ? (i = !0, o.bind(d, s)) : window.setTimeout(s, m), o.each(function() {
						m > 0 && (this.style[u.transition] = f), t(this).css(p)
					})
				};
			return s(o, h, function(t) {
				this.offsetWidth, g(t)
			}), this
		}, t.transit.getTransitionValue = r, t
	})
}, , , , function(t, e, i) {
	"use strict";

	function s(t, e) {
		var i = 600 * window.innerWidth / 1920,
			s = document.body.scrollTop,
			n = t.offset().top,
			r = 0,
			a = 376 - i;
		return a = 1200 * a / window.innerWidth, a = "header" === e ? Math.max(-30, a) : Math.max(-60, a), r = s < n - window.innerHeight ? 0 : s > n + t.height() - h ? a : a * s / (n + t.height() - h), "header" === e && (r = h + r), r
	}
	function n() {
		a("[data-arena]").each(function() {
			var t = a(this);
			t.css("backgroundPositionY", s(t, t.attr("data-arena")) + "px")
		}), u && a("[data-arena-scroll]").each(function() {
			var t = a(this),
				e = parseFloat(t.attr("data-arena-scroll"), 10) || 1,
				i = document.body.scrollTop * p / 376;
			t.css(u, "translate3d(0, " + -e * i + "px ,0)")
		})
	}
	function r() {
		a(window).scroll(o(20, n)), a(window).resize(o(100, n)), n()
	}
	var a = window.$,
		o = i(0),
		l = i(12),
		c = i(1),
		h = 50,
		u = function(t) {
			for (var e = ["", "-webkit-", "-moz-", "-o-", "-ms-"], i = document.createElement("div"), s = !1, n = 0; n < e.length; n++) if (null != i.style["" + e[n] + t]) {
				s = "" + e[n] + t;
				break
			}
			return s
		}("transform"),
		p = 40;
	t.exports = function() {
		l.init(), a("footer #scrollTop").click(function() {
			a("html, body").animate({
				scrollTop: 0
			}, 500)
		}), r(), a(c)
	}
}, function(t, e, i) {
	"use strict";
	var s = window.$;
	i(7)(), s("[data-module]").each(function() {
		var t = s(this);
		i(35)("./" + t.attr("data-module"))()
	})
}, function(t, e) {
	function i(t) {
		var e = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
		t = t.replace(e, function(t, e, i, s) {
			return e + e + i + i + s + s
		});
		var i = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(t);
		return i ? {
			r: parseInt(i[1], 16),
			g: parseInt(i[2], 16),
			b: parseInt(i[3], 16)
		} : null
	}
	function s(t, e, i) {
		return Math.min(Math.max(t, e), i)
	}
	function n(t, e) {
		return e.indexOf(t) > -1
	}
	var r = function(t, e) {
			var r = document.querySelector("#" + t + " > .particles-js-canvas-el");
			this.pJS = {
				canvas: {
					el: r,
					w: r.offsetWidth,
					h: r.offsetHeight
				},
				particles: {
					number: {
						value: 400,
						density: {
							enable: !0,
							value_area: 800
						}
					},
					color: {
						value: "#fff"
					},
					shape: {
						type: "circle",
						stroke: {
							width: 0,
							color: "#ff0000"
						},
						polygon: {
							nb_sides: 5
						},
						image: {
							src: "",
							width: 100,
							height: 100
						}
					},
					opacity: {
						value: 1,
						random: !1,
						anim: {
							enable: !1,
							speed: 2,
							opacity_min: 0,
							sync: !1
						}
					},
					size: {
						value: 20,
						random: !1,
						anim: {
							enable: !1,
							speed: 20,
							size_min: 0,
							sync: !1
						}
					},
					line_linked: {
						enable: !0,
						distance: 100,
						color: "#fff",
						opacity: 1,
						width: 1
					},
					move: {
						enable: !0,
						speed: 2,
						direction: "none",
						random: !1,
						straight: !1,
						out_mode: "out",
						bounce: !1,
						attract: {
							enable: !1,
							rotateX: 3e3,
							rotateY: 3e3
						}
					},
					array: []
				},
				interactivity: {
					detect_on: "canvas",
					events: {
						onhover: {
							enable: !0,
							mode: "grab"
						},
						onclick: {
							enable: !0,
							mode: "push"
						},
						resize: !0
					},
					modes: {
						grab: {
							distance: 100,
							line_linked: {
								opacity: 1
							}
						},
						bubble: {
							distance: 200,
							size: 80,
							duration: .4
						},
						repulse: {
							distance: 200,
							duration: .4
						},
						push: {
							particles_nb: 4
						},
						remove: {
							particles_nb: 2
						}
					},
					mouse: {}
				},
				retina_detect: !1,
				fn: {
					interact: {},
					modes: {},
					vendors: {}
				},
				tmp: {}
			};
			var a = this.pJS;
			e && Object.deepExtend(a, e), a.tmp.obj = {
				size_value: a.particles.size.value,
				size_anim_speed: a.particles.size.anim.speed,
				move_speed: a.particles.move.speed,
				line_linked_distance: a.particles.line_linked.distance,
				line_linked_width: a.particles.line_linked.width,
				mode_grab_distance: a.interactivity.modes.grab.distance,
				mode_bubble_distance: a.interactivity.modes.bubble.distance,
				mode_bubble_size: a.interactivity.modes.bubble.size,
				mode_repulse_distance: a.interactivity.modes.repulse.distance
			}, a.fn.retinaInit = function() {
				a.retina_detect && window.devicePixelRatio > 1 ? (a.canvas.pxratio = window.devicePixelRatio, a.tmp.retina = !0) : (a.canvas.pxratio = 1, a.tmp.retina = !1), a.canvas.w = a.canvas.el.offsetWidth * a.canvas.pxratio, a.canvas.h = a.canvas.el.offsetHeight * a.canvas.pxratio, a.particles.size.value = a.tmp.obj.size_value * a.canvas.pxratio, a.particles.size.anim.speed = a.tmp.obj.size_anim_speed * a.canvas.pxratio, a.particles.move.speed = a.tmp.obj.move_speed * a.canvas.pxratio, a.particles.line_linked.distance = a.tmp.obj.line_linked_distance * a.canvas.pxratio, a.interactivity.modes.grab.distance = a.tmp.obj.mode_grab_distance * a.canvas.pxratio, a.interactivity.modes.bubble.distance = a.tmp.obj.mode_bubble_distance * a.canvas.pxratio, a.particles.line_linked.width = a.tmp.obj.line_linked_width * a.canvas.pxratio, a.interactivity.modes.bubble.size = a.tmp.obj.mode_bubble_size * a.canvas.pxratio, a.interactivity.modes.repulse.distance = a.tmp.obj.mode_repulse_distance * a.canvas.pxratio
			}, a.fn.canvasInit = function() {
				a.canvas.ctx = a.canvas.el.getContext("2d")
			}, a.fn.canvasSize = function() {
				a.canvas.el.width = a.canvas.w, a.canvas.el.height = a.canvas.h, a && a.interactivity.events.resize && window.addEventListener("resize", function() {
					a.canvas.w = a.canvas.el.offsetWidth, a.canvas.h = a.canvas.el.offsetHeight, a.tmp.retina && (a.canvas.w *= a.canvas.pxratio, a.canvas.h *= a.canvas.pxratio), a.canvas.el.width = a.canvas.w, a.canvas.el.height = a.canvas.h, a.particles.move.enable || (a.fn.particlesEmpty(), a.fn.particlesCreate(), a.fn.particlesDraw(), a.fn.vendors.densityAutoParticles()), a.fn.vendors.densityAutoParticles()
				})
			}, a.fn.canvasPaint = function() {
				a.canvas.ctx.fillRect(0, 0, a.canvas.w, a.canvas.h)
			}, a.fn.canvasClear = function() {
				a.canvas.ctx.clearRect(0, 0, a.canvas.w, a.canvas.h)
			}, a.fn.particle = function(t, e, s) {
				if (this.radius = (a.particles.size.random ? Math.random() : 1) * a.particles.size.value, a.particles.size.anim.enable && (this.size_status = !1, this.vs = a.particles.size.anim.speed / 100, a.particles.size.anim.sync || (this.vs = this.vs * Math.random())), this.x = s ? s.x : Math.random() * a.canvas.w, this.y = s ? s.y : Math.random() * a.canvas.h, this.x > a.canvas.w - 2 * this.radius ? this.x = this.x - this.radius : this.x < 2 * this.radius && (this.x = this.x + this.radius), this.y > a.canvas.h - 2 * this.radius ? this.y = this.y - this.radius : this.y < 2 * this.radius && (this.y = this.y + this.radius), a.particles.move.bounce && a.fn.vendors.checkOverlap(this, s), this.color = {}, "object" == typeof t.value) if (t.value instanceof Array) {
					var n = t.value[Math.floor(Math.random() * a.particles.color.value.length)];
					this.color.rgb = i(n)
				} else void 0 != t.value.r && void 0 != t.value.g && void 0 != t.value.b && (this.color.rgb = {
					r: t.value.r,
					g: t.value.g,
					b: t.value.b
				}), void 0 != t.value.h && void 0 != t.value.s && void 0 != t.value.l && (this.color.hsl = {
					h: t.value.h,
					s: t.value.s,
					l: t.value.l
				});
				else "random" == t.value ? this.color.rgb = {
					r: Math.floor(256 * Math.random()) + 0,
					g: Math.floor(256 * Math.random()) + 0,
					b: Math.floor(256 * Math.random()) + 0
				} : "string" == typeof t.value && (this.color = t, this.color.rgb = i(this.color.value));
				this.opacity = (a.particles.opacity.random ? Math.random() : 1) * a.particles.opacity.value, a.particles.opacity.anim.enable && (this.opacity_status = !1, this.vo = a.particles.opacity.anim.speed / 100, a.particles.opacity.anim.sync || (this.vo = this.vo * Math.random()));
				var r = {};
				switch (a.particles.move.direction) {
				case "top":
					r = {
						x: 0,
						y: -1
					};
					break;
				case "top-right":
					r = {
						x: .5,
						y: -.5
					};
					break;
				case "right":
					r = {
						x: 1,
						y: -0
					};
					break;
				case "bottom-right":
					r = {
						x: .5,
						y: .5
					};
					break;
				case "bottom":
					r = {
						x: 0,
						y: 1
					};
					break;
				case "bottom-left":
					r = {
						x: -.5,
						y: 1
					};
					break;
				case "left":
					r = {
						x: -1,
						y: 0
					};
					break;
				case "top-left":
					r = {
						x: -.5,
						y: -.5
					};
					break;
				default:
					r = {
						x: 0,
						y: 0
					}
				}
				a.particles.move.straight ? (this.vx = r.x, this.vy = r.y, a.particles.move.random && (this.vx = this.vx * Math.random(), this.vy = this.vy * Math.random())) : (this.vx = r.x + Math.random() - .5, this.vy = r.y + Math.random() - .5), this.vx_i = this.vx, this.vy_i = this.vy;
				var o = a.particles.shape.type;
				if ("object" == typeof o) {
					if (o instanceof Array) {
						var l = o[Math.floor(Math.random() * o.length)];
						this.shape = l
					}
				} else this.shape = o;
				if ("image" == this.shape) {
					var c = a.particles.shape;
					this.img = {
						src: c.image.src,
						ratio: c.image.width / c.image.height
					}, this.img.ratio || (this.img.ratio = 1), "svg" == a.tmp.img_type && void 0 != a.tmp.source_svg && (a.fn.vendors.createSvgImg(this), a.tmp.pushing && (this.img.loaded = !1))
				}
			}, a.fn.particle.prototype.draw = function() {
				var t = this;
				if (void 0 != t.radius_bubble) var e = t.radius_bubble;
				else var e = t.radius;
				if (void 0 != t.opacity_bubble) var i = t.opacity_bubble;
				else var i = t.opacity;
				if (t.color.rgb) var s = "rgba(" + t.color.rgb.r + "," + t.color.rgb.g + "," + t.color.rgb.b + "," + i + ")";
				else var s = "hsla(" + t.color.hsl.h + "," + t.color.hsl.s + "%," + t.color.hsl.l + "%," + i + ")";
				switch (a.canvas.ctx.fillStyle = s, a.canvas.ctx.beginPath(), t.shape) {
				case "circle":
					a.canvas.ctx.arc(t.x, t.y, e, 0, 2 * Math.PI, !1);
					break;
				case "edge":
					a.canvas.ctx.rect(t.x - e, t.y - e, 2 * e, 2 * e);
					break;
				case "triangle":
					a.fn.vendors.drawShape(a.canvas.ctx, t.x - e, t.y + e / 1.66, 2 * e, 3, 2);
					break;
				case "polygon":
					a.fn.vendors.drawShape(a.canvas.ctx, t.x - e / (a.particles.shape.polygon.nb_sides / 3.5), t.y - e / .76, 2.66 * e / (a.particles.shape.polygon.nb_sides / 3), a.particles.shape.polygon.nb_sides, 1);
					break;
				case "star":
					a.fn.vendors.drawShape(a.canvas.ctx, t.x - 2 * e / (a.particles.shape.polygon.nb_sides / 4), t.y - e / 1.52, 2 * e * 2.66 / (a.particles.shape.polygon.nb_sides / 3), a.particles.shape.polygon.nb_sides, 2);
					break;
				case "image":
					if ("svg" == a.tmp.img_type) var n = t.img.obj;
					else var n = a.tmp.img_obj;
					n &&
					function() {
						a.canvas.ctx.drawImage(n, t.x - e, t.y - e, 2 * e, 2 * e / t.img.ratio)
					}()
				}
				a.canvas.ctx.closePath(), a.particles.shape.stroke.width > 0 && (a.canvas.ctx.strokeStyle = a.particles.shape.stroke.color, a.canvas.ctx.lineWidth = a.particles.shape.stroke.width, a.canvas.ctx.stroke()), a.canvas.ctx.fill()
			}, a.fn.particlesCreate = function() {
				for (var t = 0; t < a.particles.number.value; t++) a.particles.array.push(new a.fn.particle(a.particles.color, a.particles.opacity.value))
			}, a.fn.particlesUpdate = function() {
				for (var t = 0; t < a.particles.array.length; t++) {
					var e = a.particles.array[t];
					if (a.particles.move.enable) {
						var i = a.particles.move.speed / 2;
						e.x += e.vx * i, e.y += e.vy * i
					}
					if (a.particles.opacity.anim.enable && (1 == e.opacity_status ? (e.opacity >= a.particles.opacity.value && (e.opacity_status = !1), e.opacity += e.vo) : (e.opacity <= a.particles.opacity.anim.opacity_min && (e.opacity_status = !0), e.opacity -= e.vo), e.opacity < 0 && (e.opacity = 0)), a.particles.size.anim.enable && (1 == e.size_status ? (e.radius >= a.particles.size.value && (e.size_status = !1), e.radius += e.vs) : (e.radius <= a.particles.size.anim.size_min && (e.size_status = !0), e.radius -= e.vs), e.radius < 0 && (e.radius = 0)), "bounce" == a.particles.move.out_mode) var s = {
						x_left: e.radius,
						x_right: a.canvas.w,
						y_top: e.radius,
						y_bottom: a.canvas.h
					};
					else var s = {
						x_left: -e.radius,
						x_right: a.canvas.w + e.radius,
						y_top: -e.radius,
						y_bottom: a.canvas.h + e.radius
					};
					switch (e.x - e.radius > a.canvas.w ? (e.x = s.x_left, e.y = Math.random() * a.canvas.h) : e.x + e.radius < 0 && (e.x = s.x_right, e.y = Math.random() * a.canvas.h), e.y - e.radius > a.canvas.h ? (e.y = s.y_top, e.x = Math.random() * a.canvas.w) : e.y + e.radius < 0 && (e.y = s.y_bottom, e.x = Math.random() * a.canvas.w), a.particles.move.out_mode) {
					case "bounce":
						e.x + e.radius > a.canvas.w ? e.vx = -e.vx : e.x - e.radius < 0 && (e.vx = -e.vx), e.y + e.radius > a.canvas.h ? e.vy = -e.vy : e.y - e.radius < 0 && (e.vy = -e.vy)
					}
					if (n("grab", a.interactivity.events.onhover.mode) && a.fn.modes.grabParticle(e), (n("bubble", a.interactivity.events.onhover.mode) || n("bubble", a.interactivity.events.onclick.mode)) && a.fn.modes.bubbleParticle(e), (n("repulse", a.interactivity.events.onhover.mode) || n("repulse", a.interactivity.events.onclick.mode)) && a.fn.modes.repulseParticle(e), a.particles.line_linked.enable || a.particles.move.attract.enable) for (var r = t + 1; r < a.particles.array.length; r++) {
						var o = a.particles.array[r];
						a.particles.line_linked.enable && a.fn.interact.linkParticles(e, o), a.particles.move.attract.enable && a.fn.interact.attractParticles(e, o), a.particles.move.bounce && a.fn.interact.bounceParticles(e, o)
					}
				}
			}, a.fn.particlesDraw = function() {
				a.canvas.ctx.clearRect(0, 0, a.canvas.w, a.canvas.h), a.fn.particlesUpdate();
				for (var t = 0; t < a.particles.array.length; t++) {
					a.particles.array[t].draw()
				}
			}, a.fn.particlesEmpty = function() {
				a.particles.array = []
			}, a.fn.particlesRefresh = function() {
				cancelRequestAnimFrame(a.fn.checkAnimFrame), cancelRequestAnimFrame(a.fn.drawAnimFrame), a.tmp.source_svg = void 0, a.tmp.img_obj = void 0, a.tmp.count_svg = 0, a.fn.particlesEmpty(), a.fn.canvasClear(), a.fn.vendors.start()
			}, a.fn.interact.linkParticles = function(t, e) {
				var i = t.x - e.x,
					s = t.y - e.y,
					n = Math.sqrt(i * i + s * s);
				if (n <= a.particles.line_linked.distance) {
					var r = a.particles.line_linked.opacity - n / (1 / a.particles.line_linked.opacity) / a.particles.line_linked.distance;
					if (r > 0) {
						var o = a.particles.line_linked.color_rgb_line;
						a.canvas.ctx.strokeStyle = "rgba(" + o.r + "," + o.g + "," + o.b + "," + r + ")", a.canvas.ctx.lineWidth = a.particles.line_linked.width, a.canvas.ctx.beginPath(), a.canvas.ctx.moveTo(t.x, t.y), a.canvas.ctx.lineTo(e.x, e.y), a.canvas.ctx.stroke(), a.canvas.ctx.closePath()
					}
				}
			}, a.fn.interact.attractParticles = function(t, e) {
				var i = t.x - e.x,
					s = t.y - e.y;
				if (Math.sqrt(i * i + s * s) <= a.particles.line_linked.distance) {
					var n = i / (1e3 * a.particles.move.attract.rotateX),
						r = s / (1e3 * a.particles.move.attract.rotateY);
					t.vx -= n, t.vy -= r, e.vx += n, e.vy += r
				}
			}, a.fn.interact.bounceParticles = function(t, e) {
				var i = t.x - e.x,
					s = t.y - e.y;
				Math.sqrt(i * i + s * s) <= t.radius + e.radius && (t.vx = -t.vx, t.vy = -t.vy, e.vx = -e.vx, e.vy = -e.vy)
			}, a.fn.modes.pushParticles = function(t, e) {
				a.tmp.pushing = !0;
				for (var i = 0; i < t; i++) a.particles.array.push(new a.fn.particle(a.particles.color, a.particles.opacity.value, {
					x: e ? e.pos_x : Math.random() * a.canvas.w,
					y: e ? e.pos_y : Math.random() * a.canvas.h
				})), i == t - 1 && (a.particles.move.enable || a.fn.particlesDraw(), a.tmp.pushing = !1)
			}, a.fn.modes.removeParticles = function(t) {
				a.particles.array.splice(0, t), a.particles.move.enable || a.fn.particlesDraw()
			}, a.fn.modes.bubbleParticle = function(t) {
				function e() {
					t.opacity_bubble = t.opacity, t.radius_bubble = t.radius
				}
				function i(e, i, s, n, r) {
					if (e != i) if (a.tmp.bubble_duration_end) {
						if (void 0 != s) {
							var l = n - p * (n - e) / a.interactivity.modes.bubble.duration,
								c = e - l;
							u = e + c, "size" == r && (t.radius_bubble = u), "opacity" == r && (t.opacity_bubble = u)
						}
					} else if (o <= a.interactivity.modes.bubble.distance) {
						if (void 0 != s) var h = s;
						else var h = n;
						if (h != e) {
							var u = n - p * (n - e) / a.interactivity.modes.bubble.duration;
							"size" == r && (t.radius_bubble = u), "opacity" == r && (t.opacity_bubble = u)
						}
					} else "size" == r && (t.radius_bubble = void 0), "opacity" == r && (t.opacity_bubble = void 0)
				}
				if (a.interactivity.events.onhover.enable && n("bubble", a.interactivity.events.onhover.mode)) {
					var s = t.x - a.interactivity.mouse.pos_x,
						r = t.y - a.interactivity.mouse.pos_y,
						o = Math.sqrt(s * s + r * r),
						l = 1 - o / a.interactivity.modes.bubble.distance;
					if (o <= a.interactivity.modes.bubble.distance) {
						if (l >= 0 && "mousemove" == a.interactivity.status) {
							if (a.interactivity.modes.bubble.size != a.particles.size.value) if (a.interactivity.modes.bubble.size > a.particles.size.value) {
								var c = t.radius + a.interactivity.modes.bubble.size * l;
								c >= 0 && (t.radius_bubble = c)
							} else {
								var h = t.radius - a.interactivity.modes.bubble.size,
									c = t.radius - h * l;
								t.radius_bubble = c > 0 ? c : 0
							}
							if (a.interactivity.modes.bubble.opacity != a.particles.opacity.value) if (a.interactivity.modes.bubble.opacity > a.particles.opacity.value) {
								var u = a.interactivity.modes.bubble.opacity * l;
								u > t.opacity && u <= a.interactivity.modes.bubble.opacity && (t.opacity_bubble = u)
							} else {
								var u = t.opacity - (a.particles.opacity.value - a.interactivity.modes.bubble.opacity) * l;
								u < t.opacity && u >= a.interactivity.modes.bubble.opacity && (t.opacity_bubble = u)
							}
						}
					} else e();
					"mouseleave" == a.interactivity.status && e()
				} else if (a.interactivity.events.onclick.enable && n("bubble", a.interactivity.events.onclick.mode)) {
					if (a.tmp.bubble_clicking) {
						var s = t.x - a.interactivity.mouse.click_pos_x,
							r = t.y - a.interactivity.mouse.click_pos_y,
							o = Math.sqrt(s * s + r * r),
							p = ((new Date).getTime() - a.interactivity.mouse.click_time) / 1e3;
						p > a.interactivity.modes.bubble.duration && (a.tmp.bubble_duration_end = !0), p > 2 * a.interactivity.modes.bubble.duration && (a.tmp.bubble_clicking = !1, a.tmp.bubble_duration_end = !1)
					}
					a.tmp.bubble_clicking && (i(a.interactivity.modes.bubble.size, a.particles.size.value, t.radius_bubble, t.radius, "size"), i(a.interactivity.modes.bubble.opacity, a.particles.opacity.value, t.opacity_bubble, t.opacity, "opacity"))
				}
			}, a.fn.modes.repulseParticle = function(t) {
				if (a.interactivity.events.onhover.enable && n("repulse", a.interactivity.events.onhover.mode) && "mousemove" == a.interactivity.status) {
					var e = t.x - a.interactivity.mouse.pos_x,
						i = t.y - a.interactivity.mouse.pos_y,
						r = Math.sqrt(e * e + i * i),
						o = {
							x: e / r,
							y: i / r
						},
						l = a.interactivity.modes.repulse.distance,
						c = s(1 / l * (-1 * Math.pow(r / l, 2) + 1) * l * 100, 0, 50),
						h = {
							x: t.x + o.x * c,
							y: t.y + o.y * c
						};
					"bounce" == a.particles.move.out_mode ? (h.x - t.radius > 0 && h.x + t.radius < a.canvas.w && (t.x = h.x), h.y - t.radius > 0 && h.y + t.radius < a.canvas.h && (t.y = h.y)) : (t.x = h.x, t.y = h.y)
				} else if (a.interactivity.events.onclick.enable && n("repulse", a.interactivity.events.onclick.mode)) if (a.tmp.repulse_finish || ++a.tmp.repulse_count == a.particles.array.length && (a.tmp.repulse_finish = !0), a.tmp.repulse_clicking) {
					var l = Math.pow(a.interactivity.modes.repulse.distance / 6, 3),
						u = a.interactivity.mouse.click_pos_x - t.x,
						p = a.interactivity.mouse.click_pos_y - t.y,
						f = u * u + p * p,
						d = -l / f * 1;
					f <= l &&
					function() {
						var e = Math.atan2(p, u);
						if (t.vx = d * Math.cos(e), t.vy = d * Math.sin(e), "bounce" == a.particles.move.out_mode) {
							var i = {
								x: t.x + t.vx,
								y: t.y + t.vy
							};
							i.x + t.radius > a.canvas.w ? t.vx = -t.vx : i.x - t.radius < 0 && (t.vx = -t.vx), i.y + t.radius > a.canvas.h ? t.vy = -t.vy : i.y - t.radius < 0 && (t.vy = -t.vy)
						}
					}()
				} else 0 == a.tmp.repulse_clicking && (t.vx = t.vx_i, t.vy = t.vy_i)
			}, a.fn.modes.grabParticle = function(t) {
				if (a.interactivity.events.onhover.enable && "mousemove" == a.interactivity.status) {
					var e = t.x - a.interactivity.mouse.pos_x,
						i = t.y - a.interactivity.mouse.pos_y,
						s = Math.sqrt(e * e + i * i);
					if (s <= a.interactivity.modes.grab.distance) {
						var n = a.interactivity.modes.grab.line_linked.opacity - s / (1 / a.interactivity.modes.grab.line_linked.opacity) / a.interactivity.modes.grab.distance;
						if (n > 0) {
							var r = a.particles.line_linked.color_rgb_line;
							a.canvas.ctx.strokeStyle = "rgba(" + r.r + "," + r.g + "," + r.b + "," + n + ")", a.canvas.ctx.lineWidth = a.particles.line_linked.width, a.canvas.ctx.beginPath(), a.canvas.ctx.moveTo(t.x, t.y), a.canvas.ctx.lineTo(a.interactivity.mouse.pos_x, a.interactivity.mouse.pos_y), a.canvas.ctx.stroke(), a.canvas.ctx.closePath()
						}
					}
				}
			}, a.fn.vendors.eventsListeners = function() {
				"window" == a.interactivity.detect_on ? a.interactivity.el = window : a.interactivity.el = a.canvas.el, (a.interactivity.events.onhover.enable || a.interactivity.events.onclick.enable) && (a.interactivity.el.addEventListener("mousemove", function(t) {
					if (a.interactivity.el == window) var e = t.clientX,
						i = t.clientY;
					else var e = t.offsetX || t.clientX,
						i = t.offsetY || t.clientY;
					a.interactivity.mouse.pos_x = e, a.interactivity.mouse.pos_y = i, a.tmp.retina && (a.interactivity.mouse.pos_x *= a.canvas.pxratio, a.interactivity.mouse.pos_y *= a.canvas.pxratio), a.interactivity.status = "mousemove"
				}), a.interactivity.el.addEventListener("mouseleave", function(t) {
					a.interactivity.mouse.pos_x = null, a.interactivity.mouse.pos_y = null, a.interactivity.status = "mouseleave"
				})), a.interactivity.events.onclick.enable && a.interactivity.el.addEventListener("click", function() {
					if (a.interactivity.mouse.click_pos_x = a.interactivity.mouse.pos_x, a.interactivity.mouse.click_pos_y = a.interactivity.mouse.pos_y, a.interactivity.mouse.click_time = (new Date).getTime(), a.interactivity.events.onclick.enable) switch (a.interactivity.events.onclick.mode) {
					case "push":
						a.particles.move.enable ? a.fn.modes.pushParticles(a.interactivity.modes.push.particles_nb, a.interactivity.mouse) : 1 == a.interactivity.modes.push.particles_nb ? a.fn.modes.pushParticles(a.interactivity.modes.push.particles_nb, a.interactivity.mouse) : a.interactivity.modes.push.particles_nb > 1 && a.fn.modes.pushParticles(a.interactivity.modes.push.particles_nb);
						break;
					case "remove":
						a.fn.modes.removeParticles(a.interactivity.modes.remove.particles_nb);
						break;
					case "bubble":
						a.tmp.bubble_clicking = !0;
						break;
					case "repulse":
						a.tmp.repulse_clicking = !0, a.tmp.repulse_count = 0, a.tmp.repulse_finish = !1, setTimeout(function() {
							a.tmp.repulse_clicking = !1
						}, 1e3 * a.interactivity.modes.repulse.duration)
					}
				})
			}, a.fn.vendors.densityAutoParticles = function() {
				if (a.particles.number.density.enable) {
					var t = a.canvas.el.width * a.canvas.el.height / 1e3;
					a.tmp.retina && (t /= 2 * a.canvas.pxratio);
					var e = t * a.particles.number.value / a.particles.number.density.value_area,
						i = a.particles.array.length - e;
					i < 0 ? a.fn.modes.pushParticles(Math.abs(i)) : a.fn.modes.removeParticles(i)
				}
			}, a.fn.vendors.checkOverlap = function(t, e) {
				for (var i = 0; i < a.particles.array.length; i++) {
					var s = a.particles.array[i],
						n = t.x - s.x,
						r = t.y - s.y;
					Math.sqrt(n * n + r * r) <= t.radius + s.radius && (t.x = e ? e.x : Math.random() * a.canvas.w, t.y = e ? e.y : Math.random() * a.canvas.h, a.fn.vendors.checkOverlap(t))
				}
			}, a.fn.vendors.createSvgImg = function(t) {
				var e = a.tmp.source_svg,
					i = /#([0-9A-F]{3,6})/gi,
					s = e.replace(i, function(e, i, s, n) {
						if (t.color.rgb) var r = "rgba(" + t.color.rgb.r + "," + t.color.rgb.g + "," + t.color.rgb.b + "," + t.opacity + ")";
						else var r = "hsla(" + t.color.hsl.h + "," + t.color.hsl.s + "%," + t.color.hsl.l + "%," + t.opacity + ")";
						return r
					}),
					n = new Blob([s], {
						type: "image/svg+xml;charset=utf-8"
					}),
					r = window.URL || window.webkitURL || window,
					o = r.createObjectURL(n),
					l = new Image;
				l.addEventListener("load", function() {
					t.img.obj = l, t.img.loaded = !0, r.revokeObjectURL(o), a.tmp.count_svg++
				}), l.src = o
			}, a.fn.vendors.destroypJS = function() {
				cancelAnimationFrame(a.fn.drawAnimFrame), r.remove(), pJSDom = null
			}, a.fn.vendors.drawShape = function(t, e, i, s, n, r) {
				var a = n * r,
					o = n / r,
					l = 180 * (o - 2) / o,
					c = Math.PI - Math.PI * l / 180;
				t.save(), t.beginPath(), t.translate(e, i), t.moveTo(0, 0);
				for (var h = 0; h < a; h++) t.lineTo(s, 0), t.translate(s, 0), t.rotate(c);
				t.fill(), t.restore()
			}, a.fn.vendors.exportImg = function() {
				window.open(a.canvas.el.toDataURL("image/png"), "_blank")
			}, a.fn.vendors.loadImg = function(t) {
				if (a.tmp.img_error = void 0, "" != a.particles.shape.image.src) if ("svg" == t) {
					var e = new XMLHttpRequest;
					e.open("GET", a.particles.shape.image.src), e.onreadystatechange = function(t) {
						4 == e.readyState && (200 == e.status ? (a.tmp.source_svg = t.currentTarget.response, a.fn.vendors.checkBeforeDraw()) : (console.log("Error pJS - Image not found"), a.tmp.img_error = !0))
					}, e.send()
				} else {
					var i = new Image;
					i.addEventListener("load", function() {
						a.tmp.img_obj = i, a.fn.vendors.checkBeforeDraw()
					}), i.src = a.particles.shape.image.src
				} else console.log("Error pJS - No image.src"), a.tmp.img_error = !0
			}, a.fn.vendors.draw = function() {
				"image" == a.particles.shape.type ? "svg" == a.tmp.img_type ? a.tmp.count_svg >= a.particles.number.value ? (a.fn.particlesDraw(), a.particles.move.enable ? a.fn.drawAnimFrame = requestAnimFrame(a.fn.vendors.draw) : cancelRequestAnimFrame(a.fn.drawAnimFrame)) : a.tmp.img_error || (a.fn.drawAnimFrame = requestAnimFrame(a.fn.vendors.draw)) : void 0 != a.tmp.img_obj ? (a.fn.particlesDraw(), a.particles.move.enable ? a.fn.drawAnimFrame = requestAnimFrame(a.fn.vendors.draw) : cancelRequestAnimFrame(a.fn.drawAnimFrame)) : a.tmp.img_error || (a.fn.drawAnimFrame = requestAnimFrame(a.fn.vendors.draw)) : (a.fn.particlesDraw(), a.particles.move.enable ? a.fn.drawAnimFrame = requestAnimFrame(a.fn.vendors.draw) : cancelRequestAnimFrame(a.fn.drawAnimFrame))
			}, a.fn.vendors.checkBeforeDraw = function() {
				"image" == a.particles.shape.type ? "svg" == a.tmp.img_type && void 0 == a.tmp.source_svg ? a.tmp.checkAnimFrame = requestAnimFrame(check) : (cancelRequestAnimFrame(a.tmp.checkAnimFrame), a.tmp.img_error || (a.fn.vendors.init(), a.fn.vendors.draw())) : (a.fn.vendors.init(), a.fn.vendors.draw())
			}, a.fn.vendors.init = function() {
				a.fn.retinaInit(), a.fn.canvasInit(), a.fn.canvasSize(), a.fn.canvasPaint(), a.fn.particlesCreate(), a.fn.vendors.densityAutoParticles(), a.particles.line_linked.color_rgb_line = i(a.particles.line_linked.color)
			}, a.fn.vendors.start = function() {
				n("image", a.particles.shape.type) ? (a.tmp.img_type = a.particles.shape.image.src.substr(a.particles.shape.image.src.length - 3), a.fn.vendors.loadImg(a.tmp.img_type)) : a.fn.vendors.checkBeforeDraw()
			}, a.fn.vendors.eventsListeners(), a.fn.vendors.start()
		};
	Object.deepExtend = function(t, e) {
		for (var i in e) e[i] && e[i].constructor && e[i].constructor === Object ? (t[i] = t[i] || {}, arguments.callee(t[i], e[i])) : t[i] = e[i];
		return t
	}, window.requestAnimFrame = function() {
		return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame ||
		function(t) {
			window.setTimeout(t, 1e3 / 60)
		}
	}(), window.cancelRequestAnimFrame = function() {
		return window.cancelAnimationFrame || window.webkitCancelRequestAnimationFrame || window.mozCancelRequestAnimationFrame || window.oCancelRequestAnimationFrame || window.msCancelRequestAnimationFrame || clearTimeout
	}(), window.pJSDom = [], window.particlesJS = function(t, e) {
		"string" != typeof t && (e = t, t = "particles-js"), t || (t = "particles-js");
		var i = document.getElementById(t),
			s = i.getElementsByClassName("particles-js-canvas-el");
		if (s.length) for (; s.length > 0;) i.removeChild(s[0]);
		var n = document.createElement("canvas");
		n.className = "particles-js-canvas-el", n.style.width = "100%", n.style.height = "100%", null != document.getElementById(t).appendChild(n) && pJSDom.push(new r(t, e))
	}, window.particlesJS.load = function(t, e, i) {
		var s = new XMLHttpRequest;
		s.open("GET", e), s.onreadystatechange = function(e) {
			if (4 == s.readyState) if (200 == s.status) {
				var n = JSON.parse(e.currentTarget.response);
				window.particlesJS(t, n), i && i()
			} else console.log("Error pJS - XMLHttpRequest status: " + s.status), console.log("Error pJS - File config not found")
		}, s.send()
	}
}, function(t, e, i) {
	var s = i(0);
	t.exports = function(t, e, i) {
		return void 0 === i ? s(t, e, !1) : s(t, i, !1 !== e)
	}
}, function(t, e) {
	var i;
	i = function() {
		return this
	}();
	try {
		i = i || Function("return this")() || (0, eval)("this")
	} catch (t) {
		"object" == typeof window && (i = window)
	}
	t.exports = i
}, function(t, e, i) {
	"use strict";
	var s = i(3),
		n = function(t) {
			return t && t.__esModule ? t : {
			default:
				t
			}
		}(s),
		r = i(33),
		a = window.$;
	(0, n.
default)(a);
	var o = {
		getCurrentIndex: function() {
			var t = {
				"about-us": 5,
				"join-us": 5,
				news: 4,
				product: 1,
				solution: 2
			},
				e = 0;
			for (var i in t) if (window.location.pathname.indexOf(i) >= 0 && t[i]) {
				e = t[i];
				break
			}
			return 0 === e && window.location.hash.indexOf("cases") >= 0 && (e = 3), e
		},
		init: function() {
			this.currentIndex = this.getCurrentIndex(), this.cursor = a("#navbar-nav .cur"), this.lis = a("#navbar-nav > ul > li"), this.initComponent(!0), this.cursor.show(), 0 === this.currentIndex && this.hashchange(), this.hover(), a(window).on("resize", (0, r.debounce)(500, !1, this.resize.bind(this)))
		},
		initComponent: function(t) {
			this.current = this.lis.eq(this.currentIndex), this.lis.removeClass("current").eq(this.currentIndex).addClass("current"), this.position(null, t)
		},
		setCurrentIndex: function(t) {
			this.currentIndex = t, this.initComponent()
		},
		hover: function() {
			var t = this;
			this.cursor.position().left;
			this.lis.hover(function() {
				t.position(a(this)), t.popup(a(this))
			}, function() {
				t.position(t.current), t.popdown(a(this))
			})
		},
		popup: function(t) {
			var e = t.children("nav"),
				i = t.children("a"),
				s = t.find("ul.multi-list"),
				n = i.outerWidth();
			i.attr("data-min-width") && (n = Math.max(n, +i.attr("data-min-width"))), e.length > 0 && (e.css({
				width: n + "px",
				marginLeft: -i.outerWidth() / 2 + "px"
			}).show().transition({
				opacity: 1,
				duration: 200,
				easing: "linear"
			}), t.addClass("active"), s.length > 0 && s.css({
				width: n + "px",
				right: -n + "px"
			}))
		},
		popdown: function(t) {
			var e = t.children("nav");
			t.children("a");
			e.length > 0 && (e.hide().transition({
				opacity: 0,
				duration: 200,
				easing: "linear"
			}), t.removeClass("active"))
		},
		resize: function() {
			this.position(), this.positionHeader()
		},
		position: function(t, e) {
			if (t = t || this.current, t.length > 0) {
				var i = t.children("a");
				this.cursor.css("width", i.outerWidth());
				var s = t.position().left + (t.outerWidth() - i.outerWidth()) / 2;
				if (e) this.cursor.css("left", s + "px");
				else {
					this.cursor.stop().animate({
						left: s
					}, 200, "linear")
				}
			}
		},
		hashchange: function() {
			var t = this;
			a(window).on("hashchange", function() {
				location.hash.indexOf("cases") >= 0 && (t.currentIndex = 0, t.initComponent())
			})
		},
		positionHeader: function() {
			var t = a("#navbar-nav");
			0 !== parseInt(t.css("bottom")) && t.css("bottom", window.innerHeight - 50)
		}
	};
	t.exports = o
}, , , , , function(t, e, i) {
	"use strict";

	function s(t) {
		return t && t.__esModule ? t : {
		default:
			t
		}
	}
	function n() {
		w ? (g("body").removeClass("loading"), g("[data-section=loadcontent]").show(), setTimeout(o.bind(this, !0))) : g("[data-section=loading]").css({
			opacity: 1
		}).transition({
			opacity: 0,
			duration: 400,
			easing: "linear",
			complete: function() {
				g("body").removeClass("loading"), g("[data-section=loadcontent]").css({
					opacity: 0
				}).show().transition({
					opacity: 1,
					duration: 600,
					easing: "ease",
					complete: function() {
						m.
					default.position(null, !0)
					}
				})
			}
		})
	}
	function r() {
		g("footer #scrollTop").click(function() {
			g.fn.fullpage.moveTo(T.HOME), b.removeClass(""), m.
		default.setCurrentIndex(0)
		})
	}
	function a() {
		var t = (g("#navbar-nav"), !0);
		y.fullpage({
			css3: !0,
			scrollOverflow: !0,
			scrollingSpeed: 1200,
			touchSensitivity: 3,
			bigSectionsDestination: "top",
			fitToSection: !1,
			fadingEffect: !0,
			onLeave: function(t, e) {
				t === T.SOLUTION - 1 && e === T.SOLUTION ? x.slideDownIn() : t === T.SOLUTION + 1 && e === T.SOLUTION && x.slideUpIn(), t === T.PRODUCT - 1 && e === T.PRODUCT ? x.funcSlideDownIn() : t === T.PRODUCT + 1 && e === T.PRODUCT && x.funcSlideUpIn(), t === T.CASE - 1 && e === T.CASE ? (b.addClass(""), x.casesTransit(), m.
			default.setCurrentIndex(3), window.location.hash = "cases") : t === T.CASE && e === T.CASE - 1 && (b.removeClass(""), m.
			default.setCurrentIndex(0), window.location.hash = "")
			},
			afterLoad: function(e, i) {
				i === T.CASE && t && (t = !1, g.fn.fullpage.reBuild())
			},
			afterReBuild: function() {
				t = !0
			},
			afterRender: function() {
				3 === m.
			default.getCurrentIndex() && setTimeout(function() {
					o(), m.
				default.position(null, !0)
				})
			}
		})
	}
	function o(t) {
		(t ? g.fn.fullpage.silentMoveTo : g.fn.fullpage.moveTo)(T.CASE), b.addClass(""), x.casesTransit()
	}
	function l() {
		g(".cs-block").hover(function() {
			g(this).removeClass("mouseleave")
		}, function() {
			g(this).addClass("mouseleave")
		})
	}
	var c = i(3),
		h = s(c),
		u = i(25),
		p = s(u),
		f = i(28),
		d = s(f),
		_ = i(12),
		m = s(_),
		v = i(2),
		g = (s(v), window.$);
	(0, h.
default)(g);
	var y = (i(0), void 0),
		b = void 0,
		x = void 0,
		w = -1 !== window.location.hash.indexOf("cases"),
		T = {
			HOME: 1,
			PRODUCT: 2,
			SOLUTION: 3,
			CASE: 4
		};
	t.exports = function() {
		p.
	default.init(), y = g("[data-section=fullpage]"), b = g("header"), w || g("[data-section=loading] .loading-inner").addClass("safari"), g(function() {
			x = new d.
		default, g(window).on("hashchange", function() {
				location.hash.indexOf("cases") >= 0 && o()
			}), g(".arrow-down").on("click", function() {
				g.fn.fullpage.moveSectionDown()
			}), r(), setTimeout(function() {
				n(), a(), l()
			}, w ? 0 : 2e3)
		})
	}
}, function(t, e, i) {
	"use strict";
	t.exports = i(27)
}, function(t, e, i) {
	"use strict";

	function s(t) {
		t.each(function() {
			var t, e = a(this),
				i = e.attr("data-scroll"),
				s = document.body.scrollTop,
				n = e.offset().top;
			t = "start" === i ? n + e.height() - c >= s ? l * s / (n + e.height() - c) : l : s < n - window.innerHeight ? 0 : s > n + e.height() - c ? l : l * s / (n + e.height() - c), e.css("background-position-y", t + "px")
		})
	}
	var n = i(3),
		r = function(t) {
			return t && t.__esModule ? t : {
			default:
				t
			}
		}(n),
		a = window.$;
	(0, r.
default)(a);
	var o = i(0),
		l = -20,
		c = 50;
	t.exports = function() {
		var t = a("[data-scroll]");
		if (a(window).on("scroll", o(20, !0, s.bind(this, t))), "" !== window.location.hash) {
			var e = a("#" + window.location.hash);
			e.length > 0 && a(document.body).transition({
				scrollTop: e.offset().top - 120
			}, 500)
		}
	}
}, , , function(t, e, i) {
	"use strict";
	i(8)
}, , , function(t, e, i) {
	"use strict";

	function s() {
		a("bgAnimation", {
			particles: {
				number: {
					value: 120,
					density: {
						enable: !0,
						value_area: 2e3
					}
				},
				color: {
					value: ["#3466A7"]
				},
				shape: {
					type: "circle",
					stroke: {
						width: 0,
						color: "#3466A7"
					},
					polygon: {
						nb_sides: 5
					}
				},
				opacity: {
					value: .6,
					random: !1,
					anim: {
						enable: !1,
						speed: 1,
						opacity_min: .1,
						sync: !1
					}
				},
				size: {
					value: 2.5,
					random: !0,
					anim: {
						enable: !1,
						speed: 40,
						size_min: .3,
						sync: !1
					}
				},
				line_linked: {
					enable: !0,
					distance: 150,
					color: "#3466A7",
					opacity: .3,
					width: 1
				}
			},
			interactivity: {
				detect_on: "canvas",
				events: {
					onhover: {
						enable: !1
					},
					onclick: {
						enable: !1
					},
					resize: !0
				}
			},
			retina_detect: !1
		})
	}
	function n(t) {
		function e(t) {
			var e = 0,
				i = 0;
			t.pageX || t.pageY ? (e = t.pageX, i = t.pageY) : (t.clientX || t.clientY) && (e = t.clientX + document.body.scrollLeft + document.documentElement.scrollLeft, i = t.clientY + document.body.scrollTop + document.documentElement.scrollTop), _.x = e, _.y = i
		}
		function i() {
			m = !(document.body.scrollTop > p)
		}
		function s() {
			u = t.width, p = t.height
		}
		function n() {
			if (o) for (var t = 0, e = d.length; t < e; t++) {
				var i = Math.abs(h(_, d[t]));
				i < 2e3 ? (d[t].active = .4, d[t].circle.active = .8) : i < 1e4 ? (d[t].active = .2, d[t].circle.active = .4) : i < 2e4 ? (d[t].active = .05, d[t].circle.active = .2) : (d[t].active = 0, d[t].circle.active = 0), l(d[t]), d[t].circle.draw()
			}
			requestAnimationFrame(n)
		}
		function a(t) {
			r.TweenLite.to(t, 1 + 1 * Math.random(), {
				x: t.originX - 50 + 100 * Math.random(),
				y: t.originY - 50 + 100 * Math.random(),
				ease: Circ.easeInOut,
				onComplete: function() {
					a(t)
				}
			})
		}
		function l(t) {
			if (t.active) for (var e in t.closest) f.beginPath(), f.moveTo(t.x, t.y), f.lineTo(t.closest[e].x, t.closest[e].y), f.strokeStyle = "rgba(52, 102, 167," + t.active + ")", f.stroke()
		}
		function c(t, e, i) {
			var s = this;
			!
			function() {
				s.pos = t || null, s.radius = e || null, s.color = i || null
			}(), this.draw = function() {
				s.active && (f.beginPath(), f.arc(s.pos.x, s.pos.y, s.radius, 0, 2 * Math.PI, !1), f.fillStyle = "rgba(52, 102, 167," + s.active + ")", f.fill())
			}
		}
		function h(t, e) {
			return Math.pow(t.x - e.x, 2) + Math.pow(t.y - e.y, 2)
		}
		if (t) {
			var u, p, t, f, d, _, m = !0;
			!
			function() {
				u = t.width, p = t.height, _ = {
					x: u / 2,
					y: p / 2
				}, f = t.getContext("2d"), d = [];
				for (var e, i, s, n = 0; n < u; n += u / 16) for (var r = 0; r < p; r += p / 16) e = n + Math.random() * u / 16, i = r + Math.random() * p / 16, s = {
					x: e,
					originX: e,
					y: i,
					originY: i
				}, d.push(s);
				for (var a = 0; a < d.length; a++) {
					for (var o = [], l = d[a], m = 0; m < d.length; m++) {
						var v = d[m];
						if (l != v) {
							for (var g = !1, y = 0; y < 4; y++) g || void 0 == o[y] && (o[y] = v, g = !0);
							for (var y = 0; y < 4; y++) g || h(l, v) < h(l, o[y]) && (o[y] = v, g = !0)
						}
					}
					l.closest = o
				}
				for (var a in d) {
					var b = new c(d[a], 1 + 2 * Math.random(), "rgba(255,255,255,0.8)");
					d[a].circle = b
				}
			}(), function() {
				n();
				for (var t = 0, e = d.length; t < e; t++) a(d[t])
			}(), function() {
				"ontouchstart" in window || window.addEventListener("mousemove", e), window.addEventListener("scroll", i), window.addEventListener("resize", s)
			}()
		}
	}
	var r = i(30);
	i(9);
	var a = window.particlesJS,
		o = !1;
	t.exports = {
		init: function() {
			s(), o = !0, window.pJSDom[0].pJS && n(window.pJSDom[0].pJS.canvas.el)
		},
		stop: function() {
			o && (window.pJSDom[0].pJS && (cancelRequestAnimFrame(pJSDom[0].pJS.fn.checkAnimFrame), cancelRequestAnimFrame(pJSDom[0].pJS.fn.drawAnimFrame), pJSDom[0].pJS.fn.particlesEmpty(), pJSDom[0].pJS.fn.canvasClear()), o = !1)
		},
		restart: function() {
			o || (window.pJSDom[0].pJS && pJSDom[0].pJS.fn.vendors.start(), o = !0)
		}
	}
}, , function(t, e, i) {
	"use strict";

	function s(t) {
		return t.replace(/\.([^\.]+)$/g, function(t) {
			return "-thumb" + t
		})
	}
	var n = i(1),
		r = window.news || [],
		a = parseInt(window.newsPageSize, 10) || 5,
		o = Math.ceil(r.length / a),
		l = function(t) {
			function e(t) {
				var e = '<div class="news-thumb" \n                         style="background-image: url(' + s(t.thumb) + ')" \n                         data-bg-src="' + t.thumb + '">\n                      </div>';
				return '<li>\n                    <a href="/news/' + t.key + '">\n                      <div class="clearfix">\n                        ' + e + '\n                        <div class="news-content">\n                          <div class="content">\n                            <h2 class="text-wrap">' + t.title + '</h2>\n                            <p class="subtitle">\n                              ' + (t.date ? t.date + "&nbsp;&nbsp;" : "") + "\n                              " + (t.source ? "鏉ユ簮锛�" + t.source + "&nbsp;&nbsp;&nbsp;" : "") + "\n                              " + (t.author ? "浣滆€咃細" + t.author + "&nbsp;&nbsp;&nbsp;" : "") + '\n                            </p>\n                            <p class="description">' + t.description + "</p>\n\t\t\t\t\t\t </div>\n\t\t\t\t\t   </div>\n                      </div>\n                    </a>\n                  </li>"
			}
			var i = r.slice((t - 1) * a, t * a);
			document.getElementById("newslist").innerHTML = "<ul>" + i.map(e).join("") + "</ul>", n()
		},
		c = {
			code: "",
			Extend: function(t) {
				t = t || {}, c.size = t.size || 300, c.page = t.page || 1, c.step = t.step || 3
			},
			Add: function(t, e) {
				for (var i = t; i < e; i++) c.code += "<a>" + i + "</a>"
			},
			Last: function() {
				c.code += "<i>...</i><a>" + c.size + "</a>"
			},
			First: function() {
				c.code += "<a>1</a><i>...</i>"
			},
			Click: function() {
				c.page = +this.innerHTML, l(c.page), c.Start()
			},
			Prev: function() {
				c.page--, c.page < 1 && (c.page = 1), l(c.page), c.Start()
			},
			Next: function() {
				c.page++, c.page > c.size && (c.page = c.size), l(c.page), c.Start()
			},
			Bind: function() {
				for (var t = c.e.getElementsByTagName("a"), e = 0; e < t.length; e++) + t[e].innerHTML === c.page && (t[e].className = "current"), t[e].addEventListener("click", c.Click, !1)
			},
			Finish: function() {
				c.e.innerHTML = c.code, c.code = "", c.Bind()
			},
			Start: function() {
				c.size < 2 * c.step + 6 ? c.Add(1, c.size + 1) : c.page < 2 * c.step + 1 ? (c.Add(1, 2 * c.step + 4), c.Last()) : c.page > c.size - 2 * c.step ? (c.First(), c.Add(c.size - 2 * c.step - 2, c.size + 1)) : (c.First(), c.Add(c.page - c.step, c.page + c.step + 1), c.Last()), c.Finish()
			},
			Buttons: function(t) {
				var e = t.getElementsByTagName("a");
				e[0].addEventListener("click", c.Prev, !1), e[1].addEventListener("click", c.Next, !1)
			},
			Create: function(t) {
				var e = ['<a class="prev">&lt;</a>', "<span></span>", '<a clsas="next">&gt;</a>'];
				t.innerHTML = e.join(""), c.e = t.getElementsByTagName("span")[0], c.Buttons(t)
			},
			Init: function(t, e) {
				t && (c.Extend(e), c.Create(t), c.Start())
			}
		};
	t.exports = function() {
		c.Init(document.getElementById("pagination"), {
			size: o,
			page: 1,
			step: 2
		})
	}
}, function(t, e, i) {
	"use strict";

	function s(t, e) {
		if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
	}
	Object.defineProperty(e, "__esModule", {
		value: !0
	});
	var n = function() {
			function t(t, e) {
				for (var i = 0; i < e.length; i++) {
					var s = e[i];
					s.enumerable = s.enumerable || !1, s.configurable = !0, "value" in s && (s.writable = !0), Object.defineProperty(t, s.key, s)
				}
			}
			return function(e, i, s) {
				return i && t(e.prototype, i), s && t(e, s), e
			}
		}(),
		r = i(3),
		a = function(t) {
			return t && t.__esModule ? t : {
			default:
				t
			}
		}(r),
		o = window.$;
	(0, a.
default)(o);
	var l = "cubic-bezier(0.25, 0.1, 0.25, 1)",
		c = function() {
			function t() {
				s(this, t), this.prdBlocks = o(".prds .prd-block"), this.prdMainTitle = o(".prds .prds-title .main"), this.prdBgTitle = o(".prds .prds-title .bg"), this.animating = [], this.hover(), this.funcBlocks = o(".funcs .func-block"), this.funcTitle = o(".funcs .funcs-title"), this.funcMainTitle = o(".funcs .funcs-title .main"), this.funcBgTitle = o(".funcs .funcs-title .bg"), this.funcHover(), this.csBlocks = o(".cases [data-transit]")
			}
			return n(t, [{
				key: "hover",
				value: function() {
					var t = this;
					this.prdBlocks.hover(function() {
						t.shakeUp(o(this))
					}, function() {
						t.shakeDown(o(this))
					})
				}
			}, {
				key: "funcHover",
				value: function() {
					var t = this,
						e = this.funcTitle.outerWidth();
					this.funcBlocks.hover(function() {
						t.funcTitle.css("width", 1.1 * e + "px")
					}, function() {
						t.funcTitle.css("width", "")
					})
				}
			}, {
				key: "slideDownIn",
				value: function() {
					var t = {
						y: 500
					},
						e = {
							y: 0
						};
					this.animate(this.prdBlocks.add(this.prdMainTitle).add(this.prdBgTitle), t, e)
				}
			}, {
				key: "slideUpIn",
				value: function() {
					var t = {
						y: -500
					},
						e = {
							y: 0
						};
					this.animate(this.prdBlocks.add(this.prdMainTitle).add(this.prdBgTitle), t, e)
				}
			}, {
				key: "funcSlideDownIn",
				value: function() {
					var t = {
						y: 500
					},
						e = {
							y: 0
						};
					this.animate(this.funcBlocks.add(this.funcMainTitle).add(this.funcBgTitle), t, e)
				}
			}, {
				key: "funcSlideUpIn",
				value: function() {
					var t = {
						y: -500
					},
						e = {
							y: 0
						};
					this.animate(this.funcBlocks.add(this.funcMainTitle).add(this.funcBgTitle), t, e)
				}
			}, {
				key: "shakeDown",
				value: function(t) {
					var e = parseInt(t.attr("data-index"), 10),
						i = {
							y: -12
						},
						s = {
							y: 0
						},
						n = {
							y: -12,
							scale: 1.2
						},
						r = {
							y: 0,
							scale: 1
						};
					t.removeClass("hovered"), this.shake(i, s, 0, e, n, r, "down")
				}
			}, {
				key: "shakeUp",
				value: function(t) {
					var e = parseInt(t.attr("data-index"), 10),
						i = {
							y: 0
						},
						s = {
							y: -12
						},
						n = {
							y: 0,
							scale: 1
						},
						r = {
							y: -12,
							scale: 1.2
						};
					t.addClass("hovered"), this.shake(i, s, 0, e, n, r, "up")
				}
			}, {
				key: "casesTransit",
				value: function() {
					this.csBlocks.css({
						y: 30
					}), this.csBlocks.each(function() {
						var t = parseInt(o(this).attr("data-transit"), 10) || 0;
						o(this).transition({
							y: 0,
							duration: 600,
							delay: 50 + t
						})
					})
				}
			}, {
				key: "animate",
				value: function(t, e, i) {
					t.each(function(t, s) {
						o(s).css(e);
						var n = parseInt(o(s).attr("data-delay"), 10),
							r = parseInt(o(s).attr("data-duration"), 10);
						o(s).transition(o.extend({}, i, {
							duration: r,
							easing: l,
							delay: n
						}))
					})
				}
			}, {
				key: "shake",
				value: function(t, e, i, s, n, r, a) {
					for (var o, c, h = this, u = this, p = 0; p < 5; p++)!
					function(a) {
						a === s ? (o = n, c = r) : (o = t, c = e), h.animating[a] ? h.prdBlocks.stop(!0) : (h.prdBlocks.eq(a).css(o), h.animating[a] = !0), h.prdBlocks.eq(a).transition(Object.assign(c, {
							duration: 400,
							easing: l,
							delay: i,
							complete: function() {
								u.animating[a] = !1
							}
						}))
					}(p);
					this.animating[5] ? this.prdMainTitle.stop(!0) : (this.prdMainTitle.css(t), this.animating[5] = !0), this.prdMainTitle.transition(Object.assign(e, {
						duration: 400,
						easing: l,
						delay: i,
						complete: function() {
							u.animating[5] = !1
						}
					})), this.animating[6] ? this.prdBgTitle.stop(!0) : (this.prdBgTitle.css(t), this.animating[6] = !0), this.prdBgTitle.transition(Object.assign(e, {
						duration: 450,
						easing: l,
						delay: i,
						complete: function() {
							u.animating[6] = !1
						}
					}))
				}
			}]), t
		}();
	e.
default = c
}, , function(t, e, i) {
	(function(i) {
		var s, n, r = void 0 !== t && t.exports && void 0 !== i ? i : this || window;
		(r._gsQueue || (r._gsQueue = [])).push(function() {
			"use strict";
			r._gsDefine("TweenMax", ["core.Animation", "core.SimpleTimeline", "TweenLite"], function(t, e, i) {
				var s = function(t) {
						var e, i = [],
							s = t.length;
						for (e = 0; e !== s; i.push(t[e++]));
						return i
					},
					n = function(t, e, i) {
						var s, n, r = t.cycle;
						for (s in r) n = r[s], t[s] = "function" == typeof n ? n(i, e[i]) : n[i % n.length];
						delete t.cycle
					},
					r = function(t, e, s) {
						i.call(this, t, e, s), this._cycle = 0, this._yoyo = !0 === this.vars.yoyo || !! this.vars.yoyoEase, this._repeat = this.vars.repeat || 0, this._repeatDelay = this.vars.repeatDelay || 0, this._repeat && this._uncache(!0), this.render = r.prototype.render
					},
					a = i._internals,
					o = a.isSelector,
					l = a.isArray,
					c = r.prototype = i.to({}, .1, {}),
					h = [];
				r.version = "1.20.4", c.constructor = r, c.kill()._gc = !1, r.killTweensOf = r.killDelayedCallsTo = i.killTweensOf, r.getTweensOf = i.getTweensOf, r.lagSmoothing = i.lagSmoothing, r.ticker = i.ticker, r.render = i.render, c.invalidate = function() {
					return this._yoyo = !0 === this.vars.yoyo || !! this.vars.yoyoEase, this._repeat = this.vars.repeat || 0, this._repeatDelay = this.vars.repeatDelay || 0, this._yoyoEase = null, this._uncache(!0), i.prototype.invalidate.call(this)
				}, c.updateTo = function(t, e) {
					var s, n = this.ratio,
						r = this.vars.immediateRender || t.immediateRender;
					e && this._startTime < this._timeline._time && (this._startTime = this._timeline._time, this._uncache(!1), this._gc ? this._enabled(!0, !1) : this._timeline.insert(this, this._startTime - this._delay));
					for (s in t) this.vars[s] = t[s];
					if (this._initted || r) if (e) this._initted = !1, r && this.render(0, !0, !0);
					else if (this._gc && this._enabled(!0, !1), this._notifyPluginsOfEnabled && this._firstPT && i._onPluginEvent("_onDisable", this), this._time / this._duration > .998) {
						var a = this._totalTime;
						this.render(0, !0, !1), this._initted = !1, this.render(a, !0, !1)
					} else if (this._initted = !1, this._init(), this._time > 0 || r) for (var o, l = 1 / (1 - n), c = this._firstPT; c;) o = c.s + c.c, c.c *= l, c.s = o - c.c, c = c._next;
					return this
				}, c.render = function(t, e, s) {
					this._initted || 0 === this._duration && this.vars.repeat && this.invalidate();
					var n, r, o, l, c, h, u, p, f, d = this._dirty ? this.totalDuration() : this._totalDuration,
						_ = this._time,
						m = this._totalTime,
						v = this._cycle,
						g = this._duration,
						y = this._rawPrevTime;
					if (t >= d - 1e-7 && t >= 0 ? (this._totalTime = d, this._cycle = this._repeat, this._yoyo && 0 != (1 & this._cycle) ? (this._time = 0, this.ratio = this._ease._calcEnd ? this._ease.getRatio(0) : 0) : (this._time = g, this.ratio = this._ease._calcEnd ? this._ease.getRatio(1) : 1), this._reversed || (n = !0, r = "onComplete", s = s || this._timeline.autoRemoveChildren), 0 === g && (this._initted || !this.vars.lazy || s) && (this._startTime === this._timeline._duration && (t = 0), (y < 0 || t <= 0 && t >= -1e-7 || 1e-10 === y && "isPause" !== this.data) && y !== t && (s = !0, y > 1e-10 && (r = "onReverseComplete")), this._rawPrevTime = p = !e || t || y === t ? t : 1e-10)) : t < 1e-7 ? (this._totalTime = this._time = this._cycle = 0, this.ratio = this._ease._calcEnd ? this._ease.getRatio(0) : 0, (0 !== m || 0 === g && y > 0) && (r = "onReverseComplete", n = this._reversed), t < 0 && (this._active = !1, 0 === g && (this._initted || !this.vars.lazy || s) && (y >= 0 && (s = !0), this._rawPrevTime = p = !e || t || y === t ? t : 1e-10)), this._initted || (s = !0)) : (this._totalTime = this._time = t, 0 !== this._repeat && (l = g + this._repeatDelay, this._cycle = this._totalTime / l >> 0, 0 !== this._cycle && this._cycle === this._totalTime / l && m <= t && this._cycle--, this._time = this._totalTime - this._cycle * l, this._yoyo && 0 != (1 & this._cycle) && (this._time = g - this._time, (f = this._yoyoEase || this.vars.yoyoEase) && (this._yoyoEase || (!0 !== f || this._initted ? this._yoyoEase = f = !0 === f ? this._ease : f instanceof Ease ? f : Ease.map[f] : (f = this.vars.ease, this._yoyoEase = f = f ? f instanceof Ease ? f : "function" == typeof f ? new Ease(f, this.vars.easeParams) : Ease.map[f] || i.defaultEase : i.defaultEase)), this.ratio = f ? 1 - f.getRatio((g - this._time) / g) : 0)), this._time > g ? this._time = g : this._time < 0 && (this._time = 0)), this._easeType && !f ? (c = this._time / g, h = this._easeType, u = this._easePower, (1 === h || 3 === h && c >= .5) && (c = 1 - c), 3 === h && (c *= 2), 1 === u ? c *= c : 2 === u ? c *= c * c : 3 === u ? c *= c * c * c : 4 === u && (c *= c * c * c * c), 1 === h ? this.ratio = 1 - c : 2 === h ? this.ratio = c : this._time / g < .5 ? this.ratio = c / 2 : this.ratio = 1 - c / 2) : f || (this.ratio = this._ease.getRatio(this._time / g))), _ === this._time && !s && v === this._cycle) return void(m !== this._totalTime && this._onUpdate && (e || this._callback("onUpdate")));
					if (!this._initted) {
						if (this._init(), !this._initted || this._gc) return;
						if (!s && this._firstPT && (!1 !== this.vars.lazy && this._duration || this.vars.lazy && !this._duration)) return this._time = _, this._totalTime = m, this._rawPrevTime = y, this._cycle = v, a.lazyTweens.push(this), void(this._lazy = [t, e]);
						!this._time || n || f ? n && this._ease._calcEnd && !f && (this.ratio = this._ease.getRatio(0 === this._time ? 0 : 1)) : this.ratio = this._ease.getRatio(this._time / g)
					}
					for (!1 !== this._lazy && (this._lazy = !1), this._active || !this._paused && this._time !== _ && t >= 0 && (this._active = !0), 0 === m && (2 === this._initted && t > 0 && this._init(), this._startAt && (t >= 0 ? this._startAt.render(t, !0, s) : r || (r = "_dummyGS")), this.vars.onStart && (0 === this._totalTime && 0 !== g || e || this._callback("onStart"))), o = this._firstPT; o;) o.f ? o.t[o.p](o.c * this.ratio + o.s) : o.t[o.p] = o.c * this.ratio + o.s, o = o._next;
					this._onUpdate && (t < 0 && this._startAt && this._startTime && this._startAt.render(t, !0, s), e || (this._totalTime !== m || r) && this._callback("onUpdate")), this._cycle !== v && (e || this._gc || this.vars.onRepeat && this._callback("onRepeat")), r && (this._gc && !s || (t < 0 && this._startAt && !this._onUpdate && this._startTime && this._startAt.render(t, !0, s), n && (this._timeline.autoRemoveChildren && this._enabled(!1, !1), this._active = !1), !e && this.vars[r] && this._callback(r), 0 === g && 1e-10 === this._rawPrevTime && 1e-10 !== p && (this._rawPrevTime = 0)))
				}, r.to = function(t, e, i) {
					return new r(t, e, i)
				}, r.from = function(t, e, i) {
					return i.runBackwards = !0, i.immediateRender = 0 != i.immediateRender, new r(t, e, i)
				}, r.fromTo = function(t, e, i, s) {
					return s.startAt = i, s.immediateRender = 0 != s.immediateRender && 0 != i.immediateRender, new r(t, e, s)
				}, r.staggerTo = r.allTo = function(t, e, a, c, u, p, f) {
					c = c || 0;
					var d, _, m, v, g = 0,
						y = [],
						b = function() {
							a.onComplete && a.onComplete.apply(a.onCompleteScope || this, arguments), u.apply(f || a.callbackScope || this, p || h)
						},
						x = a.cycle,
						w = a.startAt && a.startAt.cycle;
					for (l(t) || ("string" == typeof t && (t = i.selector(t) || t), o(t) && (t = s(t))), t = t || [], c < 0 && (t = s(t), t.reverse(), c *= -1), d = t.length - 1, m = 0; m <= d; m++) {
						_ = {};
						for (v in a) _[v] = a[v];
						if (x && (n(_, t, m), null != _.duration && (e = _.duration, delete _.duration)), w) {
							w = _.startAt = {};
							for (v in a.startAt) w[v] = a.startAt[v];
							n(_.startAt, t, m)
						}
						_.delay = g + (_.delay || 0), m === d && u && (_.onComplete = b), y[m] = new r(t[m], e, _), g += c
					}
					return y
				}, r.staggerFrom = r.allFrom = function(t, e, i, s, n, a, o) {
					return i.runBackwards = !0, i.immediateRender = 0 != i.immediateRender, r.staggerTo(t, e, i, s, n, a, o)
				}, r.staggerFromTo = r.allFromTo = function(t, e, i, s, n, a, o, l) {
					return s.startAt = i, s.immediateRender = 0 != s.immediateRender && 0 != i.immediateRender, r.staggerTo(t, e, s, n, a, o, l)
				}, r.delayedCall = function(t, e, i, s, n) {
					return new r(e, 0, {
						delay: t,
						onComplete: e,
						onCompleteParams: i,
						callbackScope: s,
						onReverseComplete: e,
						onReverseCompleteParams: i,
						immediateRender: !1,
						useFrames: n,
						overwrite: 0
					})
				}, r.set = function(t, e) {
					return new r(t, 0, e)
				}, r.isTweening = function(t) {
					return i.getTweensOf(t, !0).length > 0
				};
				var u = function(t, e) {
						for (var s = [], n = 0, r = t._first; r;) r instanceof i ? s[n++] = r : (e && (s[n++] = r), s = s.concat(u(r, e)), n = s.length), r = r._next;
						return s
					},
					p = r.getAllTweens = function(e) {
						return u(t._rootTimeline, e).concat(u(t._rootFramesTimeline, e))
					};
				r.killAll = function(t, i, s, n) {
					null == i && (i = !0), null == s && (s = !0);
					var r, a, o, l = p(0 != n),
						c = l.length,
						h = i && s && n;
					for (o = 0; o < c; o++) a = l[o], (h || a instanceof e || (r = a.target === a.vars.onComplete) && s || i && !r) && (t ? a.totalTime(a._reversed ? 0 : a.totalDuration()) : a._enabled(!1, !1))
				}, r.killChildTweensOf = function(t, e) {
					if (null != t) {
						var n, c, h, u, p, f = a.tweenLookup;
						if ("string" == typeof t && (t = i.selector(t) || t), o(t) && (t = s(t)), l(t)) for (u = t.length; --u > -1;) r.killChildTweensOf(t[u], e);
						else {
							n = [];
							for (h in f) for (c = f[h].target.parentNode; c;) c === t && (n = n.concat(f[h].tweens)), c = c.parentNode;
							for (p = n.length, u = 0; u < p; u++) e && n[u].totalTime(n[u].totalDuration()), n[u]._enabled(!1, !1)
						}
					}
				};
				var f = function(t, i, s, n) {
						i = !1 !== i, s = !1 !== s, n = !1 !== n;
						for (var r, a, o = p(n), l = i && s && n, c = o.length; --c > -1;) a = o[c], (l || a instanceof e || (r = a.target === a.vars.onComplete) && s || i && !r) && a.paused(t)
					};
				return r.pauseAll = function(t, e, i) {
					f(!0, t, e, i)
				}, r.resumeAll = function(t, e, i) {
					f(!1, t, e, i)
				}, r.globalTimeScale = function(e) {
					var s = t._rootTimeline,
						n = i.ticker.time;
					return arguments.length ? (e = e || 1e-10, s._startTime = n - (n - s._startTime) * s._timeScale / e, s = t._rootFramesTimeline, n = i.ticker.frame, s._startTime = n - (n - s._startTime) * s._timeScale / e, s._timeScale = t._rootTimeline._timeScale = e, e) : s._timeScale
				}, c.progress = function(t, e) {
					return arguments.length ? this.totalTime(this.duration() * (this._yoyo && 0 != (1 & this._cycle) ? 1 - t : t) + this._cycle * (this._duration + this._repeatDelay), e) : this._time / this.duration()
				}, c.totalProgress = function(t, e) {
					return arguments.length ? this.totalTime(this.totalDuration() * t, e) : this._totalTime / this.totalDuration()
				}, c.time = function(t, e) {
					return arguments.length ? (this._dirty && this.totalDuration(), t > this._duration && (t = this._duration), this._yoyo && 0 != (1 & this._cycle) ? t = this._duration - t + this._cycle * (this._duration + this._repeatDelay) : 0 !== this._repeat && (t += this._cycle * (this._duration + this._repeatDelay)), this.totalTime(t, e)) : this._time
				}, c.duration = function(e) {
					return arguments.length ? t.prototype.duration.call(this, e) : this._duration
				}, c.totalDuration = function(t) {
					return arguments.length ? -1 === this._repeat ? this : this.duration((t - this._repeat * this._repeatDelay) / (this._repeat + 1)) : (this._dirty && (this._totalDuration = -1 === this._repeat ? 999999999999 : this._duration * (this._repeat + 1) + this._repeatDelay * this._repeat, this._dirty = !1), this._totalDuration)
				}, c.repeat = function(t) {
					return arguments.length ? (this._repeat = t, this._uncache(!0)) : this._repeat
				}, c.repeatDelay = function(t) {
					return arguments.length ? (this._repeatDelay = t, this._uncache(!0)) : this._repeatDelay
				}, c.yoyo = function(t) {
					return arguments.length ? (this._yoyo = t, this) : this._yoyo
				}, r
			}, !0), r._gsDefine("TimelineLite", ["core.Animation", "core.SimpleTimeline", "TweenLite"], function(t, e, i) {
				var s = function(t) {
						e.call(this, t), this._labels = {}, this.autoRemoveChildren = !0 === this.vars.autoRemoveChildren, this.smoothChildTiming = !0 === this.vars.smoothChildTiming, this._sortChildren = !0, this._onUpdate = this.vars.onUpdate;
						var i, s, n = this.vars;
						for (s in n) i = n[s], l(i) && -1 !== i.join("").indexOf("{self}") && (n[s] = this._swapSelfInParams(i));
						l(n.tweens) && this.add(n.tweens, 0, n.align, n.stagger)
					},
					n = i._internals,
					a = s._internals = {},
					o = n.isSelector,
					l = n.isArray,
					c = n.lazyTweens,
					h = n.lazyRender,
					u = r._gsDefine.globals,
					p = function(t) {
						var e, i = {};
						for (e in t) i[e] = t[e];
						return i
					},
					f = function(t, e, i) {
						var s, n, r = t.cycle;
						for (s in r) n = r[s], t[s] = "function" == typeof n ? n(i, e[i]) : n[i % n.length];
						delete t.cycle
					},
					d = a.pauseCallback = function() {},
					_ = function(t) {
						var e, i = [],
							s = t.length;
						for (e = 0; e !== s; i.push(t[e++]));
						return i
					},
					m = s.prototype = new e;
				return s.version = "1.20.4", m.constructor = s, m.kill()._gc = m._forcingPlayhead = m._hasPause = !1, m.to = function(t, e, s, n) {
					var r = s.repeat && u.TweenMax || i;
					return e ? this.add(new r(t, e, s), n) : this.set(t, s, n)
				}, m.from = function(t, e, s, n) {
					return this.add((s.repeat && u.TweenMax || i).from(t, e, s), n)
				}, m.fromTo = function(t, e, s, n, r) {
					var a = n.repeat && u.TweenMax || i;
					return e ? this.add(a.fromTo(t, e, s, n), r) : this.set(t, n, r)
				}, m.staggerTo = function(t, e, n, r, a, l, c, h) {
					var u, d, m = new s({
						onComplete: l,
						onCompleteParams: c,
						callbackScope: h,
						smoothChildTiming: this.smoothChildTiming
					}),
						v = n.cycle;
					for ("string" == typeof t && (t = i.selector(t) || t), t = t || [], o(t) && (t = _(t)), r = r || 0, r < 0 && (t = _(t), t.reverse(), r *= -1), d = 0; d < t.length; d++) u = p(n), u.startAt && (u.startAt = p(u.startAt), u.startAt.cycle && f(u.startAt, t, d)), v && (f(u, t, d), null != u.duration && (e = u.duration, delete u.duration)), m.to(t[d], e, u, d * r);
					return this.add(m, a)
				}, m.staggerFrom = function(t, e, i, s, n, r, a, o) {
					return i.immediateRender = 0 != i.immediateRender, i.runBackwards = !0, this.staggerTo(t, e, i, s, n, r, a, o)
				}, m.staggerFromTo = function(t, e, i, s, n, r, a, o, l) {
					return s.startAt = i, s.immediateRender = 0 != s.immediateRender && 0 != i.immediateRender, this.staggerTo(t, e, s, n, r, a, o, l)
				}, m.call = function(t, e, s, n) {
					return this.add(i.delayedCall(0, t, e, s), n)
				}, m.set = function(t, e, s) {
					return s = this._parseTimeOrLabel(s, 0, !0), null == e.immediateRender && (e.immediateRender = s === this._time && !this._paused), this.add(new i(t, 0, e), s)
				}, s.exportRoot = function(t, e) {
					t = t || {}, null == t.smoothChildTiming && (t.smoothChildTiming = !0);
					var n, r, a, o, l = new s(t),
						c = l._timeline;
					for (null == e && (e = !0), c._remove(l, !0), l._startTime = 0, l._rawPrevTime = l._time = l._totalTime = c._time, a = c._first; a;) o = a._next, e && a instanceof i && a.target === a.vars.onComplete || (r = a._startTime - a._delay, r < 0 && (n = 1), l.add(a, r)), a = o;
					return c.add(l, 0), n && l.totalDuration(), l
				}, m.add = function(n, r, a, o) {
					var c, h, u, p, f, d;
					if ("number" != typeof r && (r = this._parseTimeOrLabel(r, 0, !0, n)), !(n instanceof t)) {
						if (n instanceof Array || n && n.push && l(n)) {
							for (a = a || "normal", o = o || 0, c = r, h = n.length, u = 0; u < h; u++) l(p = n[u]) && (p = new s({
								tweens: p
							})), this.add(p, c), "string" != typeof p && "function" != typeof p && ("sequence" === a ? c = p._startTime + p.totalDuration() / p._timeScale : "start" === a && (p._startTime -= p.delay())), c += o;
							return this._uncache(!0)
						}
						if ("string" == typeof n) return this.addLabel(n, r);
						if ("function" != typeof n) throw "Cannot add " + n + " into the timeline; it is not a tween, timeline, function, or string.";
						n = i.delayedCall(0, n)
					}
					if (e.prototype.add.call(this, n, r), n._time && n.render((this.rawTime() - n._startTime) * n._timeScale, !1, !1), (this._gc || this._time === this._duration) && !this._paused && this._duration < this.duration()) for (f = this, d = f.rawTime() > n._startTime; f._timeline;) d && f._timeline.smoothChildTiming ? f.totalTime(f._totalTime, !0) : f._gc && f._enabled(!0, !1), f = f._timeline;
					return this
				}, m.remove = function(e) {
					if (e instanceof t) {
						this._remove(e, !1);
						var i = e._timeline = e.vars.useFrames ? t._rootFramesTimeline : t._rootTimeline;
						return e._startTime = (e._paused ? e._pauseTime : i._time) - (e._reversed ? e.totalDuration() - e._totalTime : e._totalTime) / e._timeScale, this
					}
					if (e instanceof Array || e && e.push && l(e)) {
						for (var s = e.length; --s > -1;) this.remove(e[s]);
						return this
					}
					return "string" == typeof e ? this.removeLabel(e) : this.kill(null, e)
				}, m._remove = function(t, i) {
					return e.prototype._remove.call(this, t, i), this._last ? this._time > this.duration() && (this._time = this._duration, this._totalTime = this._totalDuration) : this._time = this._totalTime = this._duration = this._totalDuration = 0, this
				}, m.append = function(t, e) {
					return this.add(t, this._parseTimeOrLabel(null, e, !0, t))
				}, m.insert = m.insertMultiple = function(t, e, i, s) {
					return this.add(t, e || 0, i, s)
				}, m.appendMultiple = function(t, e, i, s) {
					return this.add(t, this._parseTimeOrLabel(null, e, !0, t), i, s)
				}, m.addLabel = function(t, e) {
					return this._labels[t] = this._parseTimeOrLabel(e), this
				}, m.addPause = function(t, e, s, n) {
					var r = i.delayedCall(0, d, s, n || this);
					return r.vars.onComplete = r.vars.onReverseComplete = e, r.data = "isPause", this._hasPause = !0, this.add(r, t)
				}, m.removeLabel = function(t) {
					return delete this._labels[t], this
				}, m.getLabelTime = function(t) {
					return null != this._labels[t] ? this._labels[t] : -1
				}, m._parseTimeOrLabel = function(e, i, s, n) {
					var r, a;
					if (n instanceof t && n.timeline === this) this.remove(n);
					else if (n && (n instanceof Array || n.push && l(n))) for (a = n.length; --a > -1;) n[a] instanceof t && n[a].timeline === this && this.remove(n[a]);
					if (r = "number" != typeof e || i ? this.duration() > 99999999999 ? this.recent().endTime(!1) : this._duration : 0, "string" == typeof i) return this._parseTimeOrLabel(i, s && "number" == typeof e && null == this._labels[i] ? e - r : 0, s);
					if (i = i || 0, "string" != typeof e || !isNaN(e) && null == this._labels[e]) null == e && (e = r);
					else {
						if (-1 === (a = e.indexOf("="))) return null == this._labels[e] ? s ? this._labels[e] = r + i : i : this._labels[e] + i;
						i = parseInt(e.charAt(a - 1) + "1", 10) * Number(e.substr(a + 1)), e = a > 1 ? this._parseTimeOrLabel(e.substr(0, a - 1), 0, s) : r
					}
					return Number(e) + i
				}, m.seek = function(t, e) {
					return this.totalTime("number" == typeof t ? t : this._parseTimeOrLabel(t), !1 !== e)
				}, m.stop = function() {
					return this.paused(!0)
				}, m.gotoAndPlay = function(t, e) {
					return this.play(t, e)
				}, m.gotoAndStop = function(t, e) {
					return this.pause(t, e)
				}, m.render = function(t, e, i) {
					this._gc && this._enabled(!0, !1);
					var s, n, r, a, o, l, u, p = this._time,
						f = this._dirty ? this.totalDuration() : this._totalDuration,
						d = this._startTime,
						_ = this._timeScale,
						m = this._paused;
					if (p !== this._time && (t += this._time - p), t >= f - 1e-7 && t >= 0) this._totalTime = this._time = f, this._reversed || this._hasPausedChild() || (n = !0, a = "onComplete", o = !! this._timeline.autoRemoveChildren, 0 === this._duration && (t <= 0 && t >= -1e-7 || this._rawPrevTime < 0 || 1e-10 === this._rawPrevTime) && this._rawPrevTime !== t && this._first && (o = !0, this._rawPrevTime > 1e-10 && (a = "onReverseComplete"))), this._rawPrevTime = this._duration || !e || t || this._rawPrevTime === t ? t : 1e-10, t = f + 1e-4;
					else if (t < 1e-7) if (this._totalTime = this._time = 0, (0 !== p || 0 === this._duration && 1e-10 !== this._rawPrevTime && (this._rawPrevTime > 0 || t < 0 && this._rawPrevTime >= 0)) && (a = "onReverseComplete", n = this._reversed), t < 0) this._active = !1, this._timeline.autoRemoveChildren && this._reversed ? (o = n = !0, a = "onReverseComplete") : this._rawPrevTime >= 0 && this._first && (o = !0), this._rawPrevTime = t;
					else {
						if (this._rawPrevTime = this._duration || !e || t || this._rawPrevTime === t ? t : 1e-10, 0 === t && n) for (s = this._first; s && 0 === s._startTime;) s._duration || (n = !1), s = s._next;
						t = 0, this._initted || (o = !0)
					} else {
						if (this._hasPause && !this._forcingPlayhead && !e) {
							if (t >= p) for (s = this._first; s && s._startTime <= t && !l;) s._duration || "isPause" !== s.data || s.ratio || 0 === s._startTime && 0 === this._rawPrevTime || (l = s), s = s._next;
							else for (s = this._last; s && s._startTime >= t && !l;) s._duration || "isPause" === s.data && s._rawPrevTime > 0 && (l = s), s = s._prev;
							l && (this._time = t = l._startTime, this._totalTime = t + this._cycle * (this._totalDuration + this._repeatDelay))
						}
						this._totalTime = this._time = this._rawPrevTime = t
					}
					if (this._time !== p && this._first || i || o || l) {
						if (this._initted || (this._initted = !0), this._active || !this._paused && this._time !== p && t > 0 && (this._active = !0), 0 === p && this.vars.onStart && (0 === this._time && this._duration || e || this._callback("onStart")), (u = this._time) >= p) for (s = this._first; s && (r = s._next, u === this._time && (!this._paused || m));)(s._active || s._startTime <= u && !s._paused && !s._gc) && (l === s && this.pause(), s._reversed ? s.render((s._dirty ? s.totalDuration() : s._totalDuration) - (t - s._startTime) * s._timeScale, e, i) : s.render((t - s._startTime) * s._timeScale, e, i)), s = r;
						else for (s = this._last; s && (r = s._prev, u === this._time && (!this._paused || m));) {
							if (s._active || s._startTime <= p && !s._paused && !s._gc) {
								if (l === s) {
									for (l = s._prev; l && l.endTime() > this._time;) l.render(l._reversed ? l.totalDuration() - (t - l._startTime) * l._timeScale : (t - l._startTime) * l._timeScale, e, i), l = l._prev;
									l = null, this.pause()
								}
								s._reversed ? s.render((s._dirty ? s.totalDuration() : s._totalDuration) - (t - s._startTime) * s._timeScale, e, i) : s.render((t - s._startTime) * s._timeScale, e, i)
							}
							s = r
						}
						this._onUpdate && (e || (c.length && h(), this._callback("onUpdate"))), a && (this._gc || d !== this._startTime && _ === this._timeScale || (0 === this._time || f >= this.totalDuration()) && (n && (c.length && h(), this._timeline.autoRemoveChildren && this._enabled(!1, !1), this._active = !1), !e && this.vars[a] && this._callback(a)))
					}
				}, m._hasPausedChild = function() {
					for (var t = this._first; t;) {
						if (t._paused || t instanceof s && t._hasPausedChild()) return !0;
						t = t._next
					}
					return !1
				}, m.getChildren = function(t, e, s, n) {
					n = n || -9999999999;
					for (var r = [], a = this._first, o = 0; a;) a._startTime < n || (a instanceof i ? !1 !== e && (r[o++] = a) : (!1 !== s && (r[o++] = a), !1 !== t && (r = r.concat(a.getChildren(!0, e, s)), o = r.length))), a = a._next;
					return r
				}, m.getTweensOf = function(t, e) {
					var s, n, r = this._gc,
						a = [],
						o = 0;
					for (r && this._enabled(!0, !0), s = i.getTweensOf(t), n = s.length; --n > -1;)(s[n].timeline === this || e && this._contains(s[n])) && (a[o++] = s[n]);
					return r && this._enabled(!1, !0), a
				}, m.recent = function() {
					return this._recent
				}, m._contains = function(t) {
					for (var e = t.timeline; e;) {
						if (e === this) return !0;
						e = e.timeline
					}
					return !1
				}, m.shiftChildren = function(t, e, i) {
					i = i || 0;
					for (var s, n = this._first, r = this._labels; n;) n._startTime >= i && (n._startTime += t), n = n._next;
					if (e) for (s in r) r[s] >= i && (r[s] += t);
					return this._uncache(!0)
				}, m._kill = function(t, e) {
					if (!t && !e) return this._enabled(!1, !1);
					for (var i = e ? this.getTweensOf(e) : this.getChildren(!0, !0, !1), s = i.length, n = !1; --s > -1;) i[s]._kill(t, e) && (n = !0);
					return n
				}, m.clear = function(t) {
					var e = this.getChildren(!1, !0, !0),
						i = e.length;
					for (this._time = this._totalTime = 0; --i > -1;) e[i]._enabled(!1, !1);
					return !1 !== t && (this._labels = {}), this._uncache(!0)
				}, m.invalidate = function() {
					for (var e = this._first; e;) e.invalidate(), e = e._next;
					return t.prototype.invalidate.call(this)
				}, m._enabled = function(t, i) {
					if (t === this._gc) for (var s = this._first; s;) s._enabled(t, !0), s = s._next;
					return e.prototype._enabled.call(this, t, i)
				}, m.totalTime = function(e, i, s) {
					this._forcingPlayhead = !0;
					var n = t.prototype.totalTime.apply(this, arguments);
					return this._forcingPlayhead = !1, n
				}, m.duration = function(t) {
					return arguments.length ? (0 !== this.duration() && 0 !== t && this.timeScale(this._duration / t), this) : (this._dirty && this.totalDuration(), this._duration)
				}, m.totalDuration = function(t) {
					if (!arguments.length) {
						if (this._dirty) {
							for (var e, i, s = 0, n = this._last, r = 999999999999; n;) e = n._prev, n._dirty && n.totalDuration(), n._startTime > r && this._sortChildren && !n._paused && !this._calculatingDuration ? (this._calculatingDuration = 1, this.add(n, n._startTime - n._delay), this._calculatingDuration = 0) : r = n._startTime, n._startTime < 0 && !n._paused && (s -= n._startTime, this._timeline.smoothChildTiming && (this._startTime += n._startTime / this._timeScale, this._time -= n._startTime, this._totalTime -= n._startTime, this._rawPrevTime -= n._startTime), this.shiftChildren(-n._startTime, !1, -9999999999), r = 0), i = n._startTime + n._totalDuration / n._timeScale, i > s && (s = i), n = e;
							this._duration = this._totalDuration = s, this._dirty = !1
						}
						return this._totalDuration
					}
					return t && this.totalDuration() ? this.timeScale(this._totalDuration / t) : this
				}, m.paused = function(e) {
					if (!e) for (var i = this._first, s = this._time; i;) i._startTime === s && "isPause" === i.data && (i._rawPrevTime = 0), i = i._next;
					return t.prototype.paused.apply(this, arguments)
				}, m.usesFrames = function() {
					for (var e = this._timeline; e._timeline;) e = e._timeline;
					return e === t._rootFramesTimeline
				}, m.rawTime = function(t) {
					return t && (this._paused || this._repeat && this.time() > 0 && this.totalProgress() < 1) ? this._totalTime % (this._duration + this._repeatDelay) : this._paused ? this._totalTime : (this._timeline.rawTime(t) - this._startTime) * this._timeScale
				}, s
			}, !0), r._gsDefine("TimelineMax", ["TimelineLite", "TweenLite", "easing.Ease"], function(t, e, i) {
				var s = function(e) {
						t.call(this, e), this._repeat = this.vars.repeat || 0, this._repeatDelay = this.vars.repeatDelay || 0, this._cycle = 0, this._yoyo = !0 === this.vars.yoyo, this._dirty = !0
					},
					n = e._internals,
					a = n.lazyTweens,
					o = n.lazyRender,
					l = r._gsDefine.globals,
					c = new i(null, null, 1, 0),
					h = s.prototype = new t;
				return h.constructor = s, h.kill()._gc = !1, s.version = "1.20.4", h.invalidate = function() {
					return this._yoyo = !0 === this.vars.yoyo, this._repeat = this.vars.repeat || 0, this._repeatDelay = this.vars.repeatDelay || 0, this._uncache(!0), t.prototype.invalidate.call(this)
				}, h.addCallback = function(t, i, s, n) {
					return this.add(e.delayedCall(0, t, s, n), i)
				}, h.removeCallback = function(t, e) {
					if (t) if (null == e) this._kill(null, t);
					else for (var i = this.getTweensOf(t, !1), s = i.length, n = this._parseTimeOrLabel(e); --s > -1;) i[s]._startTime === n && i[s]._enabled(!1, !1);
					return this
				}, h.removePause = function(e) {
					return this.removeCallback(t._internals.pauseCallback, e)
				}, h.tweenTo = function(t, i) {
					i = i || {};
					var s, n, r, a = {
						ease: c,
						useFrames: this.usesFrames(),
						immediateRender: !1,
						lazy: !1
					},
						o = i.repeat && l.TweenMax || e;
					for (n in i) a[n] = i[n];
					return a.time = this._parseTimeOrLabel(t), s = Math.abs(Number(a.time) - this._time) / this._timeScale || .001, r = new o(this, s, a), a.onStart = function() {
						r.target.paused(!0), r.vars.time === r.target.time() || s !== r.duration() || r.isFromTo || r.duration(Math.abs(r.vars.time - r.target.time()) / r.target._timeScale).render(r.time(), !0, !0), i.onStart && i.onStart.apply(i.onStartScope || i.callbackScope || r, i.onStartParams || [])
					}, r
				}, h.tweenFromTo = function(t, e, i) {
					i = i || {}, t = this._parseTimeOrLabel(t), i.startAt = {
						onComplete: this.seek,
						onCompleteParams: [t],
						callbackScope: this
					}, i.immediateRender = !1 !== i.immediateRender;
					var s = this.tweenTo(e, i);
					return s.isFromTo = 1, s.duration(Math.abs(s.vars.time - t) / this._timeScale || .001)
				}, h.render = function(t, e, i) {
					this._gc && this._enabled(!0, !1);
					var s, n, r, l, c, h, u, p, f = this._time,
						d = this._dirty ? this.totalDuration() : this._totalDuration,
						_ = this._duration,
						m = this._totalTime,
						v = this._startTime,
						g = this._timeScale,
						y = this._rawPrevTime,
						b = this._paused,
						x = this._cycle;
					if (f !== this._time && (t += this._time - f), t >= d - 1e-7 && t >= 0) this._locked || (this._totalTime = d, this._cycle = this._repeat), this._reversed || this._hasPausedChild() || (n = !0, l = "onComplete", c = !! this._timeline.autoRemoveChildren, 0 === this._duration && (t <= 0 && t >= -1e-7 || y < 0 || 1e-10 === y) && y !== t && this._first && (c = !0, y > 1e-10 && (l = "onReverseComplete"))), this._rawPrevTime = this._duration || !e || t || this._rawPrevTime === t ? t : 1e-10, this._yoyo && 0 != (1 & this._cycle) ? this._time = t = 0 : (this._time = _, t = _ + 1e-4);
					else if (t < 1e-7) if (this._locked || (this._totalTime = this._cycle = 0), this._time = 0, (0 !== f || 0 === _ && 1e-10 !== y && (y > 0 || t < 0 && y >= 0) && !this._locked) && (l = "onReverseComplete", n = this._reversed), t < 0) this._active = !1, this._timeline.autoRemoveChildren && this._reversed ? (c = n = !0, l = "onReverseComplete") : y >= 0 && this._first && (c = !0), this._rawPrevTime = t;
					else {
						if (this._rawPrevTime = _ || !e || t || this._rawPrevTime === t ? t : 1e-10, 0 === t && n) for (s = this._first; s && 0 === s._startTime;) s._duration || (n = !1), s = s._next;
						t = 0, this._initted || (c = !0)
					} else if (0 === _ && y < 0 && (c = !0), this._time = this._rawPrevTime = t, this._locked || (this._totalTime = t, 0 !== this._repeat && (h = _ + this._repeatDelay, this._cycle = this._totalTime / h >> 0, 0 !== this._cycle && this._cycle === this._totalTime / h && m <= t && this._cycle--, this._time = this._totalTime - this._cycle * h, this._yoyo && 0 != (1 & this._cycle) && (this._time = _ - this._time), this._time > _ ? (this._time = _, t = _ + 1e-4) : this._time < 0 ? this._time = t = 0 : t = this._time)), this._hasPause && !this._forcingPlayhead && !e) {
						if ((t = this._time) >= f || this._repeat && x !== this._cycle) for (s = this._first; s && s._startTime <= t && !u;) s._duration || "isPause" !== s.data || s.ratio || 0 === s._startTime && 0 === this._rawPrevTime || (u = s), s = s._next;
						else for (s = this._last; s && s._startTime >= t && !u;) s._duration || "isPause" === s.data && s._rawPrevTime > 0 && (u = s), s = s._prev;
						u && u._startTime < _ && (this._time = t = u._startTime, this._totalTime = t + this._cycle * (this._totalDuration + this._repeatDelay))
					}
					if (this._cycle !== x && !this._locked) {
						var w = this._yoyo && 0 != (1 & x),
							T = w === (this._yoyo && 0 != (1 & this._cycle)),
							P = this._totalTime,
							k = this._cycle,
							O = this._rawPrevTime,
							S = this._time;
						if (this._totalTime = x * _, this._cycle < x ? w = !w : this._totalTime += _, this._time = f, this._rawPrevTime = 0 === _ ? y - 1e-4 : y, this._cycle = x, this._locked = !0, f = w ? 0 : _, this.render(f, e, 0 === _), e || this._gc || this.vars.onRepeat && (this._cycle = k, this._locked = !1, this._callback("onRepeat")), f !== this._time) return;
						if (T && (this._cycle = x, this._locked = !0, f = w ? _ + 1e-4 : -1e-4, this.render(f, !0, !1)), this._locked = !1, this._paused && !b) return;
						this._time = S, this._totalTime = P, this._cycle = k, this._rawPrevTime = O
					}
					if (!(this._time !== f && this._first || i || c || u)) return void(m !== this._totalTime && this._onUpdate && (e || this._callback("onUpdate")));
					if (this._initted || (this._initted = !0), this._active || !this._paused && this._totalTime !== m && t > 0 && (this._active = !0), 0 === m && this.vars.onStart && (0 === this._totalTime && this._totalDuration || e || this._callback("onStart")), (p = this._time) >= f) for (s = this._first; s && (r = s._next, p === this._time && (!this._paused || b));)(s._active || s._startTime <= this._time && !s._paused && !s._gc) && (u === s && this.pause(), s._reversed ? s.render((s._dirty ? s.totalDuration() : s._totalDuration) - (t - s._startTime) * s._timeScale, e, i) : s.render((t - s._startTime) * s._timeScale, e, i)), s = r;
					else for (s = this._last; s && (r = s._prev, p === this._time && (!this._paused || b));) {
						if (s._active || s._startTime <= f && !s._paused && !s._gc) {
							if (u === s) {
								for (u = s._prev; u && u.endTime() > this._time;) u.render(u._reversed ? u.totalDuration() - (t - u._startTime) * u._timeScale : (t - u._startTime) * u._timeScale, e, i), u = u._prev;
								u = null, this.pause()
							}
							s._reversed ? s.render((s._dirty ? s.totalDuration() : s._totalDuration) - (t - s._startTime) * s._timeScale, e, i) : s.render((t - s._startTime) * s._timeScale, e, i)
						}
						s = r
					}
					this._onUpdate && (e || (a.length && o(), this._callback("onUpdate"))), l && (this._locked || this._gc || v !== this._startTime && g === this._timeScale || (0 === this._time || d >= this.totalDuration()) && (n && (a.length && o(), this._timeline.autoRemoveChildren && this._enabled(!1, !1), this._active = !1), !e && this.vars[l] && this._callback(l)))
				}, h.getActive = function(t, e, i) {
					null == t && (t = !0), null == e && (e = !0), null == i && (i = !1);
					var s, n, r = [],
						a = this.getChildren(t, e, i),
						o = 0,
						l = a.length;
					for (s = 0; s < l; s++) n = a[s], n.isActive() && (r[o++] = n);
					return r
				}, h.getLabelAfter = function(t) {
					t || 0 !== t && (t = this._time);
					var e, i = this.getLabelsArray(),
						s = i.length;
					for (e = 0; e < s; e++) if (i[e].time > t) return i[e].name;
					return null
				}, h.getLabelBefore = function(t) {
					null == t && (t = this._time);
					for (var e = this.getLabelsArray(), i = e.length; --i > -1;) if (e[i].time < t) return e[i].name;
					return null
				}, h.getLabelsArray = function() {
					var t, e = [],
						i = 0;
					for (t in this._labels) e[i++] = {
						time: this._labels[t],
						name: t
					};
					return e.sort(function(t, e) {
						return t.time - e.time
					}), e
				}, h.invalidate = function() {
					return this._locked = !1, t.prototype.invalidate.call(this)
				}, h.progress = function(t, e) {
					return arguments.length ? this.totalTime(this.duration() * (this._yoyo && 0 != (1 & this._cycle) ? 1 - t : t) + this._cycle * (this._duration + this._repeatDelay), e) : this._time / this.duration() || 0
				}, h.totalProgress = function(t, e) {
					return arguments.length ? this.totalTime(this.totalDuration() * t, e) : this._totalTime / this.totalDuration() || 0
				}, h.totalDuration = function(e) {
					return arguments.length ? -1 !== this._repeat && e ? this.timeScale(this.totalDuration() / e) : this : (this._dirty && (t.prototype.totalDuration.call(this), this._totalDuration = -1 === this._repeat ? 999999999999 : this._duration * (this._repeat + 1) + this._repeatDelay * this._repeat), this._totalDuration)
				}, h.time = function(t, e) {
					return arguments.length ? (this._dirty && this.totalDuration(), t > this._duration && (t = this._duration), this._yoyo && 0 != (1 & this._cycle) ? t = this._duration - t + this._cycle * (this._duration + this._repeatDelay) : 0 !== this._repeat && (t += this._cycle * (this._duration + this._repeatDelay)), this.totalTime(t, e)) : this._time
				}, h.repeat = function(t) {
					return arguments.length ? (this._repeat = t, this._uncache(!0)) : this._repeat
				}, h.repeatDelay = function(t) {
					return arguments.length ? (this._repeatDelay = t, this._uncache(!0)) : this._repeatDelay
				}, h.yoyo = function(t) {
					return arguments.length ? (this._yoyo = t, this) : this._yoyo
				}, h.currentLabel = function(t) {
					return arguments.length ? this.seek(t, !0) : this.getLabelBefore(this._time + 1e-8)
				}, s
			}, !0), function() {
				var t = 180 / Math.PI,
					e = [],
					i = [],
					s = [],
					n = {},
					a = r._gsDefine.globals,
					o = function(t, e, i, s) {
						i === s && (i = s - (s - e) / 1e6), t === e && (e = t + (i - t) / 1e6), this.a = t, this.b = e, this.c = i, this.d = s, this.da = s - t, this.ca = i - t, this.ba = e - t
					},
					l = function(t, e, i, s) {
						var n = {
							a: t
						},
							r = {},
							a = {},
							o = {
								c: s
							},
							l = (t + e) / 2,
							c = (e + i) / 2,
							h = (i + s) / 2,
							u = (l + c) / 2,
							p = (c + h) / 2,
							f = (p - u) / 8;
						return n.b = l + (t - l) / 4, r.b = u + f, n.c = r.a = (n.b + r.b) / 2, r.c = a.a = (u + p) / 2, a.b = p - f, o.b = h + (s - h) / 4, a.c = o.a = (a.b + o.b) / 2, [n, r, a, o]
					},
					c = function(t, n, r, a, o) {
						var c, h, u, p, f, d, _, m, v, g, y, b, x, w = t.length - 1,
							T = 0,
							P = t[0].a;
						for (c = 0; c < w; c++) f = t[T], h = f.a, u = f.d, p = t[T + 1].d, o ? (y = e[c], b = i[c], x = (b + y) * n * .25 / (a ? .5 : s[c] || .5), d = u - (u - h) * (a ? .5 * n : 0 !== y ? x / y : 0), _ = u + (p - u) * (a ? .5 * n : 0 !== b ? x / b : 0), m = u - (d + ((_ - d) * (3 * y / (y + b) + .5) / 4 || 0))) : (d = u - (u - h) * n * .5, _ = u + (p - u) * n * .5, m = u - (d + _) / 2), d += m, _ += m, f.c = v = d, f.b = 0 !== c ? P : P = f.a + .6 * (f.c - f.a), f.da = u - h, f.ca = v - h, f.ba = P - h, r ? (g = l(h, P, v, u), t.splice(T, 1, g[0], g[1], g[2], g[3]), T += 4) : T++, P = _;
						f = t[T], f.b = P, f.c = P + .4 * (f.d - P), f.da = f.d - f.a, f.ca = f.c - f.a, f.ba = P - f.a, r && (g = l(f.a, P, f.c, f.d), t.splice(T, 1, g[0], g[1], g[2], g[3]))
					},
					h = function(t, s, n, r) {
						var a, l, c, h, u, p, f = [];
						if (r) for (t = [r].concat(t), l = t.length; --l > -1;)"string" == typeof(p = t[l][s]) && "=" === p.charAt(1) && (t[l][s] = r[s] + Number(p.charAt(0) + p.substr(2)));
						if ((a = t.length - 2) < 0) return f[0] = new o(t[0][s], 0, 0, t[0][s]), f;
						for (l = 0; l < a; l++) c = t[l][s], h = t[l + 1][s], f[l] = new o(c, 0, 0, h), n && (u = t[l + 2][s], e[l] = (e[l] || 0) + (h - c) * (h - c), i[l] = (i[l] || 0) + (u - h) * (u - h));
						return f[l] = new o(t[l][s], 0, 0, t[l + 1][s]), f
					},
					u = function(t, r, a, o, l, u) {
						var p, f, d, _, m, v, g, y, b = {},
							x = [],
							w = u || t[0];
						l = "string" == typeof l ? "," + l + "," : ",x,y,z,left,top,right,bottom,marginTop,marginLeft,marginRight,marginBottom,paddingLeft,paddingTop,paddingRight,paddingBottom,backgroundPosition,backgroundPosition_y,", null == r && (r = 1);
						for (f in t[0]) x.push(f);
						if (t.length > 1) {
							for (y = t[t.length - 1], g = !0, p = x.length; --p > -1;) if (f = x[p], Math.abs(w[f] - y[f]) > .05) {
								g = !1;
								break
							}
							g && (t = t.concat(), u && t.unshift(u), t.push(t[1]), u = t[t.length - 3])
						}
						for (e.length = i.length = s.length = 0, p = x.length; --p > -1;) f = x[p], n[f] = -1 !== l.indexOf("," + f + ","), b[f] = h(t, f, n[f], u);
						for (p = e.length; --p > -1;) e[p] = Math.sqrt(e[p]), i[p] = Math.sqrt(i[p]);
						if (!o) {
							for (p = x.length; --p > -1;) if (n[f]) for (d = b[x[p]], v = d.length - 1, _ = 0; _ < v; _++) m = d[_ + 1].da / i[_] + d[_].da / e[_] || 0, s[_] = (s[_] || 0) + m * m;
							for (p = s.length; --p > -1;) s[p] = Math.sqrt(s[p])
						}
						for (p = x.length, _ = a ? 4 : 1; --p > -1;) f = x[p], d = b[f], c(d, r, a, o, n[f]), g && (d.splice(0, _), d.splice(d.length - _, _));
						return b
					},
					p = function(t, e, i) {
						e = e || "soft";
						var s, n, r, a, l, c, h, u, p, f, d, _ = {},
							m = "cubic" === e ? 3 : 2,
							v = "soft" === e,
							g = [];
						if (v && i && (t = [i].concat(t)), null == t || t.length < m + 1) throw "invalid Bezier data";
						for (p in t[0]) g.push(p);
						for (c = g.length; --c > -1;) {
							for (p = g[c], _[p] = l = [], f = 0, u = t.length, h = 0; h < u; h++) s = null == i ? t[h][p] : "string" == typeof(d = t[h][p]) && "=" === d.charAt(1) ? i[p] + Number(d.charAt(0) + d.substr(2)) : Number(d), v && h > 1 && h < u - 1 && (l[f++] = (s + l[f - 2]) / 2), l[f++] = s;
							for (u = f - m + 1, f = 0, h = 0; h < u; h += m) s = l[h], n = l[h + 1], r = l[h + 2], a = 2 === m ? 0 : l[h + 3], l[f++] = d = 3 === m ? new o(s, n, r, a) : new o(s, (2 * n + s) / 3, (2 * n + r) / 3, r);
							l.length = f
						}
						return _
					},
					f = function(t, e, i) {
						for (var s, n, r, a, o, l, c, h, u, p, f, d = 1 / i, _ = t.length; --_ > -1;) for (p = t[_], r = p.a, a = p.d - r, o = p.c - r, l = p.b - r, s = n = 0, h = 1; h <= i; h++) c = d * h, u = 1 - c, s = n - (n = (c * c * a + 3 * u * (c * o + u * l)) * c), f = _ * i + h - 1, e[f] = (e[f] || 0) + s * s
					},
					d = function(t, e) {
						e = e >> 0 || 6;
						var i, s, n, r, a = [],
							o = [],
							l = 0,
							c = 0,
							h = e - 1,
							u = [],
							p = [];
						for (i in t) f(t[i], a, e);
						for (n = a.length, s = 0; s < n; s++) l += Math.sqrt(a[s]), r = s % e, p[r] = l, r === h && (c += l, r = s / e >> 0, u[r] = p, o[r] = c, l = 0, p = []);
						return {
							length: c,
							lengths: o,
							segments: u
						}
					},
					_ = r._gsDefine.plugin({
						propName: "bezier",
						priority: -1,
						version: "1.3.8",
						API: 2,
						global: !0,
						init: function(t, e, i) {
							this._target = t, e instanceof Array && (e = {
								values: e
							}), this._func = {}, this._mod = {}, this._props = [], this._timeRes = null == e.timeResolution ? 6 : parseInt(e.timeResolution, 10);
							var s, n, r, a, o, l = e.values || [],
								c = {},
								h = l[0],
								f = e.autoRotate || i.vars.orientToBezier;
							this._autoRotate = f ? f instanceof Array ? f : [
								["x", "y", "rotation", !0 === f ? 0 : Number(f) || 0]
							] : null;
							for (s in h) this._props.push(s);
							for (r = this._props.length; --r > -1;) s = this._props[r], this._overwriteProps.push(s), n = this._func[s] = "function" == typeof t[s], c[s] = n ? t[s.indexOf("set") || "function" != typeof t["get" + s.substr(3)] ? s : "get" + s.substr(3)]() : parseFloat(t[s]), o || c[s] !== l[0][s] && (o = c);
							if (this._beziers = "cubic" !== e.type && "quadratic" !== e.type && "soft" !== e.type ? u(l, isNaN(e.curviness) ? 1 : e.curviness, !1, "thruBasic" === e.type, e.correlate, o) : p(l, e.type, c), this._segCount = this._beziers[s].length, this._timeRes) {
								var _ = d(this._beziers, this._timeRes);
								this._length = _.length, this._lengths = _.lengths, this._segments = _.segments, this._l1 = this._li = this._s1 = this._si = 0, this._l2 = this._lengths[0], this._curSeg = this._segments[0], this._s2 = this._curSeg[0], this._prec = 1 / this._curSeg.length
							}
							if (f = this._autoRotate) for (this._initialRotations = [], f[0] instanceof Array || (this._autoRotate = f = [f]), r = f.length; --r > -1;) {
								for (a = 0; a < 3; a++) s = f[r][a], this._func[s] = "function" == typeof t[s] && t[s.indexOf("set") || "function" != typeof t["get" + s.substr(3)] ? s : "get" + s.substr(3)];
								s = f[r][2], this._initialRotations[r] = (this._func[s] ? this._func[s].call(this._target) : this._target[s]) || 0, this._overwriteProps.push(s)
							}
							return this._startRatio = i.vars.runBackwards ? 1 : 0, !0
						},
						set: function(e) {
							var i, s, n, r, a, o, l, c, h, u, p = this._segCount,
								f = this._func,
								d = this._target,
								_ = e !== this._startRatio;
							if (this._timeRes) {
								if (h = this._lengths, u = this._curSeg, e *= this._length, n = this._li, e > this._l2 && n < p - 1) {
									for (c = p - 1; n < c && (this._l2 = h[++n]) <= e;);
									this._l1 = h[n - 1], this._li = n, this._curSeg = u = this._segments[n], this._s2 = u[this._s1 = this._si = 0]
								} else if (e < this._l1 && n > 0) {
									for (; n > 0 && (this._l1 = h[--n]) >= e;);
									0 === n && e < this._l1 ? this._l1 = 0 : n++, this._l2 = h[n], this._li = n, this._curSeg = u = this._segments[n], this._s1 = u[(this._si = u.length - 1) - 1] || 0, this._s2 = u[this._si]
								}
								if (i = n, e -= this._l1, n = this._si, e > this._s2 && n < u.length - 1) {
									for (c = u.length - 1; n < c && (this._s2 = u[++n]) <= e;);
									this._s1 = u[n - 1], this._si = n
								} else if (e < this._s1 && n > 0) {
									for (; n > 0 && (this._s1 = u[--n]) >= e;);
									0 === n && e < this._s1 ? this._s1 = 0 : n++, this._s2 = u[n], this._si = n
								}
								o = (n + (e - this._s1) / (this._s2 - this._s1)) * this._prec || 0
							} else i = e < 0 ? 0 : e >= 1 ? p - 1 : p * e >> 0, o = (e - i * (1 / p)) * p;
							for (s = 1 - o, n = this._props.length; --n > -1;) r = this._props[n], a = this._beziers[r][i], l = (o * o * a.da + 3 * s * (o * a.ca + s * a.ba)) * o + a.a, this._mod[r] && (l = this._mod[r](l, d)), f[r] ? d[r](l) : d[r] = l;
							if (this._autoRotate) {
								var m, v, g, y, b, x, w, T = this._autoRotate;
								for (n = T.length; --n > -1;) r = T[n][2], x = T[n][3] || 0, w = !0 === T[n][4] ? 1 : t, a = this._beziers[T[n][0]], m = this._beziers[T[n][1]], a && m && (a = a[i], m = m[i], v = a.a + (a.b - a.a) * o, y = a.b + (a.c - a.b) * o, v += (y - v) * o, y += (a.c + (a.d - a.c) * o - y) * o, g = m.a + (m.b - m.a) * o, b = m.b + (m.c - m.b) * o, g += (b - g) * o, b += (m.c + (m.d - m.c) * o - b) * o, l = _ ? Math.atan2(b - g, y - v) * w + x : this._initialRotations[n], this._mod[r] && (l = this._mod[r](l, d)), f[r] ? d[r](l) : d[r] = l)
							}
						}
					}),
					m = _.prototype;
				_.bezierThrough = u, _.cubicToQuadratic = l, _._autoCSS = !0, _.quadraticToCubic = function(t, e, i) {
					return new o(t, (2 * e + t) / 3, (2 * e + i) / 3, i)
				}, _._cssRegister = function() {
					var t = a.CSSPlugin;
					if (t) {
						var e = t._internals,
							i = e._parseToProxy,
							s = e._setPluginRatio,
							n = e.CSSPropTween;
						e._registerComplexSpecialProp("bezier", {
							parser: function(t, e, r, a, o, l) {
								e instanceof Array && (e = {
									values: e
								}), l = new _;
								var c, h, u, p = e.values,
									f = p.length - 1,
									d = [],
									m = {};
								if (f < 0) return o;
								for (c = 0; c <= f; c++) u = i(t, p[c], a, o, l, f !== c), d[c] = u.end;
								for (h in e) m[h] = e[h];
								return m.values = d, o = new n(t, "bezier", 0, 0, u.pt, 2), o.data = u, o.plugin = l, o.setRatio = s, 0 === m.autoRotate && (m.autoRotate = !0), !m.autoRotate || m.autoRotate instanceof Array || (c = !0 === m.autoRotate ? 0 : Number(m.autoRotate), m.autoRotate = null != u.end.left ? [
									["left", "top", "rotation", c, !1]
								] : null != u.end.x && [
									["x", "y", "rotation", c, !1]
								]), m.autoRotate && (a._transform || a._enableTransforms(!1), u.autoRotate = a._target._gsTransform, u.proxy.rotation = u.autoRotate.rotation || 0, a._overwriteProps.push("rotation")), l._onInitTween(u.proxy, m, a._tween), o
							}
						})
					}
				}, m._mod = function(t) {
					for (var e, i = this._overwriteProps, s = i.length; --s > -1;)(e = t[i[s]]) && "function" == typeof e && (this._mod[i[s]] = e)
				}, m._kill = function(t) {
					var e, i, s = this._props;
					for (e in this._beziers) if (e in t) for (delete this._beziers[e], delete this._func[e], i = s.length; --i > -1;) s[i] === e && s.splice(i, 1);
					if (s = this._autoRotate) for (i = s.length; --i > -1;) t[s[i][2]] && s.splice(i, 1);
					return this._super._kill.call(this, t)
				}
			}(), r._gsDefine("plugins.CSSPlugin", ["plugins.TweenPlugin", "TweenLite"], function(t, e) {
				var i, s, n, a, o = function() {
						t.call(this, "css"), this._overwriteProps.length = 0, this.setRatio = o.prototype.setRatio
					},
					l = r._gsDefine.globals,
					c = {},
					h = o.prototype = new t("css");
				h.constructor = o, o.version = "1.20.4", o.API = 2, o.defaultTransformPerspective = 0, o.defaultSkewType = "compensated", o.defaultSmoothOrigin = !0, h = "px", o.suffixMap = {
					top: h,
					right: h,
					bottom: h,
					left: h,
					width: h,
					height: h,
					fontSize: h,
					padding: h,
					margin: h,
					perspective: h,
					lineHeight: ""
				};
				var u, p, f, d, _, m, v, g, y = /(?:\-|\.|\b)(\d|\.|e\-)+/g,
					b = /(?:\d|\-\d|\.\d|\-\.\d|\+=\d|\-=\d|\+=.\d|\-=\.\d)+/g,
					x = /(?:\+=|\-=|\-|\b)[\d\-\.]+[a-zA-Z0-9]*(?:%|\b)/gi,
					w = /(?![+-]?\d*\.?\d+|[+-]|e[+-]\d+)[^0-9]/g,
					T = /(?:\d|\-|\+|=|#|\.)*/g,
					P = /opacity *= *([^)]*)/i,
					k = /opacity:([^;]*)/i,
					O = /alpha\(opacity *=.+?\)/i,
					S = /^(rgb|hsl)/,
					A = /([A-Z])/g,
					R = /-([a-z])/gi,
					C = /(^(?:url\(\"|url\())|(?:(\"\))$|\)$)/gi,
					M = function(t, e) {
						return e.toUpperCase()
					},
					z = /(?:Left|Right|Width)/i,
					D = /(M11|M12|M21|M22)=[\d\-\.e]+/gi,
					F = /progid\:DXImageTransform\.Microsoft\.Matrix\(.+?\)/i,
					I = /,(?=[^\)]*(?:\(|$))/gi,
					E = /[\s,\(]/i,
					L = Math.PI / 180,
					B = 180 / Math.PI,
					X = {},
					j = {
						style: {}
					},
					N = r.document || {
						createElement: function() {
							return j
						}
					},
					Y = function(t, e) {
						return N.createElementNS ? N.createElementNS(e || "http://www.w3.org/1999/xhtml", t) : N.createElement(t)
					},
					q = Y("div"),
					U = Y("img"),
					W = o._internals = {
						_specialProps: c
					},
					H = (r.navigator || {}).userAgent || "",
					V = function() {
						var t = H.indexOf("Android"),
							e = Y("a");
						return f = -1 !== H.indexOf("Safari") && -1 === H.indexOf("Chrome") && (-1 === t || parseFloat(H.substr(t + 8, 2)) > 3), _ = f && parseFloat(H.substr(H.indexOf("Version/") + 8, 2)) < 6, d = -1 !== H.indexOf("Firefox"), (/MSIE ([0-9]{1,}[\.0-9]{0,})/.exec(H) || /Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/.exec(H)) && (m = parseFloat(RegExp.$1)), !! e && (e.style.cssText = "top:1px;opacity:.55;", /^0.55/.test(e.style.opacity))
					}(),
					J = function(t) {
						return P.test("string" == typeof t ? t : (t.currentStyle ? t.currentStyle.filter : t.style.filter) || "") ? parseFloat(RegExp.$1) / 100 : 1
					},
					Q = function(t) {
						r.console && console.log(t)
					},
					$ = "",
					Z = "",
					G = function(t, e) {
						e = e || q;
						var i, s, n = e.style;
						if (void 0 !== n[t]) return t;
						for (t = t.charAt(0).toUpperCase() + t.substr(1), i = ["O", "Moz", "ms", "Ms", "Webkit"], s = 5; --s > -1 && void 0 === n[i[s] + t];);
						return s >= 0 ? (Z = 3 === s ? "ms" : i[s], $ = "-" + Z.toLowerCase() + "-", Z + t) : null
					},
					K = N.defaultView ? N.defaultView.getComputedStyle : function() {},
					tt = o.getStyle = function(t, e, i, s, n) {
						var r;
						return V || "opacity" !== e ? (!s && t.style[e] ? r = t.style[e] : (i = i || K(t)) ? r = i[e] || i.getPropertyValue(e) || i.getPropertyValue(e.replace(A, "-$1").toLowerCase()) : t.currentStyle && (r = t.currentStyle[e]), null == n || r && "none" !== r && "auto" !== r && "auto auto" !== r ? r : n) : J(t)
					},
					et = W.convertToPixels = function(t, i, s, n, r) {
						if ("px" === n || !n && "lineHeight" !== i) return s;
						if ("auto" === n || !s) return 0;
						var a, l, c, h = z.test(i),
							u = t,
							p = q.style,
							f = s < 0,
							d = 1 === s;
						if (f && (s = -s), d && (s *= 100), "lineHeight" !== i || n) if ("%" === n && -1 !== i.indexOf("border")) a = s / 100 * (h ? t.clientWidth : t.clientHeight);
						else {
							if (p.cssText = "border:0 solid red;position:" + tt(t, "position") + ";line-height:0;", "%" !== n && u.appendChild && "v" !== n.charAt(0) && "rem" !== n) p[h ? "borderLeftWidth" : "borderTopWidth"] = s + n;
							else {
								if (u = t.parentNode || N.body, -1 !== tt(u, "display").indexOf("flex") && (p.position = "absolute"), l = u._gsCache, c = e.ticker.frame, l && h && l.time === c) return l.width * s / 100;
								p[h ? "width" : "height"] = s + n
							}
							u.appendChild(q), a = parseFloat(q[h ? "offsetWidth" : "offsetHeight"]), u.removeChild(q), h && "%" === n && !1 !== o.cacheWidths && (l = u._gsCache = u._gsCache || {}, l.time = c, l.width = a / s * 100), 0 !== a || r || (a = et(t, i, s, n, !0))
						} else l = K(t).lineHeight, t.style.lineHeight = s, a = parseFloat(K(t).lineHeight), t.style.lineHeight = l;
						return d && (a /= 100), f ? -a : a
					},
					it = W.calculateOffset = function(t, e, i) {
						if ("absolute" !== tt(t, "position", i)) return 0;
						var s = "left" === e ? "Left" : "Top",
							n = tt(t, "margin" + s, i);
						return t["offset" + s] - (et(t, e, parseFloat(n), n.replace(T, "")) || 0)
					},
					st = function(t, e) {
						var i, s, n, r = {};
						if (e = e || K(t, null)) if (i = e.length) for (; --i > -1;) n = e[i], -1 !== n.indexOf("-transform") && Ct !== n || (r[n.replace(R, M)] = e.getPropertyValue(n));
						else for (i in e) - 1 !== i.indexOf("Transform") && Rt !== i || (r[i] = e[i]);
						else if (e = t.currentStyle || t.style) for (i in e)"string" == typeof i && void 0 === r[i] && (r[i.replace(R, M)] = e[i]);
						return V || (r.opacity = J(t)), s = Ut(t, e, !1), r.rotation = s.rotation, r.skewX = s.skewX, r.scaleX = s.scaleX, r.scaleY = s.scaleY, r.x = s.x, r.y = s.y, zt && (r.z = s.z, r.rotationX = s.rotationX, r.rotationY = s.rotationY, r.scaleZ = s.scaleZ), r.filters && delete r.filters, r
					},
					nt = function(t, e, i, s, n) {
						var r, a, o, l = {},
							c = t.style;
						for (a in i)"cssText" !== a && "length" !== a && isNaN(a) && (e[a] !== (r = i[a]) || n && n[a]) && -1 === a.indexOf("Origin") && ("number" != typeof r && "string" != typeof r || (l[a] = "auto" !== r || "left" !== a && "top" !== a ? "" !== r && "auto" !== r && "none" !== r || "string" != typeof e[a] || "" === e[a].replace(w, "") ? r : 0 : it(t, a), void 0 !== c[a] && (o = new yt(c, a, c[a], o))));
						if (s) for (a in s)"className" !== a && (l[a] = s[a]);
						return {
							difs: l,
							firstMPT: o
						}
					},
					rt = {
						width: ["Left", "Right"],
						height: ["Top", "Bottom"]
					},
					at = ["marginLeft", "marginRight", "marginTop", "marginBottom"],
					ot = function(t, e, i) {
						if ("svg" === (t.nodeName + "").toLowerCase()) return (i || K(t))[e] || 0;
						if (t.getCTM && Nt(t)) return t.getBBox()[e] || 0;
						var s = parseFloat("width" === e ? t.offsetWidth : t.offsetHeight),
							n = rt[e],
							r = n.length;
						for (i = i || K(t, null); --r > -1;) s -= parseFloat(tt(t, "padding" + n[r], i, !0)) || 0, s -= parseFloat(tt(t, "border" + n[r] + "Width", i, !0)) || 0;
						return s
					},
					lt = function(t, e) {
						if ("contain" === t || "auto" === t || "auto auto" === t) return t + " ";
						null != t && "" !== t || (t = "0 0");
						var i, s = t.split(" "),
							n = -1 !== t.indexOf("left") ? "0%" : -1 !== t.indexOf("right") ? "100%" : s[0],
							r = -1 !== t.indexOf("top") ? "0%" : -1 !== t.indexOf("bottom") ? "100%" : s[1];
						if (s.length > 3 && !e) {
							for (s = t.split(", ").join(",").split(","), t = [], i = 0; i < s.length; i++) t.push(lt(s[i]));
							return t.join(",")
						}
						return null == r ? r = "center" === n ? "50%" : "0" : "center" === r && (r = "50%"), ("center" === n || isNaN(parseFloat(n)) && -1 === (n + "").indexOf("=")) && (n = "50%"), t = n + " " + r + (s.length > 2 ? " " + s[2] : ""), e && (e.oxp = -1 !== n.indexOf("%"), e.oyp = -1 !== r.indexOf("%"), e.oxr = "=" === n.charAt(1), e.oyr = "=" === r.charAt(1), e.ox = parseFloat(n.replace(w, "")), e.oy = parseFloat(r.replace(w, "")), e.v = t), e || t
					},
					ct = function(t, e) {
						return "function" == typeof t && (t = t(g, v)), "string" == typeof t && "=" === t.charAt(1) ? parseInt(t.charAt(0) + "1", 10) * parseFloat(t.substr(2)) : parseFloat(t) - parseFloat(e) || 0
					},
					ht = function(t, e) {
						return "function" == typeof t && (t = t(g, v)), null == t ? e : "string" == typeof t && "=" === t.charAt(1) ? parseInt(t.charAt(0) + "1", 10) * parseFloat(t.substr(2)) + e : parseFloat(t) || 0
					},
					ut = function(t, e, i, s) {
						var n, r, a, o, l;
						return "function" == typeof t && (t = t(g, v)), null == t ? o = e : "number" == typeof t ? o = t : (n = 360, r = t.split("_"), l = "=" === t.charAt(1), a = (l ? parseInt(t.charAt(0) + "1", 10) * parseFloat(r[0].substr(2)) : parseFloat(r[0])) * (-1 === t.indexOf("rad") ? 1 : B) - (l ? 0 : e), r.length && (s && (s[i] = e + a), -1 !== t.indexOf("short") && (a %= n) !== a % (n / 2) && (a = a < 0 ? a + n : a - n), -1 !== t.indexOf("_cw") && a < 0 ? a = (a + 9999999999 * n) % n - (a / n | 0) * n : -1 !== t.indexOf("ccw") && a > 0 && (a = (a - 9999999999 * n) % n - (a / n | 0) * n)), o = e + a), o < 1e-6 && o > -1e-6 && (o = 0), o
					},
					pt = {
						aqua: [0, 255, 255],
						lime: [0, 255, 0],
						silver: [192, 192, 192],
						black: [0, 0, 0],
						maroon: [128, 0, 0],
						teal: [0, 128, 128],
						blue: [0, 0, 255],
						navy: [0, 0, 128],
						white: [255, 255, 255],
						fuchsia: [255, 0, 255],
						olive: [128, 128, 0],
						yellow: [255, 255, 0],
						orange: [255, 165, 0],
						gray: [128, 128, 128],
						purple: [128, 0, 128],
						green: [0, 128, 0],
						red: [255, 0, 0],
						pink: [255, 192, 203],
						cyan: [0, 255, 255],
						transparent: [255, 255, 255, 0]
					},
					ft = function(t, e, i) {
						return t = t < 0 ? t + 1 : t > 1 ? t - 1 : t, 255 * (6 * t < 1 ? e + (i - e) * t * 6 : t < .5 ? i : 3 * t < 2 ? e + (i - e) * (2 / 3 - t) * 6 : e) + .5 | 0
					},
					dt = o.parseColor = function(t, e) {
						var i, s, n, r, a, o, l, c, h, u, p;
						if (t) if ("number" == typeof t) i = [t >> 16, t >> 8 & 255, 255 & t];
						else {
							if ("," === t.charAt(t.length - 1) && (t = t.substr(0, t.length - 1)), pt[t]) i = pt[t];
							else if ("#" === t.charAt(0)) 4 === t.length && (s = t.charAt(1), n = t.charAt(2), r = t.charAt(3), t = "#" + s + s + n + n + r + r), t = parseInt(t.substr(1), 16), i = [t >> 16, t >> 8 & 255, 255 & t];
							else if ("hsl" === t.substr(0, 3)) if (i = p = t.match(y), e) {
								if (-1 !== t.indexOf("=")) return t.match(b)
							} else a = Number(i[0]) % 360 / 360, o = Number(i[1]) / 100, l = Number(i[2]) / 100, n = l <= .5 ? l * (o + 1) : l + o - l * o, s = 2 * l - n, i.length > 3 && (i[3] = Number(i[3])), i[0] = ft(a + 1 / 3, s, n), i[1] = ft(a, s, n), i[2] = ft(a - 1 / 3, s, n);
							else i = t.match(y) || pt.transparent;
							i[0] = Number(i[0]), i[1] = Number(i[1]), i[2] = Number(i[2]), i.length > 3 && (i[3] = Number(i[3]))
						} else i = pt.black;
						return e && !p && (s = i[0] / 255, n = i[1] / 255, r = i[2] / 255, c = Math.max(s, n, r), h = Math.min(s, n, r), l = (c + h) / 2, c === h ? a = o = 0 : (u = c - h, o = l > .5 ? u / (2 - c - h) : u / (c + h), a = c === s ? (n - r) / u + (n < r ? 6 : 0) : c === n ? (r - s) / u + 2 : (s - n) / u + 4, a *= 60), i[0] = a + .5 | 0, i[1] = 100 * o + .5 | 0, i[2] = 100 * l + .5 | 0), i
					},
					_t = function(t, e) {
						var i, s, n, r = t.match(mt) || [],
							a = 0,
							o = "";
						if (!r.length) return t;
						for (i = 0; i < r.length; i++) s = r[i], n = t.substr(a, t.indexOf(s, a) - a), a += n.length + s.length, s = dt(s, e), 3 === s.length && s.push(1), o += n + (e ? "hsla(" + s[0] + "," + s[1] + "%," + s[2] + "%," + s[3] : "rgba(" + s.join(",")) + ")";
						return o + t.substr(a)
					},
					mt = "(?:\\b(?:(?:rgb|rgba|hsl|hsla)\\(.+?\\))|\\B#(?:[0-9a-f]{3}){1,2}\\b";
				for (h in pt) mt += "|" + h + "\\b";
				mt = new RegExp(mt + ")", "gi"), o.colorStringFilter = function(t) {
					var e, i = t[0] + " " + t[1];
					mt.test(i) && (e = -1 !== i.indexOf("hsl(") || -1 !== i.indexOf("hsla("), t[0] = _t(t[0], e), t[1] = _t(t[1], e)), mt.lastIndex = 0
				}, e.defaultStringFilter || (e.defaultStringFilter = o.colorStringFilter);
				var vt = function(t, e, i, s) {
						if (null == t) return function(t) {
							return t
						};
						var n, r = e ? (t.match(mt) || [""])[0] : "",
							a = t.split(r).join("").match(x) || [],
							o = t.substr(0, t.indexOf(a[0])),
							l = ")" === t.charAt(t.length - 1) ? ")" : "",
							c = -1 !== t.indexOf(" ") ? " " : ",",
							h = a.length,
							u = h > 0 ? a[0].replace(y, "") : "";
						return h ? n = e ?
						function(t) {
							var e, p, f, d;
							if ("number" == typeof t) t += u;
							else if (s && I.test(t)) {
								for (d = t.replace(I, "|").split("|"), f = 0; f < d.length; f++) d[f] = n(d[f]);
								return d.join(",")
							}
							if (e = (t.match(mt) || [r])[0], p = t.split(e).join("").match(x) || [], f = p.length, h > f--) for (; ++f < h;) p[f] = i ? p[(f - 1) / 2 | 0] : a[f];
							return o + p.join(c) + c + e + l + (-1 !== t.indexOf("inset") ? " inset" : "")
						} : function(t) {
							var e, r, p;
							if ("number" == typeof t) t += u;
							else if (s && I.test(t)) {
								for (r = t.replace(I, "|").split("|"), p = 0; p < r.length; p++) r[p] = n(r[p]);
								return r.join(",")
							}
							if (e = t.match(x) || [], p = e.length, h > p--) for (; ++p < h;) e[p] = i ? e[(p - 1) / 2 | 0] : a[p];
							return o + e.join(c) + l
						} : function(t) {
							return t
						}
					},
					gt = function(t) {
						return t = t.split(","), function(e, i, s, n, r, a, o) {
							var l, c = (i + "").split(" ");
							for (o = {}, l = 0; l < 4; l++) o[t[l]] = c[l] = c[l] || c[(l - 1) / 2 >> 0];
							return n.parse(e, o, r, a)
						}
					},
					yt = (W._setPluginRatio = function(t) {
						this.plugin.setRatio(t);
						for (var e, i, s, n, r, a = this.data, o = a.proxy, l = a.firstMPT; l;) e = o[l.v], l.r ? e = Math.round(e) : e < 1e-6 && e > -1e-6 && (e = 0), l.t[l.p] = e, l = l._next;
						if (a.autoRotate && (a.autoRotate.rotation = a.mod ? a.mod(o.rotation, this.t) : o.rotation), 1 === t || 0 === t) for (l = a.firstMPT, r = 1 === t ? "e" : "b"; l;) {
							if (i = l.t, i.type) {
								if (1 === i.type) {
									for (n = i.xs0 + i.s + i.xs1, s = 1; s < i.l; s++) n += i["xn" + s] + i["xs" + (s + 1)];
									i[r] = n
								}
							} else i[r] = i.s + i.xs0;
							l = l._next
						}
					}, function(t, e, i, s, n) {
						this.t = t, this.p = e, this.v = i, this.r = n, s && (s._prev = this, this._next = s)
					}),
					bt = (W._parseToProxy = function(t, e, i, s, n, r) {
						var a, o, l, c, h, u = s,
							p = {},
							f = {},
							d = i._transform,
							_ = X;
						for (i._transform = null, X = e, s = h = i.parse(t, e, s, n), X = _, r && (i._transform = d, u && (u._prev = null, u._prev && (u._prev._next = null))); s && s !== u;) {
							if (s.type <= 1 && (o = s.p, f[o] = s.s + s.c, p[o] = s.s, r || (c = new yt(s, "s", o, c, s.r), s.c = 0), 1 === s.type)) for (a = s.l; --a > 0;) l = "xn" + a, o = s.p + "_" + l, f[o] = s.data[l], p[o] = s[l], r || (c = new yt(s, l, o, c, s.rxp[l]));
							s = s._next
						}
						return {
							proxy: p,
							end: f,
							firstMPT: c,
							pt: h
						}
					}, W.CSSPropTween = function(t, e, s, n, r, o, l, c, h, u, p) {
						this.t = t, this.p = e, this.s = s, this.c = n, this.n = l || e, t instanceof bt || a.push(this.n), this.r = c, this.type = o || 0, h && (this.pr = h, i = !0), this.b = void 0 === u ? s : u, this.e = void 0 === p ? s + n : p, r && (this._next = r, r._prev = this)
					}),
					xt = function(t, e, i, s, n, r) {
						var a = new bt(t, e, i, s - i, n, -1, r);
						return a.b = i, a.e = a.xs0 = s, a
					},
					wt = o.parseComplex = function(t, e, i, s, n, r, a, l, c, h) {
						i = i || r || "", "function" == typeof s && (s = s(g, v)), a = new bt(t, e, 0, 0, a, h ? 2 : 1, null, !1, l, i, s), s += "", n && mt.test(s + i) && (s = [i, s], o.colorStringFilter(s), i = s[0], s = s[1]);
						var p, f, d, _, m, x, w, T, P, k, O, S, A, R = i.split(", ").join(",").split(" "),
							C = s.split(", ").join(",").split(" "),
							M = R.length,
							z = !1 !== u;
						for (-1 === s.indexOf(",") && -1 === i.indexOf(",") || (-1 !== (s + i).indexOf("rgb") || -1 !== (s + i).indexOf("hsl") ? (R = R.join(" ").replace(I, ", ").split(" "), C = C.join(" ").replace(I, ", ").split(" ")) : (R = R.join(" ").split(",").join(", ").split(" "), C = C.join(" ").split(",").join(", ").split(" ")), M = R.length), M !== C.length && (R = (r || "").split(" "), M = R.length), a.plugin = c, a.setRatio = h, mt.lastIndex = 0, p = 0; p < M; p++) if (_ = R[p], m = C[p], (T = parseFloat(_)) || 0 === T) a.appendXtra("", T, ct(m, T), m.replace(b, ""), z && -1 !== m.indexOf("px"), !0);
						else if (n && mt.test(_)) S = m.indexOf(")") + 1, S = ")" + (S ? m.substr(S) : ""), A = -1 !== m.indexOf("hsl") && V, k = m, _ = dt(_, A), m = dt(m, A), P = _.length + m.length > 6, P && !V && 0 === m[3] ? (a["xs" + a.l] += a.l ? " transparent" : "transparent", a.e = a.e.split(C[p]).join("transparent")) : (V || (P = !1), A ? a.appendXtra(k.substr(0, k.indexOf("hsl")) + (P ? "hsla(" : "hsl("), _[0], ct(m[0], _[0]), ",", !1, !0).appendXtra("", _[1], ct(m[1], _[1]), "%,", !1).appendXtra("", _[2], ct(m[2], _[2]), P ? "%," : "%" + S, !1) : a.appendXtra(k.substr(0, k.indexOf("rgb")) + (P ? "rgba(" : "rgb("), _[0], m[0] - _[0], ",", !0, !0).appendXtra("", _[1], m[1] - _[1], ",", !0).appendXtra("", _[2], m[2] - _[2], P ? "," : S, !0), P && (_ = _.length < 4 ? 1 : _[3], a.appendXtra("", _, (m.length < 4 ? 1 : m[3]) - _, S, !1))), mt.lastIndex = 0;
						else if (x = _.match(y)) {
							if (!(w = m.match(b)) || w.length !== x.length) return a;
							for (d = 0, f = 0; f < x.length; f++) O = x[f], k = _.indexOf(O, d), a.appendXtra(_.substr(d, k - d), Number(O), ct(w[f], O), "", z && "px" === _.substr(k + O.length, 2), 0 === f), d = k + O.length;
							a["xs" + a.l] += _.substr(d)
						} else a["xs" + a.l] += a.l || a["xs" + a.l] ? " " + m : m;
						if (-1 !== s.indexOf("=") && a.data) {
							for (S = a.xs0 + a.data.s, p = 1; p < a.l; p++) S += a["xs" + p] + a.data["xn" + p];
							a.e = S + a["xs" + p]
						}
						return a.l || (a.type = -1, a.xs0 = a.e), a.xfirst || a
					},
					Tt = 9;
				for (h = bt.prototype, h.l = h.pr = 0; --Tt > 0;) h["xn" + Tt] = 0, h["xs" + Tt] = "";
				h.xs0 = "", h._next = h._prev = h.xfirst = h.data = h.plugin = h.setRatio = h.rxp = null, h.appendXtra = function(t, e, i, s, n, r) {
					var a = this,
						o = a.l;
					return a["xs" + o] += r && (o || a["xs" + o]) ? " " + t : t || "", i || 0 === o || a.plugin ? (a.l++, a.type = a.setRatio ? 2 : 1, a["xs" + a.l] = s || "", o > 0 ? (a.data["xn" + o] = e + i, a.rxp["xn" + o] = n, a["xn" + o] = e, a.plugin || (a.xfirst = new bt(a, "xn" + o, e, i, a.xfirst || a, 0, a.n, n, a.pr), a.xfirst.xs0 = 0), a) : (a.data = {
						s: e + i
					}, a.rxp = {}, a.s = e, a.c = i, a.r = n, a)) : (a["xs" + o] += e + (s || ""), a)
				};
				var Pt = function(t, e) {
						e = e || {}, this.p = e.prefix ? G(t) || t : t, c[t] = c[this.p] = this, this.format = e.formatter || vt(e.defaultValue, e.color, e.collapsible, e.multi), e.parser && (this.parse = e.parser), this.clrs = e.color, this.multi = e.multi, this.keyword = e.keyword, this.dflt = e.defaultValue, this.pr = e.priority || 0
					},
					kt = W._registerComplexSpecialProp = function(t, e, i) {
						"object" != typeof e && (e = {
							parser: i
						});
						var s, n = t.split(","),
							r = e.defaultValue;
						for (i = i || [r], s = 0; s < n.length; s++) e.prefix = 0 === s && e.prefix, e.defaultValue = i[s] || r, new Pt(n[s], e)
					},
					Ot = W._registerPluginProp = function(t) {
						if (!c[t]) {
							var e = t.charAt(0).toUpperCase() + t.substr(1) + "Plugin";
							kt(t, {
								parser: function(t, i, s, n, r, a, o) {
									var h = l.com.greensock.plugins[e];
									return h ? (h._cssRegister(), c[s].parse(t, i, s, n, r, a, o)) : (Q("Error: " + e + " js file not loaded."), r)
								}
							})
						}
					};
				h = Pt.prototype, h.parseComplex = function(t, e, i, s, n, r) {
					var a, o, l, c, h, u, p = this.keyword;
					if (this.multi && (I.test(i) || I.test(e) ? (o = e.replace(I, "|").split("|"), l = i.replace(I, "|").split("|")) : p && (o = [e], l = [i])), l) {
						for (c = l.length > o.length ? l.length : o.length, a = 0; a < c; a++) e = o[a] = o[a] || this.dflt, i = l[a] = l[a] || this.dflt, p && (h = e.indexOf(p), u = i.indexOf(p), h !== u && (-1 === u ? o[a] = o[a].split(p).join("") : -1 === h && (o[a] += " " + p)));
						e = o.join(", "), i = l.join(", ")
					}
					return wt(t, this.p, e, i, this.clrs, this.dflt, s, this.pr, n, r)
				}, h.parse = function(t, e, i, s, r, a, o) {
					return this.parseComplex(t.style, this.format(tt(t, this.p, n, !1, this.dflt)), this.format(e), r, a)
				}, o.registerSpecialProp = function(t, e, i) {
					kt(t, {
						parser: function(t, s, n, r, a, o, l) {
							var c = new bt(t, n, 0, 0, a, 2, n, !1, i);
							return c.plugin = o, c.setRatio = e(t, s, r._tween, n), c
						},
						priority: i
					})
				}, o.useSVGTransformAttr = !0;
				var St, At = "scaleX,scaleY,scaleZ,x,y,z,skewX,skewY,rotation,rotationX,rotationY,perspective,xPercent,yPercent".split(","),
					Rt = G("transform"),
					Ct = $ + "transform",
					Mt = G("transformOrigin"),
					zt = null !== G("perspective"),
					Dt = W.Transform = function() {
						this.perspective = parseFloat(o.defaultTransformPerspective) || 0, this.force3D = !(!1 === o.defaultForce3D || !zt) && (o.defaultForce3D || "auto")
					},
					Ft = r.SVGElement,
					It = function(t, e, i) {
						var s, n = N.createElementNS("http://www.w3.org/2000/svg", t),
							r = /([a-z])([A-Z])/g;
						for (s in i) n.setAttributeNS(null, s.replace(r, "$1-$2").toLowerCase(), i[s]);
						return e.appendChild(n), n
					},
					Et = N.documentElement || {},
					Lt = function() {
						var t, e, i, s = m || /Android/i.test(H) && !r.chrome;
						return N.createElementNS && !s && (t = It("svg", Et), e = It("rect", t, {
							width: 100,
							height: 50,
							x: 100
						}), i = e.getBoundingClientRect().width, e.style[Mt] = "50% 50%", e.style[Rt] = "scaleX(0.5)", s = i === e.getBoundingClientRect().width && !(d && zt), Et.removeChild(t)), s
					}(),
					Bt = function(t, e, i, s, n, r) {
						var a, l, c, h, u, p, f, d, _, m, v, g, y, b, x = t._gsTransform,
							w = qt(t, !0);
						x && (y = x.xOrigin, b = x.yOrigin), (!s || (a = s.split(" ")).length < 2) && (f = t.getBBox(), 0 === f.x && 0 === f.y && f.width + f.height === 0 && (f = {
							x: parseFloat(t.hasAttribute("x") ? t.getAttribute("x") : t.hasAttribute("cx") ? t.getAttribute("cx") : 0) || 0,
							y: parseFloat(t.hasAttribute("y") ? t.getAttribute("y") : t.hasAttribute("cy") ? t.getAttribute("cy") : 0) || 0,
							width: 0,
							height: 0
						}), e = lt(e).split(" "), a = [(-1 !== e[0].indexOf("%") ? parseFloat(e[0]) / 100 * f.width : parseFloat(e[0])) + f.x, (-1 !== e[1].indexOf("%") ? parseFloat(e[1]) / 100 * f.height : parseFloat(e[1])) + f.y]), i.xOrigin = h = parseFloat(a[0]), i.yOrigin = u = parseFloat(a[1]), s && w !== Yt && (p = w[0], f = w[1], d = w[2], _ = w[3], m = w[4], v = w[5], (g = p * _ - f * d) && (l = h * (_ / g) + u * (-d / g) + (d * v - _ * m) / g, c = h * (-f / g) + u * (p / g) - (p * v - f * m) / g, h = i.xOrigin = a[0] = l, u = i.yOrigin = a[1] = c)), x && (r && (i.xOffset = x.xOffset, i.yOffset = x.yOffset, x = i), n || !1 !== n && !1 !== o.defaultSmoothOrigin ? (l = h - y, c = u - b, x.xOffset += l * w[0] + c * w[2] - l, x.yOffset += l * w[1] + c * w[3] - c) : x.xOffset = x.yOffset = 0), r || t.setAttribute("data-svg-origin", a.join(" "))
					},
					Xt = function(t) {
						var e, i = Y("svg", this.ownerSVGElement && this.ownerSVGElement.getAttribute("xmlns") || "http://www.w3.org/2000/svg"),
							s = this.parentNode,
							n = this.nextSibling,
							r = this.style.cssText;
						if (Et.appendChild(i), i.appendChild(this), this.style.display = "block", t) try {
							e = this.getBBox(), this._originalGetBBox = this.getBBox, this.getBBox = Xt
						} catch (t) {} else this._originalGetBBox && (e = this._originalGetBBox());
						return n ? s.insertBefore(this, n) : s.appendChild(this), Et.removeChild(i), this.style.cssText = r, e
					},
					jt = function(t) {
						try {
							return t.getBBox()
						} catch (e) {
							return Xt.call(t, !0)
						}
					},
					Nt = function(t) {
						return !(!Ft || !t.getCTM || t.parentNode && !t.ownerSVGElement || !jt(t))
					},
					Yt = [1, 0, 0, 1, 0, 0],
					qt = function(t, e) {
						var i, s, n, r, a, o, l = t._gsTransform || new Dt,
							c = t.style;
						if (Rt ? s = tt(t, Ct, null, !0) : t.currentStyle && (s = t.currentStyle.filter.match(D), s = s && 4 === s.length ? [s[0].substr(4), Number(s[2].substr(4)), Number(s[1].substr(4)), s[3].substr(4), l.x || 0, l.y || 0].join(",") : ""), i = !s || "none" === s || "matrix(1, 0, 0, 1, 0, 0)" === s, !Rt || !(o = !K(t) || "none" === K(t).display) && t.parentNode || (o && (r = c.display, c.display = "block"), t.parentNode || (a = 1, Et.appendChild(t)), s = tt(t, Ct, null, !0), i = !s || "none" === s || "matrix(1, 0, 0, 1, 0, 0)" === s, r ? c.display = r : o && Jt(c, "display"), a && Et.removeChild(t)), (l.svg || t.getCTM && Nt(t)) && (i && -1 !== (c[Rt] + "").indexOf("matrix") && (s = c[Rt], i = 0), n = t.getAttribute("transform"), i && n && (n = t.transform.baseVal.consolidate().matrix, s = "matrix(" + n.a + "," + n.b + "," + n.c + "," + n.d + "," + n.e + "," + n.f + ")", i = 0)), i) return Yt;
						for (n = (s || "").match(y) || [], Tt = n.length; --Tt > -1;) r = Number(n[Tt]), n[Tt] = (a = r - (r |= 0)) ? (1e5 * a + (a < 0 ? -.5 : .5) | 0) / 1e5 + r : r;
						return e && n.length > 6 ? [n[0], n[1], n[4], n[5], n[12], n[13]] : n
					},
					Ut = W.getTransform = function(t, i, s, n) {
						if (t._gsTransform && s && !n) return t._gsTransform;
						var r, a, l, c, h, u, p = s ? t._gsTransform || new Dt : new Dt,
							f = p.scaleX < 0,
							d = zt ? parseFloat(tt(t, Mt, i, !1, "0 0 0").split(" ")[2]) || p.zOrigin || 0 : 0,
							_ = parseFloat(o.defaultTransformPerspective) || 0;
						if (p.svg = !(!t.getCTM || !Nt(t)), p.svg && (Bt(t, tt(t, Mt, i, !1, "50% 50%") + "", p, t.getAttribute("data-svg-origin")), St = o.useSVGTransformAttr || Lt), (r = qt(t)) !== Yt) {
							if (16 === r.length) {
								var m, v, g, y, b, x = r[0],
									w = r[1],
									T = r[2],
									P = r[3],
									k = r[4],
									O = r[5],
									S = r[6],
									A = r[7],
									R = r[8],
									C = r[9],
									M = r[10],
									z = r[12],
									D = r[13],
									F = r[14],
									I = r[11],
									E = Math.atan2(S, M);
								p.zOrigin && (F = -p.zOrigin, z = R * F - r[12], D = C * F - r[13], F = M * F + p.zOrigin - r[14]), p.rotationX = E * B, E && (y = Math.cos(-E), b = Math.sin(-E), m = k * y + R * b, v = O * y + C * b, g = S * y + M * b, R = k * -b + R * y, C = O * -b + C * y, M = S * -b + M * y, I = A * -b + I * y, k = m, O = v, S = g), E = Math.atan2(-T, M), p.rotationY = E * B, E && (y = Math.cos(-E), b = Math.sin(-E), m = x * y - R * b, v = w * y - C * b, g = T * y - M * b, C = w * b + C * y, M = T * b + M * y, I = P * b + I * y, x = m, w = v, T = g), E = Math.atan2(w, x), p.rotation = E * B, E && (y = Math.cos(E), b = Math.sin(E), m = x * y + w * b, v = k * y + O * b, g = R * y + C * b, w = w * y - x * b, O = O * y - k * b, C = C * y - R * b, x = m, k = v, R = g), p.rotationX && Math.abs(p.rotationX) + Math.abs(p.rotation) > 359.9 && (p.rotationX = p.rotation = 0, p.rotationY = 180 - p.rotationY), E = Math.atan2(k, O), p.scaleX = (1e5 * Math.sqrt(x * x + w * w + T * T) + .5 | 0) / 1e5, p.scaleY = (1e5 * Math.sqrt(O * O + S * S) + .5 | 0) / 1e5, p.scaleZ = (1e5 * Math.sqrt(R * R + C * C + M * M) + .5 | 0) / 1e5, x /= p.scaleX, k /= p.scaleY, w /= p.scaleX, O /= p.scaleY, Math.abs(E) > 2e-5 ? (p.skewX = E * B, k = 0, "simple" !== p.skewType && (p.scaleY *= 1 / Math.cos(E))) : p.skewX = 0, p.perspective = I ? 1 / (I < 0 ? -I : I) : 0, p.x = z, p.y = D, p.z = F, p.svg && (p.x -= p.xOrigin - (p.xOrigin * x - p.yOrigin * k), p.y -= p.yOrigin - (p.yOrigin * w - p.xOrigin * O))
							} else if (!zt || n || !r.length || p.x !== r[4] || p.y !== r[5] || !p.rotationX && !p.rotationY) {
								var L = r.length >= 6,
									X = L ? r[0] : 1,
									j = r[1] || 0,
									N = r[2] || 0,
									Y = L ? r[3] : 1;
								p.x = r[4] || 0, p.y = r[5] || 0, l = Math.sqrt(X * X + j * j), c = Math.sqrt(Y * Y + N * N), h = X || j ? Math.atan2(j, X) * B : p.rotation || 0, u = N || Y ? Math.atan2(N, Y) * B + h : p.skewX || 0, p.scaleX = l, p.scaleY = c, p.rotation = h, p.skewX = u, zt && (p.rotationX = p.rotationY = p.z = 0, p.perspective = _, p.scaleZ = 1), p.svg && (p.x -= p.xOrigin - (p.xOrigin * X + p.yOrigin * N), p.y -= p.yOrigin - (p.xOrigin * j + p.yOrigin * Y))
							}
							Math.abs(p.skewX) > 90 && Math.abs(p.skewX) < 270 && (f ? (p.scaleX *= -1, p.skewX += p.rotation <= 0 ? 180 : -180, p.rotation += p.rotation <= 0 ? 180 : -180) : (p.scaleY *= -1, p.skewX += p.skewX <= 0 ? 180 : -180)), p.zOrigin = d;
							for (a in p) p[a] < 2e-5 && p[a] > -2e-5 && (p[a] = 0)
						}
						return s && (t._gsTransform = p, p.svg && (St && t.style[Rt] ? e.delayedCall(.001, function() {
							Jt(t.style, Rt)
						}) : !St && t.getAttribute("transform") && e.delayedCall(.001, function() {
							t.removeAttribute("transform")
						}))), p
					},
					Wt = function(t) {
						var e, i, s = this.data,
							n = -s.rotation * L,
							r = n + s.skewX * L,
							a = (Math.cos(n) * s.scaleX * 1e5 | 0) / 1e5,
							o = (Math.sin(n) * s.scaleX * 1e5 | 0) / 1e5,
							l = (Math.sin(r) * -s.scaleY * 1e5 | 0) / 1e5,
							c = (Math.cos(r) * s.scaleY * 1e5 | 0) / 1e5,
							h = this.t.style,
							u = this.t.currentStyle;
						if (u) {
							i = o, o = -l, l = -i, e = u.filter, h.filter = "";
							var p, f, d = this.t.offsetWidth,
								_ = this.t.offsetHeight,
								v = "absolute" !== u.position,
								g = "progid:DXImageTransform.Microsoft.Matrix(M11=" + a + ", M12=" + o + ", M21=" + l + ", M22=" + c,
								y = s.x + d * s.xPercent / 100,
								b = s.y + _ * s.yPercent / 100;
							if (null != s.ox && (p = (s.oxp ? d * s.ox * .01 : s.ox) - d / 2, f = (s.oyp ? _ * s.oy * .01 : s.oy) - _ / 2, y += p - (p * a + f * o), b += f - (p * l + f * c)), v ? (p = d / 2, f = _ / 2, g += ", Dx=" + (p - (p * a + f * o) + y) + ", Dy=" + (f - (p * l + f * c) + b) + ")") : g += ", sizingMethod='auto expand')", -1 !== e.indexOf("DXImageTransform.Microsoft.Matrix(") ? h.filter = e.replace(F, g) : h.filter = g + " " + e, 0 !== t && 1 !== t || 1 === a && 0 === o && 0 === l && 1 === c && (v && -1 === g.indexOf("Dx=0, Dy=0") || P.test(e) && 100 !== parseFloat(RegExp.$1) || -1 === e.indexOf(e.indexOf("Alpha")) && h.removeAttribute("filter")), !v) {
								var x, w, k, O = m < 8 ? 1 : -1;
								for (p = s.ieOffsetX || 0, f = s.ieOffsetY || 0, s.ieOffsetX = Math.round((d - ((a < 0 ? -a : a) * d + (o < 0 ? -o : o) * _)) / 2 + y), s.ieOffsetY = Math.round((_ - ((c < 0 ? -c : c) * _ + (l < 0 ? -l : l) * d)) / 2 + b), Tt = 0; Tt < 4; Tt++) w = at[Tt], x = u[w], i = -1 !== x.indexOf("px") ? parseFloat(x) : et(this.t, w, parseFloat(x), x.replace(T, "")) || 0, k = i !== s[w] ? Tt < 2 ? -s.ieOffsetX : -s.ieOffsetY : Tt < 2 ? p - s.ieOffsetX : f - s.ieOffsetY, h[w] = (s[w] = Math.round(i - k * (0 === Tt || 2 === Tt ? 1 : O))) + "px"
							}
						}
					},
					Ht = W.set3DTransformRatio = W.setTransformRatio = function(t) {
						var e, i, s, n, r, a, o, l, c, h, u, p, f, _, m, v, g, y, b, x, w, T, P, k = this.data,
							O = this.t.style,
							S = k.rotation,
							A = k.rotationX,
							R = k.rotationY,
							C = k.scaleX,
							M = k.scaleY,
							z = k.scaleZ,
							D = k.x,
							F = k.y,
							I = k.z,
							E = k.svg,
							B = k.perspective,
							X = k.force3D,
							j = k.skewY,
							N = k.skewX;
						if (j && (N += j, S += j), ((1 === t || 0 === t) && "auto" === X && (this.tween._totalTime === this.tween._totalDuration || !this.tween._totalTime) || !X) && !I && !B && !R && !A && 1 === z || St && E || !zt) return void(S || N || E ? (S *= L, T = N * L, P = 1e5, i = Math.cos(S) * C, r = Math.sin(S) * C, s = Math.sin(S - T) * -M, a = Math.cos(S - T) * M, T && "simple" === k.skewType && (e = Math.tan(T - j * L), e = Math.sqrt(1 + e * e), s *= e, a *= e, j && (e = Math.tan(j * L), e = Math.sqrt(1 + e * e), i *= e, r *= e)), E && (D += k.xOrigin - (k.xOrigin * i + k.yOrigin * s) + k.xOffset, F += k.yOrigin - (k.xOrigin * r + k.yOrigin * a) + k.yOffset, St && (k.xPercent || k.yPercent) && (m = this.t.getBBox(), D += .01 * k.xPercent * m.width, F += .01 * k.yPercent * m.height), m = 1e-6, D < m && D > -m && (D = 0), F < m && F > -m && (F = 0)), b = (i * P | 0) / P + "," + (r * P | 0) / P + "," + (s * P | 0) / P + "," + (a * P | 0) / P + "," + D + "," + F + ")", E && St ? this.t.setAttribute("transform", "matrix(" + b) : O[Rt] = (k.xPercent || k.yPercent ? "translate(" + k.xPercent + "%," + k.yPercent + "%) matrix(" : "matrix(") + b) : O[Rt] = (k.xPercent || k.yPercent ? "translate(" + k.xPercent + "%," + k.yPercent + "%) matrix(" : "matrix(") + C + ",0,0," + M + "," + D + "," + F + ")");
						if (d && (m = 1e-4, C < m && C > -m && (C = z = 2e-5), M < m && M > -m && (M = z = 2e-5), !B || k.z || k.rotationX || k.rotationY || (B = 0)), S || N) S *= L, v = i = Math.cos(S), g = r = Math.sin(S), N && (S -= N * L, v = Math.cos(S), g = Math.sin(S), "simple" === k.skewType && (e = Math.tan((N - j) * L), e = Math.sqrt(1 + e * e), v *= e, g *= e, k.skewY && (e = Math.tan(j * L), e = Math.sqrt(1 + e * e), i *= e, r *= e))), s = -g, a = v;
						else {
							if (!(R || A || 1 !== z || B || E)) return void(O[Rt] = (k.xPercent || k.yPercent ? "translate(" + k.xPercent + "%," + k.yPercent + "%) translate3d(" : "translate3d(") + D + "px," + F + "px," + I + "px)" + (1 !== C || 1 !== M ? " scale(" + C + "," + M + ")" : ""));
							i = a = 1, s = r = 0
						}
						h = 1, n = o = l = c = u = p = 0, f = B ? -1 / B : 0, _ = k.zOrigin, m = 1e-6, x = ",", w = "0", S = R * L, S && (v = Math.cos(S), g = Math.sin(S), l = -g, u = f * -g, n = i * g, o = r * g, h = v, f *= v, i *= v, r *= v), S = A * L, S && (v = Math.cos(S), g = Math.sin(S), e = s * v + n * g, y = a * v + o * g, c = h * g, p = f * g, n = s * -g + n * v, o = a * -g + o * v, h *= v, f *= v, s = e, a = y), 1 !== z && (n *= z, o *= z, h *= z, f *= z), 1 !== M && (s *= M, a *= M, c *= M, p *= M), 1 !== C && (i *= C, r *= C, l *= C, u *= C), (_ || E) && (_ && (D += n * -_, F += o * -_, I += h * -_ + _), E && (D += k.xOrigin - (k.xOrigin * i + k.yOrigin * s) + k.xOffset, F += k.yOrigin - (k.xOrigin * r + k.yOrigin * a) + k.yOffset), D < m && D > -m && (D = w), F < m && F > -m && (F = w), I < m && I > -m && (I = 0)), b = k.xPercent || k.yPercent ? "translate(" + k.xPercent + "%," + k.yPercent + "%) matrix3d(" : "matrix3d(", b += (i < m && i > -m ? w : i) + x + (r < m && r > -m ? w : r) + x + (l < m && l > -m ? w : l), b += x + (u < m && u > -m ? w : u) + x + (s < m && s > -m ? w : s) + x + (a < m && a > -m ? w : a), A || R || 1 !== z ? (b += x + (c < m && c > -m ? w : c) + x + (p < m && p > -m ? w : p) + x + (n < m && n > -m ? w : n), b += x + (o < m && o > -m ? w : o) + x + (h < m && h > -m ? w : h) + x + (f < m && f > -m ? w : f) + x) : b += ",0,0,0,0,1,0,", b += D + x + F + x + I + x + (B ? 1 + -I / B : 1) + ")", O[Rt] = b
					};
				h = Dt.prototype, h.x = h.y = h.z = h.skewX = h.skewY = h.rotation = h.rotationX = h.rotationY = h.zOrigin = h.xPercent = h.yPercent = h.xOffset = h.yOffset = 0, h.scaleX = h.scaleY = h.scaleZ = 1, kt("transform,scale,scaleX,scaleY,scaleZ,x,y,z,rotation,rotationX,rotationY,rotationZ,skewX,skewY,shortRotation,shortRotationX,shortRotationY,shortRotationZ,transformOrigin,svgOrigin,transformPerspective,directionalRotation,parseTransform,force3D,skewType,xPercent,yPercent,smoothOrigin", {
					parser: function(t, e, i, s, r, a, l) {
						if (s._lastParsedTransform === l) return r;
						s._lastParsedTransform = l;
						var c, h = l.scale && "function" == typeof l.scale ? l.scale : 0;
						"function" == typeof l[i] && (c = l[i], l[i] = e), h && (l.scale = h(g, t));
						var u, p, f, d, _, m, y, b, x, w = t._gsTransform,
							T = t.style,
							P = At.length,
							k = l,
							O = {},
							S = Ut(t, n, !0, k.parseTransform),
							A = k.transform && ("function" == typeof k.transform ? k.transform(g, v) : k.transform);
						if (S.skewType = k.skewType || S.skewType || o.defaultSkewType, s._transform = S, A && "string" == typeof A && Rt) p = q.style, p[Rt] = A, p.display = "block", p.position = "absolute", N.body.appendChild(q), u = Ut(q, null, !1), "simple" === S.skewType && (u.scaleY *= Math.cos(u.skewX * L)), S.svg && (m = S.xOrigin, y = S.yOrigin, u.x -= S.xOffset, u.y -= S.yOffset, (k.transformOrigin || k.svgOrigin) && (A = {}, Bt(t, lt(k.transformOrigin), A, k.svgOrigin, k.smoothOrigin, !0), m = A.xOrigin, y = A.yOrigin, u.x -= A.xOffset - S.xOffset, u.y -= A.yOffset - S.yOffset), (m || y) && (b = qt(q, !0), u.x -= m - (m * b[0] + y * b[2]), u.y -= y - (m * b[1] + y * b[3]))), N.body.removeChild(q), u.perspective || (u.perspective = S.perspective), null != k.xPercent && (u.xPercent = ht(k.xPercent, S.xPercent)), null != k.yPercent && (u.yPercent = ht(k.yPercent, S.yPercent));
						else if ("object" == typeof k) {
							if (u = {
								scaleX: ht(null != k.scaleX ? k.scaleX : k.scale, S.scaleX),
								scaleY: ht(null != k.scaleY ? k.scaleY : k.scale, S.scaleY),
								scaleZ: ht(k.scaleZ, S.scaleZ),
								x: ht(k.x, S.x),
								y: ht(k.y, S.y),
								z: ht(k.z, S.z),
								xPercent: ht(k.xPercent, S.xPercent),
								yPercent: ht(k.yPercent, S.yPercent),
								perspective: ht(k.transformPerspective, S.perspective)
							}, null != (_ = k.directionalRotation)) if ("object" == typeof _) for (p in _) k[p] = _[p];
							else k.rotation = _;
							"string" == typeof k.x && -1 !== k.x.indexOf("%") && (u.x = 0, u.xPercent = ht(k.x, S.xPercent)), "string" == typeof k.y && -1 !== k.y.indexOf("%") && (u.y = 0, u.yPercent = ht(k.y, S.yPercent)), u.rotation = ut("rotation" in k ? k.rotation : "shortRotation" in k ? k.shortRotation + "_short" : "rotationZ" in k ? k.rotationZ : S.rotation, S.rotation, "rotation", O), zt && (u.rotationX = ut("rotationX" in k ? k.rotationX : "shortRotationX" in k ? k.shortRotationX + "_short" : S.rotationX || 0, S.rotationX, "rotationX", O), u.rotationY = ut("rotationY" in k ? k.rotationY : "shortRotationY" in k ? k.shortRotationY + "_short" : S.rotationY || 0, S.rotationY, "rotationY", O)), u.skewX = ut(k.skewX, S.skewX), u.skewY = ut(k.skewY, S.skewY)
						}
						for (zt && null != k.force3D && (S.force3D = k.force3D, d = !0), f = S.force3D || S.z || S.rotationX || S.rotationY || u.z || u.rotationX || u.rotationY || u.perspective, f || null == k.scale || (u.scaleZ = 1); --P > -1;) x = At[P], ((A = u[x] - S[x]) > 1e-6 || A < -1e-6 || null != k[x] || null != X[x]) && (d = !0, r = new bt(S, x, S[x], A, r), x in O && (r.e = O[x]), r.xs0 = 0, r.plugin = a, s._overwriteProps.push(r.n));
						return A = k.transformOrigin, S.svg && (A || k.svgOrigin) && (m = S.xOffset, y = S.yOffset, Bt(t, lt(A), u, k.svgOrigin, k.smoothOrigin), r = xt(S, "xOrigin", (w ? S : u).xOrigin, u.xOrigin, r, "transformOrigin"), r = xt(S, "yOrigin", (w ? S : u).yOrigin, u.yOrigin, r, "transformOrigin"), m === S.xOffset && y === S.yOffset || (r = xt(S, "xOffset", w ? m : S.xOffset, S.xOffset, r, "transformOrigin"), r = xt(S, "yOffset", w ? y : S.yOffset, S.yOffset, r, "transformOrigin")), A = "0px 0px"), (A || zt && f && S.zOrigin) && (Rt ? (d = !0, x = Mt, A = (A || tt(t, x, n, !1, "50% 50%")) + "", r = new bt(T, x, 0, 0, r, -1, "transformOrigin"), r.b = T[x], r.plugin = a, zt ? (p = S.zOrigin, A = A.split(" "), S.zOrigin = (A.length > 2 && (0 === p || "0px" !== A[2]) ? parseFloat(A[2]) : p) || 0, r.xs0 = r.e = A[0] + " " + (A[1] || "50%") + " 0px", r = new bt(S, "zOrigin", 0, 0, r, -1, r.n), r.b = p, r.xs0 = r.e = S.zOrigin) : r.xs0 = r.e = A) : lt(A + "", S)), d && (s._transformType = S.svg && St || !f && 3 !== this._transformType ? 2 : 3), c && (l[i] = c), h && (l.scale = h), r
					},
					prefix: !0
				}), kt("boxShadow", {
					defaultValue: "0px 0px 0px 0px #999",
					prefix: !0,
					color: !0,
					multi: !0,
					keyword: "inset"
				}), kt("borderRadius", {
					defaultValue: "0px",
					parser: function(t, e, i, r, a, o) {
						e = this.format(e);
						var l, c, h, u, p, f, d, _, m, v, g, y, b, x, w, T, P = ["borderTopLeftRadius", "borderTopRightRadius", "borderBottomRightRadius", "borderBottomLeftRadius"],
							k = t.style;
						for (m = parseFloat(t.offsetWidth), v = parseFloat(t.offsetHeight), l = e.split(" "), c = 0; c < P.length; c++) this.p.indexOf("border") && (P[c] = G(P[c])), p = u = tt(t, P[c], n, !1, "0px"), -1 !== p.indexOf(" ") && (u = p.split(" "), p = u[0], u = u[1]), f = h = l[c], d = parseFloat(p), y = p.substr((d + "").length), b = "=" === f.charAt(1), b ? (_ = parseInt(f.charAt(0) + "1", 10), f = f.substr(2), _ *= parseFloat(f), g = f.substr((_ + "").length - (_ < 0 ? 1 : 0)) || "") : (_ = parseFloat(f), g = f.substr((_ + "").length)), "" === g && (g = s[i] || y), g !== y && (x = et(t, "borderLeft", d, y), w = et(t, "borderTop", d, y), "%" === g ? (p = x / m * 100 + "%", u = w / v * 100 + "%") : "em" === g ? (T = et(t, "borderLeft", 1, "em"), p = x / T + "em", u = w / T + "em") : (p = x + "px", u = w + "px"), b && (f = parseFloat(p) + _ + g, h = parseFloat(u) + _ + g)), a = wt(k, P[c], p + " " + u, f + " " + h, !1, "0px", a);
						return a
					},
					prefix: !0,
					formatter: vt("0px 0px 0px 0px", !1, !0)
				}), kt("borderBottomLeftRadius,borderBottomRightRadius,borderTopLeftRadius,borderTopRightRadius", {
					defaultValue: "0px",
					parser: function(t, e, i, s, r, a) {
						return wt(t.style, i, this.format(tt(t, i, n, !1, "0px 0px")), this.format(e), !1, "0px", r)
					},
					prefix: !0,
					formatter: vt("0px 0px", !1, !0)
				}), kt("backgroundPosition", {
					defaultValue: "0 0",
					parser: function(t, e, i, s, r, a) {
						var o, l, c, h, u, p, f = "background-position",
							d = n || K(t, null),
							_ = this.format((d ? m ? d.getPropertyValue(f + "-x") + " " + d.getPropertyValue(f + "-y") : d.getPropertyValue(f) : t.currentStyle.backgroundPositionX + " " + t.currentStyle.backgroundPositionY) || "0 0"),
							v = this.format(e);
						if (-1 !== _.indexOf("%") != (-1 !== v.indexOf("%")) && v.split(",").length < 2 && (p = tt(t, "backgroundImage").replace(C, "")) && "none" !== p) {
							for (o = _.split(" "), l = v.split(" "), U.setAttribute("src", p), c = 2; --c > -1;) _ = o[c], (h = -1 !== _.indexOf("%")) !== (-1 !== l[c].indexOf("%")) && (u = 0 === c ? t.offsetWidth - U.width : t.offsetHeight - U.height, o[c] = h ? parseFloat(_) / 100 * u + "px" : parseFloat(_) / u * 100 + "%");
							_ = o.join(" ")
						}
						return this.parseComplex(t.style, _, v, r, a)
					},
					formatter: lt
				}), kt("backgroundSize", {
					defaultValue: "0 0",
					formatter: function(t) {
						return t += "", lt(-1 === t.indexOf(" ") ? t + " " + t : t)
					}
				}), kt("perspective", {
					defaultValue: "0px",
					prefix: !0
				}), kt("perspectiveOrigin", {
					defaultValue: "50% 50%",
					prefix: !0
				}), kt("transformStyle", {
					prefix: !0
				}), kt("backfaceVisibility", {
					prefix: !0
				}), kt("userSelect", {
					prefix: !0
				}), kt("margin", {
					parser: gt("marginTop,marginRight,marginBottom,marginLeft")
				}), kt("padding", {
					parser: gt("paddingTop,paddingRight,paddingBottom,paddingLeft")
				}), kt("clip", {
					defaultValue: "rect(0px,0px,0px,0px)",
					parser: function(t, e, i, s, r, a) {
						var o, l, c;
						return m < 9 ? (l = t.currentStyle, c = m < 8 ? " " : ",", o = "rect(" + l.clipTop + c + l.clipRight + c + l.clipBottom + c + l.clipLeft + ")", e = this.format(e).split(",").join(c)) : (o = this.format(tt(t, this.p, n, !1, this.dflt)), e = this.format(e)), this.parseComplex(t.style, o, e, r, a)
					}
				}), kt("textShadow", {
					defaultValue: "0px 0px 0px #999",
					color: !0,
					multi: !0
				}), kt("autoRound,strictUnits", {
					parser: function(t, e, i, s, n) {
						return n
					}
				}), kt("border", {
					defaultValue: "0px solid #000",
					parser: function(t, e, i, s, r, a) {
						var o = tt(t, "borderTopWidth", n, !1, "0px"),
							l = this.format(e).split(" "),
							c = l[0].replace(T, "");
						return "px" !== c && (o = parseFloat(o) / et(t, "borderTopWidth", 1, c) + c), this.parseComplex(t.style, this.format(o + " " + tt(t, "borderTopStyle", n, !1, "solid") + " " + tt(t, "borderTopColor", n, !1, "#000")), l.join(" "), r, a)
					},
					color: !0,
					formatter: function(t) {
						var e = t.split(" ");
						return e[0] + " " + (e[1] || "solid") + " " + (t.match(mt) || ["#000"])[0]
					}
				}), kt("borderWidth", {
					parser: gt("borderTopWidth,borderRightWidth,borderBottomWidth,borderLeftWidth")
				}), kt("float,cssFloat,styleFloat", {
					parser: function(t, e, i, s, n, r) {
						var a = t.style,
							o = "cssFloat" in a ? "cssFloat" : "styleFloat";
						return new bt(a, o, 0, 0, n, -1, i, !1, 0, a[o], e)
					}
				});
				var Vt = function(t) {
						var e, i = this.t,
							s = i.filter || tt(this.data, "filter") || "",
							n = this.s + this.c * t | 0;
						100 === n && (-1 === s.indexOf("atrix(") && -1 === s.indexOf("radient(") && -1 === s.indexOf("oader(") ? (i.removeAttribute("filter"), e = !tt(this.data, "filter")) : (i.filter = s.replace(O, ""), e = !0)), e || (this.xn1 && (i.filter = s = s || "alpha(opacity=" + n + ")"), -1 === s.indexOf("pacity") ? 0 === n && this.xn1 || (i.filter = s + " alpha(opacity=" + n + ")") : i.filter = s.replace(P, "opacity=" + n))
					};
				kt("opacity,alpha,autoAlpha", {
					defaultValue: "1",
					parser: function(t, e, i, s, r, a) {
						var o = parseFloat(tt(t, "opacity", n, !1, "1")),
							l = t.style,
							c = "autoAlpha" === i;
						return "string" == typeof e && "=" === e.charAt(1) && (e = ("-" === e.charAt(0) ? -1 : 1) * parseFloat(e.substr(2)) + o), c && 1 === o && "hidden" === tt(t, "visibility", n) && 0 !== e && (o = 0), V ? r = new bt(l, "opacity", o, e - o, r) : (r = new bt(l, "opacity", 100 * o, 100 * (e - o), r), r.xn1 = c ? 1 : 0, l.zoom = 1, r.type = 2, r.b = "alpha(opacity=" + r.s + ")", r.e = "alpha(opacity=" + (r.s + r.c) + ")", r.data = t, r.plugin = a, r.setRatio = Vt), c && (r = new bt(l, "visibility", 0, 0, r, -1, null, !1, 0, 0 !== o ? "inherit" : "hidden", 0 === e ? "hidden" : "inherit"), r.xs0 = "inherit", s._overwriteProps.push(r.n), s._overwriteProps.push(i)), r
					}
				});
				var Jt = function(t, e) {
						e && (t.removeProperty ? ("ms" !== e.substr(0, 2) && "webkit" !== e.substr(0, 6) || (e = "-" + e), t.removeProperty(e.replace(A, "-$1").toLowerCase())) : t.removeAttribute(e))
					},
					Qt = function(t) {
						if (this.t._gsClassPT = this, 1 === t || 0 === t) {
							this.t.setAttribute("class", 0 === t ? this.b : this.e);
							for (var e = this.data, i = this.t.style; e;) e.v ? i[e.p] = e.v : Jt(i, e.p), e = e._next;
							1 === t && this.t._gsClassPT === this && (this.t._gsClassPT = null)
						} else this.t.getAttribute("class") !== this.e && this.t.setAttribute("class", this.e)
					};
				kt("className", {
					parser: function(t, e, s, r, a, o, l) {
						var c, h, u, p, f, d = t.getAttribute("class") || "",
							_ = t.style.cssText;
						if (a = r._classNamePT = new bt(t, s, 0, 0, a, 2), a.setRatio = Qt, a.pr = -11, i = !0, a.b = d, h = st(t, n), u = t._gsClassPT) {
							for (p = {}, f = u.data; f;) p[f.p] = 1, f = f._next;
							u.setRatio(1)
						}
						return t._gsClassPT = a, a.e = "=" !== e.charAt(1) ? e : d.replace(new RegExp("(?:\\s|^)" + e.substr(2) + "(?![\\w-])"), "") + ("+" === e.charAt(0) ? " " + e.substr(2) : ""), t.setAttribute("class", a.e), c = nt(t, h, st(t), l, p), t.setAttribute("class", d), a.data = c.firstMPT, t.style.cssText = _, a = a.xfirst = r.parse(t, c.difs, a, o)
					}
				});
				var $t = function(t) {
						if ((1 === t || 0 === t) && this.data._totalTime === this.data._totalDuration && "isFromStart" !== this.data.data) {
							var e, i, s, n, r, a = this.t.style,
								o = c.transform.parse;
							if ("all" === this.e) a.cssText = "", n = !0;
							else for (e = this.e.split(" ").join("").split(","), s = e.length; --s > -1;) i = e[s], c[i] && (c[i].parse === o ? n = !0 : i = "transformOrigin" === i ? Mt : c[i].p), Jt(a, i);
							n && (Jt(a, Rt), (r = this.t._gsTransform) && (r.svg && (this.t.removeAttribute("data-svg-origin"), this.t.removeAttribute("transform")), delete this.t._gsTransform))
						}
					};
				for (kt("clearProps", {
					parser: function(t, e, s, n, r) {
						return r = new bt(t, s, 0, 0, r, 2), r.setRatio = $t, r.e = e, r.pr = -10, r.data = n._tween, i = !0, r
					}
				}), h = "bezier,throwProps,physicsProps,physics2D".split(","), Tt = h.length; Tt--;) Ot(h[Tt]);
				h = o.prototype, h._firstPT = h._lastParsedTransform = h._transform = null, h._onInitTween = function(t, e, r, l) {
					if (!t.nodeType) return !1;
					this._target = v = t, this._tween = r, this._vars = e, g = l, u = e.autoRound, i = !1, s = e.suffixMap || o.suffixMap, n = K(t, ""), a = this._overwriteProps;
					var h, d, m, y, b, x, w, T, P, O = t.style;
					if (p && "" === O.zIndex && ("auto" !== (h = tt(t, "zIndex", n)) && "" !== h || this._addLazySet(O, "zIndex", 0)), "string" == typeof e && (y = O.cssText, h = st(t, n), O.cssText = y + ";" + e, h = nt(t, h, st(t)).difs, !V && k.test(e) && (h.opacity = parseFloat(RegExp.$1)), e = h, O.cssText = y), e.className ? this._firstPT = d = c.className.parse(t, e.className, "className", this, null, null, e) : this._firstPT = d = this.parse(t, e, null), this._transformType) {
						for (P = 3 === this._transformType, Rt ? f && (p = !0, "" === O.zIndex && ("auto" !== (w = tt(t, "zIndex", n)) && "" !== w || this._addLazySet(O, "zIndex", 0)), _ && this._addLazySet(O, "WebkitBackfaceVisibility", this._vars.WebkitBackfaceVisibility || (P ? "visible" : "hidden"))) : O.zoom = 1, m = d; m && m._next;) m = m._next;
						T = new bt(t, "transform", 0, 0, null, 2), this._linkCSSP(T, null, m), T.setRatio = Rt ? Ht : Wt, T.data = this._transform || Ut(t, n, !0), T.tween = r, T.pr = -1, a.pop()
					}
					if (i) {
						for (; d;) {
							for (x = d._next, m = y; m && m.pr > d.pr;) m = m._next;
							(d._prev = m ? m._prev : b) ? d._prev._next = d : y = d, (d._next = m) ? m._prev = d : b = d, d = x
						}
						this._firstPT = y
					}
					return !0
				}, h.parse = function(t, e, i, r) {
					var a, o, l, h, p, f, d, _, m, y, b = t.style;
					for (a in e) {
						if (f = e[a], "function" == typeof f && (f = f(g, v)), o = c[a]) i = o.parse(t, f, a, this, i, r, e);
						else {
							if ("--" === a.substr(0, 2)) {
								this._tween._propLookup[a] = this._addTween.call(this._tween, t.style, "setProperty", K(t).getPropertyValue(a) + "", f + "", a, !1, a);
								continue
							}
							p = tt(t, a, n) + "", m = "string" == typeof f, "color" === a || "fill" === a || "stroke" === a || -1 !== a.indexOf("Color") || m && S.test(f) ? (m || (f = dt(f), f = (f.length > 3 ? "rgba(" : "rgb(") + f.join(",") + ")"), i = wt(b, a, p, f, !0, "transparent", i, 0, r)) : m && E.test(f) ? i = wt(b, a, p, f, !0, null, i, 0, r) : (l = parseFloat(p), d = l || 0 === l ? p.substr((l + "").length) : "", "" !== p && "auto" !== p || ("width" === a || "height" === a ? (l = ot(t, a, n), d = "px") : "left" === a || "top" === a ? (l = it(t, a, n), d = "px") : (l = "opacity" !== a ? 0 : 1, d = "")), y = m && "=" === f.charAt(1), y ? (h = parseInt(f.charAt(0) + "1", 10), f = f.substr(2), h *= parseFloat(f), _ = f.replace(T, "")) : (h = parseFloat(f), _ = m ? f.replace(T, "") : ""), "" === _ && (_ = a in s ? s[a] : d), f = h || 0 === h ? (y ? h + l : h) + _ : e[a], d !== _ && ("" === _ && "lineHeight" !== a || (h || 0 === h) && l && (l = et(t, a, l, d), "%" === _ ? (l /= et(t, a, 100, "%") / 100, !0 !== e.strictUnits && (p = l + "%")) : "em" === _ || "rem" === _ || "vw" === _ || "vh" === _ ? l /= et(t, a, 1, _) : "px" !== _ && (h = et(t, a, h, _), _ = "px"), y && (h || 0 === h) && (f = h + l + _))), y && (h += l), !l && 0 !== l || !h && 0 !== h ? void 0 !== b[a] && (f || f + "" != "NaN" && null != f) ? (i = new bt(b, a, h || l || 0, 0, i, -1, a, !1, 0, p, f), i.xs0 = "none" !== f || "display" !== a && -1 === a.indexOf("Style") ? f : p) : Q("invalid " + a + " tween value: " + e[a]) : (i = new bt(b, a, l, h - l, i, 0, a, !1 !== u && ("px" === _ || "zIndex" === a), 0, p, f), i.xs0 = _))
						}
						r && i && !i.plugin && (i.plugin = r)
					}
					return i
				}, h.setRatio = function(t) {
					var e, i, s, n = this._firstPT;
					if (1 !== t || this._tween._time !== this._tween._duration && 0 !== this._tween._time) if (t || this._tween._time !== this._tween._duration && 0 !== this._tween._time || -1e-6 === this._tween._rawPrevTime) for (; n;) {
						if (e = n.c * t + n.s, n.r ? e = Math.round(e) : e < 1e-6 && e > -1e-6 && (e = 0), n.type) if (1 === n.type) if (2 === (s = n.l)) n.t[n.p] = n.xs0 + e + n.xs1 + n.xn1 + n.xs2;
						else if (3 === s) n.t[n.p] = n.xs0 + e + n.xs1 + n.xn1 + n.xs2 + n.xn2 + n.xs3;
						else if (4 === s) n.t[n.p] = n.xs0 + e + n.xs1 + n.xn1 + n.xs2 + n.xn2 + n.xs3 + n.xn3 + n.xs4;
						else if (5 === s) n.t[n.p] = n.xs0 + e + n.xs1 + n.xn1 + n.xs2 + n.xn2 + n.xs3 + n.xn3 + n.xs4 + n.xn4 + n.xs5;
						else {
							for (i = n.xs0 + e + n.xs1, s = 1; s < n.l; s++) i += n["xn" + s] + n["xs" + (s + 1)];
							n.t[n.p] = i
						} else - 1 === n.type ? n.t[n.p] = n.xs0 : n.setRatio && n.setRatio(t);
						else n.t[n.p] = e + n.xs0;
						n = n._next
					} else for (; n;) 2 !== n.type ? n.t[n.p] = n.b : n.setRatio(t), n = n._next;
					else for (; n;) {
						if (2 !== n.type) if (n.r && -1 !== n.type) if (e = Math.round(n.s + n.c), n.type) {
							if (1 === n.type) {
								for (s = n.l, i = n.xs0 + e + n.xs1, s = 1; s < n.l; s++) i += n["xn" + s] + n["xs" + (s + 1)];
								n.t[n.p] = i
							}
						} else n.t[n.p] = e + n.xs0;
						else n.t[n.p] = n.e;
						else n.setRatio(t);
						n = n._next
					}
				}, h._enableTransforms = function(t) {
					this._transform = this._transform || Ut(this._target, n, !0), this._transformType = this._transform.svg && St || !t && 3 !== this._transformType ? 2 : 3
				};
				var Zt = function(t) {
						this.t[this.p] = this.e, this.data._linkCSSP(this, this._next, null, !0)
					};
				h._addLazySet = function(t, e, i) {
					var s = this._firstPT = new bt(t, e, 0, 0, this._firstPT, 2);
					s.e = i, s.setRatio = Zt, s.data = this
				}, h._linkCSSP = function(t, e, i, s) {
					return t && (e && (e._prev = t), t._next && (t._next._prev = t._prev), t._prev ? t._prev._next = t._next : this._firstPT === t && (this._firstPT = t._next, s = !0), i ? i._next = t : s || null !== this._firstPT || (this._firstPT = t), t._next = e, t._prev = i), t
				}, h._mod = function(t) {
					for (var e = this._firstPT; e;)"function" == typeof t[e.p] && t[e.p] === Math.round && (e.r = 1), e = e._next
				}, h._kill = function(e) {
					var i, s, n, r = e;
					if (e.autoAlpha || e.alpha) {
						r = {};
						for (s in e) r[s] = e[s];
						r.opacity = 1, r.autoAlpha && (r.visibility = 1)
					}
					for (e.className && (i = this._classNamePT) && (n = i.xfirst, n && n._prev ? this._linkCSSP(n._prev, i._next, n._prev._prev) : n === this._firstPT && (this._firstPT = i._next), i._next && this._linkCSSP(i._next, i._next._next, n._prev), this._classNamePT = null), i = this._firstPT; i;) i.plugin && i.plugin !== s && i.plugin._kill && (i.plugin._kill(e), s = i.plugin), i = i._next;
					return t.prototype._kill.call(this, r)
				};
				var Gt = function(t, e, i) {
						var s, n, r, a;
						if (t.slice) for (n = t.length; --n > -1;) Gt(t[n], e, i);
						else for (s = t.childNodes, n = s.length; --n > -1;) r = s[n], a = r.type, r.style && (e.push(st(r)), i && i.push(r)), 1 !== a && 9 !== a && 11 !== a || !r.childNodes.length || Gt(r, e, i)
					};
				return o.cascadeTo = function(t, i, s) {
					var n, r, a, o, l = e.to(t, i, s),
						c = [l],
						h = [],
						u = [],
						p = [],
						f = e._internals.reservedProps;
					for (t = l._targets || l.target, Gt(t, h, p), l.render(i, !0, !0), Gt(t, u), l.render(0, !0, !0), l._enabled(!0), n = p.length; --n > -1;) if (r = nt(p[n], h[n], u[n]), r.firstMPT) {
						r = r.difs;
						for (a in s) f[a] && (r[a] = s[a]);
						o = {};
						for (a in r) o[a] = h[n][a];
						c.push(e.fromTo(p[n], i, o, r))
					}
					return c
				}, t.activate([o]), o
			}, !0), function() {
				var t = r._gsDefine.plugin({
					propName: "roundProps",
					version: "1.6.0",
					priority: -1,
					API: 2,
					init: function(t, e, i) {
						return this._tween = i, !0
					}
				}),
					e = function(t) {
						for (; t;) t.f || t.blob || (t.m = Math.round), t = t._next
					},
					i = t.prototype;
				i._onInitAllProps = function() {
					for (var t, i, s, n = this._tween, r = n.vars.roundProps.join ? n.vars.roundProps : n.vars.roundProps.split(","), a = r.length, o = {}, l = n._propLookup.roundProps; --a > -1;) o[r[a]] = Math.round;
					for (a = r.length; --a > -1;) for (t = r[a], i = n._firstPT; i;) s = i._next, i.pg ? i.t._mod(o) : i.n === t && (2 === i.f && i.t ? e(i.t._firstPT) : (this._add(i.t, t, i.s, i.c), s && (s._prev = i._prev), i._prev ? i._prev._next = s : n._firstPT === i && (n._firstPT = s), i._next = i._prev = null, n._propLookup[t] = l)), i = s;
					return !1
				}, i._add = function(t, e, i, s) {
					this._addTween(t, e, i, i + s, e, Math.round), this._overwriteProps.push(e)
				}
			}(), function() {
				r._gsDefine.plugin({
					propName: "attr",
					API: 2,
					version: "0.6.1",
					init: function(t, e, i, s) {
						var n, r;
						if ("function" != typeof t.setAttribute) return !1;
						for (n in e) r = e[n], "function" == typeof r && (r = r(s, t)), this._addTween(t, "setAttribute", t.getAttribute(n) + "", r + "", n, !1, n), this._overwriteProps.push(n);
						return !0
					}
				})
			}(), r._gsDefine.plugin({
				propName: "directionalRotation",
				version: "0.3.1",
				API: 2,
				init: function(t, e, i, s) {
					"object" != typeof e && (e = {
						rotation: e
					}), this.finals = {};
					var n, r, a, o, l, c, h = !0 === e.useRadians ? 2 * Math.PI : 360;
					for (n in e)"useRadians" !== n && (o = e[n], "function" == typeof o && (o = o(s, t)), c = (o + "").split("_"), r = c[0], a = parseFloat("function" != typeof t[n] ? t[n] : t[n.indexOf("set") || "function" != typeof t["get" + n.substr(3)] ? n : "get" + n.substr(3)]()), o = this.finals[n] = "string" == typeof r && "=" === r.charAt(1) ? a + parseInt(r.charAt(0) + "1", 10) * Number(r.substr(2)) : Number(r) || 0, l = o - a, c.length && (r = c.join("_"), -1 !== r.indexOf("short") && (l %= h) !== l % (h / 2) && (l = l < 0 ? l + h : l - h), -1 !== r.indexOf("_cw") && l < 0 ? l = (l + 9999999999 * h) % h - (l / h | 0) * h : -1 !== r.indexOf("ccw") && l > 0 && (l = (l - 9999999999 * h) % h - (l / h | 0) * h)), (l > 1e-6 || l < -1e-6) && (this._addTween(t, n, a, a + l, n), this._overwriteProps.push(n)));
					return !0
				},
				set: function(t) {
					var e;
					if (1 !== t) this._super.setRatio.call(this, t);
					else for (e = this._firstPT; e;) e.f ? e.t[e.p](this.finals[e.p]) : e.t[e.p] = this.finals[e.p], e = e._next
				}
			})._autoCSS = !0, r._gsDefine("easing.Back", ["easing.Ease"], function(t) {
				var e, i, s, n, a = r.GreenSockGlobals || r,
					o = a.com.greensock,
					l = 2 * Math.PI,
					c = Math.PI / 2,
					h = o._class,
					u = function(e, i) {
						var s = h("easing." + e, function() {}, !0),
							n = s.prototype = new t;
						return n.constructor = s, n.getRatio = i, s
					},
					p = t.register ||
				function() {}, f = function(t, e, i, s, n) {
					var r = h("easing." + t, {
						easeOut: new e,
						easeIn: new i,
						easeInOut: new s
					}, !0);
					return p(r, t), r
				}, d = function(t, e, i) {
					this.t = t, this.v = e, i && (this.next = i, i.prev = this, this.c = i.v - e, this.gap = i.t - t)
				}, _ = function(e, i) {
					var s = h("easing." + e, function(t) {
						this._p1 = t || 0 === t ? t : 1.70158, this._p2 = 1.525 * this._p1
					}, !0),
						n = s.prototype = new t;
					return n.constructor = s, n.getRatio = i, n.config = function(t) {
						return new s(t)
					}, s
				}, m = f("Back", _("BackOut", function(t) {
					return (t -= 1) * t * ((this._p1 + 1) * t + this._p1) + 1
				}), _("BackIn", function(t) {
					return t * t * ((this._p1 + 1) * t - this._p1)
				}), _("BackInOut", function(t) {
					return (t *= 2) < 1 ? .5 * t * t * ((this._p2 + 1) * t - this._p2) : .5 * ((t -= 2) * t * ((this._p2 + 1) * t + this._p2) + 2)
				})), v = h("easing.SlowMo", function(t, e, i) {
					e = e || 0 === e ? e : .7, null == t ? t = .7 : t > 1 && (t = 1), this._p = 1 !== t ? e : 0, this._p1 = (1 - t) / 2, this._p2 = t, this._p3 = this._p1 + this._p2, this._calcEnd = !0 === i
				}, !0), g = v.prototype = new t;
				return g.constructor = v, g.getRatio = function(t) {
					var e = t + (.5 - t) * this._p;
					return t < this._p1 ? this._calcEnd ? 1 - (t = 1 - t / this._p1) * t : e - (t = 1 - t / this._p1) * t * t * t * e : t > this._p3 ? this._calcEnd ? 1 === t ? 0 : 1 - (t = (t - this._p3) / this._p1) * t : e + (t - e) * (t = (t - this._p3) / this._p1) * t * t * t : this._calcEnd ? 1 : e
				}, v.ease = new v(.7, .7), g.config = v.config = function(t, e, i) {
					return new v(t, e, i)
				}, e = h("easing.SteppedEase", function(t, e) {
					t = t || 1, this._p1 = 1 / t, this._p2 = t + (e ? 0 : 1), this._p3 = e ? 1 : 0
				}, !0), g = e.prototype = new t, g.constructor = e, g.getRatio = function(t) {
					return t < 0 ? t = 0 : t >= 1 && (t = .999999999), ((this._p2 * t | 0) + this._p3) * this._p1
				}, g.config = e.config = function(t, i) {
					return new e(t, i)
				}, i = h("easing.ExpoScaleEase", function(t, e, i) {
					this._p1 = Math.log(e / t), this._p2 = e - t, this._p3 = t, this._ease = i
				}, !0), g = i.prototype = new t, g.constructor = i, g.getRatio = function(t) {
					return this._ease && (t = this._ease.getRatio(t)), (this._p3 * Math.exp(this._p1 * t) - this._p3) / this._p2
				}, g.config = i.config = function(t, e, s) {
					return new i(t, e, s)
				}, s = h("easing.RoughEase", function(e) {
					e = e || {};
					for (var i, s, n, r, a, o, l = e.taper || "none", c = [], h = 0, u = 0 | (e.points || 20), p = u, f = !1 !== e.randomize, _ = !0 === e.clamp, m = e.template instanceof t ? e.template : null, v = "number" == typeof e.strength ? .4 * e.strength : .4; --p > -1;) i = f ? Math.random() : 1 / u * p, s = m ? m.getRatio(i) : i, "none" === l ? n = v : "out" === l ? (r = 1 - i, n = r * r * v) : "in" === l ? n = i * i * v : i < .5 ? (r = 2 * i, n = r * r * .5 * v) : (r = 2 * (1 - i), n = r * r * .5 * v), f ? s += Math.random() * n - .5 * n : p % 2 ? s += .5 * n : s -= .5 * n, _ && (s > 1 ? s = 1 : s < 0 && (s = 0)), c[h++] = {
						x: i,
						y: s
					};
					for (c.sort(function(t, e) {
						return t.x - e.x
					}), o = new d(1, 1, null), p = u; --p > -1;) a = c[p], o = new d(a.x, a.y, o);
					this._prev = new d(0, 0, 0 !== o.t ? o : o.next)
				}, !0), g = s.prototype = new t, g.constructor = s, g.getRatio = function(t) {
					var e = this._prev;
					if (t > e.t) {
						for (; e.next && t >= e.t;) e = e.next;
						e = e.prev
					} else for (; e.prev && t <= e.t;) e = e.prev;
					return this._prev = e, e.v + (t - e.t) / e.gap * e.c
				}, g.config = function(t) {
					return new s(t)
				}, s.ease = new s, f("Bounce", u("BounceOut", function(t) {
					return t < 1 / 2.75 ? 7.5625 * t * t : t < 2 / 2.75 ? 7.5625 * (t -= 1.5 / 2.75) * t + .75 : t < 2.5 / 2.75 ? 7.5625 * (t -= 2.25 / 2.75) * t + .9375 : 7.5625 * (t -= 2.625 / 2.75) * t + .984375
				}), u("BounceIn", function(t) {
					return (t = 1 - t) < 1 / 2.75 ? 1 - 7.5625 * t * t : t < 2 / 2.75 ? 1 - (7.5625 * (t -= 1.5 / 2.75) * t + .75) : t < 2.5 / 2.75 ? 1 - (7.5625 * (t -= 2.25 / 2.75) * t + .9375) : 1 - (7.5625 * (t -= 2.625 / 2.75) * t + .984375)
				}), u("BounceInOut", function(t) {
					var e = t < .5;
					return t = e ? 1 - 2 * t : 2 * t - 1, t < 1 / 2.75 ? t *= 7.5625 * t : t = t < 2 / 2.75 ? 7.5625 * (t -= 1.5 / 2.75) * t + .75 : t < 2.5 / 2.75 ? 7.5625 * (t -= 2.25 / 2.75) * t + .9375 : 7.5625 * (t -= 2.625 / 2.75) * t + .984375, e ? .5 * (1 - t) : .5 * t + .5
				})), f("Circ", u("CircOut", function(t) {
					return Math.sqrt(1 - (t -= 1) * t)
				}), u("CircIn", function(t) {
					return -(Math.sqrt(1 - t * t) - 1)
				}), u("CircInOut", function(t) {
					return (t *= 2) < 1 ? -.5 * (Math.sqrt(1 - t * t) - 1) : .5 * (Math.sqrt(1 - (t -= 2) * t) + 1)
				})), n = function(e, i, s) {
					var n = h("easing." + e, function(t, e) {
						this._p1 = t >= 1 ? t : 1, this._p2 = (e || s) / (t < 1 ? t : 1), this._p3 = this._p2 / l * (Math.asin(1 / this._p1) || 0), this._p2 = l / this._p2
					}, !0),
						r = n.prototype = new t;
					return r.constructor = n, r.getRatio = i, r.config = function(t, e) {
						return new n(t, e)
					}, n
				}, f("Elastic", n("ElasticOut", function(t) {
					return this._p1 * Math.pow(2, -10 * t) * Math.sin((t - this._p3) * this._p2) + 1
				}, .3), n("ElasticIn", function(t) {
					return -this._p1 * Math.pow(2, 10 * (t -= 1)) * Math.sin((t - this._p3) * this._p2)
				}, .3), n("ElasticInOut", function(t) {
					return (t *= 2) < 1 ? this._p1 * Math.pow(2, 10 * (t -= 1)) * Math.sin((t - this._p3) * this._p2) * -.5 : this._p1 * Math.pow(2, -10 * (t -= 1)) * Math.sin((t - this._p3) * this._p2) * .5 + 1
				}, .45)), f("Expo", u("ExpoOut", function(t) {
					return 1 - Math.pow(2, -10 * t)
				}), u("ExpoIn", function(t) {
					return Math.pow(2, 10 * (t - 1)) - .001
				}), u("ExpoInOut", function(t) {
					return (t *= 2) < 1 ? .5 * Math.pow(2, 10 * (t - 1)) : .5 * (2 - Math.pow(2, -10 * (t - 1)))
				})), f("Sine", u("SineOut", function(t) {
					return Math.sin(t * c)
				}), u("SineIn", function(t) {
					return 1 - Math.cos(t * c)
				}), u("SineInOut", function(t) {
					return -.5 * (Math.cos(Math.PI * t) - 1)
				})), h("easing.EaseLookup", {
					find: function(e) {
						return t.map[e]
					}
				}, !0), p(a.SlowMo, "SlowMo", "ease,"), p(s, "RoughEase", "ease,"), p(e, "SteppedEase", "ease,"), m
			}, !0)
		}), r._gsDefine && r._gsQueue.pop()(), function(i, r) {
			"use strict";
			var a = {},
				o = i.document,
				l = i.GreenSockGlobals = i.GreenSockGlobals || i;
			if (!l.TweenLite) {
				var c, h, u, p, f, d = function(t) {
						var e, i = t.split("."),
							s = l;
						for (e = 0; e < i.length; e++) s[i[e]] = s = s[i[e]] || {};
						return s
					},
					_ = d("com.greensock"),
					m = function(t) {
						var e, i = [],
							s = t.length;
						for (e = 0; e !== s; i.push(t[e++]));
						return i
					},
					v = function() {},
					g = function() {
						var t = Object.prototype.toString,
							e = t.call([]);
						return function(i) {
							return null != i && (i instanceof Array || "object" == typeof i && !! i.push && t.call(i) === e)
						}
					}(),
					y = {},
					b = function(i, r, o, c) {
						this.sc = y[i] ? y[i].sc : [], y[i] = this, this.gsClass = null, this.func = o;
						var h = [];
						this.check = function(u) {
							for (var p, f, _, m, v = r.length, g = v; --v > -1;)(p = y[r[v]] || new b(r[v], [])).gsClass ? (h[v] = p.gsClass, g--) : u && p.sc.push(this);
							if (0 === g && o) {
								if (f = ("com.greensock." + i).split("."), _ = f.pop(), m = d(f.join("."))[_] = this.gsClass = o.apply(o, h), c) if (l[_] = a[_] = m, void 0 !== t && t.exports) if ("TweenMax" === i) {
									t.exports = a.TweenMax = m;
									for (v in a) m[v] = a[v]
								} else a.TweenMax && (a.TweenMax[_] = m);
								else s = [], void 0 !== (n = function() {
									return m
								}.apply(e, s)) && (t.exports = n);
								for (v = 0; v < this.sc.length; v++) this.sc[v].check()
							}
						}, this.check(!0)
					},
					x = i._gsDefine = function(t, e, i, s) {
						return new b(t, e, i, s)
					},
					w = _._class = function(t, e, i) {
						return e = e ||
						function() {}, x(t, [], function() {
							return e
						}, i), e
					};
				x.globals = l;
				var T = [0, 0, 1, 1],
					P = w("easing.Ease", function(t, e, i, s) {
						this._func = t, this._type = i || 0, this._power = s || 0, this._params = e ? T.concat(e) : T
					}, !0),
					k = P.map = {},
					O = P.register = function(t, e, i, s) {
						for (var n, r, a, o, l = e.split(","), c = l.length, h = (i || "easeIn,easeOut,easeInOut").split(","); --c > -1;) for (r = l[c], n = s ? w("easing." + r, null, !0) : _.easing[r] || {}, a = h.length; --a > -1;) o = h[a], k[r + "." + o] = k[o + r] = n[o] = t.getRatio ? t : t[o] || new t
					};
				for (u = P.prototype, u._calcEnd = !1, u.getRatio = function(t) {
					if (this._func) return this._params[0] = t, this._func.apply(null, this._params);
					var e = this._type,
						i = this._power,
						s = 1 === e ? 1 - t : 2 === e ? t : t < .5 ? 2 * t : 2 * (1 - t);
					return 1 === i ? s *= s : 2 === i ? s *= s * s : 3 === i ? s *= s * s * s : 4 === i && (s *= s * s * s * s), 1 === e ? 1 - s : 2 === e ? s : t < .5 ? s / 2 : 1 - s / 2
				}, c = ["Linear", "Quad", "Cubic", "Quart", "Quint,Strong"], h = c.length; --h > -1;) u = c[h] + ",Power" + h, O(new P(null, null, 1, h), u, "easeOut", !0), O(new P(null, null, 2, h), u, "easeIn" + (0 === h ? ",easeNone" : "")), O(new P(null, null, 3, h), u, "easeInOut");
				k.linear = _.easing.Linear.easeIn, k.swing = _.easing.Quad.easeInOut;
				var S = w("events.EventDispatcher", function(t) {
					this._listeners = {}, this._eventTarget = t || this
				});
				u = S.prototype, u.addEventListener = function(t, e, i, s, n) {
					n = n || 0;
					var r, a, o = this._listeners[t],
						l = 0;
					for (this !== p || f || p.wake(), null == o && (this._listeners[t] = o = []), a = o.length; --a > -1;) r = o[a], r.c === e && r.s === i ? o.splice(a, 1) : 0 === l && r.pr < n && (l = a + 1);
					o.splice(l, 0, {
						c: e,
						s: i,
						up: s,
						pr: n
					})
				}, u.removeEventListener = function(t, e) {
					var i, s = this._listeners[t];
					if (s) for (i = s.length; --i > -1;) if (s[i].c === e) return void s.splice(i, 1)
				}, u.dispatchEvent = function(t) {
					var e, i, s, n = this._listeners[t];
					if (n) for (e = n.length, e > 1 && (n = n.slice(0)), i = this._eventTarget; --e > -1;)(s = n[e]) && (s.up ? s.c.call(s.s || i, {
						type: t,
						target: i
					}) : s.c.call(s.s || i))
				};
				var A = i.requestAnimationFrame,
					R = i.cancelAnimationFrame,
					C = Date.now ||
				function() {
					return (new Date).getTime()
				}, M = C();
				for (c = ["ms", "moz", "webkit", "o"], h = c.length; --h > -1 && !A;) A = i[c[h] + "RequestAnimationFrame"], R = i[c[h] + "CancelAnimationFrame"] || i[c[h] + "CancelRequestAnimationFrame"];
				w("Ticker", function(t, e) {
					var i, s, n, r, a, l = this,
						c = C(),
						h = !(!1 === e || !A) && "auto",
						u = 500,
						d = 33,
						_ = function(t) {
							var e, o, h = C() - M;
							h > u && (c += h - d), M += h, l.time = (M - c) / 1e3, e = l.time - a, (!i || e > 0 || !0 === t) && (l.frame++, a += e + (e >= r ? .004 : r - e), o = !0), !0 !== t && (n = s(_)), o && l.dispatchEvent("tick")
						};
					S.call(l), l.time = l.frame = 0, l.tick = function() {
						_(!0)
					}, l.lagSmoothing = function(t, e) {
						if (!arguments.length) return u < 1e10;
						u = t || 1e10, d = Math.min(e, u, 0)
					}, l.sleep = function() {
						null != n && (h && R ? R(n) : clearTimeout(n), s = v, n = null, l === p && (f = !1))
					}, l.wake = function(t) {
						null !== n ? l.sleep() : t ? c += -M + (M = C()) : l.frame > 10 && (M = C() - u + 5), s = 0 === i ? v : h && A ? A : function(t) {
							return setTimeout(t, 1e3 * (a - l.time) + 1 | 0)
						}, l === p && (f = !0), _(2)
					}, l.fps = function(t) {
						if (!arguments.length) return i;
						i = t, r = 1 / (i || 60), a = this.time + r, l.wake()
					}, l.useRAF = function(t) {
						if (!arguments.length) return h;
						l.sleep(), h = t, l.fps(i)
					}, l.fps(t), setTimeout(function() {
						"auto" === h && l.frame < 5 && "hidden" !== (o || {}).visibilityState && l.useRAF(!1)
					}, 1500)
				}), u = _.Ticker.prototype = new _.events.EventDispatcher, u.constructor = _.Ticker;
				var z = w("core.Animation", function(t, e) {
					if (this.vars = e = e || {}, this._duration = this._totalDuration = t || 0, this._delay = Number(e.delay) || 0, this._timeScale = 1, this._active = !0 === e.immediateRender, this.data = e.data, this._reversed = !0 === e.reversed, G) {
						f || p.wake();
						var i = this.vars.useFrames ? Z : G;
						i.add(this, i._time), this.vars.paused && this.paused(!0)
					}
				});
				p = z.ticker = new _.Ticker, u = z.prototype, u._dirty = u._gc = u._initted = u._paused = !1, u._totalTime = u._time = 0, u._rawPrevTime = -1, u._next = u._last = u._onUpdate = u._timeline = u.timeline = null, u._paused = !1;
				var D = function() {
						f && C() - M > 2e3 && ("hidden" !== (o || {}).visibilityState || !p.lagSmoothing()) && p.wake();
						var t = setTimeout(D, 2e3);
						t.unref && t.unref()
					};
				D(), u.play = function(t, e) {
					return null != t && this.seek(t, e), this.reversed(!1).paused(!1)
				}, u.pause = function(t, e) {
					return null != t && this.seek(t, e), this.paused(!0)
				}, u.resume = function(t, e) {
					return null != t && this.seek(t, e), this.paused(!1)
				}, u.seek = function(t, e) {
					return this.totalTime(Number(t), !1 !== e)
				}, u.restart = function(t, e) {
					return this.reversed(!1).paused(!1).totalTime(t ? -this._delay : 0, !1 !== e, !0)
				}, u.reverse = function(t, e) {
					return null != t && this.seek(t || this.totalDuration(), e), this.reversed(!0).paused(!1)
				}, u.render = function(t, e, i) {}, u.invalidate = function() {
					return this._time = this._totalTime = 0, this._initted = this._gc = !1, this._rawPrevTime = -1, !this._gc && this.timeline || this._enabled(!0), this
				}, u.isActive = function() {
					var t, e = this._timeline,
						i = this._startTime;
					return !e || !this._gc && !this._paused && e.isActive() && (t = e.rawTime(!0)) >= i && t < i + this.totalDuration() / this._timeScale - 1e-7
				}, u._enabled = function(t, e) {
					return f || p.wake(), this._gc = !t, this._active = this.isActive(), !0 !== e && (t && !this.timeline ? this._timeline.add(this, this._startTime - this._delay) : !t && this.timeline && this._timeline._remove(this, !0)), !1
				}, u._kill = function(t, e) {
					return this._enabled(!1, !1)
				}, u.kill = function(t, e) {
					return this._kill(t, e), this
				}, u._uncache = function(t) {
					for (var e = t ? this : this.timeline; e;) e._dirty = !0, e = e.timeline;
					return this
				}, u._swapSelfInParams = function(t) {
					for (var e = t.length, i = t.concat(); --e > -1;)"{self}" === t[e] && (i[e] = this);
					return i
				}, u._callback = function(t) {
					var e = this.vars,
						i = e[t],
						s = e[t + "Params"],
						n = e[t + "Scope"] || e.callbackScope || this;
					switch (s ? s.length : 0) {
					case 0:
						i.call(n);
						break;
					case 1:
						i.call(n, s[0]);
						break;
					case 2:
						i.call(n, s[0], s[1]);
						break;
					default:
						i.apply(n, s)
					}
				}, u.eventCallback = function(t, e, i, s) {
					if ("on" === (t || "").substr(0, 2)) {
						var n = this.vars;
						if (1 === arguments.length) return n[t];
						null == e ? delete n[t] : (n[t] = e, n[t + "Params"] = g(i) && -1 !== i.join("").indexOf("{self}") ? this._swapSelfInParams(i) : i, n[t + "Scope"] = s), "onUpdate" === t && (this._onUpdate = e)
					}
					return this
				}, u.delay = function(t) {
					return arguments.length ? (this._timeline.smoothChildTiming && this.startTime(this._startTime + t - this._delay), this._delay = t, this) : this._delay
				}, u.duration = function(t) {
					return arguments.length ? (this._duration = this._totalDuration = t, this._uncache(!0), this._timeline.smoothChildTiming && this._time > 0 && this._time < this._duration && 0 !== t && this.totalTime(this._totalTime * (t / this._duration), !0), this) : (this._dirty = !1, this._duration)
				}, u.totalDuration = function(t) {
					return this._dirty = !1, arguments.length ? this.duration(t) : this._totalDuration
				}, u.time = function(t, e) {
					return arguments.length ? (this._dirty && this.totalDuration(), this.totalTime(t > this._duration ? this._duration : t, e)) : this._time
				}, u.totalTime = function(t, e, i) {
					if (f || p.wake(), !arguments.length) return this._totalTime;
					if (this._timeline) {
						if (t < 0 && !i && (t += this.totalDuration()), this._timeline.smoothChildTiming) {
							this._dirty && this.totalDuration();
							var s = this._totalDuration,
								n = this._timeline;
							if (t > s && !i && (t = s), this._startTime = (this._paused ? this._pauseTime : n._time) - (this._reversed ? s - t : t) / this._timeScale, n._dirty || this._uncache(!1), n._timeline) for (; n._timeline;) n._timeline._time !== (n._startTime + n._totalTime) / n._timeScale && n.totalTime(n._totalTime, !0), n = n._timeline
						}
						this._gc && this._enabled(!0, !1), this._totalTime === t && 0 !== this._duration || (B.length && tt(), this.render(t, e, !1), B.length && tt())
					}
					return this
				}, u.progress = u.totalProgress = function(t, e) {
					var i = this.duration();
					return arguments.length ? this.totalTime(i * t, e) : i ? this._time / i : this.ratio
				}, u.startTime = function(t) {
					return arguments.length ? (t !== this._startTime && (this._startTime = t, this.timeline && this.timeline._sortChildren && this.timeline.add(this, t - this._delay)), this) : this._startTime
				}, u.endTime = function(t) {
					return this._startTime + (0 != t ? this.totalDuration() : this.duration()) / this._timeScale
				}, u.timeScale = function(t) {
					if (!arguments.length) return this._timeScale;
					var e, i;
					for (t = t || 1e-10, this._timeline && this._timeline.smoothChildTiming && (e = this._pauseTime, i = e || 0 === e ? e : this._timeline.totalTime(), this._startTime = i - (i - this._startTime) * this._timeScale / t), this._timeScale = t, i = this.timeline; i && i.timeline;) i._dirty = !0, i.totalDuration(), i = i.timeline;
					return this
				}, u.reversed = function(t) {
					return arguments.length ? (t != this._reversed && (this._reversed = t, this.totalTime(this._timeline && !this._timeline.smoothChildTiming ? this.totalDuration() - this._totalTime : this._totalTime, !0)), this) : this._reversed
				}, u.paused = function(t) {
					if (!arguments.length) return this._paused;
					var e, i, s = this._timeline;
					return t != this._paused && s && (f || t || p.wake(), e = s.rawTime(), i = e - this._pauseTime, !t && s.smoothChildTiming && (this._startTime += i, this._uncache(!1)), this._pauseTime = t ? e : null, this._paused = t, this._active = this.isActive(), !t && 0 !== i && this._initted && this.duration() && (e = s.smoothChildTiming ? this._totalTime : (e - this._startTime) / this._timeScale, this.render(e, e === this._totalTime, !0))), this._gc && !t && this._enabled(!0, !1), this
				};
				var F = w("core.SimpleTimeline", function(t) {
					z.call(this, 0, t), this.autoRemoveChildren = this.smoothChildTiming = !0
				});
				u = F.prototype = new z, u.constructor = F, u.kill()._gc = !1, u._first = u._last = u._recent = null, u._sortChildren = !1, u.add = u.insert = function(t, e, i, s) {
					var n, r;
					if (t._startTime = Number(e || 0) + t._delay, t._paused && this !== t._timeline && (t._pauseTime = t._startTime + (this.rawTime() - t._startTime) / t._timeScale), t.timeline && t.timeline._remove(t, !0), t.timeline = t._timeline = this, t._gc && t._enabled(!0, !0), n = this._last, this._sortChildren) for (r = t._startTime; n && n._startTime > r;) n = n._prev;
					return n ? (t._next = n._next, n._next = t) : (t._next = this._first, this._first = t), t._next ? t._next._prev = t : this._last = t, t._prev = n, this._recent = t, this._timeline && this._uncache(!0), this
				}, u._remove = function(t, e) {
					return t.timeline === this && (e || t._enabled(!1, !0), t._prev ? t._prev._next = t._next : this._first === t && (this._first = t._next), t._next ? t._next._prev = t._prev : this._last === t && (this._last = t._prev), t._next = t._prev = t.timeline = null, t === this._recent && (this._recent = this._last), this._timeline && this._uncache(!0)), this
				}, u.render = function(t, e, i) {
					var s, n = this._first;
					for (this._totalTime = this._time = this._rawPrevTime = t; n;) s = n._next, (n._active || t >= n._startTime && !n._paused && !n._gc) && (n._reversed ? n.render((n._dirty ? n.totalDuration() : n._totalDuration) - (t - n._startTime) * n._timeScale, e, i) : n.render((t - n._startTime) * n._timeScale, e, i)), n = s
				}, u.rawTime = function() {
					return f || p.wake(), this._totalTime
				};
				var I = w("TweenLite", function(t, e, s) {
					if (z.call(this, e, s), this.render = I.prototype.render, null == t) throw "Cannot tween a null target.";
					this.target = t = "string" != typeof t ? t : I.selector(t) || t;
					var n, r, a, o = t.jquery || t.length && t !== i && t[0] && (t[0] === i || t[0].nodeType && t[0].style && !t.nodeType),
						l = this.vars.overwrite;
					if (this._overwrite = l = null == l ? $[I.defaultOverwrite] : "number" == typeof l ? l >> 0 : $[l], (o || t instanceof Array || t.push && g(t)) && "number" != typeof t[0]) for (this._targets = a = m(t), this._propLookup = [], this._siblings = [], n = 0; n < a.length; n++) r = a[n], r ? "string" != typeof r ? r.length && r !== i && r[0] && (r[0] === i || r[0].nodeType && r[0].style && !r.nodeType) ? (a.splice(n--, 1), this._targets = a = a.concat(m(r))) : (this._siblings[n] = et(r, this, !1), 1 === l && this._siblings[n].length > 1 && st(r, this, null, 1, this._siblings[n])) : "string" == typeof(r = a[n--] = I.selector(r)) && a.splice(n + 1, 1) : a.splice(n--, 1);
					else this._propLookup = {}, this._siblings = et(t, this, !1), 1 === l && this._siblings.length > 1 && st(t, this, null, 1, this._siblings);
					(this.vars.immediateRender || 0 === e && 0 === this._delay && !1 !== this.vars.immediateRender) && (this._time = -1e-10, this.render(Math.min(0, -this._delay)))
				}, !0),
					E = function(t) {
						return t && t.length && t !== i && t[0] && (t[0] === i || t[0].nodeType && t[0].style && !t.nodeType)
					},
					L = function(t, e) {
						var i, s = {};
						for (i in t) Q[i] || i in e && "transform" !== i && "x" !== i && "y" !== i && "width" !== i && "height" !== i && "className" !== i && "border" !== i || !(!H[i] || H[i] && H[i]._autoCSS) || (s[i] = t[i], delete t[i]);
						t.css = s
					};
				u = I.prototype = new z, u.constructor = I, u.kill()._gc = !1, u.ratio = 0, u._firstPT = u._targets = u._overwrittenProps = u._startAt = null, u._notifyPluginsOfEnabled = u._lazy = !1, I.version = "1.20.4", I.defaultEase = u._ease = new P(null, null, 1, 1), I.defaultOverwrite = "auto", I.ticker = p, I.autoSleep = 120, I.lagSmoothing = function(t, e) {
					p.lagSmoothing(t, e)
				}, I.selector = i.$ || i.jQuery ||
				function(t) {
					var e = i.$ || i.jQuery;
					return e ? (I.selector = e, e(t)) : void 0 === o ? t : o.querySelectorAll ? o.querySelectorAll(t) : o.getElementById("#" === t.charAt(0) ? t.substr(1) : t)
				};
				var B = [],
					X = {},
					j = /(?:(-|-=|\+=)?\d*\.?\d*(?:e[\-+]?\d+)?)[0-9]/gi,
					N = /[\+-]=-?[\.\d]/,
					Y = function(t) {
						for (var e, i = this._firstPT; i;) e = i.blob ? 1 === t && null != this.end ? this.end : t ? this.join("") : this.start : i.c * t + i.s, i.m ? e = i.m(e, this._target || i.t) : e < 1e-6 && e > -1e-6 && !i.blob && (e = 0), i.f ? i.fp ? i.t[i.p](i.fp, e) : i.t[i.p](e) : i.t[i.p] = e, i = i._next
					},
					q = function(t, e, i, s) {
						var n, r, a, o, l, c, h, u = [],
							p = 0,
							f = "",
							d = 0;
						for (u.start = t, u.end = e, t = u[0] = t + "", e = u[1] = e + "", i && (i(u), t = u[0], e = u[1]), u.length = 0, n = t.match(j) || [], r = e.match(j) || [], s && (s._next = null, s.blob = 1, u._firstPT = u._applyPT = s), l = r.length, o = 0; o < l; o++) h = r[o], c = e.substr(p, e.indexOf(h, p) - p), f += c || !o ? c : ",", p += c.length, d ? d = (d + 1) % 5 : "rgba(" === c.substr(-5) && (d = 1), h === n[o] || n.length <= o ? f += h : (f && (u.push(f), f = ""), a = parseFloat(n[o]), u.push(a), u._firstPT = {
							_next: u._firstPT,
							t: u,
							p: u.length - 1,
							s: a,
							c: ("=" === h.charAt(1) ? parseInt(h.charAt(0) + "1", 10) * parseFloat(h.substr(2)) : parseFloat(h) - a) || 0,
							f: 0,
							m: d && d < 4 ? Math.round : 0
						}), p += h.length;
						return f += e.substr(p), f && u.push(f), u.setRatio = Y, N.test(e) && (u.end = null), u
					},
					U = function(t, e, i, s, n, r, a, o, l) {
						"function" == typeof s && (s = s(l || 0, t));
						var c, h = typeof t[e],
							u = "function" !== h ? "" : e.indexOf("set") || "function" != typeof t["get" + e.substr(3)] ? e : "get" + e.substr(3),
							p = "get" !== i ? i : u ? a ? t[u](a) : t[u]() : t[e],
							f = "string" == typeof s && "=" === s.charAt(1),
							d = {
								t: t,
								p: e,
								s: p,
								f: "function" === h,
								pg: 0,
								n: n || e,
								m: r ? "function" == typeof r ? r : Math.round : 0,
								pr: 0,
								c: f ? parseInt(s.charAt(0) + "1", 10) * parseFloat(s.substr(2)) : parseFloat(s) - p || 0
							};
						if (("number" != typeof p || "number" != typeof s && !f) && (a || isNaN(p) || !f && isNaN(s) || "boolean" == typeof p || "boolean" == typeof s ? (d.fp = a, c = q(p, f ? parseFloat(d.s) + d.c + (d.s + "").replace(/[0-9\-\.]/g, "") : s, o || I.defaultStringFilter, d), d = {
							t: c,
							p: "setRatio",
							s: 0,
							c: 1,
							f: 2,
							pg: 0,
							n: n || e,
							pr: 0,
							m: 0
						}) : (d.s = parseFloat(p), f || (d.c = parseFloat(s) - d.s || 0))), d.c) return (d._next = this._firstPT) && (d._next._prev = d), this._firstPT = d, d
					},
					W = I._internals = {
						isArray: g,
						isSelector: E,
						lazyTweens: B,
						blobDif: q
					},
					H = I._plugins = {},
					V = W.tweenLookup = {},
					J = 0,
					Q = W.reservedProps = {
						ease: 1,
						delay: 1,
						overwrite: 1,
						onComplete: 1,
						onCompleteParams: 1,
						onCompleteScope: 1,
						useFrames: 1,
						runBackwards: 1,
						startAt: 1,
						onUpdate: 1,
						onUpdateParams: 1,
						onUpdateScope: 1,
						onStart: 1,
						onStartParams: 1,
						onStartScope: 1,
						onReverseComplete: 1,
						onReverseCompleteParams: 1,
						onReverseCompleteScope: 1,
						onRepeat: 1,
						onRepeatParams: 1,
						onRepeatScope: 1,
						easeParams: 1,
						yoyo: 1,
						immediateRender: 1,
						repeat: 1,
						repeatDelay: 1,
						data: 1,
						paused: 1,
						reversed: 1,
						autoCSS: 1,
						lazy: 1,
						onOverwrite: 1,
						callbackScope: 1,
						stringFilter: 1,
						id: 1,
						yoyoEase: 1
					},
					$ = {
						none: 0,
						all: 1,
						auto: 2,
						concurrent: 3,
						allOnStart: 4,
						preexisting: 5,
						true: 1,
						false: 0
					},
					Z = z._rootFramesTimeline = new F,
					G = z._rootTimeline = new F,
					K = 30,
					tt = W.lazyRender = function() {
						var t, e = B.length;
						for (X = {}; --e > -1;)(t = B[e]) && !1 !== t._lazy && (t.render(t._lazy[0], t._lazy[1], !0), t._lazy = !1);
						B.length = 0
					};
				G._startTime = p.time, Z._startTime = p.frame, G._active = Z._active = !0, setTimeout(tt, 1), z._updateRoot = I.render = function() {
					var t, e, i;
					if (B.length && tt(), G.render((p.time - G._startTime) * G._timeScale, !1, !1), Z.render((p.frame - Z._startTime) * Z._timeScale, !1, !1), B.length && tt(), p.frame >= K) {
						K = p.frame + (parseInt(I.autoSleep, 10) || 120);
						for (i in V) {
							for (e = V[i].tweens, t = e.length; --t > -1;) e[t]._gc && e.splice(t, 1);
							0 === e.length && delete V[i]
						}
						if ((!(i = G._first) || i._paused) && I.autoSleep && !Z._first && 1 === p._listeners.tick.length) {
							for (; i && i._paused;) i = i._next;
							i || p.sleep()
						}
					}
				}, p.addEventListener("tick", z._updateRoot);
				var et = function(t, e, i) {
						var s, n, r = t._gsTweenID;
						if (V[r || (t._gsTweenID = r = "t" + J++)] || (V[r] = {
							target: t,
							tweens: []
						}), e && (s = V[r].tweens, s[n = s.length] = e, i)) for (; --n > -1;) s[n] === e && s.splice(n, 1);
						return V[r].tweens
					},
					it = function(t, e, i, s) {
						var n, r, a = t.vars.onOverwrite;
						return a && (n = a(t, e, i, s)), a = I.onOverwrite, a && (r = a(t, e, i, s)), !1 !== n && !1 !== r
					},
					st = function(t, e, i, s, n) {
						var r, a, o, l;
						if (1 === s || s >= 4) {
							for (l = n.length, r = 0; r < l; r++) if ((o = n[r]) !== e) o._gc || o._kill(null, t, e) && (a = !0);
							else if (5 === s) break;
							return a
						}
						var c, h = e._startTime + 1e-10,
							u = [],
							p = 0,
							f = 0 === e._duration;
						for (r = n.length; --r > -1;)(o = n[r]) === e || o._gc || o._paused || (o._timeline !== e._timeline ? (c = c || nt(e, 0, f), 0 === nt(o, c, f) && (u[p++] = o)) : o._startTime <= h && o._startTime + o.totalDuration() / o._timeScale > h && ((f || !o._initted) && h - o._startTime <= 2e-10 || (u[p++] = o)));
						for (r = p; --r > -1;) if (o = u[r], 2 === s && o._kill(i, t, e) && (a = !0), 2 !== s || !o._firstPT && o._initted) {
							if (2 !== s && !it(o, e)) continue;
							o._enabled(!1, !1) && (a = !0)
						}
						return a
					},
					nt = function(t, e, i) {
						for (var s = t._timeline, n = s._timeScale, r = t._startTime; s._timeline;) {
							if (r += s._startTime, n *= s._timeScale, s._paused) return -100;
							s = s._timeline
						}
						return r /= n, r > e ? r - e : i && r === e || !t._initted && r - e < 2e-10 ? 1e-10 : (r += t.totalDuration() / t._timeScale / n) > e + 1e-10 ? 0 : r - e - 1e-10
					};
				u._init = function() {
					var t, e, i, s, n, r, a = this.vars,
						o = this._overwrittenProps,
						l = this._duration,
						c = !! a.immediateRender,
						h = a.ease;
					if (a.startAt) {
						this._startAt && (this._startAt.render(-1, !0), this._startAt.kill()), n = {};
						for (s in a.startAt) n[s] = a.startAt[s];
						if (n.data = "isStart", n.overwrite = !1, n.immediateRender = !0, n.lazy = c && !1 !== a.lazy, n.startAt = n.delay = null, n.onUpdate = a.onUpdate, n.onUpdateParams = a.onUpdateParams, n.onUpdateScope = a.onUpdateScope || a.callbackScope || this, this._startAt = I.to(this.target, 0, n), c) if (this._time > 0) this._startAt = null;
						else if (0 !== l) return
					} else if (a.runBackwards && 0 !== l) if (this._startAt) this._startAt.render(-1, !0), this._startAt.kill(), this._startAt = null;
					else {
						0 !== this._time && (c = !1), i = {};
						for (s in a) Q[s] && "autoCSS" !== s || (i[s] = a[s]);
						if (i.overwrite = 0, i.data = "isFromStart", i.lazy = c && !1 !== a.lazy, i.immediateRender = c, this._startAt = I.to(this.target, 0, i), c) {
							if (0 === this._time) return
						} else this._startAt._init(), this._startAt._enabled(!1), this.vars.immediateRender && (this._startAt = null)
					}
					if (this._ease = h = h ? h instanceof P ? h : "function" == typeof h ? new P(h, a.easeParams) : k[h] || I.defaultEase : I.defaultEase, a.easeParams instanceof Array && h.config && (this._ease = h.config.apply(h, a.easeParams)), this._easeType = this._ease._type, this._easePower = this._ease._power, this._firstPT = null, this._targets) for (r = this._targets.length, t = 0; t < r; t++) this._initProps(this._targets[t], this._propLookup[t] = {}, this._siblings[t], o ? o[t] : null, t) && (e = !0);
					else e = this._initProps(this.target, this._propLookup, this._siblings, o, 0);
					if (e && I._onPluginEvent("_onInitAllProps", this), o && (this._firstPT || "function" != typeof this.target && this._enabled(!1, !1)), a.runBackwards) for (i = this._firstPT; i;) i.s += i.c, i.c = -i.c, i = i._next;
					this._onUpdate = a.onUpdate, this._initted = !0
				}, u._initProps = function(t, e, s, n, r) {
					var a, o, l, c, h, u;
					if (null == t) return !1;
					X[t._gsTweenID] && tt(), this.vars.css || t.style && t !== i && t.nodeType && H.css && !1 !== this.vars.autoCSS && L(this.vars, t);
					for (a in this.vars) if (u = this.vars[a], Q[a]) u && (u instanceof Array || u.push && g(u)) && -1 !== u.join("").indexOf("{self}") && (this.vars[a] = u = this._swapSelfInParams(u, this));
					else if (H[a] && (c = new H[a])._onInitTween(t, this.vars[a], this, r)) {
						for (this._firstPT = h = {
							_next: this._firstPT,
							t: c,
							p: "setRatio",
							s: 0,
							c: 1,
							f: 1,
							n: a,
							pg: 1,
							pr: c._priority,
							m: 0
						}, o = c._overwriteProps.length; --o > -1;) e[c._overwriteProps[o]] = this._firstPT;
						(c._priority || c._onInitAllProps) && (l = !0), (c._onDisable || c._onEnable) && (this._notifyPluginsOfEnabled = !0), h._next && (h._next._prev = h)
					} else e[a] = U.call(this, t, a, "get", u, a, 0, null, this.vars.stringFilter, r);
					return n && this._kill(n, t) ? this._initProps(t, e, s, n, r) : this._overwrite > 1 && this._firstPT && s.length > 1 && st(t, this, e, this._overwrite, s) ? (this._kill(e, t), this._initProps(t, e, s, n, r)) : (this._firstPT && (!1 !== this.vars.lazy && this._duration || this.vars.lazy && !this._duration) && (X[t._gsTweenID] = !0), l)
				}, u.render = function(t, e, i) {
					var s, n, r, a, o = this._time,
						l = this._duration,
						c = this._rawPrevTime;
					if (t >= l - 1e-7 && t >= 0) this._totalTime = this._time = l, this.ratio = this._ease._calcEnd ? this._ease.getRatio(1) : 1, this._reversed || (s = !0, n = "onComplete", i = i || this._timeline.autoRemoveChildren), 0 === l && (this._initted || !this.vars.lazy || i) && (this._startTime === this._timeline._duration && (t = 0), (c < 0 || t <= 0 && t >= -1e-7 || 1e-10 === c && "isPause" !== this.data) && c !== t && (i = !0, c > 1e-10 && (n = "onReverseComplete")), this._rawPrevTime = a = !e || t || c === t ? t : 1e-10);
					else if (t < 1e-7) this._totalTime = this._time = 0, this.ratio = this._ease._calcEnd ? this._ease.getRatio(0) : 0, (0 !== o || 0 === l && c > 0) && (n = "onReverseComplete", s = this._reversed), t < 0 && (this._active = !1, 0 === l && (this._initted || !this.vars.lazy || i) && (c >= 0 && (1e-10 !== c || "isPause" !== this.data) && (i = !0), this._rawPrevTime = a = !e || t || c === t ? t : 1e-10)), (!this._initted || this._startAt && this._startAt.progress()) && (i = !0);
					else if (this._totalTime = this._time = t, this._easeType) {
						var h = t / l,
							u = this._easeType,
							p = this._easePower;
						(1 === u || 3 === u && h >= .5) && (h = 1 - h), 3 === u && (h *= 2), 1 === p ? h *= h : 2 === p ? h *= h * h : 3 === p ? h *= h * h * h : 4 === p && (h *= h * h * h * h), this.ratio = 1 === u ? 1 - h : 2 === u ? h : t / l < .5 ? h / 2 : 1 - h / 2
					} else this.ratio = this._ease.getRatio(t / l);
					if (this._time !== o || i) {
						if (!this._initted) {
							if (this._init(), !this._initted || this._gc) return;
							if (!i && this._firstPT && (!1 !== this.vars.lazy && this._duration || this.vars.lazy && !this._duration)) return this._time = this._totalTime = o, this._rawPrevTime = c, B.push(this), void(this._lazy = [t, e]);
							this._time && !s ? this.ratio = this._ease.getRatio(this._time / l) : s && this._ease._calcEnd && (this.ratio = this._ease.getRatio(0 === this._time ? 0 : 1))
						}
						for (!1 !== this._lazy && (this._lazy = !1), this._active || !this._paused && this._time !== o && t >= 0 && (this._active = !0), 0 === o && (this._startAt && (t >= 0 ? this._startAt.render(t, !0, i) : n || (n = "_dummyGS")), this.vars.onStart && (0 === this._time && 0 !== l || e || this._callback("onStart"))), r = this._firstPT; r;) r.f ? r.t[r.p](r.c * this.ratio + r.s) : r.t[r.p] = r.c * this.ratio + r.s, r = r._next;
						this._onUpdate && (t < 0 && this._startAt && -1e-4 !== t && this._startAt.render(t, !0, i), e || (this._time !== o || s || i) && this._callback("onUpdate")), n && (this._gc && !i || (t < 0 && this._startAt && !this._onUpdate && -1e-4 !== t && this._startAt.render(t, !0, i), s && (this._timeline.autoRemoveChildren && this._enabled(!1, !1), this._active = !1), !e && this.vars[n] && this._callback(n), 0 === l && 1e-10 === this._rawPrevTime && 1e-10 !== a && (this._rawPrevTime = 0)))
					}
				}, u._kill = function(t, e, i) {
					if ("all" === t && (t = null), null == t && (null == e || e === this.target)) return this._lazy = !1, this._enabled(!1, !1);
					e = "string" != typeof e ? e || this._targets || this.target : I.selector(e) || e;
					var s, n, r, a, o, l, c, h, u, p = i && this._time && i._startTime === this._startTime && this._timeline === i._timeline;
					if ((g(e) || E(e)) && "number" != typeof e[0]) for (s = e.length; --s > -1;) this._kill(t, e[s], i) && (l = !0);
					else {
						if (this._targets) {
							for (s = this._targets.length; --s > -1;) if (e === this._targets[s]) {
								o = this._propLookup[s] || {}, this._overwrittenProps = this._overwrittenProps || [], n = this._overwrittenProps[s] = t ? this._overwrittenProps[s] || {} : "all";
								break
							}
						} else {
							if (e !== this.target) return !1;
							o = this._propLookup, n = this._overwrittenProps = t ? this._overwrittenProps || {} : "all"
						}
						if (o) {
							if (c = t || o, h = t !== n && "all" !== n && t !== o && ("object" != typeof t || !t._tempKill), i && (I.onOverwrite || this.vars.onOverwrite)) {
								for (r in c) o[r] && (u || (u = []), u.push(r));
								if ((u || !t) && !it(this, i, e, u)) return !1
							}
							for (r in c)(a = o[r]) && (p && (a.f ? a.t[a.p](a.s) : a.t[a.p] = a.s, l = !0), a.pg && a.t._kill(c) && (l = !0), a.pg && 0 !== a.t._overwriteProps.length || (a._prev ? a._prev._next = a._next : a === this._firstPT && (this._firstPT = a._next), a._next && (a._next._prev = a._prev), a._next = a._prev = null), delete o[r]), h && (n[r] = 1);
							!this._firstPT && this._initted && this._enabled(!1, !1)
						}
					}
					return l
				}, u.invalidate = function() {
					return this._notifyPluginsOfEnabled && I._onPluginEvent("_onDisable", this), this._firstPT = this._overwrittenProps = this._startAt = this._onUpdate = null, this._notifyPluginsOfEnabled = this._active = this._lazy = !1, this._propLookup = this._targets ? {} : [], z.prototype.invalidate.call(this), this.vars.immediateRender && (this._time = -1e-10, this.render(Math.min(0, -this._delay))), this
				}, u._enabled = function(t, e) {
					if (f || p.wake(), t && this._gc) {
						var i, s = this._targets;
						if (s) for (i = s.length; --i > -1;) this._siblings[i] = et(s[i], this, !0);
						else this._siblings = et(this.target, this, !0)
					}
					return z.prototype._enabled.call(this, t, e), !(!this._notifyPluginsOfEnabled || !this._firstPT) && I._onPluginEvent(t ? "_onEnable" : "_onDisable", this)
				}, I.to = function(t, e, i) {
					return new I(t, e, i)
				}, I.from = function(t, e, i) {
					return i.runBackwards = !0, i.immediateRender = 0 != i.immediateRender, new I(t, e, i)
				}, I.fromTo = function(t, e, i, s) {
					return s.startAt = i, s.immediateRender = 0 != s.immediateRender && 0 != i.immediateRender, new I(t, e, s)
				}, I.delayedCall = function(t, e, i, s, n) {
					return new I(e, 0, {
						delay: t,
						onComplete: e,
						onCompleteParams: i,
						callbackScope: s,
						onReverseComplete: e,
						onReverseCompleteParams: i,
						immediateRender: !1,
						lazy: !1,
						useFrames: n,
						overwrite: 0
					})
				}, I.set = function(t, e) {
					return new I(t, 0, e)
				}, I.getTweensOf = function(t, e) {
					if (null == t) return [];
					t = "string" != typeof t ? t : I.selector(t) || t;
					var i, s, n, r;
					if ((g(t) || E(t)) && "number" != typeof t[0]) {
						for (i = t.length, s = []; --i > -1;) s = s.concat(I.getTweensOf(t[i], e));
						for (i = s.length; --i > -1;) for (r = s[i], n = i; --n > -1;) r === s[n] && s.splice(i, 1)
					} else if (t._gsTweenID) for (s = et(t).concat(), i = s.length; --i > -1;)(s[i]._gc || e && !s[i].isActive()) && s.splice(i, 1);
					return s || []
				}, I.killTweensOf = I.killDelayedCallsTo = function(t, e, i) {
					"object" == typeof e && (i = e, e = !1);
					for (var s = I.getTweensOf(t, e), n = s.length; --n > -1;) s[n]._kill(i, t)
				};
				var rt = w("plugins.TweenPlugin", function(t, e) {
					this._overwriteProps = (t || "").split(","), this._propName = this._overwriteProps[0], this._priority = e || 0, this._super = rt.prototype
				}, !0);
				if (u = rt.prototype, rt.version = "1.19.0", rt.API = 2, u._firstPT = null, u._addTween = U, u.setRatio = Y, u._kill = function(t) {
					var e, i = this._overwriteProps,
						s = this._firstPT;
					if (null != t[this._propName]) this._overwriteProps = [];
					else for (e = i.length; --e > -1;) null != t[i[e]] && i.splice(e, 1);
					for (; s;) null != t[s.n] && (s._next && (s._next._prev = s._prev), s._prev ? (s._prev._next = s._next, s._prev = null) : this._firstPT === s && (this._firstPT = s._next)), s = s._next;
					return !1
				}, u._mod = u._roundProps = function(t) {
					for (var e, i = this._firstPT; i;) e = t[this._propName] || null != i.n && t[i.n.split(this._propName + "_").join("")], e && "function" == typeof e && (2 === i.f ? i.t._applyPT.m = e : i.m = e), i = i._next
				}, I._onPluginEvent = function(t, e) {
					var i, s, n, r, a, o = e._firstPT;
					if ("_onInitAllProps" === t) {
						for (; o;) {
							for (a = o._next, s = n; s && s.pr > o.pr;) s = s._next;
							(o._prev = s ? s._prev : r) ? o._prev._next = o : n = o, (o._next = s) ? s._prev = o : r = o, o = a
						}
						o = e._firstPT = n
					}
					for (; o;) o.pg && "function" == typeof o.t[t] && o.t[t]() && (i = !0), o = o._next;
					return i
				}, rt.activate = function(t) {
					for (var e = t.length; --e > -1;) t[e].API === rt.API && (H[(new t[e])._propName] = t[e]);
					return !0
				}, x.plugin = function(t) {
					if (!(t && t.propName && t.init && t.API)) throw "illegal plugin definition.";
					var e, i = t.propName,
						s = t.priority || 0,
						n = t.overwriteProps,
						r = {
							init: "_onInitTween",
							set: "setRatio",
							kill: "_kill",
							round: "_mod",
							mod: "_mod",
							initAll: "_onInitAllProps"
						},
						a = w("plugins." + i.charAt(0).toUpperCase() + i.substr(1) + "Plugin", function() {
							rt.call(this, i, s), this._overwriteProps = n || []
						}, !0 === t.global),
						o = a.prototype = new rt(i);
					o.constructor = a, a.API = t.API;
					for (e in r)"function" == typeof t[e] && (o[r[e]] = t[e]);
					return a.version = t.version, rt.activate([a]), a
				}, c = i._gsQueue) {
					for (h = 0; h < c.length; h++) c[h]();
					for (u in y) y[u].func || i.console.log("GSAP encountered missing dependency: " + u)
				}
				f = !1
			}
		}(void 0 !== t && t.exports && void 0 !== i ? i : this || window)
	}).call(e, i(11))
}, , , function(t, e, i) {
	var s = i(0),
		n = i(10);
	t.exports = {
		throttle: s,
		debounce: n
	}
}, , function(t, e, i) {
	function s(t) {
		return i(n(t))
	}
	function n(t) {
		var e = r[t];
		if (!(e + 1)) throw new Error("Cannot find module '" + t + "'.");
		return e
	}
	var r = {
		"./common": 7,
		"./common.js": 7,
		"./home": 17,
		"./home.js": 17,
		"./index": 8,
		"./index.js": 8,
		"./news": 18,
		"./news.js": 18,
		"./solution": 19,
		"./solution.js": 19
	};
	s.keys = function() {
		return Object.keys(r)
	}, s.resolve = n, t.exports = s, s.id = 35
}, function(t, e) {
	t.exports = jQuery
}, function(t, e, i) {
	t.exports = i(22)
}]);