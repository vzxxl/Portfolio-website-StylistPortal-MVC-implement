<?php

include_once(ROOT . '/models/Blog.php');

class BlogController {
    
    public function actionList() {
        $postsList = array();
        $postsList = Blog::getPostsList();
        
        echo '<pre>';
        print_r($postsList);
        echo '</pre>';
        //require_once(ROOT . '/views/blog.php');
        return true;
    }
    
    public function actionPost($id) {
        
        if ($id) {
            $postById = Blog::getPostById($id);
        }
        echo '<pre>';
        print_r($postById);
        echo '</pre>';
        
        return true;
    }
}
