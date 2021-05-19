<?php 

    
  //  require_once('C:\xampp\htdocs\integration\controller\event.php');
//require_once('C:\xampp\htdocs\integration\controller\ticket.php'); 
require_once('../.././controller/ticket.php');  
require_once('../.././controller/event.php'); 
    require_once('../.././config.php');
    $db = new ticket();
    
    if(isset($_GET['E_ID']))
    {
        
        $ID = $_GET['E_ID'];

        if($db->update_act($ID))
        {
            $db->set_messsage('<div class="alert alert-danger">  Your Record Has Been updated </div>');
            header("location:back_ticket.php");
        }
        else
        {
            $db->set_messsage('<div class="alert alert-danger">  Something Wrong to update  the Record </div>'); 
        }
    }
?>