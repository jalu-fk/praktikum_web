<html>
<head>
        <title>Studi Kasus Prak6</title>
</head>
<body>
   <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
Tampilkan : <select name="jum">
<option value="2" <?php $jum=(isset($_POST['jum'])?$_POST['jum']:2) ; echo 'selected = "selected"'; ?>}>2</option>
<option value="5" <?php $jum=(isset($_POST['jum'])?$_POST['jum']:5) ; echo 'selected = "selected"'; ?>>5</option>
<option value="10" <?php $jum=(isset($_POST['jum'])?$_POST['jum']:10) ; echo 'selected = "selected"'; ?>>10</option>
<option value="15" <?php $jum=(isset($_POST['jum'])?$_POST['jum']:15) ; echo 'selected = "selected"'; ?>>15</option>
<option value="20" <?php $jum=(isset($_POST['jum'])?$_POST['jum']:20) ; echo 'selected = "selected"'; ?>>20</option>
<option value="25" <?php $jum=(isset($_POST['jum'])?$_POST['jum']:25) ; echo 'selected = "selected"'; ?>>25</option>
</select>
<input type="submit" value="Yes" />
</form>
<?php

require_once("koneksi.php");

$sql="select * from mahasiswa";
$self=$_SERVER['PHP_SELF'];
$page=isset($_GET['page'])?$_GET['page']:0;

// Jumlah Link
$link_num=5;
// record num
$record_num=$jum;

// Item pertama yang ditampilkan
$offset=$page?($page-1)*$record_num:0;

$total_row=mysql_num_rows(mysql_query($sql));
$query=$sql." LIMIT ". $offset.",".$record_num;
$result=mysql_query($query);
$max_page=ceil($total_row/$record_num);

if ($page>$max_page || $page<=0) {
        $page=1;
}

// generate paging
$paging="";
if ($max_page>1) {
    if ($page>1) {
        $paging.="<a href='".$self."?page=".($page-1)."'>Previous</a> ";
     }else{
        $paging.="Previous ";
        }
         for ($counter=1; $counter <=$max_page ; $counter+=$link_num) {
         if ($page>=$counter) {
              $start=$counter;
         }
        }
        if ($max_page>$link_num) {
        $end=$start+$link_num;
        if ($end>$max_page) {
              $end=$max_page+1;
          }
        }else{
              $end=$max_page;
        }
        for ($counter=$start; $counter < $end; $counter++) {
        if ($counter==$page) {
             $paging.=$counter;
         }else{
            $paging.=" <a href='".$self."?page=".$counter."'>".$counter."</a> ";
           }
                }
        if ($page<$max_page) {
                $paging.=" <a href='".$self."?page=".($page+1)."'>Next</a>";
        }
        else{
                $paging.=" Next";
        }
}
 ?>
<table border="1">
<thead>
<tr>
<td>No.</td>
<td>NIM</td>
<td>Nama</td>
<td>Alamat</td>
</tr>
</thead>
<tbody>
<?php
        $i=1;
        while ($data=mysql_fetch_row($result)) {
                ?>
<tr>
<td><?php echo $i; ?></td>
<td><?php echo $data[0]; ?></td>
<td><?php echo $data[1]; ?></td>
<td><?php echo $data[2]; ?></td>
</tr>
<?php
                $i++;
        }
         ?>
<tr>
<td colspan="4"><?php echo $paging; ?></td>
</tr>
</tbody>
</table>
</body>
</html>