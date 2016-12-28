<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupe
 *
 * @ORM\Table(name="groupes")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GroupeRepository")
 */
class Groupe
{
    /**
     * @var int
     *
     * @ORM\Column(name="idGroupe", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idGroupe;

    /**
     * @var string
     *
     * @ORM\Column(name="nomGroupe", type="string", length=255, unique=true)
     */
    private $nomGroupe;


    /**
     * Get id
     *
     * @return int
     */
    public function getIdGroupe()
    {
        return $this->idGroupe;
    }

    /**
     * Set nomGroupe
     *
     * @param string $nomGroupe
     *
     * @return Groupe
     */
    public function setNomGroupe($nomGroupe)
    {
        $this->nomGroupe = $nomGroupe;

        return $this;
    }

    /**
     * Get nomGroupe
     *
     * @return string
     */
    public function getNomGroupe()
    {
        return $this->nomGroupe;
    }
}

