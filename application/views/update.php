<div class="container jumbotron">

<h1 class="display-4 text-center">update Parfum</h1>
<br>

<a class="btn btn-primary btn-md" href="<?= site_url('parfum/index') ?>">KEMBALI</a>

<form class="form-group" action="<?= site_url('parfum/update_data') ?>" method="post">
  <table>
      <td>Kode Parfum</td>
      <td><input type="text" name="id_parfum" value="<?= $parfum->id_parfum?>" /> </td>
    </tr>
    <tr>
      <td>Merek</td>
      <td><input type="text" name="merek" value="<?= $parfum->merek?>"> </td>
    </tr>
    <tr>
      <td>Gender</td>
      <?php if($parfum->gender == 'laki-laki'){?>
      <td><input type="radio" checked name="gender" value="laki-laki"> laki-laki</td>
      <td><input type="radio" name="gender" value="wanita"> perempuan</td>
      <?php }else{ ?>
      <td><input type="radio" name="gender" value="laki-laki"> laki-laki</td>
      <td><input type="radio" checked name="gender" value="wanita"> perempuan</td>
      <?php }?>
    </tr>
    <tr>
    <tr>
      <td>Ukuran</td>
      <td><input type="number" name="ukuran" value="<?= $parfum->ukuran?>"></td>  
    </tr>
    <tr>
      <td>Jenis</td>
      <td><input type="text" name="jenis" value="<?= $parfum->jenis?>"></td>  
    </tr>
    <tr>
      <td>Kekuatan Aroma</td>
      <td><input type="text" name="ka" value="<?= $parfum->kekuatan_aroma?>"> </td>  
    </tr>
    <tr>
      <td>Klarifikasi Aroma</td>
      <td><input type="text" name="kla" value="<?= $parfum->klarifikasi_aroma?>"> </td>  
    </tr>
    <tr>
      <td>Tahun</td>
      <td><input type="text" name="thn" value="<?= $parfum->tahun?>"> </td>  
    </tr>
    <tr>
      <td>Harga</td>
      <td><input type="text" name="hrg" value="<?= $parfum->harga?>"> </td>  
    </tr>
    <tr>
      <td>Stok</td>
      <td><input type="text" name="stok" value=""> </td>  
    </tr>
    <tr>
      <td " align="center"><input type="submit" name="submit" value="UPDATE"> </td>
</tr>
  </table>
</form>
