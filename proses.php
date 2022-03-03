<?php

  // Menangkapisivariabeldariform.php
  $tanggal = $_POST['tanggal'];
  $waktu = $_POST['waktu'];
  $lokasi = $_POST['lokasi'];
  $suhu = $_POST['suhu'];
  $catatan = $_POST['catatan'];

  // Format data yang akandiparsing
  $data = "\n $tanggal|$waktu|$lokasi|$suhu|$catatan";

  // Buka file data.txt, kemudiantuliskanisivariabel di ataskedalam data.txt
  $fh = fopen("data.txt", "a");
  fwrite($fh, $data);

  // Tutup file data.txt
  fclose($fh);

 echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'tampil.php';
			</script>
		";

?>
