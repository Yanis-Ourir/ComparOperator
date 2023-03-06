<?php

class TourOperator
{
    private $id;
    private $name;
    private $link;
    private $gradeCount;
    private $gradeTotal;
    private $grade;
    private $isPremium;


    public function __construct($data)
    {
    }

    /* SETTERS */

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setLink($link)
    {
        $this->link = $link;
    }

    public function setGradeCount($gradeCount)
    {
        $this->gradeCount = $gradeCount;
    }

    public function setGradeTotal($gradeTotal)
    {
        $this->gradeTotal = $gradeTotal;
    }

    public function setIsPremium($isPremium)
    {
        $this->isPremium = $isPremium;
    }

    /* FIN SETTERS */

    /* GETTERS */

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function getGradeCount()
    {
        return $this->gradeCount;
    }

    public function getGradeTotal()
    {
        return $this->gradeTotal;
    }

    public function getGrade()
    {
        return $this->grade;
    }

    public function getIsPremium()
    {
        return $this->isPremium;
    }

    /* FIN GETTERS */
}
