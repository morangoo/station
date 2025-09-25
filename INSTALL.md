# Installation & Usage Guide

## 🐳 Quick Start with Docker

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

3. **Initialize the database (run migrations and seed roles):**
   ```sh
   docker-compose exec backend php artisan migrate
   docker-compose exec backend php artisan db:seed
   ```

4. **Access the apps:**
   - Frontend: [http://localhost:3000](http://localhost:3000)
   - Backend API: [http://localhost:8000](http://localhost:8000)

5. **Stop services:**
   ```sh
   docker-compose down
   ```

---

## 🖥️ Manual Setup (No Docker)

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
