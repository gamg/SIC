<?php

namespace App\Repositories;

abstract class BaseRepository
{
    abstract public function getModel();

    public function update($object, $data)
    {
        $object->fill($data);
        $object->save();
        return $object;
    }
}