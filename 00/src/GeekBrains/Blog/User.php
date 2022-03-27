<?php

namespace GeekBrains\Blog;

class User
{
    public function __construct(
        private int $id,
        private string $username,
        private string $firstName,
        private string $lastName
    ) {}

    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function __toString()
    {
        return sprintf('[%d] %s %s (%s)', 
            $this->id, $this->firstName, $this->lastName, $this->username);
    }
}