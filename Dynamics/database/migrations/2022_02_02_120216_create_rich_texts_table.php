<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('rich_texts', function (Blueprint $table) {
            $table->id();
            $table->morphs('record');
            $table->string('field');
            $table->longText('body')->nullable();
            $table->timestamps();

            $table->unique('field');
            $table->unique('record_type');
            $table->unique('record_id');
        });
    }
};