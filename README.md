# Medical Credentialing System

A credentialing module for healthcare systems, designed to manage specialties, doctors, specialists, and medical networks. Built with Laravel, this project simplifies healthcare data organization and integration.

## Features

- **CRUD operations** for:
  - Specialties
  - Doctors
  - Specialists
  - Medical Networks
- **User-friendly interface** using Bootstrap.
- **Easy integration** into larger healthcare management systems.

---

## Prerequisites

To run this project, ensure you have:

- **PHP** 8.x or higher
- **Composer**
- **Laravel** 10.x
- A database (e.g., MySQL, PostgreSQL)

---

## Installation

Follow these steps to set up the project locally:

1. **Clone the repository**:
   ```bash
   git clone https://github.com/your-username/medical-credentialing.git
   cd medical-credentialing

2. **Install Dependencies**:

   Run the following commands to install the required dependencies:

   - Install PHP dependencies using Composer:
     ```bash
     composer install
     ```

   - Install JavaScript and CSS dependencies using NPM:
     ```bash
     npm install
     ```

   - Compile assets for development:
     ```bash
     npm run dev
     ```
3. **Configure the Environment File**:

   - Copy the example environment file to create your `.env` file:
     ```bash
     cp .env.example .env
     ```

   - Open the `.env` file and update the database credentials:
     ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=your_database_name
     DB_USERNAME=your_username
     DB_PASSWORD=your_password
     ```

4. **Start the Development Server**:

   - Run the following command to start the Laravel development server:
     ```bash
     php artisan serve
     ```

   - Open your browser and navigate to:
     ```
     http://localhost:8000
     ```
5. **Database Setup**:

   This repository does not include migrations or seeders. You will need to:

   - **Manually create the necessary tables** using a database management tool or raw SQL queries.
   - **Define relationships and constraints** as required by the project.

