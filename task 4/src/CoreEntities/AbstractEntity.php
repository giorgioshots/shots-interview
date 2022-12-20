<?php

namespace App\CoreEntities;

abstract class AbtractEntity {

    public static function getById() : ?self {

        // retrieve from DB
    }

    public function save(){

        // insert or update in DB
    }
}