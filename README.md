# Daily Expense Manager

A simple web app to add and view your daily expenses. Built with PHP, MySQL, HTML, CSS, and JavaScript. Perfect for beginners learning web development basics.

## Features
- Add multiple expenses for a selected date
- View all previous expenses in a table
- Simple and clean interface

## Folder Structure
```
daily_expense_mng/
├── backend/
│   ├── db.php           # Database connection
│   ├── data_add.php     # Add expenses
│   ├── data_get.php     # Get expenses
├── frontend/
│   ├── index.html       # Main UI (add expenses)
│   ├── view_expenses.html # View all expenses
│   ├── script.js        # Frontend logic
│   ├── styles.css       # All CSS styles
```

## Setup Instructions
1. Import the following table in your MySQL database:

```sql
CREATE DATABASE daily_expenses;
USE daily_expenses;
CREATE TABLE expenses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date DATE NOT NULL,
    title VARCHAR(255) NOT NULL,
    amount DECIMAL(10,2) NOT NULL
);
```

2. Update `backend/db.php` with your MySQL credentials if needed.
3. Place the project folder in your web server directory (e.g., `htdocs` for XAMPP).
4. Open `frontend/index.html` in your browser to add expenses.
5. Click "View Expenses" to see all previous entries.

## Usage
- Fill in the date and add one or more expenses.
- Click "Submit" to save them.
- Use the "View Expenses" button to see all your expenses.

## Example Screenshots
1)![main](C:\Users\Admin\OneDrive\Desktop\New folder\New folder\Screenshot 2025-06-22 213002.png)
2)![sub1](C:\Users\Admin\OneDrive\Desktop\New folder\New folder\Screenshot 2025-06-22 213048.png)
3)![sub2]("C:\Users\Admin\OneDrive\Desktop\New folder\New folder\Screenshot 2025-06-22 213129.png")
4)![sub3]("C:\Users\Admin\OneDrive\Desktop\New folder\New folder\Screenshot 2025-06-22 213221.png")



## Credits
- Simple project for learning PHP, MySQL, and web basics.
