<?php
namespace App\Models;
use CodeIgniter\Model;
class CartModel extends Model
{
    protected $table      = 'cart';
    protected $primaryKey = 'id';

//     protected $useAutoIncrement = true;

//     protected $returnType     = 'array';
//     protected $useSoftDeletes = true;

    protected $allowedFields = ['pname', 'pdescription', 'price'];

    // protected $useTimestamps = false;
    // protected $createdField  = 'post_created_at';
    // protected $updatedField  = 'post_updated_at';
    // protected $deletedField  = 'post_deleted_at';

//     protected $validationRules    = [];
//     protected $validationMessages = [];
//     protected $skipValidation     = false;
}