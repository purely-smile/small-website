<?php 
require_once('../cores/connect.php');

//排除重复添加的可能
$sqlname='select * from name';
//读取员工表
$names=$pdo->query($sqlname);
 ?>

<!-- 添加菜单片段 -->
	<?php include'../segment/menu.php' ?>
 <div class="table-responsive">
	<h3>默认点击一下添加4小时</h3>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>编号</th>
				<th>姓名</th>
				<th>上午</th>
				<th>下午</th>
				<th>状态</th>
			</tr>
		</thead>
		<tbody>

		<?php foreach ($names as $key):?>

			<?php
			//获取当前遍历到的name 
			$name=$key['name'];
			//设置遍历worklist的语句,条件是指定的时间内
			$namesql="select * from worklist where name='{$name}' and date between '{$timestart}' and '{$timeend}'";
			//echo $namesql;
			//执行sql语句
			$flags=$pdo->query($namesql);
			//获取受影响条目
			$flag = $flags->rowCount();
			//遍历当前的考勤表
			foreach ($flags as $time){
			}
			 ?>
			 <!-- 开始循环填充数据 -->
			<tr>
			<!-- 填充id -->
				<td><?php echo $key['id'];?></td>
			<!-- 填充name，同时给予a链接，便于添加 -->
				<td><a class="btn btn-success" title="添加">
				<?php echo $name;?></a></td>
			<!-- 判断是否工作，如果有返回工时 -->
				<td><?php
				if($flag){
					echo $time['am'];
				}else{
					echo "0.0";
				}
				 ?></td>
			<!-- 显示状态信息，如果有蓝色，没有红色。同时给予对应的状态 -->
				<td><?php
				if($flag){
					echo $time['pm'];
				}else{
					echo "0.0";
				}
				 ?></td>
				<td class="<?php 
					if($flag){
						echo "btn-info";
					}else{
						echo "btn-danger";
					}
					 ?>"><?php 
					if($flag){
						echo "已添加";
					}else{
						echo "待添加";
					}
					 ?></td>
			</tr>
		<?php endforeach;?>
		</tbody>
	</table>
</div>
	
<?php include'../segment/footer.php' ?>

<script type="text/javascript">
	//为每个添加按钮绑定点击事件
	$(".btn-success").click(function(){
	//定义日期对象
	var date=new Date();
	that=this;
	parent=$(this).parent();
	name=$(parent[0]).text()
	//去除空格
	name=$.trim(name);
	console.log(name);
	am=$(parent).next().text();
	bm=$(parent).next().next().text();
	//当前时间在下午时间
	if(date.getHours()>12){
	//上午有工时，下午没
	if(am==4.0&&bm==0.0){
	$(that).attr("href","../cores/add_list.php?time=ap&name="+name);
	//上午没工时，下午
	}else if(am==0.0&&bm==0.0){
	$(that).attr("href","../cores/add_list.php?time=pm&name="+name);
	console.log(date.getHours());
	}
	//在上午的时候
	}else{
		if(am==0.0&&bm==0.0){
	$(that).attr("href","../cores/add_list.php?time=am&name="+name);
		}else if(bm!=0.0){
			alert('当前时间在上午，下午工时有数据，请检查！');
		}
	}


	})
</script>