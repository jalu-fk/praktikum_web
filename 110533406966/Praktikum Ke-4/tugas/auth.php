<?php
session_start();
defined('_VALID') or die('not allowed');

function init_login() {
  // Simulasi data account nama dan password
  $nama = 'katanyaadmin';
  $pass = 'mungkinpassword';

  if (isset($_POST['nama']) && isset($_POST['pass'])) {
    $n = trim($_POST['nama']);
    $p = trim($_POST['pass']);
    if ( ($n === $nama) && ($p === $pass) ) {
    $_SESSION['nlogin'] = '$n';
    $_SESSION['time'] = 'time()';

    // redireksi
    ?>
    <script type="text/javascript">
    document.location.href="./";
    </script>
<?php
} else {
  echo 'Nama/Password Tidak Sesuai';
  return false;
  }
 }
}

function validate() {
if (!isset($_SESSION['nlogin']) || !isset($_SESSION['time']) ) { ?>
<div class="inner">
<form action="" method="post">
<table border=0 cellpadding=5>
  <tr>
    <td>Nama</td>
    <td><input type="text" name="nama" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="pass" /></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" value="LOGIN" /></td>
  </tr>
</table>
</form>
</div>

<?php
exit;
}

if (isset($_GET['m']) && $_GET['m'] == 'logout') {
  if (isset($_SESSION['nlogin'])) {
    unset ($_SESSION ['nlogin']);
  $_SESSION [time()] = 'time() - 1';
  }
  if (isset($_SESSION['time'])) {
    unset ($_SESSION ['time']);
  $_SESSION ['time'] = 'time() - 1';
  }

// redireksi halaman
?>

<script type="text/javascript">
document.location.href="./";
</script>
<?php
}
}
?> 