<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="main.js"></script>
    <style>
        body{
        background-image: url("background.jpg");
        }
        .mycontainer{
        position: absolute;
		top: 50px;
		left:0;
		right:0;
		padding:15%;
        margin-top:30px;
		margin-left:auto;
		margin-right:auto;
		background-color: rgba(253, 253, 253, 0.9);
        height: 100%;
        min-height: 768px;
        width: 90%;
        border:  2px solid #ccc;
        border-radius: 10px;
    }
    </style>
</head>
<body>
        <?php require_once 'procces.php'; ?>
        <?php 
            $mysqli = new mysqli('localhost','root','','UAS') or die ($mysqli_error($mysqli));
            $result = mysqli_query($mysqli,"SELECT * FROM data");
            $data = mysqli_fetch_assoc($result);
        ?>
        <div class="row">
            <nav class="white" role="navigation">
                <div class="nav-wrapper container">
                  <a id="logo-container" href="index.html" class="brand-logo">ViPeeS</a>
                  <ul id="nav-mobile" class="sidenav">
                    <li><a href="#">Navbar Link</a></li>
                  </ul>
                  <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons"></i></a>
                </div>
            </nav>
        </div>

        <div class="row">
            <div id="main" class="mycontainer text-center">
				<div class="form-group">
                   <h2>Hallo "
                   <?php
                    $hasil = mysqli_query($mysqli,"SELECT name FROM data ORDER BY id DESC");
                    $nama = mysqli_fetch_assoc($hasil);
                     echo $nama["name"];
                   ?> "
                   </h2>
                   <h2>
                   Anda Berhasil Membeli "
                   <?php 
                        $hasil = mysqli_query($mysqli,"SELECT transaksi FROM data ORDER BY id DESC");    
                        $transaksi = mysqli_fetch_assoc($hasil);
                        echo $transaksi["transaksi"];
                   ?> "
                   <h2>
                       Silahkan melakukan konfirmasi email yang telah kami kirimkan ke "
                       <?php
                        $hasil = mysqli_query($mysqli,"SELECT email FROM data ORDER BY id DESC");    
                        $email = mysqli_fetch_assoc($hasil);
                        echo $email["email"];
                       ?> "
                   </h2>
                   </h2>
                   <h2>Selamat Menggunakan Pelayanan Kami</h2>
                   <h3>Kontak kami bila terdapat masalah</h3>
                   <a href="index.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Home</a>
                </div>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>