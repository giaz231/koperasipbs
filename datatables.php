
<?php   
include 'model.php';
$a = 1;
$data = getDataPegawai();
foreach ($data as $key ) {
    # code...

?>
    <tr>
        
        <td class="text-center"><?php echo $a; ?></td>
        <td class="text-center" id="nama_pegawai"><?php echo $key['nama_pegawai']; ?></td>
        <td class="text-center"><input type="checkbox" id="jan" name="jan" value="jan" <?php if(!empty($key['january'])){echo "checked disabled";} ?>></td>
        <td class="text-center"><input type="checkbox" id="feb" name="feb" value="feb" <?php if(!empty($key['febuary'])){echo "checked disabled";} ?>></td>
        <td class="text-center"><input type="checkbox" id="mar" name="mar" value="mar" <?php if(!empty($key['maret'])){echo "checked disabled";} ?>></td>
        <td class="text-center"><input type="checkbox" id="apr" name="apr" value="apr" <?php if(!empty($key['april'])){echo "checked disabled";} ?>></td>
        <td class="text-center"><input type="checkbox" id="may" name="may" value="may" <?php if(!empty($key['mei'])){echo "checked disabled";} ?>></td>
        <td class="text-center"><input type="checkbox" id="jun" name="jun" value="jun" <?php if(!empty($key['juni'])){echo "checked disabled";} ?>></td>
        <td class="text-center"><input type="checkbox" id="jul" name="jul" value="jul" <?php if(!empty($key['jully'])){echo "checked disabled";} ?>></td>
        <td class="text-center"><input type="checkbox" id="aug" name="aug" value="aug" <?php if(!empty($key['agustus'])){echo "checked disabled";} ?>></td>
        <td class="text-center"><input type="checkbox" id="sep" name="sep" value="sep" <?php if(!empty($key['september'])){echo "checked disabled";} ?>></td>
        <td class="text-center"><input type="checkbox" id="oct" name="oct" value="oct" <?php if(!empty($key['october'])){echo "checked disabled";} ?>></td>
        <td class="text-center"><input type="checkbox" id="nov" name="nov" value="nov" <?php if(!empty($key['november'])){echo "checked disabled";} ?>></td>
        <td class="text-center"><input type="checkbox" id="des" name="des" value="des" <?php if(!empty($key['desember'])){echo "checked disabled";} ?>></td>
        <td class="text-center" id="iuranwjb"><?php echo "Rp. ".number_format($key['iuran_wajib']); ?></td>
        <td class="text-center" id="inves"><?php echo "Rp. ".number_format($key['total_investasi']); ?></td>
        <td class="text-center"><input type="text" id="investasi" name="investasi" class="form-control" placeholder="Numbers" maxlength="13"></td>
        <td class="text-center">
        <div class="btn-group">
                
        <input type="hidden" id="nowinvestasi" name="nowinvestasi" value="<?php echo $key['total_investasi']; ?>">        
        <input type="hidden" id="idpegawai" name="idpegawai" value="<?php echo $key['idpegawai']; ?>">
        <input type="hidden" id="page" name="page" value="addtransaksikaryawan">
        <button type="button" id="btn-submit"  class="btn btn-xs btn-primary" title="Save" ><i class="fa fa-floppy-o"></i></button>  
     
        <button type="button"  data-toggle="modal" title="Edit" class="btn btn-xs btn-default" id="btn-edit" 
                data-idpegawai="<?php echo $key['idpegawai']; ?>" data-nama_pegawai="<?php echo $key['nama_pegawai']; ?>" 
                data-iuran_wajib="<?php echo $key['iuran_wajib']; ?>" ><i class="fa fa-pencil"></i></button>                                                            
        <button type="button"  data-toggle="modal" title="Delete" class="btn btn-xs btn-danger" id="btn-delete" data-nama_pegawaidel="<?php echo $key['nama_pegawai']; ?>"
                data-idpegawaidel="<?php echo $key['idpegawai']; ?>" data-pages="hapuspegawai" ><i class="fa fa-times"></i></button>                                                                    
        </div>
        </td>
         
    </tr>
<?php
    $a++;
}
?>

