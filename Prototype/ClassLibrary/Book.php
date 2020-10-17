<?php
/**
 * @project Patterns
 * @author Yury Potapov on 17.10.2020.
 */

namespace App\ClassLibrary;

use App\Prototype\Prototype;

class Book implements Prototype
{
    private $name;

    private $author;

    public function clone()
    {
        $book = new Book();
        $book->setName($this->name);
        $book->setAuthor($this->author);
        return $book;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }
}