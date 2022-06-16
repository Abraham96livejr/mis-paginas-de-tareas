<?php
include "connectDB.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Nahuel Enseñanza SQL</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/light-box.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/nahuel-style.css">
    <link rel="stylesheet" href="css/codemirror.css">
    <style>
        .CodeMirror {
            border-top: 1px solid black;
            border-bottom: 1px solid black;
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <script>
        var init = function () {
            var mime = 'text/x-mysql';

            // get mime type
            if (window.location.href.indexOf('mime=') > -1) {
                mime = window.location.href.substr(window.location.href.indexOf('mime=') + 5);
            }

            sq1 = CodeMirror.fromTextArea(document.getElementById('sql_code_1'), {
                mode: mime,
                indentWithTabs: true,
                smartIndent: true,
                lineNumbers: true,
                matchBrackets: true,
                autofocus: true
            });

            sq2 = CodeMirror.fromTextArea(document.getElementById('sql_code_2'), {
                mode: mime,
                indentWithTabs: true,
                smartIndent: true,
                lineNumbers: true,
                matchBrackets: true,
                autofocus: true
            });

            sq3 = CodeMirror.fromTextArea(document.getElementById('sql_code_3'), {
                mode: mime,
                indentWithTabs: true,
                smartIndent: true,
                lineNumbers: true,
                matchBrackets: true,
                autofocus: true
            });

            sq4 = CodeMirror.fromTextArea(document.getElementById('sql_code_4'), {
                mode: mime,
                indentWithTabs: true,
                smartIndent: true,
                lineNumbers: true,
                matchBrackets: true,
                autofocus: true
            });
        };
    </script>
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body onload="init();">


<header class="nav-down responsive-nav hidden-lg hidden-md">
    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <!--/.navbar-header-->
    <div id="main-nav" class="collapse navbar-collapse">
        <nav>
            <ul class="nav navbar-nav">
                <li><a href="#top">Inicio</a></li>
                <li><a href="#introduccion">Introducción SQL</a></li>
                <li><a href="#tema_1">Tema 1 Sentencias Básicas</a></li>
                <li><a href="#tema_2">Tema 2 Modificación de Datos y Estructuras</a></li>
                <li><a href="#blog">Tema 3 Asociación</a></li>
                <li><a href="#contact">Tema 4 Operaciones Matemáticas</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="sidebar-navigation hidde-sm hidden-xs">
    <div class="logo">
        <a href="#"><img src="img/Nahuel.png" width="20%" height="70%"></a>
    </div>
    <nav>
        <ul>
            <li>
                <a href="#top">
                    <span class="rect"></span>
                    <span class="circle"></span>
                    Inicio
                </a>
            </li>
            <li>
                <a href="#introduccion">
                    <span class="rect"></span>
                    <span class="circle"></span>
                    Introducción SQL
                </a>
            </li>
            <li>
                <a href="#tema_1">
                    <span class="rect"></span>
                    <span class="circle"></span>
                    Tema 1 Sentencias Básicas
                </a>
            </li>
            <li>
                <a href="#tema_2">
                    <span class="rect"></span>
                    <span class="circle"></span>
                    Tema 2 Modificación de Datos y Estructuras
                </a>
            </li>
            <li>
                <a href="#blog">
                    <span class="rect"></span>
                    <span class="circle"></span>
                    Tema 3 Asociación
                </a>
            </li>
            <li>
                <a href="#contact">
                    <span class="rect"></span>
                    <span class="circle"></span>
                    Tema 4 Operaciones Matemáticas
                </a>
            </li>
        </ul>
    </nav>
</div>

<div class="slider">
    <div class="Modern-Slider content-section" id="top">
        <!-- Item -->
        <div class="item item-1">
            <div class="img-fill">
                <div class="image"></div>
                <div class="info">
                    <div>
                        <h1>Aprendamos SQL de forma Sencilla<br>Nahuel Compatimos lo que aprendemos</h1>
                        <p>Sentencias, codigo de ejemplo, ejercicios y mucho mas</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="item item-2">
            <div class="img-fill">
                <div class="image"></div>
                <div class="info">
                    <div>
                        <h1>Compartamos Conocimientos <br> con nuestros compañeros</h1>
                        <p>Descripción del Lenguaje SQL, hecho por un estudiante
                            <br>Para Estudiantes.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="item item-3">
            <div class="img-fill">
                <div class="image"></div>
                <div class="info">
                    <div>
                        <h1>Aprendamos Base de Datos <br> de forma sencilla y divertida</h1>
                        <p>Codigo al alcance de estudiantes <br> aprender nunca fué mas facil</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-content">
    <section id="introduccion" class="content-section">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h1><em> Introducción SQL </em></h1>
                </div>
            </div>
            <div class="col-md-12">
                <div class="section-heading">
                    <h1><em>Lenguaje SQL:</em></h1>
                    <p>El SQL es un lenguaje estándar de programación para el acceso a bases de datos, es un lenguaje
                        estructurado y un estándar ANSI para el acceso y manipulación de los datos de cualquier base de
                        datos
                        <br>El lenguaje SQL se utiliza para acceder y manipular datos en cualquier base de datos del
                        mercado,
                        como por ejemplo, para las bases de datos MySQL, Oracle, DB2, SQL Server, Access.
                        <br>
                    </p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="section-heading">
                    <h1><em> Base de Datos </em></h1>
                    <p>Es un “almacén” que nos permite guardar grandes cantidades de información de forma organizada
                        para que luego podamos encontrar y utilizar fácilmente. Se define como una serie de datos
                        organizados y relacionados entre sí, los cuales son recolectados y explotados por los sistemas
                        de información de una empresa o negocio en particular.
                        <br>
                        <b>Ventajas:</b>
                        <br>
                        - Control sobre la redundancia de datos
                        <br>
                        - Consistencia de datos
                        <br>
                        - Compartir datos
                        <br>
                        - Mantenimiento de estándares
                        <br>
                        - Mejora en la integridad de datos
                        <br>
                        - Mejora en la seguridad
                        <br>
                        - Mejora en la accesibilidad a los datos
                        <br>
                        - Mejora en la productividad
                        <br>
                        - Mejora en el mantenimiento
                        <br>
                        - Aumento de la concurrencia
                        <br>
                        - Mejora en los servicios de copias de seguridad
                    </p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="section-heading">
                    <h1><em>MySQL</em></h1>
                    <p>Es un sistema de gestión de base de datos relacional. Este gestor de base de datos en multihilo y
                        multiusuario, lo que le permite ser utilizado por varias personas al mismo tiempo, e incluso,
                        realizar varias consultas a la vez, lo que lo hace sumamente versátil.
                    </p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="section-heading">
                    <h1><em>SELECT</em></h1>
                    <p>La instrucción “SELECT” se usa para seleccionar datos de una base de datos, Los datos devueltos
                        se almacenan en una tabla de resultados, llamada conjunto de resultados.
                        <br>
                        <b>Ejemplos:</b>
                        <br>
                        - <i>SELECT * FROM table_name;</i> Toda la tabla
                        <br>
                        - <i>SELECT column1, FROM table_name;</i> Una tabla en especifico
                    </p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="section-heading">
                    <h1><em>DELETE</em></h1>
                    <p>La instrucción DELETE permite eliminar regsitros de una tabla, su sintaxis es simple, puesto que
                        solo debemos indicar que registros deseamos eliminar mediante la cláusula WHERE.
                        <br>
                        <b>Ejemplo:</b>
                        <br>
                        - <i>DELETE FROM table_name WHERE condition;</i>
                    </p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="section-heading">
                    <h1><em>INSERT</em></h1>
                    <p>La instrucción INSERT INTO se usa para insertar nuevos registros en una tabla. Es posible
                        escribir la instrucción INSERT INTO de dos maneras:
                        <br>
                        - <i>INSERT INTO table_name (column1, column2, column3, ...) VALUES (value1, value2, value3,
                            ...);</i>
                        <br>
                        - <i>INSERT INTO table_name VALUES (value1, value2, value3, ...);</i>
                    </p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="section-heading">
                    <h1><em>UPDATE</em></h1>
                    <p>La instrucción UPDATE permite actualizar registros de una tabla. Debemos por lo tanto indicar que
                        registros se quiere actualizar mediante la cláusula WHERE, y que campos mediante la cláusula
                        SET, además se deberá indicar que nuevo dato va a guardar cada campo.
                        <br>
                        <b>Ejemplo:</b>
                        <br>
                        - <i>UPDATE Nombre_de_la_tabla
                            SET ContactName = 'Alfred Schmidt', City= 'Frankfurt'
                            WHERE CustomerID = 1;
                        </i>
                    </p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="section-heading">
                    <h1><em>SQL Constraints</em></h1>
                    <p>Se utilizan para especificar reglas para datos en una tabla. Las restricciones (Constraints)
                        pueden especificarse cuando la tabla se crea con la instrucción CREATE TABLE, o después de que
                        la tabla se crea con la instrucción ALTER TABLE.
                        <br>
                        Las siguientes restricciones se usan comúnmente en SQL:
                        <br>
                        - NOT NULL: garantiza que una columna no pueda tener un valor NULL
                        <br>
                        - UNIQUE: garantiza que todos los valores de una columna sean diferentes
                        <br>
                        - PRIMARY KEY: una combinación de NOT NOT NULL y UNIQUE. Identifica de forma exclusiva cada fila
                        en una tabla
                        <br>
                        - FOREIGN KEY: identifica de forma exclusiva una fila / registro en otra tabla
                        <br>
                        - CHECK: garantiza que todos los valores de una columna satisfagan una condición específica
                        <br>
                        - DEFAULT: establece un valor predeterminado para una columna cuando no se especifica ningún
                        valor
                        <br>
                        - INDEX: se utiliza para crear y recuperar datos de la base de datos muy rápidamente

                    </p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="section-heading">
                    <h1><em>CREATE TABLE</em></h1>
                    <p>Se utiliza para crear una tabla con los campos especificados al pasar una o más definiciones
                        de_columnas y/o restricciones de_tabla
                        <br>
                        <b>Ejemplo:</b>
                        <br>
                        - <i>CREATE TABLE Persons (
                            PersonID int,
                            LastName varchar(255),
                            FirstName varchar(255),
                            Address varchar(255),
                            City varchar(255)
                            );
                        </i>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="tema_1" class="content-section">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h1><em>Tema 1 Sentencias Básicas</em></h1>
                </div>
            </div>
            <div class="col-md-12">
                <div class="section-heading">
                    <h1><em>SELECT</em></h1>
                    <p>La instrucción “SELECT” se usa para seleccionar datos de una base de datos, Los datos devueltos
                        se almacenan en una tabla de resultados, llamada conjunto de resultados.
                    </p>
                </div>
            </div>
            <div class="col-md-12">
                <fieldset>
                    <textarea name="sql_code_1" rows="6" id="sql_code_1">
-- La intención es selecionar todos los registros de la tabla departments
SELECT *
FROM departments
                    </textarea>
                </fieldset>
            </div>
            <div class="col-md-12" style="top: 10px; text-align: right">
                <fieldset>
                    <button type="button" id="btn-sql_1" class="btn btn-success">Ejecutar SQL</button>
                </fieldset>
            </div>
            <div class="col-md-12" style="top: 15px;">
                <div id="sql_1_result"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h1><em>LIKE</em></h1>
                    <p>El comando “LIKE” se usa en una cláusula “WHERE” para buscar un patrón específico en una columna.
                        “%” Representa cero, uno o varios caracteres.
                        “_” Representa un solo carácter (MS Access utiliza un signo de interrogación (?) En su lugar).
                        <br>
                        Manera con el “%”= SELECT * FROM departments WHERE dept_no LIKE 'd%';
                        Manera con el “_”=SELECT * FROM departments WHERE dept_no LIKE 'd_%_%';
                    </p>
                </div>
            </div>
            <div class="col-md-12">
                <fieldset>
                    <textarea name="sql_code_2" rows="6" id="sql_code_2">
SELECT * FROM departments WHERE dept_no LIKE 'd%';
                    </textarea>
                </fieldset>
            </div>
            <div class="col-md-12" style="top: 10px; text-align: right">
                <fieldset>
                    <button type="button" id="btn-sql_2" class="btn btn-success">Ejecutar SQL</button>
                </fieldset>
            </div>
            <div class="col-md-12" style="top: 15px;">
                <div id="sql_2_result"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h1><em>BETWEEN</em></h1>
                    <p>El operador BETWEEN selecciona valores dentro de un rango dado. Los valores pueden ser números,
                        texto o fechas. El operador es inclusivo: se incluyen los valores inicial y final.
                        <br>
                        <b>Ejemplo:</b>
                        <br>
                        <i>SELECT column_name(s) FROM table_name WHERE column_name BETWEEN value1 AND value2</i>
                        <br>
                        <i>SELECT * FROM employees WHERE Price BETWEEN 10001 AND 10009;</i>
                    </p>
                </div>
            </div>
            <div class="col-md-12">
                <fieldset>
                    <textarea name="sql_code_3" rows="6" id="sql_code_3">
SELECT * FROM employees WHERE emp_no BETWEEN 10001 AND 10009
                    </textarea>
                </fieldset>
            </div>
            <div class="col-md-12" style="top: 10px; text-align: right">
                <fieldset>
                    <button type="button" id="btn-sql_3" class="btn btn-success">Ejecutar SQL</button>
                </fieldset>
            </div>
            <div class="col-md-12" style="top: 15px;">
                <div id="sql_3_result"></div>
            </div>
        </div>
    </section>
    <section id="tema_2" class="content-section">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h1><em>Tema 2 Modificación de Datos y Estructuras</em></h1>
                </div>
            </div>
            <div class="col-md-12">
                <div class="section-heading">
                    <h1><em>UPDATE</em></h1>
                    <p>Update es la instrucción del lenguaje SQL que nos sirve para modificar los registros de una
                        tabla. Como para el caso de Delete, necesitamos especificar por medio de Where cuáles son los
                        registros en los que queremos hacer efectivas nuestras modificaciones. Además, obviamente,
                        tendremos que especificar cuáles son los nuevos valores de los campos que deseamos actualizar.
                        <br>
                        <b>Ejemplo:</b>
                        <br>
                        <i>UPDATE Nombre_de_la_tabla SET ContactName = 'Alfred Schmidt', City= 'Frankfurt' WHERE
                            CustomerID
                            = 1;</i>
                    </p>
                </div>
            </div>
            <div class="col-md-12">
                <fieldset>
                    <textarea name="sql_code_4" rows="6" id="sql_code_4">
UPDATE employees SET first_name = 'Abraham', last_name = 'Cabello' WHERE emp_no = 10001
                    </textarea>
                </fieldset>
            </div>
            <div class="col-md-12" style="top: 10px; text-align: right">
                <fieldset>
                    <button type="button" id="btn-sql_4" class="btn btn-success">Ejecutar SQL</button>
                </fieldset>
            </div>
            <div class="col-md-12" style="top: 15px;">
                <div id="sql_4_result"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h1><em>DELETE</em></h1>
                    <p>Para eliminar los datos que contiene actualmente una tabla, se usa la instrucción DELETE, a la
                        que se suele denominar "consulta de eliminación". También se llama "truncar una tabla". La
                        instrucción DELETE puede quitar uno o varios registros de una tabla y, en general, tiene esta
                        forma:
                        <br>
                        <i>DELETE FROM table list</i>
                        <br>
                        La instrucción DELETE no quita la estructura de la tabla, sino solamente los datos que contiene
                        en ese momento la estructura de la tabla. Para quitar todos los registros de una tabla, use la
                        instrucción DELETE y especifique de qué tabla o tablas quiere eliminar todos los registros.
                        <br>
                        En la mayoría de los casos, es recomendable que califique la instrucción DELETE con una cláusula
                        WHERE para limitar la cantidad de registros que se quitarán.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h1><em>DROP</em></h1>
                    <p>El comando DROP TABLE se utiliza para eliminar la tabla nom_sql de una base. Cuando se pasa la
                        restricción IF EXISTS, si la tabla a eliminar no existe en la base, el comando no hace nada y no
                        se genera ningún error.
                        <br>
                        Este comando no sólo elimina la tabla de la estructura, sino también sus datos y los índices,
                        triggers y restricciones asociados. No se puede utilizar este comando con una tabla referenciada
                        por una restricción FOREIGN KEY.
                        <br>
                        Nota: debe asegurarse de que cuando se ejecute el comando DROP TABLE, no haya registros de la
                        tabla nom_sql que se carguen en memoria en modo de escritura. De lo contrario, se genera el
                        error 1272.
                        <br>
                        El comando DROP puede ser usado para alterar estructuras por lo que exponemos los mas usados:
                        <br>
                        - <i>ALTER TABLE Customers DROP COLUMN ContactName</i>
                        <br>
                        - DROP a UNIQUE Constraint: Para soltar una restricción ÚNICA.
                        <br>
                        <b>Ejemplo:</b><i>ALTER TABLE Persons DROP CONSTRAINT UC_Person</i>
                        <br>
                        - DROP a PRIMARY KEY: Para eliminar una restricción PRIMARY KEY.
                        <br>
                        <b>Ejemplo:</b><i>ALTER TABLE Persons DROP CONSTRAINT PK_Person</i>
                        <br>
                        - DROP a FOREIGN KEY: Para soltar una restricción de FOREIGN KEY.
                        <br>
                        <b>Ejemplo:</b><i>ALTER TABLE Orders DROP CONSTRAINT FK_PersonOrder</i>
                        <br>
                        - DROP a CHECK: Para soltar una restricción de CHECK.
                        <br>
                        <b>Ejemplo:</b><i>ALTER TABLE Persons DROP CHECK CHK_PersonAge</i>
                        <br>
                        - DROP DEFAULT: El comando se utiliza para eliminar una restricción DEFAULT.
                        <br>
                        <b>Ejemplo:</b><i>ALTER TABLE Persons ALTER City DROP DEFAULT</i>
                        <br>
                        - DROP INDEX: El comando DROP INDEX se usa para eliminar un índice en una table.
                        <br>
                        <b>Ejemplo:</b><i>ALTER TABLE table_name DROP INDEX index_name</i>
                        <br>
                        - DROP DATABASE: El comando DROP DATABASE se utiliza para eliminar una base de datos SQL
                        existente.
                        <br>
                        <b>Ejemplo:</b><i>DROP DATABASE testDB</i>
                        <br>
                        - DROP TABLE: El comando DROP TABLE elimina una tabla en la base de datos.
                        <br>
                        <b>Ejemplo:</b><i>DROP TABLE Shippers</i>

                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="blog" class="content-section">
        <div class="section-heading">
            <h1>Blog<br><em>Entries</em></h1>
            <p>Curabitur hendrerit mauris mollis ipsum vulputate rutrum.
                <br>Phasellus luctus odio eget dui imperdiet.</p>
        </div>
        <div class="section-content">
            <div class="tabs-content">
                <div class="wrapper">
                    <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                        <li><a href="#tab1" class="active">July 2018</a></li>
                        <li><a href="#tab2">June 2018</a></li>
                        <li><a href="#tab3">May 2018</a></li>
                        <li><a href="#tab4">April 2018</a></li>
                    </ul>
                    <section id="first-tab-group" class="tabgroup">
                        <div id="tab1">
                            <ul>
                                <li>
                                    <div class="item">
                                        <img src="img/blog_1.jpg" alt="">
                                        <div class="text-content">
                                            <h4>Integer ultrices augue</h4>
                                            <span>25 July 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam
                                                finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat
                                                augue lectus sed magna. Integer mollis lorem quis ipsum maximus
                                                finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <img src="img/blog_2.jpg" alt="">
                                        <div class="text-content">
                                            <h4>Cras commodo odio ut</h4>
                                            <span>16 July 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam
                                                finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat
                                                augue lectus sed magna. Integer mollis lorem quis ipsum maximus
                                                finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <img src="img/blog_3.jpg" alt="">
                                        <div class="text-content">
                                            <h4>Sed at massa turpis</h4>
                                            <span>10 July 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam
                                                finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat
                                                augue lectus sed magna. Integer mollis lorem quis ipsum maximus
                                                finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="tab2">
                            <ul>
                                <li>
                                    <div class="item">
                                        <img src="img/blog_3.jpg" alt="">
                                        <div class="text-content">
                                            <h4>Sed at massa turpis</h4>
                                            <span>30 June 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam
                                                finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat
                                                augue lectus sed magna. Integer mollis lorem quis ipsum maximus
                                                finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <img src="img/blog_1.jpg" alt="">
                                        <div class="text-content">
                                            <h4>Lorem ipsum dolor sit</h4>
                                            <span>24 June 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam
                                                finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat
                                                augue lectus sed magna. Integer mollis lorem quis ipsum maximus
                                                finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <img src="img/blog_2.jpg" alt="">
                                        <div class="text-content">
                                            <h4>Cras commodo odio ut</h4>
                                            <span>12 June 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam
                                                finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat
                                                augue lectus sed magna. Integer mollis lorem quis ipsum maximus
                                                finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="tab3">
                            <ul>
                                <li>
                                    <div class="item">
                                        <img src="img/blog_2.jpg" alt="">
                                        <div class="text-content">
                                            <h4>Cras commodo odio ut</h4>
                                            <span>26 May 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam
                                                finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat
                                                augue lectus sed magna. Integer mollis lorem quis ipsum maximus
                                                finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <img src="img/blog_1.jpg" alt="">
                                        <div class="text-content">
                                            <h4>Lorem ipsum dolor sit</h4>
                                            <span>22 May 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam
                                                finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat
                                                augue lectus sed magna. Integer mollis lorem quis ipsum maximus
                                                finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <img src="img/blog_3.jpg" alt="">
                                        <div class="text-content">
                                            <h4>Integer ultrices augue</h4>
                                            <span>8 May 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam
                                                finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat
                                                augue lectus sed magna. Integer mollis lorem quis ipsum maximus
                                                finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="tab4">
                            <ul>
                                <li>
                                    <div class="item">
                                        <img src="img/blog_1.jpg" alt="">
                                        <div class="text-content">
                                            <h4>Lorem ipsum dolor sit</h4>
                                            <span>26 April 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam
                                                finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat
                                                augue lectus sed magna. Integer mollis lorem quis ipsum maximus
                                                finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <img src="img/blog_3.jpg" alt="">
                                        <div class="text-content">
                                            <h4>Integer ultrices augue eu</h4>
                                            <span>24 April 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam
                                                finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat
                                                augue lectus sed magna. Integer mollis lorem quis ipsum maximus
                                                finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <img src="img/blog_2.jpg" alt="">
                                        <div class="text-content">
                                            <h4>Cras commodo odio ut</h4>
                                            <span>20 April 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam
                                                finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat
                                                augue lectus sed magna. Integer mollis lorem quis ipsum maximus
                                                finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="content-section">
        <div id="map">

            <!-- How to change your own map point
                   1. Go to Google Maps
                   2. Click on your location point
                   3. Click "Share" and choose "Embed map" tab
                   4. Copy only URL and paste it within the src="" field below
            -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13139.225761420868!2d-58.454865!3d-34.5837639!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7074017081bcbe1d!2sEscuela%20T%C3%A9cnica%20Gral.%20J.%20de%20San%20Mart%C3%ADn!5e0!3m2!1ses-419!2sar!4v1573344178258!5m2!1ses-419!2sar"
                    width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div id="contact-content">
            <div class="section-heading">
                <h1>Contact<br><em>Sentra</em></h1>
                <p>Curabitur hendrerit mauris mollis ipsum vulputate rutrum.
                    <br>Phasellus luctus odio eget dui imperdiet.</p>

            </div>
            <div class="section-content">
                <form id="contacts" action="#" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <fieldset>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Your name..."
                                       required="">
                            </fieldset>
                        </div>
                        <div class="col-md-4">
                            <fieldset>
                                <input name="email" type="email" class="form-control" id="email"
                                       placeholder="Your email..." required="">
                            </fieldset>
                        </div>
                        <div class="col-md-4">
                            <fieldset>
                                <input name="subject" type="text" class="form-control" id="subject"
                                       placeholder="Subject..." required="">
                            </fieldset>
                        </div>
                        <div class="col-md-12">
                            <fieldset>
                                <textarea name="message" rows="6" class="form-control" id="message"
                                          placeholder="Your message..." required=""></textarea>
                            </fieldset>
                        </div>
                        <div class="col-md-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="btn">Send Message Now</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="footer">
        <p>Copyright &copy; 2019

            . Desarrollado por: Abraham Cabello</p>
    </section>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="js/vendor/codemirror.js"></script>
<script src="js/vendor/sql.js"></script>

<script>
    // Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('header').outerHeight();

    $(window).scroll(function (event) {
        didScroll = true;
    });

    setInterval(function () {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();

        // Make sure they scroll more than delta
        if (Math.abs(lastScrollTop - st) <= delta)
            return;

        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight) {
            // Scroll Down
            $('header').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if (st + $(window).height() < $(document).height()) {
                $('header').removeClass('nav-up').addClass('nav-down');
            }
        }

        lastScrollTop = st;
    }
</script>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#btn-sql_1').click(function (e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: 'departments.php',
                data: {
                    sql: sq1.getValue()
                },
                success: function (response) {
                    $("#sql_1_result").html(response);
                }
            });
        });
        $('#btn-sql_2').click(function (e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: 'departments.php',
                data: {
                    sql: sq2.getValue()
                },
                success: function (response) {
                    $("#sql_2_result").html(response);
                }
            });
        });
        $('#btn-sql_3').click(function (e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: 'employees.php',
                data: {
                    sql: sq3.getValue()
                },
                success: function (response) {
                    $("#sql_3_result").html(response);
                }
            });
        });
        $('#btn-sql_4').click(function (e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: 'employees_Up.php',
                data: {
                    sql: sq4.getValue()
                },
                success: function (response) {
                    $("#sql_4_result").html(response);
                }
            });
        });
    });

    window.setTimeout(function () {
        $(".alert").fadeTo(500, 0).slideUp(500, function () {
            alert("test");
            $(this).remove();
        });
    }, 2000);
</script>
</body>
</html>