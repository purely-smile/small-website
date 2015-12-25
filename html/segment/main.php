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
	<tr>
		<th>当前服务器时间</th>
		<td><?php echo date("Y/m/d H:i:s"); ?></td>
	</tr>
</table>
<h3>系统配置</h3>
<form method="get" action="./admin/set_salary.php">
	<table class="table table-bordered table-hover">
<tr>
	<th>设置每日工资(元)</th>
	<td><input type="text" name="salary" value="50"></td>
	<td><input type="submit"  value="更改" class="btn btn-info"></td>
</tr>
</table>
</form>