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

</head>
<body class="bg-primary">

<div class="container">
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

</script>
</body>
</html>