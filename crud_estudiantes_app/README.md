# CRUD Estudiantes Laravel

**CRUD Estudiantes Laravel** es una aplicación web que permite gestionar los registros de estudiantes utilizando **Laravel** como backend y **Bootstrap** para la interfaz. La aplicación permite realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) sobre los datos de los estudiantes.

## 🚀 Características

- **CRUD Completo**: Crear, leer, actualizar y eliminar estudiantes.
- **Interfaz de Usuario**: Diseño limpio y moderno con **Bootstrap**.
- **Autenticación de Usuarios**: Sistema de autenticación básico para gestionar el acceso.
- **Soporte Multilingüe**: Archivos de traducción para agregar más idiomas fácilmente.
- **Base de Datos**: Conexión a base de datos MySQL o PostgreSQL.

## 🛠️ Tecnologías Usadas

- **Laravel**: Framework PHP para desarrollar el backend.
- **Bootstrap**: Framework CSS para la interfaz de usuario.
- **MySQL/PostgreSQL**: Bases de datos relacionales para almacenar los datos.
- **Composer**: Para gestionar dependencias de PHP.
- **Node.js**: Para gestionar dependencias del frontend.
- **Vite/Webpack**: Herramientas para la construcción y empaquetado de archivos estáticos.

## 📝 Requisitos

- PHP >= 8.0
- Composer
- Node.js
- Base de datos (MySQL o PostgreSQL)

## ⚙️ Instalación

1. Clona el repositorio:

   ```bash
   git clone https://github.com/tuusuario/crud_estudiantes_laravel.git
   ```

2. Entra en el directorio del proyecto:

   ```bash
   cd crud_estudiantes_laravel
   ```

3. Instala las dependencias de PHP:

   ```bash
   composer install
   ```

4. Instala las dependencias de frontend:

   ```bash
   npm install
   ```

5. Configura el archivo `.env` (renombra `.env.ejemplo` a `.env` y ajusta la configuración de la base de datos).

6. Ejecuta las migraciones para crear las tablas:

   ```bash
   php artisan migrate
   ```

7. Inicia el servidor local:

   ```bash
   php artisan serve
   ```

8. Accede a la aplicación en `http://localhost:8000`.

## 📜 Rutas

- **`/estudiantes`**: Muestra la lista de estudiantes.
- **`/estudiantes/crear`**: Formulario para agregar un estudiante.
- **`/estudiantes/{id}/editar`**: Formulario para editar un estudiante.
- **`/estudiantes/{id}`**: Elimina un estudiante.

## 🧪 Pruebas

Para ejecutar las pruebas automatizadas, usa:

```bash
php artisan test
```

## 🤝 Contribución

Si deseas contribuir, sigue estos pasos:

1. Haz un fork del repositorio.
2. Crea una rama nueva (`git checkout -b feature/nueva-caracteristica`).
3. Realiza tus cambios y haz commit (`git commit -am 'Agrega nueva característica'`).
4. Haz push a tu rama (`git push origin feature/nueva-caracteristica`).
5. Crea un pull request.

## 📝 Licencia

Este proyecto está bajo la **Licencia MIT**. Consulta el archivo [LICENSE](LICENSE) para más detalles.

---

¡Gracias por revisar el proyecto! Si tienes alguna pregunta o sugerencia, no dudes en ponerte en contacto.
```

