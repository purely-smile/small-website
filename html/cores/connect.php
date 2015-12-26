<?php 
	try{
		//设置页面编码格式
		header("Content-type: text/html; charset=utf-8");
		//连接数据库
		$pdo=new PDO("mysql:host=localhost;dbname=grape","root","12345");
		//var_dump($pdo);
		//设置数据库编码格式
		$pdo->query('set names utf8');
	}catch(PDOException $e){
		echo $e->getMessage();
	}
	//获取今天的日期
		$m=date("m");
		$d=date("d");
		$y=date("Y");
		//获取当天时间戳范围，0点、12点和24点时间戳范围
		$timestart=mktime(0,0,0,$m,$d,$y);
		$timeend=mktime(0,0,0,$m,$d+1,$y);
		$timemid=$timestart+(60*60*12);
		//获取昨天的起始日期
		$timeyesstart=$timestart-60*60*24;
		$timeyesend=$timeend-60*60*24;
		//获取月初、月末时间戳
		$monthstart=mktime(0,0,0,$m,1,$y);
		$monthend=mktime(0,0,0,$m+1,0,$y);
		$timecur=time();
		//echo $timestart."<br>".$y.$m.$d."<br>";
		//echo $timeend."<br>".$y.$m.($d+1)."<br>";
		//echo $monthend;	
 ?>