<?php
session_start();

 

function successmassage(){
    if(isset($_SESSION['successmassage'])){
        $output = "<div class=\"alert alert-success\">";
        $output .= ($_SESSION["successmassage"]);
        $output .= "</div>";
        $_SESSION['successmassage']= null;
        return $output;
    }
    
}
function error(){
    if(isset($_SESSION['error'])){
        $output = "<div class=\"alert alert-danger\">";
        $output .= ($_SESSION["error"]);
        $output .= "</div>";
        $_SESSION['error']= null;
        return $output;
    }
    
}


?>