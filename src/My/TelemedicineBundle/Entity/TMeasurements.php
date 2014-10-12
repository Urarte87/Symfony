<?php

namespace My\TelemedicineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TMeasurements
 */
class TMeasurements
{
    /**
     * @var string
     */
    private $tvalue;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var integer
     */
    private $idUser;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set tvalue
     *
     * @param string $tvalue
     * @return TMeasurements
     */
    public function setTvalue($tvalue)
    {
        $this->tvalue = $tvalue;

        return $this;
    }

    /**
     * Get tvalue
     *
     * @return string 
     */
    public function getTvalue()
    {
        return $this->tvalue;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return TMeasurements
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     * @return TMeasurements
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
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
