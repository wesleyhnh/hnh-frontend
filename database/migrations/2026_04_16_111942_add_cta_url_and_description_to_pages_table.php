<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('cta_url')->nullable()->after('cta_subtext');
            $table->string('cta_description')->nullable()->after('cta_url');
        });

        // Backfill existing pages so their CTA buttons keep working
        DB::table('pages')->whereNotNull('cta_text')->update(['cta_url' => '/#Contact']);
    }

    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn(['cta_url', 'cta_description']);
        });
    }
};
