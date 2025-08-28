<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up(): void
  {
    Schema::create('ipage__page_translations', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->increments('id');
      $table->string('title');
      $table->string('slug');
      $table->boolean('status')->default(1);
      $table->text('body')->nullable();
      $table->string('meta_title')->nullable();
      $table->string('meta_description')->nullable();
      $table->string('og_title')->nullable();
      $table->string('og_description')->nullable();
      $table->string('og_image')->nullable();
      $table->string('og_type')->nullable();

      $table->unique(['slug', 'locale']);


      $table->integer('page_id')->unsigned();
      $table->string('locale')->index();
      $table->unique(['page_id', 'locale']);
      $table->foreign('page_id')->references('id')->on('ipage__pages')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down(): void
  {
    Schema::table('ipage__page_translations', function (Blueprint $table) {
      $table->dropForeign(['page_id']);
    });
    Schema::dropIfExists('ipage__page_translations');
  }
};
