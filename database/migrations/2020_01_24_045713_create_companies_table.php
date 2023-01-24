<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type_id');
            $table->unsignedBigInteger('user_id');
            $table->string('company_name');
            $table->string('phone');
            $table->text('address');
            $table->string('ceo_name');
            $table->string('hr_manager');
            $table->text('description');
            $table->string('website');
            $table->string('profile');

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
        Schema::dropIfExists('companies');
    }
}
