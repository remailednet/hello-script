# Hello Script

[![CI](https://github.com/remailednet/hello-script/actions/workflows/ci.yml/badge.svg)](https://github.com/remailednet/hello-script/actions/workflows/ci.yml)
[![codecov](https://codecov.io/gh/remailednet/hello-script/branch/main/graph/badge.svg)](https://codecov.io/gh/remailednet/hello-script)
[![PHP Version](https://img.shields.io/packagist/php-v/openhands/hello-script.svg)](https://packagist.org/packages/openhands/hello-script)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

A modern PHP CLI application that demonstrates best practices for PHP development. The application prints a customizable greeting message.

## 🚀 Features

- Customizable greeting message
- PSR-12 compliant code
- Comprehensive test suite
- Static analysis
- Continuous Integration
- Security checks

## 📋 Requirements

- PHP 8.2 or higher
- Composer 2.0 or higher

## 📦 Installation

### Using Composer

```bash
# Install as a new project
composer create-project openhands/hello-script

# Or add to an existing project
composer require openhands/hello-script
```

The executable will be available in `vendor/bin/hello` after installation.

### For Development

#### Using Local PHP

```bash
git clone https://github.com/remailednet/hello-script.git
cd hello-script
make install
```

#### Using Docker

```bash
git clone https://github.com/remailednet/hello-script.git
cd hello-script
docker-compose up --build  # Runs all checks
docker-compose run app ./bin/hello Alice  # Run with argument
```

## 🎯 Usage

```bash
# Print "hello world!"
./bin/hello

# Print "hello Alice!"
./bin/hello Alice

# If installed as a dependency
vendor/bin/hello Alice
```

## 🛠️ Development

We use `make` to simplify common development tasks. Run `make help` to see all available commands.

### Quick Start

```bash
# Install dependencies
make install

# Run all checks (install, cs-fix, stan, test)
make all
```

### Available Commands

```bash
# Run tests
make test

# Run tests with coverage
make coverage

# Check coding standards
make cs-check

# Fix coding standards
make cs-fix

# Run static analysis
make stan

# Run security check
make security
```

### Code Quality Tools

- **PHPUnit** for testing
- **PHP CS Fixer** for coding standards (PSR-12)
- **PHPStan** for static analysis
- **Security Checker** for dependency vulnerabilities

## 🤝 Contributing

We welcome contributions! Please see our [Contributing Guide](CONTRIBUTING.md) for details.

### Development Process

1. Fork the repository
2. Create a feature branch
3. Write your changes
4. Run `make all` to ensure all checks pass
5. Submit a pull request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.