<?php
function getDataPegawai(){
	include 'koneksi.php';
	$data = [];
	$query = "SELECT * FROM pegawai";
	$result = $mysqli->query($query)or trigger_error($mysqli->error."[$query]");
	while($row = $result->fetch_array(MYSQLI_ASSOC)){  
			$statuspembayaran = '';
			if($row['january'] == 1 && $row['febuary'] == 1 && $row['maret'] == 1 && $row['april'] == 1 && $row['mei'] == 1 && $row['juni'] == 1 && $row['jully'] == 1 && $row['agustus'] == 1 && $row['september'] == 1 && $row['october'] == 1 && $row['november'] == 1 && $row['desember'] == 1){
				$statuspembayaran = 'lunas';
			} else {
				$statuspembayaran = 'belum';
			}
            $data[] = [
            	'idpegawai' => $row['idpegawai'],
				'nama_pegawai' => $row['nama_pegawai'],
				'total_investasi' => $row['total_investasi'],       
				'iuran_wajib' => $row['iuran_wajib'],        	
				'january' => $row['january'],
				'febuary' => $row['febuary'],
				'maret' => $row['maret'],
				'april' => $row['april'],
				'mei' => $row['mei'],
				'juni' => $row['juni'],
				'jully' => $row['jully'],
				'agustus' => $row['agustus'],
				'september' => $row['september'],
				'october' => $row['october'],
				'november' => $row['november'],
				'desember' => $row['desember'],
				'statuspembayaran' => $statuspembayaran
            ];
    }    
	echo $data;
    return $data;
}

function getDataPegawaiById($idpegawai){
	include 'koneksi.php';
	$data = [];
	$query = "SELECT * FROM pegawai where idpegawai = '$idpegawai'";
	$result = $mysqli->query($query)or trigger_error($mysqli->error."[$query]");
	while($row = $result->fetch_array(MYSQLI_ASSOC)){            
            $data[] = [
            	'idpegawai' => $row['idpegawai'],
				'nama_pegawai' => $row['nama_pegawai'],
				'total_investasi' => $row['total_investasi'],       
				'iuran_wajib' => $row['iuran_wajib'],        	
				'january' => $row['january'],
				'febuary' => $row['febuary'],
				'maret' => $row['maret'],
				'april' => $row['april'],
				'mei' => $row['mei'],
				'juni' => $row['juni'],
				'jully' => $row['jully'],
				'agustus' => $row['agustus'],
				'september' => $row['september'],
				'october' => $row['october'],
				'november' => $row['november'],
				'desember' => $row['desember']
            ];
    }    
    return $data;
}

function updatePegawaiByIdAndMonth($idpegawai,$month){
	include 'koneksi.php';
	$query = "UPDATE pegawai SET ";
	switch ($month) {
		case 'january':
			$query = $query."january = 1";
			break;
		case 'febuary':
			$query = $query."febuary = 1";
			break;	
		case 'maret':
			$query = $query."maret = 1";
			break;
		case 'april':
			$query = $query."april = 1";
			break;		
		case 'mei':
			$query = $query."mei = 1";
			break;
		case 'juni':
			$query = $query."juni = 1";
			break;
		case 'jully':
			$query = $query."jully = 1";
			break;	
		case 'agustus':
			$query = $query."agustus = 1";
			break;
		case 'september':
			$query = $query."september = 1";
			break;
		case 'october':
			$query = $query."october = 1";
			break;
		case 'november':
			$query = $query."november = 1";
			break;
		case 'desember':
			$query = $query."desember = 1";
			break;
		default:
			# code...
			break;
	}

	$query = $query." WHERE idpegawai = '$idpegawai'";
	$result = $mysqli->query($query)or trigger_error($mysqli->error."[$query]");
	if ($result) {
		return 0;
	} else {
		return 1;
	}
}

function getLovPegawai(){
	include 'koneksi.php';
	$data = [];
	$query = "SELECT * FROM pegawai";
	$result = $mysqli->query($query)or trigger_error($mysqli->error."[$query]");
	while($row = $result->fetch_array(MYSQLI_ASSOC)){            
            $data[] = [
            	'idpegawai' => $row['idpegawai'],
				'nama_pegawai' => $row['nama_pegawai']
            ];
    }    
    return $data;
}

function updateInvestasiPegawai($idpegawai,$total_investasi){
	include 'koneksi.php';
	$query = "UPDATE pegawai SET total_investasi = '$total_investasi' WHERE idpegawai = '$idpegawai'";
	$result = $mysqli->query($query)or trigger_error($mysqli->error."[$query]");
	if ($result) {
		return 0;
	} else {
		return 1;
	}
}

