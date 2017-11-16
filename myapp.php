<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  
            function hitungLuas(){
                panjang = document.getElementById("pjg").value;
                lebar = document.getElementById("lbr").value;
                Luas = panjang * lebar;
                document.getElementById("hasil").value =  Luas;
           }

        </script>

  
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Tugas TCC P8</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">Home</a></li>
      <li class="active"><a href="myapp.php">My Apps</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h1>Aplikasi Luas Persegi Panjang</h1>
  <form class="form-horizontal">
    <div class="form-group">
      <label class="control-label col-sm-2" for="panjang">Input Panjang:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pjg" name="pjg">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="lebar">Input Lebar:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="lbr" name="lbr">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="hasil">Hasil:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="hasil" name="hasil" readonly>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="button" class="btn btn-default" onclick="hitungLuas();" value="HITUNG LUAS">
      </div>
    </div>
  </form>
  
</div>

</body>
</html>