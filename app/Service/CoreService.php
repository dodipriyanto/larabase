<?php


namespace App\Service;


use App\Models\Group;
use Yajra\DataTables\DataTables;

class CoreService
{
    protected function privilageBtnDatatable($model, $access)
    {
        if ($model->isNotEmpty())
        {
            $modelName = get_class($model[0]);
            $data = Datatables::of($model)->addIndexColumn()
                ->addColumn('custom_close_date', function($data) use($modelName){
                    if(strpos($modelName,'Ticket')) {
                        if ($data->status->name == 'CLOSE')
                        {
                            $date= date_create($data->updated_at);
//                            echo date_format($date,"Y/m/d H:i:s");
                            return date_format($date, 'd M, Y H:m',);
                        }
                        return '-';
//                        dd($data->status->name);
//
//                        return '-';
                    }
                })

                ->addColumn('action', function($model) use($access, $modelName){
                    $delete_btn = '';
                    $update_btn = '';
                    $view_btn = '';
                    $access_btn = '';
                    $custom_btn = '';

                    if($access->is_viewable == true){
                        $view_btn = "<button class='btn btn-icon btn-info btn-glow mr-1 mb-1 view'
                                     data-toggle='tooltip' data-placement='top' title='View Data' id='view' data-id='$model->id'>
                                        <i class='ft-eye'></i>
                                </button>";
                    }

                    if($access->is_deletable == true){
                        $model->name = ($model->name ? $model->name : ($model->username ? $model->username : $model->parameter));
                        $delete_btn = "<button class='btn btn-icon btn-danger btn-glow mr-1 mb-1 delete'
                                     data-toggle='tooltip' data-placement='top' title='Delete Data' id='delete' data-name='$model->name'  data-id='$model->id'>
                                        <i class='ft-trash-2'></i>
                                   </button>";

                    }
                    if($access->is_editable == true){
                        $update_btn = "<button class='btn btn-icon btn-warning btn-glow mr-1 mb-1 update'
                                     data-toggle='tooltip' data-placement='top' title='Edit Data' data-name='$model->name' data-id='$model->id'>
                                        <i class='ft-edit'></i>
                                   </button>";
                    }
                    //group access
                    if(strpos($modelName,'Group')) {
                        $access_btn = "<button class='btn btn-icon btn-cyan btn-glow mr-1 mb-1 access'
                                     data-toggle='tooltip' data-placement='top' title='Akses Group' data-name='$model->name' data-id='$model->id'>
                                        <i class='ft-lock'></i>
                                   </button>";
                    }

                    if(strpos($modelName,'Device')) {
                        $url = route('dashboard_whatsapp_device_scan_',['id'=>$model->id]);
                        $custom_btn = "<a class='btn btn-icon btn-cyan btn-glow mr-1 mb-1' href='$url' 
                                     data-toggle='tooltip' data-placement='top' title='Scan QR' data-name='$model->name' data-id='$model->id'>
                                        <i class='la la-qrcode'></i> 
                                   </a>";
                    }

                    $action = $custom_btn.$access_btn.$view_btn.$update_btn.$delete_btn;
                    return $action;
                })
                ->make(true);
            return $data;
        }else{
            return[
                "data" => [],
                "total" => 0,
                "recordsTotal" => 0,
                "recordsFiltered" => 0
            ];
        }



    }

    function random_string($length) {
        $key = '';
        $keys = array_merge(range(0, 9), range('a', 'z'));

        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }

        return $key;
    }
}
