
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
