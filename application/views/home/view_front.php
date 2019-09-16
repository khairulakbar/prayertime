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

<!--<button id="btn_e" class="btn btn-primary" onclick="gantiwarna()">KLIK</button>-->

<!--<div id="runningtext" class="containtext text-white" >
          <!<button onclick="myFunction()">Try it</button>->
      
        <marquee id="marke" style="padding-top:1px; padding-bottom:40px;">
          <h4>
            <b>
              <span style="font-size:48px">
              <?php if($runteks != null){
                        echo $runteks; 
                      }else{
                        echo "Video Ads Sample Running Teks";
                      }
                        
              ?>
              </span>
            </b>
          </h4>
        </marquee>
      
</div>-->


<header>


<!--<body onload="myNewSrc()">-->
<body>
  <div class="overlay"></div>
  
  <?php 
    //$enable = 2; //jika enable 0 maka iklan video yang ditampilkan
    $result_array = Array();
    foreach ($datavid as $row) { 
    $result_array[] = $row['vids'];
  ?>
  <!--<video playsinline="playsinline" autoplay="autoplay" loop="loop">
    <source src="<?php echo base_url(); ?>video_file/<?php echo $row['vids']; ?>" type="video/mp4">
  </video>-->
  <?php } 
  $json_array = json_encode($result_array);

  ?>

  <?php $enable = 2; if ($enable == 0) { ?>
    <video id="myVideo" preload="auto" onended="myAddListener()" autoplay controls width="100%" height="100%" title="" poster="<?php echo base_url();?>assets/images/loading.png">
      <source src="" type="video/mp4">
    </video>
  <?php } elseif($enable == 1) { ?>

  <div class="jumbotron jumbotron-fluid">
  <div class="row" >
  
  <div class="col-sm-9" style="width:100%; height:850px; background-color:blue; padding-left:0;">
      <video id="myVideo" preload="auto" onended="myAddListener()" autoplay controls width="100%" height="100%" title="" poster="<?php echo base_url();?>assets/images/loading.png">
      <source src="" type="video/mp4">
    </video>
  </div>

  <div class="col-sm-3" style="background-color:green; padding-left:0; padding-right:0;">
   
  <!--<div id="myDIV" class="imagexx">
      <img src="<?php echo base_url().'image_file/'?>blog2.jpg" alt="Chicago" style="width:100%; height: auto;">-->
    <div id="myCarousel" class="carousel fade" data-ride="carousel" data-interval="<?php echo $detik; ?>">
      <div class="carousel-inner">
         
        <!-- <div class="item active">
          <img src="<?php echo base_url(); ?>image_file/img1.jpg" style="width:100%; height: 850px;">
        </div>-->

        <?php 
          foreach ($dataimg as $r) { 
        ?>
        
        <div class="item">
          <img src="<?php echo base_url(); ?>image_file/<?php echo $r['img']; ?>" style="width:auto; height: 850px;">
        </div>

         <?php } ?>
        
      </div>
    </div>
   
  <!--</div>-->
  </div>

  

  </div>
  </div>

  <?php } else { ?>
    <!--<video id="myVideo" preload="auto" onended="myAddListener()" autoplay controls width="1000" height="600" title="" poster="https://placehold.it/350x150">
      <source src="" type="video/mp4">
    </video>-->

    <div id="myCarousel" class="carousel_full fade" data-ride="carousel" data-interval="<?php echo $detik; ?>">
      <div class="carousel-inner">

        <?php 
          foreach ($dataimg as $r) { 
        ?>
        
        <div class="item" >
          <img src="<?php echo base_url(); ?>image_file/<?php echo $r['img']; ?>" style="width:100%; height: 850px;">
        </div>

         <?php } ?>
       
      </div>
    </div>


   
  <!--</div>-->
  </div>

  <?php } ?>

</body>


</header>

<!--<section class="container">
  <div class="my-3">
    <div class="row">
      <div class="col-lg-12" >-->
  
  
        
      <!--</div>
    </div>
  </div>
