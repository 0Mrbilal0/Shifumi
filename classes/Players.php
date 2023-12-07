<?php

namespace Shifumi;

class Players
{
    public string $name1;
    public string $name2;

    public int $score;

    /**
     * @param string $name1
     * @param string $name2
     * @param int $score
     */
    public function __construct(string $name1, string $name2, int $score)
    {
        $this->name1 = $name1;
        $this->name2 = $name2;
        $this->score = $score;
    }

    public function getName1(): string
    {
        return $this->name1;
    }

    public function setName1(string $name1): Players
    {
        $this->name1 = $name1;
        return $this;
    }

    public function getName2(): string
    {
        return $this->name2;
    }

    public function setName2(string $name2): Players
    {
        $this->name2 = $name2;
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



}