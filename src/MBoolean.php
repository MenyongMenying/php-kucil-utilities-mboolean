<?php

namespace MenyongMenying\MLibrary\Kucil\Utilities\MBoolean;

use MenyongMenying\MLibrary\Kucil\Utilities\MBoolean\Contracts\MBooleanInterface;
use MenyongMenying\MLibrary\Kucil\Utilities\MBoolean\Enums\MBooleanLang;

/**
 * @author MenyongMenying <menyongmenying.main@email.com>
 * @version 0.0.1
 * @date 2025-07-30
 */
final class MBoolean implements MBooleanInterface
{
    public function isBoolean(mixed $boolean) :null|bool
    {
        return is_bool($boolean);
    }

    public function convertToInteger(bool $boolean) :null|int
    {
        return match($boolean) {
            true => 1,
            false => 0,
            default => null,
        };
    }

    public function convertToString(bool $boolean, MBooleanLang $lang = MBooleanLang::EN) :null|string
    {
        return match ($lang) {
            MBooleanLang::EN => match($boolean) {
                true => 'true',
                false => 'false',
            },
            MBooleanLang::ID => match($boolean) {
                true => 'benar',
                false => 'salah',
            },
            default => null,
        };
    }
}