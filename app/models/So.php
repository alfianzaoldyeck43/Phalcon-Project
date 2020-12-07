<?php

class So extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $nama;

    /**
     *
     * @var string
     */
    public $jenis;

    /**
     *
     * @var string
     */
    public $versi;

    /**
     *
     * @var integer
     */
    public $tahun_keluar;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("db_so");
        $this->setSource("So");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return So[]|So|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return So|\Phalcon\Mvc\Model\ResultInterface
     */
    

}
