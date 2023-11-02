<div class="container-fluid">

<div class="alert alert-success" role="alert">
<i class="fa-solid fa-university"></i> Program Studi
</div>

<?php echo $this->session->flashdata('pesan') ?>

<?php echo anchor('administrator/prodi/tambah_prodi', '<button class = "btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Prodi</button>') ?>


<table class="table table-striped table-bordered table-hover">
    <tr>
        <th>NO</th>
        <th>KODE PRODI</th>
        <th>NAMA PRODI</th>
        <th>NAMA JURUSAN</th>
        <th colspan="3">AKSI</th>
    </tr>

    <?php
    $no = 1;
    foreach ($prodi as $prd) :  ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?php   echo $prd->kode_prodi ?></td>
        <td><?php echo $prd->nama_prodi ?></td>
        <td><?php echo $prd->nama_jurusan ?></td>
        <td width = 20px><?php echo anchor('administrator/prodi/update/' .$prd->id_prodi, '<div class="btn btn-sm btn-primary"><i class = "fa fa-edit"> </i></div>') ?></td>
        <td width = 20px><?php echo anchor('administrator/prodi/delete/' .$prd->id_prodi, '<div class="btn btn-sm btn-danger"><i class = "fa fa-trash"> </i></div>') ?></td>
    </tr>
    <?php endforeach;?>
</table>

</div>