<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MenuLink
 *
 * @ORM\Table(name="menu_link", indexes={@ORM\Index(name="IDX_FEE369BFCCD7E912", columns={"menu_id"}), @ORM\Index(name="IDX_FEE369BFC4663E4", columns={"page_id"}), @ORM\Index(name="IDX_FEE369BF4B89032C", columns={"post_id"}), @ORM\Index(name="IDX_FEE369BF727ACA70", columns={"parent_id"}), @ORM\Index(name="IDX_FEE369BF257F1FCF", columns={"menu_link_id"})})
 * @ORM\Entity
 */
class MenuLink
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
     * @var int
     *
     * @ORM\Column(name="order_link", type="integer", nullable=false)
     */
    private $orderLink;

    /**
     * @var array|null
     *
     * @ORM\Column(name="cus_name", type="json", nullable=true)
     */
    private $cusName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cus_link", type="string", length=255, nullable=true)
     */
    private $cusLink;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="blank", type="boolean", nullable=true)
     */
    private $blank;

    /**
     * @var \MenuLink
     *
     * @ORM\ManyToOne(targetEntity="MenuLink")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="menu_link_id", referencedColumnName="id")
     * })
     */
    private $menuLink;

    /**
     * @var \PostsList
     *
     * @ORM\ManyToOne(targetEntity="PostsList")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="post_id", referencedColumnName="id")
     * })
     */
    private $post;

    /**
     * @var \MenuLink
     *
     * @ORM\ManyToOne(targetEntity="MenuLink")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;

    /**
     * @var \PagesList
     *
     * @ORM\ManyToOne(targetEntity="PagesList")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="page_id", referencedColumnName="id")
     * })
     */
    private $page;

    /**
     * @var \Menu
     *
     * @ORM\ManyToOne(targetEntity="Menu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="menu_id", referencedColumnName="id")
     * })
     */
    private $menu;


}
