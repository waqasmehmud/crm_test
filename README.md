# Lead Capture Mini-Test

## Overview
This project implements a simple PHP + MySQL lead capture system based on the test requirements.

It includes:
- A lead form (Task A)
- A MySQL index optimization with EXPLAIN (Task B)
- Notes on lead verification (Task C)

---

## Requirements
- PHP ≥ 7.4
- MySQL ≥ 5.7
- Local web server (XAMPP, MAMP, WAMP, or similar)

---

## Setup Instructions

### 1. Database
Create the database and table by importing `crm_test.sql`:
```bash
mysql -u root -p < crm_test.sql
```

### 2. Configure Database Connection
Update `config.php` with your MySQL credentials:

```php
$host = "localhost";
$user = "root";       // DB username
$pass = "password";   // DB password
$db   = "crm_test";   // database name
```

### 3. Run Locally
Place all project files in your server root (htdocs, public_html, etc.).

Open the form in a browser with tracking parameters:
```
http://localhost/crm_test/form.php?gclid=test123&sub_id=sub456
```

Fill out the form and submit → the lead data is saved into the database.

View all leads at:
```
http://localhost/crm_test/admin.php
```
