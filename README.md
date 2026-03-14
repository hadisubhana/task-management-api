# Task Management API

A RESTful API for managing **projects, tasks, and comments**.

This API is built using Laravel and designed as the backend service for a fullstack task management application.

The system demonstrates authentication, relational database design, and clean REST API architecture suitable for real-world applications.

Frontend Dashboard:
https://github.com/hadisubhana/task-manager-frontend

---

# Features

* User authentication using Laravel Sanctum
* Project CRUD
* Task CRUD
* Task comments system
* RESTful API design
* Pagination support
* Clean API response structure

---

# Tech Stack

* Laravel 12
* MySQL
* Laravel Sanctum
* REST API architecture

---

# Installation

Clone repository

```bash
git clone https://github.com/hadisubhana/task-management-api
```

Go to project folder

```bash
cd task-management-api
```

Install dependencies

```bash
composer install
```

Setup environment

```bash
cp .env.example .env
```

Generate application key

```bash
php artisan key:generate
```

Configure database inside `.env`

Run migrations

```bash
php artisan migrate
```

Run seeders

```bash
php artisan db:seed
```

Run development server

```bash
php artisan serve
```

API will be available at:

```
http://127.0.0.1:8000/api
```

---

# Authentication

This API uses **Laravel Sanctum token authentication**.

Login endpoint will return an access token:

```json
{
  "token": "your_access_token"
}
```

Use the token in request headers:

```
Authorization: Bearer YOUR_TOKEN
```

---

# API Endpoints

## Auth

| Method | Endpoint      | Description       |
| ------ | ------------- | ----------------- |
| POST   | /api/register | Register new user |
| POST   | /api/login    | Login user        |

---

## Projects

| Method | Endpoint           | Description        |
| ------ | ------------------ | ------------------ |
| GET    | /api/projects      | Get all projects   |
| GET    | /api/projects/{id} | Get project detail |
| POST   | /api/projects      | Create project     |
| PUT    | /api/projects/{id} | Update project     |
| DELETE | /api/projects/{id} | Delete project     |

---

## Tasks

| Method | Endpoint        | Description     |
| ------ | --------------- | --------------- |
| GET    | /api/tasks      | Get all tasks   |
| GET    | /api/tasks/{id} | Get task detail |
| POST   | /api/tasks      | Create task     |
| PUT    | /api/tasks/{id} | Update task     |
| DELETE | /api/tasks/{id} | Delete task     |

---

## Comments

| Method | Endpoint                 | Description       |
| ------ | ------------------------ | ----------------- |
| POST   | /api/comments            | Create comment    |
| GET    | /api/tasks/{id}/comments | Get task comments |
| DELETE | /api/comments/{id}       | Delete comments   |

---

# API Response Example

Example response when fetching projects:

```json
{
  "message": "Created",
  "data": [
    {
      "id": 1,
      "name": "Website Redesign",
      "description": "Update landing page UI",
      "created_at": "2026-03-10"
    }
  ]
}
```

---

# Postman Collection

You can test the API using Postman.

Import files:

```
docs/Task Management API.postman_collection.json
docs/Task Management API.postman_environment.json
```

Then select environment **Task Management API**.

Using: Postman

---

# Database Diagram

![ERD](docs/erd.png)

---

# Related Project

Frontend Dashboard:

https://github.com/hadisubhana/task-manager-frontend

Built with:

* React
* Tailwind CSS
* Axios
* React Router

---

# Author

Hadi Subhana Malik

Tech Stack:

Laravel | React | REST API | MySQL | Tailwind

---

# Purpose

This project was built as a portfolio project to demonstrate:

* API integration
* Full CRUD frontend
* Authentication handling
* Modern dashboard UI
* Fullstack architecture