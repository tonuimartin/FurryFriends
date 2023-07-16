

# FurryFriends

FurryFriends is a web application that connects pet lovers with adoptable pets in need of a loving home. Users can browse and search for available pets, view pet details, and contact pet owners or adoption agencies for further information. The application aims to facilitate pet adoption and promote responsible pet ownership.

## Features

- User Registration and Authentication: Users can create an account, log in, and manage their profile.
- Pet Listings: Display a list of available pets for adoption with details such as pet name, breed, age, gender, and description.
- Pet Details: View detailed information about a specific pet, including photos, location, and additional notes.
- Search and Filtering: Users can search for pets based on various criteria such as breed, age, and gender.
- Contact Pet Owners: Users can contact the pet owners or adoption agencies for more information or to express their interest in adopting a pet.
- User Roles: Differentiate between regular users and sources/agencies involved in pet adoption.

## Technologies Used

- Laravel: PHP framework for building web applications.
- MySQL: Relational database management system for storing and retrieving data.
- HTML, CSS, JavaScript: Front-end technologies for building the user interface and adding interactivity.
- Bootstrap: CSS framework for responsive and mobile-first web development.
- Other dependencies or libraries (if applicable)

## Installation

1. Clone the repository:
   ```
   git clone https://github.com/your-username/FurryFriends.git
   ```
3. Install the project dependencies:
   ```
   composer install
   ```
5. Create a copy of the ```.env.example``` file and rename it to ```.env```.
6. Generate an application key:
   ```
   php artisan key:generate
   ```
5. Configure the database connection in the ```.env``` file with your database credentials.
6. Run the database migrations:
   ```
   php artisan migrate
   ```
7. Start the development server:
    ```
    php artisan serve
    ```

Set up a database and update the ```.env``` file with your credentials before running the migrations.

## Usage

- Visit the application in your web browser at ```http://localhost:8000``` (or the specified URL after running```php artisan serve```).
- Register a new user account or log in with an existing account.
- Browse the available pets, search for specific pets, or filter the results based on your preferences.
- Click on a pet to view more details and contact the owner or adoption agency.
- Explore other features and functionalities of the application.

## Contributing

Contributions to the FurryFriends project are welcome! If you find any bugs, issues, or suggestions for improvements, please open an issue or submit a pull request. Make sure to follow the existing coding style and conventions.

## License

This project is licensed under the [MIT License](LICENSE).

## Acknowledgements




