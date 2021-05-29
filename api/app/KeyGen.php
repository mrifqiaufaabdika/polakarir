<?php
/**
 * Copyright (c) 2020. dibuat Oleh Tama Asrory Ridhana, S.T, MTA.
 * Lisensi ini hanya diberikan dan tidak dapat di perjual belikan kembali tanpa izin pembuat
 */

namespace App;


class KeyGen
{
    /**
     * Generate random key for simple way wehehe
     *
     * @param string $prefix
     * @param string $suffix
     * @return string
     */
    public static function randomKey($prefix = '', $suffix = '', $length = 5)
    {
        $collection = collect([
            1, 2, 3, 4, 5, 6, 7, 8, 9,
            'A', 'B', 'C', 'D', 'E', 'F',
            'G', 'H', 'I', 'J', 'K', 'L', 'M',
            'N', 'O', 'P', 'Q', 'R', 'S', 'T',
            'U', 'V', 'W', 'X', 'Y', 'Z',
            1, 2, 3, 4, 5, 6, 7, 8, 9,
        ]);

        $randomKey = implode('', $collection->random($length)->all());
        return $prefix . $randomKey . $suffix;
    }
}