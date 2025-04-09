#student management system

*Features*
    -Add new student
    -Edit existing student
    -Delete student
    -View list of all students

*Database Setup*
    1. Open phpMyAdmin
    2. Run the following SQL

    CREATE DATABASE student_management;

    USE student_management;

    CREATE TABLE students (
        id INT AUTO_INCREMENT PRIMARY KEY,
        student_name VARCHAR(100) NOT NULL,
        class_division VARCHAR(50) NOT NULL,
        roll_number VARCHAR(20) NOT NULL
    );


*Clone Project*

    git clone https://github.com/ajay-baviskar/student-management.git


*DB config*

Got to in project and change db credentials acroding. 


*View app in your brawser:*
    http://localhost/student-management/index.php
