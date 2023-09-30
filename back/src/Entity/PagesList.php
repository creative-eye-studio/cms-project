<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PagesList
 *
 * @ORM\Table(name="pages_list")
 * @ORM\Entity
 */
class PagesList
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
     * @ORM\Column(name="page_name", type="json", nullable=false)
     */
    private $pageName;

    /**
     * @var string
     *
     * @ORM\Column(name="page_url", type="string", length=255, nullable=false)
     */
    private $pageUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="page_id", type="string", length=255, nullable=false)
     */
    private $pageId;

    /**
     * @var bool
     *
     * @ORM\Column(name="blocked_page", type="boolean", nullable=false)
     */
    private $blockedPage;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var array|null
     *
     * @ORM\Column(name="page_content", type="json", nullable=true)
     */
    private $pageContent;

    /**
     * @var array|null
     *
     * @ORM\Column(name="page_meta_title", type="json", nullable=true)
     */
    private $pageMetaTitle;

    /**
     * @var array
     *
     * @ORM\Column(name="page_meta_desc", type="json", nullable=false)
     */
    private $pageMetaDesc;


}
