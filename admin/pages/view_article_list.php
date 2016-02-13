<?php 
require_once('../cores/connect.php');
$sql="select * from article";
$articles=$pdo->query($sql);
//获取对象里的数组
$result_arr = $articles->fetchAll();



 ?>
 <?php include'../segment/menu.php' ?>
<div class="container summary">
<h3>文章列表</h3>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>id</th>
			<th>列表</th>
			<th>标题</th>
			<th>时间</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach (array_reverse($result_arr) as $article)://使用reverse逆序遍历?>
		<tr>
			<td><?php echo $article['id'] ?></td>
			<td><?php echo $article['sort'] ?></td>
			<td><a href="../../pages/view_article_detail.php?id=<?php echo $article['id'] ?>" target="_blank"><?php echo $article['title'] ?></a></td>
			<td><?php 
				$date = $article['timeline'];
				echo date('Y-m-d H:m:s',"$date");
			 ?></td>
			<td><a class="btn btn-info" href="./edit_article.php?id=<?php echo $article['id'] ?>" title="">编辑</a><a class="btn btn-danger" href="../cores/del_article.php?id=<?php echo $article['id'] ?>" title="">删除</a></td>
		</tr>
	<?php endforeach ?>
	</tbody>
</table>

	</div>



<?php include'../segment/footer.php' ?>
