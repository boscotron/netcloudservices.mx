</div> <!-- #main-content -->


			<footer id="main-footer">
				

		
				<div id="footer-bottom">
					<div class="container clearfix">
				<ul class="et-social-icons">
	<li class="et-social-icon et-social-facebook">
		<a href="./#" class="icon">
			<span>Facebook</span>
		</a>
	</li>
	<li class="et-social-icon et-social-twitter">
		<a href="./#" class="icon">
			<span>Twitter</span>
		</a>
	</li>
	<li class="et-social-icon et-social-google-plus">
		<a href="./#" class="icon">
			<span>Google</span>
		</a>
	</li>
	<li class="et-social-icon et-social-rss">
		<a href="./feed/" class="icon">
			<span>RSS</span>
		</a>
	</li>
	<br>
	<li  class="et-logo-icon et-logo">
				<img  src="<?php $this->url_templet(); ?>/assets/img/logo.png" alt="NETCLOUD" id="logo" width="70%" data-height-percentage="89" data-actual-width="221" data-actual-height="104">
	</li>


</ul>

<ul>
<div class="col-md-2 col-sm-4">
                    <h3 class="jmy_web_div" data-page="footer" id="texto_conocenos" data-editor="no">
                        <?php $this->pnt('texto_conocenos','Conocenos ',["secundario"=>"footer"]); ?>
                            </h3>
                    <ul>
                        <li><a href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>#" class="jmy_web_div" data-page="footer" id="texto_nosotros" data-editor="no">
                        <?php $this->pnt('texto_nosotros','Nosotros ',["secundario"=>"footer"]); ?></a></li>
                        <li><a href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>#" class="jmy_web_div" data-page="footer" id="texto_Habitaciones" data-editor="no">
                        <?php $this->pnt('texto_Habitaciones','Habitaciones ',["secundario"=>"footer"]); ?></a></li>
                        <li><a href="<?php echo RUTA_ACTUAL; ?>contacto" class="jmy_web_div" data-page="footer" id="texto_Contacto" data-editor="no">
                        <?php $this->pnt('texto_Contacto','Contacto ',["secundario"=>"footer"]); ?></a></li>
                    </ul>
                </div> 
