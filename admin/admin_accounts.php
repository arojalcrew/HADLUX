<?php

    @include '../components/connect.php';

    session_start();

    $admin_id = $_SESSION['admin_id'];

    if(!isset($admin_id))
    {
        header('location:admin_login.php');
        
    }

    if(isset($_POST['delete']))
    {
        $select_image = $conn->prepare("SELECT * FROM `posts` WHERE admin_id = ?");
        $select_image->execute([$admin_id]);
        $fetch_image = $select_image->fetch(PDO::FETCH_ASSOC);
        if($fetch_image['image'] != '')
        {
            unlink('../uploaded_img/'.$fetch_image['image']);
        }

        $delete_posts = $conn->prepare("DELETE FROM `posts` WHERE admin_id = ?");
        $delete_posts->execute([$admin_id]);

        $delete_comments = $conn->prepare("DELETE FROM `comments` WHERE admin_id = ?");
        $delete_comments->execute([$admin_id]);
        
        $delete_likes = $conn->prepare("DELETE FROM `likes` WHERE admin_id = ?");
        $delete_likes->execute([$admin_id]);

        $delete_admin = $conn->prepare("DELETE FROM `admin` WHERE id = ?");
        $delete_admin->execute([$admin_id]);
        header('location:../components/admin_logout.php');
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
    <title>Konta adminów</title>
</head>
<body>
    
    <?php include '../components/admin_header.php'; ?>

    <section class="accounts">
        <h1 class="heading">Konta administratorów</h1>

        <div class="box-container">
            <div class="box" style="order: -2;">
                <p>Zarejestruj nowego administratora</p>
                <a href="register_admin.php" class="option-btn">Zarejestruj teraz</a>
            </div>
            <?php

                $select_account = $conn->prepare("SELECT * FROM `admin`");
                $select_account->execute();
                if($select_account->rowCount() > 0)
                {
                    while($fetch_accounts = $select_account->fetch(PDO::FETCH_ASSOC))
                    {
                        $count_admin_posts = $conn->prepare("SELECT * FROM `posty` WHERE admin_id = ?");
                        $count_admin_posts->execute([$fetch_accounts['id']]);
                        $total_admin_posts = $count_admin_posts->rowCount();

                ?>
            <div class="box" style="<?php if($fetch_accounts['id'] == $admin_id){echo 'order: -1';} ?>">
                <p>id : <span><?= $fetch_accounts['id']; ?></span></p>
                <p>nazwa użytkownika : <span><?= $fetch_accounts['name']; ?></span></p>
                <p>liczba postów : <span><?= $total_admin_posts; ?></span></p>
                <?php 
                    if($fetch_accounts['id'] == $admin_id)
                    {

                    
                ?>
                <div class="flex-btn">
                <a href="update_profile.php" class="option-btn">Zaktualizuj</a>
                <form action="" method="post">
                    <button type="submit" class="delete-btn" onclick="return confirm('Usunąć konto?')" name="delete">Usuń</button>
                </form>
                </div>
                <?php
                    }
                ?>
            </div>
            <?php
                }
            }
                else
                {
                    echo '<p class="empty">Brak kont administratorów</p>';
                }
            

            ?>
        </div>
    </section>








    <script src="../js/admin_script2.js"></script>
</body>
</html>