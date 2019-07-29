<html>
<head>
<title>PrayerTime by </title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/base.css">

 <!--Bootstrap core CSS 
<link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Bootstrap core JavaScript -->
<script src="bootstrap/vendor/jquery/jquery.min.js"></script>
<script src="bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
   $("#myModal").modal();
});
</script>

</head>
<body class="bg-primary">

<div class="container">

<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
  </button>-->

  <!-- The Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" style="margin: 0 auto;">
          <h4 class="modal-title">WAKTU IQAMAH</h4>
          <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" style="margin: 0 auto;">
          
            <div class="timer" data-seconds-left=5></div>
          
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
        <h1><p class="mb-5 text-center text-white">Prayer Time</p></h1>
      </div>
  </div>
  <div class="row mt-5">
      <div class="col-lg-12">
        <b><p id="date" class="mt-5"> </p></b>
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
      <p class="display-1 font-weight-bold text-center text-white">:</p>
    </div>

    <div class="col-lg-2 col-sm-2">
      <div class="panel panel-default">
          <div class="panel-body bg-white rounded p-2 mb-2 shadow">
            <p class="display-1 font-weight-bold text-center" id="minutes"></p>
          </div>
      </div>
    </div>

    <div class="col-lg-1 col-sm-2">
      <p class="display-1 font-weight-bold text-center text-white">:</p>
    </div>

    <div class="col-lg-2 col-sm-2 pb-5">
      <div class="panel panel-default">
          <div class="panel-body bg-white rounded p-2 mb-2 shadow">
            <p class="display-1 font-weight-bold text-center" id="seconds"></p>
          </div>
      </div>
    </div>
  </div>

  <br>

  <div class="row">
    <div class="col-lg-2 col-sm-2 pt-5">
      <!--<p class="unit" id="hours"></p>-->
      <div class="panel panel-default">
        <div class="panel-body bg-white rounded p-2 mb-2 shadow">
        <p class="font-weight-bold text-center" id="hours">IMSAK</p>
        <p class="display-4 font-weight-bold text-center" id="hours">04:00</p>
        </div>
      </div>
    </div>


    <div class="col-lg-2 col-sm-2 pt-5">
      <div class="panel panel-default">
          <div class="panel-body bg-white rounded p-2 mb-2 shadow">
            <p class="font-weight-bold text-center" id="minutes">SUBUH</p>
            <p class="display-4 font-weight-bold text-center" id="hours">05:00</p>
          </div>
      </div>
    </div>

    <div class="col-lg-2 col-sm-2 pt-5">
      <div class="panel panel-default">
          <div class="panel-body bg-white rounded p-2 mb-2 shadow">
            <p class="font-weight-bold text-center" id="seconds">DZUHUR</p>
            <p class="display-4 font-weight-bold text-center" id="hours">06:00</p>
          </div>
      </div>
    </div>

    <div class="col-lg-2 col-sm-2 pt-5">
      <div class="panel panel-default">
          <div class="panel-body bg-white rounded p-2 mb-2 shadow">
            <p class="font-weight-bold text-center" id="seconds">ASHAR</p>
            <p class="display-4 font-weight-bold text-center" id="hours">07:00</p>
          </div>
      </div>
    </div>

    <div class="col-lg-2 col-sm-2 pt-5">
      <div class="panel panel-default">
          <div class="panel-body bg-white rounded p-2 mb-2 shadow">
            <p class="font-weight-bold text-center" id="seconds">MAGHRIB</p>
            <p class="display-4 font-weight-bold text-center" id="hours">08:00</p>
          </div>
      </div>
    </div>

    <div class="col-lg-2 col-sm-2 pt-5">
      <div class="panel panel-default">
          <div class="panel-body bg-white rounded p-2 mb-2 shadow">
            <p class="font-weight-bold text-center" id="seconds">ISYA</p>
            <p class="display-4 font-weight-bold text-center" id="hours">09:00</p>
          </div>
      </div>
    </div>
  </div>


</div>


<div class="container-fluid mt-5 mb-2 p-3 bg-danger">
  <div class="row">
    <div class="col-lg-12">
      <marquee id="runteks" class="display-4 text-white" >Test Running Text</marquee>
    </div>
  </div>
</div>



<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script2.js">


<!--script timer -->

<script src="<?php echo base_url(); ?>assets/timer/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/timer/jquery.simple.timer.js"></script>
<script>
  function hideModal() {
    $('#myModal').modal('toggle'); 
  }
  $(function(){
    $('.timer').startTimer({
      onComplete: function(element){
        element.addClass('is-complete');
        setTimeout(hideModal, 3000);

      }
    });
  });
</script>
<style>
  .timer, .timer-done, .timer-loop {
    font-size: 120px;
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
</body>
</html>