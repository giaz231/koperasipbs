<?php

//$timeout_duration = 3600; // set for 30 minutes
//$time = $_SERVER['REQUEST_TIME'];
if (empty($_SESSION['islogin'])) {
    ?><script language="JavaScript">alert('Anda Tidak Berhak Mengakses Halaman Ini Karena Anda Bukan Admin !!!');
    document.location='index.php'</script><?php # code...
}
// if (isset($_SESSION['LAST_ACTIVITY']) && 
//    ($time - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
//     session_destroy();

//     session_start();
//     ?><!--<script language="JavaScript">alert('Session Has Expired Please Login Again !!');
//     document.location='index.php'</script>--><?php # code...
// } 



?>