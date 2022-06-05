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

namespace SergeYakovlev\IntFormat\Tests;

use PHPUnit\Framework\TestCase;

use function SergeYakovlev\IntFormat\int_format;

class IntFormatTest extends TestCase
{
    /**
     * @return array{0: string, 1: int, 2: string, 3: string, 4: string}[]
     */
    public function dataProvider(): array
    {
        return [
            ['0', 0, '', '', ''],
            ['0', 0, '&nbsp;', '+', '-'],

            ['1', -1, '', '', ''],
            ['1', 1, '', '', ''],
            ['-1', -1, '&nbsp;', '+', '-'],
            ['+1', 1, '&nbsp;', '+', '-'],

            ['10', -10, '', '', ''],
            ['10', 10, '', '', ''],
            ['-10', -10, '&nbsp;', '+', '-'],
            ['+10', 10, '&nbsp;', '+', '-'],

            ['100', -100, '', '', ''],
            ['100', 100, '', '', ''],
            ['-100', -100, '&nbsp;', '+', '-'],
            ['+100', 100, '&nbsp;', '+', '-'],

            ['1000', -1000, '', '', ''],
            ['1000', 1000, '', '', ''],
            ['-1&nbsp;000', -1000, '&nbsp;', '+', '-'],
            ['+1&nbsp;000', 1000, '&nbsp;', '+', '-'],

            ['10000', -10000, '', '', ''],
            ['10000', 10000, '', '', ''],
            ['-10&nbsp;000', -10000, '&nbsp;', '+', '-'],
            ['+10&nbsp;000', 10000, '&nbsp;', '+', '-'],

            ['100000', -100000, '', '', ''],
            ['100000', 100000, '', '', ''],
            ['-100&nbsp;000', -100000, '&nbsp;', '+', '-'],
            ['+100&nbsp;000', 100000, '&nbsp;', '+', '-'],

            ['1000000', -1000000, '', '', ''],
            ['1000000', 1000000, '', '', ''],
            ['-1&nbsp;000&nbsp;000', -1000000, '&nbsp;', '+', '-'],
            ['+1&nbsp;000&nbsp;000', 1000000, '&nbsp;', '+', '-'],
        ];
    }

    /**
     * @dataProvider dataProvider
     */
    public function testFindByNameWithExt(
        string $expected,
        int $value,
        string $thousands_separator,
        string $sign_plus,
        string $sign_minus
    ): void {
        $this->assertSame($expected, int_format($value, $thousands_separator, $sign_plus, $sign_minus));
    }
}
