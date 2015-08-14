<div class="col-md-6" style="background-color:#ffffff;" id="get-started">
	<div class="col-md-10 col-md-offset-1">
	<div class="contact_detail_wrapper">
		<h3 class="editContent" style="color:#212121 !important"><strong>{{ $program->for }}</strong></h3>
		<p class="editContent" style="color:#212121 !important;line-height:40px;">
	  	<i class="fa fa-check"></i> {{ $program->detail1 }}
	 		<br>
	  	<i class="fa fa-check"></i> {{ $program->detail2 }}
	 		<br>
	  	<i class="fa fa-check"></i> {{ $program->detail3 }}
	 		<br>
	  	<i class="fa fa-check"></i> {{ $program->detail4 }}
	 		<br>
	  	<i class="fa fa-check"></i> {{ $program->detail5 }}
	 		<br>
	  	<i class="fa fa-check"></i> {{ $program->detail6 }}
	 		<br>
	  	<i class="fa fa-check"></i> {{ $program->detail7 }}
	 		<br>
	  	<i class="fa fa-check"></i> {{ $program->detail8 }}
	 		<br>
	  	<i class="fa fa-check"></i> {{ $program->detail9 }}
	 		<br>
	  	<i class="fa fa-check"></i> {{ $program->detail10 }}
	  </p>
  </div><!-- /.editContent -->
  </div>
</div>
<div class="col-md-4 col-md-offset-1">
	<div class="contact_detail_wrapper">
		<h3 class="editContent">get in touch</h3>

		{!! Form::open(['route' => ['mail.inquire', 'slug' => $program->slug]]) !!}

		<div class="form-group">
			{!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control hs_border', 'placeholder' => 'name']) !!}
		</div>
		<div class="form-group">
			{!! Form::text('email', null, ['id' => 'email', 'class' => 'form-control hs_border', 'placeholder' => 'email']) !!}
		</div>
		<div class="form-group">
			{!! Form::text('phone', null, ['id' => 'phone', 'class' => 'form-control hs_border', 'placeholder' => 'phone']) !!}
		</div>

		{!! Form::hidden('program', $program->title) !!}

		<p class="editContent">GIVE US A CALL (702)442-0055 </p>

		<div class="form-group">
			{!! Form::submit('Inquire', ['id' => 'hs_sub', 'class' => 'btn btn-bg btn-primary btn-embossed btn_submit btn_colored']) !!}
		</div>

		{!! Form::close() !!}

	</div>
</div>
