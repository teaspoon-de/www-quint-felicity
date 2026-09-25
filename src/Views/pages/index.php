<link rel="preload" fetchpriority="high" as="image" href="/resources/heroMobile2.jpg" type="image/jpg">

<section id="intro">
    <img id="heroM" src="/resources/heroMobile2.jpg" alt="Hero-Bild Quint Felicity, alle Mitglieder auf der Bühne">
    <p class="head unselectable">5 JUNGS - 100% LIVE</p>
    <div>
        <p>Interesse?</p>
        <a href="/kontakt" class="button">Kontaktier uns!</a>
    </div>
</section>
<?php
$count = 0;
function getArticleCol(int $count):string {
    if ($count %2 === 0) return "standartCol";
    return "reverseCol";
}
?>

<section id="buehnenfieber">
    <div class="container">
        <div class="logo">
            <p class="poppins datum">SA, 17.10.2026</p>
            <h2 class="anton">BÜHNENFIEBER</h2>
            <div class="untertitel">
                <p class="poppins">DIE LIVE SHOW</p>
                <p class="allura">in Rahms</p>
            </div>
        </div>
        <div class="countdown">
            <div class="digit">
                <span id="days">00</span>
                <small>TAGE</small>
            </div>
            <div class="digit">
                <span id="hours">00</span>
                <small>STD</small>
            </div>
            <div class="digit">
                <span id="minutes">00</span>
                <small>MIN</small>
            </div>
            <div class="digit">
                <span id="seconds">00</span>
                <small>SEK</small>
            </div>
        </div>
        <div class="aufrufContainer">
            <div class="aufruf anton">
                <p>JETZT TICKET</p>
                <p style="align-self: flex-end;">SICHERN!</p>
            </div>
            <a class="button" href="https://buehnenfieber.quint-felicity.de/">
                <p>Zur Website</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right"><path d="M7 7h10v10"/><path d="M7 17 17 7"/></svg>
            </a>
            
        </div>
    </div>

    <script>
        const targetDate = new Date("2026-10-17T19:00:00");

        function updateCountdown() {
            const now = new Date();
            const difference = targetDate - now;

            if (difference <= 0) {
                document.getElementById("days").textContent = "00";
                document.getElementById("hours").textContent = "00";
                document.getElementById("minutes").textContent = "00";
                document.getElementById("seconds").textContent = "00";
                return;
            }

            const days = Math.floor(difference / (1000 * 60 * 60 * 24));
            const hours = Math.floor(
                (difference / (1000 * 60 * 60)) % 24
            );
            const minutes = Math.floor(
                (difference / (1000 * 60)) % 60
            );
            const seconds = Math.floor(
                (difference / 1000) % 60
            );

            document.getElementById("days").textContent =
                String(days).padStart(2, "0");

            document.getElementById("hours").textContent =
                String(hours).padStart(2, "0");

            document.getElementById("minutes").textContent =
                String(minutes).padStart(2, "0");

            document.getElementById("seconds").textContent =
                String(seconds).padStart(2, "0");
        }

        updateCountdown();
        setInterval(updateCountdown, 1000);
    </script>
</section>

<section id="ueberUns" class="<!--?= getArticleCol($count)?-->">
    <div class="container">
        <div class="article-short">
            <img
                src="/resources/manux.jpg"
                alt="Schlagzeuger von Quint Felicity während eines Songs"
                width="250"
                height="250"
                loading="lazy"
            >
            <article>
                <a href="/ueber-uns"><h2 class="head" ># ÜBER UNS</h2></a>
                <p>Wir sind eine junge Cover-Band zwischen Bonn und Koblenz. Egal ob moderner oder klassischer Pop-Rock - Lasst euch von unserer Energie überzeugen!</p>
                <a href="/ueber-uns" class="button">Mehr lesen</a>
            </article>
        </div>
</div>
</section>
<?php $count++;?>

<?php
if ($event) {
    echo '<section id="eventBanner" class="artShort ';
    echo getArticleCol($count);
    echo '">
    <h2 class="secTitle unselectable">NÄCHSTES EVENT</h2>
    <a href="/events" class="button '.getArticleCol($count).'" style="margin-top: -20px;">
        Alle kommenden Events anzeigen
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right-icon lucide-arrow-up-right"><path d="M7 7h10v10"/><path d="M7 17 17 7"/></svg>
    </a>
    <article class="eventInfo">
        <p>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin-icon lucide-map-pin"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>';
    echo htmlspecialchars($event['title']);
    echo '</p><p>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar1-icon lucide-calendar-1"><path d="M11 14h1v4"/><path d="M16 2v4"/><path d="M3 10h18"/><path d="M8 2v4"/><rect x="3" y="4" width="18" height="18" rx="2"/></svg>';
    $date = new DateTime($event['date_begin']);
    $months = [
        1 => "Januar",
        2 => "Februar",
        3 => "März",
        4 => "April",
        5 => "Mai",
        6 => "Juni",
        7 => "Juli",
        8 => "August",
        9 => "September",
        10 => "Oktober",
        11 => "November",
        12 => "Dezember"
    ];
    $day = $date->format('j');
    $month = $months[(int)$date->format('n')];
    $year = $date->format('Y');
    echo "$day. $month $year";
    echo '</p>
        </article>
        <!--article style="align-items: center; justify-content: center;">
            <img
                src="/resources/Grube Ferdinand.jpg"
                alt="Poster: Quint Felicity Konzert in der Grube Ferdinand am 05.02.2026"
                loading="lazy"
                style="width: 80%; max-width: 700px; aspect-ratio: 864 / 1222;"
            >
        </article-->
    </section>';
    $count++;
}
?>

