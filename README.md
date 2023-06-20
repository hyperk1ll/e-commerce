# MTU-Catalog

MTU-Catalog is an e-catalog website developed for PT. Mahir Tekno Utama. It provides a platform for showcasing and managing product catalogs, allowing customers to browse and search for products conveniently.

## Features

- Browse and search for products by category, brands, or other filters.
- View detailed product information, including descriptions, specifications, and images.
- Manage admin accounts and authentication.
- Admin dashboard for managing products, categories, and brands.

## Technologies Used

- Front-end: HTML, CSS, JavaScript
- Back-end: PHP, MySQL
- Frameworks and Libraries: Laravel, Bootstrap, jQuery, Livewire
- Version Control: Git

## Getting Started

To get a local copy of the project up and running, follow these steps:

1. Clone the repository:

   ```shell
   git clone https://github.com/your-username/mtu-catalog.git

2. Install the required dependencies. Make sure you have Composer and Node.js installed. Then, run the following commands:

    ```shell
    cd mtu-catalog
    composer install
    npm install

3. Create a .env file by copying the .env.example file. Update the necessary configuration, such as the database connection details.

    ```shell
    cp .env.example .env

4. Generate an application key:

    ```shell
    php artisan key:generate
    
5. Run the database migrations and seed the initial data:

    ```shell
    php artisan migrate --seed
    
6. Start the development server:
   
    ```shell
    php artisan serve
    
7. Open your web browser and visit http://localhost:8000 to access the MTU-Catalog website.

## Contributing
Contributions are welcome! If you find any issues or want to suggest improvements, please open an issue or submit a pull request.
