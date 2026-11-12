# php-ci-lab 
[![PHP CI](https://github.com/fffsdvfff/php-ci-lab/actions/workflows/php-ci.yml/badge.svg)](https://github.com/fffsdvfff/php-ci-lab/actions/workflows/php-ci.yml)
Навчальний PHP-проєкт для налаштування
CI/CD за допомогою GitHub Actions.

Проєкт міститиме клас Calculator
та автоматичні перевірки за допомогою
PHPUnit і Laravel Pint.

## Функціонал

- Додавання двох чисел.
- Віднімання двох чисел.
- Автоматичне тестування за допомогою PHPUnit.
- Перевірка форматування коду за допомогою Laravel Pint.
- Автоматичний запуск CI через GitHub Actions.

## Запуск тестів

Встановити залежності:

```bash
composer install
```

Запустити модульні тести:

```bash
./vendor/bin/phpunit tests/Unit
```

Перевірити форматування коду:

```bash
./vendor/bin/pint --test
```