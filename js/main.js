$(function(){
	var width = $(".fix").width(); //获取宽度
	var top = $(document).scrollTop();
		//页面载入判断滚动条是否满足
		if(top > 456){  //当大于指定高度，固定位置
		$(".fix").css({
			"position": 'absolute',
			"top": top-456,
			"width":width  //保持一致的宽度
		});
		}
	//滚动条触发事件
	$(document).scroll(function(){  //固定公告栏
	var top = $(document).scrollTop();
	
		if(top > 456){  //当大于指定高度，固定位置
		$(".fix").css({
			"position": 'absolute',
			"top": top-456,
			"width":width  //保持一致的宽度
		});
		}else{
			$(".fix").css("position","static"); //如果高度低于，则默认布局
		}
	});


})