<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
    <?php require_once 'procces.php'; ?>
        <?php 
            $mysqli = new mysqli('localhost','root','','UAS') or die ($mysqli_error($mysqli));
            $result = $mysqli->query("SELECT * FROM data") or die ($mysqli->error);
        ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <p>name</p>
            </div>
            <div class="col-sm-2">
                <p>alamat</p>
            </div>
            <div class="col-sm-2">
                <p>Jenis Kelamin</p>
            </div>
            <div class="col-sm-2">
                <p>Pekerjaan</p>
            </div>
            <div class="col-sm-2">
                <p>Transaksi</p>
            </div>
        </div>
        <?php while ($row = $result->fetch_assoc()): ?>
        <div class="row">
            <div class="col-sm-2">
                <?php echo $row['name']; ?>
            </div>
            <div class="col-sm-2">
                <?php echo $row['asal']; ?>
            </div>
            <div class="col-sm-2">
                <?php
                    if($row['jkel']==1){
                        echo "<p>laki-laki</p>";
                    }
                    else{
                        echo "<p>perempuan</p>";
                    }
                ?>
            </div>
            <div class="col-sm-2">
                <?php echo $row['pekerjaan']; ?>
            </div>
            <div class="col-sm-2">
                <?php echo $row['transaksi']; ?>
            </div>
            <div class="col-sm-2">
            <a href="index.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">edit</a>
            <a href="index.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">delete</a>
            </div>
        </div>
        <?php endwhile; ?>
        <br>
        <form action ="procces.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
                <label for="usr">Name:</label>
                <input type="text" class="form-control" id="usr" name="name" value="<?php echo $name; ?>"> 
            </div>
            <div class="form-group">
                <label for="almt">Alamat:</label>
                <input type="text" class="form-control" id="almt" name="asal" value="<?php echo $asal; ?>"> 
            </div>
            <div class="form-group">
                <label for="wrk">Pekerjaan:</label>
                <input type="text" class="form-control" id="wrk" name="pekerjaan" value="<?php echo $pekerjaan; ?>"> 
            </div>
            <div class="form-group">
                <label for="tranasksi">Transaksi:</label>
                <input type="text" class="form-control" id="transaksi" name="transaksi" value="<?php echo $transaksi; ?>"> 
            </div>
            <div class="form-group">
                <label for="jeniskel">Jenis Kelamin:</label>
                <input type="text" class="form-control" id="jeniskel" name="jkel" value="<?php echo $jkel; ?>"> 
            </div>
            
            <?php if($update == true): ?>
                <button type="submit" name="update" class="btn btn-info">update</button>
            <?php else: ?>
                <button type="submit" name="save" class="btn btn-info" >save</button>
            <?php endif; ?>
        </form>
</div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
</body>
</html>