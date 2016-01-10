<?php 
require_once("connect.php");
// var_dump($_POST);
// var_dump($_FILES);
$filename = $_FILES['image']['name'];
$filetype = $_FILES['image']['type'];
$filetmp = $_FILES['image']['tmp_name'];
$fileerror = $_FILES['image']['error'];
$filesize = $_FILES['image']['size'];
//文件名处理
$exp = explode(".",$filename);
$ext = strtolower(end($exp));
$unique = md5_file($filetmp);
$filename = $unique.".".$ext;
$newfile = "../uploads/".$filename; //新文件路径

$title = $_POST['title'];
$sort = $_POST['sort'];
$summary = $_POST['summary'];
$main = $_POST['editorValue'];
$timeline=time();
//echo $filename.$filetype.$filetmp.$fileerror.$filesize;
if($fileerror === 0){
	if(is_uploaded_file($filetmp)){
		if(move_uploaded_file($filetmp, $newfile)){
			$mes = "文件上传成功";
		}else{
			$mes = "移动失败";
		}
	}else{
		$mes = "文件不是通过POST上传的";
	}
}else{
	switch($fileerror){
		case 1:
			$mes = "超过了配置文件上传文件的大小";
			break;
		case 2:
			$mes = "超过了表单设置上传的大小";
			break;
		case 3:
			$mes = "文件不分被上传";
			break;
		case 4:
			$mes = "没有文件被上传";
			break;
		case 6:
			$mes = "没有找到临时目录";
			break;
		case 7:
			$mes = "文件不可写";
			break;
		case 8:
			$mes = "扩展PHP程序中断了文件上传";
			break;

	}
}
$findname="select * from article where title='{$title}'";
$names=$pdo->query($findname);
$flag_name =$names->rowCount();
if($flag_name === 0){
	if($title !== '' && $summary !== '' && $main !== ''){
			$sql="insert into article(title,sort,summary,main,timeline,image) values('$title','$sort','$summary','$main','$timeline','$filename')";
			echo $sql;
			$res=$pdo->exec($sql);
			echo "添加成功";
			echo "<script>window.location='../pages/add_article.php';</script>";
	}else{
		echo "<script>alert('请检查是否有空值');</script>";
	}
}else{
	echo "<script>alert('重复提交');</script>";
}

echo $mes;
 ?>