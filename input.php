<!DOCTYPE HTML>
<html>
  <head>
    <title>Peduli Diri-Input</title>

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
<section class="loginform cf">
<section class="lo">
    <center>
    <form name="form1" method="post" action="proses.php">
    <table width="780" border="0" align="center">
      <tr>
        <td colspan="2"><h3>PEDULI DIRI-INPUT JOURNEY</h3></td>
      </tr>
      <tr>
        <td width="250">TANGGAL</td>
        <td width="530"><input size="40" name="tanggal" type="date" id="tanggal"></td>
      </tr>
      <tr>
        <td>WAKTU(pm,am)</td>
        <td><input size="40" name="waktu" type="time" id="waktu" value=""></td>
      </tr>
      <tr>
        <td>LOKASI</td>
        <td><input size="40" name="lokasi" type="text" id="lokasi"></td>
      </tr>
      <tr>
        <td>SUHU TUBUH(dalam Celcius)</td>
        <td><input size="40" name="suhu" type="text-field" id="suhu"></td>
      </tr>

      <tr>
        <td>CATATAN (kesan,pesan)</td>
        <td><input size="40" name="catatan" type="text" id="catatan"></td>
      </tr>
      <tr>
        <td></td>
        <td><input name="Submit" type="submit" value="Simpan"></td>
      </tr>
     
    </table>
    </form>
</center>
</section>
</section>
  </body>
</html>