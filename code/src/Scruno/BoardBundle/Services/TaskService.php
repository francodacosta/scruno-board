<?php

namespace Scruno\BoardBundle\Services;

use Doctrine\ORM\EntityManager;
use Scruno\BoardBundle\Entity\Task;
use Scruno\BoardBundle\Entity\TaskStatus;

/**
 * Helper functions related with tasks
 */
class TaskService
{


    /**
     * Entity Manager
     *
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;

    private $status = array();

    private $columns = array();

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
     * Gets a Task object fron an id
     *
     * @param integer $id the task id
     *
     * @return Task
     */
    public function taskFromId($id)
    {
        return $this->getRepository('ScrunoBoardBundle:Task')->find((int) $id);
    }


    public function getStatus($id)
    {
        if (false === array_key_exists($id, $this->status)) {
            $this->status[$id] = $this->getRepository('ScrunoBoardBundle:TaskStatus')->find($id);
        }

        return $this->status[$id];
    }

    public function getColumn($id)
    {
        if (false === array_key_exists($id, $this->columns)) {
            $this->columns[$id] = $this->getRepository('ScrunoBoardBundle:BoardColumn')->find($id);
        }

        return $this->columns[$id];
    }
    /**
     * changes the status of several task based on a key value arary where the key is the task id
     * and the value is the status id
     *
     * @param array $tasks
     */
    public function changeStatus(array $tasks)
    {
        $em = $this->getEm();

        foreach ($tasks as $taskId => $statusId) {
            $task = $this->taskFromId($taskId);
            $task->setStatus($this->getStatus($statusId));
            //$em->persist($task);
        }

        $em->flush();
    }

    /**
     * Reorder tasks based on the key value array received where the key is task id and the value
     * its position
     *
     * @param array $tasks
     */
    public function reorderTasks(array $tasks)
    {
        $em = $this->getEm();

        foreach ($tasks as $taskId => $position) {
            $task = $this->taskFromId($taskId);
            $task->setPosition($position);

            // $em->persist($task);
        }

        $em->flush();
    }

    /**
     * bulk changes tasks from one board column to another
     *
     * @param array $tasks
     */
    public function bulkChangeColumns(array $tasks)
    {
        $em = $this->getEm();
        foreach ($tasks as $taskId => $columnId) {
            $task = $this->taskFromId($taskId);
            $column = $this->getColumn($columnId);
            $defaultStatus = $column->getStatus();

            $task->setStatus($defaultStatus);
            $task->setBoardColumn($column);
            //$em->persist($task);
        }

        $em->flush();
    }
}