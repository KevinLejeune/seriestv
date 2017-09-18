<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Episode
 *
 * @ORM\Table(name="episode")
 * @ORM\Entity(repositoryClass="BackendBundle\Repository\EpisodeRepository")
 */
class Episode
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
     * @var int
     *
     * @ORM\Column(name="number", type="integer")
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="duration", type="time", nullable=true)
     */
    private $duration;

    /**
     * @ORM\ManyToOne(targetEntity="Serie")
     */
    private $serie;

    /**
     * @ORM\ManyToOne(targetEntity="Saison")
     */
    private $saison;

    /**
     * @ORM\OneToMany(targetEntity="EpisodePeople", mappedBy="episode");
     */
    private $episodePeoples;

    public function __construct() {
        $this->episodePeoples = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Episode
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
     * Set duration
     *
     * @param \DateTime $duration
     *
     * @return Episode
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return \DateTime
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set serie
     *
     * @param \BackendBundle\Entity\Serie $serie
     *
     * @return Episode
     */
    public function setSerie(\BackendBundle\Entity\Serie $serie = null)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Get serie
     *
     * @return \BackendBundle\Entity\Serie
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Set saison
     *
     * @param \BackendBundle\Entity\Saison $saison
     *
     * @return Episode
     */
    public function setSaison(\BackendBundle\Entity\Saison $saison = null)
    {
        $this->saison = $saison;

        return $this;
    }

    /**
     * Get saison
     *
     * @return \BackendBundle\Entity\Saison
     */
    public function getSaison()
    {
        return $this->saison;
    }

    /**
     * Set number
     *
     * @param integer $number
     *
     * @return Episode
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Add episodePeople
     *
     * @param \BackendBundle\Entity\EpisodePeople $episodePeople
     *
     * @return Episode
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