<section id="aktuelles">
    <div class="container">
        <a href="/blog"><h2 class="head">AKTUELLES</h2></a>
        <a href="/blog" class="button">
            Alle Artikel anzeigen
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right-icon lucide-arrow-up-right"><path d="M7 7h10v10"/><path d="M7 17 17 7"/></svg>
        </a>
        <div class="article-short">
            <img
                src="https://quint-felicity.de/resources/uploads/img_6a3bd0ae6cdcf9.05851104.jpg"
                alt=""
                loading="lazy"
            >
            <article>
                <a href="/blog/heimspiel-und-dorffest-unser-konzertwochenende-in-rahms-und-glockscheidwuescheid"><h3 class="head"># Heimspiel und Dorffest – Konzerte in Rahms und Glockscheid/Wüscheid</h3></a>
                <p class="date">- 2026-05-02 -</p>
                <p> Maiwochenende begann für uns mit dem Tanz in den Mai in Rahms. Nachdem wir dort bereits im vergangenen Jahr spielen durften, haben wir uns sehr über die erneute Einladung gefreut.&lt;br&gt;Der Auftritt ist nicht nur für Cedrik und Finn ein Heimspiel, denn im Rahmser Bürgerhaus dürfen wir regelmäßig Probewochenenden veranstalten, ein wichtiges Element unserer Vorbereitung. Deshalb finden wir es wichtig, die Ergebnisse unserer Proben auch in Rahms zu präsentieren.&lt;br&gt;Der Tanz in den Mai wird in</p>
                <a href="/blog/heimspiel-und-dorffest-unser-konzertwochenende-in-rahms-und-glockscheidwuescheid" class="button">Mehr lesen</a>
            </article>
        </div>
        <div class="article-short">
            <img
                src="https://quint-felicity.de/resources/uploads/img_69eb4abb0df664.87481584.jpg"
                alt=""
                loading="lazy"
            >
            <article>
                <a href="/blog/100-minuten-24-songs-ein-ziel"><h3 class="head"># 100 Minuten, 24 Songs, ein Ziel</h3></a>
                <p class="date">- 2026-02-05 -</p>
                <p>h über vier Monaten intensiver Vorbereitung im Proberaum war es endlich Zeit für unseren ersten eigenen abendfüllenden Gig. Die Grube Ferdinand war für uns der perfekte Ort, um zu zeigen, woran wir in der letzten Zeit gearbeitet haben. Unser Ziel war es, sowohl klanglich als auch technisch einen deutlichen Schritt nach vorne zu machen.&lt;/article&gt;&lt;h2&gt;Von Null auf Hundert&lt;/h2&gt;&lt;article&gt;Den Einstieg haben wir mit „I’m Still Standing“ (Taron Egerton Style) gemacht, ein super Eisb</p>
                <a href="/blog/100-minuten-24-songs-ein-ziel" class="button">Mehr lesen</a>
            </article>
        </div>
        <div class="article-short">
            <img
                src="https://quint-felicity.de/resources/uploads/img_69831233d1e7d0.52446618.jpeg"
                alt=""
                loading="lazy"
            >
            <article>
                <a href="/blog/news-wechsel-an-den-sticks-willkommen-kjell"><h3 class="head"># News: Wechsel an den Sticks – Willkommen Kjell!</h3></a>
                <p class="date">- 2026-02-03 -</p>
                <p>Bei Quint Felicity gibt es eine personelle Neuigkeit: Unser langjähriger Schlagzeuger Manuel zieht ab Januar für sechs Monate in den Norden, um sich dort seiner beruflichen Tätigkeit zu widmen. Auch wenn er vorerst nicht mehr vollständig dabei sein kann, wünschen wir ihm für dieses halbe Jahr nur das Beste!</p>
                <a href="/blog/news-wechsel-an-den-sticks-willkommen-kjell" class="button">Mehr lesen</a>
            </article>
        </div>
    </div>
</section>

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
