<?php
$assets_location = base_url()."aset/Maxim/";
?>

<!-- section: works -->
<section id="works" class="section">
<div class="container clearfix">
	<h4>Our Works</h4>
	<!-- portfolio filter -->
	<div class="row">
		<div id="filters" class="span12">
			<ul class="clearfix">
				<li><a href="#" data-filter="*" class="active">
				<h5>Catalogue</h5>
				</a></li>
				<!--<li><a href="#" data-filter=".web">
				<h5>Mukenah</h5>
				</a></li>
				<li><a href="#" data-filter=".print">
				<h5>Slempang Big Pouch</h5>
				</a></li>
				<li><a href="#" data-filter=".design">
				<h5>Ransel</h5>
				</a></li>
				<li><a href="#" data-filter=".photography">
				<h5>Tote Bag</h5>
				</a></li>-->
			</ul>
		</div>
		<!-- END PORTFOLIO FILTERING -->
	</div>
	<div class="row">
		<div class="span12">
			<div id="portfolio-wrap">
				<!-- portfolio item -->
				<?php foreach($databarang as $barang){ ?>
				<div class="portfolio-item grid print photography">
					<div class="portfolio">
						<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="<?php echo base_url($barang['path']); ?>" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h2><?= $barang['jenis_barang'] ?></h2>
								<p><?= $barang['detail_barang'] ?></p>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
				<?php } ?>
			</div>
		</div>
	</div>
</div>
</section>