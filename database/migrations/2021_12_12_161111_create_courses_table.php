<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Course;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {

            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->text('description');
            $table->enum('status', [Course::BORRADOR, Course::REVISION, Course::PUBLICADO])->default(Course::BORRADOR);
            $table->string("slug");

            //Declaramos las variables de Llaves foraneas
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('level_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('price_id')->nullable();

            //Hacemos las relaciones de esas llaves foraneas
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); //en cascada porque cuando un usuario se elimine queremos que tambien se eliminen todos sus cursos en cascada
            $table->foreign('level_id')->references('id')->on('levels')->onDelete('set null'); //set null porque cuando un nivel se elimine el campo quede vacio y los cursos que pertencecian a ese nivel no sean eliminados y tengan el campo nulo (ponemos nullable en su declaracion para que el campo pueda ser nulo)
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            $table->foreign('price_id')->references('id')->on('prices')->onDelete('set null');


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
        Schema::dropIfExists('courses');
    }
}
