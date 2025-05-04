# SmartStreamStore

SmartStreamStore is a responsive web application designed for selling mobile phones. This project serves as an online store where users can browse, add products to their cart, and complete their purchases seamlessly.

## Project Structure

The project is organized as follows:

```
smartstreamstore
├── src
│   ├── index.php          # Main entry point for the website
│   ├── products.php       # Displays available phones for sale
│   ├── cart.php           # Manages shopping cart functionality
│   ├── checkout.php       # Handles the checkout process
│   ├── includes           # Contains reusable components
│   │   ├── header.php     # Header with navigation links
│   │   ├── footer.php     # Footer with copyright information
│   │   └── db.php         # Database connection and query functions
│   ├── styles             # CSS styles for the website
│   │   └── style.css      # Main stylesheet ensuring responsiveness
│   ├── scripts            # JavaScript files for interactivity
│   │   └── app.js         # Main JavaScript file for handling user actions
│   └── assets             # Directory for images and fonts
│       ├── images         # Product images and logos
│       └── fonts          # Custom fonts used in the design
├── README.md              # Documentation for the project
└── .htaccess              # URL rewriting and server configuration
```

## Features

- **Responsive Design**: The website is designed to be fully responsive, ensuring a seamless experience on mobile devices, tablets, and desktops.
- **Product Browsing**: Users can view a list of available phones with detailed information.
- **Shopping Cart**: Users can add products to their cart, update quantities, and remove items as needed.
- **Checkout Process**: A user-friendly checkout process that collects necessary information and processes orders securely.
- **Database Integration**: The application connects to a database to retrieve product information dynamically.

## Setup Instructions

1. Clone the repository to your local machine.
2. Set up a local server environment (e.g., XAMPP, MAMP).
3. Import the database schema provided in the `db.php` file.
4. Update the database connection settings in `src/includes/db.php`.
5. Access the application via your local server (e.g., `http://localhost/smartstreamstore/src/index.php`).

## Contributing

Contributions are welcome! Please feel free to submit a pull request or open an issue for any suggestions or improvements.

## License

This project is licensed under the MIT License. See the LICENSE file for more details.