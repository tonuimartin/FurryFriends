<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# FurryFriends

FurryFriends is a web application that connects pet lovers with adoptable pets in need of a loving home. Users can browse and search for available pets, view pet details, and contact the pet owners or adoption agencies for further information. The application aims to facilitate the pet adoption process and promote responsible pet ownership.

## Features

- User Registration and Authentication: Users can create an account, log in, and manage their profile.
- Pet Listings: Display a list of available pets for adoption with details such as pet name, breed, age, gender, and description.
- Pet Details: View detailed information about a specific pet, including photos, location, and additional notes.
- Search and Filtering: Users can search for pets based on various criteria such as breed, age, and gender.
- Contact Pet Owners: Users can contact the pet owners or adoption agencies for more information or to express their interest in adopting a pet.
- User Roles: Differentiate between regular users and sources/agencies involved in pet adoption.

## Technologies Used

- Laravel : PHP framework for building web applications.
- MySQL : Relational database management system for storing and retrieving data.
- HTML, CSS, JavaScript: Front-end technologies for building the user interface and adding interactivity.
- Bootstrap : CSS framework for responsive and mobile-first web development.
- Other dependencies or libraries (if applicable)

## Installation

1. Clone the repository: `git clone https://github.com/your-username/FurryFriends.git`
2. Install the project dependencies: `composer install`
3. Create a copy of the `.env.example` file and rename it to `.env`.
4. Generate an application key: `php artisan key:generate`
5. Configure the database connection in the `.env` file with your database credentials.
6. Run the database migrations: `php artisan migrate`
7. Start the development server: `php artisan serve`

Make sure to set up a database and update the `.env` file with your database credentials before running the migrations.

## Usage

- Visit the application in your web browser at `http://localhost:8000` (or the specified URL after running `php artisan serve`).
- Register a new user account or log in with an existing account.
- Browse the available pets, search for specific pets, or filter the results based on your preferences.
- Click on a pet to view more details and contact the owner or adoption agency.
- Explore other features and functionalities of the application.

## Contributing

Contributions to the FurryFriends project are welcome! If you find any bugs, issues, or have suggestions for improvements, please open an issue or submit a pull request. Make sure to follow the existing coding style and conventions.

## License

This project is licensed under the [MIT License](LICENSE).

## Acknowledgements




