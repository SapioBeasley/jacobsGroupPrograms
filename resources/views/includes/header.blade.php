<header class="item header margin-top-0 padding-bottom-0 header12" id="hs_header3">

  <div class="wrapper">

    <div class="banner bg bg2" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0" style="background-image:url(images/background/{{ $program->slug }}.jpg);">

      <div class="banner_bg">

        @if (Session::has('success_message'))
          <div class="alert alert-success">{{ Session::get('success_message') }}</div>
        @endif

        <div class="container">
          <div class="col-md-8 col-md-offset-2 text-center">

            <!-- <img src="images/icons/jacobsgroup-logo.png" alt="header logo"> -->
            <p class="editContent">{{ $program->title }} <br><small>{{ $program->presentedBy }}</small></p>
            <h3 class="editContent">Up to 100% off closing costs<br> (avg. $5,075+) when purchasing a home</h3>
            <a href="#get-started" class="btn btn-info btn-embossed btn-wide btn_white"> Get Started</a>

            <div class="hs_scroll_wrapper">
              <div class="hs_scroll">
                <a href="#get-started"><i class="fa fa-angle-down editContent"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- /.wrapper -->
    <!-- /.wrapper -->

  </div>
</header>
<!-- /.item -->
