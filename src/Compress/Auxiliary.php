<?php
/**
 * This file is part of PHP-Yacc package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace PhpYacc\Compress;

/**
 * Class Auxiliary
 */
class Auxiliary
{
    public $next;
    public $index;
    public $gain;
    public $preimage;
    public $table = [];
}