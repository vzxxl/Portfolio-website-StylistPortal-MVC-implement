<?php

class Blog {
    
    public static function getPostById($id) {
        
        $id = intval($id);
        
        
        //Запрос к БД (quering DB)
        if ($id) {
            
        
        $db = Db::getConnection();
     
        
        $result = $db->query('SELECT * FROM posts WHERE id =' . $id); 
        
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $postById = $result->fetch();
        
       
        
        return $postById;
        
        }
        
    }
        
    
    
    public static function getPostsList() {
       //Запрос к БД (quering DB)
        
        $db = Db::getConnection();
        
        $postsList = array();
        
        $result = $db->query('SELECT id , title, date, short_content, author_name, img_link '
                . 'FROM posts '
                . 'ORDER BY date DESC '
                . 'LIMIT 10'); 
        
        
        $i=0;
        while ($row = $result->fetch()) {
            $postsList[$i]['id'] = $row['id'];
            $postsList[$i]['title'] = $row['title'];
            $postsList[$i]['date'] = $row['date'];
            $postsList[$i]['short_content'] = $row['short_content'];
            $postsList[$i]['author_name'] = $row['author_name'];
            $postsList[$i]['img_link'] = $row['img_link'];
            $i++;
        }
        
        return $postsList;
        
    }
    
}
