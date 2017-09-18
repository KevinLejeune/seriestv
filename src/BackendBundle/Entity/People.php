<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * People
 *
 * @ORM\Table(name="people")
 * @ORM\Entity(repositoryClass="BackendBundle\Repository\PeopleRepository")
 */
class People
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birth_date", type="date")
     */
    private $birthDate;

    /**
     * @ORM\ManyToMany(targetEntity="People_type", inversedBy="peoples")
     */
    private $people_types;

    /**
     * @ORM\ManyToMany(targetEntity="Episode", mappedBy="peoples")
     */
    private $episodes;

    public function __construct() {
        $this->people_types = new \Doctrine\Common\Collections\ArrayCollection();
        $this->episodes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString() {
        return $this->name;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return People
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return People
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Add peopleType
     *
     * @param \BackendBundle\Entity\People_type $peopleType
     *
     * @return People
     */
    public function addPeopleType(\BackendBundle\Entity\People_type $peopleType)
    {
        $this->people_types[] = $peopleType;

        return $this;
    }

    /**
     * Remove peopleType
     *
     * @param \BackendBundle\Entity\People_type $peopleType
     */
    public function removePeopleType(\BackendBundle\Entity\People_type $peopleType)
    {
        $this->people_types->removeElement($peopleType);
    }

    /*
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPeopleTypes()
    {
        return $this->people_types;
    }

    

    /**
     * Add episode
     *
     * @param \BackendBundle\Entity\Episode $episode
     *
     * @return People
     */
    public function addEpisode(\BackendBundle\Entity\Episode $episode)
    {
        $this->episodes[] = $episode;

        return $this;
    }

    /**
     * Remove episode
     *
     * @param \BackendBundle\Entity\Episode $episode
     */
    public function removeEpisode(\BackendBundle\Entity\Episode $episode)
    {
        $this->episodes->removeElement($episode);
    }

    /**
     * Get episodes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEpisodes()
    {
        return $this->episodes;
    }
}
