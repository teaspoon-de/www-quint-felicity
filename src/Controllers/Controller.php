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
        $pageTitle = 'Quint Felicity - Band';
        $description = 'Quint Felicity ist eine junge Band aus Rheinland-Pfalz mit modernen Coversongs und guter Stimmung! Entdecke unsere Musik und aktuellen Auftritte.';
        $css = array('index');
        $canonical = 'https://quint-felicity.de';
        $this->render('pages/index', compact('blogposts', 'pageTitle', 'canonical', 'description', 'css'));
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
        $description = '';
        $css = array();
        $canonical = 'https://quint-felicity.de/ueber-uns';
        $this->render('pages/inWork', compact('pageTitle', 'canonical', 'description', 'css'));
    }

    public function blogIndex() {
        $blogposts = Blogpost::all();
        $pageTitle = 'Blog - Quint Felicity';
        $description = '';
        $css = array('blogpost');
        $canonical = 'https://quint-felicity.de/blog';
        $this->render('pages/blogIndex', compact('blogposts', 'pageTitle', 'canonical', 'description', 'css'));
    }

    public function blogShow($slug) {
        $blogpost = Blogpost::find($slug);
        $pageTitle = 'Blog - Quint Felicity';
        $description = '';
        $css = array('blogpost');
        $canonical = 'https://quint-felicity.de/blog/'.$slug;
        $this->render('pages/blogShow', compact('blogpost', 'pageTitle', 'canonical', 'description', 'css'));
    }

    public function veranstalter() {
        $pageTitle = 'Für Veranstalter - Quint Felicity';
        $description = '';
        $css = array();
        $canonical = 'https://quint-felicity.de/fuer-veranstalter';
        $this->render('pages/inWork', compact('pageTitle', 'canonical', 'description', 'css'));
    }

    public function kontakt() {
        $pageTitle = 'Kontakt - Quint Felicity';
        $description = '';
        $css = array('kontakt');
        $canonical = 'https://quint-felicity.de/kontakt';
        $this->render('pages/kontakt', compact('pageTitle', 'canonical', 'description', 'css'));
    }
}
