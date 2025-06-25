# package-uppercase

Этот пакет конвертирует в верхний регистр строки

Краткое описание пакета

## Требования

- PHP 8.4

## Установка

composer require marina-lubnik/package-uppercase

## Использование

```php
<?php

$processor = new StringToUppercase();
echo $processor->getStringToUpper('string'); // STRING
