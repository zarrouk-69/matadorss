<?php 

    
    //require_once('./config/dbconfig.php');
    require_once('../.././config.php'); 
    //$db = new dbconfig();

    class event extends config
    {
        // Insert Record in the Database
        public function get_event($ide){
        $db =config ::getConnexion();
        $sql = "SELECT * from evenement where ide = '$ide'";
        $result = $db->prepare($sql);
        $result->execute();
        return $result;

        }


        
        public function Store_Record()
        {
           $db =config ::getConnexion();
            
            if(isset($_POST['btn_save']))
            {
                
                

                
                
                
                $titre = $_POST['titre'];
                $date_d = $_POST['date_d'];
                $date_f = $_POST['date_f'];
                $nbp = $_POST['nbp'];
                $ids = $_POST['ids'];
                $desc = $_POST['desc'];
                $file = $_POST['file'];
                

                if($this->insert_record($titre,$date_d,$date_f,$nbp,$ids,$desc,$file)=='true')
                {
                    echo '<div class="alert alert-success"> Your Record Has Been Saved :) </div>';
                }
                else
                {
                    //echo '<div class="alert alert-danger"> Failed </div>';
                  ?> <div class= "alert alert-danger"> <?php echo($this->insert_record($titre,$date_d,$date_f,$nbp,$ids,$desc,$file)) ?> </div> <?php ;
                }
                
                
                
            }
        }
        function total_events($x)
        {
            
            $db =config ::getConnexion();
           $db1 = new ticket();

           if ($x == 0 )
           {
           $sql = "SELECT * from evenement ";
          // $result = mysqli_query($db->connection,$sql);
          $result = $db->prepare($sql);
          $result->execute();
          $count=$result->rowCount();
          return $count;
           }
           if ($x == 1 )
           {
            $query = "SELECT * from evenement ";
            $result = $db->prepare($query);
            $result->execute();
            $x = 0;
            foreach($result as $data)
            {
                if($data['nbp']  ==$db1->search_by_event($data['ide']) )
                {
                    $x = $x + 1 ;
                }
            }
            return $x;
            /*
            while($data = mysqli_fetch_assoc($result1))
            {
                if($data['nbp']  ==$db1->search_by_event($data['ide']) )
                {
                    $x = $x + 1 ;
                }
            }
            return $x;
            */
           }
           if ($x == 2 )
           {
           $sql = "SELECT *  from evenement where state = 0";
           
           $result = $db->prepare($sql);
            $result->execute();
            $count=$result->rowCount();
               return $count;
           }
           if ($x == 3 )
           {
           $sql = "SELECT * from evenement where state = 1";
          
           $result = $db->prepare($sql);
            $result->execute();
            $count=$result->rowCount();
               return $count;
           }
           
           
        }
        function increase_nbpt($ide)
        {
            global $db;
            $x = 1;
            $sql = "SELECT * from evenement where ide = '$ide' ";
           // $result1 = mysqli_query($db->connection,$sql);
            $result1 = $db->prepare($sql);
            $result1->execute();
            
            //$data = mysqli_fetch_assoc($result1);
            if ($result1['nbpt'] < $result1['nbp'] ) 
            {
                $x = $data['nbpt'] + $x ;
                $sql = "UPDATE evenement set nbpt='$x' where  ide = '$ide'";
                $result = $db->prepare($query);
                 
                if($result->execute())
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
           // global $db;
            $db =config::getConnexion();
            //$localtime = date('mm/dd/yyyy');
           if($a > $b )
           {
                return 'il faut que la data de debut soit inferieur a la date  fin ';

           }
           else
           {

            
            $query = "insert into evenement (titre,date_d,date_f,nbp,ids,description,img) values('$t','$a','$b','$c','$d','$e','$f')";
            
            $result = $db->prepare($query);
            $result->execute();
         
           

            if($result)
            {
                return true;
                
            }
            else
            {
                return false;
                
            }

           
        }
            
            
        }

       // View Database Record
        public function view_record()
        {
            $db =config ::getConnexion();
            
                
            if(isset($_POST['btn_filter']))
            {
                $titre = $_POST['titre'];
                $ide =   $_POST['ide'];
                $date_d = $_POST['date_d'];
                $date_f = $_POST['date_f'];
                $nbp = $_POST['nbp'];
                $ids = $_POST['ids'];
               
                
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
            {
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
        if(isset($_GET['ASC_ST']))
        {
            $query = "SELECT * from evenement order by  state asc";
        }
        if(isset($_GET['DESC_ST']))
        {
            $query = "SELECT * from evenement order by  state desc";
        }
    }
        if (empty($query))
        {
            $query = "SELECT * from evenement ";
        }
                
            
        $result = $db->prepare($query);
        $result->execute();
            //$result = mysqli_query($db->connection,$query);
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
            $db =config ::getConnexion();
            $query = "SELECT *  from evenement Where ide = '$ide'";
            //$result = mysqli_query($db->connection,$query);
            //$data = mysqli_fetch_assoc($result);
            $result = $db->prepare($query);
            $result->execute();
            $data=$result->fetch();
            return $data['nbp'];
            
        }
        public function Delete_Record($ide)
        {
            $db =config ::getConnexion();
            $query = "DELETE from evenement Where ide = '$ide'";
           // $result = mysqli_query($db->connection,$query);
            $result = $db->prepare($query);
            $result->execute();
            return $result;
        }


        // Get Particular Record
        public function get_record($ide)
        {
            $db =config ::getConnexion();
            $sql = "SELECT * from evenement WHERE ide='$ide'";
            //$data = mysqli_query($db->connection,$sql);
            $result = $db->prepare($sql);
            $result->execute();
            return $result;

        }
        public function update()
        {
            $db =config ::getConnexion();

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
            $db =config ::getConnexion();
            $sql = "SELECT  state from  evenement  where ide='$ide'";
            //$result = mysqli_query($db->connection,$sql);
            //$data = mysqli_fetch_assoc($result);
            $result = $db->prepare($sql);
            $result->execute();
            $data=$result->fetch();
            if ($data['state']== 0)
            {
                $x = 1;
            }
            else
            {
                $x = 0;
            }
            $sql = "UPDATE evenement set state = '$x' where ide='$ide'";
           // $result = mysqli_query($db->connection,$sql);
            $result = $db->prepare($sql);
            $result->execute();
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
            $db =config ::getConnexion();
            $sql = "update evenement set titre='$titre' , date_d='$date_d', date_f='$date_f', ids='$ids', nbp='$nbp' , description='$desc', img='$file' where ide='$ide'";
            //$result = mysqli_query($db->connection,$sql);
            $result = $db->prepare($sql);
            $result->execute();
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