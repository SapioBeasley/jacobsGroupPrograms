<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	  <title>Landing Page List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--pageMeta-->

    <!-- Loading Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/flat-ui.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-contact.css" rel="stylesheet">
    <link href="css/style-content.css" rel="stylesheet">
    <link href="css/style-footers.css" rel="stylesheet">
    <link href="css/style-headers.css" rel="stylesheet">
    <link href="css/style-portfolios.css" rel="stylesheet">
    <link href="css/style-pricing.css" rel="stylesheet">
    <link href="css/style-team.css" rel="stylesheet">
    <link href="css/style-sponsors.css" rel="stylesheet">
    <link href="css/style-timer.css" rel="stylesheet">
    <link href="css/style-dividers.css" rel="stylesheet">
  	<link href="css/nivo-slider.css" rel="stylesheet">
  	<link href="css/fonts.css" rel="stylesheet">
  	<link href="css/owl.carousel.css" rel="stylesheet">
  	<link href="css/animate.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

    <!--headerIncludes-->

  </head>
  <body>

    <div id="page" class="page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                  <span class="glyphicon glyphicon-list"></span>Programs
              </div>
              <div class="panel-body">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <h3>Original Landing Pages</h3>
                      <p><a href="http://jacobsgroupvegas.com/programs/cosmopolitan-program">Cosmopolitan Program</a></p>
                      <p><a href="http://jacobsgroupvegas.com/programs/doctors-program">Doctors Program</a></p>
                      <p><a href="http://jacobsgroupvegas.com/programs/hotel-casino-employee-program">Hotel Casino Employee Program</a></p>
                      <p><a href="http://jacobsgroupvegas.com/programs/las-vegas-incentive-program">Las Vegas Incentive Program</a></p>
                      <p><a href="http://jacobsgroupvegas.com/programs/newlywed-program">Newlywed Program</a></p>
                      <p><a href="http://jacobsgroupvegas.com/programs/nurses-program">Nurses Program</a></p>
                      <p><a href="http://jacobsgroupvegas.com/programs/southwest-program">Southwest Program</a></p>
                      <p><a href="http://jacobsgroupvegas.com/programs/teachers-program">Teachers Program</a></p>
                    </li>
                    @foreach ($programs as $program)
                      <li class="list-group-item">
                        <div class="checkbox">
                            <input type="checkbox" id="checkbox" />
                            <label for="checkbox">
                            <a href="{{ route('show', $program['slug']) }}">{{ $program['title'] }}</a><br>
                          </label>
                        </div>
                        <div class="pull-right action-buttons">
                            <a href=""><span class="glyphicon glyphicon-pencil"></span></a>
                            <a href="" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
                        </div>
                      </li>
                    @endforeach
                  </ul>
              </div>
              <div class="panel-footer">
                  <div class="row">
                      <div class="col-md-6">
                          <h6>
                              Total Count <span class="label label-info">{{ count($programs) }}</span></h6>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="item timer" id="hs_timer3">
    		@include('includes.simply')
    	</div>
      <div class="footerWrapper bg bg1" id="hs_footer3">
			  @include('includes.footer')
    	</div>
    </div>

    <!-- Load JS here for greater good =============================-->
    <script src="js/modernizr.js"></script>
  	<script src="js/jquery-min.js"></script>
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/bootstrap-switch.js"></script>
    <script src="js/flatui-checkbox.js"></script>
    <script src="js/flatui-radio.js"></script>
    <script src="js/jquery.tagsinput.js"></script>
    <script src="js/jquery.placeholder.js"></script>
  	<script src="js/jquery.nivo.slider.pack.js"></script>
    <script src="js/application.js"></script>
  	<script src="js/over.js"></script>

  	<script src="js/parallax.js"></script>
  	<script src="js/smoothscroll.js"></script>
  	<script src="js/countdown.js"></script>
  	<script src="js/owl.carousel.js"></script>
    <script src="js/custom.js"></script>
  	<script>
  	$(function(){

  		if( $('#nivoSlider').length > 0 ) {

  	    	$('#nivoSlider').nivoSlider({
  	    		effect: 'random',
  				pauseTime: 5000
  	    	});

  		}

  	})
  	</script>

  </body>
</html>
