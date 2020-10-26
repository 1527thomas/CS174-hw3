<?php

namespace cs174\hw3\views\helpers;

class viewHelper {
    public function display($htmlPage) {
        include_once dirname(__FILE__) . $htmlPage;
    }
}
?>