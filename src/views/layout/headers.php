<head>
	<meta charset="UTF-8" />
	<title><?= $pageTitle?></title>

    <link rel="icon" type="" href="/resources/LogoRotICO.png">
	<link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/topbar.css">
	<?php foreach($css as $cs):?>
    <link rel="stylesheet" href="/css/<?=$cs?>.css">
	<?php endforeach;?>
    <script src="/js/script.js"></script>

	<link rel="canonical" href="<?= $canonical?>">
	<meta name="description" content="<?= $description ?: ''?>">

	<!-- Open Graph Meta Tags -->
	<meta property="og:title" content="Quint Felicity – Pop & Rock Band">
	<meta property="og:description" content="Quint Felicity ist eine junge Band aus Rheinland-Pfalz mit modernen Coversongs und guter Stimmung! Entdecke unsere Musik und aktuellen Auftritte.">
	<meta property="og:image" content="https://quint-felicity.de/resources/heroMobile2.jpg">
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
    <script src="/js/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Special+Elite">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>