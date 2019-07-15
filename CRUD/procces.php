<?php
	$mysqli = new mysqli('localhost','root','','UAS') or die (mysqli_error($mysqli));

	$update=false;
	$name='';
	$asal='';
	$jkel='';
	$pekerjaan='';
	$transaksi='';
	if(isset($_POST['save'])){
		$name = $_POST['name'];
		$asal = $_POST['asal'];
		$jkel = $_POST['jkel'];
		$pekerjaan = $_POST['pekerjaan'];
		$transaksi = $_POST['transaksi'];

		$mysqli->query("INSERT INTO data (name,asal,jkel,pekerjaan,transaksi) VALUES('$name','$asal','$jkel','$pekerjaan','$transaksi')") or die ($mysqli->error);

		header('location: '.'index.php');
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
			$jkel=$row['jkel'];
			$pekerjaan=$row['pekerjaan']; 
			$transaksi=$row['transaksi'];
		}
	}

	if(isset($_POST['update'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$asal = $_POST['asal'];
		$jkel = $_POST['jkel'];
		$pekerjaan = $_POST['pekerjaan'];
		$transaksi = $_POST['transaksi'];

		$mysqli->query("UPDATE data SET name='$name', asal='$asal', jkel='$jkel', pekerjaan='$pekerjaan', transaksi='$transaksi' WHERE id=$id");

		header('location: '.'index.php');
	}
?>