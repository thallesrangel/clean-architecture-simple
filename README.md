# Clean Architecture com PHP & Lumen Framework

## Aplicação baseada no artigo
[Link do artigo](https://medium.com/the-software-architecture-blog/clean-architecture-for-php-slim-framework-21bb4b2c76bd)
[Link github](https://github.com/sahbijabnouni/clean-architecture-php)

## Setup

```
    docker-compose up -d --build
```

## Migration

```
    php artisan migrate
```

## Docs

### Create User - URL: localhost:8000/users

```
{
    "first_name": "Thalles",
    "last_name": "Rangel",
    "email": "rangelthr@gmail.com"
}
```

### Get User

```
    localhost:8000/users
```

### Get User By ID

```
    localhost:8000/users/1
```