function tambahDataTransaksi($nama_pegawai,$tgl_transaksi,$type_transaksi,$deskripsi_transaksi,$create_by,$jumlah_transaksi){
	include 'koneksi.php';
	$tahun = date("Y");
	$query = "INSERT INTO transaksi VALUES (null,'$nama_pegawai','$tgl_transaksi','$type_transaksi','$tahun','$deskripsi_transaksi','$create_by',$jumlah_transaksi)";	
	//echo $query;
	$result = $mysqli->query($query)or trigger_error($mysqli->error."[$query]");
	if ($result) {
    	return 0;
    } else{
    	return 1;
    }			  
}

function hapusPegawai($idpegawai){
	include 'koneksi.php';
	$query = "DELETE FROM pegawai WHERE idpegawai = '$idpegawai'";
	$result = $mysqli->query($query)or trigger_error($mysqli->error."[$query]");
	if ($result) {
		return 0;
	} else {
		return 1;
	}
}

function hapusTransaksiDebit($idtransaksi){
	include 'koneksi.php';
	$query = "DELETE FROM transaksi WHERE idtransaksi = '$idtransaksi' AND type_transaksi = 'DEBIT'";
	$result = $mysqli->query($query)or trigger_error($mysqli->error."[$query]");
	if ($result) {
		return 0;
	} else {
		return 1;
	}
}

function delTransDebitByNamaPegDanThn($nama_pegawai,$bulan){
	include 'koneksi.php';
	$query = "DELETE FROM transaksi WHERE idtransaksi = '$idtransaksi' AND type_transaksi = 'DEBIT'";
	$result = $mysqli->query($query)or trigger_error($mysqli->error."[$query]");
	if ($result) {
		return 0;
	} else {
		return 1;
	}
}

function hapusTransaksiKredit($idtransaksi){
	include 'koneksi.php';
	$query = "DELETE FROM transaksi WHERE idtransaksi = '$idtransaksi' AND type_transaksi = 'KREDIT'";
	$result = $mysqli->query($query)or trigger_error($mysqli->error."[$query]");
	if ($result) {
		return 0;
	} else {
		return 1;
	}
}

function delTransKreditByNamaPegDanThn($nama_pegawai,$bulan,$yearnow){
	include 'koneksi.php';
	//SELECT * FROM `transaksi` WHERE upper(`nama_pegawai`) = 'WAWAN KURNIAWAN' and tahun_transaksi = '2019' AND deskripsi_transaksi like '%January%'

	$query = "DELETE FROM transaksi WHERE upper(nama_pegawai) = '$nama_pegawai' AND type_transaksi = 'KREDIT' AND tahun_transaksi ='$yearnow'";

	switch ($bulan) {
		case 'january':
			$query = $query." AND deskripsi_transaksi like '%January%'";
			break;
		case 'febuary':
			$query = $query." AND deskripsi_transaksi like '%Febuary%'";
			break;	
		case 'maret':
			$query = $query." AND deskripsi_transaksi like '%Maret%'";
			break;
		case 'april':
			$query = $query." AND deskripsi_transaksi like '%April%'";
			break;		
		case 'mei':
			$query = $query." AND deskripsi_transaksi like '%Mei%'";
			break;
		case 'juni':
			$query = $query." AND deskripsi_transaksi like '%Juni%'";
			break;
		case 'jully':
			$query = $query." AND deskripsi_transaksi like '%Jully%'";
			break;	
		case 'agustus':
			$query = $query." AND deskripsi_transaksi like '%Agustus%'";
			break;
		case 'september':
			$query = $query." AND deskripsi_transaksi like '%September%'";
			break;
		case 'october':
			$query = $query." AND deskripsi_transaksi like '%October%'";
			break;
		case 'november':
			$query = $query." AND deskripsi_transaksi like '%November%'";
			break;
		case 'desember':
			$query = $query." AND deskripsi_transaksi like '%Desember%'";
			break;
		default:
			# code...
			break;
	}

	$result = $mysqli->query($query)or trigger_error($mysqli->error."[$query]");
	if ($result) {
		return 0;
	} else {
		return 1;
	}
}

function tambahPegawai($nama_pegawai,$total_investasi,$iuran_wajib){
	include 'koneksi.php';
	$query = "INSERT INTO pegawai VALUES (null,'$nama_pegawai','$total_investasi','$iuran_wajib','','','','','','','','','','','','')";	
	//echo $query;
	$result = $mysqli->query($query)or trigger_error($mysqli->error."[$query]");
	if ($result) {
    	return 0;
    } else{
    	return 1;
    }			  
}

function isempty($data,$komentar,$link){
	if (empty($data)) {
		?><script language="JavaScript">alert('<?php echo $komentar ?>');
						document.location='<?php echo $link; ?>'</script><?php
						exit;
	} 

}

function iskode($kode,$keykode,$komentar1,$komentar2,$link1,$link2){
	if ($kode == $keykode) {
		?><script language="JavaScript">alert('<?php echo $komentar1 ?>');
						document.location='<?php echo $link1; ?>'</script><?php
						exit;
	} else{
		?><script language="JavaScript">alert('<?php echo $komentar2 ?>');
						document.location='<?php echo $link2; ?>'</script><?php
						exit;
	}
}

