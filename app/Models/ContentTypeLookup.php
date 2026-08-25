<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * ContentTypeLookup
 *
 * Lookup/reference table for the compound type IDs used in content_types.type.
 * This documents what each type integer means (e.g. 15 = "Home FAQ").
 *
 * Table: content_type_lookup
 */
class ContentTypeLookup extends Model
{
    protected $table = 'content_type_lookup';

    // The ID is not auto-incrementing — it's set explicitly to match content_types.type values
    public $incrementing = false;

    protected $fillable = [
        'id',
        'name',
        'slug',
        'category',
        'page_scope',
        'description',
    ];

    /**
     * Get all content_type records that belong to this type.
     */
    public function contentTypes()
    {
        return $this->hasMany(ContentType::class, 'type', 'id');
    }
}
