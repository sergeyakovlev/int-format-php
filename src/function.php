<?php

/**
 * This file is part of the IntFormat package.
 *
 * @author Serge Yakovlev <serge.yakovlev@gmail.com>
 * @link https://github.com/sergeyakovlev/int-format-php
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

declare(strict_types=1);

namespace SergeYakovlev\IntFormat;

/**
 * Formats an integer with grouped thousands and optionally +/− signs.
 *
 * @param int $value
 * @param string $thousands_separator
 * @param string $sign_plus
 * @param string $sign_minus
 * @return string
 */
function int_format(
    int $value,
    string $thousands_separator = '&nbsp;',
    string $sign_plus = '',
    string $sign_minus = '&minus;'
): string {
    $string_value = (string) abs($value);
    for ($i = strlen($string_value) - 3; $i > 0; $i -= 3) {
        $string_value = substr_replace($string_value, $thousands_separator, $i, 0);
    }
    if ($value > 0 && $sign_plus !== '') {
        $string_value = $sign_plus . $string_value;
    } elseif ($value < 0 && $sign_minus !== '') {
        $string_value = $sign_minus . $string_value;
    }
    return $string_value;
}
