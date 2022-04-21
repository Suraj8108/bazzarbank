<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPinToAccholdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accholders', function (Blueprint $table) {
            $table->integer("upi_pin")->default(rand(1000, 9999));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('accholders', function (Blueprint $table) {
            $table->dropColumn("upi_pin");
        });
    }
}
