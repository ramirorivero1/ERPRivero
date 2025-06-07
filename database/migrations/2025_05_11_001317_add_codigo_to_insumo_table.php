<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('Insumo', function (Blueprint $table) {
            $table->string('codigo', 50)
                  ->unique()
                  ->after('id')
                  ->comment('Código legible del insumo');
        });
    }

    public function down()
    {
        Schema::table('Insumo', function (Blueprint $table) {
            $table->dropUnique(['codigo']);
            $table->dropColumn('codigo');
        });
    }
};
