# Jaguar

## Requisitos

- PHP ^8.3
- Composer
- Node.js

## Instalación

```bash
cp .env.example .env
composer install
php artisan key:generate
npm install
npm run build
php artisan migrate
```

## Desarrollo

```bash
php artisan serve
npm run dev
```

O usando el comando de setup incluido:

```bash
composer setup
```
