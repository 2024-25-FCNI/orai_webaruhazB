<?php

use App\Models\Termek;
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
        Schema::create('termeks', function (Blueprint $table) {
            $table->id();
            $table->string('elnevezes', 35);
            $table->decimal('ar', 10, 2);
            $table->longText('leiras'); 
            $table->timestamps();
        });

        
        Termek::create([
            'elnevezes' => 'Kerékpár',
            'ar' => 59999.99,
            'leiras' => 'Egy kényelmes városi kerékpár, 21 sebességgel és strapabíró vázzal.'
        ]);

        Termek::create([
            'elnevezes' => 'Futócipő',
            'ar' => 24999.50,
            'leiras' => 'Könnyű és tartós futócipő, amely kiváló tapadást biztosít minden terepen.'
        ]);

        Termek::create([
            'elnevezes' => 'Hátizsák',
            'ar' => 14999.00,
            'leiras' => 'Vízálló hátizsák 30 literes kapacitással, ideális túrázáshoz és mindennapi használatra.'
        ]);

        Termek::create([
            'elnevezes' => 'Okosóra',
            'ar' => 49999.99,
            'leiras' => 'Stílusos okosóra, amely figyeli a pulzust, lépéseket és alvásminőséget.'
        ]);

        Termek::create([
            'elnevezes' => 'Bluetooth hangszóró',
            'ar' => 19999.90,
            'leiras' => 'Hordozható bluetooth hangszóró erőteljes hangzással és hosszú akkumulátor-élettartammal.'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('termeks');
    }
};
