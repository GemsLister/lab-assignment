# Laboratory Assignment - Laravel Authentication & Dashboard

## Overview
This is a Laravel web application implementing user authentication, database migrations, factories, seeders, and a responsive dashboard using Laravel Breeze and Tailwind CSS.

## Project Structure
```
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   └── Auth/          (Breeze authentication controllers)
│   │   └── Requests/
│   ├── Models/
│   │   └── User.php           (User model with required fields)
│   └── Providers/
├── database/
│   ├── factories/
│   │   └── UserFactory.php    (Generate 100 dummy users)
│   ├── migrations/
│   │   └── 0001_01_01_000000_create_users_table.php
│   └── seeders/
│       └── DatabaseSeeder.php (Seed 100 + 1 admin user)
├── resources/
│   ├── views/
│   │   ├── auth/              (Login, register views)
│   │   ├── dashboard.blade.php (Dashboard with account info)
│   │   └── layouts/           (App layout component)
│   └── css/ & js/
├── routes/
│   ├── web.php               (Dashboard route with auth middleware)
│   └── auth.php              (Authentication routes)
└── public/                   (Built assets via Vite)
```

## Features Implemented

### 1. Database Migration ✅
- User table with fields:
  - `id` (primary key)
  - `username` (string, unique)
  - `name` (string)
  - `email` (string, unique)
  - `password` (string)
  - `is_active` (boolean, default: true)
  - `last_login` (timestamp, nullable)
  - `remember_token`
  - `timestamps` (created_at, updated_at)

### 2. User Factory & Seeders ✅
- **UserFactory**: Generates realistic dummy data
  - Unique usernames
  - Unique emails
  - Hashed passwords
  - Random last_login dates (1-month range)
  - Active status
  
- **DatabaseSeeder**: 
  - Creates 100 seeded users via factory
  - Creates 1 test admin user with known credentials

### 3. Authentication Scaffolding ✅
- Laravel Breeze installed and configured
- Login view with email/password authentication
- Registration view for new users
- Password reset functionality
- Session management with remember-me option

### 4. Routing & Middleware ✅
- `/dashboard` route protected with `auth` middleware
- Automatic redirect to dashboard after successful login
- Redirect to home (`/`) after logout
- Login/register accessible only to guests

### 5. Dashboard Interface ✅
- Responsive layout using Tailwind CSS
- Displays user information:
  - Welcome message with user's name
  - Username display
  - Email address
  - Account status (Active/Inactive)
  - Member since date
  - Last login timestamp
- Quick action buttons:
  - Edit Profile link
  - Logout button
- Dark mode support

## Setup Instructions

### Prerequisites
- PHP 8.1 or higher
- Composer
- MySQL/MariaDB
- Node.js & npm (for Vite assets)

### Installation Steps

1. **Clone/Extract the project**
   ```bash
   cd Laboratory-Assignment
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node dependencies**
   ```bash
   npm install
   ```

4. **Create environment configuration**
   ```bash
   cp .env.example .env
   ```

5. **Generate application key**
   ```bash
   php artisan key:generate
   ```

6. **Configure Database**
   Edit `.env` file with your MySQL credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=laboratory_assignment
   DB_USERNAME=root
   DB_PASSWORD=
   ```

7. **Run migrations and seed database**
   ```bash
   php artisan migrate:fresh --seed
   ```
   This will:
   - Create all database tables
   - Populate 100 random users
   - Create 1 admin test user

8. **Build frontend assets**
   ```bash
   npm run build
   ```
   
   Or for development (with hot reload):
   ```bash
   npm run dev
   ```

9. **Start development server**
   ```bash
   php artisan serve
   ```
   
   The application will be available at `http://localhost:8000`

   (Optional) In another terminal, run Vite:
   ```bash
   npm run dev
   ```

## Sample Login Credentials

### Test Admin Account
- **Email:** `admin@example.com`
- **Username:** `admin123`
- **Password:** `password123`

