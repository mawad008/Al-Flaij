<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('employee_id')->nullable()->index('orders_employee_id_foreign');
            $table->unsignedBigInteger('status_id')->nullable()->index('orders_status_id_foreign');
            $table->unsignedBigInteger('opened_by')->nullable()->index('orders_opened_by_foreign');
            $table->string('name')->nullable();
            $table->string('email', 100)->nullable();
            $table->string('phone');
            $table->string('identity_no')->nullable();
            $table->double('price')->nullable();
            $table->string('quantity')->nullable();
            $table->string('car_name')->nullable();
            $table->boolean('stumbles')->default(false)->nullable();

            $table->unsignedBigInteger('car_id')->nullable()->index('orders_car_id_foreign');
            $table->unsignedBigInteger('city_id')->nullable()->index('orders_city_id_foreign');
            $table->dateTime('opened_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->string('identity_Card')->nullable();
            $table->string('License_Card')->nullable();
            $table->string('Hr_Letter_Image')->nullable();
            $table->string('Insurance_Image')->nullable();
            $table->unsignedBigInteger('nationality_id')->nullable()->index('orders_nationality_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