</section>-->

<script>

  $(document).ready(function () {
  $('#myCarousel').find('.item').first().addClass('active');
  });

	var videoSources= <?php echo $json_array  ?>;

          var currentIndex = 0;
         
    // listener function changes src
          function myNewSrc() {
              var myVideo = document.getElementsByTagName('video')[0];
              myVideo.src = "<?php echo base_url().'video_file/'?>"+videoSources[currentIndex];
              myVideo.load();

          }

         
    // add a listener function to the ended event
          function myAddListener(){

              var myVideo = document.getElementsByTagName('video')[0];
              currentIndex = (currentIndex+1) % videoSources.length;
              myVideo.src = "<?php echo base_url().'video_file/'?>"+videoSources[currentIndex];
              myVideo.addEventListener('ended', myNewSrc, false);
              
          }
  
    /*
     $(document).ready(function(){
      setInterval(function(){ reload_page(); },60*60000);
       });
     */

     function reload_page()
     {
        window.location.reload(true);
     }


     function gantiwarna(){
      var x = document.getElementById("marke");
      //x.style.backgroundColor = "red";
        if(x.style.backgroundColor === "red"){
          x.style.backgroundColor = "green";
        }else{
          x.style.backgroundColor = "red";
        }
     }

     
     
     //fungsi hide running text
     myTeks();
     function myTeks() {
      var tampill= '<?php echo $tampil ?>';
      var x = document.getElementById("runningtext");
      if (tampill === "on") {
        x.style.display = "block";  
      }else{
        x.style.display = "none"; 
      }
     
    }
     /* fungsi hide image carousel
    function myFunction() {
      var x = document.getElementById("myDIV");
      if (x.style.display === "none") {
        x.style.display = "block";
         
      } else {
        x.style.display = "none";
        myNewSrc();
      }
    }*/

/*set interval antara image carousel dan video show ; $enable = 2
var x = document.getElementById("myCarousel");
var id = setInterval('test();', 15000); //call test every 10 seconds.

function test() {
 //alert('called!');
 x.style.display = "none";
  myNewSrc();
  //stop();
}


function stop() { // call this to stop your interval.
   clearInterval(id);
}*/



   
	</script>

  <script type="text/javascript">
    $(document).ready(function(){
      reload_data(); //pemanggilan fungsi tampil
      merah();
      selesai();
    });


    function selesai() {
        setTimeout(function() {
            reload_data();
            selesai();
            //cekreload();
        }, 100);
    }

    function hijo(){
      var x = document.getElementById("marke");
      x.style.backgroundColor = "green";
     }

     function merah(){
      var x = document.getElementById("marke");
      x.style.backgroundColor = "red";
     }

    function reload_data(){
        $.ajax({
            type  : 'POST',
            url   : '<?php echo base_url()?>index.php/frontviu/stat/<?php echo $user ?>',
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
         url: "<?php echo base_url()?>index.php/frontviu/updatestat",
         data: "id_user=<?php echo $user ?>&status=0",
         success: function(msg){
           //alert( "Page Refresh" + msg );
         }
       });

    }
  </script>

  <!--<script type="text/javascript">
    $(document).ready(function(){
      tampil_data(); //pemanggilan fungsi tampil barang.
    
      selesai();
    });
        function selesai() {
        setTimeout(function() {
            tampil_data();
            selesai();

        }, 100);

        }

    function tampil_data(){
        $.ajax({
            type  : 'ajax',
            url   : '<?php echo base_url()?>index.php/frontviu/DataImage',
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                  

                    html += '<div class="carousel-inner">'+
                    '<div class="item active">'+
                      '<img src="<?php echo base_url(); ?>image_file/'+data[i].img+' ?>" style="width:100%; height: 720px;">'+
                    '</div>'+
                   
                   
                '</div>';
                }
                $('#myCarousel').html(html);
            }

        });
    }
  </script>-->

</html>