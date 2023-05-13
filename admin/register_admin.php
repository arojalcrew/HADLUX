<?php

    @include '../components/connect.php';

    session_start();

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $pass = sha1($_POST['pass']);
        $pass = filter_var($pass, FILTER_SANITIZE_STRING);
        $cpass = sha1($_POST['cpass']);
        $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

        $select_admin = $conn->prepare("SELECT * FROM `admin` WHERE name = ?");
        $select_admin->execute([$name]);

        if($select_admin->rowCount() > 0){
        
           $message[] = "Użytkownik już istnieje";
        }else{

            if($pass != $cpass){
            
                $message[] = 'Hasła się nie zgadzają';
            }
            else{
            
                $insert_admin = $conn->prepare("INSERT INTO `admin`(name, password) VALUES (?,?)");
                $insert_admin->execute([$name, $cpass]);
                $message[] = 'Nowy admin zarejestrowany';
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
    <title>Zarejestruj się</title>
</head>
<body>
    
    <?php include '../components/admin_header.php'; ?>

 
    <section class="form-container">
        <form action="" method="POST">
            <h3>Zarejestruj się</h3>
            <input type="text" required class="box" placeholder="Nazwa użytkownika" maxlength="255" name="name" oninput="this.value=this.value.replace(/\s/g, '')">
            <input type="password" required class="box" placeholder="Hasło" maxlength="255" name="pass" oninput="this.value=this.value.replace(/\s/g, '')">
            <input type="password" required class="box" placeholder="Potwierdź hasło" maxlength="255" name="cpass" oninput="this.value=this.value.replace(/\s/g, '')">
            <input type="submit" name="submit" class="btn" value="Zarejestruj się">
        </form>
    </section>







    <script src="../js/admin_script2.js"></script>
</body>
</html>