<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('country')->default('Japan');
            $table->string('industry');
            $table->text('address')->nullable();
            $table->string('website')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('partnership_status')->default('active');
            $table->text('notes')->nullable();
            $table->timestamps();
        });

        Schema::create('job_opportunities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employer_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('industry');
            $table->string('country')->default('Japan');
            $table->string('program_type'); // SSW, TITP
            $table->text('job_description');
            $table->text('required_skills')->nullable();
            $table->string('japanese_level_required')->default('N4');
            $table->decimal('salary', 10, 2)->nullable();
            $table->integer('vacancies')->default(1);
            $table->date('application_deadline')->nullable();
            $table->string('status')->default('open');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_opportunities');
        Schema::dropIfExists('employers');
    }
};
