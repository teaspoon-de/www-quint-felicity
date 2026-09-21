<head>
	<meta charset="UTF-8" />
	<title><?= $pageTitle?></title>
	<link rel="canonical" href="<?= $canonical?>">
	<meta name="description" content="<?= $description ?: ''?>">

	<!--Icons-->
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/svg+xml" href="/favicon.svg" />
	<link rel="shortcut icon" href="/favicon.ico" />
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />

	<!--CSS/JS-->
	<?php
		$css = array_merge(array('style', 'topbar', 'footer'), $css);
		foreach($css as $cs):
	?>
	<link rel="stylesheet"
      href="/css/<?=$cs?>.css?v=<?= filemtime($_SERVER['DOCUMENT_ROOT'] . '/css/' . $cs . '.css') ?>">
	<?php endforeach;?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="/js/jquery-3.6.1.min.js"></script>
    <script src="/js/script.js"></script>

	<!-- Open Graph Meta Tags -->
	<meta property="og:title" content="<?= $pageTitle?>">
	<meta property="og:description" content="<?= $description ?: ''?>">
	<meta property="og:image" content="https://quint-felicity.de/resources/halbkreis.jpg">
	<meta property="og:image:alt" content="Bandfoto von Quint Felicity">
	<meta property="og:url" content="https://quint-felicity.de/">
	<meta property="og:type" content="music.group">

	<!-- Twitter Card Meta Tags -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="Quint Felicity – Pop & Rock Band">
	<meta name="twitter:description" content="Quint Felicity ist eine junge Band aus Rheinland-Pfalz mit modernen Coversongs und guter Stimmung! Entdecke unsere Musik und aktuellen Auftritte.">
	<meta name="twitter:image" content="https://quint-felicity.de/resources/heroMobile2.jpg">
	<meta name="twitter:image:alt" content="Bandfoto von Quint Felicity">
	<meta name="twitter:site" content="@quint.felicity">

	<!--Google Fonts-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Special+Elite">
	<!--Buehnenfieber: Anton, Poppins Allura-->
	<link href="https://fonts.googleapis.com/css2?family=Allura&family=Anton&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width initial-scale=0.55">
</head>