<?php
namespace App\Repositories;

use App\Repositories\Contract\RestfulInterface;
use App\Models\Project;

class ProjectRepository implements RestfulInterface{

  protected $__model;

  public function __construct(Project $model)
  {
    $this->_model =  $model;
  }

  /**
 	 * GET LIST, FIND, WHERE
 	 *
 	 * @param type
 	 * @return void
	 */
  public function list(){
    return $this->_model->all();
  }

  public function findID($id)
  {
    return $this->_model->find($id);
  }

  public function findWhere($col, $ArrWhere)
  {
    return $this->_model->where($col, $ArrWhere)->get();
  }

  /**
 	 * CREATE
 	 *
 	 * @param type
 	 * @return void
	 */
  public function create($data)
  {
    return $this->_model->create($data);
  }

  /**
 	 * UPDATE
 	 *
 	 * @param type
 	 * @return void
	 */

  public function update($id, $data)
  {
    $inst = $this->_model->find($id);
    return $inst->update($data);
  }


  /**
 	 * DESTROY
 	 *
 	 * @param type
 	 * @return void
	 */

  public function delete($id)
  {
    $this->_model->destroy($id);
  }

  public function deleteAll($dataArr)
  {
    $this->_model->destroy($dataArr);
  }
  // END
}
