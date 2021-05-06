<?php
    if(isset($_POST['search'])){
        $search = $_POST['search'];
    }else{
        $search = "";
    }
    if(isset($_POST['idU'])){
        $idU = $_POST['idU'];
        if(isset($_POST['sort'])){
            $sort = $_POST['sort'];
            if(isset($_POST['search'])){
                header("Location: tri.php?idU=$idU&search=$search&sort=$sort");
            }else{
                header("Location: tri.php?idU=$idU&sort=$sort");
            }
        }else{
            if(isset($_POST['search'])){
                header("Location: tri.php?idU=$idU&search=$search");
            }else{
                header("Location: tri.php?idU=$idU");
            }
        }
    }else{
        if(isset($_POST['sort'])){
            $sort = $_POST['sort'];
            if(isset($_POST['search'])){
                header("Location: tri.php?search=$search&sort=$sort");
            }else{
                header("Location: tri.php?sort=$sort");
            }
        }else{
            if(isset($_POST['search'])){
                header("Location: tri.php?search=$search");
            }else{
                header("Location: tri.php");
            }
        }
    }
?>