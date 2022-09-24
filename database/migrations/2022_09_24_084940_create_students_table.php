<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments("id");
            $table->string("name", "50");
            $table->string("fullname", "100");
            $table->string("gender", "10");
            $table->date("dob");
            $table->text("address");
            $table->boolean("is_active");
            $table->integer("created_by");
            $table->integer("updated_by");
            $table->integer("deleted_by");
            $table->timestamp("deleted_at");
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
        Schema::dropIfExists('students');
    }
}
