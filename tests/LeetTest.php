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
        $expected = [
            "Ess3s daí",
            "3$$es d@1",
            "3sses da1"
        ];
        $response = Leet::generate("Esses daí");
        $resLen = count($response);

        for($i=0; $i < $resLen; $i++) {
            $this->assert(
                in_array($response[$i], $expected)
            );
        }
    }
}
