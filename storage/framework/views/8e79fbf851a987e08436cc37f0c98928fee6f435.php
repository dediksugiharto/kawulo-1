<div class="header-top">
			<div class="container">
				<div class="social">
					<ul>
						<li><a href="<?php echo e(url('facebook.com')); ?>"><i class="facebok"> </i></a></li>
						<li><a href="<?php echo e(url('twitter.com')); ?>"><i class="twiter"> </i></a></li>
						<li><a href="<?php echo e(url('instagram.com')); ?>"><i class="inst"> </i></a></li>
						<li><a href="<?php echo e(url('google.com')); ?>"><i class="goog"> </i></a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="header-left">

					<div class="search-box">
						<div id="sb-search" class="sb-search">
							<form action="#" method="post">
								<input class="sb-search-input" placeholder="Telusuri" type="search"  id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
					</div>

					<!-- search-scripts -->
					<script src="<?php echo e(url('/js/classie.js')); ?>"></script>
					<script src="<?php echo e(url('/js/uisearch.js')); ?>"></script>
					<script>
						new UISearch( document.getElementById( 'sb-search' ) );
					</script>
					<!-- //search-scripts -->

					<div class="ca-r">
						<div class="cart box_1">
							<a href="/home/checkout">
								<h3> <div class="total">
									<span>Rp. <?php echo e(number_format($data['total'])); ?></span> </div>
									<img src="<?php echo e(url('/images/cart.png')); ?>" alt=""/></h3>
								</a>
								<p><a href="/home/cart/clear" class="simpleCart_empty">Kosongkan Keranjang</a></p>

							</div>
						</div>
						<div class="clearfix"> </div>
					</div>

				</div>
			</div>
			<div class="container">
				<div class="head-top">
					<div class="logo">
						<a href="/home"><img src="<?php echo e(url('/images/l4.png')); ?>" class="img-head" alt=""></a>
					</div>
					<div class=" h_menu4">
						<ul class="memenu skyblue">
							<!--menu ruang keluarga-->
							<li><a class="color8"><?php echo e(strtoupper($data['rooms'][1]->nama)); ?></a><div class="mepanel">
								<div class="row">
									<div class="col1" style="width : 100%">
										<div class="h_nav">
											<ul>
												<li><a href="/home/products/<?php echo e($data['rooms'][1]->id); ?>/<?php echo e($data['categories'][1]->id); ?>"><?php echo e($data['categories'][1]->name); ?></a></li>
												<li><a href="/home/products">Blanket/Throw</a></li>
												<li><a href="/home/products">Mattress Topper</a></li>
												<li><a href="/home/products">Pillow</a></li>
												<li><a href="/home/products">Pillow Protector</a></li>

											</ul>
										</div>
									</div>
									
								</div>
							</div>
						</li>
						<!--menu dapur-->
						<li><a class="color1"><?php echo e(strtoupper($data['rooms'][2]->nama)); ?></a>
							<div class="mepanel">
								<div class="row">
									<div class="col1" style="width : 100%">
										<div class="h_nav">
											<ul>
												<li><a href="/home/products">Bedskirt</a></li>
												<li><a href="/home/products">Blanket/Throw</a></li>
												<li><a href="/home/products">Mattress Topper</a></li>
												<li><a href="/home/products">Pillow</a></li>
												<li><a href="/home/products">Pillow Protector</a></li>
											</ul>
										</div>
									</div>
									
								</div>
							</div>
						</li>
						<!--menu kantor-->
						<li class="grid"><a class="color2" ><?php echo e(strtoupper($data['rooms'][3]->nama)); ?></a>
							<div class="mepanel">
								<div class="row">
									<div class="col1" style="width:100%">
										<div class="h_nav">
											<ul>
												<li><a href="/home/products">Bedskirt</a></li>
												<li><a href="/home/products">Blanket/Throw</a></li>
												<li><a href="/home/products">Collection/Duvet</a></li>
												<li><a href="/home/products">Pillow</a></li>
												<li><a href="/home/products">Pillow Protector</a></li>

											</ul>
										</div>
									</div>
									
								</div>
							</div>
						</li>
						<li><a class="color6" href="/home/contact">PESAN</a></li>
						<?php if(Auth::user()): ?>
							<li><a class="color4" href="/home/login">MASUK</a></li>
						<?php else: ?>
							<li><a class="color4" href="/home/login">KELUAR</a></li>
						<?php endif; ?>
					</ul>
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
