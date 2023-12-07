<?php

namespace Shifumi;

class Players
{
    public array $name;
    public int $score;
    public bool $starter;

    /**
     * @param array $name
     * @param int $score
     * @param bool $starter
     */
    public function __construct(array $name, int $score, bool $starter)
    {
        $this->name = $name;
        $this->score = $score;
        $this->starter = $starter;
    }

    public function getName(): array
    {
        return $this->name;
    }

    public function setName(array $name): Players
    {
        $this->name = $name;
        return $this;
    }

    public function getScore(): int
    {
        return $this->score;
    }

    public function setScore(int $score): Players
    {
        $this->score = $score;
        return $this;
    }

    public function isStarter(): bool
    {
        return $this->starter;
    }

    public function setStarter(bool $starter): Players
    {
        $this->starter = $starter;
        return $this;
    }

}