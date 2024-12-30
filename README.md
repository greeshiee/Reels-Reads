# Reels-Reads Project

## Overview

Reels-Reads is a movie and book recommendation software that allows users to add, delete, and rate both books and movies. This project provides a simple and intuitive interface for managing your personal media library and preferences.

## Project Description

Reels-Reads is implemented using a combination of front-end and back-end technologies:

- Front-end: HTML, CSS, and JavaScript
- Back-end: PHP
- Database: MySQL

This stack allows for a responsive user interface with server-side processing and persistent data storage.

## Features

- Add new books and movies to your personal library
- Delete entries from your library
- Rate books and movies
- View your collection of books and movies
- Get recommendations based on your ratings and preferences
- User authentication (signup and login)
- Search functionality for media

## Installation

To set up this project locally, follow these steps:

1. Install XAMPP:
   - Download XAMPP from the official website: https://www.apachefriends.org/
   - Install XAMPP following the installation wizard

2. Clone the repository:
   ```bash
   git clone https://github.com/greeshiee/Reels-Reads.git
   ```

3. Move the cloned repository to the XAMPP `htdocs` folder:
   - On Windows: `C:\xampp\htdocs\`
   - On macOS: `/Applications/XAMPP/xamppfiles/htdocs/`
   - On Linux: `/opt/lampp/htdocs/`

4. Start XAMPP and ensure Apache and MySQL services are running

5. Open phpMyAdmin by navigating to `http://localhost/phpmyadmin` in your web browser

6. Create a new database for the project

7. Import the database schema:
   - In phpMyAdmin, select your new database
   - Go to the "Import" tab
   - Choose the `data/create.sql` file from the project directory
   - Click "Go" to import the schema

8. Load initial data (if needed):
   - Follow the same process to import `data/load.sql`

9. Update database connection settings:
   - Open `src/connect.php`
   - Update the database name, username, and password if necessary

## Usage

1. Start XAMPP and ensure Apache and MySQL services are running

2. Open a web browser and navigate to `http://localhost/Reels-Reads/`
