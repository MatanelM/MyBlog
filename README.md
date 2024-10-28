# Blog Application

A responsive blog application built with Laravel, featuring user authentication, CRUD functionality for blog posts, and a dynamic dashboard interface.

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Daily Fetch and Save](#daily-fetch-and-save)
- [Screenshots](#screenshots)

## Features

- **User Authentication**: Implemented secure user registration, login, and email verification using Laravel Breeze.
- **CRUD Operations**: Users can create, read, update, and delete blog posts with authorization checks.
- **Responsive Design**: Built with Tailwind CSS for a clean, modern, and responsive user experience.
- **Dynamic Dashboard**: A dashboard showcasing all posts from all users, integrated with Blade templating.
- **Database Management**: Data stored using SQLite for local development, ensuring efficient data handling.

## Technologies Used

- **Backend**: Laravel (PHP)
- **Frontend**: HTML, CSS, Tailwind CSS, Blade Templating
- **Database**: SQLite (for local development)

## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/your-username/blog-application.git
    cd blog-application
    ```

2. **Install dependencies:**

    ```bash
    composer install
    npm install
    ```

3. **Configure Environment:**
   - Copy `.env.example` to `.env` and set up database credentials.
   - Run the following command to generate an application key:

    ```bash
    php artisan key:generate
    ```

4. **Database Setup:**

    - Migrate the database:

    ```bash
    php artisan migrate
    ```

5. **Run the Application:**

    ```bash
    php artisan serve
    ```

6. **Optional**: Compile frontend assets (if using Laravel Mix).

    ```bash
    npm run dev
    ```

## Usage

- Register a new account, verify email (if enabled), and log in.
- Create, edit, and delete blog posts.
- View all posts on the dashboard, with dynamic data rendering.

## Daily Fetch and Save

If you prefer to use a standalone cron job with a curl GET request, you can set it up directly on your server without involving Laravel. Here’s how:

### Step 1: Open Your Crontab

Open the crontab file for your user:

```bash
crontab -e
```
### Step 2: Add the Cron Job for a Daily Curl Request

Add a new line to define the cron job. For example, to run the curl request every day at midnight, add:

```bash
0 0 * * * curl -X GET "https://your-endpoint-url.com" > /dev/null 2>&1
```

### Step 3: Save and Exit

Save and close the crontab file.

## Screenshots

### Mobile View
![phone](https://github.com/user-attachments/assets/2cb7ad93-3ebc-4c6f-8d89-ba4e463d5d7d)

### Tablet View
![tablet](https://github.com/user-attachments/assets/494c995b-f1fc-4b29-b931-648d516c2fdf)

### Desktop View
![desktop](https://github.com/user-attachments/assets/d0c6359d-f786-45f2-8b45-97730ba6db9b)
