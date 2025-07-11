# Laravel Real Estate Property Management System

This is a Laravel-based web application that allows admins to add, edit, delete, and manage properties, and users to browse and book property viewings.

---

## 🚀 Installation Guide

Follow these steps to set up the project on your local machine:

### Prerequisites

* **PHP** >= 8.1
* **Composer**
* **MySQL** or any supported database
* **Node.js** & **npm** (for frontend scaffolding if used)
* **Laravel CLI** (optional)

---

### 🔧 Steps to Install

1.  **Clone the Repository**

    ```bash
    git clone [https://github.com/your-username/your-repo.git](https://github.com/your-username/your-repo.git)
    cd your-repo
    ```

2.  **Install Dependencies**

    ```bash
    composer install
    ```

3.  **Copy `.env` File and Generate App Key**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4.  **Set Up Environment Variables**

    Open the `.env` file and configure your database:

    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_db_name
    DB_USERNAME=root
    DB_PASSWORD=
    ```

5.  **Run Migrations**

    ```bash
    php artisan migrate
    ```

6.  **Create a Storage Symlink**

    ```bash
    php artisan storage:link
    ```

    This will link `public/storage` to `storage/app/public`, allowing image/file access via URL.

7.  **(Optional) Run Seeder for Dummy Data**

    ```bash
    php artisan db:seed
    ```
8.  **For file uploads**
    ```bash
      php artisan storage:link
    ```

9.  **Serve the Application**

    ```bash
    php artisan serve
    ```

    Visit: `http://127.0.0.1:8000`

---

## 📁 Routes Overview

### Web Routes (`routes/web.php`)

#### General Route

| Method | URI | Action | Description |
| :----- | :-- | :----- | :---------- |
| `GET`  | `/` | View   | Welcome page |

---

### 🔐 Admin Property Routes

**Prefix**: `admin/properties`
**Controller**: `PropertyController`

| Method   | URI          | Name                      | Action                      |
| :------- | :----------- | :------------------------ | :-------------------------- |
| `GET`    | `/`          | `admin.properties.index`  | List all properties         |
| `GET`    | `/create`    | `admin.properties.create` | Show form to add new property |
| `POST`   | `/`          | `admin.properties.store`  | Store new property          |
| `GET`    | `/{id}/edit` | `admin.properties.edit`   | Edit property form          |
| `PUT`    | `/{id}`      | `admin.properties.update` | Update property             |
| `DELETE` | `/{id}`      | `admin.properties.destroy`| Delete property             |
| `GET`    | `/{id}`      | `admin.properties.show`   | Show single property details|

---

### 👤 User Booking Routes

**Prefix**: `user/properties`
**Controller**: `PropertyRegisterController`

| Method | URI           | Name                     | Action                           |
| :----- | :------------ | :----------------------- | :------------------------------- |
| `GET`  | `/`           | `user.properties.index`  | List available properties        |
| `GET`  | `/{id}`       | `user.properties.show`   | View single property             |
| `GET`  | `/booking/{id}`| `user.properties.create` | Show booking form                |
| `POST` | `/booking/{id}`| `user.properties.book`   | Submit property viewing request |



## 🧰 Additional Notes

* Make sure `storage/` and `bootstrap/cache/` directories are **writable**.
* All form inputs are **CSRF protected** using `@csrf`.

---

## 📸 Screenshots

<img width="1364" height="676" alt="Screenshot 2025-07-11 135609" src="https://github.com/user-attachments/assets/f3c08703-9636-499a-90a5-893c52410e5b" />

