# API PHP y MySQL

Una aplicación sencilla para gestionar datos almacenados en una base de datos MySQL mediante una API desarrollada en PHP. Este proyecto permite consultar, procesar y devolver datos en formato JSON, facilitando su integración con aplicaciones web o móviles.

## Características
- Conexión segura a MySQL utilizando PDO.
- API para consultar datos en formato JSON.
- Diseño modular para facilitar la personalización y extensión.

## Requisitos Previos
- PHP 7.4 o superior.
- Servidor web compatible (Apache o Nginx).
- MySQL (versión 5.7 o superior recomendada).
- Composer (opcional).

## Instalación
1. Clona este repositorio en tu máquina local:
    ```bash
    git clone https://github.com/davidpardo98/API-PHP
    ```
2. Navega al directorio del proyecto:
    ```bash
    cd api-php
    ```
3. Configura la conexión a la base de datos en el archivo `conexion.php`:
    - Ingresa las credenciales correctas para tu servidor, usuario y contraseña.

4. Sube los archivos al servidor web o configúralos en tu entorno local (XAMPP, MAMP, etc.).

## Uso
1. Asegúrate de que el servidor web y la base de datos estén ejecutándose.
2. Accede a la URL del proyecto en tu navegador (ejemplo: `http://localhost/api-php-mysql/index.php`).
3. Utiliza herramientas como Postman para probar las rutas de la API.

## Estructura del Proyecto
