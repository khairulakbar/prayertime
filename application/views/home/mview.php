<html>
<head>
<title>PrayerTime by </title>

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
        <b>runtext (1 is active) :</b>
        <input type="text" class="form-control" name="runtext" value="<?php echo $runtext; ?>">
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
            value="2">Video
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
        <b>Gambar :</b>
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
    <!--tambah runtext -->
    <div class="col-sm-12">
    <b>Tambah Teks :</b>
    <form role="form" action="<?php echo base_url(); ?>mobile/tambahteks/" method="POST" enctype="multipart/form-data">
    
        <input type="text" name="tambahteks" class="form-control" placeholder="Isikan Teks...">
        <button type="submit" class="btn btn-primary col-sm-12"><i class="fa fa-plus"></i> Tambah</button>
    </form>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-lg-12">
    <b>List Running Text</b>
    <?php foreach ($information as $row2) { ?>
        <form role="form" action="<?php echo base_url(); ?>mobile/editteks/<?php echo $row2['id'];?>" method="POST" enctype="multipart/form-data">
            <input type="text" name="teks" class="form-control" value="<?php echo $row2['text'];?>">
            <button type="submit" class="btn btn-warning text-white m-2"><i class="fa fa-edit"></i> Edit</button>
        
            <a href="<?php echo base_url(); ?>mobile/hapusteks/<?php echo $row2['id'];?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
        </form>
        <?php } ?>
    </div>
</div>
<br>
<br>
</div>

<footer class="fixed-bottom">
    <div class="row">
        <div class="col-lg-12 bg-primary text-center p-2">
        <button class="col-lg-12 btn btn-primary">
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