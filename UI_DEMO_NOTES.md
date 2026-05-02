# UI Demo Notes

## Current Direction

This repo now follows a Laravel-style structure for the UI-first phase:

```txt
routes/web.php
resources/views/layouts/app.blade.php
resources/views/partials/*
resources/views/pages/*
public/assets/css/site.css
public/assets/js/site.js
```

## Included Demo Pages

- Home
- About
- Courses
- Teachers
- Gallery
- Booking

## Notes

- The current work is UI-only.
- No database, auth, CRM, or mail integration has been added.
- Demo data is temporarily defined in `routes/web.php`.
- When Laravel is scaffolded later, these files can be moved directly into the app structure and wired to real controllers/models.
