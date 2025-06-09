# 🐳 NCU IPAP App - Dockerized PHP Application

Aplicación web PHP con autenticación básica dockerizada usando Nginx, PHP-FPM y MariaDB.

🔗 **Repositorio:**  https://github.com/nicolascurci/ncu_ipap_app 

## 🚀 Cómo Arrancar

1. **Clonar repositorio:**
   '''bash
   git clone https://github.com/nicolascurci/ncu_ipap_app.git
   cd ncu_ipap_app
   '''

2. **Iniciar servicios (Docker Compose):**
   '''bash
   docker-compose up -d --build
   '''

3. **Acceder a la aplicación:**
   Abre tu navegador en → http://localhost:8000

4. **Credenciales demo:**
   - Usuario: 'admin'
   - Contraseña: 'admin'

## 🛑 Detener la Aplicación

'''bash
docker-compose down
'''

## 📌 Características Principales

- Autenticación básica con sesiones PHP
- Entorno completo en contenedores Docker
- Configuración optimizada con Nginx + PHP-FPM
- Base de datos persistente con MariaDB

## 📁 Estructura del Proyecto

ncu_ipap_app
    ├── docker-compose.yml       # Configuración de servicios
    ├── .env                    # Variables de entorno
    ├── index.php               # Página principal
    ├── login.php               # Autenticación
    ├── logout.php              # Cierre de sesión
    ├── mariadb/
    │   └── init.sql            # Script inicial de DB
    ├── nginx/
    │   └── nginx.conf          # Configuración de Nginx
    └── php/
        ├── Dockerfile          # Config multi-stage
        └── php.ini             # Configuración PHP

## ➕ Cómo agregar nuevos usuarios

Para agregar usuarios manualmente desde tu terminal, podés ejecutar un comando SQL dentro del contenedor de MariaDB:

'''bash
docker exec -it ncu_ipap_db mariadb -u root -p
'''

Cuando se te pida la contraseña, ingresá 'root_seguro' (la que configuramos en el arcivo .env).

Luego, en el prompt de SQL:

'''sql
USE ncu_ipap_db;

INSERT INTO users (username, password)
VALUES ('nuevo_usuario', MD5('tu_contraseña_segura'));
'''

🔐 **Importante:** el hash MD5 se utiliza para esta demo, pero **no se recomienda en entornos reales**. Usar siempre funciones de hash seguras como 'password_hash()' en producción.

## 📄 Licencia

MIT License © 2023 Nicolás Curci