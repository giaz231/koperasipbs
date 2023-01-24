<ul class="sidebar-nav">
 
<a href="index.php" <?php if($halaman_active == 'index'){echo 'class="active"';}?>><i class="gi gi-home sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Home</span></a>
<?php
if (!empty($_SESSION['islogin'])) {
    ?><a href="control.php" ><i class="gi gi-log_out sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Logout</span></a><?php
    ?><a href="datakaryawan.php" <?php if($halaman_active == 'datakaryawan'){echo 'class="active"';} ?>><i class="gi gi-user sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">List Data Karyawan</span></a><?php
    if($_SESSION['role'] == "admin" || $_SESSION['role'] == "superuser"){
        ?><a href="form_tambah_karyawan.php" <?php if($halaman_active == 'form_tambah_karyawan'){echo 'class="active"';} ?>><i class="gi gi-user_add sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Tambah Pegawai</span></a><?php
        ?><a href="form_kredit.php" <?php if($halaman_active == 'form_kredit'){echo 'class="active"';} ?>><i class="gi gi-notes_2 sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Form Kredit</span></a><?php
        ?><a href="form_debit.php" <?php if($halaman_active == 'form_debit'){echo 'class="active"';} ?>><i class="gi gi-notes_2 sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Form Debit</span></a><?php
        ?><a href="datadebit.php" <?php if($halaman_active == 'datadebit'){echo 'class="active"';} ?>><i class="gi gi-table sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Data Debit</span></a><?php
        ?><a href="datakredit.php" <?php if($halaman_active == 'datakredit'){echo 'class="active"';} ?>><i class="gi gi-table sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Data Kredit</span></a><?php
    }
} else {
    ?><a href="login.html" ><i class="gi gi-log_in sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Login</span></a><?php
    ?><a href="datadebit.php" <?php if($halaman_active == 'datadebit'){echo 'class="active"';} ?>><i class="gi gi-table sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Data Debit</span></a><?php
    ?><a href="datakredit.php" <?php if($halaman_active == 'datakredit'){echo 'class="active"';} ?>><i class="gi gi-table sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Data Kredit</span></a><?php
}
?>
</ul>