<?php

namespace App\Models;

use CodeIgniter\Model;

class MasjidNewsCategoryModel extends Model
{
    protected $table            = 'masjid_news_categories';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'masjid_id', 'name', 'slug'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $validationRules      = [
        'name'      => 'required|min_length[3]|max_length[100]',
        'slug'      => 'required|max_length[100]',
        'masjid_id' => 'required|numeric'
    ];
}
