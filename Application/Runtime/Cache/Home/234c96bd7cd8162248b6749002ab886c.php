<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($title); ?>_嘉乾阁家具</title>
<link rel="stylesheet" type="text/css" href="/Public/home/css/public.css">
<script type="text/javascript" src="/Public/home/js/jquery.1.9.1.js"></script>
<script type="text/javascript" src="/Public/home/js/jquery.form.js"></script>
</head>
<body>
<div class="header">
    <div class="head inner">
        <a href="/"><img src="/Public/home/img/logo.png" class="logo"></a>
        <ul class="nav ">
            <li <?php if(CONTROLLER_NAME == 'Index'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("index/index");?>">首页</a></li>
            <li <?php if(CONTROLLER_NAME == 'Furniture'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("furniture/index");?>">明清家具</a>
				<div class="ej furniture_nav">
                	<div class="cont">
                    <?php if(is_array($furnituretype)): $i = 0; $__LIST__ = $furnituretype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div>
                    	<img src="<?php echo ($v["thumb"]); ?>" class="img">
                        <span><?php echo ($v["name"]); ?></span>
                        <img src="/Public/home/img/furniture7.png" class="img1">
                        <p><?php echo ($v["summary"]); ?></p>
                        <a href="<?php echo U("furniture/index?type=".$v["id"]."");?>" class="more">了解更多</a>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
				</div>            
            </li>
            <li <?php if(CONTROLLER_NAME == 'Personal'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("personal/index");?>">私人订制</a></li>
            <li <?php if(CONTROLLER_NAME == 'Case'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("case/index");?>">经典案例</a>
            	<div class="ej furniture_nav" style="margin-left:-592px">
                	<div class="cont">
					<div>
                    	<img src="/Public/home/img/furniture6.jpg" class="img">
                        <span>别墅专区</span>
                        <img src="/Public/home/img/furniture7.png" class="img1">
                        <p>以经典明清宝座、罗汉床为原型，结合现代元素，为您打造儒雅、舒适、极具品位的休闲待客区域。</p>
                        <a href="" class="more">了解更多</a>
                    </div>
                    <div>
                    	<img src="/Public/home/img/furniture6.jpg" class="img">
                        <span>公寓专区</span>
                        <img src="/Public/home/img/furniture7.png" class="img1">
                        <p>以精湛的技艺复刻传统经典书房，为您打造宁静雅致的看书、冥想、办公区域。</p>
                        <a href="">了解更多</a>
                    </div>
                    <div>
                    	<img src="/Public/home/img/furniture6.jpg" class="img">
                        <span>会所专区</span>
                        <img src="/Public/home/img/furniture7.png" class="img1">
                        <p>以自由、轻松为念，为您营造身心方式的畅聊区域。品茶论道，何其快意！</p>
                        <a href="">了解更多</a>
                    </div>
                    <div>
                    	<img src="/Public/home/img/furniture6.jpg" class="img">
                        <span>办公室专区</span>
                        <img src="/Public/home/img/furniture7.png" class="img1">
                        <p>一套好餐桌、一组好餐具，简单而又美好，享受用餐，享受生活</p>
                        <a href="">了解更多</a>
                    </div>
                    <div>
                    	<img src="/Public/home/img/furniture6.jpg" class="img">
                        <span>酒店专区</span>
                        <img src="/Public/home/img/furniture7.png" class="img1">
                        <p>典雅唯美，为您营造一个私密、温馨的休息空间</p>
                        <a href="">了解更多</a>
                    </div>
                    </div>
				</div>
            </li>
            <li <?php if(CONTROLLER_NAME == 'Service'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("service/index");?>">客户服务</a>
            	<div class="ej furniture_nav" style="margin-left:-754px">
                	<div class="cont">
                    <?php if(is_array($service)): $i = 0; $__LIST__ = $service;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div>
                    	<img src="<?php echo ($v["thumb"]); ?>" class="img">
                        <span><?php echo ($v["name"]); ?></span>
                        <img src="/Public/home/img/furniture7.png" class="img1">
                        <p><?php echo ($v["summary"]); ?></p>
                        <a href="<?php echo U('service/index?id='.$v['id'].'');?>" class="more">了解更多</a>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    
				</div>
            </li>
            <li <?php if(CONTROLLER_NAME == 'Craftsman'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("craftsman/index");?>">工艺大师</a></li>
            <li <?php if(CONTROLLER_NAME == 'Story'): ?>class="hover"<?php endif; ?>><a href="<?php echo U("story/index");?>">品牌故事</a>
            	<div class="ej furniture_nav" style="margin-left:-1078px">
                	<div class="cont">
					<?php if(is_array($storytype)): $i = 0; $__LIST__ = $storytype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div>
                    	<img src="<?php echo ($v["thumb"]); ?>" class="img">
                        <span><?php echo ($v["name"]); ?></span>
                        <img src="/Public/home/img/furniture7.png" class="img1">
                        <p><?php echo ($v["summary"]); ?></p>
                        <a href="<?php echo U("story/index?type=".$v["id"]."");?>" class="more">了解更多</a>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
				</div>
            </li>
        </ul>
    </div>
</div>

    
<script type="text/javascript" src="/Public/home/js/NSW_Index.js"></script>
<div class="personalbg"></div>
<div style="clear:both"></div>
<div class="personal1 inner">
    <img src="/Public/home/img/personal.jpg"><br>
	私人订制是对超高生活品质的一种追求，一种品味，嘉乾阁私人订制是从客户角度出发，<br>
    以设计的眼光将中国家居文化经典，搬到您身边，<br>
    让您享受私人订制带来的中式家居艺术情境和无上体验。
</div>
<div style="clear:both"></div>
<div class="personal2bg">
    <div class="personal2 inner">
    	<span class="personal_title"><span>４大订制范畴</span><span>Custom category</span><img src="/Public/home/img/ptitle.jpg"></span>
        <ul>
        	<li>
            	<img src="/Public/home/img/personal1.jpg">
                <div class="cont">
                	<span class="t">中式家具私人订制</span>
                    <span class="s">爱步马克。多方位视角，为您量身定制完美的自动化解决方案。</span>
                    <span class="s red">集研产品研发、设计制作、安装销售为一体。</span>
                    <span class="s">拥有最具专业实力的团队，确保产品具备始终如一的高品质。</span>
                </div>
            </li>
            <li>
            	<img src="/Public/home/img/personal2.jpg">
            	<div class="cont">
                	<span class="t">中式家具私人订制</span>
                    <span class="s">爱步马克。多方位视角，为您量身定制完美的自动化解决方案。</span>
                    <span class="s red">集研产品研发、设计制作、安装销售为一体。</span>
                    <span class="s">拥有最具专业实力的团队，确保产品具备始终如一的高品质。</span>
                </div>
            </li>
            <li>
            	<img src="/Public/home/img/personal3.jpg">
            	<div class="cont">
                	<span class="t">中式家具私人订制</span>
                    <span class="s">爱步马克。多方位视角，为您量身定制完美的自动化解决方案。</span>
                    <span class="s red">集研产品研发、设计制作、安装销售为一体。</span>
                    <span class="s">拥有最具专业实力的团队，确保产品具备始终如一的高品质。</span>
                </div>
            </li>
            <li>
            	<img src="/Public/home/img/personal4.jpg">
            	<div class="cont">
                	<span class="t">中式家具私人订制</span>
                    <span class="s">爱步马克。多方位视角，为您量身定制完美的自动化解决方案。</span>
                    <span class="s red">集研产品研发、设计制作、安装销售为一体。</span>
                    <span class="s">拥有最具专业实力的团队，确保产品具备始终如一的高品质。</span>
                </div>
            </li>
        </ul>
    </div>
</div>
<div style="clear:both"></div>
<div class="personal3 inner">
    <span class="personal_title"><span>订制流程</span><span>Customization process</span><img src="/Public/home/img/ptitle.jpg"></span>
    <div class="content">
    	<ul>
        	<li>
            	<span class="t">01</span>
                <div class="cont">
                	<img src="/Public/home/img/personal6.jpg">
                	<span>了解情况</span>
                    <p>与客户沟通了解客户真正需求</p>
                    <img src="/Public/home/img/ptitle2.jpg">
                </div>
            </li>
            <li>
            	<span class="t">02</span>
                <div class="cont">
                	<img src="/Public/home/img/personal7.jpg">
                	<span>实地测量</span>
                    <p>专业测量为客户负责</p>
                    <img src="/Public/home/img/ptitle2.jpg">
                </div>
            </li>
            <li>
            	<span class="t">03</span>
                <div class="cont">
                	<img src="/Public/home/img/personal8.jpg">
                	<span>设计方案</span>
                    <p>以客户需求为向导，以专业眼光来设计</p>
                    <img src="/Public/home/img/ptitle2.jpg">
                </div>
            </li>
            <li>
            	<span class="t">04</span>
                <div class="cont">
                	<img src="/Public/home/img/personal9.jpg">
                	<span>确定物料</span>
                    <p>与客户协商确定设计方案和所需物料</p>
                    <img src="/Public/home/img/ptitle2.jpg">
                </div>
            </li>
            <li>
            	<span class="t">05</span>
                <div class="cont">
                	<img src="/Public/home/img/personal10.jpg">
                	<span>签订合同 </span>
                    <p>前4步都得双方认可后，合同只是一种约定</p>
                    <img src="/Public/home/img/ptitle2.jpg">
                </div>
            </li>
            <li>
            	<span class="t">06</span>
                <div class="cont">
                	<img src="/Public/home/img/personal11.jpg">
                	<span>工厂制作</span>
                    <p>专业的师傅，负责的业务员</p>
                    <img src="/Public/home/img/ptitle2.jpg">
                </div>
            </li>
            <li>
            	<span class="t">07</span>
                <div class="cont">
                	<img src="/Public/home/img/personal12.jpg">
                	<span>进场施工</span>
                    <p>谁制作，谁安装，力求完美</p>
                    <img src="/Public/home/img/ptitle2.jpg">
                </div>
            </li>
            <li>
            	<span class="t">08</span>
                <div class="cont">
                	<img src="/Public/home/img/personal13.jpg">
                	<span>验收交付</span>
                    <p>收获的不仅仅是项目完成的满足</p>
                    <img src="/Public/home/img/ptitle2.jpg">
                </div>
            </li>
        </ul>
    </div>
</div>
<div style="clear:both"></div>
<div class="personal4bg">
	<div class="personal4 inner">
    	<span class="t">致客户的一份信</span>
        <p>  泓文博雅文化创意产业基地位于北京大兴魏善庄镇羊坊村，是2016年世界月季洲际大会的分会场，也是“大兴区十大旅游景点”之一，更是以“红木为纽带”的传统文化创意产业基地。2014年园区被批复为“中国艺术文化普及促进会专业人才管理发展中心教育培训基地”，2015年被批复为“《红木国家标准》、《红木家具国家标准》和防伪知识培训基地”。 <br>
      泓文博雅占地近200亩，主体建筑面积10万余平方米，涵盖泓文博雅艺术馆、泓文博雅友联红木馆、泓文博雅戴为红木馆、泓文博雅书画院、泓文博雅博物馆、泓文博雅展览馆、泓文博雅家居艺术设计研究院、泓文博雅礼乐文化研究院、泓文博雅琴凰宫等系列机构家具布局到艺术品陈设的一整套的设计服务，旗下红木品牌：“友联红木”、“戴为红木”，是深受业内专家盛赞和消费者信赖的品牌。 </p>
    </div>
</div>
<div style="clear:both"></div>
<div class="ti_bg">
  <div class="content">
    <div style=" position:relative; width:1200px; margin:0 auto; height:409px; z-index:9;">
      <div class="ti_m helpc_div" row_index="1" style="width: 1200px; overflow: hidden; top: 0px; position: absolute; left: 0px; z-index: 1000;" myindex="951">
        <p class="ti_l fl"><a id="btnPrev1" href="javascript:void(0)" title="上一页"><img src="/Public/home/img/ti_lico.gif" alt="上一页" title="上一页"></a></p>
        <div class="ti_c fl ">
          <ul id="myroundabout1" class="roundabout-holder" style="padding: 0px; position: relative;">
	            <li class="roundabout-moveable-item roundabout-in-focus" > <a href="javascript:void(0)" title="<?php echo ($v["name"]); ?>"> <img src="/Public/home/img/img17.jpg" _src="<?php echo ($v["thumb"]); ?>" alt="<?php echo ($v["name"]); ?>" title="<?php echo ($v["name"]); ?>" style="display: inline;"></a>  </li>
                <li class="roundabout-moveable-item roundabout-in-focus" > <a href="javascript:void(0)" title="<?php echo ($v["name"]); ?>"> <img src="/Public/home/img/img17.jpg" _src="<?php echo ($v["thumb"]); ?>" alt="<?php echo ($v["name"]); ?>" title="<?php echo ($v["name"]); ?>" style="display: inline;"></a>  </li>
                <li class="roundabout-moveable-item roundabout-in-focus" > <a href="javascript:void(0)" title="<?php echo ($v["name"]); ?>"> <img src="/Public/home/img/img17.jpg" _src="<?php echo ($v["thumb"]); ?>" alt="<?php echo ($v["name"]); ?>" title="<?php echo ($v["name"]); ?>" style="display: inline;"></a>  </li>
                <li class="roundabout-moveable-item roundabout-in-focus" > <a href="javascript:void(0)" title="<?php echo ($v["name"]); ?>"> <img src="/Public/home/img/img17.jpg" _src="<?php echo ($v["thumb"]); ?>" alt="<?php echo ($v["name"]); ?>" title="<?php echo ($v["name"]); ?>" style="display: inline;"></a>  </li>
          </ul>
        </div>
        <p class="ti_r fr"><a id="btnNext1" href="javascript:void(0)" title="下一页"><img src="/Public/home/img/ti_rico.gif" alt="下一页" title="下一页"></a></p>
        <div class="clear"></div>
      </div>
    </div>
    <div class="ti_t helpt_div">
      <ul>
        <li><a href="javascript:void(0)" title="">免费领取更多案例实图</a></li>
        <li><a href="javascript:void(0)" title="">免费为您设计方案</a></li>
      </ul>
    </div>
  </div>
  <div class="clear"></div>
</div>
<script type="text/javascript">
        jQuery(function () {
            jQuery('#myroundabout1').roundabout({
                autoplay: false, //自动播放
                autoplayDuration: 6000, //时间
                autoplayPauseOnHover: true, //自动鼠标移上停滞
                btnNext: "#btnNext1", //下一页的按钮
                btnPrev: "#btnPrev1", //上一页的按钮
                is_start: false
            });
            var pcl = jQuery(".helpt_div ul li");
            var pcn = jQuery(".helpc_div");
            pcn.eq(0).css("z-index", "1000").siblings(".helpc_div").css({ "filter": "alpha(opacity=0)", "-moz-opacity": "0", "-khtml-opacity": "0", "opacity": "0" });
           
        });
</script>
<div style="clear:both"></div>
<div class="bottom inner">
     	<span class="t">百问百答</span>
        <ul>
        	<li>
            	<div>
                	<img src="/Public/home/img/furniture1.png"><br>木材问答
                </div>
                <?php if(is_array($interlocution1)): $i = 0; $__LIST__ = $interlocution1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><span><a href="<?php echo U('interlocution/show?id='.$v['id'].'');?>"><?php echo ($v["name"]); ?></a></span><?php endforeach; endif; else: echo "" ;endif; ?>
                <a href="<?php echo U('interlocution/index?type=1');?>" class="more"><img src="/Public/home/img/furniture5.png"></a>
            </li>
            <li>
            	<div>
                	<img src="/Public/home/img/furniture2.png"><br>工艺问答
                </div>
				<?php if(is_array($interlocution2)): $i = 0; $__LIST__ = $interlocution2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><span><a href="<?php echo U('interlocution/show?id='.$v['id'].'');?>"><?php echo ($v["name"]); ?></a></span><?php endforeach; endif; else: echo "" ;endif; ?>
                <a href="<?php echo U('interlocution/index?type=2');?>" class="more"><img src="/Public/home/img/furniture5.png"></a>
            </li>
            <li>
            	<div>
                	<img src="/Public/home/img/furniture3.png"><br>搭配问答
                </div>
				<?php if(is_array($interlocution3)): $i = 0; $__LIST__ = $interlocution3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><span><a href="<?php echo U('interlocution/show?id='.$v['id'].'');?>"><?php echo ($v["name"]); ?></a></span><?php endforeach; endif; else: echo "" ;endif; ?>
                <a href="<?php echo U('interlocution/index?type=3');?>" class="more"><img src="/Public/home/img/furniture5.png"></a>
            </li>
            <li>
            	<div>
                	<img src="/Public/home/img/furniture4.png"><br>其它问答
                </div>
				<?php if(is_array($interlocution4)): $i = 0; $__LIST__ = $interlocution4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><span><a href="<?php echo U('interlocution/show?id='.$v['id'].'');?>"><?php echo ($v["name"]); ?></a></span><?php endforeach; endif; else: echo "" ;endif; ?>
                <a href="<?php echo U('interlocution/index?type=4');?>" class="more"><img src="/Public/home/img/furniture5.png"></a>
            </li>
            
        </ul>
        <div class="ge"></div>
     </div>
<div style="clear:both"></div>
<div class="footerbg">
	<div class="ft">
    	<div class="content inner">
        	<div class="l">
            	<span>联系我们</span>
                <ul>
                	<li>电话:010-85791899</li>
                	<li>手机（微信）：15652997347</li>
                	<li>邮箱：beijingjiaqiange@163.com</li>
                	<li>ＱＱ：412593706</li>
                	<li>工厂地址：北京顺义临河村直营中心：北京朝阳区高碑店新村一区4-1</li>
                </ul>
            </div>
            <div class="r">
            	<span>关于我们</span>
                <ul>
                	<li><a href="<?php echo U('aboutus/index');?>">关于嘉乾阁</a></li>
                	<li><a href="<?php echo U('aboutus/culture');?>">企业文化</a></li>
                	<li><a href="<?php echo U('aboutus/responsibility');?>">社会责任</a></li>
                	<li><a href="<?php echo U('aboutus/video');?>">视频中心</a></li>
                	<li><a href="<?php echo U('aboutus/recruitment');?>">人才招聘</a></li>
                	<li><a href="<?php echo U('aboutus/contactus');?>">联系我们</a></li>
                </ul>
            </div>
            <div class="search">
            	<script type="text/javascript" src="/Public/home/js/jquery.form.js"></script>
            	<script type="text/javascript">
					$(function(){
						$('#myform1').ajaxForm({
							success:  complete1, 
							dataType: 'json'
						});
						function complete1(data){
							if (data.status==1){
								alert(data.content);
							}
							
							if (data.status==2){
								alert("提交成功");
								location.reload();
							}
							
						}
					});
				</script>
                <form method="post" action="<?php echo U('index/message');?>" enctype="multipart/form-data" id="myform1">
	    		<input type="hidden" name="action" value="add">
                <ul>
                	<li><span>姓名　｜　</span><input type="text" name="name"></li>
                	<li><span>电话　｜　</span><input type="text" name="tel"></li>
                	<li class="textarea"><textarea name="content" placeholder="内容"></textarea></li>
                	<li style="background:none"><input type="submit" value="提交"></li>
                </ul>
                </form>
            </div>
        </div>
    </div>
    <div class="fd inner">
    	<div class="content">Copyright 2017 www.drivingsoft.com 北京嘉乾阁家具有限公司 版权所有 All Rights Reserved</div>
    </div>
</div>
</body>
</html>