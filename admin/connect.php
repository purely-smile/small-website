<?php 
	try{
		//设置页面编码格式
		header("Content-type: text/html; charset=utf-8");
		//连接数据库
		$pdo=new PDO("mysql:host=localhost;dbname=grape","root","12345");
		//var_dump($pdo);
		//设置数据库编码格式
		$pdo->query('set names utf8');
		
		//获取今天的日期
		$m=date("m");
		$d=date("d");
		$y=date("Y");
		//获取当天时间戳范围，0点和24点时间戳范围
		$timestart=mktime(0,0,0,$m,$d,$y);
		$timeend=mktime(0,0,0,$m,$d+1,$y);
		//echo $timestart."<br>".$y.$m.$d."<br>";
		//echo $timeend."<br>".$y.$m.($d+1)."<br>";
			
	}catch(PDOException $e){
		echo $e->getMessage();
	}
 ?>