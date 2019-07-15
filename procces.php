<?php
	$mysqli = new mysqli('localhost','root','','UAS') or die (mysqli_error($mysqli));

	$update=false;
	$name='';
	$asal='';
	$jkel='';
	$pekerjaan='';
	$email = '';

	if(isset($_GET['save1'])){
		$id = $_GET['id'];
		$name = $_GET['name'];
		$asal = $_GET['asal'];
		$jkel = $_GET['jkel'];
		$email= $_GET['email'];
		$pekerjaan = $_GET['pekerjaan'];

		$mysqli->query("INSERT INTO data (name,asal,jkel,pekerjaan,email,transaksi) VALUES('$name','$asal','$jkel','$pekerjaan','$email','VPS1')") or die ($mysqli->error);
		header('location: '."succes.php");
	}

	if(isset($_GET['save2'])){
		$name = $_GET['name'];
		$asal = $_GET['asal'];
		$jkel = $_GET['jkel'];
		$email= $_GET['email'];
		$pekerjaan = $_GET['pekerjaan'];

		$mysqli->query("INSERT INTO data (name,asal,jkel,pekerjaan,email,transaksi) VALUES('$name','$asal','$jkel','$pekerjaan','$email','VPS2')") or die ($mysqli->error);

		header('location: '."succes.php");
	}

	if(isset($_GET['save3'])){
		$name = $_GET['name'];
		$asal = $_GET['asal'];
		$jkel = $_GET['jkel'];
		$email= $_GET['email'];
		$pekerjaan = $_GET['pekerjaan'];

		$mysqli->query("INSERT INTO data (name,asal,jkel,pekerjaan,email,transaksi) VALUES('$name','$asal','$jkel','$pekerjaan','$email','VPS3')") or die ($mysqli->error);

		header('location: '."succes.php");
	}

	if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$mysqli->query("DELETE FROM data WHERE id=$id"); 
	}

	if(isset($_GET['edit'])){
		$id = $_GET['edit'];
		$update=true;
		$result = $mysqli->query("SELECT * FROM data WHERE id=$id");
		if(count($result)==1){
			$row=$result->fetch_array();
			$name=$row['name'];
			$asal=$row['asal'];
			$jkel=$jkel['jkel'];
			$email= $_GET['email'];
			$pekerjaan=$pekerjaan['pekerjaan']; 
		}
	}

	if(isset($_POST['update'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$asal = $_POST['asal'];
		$jkel = $_POST['jkel'];
		$email= $_GET['email'];
		$pekerjaan = $_POST['pekerjaan'];

		$mysqli->query("UPDATE data SET name='$name', asal='$asal', jkel='$jkel', pekerjaan='$pekerjaan' email='$email' WHERE id=$id");

		header('location: '.'regist.html');
	}
	
?>