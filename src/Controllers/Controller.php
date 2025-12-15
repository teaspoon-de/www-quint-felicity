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
        $canonical = 'https://quint-felicity.de';
        $this->render('pages/index', compact('blogposts', 'pageTitle', 'canonical'));
    }

    public function impressum() {
        $pageTitle = 'Impressum - Quint Felicity';
        $canonical = 'https://quint-felicity.de/impressum';
        $this->render('pages/impressum', compact('pageTitle', 'canonical'));
    }

    public function ueberUns() {
        $pageTitle = 'Über Uns - Quint Felicity';
        $canonical = 'https://quint-felicity.de/ueber-uns';
        $this->render('pages/ueberUns', compact('pageTitle', 'canonical'));
    }

    public function blogIndex() {
        $blogposts = Blogpost::all();
        $pageTitle = 'Blog - Quint Felicity';
        $canonical = 'https://quint-felicity.de/blog';
        $this->render('pages/blogIndex', compact('blogposts', 'pageTitle', 'canonical'));
    }

    public function blogShow($id) {
        $blogpost = Blogpost::find($id);
        $pageTitle = 'Blog - Quint Felicity';
        $canonical = 'https://quint-felicity.de/blog/'.$id;
        $this->render('pages/blogShow', compact('blogpost', 'pageTitle', 'canonical'));
    }

    public function veranstalter() {
        $pageTitle = 'Für Veranstalter - Quint Felicity';
        $canonical = 'https://quint-felicity.de/fuer-veranstalter';
        $this->render('pages/veranstalter', compact('pageTitle', 'canonical'));
    }

    public function kontakt() {
        $pageTitle = 'Kontakt - Quint Felicity';
        $canonical = 'https://quint-felicity.de/kontakt';
        $this->render('pages/kontakt', compact('pageTitle', 'canonical'));
    }
}
