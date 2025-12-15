<link rel="stylesheet" href="/css/blogpost.css">
<article class="blogpost">
    <div class="title">
        <div>
            <h1># <?= htmlspecialchars($blogpost['title']) ?></h1>
            <date>- <?= date('Y-m-d', strtotime($blogpost['date'])) ?> -</date>
        </div>
    </div>
    <div class="content">
        <img src="<?= "/resources/uploads/".htmlspecialchars($blogpost['cover_uri'] ?? '') ?>">
        <p><?= htmlspecialchars($blogpost['content'] ?? '') ?></p>
    </div>
</article>