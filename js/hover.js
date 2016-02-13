$(function(){
	
	//以下功能模仿百度news导航hover功能
	var li = $(".header .nav li");
	//鼠标移入li元素触发
	$(li).mouseenter(function(){
		var index = $(this).index()-1;
		$(".run").animate({left:105+index*86});
	})
	var nav = $(".header .nav");
	//鼠标离开nav时还原
	$(nav).mouseleave(function(){
		$(".run").animate({left:105});
	})
})