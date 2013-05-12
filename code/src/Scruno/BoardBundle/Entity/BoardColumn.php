<?php

namespace Scruno\BoardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoardColumns
 */
class BoardColumn
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $position;


    private $status;

    private $tasks;

    private $isDefault;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return BoardColumns
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return BoardColumns
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets the value of id.
     *
     * @param integer $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of status.
     *
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets the value of status.
     *
     * @param mixed $status the status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets the value of tasks.
     *
     * @return mixed
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * Sets the value of tasks.
     *
     * @param mixed $tasks the tasks
     *
     * @return self
     */
    public function setTasks($tasks)
    {
        $this->tasks = $tasks;

        return $this;
    }

    /**
     * Gets the value of isDefault.
     *
     * @return mixed
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Sets the value of isDefault.
     *
     * @param mixed $isDefault the isDefault
     *
     * @return self
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    public function __toString()
    {
        return $this->getName();
    }
}
