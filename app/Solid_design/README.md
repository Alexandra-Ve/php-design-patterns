# SOLID Principles Showcase

This folder demonstrates the **five SOLID principles** in PHP (inspired by *Design Patterns in PHP and Laravel* by Kelt Dockins*).  
Each example builds upon the same `Garden` metaphor to illustrate clean software design.

---

## 🌱 Principles Covered

### 1. Single Responsibility Principle (SRP)
A class should have one and only one reason to change.

**Example:**  
`EmptyGarden` only represents a garden’s dimensions and item generation.

---

### 2. Open/Closed Principle (OCP)
Software entities should be open for extension, but closed for modification.

**Example:**  
`MarijuanaGarden` extends `EmptyGarden` without changing its core code.

---

### 3. Liskov Substitution Principle (LSP)
Subtypes should be replaceable for their base types without breaking functionality.

**Example:**  
Refactored `EmptyGarden` to depend on a `PlotArea` interface,  
allowing substitution of `RectangleArea` or `CircleArea`.

---

### 4. Interface Segregation Principle (ISP)
Clients should not be forced to depend on interfaces they don’t use.

**Example:**  
Breaking down a large `GardenInterface` into smaller, focused interfaces like `Waterable`, `Fertilizable`, etc.

---

### 5. Dependency Inversion Principle (DIP)
Depend on abstractions, not concretions.

**Example:**  
The `GoodGarden` class depends on the `PlotArea` interface rather than concrete shape implementations.

---

## 📂 Folder Structure

Solid_design/
├── EmptyGarden.php
├── MarijuanaGarden.php
├── PlotArea.php
├── RectangleArea.php
├── CircleArea.php
├── GoodGarden.php
└── BadGarden.php

---

## 💻 Run Example

You can test the examples via routes:
/garden
/marijuana


Or experiment interactively in Laravel Tinker:
```bash
php artisan tinker
>>> $garden = new App\Solid_design\EmptyGarden(10, 10);
>>> $garden->items();

