<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class DigitalItem extends Model
{
    protected $connection = 'mongodb';

    /** @return list<string> */
    public static function categoryList(): array
    {
        return [
            'Audio',
            'Research',
            'Books',
            'Articles',
            'Images',
        ];
    }
    protected $table = 'digital_items';
    protected $fillable = [
        'title',
        'author',
        'category',
        'keywords',
        'description',
        'file_type',
        'original_name',
        'filename',
        'path',
        'cover_path',
        'uploaded_by',
        'download_count',
        'read_count',
    ];

    protected $casts = [
        'download_count' => 'integer',
        'read_count' => 'integer',
    ];

    protected $attributes = [
        'download_count' => 0,
        'read_count' => 0,
    ];

    public function uploader()
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }
}
