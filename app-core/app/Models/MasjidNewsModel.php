<?php

namespace App\Models;

use CodeIgniter\Model;

class MasjidNewsModel extends Model
{
    protected $table            = 'masjid_news';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'masjid_id', 'category_id', 'title', 'slug', 'content', 'thumbnail', 'status', 'views'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $validationRules      = [
        'title'     => 'required|min_length[5]|max_length[255]',
        'slug'      => 'required|max_length[255]',
        'content'   => 'required',
        'masjid_id' => 'required|numeric'
    ];
}
