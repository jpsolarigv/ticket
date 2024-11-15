<div id="resultado">


</div>



<?php
  if (isset($_GET["m"]))
  {
    switch(base64_decode($_GET["m"]))
    {
      case "1";
?>  
  <div class="alert alert-danger" role="alert">
    El Usuario y/o Contraseña son incorrectos.
  </div>
				  
<?php break;
      case "2"; 
?>
  <div class="alert alert-danger" role="alert">
    Los campos están vacíos.
  </div>
<?php
    break;
  }
}  
?> 