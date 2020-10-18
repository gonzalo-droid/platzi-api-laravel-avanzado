<?php

use App\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCreateByToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $user = factory(User::class)->create([
            'name'=>'Administrador',
        ]);

        Schema::table('products', function (Blueprint $table) use ($user) {
            $table->unsignedBigInteger('created_by')->default($user->id);

            //key foreign
            $table->foreign('created_by')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('created_by');
        });
    }
}
