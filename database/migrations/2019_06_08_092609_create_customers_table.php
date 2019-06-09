<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
        Schema::create ( 'customers' , function ( Blueprint $table ) {
            $table->bigIncrements ( 'id' );
            $table->timestamps ();
            $table->string ( 'firstName' );
            $table->string ( 'secondName' );
            $table->string ( 'phone' );
            $table->string ( 'email' );
            $table->integer ( 'ordersQuantity' );
            $table->float ( 'totalSum' );
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down ()
    {
        Schema::dropIfExists ( 'customers' );
    }
}
