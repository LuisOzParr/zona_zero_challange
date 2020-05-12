# Live demo

http://zona-zero-challenge.herokuapp.com/

# Características

1. Usuarios
    * Registro
    * Inicio de sesión
    * Ver perfil
    * Editar
    * Eliminar cuenta (Desactivar)
3. Empresas
    * Creación de empresas
    * Listado de empresas
    * Edición de empresas
    * Eliminación de empresas


# Installation

1. Run  `composer install`

2. Rename `.env.example` to `.env` and configure environment variables.

3. Use this command `php artisan key:generate` to generate APP_KEY

4. Create new db and config environment variables. Example:
    
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=homestead
        DB_USERNAME=homestead
        DB_PASSWORD=secret

5. Now run `php artisan serv` to run server 