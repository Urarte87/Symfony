<?php

namespace My\TelemedicineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TMeasures
 */
class TMeasures
{
    /**
     * @var string
     */
    private $measurename;

    /**
     * @var integer
     */
    private $id;
    
        /**
     * @var string
     */
    private $measurecode;

    /**
     * @var string
     */
    private $measurepicture;



    /**
     * Set measurename
     *
     * @param string $measurename
     * @return TMeasures
     */
    public function setMeasurename($measurename)
    {
        $this->measurename = $measurename;

        return $this;
    }

    /**
     * Get measurename
     *
     * @return string 
     */
    public function getMeasurename()
    {
        return $this->measurename;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set measurecode
     *
     * @param string $measurecode
     * @return TMeasures
     */
    public function setMeasurecode($measurecode)
    {
        $this->measurecode = $measurecode;

        return $this;
    }

    /**
     * Get measurecode
     *
     * @return string 
     */
    public function getMeasurecode()
    {
        return $this->measurecode;
    }

    /**
     * Set measurepicture
     *
     * @param string $measurepicture
     * @return TMeasures
     */
    public function setMeasurepicture($measurepicture)
    {
        $this->measurepicture = $measurepicture;

        return $this;
    }

    /**
     * Get measurepicture
     *
     * @return string 
     */
    public function getMeasurepicture()
    {
        return $this->measurepicture;
    }
}
