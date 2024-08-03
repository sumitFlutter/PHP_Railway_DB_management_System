# Railway Database Management System

## Overview

Welcome to the Railway Database Management System! This project is a web-based application developed using PHP and MySQL, designed to manage and maintain railway data. It operates on a localhost server setup, offering various features to efficiently handle railway operations.

## Features

- **User Authentication:** Register, log in, and manage user profiles.
- **Seat Management:** Add, edit, and delete Seats.
- **Train Management:** Manage train schedules, routes, and details.
- **Ticket Booking:** Book and manage train tickets.
- **Reporting:** Generate and view reports on train schedules and bookings(You can give FeedBack also on trains).

## Technologies Used

- **PHP:** Server-side scripting language for application logic.
- **MySQL:** Database management system for storing railway data.
- **Localhost Server:** Using XAMPP, WAMP, or similar for local development.

## Installation

Follow these steps to set up the Railway Database Management System on your local machine:

### Prerequisites

1. **Local Server Environment:**
   - Install **XAMPP** (includes Apache and MySQL) or **WAMP** (Windows-specific) on your computer.

2. **Text Editor/IDE:**
   - Use any code editor like **Visual Studio Code**, **Sublime Text**, or **PHPStorm**.

### Detailed Installation Steps

1. **Clone the Repository:**

   Open your terminal or command prompt and run:

   ```bash
   git clone https://github.com/sumitFlutter/railway-database-management-system.git
   Navigate to the Project Directory:

bash
Copy code
cd railway-database-management-system
Set Up the Database:

Open phpMyAdmin: Go to http://localhost/phpmyadmin/ in your web browser.

Create a New Database:

Click on the Databases tab.
Enter a name for your database (e.g., railway_db) and click Create.
Import the SQL File:

Go to the newly created database.
Click on the Import tab.
Click Choose File and select the railway_db.sql file from the database directory of your project.
Click Go to import the database schema and initial data.
Configure the Database Connection:

Open the config.php file located in the root directory of your project.

Update the following database connection settings:

php
Copy code
<?php
// Database configuration
$dbHost = 'localhost';
$dbUsername = 'root'; // default MySQL username
$dbPassword = '';     // default MySQL password (leave empty if not set)
$dbName = 'railway_db'; // name of the database you created

// Create a database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check the connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
Set Up the Local Server:

XAMPP:

Move the project folder (railway-database-management-system) to the htdocs directory inside your XAMPP installation directory (e.g., C:\xampp\htdocs).
Open the XAMPP Control Panel and start the Apache and MySQL services.
WAMP:

Move the project folder to the www directory inside your WAMP installation directory (e.g., C:\wamp64\www).
Launch WAMP and ensure that the Apache and MySQL services are running.
Access the Application:

Open your web browser and go to http://localhost/railway-database-management-system to view the application.
Usage
Login/Sign Up: Use the login page to access the system or create a new user account.
Manage Stations and Trains: Access the admin panel to add, edit, or delete railway stations and trains.
Booking: Use the booking section to search for trains and book tickets.
View Reports: Access reports from the admin panel to view train schedules and bookings.
Contributing
Contributions are welcome! If you have suggestions or improvements, please follow these steps:

Fork the repository.
Create a new branch (git checkout -b feature/your-feature).
Commit your changes (git commit -am 'Add new feature').
Push to the branch (git push origin feature/your-feature).
Create a new Pull Request.
License
This project is licensed under the MIT License. See the LICENSE file for details.

Contact
For any questions or issues, feel free to contact me:

Name: Sumit Gohil
GitHub: sumitFlutter
Email: gohilsumit142@gmail.com
Linkedin :-https://www.linkedin.com/in/sumit-gohil-5113742b6/
Thank you for checking out the Railway Database Management System!
