<?php

namespace My\TelemedicineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TThresholds
 */
class TThresholds
{
    /**
     * @var integer
     */
    private $idMeasure;

    /**
     * @var integer
     */
    private $maximvalue;

    /**
     * @var integer
     */
    private $minvalue;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set idMeasure
     *
     * @param integer $idMeasure
     * @return TThresholds
     */
    public function setIdMeasure($idMeasure)
    {
        $this->idMeasure = $idMeasure;

        return $this;
    }

    /**
     * Get idMeasure
     *
     * @return integer 
     */
    public function getIdMeasure()
    {
        return $this->idMeasure;
    }

    /**
     * Set maximvalue
     *
     * @param integer $maximvalue
     * @return TThresholds
     */
    public function setMaximvalue($maximvalue)
    {
        $this->maximvalue = $maximvalue;

        return $this;
    }

    /**
     * Get maximvalue
     *
     * @return integer 
     */
    public function getMaximvalue()
    {
        return $this->maximvalue;
    }

    /**
     * Set minvalue
     *
     * @param integer $minvalue
     * @return TThresholds
     */
    public function setMinvalue($minvalue)
    {
        $this->minvalue = $minvalue;

        return $this;
    }

    /**
     * Get minvalue
     *
     * @return integer 
     */
    public function getMinvalue()
    {
        return $this->minvalue;
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
}
