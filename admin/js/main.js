$(function(){

	//设置后台导航li折叠元素的打开和关闭
	$(".dropdown").hover(function(){
		$(this).addClass("open");

	},function(){
		$(this).removeClass("open");
	})
})