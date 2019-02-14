<?php

session_start();
function error(){
    if(isset($_SESSION['errormassage'])){
        $output = "<div class=\"col-md-4 col-sm-6 d-flex justify-content-center border-right\">";
        $output = "<div class=\"wrapper text-center\">";

         $output ="<h4 class=\"card-title\">" ;  

         $output .=($_SESSION["error"]);
         $output .="</h4>";
        $output .= "</div>";
        $output .= "</div>";

        $_SESSION['error']= null;
        return $output;
    }
    
}

 

function successmassage(){
    if(isset($_SESSION['successmassage'])){
        $output = "<div class=\"alert alert-success\">";
        $output .= ($_SESSION["successmassage"]);
        $output .= "</div>";
        $_SESSION['successmassage']= null;
        return $output;
    }
    
}



?>