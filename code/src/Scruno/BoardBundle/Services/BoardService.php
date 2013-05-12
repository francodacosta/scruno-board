<?php

namespace Scruno\BoardBundle\Services;

use Doctrine\ORM\EntityManager;

/**
 * Generic helper functions for the task board
 */
class BoardService
{


    /**
     * Entity Manager
     *
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;

    /**
     * sets the entity manager on contruction of the class
     *
     * @param EntityManager $em [description]
     */
    public function __construct(EntityManager $em)
    {
        $this->setEm($em);
    }

    /**
     * Gets the Entity Manager.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    public function getEm()
    {
        return $this->em;
    }

    /**
     * Sets the Entity Manager.
     *
     * @param \Doctrine\ORM\EntityManager $em the em
     *
     * @return self
     */
    public function setEm(\Doctrine\ORM\EntityManager $em)
    {
        $this->em = $em;

        return $this;
    }


    private function getRepository($entity)
    {
        $em = $this->getEm();

        return $em->getRepository($entity);
    }

    /**
     * Gets all task beloging to board $id
     *
     * @param integer $backlogId the board id
     *
     * @return array
     */
    public function getTasksOfBoard($backlogId)
    {
        $em = $this->getEm();

        $query = $em->createQuery(
            'SELECT t FROM ScrunoBoardBundle:Task t WHERE t.backlog = :backlog ORDER BY t.position ASC'
        )->setParameter('backlog', $backlogId);

        return $query->getResult();
    }

    /**
     * returns a list of available backlogs
     *
     * @return array
     */
    public function getBacklogs()
    {
        $repo = $this->getRepository('ScrunoBoardBundle:Backlog');

        return $repo->findAll();
    }

    /**
     * returns all task status ordered by position
     *
     * @return array
     */
    public function getTaskStatus()
    {
        $em = $this->getEm();

        $query = $em->createQuery(
            'SELECT t FROM ScrunoBoardBundle:TaskStatus t ORDER BY t.position ASC'
        );

        return $query->getResult();
    }

    public function getTaskStatusForBoard()
    {
        $statuses = $this->getTaskStatus();
        $return = array();
        foreach ($statuses as $status) {
            if (true === $status->getShowInBoard()) {
                $return[] = $status;
            }
        }

        return $return;
    }

    public function getBoardColumns()
    {
        $em = $this->getEm();

        $query = $em->createQuery(
            'SELECT t FROM ScrunoBoardBundle:BoardColumn t ORDER BY t.position ASC'
        );

        return $query->getResult();
    }

    public function getBoards()
    {
        return $this->getRepository('ScrunoBoardBundle:Backlog')->findAll();
    }
}