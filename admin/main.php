<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>详细信息</title>
<link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
	<div class="conetnt">
		<h3 class="pull-right"><?php echo "当前日期： " . date("Y/m/d") . "<br>"; ?></h3>
		<h3>系统信息</h3>
		<table class="table table-bordered table-hover">
			<tr>
				<th>操作系统</th>
				<td><?php echo PHP_OS; ?></td>
			</tr>
			<tr>
				<th>Apache版本</th>
				<td><?php echo apache_get_version(); ?></td>
			</tr>
			<tr>
				<th>PHP版本</th>
				<td><?php echo PHP_VERSION; ?></td>
			</tr>
			<tr>
				<th>运行方式</th>
				<td><?php echo PHP_SAPI; ?></td>
			</tr>
		</table>
		<h3 class="pull-right"><?php echo "现在时间是 " . date("H:i:s"); ?></h3>

	</div>
</body>
</html>