<?php

namespace App\Entity;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name:"users")]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    protected int $id;
    
    #[ORM\Column(length: 255)]
    protected string $username;

    #[ORM\Column(length: 255)]
    protected string $password;
    
    #[ORM\Column(length: 255)]
    protected string $email;


    /**
     * @param id $id
     * @param string $username
     * @param string $password
     * @param string $email
     */
    // public function __construct(int $id, string $username, string $password, string $email)
    // {
    //     $this->id = $id;
    //     $this->username = $username;
    //     $this->password = $password;
    //     $this->email = $email;
    // }
    
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
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassWord(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    
    
    #[ORM\OneToMany(targetEntity: Recipe::class, mappedBy: "user")]
    private $recipe;

    public function __construct()
    {
        $this->recipes = new ArrayCollection();
    }

    /**
     * @return Collection|Recipe[]
     */
    public function getRecipes(): Collection
    {
        return $this->recipes;
    }

    // addProduct() and removeProduct() were also added
    
}
?>