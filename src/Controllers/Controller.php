<?php

class Controller {
    private function render($view, $vars = [], $pageTitle) {
        extract($vars);

        ob_start();
        require __DIR__ . "/../Views/$view.php";
        $content = ob_get_clean();

        require __DIR__ . "/../Views/layout/main.php";
    }

    public function index() {
        $blogposts = Blogpost::all();
        $this->render('pages/index', compact('blogposts'));
    }

    public function impressum() {
        $this->render('pages/impressum', compact());
    }

    public function blogpost($id) {
        $blogpost = Blogpost::find($id);
        $this->render('events/show', compact('blogpost'));
    }
}
