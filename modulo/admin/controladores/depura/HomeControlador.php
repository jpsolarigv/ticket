<?Php
require_once 'BaseControlador.php';

class HomeControlador extends BaseController {
    public function index() {
        // Datos que necesitas pasar a la vista
        $title = "Inicio";
        $username = "Juan Pérez";  
   
        // Incluir las vistas
        include __DIR__ . '/../vista/header.php';
        include __DIR__ . '/../vista/home.php';
        include __DIR__ . '/../vista/footer.php';
    }
}