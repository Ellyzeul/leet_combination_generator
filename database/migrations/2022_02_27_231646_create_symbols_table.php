<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('symbols', function (Blueprint $table) {
            $table->char('letter', 1);
            $table->string('symbol', 50);

            $table->primary(['letter', 'symbol']);

            $table->charset = 'utf8';
            $table->collation = 'utf8_bin';
        });

        DB::statement(
           'ALTER TABLE symbols
                ADD CONSTRAINT chk_symbols_letter_is_lower_alpha
                    CHECK (ORD(letter) BETWEEN 97 AND 122);'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('symbols');
    }
};
