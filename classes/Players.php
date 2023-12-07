<?php
namespace Shifumi;
class Players
{
    public string $name1;
    public string $name2;
    public int $score1;
    public int $score2;

    /**
     * @param string $name1
     * @param string $name2
     * @param int $score1
     * @param int $score2
     */
    public function __construct(string $name1, string $name2, int $score1, int $score2)
    {
        $this->name1 = $name1;
        $_SESSION['name1'] = $name1;
        $this->name2 = $name2;
        $_SESSION['name2'] = $name2;
        $this->score1 = $score1;
        $_SESSION['score1'] = $score1;
        $this->score2 = $score2;
        $_SESSION['score2'] = $score2;
    }

    public function getScore1(): int
    {
        return $this->score1;
    }

    public function setScore1(int $score1): Players
    {
        $this->score1 = $score1;
        $_SESSION['score1'] = $score1;
        return $this;
    }

    public function getScore2(): int
    {
        return $this->score2;
    }

    public function setScore2(int $score2): Players
    {
        $this->score2 = $score2;
        $_SESSION['score2'] = $score2;
        return $this;
    }


    public function getName1(): string
    {
        return $this->name1;
    }

    public function setName1(string $name1): Players
    {
        $this->name1 = $name1;
        $_SESSION['name1'] = $name1;
        return $this;
    }

    public function getName2(): string
    {
        return $this->name2;
    }

    public function setName2(string $name2): Players
    {
        $this->name2 = $name2;
        $_SESSION['name2'] = $name2;
        return $this;
    }




}