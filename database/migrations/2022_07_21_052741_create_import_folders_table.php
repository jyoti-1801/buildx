<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportFoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('import_folders', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->string('source');
            $table->datetime('project_mgmt')->nullable();
            $table->tinyInteger('files')->default('1');
            $table->date('messaging')->nullable();
            $table->datetime('financial')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('import_folders');
    }
}
