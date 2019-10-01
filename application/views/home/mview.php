<html>
<head>
<title>PrayerTime by Degilimedia</title>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<link rel="stylesheet" href="<?php echo base_url();?>assets/new/jquery/jquery.min.js">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/base.css">

 <!--Bootstrap core CSS 
<link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
-->

<link rel="stylesheet" href="<?php echo base_url();?>assets/new/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/new/css/font-awesome.min.css">
<!--<link rel="stylesheet" href="<?php echo base_url();?>assets/new/css/font-awesome.min.css">-->

<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url();?>assets/bootstrap/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
<script src="<?php echo base_url();?>assets/new/js/jquery.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>-->
<script src="<?php echo base_url();?>assets/new/js/popper.min.js"></script>
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
<script src="<?php echo base_url();?>assets/new/js/bootstrap.min.js"></script>

</head>

<body>
<!--<span class="btn btn-danger pull-right">
<a href="<?php echo base_url(); ?>login/logout">
                <i class="fa fa-sign-out text-white"></i> <span class="text-white">Keluar</span>
</a>
</span>-->
<div class="container">
    <h3 class="text-center m-2">App Remote Setting</h3>
<form role="form" action="<?php echo base_url(); ?>mobile/updatesetting/<?php echo $id;?>" method="POST" enctype="multipart/form-data">
    <div class="row text-center">
        <div class="col-sm-6">
            <b>Nama Masjid :</b>
            <input type="text" class="form-control" name="nama_masjid" value="<?php echo $nama_masjid; ?>">
        </div>
        <div class="col-sm-6">
        <b>Alamat :</b>
        <input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>">
        </div>
    </div>

    <div class="row text-center">
    <div class="col-sm-6 mb-1">
        <b>Running Text : </b>
        </div>
        <div class="col-sm-6 mb-1">
        <!--<input type="text" class="form-control" name="runtext" value="<?php //echo $runtext; ?>">-->
        <input type="radio" name="runtext"
            <?php if (isset($runtext) && $runtext=="0") echo "checked";?>
            value="0"> Not Show
            <input type="radio" name="runtext"
            <?php if (isset($runtext) && $runtext=="1") echo "checked";?>
            value="1"> Show
        </div>
        
    </div>
    <div class="row text-center">
        <div class="col-sm-6 mb-1">
        <b>Durasi Iqamah(Menit) :</b>
        <input type="text" class="form-control" name="durasi" value="<?php echo $durasi_iqamah; ?>">
        </div>
        
    </div>

    <div class="row text-center">
        <div class="col-sm-6 mb-1">
        <b>Template : </b>
        </div>
        <div class="col-sm-6 mb-1">
            <input type="radio" name="template"
            <?php if (isset($template) && $template=="0") echo "checked";?>
            value="0"> Jadwal Sholat
            <input type="radio" name="template"
            <?php if (isset($template) && $template=="1") echo "checked";?>
            value="1"> Image Slideshow
            <input type="radio" name="template"
            <?php if (isset($template) && $template=="2") echo "checked";?>
            value="2"> Video
        </div>
        
    </div>

    

    <div class="row text-center">
        <div class="col-sm-12">
            <button type="submit" class="btn btn-primary col-sm-12">Update Setting</button>
        </div>
    </div>
</form>
<hr>

<form role="form" action="<?php echo base_url(); ?>mobile/updateimage/<?php echo $id;?>" method="POST" enctype="multipart/form-data">
    <div class="row">
    <div class="col-sm-6">
        <b>Gambar Background:</b>
        <input type="text" class="form-control"  value="<?php echo $image; ?>">
        <b>Upload Gambar :</b>
        <div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Browse&hellip; <input type="file" id="image" name="image" accept="image/*" style="display: none;" multiple>
                    </span>
                </label>
                <input type="text" class="form-control" readonly>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12">
            <button type="submit" class="btn btn-primary col-sm-12">Update Gambar</button>
        </div>
    </div>
</form>
<hr>


