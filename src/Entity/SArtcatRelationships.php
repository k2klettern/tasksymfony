<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SArtcatRelationships
 *
 * @ORM\Table(name="s_artcat_relationships")
 * @ORM\Entity
 */
class SArtcatRelationships
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="article_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $articleId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="category_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $categoryId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArticleId(): ?int
    {
        return $this->articleId;
    }

    public function setArticleId(?int $articleId): self
    {
        $this->articleId = $articleId;

        return $this;
    }

    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    public function setCategoryId(?int $categoryId): self
    {
        $this->categoryId = $categoryId;

        return $this;
    }


}
