<?php

namespace App\Models;

use CodeIgniter\Model;

class MasjidFinanceCategoryModel extends Model
{
    protected $table            = 'masjid_finance_categories';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['masjid_id', 'name', 'type', 'slug'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $validationRules      = [
        'masjid_id' => 'required',
        'name'      => 'required|min_length[3]|max_length[100]',
        'type'      => 'required|in_list[pemasukan,pengeluaran]',
        'slug'      => 'required|max_length[100]'
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
}
