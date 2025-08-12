# PRUEBA CON PHPUNIT

## Crea una carpeta para tu proyecto y entramos a ella.
mkdir proyecto-phpunit
> cd proyecto-phpunit

## Iniciamos composer.
composer init

| Comandos                               | Descripción                           |
| -------------------------------------- | ------------------------------------- |
| composer require --dev phpunit/phpunit | Instalar PHPUnit solo para desarrollo |
| php -v                                 | Ver la versión de PHP                 |
| composer show                          | Ver las librerías instaladas          |
| composer dump-autoload                 | Regenerar el autoload de Composer     |

### Creamos un archivo para probar en SRC

## Se crea el archivo XML en la raiz de la carpeta


### Creamos el archivo de pruebas
Es recomendable que el archivo de prueba termine con Test.php para que PHPUnit lo reconozca automáticamente.

## Ejecutamos el PHPUnit
Se debe de ejecutar en el terminal
> ./vendor/bin/phpunit