### Sample Random Users
The database includes 100 randomly generated users. All have:
- **Password:** `password123` (same for all seeded users)
- **Examples of usernames:** Check database using:
  ```bash
  php artisan tinker
  > \App\Models\User::limit(5)->pluck('email', 'username')
  ```

## Testing the Application

### 1. Login Test
1. Navigate to `http://localhost:8000/login`
2. Enter credentials:
   - Email: `admin@example.com`
   - Password: `password123`
3. Click "Sign in"
4. Should redirect to `/dashboard`

### 2. Registration Test
1. Navigate to `http://localhost:8000/register`
2. Fill in the form with new user details
3. Click "Register"
4. Should redirect to `/dashboard` if verified, or verification screen

### 3. Dashboard Test
1. After login, view user dashboard
2. Check displayed information:
   - Personal details
   - Account status
   - Last login time

### 4. Logout Test
1. Click "Logout" button on dashboard
2. Should redirect to home page (`/`)

## Project Requirements Checklist

- ✅ Database migration with all required fields
- ✅ User factory generating realistic dummy data
- ✅ Seeder creating 100 + 1 test users
- ✅ Laravel Breeze authentication system
- ✅ Login, register, logout fully functional
- ✅ `/dashboard` route protected with auth middleware
- ✅ Automatic redirect to dashboard after login
- ✅ Dashboard displays user information
- ✅ Responsive UI using Tailwind CSS
- ✅ Clean, readable code organization

## File Changes Summary

### Created/Modified Files
1. **database/migrations/0001_01_01_000000_create_users_table.php**
   - Changed `is_active` from string to boolean
   - Changed `last_login` from string to timestamp
   - Removed `email_verified_at` field

2. **database/factories/UserFactory.php**
   - Updated to generate all required fields
   - Removed `email_verified_at` 
   - Added `is_active` and `last_login` generation

3. **database/seeders/DatabaseSeeder.php**
   - Added Hash facade import
   - Seeds 100 users + 1 admin user

4. **app/Models/User.php**
   - Updated `$fillable` to include new fields
   - Updated `casts()` for proper type handling
   - Removed `email_verified_at` casting

5. **resources/views/dashboard.blade.php**
   - Enhanced with multi-card layout
   - Added user information display
   - Added responsive grid layout
   - Added quick action buttons

6. **resources/views/welcome.blade.php**
   - Changed to always show Login and Register buttons
   - Removed conditional Dashboard button for authenticated users

## Troubleshooting

### Database Connection Error
- Verify MySQL is running
- Check `.env` database credentials
- Ensure database exists: `CREATE DATABASE laboratory_assignment;`

### Seeding Fails with "Column not found"
- Run: `php artisan migrate:fresh` to recreate schema
- Clear cache: `php artisan cache:clear && php artisan config:clear`
- Re-run: `php artisan migrate:fresh --seed`

### Assets Not Loading
- Run: `npm install && npm run build`
- For development: `npm run dev` in separate terminal

### Login Doesn't Work
- Ensure `php artisan migrate:fresh --seed` was run
- Check database contains users: `php artisan tinker > User::count()`
- Verify hashed passwords exist: `User::first()->password`

## Notes
- All seeded users have the password `password123`
- The admin user has username `admin123`
- Database auto-includes creation tracking (created_at, updated_at)
- User sessions are stored in database (see `sessions` table)
- Email verification is optional (not enforced by dashboard route)

## Additional Commands

```bash
# Reset database
php artisan migrate:fresh --seed

# Clear all caches
php artisan cache:clear && php artisan config:clear

# View application logs
tail -f storage/logs/laravel.log

# Run tests (if applicable)
php artisan test

# Interactive shell
php artisan tinker
```

---

**Assignment Completion Date:** February 9, 2026
**Framework:** Laravel 11
**Frontend:** Tailwind CSS + Vite
**Authentication:** Laravel Breeze

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
