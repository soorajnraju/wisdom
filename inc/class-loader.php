<?php

namespace Wisdom;

defined('HOME') or exit('No direct access is not allowed');

class Loader {

    /**
     *
     * @var array $files 
     */
    private $files;

    /**
     * 
     * @param boolean $load
     */
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

    /**
     * 
     * @param type $load
     */
    function load($load) {
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

    /**
     * init function 
     */
    function run() {
        new Module\Http($this);
    }

}
