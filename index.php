<!doctype html>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="">
<html class="no-js lt-ie9 lt-ie8" lang="">
<html class="no-js lt-ie9" lang="">
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Teleport - Travel Marketplace</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="33planet.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/scrollbar.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/prettyPhoto.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.countdown.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/transitions.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/core.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<?php
	$login = isset($_GET["login"]) ? $_GET["login"] : false;
	$page = isset($_GET["page"]) ? $_GET["page"] : "landing";
	if($page == NULL || $page == 'landing') {
		$page = "landing";
		$header = 1;
	}
	else {
		$header = 1;
	}
?>
<body class="tg-homebannerandslider tg-login">
    <div class="preloader-outer">
        <div class="pin"></div>
        <div class="pulse"></div>
    </div>

    <div id="tg-wrapper" class="tg-wrapper tg-haslayout">

      <?php include('partials/header.php'); ?>
      <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
          <?php include($page.'.php'); ?>
      </div>
      <?php include('partials/footer.php'); ?>

    </div>

    <!--************************************
         Appointment Modal Box Start
    *************************************-->
    <div class="modal fade tg-appointmentModal" tabindex="-1">
        <div class="modal-dialog tg-modaldialog" role="document">
            <div class="modal-content tg-modalcontent">
                <div class="tg-modalhead">
                    <a class="tg-closemodal" href="javascript:void(0);" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                    <h2>Select Appointment Date</h2>
                </div>
                <form class="tg-themeform tg-formappointment">
                    <div class="tg-modalbody">
                        <div id="tg-datepicker" class="tg-datepicker"></div>
                    </div>
                    <div class="tg-modalfoot">
                        <h2>Select Appointment Time:</h2>
                        <div class="tg-availabletimeslotbox">
                            <div class="tg-dateandcount">
                                <time datetime="2017-02-02">January 25, 2017</time>
                                <span>11 Available</span>
                            </div>
                            <div class="tg-timeslotsradio">
                                <span class="tg-radio">
                                    <input type="radio" id="tg-timeslotone" name="tg-timeslot" value="09:00" checked>
                                    <label for="tg-timeslotone">09:00</label>
                                </span>
                                <span class="tg-radio">
                                    <input type="radio" id="tg-timeslottwo" name="tg-timeslot" value="09:30">
                                    <label for="tg-timeslottwo">09:30</label>
                                </span>
                                <span class="tg-radio">
                                    <input type="radio" id="tg-timeslotthree" name="tg-timeslot" value="10:00">
                                    <label for="tg-timeslotthree">10:00</label>
                                </span>
                                <span class="tg-radio">
                                    <input type="radio" id="tg-timeslotfour" name="tg-timeslot" value="10:30">
                                    <label for="tg-timeslotfour">10:30</label>
                                </span>
                                <span class="tg-radio">
                                    <input type="radio" id="tg-timeslotfive" name="tg-timeslot" value="11:00">
                                    <label for="tg-timeslotfive">11:00</label>
                                </span>
                                <span class="tg-radio">
                                    <input type="radio" id="tg-timeslotsix" name="tg-timeslot" value="11:30">
                                    <label for="tg-timeslotsix">11:30</label>
                                </span>
                                <span class="tg-radio">
                                    <input type="radio" id="tg-timeslotseven" name="tg-timeslot" value="12:00">
                                    <label for="tg-timeslotseven">12:00</label>
                                </span>
                                <span class="tg-radio">
                                    <input type="radio" id="tg-timesloteight" name="tg-timeslot" value="12:30">
                                    <label for="tg-timesloteight">12:30</label>
                                </span>
                                <span class="tg-radio">
                                    <input type="radio" id="tg-timeslotnine" name="tg-timeslot" value="01:00">
                                    <label for="tg-timeslotnine">01:00</label>
                                </span>
                                <span class="tg-radio">
                                    <input type="radio" id="tg-timeslotten" name="tg-timeslot" value="01:30">
                                    <label for="tg-timeslotten">01:30</label>
                                </span>
                                <span class="tg-radio">
                                    <input type="radio" id="tg-timesloteleven" name="tg-timeslot" value="02:00">
                                    <label for="tg-timesloteleven">02:00</label>
                                </span>
                            </div>
                        </div>
                        <div class="tg-btnbox">
                            <button class="tg-btn" type="submit">continue</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function move() {
          var elem = document.getElementById("myBar");   
          var width = 10;
          var id = setInterval(frame, 10);
          function frame() {
            if (width >= 100) {
              clearInterval(id);
            } else {
              width++; 
              elem.style.width = width + '%'; 
              elem.innerHTML = width * 1  + '%';
            }
          }
        }
    </script>

    <?php
    echo "<script type='text/javascript' src='js/vendor/jquery-library.js'></script>";
    echo "<script type='text/javascript' src='js/vendor/bootstrap.min.js'></script>";
    echo "<script type='text/javascript' src='js/mapclustering/data.json'></script>";
    echo "<script type='text/javascript' src='https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&language=en'></script>";
    echo "<script type='text/javascript' src='js/mapclustering/markerclusterer.min.js'></script>";
    echo "<script type='text/javascript' src='js/mapclustering/infobox.js'></script>";
    echo "<script type='text/javascript' src='js/mapclustering/map.js'></script>";
    echo "<script type='text/javascript' src='js/jquery.countdown.js'></script>";
    echo "<script type='text/javascript' src='js/owl.carousel.min.js'></script>";
    echo "<script type='text/javascript' src='js/scrollbar.min.js'></script>";
    echo "<script type='text/javascript' src='js/prettyPhoto.js'></script>";
    echo "<script type='text/javascript' src='js/jquery-ui.js'></script>";
    echo "<script type='text/javascript' src='js/readmore.js'></script>";
    echo "<script type='text/javascript' src='js/gmap3.js'></script>";
    echo "<script type='text/javascript' src='js/main.js'></script>";
    ?>

</body>

</html>
</body>

</html>
