<!DOCTYPE HTML>
<html>
  <head>
    <title>Aplikasi Peduli Diri-View</title>
<style>
.lo {
	width: 700px;
	margin: 50px auto;
	padding: 25px;
	background-color: rgba(250,250,250,0.5);
	border-radius: 5px;
    box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2), 
    			inset 0px 1px 0px 0px rgba(250, 250, 250, 0.5);
    border: 1px solid rgba(0, 0, 0, 0.3);
}
</style>
  </head>
  <body>
<h1>PEDULI DIRI</h1>
<h4>catatan perjalanan</h4>
<button><a href="index.php">HOME</a></button>
<button><a href="tampil.php">CATATAN PERJALANAN</a></button>
<button><a href="input.php">ISI DATA</a></button>
<button><a href="logout.php">LOGOUT</a></button>

  <?php
  $txt_file    = file_get_contents('data.txt');
  $rows        = explode("\n", $txt_file);
  array_shift($rows);


  $i=1;

  foreach($rows as $row => $data)
  {

    // Memisahkan Item Data dariPemisah |, array pada PHP dimulaipada index ke-0
    $row_data = explode('|', $data);

    $info[$row]['tanggal']           = $row_data[0];
    $info[$row]['waktu']         = $row_data[1];
    $info[$row]['lokasi']      = $row_data[2];
    $info[$row]['suhu']         = $row_data[3];
    $info[$row]['catatan']       = $row_data[4];

    // Menampilkan Data

  }
?>
<section class="lo">
<center>
<form action="cari.php" method="post" class="form-cari">

	<input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off" id="keyword">
	<button type="submit" name="cari" id="tombol-cari">Cari!</button>

</form><br><br>
<table border="1" cellspacing="0" cellpadding="5">

<tr>
    <th>TANGGAL <a href="urut.php">^</a> | <a href="urut2.php">\</a></th>
    <th>WAKTU <a href="urut.php">^</a> | <a href="urut2.php">\</a></th>
    <th>LOKASI</th>
    <th>SUHU<a href="urut.php">^</a> | <a href="urut2.php">\</a></th>
    <th>CATATAN</th>
</tr>
<?php $i = 1; ?>
	<?php foreach($rows as $row => $data) { ?>
<tr>
   <td><?=$info[$row]['tanggal']; ?></td>
   <td><?=$info[$row]['waktu']; ?></td>
   <td><?=$info[$row]['lokasi']; ?></td>
   <td><?=$info[$row]['suhu']; ?></td>
   <td><?=$info[$row]['catatan']; ?></td>

</tr>
	<?php $i++; ?>
	<?php } ?>
</table>
</center>
</section>
 


</body>
</html>