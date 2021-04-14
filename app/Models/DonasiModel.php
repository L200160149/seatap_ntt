<?php

namespace App\Models;

use CodeIgniter\Model;

class DonasiModel extends Model
{
	protected $table                = 'donasi';
	protected $primaryKey           = 'id_donasi';
	protected $allowedFields        = ['nama', 'donasi', 'pembayaran', 'waktu_donasi', 'bukti_transfer'];

	// Dates
	protected $useTimestamps        = true;

	public function getDonasi($id_donasi = false)
	{
		if ($id_donasi == false) {
			return $this->findAll();
		}

		return $this->where(['id_donasi' => $id_donasi])->first();
	}

	public function total()
	{
		$db      = \Config\Database::connect();
		$builder = $db->table('donasi');
		$builder->selectSum('donasi');
		return $query = $builder->get();
	}
}
