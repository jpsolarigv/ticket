<?php require_once("../../controlador/titulo_c.php"); ?>  
  
<!doctype html>
<html lang="en">
  
<head>  
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title><?php echo $t_login;?></title>
    <!-- CSS files -->
    <link href="../../../../plantillas/tabler/css/tabler.min.css" rel="stylesheet"/>
</head>
  
<body  class=" d-flex flex-column">
  <div class="page page-center">
    <div class="container container-tight py-4">
      
      <div class="text-center mb-4">
        <a href="." class="navbar-brand navbar-brand-autodark">
          <img src="../brands/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
        </a>
      </div>
     
      <div class="card card-md">
        <div class="card-body">
          <h2 class="h2 text-center mb-4"><?php echo $t_login2;?></h2>

          <div id="resultado"> </div>
          
          <form id="login" action="" method="post" autocomplete="off" novalidate>
          
            <div class="mb-3">
              <label class="form-label"><?php echo $l_email;?></label>
              <input type="email" name="corusu" id="corusu"  class="form-control" placeholder="<?php echo $i_email;?>" autocomplete="off">
            </div>
              
            <div class="mb-2">
                
              <label class="form-label">
                <?php echo $l_password;?> 
                  <span class="form-label-description">
                    <a href="./forgot-password.html">I forgot password</a>
                  </span>
              </label>
                
              <div class="input-group input-group-flat">
                <input type="password" name="pasusu" class="form-control"  placeholder="<?php echo $i_password;?>"  autocomplete="off">
                  <span class="input-group-text">
                    <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                    </a>
                  </span>
              </div>

            </div>
              
            <div class="mb-2">
              <label class="form-check">
                <input type="checkbox" class="form-check-input"/>
                <span class="form-check-label">Remember me on this device</span>
              </label>
            </div>

            <div class="form-footer">
              <input type="hidden" name="enviar" class="form-control" value="<?php echo $i_enviar;?>" >
              <button type="submit" class="btn btn-primary w-100"><?php echo $b_login;?></button>
            </div>
            
          </form>
            
        </div>
        <div class="hr-text">or</div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <a href="#" class="btn w-100">
                  <img src="img/brand-github.svg" width="24" height="24" alt="Tabler" class="icon text-github">
                  Login with Github
                </a>
              </div>
              <div class="col">
                <a href="#" class="btn w-100">
                  <img src="img/brand-twitter.svg" width="24" height="24" alt="Tabler" class="icon text-github">
                  Login with Twitter
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center text-secondary mt-3">
          Don't have account yet? <a href="./sign-up.html" tabindex="-1">Sign up</a>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="../../../../plantillas/jquery/jquery-3.7.1.min.js"></script>
    <script src="index.js"></script>
  </body>
</html>