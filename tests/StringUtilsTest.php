<?php

namespace Tests\StringUtilsTest;

use function StringUtils\capitalize;

require_once 'src/StringUtils.php';

if (capitalize('hello') !== 'Hello') {
    throw new \Exception('Функция работает неверно!');
}

if (capitalize('') !== '') {
    throw new \Exception('Функция работает неверно!');
}

echo 'Все тесты пройдены!';
