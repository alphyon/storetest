# INSTALACION

Para el correcto despligue en modo desarrollo:

* Clonar el repositorio
* Crear una base de datos con el nombre "storea"
* entrar a carpeta **storeapi **y renombrar archivo .env.example a .env y configurar las variables de acurdo a los parametros de su entorno de base de datos.
* Para la visualizacion de correo debe configurar las variables de configuracion para el servicio de [http://mailtrap.io](http://mailtrap.io)
* ejecutar comando **composer install.**
* al finalizar ejecutar comando **php artisan migrate**
* ejecutar comando **php artisan db:seed.**
* al finalizar lanze una isntancia del servidor con el comando **php -S localhost:8000 -t public**
* salga de la carpeta e ingrese a la carpeta **store**
* ejecute el comando **npm install**
* ejecute el comando **ng serve**
* ingrese al nvagador con la siguiente [http://localhost:4200](http://localhost:4200)
* realice el login de la app en la ruta http://localhost:4200/login  en las credenciale use
  * email: test@test.com
  * password: 123456 