<?php
    require_once 'C:/xampp/htdocs/projet/config.php';
    class produitC {
        public function afficherproduit() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM produit'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function affichercategory() {
            $sql=mysql_query("SELECT category FROM produit");
            if(mysql_num_rows($sql)){
            $select= '<select name="select">';
            while($rs=mysql_fetch_array($sql)){
                  $select.='<option value="'.$rs['id'].'">'.'</option>';
              }
            }
            $select.='</select>';
            echo $select;
        }
        public function getproduitById($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM produit WHERE idpr = :id'
                );
                $query->execute([
                    'id' => $id
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getproduitByTitle($name) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM produit WHERE nom = :name'
                );
                $query->execute([
                    'name' => $name
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function addproduit($produit) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO produit (nom, prix, image, categorie, qtestock) 
                VALUES (:nom, :prix, :image, :categorie, :qtestock)'
                );
                $query->execute([
                    'nom' => $produit->getnom(),
                    'prix' => $produit->getPrix(),
                    'image' => $produit->getImage(),
                    'categorie' => $produit->getcategorie(),
                    'qtestock' => $produit->getqtestock(),

                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function updateproduit($produit, $id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE produit SET nom = :nom, prix = :prix, image = :image, categorie = :categorie, qtestock = :qtestock WHERE idpr = :id'
                );
                $query->execute([
                    'nom' => $produit->getnom(),
                    'prix' => $produit->getPrix(),
                    'image' => $produit->getImage(),
                    'categorie' => $produit->getcategorie(),
                    'qtestock' => $produit->getqtestock(),
                    'id' => $id
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function deleteproduit($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM produit WHERE idpr = :id'
                );
                $query->execute([
                    'id' => $id
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
           /* public function chercherproduitd() {
                try {
                    $pdo = getConnexion();
                    $query = $pdo->prepare(
                        "SELECT * FROM tbl_customer 
	                    WHERE nom LIKE '%".$search."%'
	                    OR prix LIKE '%".$search."%' 
	                    OR categorie LIKE '%".$search."%' "
                    );
                    $query->execute();
                    return $query->fetchAll();
                } catch (PDOException $e) {
                    $e->getMessage();
                }
            }
            $pdo = getConnexion();
            $output = '';
            if(isset($_POST["query"]))
            {
                $search = mysqli_real_escape_string($pdo, $_POST["query"]);
                $query = $pdo->prepare(
                    "SELECT * FROM tbl_customer 
                    WHERE nom LIKE '%".$search."%'
                    OR prix LIKE '%".$search."%' 
                    OR categorie LIKE '%".$search."%' "
                );
            }
            else
            {
                $query = $pdo->prepare(
                    'SELECT * FROM produit'
                    
                );
            }
            $result = mysqli_query($pdo, $query);
            if(mysqli_num_rows($result) > 0)
            {
                $output .= '<div class="table-responsive">
                                <table class="table table bordered">
                                    <tr>
                                        <th>Customer Name</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>Postal Code</th>
                                        <th>Country</th>
                                    </tr>';
                while($row = mysqli_fetch_array($result))
                {
                    $output .= '
                    <p  class="shop-item-title" ><?= $produit['nom'] ?> </p>
                    <strong class="shop-item-price"><?= $produit['prix'] ?> DT</strong>
                    '
                    ;
                }
                echo $output;
            }
            else
            {
                echo 'Data Not Found';
            } */
        public function rechercherproduit($title) {            
            $sql = "SELECT * from produit where nom=:nom"; 
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'titre' => $produit->getnom(),
                ]); 
                $result = $query->fetchAll(); 
                return $result;
            }
            catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function triproduitd() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM produit order by nom ASC'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        
        public function triproduitda() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM produit order by nom DESC'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        

        
    }
    ?>