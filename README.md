# 1. Laravel User Dashboard Lab

## 2. Setup Instructions

1. **Clone the repository**  
git clone <your-repo-url>  
cd <project-folder>

2. **Install PHP dependencies**  
composer install

3. **Install Node dependencies and build assets**  
npm install  
npm run dev

4. **Run migrations and seeders**  
php artisan migrate --seed

5. **Start the development server**  
php artisan serve

## 6. Access the Application

Start the Laravel development server:

```bash
php artisan serve
```

Then open your browser and go to:

```
http://localhost:8000/login
```

After logging in successfully, you will be redirected to:

```
/dashboard
```


## 3. Sample Login Credentials  
Use the following seeded users to log in:

| Email                      | Password  |
|----------------------------|----------|
| caleigh25@example.org      | password |
| npowlowski@example.org     | password |
| kayla44@example.net        | password |
| atoy@example.net           | password |
| ddgerlach@example.org      | password |
