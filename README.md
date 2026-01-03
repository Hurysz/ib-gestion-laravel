Sistema de Gestion IB - Laravel 12

Este proyecto forma parte de la semana intensiva de capacitacion en la Corporacion ISGROUP (IB CORP). Consiste en un sistema de gestion de inventario que integra operaciones CRUD con un sistema de autenticacion seguro.

Datos del Proyecto

    Desarrollador: Larsson Fernandez Huaringa.

    Lider a cargo: Arnie Jeampool Adriano Flores.

    Estado: Finalizado al 100% (Funcionalidades de los Dias 1 al 7 completadas).


Funcionalidades Principales

    CRUD de Productos: Gestion completa (crear, listar, editar y eliminar) de la tabla productos en la base de datos db_ib_gestion.

    Autenticacion: Acceso restringido mediante Laravel Breeze, asegurando que solo usuarios registrados puedan gestionar el inventario.

    Layout Base: Organizacion visual mediante plantillas Blade utilizando las directivas @yield y @section.

    Seguridad: Proteccion de rutas administrativas mediante el middleware 'auth' y validacion de formularios con proteccion @csrf.


Instalacion y Ejecucion

    Clonar el repositorio: git clone https://github.com/Hurysz/ib-gestion-laravel.git

    Instalar dependencias de PHP: composer install

    Configurar el archivo de entorno (.env):

        Crear una copia de .env.example y nombrarla .env.

        Configurar los parametros de la base de datos: DB_DATABASE=db_ib_gestion DB_USERNAME=root DB_PASSWORD=
    
    Generar la clave de la aplicacion: php artisan key:generate

    Ejecutar las migraciones: php artisan migrate

    Instalar y compilar dependencias de Frontend: npm install && npm run dev

    Iniciar el servidor local: php artisan serve