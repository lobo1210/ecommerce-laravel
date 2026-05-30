# REPORTE ACTIVIDAD 2

## Creación de Seeders y Validación Funcional del Sistema E-commerce

### Integrantes

* Juan Carlos Vázquez Ramírez
* Andrea De La Cruz Perez
* Ángel De Jesús Camilo Aguilar

### Materia

Desarrollo Web Avanzado

### Repositorio GitHub

https://github.com/lobo1210/ecommerce-laravel

### Rama utilizada

feature/basic-seeding-validation

---

# 1. Objetivo

Implementar seeders en Laravel para generar datos de prueba en la base de datos y validar manualmente el correcto funcionamiento de las funcionalidades principales del sistema E-commerce.

---

# 2. Desarrollo de la actividad

## 2.1 Creación de Seeders

Se desarrollaron los siguientes seeders:

### UserSeeder

Se crearon:

* 2 usuarios Administradores.
* 4 usuarios Clientes.

Cada usuario fue configurado con una contraseña conocida para facilitar las pruebas de autenticación.

---

### CategorySeeder

Se generaron las siguientes categorías:

* Electrónicos
* Ropa
* Hogar

---

### ProductSeeder

Se generaron 10 productos de prueba.

Cada producto contiene:

* Nombre
* Descripción
* Precio
* Estado activo
* Categoría asignada

---

## 2.2 Configuración de DatabaseSeeder

Se configuró el archivo DatabaseSeeder.php para ejecutar los seeders en el orden correcto:

1. UserSeeder
2. CategorySeeder
3. ProductSeeder

---

## 2.3 Ejecución de Migraciones y Seeders

Se utilizó el siguiente comando:

```bash
php artisan migrate:fresh --seed
```

La ejecución fue exitosa y permitió poblar automáticamente la base de datos con usuarios, categorías y productos de prueba.

---

# 3. Verificación en Base de Datos

Se verificó mediante phpMyAdmin la correcta inserción de registros en las tablas:

* users
* categories
* productos

Los datos fueron generados correctamente y se comprobó la relación entre productos y categorías mediante la llave foránea category_id.

---

# 4. Validación Funcional

## Visualización de Productos

Se verificó que los productos generados por el seeder se muestran correctamente en el listado de productos del sistema.

Resultado: Correcto.

---

## Inicio de Sesión

Se realizaron pruebas con:

### Administrador

Acceso exitoso al sistema.

### Cliente

Acceso exitoso al sistema.

Resultado: Correcto.

---

## Gestión de Productos

Se comprobó el acceso al módulo de administración de productos.

Resultado: Correcto.

---

# 5. Uso de Git y GitHub

Se creó la rama:

feature/basic-seeding-validation

Posteriormente se realizaron commits descriptivos para registrar los cambios efectuados durante la actividad.

Finalmente se ejecutó:

```bash
git push -u origin feature/basic-seeding-validation
```

La rama fue publicada correctamente en GitHub.

---

# 6. Evidencias

Agregar las siguientes capturas:

1. Ejecución de php artisan migrate:fresh --seed.
![ Ejecución de php artisan migrate:fresh --seed.](ecommerce/capturas/captura-1.png)
2. Código UserSeeder.
![ Código UserSeeder.](ecommerce/capturas/captura-2.png)
3. Código CategorySeeder.
![ Código CategorySeeder.](ecommerce/capturas/captura-3.png)
4. Código ProductSeeder.
![ Código ProductSeeder.](ecommerce/capturas/captura-4.png)
5. Configuración de DatabaseSeeder.
![ Configuración de DatabaseSeeder.](ecommerce/capturas/captura-5.png)
6. Tabla users.
![ Tabla users.](ecommerce/capturas/captura-6.png)
7. Tabla categories.
![ Tabla categories.](ecommerce/capturas/captura-7.png)
8. Tabla productos.
![ Tabla productos.](ecommerce/capturas/captura-8.png)
9. Listado de productos.
![ Listado de productos.](ecommerce/capturas/captura-9.png)
10. Inicio de sesión Administrador.
![ Inicio de sesión Administrador.](ecommerce/capturas/captura-10.png)
11. Inicio de sesión Cliente.
![ Inicio de sesión Cliente.](ecommerce/capturas/captura-11.png)
12. Acceso a gestión de productos.
![ Acceso a gestión de productos.](ecommerce/capturas/captura-12.png)
13. Commit y Push exitoso en GitHub.
![ Commit y Push exitoso en GitHub.](ecommerce/capturas/captura-13.png)

---

# 7. Conclusiones

La utilización de Seeders en Laravel permitió generar información de prueba de forma rápida y eficiente, facilitando el proceso de validación del sistema E-commerce.

Las pruebas realizadas confirmaron que la base de datos fue poblada correctamente y que las funcionalidades principales del sistema, como autenticación, visualización de productos y administración de registros, operan adecuadamente con los datos generados.

Además, el uso de Git y GitHub permitió mantener un control de versiones organizado y documentar cada etapa del desarrollo.
