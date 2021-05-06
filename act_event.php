<?php 

    
    require_once('./config/event.php');
    $db = new event();
    
    if(isset($_GET['E_ID']))
    {
        
        $ID = $_GET['E_ID'];

        if($db->update_act($ID))
        {
            $db->set_messsage('<div class="alert alert-danger">  Your Record Has Been updated </div>');
            header("location:back_event.php");
        }
        else
        {
            $db->set_messsage('<div class="alert alert-danger">  Something Wrong to update  the Record </div>'); 
        }
    }
?>