.PHONY: help install test coverage cs-check cs-fix stan security

help: ## Show this help
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-20s\033[0m %s\n", $$1, $$2}'

install: ## Install dependencies
	composer install

test: ## Run tests
	composer test

coverage: ## Run tests with coverage
	composer test-coverage

cs-check: ## Check coding standards
	composer cs-check

cs-fix: ## Fix coding standards
	composer cs-fix

stan: ## Run static analysis
	composer phpstan

security: ## Run security check
	composer audit

all: install cs-fix stan test ## Run all checks