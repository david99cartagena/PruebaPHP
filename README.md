# PruebaPHP
Prueba en PHP creacion de un crud con mvc

## Acceso

- Usuario = usuario
- contraseña = 123

## Construido con 🛠️

Herramientas utilizadas

- [WampServer] - version 3.3.0, Servidor Local
- [Php] - version 7.4.33
- [VisualStudioCode] - version 1.76.0, Editor de codigo
- [node.js] - version v18.14.2, Entorno en tiempo de ejecución multiplataforma para la capa del servidor ( en el lado del servidor )
- [Composer] - version 2.5.4, Sistema de gestión de paquetes para programar en PHP
- [Laravel] - version 8.83.27, Framework de Frontend
- [Git] - version 2.34.1, Sistema de control de versiones


Comandos o scripts de apoyo.

```sh
composer global require laravel/installer
```
```sh
laravel new applaravel
```

```sh
php artisan serve
```
```sh
# Version node.js
node -v
```

```sh
# Version de Laravel
php artisan --version
```

Migrar modelo de MySQl a  Laravel...

```sh
#Mas info en https://github.com/reliese/laravel
composer require reliese/laravel --dev
```
```sh
php artisan vendor:publish --tag=reliese-models
```
```sh
#Refrescar cache 
php artisan config:clear
```
```sh
#Creacion modelo y controlador
php artisan code:models
```
```sh
php artisan make:controller ProProcesoController --resource
```
```sh
php artisan make:controller TipTipoDocController --resource
```
```sh
php artisan make:controller DocDocumentoController --resource
```

> puerto por defecto http://127.0.0.1:8000