</ul>
<div id="footer-info">Netcloud todos los derechos reservados</div>					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->


	</div> <!-- #page-container -->

						<script>
				(function($) {
					'use strict';
					$(document).ready(function() {
						var mobileDetect = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
						if (mobileDetect) {
							$('.cresta-whatsapp-chat-container').css('display','none');
							$('.cresta-whatsapp-chat-box').on('click', function(){
								window.location = 'whatsapp://send?text=&phone=+525576563999&abid=+525576563999';
							});
						} else {
							$('.cresta-whatsapp-chat-box').on('click', function(){
								if ($('.cresta-whatsapp-chat-box').hasClass('open')) {
									$('.cresta-whatsapp-chat-box, .cresta-whatsapp-chat-container').removeClass('open');
								} else {
									$('.cresta-whatsapp-chat-box, .cresta-whatsapp-chat-container').addClass('open');
									$('.cresta-whatsapp-chat-container .cresta-whatsapp-inner textarea.cresta-whatsapp-textarea').focus();
								}
							});
							$('.cresta-whatsapp-chat-container .cresta-whatsapp-send').click(function() {
								var baseUrl = 'https://web.whatsapp.com/send?phone=+525576563999&text=';
								var textEncode = encodeURIComponent($('.cresta-whatsapp-chat-container .cresta-whatsapp-textarea').val());
								window.open(baseUrl + textEncode, '_blank');
							});
						}
					});
				})(jQuery);
			</script>
			<div class="cresta-whatsapp-chat-box onBoth">
				<svg id="whatsapp-msng-icon" data-name="whatsapp icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 800"><path d="M519 454c4 2 7 10-1 31-6 16-33 29-49 29-96 0-189-113-189-167 0-26 9-39 18-48 8-9 14-10 18-10h12c4 0 9 0 13 10l19 44c5 11-9 25-15 31-3 3-6 7-2 13 25 39 41 51 81 71 6 3 10 1 13-2l19-24c5-6 9-4 13-2zM401 200c-110 0-199 90-199 199 0 68 35 113 35 113l-20 74 76-20s42 32 108 32c110 0 199-89 199-199 0-111-89-199-199-199zm0-40c133 0 239 108 239 239 0 132-108 239-239 239-67 0-114-29-114-29l-127 33 34-124s-32-49-32-119c0-131 108-239 239-239z" transform="scale(1.2, 1.2), translate(-65 -65)" style="fill:#ffffff"></path></svg>
				<svg id="close-icon" data-name="close icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.98 39.99"><path d="M48.88,11.14a3.87,3.87,0,0,0-5.44,0L30,24.58,16.58,11.14a3.84,3.84,0,1,0-5.44,5.44L24.58,30,11.14,43.45a3.87,3.87,0,0,0,0,5.44,3.84,3.84,0,0,0,5.44,0L30,35.45,43.45,48.88a3.84,3.84,0,0,0,5.44,0,3.87,3.87,0,0,0,0-5.44L35.45,30,48.88,16.58A3.87,3.87,0,0,0,48.88,11.14Z" transform="translate(-10.02 -10.02)" style="fill:#ffffff"></path></svg>
			</div>
			<div class="cresta-whatsapp-chat-container">
									<div class="cresta-whatsapp-chat-top-header"><span>Cresta WhatsApp Chat</span></div>
								<div class="cresta-whatsapp-inner">
					<textarea class="cresta-whatsapp-textarea" placeholder="Hi there! Use this box to send me a message via WhatsApp..."></textarea>
				</div>
				<div class="cresta-whatsapp-to-send">
					<div class="cresta-whatsapp-send">Send via WhatsApp<svg version="1.1" id="whatsapp-msng-icon-send" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="12px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z" style="fill: none; stroke-width:3; stroke:#ffffff"></path></svg></div>
				</div>
			</div>
					<script type="text/javascript">
		var et_animation_data = [];
	</script>
	


			<!-- Mobile Call Now and Map Buttons -->
			<!-- Plugin not configured properly. Missing Phone Number or Address values. -->

			<!-- /Mobile Call Now and Map Buttons -->


<script type="text/javascript" src="<?php $this->url_templet(); ?>/assets/js/scripts.js?ver=5.0.1"></script>
<script type="text/javascript">
var renderInvisibleReCaptcha = function() {

    for (var i = 0; i < document.forms.length; ++i) {
        var form = document.forms[i];
        var holder = form.querySelector('.inv-recaptcha-holder');

        if (null === holder) continue;
		holder.innerHTML = '';

         (function(frm){
			var cf7SubmitElm = frm.querySelector('.wpcf7-submit');
            var holderId = grecaptcha.render(holder,{
                'sitekey': '', 'size': 'invisible', 'badge' : 'bottomright',
                'callback' : function (recaptchaToken) {
					if((null !== cf7SubmitElm) && (typeof jQuery != 'undefined')){jQuery(frm).submit();grecaptcha.reset(holderId);return;}
					 HTMLFormElement.prototype.submit.call(frm);
                },
                'expired-callback' : function(){grecaptcha.reset(holderId);}
            });

			if(null !== cf7SubmitElm && (typeof jQuery != 'undefined') ){
				jQuery(cf7SubmitElm).off('click').on('click', function(clickEvt){
					clickEvt.preventDefault();
					grecaptcha.execute(holderId);
				});
			}
			else
			{
				frm.onsubmit = function (evt){evt.preventDefault();grecaptcha.execute(holderId);};
			}


        })(form);
    }
};
</script>
<script type="text/javascript" async="" defer="" src="<?php $this->url_templet(); ?>/assets/js/api.js"></script>

<script type="text/javascript" src="<?php $this->url_templet(); ?>/assets/js/custom.min.js?ver=3.0.101"></script>
<script type="text/javascript" src="<?php $this->url_templet(); ?>/assets/js/common.js?ver=3.0.101"></script>
<script type="text/javascript" src="<?php $this->url_templet(); ?>/assets/js/wp-embed.min.js?ver=5.0.3"></script>
  
<?php $this->llamar_js(); ?> 
</body></html>