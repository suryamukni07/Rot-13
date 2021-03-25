<!DOCTYPE html> 
<html> 
	<head> 
	
	<title>surya febrianto mukni</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css" />
	<script src="jquery.js"></script>
	<script src="jquery.mobile-1.3.2.min.js"></script>
</head> 
<body> 


<div data-role="page" class="type-home">
<div data-role="header" data-position="inline">
	<a href="index.php" data-icon="home" data-transition="fade">BERANDA</a>
	<h1>ENKRIPSI ROT-13</h1>
	<a href="index.php" data-icon="delete" data-transition="fade">KELUAR</a>
</div>
<div data-role="content">	
<div class="content-secondary">

<p>Masukkan text untuk dikonversi ke / dari ROT-13</p>
 <form action="rot13.php" method="get">
 <input type="text" placeholder="Masukan Plaintexte (sampel:surya)" name=string>
 <input type="submit">
 </form>
 <?php

function rot13($s) {return !$s?"":strtr($s,
"NnOoPpQqRrSsTtUuVvWwXxYyZzAaBbCcDdEeFfGgHhIiJjKkLlMm",
"AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz");}

if (isset($_GET['string']))
         {
         $string = $_GET['string'];
         $rot = rot13($string);
              echo "Hasil konversi adalah <b>$rot</b>";
          }
 ?>

			<div id="jqm-homeheader">
				<h1 id="jqm-logo" style="text-align:center;"><img src="images/upi.jpg" alt="Enksipsi Vigenere" /></h1>
                <h2 id="jqm-logo" style="text-align:center;"><img src="images/petunjuk.jpg" alt="Enksipsi Vigenere" /></h2>
			</div>

</div>
</div>

<div data-role="footer"> 
	<h4>surya febrianto mukni</h4> 
</div> 


</div>
</body>
</html>

