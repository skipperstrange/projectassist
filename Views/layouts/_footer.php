<?php 
include PARTIALS.'footer_banner.php'; 
include_once STATIC_DATA.'services.php';
$services = $data['services']; 
?>
<footer id="footer" class="mt-0">
				<div class="container">
					<!--div class="footer-ribbon">
						<span>Get in Touch</span>
					</div-->
					<div class="row py-5 my-4">
						<div class="col-md-7 col-lg-5 mb-5 mb-lg-0 pt-3">
							<h5 class="text-3 mb-3">ABOUT US</h5>
							<p>Project Assist is a firm which partners with private and public 
							sector organisations to successfully deliver complex programmes.
						</p>
						<ul class="social-icons mt-4">
								<?php            
									foreach ($data['socialMediaLinks'] as $socialMediaLink) {

                                    ?>
                                    <li class="social-icons-<?= $socialMediaLink['title']?>"><a href="<?= $socialMediaLink['href'];?>" target="_blank" title="<?= format_string($socialMediaLink['title']) ?>" style="padding-top: 2px; width:40px;height:40px; background:none;"><i class="<?= $socialMediaLink['icon']?> text-10 text-light"></i></a></li>
                                    <?php
                                    }
                                    ?>
						</ul>
						</div>
						<div class="col-md-4 col-lg-4 mb-5 mb-lg-0 pt-3">
						<h5 class="text-3 mb-3 text-uppercase">Quick Links</h5>
							<ul class="list list-icons list-icons-sm">
								<?php 
								foreach($navLinks as $label => $link): 
									if(trim($navLinks[$label]['href']) != ''): ?>
								<li><i class="fas fa-angle-right"></i><a href="<?=$navLinks[$label]['href']?>" target="<?=$navLinks[$label]['target']?>" class="link-hover-style-1 ml-1"> <?=ucfirst(format_string($label)) ?></a></li>
								<?php 
									endif;
								endforeach; ?>
							</ul>
						</div>
						<div class="col-lg-3 pt-3">
							<h5 class="text-3 mb-3 pb-1">Our Services</h5>
							<ul class="list list-icons list-icons-sm">
								<?php 
								foreach($services as $index => $service):?>
								<li><i class="fas fa-angle-right"></i><a href="<?= _link('services&id='.$index)?>" class="link-hover-style-1 ml-1 text-capitalize"> <?=ucfirst(format_string($service['title'])) ?></a></li>
								<?php
								endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container py-2">
						<div class="row py-4">

							<div class="col-sm-12 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
								<p><?=CLIENT_NAME?> © Copyright 2023. All Rights Reserved.</p>
							</div>
							
						</div>
					</div>
				</div>
			</footer>

<?= generate_tag_group('script', $footerJs);?>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', '<?=GOOGLE_ANALYITICS_ID ?>', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

</body>

</html>