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
        if (Schema::hasTable('epp')) {
            Schema::table('epp', function (Blueprint $table) {
                $table->tinyInteger('presupuestable')->nullable(false)->default(0)->after('estatus');
                $table->tinyInteger('con_mir')->nullable(false)->default(0)->after('presupuestable');
                $table->tinyInteger('confirmado')->nullable(false)->default(0)->after('con_mir');
                $table->tinyInteger('tipo_presupuesto')->nullable(true)->default(null)->after('confirmado');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
