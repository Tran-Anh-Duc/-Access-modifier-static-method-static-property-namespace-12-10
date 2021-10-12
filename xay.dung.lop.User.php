<?php

class User
{
    const admin = 1;
    const user = 2;
    public string $name;
    public string $email;
    public int $role = 1;

    public function __construct($name, $email, $role)
    {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
    }


    public function getName(): string
    {
        return $this->name;
    }


    public function setName(string $name): void
    {
        $this->name = $name;
    }


    public function getEmail(): string
    {
        return $this->email;
    }


    public function setEmail(string $email): void
    {
        $this->email = $email;
    }


    public function getRole(): int
    {
        return $this->role;
    }


    public function setRole(int $role): void
    {
        $this->role = $role;
    }

    public function getInfo()
    {
        return $this->name . " " . $this->email . " " . $this->isAdmin();
    }

    public function isAdmin():string
    {
        if ($this->role === 1) {
            $str = "admin";
        } else if ($this->role === 2) {
            $str= "nguoi dung";
        }
        return $str;
    }
}
$user = new User("Duc","trananhducty@gmail.com",1);
echo $user->getInfo();

