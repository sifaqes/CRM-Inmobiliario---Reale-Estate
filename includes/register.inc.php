<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Gestion de Inmobiliaria Elboss Alicante - Registracion de  nuevo usario</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="GGestion de Inmobiliaria Elboss Alicante">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="inmobiliaria,elboss,gestion del, inmobiliaria, pisos,alquiler">
    <meta name="auteur" content="ZERROUKI SIFAQES +34658629772" />

<!-- Icon de main:apple windows android -->
    <link rel="icon" href="icon.png">
    <link rel="shortcut" href="icon.png">
    <link rel="apple-touche-icon" href="icon.png">

<!-- SEO TAG FACEBOOK -->
    <meta property="og:title" content="Gestion de Inmobiliaria Elboss Alicante">
    <meta property="og:description" content="C.Del Alcalde Alfonso de Rojas 3 Local 2 Alicante 03004 Tel 623508417">
    <meta property="og:image" content="imgs\logo.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="720">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://crm.elbossinmobiliaria.com">
    <meta property="fb:app_id" content="xxxxxxxxxxxxxxxxxxxx">

    <!-- Bootstrap On line -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container py-3">    

    <?php

    include_once 'db_connect.php';
    include_once 'psl-config.php';



    $error_msg = "";

    if (isset($_POST['username'], $_POST['email'], $_POST['p'])) {
        // Sanitize and validate the data passed in
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Not a valid email
            $error_msg .= '<p class="error">The email address you entered is not valid</p>';
        }
        
        $password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
        if (strlen($password) != 128) {
            // The hashed pwd should be 128 characters long.
            // If it's not, something really odd has happened
            $error_msg .= '<p class="error">Invalid password configuration.</p>';
        }

        // Username validity and password validity have been checked client side.
        // This should should be adequate as nobody gains any advantage from
        // breaking these rules.
        //
        
        $prep_stmt = "SELECT id FROM members WHERE email = ? LIMIT 1";
        $stmt = $mysqli->prepare($prep_stmt);
        
        if ($stmt) {
            $stmt->bind_param('s', $email);
            $stmt->execute();
            $stmt->store_result();
            
            if ($stmt->num_rows == 1) {
                // A user with this email address already exists
                $error_msg .= '<p class="error">A user with this email address already exists.</p>';
            }
        } else {
            $error_msg .= '<p class="error">Database error</p>';
        }
        
        // TODO: 
        // We'll also have to account for the situation where the user doesn't have
        // rights to do registration, by checking what type of user is attempting to
        // perform the operation.

        if (empty($error_msg)) {
            // Create a random salt
            $random_salt = hash('sha512', uniqid(openssl_random_pseudo_bytes(16), TRUE));
            $ROLE = 'USExR';

            // Create salted password 
            $password = hash('sha512', $password . $random_salt);

            // Insert the new user into the database 
            if ($insert_stmt = $mysqli->prepare("INSERT INTO members (username, email, password, salt) VALUES (?, ?, ?, ?)")){
                $insert_stmt->bind_param('ssss', $username, $email, $password, $random_salt);

                // Execute the prepared query.
                if (! $insert_stmt->execute()) {
                    header('Location: ../error.php?err=Registration failure: INSERT');
                    exit();
                }
            }


            echo'
            <h1>Registro exitoso!</h1>
            <div class="alert alert-success" role="alert">
                Ahora puede volver a la <a href="index.php">página de inicio de sesión</a> e iniciar sesión
            </div>
            ';
            // header('Location: ./register_success.php');
            header('Location: '.$hostingUrl.'register_success.php');
            // header("Refresh:2; url=./register_success.php");
            exit();
        }
    }

    ?>

</div>
</body>
</html>