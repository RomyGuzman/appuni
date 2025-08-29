# Proyecto Integración CodeIgniter 4 + MySQL

## Descripción

Este proyecto corresponde a la práctica profesionalizante de la Tecnicatura en Ciencia de Datos e Inteligencia Artificial. Consiste en la migración de una aplicación web frontend puro a un stack basado en CodeIgniter 4 (PHP) y MySQL, integrando la base de datos académica modelada en la materia “Administración de Bases de Datos con MySQL”.

La aplicación permite la gestión básica de carreras, alumnos, cursos e inscripciones, con funcionalidades de listados, filtros y una demo guiada para el cliente con datos de prueba realistas.

---

## Equipo

- **Project Manager (PM):** Guzmán Romina 
- **Backend (CodeIgniter 4):** Campos Elias - Gutierrez Bello Nahuel 
- **Frontend:** Carrera Carla - Maciel Fátima  
- **QA / Tester:** Todos los integrantes 

---

## Tecnologías

- PHP 8.x con CodeIgniter 4 (MVC)  
- MySQL / MariaDB (InnoDB)  
- XAMPP / WAMP para entorno local  
- Git y GitHub para control de versiones  
- PHPUnit para pruebas unitarias  
- Trello / GitHub Projects para gestión ágil (Kanban)  

---

## Estructura del repositorio

/app # Código fuente de la aplicación CodeIgniter 4 
/docs # Documentación, plan de proyecto, minutas, presentaciones 
/sql # Scripts SQL: migraciones (DDL), datos de ejemplo (DML), backups 
/tests # Pruebas unitarias y de integración 
README.md # Este archivo 
.env.example # Archivo de configuración de entorno de ejemplo


---

## Instalación y configuración

1. Clonar el repositorio:

```bash
git clone https://github.com/RomyGuzman/appuni.git
cd tu_repositorio

2. Configurar el entorno local con XAMPP o WAMP, asegurándose de tener PHP 8.xy MySQL/MariaDB.

3. Copiar el archivo de ejemplo .env.examplea .envy configurar los parámetros de conexión a la base de datos:
app.baseURL = 'http://localhost:universidad/'
database.default.hostname = 127.0.0.1
database.default.database = universidad
database.default.username = root
database.default.password = ********
database.default.DBDriver = MySQLi

4. Ejecutar migraciones para crear el esquema de base de datos:
php spark migrate

5. Carga datos de ejemplo (semillas):
php spark db:seed App\Database\Seeds\DatosDemoSeeder

6. Iniciar el servidor local de desarrollo:
php spark serve

7. Acceder a la aplicación en http://localhost:appuni/

    Gestión de carreras, alumnos, cursos e inscripciones.
    Formularios con validación del lado servidor y cliente
    Seguridad: autenticación básica, protección CSRF, validaciones parametrizadas
    Procedimiento almacenado para inscripción de alumnos
    Listados con filtros y paginación
    Informes básicos y métricas operativas (opcional)

Pruebas
Se incluyen pruebas unitarias y de integración con PHPUnit.
Casos de prueba manuales documentados en /docs/plan_de_pruebas.md.
Para ejecutar pruebas automáticas:
vendor/bin/phpunit --colors=always

Metodología ágil con Kanban (Trello / GitHub Projects)
Versionado con Git siguiendo confirmaciones convencionales
Pull Requests con revisión y checklist de calidad
Integración continua con GitHub Actions (lint, pruebas)

Contribuciones 
Este repositorio es parte de una práctica académica. Para contribuciones o sugerencias, por favor abra un problema o solicitud de extracción siguiendo las plantillas definidas.

Licencia
Este proyecto es para fines educativos y no tiene licencia comercial.

Contacto
Para consultas o soporte, contacte al equipo a través del canal oficial de la materia.

Referencias
Documentación de CodeIgniter 4
Documentación de MySQL
Documentación de GitHub
Unidad PHP
ChatGPT de OpenAI


Plantilla para solicitud de extracción
## Descripción

Por favor, incluye un resumen claro y conciso de los cambios realizados y la motivación detrás de ellos.

---

## Tipo de cambio

- [ ] Feature (nueva funcionalidad)
- [ ] Bugfix (corrección de error)
- [ ] Documentación
- [ ] Refactorización
- [ ] Test
- [ ] Otro (especificar): ____________

---

## Checklist

- [ ] El código sigue las guías de estilo del proyecto
- [ ] He realizado una auto-revisión del código
- [ ] He comentado el código, especialmente en áreas complejas
- [ ] He agregado pruebas que demuestran que la corrección o funcionalidad funciona
- [ ] Las pruebas nuevas y existentes pasan localmente con éxito
- [ ] He actualizado la documentación correspondiente (README, comentarios, etc.)
- [ ] He incluido migraciones o seeds si aplica
- [ ] He adjuntado evidencia (screenshots, logs, GIFs) si aplica

---

## Evidencia

Adjunta aquí capturas de pantalla, logs o GIFs que muestren el funcionamiento o los resultados de los cambios.

---

## Notas de despliegue

- ¿Requiere migrar base de datos? (sí/no)  
- Variables de entorno nuevas o modificadas:  

---

## Issues relacionados

Closes # (número de issue relacionado)

---


