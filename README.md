# SQL Injection and Defence

## Overview
本项目中使用Apache作为web服务器，并使用MySQL作为数据库。创建了一个简单的登陆页面，

## Components
- `web.php`: 
- `web_with_defense.php`: 

## Installation

### Requirements
The project is deployed and verified on `Ubuntu`, in principle all other platforms can run, you need to install:
- Apache
- MySQL
- Php

### Setup
1. Clone the repository to your local machine.
2. Update your Ubuntu system. Open a terminal and run the following command:
  - `sudo apt update`
  - `sudo apt upgrade`
3. Install Apache:
  - `sudo apt install apache2` This project uses Apache as a web server.
4. Install MySQL:
  - `sudo apt install mysql-server` This project uses MySQL as the database server.
5. Install PHP and the MySQL extension for PHP.
  - `sudo apt install php libapache2-mod-php php-mysql`
6. Restart the Apache service to apply the changes
  - `sudo systemctl restart apache2`

## Usage
1. Create a database in MySQL for testing purposes.
2. Create a user and grant them access to the newly created database.
3. reate a test table within the database and insert some test data.
4. Put `web.php` in `/var/www/html`.
5. Go to `http://localhost/web.php` in your browser and you should now see a login screen.

### Attack
As mentioned above, we have created a simple login form page, `web.php`, and the form authenticates the login by matching the username and password entered by the user against the records in the database. Now, we can try to perform an SQL injection on that web.

#### SQL Injection Testing
  - ‘Always True’ Injection
Entering `'1'='1` in the Username and Password window constructs an SQL query that, if the site has an SQL injection vulnerability, will cause the condition '1'='1' to be true whenever it is true, bypassing authentication.

  - ‘Commenting Out the Rest’ Injection
You can try to comment out the rest of the SQL statement by adding a comment symbol to the input. Type `admin' --` for the username. This will cause the part that checks for the password to be commented out, thus bypassing authentication.

### Defense
After discovering SQL injection vulnerabilities on your website, you should take immediate steps to fix these vulnerabilities.
Place `web_with_defence.php` into the `/var/www/html` path and replace `web.php`.
Return to your browser and you will see that the above injection was unsuccessful.

Key defences include:
  - Use Prepared Statements:
Ensure that all SQL queries use parameterised queries, this avoids embedding user input directly into the SQL statement.
  - Use an ORM (Object-Relational Mapping) framework:
These frameworks often provide a more secure way to handle database queries, reducing the need to write SQL directly.

