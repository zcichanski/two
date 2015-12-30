<?php
/**
 * Created by PhpStorm.
 * User: Zbyszek Cichanski
 * Date: 29.12.2015
 * Time: 22:25
 */

namespace Two\Inf;


/**
 * Class SaveFabric
 * @package Two\Inf
 */
class SaveFabric
{
    /**
     * @var
     */
    private static $instance;

    /**
     * @return mixed
     * @throws \Exception
     */
    public static function create()
    {
        $className = 'Two\Inf\\'.SAVE_TYPE.'\\'.SAVE_TYPE_DETAIL;
        if(self::$instance instanceof $className){
            return self::$instance;
        }
        if(class_exists($className)){
            try {
                $object = $className::getInstance();
                if($object instanceof \Two\Inf\Save){
                    self::$instance = $object;
                    return $object;
                } else {
                    throw new \Exception ('Klasa mus implementować interfejs Save.');
                }

            } catch (Exception $e) {
                throw new \Exception ('Błąd w trakie tworzenia instancji klasy odpowiedzialnej za zapis');
            }

        } else {
            throw new \Exception ('Podana klasa nie istnieje.');
        }
    }
}