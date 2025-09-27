# Simple Library Management System (Web-based)

A lightweight web application for managing a library catalog, developed as part of the **CCS112 – Applications Development and Emerging Technologies** Prelim Lab Exam.

---

## Group Members
- Castillo, Kimlearn  
- Cayaco, Mary Joy  
- Cayaga, Kurt Joshua  
- Chan, Jomari  
- De Martin, Diether  

---

## Objectives
1. Apply fundamental concepts of web development (HTML, CSS, JavaScript, PHP).  
2. Practice CRUD operations with MySQL.  
3. Collaborate effectively using Git and GitHub.  
4. Demonstrate version control practices: branching, merging, pull requests, and conflict resolution.  

---

## Problem Description
This system allows librarians and users to manage a catalog of books.  
Core functionalities include:
- **Book Management:** Add, edit, and remove books (Librarians).  
- **Catalog Interaction:** Browse and search for books (Users & Librarians).  
- **Borrowing & Returns:** Borrow books and manage returns.  

---

## Git Workflow Summary
- **Repository Setup:**  
  - One member creates the central repository.  
  - All members clone the repo: `git clone <repository_url>`  
  - Create a `develop` branch from `main`: `git checkout -b develop`  

- **Task Division:**  
  - Each member works on a specific feature in their own branch:  
    - Student 1: Add new books  
    - Student 2: Edit/remove books  
    - Student 3: Browse/view catalog  
    - Student 4: Search books  
    - Student 5: Borrow/return books  

- **Branching & Development:**  
  - Update local `develop`: `git pull origin develop`  
  - Create a feature branch: `git checkout -b feature/<feature_name>`  
  - Stage & commit changes:  
    ```bash
    git add .
    git commit -m "Description of changes"
    git push origin feature/<feature_name>
    ```  

- **Merging & Collaboration:**  
  - Create a Pull Request to merge feature branch into `develop`.  
  - Other members review before merging.  
  - Delete feature branch after merge.  

- **Finalization:**  
  - Merge `develop` into `main` for the production-ready version.  

---

## Technologies Used
- **Frontend:** HTML, CSS, JavaScript  
- **Backend:** PHP  
- **Database:** MySQL  
- **Version Control:** Git & GitHub  

---
