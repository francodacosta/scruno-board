<?php

namespace Scruno\BoardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaskStatus
 */
class TaskStatus
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
     * @var boolean
     */
    private $isComplete;

     /**
     * @var boolean
     */
    private $isInProgress;

     /**
     * @var boolean
     */
    private $isStopped;

     /**
     * @var boolean
     */
    private $isBlocked;

    private $showInBoard;
    /**
     * @var integer
     */
    private $position;
    /**
     * @var boolean
     */
    private $isDefault;


    /**
     * Creates the class and assigns an id if provided
     *
     * @param integer|null $id the status id
     */
    public function __construct($id = null)
    {
        $this->setId((int) $id);
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
     * Set name
     *
     * @param string $name
     * @return TaskStatus
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
     * Set isComplete
     *
     * @param boolean $isComplete
     * @return TaskStatus
     */
    public function setIsComplete($isComplete)
    {
        $this->isComplete = $isComplete;

        return $this;
    }

    /**
     * Get isComplete
     *
     * @return boolean
     */
    public function getIsComplete()
    {
        return $this->isComplete;
    }

    /**
     * String representaion fo this class
     *
     * @return string
     */
    public function __toString()
    {
        $name = $this->getName();

        if (empty($name)) {
            $name = '';
        }

        return $name;
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
     * Gets the value of isDefault.
     *
     * @return boolean
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Sets the value of isDefault.
     *
     * @param boolean $isDefault the isDefault
     *
     * @return self
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    /**
     * Gets the value of position.
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets the value of position.
     *
     * @param integer $position the position
     *
     * @return self
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Gets the value of isInProgress.
     *
     * @return mixed
     */
    public function getIsInProgress()
    {
        return $this->isInProgress;
    }

    /**
     * Sets the value of isInProgress.
     *
     * @param mixed $isInProgress the isInProgress
     *
     * @return self
     */
    public function setIsInProgress($isInProgress)
    {
        $this->isInProgress = $isInProgress;

        return $this;
    }

    /**
     * Gets the value of isStopped.
     *
     * @return mixed
     */
    public function getIsStopped()
    {
        return $this->isStopped;
    }

    /**
     * Sets the value of isStopped.
     *
     * @param mixed $isStopped the isStopped
     *
     * @return self
     */
    public function setIsStopped($isStopped)
    {
        $this->isStopped = $isStopped;

        return $this;
    }

    /**
     * Gets the value of isBlocked.
     *
     * @return boolean
     */
    public function getIsBlocked()
    {
        return $this->isBlocked;
    }

    /**
     * Sets the value of isBlocked.
     *
     * @param boolean $isBlocked the isBlocked
     *
     * @return self
     */
    public function setIsBlocked($isBlocked)
    {
        $this->isBlocked = $isBlocked;

        return $this;
    }

    /**
     * Gets the value of showInBoard.
     *
     * @return mixed
     */
    public function getShowInBoard()
    {
        return $this->showInBoard;
    }

    /**
     * Sets the value of showInBoard.
     *
     * @param mixed $showInBoard the showInBoard
     *
     * @return self
     */
    public function setShowInBoard($showInBoard)
    {
        $this->showInBoard = $showInBoard;

        return $this;
    }
}
