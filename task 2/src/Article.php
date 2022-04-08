<?php

namespace App;

class Article {

    public function loadById( int $id ){
        // SELECT * FROM articles WHERE id = {$id}
    }

    public function getComments(){
        // SELECT * FROM comments WHERE article_id = {$this->id}
        // return array of Comment instances
    }

}