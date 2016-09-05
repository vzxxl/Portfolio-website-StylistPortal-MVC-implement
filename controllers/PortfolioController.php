<?php


class PortfolioController {
    
    public function actionIndex() {
        
        require_once (ROOT . '/views/portfolio.php');
        return true;
    }
   
}
