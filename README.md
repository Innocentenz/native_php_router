# Native PHP Router
Native PHP Router

The Native PHP Router is a lightweight and easy-to-use routing library for PHP applications. It allows you to define routes and their associated actions, making it simple to create clean and organized URL structures for your web application.

## Getting Started

If you are using an external server to host your PHP application, you can follow these steps to start using the Native PHP Router.

### Prerequisites

Before you begin, make sure you have the following:

- PHP installed on your system.
- Your project files and directories set up, including the `public` directory where your web server will point to.

### Starting the External Server

1. Open your command-line interface (CLI).
2. Navigate to your project's root directory using the `cd` command.
3. Run the following command to start the PHP built-in web server with the desired port (e.g., 8888) and the `public` directory as the document root:

```bash
php -S localhost:8888 -t public
```

4. Your PHP application is now running. Open your web browser and access your application by visiting `http://localhost:8888` in the address bar.

### Defining Routes

To use the Native PHP Router, you need to define your routes and their associated actions. Here's an example of how to define a route:

```php
// Include the Router class
require_once 'path-to-router/Router.php';

// Create a new Router instance
$router = new Router();

// Define a route
$router->get('/home', function () {
    // Your route logic here
    echo 'Welcome to the home page!';
});

// Run the router
$router->run();
```

Replace `'path-to-router/Router.php'` with the actual path to the Router class file in your project.

### Inbuilt Server

If you prefer to use the inbuilt server, you can follow these steps:

1. Open your command-line interface (CLI).
2. Navigate to your project's root directory using the `cd` command.
3. Run the following command to start the PHP built-in web server with the desired port (e.g., 9000) and the `public` directory as the document root:

```bash
php -S localhost:9000 -t public
```

4. Your PHP application using the inbuilt server is now running. Access your application by visiting `http://localhost:9000` in your web browser.

## Contributing

If you'd like to contribute to the Native PHP Router project, feel free to submit pull requests or open issues on our GitHub repository.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

Happy routing with Native PHP Router! If you encounter any issues or have questions, please don't hesitate to contact us or open an issue on GitHub. Your feedback is highly appreciated.