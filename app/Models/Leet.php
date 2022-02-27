<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leet extends Model
{
    private static array $similarSymbols = [
        "a" => ["A"],
        "b" => ["B"],
        "c" => ["C"],
        "d" => ["D"],
        "e" => ["E"],
        "f" => ["F"],
        "g" => ["G"],
        "h" => ["H"],
        "i" => ["I"],
        "j" => ["J"],
        "l" => ["K"],
        "l" => ["L"],
        "m" => ["M"],
        "n" => ["N"],
        "o" => ["O"],
        "p" => ["P"],
        "q" => ["Q"],
        "r" => ["R"],
        "s" => ["S"],
        "t" => ["T"],
        "u" => ["U"],
        "v" => ["V"],
        "w" => ["W"],
        "x" => ["X"],
        "y" => ["Y"],
        "z" => ["Z"]
    ];

    public static function generate(string $word)
    {
        $sanitized = self::sanitize($word);
        
        $permutations = [$sanitized];

        $response = self::permutate($sanitized);
        $permutations = array_merge($permutations, $response);

        return $permutations;
    }

    private static function permutate(string $word, int $str_index=0, int $symbol_index=0)
    {
        $ch = mb_substr($word, $str_index, 1);
        $symbol = self::getSymbol($ch, $symbol_index);
        if($ch == " ") {
            $res1 = self::permutate($word, $str_index+1, $symbol_index+1);
            $res2 = self::permutate($word, $str_index+2, 0);

            $permutations = array_merge($res1, $res2);

            return $permutations;
        }
        if($ch == "") return [];
        if($symbol == null) {
            $permutations = self::permutate($word, $str_index+1, 0);

            return $permutations;
        }
        
        $permutations = [];
        $symbol_len = mb_strlen($symbol);

        $new_word = substr_replace($word, $symbol, $str_index, 1);
        array_push($permutations, $new_word);

        $res1 = self::permutate($word, $str_index, $symbol_index+1);
        $res2 = self::permutate($new_word, $str_index+$symbol_len, 0);

        $permutations = array_merge($permutations, $res2, $res1);

        return $permutations;
    }

    private static function getLetters(string $word)
    {
        $len = strlen($word);
        $letters = [];
        $counter = [];
    
        for($i = 0; $i < $len; $i++) {
            $ch = $word[$i];
            $num = isset($counter[$ch]) ? $counter[$ch] : 0;
            $counter[$ch] = $num+1;
    
            if((!in_array($ch, $letters)) and $ch != ' ') array_push($letters, $ch);
        }

        return [$letters, $counter];
    }

    private static function sanitize(string $word)
    {
        $asciiWord = strtolower(iconv("UTF-8", "ASCII//TRANSLIT", $word));
        $sanitized = preg_replace('/[^a-z\ ]/', '', $asciiWord);

        return $sanitized;
    }

    private static function getSymbol(string $ch, int $index)
    {
        return isset(self::$similarSymbols[$ch][$index])
            ? self::$similarSymbols[$ch][$index]
            : null;
    }
}
