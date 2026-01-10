<link rel="preload" fetchpriority="high" as="image" href="<?= "/resources/uploads/".htmlspecialchars($blogpost['cover_uri'] ?? '') ?>" type="image/jpg">

<article class="blogpost">
    <?php 
    $backTo = 'Zurück zu allen Beiträgen';
    require __DIR__ . "/../layout/back.php";?>
    <div class="titleDiv">
        <div class="title">
            <h1># <?= htmlspecialchars($blogpost['title']) ?></h1>
            <date>- <?= date('Y-m-d', strtotime($blogpost['date'])) ?> -</date>
        </div>
    </div>
    <div class="content">
        <img
            src="<?= "/resources/uploads/".htmlspecialchars($blogpost['cover_uri'] ?? '') ?>"
            alt="<?= htmlspecialchars($blogpost['cover_alt'] ?? '') ?>"
        >
        <?= $blogpost['content'] ?>
    </div>
</article>