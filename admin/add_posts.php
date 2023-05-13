<?php

    @include '../components/connect.php';

    session_start();

    $admin_id = $_SESSION['admin_id'];

    if(!isset($admin_id))
    {
        header('location:admin_login.php');
    }

    if(isset($_POST['publish']))
    {
        $name = $_POST['name'];
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $title = $_POST['title'];
        $title = filter_var($title, FILTER_SANITIZE_STRING);
        $content = $_POST['content'];
        $content = filter_var($content, FILTER_SANITIZE_STRING);
        $category = $_POST['category'];
        $category = filter_var($category, FILTER_SANITIZE_STRING);
        $status = 'Aktywny';

        $image = $_FILES['image']['name'];
        $image = filter_var($image, FILTER_SANITIZE_STRING);
        $image_size = $_FILES['image']['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = '../uploaded_img/'.$image;

        $select_image = $conn->prepare("SELECT * FROM `posty` WHERE image = ? AND admin_id = ?");
        $select_image->execute([$image, $admin_id]);

        if(isset($image))
        {
            if($select_image->rowCount() > 0 AND $image != '')
            {
                $message[] = 'Nazwa zdjęcia się powtarza';
            }
            elseif ($image_size > 200000000)
            {
                $message[] = 'Zdjęcie waży za dużo';
            }
            else
            {
                move_uploaded_file($image_tmp_name, $image_folder);
            }
        }
        else
        {
            $image = '';
        }

        if($select_image->rowCount() > 0 AND $image != '')
        {
            $message[] = 'Zmień nazwę zdjęcia';
        }
        else
        {
            $insert_post = $conn->prepare("INSERT INTO `posty`(admin_id, name, title, content, category, image, status) VALUES(?,?,?,?,?,?,?)");
            $insert_post->execute([$admin_id, $name, $title, $content, $category, $image, $status]);
            header('location:view_posts.php');
            $mesage[] = 'Post został opublikowany.';
        }
    }
    
    if(isset($_POST['draft']))
    {
        $name = $_POST['name'];
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $title = $_POST['title'];
        $title = filter_var($title, FILTER_SANITIZE_STRING);
        $content = $_POST['content'];
        $content = filter_var($content, FILTER_SANITIZE_STRING);
        $category = $_POST['category'];
        $category = filter_var($category, FILTER_SANITIZE_STRING);
        $status = 'Nieaktywny';

        $image = $_FILES['image']['name'];
        $image = filter_var($image, FILTER_SANITIZE_STRING);
        $image_size = $_FILES['image']['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = '../uploaded_img/'.$image;

        $select_image = $conn->prepare("SELECT * FROM `posty` WHERE image = ? AND admin_id = ?");
        $select_image->execute([$image, $admin_id]);

        if(isset($image))
        {
            if($select_image->rowCount() > 0 AND $image != '')
            {
                $message[] = 'Nazwa zdjęcia się powtarza';
            }
            elseif ($image_size > 200000000)
            {
                $message[] = 'Zdjęcie waży za dużo';
            }
            else
            {
                move_uploaded_file($image_tmp_name, $image_folder);
            }
        }
        else
        {
            $image = '';
        }

        if($select_image->rowCount() > 0 AND $image != '')
        {
            $message[] = 'Zmień nazwę zdjęcia';
        }
        else
        {
            $insert_post = $conn->prepare("INSERT INTO `posty`(admin_id, name, title, content, category, image, status) VALUES(?,?,?,?,?,?,?)");
            $insert_post->execute([$admin_id, $name, $title, $content, $category, $image, $status]);
            header('location:view_posts.php');
            $mesage[] = 'Projekt posta został zapisany.';
        }
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
    <title>Dodaj post</title>
</head>
<body>
    
    <?php include '../components/admin_header.php'; ?>

    <section class="post-editor">
        <h1 class="heading">Dodaj post</h1>

        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="name" value="<?= $fetch_profile['name']; ?>">
            <p>Tytuł posta <span>*</span></p>
            <input type="text" maxlength="255" name="title" required placeholder="Dodaj tytuł posta" class="box">
            <p>Zawartosć posta<span>*</span></p>
            <textarea name="content" class="box" required maxlength="10000" placeholder="Wpisz zawartosć..." cols="30" rows="10"></textarea>
            <p>Kategoria posta <span>*</span></p>
            <select name="category" class="box" required>
                <option value="" disabled selected>-- Wybierz kategorię posta</option>
                <option value="Harmonogramy">Harmonogramy</option>
                <option value="Aktualności">Aktualności</option>
                <option value="Przetargi">Przetargi</option>
            </select>
            <p>Zdjęcie posta</p>
            <input type="file" name="image" accept="image/jpg, image/jpeg, image/png, image/webp image/pdf" class="box">
            <div class="flex-btn">
                <input type="submit" value="Opublikuj post" name="publish" class="btn">
                <input type="submit" value="Zapisz projekt" name="draft" class="option-btn">
            </div>
        </form>
    </section>








    <script src="../js/admin_script2.js"></script>
</body>
</html>