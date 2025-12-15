<?php 
$backTo = 'Zurück zur Startseite';
require __DIR__ . "/../layout/back.php";?>
<section id="aktuelles" class="artShort reverseCol">
    <h1 class="secTitle">BLOG - AKTUELLES</h1>
    <?php foreach($blogposts as $post): ?>
    <article>
        <img src="<?= "/resources/uploads/".htmlspecialchars($post['cover_uri'] ?? '') ?>">
        <div>
            <h2># <?= htmlspecialchars($post['title']) ?></h2>
            <date>- <?= date('Y-m-d', strtotime($post['date'])) ?> -</date>
            <p><?= substr(htmlspecialchars($post['content'] ?? ''), 0, 256) ?></p>
            <a href="/blog/<?= $post['slug']?>" class="button reverseCol">Mehr lesen</a>
        </div>
    </article>
    <?php endforeach; ?>
</section>