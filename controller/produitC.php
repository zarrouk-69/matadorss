<?php
    require_once 'C:/xampp/htdocs/integration/config.php';
    class produitC {
        public function afficherproduit() {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM produit'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function afficherproduitcat() {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT DISTINCT categoriePr FROM produit'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function getproduitById($id) {
            try {
                $pdo =config::getConnexion();
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
        public function recherchecategrie($categoriePr) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM produit WHERE categoriePr = :categoriePr'
                );
                $query->execute([
                    'categoriePr' => $categoriePr
                ]);
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getproduitByTitle($name) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM produit WHERE nomPr = :name'
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
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO produit (nomPr, prixPr, imagePr, categoriePr, qtestockPr) 
                VALUES (:nomPr, :prixPr, :imagePr, :categoriePr, :qtestockPr)'
                );
                $query->execute([
                    'nomPr' => $produit->getnomPr(),
                    'prixPr' => $produit->getprixPr(),
                    'imagePr' => $produit->getimagePr(),
                    'categoriePr' => $produit->getcategoriePr(),
                    'qtestockPr' => $produit->getqtestockPr(),

                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function updateproduit($produit, $id) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'UPDATE produit SET nomPr = :nomPr, prixPr = :prixPr, imagePr = :imagePr, categoriePr = :categoriePr, qtestockPr = :qtestockPr WHERE idpr = :id'
                );
                $query->execute([
                    'nomPr' => $produit->getnomPr(),
                    'prixPr' => $produit->getprixPr(),
                    'imagePr' => $produit->getimagePr(),
                    'categoriePr' => $produit->getcategoriePr(),
                    'qtestockPr' => $produit->getqtestockPr(),
                    'id' => $id
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function deleteproduit($id) {
            try {
                $pdo = config::getConnexion();
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
	                    WHERE nomPr LIKE '%".$search."%'
	                    OR prixPr LIKE '%".$search."%' 
	                    OR categoriePr LIKE '%".$search."%' "
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
                    WHERE nomPr LIKE '%".$search."%'
                    OR prixPr LIKE '%".$search."%' 
                    OR categoriePr LIKE '%".$search."%' "
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
                    <p  class="shop-item-title" ><?= $produit['nomPr'] ?> </p>
                    <strong class="shop-item-price"><?= $produit['prixPr'] ?> DT</strong>
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
            $sql = "SELECT * from produit where nomPr=:nomPr"; 
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'titre' => $produit->getnomPr(),
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
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM produit order by nomPr ASC'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        
        public function triproduitda() {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM produit order by nomPr DESC'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        

        
    }
    ?>