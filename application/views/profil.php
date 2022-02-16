<div class="container-fluid jumbotron bg-light">
<a class="btn btn-primary btn-md" href="<?= site_url('parfum/index') ?>">KEMBALI</a>

<!-- <form class="form-group" action="<?= site_url('parfum/profil_p') ?>" method="get"> -->
<?php echo form_open_multipart('parfum/tambah');?>
<br>
<br>
<div class="float-left"> 
<?php
foreach ($parfum as $p ){
?>
<td><img src="<?php echo base_url(); ?>./assets/image/\<?php echo  $p->nama_foto; ?>" width="90" height="110">
</td>
<?php
}
?>