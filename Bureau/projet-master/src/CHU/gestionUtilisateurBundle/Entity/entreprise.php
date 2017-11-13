<?php

namespace CHU\gestionUtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * entreprise
 *
 * @ORM\Table(name="entreprise")
 * @ORM\Entity(repositoryClass="CHU\gestionUtilisateurBundle\Repository\entrepriseRepository")
 */
class entreprise
{

    /**
     * @ORM\ManyToOne(targetEntity="CHU\gestionUtilisateurBundle\Entity\salarie");
     */
    private $salarie;
    
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return entreprise
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set salarie
     *
     * @param \CHU\gestionUtilisateurBundle\Entity\salarie $salarie
     *
     * @return entreprise
     */
    public function setSalarie(\CHU\gestionUtilisateurBundle\Entity\salarie $salarie = null)
    {
        $this->salarie = $salarie;

        return $this;
    }

    /**
     * Get salarie
     *
     * @return \CHU\gestionUtilisateurBundle\Entity\salarie
     */
    public function getSalarie()
    {
        return $this->salarie;
    }
}