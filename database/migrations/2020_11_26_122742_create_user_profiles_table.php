<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->boolean('active')->default(true);
            $table->string('last_name', 100)->nullable();
            $table->string('second_name', 100)->nullable();
            $table->enum('personal_gender', ['man', 'woman'])->default('man');
            $table->string('personal_profession', 100)->nullable();
            $table->string('personal_www')->nullable();
            $table->date('personal_birthday')->nullable();
            $table->string('personal_photo')->nullable();
            $table->string('personal_icq', 20)->nullable();
            $table->string('personal_phone', 20)->nullable();
            $table->string('personal_fax', 20)->nullable();
            $table->string('personal_mobile', 20)->nullable();
            $table->string('personal_pager', 20)->nullable();
            $table->string('personal_street')->nullable();
            $table->string('personal_city')->nullable();
            $table->string('personal_state')->nullable();
            $table->string('personal_zip', 20)->nullable();
            $table->string('personal_country')->nullable();
            $table->string('personal_company')->nullable();
            $table->string('work_position')->nullable();
            $table->string('work_department')->nullable();
            $table->string('uf_interests')->nullable();
            $table->string('uf_skills')->nullable();
            $table->string('uf_web_sites')->nullable();
            $table->string('uf_xing')->nullable();
            $table->string('uf_linkedin')->nullable();
            $table->string('uf_facebook')->nullable();
            $table->string('uf_twitter')->nullable();
            $table->string('uf_skype')->nullable();
            $table->string('uf_district')->nullable();
            $table->string('uf_phone_inner')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
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
        Schema::dropIfExists('user_profiles');
    }
}
