<h1 align="center">🍎 API de Gestión de Frutas 🍌</h1>

<p align="center">
  <strong>Una API RESTful construida con Laravel 10 y MySQL para gestionar frutas y sus categorías.</strong>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-10.x-red?style=flat&logo=laravel" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-8.0%2B-blue?style=flat&logo=php">
  <img src="https://img.shields.io/badge/MySQL-5.7+-orange?style=flat&logo=mysql">
  <img src="https://img.shields.io/badge/Status-En%20Desarrollo-yellow?style=flat">
</p>

---

## 🚀 Requisitos Previos

- ✅ PHP `8.0` o superior  
- ✅ Composer  
- ✅ MySQL  
- ✅ Laravel `10.x`

---

## ⚙️ Instalación

```bash
# 1. Clona el repositorio
git clone [url-del-repositorio]
cd frutas-api

# 2. Instala dependencias
composer install

# 3. Copia el archivo de entorno
cp .env.example .env

✍️ Configura tu archivo .env con los datos de conexión a base de datos

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=frutas_db
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña

# 4. Genera la clave de aplicación
php artisan key:generate

# 5. Ejecuta migraciones y seeders
php artisan migrate --seed

# 6. Inicia el servidor de desarrollo
php artisan serve

🌐 La API estará disponible en:
http://localhost:8000/api

🔗 Endpoints de la API

🍇 Frutas

| Método | Endpoint           | Descripción             |
| ------ | ------------------ | ----------------------- |
| GET    | `/api/frutas`      | Listar todas las frutas |
| POST   | `/api/frutas`      | Crear una nueva fruta   |
| GET    | `/api/frutas/{id}` | Mostrar una fruta       |
| PUT    | `/api/frutas/{id}` | Actualizar una fruta    |
| DELETE | `/api/frutas/{id}` | Eliminar una fruta      |


🧪 Ejemplos de Uso con Postman

📥 Listar todas las frutas

GET http://localhost:8000/api/frutas
Headers: Accept: application/json

🆕 Crear una nueva fruta

POST http://localhost:8000/api/frutas
Headers:
  Content-Type: application/json
  Accept: application/json
Body (JSON):
{
  "nombre": "Banana",
  "color": "amarillo",
  "fecha_cosecha": "2023-11-10",
  "categoria_id": 1
}

🔍 Mostrar una fruta específica

GET http://localhost:8000/api/frutas/1
Headers: Accept: application/json

✏️ Actualizar una fruta

PUT http://localhost:8000/api/frutas/1
Headers:
  Content-Type: application/json
  Accept: application/json
Body (JSON):
{
  "color": "amarillo intenso"
}

❌ Eliminar una fruta

DELETE http://localhost:8000/api/frutas/1
Headers: Accept: application/json

📦 Estructura de Datos

🧺 Fruta
JSON
{
    "id": 1,
    "nombre": "Manzana",
    "color": "rojo",
    "fecha_cosecha": "2023-11-15",
    "fecha_caducidad": "2023-11-22",
    "categoria_id": 1,
    "created_at": "2023-11-01T12:00:00.000000Z",
    "updated_at": "2023-11-01T12:00:00.000000Z",
    "categoria": {
        "id": 1,
        "nombre": "Tropicales",
        "created_at": "2023-11-01T12:00:00.000000Z",
        "updated_at": "2023-11-01T12:00:00.000000Z"
    }
}

🏷️ Categoría
JSON
{
    "id": 1,
    "nombre": "Tropicales",
    "created_at": "2023-11-01T12:00:00.000000Z",
    "updated_at": "2023-11-01T12:00:00.000000Z"
}

🧑‍💻 Autor
Desarrollado por Fabrizio Castro
📧 [fabriziocastros2003@gmail.com]
🔗 [Fabrz13]