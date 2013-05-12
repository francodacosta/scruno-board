<?php

namespace Scruno\BoardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Task
 */
class Task
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $changed;

    /**
     * @var integer
     */
    private $complexity;

    /**
     * @var TaskType
     */
    private $type;

    /**
     * @var \Scruno\AuthBundle\Entity\User
     */
    private $owner;

    /**
     * @var Backlog
     */
    private $backlog;

    /**
     * @var TaskStatus
     */
    private $status;

    private $position;

    private $boardColumn;


    public function __construct()
    {
        throw new \Exception();
        $this->boardColumn = new BoardColumn;
    }

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
     * Set title
     *
     * @param string $title
     * @return Task
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Task
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Task
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set changed
     *
     * @param \DateTime $changed
     * @return Task
     */
    public function setChanged($changed)
    {
        $this->changed = $changed;

        return $this;
    }

    /**
     * Get changed
     *
     * @return \DateTime
     */
    public function getChanged()
    {
        return $this->changed;
    }

    /**
     * Set complexity
     *
     * @param integer $complexity
     * @return Task
     */
    public function setComplexity($complexity)
    {
        $this->complexity = $complexity;

        return $this;
    }

    /**
     * Get complexity
     *
     * @return integer
     */
    public function getComplexity()
    {
        return $this->complexity;
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
     * Gets the value of type.
     *
     * @return TaskType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the value of type.
     *
     * @param TaskType $type the type
     *
     * @return self
     */
    public function setType(TaskType $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets the value of owner.
     *
     * @return \Scruno\AuthBundle\Entity\User
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets the value of owner.
     *
     * @param \Scruno\AuthBundle\Entity\User $owner the owner
     *
     * @return self
     */
    public function setOwner(\Scruno\AuthBundle\Entity\User $owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Gets the value of backlog.
     *
     * @return Backlog
     */
    public function getBacklog()
    {
        return $this->backlog;
    }

    /**
     * Sets the value of backlog.
     *
     * @param Backlog $backlog the backlog
     *
     * @return self
     */
    public function setBacklog(Backlog $backlog)
    {
        $this->backlog = $backlog;

        return $this;
    }

    /**
     * Gets the value of status.
     *
     * @return TaskStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets the value of status.
     *
     * @param TaskStatus $status the status
     *
     * @return self
     */
    public function setStatus(TaskStatus $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * String representaion fo this class
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getTitle();
    }

    /**
     * Gets the value of position.
     *
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets the value of position.
     *
     * @param mixed $position the position
     *
     * @return self
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Gets the value of boardColumn.
     *
     * @return mixed
     */
    public function getBoardColumn()
    {
        if (empty ($this->boardColumn)) {
            $this->boardColumn = new BoardColumn;
        }
        return $this->boardColumn;
    }

    /**
     * Sets the value of boardColumn.
     *
     * @param mixed $boardColumn the boardColumn
     *
     * @return self
     */
    public function setBoardColumn($boardColumn)
    {
        $this->boardColumn = $boardColumn;

        return $this;
    }
}
