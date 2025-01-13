# Hello Script

A simple PHP script that prints a greeting message with a customizable name.

## Requirements
- PHP 8.2 or higher
- Composer (for development)

## Installation

```bash
composer create-project openhands/hello-script
cd hello-script
chmod +x src/hello.php
```

For development:
```bash
composer install
```

## Usage

```bash
# Print "hello world!"
./src/hello.php

# Print "hello Alice!"
./src/hello.php Alice
```

## Development

### Running Tests
```bash
# Run tests
composer test

# Run tests with coverage report
composer test-coverage
```

### Code Style
The project follows PSR-12 coding standards. To check and fix the code style:

```bash
# Check code style
composer cs-check

# Fix code style
composer cs-fix
```

### Static Analysis
```bash
# Run PHPStan
composer phpstan
```

## Contributing
Please see [CONTRIBUTING.md](CONTRIBUTING.md) for details.

## License
The MIT License (MIT). Please see [License File](LICENSE) for more information.