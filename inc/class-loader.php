<?php

namespace Wisdom;

class Loader {

    /**
     * @$load: files[] contains file path to load 
     */
    private $files;

    function __construct($load = false) {
        if ($load) {
            $pack = array(
                HOME . 'config/loader.php',
                HOME . 'inc/module/class-http.php'
            );
            $this->load($pack);
            if (isset($this->files) && !empty($this->files)) {
                if (isset($this->files['list'])) {
                    if (is_array($this->files['list'])) {
                        $this->load($this->files['list']);
                    }
                }
            }
        }
    }

    function load($load) {
        /**
         * Load required files.
         */
        if (!empty($load))
            if (is_array($load)) {
                foreach ($load as $k => $v) {
                    require_once $v;
                }
            } else {
                if (file_exists($load)) {
                    require_once $load;
                }
            }
    }

    function run() {
        $this->http = new Module\Http($this);
    }

}
