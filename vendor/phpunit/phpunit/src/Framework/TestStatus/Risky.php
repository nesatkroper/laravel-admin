<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\TestStatus;

/**
 * @psalm-immutable
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Risky extends Known
{
    /**
     * @psalm-assert-if-true Risky $this
     */
    public function isRisky(): bool
    {
        return true;
    }

    public function asInt(): int
    {
        return 5;
    }

    public function asString(): string
    {
        return 'risky';
    }
}
