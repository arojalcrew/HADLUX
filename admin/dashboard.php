<?php

    @include '../components/connect.php';

    session_start();

    $admin_id = $_SESSION['admin_id'];

    if(!isset($admin_id))
    {
        header('location:admin_login.php');
        
    }

?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/admin_style.css">
    <title>Panel administratora</title>
</head>
<body>
    
    <?php include '../components/admin_header.php'; ?>

    <section class="dashboard">

        <h1 class="heading">Panel nawigacyjny</h1>

        <div class="box-container">
            <div class="box">
                <h3>Witaj</h3>
                <p><?= $fetch_profile['name']; ?></p>
                <a href="update_profile.php" class="btn">Zaktualizuj profil</a>
            </div>
            <div class="box">
                <?php 
                
                    $select_posts = $conn->prepare("SELECT * FROM `posty` WHERE admin_id=?");
                    $select_posts->execute([$admin_id]);
                    $number_of_posts = $select_posts->rowCount();

                ?>
                <h3><?= $number_of_posts; ?></h3>
                <p>Ilość dodanych postów</p>
                <a href="add_posts.php" class="btn">Dodaj nowy post</a>
            </div>

            <div class="box">
                <?php 
                
                    $select_active_posts = $conn->prepare("SELECT * FROM `posty` WHERE admin_id=? AND status = ?");
                    $select_active_posts->execute([$admin_id, 'Aktywny']);
                    $number_of_active_posts = $select_active_posts->rowCount();

                ?>
                <h3><?= $number_of_active_posts; ?></h3>
                <p>Aktywne posty</p>
                <a href="view_posts.php" class="btn">Wyświetl posty</a>
            </div>

            <div class="box">
                <?php 
                
                    $select_deactive_posts = $conn->prepare("SELECT * FROM `posty` WHERE admin_id=? AND status = ?");
                    $select_deactive_posts->execute([$admin_id, 'Nieaktywny']);
                    $number_of_deactive_posts = $select_deactive_posts->rowCount();

                ?>
                <h3><?= $number_of_deactive_posts; ?></h3>
                <p>Dezaktywowane posty</p>
                <a href="view_posts.php" class="btn">Wyświetl posty</a>
            </div>


            <div class="box">
                <?php 
                
                    $select_admins = $conn->prepare("SELECT * FROM `admin`");
                    $select_admins->execute();
                    $number_of_admins = $select_admins->rowCount();

                ?>
                <h3><?= $number_of_admins; ?></h3>
                <p>Ilość adminów</p>
                <a href="admin_accounts.php" class="btn">Wyświetl adminów</a>
            </div>
            <div class="box">
                <h3>Przejdź do strony <a class="btn" href="https://hadlux.000webhostapp.com/">HADLUX</a></h3>
            </div>
        </div>
    </section>









    <script src="../js/admin_script2.js"></script>
</body>
</html>