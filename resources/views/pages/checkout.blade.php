@extends('layouts.master')

<!DOCTYPE html>
<html>
<head>
	@section('title', 'Nota')
	@include('layouts.link')
</head>
<body>
	<!-- grow -->
	@section('grow')
	<div class="container">
		<h2>Nota</h2>
	</div>
	@stop
	<!-- grow -->

	@section('content')
	<div class="container">
		<div class="check">
			<h1>Keranjang ({{$data['count']}})</h1>
			<div class="col-md-9 cart-items">

				{{-- <script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						window.location="/tes";
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
					});
				});
			</script>
			<div class="cart-header">
				<div class="close1"> </div>
				<div class="cart-sec simpleCart_shelfItem">
					<div class="cart-item cyc">
						<img src="{{url('images/pic1.jpg')}}" class="img-responsive" alt=""/>
					</div>
					<div class="cart-item-info">
						<h3><a href="#">Mountain Hopper(XS R034)</a><span>Model No: 3578</span></h3>
						<ul class="qty">
							<li><p>Ukuran : 5</p></li>
							<li><p>Kuantitas : 1</p></li>
						</ul>

						<div class="delivery">
							<p>Biaya Pengiriman : Rp. 27.000</p>
							<span>Pengiriman 2-3 hari</span>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="clearfix"></div>

				</div>
			</div> --}}

			@foreach ($items as $key => $item)
			<script>$(document).ready(function(c) {
				$('.close{{$key+1}}').on('click', function(c){
					$('.cart-header{{$key+1}}').fadeOut('slow', function(c){
						$('.cart-header{{$key+1}}').remove();
					});
				});
			});
		</script>
		<div class="cart-header{{$key+1}}">
			<div class="close{{$key+1}}"> </div>
			<div class="cart-sec simpleCart_shelfItem">
				<div class="cart-item cyc">
					<img src="{{url('storage/'.$item->gambar)}}" class="img-responsive" alt=""/>
				</div>
				<div class="cart-item-info">
					<h3><a href="/home/single/{{$item->id}}">{{$item->nama_barang}}</a></h3>
					<ul class="qty">
						<li><p>Kuantitas : {{$item->banyak}}</p></li>
					</ul>
					<div class="delivery">
						<p>Biaya Pengiriman : Rp. {{ number_format (0.7*$item->harga)}}</p>
						<span>Pengiriman 2-3 hari</span>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		@endforeach

	</div>
	<div class="col-md-3 cart-total">
		<a class="continue" href="/home">Tambah Belanja</a>
		<div class="price-details">
			<h3>Detail Biaya</h3>
			<span>Total</span>
			<span class="total1">Rp. {{ number_format($data['total']) }}</span>
			<span>Diskon</span>
			<span class="total1">Rp. {{ number_format($data['diskon']) }}</span>
			<span>Biaya Pengiriman</span>
			<span class="total1">Rp. {{ number_format($data['ongkir']) }}</span>
			<div class="clearfix"></div>
		</div>
		<ul class="total_price">
			<li class="last_price"> <h4>TOTAL</h4></li>
			<li class="last_price"><span>Rp. {{ number_format($data['total']+$data['ongkir']-$data['diskon']) }}</span></li>
			<div class="clearfix"> </div>
		</ul>


		<div class="clearfix"></div>
		<a class="order" href="/home/payment">Bayar</a>
	</div>

	<div class="clearfix">
	</div>
</div>
@stop
<!--//content-->
</body>
</html>
