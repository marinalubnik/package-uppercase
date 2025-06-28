# package-uppercase

Этот пакет конвертирует в верхний регистр строки

Краткое описание пакета

PHP >=7.0.

## Установка

composer require marina-lubnik/package-uppercase

## Использование

```php
<?php

$processor = new StringToUppercase();
echo $processor->getStringToUpper('string'); // STRING
