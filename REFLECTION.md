# ITAN 240 Final Project

**Student:** Saphal Giri  
**Instructor:** Dr. Afzali  
**Course:** ITAN 240 – Fundamentals of Web Technology  

---

## 1. What was the single most useful thing you learned in this project?

The most useful thing I learned was how a website can connect to a database using PHP. Before this project, the website mostly felt like a front-end page that displayed static information. After connecting it to MySQL/MariaDB, I understood how data can be stored, updated, and retrieved dynamically. This helped me understand how real-world web applications work.

---

## 2. What was the hardest step, and how did you get past it?

The hardest step was understanding how PHP files, XAMPP, and phpMyAdmin all work together. At first, it was confusing because opening the file directly does not execute PHP code. I overcame this by using localhost, starting Apache and MySQL in XAMPP, and testing each page step by step until everything worked correctly.

---

## 3. Why do you think DROP IF EXISTS before CREATE is a good pattern?

Using DROP IF EXISTS before CREATE is useful because it allows the setup file to run multiple times without errors. If the database already exists, it removes the old version first so that a clean version can be created. This prevents conflicts and makes testing and development easier.

---

## 4. If you had a chance to redesign the database, what changes would you bring?

If I redesigned the database, I would add more structure by creating multiple related tables instead of keeping everything in one table. For example, I would create a separate table for categories such as hot drinks, iced drinks, and frappuccinos. I would also include additional fields like descriptions, availability, and customer orders to make the system more realistic and scalable.