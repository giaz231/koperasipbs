<?php   
include 'model.php';                                   
$a = 1;
$data = getDataDebit();
foreach ($data as $key ) {
    
?>
    <tr>
        <td class="text-center"><?php echo $a; ?></td>
        <td class="text-center"><?php echo $key['nama_pegawai']; ?></td>
        <td><?php echo $key['tgl_transaksi']; ?></td>
        <td><?php echo $key['deskripsi_transaksi']; ?></td>
        <td ><?php echo "Rp. ".number_format($key['jumlah_transaksi']); ?></td>
        <td class="text-center"><?php echo $key['create_by']; ?></td>
        <td class="text-center">
        <div class="btn-group">
        <button type="button"   title="Delete" class="btn btn-xs btn-danger" id="btn-delete" data-nama_pegawai="<?php echo $key['nama_pegawai']; ?>"
            data-idtransdebit="<?php echo $key['idtransaksi']; ?>" data-pages="deldebittransaksi" ><i class="fa fa-times"></i></button> 
        </div>
        </td> 
    </tr>
<?php 
    $a++;
} 
?>   