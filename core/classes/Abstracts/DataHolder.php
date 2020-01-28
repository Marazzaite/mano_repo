<?php
namespace Core\Abstracts;

abstract Class DataHolder{
    protected $data;
    protected $properties;

    abstract protected function setData (array $data);

    abstract protected function getData();
}

