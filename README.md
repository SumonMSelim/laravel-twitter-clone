## Laravel Twitter Clone

### Prerequisites
* [Docker](https://www.docker.com/)

### Installation

#### Build and start Docker services

```bash
docker-compose up --build -d
```

#### Connect to php-fpm (app) container

```bash
docker-compose exec app sh
```

#### Copy .env file

```bash
cp .env.example .env
```

#### Install the dependencies

```bash
composer install
```

#### Run the database migration and seeder (if needed)

```bash
php artisan migrate --seed
```

#### Run the tests

```bash
bin/phpunit
```
