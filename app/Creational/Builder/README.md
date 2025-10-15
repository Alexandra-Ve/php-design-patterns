# 🏗 Builder Design Pattern

The **Builder Pattern** separates the construction of a complex object from its representation, allowing the same construction process to create different representations.

In this example, the "complex object" being built is a **House**, and two different builders — `NoviceCarpenter` and `ExpertCarpenter` — produce different ASCII layouts of the same house using the same construction instructions.

---

## 🔧 Structure Overview

**Key Participants:**
- **Architect (Director)**  
  Defines *how* to build the house (the sequence of steps).  
  It does **not** handle any construction details.

- **Carpenter (Abstract Builder)**  
  Declares all the building steps (like `wall`, `door`, `outside`) but leaves their implementation to subclasses.

- **NoviceCarpenter & ExpertCarpenter (Concrete Builders)**  
  Implement the steps differently — using different ASCII symbols to “draw” the house.

- **House (Product)**  
  Holds the final layout as a 2D array and defines how it is printed.

---

## 🏠 Example Execution

You can see it in action by visiting:
http://127.0.0.1:8000/builder
---
## 🧠 Concept Recap

- **Director** controls the *order of construction steps*.
- **Builder** defines *what steps exist*.
- **Concrete Builders** decide *how each step looks*.
- The **same instructions** can produce *different results*.

---
## 📁 Files
app/Creational/Builder/
│
├── Architect.php # Director
├── Carpenter.php # Abstract Builder
├── NoviceCarpenter.php # Concrete Builder 1
├── ExpertCarpenter.php # Concrete Builder 2
├── House.php # Product
└── README.md # This documentation

## 💡 Takeaway

> The Builder Pattern is ideal when the construction process is complex, involves multiple steps, or when you want to reuse the same construction logic for multiple product variations.

---

