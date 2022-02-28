<?php

namespace Tests;

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use App\Models\Leet;

class LeetTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_words_generation()
    {
        // A 5 letters word varying from lowercase to uppercase should have: 2*2*2*2*2=32 combinations
        $expected = ["teste", "Teste", "tEste", "TEste", "teSte", "TeSte", "tESte", "TESte", "tesTe",
                    "TesTe", "tEsTe", "TEsTe", "teSTe", "TeSTe", "tESTe", "TESTe", "testE", "TestE",
                    "tEstE", "TEstE", "teStE", "TeStE", "tEStE", "TEStE", "tesTE", "TesTE", "tEsTE",
                    "TEsTE", "teSTE", "TeSTE", "tESTE", "TESTE", "t3ste", "T3ste", "t3st3", "T3st3",
                    "t3Ste", "T3Ste", "t3St3", "T3St3", "t3sTe", "T3sTe", "t3sT3", "T3sT3", "t3STe", 
                    "T3STe", "t3ST3", "T3ST3", "t3stE", "T3stE", "t3StE", "T3StE", "t3sTE", "T3sTE", 
                    "t3STE", "T3STE"];
        $response = Leet::generate("teste");
        $expLen = count($expected);

        for($i=0; $i < $expLen; $i++) {
            $this->assertTrue(
                in_array($expected[$i], $response)
            );
        }
    }
}
