# Luxury Suite — Premium Hotel PDF Tools

> **Elegant. Simple. Perfection.** — A complete suite of print-ready PDF tools crafted for luxury hospitality.

**Luxury Suite** is a free, browser-based collection of professional PDF generators designed specifically for 5-star hotels, resorts, and restaurants. Create stunning guest materials in seconds — no design skills, no server, no data leaving the device.

🌐 **Live Demo:** [https://kyomix.github.io/E-PDF-G/](https://kyomix.github.io/E-PDF-G/)

---

## Table of Contents

- [Features at a Glance](#features-at-a-glance)
- [Tools Overview](#tools-overview)
  - [Envelope Suite](#1-envelope-suite)
  - [Gourmet Reservation](#2-gourmet-reservation)
  - [Cake Reservation](#3-cake-reservation)
  - [Guest Message](#4-guest-message)
  - [Lost & Found](#5-lost--found)
  - [Wake-Up Manager](#6-wake-up-manager)
  - [Restaurant Jet2 Holidays (Narjis)](#7-restaurant-jet2-holidays-narjis)
- [Tech Stack](#tech-stack)
- [Architecture](#architecture)
- [Installation & Deployment](#installation--deployment)
- [Offline Usage](#offline-usage)
- [File Structure](#file-structure)
- [Browser Compatibility](#browser-compatibility)
- [Data & Privacy](#data--privacy)
- [Customization](#customization)
- [Credits](#credits)
- [License](#license)
- [Contact](#contact)

---

## Features at a Glance

| Feature | Details |
|---|---|
| 🖨️ **Print-Ready PDFs** | All tools generate professional, print-ready PDF documents |
| 🔒 **100% Client-Side** | No data is ever sent to any server — everything runs in the browser |
| 📱 **Responsive Design** | Works on desktop, tablet, and mobile devices |
| 🌐 **No Backend Required** | Pure HTML/CSS/JS — deployable on any static host (GitHub Pages, Netlify, etc.) |
| ⚡ **Instant Generation** | PDFs are created and downloaded in seconds |
| 🎨 **Luxury Aesthetics** | Gold accents, elegant typography, glass-morphism UI |
| 🌍 **Multilingual** | Wake-Up Manager supports English and French |
| 📴 **Offline Capable** | Works without internet after first load |

---

## Tools Overview

### 1. Envelope Suite
**File:** `hotel-evnvelope-generator.html`

Create gold-foil, print-ready guest envelopes with custom logos and branding.

**Features:**
- Upload custom hotel logo (PNG/JPG)
- Import guest data from Excel files
- Batch generate multiple envelopes at once
- Gold-foil luxury design with elegant typography
- Print-ready PDF output

**Use Cases:**
- VIP guest welcome envelopes
- Special occasion envelopes (honeymooners, anniversaries)
- Corporate guest packages

---

### 2. Gourmet Reservation
**File:** `marocan-restaurant-reservation.html`

Generate elegant dining vouchers and restaurant reservation confirmations.

**Features:**
- Custom restaurant logo upload
- Professional dining voucher layout
- Wine pairing section
- Print-ready PDF output

**Use Cases:**
- Restaurant reservation confirmations
- Dining experience vouchers
- Wine dinner event invitations

---

### 3. Cake Reservation
**File:** `Reservation-de-Gateau.html`

Create personalized cake reservation orders for special occasions.

**Features:**
- Custom logo support
- Personalized birthday & anniversary cake orders
- Professional PDF documentation
- Print-ready output

**Use Cases:**
- Birthday cake reservations
- Anniversary celebrations
- Special occasion cake orders

---

### 4. Guest Message
**File:** `Guest-msg.html`

Craft handwritten-style personalized notes for VIP guests.

**Features:**
- Elegant handwritten-style typography
- Custom message composition
- Logo upload support
- Print-ready PDF output

**Use Cases:**
- VIP welcome notes
- Thank-you messages
- Special occasion greetings
- Farewell messages

---

### 5. Lost & Found
**File:** `decharge-generator.html`

Professional lost item documentation and liability forms.

**Features:**
- Custom hotel logo upload
- Professional documentation layout
- Liability release form template
- Print-ready PDF output

**Use Cases:**
- Lost item documentation
- Property release forms
- Guest liability documentation
- Item handover receipts

---

### 6. Wake-Up Manager
**File:** `Wake-up.html`

A comprehensive wake-up call management system for hotel front desk operations.

**Features:**
- **Dashboard** — Real-time overview of today's wake-up calls with pending/completed counters
- **Call Registration** — Register single, daily (30 days), or weekly (12 weeks) recurring wake-up calls
- **Room Blocklist** — Manage DND/OOS rooms to prevent accidental wake-up registrations
- **Alert System** — Audio and visual alerts when a wake-up call is due (checks every 30 seconds)
- **Voucher Generation** — Print confirmation receipts for guests
- **Reports** — Daily call reports with date filtering
- **PDF Export** — Export daily reports as PDF documents
- **CSV Export** — Export daily reports as CSV spreadsheets
- **Multilingual** — Full English and French interface
- **Local Storage** — All data saved locally in the browser
- **Recurrence** — Single day, daily (30 days), or weekly (12 weeks) patterns

**Use Cases:**
- Front desk wake-up call management
- Guest wake-up service documentation
- Daily operations reporting
- DND/OOS room management

---

### 7. Restaurant Jet2 Holidays (Narjis)
**File:** `Jet2H.html`

Elegant restaurant booking confirmations and dining vouchers for Restaurant Le Narjis.

**Features:**
- Restaurant-specific branding with custom logo
- Booking confirmation generation
- Elegant dining voucher design
- Print-ready PDF output

**Use Cases:**
- Restaurant booking confirmations
- Dining experience vouchers
- Special event documentation

---

## Tech Stack

| Technology | Purpose |
|---|---|
| **HTML5** | Structure and semantic markup |
| **CSS3** | Styling, glass-morphism effects, responsive design, animations |
| **Vanilla JavaScript** | All application logic — no frameworks required |
| **jsPDF** | Client-side PDF generation |
| **jsPDF-AutoTable** | Table formatting in PDF exports |
| **html2canvas** | HTML-to-canvas rendering for PDF conversion |
| **Web Audio API** | Alarm sound generation (Wake-Up Manager) |
| **LocalStorage API** | Client-side data persistence (Wake-Up Manager) |
| **Font Awesome 6** | Icon library |
| **Google Fonts** | Cormorant Garamond, Montserrat typography |

**No backend. No database. No server.** Everything runs in the browser.

---

## Architecture

```
Luxury Suite/
│
├── index.html                          # Landing page / tool hub
│
├── hotel-evnvelope-generator.html      # Envelope Suite (standalone tool)
├── marocan-restaurant-reservation.html # Gourmet Reservation (standalone tool)
├── Reservation-de-Gateau.html          # Cake Reservation (standalone tool)
├── Guest-msg.html                      # Guest Message (standalone tool)
├── decharge-generator.html             # Lost & Found (standalone tool)
├── Wake-up.html                        # Wake-Up Manager (standalone tool)
├── Jet2H.html                          # Restaurant Narjis (standalone tool)
│
├── media/                              # Media assets directory
│
├── README.md                           # This file
├── LICENSE                             # License file
└── .gitignore                          # Git ignore rules
```

Each tool is a **self-contained, standalone HTML file** with:
- Inline CSS (no external stylesheets needed)
- Inline JavaScript (no build step)
- CDN-loaded libraries (jsPDF, Font Awesome, Google Fonts)

This architecture means:
- ✅ No build tools required
- ✅ No npm/yarn/webpack
- ✅ No server-side code
- ✅ Each tool can be used independently
- ✅ Easy to deploy — just copy files to any web server

---

## Installation & Deployment

### Option 1: GitHub Pages (Recommended)
1. Fork or clone this repository
2. Push to GitHub
3. Go to **Settings → Pages**
4. Select the `main` branch and `/ (root)` folder
5. Your site will be live at `https://<username>.github.io/<repo-name>/`

### Option 2: Local Usage
```bash
# Clone the repository
git clone https://github.com/kyomix/E-PDF-G.git

# Open any tool directly in your browser
open index.html
# or
open Wake-up.html
```

### Option 3: Any Static Host
Upload all `.html` files to any static web hosting provider:
- Netlify
- Vercel
- Cloudflare Pages
- AWS S3 + CloudFront
- Any shared hosting with FTP

### Option 4: Android APK (WebView Wrapper)
The entire suite can be packaged as an Android APK using:
- Android Studio WebView
- Capacitor
- Cordova

---

## Offline Usage

Luxury Suite is designed to work offline after the initial page load:

1. **First load** — Requires internet to fetch CDN resources (jsPDF, Font Awesome, Google Fonts)
2. **Subsequent use** — All tools function fully offline
3. **Wake-Up Manager data** — Persisted in `localStorage`, survives browser restarts

**Tip:** For fully offline deployment, download the CDN libraries and reference them locally.

---

## File Structure

| File | Size | Description |
|---|---|---|
| `index.html` | ~28 KB | Main landing page with tool navigation |
| `hotel-evnvelope-generator.html` | ~48 KB | Envelope Suite with Excel import |
| `marocan-restaurant-reservation.html` | ~28 KB | Gourmet dining vouchers |
| `Reservation-de-Gateau.html` | ~17 KB | Cake reservation orders |
| `Guest-msg.html` | ~21 KB | Guest message notes |
| `decharge-generator.html` | ~27 KB | Lost & found documentation |
| `Wake-up.html` | ~73 KB | Full wake-up call management system |
| `Jet2H.html` | ~55 KB | Restaurant Narjis booking system |

**Total suite size:** ~297 KB (excluding CDN resources and media assets)

---

## Browser Compatibility

| Browser | Version | Status |
|---|---|---|
| Chrome | 90+ | ✅ Full support |
| Firefox | 88+ | ✅ Full support |
| Safari | 14+ | ✅ Full support |
| Edge | 90+ | ✅ Full support |
| Samsung Internet | 15+ | ✅ Full support |
| Chrome Android | 90+ | ✅ Full support |
| Safari iOS | 14+ | ✅ Full support |

**Required browser features:**
- CSS `backdrop-filter` (for glass-morphism effects)
- `localStorage` API (for Wake-Up Manager data persistence)
- `Web Audio API` (for Wake-Up Manager alarm sounds)
- ES6+ JavaScript (async/await, arrow functions, template literals)

**Graceful degradation:** On browsers without `backdrop-filter` support, the glass effect falls back to a solid semi-transparent background.

---

## Data & Privacy

**Luxury Suite is 100% private by design:**

- 🔒 **No data leaves the device** — All processing happens in the browser
- 🔒 **No server communication** — Zero network requests after page load (except CDN resources)
- 🔒 **No cookies** — No tracking cookies are set
- 🔒 **No analytics** — No Google Analytics or any tracking scripts
- 🔒 **No accounts** — No login, no registration, no user accounts
- 🔒 **LocalStorage only** — Wake-Up Manager data stays on the user's device

**Data stored in localStorage:**
- `hotel_wakeup_data` — Wake-up call records
- `hotel_blocklist` — Blocked room list
- `hotel_lang` — Language preference (en/fr)
- `ls_unlock_YYYY_MM` — Monthly unlock status (if applicable)

---

## Customization

### Adding a New Tool Card to the Homepage

Edit `index.html` and add a new card inside the `.tools-grid` div:

```html
<div class="glass tool-card">
  <span class="tool-icon">🎯</span>
  <h3>Your Tool Name</h3>
  <p>Brief description of what this tool does.</p>
  <a href="your-tool-file.html" class="btn">Action</a>
</div>
```

### Changing Colors

Edit the CSS variables in `index.html` (or any tool's `<style>` block):

```css
:root {
  --glass-bg: rgba(255, 255, 255, 0.14);
  --glass-bg-hover: rgba(255, 255, 255, 0.22);
  --glass-border: rgba(255, 255, 255, 0.35);
  --accent-glow: #ffd1d1;
  --font-stack: -apple-system, BlinkMacSystemFont, "SF Pro Display", "Segoe UI", Roboto, sans-serif;
}
```

### Changing the Background

Edit the `body` background in `index.html`:

```css
body {
  background: #1a1a2e;
  background-image:
    radial-gradient(circle at 10% 20%, #302b63 0%, transparent 50%),
    radial-gradient(circle at 90% 80%, #24243e 0%, transparent 50%),
    url('YOUR_IMAGE_URL');
}
```



---

## Credits

**Created by:** Khalid LAASRI
**Role:** PR & Guest Relations Manager, Valeria Jardins Agadir Resort
**Background:** Computer Engineer + Network Technology, 15+ years in hospitality

**Open Source Libraries Used:**
- [jsPDF](https://github.com/parallax/jsPDF) — Client-side PDF generation
- [jsPDF-AutoTable](https://github.com/simonbengtsson/jsPDF-AutoTable) — PDF table plugin
- [html2canvas](https://html2canvas.hertzen.com/) — HTML to canvas rendering
- [Font Awesome](https://fontawesome.com/) — Icon library
- [Google Fonts](https://fonts.google.com/) — Cormorant Garamond, Montserrat

**Background Image:**
- [Unsplash — Luxury Hotel](https://images.unsplash.com/photo-1551882547-ff40c63fe5fa)

---

## License

This project is free* to use for personal and commercial purposes.

*you can support me on the index.html page (buy me a coffee)  

---

## Contact

- **Developer:** Khalid LAASRI
- **GitHub:** [@kyomix](https://github.com/kyomix)
- **WhatsApp:** [+212 661 393 441](https://wa.me/212661393441)
- **Email:** [Contact via GitHub](https://github.com/kyomix)

---

<p align="center">
  <strong>✨ Luxury Suite — Crafted for Excellence ✨</strong><br>
  <em>© 2025 LuxurySuite by KYOMIX. All rights reserved.</em>
</p>
