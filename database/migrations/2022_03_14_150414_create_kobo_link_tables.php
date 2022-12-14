<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKoboLinkTables extends Migration
{
    public function up()
    {
        /**
         * Adds Kobo username to users table
         * Required to enable forms to be shared with platform users
         */
        Schema::table('users', function (Blueprint $table) {
            $table->string('kobo_username')->nullable();
        });

        /**
         * Table to store ODK forms managed through the platform
         */
        Schema::create('xlsforms', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('xlsfile');
            $table->text('description')->nullable();
            $table->text('media')->nullable()->comment('links to stored files that should be added as media attachments to the ODK form');
            $table->json('csv_lookups')->nullable()->comment('information to enable mysql tables or views to be converted to csv files and added as additional media attachments to the ODK form');
            $table->string('available')->nullable()->comment('Available to all users? If false, the form is only available to testers or admins.');
            $table->foreignId('private_team_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        /**
         * Table to store the individual team's forms (many-many pivot table between Xlsform and Team)
         */
        Schema::create('team_xlsform', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->constrained('teams');
            $table->foreignId('xlsform_id')->constrained('xlsforms');

            $table->string('kobo_id')->nullable()->comment('The unique ID of the form on Kobotools. If null, the form has not yet been pushed to Kobo.');
            $table->string('kobo_version_id')->nullable()->comment('current or most recently deployed version on Kobotools. If null, the form has not yet been deployed on Kobo.');
            $table->string('is_active')->nullable()->comment('is the form active on Kobotools?');
            $table->string('enketo_url')->nullable()->comment('url to the enketo version - pulled from Kobotools');
            $table->boolean('processing')->default(0)->comment('Is the form currently being processed by a Kobo Job?');
            $table->timestamps();
        });

        /**
         * Table to store all ODK raw submissions that get pulled from KoBoToolbox
         */
        Schema::create('submissions', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->foreignId('team_xlsform_id')->constrained('xlsforms');
            $table->string('uuid');
            $table->timestamp('submitted_at');
            $table->string('submitted_by')->nullable();
            $table->json('content');
            $table->json('errors')->nullable();
            $table->boolean('processed')->default(0);
            $table->json('entries')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('kobo_username');
        });

        Schema::dropIfExists('xlsforms');
        Schema::dropIfExists('team_xlsforms');
        Schema::dropIfExists('submissions');
    }
}
