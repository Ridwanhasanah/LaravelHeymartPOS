@extends('layouts.app')

@section('title')
	Dashboard
@endsection

@section('breadcrumb')
@parent
<li>Dashboard</li>
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-body">
				<h1>Hai Selamat Datang</h1>
				<h2>Anda Login Sebagai Admin</h2>
			</div>
		</div>
	</div>
</div>
@endsection