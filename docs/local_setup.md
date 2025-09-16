## Docker & FrankenPHP Setup

This project includes a modern Docker setup using [FrankenPHP](https://frankenphp.dev/) for running Laravel applications efficiently.

### Prerequisites

- [Docker](https://www.docker.com/) and [Docker Compose](https://docs.docker.com/compose/) installed on your machine.

### Building and Running the Application

1. **Clone the repository** (if you haven't already):

    ```bash
    git clone https://github.com/ZayYarNaing98/frankenphp-playground.git
    cd frankenphp-playground
    ```

2. **Copy the environment file** (if not already present):

    ```bash
    cp .env.example .env
    ```

3. **Build and start the containers:**

    ```bash
    docker compose -f docker-compose.local.yml up -d --build
    ```

    Or use the setup script:
    ```bash
    ./scripts/local_setup.sh
    ```

    The Docker Compose command will:
    - Build the Docker image using `.docker/php/Dockerfile.local`
    - Start the containers in the background
    - Apply all changes and configurations

4. **Access the application:**
    - The Laravel app will be available at [http://localhost:8080](http://localhost:8080) by default.

### Docker Compose Details

- The main application service is built from `.docker/php/Dockerfile.local`.
- The codebase is mounted into the container at `/var/www`.
- The FrankenPHP web server uses the configuration from `.docker/caddy/Caddyfile`.
- A MySQL database service is included and networked with the app container.
- All services are attached to a custom Docker network (`userapi-network`) for easy communication.

### Useful Commands

- **Start containers:**
    ```bash
    docker compose -f docker-compose.local.yml up -d
    ```
- **Stop containers:**
    ```bash
    docker compose -f docker-compose.local.yml down
    ```
- **Rebuild containers after changes:**
    ```bash
    docker compose -f docker-compose.local.yml up -d --build
    ```
- **View logs:**
    ```bash
    docker compose -f docker-compose.local.yml logs -f
    ```

### Customization

- To change web server or PHP settings, edit `.docker/php/Dockerfile.local` or `.docker/caddy/Caddyfile`.
- To add more services (e.g., Redis), update `docker-compose.yml`.

