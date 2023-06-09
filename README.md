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

## Instalando dependencias de node

Ejecuta el siguiente comando para instalar las dependecias y la carpeta de node_modules

    $ npm install
    
## Creando archivo .env

Crea el archivo .env en la raíz del proyecto, puedes usar el .env.example para crearlo, solo debes copiar y pegar el contenido de .env.example en tu archivo .env

## Generando key para tu proyecto

Luego ejecuta el siguiente comando para generar una key para tu proyecto

    $ php artisan key:generate

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

## Habilitar envios de correo de prueba

Si deseas probar el envió de correos como por ejemplo, el reseteo de contraseña, puede crear una cuenta en MAILTRAP

![image](https://user-images.githubusercontent.com/7317955/232350154-db1c4a54-6f47-4564-a5bf-1bb4ad53edcd.png)

Ve al menú "Inboxes" dentro de "Email Testing" y da click en la tabla de la derecho donde dice "My Inbox"

![image](https://user-images.githubusercontent.com/7317955/232350339-19e31cfa-812d-42e2-b7ff-a9251f916cf6.png)

En el select de "Integrations" selecciona la opción "Laravel 7+" y copia la configuración en tu archivo .env

![image](https://user-images.githubusercontent.com/7317955/232350531-ca4564c6-b79e-41a8-aa30-5d948cce3f98.png)

![image](https://user-images.githubusercontent.com/7317955/232350576-cb763a6c-afb6-4290-b9ad-2cbaed63a6d7.png)

Guarda tu archivo .env y ahora ya podrás hacer pruebas de Email Testing para resetear contraseñas



Una vez haya terminando la creación de las tablas con las migraciones ejecuta el siguiemte comando

    $ npm run dev

Abra una nueva terminal y ejecute el siguiente comonda para visualizar el proyecto

    $ php artisan serve
