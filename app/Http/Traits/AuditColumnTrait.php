<?php

namespace App\Http\Traits;

use Illuminate\Database\Schema\Blueprint;

trait AuditColumnTrait
{
    public function addAdminAuditColumns(Blueprint $table): void
    {
       $table->unsignedBigInteger('created_by')->nullable();
       $table->unsignedBigInteger('updated_by')->nullable();
       $table->unsignedBigInteger('deleted_by')->nullable();

       $table->foreign('created_by')->references('id')->on('admins')->onDelete('cascade')->onUpdate('cascade');
       $table->foreign('updated_by')->references('id')->on('admins')->onDelete('cascade')->onUpdate('cascade');
       $table->foreign('deleted_by')->references('id')->on('admins')->onDelete('cascade')->onUpdate('cascade');
    }
    public function dropAdminAuditColumns(Blueprint $table): void
    {
      $table->dropForeign(['created_by']);
      $table->dropForeign(['updated_by']);
      $table->dropForeign(['deleted_by']);

      $table->dropColumn('created_by');
      $table->dropColumn('updated_by');
      $table->dropColumn('deleted_by');
    }
    public function addMorphedAuditColumns(Blueprint $table): void
    {
      $table->unsignedBigInteger('created_by')->nullable();
      $table->string('created_type')->nullable();
      $table->unsignedBigInteger('updated_by')->nullable();
      $table->string('updated_type')->nullable();
      $table->unsignedBigInteger('deleted_by')->nullable();
      $table->string('deleted_type')->nullable();
    }
    public function dropMorphedAuditColumn(Blueprint $table): void
    {
      $table->dropColumn('created_by');
      $table->dropColumn('created_type');
      $table->dropColumn('updated_by');
      $table->dropColumn('updated_type');
      $table->dropColumn('deleted_by');
      $table->dropColumn('deleted_type');
    }
}
