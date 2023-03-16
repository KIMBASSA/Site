<?php
namespace App\controllers;

use App\models\Models;

class AllController {
    public static function index(){
        require_once(ROOT.'views/index.php');
    }

    public static function services(){
        require_once(ROOT.'views/all/services.php');
    }

    public static function apropos(){
        require_once(ROOT.'views/all/about.php');
    }
    
    public static function contact(){

        require_once(ROOT.'views/all/contact.php');
    }
}

?>