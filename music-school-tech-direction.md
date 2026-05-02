# 🎼 Music School Website – Tech Direction (UI First)

## 🎯 Current Goal

* Focus on **UI/UX first**
* Build a website with a:

  * Artistic 🎨
  * Elegant ✨
  * Modern vibe
* No need to implement backend yet
* Use **100% Vietnamese with full diacritics**
* This website is a **purely Vietnamese website** for Vietnamese users

---

## 🧱 Overall Tech Direction

```txt
Frontend: Laravel Blade + HTML/CSS/JS
Backend: Laravel
Database: MySQL / MariaDB
Admin CRM: Filament
Email: Resend / SMTP
Hosting: Shared Hosting / VPS
```

---

## 🎨 Phase 1 – UI First (Current Phase)

### Tech to use:

```txt
- HTML + CSS + JS (or Tailwind CSS)
- Laravel Blade (optional)
```

### Goals:

* Build UI pages:

  * Home (hero + branding)
  * Course pages (Piano, Violin…)
  * Trial registration page
  * Events / schedule page

### Focus on:

```txt
- Clean layout
- Typography
- Light animations (hover, scroll)
- Mobile responsive
```

👉 Not needed yet:

```txt
- Database
- Authentication
- CRM
- Email system
```

---

## 🧩 Phase 2 – Connect Backend

After UI is ready:

* Integrate Laravel:

  * Handle form submission
  * Store data in database
* Send email notifications

---

## 🧠 Phase 3 – Admin CRM

* Use Filament:

  * Manage leads (registrations)
  * Update status
  * Filter / search data

---

## 🚀 Phase 4 – Deployment

```txt
- Deploy on shared hosting (low cost)
or
- VPS for better performance
```

---

## 🔥 Important Notes

```txt
- Build UI independently first → easier to iterate
- Avoid backend dependency early
- Design reusable components (sections, cards, buttons)
- Prioritize user experience over logic
- All UI copy must be written in Vietnamese with full diacritics
- Avoid English labels, headings, buttons, placeholders, and mixed-language content
- Tone should feel natural for Vietnamese users, not translated literally from English
```

---

## ✅ Conclusion

```txt
UI first → Backend → CRM → Deploy
```

👉 Helps you:

* Move fast
* Iterate easily
* Show demo to clients quickly

Folder structure
music-school/
├── index.html                # Home
├── courses/
│   ├── piano.html
│   ├── violin.html
│   └── guitar.html
├── booking.html
├── teachers.html
├── events.html
├── about.html
│
├── assets/
│   ├── images/
│   ├── videos/
│   ├── icons/
│   └── fonts/
│
├── css/
│   └── styles.css
│
├── js/
│   └── main.js
│
└── components/
    ├── navbar.html
    ├── footer.html
    ├── course-card.html
    └── teacher-card.html
