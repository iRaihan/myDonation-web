@extends('frontEnd.layouts.donor.donor_account')

@section('donor_content')


<div class="container">
	<div class="row">
		<div class="col-sm-1"></div>
  

		<div class="col-sm-3">
			<div class="sevice_ammout_box">
				<div class="sevice_title">
					<h3>Service<h3>
				</div>
				<div class="ammount_title">
					<b>Total Donate: {{$total_aid_sevices}} tk.</b>
				</div>

			</div>
		</div>
		<div class="col-sm-3">
			<div class="cause_ammout_box">
				<div class="cause_title">
					<h3>Causes<h3>
				</div>
				<div class="ammount_title">
					<b>Total Donate: {{$total_aid}} tk.</b>
				</div>

			</div>
		</div>
		<div class="col-sm-3">
			<div class="other_ammout_box">
				<div class="other_title ">
					<h3>Others<h3>
				</div>
				<div class="ammount_title">
					<b>Total Donate: 5000 tk.</b>
				</div>

			</div>
		</div>
		<div class="col-sm-2">
			<div class="total_ammout_box">
				<div class="total_title ">
					<h3>Totals<h3>
				</div>
				<div class="ammount_total_title">
					<b>Donate: {{$total}}tk.</b>
				</div>

			</div>
		</div>
	</div>
</div>

@endsection
