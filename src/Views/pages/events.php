<?php 
$backTo = 'Zurück zur Startseite';
require __DIR__ . "/../layout/back.php";?>
<section id="events" class="artShort reverseCol">
    <h1 class="secTitle">EVENTS - DIE NÄCHSTEN AUFTRITTE</h1>
    <?php
    $curYear = null;
    foreach($events as $event): ?><?php
    $date = new DateTime($event['date_begin']);
    $months = [
        1 => "JAN",
        2 => "FEB",
        3 => "MAR",
        4 => "APR",
        5 => "MAI",
        6 => "JUN",
        7 => "JUL",
        8 => "AUG",
        9 => "SEP",
        10 => "OKT",
        11 => "NOV",
        12 => "DEZ"
    ];
    $day = $date->format('j');
    $month = $months[(int)$date->format('n')];
    $year = $date->format('Y');
    if ($curYear !== $year) {
        $curYear = $year;
        echo '<h2 class="secTitle" style="font-size: 45px;">'.$year.'</h2>';
    }
    ?>
    <article>
        <div class="date">
            <p>
    <p class="day"><?= $day ?></p>
    <p class="month"><?= $month ?></p>
            </p>
        </div>
        
            <?php
        if (!$event['booked']) echo '<h2 class="title" style="font-weight: 300;">- In Planung -';
        else if (!$event['publish']) echo '<h2 class="title" style="font-weight: 300;">- Private Veranstaltung -';
        else echo '<h2 class="title">'.htmlspecialchars($event['title']);
            ?>
        </h2>
    </article>
    <?php endforeach; ?>
</section>