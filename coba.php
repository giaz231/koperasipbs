<?php



$jan =  isset($_POST['jan']) ? $jan = $_POST['jan']:$jan ="";
$feb =  isset($_POST['feb']) ? $feb = $_POST['feb']:$feb ="";
$mar =  isset($_POST['mar']) ? $mar = $_POST['mar']:$mar ="";
$apr =  isset($_POST['apr']) ? $apr = $_POST['apr']:$apr ="";
$may =  isset($_POST['may']) ? $may = $_POST['may']:$may ="";
$jun =  isset($_POST['jun']) ? $jun = $_POST['jun']:$jun ="";
$jul =  isset($_POST['jul']) ? $jul = $_POST['jul']:$jul ="";
$aug =  isset($_POST['aug']) ? $aug = $_POST['aug']:$aug ="";
$sep =  isset($_POST['sep']) ? $sep = $_POST['sep']:$sep ="";
$oct =  isset($_POST['oct']) ? $oct = $_POST['oct']:$oct ="";
$nov =  isset($_POST['nov']) ? $nov = $_POST['nov']:$nov ="";
$des =  isset($_POST['des']) ? $des = $_POST['des']:$des ="";

$investasi = $_POST['investasi'];
$idpegawai = $_POST['idpegawai'];

echo $jan." ".$feb." ".$mar." ".$apr." ".$may." ".$jun." ".$jul." ".$aug." ".$sep." ".$oct." ".$nov." ".$des." --->>>> investasi : ".$investasi." id pegawai: ".$idpegawai;



?>