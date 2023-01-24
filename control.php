<?php
include 'model.php';
$page = '';
session_start();
if (isset($_POST['page'])) {
	$page = $_POST['page'];
}
if ($page == "login") {
	$email = $_POST['email'];
	$password = $_POST['password'];

	$kode = login($email,$password);
	
	if ($kode == 1) {
		?><script language="JavaScript">alert('Anda Belum Memasukkan Email Atau Password !!');
						document.location='login.html'</script><?php	
	} elseif ($kode == 2) {
		?><script language="JavaScript">alert('Email atau Password yang anda masukkan salah, silahkan ulangi lagi!');
						document.location='login.html'</script><?php
	} elseif ($kode == 3) {
		?><script language="JavaScript">
						document.location='index.php'</script><?php
		$role = getDataLodinForSession($email);
		foreach ($role as $key) {
			
			//$time = $_SERVER['REQUEST_TIME'];
			
			//$_SESSION['LAST_ACTIVITY'] = $time;
			$_SESSION['islogin'] = $email;
			$_SESSION['role'] = $key['role'];
			$_SESSION['displayname'] = $key['nama_supuser'];
		}
		
	} 


}elseif ($page == "addpegawai") {
	
	$nama = $_POST['nama'];
	isempty($nama,"Pastikan Semua Field Tidak boleh kosong !!","form_tambah_karyawan.php");
	
	$iuran_wajib = $_POST['iuran_wajib'];
	isnumeric($iuran_wajib,"Maaf Anda Mengisikan Karakter Pada Field Number Iuran Wajib","form_tambah_karyawan.php");
	isempty($iuran_wajib,"Pastikan Semua Field Tidak boleh kosong !!","form_tambah_karyawan.php");
	
	$investasi = $_POST['investasi'];
	if(!empty($investasi)){
		isnumeric($investasi,"Maaf Anda Mengisikan Karakter Pada Field Number Investasi","form_tambah_karyawan.php");
	}
	
	//echo $nama.' -- '.$gapok.' -- '.$tunjangan.' -- '.$tgl_lahir.' -- '.$tempat_lahir.' -- '.$umur.' -- '.$alamat;
	$kode = tambahPegawai($nama,$investasi,$iuran_wajib);
	//iskode($kode,0,"Data Berhasil Di Tambahkan !!","Data Tidak Berhasil Di Tambahkan !!","form_tambah_karyawan.php","form_tambah_karyawan.php");
	
	

} elseif ($page == 'hapuspegawai') {
    
    $idpegawai = $_POST['idpegawai'];
    $kode = hapusPegawai($idpegawai);
    //iskode($kode,0,"Data Berhasil Di Hapus !!","Data Tidak Berhasil Di Hapus !!","datakaryawan.php","datakaryawan.php");
    
} elseif ($page == 'addtransaksikaryawan') {
	
	$kode = "";
	$idpegawai = $_POST['idpegawai'];
	$datenow = date("Y-m-d h:m:s");
	$created_by = $_SESSION['displayname'];
	$investasi = $_POST['investasi'];
	$data = getDataPegawaiById($idpegawai);
	foreach ($data as $key) {

		if($_POST['jan'] == "true" && $key['january'] != 1){
			//echo $_POST['jan'].' '.$key['january'].' january di save <br>';
			$kode = updatePegawaiByIdAndMonth($idpegawai,'january');
			//$kode = tambahDataTransaksi($key['nama_pegawai'],$datenow,'KREDIT','Iuran pokok wajib '.$key['nama_pegawai'].' bulan January',$created_by,$key['iuran_wajib']);
		}

		if ($_POST['feb'] == "true" && $key['febuary'] != 1) {
			//echo $_POST['feb'].' '.$key['febuary'].' febuary di save <br>';
			$kode = updatePegawaiByIdAndMonth($idpegawai,'febuary');
			//$kode = tambahDataTransaksi($key['nama_pegawai'],$datenow,'KREDIT','Iuran pokok wajib '.$key['nama_pegawai'].' bulan Febuary',$created_by,$key['iuran_wajib']);
		}

		if ($_POST['mar'] == "true" && $key['maret'] != 1) {
			//echo $_POST['mar'].' '.$key['maret'].' maret di save <br>';
			$kode = updatePegawaiByIdAndMonth($idpegawai,'maret');
			//$kode = tambahDataTransaksi($key['nama_pegawai'],$datenow,'KREDIT','Iuran pokok wajib '.$key['nama_pegawai'].' bulan Maret',$created_by,$key['iuran_wajib']);
		}
		
		if ($_POST['apr'] == "true" && $key['april'] != 1) {
			//echo $_POST['apr'].' '.$key['april'].' april di save <br>';
			$kode = updatePegawaiByIdAndMonth($idpegawai,'april');
			//$kode = tambahDataTransaksi($key['nama_pegawai'],$datenow,'KREDIT','Iuran pokok wajib '.$key['nama_pegawai'].' bulan April',$created_by,$key['iuran_wajib']);
		}
		
		if ($_POST['may'] == "true" && $key['mei'] != 1) {
			//echo $_POST['may'].' '.$key['mei'].' mei di save <br>';
			$kode = updatePegawaiByIdAndMonth($idpegawai,'mei');
			//$kode = tambahDataTransaksi($key['nama_pegawai'],$datenow,'KREDIT','Iuran pokok wajib '.$key['nama_pegawai'].' bulan Mei',$created_by,$key['iuran_wajib']);
		}
		
		if ($_POST['jun'] == "true" && $key['juni'] != 1) {
			//echo $_POST['jun'].' '.$key['juni'].' juni di save <br>';
			$kode = updatePegawaiByIdAndMonth($idpegawai,'juni');
			//$kode = tambahDataTransaksi($key['nama_pegawai'],$datenow,'KREDIT','Iuran pokok wajib '.$key['nama_pegawai'].' bulan Juni',$created_by,$key['iuran_wajib']);
		}
		
		if ($_POST['jul'] == "true" && $key['jully'] != 1) {
			//echo $_POST['jul'].' '.$key['jully'].' jully di save <br>';
			$kode = updatePegawaiByIdAndMonth($idpegawai,'jully');
			//$kode = tambahDataTransaksi($key['nama_pegawai'],$datenow,'KREDIT','Iuran pokok wajib '.$key['nama_pegawai'].' bulan Jully',$created_by,$key['iuran_wajib']);
		}
		
		if ($_POST['aug'] == "true" && $key['agustus'] != 1) {
			//echo $_POST['aug'].' '.$key['agustus'].' agustus di save <br>';
			$kode = updatePegawaiByIdAndMonth($idpegawai,'agustus');
			//$kode = tambahDataTransaksi($key['nama_pegawai'],$datenow,'KREDIT','Iuran pokok wajib '.$key['nama_pegawai'].' bulan Agustus',$created_by,$key['iuran_wajib']);
		}
		
		if ($_POST['sep'] == "true" && $key['september'] != 1) {
			//echo $_POST['sep'].' '.$key['september'].' september di save <br>';
			$kode = updatePegawaiByIdAndMonth($idpegawai,'september');
			//$kode = tambahDataTransaksi($key['nama_pegawai'],$datenow,'KREDIT','Iuran pokok wajib '.$key['nama_pegawai'].' bulan September',$created_by,$key['iuran_wajib']);
		}
		
		if ($_POST['oct'] == "true" && $key['october'] != 1) {
			//echo $_POST['oct'].' '.$key['october'].' october di save <br>';
			$kode = updatePegawaiByIdAndMonth($idpegawai,'october');
			//$kode = tambahDataTransaksi($key['nama_pegawai'],$datenow,'KREDIT','Iuran pokok wajib '.$key['nama_pegawai'].' bulan October',$created_by,$key['iuran_wajib']);
		}
		
		if ($_POST['nov'] == "true" && $key['november'] != 1) {
			//echo $_POST['nov'].' '.$key['november'].' november di save <br>';
			$kode = updatePegawaiByIdAndMonth($idpegawai,'november');
			//$kode = tambahDataTransaksi($key['nama_pegawai'],$datenow,'KREDIT','Iuran pokok wajib '.$key['nama_pegawai'].' bulan November',$created_by,$key['iuran_wajib']);
		}
		
		if ($_POST['des'] == "true" && $key['desember'] != 1) {
			//echo $_POST['des'].' '.$key['desember'].' desember di save <br>';
			$kode = updatePegawaiByIdAndMonth($idpegawai,'desember');
			//$kode = tambahDataTransaksi($key['nama_pegawai'],$datenow,'KREDIT','Iuran pokok wajib '.$key['nama_pegawai'].' bulan Desember',$created_by,$key['iuran_wajib']);
		}

		if(!empty($investasi) && $investasi != 0){
			$investasi = $investasi + $key['total_investasi'];
			$kode = updateInvestasiPegawai($idpegawai,$investasi);
			//$kode = tambahDataTransaksi($key['nama_pegawai'],$datenow,'KREDIT','Investasi atas nama '.$key['nama_pegawai'],$created_by,$investasi);
		}
		
	}
	
	echo $kode;
	//iskode($kode,0,"Data Berhasil Di Update !!","Data Tidak Berhasil Di Update !!","datakaryawan.php","datakaryawan.php");
	
}   elseif ($page == 'adddebittransaksi') { 
	
	$created_by = $_SESSION['displayname'];
	$nama_pegawai = $_POST['nama_pegawai'];

	$tgl_trans = $_POST['tgl_trans'];
	isempty($tgl_trans,"Pastikan Semua Field Tidak boleh kosong !!","form_debit.php");

	$uraian = $_POST['uraian'];

	$debit = $_POST['debit'];
	isnumeric($debit,"Maaf Anda Mengisikan Karakter Pada Field Number Iuran Wajib","form_debit.php");
	isempty($debit,"Pastikan Semua Field Tidak boleh kosong !!","form_debit.php");

	$kode = tambahDataTransaksi($nama_pegawai,$tgl_trans,'DEBIT',$uraian,$created_by,$debit);
	//iskode($kode,0,"Data Transaksi Debit Berhasil Di Tambahkan !!","Data Transaksi Debit Tidak Berhasil Di Tambahkan !!","form_debit.php","form_debit.php");
	
}   elseif ($page == 'deldebittransaksi') { 
	
	$idtransdebit = $_POST['idtransdebit'];
    $kode = hapusTransaksiDebit($idtransdebit);
	
}  elseif ($page == 'addkredittransaksi') { 
	
	$created_by = $_SESSION['displayname'];
	$nama_pegawai = $_POST['nama_pegawai'];

	$tgl_trans = $_POST['tgl_trans'];
	isempty($tgl_trans,"Pastikan Semua Field Tidak boleh kosong !!","form_kredit.php");

	$uraian = $_POST['uraian'];

	$kredit = $_POST['kredit'];
	isnumeric($kredit,"Maaf Anda Mengisikan Karakter Pada Field Number Iuran Wajib","form_kredit.php");
	isempty($kredit,"Pastikan Semua Field Tidak boleh kosong !!","form_kredit.php");

	$kode = tambahDataTransaksi($nama_pegawai,$tgl_trans,'KREDIT',$uraian,$created_by,$kredit);
	//iskode($kode,0,"Data Transaksi Kredit Berhasil Di Tambahkan !!","Data Transaksi Kredit Tidak Berhasil Di Tambahkan !!","form_kredit.php","form_kredit.php");

}     elseif ($page == 'delkredittransaksi') { 
	
	$idtranskredit = $_POST['idtranskredit'];
	$kode = hapusTransaksiKredit($idtranskredit);

}   elseif ($page == 'editdatapegawai') { 
	
	$result = '';

	$idpegawai = $_POST['idpegawai'];
	$nama_pegawai = $_POST['nama_pegawai'];
	$bulan = $_POST['bulan'];

	$yearnow = date("Y");

	$iuran_wajib = $_POST['iuran_wajib'];
	isnumeric($iuran_wajib,"Maaf Anda Mengisikan Karakter Pada Field Number Iuran Wajib","datakaryawan.php");
	isempty($iuran_wajib,"Pastikan Semua Field Tidak boleh kosong !!","datakaryawan.php");

	if($bulan == "" || $bulan == "tidakmilih"){
		$kode = updateDataPegawai($nama_pegawai,$iuran_wajib,$idpegawai,$bulan);
	} else {
		$kode = updateDataPegawai($nama_pegawai,$iuran_wajib,$idpegawai,$bulan);
		//$kode = delTransKreditByNamaPegDanThn($nama_pegawai,$bulan,$yearnow);
	}	
	
	
}   elseif ($page == 'refreshall') { 
	
	$kode = refreshLaporanPembayaranIuranPokok();
	//echo $kode;
	
}   else {
	session_destroy();
	?><script language="JavaScript">
						document.location='index.php'</script><?php
}










?>