<div class="page-wrapper">
  <div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <div class="page-pretitle"><?php echo $this->descripcion; ?></div>
          <h2 class="page-title"><?php echo $this->titulo;?></h2>  
        </div>
        
        <div class="col-auto ms-auto d-print-none">
          <div class="btn-list">
            
          <!-- PDF -->
          <button id="exportPdfBtn" class="btn btn-export-pdf btn-icon">
            <img src="../iconos/pdf.svg" alt="Icono PDF" width="24" height="24" class="icon"> 
          </button>

          <button id="exportExcelBtn" class="btn btn-export-excel btn-icon">
            <img src="../iconos/excel.svg" alt="Icono PDF" width="24" height="24" class="icon"> 
          </button>

          <button id="printBtn" class="btn btn-export-pdf btn-icon">
            <img src="../iconos/printer.svg" alt="Icono PDF" width="24" height="24" class="icon"> 
          </button>

          <button id="colvisBtn" class="btn-pdf">Mostrar/Ocultar Columnas</button>  

          <!--
          <button id="columnVisibilityBtn" class="btn btn-export- btn-icon">
            <img src="../iconos/eye-plus.svg" alt="Icono PDF" width="24" height="24" class="icon"> 
          </button>
          -->


          <button id="exportCsvBtn" class="btn btn-export- btn-icon">
            <img src="../iconos/csv.svg" alt="Icono PDF" width="24" height="24" class="icon"> 
          </button>


    
    





           <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                    Create new report
            </a>
            
            


            
          </div>
        </div>
      </div>
    </div>
  </div>
  
  