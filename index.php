<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script>
    function show(element_id) {
      ///required (harus di isi)
      var str1 = document.getElementById('name').value;
      var str2 = document.getElementById('asal').value;
      var str3 = document.getElementById('pekerjaan').value;
      var str4 = document.getElementById('email').value;
      if(str1.length == 0 || str2.length == 0 || str3.length == 0){
        alert("Harus Diisi");
      }else{
        ///single page nya
        var elements = document.getElementsByClassName('mycontainer');
        for (var i = 0, length = elements.length; i < length; i++) {
          elements[i].style.display = 'none';
        }
        document.getElementById(element_id).style.display = 'block';
      }
    }
    </script>
</head>
<body>
<nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.html" class="brand-logo">ViPeeS</a>
      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons"></i></a>
    </div>
  </nav>
    <?php require_once 'procces.php'; ?>
        <?php 
            $mysqli = new mysqli('localhost','root','','UAS') or die ($mysqli_error($mysqli));
            $result = $mysqli->query("SELECT * FROM data") or die ($mysqli->error);
        ?>

    <div id="register" class="container mycontainer">
      <form action="procces.php" class="col s12" method="GET">
        <label>Nama</label>
          <input type="text" name="name" id="name" required>
        <label>Alamat</label>
          <input type="text" name="asal" id="asal" required>
        <label>Kelamin</label>
        <label><input type="radio" id="laki" value="1" name="jkel" checked><span>Laki-laki</span></label>
        <label><input type="radio" id="cewek" value="2" name="jkel"><span>Perempuan</span></label>
        <br>
        <label>Email</label>
        <input type="email" name="email" id="email" required>
        <label>Pekerjaan</label>
        <input type="text" name="pekerjaan" id="pekerjaan" required>    
        <br>
        <p onclick="return show('offer');" class="btn-large waves-effect waves-light teal lighten-1">SUBMIT</p>
    </div>

    <div id="offer" class="container mycontainer" style="display:none">
    <div class="row">
      <div class="col-sm-4 text-center dotted">
          <p>VPS1</p>
          <h4>25GB SSD Storage</h4>
          <h3> IDR 92.000 / Bulan</h3>
          <br>
          <div class="text-center">
            <p>1024 MB RAM & 1 CPU</p>
          </div>
          <button type="submit" class="btn-large waves-effect waves-light teal lighten-1" name="save1">Pesan Sekarang!</button>
          <br>
          <br>
      </div>
      <div class="col-sm-4 text-center dotted">
          <p>VPS2</p>
          <h4>40GB SSD Storage</h4>
          <h3> IDR 175.000 / Bulan</h3>
          <br>
          <div class="text-center">
            <p>2 GB RAM & 1 CPU</p>
          </div>
          <button type="submit" class="btn-large waves-effect waves-light teal lighten-1" name="save2">Pesan Sekarang!</button>
          <br>
          <br>
      </div>
      <div class="col-sm-4 text-center dotted">
          <p>VPS3</p>
          <h4>60GB SSD Storage</h4>
          <h3> IDR 375.000 / Bulan</h3>
          <br>
          <div class="text-center">
            <p>4 GB RAM & 2 CPU</p>
          </div>
          <button type="submit" class="btn-large waves-effect waves-light teal lighten-1" name="save3">Pesan Sekarang!</button>
          <br>
          <br>
      </div>
    </div>
  </div>
  </form>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
</body>
</html>