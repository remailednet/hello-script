# Hello Script

A simple PHP script that prints a greeting message with a customizable name.

## Requirements
- PHP 8.2 or higher
- Composer (for running tests)

## Installation
```bash
# Install dependencies (only needed for running tests)
composer install
```

## Usage

```bash
# Print "hello world!"
./hello.php

# Print "hello Alice!"
./hello.php Alice
```

## Testing
The script comes with unit tests. To run them:

```bash
./vendor/bin/phpunit HelloTest.php
```