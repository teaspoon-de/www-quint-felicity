<link rel="stylesheet" href="/css/index.css">

<section id="intro">
    <img id="heroM" src="/resources/heroMobile2.jpg" alt="">
    <img id="hero" src="/resources/hero2.jpg" alt="">
    <p class="slogan">5 JUNGS - 1 VIBE</p>
    <div>
        <h1>Interesse?</h1>
        <a href="/impressum" class="button reverseCol">Kontaktier uns!</a>
    </div>
</section>
<?php
$count = 0;
function getArticleCol(int $count):string {
    if ($count %2 === 0) return "standartCol";
    return "reverseCol";
}
?>

<section id="ueberUns" class="artShort <?= getArticleCol($count)?>">
    <article>
        <div>
            <h2># ÜBER UNS</h2>
            <p>Wir sind eine junge Band aus Rheinland-Pfalz mit modernen Coversongs und guter Stimmung!</p>
            <a href="/ueber-uns" class="button <?= getArticleCol($count)?>">Mehr lesen</a>
        </div>
        <img src="/resources/manux.jpg" alt="">
    </article>
</section>
<?php $count++;?>

<?php if (count($blogposts) > 0) echo '
<section id="aktuelles" class="artShort '.getArticleCol($count).'">
    <a href="/blog"><h1>AKTUELLES</h1></a>
    <a href="/blog" class="button '.getArticleCol($count).'" style="margin-top: -20px;">
        Alle Artikel anzeigen
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right-icon lucide-arrow-up-right"><path d="M7 7h10v10"/><path d="M7 17 17 7"/></svg>
    </a>
';?>
    <?php foreach($blogposts as $post): ?>
    <article>
        <img src="<?= "/resources/uploads/".htmlspecialchars($post['cover_uri'] ?? '') ?>">
        <div>
            <h2># <?= htmlspecialchars($post['title']) ?></h2>
            <date>- <?= date('Y-m-d', strtotime($post['date'])) ?> -</date>
            <p><?= substr(htmlspecialchars($post['content'] ?? ''), 0, 256) ?></p>
            <a href="/blog/<?= $post['id']?>" class="button <?= getArticleCol($count)?>">Mehr lesen</a>
        </div>
    </article>
    <?php endforeach; ?>
<?php if (count($blogposts) > 0) {
    echo '</section>';
    $count++;
} ?>