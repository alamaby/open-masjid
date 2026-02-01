<?php

namespace App\Models;

use CodeIgniter\Model;

class MasjidFinanceTransactionModel extends Model
{
    protected $table            = 'masjid_finance_transactions';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'masjid_id', 'category_id', 'program_id', 'date', 
        'amount', 'type', 'description', 
        'donor_name', 'donor_phone', 'attachment'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $validationRules      = [
        'masjid_id'   => 'required',
        'category_id' => 'required',
        'date'        => 'required|valid_date',
        'amount'      => 'required|decimal',
        'type'        => 'required|in_list[pemasukan,pengeluaran]'
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    /**
     * Get summary by masjid_id
     */
    public function getSummary($masjidId)
    {
        $income = $this->where(['masjid_id' => $masjidId, 'type' => 'pemasukan'])->selectSum('amount')->get()->getRowArray();
        $expense = $this->where(['masjid_id' => $masjidId, 'type' => 'pengeluaran'])->selectSum('amount')->get()->getRowArray();

        $totalIncome = $income['amount'] ?? 0;
        $totalExpense = $expense['amount'] ?? 0;
        $balance = $totalIncome - $totalExpense;

        return [
            'total_income'  => $totalIncome,
            'total_expense' => $totalExpense,
            'balance'       => $balance
        ];
    }
}
