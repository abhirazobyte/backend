<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Creates a dedicated lookup table for the compound type IDs used in content_types.type.
 *
 * This is separate from the `types` table, which the CMS admin panel uses
 * for its own content section categories (Exam Preparation, Testimonials, etc.).
 */
class CreateContentTypeLookupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_type_lookup', function (Blueprint $table) {
            $table->unsignedInteger('id')->primary();   // matches content_types.type values
            $table->string('name', 100);                // e.g. "Home FAQ"
            $table->string('slug', 100)->unique();      // e.g. "home-faq"
            $table->string('category', 50);             // faq, content, destination
            $table->string('page_scope', 50)->nullable(); // home, study-abroad, null = global
            $table->string('description', 255)->nullable();
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
        Schema::dropIfExists('content_type_lookup');
    }
}
