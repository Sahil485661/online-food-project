# 🍽️ Online Food Ordering System

An intuitive and fully functional web application that allows users to browse restaurants, view dishes, place orders, and manage their profiles. Built using **PHP**, **CSS**, and **JavaScript**, this system streamlines food ordering for both customers and admins.

## 📌 Features

- 🔐 **User Authentication**: Secure login, registration, and logout for customers
- 🛍️ **Restaurant & Dish Listings**: View detailed menus from multiple restaurants
- 🧾 **Cart & Checkout**: Add items to cart and place orders seamlessly
- 👤 **User Profile**: Update profile and track order history
- 🧑‍💼 **Admin Panel** *(implied from folder names)*: Manage restaurants, dishes, and user orders
- 📊 **Order Management**: View, place, and delete orders

## 🗂️ Tech Stack

| Frontend   | Backend | Database |
|------------|--------|----------|
| HTML, CSS, JS, SCSS | PHP    | MySQL    |

## 📁 Project Structure

```
OnlineFood/
├── admin/                 # Admin interface (CRUD operations)
├── connection/            # Database connection setup
├── css/, fonts/, js/, images/, scss/  # UI and styling resources
├── checkout.php           # Order placement flow
├── db_connect.php         # DB connection helper
├── delete_orders.php      # Logic to delete orders
├── dishes.php             # Display dishes by restaurant
├── index.php              # Homepage
├── login.php, logout.php, registration.php
├── product-action.php     # Add to cart, order logic
├── profile.php            # User profile page
├── restaurants.php        # Browse restaurants
├── your_orders.php        # Track user’s orders
└── 01 LOGIN DETAILS & PROJECT INFO.txt  # Credentials & notes
```

## 🧪 Setup Instructions

1. Clone the repo  
   ```bash
   git clone https://github.com/Sahil485661/online-food-project.git
   ```
2. Set up your local server (e.g., XAMPP)
3. Import the database from the **DATABASE FILE** folder
4. Update DB credentials in `db_connect.php`
5. Launch `index.php` from `http://localhost/OnlineFood/`

## ✍️ Author

- 👤 GitHub: [Sahil485661](https://github.com/Sahil485661)
- 💬 Passionate about building practical, real-world systems using PHP & MySQL
