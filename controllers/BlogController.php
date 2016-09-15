<?php

include_once(ROOT . '/models/Blog.php');

class BlogController {
    
    public function actionList() {
        
        $postsList = array();
        $postsList = Blog::getPostsList();
       
        
       //Connecting view
        require_once(ROOT . '/views/blog.php');
        

        return true;
    }
    
    public function actionPost($id) {
        
        if ($id) {
            $postById = Blog::getPostById($id);
        }
        
        //Connecting view
        require_once(ROOT . '/views/post.php');
        
        return true;
    }
}
