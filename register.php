<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
// sec_session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gestion de Inmobiliaria: Usario Nuevo</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="GGestion de Inmobiliaria Elboss Alicante">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keyword" content="inmobiliaria,elboss,gestion del, inmobiliaria, pisos,alquiler">
        <meta name="auteur" content="ZERROUKI SIFAQES +34658629772" />
        <!-- Java  script -->
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>

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
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body> 
      
<?php if (login_check($mysqli) == true) : ?>


    <div class="container py-3"> 
    <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>



<!-- THEME NUMERO  1 -->
<div class="card bg-light mb-3" >          
        </nav>
        <div class="card-header"><h4><a href="./"><img src="imgs/logo.png" alt="logo"></a>Nuevo Usario</h4></div>
            <div class="card-body text-dark">
                <p class="card-title">
                                        <form method="post" name="registration_form" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>">
                                            Username: <input class="form-control" type='text' name='username' id='username' /><br>
                                            Email: <input  class="form-control" type="text" name="email" id="email" /><br>
                                            Password: <input type="password" class="form-control"
                                                            name="password" 
                                                            id="password"/><br>
                                            Confirm password: <input type="password" class="form-control"
                                                                    name="confirmpwd" 
                                                                    id="confirmpwd" /><br>
                                            <input type="button" class="btn btn-success"
                                                value="Register" 
                                                onclick="return regformhash(this.form,
                                                                this.form.username,
                                                                this.form.email,
                                                                this.form.password,
                                                                this.form.confirmpwd);" /> 
                                        </form>


    </p>
                <p class="card-text">
                <ul>
            <li>Usernames may contain only digits, upper and lower case letters and underscores</li>
            <li>Emails must have a valid email format</li>
            <li>Passwords must be at least 6 characters long</li>
            <li>Passwords must contain
                <ul>
                    <li>At least one upper case letter (A..Z)</li>
                    <li>At least one lower case letter (a..z)</li>
                    <li>At least one number (0..9)</li>
                </ul>
            </li>
            <li>Your password and confirmation must match exactly</li>
            <li><p>Return to the <a href="index.php">login page</a>.</p></li>
        </ul>
                </p>
            </div>
    </div>
</div>

<!-- -------------------------------------------END------------------------------------------------------- -->
</div>
        <?php 

        else : ?>
            <div class="alert alert-danger container d-print-none  mt-2" role="alert">
                No tienes Autorisacion para acceder esta pagina!. Porfavor <a href="index.php">login</a>.
            </div>
            <div class="container py-3">
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="#" class="d-flex align-items-center text-dark text-decoration-none">
      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-lightbulb-fill" viewBox="0 0 16 16"><title>CRM Inmobiliaria </title>
        <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm3 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1-.5-.5z"/>
        </svg>
        <span class="fs-4">&nbsp;&nbsp;&nbsp;CRM Inmobiliarias</span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark text-decoration-none" href="php/precios.php">Enterprise</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="php/precios.php">Supporte</a>
        <a class="py-2 text-dark text-decoration-none" href="php/precios.php">Precios</a>
      </nav>
    </div>

    <div class="pricing-header  pb-md-4 mx-auto text-center">
    <p class="fs-5 text-muted">Mis asesores no hacen seguimiento de los clientes? No estoy contento con mi actual CRM Inmobiliario? Tengo una web idéntica a mi competencia? En la oficina se sigue apuntando cosas en un Excel No sé en qué estado se encuentra cada operación? No tengo comunicación fluida con mis propietarios?Quiero transformar mi agencia para la nueva era digital? </p>
    
<h2 class="display-7 fw-normal">Si algo de esto te suena familiar,necesitas ElBoss Web Soulution &#10003;</h2>
       </div>
  </header>

  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">


      <div class="col container">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Prueba Gratis</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">€0<small class="text-muted fw-light">/ 7dias</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Base de datos &infin;</li>
              <li>Diseño CSS </li>
              <li>PHP-MySql</li>
              <li>Seguridad Alta</li>
            </ul>
            <a href="php/precios.php" type="button" name="prueba" class="w-100 btn btn-lg btn-primary">Pruébalo gratis</a>
          </div>
        </div>
      </div>
      <div class="col container">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Empresas Pro</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">€399<small class="text-muted fw-light"> &infin;</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
            <li>Base de datos &infin;</li>
              <li>Diseño CSS </li>
              <li>PHP-MySql</li>
              <li>Seguridad Alta</li>
            </ul>
            <a href="php/precios.php" type="button" name="pro" class="w-100 btn btn-lg btn-primary">Pide Cita</a>
          </div>
        </div>
      </div>
    </div>

    <h2 class="display-6 text-center mb-4">CRM Elboss Inmobiliaria</h2>

    <div class="table-responsive">
      <table class="table text-center">
        <thead>
          <tr>
            <th style="width: 34%;"></th>

            <th style="width: 22%;">Prueba Gratis <small class="text-dark text-decoration-none">Por 7dias</small></th>
            <th style="width: 22%;">Empresas Pro</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-start">CRM Inmobiliario Completo</th>
            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></td>
            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Protección de base de datos</th>
            
            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></svg></td>
            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></svg></td>
           
          </tr>
        </tbody>

        <tbody>
          <tr>
            <th scope="row" class="text-start">Gestión de usuarios</th>
            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></svg></td>
            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></svg></td>

          </tr>
          <tr>
            <th scope="row" class="text-start">Móvil compatible</th>
            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></td>
            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Unlimited clients e inmuebles</th>
            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></td>
            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Seguridad alta</th>
            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></td>
            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Gestión de peticiones</th>
            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></svg></td>
            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">SEO Posicionamiento en buscadores</th>
            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></svg></td>
            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></svg></td>
          </tr>
        </tbody>
      </table>
    </div>
  </main> 



            
        <?php 
        endif; 
        ?>


    </body>
</html>
