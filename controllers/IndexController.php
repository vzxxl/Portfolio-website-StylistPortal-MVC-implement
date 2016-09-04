<?php

class IndexController {
    
    public function actionMain() {
        
        require_once(ROOT . '/views/index.php');
        return true;
    }
}