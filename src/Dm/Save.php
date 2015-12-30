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
     * @var \Two\Inf\Cache $infSave
     */
    private $infSave;

    public function __construct()
    {

       $this->infSave =  SaveFabric::create();
    }

    public function saveData($key,$data)
    {
         return $this->infSave->set($key, $data);
    }

    public function getInfSave()
    {
        return $this->infSave;
    }
}