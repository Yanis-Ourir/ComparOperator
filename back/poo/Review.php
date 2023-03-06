<?php

class Review
{
    private $id;
    private $message;
    private $author;
    private $tourOperatorId;

    public function __construct($data)
    {
    }

    /* SETTERS */

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function setTourOperatorId($tourOperatorId)
    {
        $this->tourOperatorId = $tourOperatorId;
    }

    /* FIN SETTERS */

    /* GETTERS */
    public function getId()
    {
        return $this->id;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getTourOpeatorId()
    {
        return $this->tourOperatorId;
    }
    /* FIN GETTERS */
}
