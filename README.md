# 📌 PruebaPHP

Proyecto de prueba en PHP: creación de un CRUD utilizando el patrón **MVC** (Modelo-Vista-Controlador).

---

## 🔐 Acceso a la aplicación

-   **Usuario**: `usuario`
-   **Contraseña**: `123`

## 🛠️ Tecnologías y herramientas utilizadas

| Herramienta        | Versión | Descripción                                                    |
| ------------------ | ------- | -------------------------------------------------------------- |
| WampServer         | 3.3.0   | Servidor local para entorno PHP/MySQL                          |
| PHP                | 7.4.33  | Lenguaje de programación backend                               |
| Visual Studio Code | 1.76.0  | Editor de código fuente                                        |
| Node.js            | 18.14.2 | Entorno de ejecución JavaScript (servidor)                     |
| Composer           | 2.5.4   | Gestor de dependencias para PHP                                |
| Laravel            | 8.83.27 | Framework PHP utilizado para construir el backend del proyecto |
| Git                | 2.34.1  | Sistema de control de versiones                                |

---

## ⚙️ Comandos útiles

### 📦 Instalación de Laravel

```bash
composer global require laravel/installer
```

-   Crear un proyecto nuevo

```bash
laravel new applaravel
```

### 🚀 Ejecutar el servidor

```bash
php artisan serve
```

### 🔎 Verificar versiones

```bash
node -v                # Ver versión de Node.js
```

```bash
php artisan --version  # Ver versión de Laravel
```

---

## 🔄 Generar modelos desde base de datos (MySQL ➝ Laravel)

Usando el paquete [`reliese/laravel`](https://github.com/reliese/laravel):

```bash
composer require reliese/laravel --dev
```

```bash
php artisan vendor:publish --tag=reliese-models
```

```bash
php artisan config:clear
```

```bash
php artisan code:models
```

---

## 🧩 Creación de controladores

```bash
php artisan make:controller ProProcesoController --resource
```

```bash
php artisan make:controller TipTipoDocController --resource
```

```bash
php artisan make:controller DocDocumentoController --resource
```

---

## 🌐 Puerto de desarrollo

> La aplicación se ejecuta en: [http://127.0.0.1:8000](http://127.0.0.1:8000)
