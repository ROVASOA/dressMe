<?php

namespace fb\DressmeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Encaissement
 *
 * @ORM\Table(name="encaissement")
 * @ORM\Entity(repositoryClass="fb\DressmeBundle\Repository\EncaissementRepository")
 */
class Encaissement
{   
    public function __construct()
  {

        $this->modepayement = new ArrayCollection();
        $this->client = new ArrayCollection();
        $this->prestation = new ArrayCollection();
  }

    /**
     * @ORM\ManyToMany(targetEntity="fb\DressmeBundle\Entity\ModePayement", cascade={"persist"})
     */
    private $modePayement;
    /**
     * @ORM\ManyToMany(targetEntity="fb\DressmeBundle\Entity\Prestation", cascade={"persist"})
     */
    private $prestation;

    /**
     * @ORM\ManyToMany(targetEntity="fb\DressmeBundle\Entity\Client", cascade={"persist"})
     */
    private $client;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


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
     * Add modePayement
     *
     * @param \fb\DressmeBundle\Entity\ModePayement $modePayement
     *
     * @return Encaissement
     */
    public function addModePayement(\fb\DressmeBundle\Entity\ModePayement $modePayement)
    {
        $this->modePayement[] = $modePayement;

        return $this;
    }

    /**
     * Remove modePayement
     *
     * @param \fb\DressmeBundle\Entity\ModePayement $modePayement
     */
    public function removeModePayement(\fb\DressmeBundle\Entity\ModePayement $modePayement)
    {
        $this->modePayement->removeElement($modePayement);
    }

    /**
     * Get modePayement
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModePayement()
    {
        return $this->modePayement;
    }

    /**
     * Add prestation
     *
     * @param \fb\DressmeBundle\Entity\Prestation $prestation
     *
     * @return Encaissement
     */
    public function addPrestation(\fb\DressmeBundle\Entity\Prestation $prestation)
    {
        $this->prestation[] = $prestation;

        return $this;
    }

    /**
     * Remove prestation
     *
     * @param \fb\DressmeBundle\Entity\Prestation $prestation
     */
    public function removePrestation(\fb\DressmeBundle\Entity\Prestation $prestation)
    {
        $this->prestation->removeElement($prestation);
    }

    /**
     * Get prestation
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPrestation()
    {
        return $this->prestation;
    }

    /**
     * Add client
     *
     * @param \fb\DressmeBundle\Entity\Client $client
     *
     * @return Encaissement
     */
    public function addClient(\fb\DressmeBundle\Entity\Client $client)
    {
        $this->client[] = $client;

        return $this;
    }

    /**
     * Remove client
     *
     * @param \fb\DressmeBundle\Entity\Client $client
     */
    public function removeClient(\fb\DressmeBundle\Entity\Client $client)
    {
        $this->client->removeElement($client);
    }

    /**
     * Get client
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClient()
    {
        return $this->client;
    }
}
