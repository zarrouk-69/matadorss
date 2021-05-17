<div class="tab-pane fade in active" id="member">
	
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Registered Member</strong>
                            </div>
                            <thead>
                                <tr>
                                    <th style="text-align:center; color:blue;">Name</th>
                                    <th style="text-align:center; color:blue;">Address</th>
                                    <th style="text-align:center; color:blue;">Age</th>
                                    <th style="text-align:center; color:blue;">Email Address</th>
                                    <th style="text-align:center; color:blue;">Gender</th>
                                    <th style="text-align:center; color:blue;">Date Register</th>
                                    <th style="text-align:center; color:blue;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php
							$query=mysqli_query($conn,"select * from reg_member")or die(mysqli_error());
							while($row=mysqli_fetch_array($query)){
							$id=$row['member_id'];
							?>
                              
                           		<tr class="del<?php echo $id ?>">
                                       <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
                                       <td><?php echo $row['address']; ?></td>
                                       <td><?php echo $row['age']; ?></td>
                                       <td><?php echo $row['email']; ?></td>
                                       <td><?php echo $row['gender']; ?></td>
                                       <td><?php echo $row['date']; ?></td>
                                       <td><a  id="<?php echo $id;?>" class="delete_member"><i class="icon-trash"></i>&nbsp;Delete</a></td>
                                </tr>
								<?php } ?>
						 
                            </tbody>
                        </table>
					
					
<script type="text/javascript">
        $(document).ready( function() {
            $('.delete_member').click( function() {
		
                var id = $(this).attr("id");
         
                if(confirm("Are you sure you want to delete this Member?")){
                    $.ajax({
                        type: "POST",
                        url: "delete_member.php",
                        data: ({id: id}),
                        cache: false,
                        success: function(html){
                            $(".del"+id).fadeOut('slow'); 
                        } 
                    }); 
                }else{
                    return false;}
            });				
        });
</script>


</div>