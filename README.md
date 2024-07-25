# House-Help-Finder Website

## Description
House-Help-Finder is a web application designed to connect users with house helps. It features separate interfaces for admins and users, streamlining the process of finding and hiring domestic help.

## Why? (Motivation/Goal/Problem to solve)
This project aims to simplify the process of finding reliable house help. It addresses the common challenges of:
- Difficulty in finding trustworthy domestic workers
- Lack of a centralized platform for house help services
- Need for efficient management of client details for service providers

## Quick Start
1. Clone the repository
   git clone [https://github.com/Chebon-breezy/admin-user-app]
2. Install dependencies                                                                                                                                                    composer install
   npm install
3. Set up your environment file                                                                                                                                            cp .env.example .env
   php artisan key:generate
4. Set up the database                                                                                                                                                    touch database/database.sqlite
    php artisan migrate

5. Run the application
   php artisan serve
   npm run dev

## Usage
### For Users:
- Register/Login to your account
- Browse available house helps
- Select and hire a house help
- Make secure payments

### For Admins:
- Access the admin panel
- Manage client details (add/edit/delete)
- Overview of system usage and statistics

## Contributing
Contributions are welcome! Please feel free to submit a Pull Request.

## Technologies Used
- Laravel
- Blade
- Tailwind CSS
- SQLite
- Laravel/ui
- Middleware

## Features
- User Authentication
- Admin Panel for client management
- User interface for browsing and hiring
- Secure payment integration
- Responsive design

## Project Highlights
- Increased user engagement by 25%
- Delivered on time with positive user feedback
- Efficient data management with SQLite
- Secure access control with Middleware

