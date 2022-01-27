<?php

namespace Core;

use eftec\bladeone\BladeOne;

class Controller {
    protected $blade;

    function __construct() {
        $views = '../app/views/';
        $cache = '../cache/';

        $this->blade = new BladeOne($views, $cache);
    }

    public function view ($view, $data) {
        try {
            echo ($this->blade)->run($view, $data);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

    }
}