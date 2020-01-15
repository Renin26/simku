<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css" media="screen">
        table {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;}
        input {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;height: 20px;}
    </style>
</head>
<body>
		<div style="border:0; padding:10px; width:760px; height:auto;">
	<form method="post" action="jalan.php">
	<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="46">
                <td width="10%"> </td>
                <td width="25%"> </td>
                <td width="65%"><font color="black" size="4" ><strong>Tambah Produk</strong></font></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Uraian Pekerjaan</td>
            <td><input type="text" name="uraian" size="35" maxlength="6" /></td>
        </tr>
	<tr height="46">
            <td> </td>
            <td>Volume (orang)</td>
            <td><input type="number" name="volume" size="50" maxlength="30" /></td>
        </tr>
	<tr height="46">
            <td> </td>
            <td>Luas (m2)</td>
            <td><input type="number" name="luas" size="50" maxlength="30" /></td>
        </tr>
	<tr height="46">
            <td> </td>
            <td>Harga Satuan (Rp)</td>
            <td><input type="number" name="harga_satuan" size="50" maxlength="30" /></td>
        </tr>
	<tr height="46">
            <td> </td>
            <td>Total Harga (Rp)</td>
            <td><input type="number" name="harga_total" size="50" maxlength="30" /></td>
        </tr>
	 <tr height="46">
            <td> </td>
            <td> </td>
            <td><button class="btn btn-primary" name="save">Kirim</button></td>
        </tr>
	</table>
</form>
</div>
</body>
</html>