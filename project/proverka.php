
<?php 
		$connect = mysqli_connect('127.0.0.1', 'root', '', 'project2');
		$select = "SELECT * FROM bd WHERE Login = '".$_POST['nickname']."'";
		$query = mysqli_query($connect, $select);

		$num = mysqli_num_rows($query);

		$res = $query->fetch_assoc();

		
		if ($num == 0) {
			
			echo "net";
		}else
		{
		}

		

 ?>