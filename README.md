# Starshop

Starshop es una aplicación Symfony de ejemplo que gestiona una colección de naves espaciales ficticias. Incluye frontend con Tailwind CSS, API REST, comandos de consola y protección CSRF personalizada.

## Estructura del Proyecto

-   `assets/`: Archivos frontend (JS, CSS, imágenes, controladores Stimulus)
-   `bin/`: Scripts ejecutables (incluye el comando Symfony Console)
-   `config/`: Configuración de Symfony y bundles
-   `public/`: Document root (incluye `index.php`)
-   `src/`: Código PHP principal (Controladores, Modelos, Repositorios, Comandos)
-   `templates/`: Plantillas Twig
-   `var/`: Archivos generados (cache, logs)
-   `vendor/`: Dependencias de Composer

## Instalación

1. Clona el repositorio:

    ```sh
    git clone <url-del-repo>
    cd starshop-1
    ```

2. Instala dependencias PHP:

    ```sh
    composer install
    ```

3. Instala dependencias JS (opcional, si usas npm/yarn):

    ```sh
    npm install
    ```

4. Configura variables de entorno:

    - Copia `.env` o `.env.dev` y ajusta según tu entorno.

5. Ejecuta el servidor de desarrollo:
    ```sh
    symfony server:start
    ```
    o
    ```sh
    php -S localhost:8000 -t public
    ```

## Uso

-   Accede a la página principal en [http://localhost:8000](http://localhost:8000)
-   Navega por las naves espaciales y consulta detalles.
-   API disponible en `/api/starships` (ver [`App\Controller\StarshipApiController`](src/Controller/StarshipApiController.php))
-   Comando de consola:
    ```sh
    php bin/console app:ship-report
    ```

## Funcionalidades

-   Listado y detalle de naves espaciales ([`App\Controller\MainController`](src/Controller/MainController.php), [`App\Controller\StarshipController`](src/Controller/StarshipController.php))
-   API REST para naves ([`App\Controller\StarshipApiController`](src/Controller/StarshipApiController.php))
-   Comando de consola personalizado ([`App\Command\ShipReportCommand`](src/Command/ShipReportCommand.php))
-   Protección CSRF personalizada en JS ([`assets/controllers/csrf_protection_controller.js`](assets/controllers/csrf_protection_controller.js))
-   Estilos con Tailwind CSS ([`assets/styles/app.css`](assets/styles/app.css))

## Créditos

Hecho con ❤️ usando [Symfony](https://symfony.com/) y [Tailwind CSS](https://tailwindcss.com/).

---

> Para más detalles, revisa los archivos fuente y la documentación interna.
