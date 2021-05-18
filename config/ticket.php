

<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>
 
<script>  

     function sendmail(email){
    
			
			//var email = $('#Sender').val();
            //var email = document.getElementById('sender');
            //document.write(email);
           // email = document.getElementById('sender');
			//var subject = "Thank you for purchasing the ticket from us ";
      //var message = $('#Message').val();
      
      
      
			// var body = $('#body').val();

			var Body='<br><h1><center> Ticket Purchased </center></h1> <br><br>  <p><h2> Thank you for purchasing the ticket from  us im sure that u wont  regret it   make sure  to print this email  to  enter  the event </p> <br> <br> <br> <img src= "https://i.ibb.co/307NQnC/thank-you-page-examples.jpg">';
			//console.log(name, phone, email, message);

			Email.send({
                SecureToken:"057d2ee8-dd9e-4aa0-b00f-8d5d01dba748",
				To: email,
				From: "ksaay2000@gmail.com",
				Subject: "[Ticket Purchased]",
				Body: Body
			}).then(
				message =>{
					//console.log (message);
					if(message=='OK'){
					alert('Your mail has been send. Thank you for connecting.');
					}
					else{
						console.error (message);
						alert('There is error at sending message. ')
						
					}

				}
			);



		}


    </script>
 </script>

<?php 

    
    //require_once('./config/dbconfig.php');
    require_once('dbconfig.php');
    $db = new config();

    class ticket extends config
    {
        // Insert Record in the Database
        public function Store_Record()
        {
            
            $db2 = new ticket();
            $db1= new event();
            if(isset($_POST['btn_save']))
            {
                $captcha_code = $_POST['captcha_code'];
                if($_SESSION['code_confirmation'] != $captcha_code){
                    ?>
                    <script type="text/javascript">
                    alert('Entered Captcha Code did not match.');
                    
                    <?php
                    if(isset($_GET['T_IDE']))
                    {
                        ?>
                        window.location="front_ticket.php?T_IDE=<?php echo($_GET['T_IDE']) ?>";
                        </script>
                        <?php
                    }      
                }
              
                   
                   

            
                else
                {

                if(isset($_GET['T_IDE']))
            {   


                $ide = $_GET['T_IDE']; 
                $idp = $_POST['idp'];
                if($db1->get_nbp($ide)- $db2->search_by_event($ide)> 0)
                {

                if($this->insert_record($ide,$idp))
                {
                    echo '<div class="alert alert-success"> Your Ticket Has Been Added :) </div>';
                    $sender =  $db->check($_POST['sender']);
                    ?>
                    
                    <script>
                        var email = <?php echo json_encode($sender); ?>;
                    sendmail(email);
                    </script>
                    <?php
                    
                }
                else
                {
                    echo '<div class="alert alert-danger"> Failed  no more places available in the event </div>';
                }
                }
                else
                {
                    echo '<div class="alert alert-danger"> FULL </div>';
                }
                
                
            }
        }
            
        
            
        }
       
        }
        
        function search_by_event($ide)
        {
            
            $db =config ::db_connect();
           $sql = "SELECT *  from ticket WHERE ide='$ide'";
           
           $result = $db->prepare($sql);
           $result->execute();
           $count=$result->rowCount();
           
               return $count;
           
           
        }
        public function update_act($idt)
        {
            $db =config ::db_connect();
            $sql = "SELECT  state from  ticket  where idt='$idt'";
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
            $sql = "UPDATE ticket set state = '$x' where idt='$idt'";
            $result = $db->prepare($sql);
            if($result->execute())
            {
                return true;
                
            }
            else
            {
                return false;
                
            }
        }
        function total_tickets($x)
        {
            
            $db =config ::db_connect();
           //$db1 = new ticket();

           if ($x == 0 )
           {
           $sql = "SELECT *   from ticket ";
           $result = $db->prepare($sql);
           $result->execute();
           $count=$result->rowCount();
               return $count;
           }
           if ($x == 1 )
           {
            $query = "SELECT *  from ticket where state = 1 ";
            $result = $db->prepare($query);
            $result->execute();
           $count=$result->rowCount();
           
               return $count;
           
           }
           if ($x == 2 )
           {
            $query = "SELECT * from ticket where state = 0 ";
            $result = $db->prepare($query);
           $result->execute();
           $count=$result->rowCount();
           
               return $count;
           
           }
           
           
           
        }
      // Insert Record in the Database Using Query    
        function insert_record($ide,$idp)
        {
            $db =config ::db_connect();
            $db1 = new event();
            if($this->search_by_event($ide)>=0)
            
            {
            
            $query = "insert into ticket (ide,idp) values('$ide','$idp')";
            $result = $db->prepare($query);
           

            if($result->execute())
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
            $db =config ::db_connect();
            
                
            if(isset($_POST['btn_filter']))
            {
                $idt = $_POST['idt'];
                $datea =$_POST['datea'];
                $idp = $_POST['idp'];
                $ide = $_POST['ide'];
                $idu = $_POST['idu'];
                $state = $_POST['state'];
               
                
                if( isset($idt) || isset($datea) || isset($idp) || isset($ide) || isset($idu) || isset($state))
                {
                    $query = $this->search_record($idt,$datea,$idp,$ide,$idu,$state);
                   
                    echo '<div class="alert alert-success"> Your Records Has Been filtred :) </div>';
                }
                else
                {
                    
                    echo '<div class="alert alert-danger"> Failed </div>';
                    return false;
                }
                
            }
            else
            {
                
        if(isset($_GET['ASC_IDT']))
        {
            $query = "SELECT idt , datea , ticket.ide , idp , evenement.titre , ticket.state   FROM ticket  INNER JOIN  evenement  on evenement.ide = ticket.ide order by  idt asc";
        }
        if(isset($_GET['DESC_IDT']))
        {
            $query = "SELECT idt , datea , ticket.ide , idp , evenement.titre , ticket.state   FROM ticket  INNER JOIN  evenement  on evenement.ide = ticket.ide order by  idt desc";
        }
        if(isset($_GET['ASC_DATEA']))
        {
            $query = "SELECT idt , datea , ticket.ide , idp , evenement.titre , ticket.state   FROM ticket  INNER JOIN  evenement  on evenement.ide = ticket.ide order by  datea asc";
        }
        if(isset($_GET['DESC_DATEA']))
        {
            $query = "SELECT idt , datea , ticket.ide , idp , evenement.titre , ticket.state   FROM ticket  INNER JOIN  evenement  on evenement.ide = ticket.ide order by  datea desc";
        }
        if(isset($_GET['ASC_IDE']))
        {
            $query = "SELECT idt , datea , ticket.ide , idp , evenement.titre , ticket.state   FROM ticket  INNER JOIN  evenement  on evenement.ide = ticket.ide order by  ide asc";
        }
        if(isset($_GET['DESC_IDE']))
        {
            $query = "SELECT idt , datea , ticket.ide , idp , evenement.titre , ticket.state   FROM ticket  INNER JOIN  evenement  on evenement.ide = ticket.ide order by  ide desc";
        }
        if(isset($_GET['ASC_IDP']))
        {
            $query = "SELECT idt , datea , ticket.ide , idp , evenement.titre , ticket.state   FROM ticket  INNER JOIN  evenement  on evenement.ide = ticket.ide order by  idp asc";
        }
        if(isset($_GET['DESC_IDP']))
        {
            $query = "SELECT idt , datea , ticket.ide , idp , evenement.titre , ticket.state   FROM ticket  INNER JOIN  evenement  on evenement.ide = ticket.ide order by  idp desc";
        }
        if(isset($_GET['ASC_TITLE']))
        {
            $query = "SELECT idt , datea , ticket.ide , idp , evenement.titre , ticket.state   FROM ticket  INNER JOIN  evenement  on evenement.ide = ticket.ide order by E.titre asc ";
        }
        if(isset($_GET['DESC_TITLE']))
        {
            $query = "SELECT idt , datea , ticket.ide , idp , evenement.titre , ticket.state   FROM ticket  INNER JOIN  evenement  on evenement.ide = ticket.ide order by E.titre desc";
        }
        
        if (empty($query))
        {
            $query = "SELECT idt , datea , ticket.ide , idp , evenement.titre , ticket.state   FROM ticket  INNER JOIN  evenement  on evenement.ide = ticket.ide";
        }
                
                
            }
            $result = $db->prepare($query);
             $result->execute();
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
                    $query = "SELECT idt , datea , ticket.ide , idp , evenement.titre , ticket.state   FROM ticket  INNER JOIN  evenement  on evenement.ide = ticket.ide WHERE idt = '$idt'";
                }
                else
                {
                    if($datea != '' )
                    {
                        $query = "SELECT idt , datea , ticket.ide , idp , evenement.titre , ticket.state   FROM ticket  INNER JOIN  evenement  on evenement.ide = ticket.ide  WHERE datea = '$datea'"; 
                    }
                    else
                    {
                    if( $idp != '')
                {
                    $query = "SELECT idt , datea , ticket.ide , idp , evenement.titre , ticket.state   FROM ticket  INNER JOIN  evenement  on evenement.ide = ticket.ide WHERE idp = '$idp'";
                }
                else
                {
                    if( $ide != '' )
                {
                    $query = "SELECT idt , datea , ticket.ide , idp , evenement.titre , ticket.state   FROM ticket  INNER JOIN  evenement  on evenement.ide = ticket.ide WHERE ide = '$ide'";
                }
                else
                {
                    if( $ids != '')
                {
                    $query = "SELECT idt , datea , ticket.ide , idp , evenement.titre , ticket.state   FROM ticket  INNER JOIN  evenement  on evenement.ide = ticket.ide WHERE ids = '$ids'";
                }
                
                else
                {
                    if( $state != '')
                {
                    $query = "SELECT idt , datea , ticket.ide , idp , evenement.titre , ticket.state   FROM ticket  INNER JOIN  evenement  on evenement.ide = ticket.ide WHERE state = '$state'";
                }
                else
                {
                    $query = "SELECT idt , datea , ticket.ide , idp , evenement.titre , ticket.state   FROM ticket  INNER JOIN  evenement  on evenement.ide = ticket.ide";
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
            $db =config ::db_connect();
            $query = "DELETE from ticket Where idt = '$idt'";
            //$result = mysqli_query($db->connection,$query);
            $result = $db->prepare($query);
           
            return $result->execute();
        }


        // Get Particular Record
        public function get_record($idt)
        {
            $db =config ::db_connect();
            $sql = "SELECT * from ticket WHERE idt='$idt'";
            //$data = mysqli_query($db->connection,$sql);
            $result = $db->prepare($sql);
            $result->execute();

            return $result;

        }
        public function update()
        {
            $db =config ::db_connect();
            $db1= new event();
            if(isset($_POST['btn_update']))
            {
                
                $IDT = $_POST['idt'];
                $DATEA =$_POST['datea'];
                $IDP = $_POST['idp'];
                $IDE = $_POST['ide'];
                //$IDU = $_POST['idu'];
                $IDU =0;
                //$STATE = $_POST['state'];
               
                if($db1->get_nbp($IDE)- $this->search_by_event($IDE)> 0)
                {
                    if($this->update_record($IDT,$DATEA,$IDP,$IDE,$IDU))
                    {
                        $this->set_messsage('<div class="alert alert-success"> Your Record Has Been Updated : )</div>');
                        
                    }
                    else
                    {   
                        $this->set_messsage('<div class="alert alert-success"> Something Wrong : )</div>');
                    }
                }
                else
                {
                    $this->set_messsage('<div class="alert alert-danger"> the event is already full : )</div>');
                    header("location:back_ticket.php");
                }

               
            } 
        }
       

 // Update Function 2
        public function update_record($idt,$datea,$idp,$ide,$idu)
        {
            $db =config ::db_connect();
            $sql = "update ticket set  datea='$datea', idp='$idp', ide='$ide', idu='$idu' where idt='$idt'";
           
            $result = $db->prepare($sql);
            
            if($result->execute())
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