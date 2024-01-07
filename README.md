# LaravelWebSockets  

Este proyecto es una aplicación de chat desarrollada en Laravel, un framework de PHP que facilita la creación de aplicaciones web robustas y escalables. La aplicación de chat utiliza WebSockets para permitir a los usuarios comunicarse en tiempo real, proporcionando una experiencia de chat fluida y dinámica.

## Pre-Requisitos

- Sistema operativo Window 10
- Postman for Windows Version 10.21.11
- Xampp Version 3.3.0
- MySQL Version 8.0.2
- Laravel Framework 9.52.16
- Visual Studio Code
- Composer version 2.4.4
- NodeJs version 18.12.1


## Instalación

Clonar repositorio 
```bash
git clone https://github.com/WillianAbrego/LaravelWebSockets.git
```
Ingresar al folder
```bash
cd LaravelWebSockets
```
Abrir con visual studio code
```bash
code .
```

Actualizar composer 
```bash
composer install or composer update
```
Copiar archivo .env.example y renombrarlo como .env
```bash
cp .env.example .env
```

Realizar las siguientes configuraciones en archivo .env
 ```
 DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE={name_db}
DB_USERNAME={user_db}
DB_PASSWORD={pass_db}
 ```
Cambiar BROADCAST_DRIVER=log por:

```bash
BROADCAST_DRIVER=pusher
```
Cambiar las variables que actualmente se presentan asi: 
```bash
PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

Por la siguiente configuracion: 
```bash
PUSHER_APP_ID={appid}
PUSHER_APP_KEY={appkey}
PUSHER_APP_SECRET={appsec}
PUSHER_HOST=localhost
PUSHER_PORT=6001
PUSHER_SCHEME=http
PUSHER_APP_CLUSTER=mt1

VITE_PUSHER_APP_ID="${PUSHER_APP_ID}"
VITE_PUSHER_APP_SECRET="${PUSHER_APP_KEY}"
VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```
```bash
php artisan key:generate
```
***
Reiniciar la base de datos de la aplicación Laravel
```bash
php artisan migrate:fresh
```
## Nota:
Asegúrate de haber definido las migraciones necesarias antes de ejecutar este comando. Además, ten en cuenta que este comando eliminará todos los datos actuales de la base de datos.

***

Ejecutar el siguiente comando que se utiliza para instalar las dependencias especificadas en el archivo package.json

```bash
npm install
```

En una consola ejecutar el siguiente comando
```bash
npm run dev
```

Sin cerrar la consola donde se ejecuto el comando anterior abrir una nueva consola para poder iniciar el servidor de desarrollo integrado de Laravel

```bash
 php artisan serve
```

Nuevamente sin cerrar las anteriores consolas abrir una nueva para iniciar el servidor de WebSockets proporcionado por el paquete "Beyond Code Laravel WebSockets".

```bash
php artisan websockets:serve
```
***