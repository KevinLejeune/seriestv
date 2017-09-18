<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * People_type
 *
 * @ORM\Table(name="people_type")
 * @ORM\Entity(repositoryClass="BackendBundle\Repository\People_typeRepository")
 */
class People_type
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
     * @ORM\Column(name="lib", type="string", length=50, unique=true)
     */
    private $lib;

    /**
     * @ORM\ManyToMany(targetEntity="People", mappedBy="peopleTypes")
     */
    private $peoples;

    /**
     * @ORM\OneToMany(targetEntity="EpisodePeople", mappedBy="people_type")
     */
    private $episodePeoples;

    public function __construct() {
        $this->peoples = new \Doctrine\Common\Collections\ArrayCollection();
        $this->episodePeoples = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString() {
        return $this->lib;
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
     * Set lib
     *
     * @param string $lib
     *
     * @return People_type
     */
    public function setLib($lib)
    {
        $this->lib = $lib;

        return $this;
    }

    /**
     * Get lib
     *
     * @return string
     */
    public function getLib()
    {
        return $this->lib;
    }

    /**
     * Add people
     *
     * @param \BackendBundle\Entity\People $people
     *
     * @return People_type
     */
    public function addPeople(\BackendBundle\Entity\People $people)
    {
        $this->peoples[] = $people;

        return $this;
    }

    /**
     * Remove people
     *
     * @param \BackendBundle\Entity\People $people
     */
    public function removePeople(\BackendBundle\Entity\People $people)
    {
        $this->peoples->removeElement($people);
    }

    /**
     * Get peoples
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPeoples()
    {
        return $this->peoples;
    }

    /**
     * Add episodePeople
     *
     * @param \BackendBundle\Entity\EpisodePeople $episodePeople
     *
     * @return People_type
     */
    public function addEpisodePeople(\BackendBundle\Entity\EpisodePeople $episodePeople)
    {
        $this->episodePeoples[] = $episodePeople;

        return $this;
    }

    /**
     * Remove episodePeople
     *
     * @param \BackendBundle\Entity\EpisodePeople $episodePeople
     */
    public function removeEpisodePeople(\BackendBundle\Entity\EpisodePeople $episodePeople)
    {
        $this->episodePeoples->removeElement($episodePeople);
    }

    /**
     * Get episodePeoples
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEpisodePeoples()
    {
        return $this->episodePeoples;
    }
}
