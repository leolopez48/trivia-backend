Proyecto de una aplicación de Trivia

## Instalación

### Descargar el proyecto

        git clone https://github.com/leolopez48/trivia-backend

### Instalar las dependencias

        composer install

        npm install

### Archivo de configuración

Copiar y pegar el archivo de configuración de ejemplo `.env.example` y renombrando la copia como `.env`

        cp .env.example .env

Generar la llave única de la aplicación

        php artisan key:generate

Generar la llave única para JWT

        php artisan jwt:secret

(OPCIONAL) Para obtener la documentación completa dentro del IDE

        php artisan ide-helper:generate       

### Crear la base de datos

Crear la base de datos dentro del gestor utilizado, con el nombre indicado en el archivo de configuración `.env` en la variable de entorno `DB_DATABASE`

### Correr las migraciones

        php artisan migrate:fresh --seed

### Iniciar el proyecto

        php artisan serve

        npm run hot
