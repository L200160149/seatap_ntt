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
}
