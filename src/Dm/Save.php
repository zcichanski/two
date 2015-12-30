<?php
/**
 * Created by PhpStorm.
 * User: Zbyszek Cichanski
 * Date: 29.12.2015
 * Time: 21:44
 */

namespace Two\Dm;

use Two\Inf\SaveFabric;

class Save
{
    /**
     * @var \Two\Inf\BaseCache save
     */
    private $save;

    public function __construct()
    {

       $this->save =  SaveFabric::create();
    }

    public function saveData($key,$data)
    {
         return $this->save->set($key, $data);
    }

    public function getData($key)
    {

    }

    public function getInfSave()
    {
        return $this->save;
    }
}