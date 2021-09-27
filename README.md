Este repositorio ha sido creado para la realización del proyecto Baby Store de la materia Topicos Especiales en Ingeniería de Software a cargo de los estudiantes: Julián Ramírez, Liz Rodrigues y Gustavo Molina.


#**Configuración para abrir el proyecto desde una instancia local**

Luego de clonar el proyecto lo ideal es que ejecuten el comando **composer update** para controlar cualquier tipo de error que pueda haber, posteriormente a eso deben ingresar al archivo **env** que se encuentra en la carpeta raíz del proyecto y modificarlo según sus credenciales (específicamente los campos de usuario y contraseña) y dejar como nombre de la BD babystore. Tras esto deben crear una base de datos llamada **babystore** y pueden tomar el archivo SQL que subirán e importarán en la base de datos dentro de MYSQL (Recuerden activar APACHE y PHPMYADMIN desde XAMPP o panel de control que utilicen).

En caso tal de no querer importar la base de datos pueden hacer el comando **php artisan migrate** y **php artisan db:seed** para crear las tablas y la semilla que crea un usuario administrador con las credenciales **admin1@gmail.com** y contraseña **1234** con el que podrán loguear y crear más usuarios administrativos o no y productos. 

***Para ingresar la base de datos puesta en el repositorio deben crear una base de datos llamada babystore e importar los datos de babystore.sql
