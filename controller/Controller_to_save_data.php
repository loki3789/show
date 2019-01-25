<?php

/**
 * Description of Controller_to_save_data1
 *
 * @author lokesh
 */

        $category = $_REQUEST['category'];
        echo $category;
        require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '\twig\models\Database_class.php');
        
        $date = date("Y-m-d");
        $time = date("h-i-sa");

        $t = new Database_class;
        $t->saverecords($category, $time, $date);
        
        
        header('Location:/twig/views/view%28html%29/Homepage.html');   // redirecting to same page after saving data to database
   
