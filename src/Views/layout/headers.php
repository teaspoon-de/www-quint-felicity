<head>
	<meta charset="UTF-8" />
	<title><?= $pageTitle?></title>

    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/svg+xml" href="/favicon.svg" />
	<link rel="shortcut icon" href="/favicon.ico" />
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
	<link rel="manifest" href="/site.webmanifest" />

	<link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/topbar.css">
	<?php foreach($css as $cs):?>
    <link rel="stylesheet" href="/css/<?=$cs?>.css">
	<?php endforeach;?>
    <script src="/js/jquery-3.6.1.min.js"></script>
    <script src="/js/script.js"></script>

	<link rel="canonical" href="<?= $canonical?>">
	<meta name="description" content="<?= $description ?: ''?>">

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

    <meta name="viewport" content="width=device-width initial-scale=0.55">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Special+Elite">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>