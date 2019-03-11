<?php
$jmyWeb =$this;
$ui=$this->url_inicio(['return'=>1]);
$menu=[
	"logout"=>[
		[
		"titulo_es"=>"Entrar",
		"titulo_en"=>"Login",
		"url"=>'https://comsis.mx/app/entrar/?re='.$this->url_inicio(['return'=>true]).'administrador/entrar/&api=e2ad454bea7d919f0fc411a8b885580c&api_web='.JMY_API.'&sep=1'
		]
	],
	"login"=>[
		[
			"titulo_es"=>"Dashboard",
			"titulo_en"=>"Dashboard",
			"url"=>$ui."administrador"		
		]
	]
];
$s=$this->modulos(["modulos_permisos"=>1]);
//$jmyWeb ->pre(['p'=>$s['modulos_permisos'],'t'=>'TITULO_ARRAY']);
if($s['modulos_permisos']['administrador']>3)
	$menu['login'][]=[
		"titulo_es"=>"Usuarios",
		"titulo_en"=>"Users",
		"url"=>$ui."administrador/usuarios"		
	];
if($s['modulos_permisos']['clientes']>3)
	$menu['login'][]=[
		"titulo_es"=>"Empresas",
		"titulo_en"=>"Buissnes",
		"url"=>$ui."administrador/clientes"		
	];
if($s['modulos_permisos']['landing']>3)
	$menu['login'][]=[
		"titulo_es"=>"Landing",
		"titulo_en"=>"Landing",
		"url"=>$ui."l"		
	];



	$menu['login'][]=[
		"titulo_es"=>"Salir",
		"titulo_en"=>"Logout",
		"url"=>$ui."administrador/salir"		
	];


$menu = $menu[($this->session())?'login':'logout'];
?>
	<!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" lang="es" prefix="og: http://ogp.me/ns#"> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" lang="es" prefix="og: http://ogp.me/ns#"> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" lang="es" prefix="og: http://ogp.me/ns#"> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" lang="es" prefix="og: http://ogp.me/ns#"> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" lang="es" prefix="og: http://ogp.me/ns#"> <!--<![endif]-->
	<head>

		<meta charset="utf-8" />
        <meta name="Keywords" content="high,speed,internet,playa del carmen,nest,coworking,espacio,lugar,trabajo,tendencia,comunidad,colaboración,independiente,freelance,emprendedor,startup,idea,proyecto,sala de juntas,playa del carmen,alberca,pet friendly,bike friendly,rooftop,ambientes,tranquilidad,profesional,inspiración,planes,eventos,cursos,talleres,meetup,networking,hub,nido,cluster,entorno,productividad,creatividad,innovación,tecnología,multidisciplinario,desarrollo,aceleración,crecimiento,adaptabilidad,experiencia,flexibilidad,flex desk,servicios,impresión,méxico,mexico,quintana roo,playa,terraza,internet,utilidad,modelo,descanso,relajación,workshop,cowork,funcional,alternativa,red,contactos,visa,profesiones,programadores,diseñadores,diseñador gráfico,diseñador web,diseñador industrial,interioristas,arquitectos,publicistas,periodistas,mercadólogos,comunicólogos,"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

		<title>Nest Coworking | Playa del Carmen</title>

		<link rel="profile" href="https://gmpg.org/xfn/11"/>
		<link rel="pingback" href="https://www.coworkingnest.com.mx/xmlrpc.php"/>
        <link rel="shortcut icon" href="https://www.coworkingnest.com.mx/wp-content/themes/Nest%20Coworking/img/fav.png">

		        <style type="text/css">
        </style>
        
