<?php

    @include '../components/connect.php';

    session_start();

    $admin_id = $_SESSION['admin_id'];

    if(!isset($admin_id))
    {
        header('location:admin_login.php');
    }
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $name = filter_var($name, FILTER_SANITIZE_STRING);

        if(!empty($name))
        {
            $select_name = $conn->prepare("SELECT * FROM `admin` WHERE name = ?");
            $select_name->execute([$name]);
            if($select_name->rowCount() > 0) 
            {
                $message[] = 'Nazwa użytkownika jest już zajęta';
            } 
            else
            {
                $update_name = $conn->prepare("UPDATE `admin` SET name = ? WHERE id = ?");
                $update_name->execute([$name, $admin_id]);
                $message[] = 'Nazwa użytkownika zaktualizowana.';
            }
        }

        $empty_pass = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';
        $select_prev_pass = $conn->prepare("SELECT password FROM `admin` WHERE id = ?");
        $select_prev_pass->execute([$admin_id]);
        $fetch_prev_pass = $select_prev_pass->fetch(PDO::FETCH_ASSOC);
        $prev_pass = $fetch_prev_pass['password'];
        $old_pass = sha1($_POST['old_pass']);
        $old_pass = filter_var($old_pass, FILTER_SANITIZE_STRING);
        $new_pass = sha1($_POST['new_pass']);
        $new_pass = filter_var($new_pass, FILTER_SANITIZE_STRING);
        $c_pass = sha1($_POST['c_pass']);
        $c_pass = filter_var($c_pass, FILTER_SANITIZE_STRING);

        if($old_pass != $empty_pass)
        {
            if($old_pass != $prev_pass)
            {
                $message[] =  'Stare hasło się nie zgadza';
            }
            elseif ($new_pass != $c_pass)
            {
                $message[] = 'Hasła się nie zgadzają';
            }
            else
            {
                if($new_pass != $empty_pass)
                {
                    $update_pass = $conn->prepare("UPDATE `admin` SET password = ? WHERE id = ?");
                    $update_pass->execute([$c_pass, $admin_id]);
                    $message[] = 'Hasło zaktualizowane.';
                }
                else
                {
                    $message[] = 'Podaj nowe hasło';
                }
            }
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
    <title>Zaktualizuj profil</title>
</head>
<body>
    
    <?php include '../components/admin_header.php'; ?>

    <section class="form-container">
        <form action="" method="POST">
            <h3>Zaktualizuj profil</h3>
            <input type="text" class="box" placeholder="<?= $fetch_profile['name']; ?>" maxlength="255" name="name" oninput="this.value=this.value.replace(/\s/g, '')">
            <input type="password" class="box" placeholder="Wpisz stare hasło" maxlength="255" name="old_pass" oninput="this.value=this.value.replace(/\s/g, '')">
            <input type="password" class="box" placeholder="Wpisz nowe hasło" maxlength="255" name="new_pass" oninput="this.value=this.value.replace(/\s/g, '')">
            <input type="password" class="box" placeholder="Potwierdź nowe hasło" maxlength="255" name="c_pass" oninput="this.value=this.value.replace(/\s/g, '')">
            <input type="submit" name="submit" class="btn" value="Zaktualizuj profil">
        </form>
    </section>








    <script src="../js/admin_script2.js"></script>
</body>
</html>