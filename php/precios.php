<?php
require_once'../includes/psl-config.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>CRM ElBoss Inmobiliaria Alicante</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Gestion de Inmobiliaria Elboss Alicante">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keyword" content="inmobiliaria,elboss,gestion,pisos,casas, inmobiliaria, pisos,alquiler">
        <meta name="auteur" content="ZERROUKI SIFAQES +34658629772" />

        <!-- Icon de main:apple windows android -->
        <link rel="icon" href="../icon.png">
        <link rel="shortcut" href="../icon.png">
        <link rel="apple-touche-icon" href="../icon.png">

        <!-- SEO TAG FACEBOOK -->
        <meta property="og:title" content="Gestion de Inmobiliaria Elboss Alicante">
        <meta property="og:description" content="C.Del Alcalde Alfonso de Rojas 3 Local 2 Alicante 03004 Tel 623508417">
        <meta property="og:image" content="..\imgs\logo.png">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="720">
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?php echo  $hostingUrl; ?>">
        <meta property="fb:app_id" content="xxxxxxxxxxxxxxxxxxxx">

        <!-- Bootstrap On line -->
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <header class="container nav-item  mt-4">
    <ul class="nav ">
  <li class="nav-item"> <a class ="nav-link "href="../register.php">
    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="currentColor" class="bi bi-backspace-fill" viewBox="0 0 16 16">
        <path d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z"/>
    </svg>&nbsp;&nbsp;
</a>
  </li>
  <li class=" justify-content-center nav-item">
  <a class="nav-link" href="../register.php">
  <img   src="../imgs/web.png" alt="boss web crm soulution">
    </a>
  </li>
</ul>
    </header>
<main class=" d-print-none container">
        <form method="POST"> 
        <h1 class="h3 mb-3 fw-normal text-center ">Contacto nosotros y piede tu preuba gratis</h1>
        <div class="form-floating">
            <input type="text" class="form-control"  name="name" placeholder="name@example.com">
            <label for="floatingInput">Nombre</label>
        </div>
        <div class="form-floating mt-1">
            <input type="text" class="form-control" name="telefono" placeholder="Password" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
            <label for="floatingPassword">Telefono</label>
        </div>
        <div class="form-floating mt-1">
            <input type="email" class="form-control" name="email" placeholder="Password">
            <label for="floatingPassword">Email</label>
        </div>
        <div class="form-floating mt-1">
            <select class="form-select" name="oferta"  type="submit">
                <option value="Preueba Gratis 7 Dias">Prueba Gratis</option>
                <option value="Empresas Pro ilimitada">Empresas Pro &infin;</option>
                <option value="Una Consulta">Una Consulta</small></option>
                <option value="Suporte">Suporte</small></option>
            </select>
            <label for="floatingPassword">Oferta</label>
        </div>
        <div class="checkbox mb-3 mt-3">
        <label>  
            <div class="col-12 container">
                <div class="p-2">                 
                    <input type="checkbox" value="acepto" name="acepto" required>&nbsp;He leído y acepto <a href="Politica_de_Cookies.php" target="_blank">Política de Cookies</a>&nbsp;y&nbsp;<a href="Proteccion_de_Datos.php" target="_blank">Protección de Datos</a> . 
                </div>
            </div>
            <div class="col-12 container">
                <div class="p-2">                 
                    <input checked type="checkbox" value="1" name="buzzon">&nbsp;Quiero recibir información sobre productos y ofertas que me puedan beneficiar y mi&nbsp;<a href="privacidad.php"  target="_blank">privacidad</a>.
                </div>
            </div>              
        </label>
        </div>
        <button class="w-100 btn btn-lg btn-outline-primary" type="submit" name="EnviarOferta" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                    <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
                    </svg> &nbsp;Enviar la oferta</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2021–2022</p>
        </form>
    </main>
