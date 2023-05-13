<?php

    @include '../components/connect.php';

    session_start();
    
    $admin_id = $_SESSION['admin_id'];

    if(!isset($admin_id))
    {
        header('location:admin_login.php');
    };


    $get_id = $_GET['post_id'];

    if(isset($_POST['delete']))
    {
        $delete_id = $_GET['post_id'];
        $delete_id = filter_var($delete_id, FILTER_SANITIZE_STRING);
        $select_image = $conn->prepare("SELECT * FROM `posty` WHERE id = ?");
        $select_image->execute([$delete_id]);
        $fetch_image = $select_image->fetch(PDO::FETCH_ASSOC);
        if($fetch_image['image'] != '')
        {
            unlink('../uploaded_img/'.$fetch_image['image']);
        }

        $delete_post = $conn->prepare("DELETE FROM `posty` WHERE id = ?");
        $delete_post->execute([$delete_id]);
        $message[] = 'Post usunięty.';
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
    <title>Czytaj post</title>
</head>
<body>
    
    <?php include '../components/admin_header.php'; ?>

    <section class="read-post">

        <h1 class="heading">Czytaj post</h1>

    <?php
                $select_posts = $conn->prepare("SELECT * FROM `posty` WHERE id = ? AND admin_id=?");
                $select_posts->execute([$get_id, $admin_id]);
                if($select_posts->rowCount() > 0)
                {
                    while($fetch_post = $select_posts->fetch(PDO::FETCH_ASSOC))
                    {
                        $post_id = $fetch_post['id'];
                
            ?>
            <form action="" method="post" class="box">   
                <div class="status" style="background: <?php if($fetch_post['status'] == 'Aktywny'){echo 'limegreen';}else{echo'coral';} ?>;"><?= $fetch_post['status']; ?></div>
                <?php
                
                    if($fetch_post['image'] != '')
                    {
                    
                ?>
                <img src="../uploaded_img/<?= $fetch_post['image'] ?>" class="image" alt="">
                <?php

                    }                    

                ?>
            
                <div class="post-title"><?= $fetch_post['title']; ?></div>
                <div class="post-content"><?= $fetch_post['content']; ?></div>
                <div class="flex-btn">
                    <a href="edit_post.php?post_id=<?= $post_id; ?>" class="option-btn">Edytuj</a>
                    <button type="submit" name="delete" onclick="return confirm('Usunąć ten post?');" class="delete-btn">Usuń</button>
                </div>
                <div class="post-category"><i class="fas fa-tag"></i><span> <?= $fetch_post['category']; ?></span></div>
            </form>
            <?php
                }
            } 
                else
                {
                    echo '<p class="empty">Brak dodanych postów</p>';
                }

            ?>


    </section>






    <script src="../js/admin_script2.js"></script>
</body>
</html>