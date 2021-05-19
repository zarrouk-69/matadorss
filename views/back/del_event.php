<?php 

    
   require_once('C:\xampp\htdocs\integration\controller\event.php');
require_once('C:\xampp\htdocs\integration\controller\ticket.php'); 
    require_once('../.././config.php'); 
    $db = new event();
    
    if(isset($_GET['D_ID']))
    {
        
        $ID = $_GET['D_ID'];

        if($db->Delete_Record($ID))
        {
            $db->set_messsage('<div class="alert alert-danger">  Your Record Has Been Deleted </div>');
            header("location:back_event.php");
        }
        else
        {
            $db->set_messsage('<div class="alert alert-danger">  Something Wrong to Delete the Record </div>'); 
        }
    }
?>