function isnumeric($data,$komentar,$link){
	if (!is_numeric($data)) {
		?><script language="JavaScript">alert('<?php echo $komentar ?>');
						document.location='<?php echo $link; ?>'</script><?php
						exit;	
	} 
}


function login($email, $password){
	include 'koneksi.php';
	if (!empty($email) || !empty($password)) {

		$query = "SELECT * FROM super_user WHERE email = '$email' AND password_user = '$password'";		
		$result = $mysqli->query($query)or trigger_error($mysqli->error."[$query]");
		//echo $query;
		$row = $result->fetch_array(MYSQLI_ASSOC);
		if (!empty($row['email']) && !empty($row['password_user'])) {
			return 3;
		}else{
			return 2;
		}
	} else {
		
		return 1;
	}
}

function getDataLodinForSession($email){
	include 'koneksi.php';
	$query = "SELECT * FROM super_user WHERE email = '$email'";		
	$result = $mysqli->query($query)or trigger_error($mysqli->error."[$query]");
	$row = $result->fetch_array(MYSQLI_ASSOC);
	$data[] = [
		'role' => $row['role'],
		'nama_supuser' => $row['nama_supuser']
	];
    
	return $data;
	
}

function getDataDebit(){
	include 'koneksi.php';
	$data = [];
	$query = "SELECT * FROM transaksi where type_transaksi = 'DEBIT' ORDER BY tgl_transaksi desc";
	$result = $mysqli->query($query)or trigger_error($mysqli->error."[$query]");
	while($row = $result->fetch_array(MYSQLI_ASSOC)){            
            $data[] = [
            	'idtransaksi' => $row['idtransaksi'],
				'nama_pegawai' => $row['nama_pegawai'],
				'tgl_transaksi' => $row['tgl_transaksi'],      
				'type_transaksi' => $row['type_transaksi'],        	
				'deskripsi_transaksi' => $row['deskripsi_transaksi'],
				'create_by' => $row['create_by'],
				'jumlah_transaksi' => $row['jumlah_transaksi']
            ];
    }    
    return $data;
}

function getDataKredit(){
	include 'koneksi.php';
	$data = [];
	$query = "SELECT * FROM transaksi where type_transaksi = 'KREDIT' ORDER BY tgl_transaksi desc";
	$result = $mysqli->query($query)or trigger_error($mysqli->error."[$query]");
	while($row = $result->fetch_array(MYSQLI_ASSOC)){            
            $data[] = [
            	'idtransaksi' => $row['idtransaksi'],
				'nama_pegawai' => $row['nama_pegawai'],
				'tgl_transaksi' => $row['tgl_transaksi'],      
				'type_transaksi' => $row['type_transaksi'],        	
				'deskripsi_transaksi' => $row['deskripsi_transaksi'],
				'create_by' => $row['create_by'],
				'jumlah_transaksi' => $row['jumlah_transaksi']
            ];
    }    
    return $data;
}

function updateDataPegawai($nama_pegawai,$iuran_wajib,$idpegawai,$bulan){
	include 'koneksi.php';
	$query = "UPDATE pegawai SET nama_pegawai = '$nama_pegawai', iuran_wajib = '$iuran_wajib' ";	
	//echo $query;
	switch ($bulan) {
		case 'january':
			$query = $query.", january = 0";
			break;
		case 'febuary':
			$query = $query.", febuary = 0";
			break;	
		case 'maret':
			$query = $query.", maret = 0";
			break;
		case 'april':
			$query = $query.", april = 0";
			break;		
		case 'mei':
			$query = $query.", mei = 0";
			break;
		case 'juni':
			$query = $query.", juni = 0";
			break;
		case 'jully':
			$query = $query.", jully = 0";
			break;	
		case 'agustus':
			$query = $query.", agustus = 0";
			break;
		case 'september':
			$query = $query.", september = 0";
			break;
		case 'october':
			$query = $query.", october = 0";
			break;
		case 'november':
			$query = $query.", november = 0";
			break;
		case 'desember':
			$query = $query.", desember = 0";
			break;
		default:
			# code...
			break;
	}
	
	$query = $query." WHERE idpegawai = '$idpegawai'";
	$result = $mysqli->query($query)or trigger_error($mysqli->error."[$query]");
	if ($result) {
    	return 0;
    } else{
    	return 1;
    }			
}

function refreshLaporanPembayaranIuranPokok(){
	include 'koneksi.php';
	$query = "UPDATE pegawai SET january='',febuary='',maret='',april='',mei='',juni='',jully='',agustus='',september='',october='',november='',desember=''";	
	//echo $query;
	$result = $mysqli->query($query)or trigger_error($mysqli->error."[$query]");
	if ($result) {
    	return 0;
    } else{
    	return 1;
    }			
}

?>