<div class="row">
    <div class="col-lg-12">
    <div class="card shadow mb-5">
        <a data-toggle="collapse" href="#collapse3">
        <div class="card-header py-3 bg-primary">
          <h6 class="m-0 font-weight-bold text-white">Running Text</h6>
        </div>
        </a>
    <div id="collapse3" class="panel-collapse collapse">
        <!--tambah runtext -->
    <div class="col-sm-12">
    <b>Tambah Running Teks :</b>
    <form role="form" action="<?php echo base_url(); ?>mobile/tambahteks/" method="POST" enctype="multipart/form-data">
    
        <input type="text" name="tambahteks" class="form-control" placeholder="Isikan Teks...">
        <button type="submit" class="btn btn-primary col-sm-12"><i class="fa fa-plus"></i> Tambah</button>
    </form>
    </div>

        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>No </th>
                    <th>Teks</th>
                    <th>Action</th>
                </tr>
                </thead>
                
                <tbody>
                <?php $no=0; foreach ($information as $row2) { $no++ ?>
                <form role="form" action="<?php echo base_url(); ?>mobile/editteks/<?php echo $row2['id'];?>" method="POST" enctype="multipart/form-data">
                <tr>
                <td width="5%" class="text-center"><?php echo $no; ?></td>
                <td width="30%"><input type="text" name="teks" class="form-control" value="<?php echo $row2['text'];?>"></td>
                <td width="20%">
                    <button type="submit" class="btn btn-warning text-white m-2"><i class="fa fa-edit"></i></button>
                    <a href="<?php echo base_url(); ?>mobile/hapusteks/<?php echo $row2['id'];?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
                </tr>
                
                    
                    
                </form>
                <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
    
    </div>
    </div>
</div>

<h6><b>Gambar Slide </b></h6>
<hr>
<div class="row mb-5">

<div class="col-lg-12">
      <div class="card shadow mb-4">
        <a data-toggle="collapse" href="#collapse2">
        <div class="card-header py-3 bg-primary">
          <h6 class="m-0 font-weight-bold text-white">Upload Gambar Slide</h6>
        </div>
        </a>
        <div id="collapse2" class="panel-collapse collapse">
        <form role="form" action="<?php echo base_url(); ?>mobile/saveimg/<?php //echo $id_user ?>" method="POST" enctype="multipart/form-data">

        <div class="card-body">
          <!-- Circle Buttons (Default) -->
          
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                <input type="hidden" class="form-control form-control-user" name="id_user" value="<?php //echo $id_user;?>">
                    <input type="text" class="form-control form-control-user" name="judul_img" id="exampleFirstName" placeholder="Judul Gambar">
                </div>
            </div>

            <div class="input-group">
                <p>Upload Foto &nbsp;</p>
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Browse&hellip; <input type="file" id="img" name="img" accept="image/*" style="display: none;" multiple>
                    </span>
                </label>
                <input type="text" class="form-control" readonly>
            </div>

            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" name="urut_img" id="exampleFirstName" placeholder="Urutan">
                </div>
            </div>


          <div class="my-2"></div>
          
           <!--tombol simpan-->
           <button id="btn_save" type="submit" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fa fa-save text-white"></i>
              </span>
              <span class="text">Simpan Gambar</span>
            </button>
        </div>
        </div>

      </div>
  </div><!-- end col -->
  </form>

<div class="col-lg-12">
<div class="card shadow mb-1">
        <a data-toggle="collapse" href="#collapse1">
        <div class="card-header bg-primary py-3">
          <h6 class="m-0 font-weight-bold text-white">List Gambar Slide</h6>
        </div>
        </a>
        <div id="collapse1" class="panel-collapse collapse">

    
        <form role="form" action="<?php echo base_url(); ?>mobile/updatedurasi/<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
            <h6 class="m-0 font-weight-bold text-danger">*Durasi Menit</h6>
           
            <div class="col-lg-3">
            <input type="text" class="form-control form-control-user" name="durasi" placeholder="Input Durasi">
            </div>
            <div class="col-lg-3">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i></button>
            </div>
        </form>

        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>No </th>
                    <th>Image</th>
                    <th>Urutan</th>
                    <th>Durasi</th>
                    <th>Action</th>
                </tr>
                </thead>
                <!--<tfoot>
                <tr>
                    <th>Username</th>
                    <th>Status</th>
                    <th>Action</th>
                    
                </tr>
                </tfoot>-->
                <tbody>
                
                <?php $no=0; foreach ($listimage as $row) { $no++ ?>
                  <form role="form" action="<?php echo base_url(); ?>mobile/editimg/<?php echo $row['id_img'] ?>" method="POST" enctype="multipart/form-data">
                  <input type="hidden" class="form-control form-control-user" name="id_user" value="<?php //echo $id_user;?>">
                <tr>
                    <td width="3%"><?php echo $no; ?></td>
                    <td width="30%"><?php echo $row['img'];?></td>
                    <td width="5%"><input type="text" class="form-control form-control-user" name="img_urut" placeholder="Urutan" value="<?php echo $row['urut'];?>"></td>
                    <td width="5%"><?php echo $row['detik'];?></td>
                    <td>
                    <!--<a class="btn btn-primary btn-sm" target="_blank" href="<?php echo base_url(); ?>image_file/<?php echo $row['img']; ?>"><i class="fa fa-play"></i></a>-->
                    
                    <button type="submit" class="btn btn-warning btn-sm"><i class="fa fa-save text-white"></i></button>
                    <a onclick="return confirm('Hapus data??');" class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>mobile/hapusimg/<?php echo $row['id_img']; ?>"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                </form>
                <?php } ?>
                
                </tbody>
            </table>
        </div>
        </div>

</div>
</div>
</div>

<h6><b>Video </b></h6>
<hr>

<div class="row"> <!-- row 1 -->

    
  <!-- col 2-->
  <div class="col-lg-6">
      <div class="card shadow mb-4">
      <a data-toggle="collapse" href="#collapse4">
        <div class="card-header bg-primary py-3">
          <h6 class="m-0 font-weight-bold text-white">Upload Video</h6>
        </div>
      </a>
      <div id="collapse4" class="panel-collapse collapse">
        <form role="form" action="<?php echo base_url(); ?>mobile/savevid/<?php echo $id ?>" method="POST" enctype="multipart/form-data">
        <div class="card-body">
          <!-- Circle Buttons (Default) -->

            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <input type="hidden" class="form-control form-control-user" name="id_user" value="<?php echo $id;?>">
                    <input type="text" class="form-control form-control-user" id="judul_vid" name="judul_vid" placeholder="Judul Video">
                </div>
            </div>

            <div class="input-group">
                <p>Upload Video &nbsp;</p>
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Browse&hellip; <input id="vids" name="vids" accept="video/*" type="file" style="display: none;" multiple>
                    </span>
                </label>
                <input type="text" class="form-control" readonly>
            </div>

            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" name="urut_vid" id="urut" placeholder="Urutan">
                </div>
            </div>


          <div class="my-2"></div>
          <!--tombol simpan-->
          <button type="submit" class="btn btn-danger btn-icon-split">
          <span class="icon text-white">
              <i class="fa fa-save"></i>
            </span>
            <span class="text">Simpan Video</span>
          </button>

        
          
        </div>
                </div>
      </div>
  </div><!-- end col -->
  </form>

  
  <div class="col-lg-6 mb-5">
      <div class="card shadow mb-4">
      <a data-toggle="collapse" href="#collapse5">
        <div class="card-header bg-primary py-3">
          <h6 class="m-0 font-weight-bold text-white">List Video</h6>
        </div>
      </a>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="card-body">
          <!-- Circle Buttons (Default) -->
         
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>No </th>
                    <th>Video</th>
                    <th>Urutan</th>
                    <th>Action</th>
                </tr>
                </thead>
                <!--<tfoot>
                <tr>
                    <th>Username</th>
                    <th>Status</th>
                    <th>Action</th>
                    
                </tr>
                </tfoot>-->
               <tbody>
                <?php $no=0; foreach ($listvid as $row) { $no++ ?>
                  <form role="form" action="<?php echo base_url(); ?>mobile/editvid/<?php echo $row['id_vids'] ?>" method="POST" enctype="multipart/form-data">
                  <input type="hidden" class="form-control form-control-user" name="id_user" value="<?php echo $id;?>">
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row['vids'];?></td>
                    <!--<td><?php echo $row['urut'];?></td>-->
                    <td width="30%"><input type="text" class="form-control form-control-user" name="vids_urut" placeholder="Urut" value="<?php echo $row['urut'];?>"></td>
                    <td>
                    <a class="btn btn-primary btn-sm" target="_blank" href="<?php echo base_url(); ?>video_file/<?php echo $row['vids']; ?>"><i class="fa fa-play"></i></a>
                    <button type="submit" class="btn btn-warning btn-sm"><i class="fa fa-save"></i></button>
                    <a onclick="return confirm('Hapus data??');" class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>mobile/hapusvid/<?php echo $row['id_vids']; ?>"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                </form>
                <?php } ?>
                
                </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
  </div><!-- end col -->
  
 
  
</div> <!-- end row1 -->

<div class="row mb-5"> <!-- row 1 -->

    
  <!-- col 2-->
  <div class="col-lg-6">
      <div class="card shadow mb-4">
      <a data-toggle="collapse" href="#collapseC">
        <div class="card-header bg-primary py-3">
          <h6 class="m-0 font-weight-bold text-white">Update Jadwal Sholat</h6>
        </div>
      </a>
      <div id="collapseC" class="panel-collapse collapse">
        <form role="form" action="<?php echo base_url(); ?>mobile/process/<?php //echo $id ?>" method="POST" enctype="multipart/form-data">
        <div class="card-body">
          <!-- Circle Buttons (Default) -->

            <!--<div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <input type="hidden" class="form-control form-control-user" name="id_user" value="<?php echo $id;?>">
                    <input type="text" class="form-control form-control-user" id="judul_vid" name="judul_vid" placeholder="Judul Video">
                </div>
            </div>-->

            <div class="input-group">
                <p>Upload CSV &nbsp;</p>
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Browse&hellip; <input id="jadwal" name="jadwal" accept="text/csv" type="file" style="display: none;" multiple>
                    </span>
                </label>
                <input type="text" class="form-control" readonly>
            </div>

            <!--<div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" name="urut_vid" id="urut" placeholder="Urutan">
                </div>
            </div>-->


          <div class="my-2"></div>
          <!--tombol simpan-->
          <button type="submit" name="import" class="btn btn-danger btn-icon-split">
          <span class="icon text-white">
              <i class="fa fa-save"></i>
            </span>
            <span class="text">Upload</span>
          </button>

        
          
        </div>
                </div>
      </div>
  </div><!-- end col -->
  </form>
</div>

</div><!-- end of container -->

<footer class="fixed-bottom">
    <div class="row">
        <div class="col-lg-12 bg-danger text-center p-2">
        <button class="col-lg-12 btn btn-danger">
        <a href="<?php echo base_url(); ?>Mobile/updatestat/<?php echo $id ?>">
            <span class="text-white"><i class="fa fa-refresh"></i>  Refresh Tampilan</span>
        </a>
        </button>
        </div>
    </div>
</footer>

</body>
<!--function browse file-->
<script>
        $(function() {

        // We can attach the `fileselect` event to all file inputs on the page
        $(document).on('change', ':file', function() {
          var input = $(this),
              numFiles = input.get(0).files ? input.get(0).files.length : 1,
              label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
          input.trigger('fileselect', [numFiles, label]);
        });

        // We can watch for our custom `fileselect` event like this
        $(document).ready( function() {
            $(':file').on('fileselect', function(event, numFiles, label) {

                var input = $(this).parents('.input-group').find(':text'),
                    log = numFiles > 1 ? numFiles + ' files selected' : label;

                if( input.length ) {
                    input.val(log);
                } else {
                    if( log ) alert(log);
                }

            });
        });

        });


        $(function(){
        $('#pesan-flash').delay(4000).fadeOut();
        $('#pesan-error-flash').delay(5000).fadeOut();
        });

        

  </script>
</html>