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
        Schema::create('employees', function (Blueprint $table) {
            $table->id('id_employee');
            $table->string('name')->nullable(false);
            $table->string('last_name')->nullable(true);
            $table->date('birth_date');
            $table->string('email');
            $table->string('phone');
            $table->string('gender');
            $table->string('address');
            $table->string('city');
            $table->string('department');
            $table->enum('work_area', ['Administrative', 'Operative',
                                    'Management', 'Finance', 'Human Resources',
                                    'Marketing', 'Sales', 'Logistics',
                                    'Customer Service', 'Information Technology']);
            $table->double('salary', 10, 2)->default(0.0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
