<header class="navbar navbar-expand-md d-print-none" >
        <div class="container-xl">
          
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href=".">
              <img src="../brands/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
            </a>
          </h1> 
             
          <div class="navbar-nav flex-row order-md-last">
            
             
             
            <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <span class="avatar avatar-sm" style="background-image: url(../avatars/000m.jpg)"></span>
                <div class="d-none d-xl-block ps-2">
                  <div><?php echo $_SESSION["nom_usu"]; echo " "; echo $_SESSION["ape_usu"];?></div>
                  <div class="mt-1 small text-secondary"><?php echo $_SESSION["nom_rol"]; ?></div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <a href="../../controlador/logout_c.php" class="dropdown-item">Logout</a>
              </div>
            </div>
          </div>

        </div>
      </header>