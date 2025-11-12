Guía de Puesta en Marcha del Proyecto WordPress Multisite
Este proyecto contiene una instalación de WordPress Multisite con Docker Compose, que incluye una red con tres sitios (Noticias, Tienda, Comunidad) y contenido de prueba.
📋 Requisitos Previos
Asegúrate de tener instaladas y funcionando las siguientes herramientas:
1. Docker y Docker Compose
2. Git
⚙️ Instrucciones de Instalación
Sigue estos pasos en tu terminal para descargar, configurar y arrancar el proyecto:
1. Clonar el Repositorio
Descarga el proyecto de GitHub.
git clone https://github.com/ThomasCastelo/wordpress-multiside.git
cd wordpress-multiside
2. Arrancar el Servidor Docker
Este comando descarga las imágenes de WordPress y MySQL y arranca los contenedores.

docker-compose up -d
(Espera 30-60 segundos a que los servicios se inicien correctamente).

3. Importar la Base de Datos con Contenido
Para ver los 3 sitios (Noticias, Tienda, Comunidad) y el contenido que creaste, debes cargar la base de datos exportada (multisite.sql).


Nota: La clave root de MySQL para el contenedor es example_root_password.
docker exec -i wordpress-multiside-db-1 mysql -u root -pexample_root_password wordpress_multisite < multisite.sql
4. Acceder al Sitio

Una vez finalizada la importación, el sitio estará operativo.Sitio Principal (Noticias): Abre tu navegador en http://localhost:8000/
Acceso al Escritorio: Abre tu navegador en http://localhost:8000/wp-admin/ SitioURLTienda: http://localhost:8000/tienda/ Comunidad: http://localhost:8000/comunidad/
