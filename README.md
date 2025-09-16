# FrankenPHP Laravel Playground

A modern Laravel application running on [FrankenPHP](https://frankenphp.dev/) with Docker, featuring a complete product management system with categories, authentication, and role-based permissions.

## 🚀 Features

- **FrankenPHP Integration**: High-performance PHP application server with built-in HTTP/2 and WebSocket support
- **Docker Environment**: Complete containerized development setup
- **Product Management**: Full CRUD operations for products with image uploads
- **Category System**: Organize products with hierarchical categories
- **User Authentication**: Complete Laravel authentication system
- **Role-Based Permissions**: Spatie Laravel Permission integration
- **Modern UI**: Clean, responsive interface with Bootstrap styling

## 🛠 Tech Stack

- **Backend**: Laravel 11.x
- **Web Server**: FrankenPHP with Caddy
- **Database**: MySQL 8.0
- **Frontend**: Blade templates with Bootstrap 5
- **Containerization**: Docker & Docker Compose
- **Permissions**: Spatie Laravel Permission

## 📋 Prerequisites

- [Docker](https://www.docker.com/) and [Docker Compose](https://docs.docker.com/compose/)
- Git

## 🚀 Quick Start

1. **Clone the repository:**
   ```bash
   git clone https://github.com/ZayYarNaing98/frankenphp-playground.git
   cd frankenphp-playground
   ```

2. **Copy environment file:**
   ```bash
   cp .env.example .env
   ```

3. **Start the application:**
   ```bash
   docker compose -f docker-compose.local.yml up -d --build
   ```

   Or use the setup script:
    ```bash
    ./scripts/local_setup.sh
    ```

4. **Access the application:**
   - Web application: [http://localhost:8080](http://localhost:8080)

## 🔧 Development Commands

- **Start containers:**
  ```bash
  docker compose -f docker-compose.local.yml up -d
  ```

- **Stop containers:**
  ```bash
  docker compose -f docker-compose.local.yml down
  ```

- **Rebuild containers:**
  ```bash
  docker compose -f docker-compose.local.yml up -d --build
  ```

- **View logs:**
  ```bash
  docker compose -f docker-compose.local.yml logs -f
  ```

- **Run Artisan commands:**
  ```bash
  docker compose -f docker-compose.local.yml exec app php artisan [command]
  ```

## 📚 Documentation

Detailed setup and configuration instructions are available in the [docs/](docs/) directory:

- [Local Setup Guide](docs/local_setup.md) - Complete Docker setup instructions

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 🙏 Acknowledgments

- [Laravel](https://laravel.com/) - The PHP framework
- [FrankenPHP](https://frankenphp.dev/) - The application server
- [Spatie](https://spatie.be/) - Laravel packages
