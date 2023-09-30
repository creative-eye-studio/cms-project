<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailsList
 *
 * @ORM\Table(name="emails_list")
 * @ORM\Entity
 */
class EmailsList
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
     * @var string
     *
     * @ORM\Column(name="email_name", type="string", length=255, nullable=false)
     */
    private $emailName;

    /**
     * @var string
     *
     * @ORM\Column(name="email_id", type="string", length=255, nullable=false)
     */
    private $emailId;


}
