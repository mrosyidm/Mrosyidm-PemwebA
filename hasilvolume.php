<!DOCTYPE>
<html>
<?php
function hitung($tepe, $tees, $aes){
  $result = ($aes*$tees/2)*$tepe;
  echo "Volume Prisma Segitiga = $result";
}
?>
<head>
<style type="text/css">    
.form-all {
	background: #00b5e9;
  width: 400px;
  margin:0px auto;              
  font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
    }
#judul {
	font-size: 24px;
	text-align: center;
	font-weight: bold;
    }
</style>
</head>
<body>
<form>  
  <div class="form-all">             
      <div id="judul" style="font-size: 24px;">
          <p>Hasil Hitung Volume <br> Prisma Segitiga</p>
      </div>
      <div id="Hasil" style="text-align: center;">
        Tinggi Segitiga <?php
        $tp = $_POST['tp'];
        $ts = $_POST['ts'];
        $as = $_POST['as'];
        hitung($tp, $ts, $as);
        ?>      
  </div>
</form>
</body>
</html>