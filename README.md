# Casper Framework Deployment Guide

## Requirements
- PHP 7.4+
- Composer
- Node.js with Tailwind CLI (`npm install -g tailwindcss`)
- MySQL

## Setup
1. Clone or unzip the project
2. Run: `composer install`
3. Configure DB in `app/config/db.php`
4. Run: 
   ```bash
   npx tailwindcss -i ./input.css -o ./public/css/style.css --watch
   ```
5. Start server: `php -S localhost:8000 -t public`
6. Access: [http://localhost:8000](http://localhost:8000)

## Optional
- Deploy via Apache/Nginx
- Use Valet or Docker for local development
# casper
