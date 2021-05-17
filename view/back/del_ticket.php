<?php 

    
require_once('../.././config/dbconfig.php');  
    $db = new ticket();
    
    if(isset($_GET['D_ID']))
    {
        
        $ID = $_GET['D_ID'];

        if($db->Delete_Record($ID))
        {
            $db->set_messsage('<div class="alert alert-danger">  Your Record Has Been Deleted </div>');
            header("location:back_ticket.php");
        }
        else
        {
            $db->set_messsage('<div class="alert alert-danger">  Something Wrong to Delete the Record </div>'); 
        }
    }
?>