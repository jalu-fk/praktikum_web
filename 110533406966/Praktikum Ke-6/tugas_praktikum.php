<?php
require_once './koneksi.php';
echo 'PENGURUTAN DATA';

switch($_GET['act']) {
case 'nama':
        $query = "select * from mahasiswa order by nama";
break;
case 'nama':
        $query = "select * from mahasiswa order by alamat";
break;
default :
        $query = "select * from mahasiswa";
}
        $hasil = mysql_query($query);
        if ($hasil){
        if (mysql_num_rows($hasil)) { ?>
        <table border = "1" style = 'border-color:#ffffff;'>        
        <tr>
                <th width ="100"> Nim </th>
                <th width ="200"><a href= "tugas_praktikum.php?&amp;act=nama&amp;">Nama</a> </th>
                <th width ="400"><a href= "tugas_praktikum.php?&amp;act=alamat&amp;">Alamat</a></th>
        </tr>
                <?php
        while ($row = mysql_fetch_row($hasil)){
        ?>
                <tr>
                <?php
                $nim = $row[0];
                $nama = $row[1];
                $kelas = $row[2];
                ?>
                <td><?php echo $nim;?></td>
                <td><?php echo $nama;?></td>
                <td><?php echo $kelas;?></td>
                </tr>
                <?php
                }
                ?>
                </table>
                <?php
                mysql_free_result($hasil);
                }
                ?>
                <?php
                } else {
                echo 'Data tidak ditemukan';
                }
?>  