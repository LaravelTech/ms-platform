<?php 

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class Repository implements BaseRepositoryInterface
{
  // model property on class instances
  protected $model;

  /**
   * The relations to eager load.
   *
   * @var
   */
  protected $with = [];

  // Constructor to bind model to repo
  public function __construct(Model $model)
  {
    $this->model = $model;
  }

  /**
   * @param array $columns
   * @return mixed
   */
  public function all($columns = array('*')) {
    return $this->model->get($columns);
  }

  /**
   * @param int $perPage
   * @param array $columns
   * @return mixed
   */
  public function paginate($perPage = 15, $columns = array('*')) {
    return $this->model->paginate($perPage, $columns);
  }

  /**
   * Sets relations for eager loading.
   *
   * @param $relations
   * @return $this
   */
  public function with($relations)
  {
    return $this->model->with($relations);
  }

  /**
   * @param array $data
   * @return mixed
   */
  public function create(array $data) {
    return $this->model->create($data);
  }

  /**
   * @param array $data
   * @param $id
   * @param string $attribute
   * @return mixed
   */
  public function update(array $data, $id, $attribute="id") {
    return $this->model->where($attribute, '=', $id)->update($data);
  }

  /**
   * @param $id
   * @return mixed
   */
  public function delete($id) {
    return $this->model->destroy($id);
  }

  /**
   * @param $id
   * @param array $columns
   * @return mixed
   */
  public function find($id, $columns = array('*')) {
    return $this->model->find($id, $columns);
  }

  /**
   * @param $attribute
   * @param $value
   * @param array $columns
   * @return mixed
   */
  public function findBy($attribute, $value, $columns = array('*')) {
    return $this->model->where($attribute, '=', $value)->first($columns);
  }
}