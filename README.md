# 🏋️‍♂️ FitApp — Sprint 01

A simple web application for fitness advisors to monitor and calculate the **Body Mass Index (BMI)** of their clients.

This project is developed as part of **Web Engineering WEE (Z-TIA-23-T-a)**, Sprint 01.

---

## 🚀 Overview

FitApp allows users to:
- Understand what the **BMI** is and how it's calculated.
- View **BMI categories** and their classification.
- See **international BMI statistics**.
- Use a **form** to calculate their own BMI value.

---

## 📂 Project Structure

fit-app/
├─ .git/                      # Git repo
├─ .gitignore
├─ README.md
├─ package.json
├─ package-lock.json
├─ server.js                  # Node dev server (Express)
├─ public/
│  ├─ index.html              # Landing page (BMI info)
│  ├─ form.html           # Formular zur BMI-Berechnung
│  ├─ categories.html         # BMI-Kategorien
│  ├─ stats.html              # BMI-Statistiken
│  ├─ css/
│  │  └─ styles.css
│  ├─ js/
│  │  └─ main.js
│  └─ php/
│     └─ calculate-bmi.php    # (bereitgestellt)
├─ src/                       # optional: server-side code / API
│  └─ api.js
└─ tools/
   └─ dev-helpers.md


---

## 🧮 BMI Formula

The **Body Mass Index (BMI)** is calculated using the formula:

\[
\text{BMI} = \frac{m}{l^2}
\]

where:
- `m` = body mass in **kilograms (kg)**
- `l` = body height in **meters (m)**

---

## 🧠 Requirements Summary (Sprint 01)

- Project reachable under `localhost/fit-app`
- Landing page with BMI info and formula
- Separate pages for BMI categories and statistics
- BMI calculation form (with PHP)
- Include developer comment with name and date in each file

---

## 🐳 Development Setup (Docker)

1. **Build and start containers**
   ```bash
   docker-compose up --build

2. Access in Browser
http://localhost/fit-app

🧑‍💻 Author

[Nick Sohl]
Last modified: [02. 11. 2025]
Web Engineering WEE — Sprint 01
