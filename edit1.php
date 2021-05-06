
<?php 
    require_once('./config/dbconfig.php'); 
    $db = new event();
    $db->update();
    $id = $_GET['U_ID'];
    $result = $db->get_record($id);
    $data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Crud Operation </title>
</head>
<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2> Update Record </h2>
                    </div>
                        <?php $db->update(); ?>
                        <div class="card-body">
                            <form method="POST">

                                <input type="hidden" name="ide" value="<?php echo $data['ide']; ?>">
                                <input type="text" name="titre"  class="form-control mb-2" required value="<?php echo $data['titre']; ?>">
                                <input type="date" name="date_d"  class="form-control mb-2" required value="<?php echo $data['date_d']; ?>">
                                <input type="date" name="date_f"  class="form-control mb-2" required value="<?php echo $data['date_f']; ?>">
                                <input type="text" name="nbp"  class="form-control mb-2" required value="<?php echo $data['nbp']; ?>">
                                <input type="text" name="ids"  class="form-control mb-2" required value="<?php echo $data['ids']; ?>">
                                <input type="text" name="desc"  class="form-control mb-2" required value="<?php echo $data['description']; ?>">
                                <input type="file" name="file"  class="form-control mb-2" required value="<?php echo $data['img']; ?>">
                        </div>
                    <div class="card-footer">
                            <button class="btn btn-success" name="btn_update"> Update </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>