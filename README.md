## Instalación del proyecto

IMPORTANTE: Antes de instalar el proyecto debe tener instalado COMPOSER, PHP, MYSQL y APACHE en tu computadora

   https://getcomposer.org/download/
   
Para instalar PHP, MYSQL y APACHE en Windows puedes usar XAMPP, para este proyecto se utilizó esta versión:

    https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.1.17/xampp-windows-x64-8.1.17-0-VS16-installer.exe

## Instalación del código

NOTA: También puede descargar el archivo ZIP del repositorio y descomprimirlo en su computadora y pasar al paso de 
    
    $ composer install

Clone el repositorio

Abra el terminal de su computadora 

Cambie el directorio actual por el deseado, en el cual clonará el proyecto

Ejecute este comando de git para clonar el repo, YOUR-USERNAME corresponde al nombre del dueño del repositorio 
y YOUR-REPOSITORY el nombre del repositorio que clonara

    $ git clone https://github.com/YOUR-USERNAME/YOUR-REPOSITORY
    
Presiona Enter y el repositorio será clonado al directorio de destino

## Instalando dependencias con composer

Luego de haber clonado el repositorio necesitara ejecutar el siguiente comando, dentro de la carpeta del proyecto desde su terminal

    $ composer install

Esto instalara las dependencias necesarias desde composer para el proyecto

## Ejecutar Migraciones de Base de Datos

Luego de instalar las dependencias, asegurate de tener creada en MYSQL la base de datos que usaras, ese nombre se deberá usar en tu archivo .env
que se habrá generado al instalar las dependencias. En caso utilices XAMPP verás estas variables de entorno en tu archivo .env

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nombre_de_tu_bd
    DB_USERNAME=usuario_de_la_bd
    DB_PASSWORD=password_en_caso_tenga_uno
    
Asegurate de tener tu base creada y haber guardado los cambios del archivo .env, a continuación ejecuta el siguiene comando en tu consola:

    $ php artisan migrate
    
Esto ejecutrá las migraciones que hay en el proyecto y creara la tablas automáticamente en tu basde de datos.

Una vez haya terminando la creación de las tablas con las migraciones ejecuta el siguiemte comando

    $ npm run dev

Abra una nueva terminal y ejecute el siguiente comonda para visualizar el proyecto

    $ php artisan serve
