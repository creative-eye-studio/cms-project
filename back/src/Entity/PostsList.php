<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PostsList
 *
 * @ORM\Table(name="posts_list", indexes={@ORM\Index(name="IDX_FE98C1A1F675F31B", columns={"author_id"})})
 * @ORM\Entity
 */
class PostsList
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
     * @var array
     *
     * @ORM\Column(name="post_name", type="json", nullable=false)
     */
    private $postName;

    /**
     * @var string
     *
     * @ORM\Column(name="post_url", type="string", length=255, nullable=false)
     */
    private $postUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="post_thumb", type="string", length=255, nullable=true)
     */
    private $postThumb;

    /**
     * @var array
     *
     * @ORM\Column(name="post_content", type="json", nullable=false)
     */
    private $postContent;

    /**
     * @var array
     *
     * @ORM\Column(name="post_meta_title", type="json", nullable=false)
     */
    private $postMetaTitle;

    /**
     * @var array|null
     *
     * @ORM\Column(name="post_meta_desc", type="json", nullable=true)
     */
    private $postMetaDesc;

    /**
     * @var datetime_immutable
     *
     * @ORM\Column(name="created_at", type="datetime_immutable", nullable=false)
     */
    private $createdAt;

    /**
     * @var datetime_immutable
     *
     * @ORM\Column(name="updated_at", type="datetime_immutable", nullable=false)
     */
    private $updatedAt;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="online", type="boolean", nullable=true)
     */
    private $online;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     * })
     */
    private $author;


}
