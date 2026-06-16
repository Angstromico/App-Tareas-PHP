# Sistema de Gestion de Tareas PHP

Este proyecto consiste en una aplicacion web robusta y eficiente para la administracion de tareas pendientes, desarrollada con PHP y PostgreSQL. La plataforma permite a los usuarios centralizar sus actividades diarias a traves de una interfaz intuitiva y responsiva.

## Descripcion General

La aplicacion ha sido diseñada siguiendo el patron de arquitectura de aplicaciones web clasicas, integrando una logica de servidor en PHP con una base de datos relacional para garantizar la persistencia de la informacion. El sistema facilita la organizacion personal mediante un flujo de trabajo CRUD (Crear, Leer, Actualizar, Borrar) completo.

## Tecnologias Utilizadas

El stack tecnologico seleccionado para este proyecto garantiza estabilidad y facilidad de despliegue:

*   Lenguaje de Programacion: PHP
*   Gestor de Base de Datos: PostgreSQL
*   Interfaz de Usuario: HTML5 y CSS3
*   Framework de Estilos: Bootstrap 5
*   Iconografia: FontAwesome

## Funcionalidades Principales

El sistema ofrece las siguientes capacidades:

1.  Registro de Tareas: Formulario dinamico para la creacion de nuevas actividades con titulo y descripcion detallada.
2.  Visualizacion Centralizada: Tablero principal que lista todas las tareas registradas, incluyendo su fecha de creacion.
3.  Edicion de Contenido: Capacidad de modificar la informacion de tareas existentes para mantener la relevancia de los datos.
4.  Eliminacion de Registros: Funcion para descartar tareas completadas o descartadas de forma permanente.
5.  Mensajeria de Estado: Sistema de notificaciones integradas mediante sesiones de PHP para informar al usuario sobre el exito de sus operaciones.

## Requisitos del Sistema

Para ejecutar este proyecto de manera local o en un servidor de produccion, se requiere:

*   Servidor web (Apache, Nginx o similar).
*   PHP en su version 7.4 o superior.
*   Extension de PostgreSQL para PHP (php-pgsql) habilitada.
*   Acceso a una instancia de base de datos PostgreSQL.

## Configuracion e Instalacion

### Ejecucion con Docker (Recomendado)

Si tiene Docker y Docker Compose instalados, puede iniciar el proyecto rapidamente ejecutando:

```bash
docker-compose up -d --build
```

La aplicacion estara disponible en `http://localhost:8055`.

### Instalacion Manual

#### 1. Clonar el Repositorio

Descargue los archivos del proyecto en su directorio de servidor web local.

### 2. Configuracion de la Base de Datos

Debe crear una tabla denominada Tarea en su base de datos PostgreSQL utilizando el siguiente esquema:

```sql
CREATE TABLE Tarea (
    id SERIAL PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    descripcion TEXT,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### 3. Conexion a la Base de Datos

Edite el archivo conexion.php y actualice las credenciales de acceso segun su entorno:

*   host: Direccion del servidor de base de datos.
*   username: Nombre de usuario de PostgreSQL.
*   password: Contraseña del usuario.
*   database: Nombre de la base de datos.
*   port: Puerto de conexion (por defecto 5432).

## Estructura de Archivos

La organizacion del proyecto es la siguiente:

*   index.php: Punto de entrada principal y visualizacion de la tabla de tareas.
*   conexion.php: Logica de conexion y configuracion de la base de datos.
*   save.php: Procesa la creacion de nuevos registros.
*   editar.php: Gestiona la actualizacion de tareas existentes.
*   eliminar.php: Ejecuta la logica para remover registros de la base de datos.
*   includes/: Directorio que contiene los componentes reutilizables de la interfaz (header.php y footer.php).

## Uso de la Aplicacion

Una vez configurado, acceda a traves de su navegador a la ruta del proyecto. Utilice el panel lateral izquierdo para ingresar nuevas tareas. Las tareas guardadas apareceran inmediatamente en la tabla de la derecha, donde podra gestionarlas mediante los botones de accion de color gris (editar) y rojo (eliminar).
