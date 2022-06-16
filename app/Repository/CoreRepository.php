<?php
/**
 * @author Dodi Priyanto<dodi.priyanto76@gmail.com>
 */

namespace App\Repository;


class CoreRepository
{
    protected $model;

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    public function find($id, $relation = null)
    {
        if ($relation) return $this->model->withoutTrashed()->with("$relation")->find($id);
        return $this->model->withoutTrashed()->find($id);
    }

    public function findOneBy(array $data, $relation = null)
    {
        if ($relation)  return $this->model->withoutTrashed()->with($relation)->where($data)->first();
        return $this->model->withoutTrashed()->where($data)->first();
    }

    public function get(array $data, $relation = null)
    {
        if ($relation)  return $this->model->withoutTrashed()->with($relation)->where($data)->get();
        return $this->model->withoutTrashed()->where($data)->get();
    }

    public function all($relation = null)
    {
        if ($relation) return $this->model->withoutTrashed()->with("$relation")->get();
        return $this->model->withoutTrashed()->get();
    }

    public function save(array $data, $callback = null)
    {
        $id = $data['id'];
        if ($id) {
            $record = $this->find($id);
            if ($callback)
            {
                $record->update($data);
                return $record;
            }

            return $record->update($data);
        } else {
            return $this->model->create($data);
        }
    }

    public function destroy($id)
    {
        $record = $this->model->find($id);
        $record->each->delete();
        return $record;
    }
}
