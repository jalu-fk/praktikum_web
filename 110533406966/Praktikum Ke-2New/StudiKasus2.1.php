<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Generate Table</title>
<style type="text/css">
<!--
#apDiv1 {
position:absolute;
width:178px;
height:24px;
z-index:1;
left: 284px;
top: 189px;
}
.style1 {
color: red;
font-weight: bold;
}
-->
</style>
</head>
<body>
<form method="post" action="StudiKasus2.2.php">
<h3 align="center" class="style1"><font color = "green" size = "14">Masukkan Baris dan Kolom</font></h3>
<div align="center">
<table width="327" border="1" bgcolor = "orange">
<tr>
<td width="121" style="text-align:center"><font color = "red">Baris</font></td>
<td width="196"><strong>= </strong>
<input name="JumlahRow" type="text" id="JumlahRow" onKeyUp="getmax();" onfocus="this.select();"></td>
</tr>
<tr>
<td style="text-align:center"><label><font color = "red">Kolom</font></label></td>
<td><strong>= </strong>
<input name="JumlahColum" type="text" id="JumlahColum" onKeyUp="getmax();" onfocus="this.select();"></td>
</tr>

</table>
</div>
<div id="apDiv1">
<br/>
<br/>
<br/>
<input type="submit" name="Generate" value="Generate..!!">
<input type="reset" name="Reset" value="Reset..!!">
</div>
</form>
</body>
<script language="JavaScript" type="text/javascript">
<!--
function getmax() {
var R = parseInt(document.getElementById('JumlahRow').value);
var C = parseInt(document.getElementById('JumlahColum').value);
//var X = parseInt(document.getElementById('JumlahCell').value);
//var cellmax = document.getElementById('maxcells');
//var total = 'N/A';
//X = R * C;
//cellmax.value = new String(total);

}
//-->
</script>
</html>