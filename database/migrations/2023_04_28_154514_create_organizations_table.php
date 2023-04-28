<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('social_name');
            $table->string('alias_name')->nullable();
            $table->string('code')->nullable();
            /** contact */
            $table->string('email')->nullable();
            $table->string('telephone')->nullable();
            $table->string('cell')->nullable();
            /** address */
            $table->string('zipcode')->nullable();
            $table->string('street')->nullable();
            $table->string('number')->nullable();
            $table->string('complement')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        DB::statement("
        CREATE OR REPLACE VIEW `organizations_view` AS
        SELECT s.id, s.alias_name, s.telephone, s.email, CONCAT(s.city, '-', s.state) as city
        FROM subsidiaries as s
        WHERE s.deleted_at IS NULL
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organizations');
        DB::statement("DROP VIEW organizations_view");
    }
}
