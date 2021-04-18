<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogsModel extends Model
{
	protected $table                = 'blogs';
	protected $primaryKey           = 'id';
	protected $allowedFields        = ['title', 'desc', 'slug', 'author', 'cover'];

	// Dates
	protected $useTimestamps        = true;


	public function getBlog($slug = false)
	{
		if ($slug == false) {
			return $this->findAll();
		}

		return $this->where(['slug' => $slug])->first();
	}
}
