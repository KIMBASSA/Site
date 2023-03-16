<?php

define('ROOT',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));
ob_start();
 require_once(ROOT.'AutoLoader.php');
 use App\AutoLoader;
  AutoLoader::register(); 
  use App\controllers\AllController;

        if(isset($_GET['page']) and !empty($_GET['page']))
        {

            $page=htmlentities(trim($_GET['page']));
            switch($page){         
               case 'index':App\Controllers\AllController::index();
                break; 
               case 'services':App\Controllers\AllController::services();
                break; 
               case 'apropos':App\Controllers\AllController::apropos();
                break; 
               case 'contact':App\Controllers\AllController::contact();
                break; 
                
            }

        }else{
            require ROOT."views/index.php";
        }
    $content=ob_get_clean();
?>