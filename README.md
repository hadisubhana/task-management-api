# Task Management API

A RESTful API for managing projects, tasks, and comments.

Built with Laravel 12.

## Features

- User Authentication (Laravel Sanctum)
- Project management
- Task tracking
- Task comments
- REST API architecture
- Pagination

## Tech Stack

- Laravel 12
- MySQL
- Laravel Sanctum
- REST API

## Installation

clone repository
```bash
git clone https://github.com/hadisubhana/task-management-api
```
install dependency
```bash
composer install
```
setup env
```bash
cp .env.example .env
```
generate key
```bash
php artisan key:generate
```
run migration
```bash
php artisan migrate
```
run server
```bash
php artisan serve
```

## API Endpoints

### Auth
| Method | Endpoint      | Description       |
| ------ | ------------- | ----------------- |
| POST   | /api/register | Register new user |
| POST   | /api/login    | Login user        |

### Projects

| Method | Endpoint           | Description        |
| ------ | ------------------ | ------------------ |
| GET    | /api/projects      | Get all projects   |
| GET    | /api/projects/{id} | Get project detail |
| POST   | /api/projects      | Create project     |
| PUT    | /api/projects/{id} | Update project     |
| DELETE | /api/projects/{id} | Delete project     |

### Tasks

| Method | Endpoint        | Description     |
| ------ | --------------- | --------------- |
| GET    | /api/tasks      | Get all tasks   |
| GET    | /api/tasks/{id} | Get task detail |
| POST   | /api/tasks      | Create task     |
| PUT    | /api/tasks/{id} | Update task     |
| DELETE | /api/tasks/{id} | Delete task     |

### Comments

| Method | Endpoint                 | Description       |
| ------ | ------------------------ | ----------------- |
| POST   | /api/comments            | Create comment    |
| GET    | /api/tasks/{id}/comments | Get task comments | 

## Postman Collection

Import files:

- docs/Task Management API.postman_collection.json  
- docs/Task Management API.postman_environment.json

Then select environment **Task Management API** in Postman.

## Database Diagram
![ERD](docs/erd.png)

## Author

Hadi Subhana Malik
