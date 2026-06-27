# DecodeLabs Task 2 - Backend API Development 🚀

## Project Overview

This project is a simple backend API developed as part of the **DecodeLabs Internship Program - Task 2**.

The goal of this task was to create a backend API that handles application logic, receives user input, validates data, and communicates with a database using PHP.

## Technologies Used

- PHP
- MySQL
- XAMPP (Apache Server)
- JSON

## Project Features

✅ Created REST API endpoints  
✅ Handles user input and responses  
✅ Accepts data using POST requests  
✅ Validates basic user data  
✅ Connects backend with MySQL database  
✅ Returns JSON responses  




**Purpose:**

Stores contact form data into the database.

Example Request:

```json
{
    "name": "Malaika",
    "email": "malaika@gmail.com",
    "message": "Hello from API"
}
**JSON:**
{
    "status": "success",
    "message": "Message sent successfully"
}
Database Connection

File:

api/db.php

Purpose:

Connects PHP backend with MySQL database
Handles database communication
Project Structure
decodelabs-task-2-backend-api

│
├── api
│   │
│   ├── db.php
│   └── contact.php
│
└── README.md
**How to Run the Project**
Install XAMPP.
Start Apache and MySQL from XAMPP Control Panel.
Place the project folder inside:
C:\xampp\htdocs
Create the database in phpMyAdmin.
Open the API using:
http://localhost/project-folder/api/contact.php
Test API requests using Postman.
Skills Practiced
Backend Development
PHP Server-side Programming
API Development
HTTP POST Requests
JSON Data Handling
Database Connectivity
Learning Outcome

This project helped me understand how frontend applications communicate with backend services, how APIs process requests, and how server-side logic handles user data.

Author

Malaika Rafiq

Software Engineering Student
Full Stack Development Learner

