<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStyleGuidesTable extends Migration
{
    public function up()
    {
        Schema::create('style_guides', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->json('settings')->nullable();
            $table->timestamps();
        });
    }
}
