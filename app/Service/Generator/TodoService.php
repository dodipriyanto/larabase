<?php
/**
* @author Dodi Priyanto<dodi.priyanto76@gmail.com>
*/

namespace App\Service\Generator;


use App\Models\Generator\Todo;
use App\Repository\Generator\TodoRepository;
use Illuminate\Support\Facades\Validator;
use App\Service\CoreService;

class TodoService extends CoreService
{
    protected $todoRepository;

    public function __construct(TodoRepository $todoRepository)
    {
        $this->todoRepository = $todoRepository;
    }

    public function formValidate($request)
    {
        $rules = [
//            'email' => 'required|min:1|unique:conf_users,email,NULL,id,deleted_at,NULL'
        ];
        $messages = [
            'email.unique' => 'Email sudah terdaftar.',
        ];
        $validator = Validator::make($request, $rules, $messages);

        if($validator->fails()){
            return [
                'status'=> 'error',
                'message' => $messages
            ];
        }
        return 0;
    }

    public function all()
    {
        return $this->todoRepository->all();
    }

    public function find($id, $relation = null)
    {
        return $this->todoRepository->find($id, $relation);
    }

    public function loadDataTable($access){
        $model = Todo::withoutTrashed()->get();
        return $this->privilageBtnDatatable($model, $access);
    }
}