<!-- This site is optimized with the Yoast SEO plugin v9.6 - https://yoast.com/wordpress/plugins/seo/ -->
<meta name="description" content="Nest es un espacio de coworking en Playa del Carmen que reúne a emprendedores, profesionales independientes, start-ups, creativos y más..."/>
<link rel="canonical" href="https://www.coworkingnest.com.mx/" />
<meta property="og:locale" content="es_ES" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Nest Coworking | Playa del Carmen" />
<meta property="og:description" content="Nest es un espacio de coworking en Playa del Carmen que reúne a emprendedores, profesionales independientes, start-ups, creativos y más..." />
<meta property="og:url" content="https://www.coworkingnest.com.mx/" />
<meta property="og:site_name" content="Nest | Coworking Space" />
<meta property="og:image" content="https://www.coworkingnest.com.mx/wp-content/uploads/2014/10/share_image.jpg" />
<meta property="og:image:secure_url" content="https://www.coworkingnest.com.mx/wp-content/uploads/2014/10/share_image.jpg" />
<meta property="og:image:width" content="300" />
<meta property="og:image:height" content="300" />
<?php  $this->llamar_css(); ?> 
<script type='application/ld+json'>{"@context":"https://schema.org","@type":"WebSite","@id":"https://www.coworkingnest.com.mx/#website","url":"https://www.coworkingnest.com.mx/","name":"Nest | Coworking Space","potentialAction":{"@type":"SearchAction","target":"https://www.coworkingnest.com.mx/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
<!-- / Yoast SEO plugin. -->

<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Nest | Coworking Space &raquo; Feed" href="https://www.coworkingnest.com.mx/feed/" />
<link rel="alternate" type="application/rss+xml" title="Nest | Coworking Space &raquo; RSS de los comentarios" href="https://www.coworkingnest.com.mx/comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="Nest | Coworking Space &raquo; Homepage RSS de los comentarios" href="https://www.coworkingnest.com.mx/homepage/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11.2.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11.2.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/www.coworkingnest.com.mx\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.1"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css'  href='https://www.coworkingnest.com.mx/wp-includes/css/dist/block-library/style.min.css?ver=5.1' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='https://www.coworkingnest.com.mx/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='fts-feeds-css'  href='https://www.coworkingnest.com.mx/wp-content/plugins/feed-them-social/feeds/css/styles.css?ver=2.6.5' type='text/css' media='' />
<link rel='stylesheet' id='responsive-style-css'  href='https://www.coworkingnest.com.mx/wp-content/themes/Responsive/core/css/style.css?ver=5.1' type='text/css' media='all' />
<link rel='stylesheet' id='responsive-media-queries-css'  href='https://www.coworkingnest.com.mx/wp-content/themes/Responsive/core/css/responsive.css?ver=5.1' type='text/css' media='all' />
<link rel='stylesheet' id='responsive-child-style-css'  href='https://www.coworkingnest.com.mx/wp-content/themes/Nest%20Coworking/style.css?ver=1.1.0' type='text/css' media='all' />
<link rel='stylesheet' id='livechatfacebook-css'  href='https://www.coworkingnest.com.mx/wp-content/plugins/fb-live-chat/css/live_chat_facbook.css?ver=1.0.0' type='text/css' media='all' />
<script
  src="http://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
<script type='text/javascript' src='https://www.coworkingnest.com.mx/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='https://www.coworkingnest.com.mx/wp-content/plugins/feed-them-social/feeds/js/powered-by.js?ver=2.6.5'></script>
<script type='text/javascript' src='https://www.coworkingnest.com.mx/wp-content/plugins/feed-them-social/feeds/js/fts-global.js?ver=2.6.5'></script>
<script type='text/javascript' src='https://www.coworkingnest.com.mx/wp-content/themes/Responsive/core/js/responsive-modernizr.min.js?ver=2.6.1'></script>
<link rel='https://api.w.org/' href='https://www.coworkingnest.com.mx/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.coworkingnest.com.mx/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.coworkingnest.com.mx/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.1" />
<link rel='shortlink' href='https://www.coworkingnest.com.mx/' />
<link rel="alternate" type="application/json+oembed" href="https://www.coworkingnest.com.mx/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.coworkingnest.com.mx%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://www.coworkingnest.com.mx/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.coworkingnest.com.mx%2F&#038;format=xml" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="<?php $this->url_templet();?>assets/css/patch_administrador.css">
<?php  $this->llamar_css(); ?> 

    <style type="text/css">
        #b-c-facebook .chat-f-b, #chat_f_b_smal, #f_bt_start_chat {
            background: #3a5897;
        }
            </style>
    <link rel="alternate" hreflang="en" href="/en/"/><!-- We need this for debugging -->
<!-- Responsive 1.9.7.4 -->
<!-- Nest Coworking 1.1.0 -->
	

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1889303451286090'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1889303451286090&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->

</head>

<body data-rsssl=1 class="home page-template page-template-home-template page-template-home-template-php page page-id-8">
<div id="jmy_web"></div>
    <div id="jmy_web_tools"></div>	
<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-56457533-1', 'auto');
      ga('send', 'pageview');
</script>


<div id="preloader">
    <div id="status"></div>
</div>


<div id="container" class="hfeed">


	<div id="header" class="front-page">
        <div class="inner">
            <a href="<?php $this->url_inicio(); ?>">
                <img class="imago" src="https://www.coworkingnest.com.mx/wp-content/themes/Nest%20Coworking/img/imago_nest.png">
            </a>
            <a href="<?php $this->url_inicio(); ?>">
                <img class="imago mobile" src="https://www.coworkingnest.com.mx/wp-content/themes/Nest%20Coworking/img/imago.png">
            </a>
            <a href="<?php $this->url_inicio(); ?>" >
                <img class="logo" src="https://www.coworkingnest.com.mx/wp-content/themes/Nest%20Coworking/img/logo.png">
            </a>
            <ul class="main-menu">
				<?php 
				$l=(in_array($_SESSION['lenguaje'],['es','en']))?$_SESSION['lenguaje']:'es';
				 			
				foreach ($menu as $k => $v) {
					echo '<li><a href="'.$v['url'].'" class="">'.$v['titulo_'.$l].'</a></li>';
				} ?>
				
            </ul>
            <div class="social">
                <li><a href="http://instagram.com/coworkingnest" target="_blank"><i class="fab fa-instagram"></i></a> </li>
                <li><a href="https://www.facebook.com/coworkingnest" target="_blank"><i class="fab fa-facebook-square"></i></a> </li>
                <li><a href="https://twitter.com/coworkingnest" target="_blank"><i class="fab fa-twitter"></i></a></li>
            </div>
            <span class="language">
            <span class="no_translate"><select name="lang" onchange="document.location.href=this.options[this.selectedIndex].value;"><option value="<?php $this->url_inicio();?>lenguaje/en/" <?php echo ($l=='en')?'selected="selected"':''; ?>>English</option><option value="<?php $this->url_inicio();?>lenguaje/es/" <?php echo ($l=='es')?'selected="selected"':''; ?>>Español</option></select><br/></span><div id="tr_credit"></div>            </span>
            <nav class="mobile-menu">
                <i class="fas fa-bars" id="nav-icon"></i>
                <ul>
				<?php				
				foreach ($menu as $k => $v) {
					echo '<li><a href="'.$v['url'].'" class="">'.$v['titulo_'.$l].'</a></li>';
				} ?>
                    <div class="social">
                <li><a href="http://instagram.com/coworkingnest" target="_blank"><i class="fab fa-instagram"></i></a> </li>
                <li><a href="https://www.facebook.com/coworkingnest" target="_blank"><i class="fab fa-facebook-square"></i></a> </li>
                <li><a href="https://twitter.com/coworkingnest" target="_blank"><i class="fab fa-twitter"></i></a></li>
            </div>
            <span class="language">
            <span class="no_translate"><select name="lang" onchange="document.location.href=this.options[this.selectedIndex].value;"><option value="/en/">English</option><option value="/" selected="selected">Español</option></select><br/></span><div id="tr_credit1"></div>                </ul>
            </nav>
        </div>
        </div>

