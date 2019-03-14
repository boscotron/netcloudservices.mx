# NetcloudSevice

## Instalar
Requiere de una instalacion en dominio personalizado, ej. http://local.netcloudsevice.mx/

## Instalacion en XAMMP:

Configurar archivo hosts, C:\Windows\System32\drivers\etc\hots

```
127.0.0.1   local.netcloudsevice.mx

```
Configurar archivo hosts, C:\xampp\apache\conf\extra\

```
<VirtualHost *:80>  
    DocumentRoot "C:\xampp\htdocs\local.netcloudsevice.mx"
    ServerName local.netcloudsevice.mx
</VirtualHost>

```
##Instalación del tema:
-Configura el archivo config.inc.php en la raiz 
--Api
--Api Key
--Servidor de base de datos
--Usuario de base de datos
--Nombre de base de datos
--Contraseña de base de datos
Los demás campos son opcionales de modificar


```php
define(	"RUTA_ACTUAL","http://local.netcloudsevice.mx/");  // URL actual del sistema
...
define(	"JMY_API","XXXXX"); 
define(	"JMY_APIKEY","XXXXXX"); 
... 
/*MySQL*/
define(	"DB_HO","localhost"); //servidor
define(	"DB_US","root"); //usuario
define(	"DB_PA",""); //contrase�a
define(	"DB_DB","mdeamor"); //Base de datos
...

```

-Ingresa a: http://local.netcloudsevice.mx/entrar
-Registrate con tu cuenta de desarrollador
-Instala la base en: http://local.netcloudsevice.mx/INSTALAR
-Instala el administrador en: http://local.netcloudsevice.mx/administrador/instalar/
-Sal del sistema e reingresa: http://local.netcloudsevice.mx/entrar/salir/
-Edita los permisos de usuarios: http://local.netcloudsevice.mx/administrador/usuarios/

## Listo!
