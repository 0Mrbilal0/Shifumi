<?php

namespace Shifumi;

class Choices
{
    public string $choice1;
    public string $choice2;
    public int $state;

    /**
     * @param string $choice1
     * @param string $choice2
     * @param int $state
     */
    public function __construct(string $choice1, string $choice2, int $state)
    {
        $this->choice1 = $choice1;
        $this->choice2 = $choice2;
        $this->state = $state;
    }


    public function getChoice1(): string
    {
        return $this->choice1;
    }

    public function setChoice1(string $choice1): Choices
    {
        $this->choice1 = $choice1;
        return $this;
    }

    public function getChoice2(): string
    {
        return $this->choice2;
    }

    public function setChoice2(string $choice2): Choices
    {
        $this->choice2 = $choice2;
        return $this;
    }

    public function getState(): int
    {
        return $this->state;
    }

    public function setState(int $state): Choices
    {
        $this->state = $state;
        return $this;
    }




}