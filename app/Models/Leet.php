<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Leet extends Model
{
    private static array $symbols;

    public static function generate(string $word)
    {
        $sanitized = self::sanitize($word);
        
        $permutations = [$sanitized];

        $response = self::permutate($sanitized);
        $permutations = array_merge($permutations, $response);

        return $permutations;
    }

    private static function permutate(string $word, int $str_index=0, int $symbol_index=0, bool $truncate=false, int $truncate_bytes=1)
    {
        $ch = mb_substr($word, $str_index, 1);
        $symbol = self::getSymbol($ch, $symbol_index);
        if($ch == "" or $ch == " ") return [];
        if($symbol == null) {
            $permutations = self::permutate($word, $str_index+1, 0);

            return $permutations;
        }
        
        $permutations = [];
        $symbol_len = mb_strlen($symbol);
        $new_truncate_bytes = strlen($symbol);

        $new_word = substr_replace($word, $symbol, $truncate ? $truncate_bytes : $str_index, 1);
        $truncate_next = $symbol_len != $new_truncate_bytes;

        array_push($permutations, $new_word);

        $res1 = self::permutate($word, $str_index, $symbol_index+1, $truncate, $truncate_bytes);
        $res2 = self::permutate($new_word, $str_index+$symbol_len, 0, $truncate_next, $new_truncate_bytes);

        $permutations = array_merge($permutations, $res2, $res1);

        return $permutations;
    }

    private static function sanitize(string $word)
    {
        $asciiWord = strtolower(iconv("UTF-8", "ASCII//TRANSLIT", $word));
        $sanitized = preg_replace('/[^a-z\ ]/', '', $asciiWord);

        return $sanitized;
    }

    private static function getSymbol(string $ch, int $index)
    {
        if(!isset(self::$symbols)) {
            $result = DB::select("SELECT letter, symbol FROM symbols");

            self::$symbols = [];
            foreach ($result as $obj) {
                if(!isset(self::$symbols[$obj->letter])) self::$symbols[$obj->letter] = [];
                array_push(self::$symbols[$obj->letter], $obj->symbol);
            }
        }

        return isset(self::$symbols[$ch][$index])
            ? self::$symbols[$ch][$index]
            : null;
    }
}
