<?php include "header.php"; ?>

	<div class="container">
		<div class="row">
			<div class="col-md-12">	
				  <div class="carousel slide" id="contoh-carousel" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#contoh-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#contoh-carousel" data-slide-to="1"></li>
							<li data-target="#contoh-carousel" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="picture/gambar1.jpg" width="1000" alt="Keterangan Gambar satu">
							</div>
							<div class="item">
								<img src="picture/gambar2.jpg"  width="1000" alt="Keterangan Gambar dua">
							</div>
							<div class="item">
								<img src="picture/gambar3.jpg" alt="Keterangan Gambar tiga">
							</div>
						</div>
						<a class="left carousel-control" href="#contoh-carousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Prev</span>
						</a>
						<a class="right carousel-control" href="#contoh-carousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
			</div>
		</div>
	</div>
	
<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>