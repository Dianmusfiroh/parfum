<div class="container jumbotron">
<h1 class="display-4 text-center">Tambah Parfum</h1>
<hr>
<a class="btn btn-primary btn-md" href="<?= site_url('parfum/index') ?>">KEMBALI</a>

<?php echo form_open_multipart('parfum/tambah_parfum') ?>

<!-- <form class="form-group" action="<?= form_open_multipart('parfum/tambah_parfum') ?>" method="post"> -->
  <table>
      <td>Kode Parfum</td>
      <td><input class="form-control" type="text" name="id_parfum" value=""> </td>
    </tr>
    <tr>
      <td>Merek</td>
      <td><input class="form-control" type="text" name="merek" value=""> </td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><input type="radio" name="gender" value="laki-laki"> laki-laki</td>
      <td><input type="radio" name="gender" value="wanita"> perempuan</td>

    </tr>
    <tr>
    <tr>
      <td>Ukuran</td>
      <td><input class="form-control" type="number" name="ukuran" value=""></td>  
    </tr>
    <tr>
      <td>Jenis</td>
      <td><input class="form-control" type="text" name="jenis" value=""></td>  
    </tr>
    <tr>
      <td>Kekuatan Aroma</td>
      <td><input class="form-control" type="text" name="ka" value=""> </td>  
    </tr>
    <tr>
      <td>Klarifikasi Aroma</td>
      <td><input class="form-control" type="text" name="kla" value=""> </td>  
    </tr>
    <tr>
      <td>Tahun</td>
      <td><input class="form-control" type="text" name="thn" value=""> </td>  
    </tr>
    <tr>
      <td>Harga</td>
      <td><input class="form-control" type="text" name="hrg" value=""> </td>  
    </tr>
    <tr>
      <td>Stok</td>
      <td><input class="form-control" type="text" name="stok" value=""> </td>  
    </tr>
  </table>
  <td " align="center"><input type="submit" name="submit" value="TAMBAH"> </td>

<?php echo form_close(); ?>
</div>