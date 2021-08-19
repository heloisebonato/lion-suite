<!DOCTYPE html>

<html lang="pt-br">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, user-scalable=no" />

    <title><?php

			if (is_single()) {

				single_post_title();

			} elseif (is_home() || is_front_page()) {

				bloginfo('name');

				print ' | ';

				bloginfo('description');

			} elseif (is_page()) {

				single_post_title('');

			} elseif (is_search()) {

				bloginfo('name');

				print ' |  ' . wp_specialchars($s);

			} elseif (is_404()) {

				bloginfo('name');

				print ' | Nada encontrado';

			} else {

				bloginfo('name');

				wp_title('|');

			}

			?></title>



    <meta name="theme-color" content="#00817C">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="distribution" content="global" />

    <meta name="rating" content="general" />

    <meta name="robots" content="ALL" />

    <meta name="robots" content="index,follow" />

    <meta name="language" content="pt-br" />

    <meta name="doc-rights" content="Public" />

    <meta name="classification" content="Servicos" />

	<meta http-equiv="Content-Language" content="pt-br" />

    <link rel="icon" type="image/png" href="https://jobscreative.com.br/lion-suite/back/wp-content/themes/Lion/img/favicon_lion.png"/>


    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-T5BCX7EHC8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-T5BCX7EHC8');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NF3M29T');</script>
<!-- End Google Tag Manager -->
</head>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NF3M29T"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->