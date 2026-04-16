# Slang Management System

A modern Laravel-based web application for managing and exploring college slang terms. Features user authentication, admin approval system, and a clean, responsive UI built with Tailwind CSS.

## 📋 Prerequisites

Before running this project, ensure you have the following installed:

- **PHP 8.2 or higher**
- **Composer** (PHP dependency manager)
- **Node.js 18+ and npm** (for frontend assets)
- **MySQL 8.0+** (or any Laravel-supported database)
- **Git** (for cloning the repository)

## 🚀 First-Time Setup

### 1. Clone the Repository
```bash
git clone <your-repo-url>
cd <project-folder>
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Install Node.js Dependencies
```bash
npm install
```

### 4. Environment Configuration
```bash
# Copy the environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 5. Database Setup
Update your `.env` file with database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=slangdb
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 6. Run Migrations and Seeders
```bash
# Run migrations and seed the database
php artisan migrate:fresh --seed
```

### 7. Build Frontend Assets
```bash
# For development
npm run dev

# For production
npm run build
```

### 8. Start the Development Server
```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser.

## 🔄 Regular Run (After Initial Setup)

### Development Mode
```bash
# Terminal 1: Start Laravel server
php artisan serve

# Terminal 2: Start Vite dev server for hot reloading
npm run dev
```

### Production Mode
```bash
# Build assets for production
npm run build

# Start server
php artisan serve
```

## 👤 Admin Access

After seeding, you can login with admin credentials:
- **Email**: `admin@gmail.com`
- **Password**: `password`

## 📁 Project Structure

```
├── app/
│   ├── Http/Controllers/     # Controllers
│   ├── Models/              # Eloquent models
│   └── Providers/           # Service providers
├── database/
│   ├── factories/           # Model factories
│   ├── migrations/          # Database migrations
│   └── seeders/             # Database seeders
├── public/                  # Public assets
├── resources/
│   ├── css/                 # Stylesheets
│   ├── js/                  # JavaScript files
│   └── views/               # Blade templates
├── routes/
│   └── web.php              # Web routes
└── tests/                   # Test files
```

## 🛠️ Useful Commands

### Database
```bash
# Fresh migration with seed
php artisan migrate:fresh --seed

# Run migrations only
php artisan migrate

# Rollback last migration
php artisan migrate:rollback

# Create new migration
php artisan make:migration create_example_table
```

### Development
```bash
# Clear cache
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Run tests
php artisan test

# Run specific test
php artisan test --filter=ExampleTest

# Code formatting
./vendor/bin/pint
```

### Assets
```bash
# Development build with hot reload
npm run dev

# Production build
npm run build

# Preview production build
npm run preview
```

## 🧪 Testing

Run the test suite:
```bash
php artisan test
```

## 🔧 Troubleshooting

### Common Issues

**Database Connection Error**
- Ensure MySQL is running
- Check `.env` database credentials
- Create the database if it doesn't exist

**Permission Issues**
```bash
# Set proper permissions for storage
chmod -R 755 storage/
chmod -R 755 bootstrap/cache/
```

**Port Already in Use**
```bash
# Kill process on port 8000
lsof -ti:8000 | xargs kill -9

# Or use different port
php artisan serve --port=8080
```

**Node Modules Issues**
```bash
# Clear node modules and reinstall
rm -rf node_modules package-lock.json
npm install
```

## 📊 Seeder Details

The database seeder creates:
- **2 dummy users** with random data
- **1 admin user** (admin@gmail.com / password)
- **25 slang terms** with realistic college slang
- **Status assignments** (pending/approved/rejected)

## 🎨 Features

- ✅ User registration and authentication
- ✅ Slang submission and management
- ✅ Admin approval system
- ✅ Search functionality
- ✅ Responsive design with Tailwind CSS
- ✅ Real-time search suggestions
- ✅ User dashboard
- ✅ Admin dashboard

## 📝 API Endpoints

- `GET /` - Home page
- `GET /explore` - Browse approved slangs
- `GET /login` - User login
- `GET /register` - User registration
- `POST /search` - Search slangs
- `GET /dashboard` - User dashboard
- `GET /admin/dashboard` - Admin dashboard (admin only)

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Run tests: `php artisan test`
5. Format code: `./vendor/bin/pint`
6. Commit your changes
7. Push to the branch
8. Create a Pull Request

## 📄 License

This project is licensed under the MIT License.

## 👨‍💻 Author

[Vaibhav, Vivek]
