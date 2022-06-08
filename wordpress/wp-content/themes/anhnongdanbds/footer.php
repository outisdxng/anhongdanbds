<footer class="lmp-footer">
			<div class="top-wrapper lmp-section">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="content-wrapper">
								<h2 class="lmp-title">Liên hệ</h2>
								<h3>Anh nông dân BĐS</h3>
								<p><a href="#">Zalo: <?php echo get_option('zalo_page_field') ?></a><br><a href="#">Sđt: <?php echo get_option('phone_field') ?></a><br><a href="#">Youtube: <?php echo get_option('youtube_field') ?></a></p>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="contact-wrapper">
								<?php echo do_shortcode('[contact-form-7 id="32" title="Contact form 1"]') ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bottom-wrapper">
				<div class="main-wrapper">
					<div class="left-wrapper">
						<div class="copyright-wrapper"><p>COPYRIGHT © 2021 Anh nông dân BĐS. </p></div>
					</div>
					<div class="right-wrapper">
						<div class="social-wrapper">
							<ul>
								<li><a href="#"><em class="fab fa-facebook-f"></em></a></li>
								<li><a href="#"><em class="fab fa-twitter"></em></a></li>
								<li><a href="#"><em class="fab fa-youtube"></em></a></li>
								<li><a href="#"><em class="fab fa-instagram"></em></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script>
			(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0&autoLogAppEvents=1';
			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
			window.twttr = (function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0],
			t = window.twttr || {};
			if (d.getElementById(id)) return t;
			js = d.createElement(s);
			js.id = id;
			js.src = "https://platform.twitter.com/widgets.js";
			fjs.parentNode.insertBefore(js, fjs);
			t._e = [];
			t.ready = function(f) {
			t._e.push(f);
			};
			return t;
			}(document, "script", "twitter-wjs"));
		</script>
		<!-- <script src="./js/core.min.js"></script>
		<script src="./js/main.min.js"></script> -->
		<?php 
			wp_footer()
		?>
	</body>
</html>