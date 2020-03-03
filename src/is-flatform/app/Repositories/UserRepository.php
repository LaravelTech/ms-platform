<?php 

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Repositories\Repository;

class UserRepository extends Repository
{
  // space that we can use the repository from
  protected $model;

  public function __construct(User $user)
  {
    // set the model
    $this->model = new Repository($user);
  }
}