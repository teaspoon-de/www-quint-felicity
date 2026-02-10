<?php

class Controller {
    private function render($view, $vars = []) {
        extract($vars);

        ob_start();
        require __DIR__ . "/../Views/$view.php";
        $content = ob_get_clean();

        require __DIR__ . "/../Views/layout/main.php";
    }

    public function sitemap() {
        $blogposts = Blogpost::all();
        require __DIR__ . "/../Views/other/sitemap.xml";
    }

    public function index() {
        $blogposts = Blogpost::allLimit(5);
        $event = Event::nextPublic();
        $pageTitle = 'Quint Felicity - Band';
        $description = 'Wir sind eine junge Cover-Band zwischen Bonn und Koblenz. Egal ob moderner oder klassischer Pop-Rock - Lasst euch von unserer Energie überzeugen!';
        $css = array('index');
        $canonical = 'https://quint-felicity.de/';
        $this->render('pages/index', compact('blogposts', 'event', 'pageTitle', 'canonical', 'description', 'css'));
    }

    public function impressum() {
        $pageTitle = 'Impressum - Quint Felicity';
        $description = '';
        $css = array('impressum');
        $canonical = 'https://quint-felicity.de/impressum';
        $this->render('pages/impressum', compact('pageTitle', 'canonical', 'description', 'css'));
    }

    public function ueberUns() {
        $pageTitle = 'Über Uns - Quint Felicity';
        $description = 'Wer ist Quint Felicity? - Unsere Bandgeschichte';
        $css = array('ueberUns');
        $canonical = 'https://quint-felicity.de/ueber-uns';
        $this->render('pages/ueberUns', compact('pageTitle', 'canonical', 'description', 'css'));
    }

    public function blogIndex() {
        $blogposts = Blogpost::all();
        $pageTitle = 'Blog - Quint Felicity';
        $description = 'Auftritte, Rückblicke und aktuelle Infos - alles rund um Quint Felicity';
        $css = array('blogpost');
        $canonical = 'https://quint-felicity.de/blog';
        $this->render('pages/blogIndex', compact('blogposts', 'pageTitle', 'canonical', 'description', 'css'));
    }

    public function blogShow($slug) {
        $blogpost = Blogpost::find($slug);
        $pageTitle = 'Blog - Quint Felicity';
        $description = 'Auftritte, Rückblicke und aktuelle Infos - alles rund um Quint Felicity';
        $css = array('blogpost');
        $canonical = 'https://quint-felicity.de/blog/'.$slug;
        $this->render('pages/blogShow', compact('blogpost', 'pageTitle', 'canonical', 'description', 'css'));
    }

    public function events() {
        $events = Event::all();
        $pageTitle = 'Events - Quint Felicity';
        $description = 'Die nächsten Auftritte von Quint Felicity';
        $css = array('events');
        $canonical = 'https://quint-felicity.de/events';
        $this->render('pages/events', compact('events', 'pageTitle', 'canonical', 'description', 'css'));
    }

    public function veranstalter() {
        $pageTitle = 'Für Veranstalter - Quint Felicity';
        $description = 'Alle nötigen technischen und organisatorischen Infos gesammelt';
        $css = array();
        $canonical = 'https://quint-felicity.de/fuer-veranstalter';
        $this->render('pages/inWork', compact('pageTitle', 'canonical', 'description', 'css'));
    }

    public function kontakt() {
        $pageTitle = 'Kontakt - Quint Felicity';
        $description = 'Quint Felicity auf deinem Event? Kontaktier uns!';
        $css = array('kontakt');
        $canonical = 'https://quint-felicity.de/kontakt';
        $this->render('pages/kontakt', compact('pageTitle', 'canonical', 'description', 'css'));
    }
}
