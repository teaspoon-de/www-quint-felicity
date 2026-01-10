<link rel="preload" fetchpriority="high" as="image" href="/resources/heroMobile2.jpg" type="image/jpg">

<section id="intro">
    <img id="heroM" src="/resources/heroMobile2.jpg" alt="Hero-Bild Quint Felicity, alle Mitglieder auf der Bühne">
    <h1 class="slogan unselectable">5 JUNGS - 1 VIBE</h1>
    <div>
        <p>Interesse?</p>
        <a href="/kontakt" class="button reverseCol">Kontaktier uns!</a>
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
        <div style="height: fit-content;">
            <a href="/ueber-uns"><h2 class="title" style="padding-top: 10px;"># ÜBER UNS</h2></a>
            <p>Wir sind eine junge Cover-Band zwischen Bonn und Koblenz. Egal ob moderner oder klassischer Pop-Rock - Lasst euch von unserer Energie überzeugen!</p>
            <a href="/ueber-uns" class="button <?= getArticleCol($count)?>">Mehr lesen</a>
        </div>
        <img
            src="/resources/manux.jpg"
            alt="Schlagzeuger von Quint Felicity während eines Songs"
            loading="lazy"
            style="height: 250px; width: 250px; align-self: center;"
        >
    </article>
</section>
<?php $count++;?>

<?php if (count($blogposts) > 0) echo '
<section id="aktuelles" class="artShort '.getArticleCol($count).'">
    <a href="/blog"><h2 class="secTitle unselectable">AKTUELLES</h2></a>
    <a href="/blog" class="button '.getArticleCol($count).'" style="margin-top: -20px;">
        Alle Artikel anzeigen
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right-icon lucide-arrow-up-right"><path d="M7 7h10v10"/><path d="M7 17 17 7"/></svg>
    </a>
    ';?>
    <?php foreach($blogposts as $post): ?>
    <article>
        <img
            src="<?= "/resources/uploads/".htmlspecialchars($post['cover_uri'] ?? '') ?>"
            alt="<?= htmlspecialchars($post['cover_alt'] ?? '') ?>"
            loading="lazy"
        >
        <div>
            <a href="/blog/<?=$post['slug']?>"><h3 class="title"># <?=htmlspecialchars($post['title']) ?></h3></a>
            <date>- <?= date('Y-m-d', strtotime($post['date'])) ?> -</date>
            <p><?= substr(htmlspecialchars(substr(explode('</p>', $post['content'])[0], strlen('<article><p>')) ?? ''), 0, 512) ?></p>
            <a href="/blog/<?= $post['slug']?>" class="button <?= getArticleCol($count)?>">Mehr lesen</a>
        </div>
    </article>
    <?php endforeach; ?>
<?php if (count($blogposts) > 0) {
    echo '</section>';
    $count++;
} ?>
