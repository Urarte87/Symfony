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
    private $maxvalue;

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
     * Set maxvalue
     *
     * @param integer $maxvalue
     * @return TThresholds
     */
    public function setMaxvalue($maxvalue)
    {
        $this->maxvalue = $maxvalue;

        return $this;
    }

    /**
     * Get maxvalue
     *
     * @return integer 
     */
    public function getMaxvalue()
    {
        return $this->maxvalue;
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
