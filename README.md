# 🏠 City-Based House Rental Platform

A beginner-friendly PHP web application that allows users to search for houses available for rent based on their city and enables house owners to list their properties with images. Designed with simplicity and usability in mind, perfect for learning PHP, MySQL, sessions, and basic web styling.

## 📌 Features

- ✅ Combined **Login/Registration** page with role selection (Owner / Customer)
- 🔐 **Role-based dashboard**: Owners and Customers have distinct interfaces
- 🏙️ **City-based filtering**: Customers can select a city to view available houses
- 📸 Owners can **upload images** of their properties
- 🎨 **Modern UI**: Gradient backgrounds, animations, and scroll effects for a smooth UX
- 💾 Data stored and retrieved from **MySQL database**
- 🔁 **Session-based login/logout** system for both user types

## 🛠️ Tech Stack

- **Frontend**: HTML5, CSS3, JavaScript
- **Backend**: PHP (Core)
- **Database**: MySQL
- **AJAX**: For asynchronous data fetching
- **Styling**: CSS gradients, animations, background images

## 🚀 Setup Instructions

1. Clone the repository or download the ZIP.
2. Create a MySQL database (e.g., `rental_db`) and import the provided `schema.sql`.
3. Configure your `db.php` with correct database credentials.
4. Place the project in your local server (e.g., `htdocs` for XAMPP).
5. Start Apache and MySQL via XAMPP/WAMP.
6. Visit `localhost/project-folder/` in your browser.

## 📂 Folder Structure

project-folder/ │ ├── index.php # Login & registration page ├── owner.php # Dashboard for owners ├── customer.php # Dashboard for customers ├── search.php # Search page for rental listings ├── logout.php # Logout handler ├── upload.php # File/image upload logic ├── db.php # Database connection ├── assets/ # CSS, images, scripts ├── houses.sql # Dummy data for houses └── README.md # Project overview


## 🧪 Sample Cities for Testing

- **Vijayawada**
- **Guntur**
- **Mylavaram**

## 📸 Screenshots

> *Insert screenshots of login page, owner dashboard, customer interface, and search results here*

## 💡 Learning Outcomes

- PHP Form Handling (GET, POST)
- Session and Cookie management
- File Uploads and Validation
- AJAX-based search/filter
- MySQL CRUD operations

## 📬 Feedback & Contributions

This project was built as a learning exercise. Suggestions, improvements, and collaborations are welcome!

---

> “Start simple. Scale smart.” 🚀
