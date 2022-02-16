<div class="container-fluid jumbotron bg-light">
<a href="<?= site_url('parfum/tambah')?>" class="btn btn-primary">Tambah</a>
<br>
<br>
<div class="float-left">
<h1 class="display-6 text-center">Wanita</h1>
<hr>
<div class= "col-md-12 col-xs-12 col-sm-12 col-lg-12  " >

<table class="table table-bordered table-striped text-center">

    <head align='left'>
        <tr>  
            <td>Id</td>
            <td>Merek</td>
            <td>Harga</td>
            <td>stok</td>
            <td>Ket</td>
            <td>foto</td>
        </tr>
    </head>
    <body class="bg-light"  >
        <?php
        foreach ($wanita as $p ) {
           ?>
           <tr>
               <td><?= $p->id_parfum?></td>
               <td><a  href="<?= site_url('parfum/profil_p/')?>"> <?= $p->merek?></td>
               <td><?= $p->harga?></td>
               <td><?= $p->stok?></td>
               <td>
               <a class="btn btn-success btn-sm" href="<?= site_url('parfum/update_/')?><?=  $p->id_parfum?>">EDIT</a>
                </td>
                <td>
                <?php if($p->nama_foto){?>
                <a class="btn btn-info waves-effect" href="<?= base_url('assets/image/')?><?= $p->nama_foto ?>">lihat file</a>
                <?php }else{ ?>
                <form action="<?= site_url('parfum/upload_file')?>" method="post" enctype="multipart/form-data">
                        
                        <input type="hidden" name="nme_foto" value=<?= $p->id_parfum ?> id="">
                    <input type="file" name="fileToUpload" required id="fileToUpload">

                    <button type="submit" class="btn btn-info waves-effect">upload</button>
                </form>
                <?php } ?>
                </td>

        <?php 
        } 
        ?>
    </body>
    
</table>
    </div> 
    </div>
  

    <div class="float-right">
<h1 class="display-6 text-center">Pria</h1>
<hr>
<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12" >

<table class="table table-bordered table-striped text-center " >
    <head>
    <tr>
            
            <td>Id</td>
            <td>Merek</td>
            <td>Harga</td>
            <td>stok</td>
            <td>Ket</td>
            <td>foto</td>
            

        </tr>
    </head>
  
    <body>
        <?php
        foreach ($pria as $p ) {
           ?>
           <tr>
               <td><?= $p->id_parfum?></td>
               <td><a  href="<?= site_url('parfum/profil_p/')?>"> <?= $p->merek?></td>
               <td><?= $p->harga?></td>
               <td><?= $p->stok?></td>
                <td>
                <?php if($p->nama_foto){?>
                <a class="btn btn-info waves-effect" href="<?= base_url('assets/image/')?><?= $p->nama_foto ?>">lihat file</a>
                <?php }else{ ?>
                <form action="<?= site_url('parfum/upload_file')?>" method="post" enctype="multipart/form-data">
                        
                        <input type="hidden" name="nme_foto" value=<?= $p->id_parfum ?> id="">
                    <input type="file" name="fileToUpload" required id="fileToUpload">

                    <button type="submit" class="btn btn-info waves-effect">upload</button>
                </form>
                <?php } ?>
                </td>
               <td>
               <a class ="btn btn-success btn-sm" href="<?= site_url('parfum/update_/')?><?=  $p->id_parfum?>">EDIT</a>
               </td>
        <?php 
        } 
        ?>
    </body>
</table>
</div>

</div>

