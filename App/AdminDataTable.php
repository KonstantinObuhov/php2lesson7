<?php

namespace App;


class AdminDataTable
{
    protected $models;
    protected $functions;

    public function __construct($models, $functions)
    {
        $this->models = $models;
        $this->functions = $functions;
    }

    public function render()
    {
        foreach ($this->models as $model) {
            foreach ($this->functions as $function) {
                return $function($model);
            }
        }
    }
}

//Пока не догадался что делать дальше