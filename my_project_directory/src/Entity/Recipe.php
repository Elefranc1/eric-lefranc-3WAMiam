<?php

namespace App\Entity;
use App\Repository\RecipeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecipeRepository::class)]
#[ORM\Table(name:"recipes")]
class Recipe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    protected int $id;
    
    #[ORM\Column]
    protected int $userId;

    #[ORM\Column(length: 255)]
    protected string $title;
    
    #[ORM\Column(length: 255, nullable: "true")]
    protected string $content;
    
    #[ORM\Column]
    protected bool $isPublished;


    /**
     * @param int $id
     * @param int $userId
     * @param string $title
     * @param string $content
     * @param bool $isPublished
     */
    //  public function __construct(int $id, int $userId, string $title, string $content, bool $isPublished)
    //  {
    //      $this->id = $id;
    //      $this->userId = $userId;
    //      $this->title = $title;
    //      $this->content = $content;
    //      $this->isPublished = $isPublished;
    //  }
    
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
    

    /**
     * @return int
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }
    
    /**
     * @return bool
     */
    public function getIsPublished(): string
    {
        return $this->isPublished;
    }

    /**
     * @param bool $isPublished
     */
    public function setIsPublished(bool $isPublished): void
    {
        $this->isPublished = $isPublished;
    }
    
    
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: "recipes")]
    private $user;

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
    
}
?>