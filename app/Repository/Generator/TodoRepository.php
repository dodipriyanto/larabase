<?php
/**
* @author Dodi Priyanto<dodi.priyanto76@gmail.com>
*/

namespace App\Repository\Generator;

use App\Models\Generator\Todo;
use App\Service\Generator\TodoService;
use App\Repository\CoreRepository;

class TodoRepository extends CoreRepository
{
    protected $todo;

    public function __construct(Todo $todo)
    {
        $this->setModel($todo);
        $this->todo = $todo;
    }

    public function findWith($id, $relation)
    {
        return $this->todo->with("$relation")->find($id);
    }

    public function get_all(){
        return $this->todo->withTrashed()->get();
    }

    public function dataTable($access)
    {
        $data = new TodoService($this);
        return $data->loadDataTable($access);
    }

}
