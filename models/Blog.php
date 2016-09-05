<?php

class Blog {
    
    public static function getPostById() {
        //Запрос к БД (quering DB)
        
    }
    
    public static function getPostsList() {
       //Запрос к БД (quering DB)
        $host = 'localhost';
        $dnname = 'andrmvc_blog';
        $user = 'root';
        $password = '';
        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        
        $postsList = array();
        
        $result = $db->query('SELECT id , title, date, short_content '
                . 'FROM posts '
                . 'ORDER BY date DESC '
                . 'LIMIT 10'); 
        
        
        $i=0;
        while ($row = $result->fetch()) {
            $postsList[$i]['id'] = $row['id'];
            $postsList[$i]['title'] = $row['title'];
            $postsList[$i]['date'] = $row['date'];
            $postsList[$i]['short_content'] = $row['short_content'];
            $i++;
        }
        
        return $postsList;
        
    }
    
}
