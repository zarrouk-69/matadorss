<?php 

    
    //require_once('./config/dbconfig.php');
    require_once('../.././config/dbconfig.php');  
    $db = new dbconfig();

    class event extends dbconfig
    {
        // Insert Record in the Database
        public function Store_Record()
        {
            global $db;
            
            if(isset($_POST['btn_save']))
            {
                
                

                
                
                
                $titre = $db->check($_POST['titre']);
                $date_d = $db->check($_POST['date_d']);
                $date_f = $db->check($_POST['date_f']);
                $nbp = $db->check($_POST['nbp']);
                $ids = $db->check($_POST['ids']);
                $desc = $db->check($_POST['desc']);
                $file = $db->check($_POST['file']);
                

                if($this->insert_record($titre,$date_d,$date_f,$nbp,$ids,$desc,$file))
                {
                    echo '<div class="alert alert-success"> Your Record Has Been Saved :) </div>';
                }
                else
                {
                    echo '<div class="alert alert-danger"> Failed </div>';
                }
                
                
                
            }
        }
        function total_events($x)
        {
            
           global $db;
           $db1 = new ticket();

           if ($x == 0 )
           {
           $sql = "SELECT COUNT(*) c  from evenement ";
           $result = mysqli_query($db->connection,$sql);
           $data = mysqli_fetch_assoc($result);
           
               return $data['c'];
           }
           if ($x == 1 )
           {
            $query = "SELECT * from evenement ";
            $result1 = mysqli_query($db->connection,$query);
            $x = 0;
            while($data = mysqli_fetch_assoc($result1))
            {
                if($data['nbp']  ==$db1->search_by_event($data['ide']) )
                {
                    $x = $x + 1 ;
                }
            }
            return $x;
           }
           if ($x == 2 )
           {
           $sql = "SELECT COUNT(*) c  from evenement where state = 0";
           $result = mysqli_query($db->connection,$sql);
           $data = mysqli_fetch_assoc($result);
           
               return $data['c'];
           }
           if ($x == 3 )
           {
           $sql = "SELECT COUNT(*) c  from evenement where state = 1";
           $result = mysqli_query($db->connection,$sql);
           $data = mysqli_fetch_assoc($result);
           
               return $data['c'];
           }
           
           
        }
        function increase_nbpt($ide)
        {
            global $db;
            $x = 1;
            $sql = "SELECT * from evenement where ide = '$ide' ";
            $result1 = mysqli_query($db->connection,$sql);
            
            $data = mysqli_fetch_assoc($result1);
            if ($data['nbpt'] < $data['nbp'] ) 
            {
                $x = $data['nbpt'] + $x ;
                $sql = "UPDATE evenement set nbpt='$x' where  ide = '$ide'";
                if(mysqli_query($db->connection,$sql))
                {
                    return true;
                }

            }
           else
           {
                return false;
           }
           return false;
            
            
        }


      // Insert Record in the Database Using Query    
        function insert_record($t,$a,$b,$c,$d,$e,$f)
        {
            global $db;
           
            
            $query = "insert into evenement (titre,date_d,date_f,nbp,ids,description,img) values('$t','$a','$b','$c','$d','$e','$f')";
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

       // View Database Record
        public function view_record()
        {
            global $db;
            
                
            if(isset($_POST['btn_filter']))
            {
                $titre = $db->check($_POST['titre']);
                $ide = $db->check($_POST['ide']);
                $date_d = $db->check($_POST['date_d']);
                $date_f = $db->check($_POST['date_f']);
                $nbp = $db->check($_POST['nbp']);
                $ids = $db->check($_POST['ids']);
               
                
                if( isset($titre) || isset($ide) || isset($date_d) || isset($date_f) || isset($nbp) || isset($ids))
                {
                    $query = $this->search_record($titre,$ide,$date_d,$date_f,$nbp,$ids);
                   
                    echo '<div class="alert alert-success"> Your Records Has Been filtred :) </div>';
                }
                else
                {   
                   
    
                    echo '<div class="alert alert-danger"> Failed </div>';
                }
                
            }
            else
            
                if(isset($_GET['ASC_ID']))
    {
        
        $query = "SELECT * from evenement order by ide ASC";
    }
    
        if(isset($_GET['DESC_ID']))
        {
            
            $query = "SELECT * from evenement order by ide desc";
        }
        if(isset($_GET['ASC_TITLE']))
        {
            $query = "SELECT * from evenement order by  titre asc";
        }
        if(isset($_GET['DESC_TITLE']))
        {
            $query = "SELECT * from evenement order by  titre desc";
        }
        if(isset($_GET['ASC_DATED']))
        {
            $query = "SELECT * from evenement order by  date_d asc";
        }
        if(isset($_GET['DESC_DATED']))
        {
            $query = "SELECT * from evenement order by  date_f desc";
        }
        if(isset($_GET['ASC_FIN']))
        {
            $query = "SELECT * from evenement order by  date_f asc";
        }
        if(isset($_GET['DESC_FIN']))
        {
            $query = "SELECT * from evenement order by  date_f desc";
        }
        if(isset($_GET['ASC_NBP']))
        {
            $query = "SELECT * from evenement order by  nbp asc";
        }
        if(isset($_GET['DESC_NBP']))
        {
            $query = "SELECT * from evenement order by  nbp desc";
        }
        if(isset($_GET['ASC_DESCP']))
        {
            $query = "SELECT * from evenement order by  description asc";
        }
        if(isset($_GET['DESC_DESCP']))
        {
            $query = "SELECT * from evenement order by  description desc";
        }
        if(isset($_GET['ASC_IMG']))
        {
            $query = "SELECT * from evenement order by  img asc";
        }
        if(isset($_GET['DESC_IMG']))
        {
            $query = "SELECT * from evenement order by  img desc";
        }
        
        if (empty($query))
        {
            $query = "SELECT * from evenement ";
        }
                
            
            
            $result = mysqli_query($db->connection,$query);
            return $result;
        }
        public function search_record($titre,$ide,$date_d,$date_f,$nbp,$ids)
        {
            
            
            

            if ( $titre != ' ' && $ide != ''  && $date_d != '' &&  $date_f != ''  &&  $nbp != '' &&  $ids != '' )
            {
                $query = "SELECT * from evenement WHERE ide = '$ide' and date_d= '$date_d' and date_f= '$date_f' and nbp = '$nbp' and ids = '$ids'";
            }
            else
            {
                if( $ide != '')
                {
                    $query = "SELECT * from evenement WHERE ide = '$ide'";
                }
                else
                {
                    if($titre != '' )
                    {
                        $query = "SELECT * from evenement WHERE titre like '%$titre%'"; 
                    }
                    else
                    {
                    if( $date_d != '')
                {
                    $query = "SELECT * from evenement WHERE date_d = '$date_d'";
                }
                else
                {
                    if( $date_f != '' )
                {
                    $query = "SELECT * from evenement WHERE date_f = '$date_f'";
                }
                else
                {
                    if( $nbp != '')
                {
                    $query = "SELECT * from evenement WHERE nbp = '$nbp'";
                }
                
                else
                {
                    if( $ids != '')
                {
                    $query = "SELECT * from evenement WHERE ids = '$ids'";
                }
                else
                {
                    $query = "SELECT * from evenement ";
                }
                }
                }
                }
                }
            }
            }
           
           return $query;
        }
        public function get_nbp($ide)
        {
            global $db;
            $query = "SELECT *  from evenement Where ide = '$ide'";
            $result = mysqli_query($db->connection,$query);
            $data = mysqli_fetch_assoc($result);
            return $data['nbp'];
            
        }
        public function Delete_Record($ide)
        {
            global $db;
            $query = "DELETE from evenement Where ide = '$ide'";
            $result = mysqli_query($db->connection,$query);
            return $result;
        }


        // Get Particular Record
        public function get_record($ide)
        {
            global $db;
            $sql = "SELECT * from evenement WHERE ide='$ide'";
            $data = mysqli_query($db->connection,$sql);
            return $data;

        }
        public function update()
        {
            global $db;

            if(isset($_POST['btn_update']))
            {
                $TITRE = $_POST['titre'];
                $IDE = $_POST['ide'];
                $DATE_D = $_POST['date_d'];
                $DATE_F = $_POST['date_f'];
                $IDS = $_POST['ids'];
                $NBP = $_POST['nbp'];
                $DESC = $_POST['desc'];
                $FILE = $_POST['file'];
               

                if($this->update_record($TITRE,$IDE,$DATE_D,$DATE_F,$IDS,$NBP,$DESC,$FILE))
                {
                    $this->set_messsage('<div class="alert alert-success"> Your Record Has Been Updated : )</div>');
                    header("location:back_event.php");
                }
                else
                {   
                    $this->set_messsage('<div class="alert alert-success"> Something Wrong : )</div>');
                }

               
            } 
        }
        public function update_act($ide)
        {
            global $db;
            $sql = "SELECT  state from  evenement  where ide='$ide'";
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
            $sql = "UPDATE evenement set state = '$x' where ide='$ide'";
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

 // Update Function 2
        public function update_record($titre,$ide,$date_d,$date_f,$ids,$nbp,$desc,$file)
        {
            global $db;
            $sql = "update evenement set titre='$titre' , date_d='$date_d', date_f='$date_f', ids='$ids', nbp='$nbp' , description='$desc', img='$file' where ide='$ide'";
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