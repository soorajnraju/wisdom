<?php

namespace Wisdom\Module;

class Http {

    /**
     * 
     * @param object $loader
     */
    function __construct($loader) {
        $this->run($loader);
    }

    /**
     * 
     * @param object $loader
     */
    function get($loader) {
        if (isset($_GET['page'])) {
            $page = HOME . 'html/' . $_GET['page'];
            $ext = ['.php', '.html'];
            if (file_exists($page . $ext[0])) {
                $page = $page . $ext[0];
            } elseif (file_exists($page . $ext[1])) {
                $page = $page . $ext[1];
            } else {
                $page = HOME . 'html/404.php';
            }
            include $page;
        } else {
            $page = HOME . 'html/index';
            $ext = ['.php', '.html'];
            if (file_exists($page . $ext[0])) {
                $page = $page . $ext[0];
            } elseif (file_exists($page . $ext[1])) {
                $page = $page . $ext[1];
            }
        }

        if (isset($_POST['action'])) {
            $this->filter_post();
            if (file_exists(HOME . 'logic/' . $_POST['action'] . '.php')) {
                include HOME . 'logic/' . $_POST['action'] . '.php';
            } else {
                echo "logic file not found";
            }
        }

        include $page;
        exit;
    }

    function filter_get() {
        foreach ($_GET as $k => $v) {
            $_GET[$k] = filter_user_input($v);
        }
    }

    function filter_post() {
        foreach ($_POST as $k => $v) {
            $_POST[$k] = filter_user_input($v);
        }
    }

    /**
     * 
     * @param object $loader
     */
    function run($loader) {
        $this->filter_get();
        $this->get($loader);
    }

}
