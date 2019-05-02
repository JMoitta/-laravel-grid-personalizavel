<?php

namespace App\Table;

class Table
{
    private $rows = [];
    private $model = null;

    public function rows()
    {
        return $this->rows;
    }

    public function model($model = null)
    {
        if(!$model){
            return $this->model;
        }
        $this->model = !\is_object($model)? new $model: $model;
        return $this;
    }

    public function search()
    {
        $this->rows = $this->model->get();
        return $this;
    }
}