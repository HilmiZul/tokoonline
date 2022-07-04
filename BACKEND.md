LKS
  backend
    - tokoonline
  frontend
    - tokoonline

# CREATE PROJECT
$ composer create-project laravel/laravel tokoonline
atau
$ laravel create tokoonline

# MAKE A MODEL
$ php artisan make:model Kategori -m
---
## BIKIN FIELD DARI MODEL Kategori
...(skip)
---

# MIGRATE
$ php artisan migrate

# RUN APP
$ php artisan serve