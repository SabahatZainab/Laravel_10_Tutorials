<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // $table->string('name');
            $table->string('name',30); //maximum characters 30
            $table->float('percentage',3,2);//mention how many value of there before deciaml in first parameter and how many value after decimal mention in second parameter
            $table->timestamps();
        });
    }

    //commads used
    //php artisan migrate
    //php artisan make:migration create_users_table
    //php artisan migrate:status
    //php artisan migrate --force // used our migration is already on production side and we need to add migratio forcefully
    //php artisan migrate:rollback //undo last migration
    //php artisan migrate:rollback --step=3 //last three commands of migration effects  will be (rollback/undo)
    //for paticular steps below command used
    //php artisan migrate:rollback --batch=2
    //php artisan migrate:reset //remove all migration//reset database
    //php artisan migrate:refresh //rollback all migration, then migrate again all tables
    //php artisan migrate:fresh // work same as refresh, but it removes all the table then migrate again all
    

    //php artisan make:model Task -m // this command create model as well as migration
    //datatype in migration




    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
