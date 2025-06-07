<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('Trazabilidad_Insumo', function (Blueprint $table) {
            $table->string('remito', 50)->nullable()->after('id');
        });
    }

    public function down()
    {
        Schema::table('Trazabilidad_Insumo', function (Blueprint $table) {
            $table->dropColumn('remito');
        });
    }
};
