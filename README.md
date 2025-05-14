# Web_tech_project
Title: Hotel Management System

Technology Stack: PHP, HTML, CSS, JavaScript, MySQL

Architecture Used: MVC (Model-View-Controller)

Module Focus: STAFF

The staff module supports multiple staff roles, each with its own interface and functionality:

Manager

Housekeeping Staff

Catering Staff

Waiter

Guard

Each role includes custom dashboards and allows profile and password management.

**Architecture Breakdown
**
Model Layer

mydb.php: Establishes connection to the MySQL database.

staffs.sql: Contains SQL schema for storing staff information.

View Layer (UI Interfaces)

Located in the staff/view/ directory:

Registration/Login Pages:

registration.php, login.php, access_denied.php

Dashboards:

manager_dash.php, housekeeping_dashboard.php, waiter_dash.php, guard_dash.php, catering_dash.php

Profile Management:

*_Editprof.php, *_Editpass.php for each role

Task Management:

taskManipulate.php: Used by manager to assign/edit/delete tasks

Controller Layer (Business Logic)

Located in staff/controller/:

Authentication:

login_process.php, registration_pro.php

Manager Features:

manager_Userdeal.php, assignedtasks.php, availablestaff.php

manager_Editprofpro.php, manager_Editpasspro.php, manager_Deleteuserpro.php, manager_Searchuserpro.php

Staff Profile Management:

Separate *_Editprofpro.php and *_Editpasspro.php for each staff role

Others:

access.php, ((remout.php, remoutpro.php))--- remember password functionality

Additional Layers

layer/layout.css: CSS styling for the staff module

js/myscript.js: JavaScript for frontend validations and dynamic UI

Workflow Details

Registration Process

User visits registration.php and fills the form.

Data is sent to registration_pro.php.

This script validates the data and inserts a new user record using mydb.php.

Login Process

Accessed via login.php.

Upon form submission, credentials are checked by login_process.php.

User is redirected to the correct dashboard based on their role.

Dashboard Functionality

Each staff role accesses a dedicated dashboard.

Examples: waiter_dash.php, manager_dash.php, etc.

Functionalities include:

Task view (staff roles)

Task management (manager)

Profile editing and password changing

Task Assignment by Manager

Via manager_Userdeal.php or taskManipulate.php.

Staff availability checked through availablestaff.php.

Tasks are assigned or modified using assignedtasks.php.

Profile and Password Editing

UI: *_Editprof.php, *_Editpass.php

Logic: *_Editprofpro.php, *_Editpasspro.php

These files manage database updates for user data changes

Data and Database

Database Schema

Defined in Model/staffs.sql

Key table likely includes:

staff(id, name, role, username, password, contact_info, assigned_tasks, availability)

Data Flow

User data submitted via forms → processed by controller → stored using mydb.php

Dynamic content displayed using PHP scripts in views
