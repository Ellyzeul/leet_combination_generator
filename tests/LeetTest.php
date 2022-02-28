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
                    "TEsTE", "teSTE", "TeSTE", "tESTE", "TESTE"];
        $response = Leet::generate("teste");
        $expLen = count($expected);

        for($i=0; $i < $expLen; $i++) {
            $this->assertTrue(
                in_array($expected[$i], $response)
            );
        }
    }
}
