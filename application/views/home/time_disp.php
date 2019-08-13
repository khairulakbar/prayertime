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
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
<link rel="stylesheet" href="<?php echo base_url();?>assets/new/css/font-awesome.min.css">

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
<body class="bg-white"  style="background-image: url('<?php echo base_url(); ?>assets/images/<?php echo $image;?>'); background-repeat: repeat; background-size: cover; background-position: center center;">

<div class="container mt-2 mb-5">


<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
  </button>-->

  <!-- The Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" style="margin: 0 auto;">
          <h4 id="modal-title" class="modal-title"></h4>
          <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" style="margin: 0 auto;">
          
            <div id="timer" class="timer"></div>
            <h6 id="body-txt" class="teks"></h6>
        </div>
        
        <!-- Modal footer 
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>-->
        
      </div>
    </div>
  </div>

  <div class="row mt-2">
      <div class="col-lg-12">
        <div id="timediv"></div>
        <h1><p class="text-center text-white text-uppercase shadows"><strong><?php echo $nama_masjid; ?></strong></p></h1>
        <h4><p class="mb-3 text-center text-white text-uppercase shadows"><strong><?php echo $alamat; ?></strong></p></h4>
        
      </div>
  </div>

  <div class="row mt-4">
      <div class="col-lg-12">
        
        <b><p id="date" class="mt-4"> </p></b>
      </div>
  </div>
  
  <div class="row">
    <div class="col-lg-2 col-sm-2">
      <!--<p class="unit" id="hours"></p>-->
      <div class="panel panel-default">
        <div class="panel-body bg-white rounded p-2 mb-2 shadow">
        <p class="display-1 font-weight-bold text-center" id="hours"></p>
        </div>
      </div>
    </div>

    <div class="col-lg-1 col-sm-2">
      <p class="display-1 font-weight-bold text-center text-white shadows">:</p>
    </div>

    <div class="col-lg-2 col-sm-2">
      <div class="panel panel-default">
          <div class="panel-body bg-white rounded p-2 mb-2 shadow">
            <p class="display-1 font-weight-bold text-center" id="minutes"></p>
          </div>
      </div>
    </div>

    <div class="col-lg-1 col-sm-2">
      <p class="display-1 font-weight-bold text-center text-white shadows">:</p>
    </div>

    <div class="col-lg-2 col-sm-2 pb-1">
      <div class="panel panel-default">
          <div class="panel-body bg-white rounded p-2 mb-2 shadow">
            <p class="display-1 font-weight-bold text-center" id="seconds"></p>
          </div>
      </div>
    </div>
  </div>
    
  <div class="row">
  <div class="col-lg-12 col-sm-2">
      <div class="panel panel-default">
          <div class="panel-body bg-transparent rounded p-0 shadow">
          <h2><p class="m-3 font-weight-bold text-center text-white shadows">
            إِنَّ الصَّلَاةَ تَنْهَى عَنِ الْفَحْشَاءِ وَالْمُنْكَرِ
            
          </p></h2>
            <h6><p class="m-3 font-weight-bold text-center text-white shadows">
            <br>
            “Sesungguhnya shalat itu mencegah dari perbuatan keji dan mungkar.” 
            <br>(QS. Al-‘Ankabuut [29]: 45)
            </p></h6>
          </div>
      </div>
    </div>
  </div>

  <br>

  <div class="row">
  <?php foreach($jadwalsholat as $row) { ?>
    <div class="col-lg-2 col-sm-2 pt-1">
      <!--<p class="unit" id="hours"></p>-->
      <div class="panel panel-default">
        <div id="div-imsak" class="panel-body rounded p-2 mb-1 shadow">
        <p class="font-weight-bold text-center" id="hours">IMSAK</p>
        <p class="display-4 font-weight-bold text-center" id="hours"><?php echo $row['imsak']; ?></p>
        </div>
      </div>
    </div>
  
    <div class="col-lg-2 col-sm-2 pt-1">
      <div class="panel panel-default">
          <div id="div-subuh" class="panel-body rounded p-2 mb-1 shadow">
            <p class="font-weight-bold text-center" id="minutes">SUBUH</p>
            <p class="display-4 font-weight-bold text-center" id="hours"><?php echo $row['subuh']; ?></p>
          </div>
      </div>
    </div>

    <div class="col-lg-2 col-sm-2 pt-1">
      <div class="panel panel-default">
          <div id="div-dzuhur" class="panel-body rounded p-2 mb-1 shadow">
            <p class="font-weight-bold text-center" id="seconds">DZUHUR</p>
            <p class="display-4 font-weight-bold text-center" id="hours"><?php echo $row['dzuhur']; ?></p>
          </div>
      </div>
    </div>

    <div class="col-lg-2 col-sm-2 pt-1">
      <div class="panel panel-default">
          <div id="div-ashar" class="panel-body rounded p-2 mb-1 shadow">
            <p class="font-weight-bold text-center" id="seconds">ASHAR</p>
            <p class="display-4 font-weight-bold text-center" id="hours"><?php echo $row['ashar']; ?></p>
          </div>
      </div>
    </div>

    <div class="col-lg-2 col-sm-2 pt-1">
      <div class="panel panel-default">
          <div id="div-maghrib" class="panel-body rounded p-2 mb-1 shadow">
            <p class="font-weight-bold text-center" id="seconds">MAGHRIB</p>
            <p class="display-4 font-weight-bold text-center" id="hours"><?php echo $row['maghrib']; ?></p>
          </div>
      </div>
    </div>

    <div class="col-lg-2 col-sm-2 pt-1">
      <div class="panel panel-default">
          <div id="div-isya" class="panel-body rounded p-2 mb-1 shadow">
            <p class="font-weight-bold text-center" id="seconds">ISYA</p>
            <p class="display-4 font-weight-bold text-center" id="hours"><?php echo $row['isya']; ?></p>
          </div>
      </div>
    </div>
  </div>
  
  <?php //} ?>

</div>


<div id="runningtxt" class="container-fluid mt-1">
  <div class="row">
    <div class="col-lg-12">
      
      <marquee id="runteks" class="text-white bg-danger pt-1 pb-0"><h2>
      <?php foreach ($information as $row2) { ?>
        <?php echo $row2['text']; ?>
        &nbsp;&nbsp;|&nbsp;&nbsp;
        <?php } ?>
      </h2>
      </marquee>
    </div>
  </div>
</div>



<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script2.js">


<!--script timer -->

<script src="<?php echo base_url(); ?>assets/timer/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/timer/jquery.simple.timer.js"></script>

<script type="text/javascript">


    $('#myModal').modal('hide'); 

    var waktu = 5 * 1;
    
    $("#timer").attr('data-seconds-left', waktu); 

    var interval = setInterval(timestamphome, 1000);

    function showmodal(){
      $("#myModal").modal('show');
     
    }
    
    function timestamphome(){

    var imsak = "<?php echo $row['imsak']; ?>";
    var subuh = "<?php echo $row['subuh']; ?>";
    var dzuhur = "<?php echo $row['dzuhur']; ?>";
    var ashar = "<?php echo $row['ashar']; ?>";
    var maghrib = "<?php echo $row['maghrib']; ?>";
    var isya = "<?php echo $row['isya']; ?>";
      
    var date;
    date = new Date();
    var jam = date.getHours();
    var min = date.getMinutes();

    var tes = date.toLocaleTimeString('en-GB');

    $('#div-imsak').addClass('bg-white');
    $('#div-subuh').addClass('bg-white');
    $('#div-dzuhur').addClass('bg-white');
    $('#div-ashar').addClass('bg-white');
    $('#div-maghrib').addClass('bg-white');
    $('#div-isya').addClass('bg-white');
    //if(tes == '13:21:30'){
    //notifikasi sholat & iqamah
    if(tes == imsak+':00'){
      showmodal();
      $('#modal-title').text('WAKTU');
      $('#body-txt').text('IMSAK');
      
      setTimeout(function(){
        $('#modal-title').text('WAKTU IMSAK');
        $('#body-txt').text('');
        $(function(){
        $('.timer').startTimer({
            onComplete: function(element){
              element.addClass('is-complete');
              setTimeout(hideModal, 3000);

            }
          });
        });

      },5000);
      
    }
    if(tes == subuh+':00'){
      showmodal();
      $('#modal-title').text('WAKTU ADZAN');
      $('#body-txt').text('SUBUH');
      setTimeout(function(){
        $('#modal-title').text('WAKTU IQAMAH');
        $('#body-txt').text('');
        $(function(){
        $('.timer').startTimer({
            onComplete: function(element){
              element.addClass('is-complete');
              setTimeout(hideModal, 3000);

            }
          });
        });

      },5000);
      
    }
    if(tes == dzuhur+':00'){
      showmodal();
      $('#modal-title').text('WAKTU ADZAN');
      $('#body-txt').text('DZUHUR');
      setTimeout(function(){
        $('#modal-title').text('WAKTU IQAMAH');
        $('#body-txt').text('');
        $(function(){
        $('.timer').startTimer({
            onComplete: function(element){
              element.addClass('is-complete');
              setTimeout(hideModal, 3000);

            }
          });
        });

      },5000);
      
    }
    if(tes == ashar+':00'){
      showmodal();
      $('#modal-title').text('WAKTU ADZAN');
      $('#body-txt').text('ASHAR');
      setTimeout(function(){
        $('#modal-title').text('WAKTU IQAMAH');
        $('#body-txt').text('');
        $(function(){
        $('.timer').startTimer({
            onComplete: function(element){
              element.addClass('is-complete');
              setTimeout(hideModal, 3000);

            }
          });
        });

      },5000);
      
    }
    if(tes == maghrib+':00'){
      showmodal();
      $('#modal-title').text('WAKTU ADZAN');
      $('#body-txt').text('MAGHRIB');
      setTimeout(function(){
        $('#modal-title').text('WAKTU IQAMAH');
        $('#body-txt').text('');
        $(function(){
        $('.timer').startTimer({
            onComplete: function(element){
              element.addClass('is-complete');
              setTimeout(hideModal, 3000);

            }
          });
        });

      },5000);
      
    }
    if(tes == isya+':00'){
      showmodal();
      $('#modal-title').text('WAKTU ADZAN');
      $('#body-txt').text('ISYA');
      setTimeout(function(){
        $('#modal-title').text('WAKTU IQAMAH');
        $('#body-txt').text('');
        $(function(){
        $('.timer').startTimer({
            onComplete: function(element){
              element.addClass('is-complete');
              setTimeout(hideModal, 3000);

            }
          });
        });

      },5000);
      
    }
    //var time = document.getElementById('timediv'); 
    //time.innerHTML = date.toLocaleTimeString('en-GB');
    //time.innerHTML = dzuhur+':00' ;

    }
  
  function hideModal() {
    $('#timer').text('');
    $('#timer').removeClass('jst-timeout');
    $('#myModal').modal('hide'); 
  }

  myTeks();
     function myTeks() {
      var tampil_runtext= '<?php echo $runtext ?>';
      var x = document.getElementById("runteks");
      if (tampil_runtext == 1) {
        x.style.display = "block";  
        $('#runningtxt').removeClass('mb-5');
      }else{
        x.style.display = "none"; 
        $('#runningtxt').addClass('mb-5');
      }
     
    }


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
<style>
  
  .timer, .timer-done, .timer-loop {
    font-size: 120px;
    color: black;
    font-weight: bold;
    padding: 10px;
  }
  .teks{
    font-size: 80px;
    color: black;
    font-weight: bold;
    padding: 10px;
  }

  // These are the default CSS classes
  // used by this plugin. Use these values
  // for a basic style to get started.
  .jst-hours {
    float: left;
  }
  .jst-minutes {
    float: left;
  }
  .jst-seconds {
    float: left;
  }
  .jst-clearDiv {
    clear: both;
  }
  .jst-timeout {
    color: red;
  }
</style>

</script>

<?php } ?>
</body>
</html>