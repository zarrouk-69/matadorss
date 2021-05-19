<?php
    require_once ('../.././config.php');
    class animalA {
        public function afficherAnimal() {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM animal'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getAnimalById($id) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM animal WHERE idAnimal = :id'
                );
                $query->execute([
                    'id' => $id
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getAnimalByNom($nom) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM animal WHERE nom = :nom'
                );
                $query->execute([
                    'nom' => $nom
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function addAnimal($animal) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO animal (nom, age, image, idSite, descriptionA) 
                VALUES (:nom, :age, :image, :site, :descriptionA)'
                );
                $query->execute([
                    'nom' => $animal->getNom(),
                    'age' => $animal->getAge(),
                    'image' => $animal->getImage(),
                    'site' => $animal->getSite(),
                    'descriptionA' => $animal->getDescriptionA()

                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

         public function updateAnimal($animal, $id) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'UPDATE animal SET nom = :nom, age = :age, image = :image, idSite = :site, descriptionA = :descriptionA,  WHERE idAnimal = :id'
                );
                $query->execute([
                    'nom' => $animal->getNom(),
                    'age' => $animal->getAge(),
                    'image' => $animal->getImage(),
                    'site' => $animal->getSite(),
                    'descriptionA' => $animal->getDescriptionA(),
                    'id' => $id
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function deleteAnimal($id) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM animal WHERE idAnimal = :id'
                );
                $query->execute([
                    'id' => $id
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function rechercherAnimal($nom) {            
            $sql = "SELECT * from animal where nom=:nom"; 
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'nom' => $animal->getNom(),
                ]); 
                $result = $query->fetchAll(); 
                return $result;
            }
            catch (PDOException $e) {
                $e->getMessage();
            }
        }
       public function trierAnimalDesc() {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM animal ORDER BY nom DESC'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function trierAnimal() {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM animal ORDER BY nom'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        
    }
    ?>