<div class="page-body">
    
  <div class="container-xl">
    
    <div class="row row-deck row-cards">
                 
      <div class="col-12">
      
        <div class="row row-cards">
                  
          <?php foreach ($modulos as $obj): ?> 

          <div class="col-sm-6 col-lg-3">
            
            <div class="card card-sm">
              
              <div class="card-body">
                
                <div class="row align-items-center">
                  
                  <div class="col-auto">
                    <span class="bg-primary text-white avatar">
                      <a href="<?php echo $obj->mod_url; ?>" class="btn btn-tabler w-100 btn-icon" aria-label="Tabler">
                        <img src="../../../imagenes/brands/brand-twitter.svg" class="icon" width="24" height="24" alt="Tabler" class="navbar-brand-image">
                      </a>  
                    </span>
                  </div>
                  
                  <div class="col">
                    
                    <div class="font-weight-medium">
                      <?php echo $obj->mod_nom;?>
                    </div>
                    
                    <div class="text-secondary">
                      <?php echo $obj->mod_des;?>
                    </div>
                  
                  </div>
                
                </div>

              </div>

            </div>
           
          </div>

          <?php endforeach; ?> 

        </div>

      </div>

    </div>

  </div>

</div> 

