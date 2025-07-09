<?php

namespace MenyongMenying\MLibrary\Kucil\Utilities\MBoolean;

/**
 * @author MenyongMenying <menyongmenying.main@email.com>
 * @version 0.0.1
 * @date 2025-07-01
 */
final class MBoolean
{
    /**
     * Mengecek apakah suatu nilai merupakan boolean.
     * @param  mixed $boolean Nilai yang akan dicek.
     * @return bool           Hasil pengecekan.
     */
    public function isBoolean(mixed $boolean) :bool
    {
        return is_bool($boolean);
    }
    
    /**
     * Mengubah boolean menjadi string.
     * @param  bool   $boolean Boolean yang akan diubah menjadi string.
     * @param  string $lang    Bahasa yang digunakan.
     * @return string          String dari $lang.
     */
    public function convertToString(bool $boolean, string $lang = 'en') :string
    {
        switch($lang) {
            case 'en':
                return $boolean ? 'true' : 'false';
            case 'id':
                return $boolean ? 'benar' : 'salah';
            default:
                return $boolean ? 'true' : 'false';
        }
    }

    /**
     * Mengubah boolean menjadi integer.
     * @param  bool $boolean Boolean yang akan diubah menjadi integer.
     * @return int           Integer dari $boolean.
     */
    public function convertToInteger(bool $boolean) :int
    {
        switch($boolean) {
            case true:
                return 1;
            case false:
                return 0;
            default:
                return 0;
        }
    }
}
