# Slang Management Setup Guide

## 📌 Overview

This project includes:

* Slang Migration
* Slang Factory (with realistic data)
* Seeder (25 slangs + users + admin)

---

## ⚙️ Installation

```bash
git clone <repo-url>
cd <project-folder>
composer install
npm install
```

---

## 🔧 Environment Setup

Update `.env` file:

```
DB_DATABASE=your_db_name
DB_USERNAME=root
DB_PASSWORD=
```

---

## 🚀 Run Project

```bash
php artisan migrate:fresh --seed
php artisan serve
```

---

## 🧪 Seeder Details

Seeder will:

* Create 2 dummy users
* Create 1 admin user
* Generate 25 slang records
* Assign each slang to random users
* Add status (active/inactive)

---

## 📂 Important Files

```
database/
 ├── migrations/
 │    └── create_slangs_table.php
 ├── factories/
 │    └── SlangFactory.php
 ├── seeders/
 │    └── DatabaseSeeder.php
```

---

## 📊 Sample Data

| Word | Meaning              | Example       |
| ---- | -------------------- | ------------- |
| Lit  | Exciting             | Party was lit |
| Sus  | Suspicious           | He looks sus  |
| GOAT | Greatest of all time | He is GOAT    |

---

## ✅ Useful Commands

```bash
php artisan migrate
php artisan db:seed
php artisan migrate:fresh --seed
```

---

## 👨‍💻 Author

[Vaibhav, Vivek]
