<?php

class MejalSecController {
    public function mejalsec() {
        include_once 'view/mejalsec.php';
    }
}

class Blog {
    public function blog() {
        include_once 'view/blog/blog.php';
    }
}

class Design {
    public function design() {
        include_once 'view/projets/design/design.php';
    }
}

class Development {
    public function development() {
        include_once 'view/projets/development/development.php';
    }
}

class Cybersecurity {
    public function cybersecurity() {
        include_once 'view/projets/cybersecurity/cybersecurity.php';
    }
}

class Maintenance {
    public function maintenance() {
        include_once 'view/maintenance.php';
    }
}

class Ban {
    public function ban() {
        include_once 'view/ban.php';
    }
}

class TrollController {
    public function troll() {
        include_once 'view/troll.php';
    }
}

class ArticleMejalSec {
    public function articleMejalSec() {
        include_once 'view/articles/MejalSec/article.php';
    }
}

class ArticleHelloWorld {
    public function articleHelloWorld() {
        include_once 'view/articles/HelloWorld/article.php';
    }
}