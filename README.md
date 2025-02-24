# Netflix-Backend

This project is the backend API for a Netflix clone, built using Laravel, Redis, and PostgreSQL. It provides a robust and scalable API for managing users, content, and AI-powered recommendations.

## Database Schema 📊

Here's a visual representation of the database schema:

![Database Schema](https://github.com/AliAlYaman/Netflix-Backend/blob/efda265d08023562e1b3afaa9965c75d8e1f4a00/img/schema.png)

---

## Features 🚀

* Laravel Framework: Built with Laravel for a robust and scalable API.
* RESTful API: Provides a clean and consistent API for frontend-backend communication.
* User Authentication: Secure authentication and authorization using Laravel Fortify.
* Content Management: CRUD operations for movies, shows, episodes, and categories.
* Caching with Redis: Implements Redis caching for improved performance.
* AI Integration: Integrates with an AI recommendation engine for personalized content suggestions.
* Pest Testing: Comprehensive test suite with Pest for reliable code.
* Docker Containerization: Dockerized for easy setup and deployment.
* GitHub Actions CI/CD: Automated testing and deployment pipelines.

## Technologies Used 💻

* Laravel: PHP framework for building web applications.
* Laravel Fortify: Authentication backend implementation for single page applications.
* Redis: In-memory data structure store for caching.
* PostgreSQL: Relational database system.
* Pest: Testing framework for PHP.
* Docker: Containerization platform.
* GitHub Actions: CI/CD platform.

## Installation 🛠️

1.  **Clone the repository:**

    ```bash
    git clone https://github.com/AliAlYaman/Netflix-Backend.git
    cd Netflix-Backend
    ```

2.  **Install dependencies:**

    ```bash
    composer install
    ```

3.  **Configure environment variables:**

    * Copy `.env.example` to `.env`.
    * Update the `.env` file with your database, Redis, and other configurations.

4.  **Run database migrations:**

    ```bash
    php artisan migrate
    ```


5.  **Start the development server:**

    ```bash
    php artisan serve
    ```

## Docker Setup 🐳

1.  **Build the Docker image:**

    ```bash
    docker build -t netflix-backend .
    ```

2.  **Run the Docker container:**

    ```bash
    docker run -p 8000:8000 -d netflix-backend
    ```

## Testing 🧪

* **Run Pest tests:**

    ```bash
    ./vendor/bin/pest
    ```

## GitHub Actions CI/CD 🚀

* The project includes GitHub Actions workflows for automated testing and deployment.
* Configure your GitHub repository secrets for database and deployment credentials.

## API Endpoints 🔗

* (Document your API endpoints here, e.g., `/api/movies`, `/api/users`, etc.)