<?php 
        //--------------------------------------------------- ENVIAR OFERTA PHP-------------------------------------
        if(isset($_POST['EnviarOferta'])){
            if (isset($_POST['acepto'])) {
          
                $name = $_POST['name'];
                $tel = $_POST['telefono'];
                $email = $_POST['email'];
                $oferta = $_POST['oferta'];
                $buzzon = $_POST['buzzon'];
                
                $EnviarOferta = $database->prepare("INSERT INTO crm (name,tel,email,oferta,buzzon) 
                VALUES(:name,:tel,:email,:oferta,:buzzon)");
            
                $EnviarOferta->bindParam("name",$name);
                $EnviarOferta->bindParam("tel",$tel);
                $EnviarOferta->bindParam("email",$email);
                $EnviarOferta->bindParam("oferta",$oferta);
                $EnviarOferta->bindParam("buzzon",$buzzon);
        
                // //////////////////EXECUTE DB///////////////////////////////////////////////////////
                if($EnviarOferta->execute()){
                    echo '
                        <div class="container d-print-none"> 
                            <div class="alert alert-success" role="alert">
                            Has Solicitado tu '.$oferta.', Reciberas una respuesta en proximo 24h!
                            </div>
                        </div>
                        ';
                        
                        if (isset($_POST['buzzon'])) {

                                echo '
                                <div class="container d-print-none"> 
                                    <div class="alert alert-success" role="alert"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                  </svg>
                                    Virifica tu buzon de spam, si no te llega un correo electronico al! '.$email.'
                                    </div>
                                </div>';

                                        
                                         //    SCRIPT EMAIL/////////////////////////////////////////////////////////////////////////////////////////////////
                                         // PROTOCOL OF MAIL MAILER
                                        //   **         
                                        require_once '../mail.php';
                                        $mail->addAddress($email);
                                        
                                        // $mail->addAddress('elbossinmobiliaria@gmail.com');
                                        $mail->Subject = "CRM Elboss - Matricular con exito";
                                        $mail->Body = '<img src="'.$hostingUrl.'/imgs/logo.png" alt="">
                                        <p> Hola '.$name.'Has Apuntado en nuestro oferta de '.$oferta.'!</p>
                                        <ul>  
                                            <li>
                                                <p>Email: '.$tel.'</p>
                                            </li> 
                                            <li>
                                                <p>Email: '.$email.'</p>
                                            </li>
                                        </ul>
                                        <p>Gracias Para tu confianza</p>
                                        <a href="'.$hostingUrl.'">Elbossinmobiliaria.es</a>
                                        <a href="tel:+34658629772">Numero de contacto</a>
                                        ';
                                        $mail->setFrom("crm@elbossinmobiliaria.es", "CRM Elboss");
                                        $mail->send();

                                        $fecha =  date("Y-m-d,h:m:s");


                                         //    SCRIPT EMAIL/////////////////////////////////////////////////////////////////////////////////////////////////
                                         // PROTOCOL OF MAIL MAILER
                                        //   **         
                                        require_once '../mail.php';
                                        $mail->addAddress('zs7@gcloud.ua.es');
                                        
                                        // $mail->addAddress('elbossinmobiliaria@gmail.com');
                                        $mail->Subject = "Solicitude de Nueva Empresa";
                                        $mail->Body = '
                                        
                                        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
                                        
                                        sd
                                        <main class="text-center container">
                                        hola Nueva solicitud de Elboss WEB CRM, sus datos son:
                                            <ul>  
                                                <li>
                                                    <p>Nombre de empresa o nombre : '.$name.'</p>
                                                </li> 
                                                <li>
                                                    <p>El telefono: '.$tel.'</p>
                                                </li>  
                                                <li>
                                                    <p>Email : '.$email.'</p>
                                                </li> 
                                                <li>
                                                    <p>Oferta : '.$oferta.'</p>
                                                </li>
                                                <li>
                                                    <p>Buzzon de ofertas : '.$buzzon.'</p>
                                                </li>
                                                <li>
                                                <p>Buzzon de ofertas : '.$fecha.'</p>
                                            </li>
                                            </ul>
                                        </main>
                                        ';
                                        $mail->setFrom("crm@elbossinmobiliaria.es", "CRM Elboss");
                                        $mail->send();
                                        header("location: ../register.php",true);








                 
                                }
            
                    }else{
                    echo '
                        <div class="container d-print-none"> 
                            <div class="alert alert-danger" role="alert">
                                No Puede Pasar una oferta!
                            </div>
                        </div> 
                        ';
                    }
            }else {
                echo '
                <div class="container d-print-none"> 
                    <div class="alert alert-danger" role="alert">
                    Por Favor leer y acepta la Protección de Datos y nuestra privacidad!
                    </div>
                </div> 
                ';
            }

        }
        ?>
</body>
</html>