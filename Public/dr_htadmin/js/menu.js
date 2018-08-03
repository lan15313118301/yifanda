
$(function(){
    // 菜单
    $(".mdst").live("click",function(){
        $(".submenu").hide();
    });
    $(".mdstitle").live("click",function(){
        // 判断菜单是否已打开
        if($(this).parent().find(".submenu").css("display") === "none"){
            $(".submenu").hide(); // 后加 点击后切换
            $(this).parent().find(".submenu").toggle();
        }
    });
    //初始化关闭菜单
    $(".submenu").hide();
    $(".icon-double-angle-right").parents(".submenu").show();
    
    // 文章发布尺寸版本切换
    $(".a-t-vsize li").live("click",function(){
        $(".a-t-vsize li").removeClass("a-t-vsize-hover").eq($(this).index()).addClass("a-t-vsize-hover");
        $(".vsize1").hide().eq($(this).index()).show();
    });
       
    //幻灯片分组展开管理操作 slide-sg-content
        //展开全部
        $(".slide-sg-content-all").live("click",function(){
            $(".slide-sg-content").each(function(){
                $(this).click();
            });
        });
        //展开单个
        $(".slide-sg-content").live("click",function(){
            var startpo = $(this).parent().parent();
            var sgid = startpo.attr("data-id");// sgsubid- sg-
            if($(this).attr('status')==''){
                $(this).css('background-image','url(/Public/admin/img/djian.png)').attr('status','1');
                $.ajax({
                        type:"GET",
                        url:"/Admin/Slide/slideindex/gid/"+sgid+"/",
                        data: {},
                        async :false,
                        success:function(data){
                            $("#sg-"+sgid).after(data);
                        }
                });
            }else{
                $(this).css('background-image','url(/Public/admin/img/djia.png)').attr('status','');
                $(".sgsubid-"+sgid).remove();
            }
        });
    //广告分组展开管理操作 ad-sg-content
        //展开全部
        $(".ad-sg-content-all").live("click",function(){
            $(".ad-sg-content").each(function(){
                $(this).click();
            });
        });
        //展开单个
        $(".ad-sg-content").live("click",function(){
            var startpoad = $(this).parent().parent();
            var sgidad = startpoad.attr("data-id");// sgsubid- sg-
            if($(this).attr('status')==''){
                $(this).css('background-image','url(/Public/admin/img/djian.png)').attr('status','1');
                $.ajax({
                        type:"GET",
                        url:"/Admin/Ad/adindex/gid/"+sgidad+"/",
                        data: {},
                        async :false,
                        success:function(data){
                            $("#sg-"+sgidad).after(data);
                        }
                });
            }else{
                $(this).css('background-image','url(/Public/admin/img/djia.png)').attr('status','');
                $(".sgsubid-"+sgidad).remove();
            }
        });
});

