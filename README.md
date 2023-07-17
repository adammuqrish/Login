# Simple Login System - README

This is a simple login system implementation using PHP and MySQL. It consists of a login page, a backend script for handling login requests, and separate pages for successful and failed login attempts.

## Features

- Login page with a form for submitting username and password
- Backend script to authenticate user credentials
- Successful login page with a success message
- Failed login page with a failure message

## Prerequisites

- PHP installed on your server or local environment
- MySQL database for storing user information

## Setup and Usage

1. Clone the repository or download the code files to your local environment.

2. Create a MySQL database and import the included SQL file `login.sql` to create the necessary `users` table.

3. Update the database connection details in the `config2.php` file to match your MySQL database credentials.

4. Place the project files in your web server's root directory (e.g., `htdocs` for XAMPP or `www` for WAMP).

5. Access the login page in your browser by visiting `http://localhost/login.php` or the corresponding URL of your local environment.

6. Enter a valid username and password to test the login functionality.

## File Structure

- `login.php`: The login page HTML with a form for submitting login credentials.
- `config2.php`: Configuration file for connecting to the MySQL database.
- `login_success.php`: Page displayed upon successful login.
- `login_failed.php`: Page displayed upon failed login.

## Notes

- Make sure to update the MySQL database connection details in `config2.php` to match your environment.
- The provided code uses plain PHP and MySQL for demonstration purposes. In a real-world application, it is recommended to use prepared statements and password hashing for better security.

## License

This project is licensed under the [MIT License](LICENSE).
