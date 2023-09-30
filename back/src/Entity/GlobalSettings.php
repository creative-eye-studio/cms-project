<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlobalSettings
 *
 * @ORM\Table(name="global_settings")
 * @ORM\Entity
 */
class GlobalSettings
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var float|null
     *
     * @ORM\Column(name="damping", type="float", precision=10, scale=0, nullable=true)
     */
    private $damping;

    /**
     * @var float|null
     *
     * @ORM\Column(name="scrollimg", type="float", precision=10, scale=0, nullable=true)
     */
    private $scrollimg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="logo", type="string", length=255, nullable=true)
     */
    private $logo;


}
