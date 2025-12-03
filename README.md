# 🎧 INDIE-VIBES

**INDIE-VIBES** is a full-stack music-streaming web application inspired by platforms like Spotify.  
Users can register/login, browse artists, play songs, generate random playlists, send feedback, and enjoy a smooth audio-player with all essential controls.

---

## 🚀 Features

### 👤 User Features
- User registration & login  
- Browse available artists  
- Play songs from a specific artist  
- Listen to randomly generated playlists  
- Submit feedback or contact through a form  

### 🎵 Music Player Features
- Play / Pause  
- Next / Previous track  
- Volume control (up / down)  
- Download songs  
- Auto-play next track  
- Random playlist generation  

### 🌐 General
- Responsive front-end UI  
- Database-driven backend content  
- Clean and interactive design  

---

## 🛠️ Tech Stack

**Frontend:** HTML, CSS, JavaScript  
**Backend:** PHP, MySQL, JavaScript  

---

## 📁 Project Structure

```
INDIE-VIBES/
│
├── Diagrams/
│ ├── Admin DFD
│ ├── User DFD  
│ ├── Use Case
│ └── Er Diagram
│
├── Admin/
│ └── Admin Css
│ └── Admin Js
│ └── Uploads
│ └── Other admin files ...
│
├── Artist/
│ └── Arist files ...
│
├── css/
│ └── All css files ...
│
├── Img/
│ └── All images ...
│
├── Js/
│ └── All JS files ...
│
├── Pages/
│ └── All User side files ...
│
└── iv.sql
└── README.md
```

---

## 🗄️ Database Design (Suggested)

You might have SQL tables similar to:

- `users` — user credentials and profile data  
- `artists` — artist metadata (name, image, description, etc.)  
- `songs` — track metadata including artist association and file paths  
- `feedback` — stores user submissions from the contact/feedback form  

---

## ⚙️ Setup Instructions

1. **Clone the repository:**

   ```
   git clone https://github.com/Sheth007/INDIE-VIBES.git
   ```

2. **Move the project into your server directory:**
    ```
    htdocs/INDIE-VIBES/
    ```

3. **Import the database:**
    * Open phpMyAdmin (or any MySQL GUI)
    * Create a new database (named: iv)
    * Import the database file

4. **Run the app:**
    ```
    http://localhost/INDIE-VIBES/
    ```

# 🖼️ Screenshots

**Registration Page:**
![iv regi](https://github.com/Sheth007/INDIE-VIBES/assets/113230518/47f951db-6272-4a05-94c2-58687b38c3bd)

➡&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  **Login Page:**
![iv login](https://github.com/Sheth007/INDIE-VIBES/assets/113230518/c93ba9ff-d91b-44d6-a8ec-6951dfca027c)

➡&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  **Home Page:**
![iv](https://github.com/Sheth007/INDIE-VIBES/assets/113230518/8241db91-a3ca-4d28-b2cf-86a1663e7db9)

➡&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  **Artist Page:**
![iv artist](https://github.com/Sheth007/INDIE-VIBES/assets/113230518/4a3614cb-fd25-46e2-9f4d-21eab744a03c)

➡&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  **Random PLaylist Page:**
![iv random](https://github.com/Sheth007/INDIE-VIBES/assets/113230518/b093d81e-1a49-4103-a278-0579b6a760f6)
