<?php

class BlogController {
    
    public function actionList() {
        echo '<br><br>все посты на сегодня<br><br><a href=blog/post>Крутая новость</a>';
        return true;
    }
    
    public function actionPost() {
        echo '<br><br>Новость дня!<br><a href=blog>Все записи</a>';
        return true;
    }
}
