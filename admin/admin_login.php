<?php

    @include '../components/connect.php';

    session_start();

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $pass = sha1($_POST['pass']);
        $pass = filter_var($pass, FILTER_SANITIZE_STRING);

        $select_admin = $conn->prepare("SELECT * FROM `admin` WHERE name = ? AND password = ?");
        $select_admin->execute([$name, $pass]);

        if($select_admin->rowCount() > 0)
        {
            $fetch_admin_id = $select_admin->fetch(PDO::FETCH_ASSOC);
            $_SESSION['admin_id'] = $fetch_admin_id['id'];
            header('location:dashboard.php');
        }
        else
        {
            $message[] = 'Zła nazwa użytkownika lub hasło';
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
    <title>Zaloguj się</title>
</head>
<body style="padding-left: 0;">


    <?php

        if(isset($message))
        {
            foreach($message as $message)
            {
                echo '
                <div class="message">
                    <span>'.$message.'</span>
                    <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
                </div>';
            }
        }

    ?>

    <section class="form-container">
        <form action="" method="POST">
            <h3>Zaloguj się</h3>
            <input type="text" required class="box" placeholder="Nazwa użytkownika" maxlength="255" name="name" oninput="this.value=this.value.replace(/\s/g, '')">
            <input type="password" required class="box" placeholder="Hasło" maxlength="255" name="pass" oninput="this.value=this.value.replace(/\s/g, '')">
            <input type="submit" name="submit" class="btn" value="Zaloguj się">
        </form>
    </section>
  

 








    <script src="../js/admin_script2.js"></script>
</body>
</html>