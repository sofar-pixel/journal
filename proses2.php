<?php

  // Menangkapisivariabeldariform.php
  $nik = $_POST['nik'];
  $nama =$_POST['nama'];
 

  // Format data yang akandisarsing
  $data = "\n$nik|$nama";

  // Buka file data.txt, kemudiantuliskanisivariabel di ataskedalam data.txt
  $fh = fopen("user.txt","a");
  fwrite($fh, $data);

  // Tutup file data.txt
  fclose($fh);

  // Keteranganbila data berhasildiinput
 // print "Data TelahTersimpan.</br><a href='login.php'>Kembalike login >></a>";
     echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'login.php';
			</script>
		";

?>
