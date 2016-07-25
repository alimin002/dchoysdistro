<?php
/* Candralab Ecommerce v2.0
 * http://www.candra.web.id/
 * Candra adi putra <candraadiputra@gmail.com>
 * last edit: 15 okt 2013
 */?>
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="user-menu">
							<li><a href="index.php">Homepage</a></li>  
							<li><a href="index.php?mod=page&pg=about">About Us</a></li>
							<li><a href="index.php?mod=page&pg=contact">Contac Us</a></li>
												
						</ul>					
					</div>
					<div class="span4">
						
					</div>
					<div class="span5">
						<p class="logo"><img src="assets/themes-front/images/logo.png" class="site_logo" alt=""></p>
						<p>D'choys distro & clothes merupakan salah satu perusahaan
kecil yang bergerak dalam bidang penjualan produk berupa pakaian dengan berbagai macam pilihan mulai dari baju,kaos,kemeja sepatu kaus dan berbagai macam produk fashion lainnya..</p>
						<br/>
						
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2016 Geek Inovation Studio</span>
			</section>
		</div>
		<script src="assets/themes-front/js/common.js"></script>
		<script src="assets/themes-front/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
		if(getCookie("status_play")!=1){
		setCookie("status_play",0,2);
		}
		var status_play=getCookie("status_play");
		 if(status_play==0){
		     playMusic();
		 }
		setCookie("status_play",1,2);
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
			var windowObjectReference;

function playMusic() {
	var url_host_name=getUrlHostName();
	host=url_host_name+"/dchoysdistro/"+"assets/"+"gift"+"/music.html";  windowObjectReference = window.open( host,"this music is yours", "resizable,scrollbars,status"
  );
}
		</script>
    </body>
</html>