<img src="https://i.imgur.com/corsos2.png" width="100%">

# ✨ Station Project: Contributor Guide

Welcome to **Station**! This guide will help you set up, run, and contribute to the project—whether you prefer Docker or a local environment. Follow the steps below to get started and join our community of builders.

---

<!-- Tech Stack Section -->
<p align="center">
  <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" alt="Laravel" width="60" style="margin-right: 20px;"/>
  <img src="https://reactrouter.com/_brand/React%20Router%20Brand%20Assets/React%20Router%20Logo/Light.svg" alt="React Router" width="95" style="margin-right: 20px;"/>
  <img src="https://www.postgresql.org/media/img/about/press/elephant.png" alt="PostgreSQL" width="60"/>
</p>

<p align="center">
  <b>Laravel</b> &nbsp; | &nbsp; <b>React Router</b> &nbsp; | &nbsp; <b>PostgreSQL</b>
</p>

---

## 🐳 Quick Start with Docker

> **Recommended for most users!**

### Prerequisites
- [Docker Desktop](https://www.docker.com/products/docker-desktop)
- [Git](https://git-scm.com/downloads)

### 🚦 Steps
1. **Clone the repository:**
   ```sh
   git clone https://github.com/morangoo/station.git
   cd station
   ```
2. **Start all services:**
   ```sh
   docker-compose up --build
   ```
3. **Access the apps:**
   - Frontend: [http://localhost:3000](http://localhost:3000)
   - Backend API: [http://localhost:8000](http://localhost:8000)

4. **Stop services:**
   ```sh
   docker-compose down
   ```

---

## 🖥️ Manual Setup (No Docker)

> For advanced users or those who want full control.

### Prerequisites
- [Node.js & npm](https://nodejs.org/) (v18+ recommended)
- [PHP](https://www.php.net/downloads.php) (v8.1+ recommended)
- [Composer](https://getcomposer.org/download/)
- [PostgreSQL](https://www.postgresql.org/download/)

### ⚡ Backend Setup
1. **Install dependencies:**
   ```sh
   cd backend
   composer install
   npm install
   ```
2. **Configure environment:**
   - Copy `.env.example` to `.env` and update DB credentials if needed.
3. **Run migrations:**
   ```sh
   php artisan migrate
   ```
4. **Start backend server:**
   ```sh
   php artisan serve --host=127.0.0.1 --port=8000
   ```

### ⚡ Frontend Setup
1. **Install dependencies:**
   ```sh
   cd ../frontend
   npm install
   ```
2. **Start frontend server:**
   ```sh
   npm run dev -- --host 127.0.0.1 --port 3000
   ```
3. **Access the app:**
   - [http://localhost:3000](http://localhost:3000)

---

## ⚠️ Environment Setup

Before running the project, make sure to create your `.env` files:

- Copy `.env.example` to `.env` in both `/backend` and `/frontend` folders.
- Update the values as needed for your local/dev environment.

```sh
cp backend/.env.example backend/.env
cp frontend/.env.example frontend/.env
```

---

## 🤝 Contributing

1. **Fork the repo & create a branch:**
   ```sh
   git checkout -b feature/my-awesome-feature
   ```
2. **Make your changes and commit:**
   ```sh
   git commit -m "Add awesome feature"
   ```
3. **Push and create a Pull Request:**
   ```sh
   git push origin feature/my-awesome-feature
   ```

---

## 💡 Troubleshooting

- 🚫 **Port errors:** Make sure nothing else is running on 3000 or 8000.
- 🐳 **Docker issues:** Check logs with `docker-compose logs`.
- 🗄️ **Database errors:** Ensure PostgreSQL is running and credentials match.

---

## 📚 Useful Commands

| Action                | Command                                 |
|-----------------------|-----------------------------------------|
| Rebuild containers    | `docker-compose up --build`             |
| Stop containers       | `docker-compose down`                    |
| Run backend tests     | `cd backend && php artisan test`         |
| Run frontend tests    | `cd frontend && npm test`                |

---

## 🌟 Get Involved

- Open an issue for questions or bugs
- Join our discussions to share ideas
- Submit a pull request to contribute

---

Happy coding! 🚀

---
