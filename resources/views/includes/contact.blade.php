<div class="col-md-6" style="background-color:#ffffff;" id="get-started">
	<div class="col-md-10 col-md-offset-1">
	<div class="contact_detail_wrapper">
		<h3 class="editContent" style="color:#212121 !important"><strong>For Military members, Veterans, and their families</strong></h3>
		<p class="editContent" style="color:#212121 !important;line-height:40px;">
	  	<i class="fa fa-check"></i> Up to 100% off closing costs (avg. $5,075+) when purchasing a home
	 		<br>
	  	<i class="fa fa-check"></i> Never pay back any assistance funds received
	 		<br>
	  	<i class="fa fa-check"></i> Lowest down payment guarantee
	 		<br>
	  	<i class="fa fa-check"></i> Low interest market rate guarantee
	 		<br>
	  	<i class="fa fa-check"></i> Easy loan pre-qualification and approval
	 		<br>
	  	<i class="fa fa-check"></i> Buy or sell in all of Nevada, with no area restrictions
	 		<br>
	  	<i class="fa fa-check"></i> VIP customer service
	 		<br>
	  	<i class="fa fa-check"></i> No storage fees, negotiation fees, or any other hidden fees
	 		<br>
	  	<i class="fa fa-check"></i> Discounts offered for Military selling their homes too!
	 		<br>
	  	<i class="fa fa-check"></i> No income limit
	  </p>
  </div><!-- /.editContent -->
  </div>
</div>
<div class="col-md-4 col-md-offset-1">
	<div class="contact_detail_wrapper">
		<h3 class="editContent">get in touch</h3>

		{!! Form::open(['route' => 'store']) !!}

		<div class="form-group">
			{!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control hs_border', 'placeholder' => 'name']) !!}
		</div>
		<div class="form-group">
			{!! Form::text('email', null, ['id' => 'email', 'class' => 'form-control hs_border', 'placeholder' => 'email']) !!}
		</div>
		<div class="form-group">
			{!! Form::text('phone', null, ['id' => 'phone', 'class' => 'form-control hs_border', 'placeholder' => 'phone']) !!}
		</div>

		<p class="editContent">GIVE US A CALL (702)442-0055 </p>

		<div class="form-group">
			{!! Form::submit('Inquire', ['id' => 'hs_sub', 'class' => 'btn btn-bg btn-primary btn-embossed btn_submit btn_colored']) !!}
		</div>

		{!! Form::close() !!}

	</div>
</div>
