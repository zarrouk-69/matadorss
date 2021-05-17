<?php
	

	include "../controller/userC.php";
	$user1C = new UtilisateurC();
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Veni Vidi</title>
		<link rel="stylesheet" type="text/css" href="../stylesheet.css">
	</head>

	<body>
		
		<?php 
			if(isset($_GET['search'])){
		        $search = $_GET['search'];
		    }else{
		        $search = "";
		    }
		    if(isset($_GET['sort'])){
		        $sort = $_GET['sort'];
		    }else{
		        $sort = "";
		    }
		    if(isset($_GET['idU'])){
		        $idU = $_GET['idU'];
		    }else{
		        $idU = "";
		    }
		   	$liste = $user1C->afficheruserParam($idU, $search, $sort);    
		?>
		<table class="productTable">
			<tr>
				<td class="left" align="center" valign="top">
					<table style="margin-bottom: 120px">
						<tr>
							<td style="padding-bottom: 13px;">
								<label class="prTitle">SEARCH</label>
							</td>
						</tr>
						<tr>
							<td>
								<form class="searchBar" method="POST" action="updateProductList.php">
									<table style="width: 100%; height: 100%;border-collapse: collapse;">
										<tr>
											<td class="searchLeft">
												<input type="search" placeholder="Search user..." class="search" name="search" value="<?php if(isset($_GET['search'])){ echo $_GET['search']; }?>">
											</td>
											<td class="searchRight">
												<?php 
													if(isset($_GET['sort'])){
												?>
												<input type="hidden" name="sort" value="<?php echo $_GET['sort']?>">
												<?php 
													}
												?>
												<?php 
													if(isset($_GET['idU'])){
												?>
												<input type="hidden" name="idU" value="<?php echo $_GET['idU']?>">
												<?php 
													}
												?>
												<input type="submit" class="searchBtn" value="🔍" name="searchButton">
											</td>
										</tr>
									</table>	
								</form>
							</td>
						</tr>
							<tr>
							<td style="padding-bottom: 5px;"><br><br>
								<label class="prTitle">PRODUCT CATEGORIES</label>
							</td>
						</tr>	
						<?php 
							$listeuser = $user1C->afficherUtilisateurs();
							foreach($listeuser as $row){
							?>
							<tr>
								<td style="padding-top: 8px;">
									<form method="POST" action="tri.php?idU=<?php echo $row['idU'];?>">
							            <a href="tri.php?idU=<?php echo $row['idU'];?>" class="categorie" <?php $cr=0; if(isset($_GET['idU'])){if($row['idU'] == $_GET['idU']){echo 'idU="currCat"'; $cr=1;}} ?>><?php echo $row['nomU']; if($cr==1){echo " &nbsp; &nbsp;◀";}?></a>
							            <input type="hidden" value="<?php echo $row['idU']; ?>" name="idU">
						            </form>		
								</td>
							</tr>
						<?php 
						}
						?>
							<td><br>
								<form method="POST" id="formSort" action="updateProductList.php">
									<?php
										if(isset($_GET['sort'])){
											$s = $_GET['sort'];
										}else{
											$s = 0;
										}
									?>
									<select class="sortBox" name="sort" onchange="document.getElementById('formSort').submit()">
										<option value="0" <?php if($s == 0){echo 'selected="selected"';}?>>--</option>
										<option value="1" <?php if($s == 1){echo 'selected="selected"';}?>>Price: Low to High</option>
										<option value="2" <?php if($s == 2){echo 'selected="selected"';}?>>Price: High to Low</option>
										<option value="3" <?php if($s == 3){echo 'selected="selected"';}?>>Label: Alphabetical</option>
										
									
									</select>
									<?php 
										if(isset($_GET['idU'])){
									?>
									<input type="hidden" name="idU" value="<?php echo $_GET['idU']?>">
									<?php 
										}
									?>
									<?php 
										if(isset($_GET['search'])){
									?>
									<input type="hidden" name="search" value="<?php echo $_GET['search']?>">
									<?php 
										}
									?>
								</form>
							</td>
						</tr>
					</table>
				
				</td>
			</tr>
		</table>	
			</body>
</html>