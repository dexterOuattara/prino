<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->usingned()->nullable();
            $table->string('entite')->nullable();
            $table->string('categorie')->nullable();
            $table->string('adresse')->nullable();
            $table->string('boite_postale')->nullable();
            $table->string('ville')->nullable();
            $table->string('chiffredaffaire')->nullable();
            $table->string('nombremploye')->nullable();
            $table->string('descriptifentreprise')->nullable();
            $table->string('prixremporte')->nullable();
            $table->string('siteweb')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();


            $table->string('nomcomplet')->nullable();
            $table->string('telephone')->nullable();
            $table->string('fonctionoccupe')->nullable();
            $table->string('descriptifprojet')->nullable();
            $table->string('innovantprojet')->nullable();
            // $table->string('concurrent')->nullable();
            $table->string('equipe')->nullable();


            $table->string('reglementation')->nullable();
            $table->string('stadedevelopement')->nullable();
            $table->string('besoinfinancement')->nullable();
            $table->string('repartitioncapitale')->nullable();


            $table->string('declarationfiscale')->nullable();
            $table->string('businessplan')->nullable();
            $table->string('planfin')->nullable();
            $table->string('powerpoint')->nullable();

            
            $table->string('filenames')->nullable();


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
        Schema::dropIfExists('projects');
    }
}
