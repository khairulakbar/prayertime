<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">

  header {
  position: relative;
  background-color: black;
  height: 100%;
  min-height: 25rem;
  width: 100%;
  overflow: hidden;
}

header video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

header .container {
  position: relative;
  z-index: 2;
}

header .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  /*background-color: black;
  opacity: 0.5;*/
  z-index: 1;
}

.marq{
  font-size:36px;
}

.containtext{
  position: fixed;
  z-index: 30;
  height: 30%;
  width:100%;
  padding-top: auto;
  bottom:-180px;
}

.jumbotron{
  
  height: auto;

}

.imagexx{
  padding-top: 0;
  width: 100%;
  position: fixed;
  z-index: 9;
}

.carousel {
  width: 100%;
}

.carousel_full {
  width: 100%;
  z-index: 10;
}

.carousel .slide-image.active {
  opacity: 1;
  transition: opacity 1s ease-in;
}

.carousel .slide-image {
  opacity: 0;
  display: block;
  left: 0;
  transition: opacity 1s ease-out;
}

.carousel.fade {
  opacity: 1;
}
.carousel.fade .item {
  transition: opacity ease-out .7s;
  left: 0;
  opacity: 0; /* hide all slides */
  top: 0;
  position: absolute;
  width: 100%;
  display: block;
}
.carousel.fade .item:first-child {
  top: auto;
  opacity: 1; /* show first slide */
  position: relative;
}
.carousel.fade .item.active {
  opacity: 1;
}

@media (pointer: coarse) and (hover: none) {
  header {
    /*background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;*/
  }
  header video {
    display: none;
  }
}

  </style>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="<?php echo base_url();?>assets/summernote/summernote.css" />

  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/js/bootstrap.bundle.min.js'?>">
  <!--<script type="text/javascript" href="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>-->
</head>

<body>
<?php 

//echo "ini adalah tampilan untuk slide video & image = parameter di tb_setting,template adalah 1";
//echo "<p>".$nama_masjid."</p>";
?>

<div id="myCarousel" class="carousel_full carousel fade">
      <div class="carousel-inner">

        <?php 
          $jmlgambar = count($dataimg);
          $durasi = $jmlgambar*$interval;

          //echo $durasi;

          foreach ($dataimg as $r) { 
        ?>
        
        <div class="item" >
          <img src="<?php echo base_url(); ?>image_file/<?php echo $r['img']; ?>" style="width:100%; height: 863px;">
        </div>
        <!--
        <div class="item active">
          <img src="<?php echo base_url(); ?>image_file/Image_1.jpg" style="width:100%; height: 850px;">
        </div>
        <div class="item">
          <img src="<?php echo base_url(); ?>image_file/Image_2.jpg" style="width:100%; height: 850px;">
        </div>
          -->
         <?php } ?>
       
      </div>
    </div>

</body>

<script>
//script for carousel 
 $(document).ready(function () {
  
  $('#myCarousel').find('.item').first().addClass('active');

 $('#myCarousel').carousel({
  interval: <?php echo $interval;?>,
  wrap: true
  });

/*
var dur = <?php //echo $durasi;?>

fungsi untuk pindah ke template video
setTimeout(function() {
  toVideo();
  
}, dur);
  
    $('#myCarousel').on('slid.bs.carousel', '', function() {
    //var $this = $(this);

    $('#myCarousel').show();

    if($('.carousel-inner .item:last').hasClass('active')) {
      $('#myCarousel').hide();
    }

    });
  */
  });

  function reload_data(){
        $.ajax({
            type  : 'POST',
            url   : '<?php echo base_url()?>index.php/Time_disp/stat/<?php echo $user ?>',
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                  
                  if(data[i].status === "1"){
                    var id = setInterval('reload_page();cekreload();', 100);
                    
                  }

                }
                //$('#myCarousel').html(html);
               
            }

        });
    }

    function cekreload(){
        $.ajax({
         type: "POST",
         url: "<?php echo base_url()?>index.php/Time_disp/updatestat",
         data: "id=<?php echo $user ?>&status=0",
         success: function(msg){
           //alert( "Page Refresh" + msg );
         }
       });

    }

    function toVideo(){
        $.ajax({
         type: "POST",
         url: "<?php echo base_url()?>index.php/Time_disp/updatestat",
         data: "id=<?php echo $user ?>&template=2",
         success: function(msg){
           //alert( "Page Refresh" + msg );
           reload_page();
         }
       });

    }

    function reload_page()
     {
        window.location.reload(true);
     }

     $(document).ready(function(){
      reload_data(); //pemanggilan fungsi tampil
      selesai();
    });


    function selesai() {
        setTimeout(function() {
            reload_data();
            selesai();
            //cekreload();
        }, 100);
    }  
</script>
</html>
