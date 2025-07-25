<?php

namespace MenyongMenying\MLibrary\Kucil\Utilities\MBoolean\Contracts;

use MenyongMenying\MLibrary\Kucil\Utilities\MBoolean\Enums\MBooleanLang;

/**
 * @author MenyongMenying <menyongmenying.main@email.com>
 * @version 0.0.1
 * @date 2025-07-30
 */
interface MBooleanInterface
{
    /**
     * Mengecek apakah nilai bertipe data 'Boolean'.
     * @param  mixed     $boolean Nilai yang akan dicek.
     * @return null|bool          Hasil pengecekan.
     */
    public function isBoolean(mixed $boolean) :null|bool;

    /**
     * Mengubah boolean menjadi bertipe data 'Integer'.
     * @param  bool     $boolean Boolean yang akan diubah menjadi integer.
     * @return null|int          Integer $boolean.
     */
    public function convertToInteger(bool $boolean) :null|int;

    /**
     * Mengubah boolean menjadi bertipe data 'String'.
     * @param  bool        $boolean Boolean yang akan diubah menjadi string.
     * @param  [type]      $lang    
     * @return null|string          String dari $boolean.
     */
    public function convertToString(bool $boolean, MBooleanLang $lang = MBooleanLang::EN) :null|string;
}
