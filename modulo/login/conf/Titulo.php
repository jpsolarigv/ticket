<?php

class Titulo {
    
    // Array de títulos
    private $titulos = [];
  
    // Constructor para inicializar los títulos
    public function __construct() 
    {
    
        // Títulos predeterminados
        $this->titulos = [
            
            //### TITULOS ###//
            't_login' => 'Identificación',
            't_login2' => 'Inicie sesión en su cuenta',

            //### LABEL ###//
            'l_email' => 'Correo Electrónico',
            'l_password' => 'Contraseña',
            
            //### INPUT ###//
            'i_email' => 'tu@correo electrónico.com',
            'i_password' => 'Tu contraseña',
            'i_enviar' => 'si',

            //### BOTONES ###//
            'b_login' => 'Iniciar sesión',
            




            'home' => 'Página Principal',
            'login' => 'Identificación',
            'contact' => 'Contáctanos',
            'about' => 'Acerca de Nosotros',
            'dashboard' => 'Panel de Control',
            'profile' => 'Mi Perfil',
            // Agrega más títulos según sea necesario
        ];

    }


    // Método para obtener el título de una página
    public function getTitle($codigo_titulo) 
    {
        // Verificar si el título existe en el array
        if (isset($this->titulos[$codigo_titulo])) 
        {
            return $this->titulos[$codigo_titulo];
        } 
        else 
        {
            return 'Título no definido';  // Si no existe el título, devolver un valor por defecto
        }
    }

    
}
