# Curriculum - Curso PHP - Hector Benítez - Platzi 2019

### ¿Qué es PSR Y PHP-FIG?

PHP-FIG son las siglas de PHP framework Interop Group, que corresponde a un grupo de 'proyectos php' que tienen por objetivo hallar las coincidencias entre esos proyectos y encontrar formas en las que puedan trabajar mejor de manera conjunta.

De una manera más básica, un grupo de programadores se unieron para crear PHP-FIG con el objetivos de avanzar en la interoperabilidad de librerías en php.

PHP-FIG fueron los encargados de crear PSR que son las siglas de PHP Standards Recommendations. Qué como su nombre lo especifica son recomendaciones y estándares para tu código PHP para mejorar la interoperabilidad de los proyectos.

### ¿Qué es Composer?
Composer es un administrador de paquetes a nivel de aplicación para PHP, permite administrar dependencias de PHP y las bibliotecas requeridas.

- **composer.json**: es un archivo que especifica la configuración y los paquetes requeridos a composer.
- **composer install**: hace la instalación de la configuración y paquetes especificados en el archivo _composer.json_.
- **composer require _packageName_**: instala el paquete requerido en nuestro directorio y añade el requerimiento al archivo composer.json.

### ¿Qué es un ORM?
ORM son las siglas de Object Relational Mapping. En la práctica esto crea una base de datos orientada a objetos virtual, sobre la base de datos relacional. Esto posibilita el uso de las características propias de la orientación a objetos (básicamente herencia y polimorfismo), además el ORM hace más transparente las conexiones a las bases de datos, nos protege de algunas vulnerabilidades de SQL y facilita algunas validaciones a la información.

Crear modelos basados en las tablas de nuestra base de datos.