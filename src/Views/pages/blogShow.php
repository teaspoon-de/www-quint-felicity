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
        <img src="<?= "/resources/uploads/".htmlspecialchars($blogpost['cover_uri'] ?? '') ?>">
        <?= $blogpost['content'] ?>
    </div>
</article>