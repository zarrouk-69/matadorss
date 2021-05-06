<?php 

    
    require_once('./config/dbconfig.php');
    $db = new dbconfig();

    class ticket extends dbconfig
    {
        // Insert Record in the Database
        public function Store_Record()
        {
            global $db;
            if(isset($_POST['btn_save']))
            {
                $ide = $db->check($_POST['ide']);
                $idp = $db->check($_POST['idp']);
                

                if($this->insert_record($ide,$idp))
                {
                    echo '<div class="alert alert-success"> Your Record Has Been Saved :) </div>';
                }
                else
                {
                    echo '<div class="alert alert-danger"> Failed </div>';
                }
            }
        }
        function search_by_event($ide)
        {
            //global $db;
            //$query = "SELECT COUNT(*) as 'c' FROM ticket WHERE ide = '$ide'";
           // $query = "SELECT *  FROM ticket ";
            //$result = mysqli_query($db->connection,$query);
            //$row = mysql_fetch_assoc($result);
           // echo $row['c']; //Here is your count
           //echo($row['ide']);
           global $db;
           $sql = "SELECT COUNT(*) c  from ticket WHERE ide='$ide'";
           $result = mysqli_query($db->connection,$sql);
           $data = mysqli_fetch_assoc($result);
           
               return $data['c'];
           
           
        }
        public function update_act($idt)
        {
            global $db;
            $sql = "SELECT  state from  ticket  where idt='$idt'";
            $result = mysqli_query($db->connection,$sql);
            $data = mysqli_fetch_assoc($result);
           
            if ($data['state']== 0)
            {
                $x = 1;
            }
            else
            {
                $x = 0;
            }
            $sql = "UPDATE ticket set state = '$x' where idt='$idt'";
            $result = mysqli_query($db->connection,$sql);
            if($result)
            {
                return true;
                
            }
            else
            {
                return false;
                
            }
        }
      // Insert Record in the Database Using Query    
        function insert_record($ide,$idp)
        {
            global $db;
            $db1 = new event();
            if($this->search_by_event($ide)>=0)
            
            {
            
            $query = "insert into ticket (ide,idp) values('$ide','$idp')";
            $result = mysqli_query($db->connection,$query);

            if($result)
            {
                return true;
                
            }
            else
            {
                return false;
                
            }
        }
        else
        {
            return false;
        }
        }

       // View Database Record
        public function view_record()
        {
            global $db;
            
                
            if(isset($_POST['btn_filter']))
            {
                $idt = $db->check($_POST['idt']);
                $datea = $db->check($_POST['datea']);
                $idp = $db->check($_POST['idp']);
                $ide = $db->check($_POST['ide']);
                $idu = $db->check($_POST['idu']);
                $state = $db->check($_POST['state']);
               
                
                if( isset($idt) || isset($datea) || isset($idp) || isset($ide) || isset($idu) || isset($state))
                {
                    $query = $this->search_record($idt,$datea,$idp,$ide,$idu,$state);
                   
                    echo '<div class="alert alert-success"> Your Records Has Been filtred :) </div>';
                }
                else
                {
                    
                    echo '<div class="alert alert-danger"> Failed </div>';
                }
                
            }
            else
            {
                
                $query = "SELECT * from ticket ";
                
                
            }
            
            $result = mysqli_query($db->connection,$query);
            return $result;
        }
        public function search_record($idt,$datea,$idp,$ide,$idu,$state)
        {
            
            
            

            if ( $idt != ' ' && $datea != ''  && $idp != '' &&  $ide != ''  &&  $idu != '' &&  $state != '' )
            {
                $query = "SELECT * from ticket WHERE idt = '$idt' and datea= '$datea' and idp= '$idp' and ide = '$ide' and ids = '$ids' and state = '$state'";
            }
            else
            {
                if( $idt != '')
                {
                    $query = "SELECT * from ticket WHERE idt = '$idt'";
                }
                else
                {
                    if($datea != '' )
                    {
                        $query = "SELECT * from ticket WHERE datea = '$datea'"; 
                    }
                    else
                    {
                    if( $idp != '')
                {
                    $query = "SELECT * from ticket WHERE idp = '$idp'";
                }
                else
                {
                    if( $ide != '' )
                {
                    $query = "SELECT * from ticket WHERE ide = '$ide'";
                }
                else
                {
                    if( $ids != '')
                {
                    $query = "SELECT * from ticket WHERE ids = '$ids'";
                }
                
                else
                {
                    if( $state != '')
                {
                    $query = "SELECT * from ticket WHERE state = '$state'";
                }
                else
                {
                    $query = "SELECT * from ticket ";
                }
                }
                }
                }
                }
            }
            }
           
           return $query;
        }
        public function Delete_Record($idt)
        {
            global $db;
            $query = "DELETE from ticket Where idt = '$idt'";
            $result = mysqli_query($db->connection,$query);
            return $result;
        }


        // Get Particular Record
        public function get_record($idt)
        {
            global $db;
            $sql = "SELECT * from ticket WHERE idt='$idt'";
            $data = mysqli_query($db->connection,$sql);
            return $data;

        }
        public function update()
        {
            global $db;
            
            if(isset($_POST['btn_update']))
            {
                
                $IDT = $_POST['idt'];
                $DATEA = $_POST['datea'];
                $IDP = $_POST['idp'];
                $IDE = $_POST['ide'];
                $IDU = $_POST['idu'];
                $STATE = $_POST['state'];
               

                if($this->update_record($IDT,$DATEA,$IDP,$IDE,$IDU,$STATE))
                {
                    $this->set_messsage('<div class="alert alert-success"> Your Record Has Been Updated : )</div>');
                    header("location:back_ticket.php");
                }
                else
                {   
                    $this->set_messsage('<div class="alert alert-success"> Something Wrong : )</div>');
                }

               
            } 
        }
       

 // Update Function 2
        public function update_record($idt,$datea,$idp,$ide,$idu,$state)
        {
            global $db;
            $sql = "update ticket set  datea='$datea', idp='$idp', ide='$ide', idu='$idu' , state = '$state' where idt='$idt'";
            $result = mysqli_query($db->connection,$sql);
            if($result)
            {
                return true;
                
            }
            else
            {
                return false;
                
            }
        }

           // Set Session Message
           public function set_messsage($msg)
           {
               if(!empty($msg))
               {
                   $_SESSION['Message']=$msg;
               }
               else
               {
                   $msg = "";
               }
           }
   
           // Display Session Message
           public function display_message()
           {
               if(isset($_SESSION['Message']))
               {
                   echo $_SESSION['Message'];
                   unset($_SESSION['Message']);
               }
           }
     }
?>