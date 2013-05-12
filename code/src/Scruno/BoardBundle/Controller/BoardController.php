<?php

namespace Scruno\BoardBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * TaskStatus controller.
 *
 */
class BoardController extends Controller
{
    /**
     * Lists all TaskStatus entities.
     *
     * @param integer $id     he backlog id
     * @param string  $output what is the view to load
     *
     * @return Response
     */
    public function indexAction($id, $output)
    {

        $boardService = $this->container->get('board_Service');

        $entities = $boardService->getTasksOfBoard($id);

        $backlog = $entities[0]->getBacklog();
        $availableBacklogs = $boardService->getBacklogs();

        $availableStatus = $boardService->getTaskStatusForBoard();

        $availableColumns = $boardService->getBoardColumns();

        switch($output) {
            case 'list':
                $view = 'list';
                break;
            case 'stats':
                $view = 'stats';
                break;
            default:
                $view = 'cards';
                break;
        }

        return $this->render('ScrunoBoardBundle:Board:index_'.$view.'.html.twig', array(
            'entities'          => $entities,
            'backlog'           => $backlog,
            'availableBacklogs' => $availableBacklogs,
            'availableStatus'   => $availableStatus,
            'availableColumns'  => $availableColumns,
        ));
    }

    /**
     * Changes the status of several tasks
     *
     * @param Resquest $request the http request
     *
     * @return Response
     */
    public function bulkColumnChangeAction(Request $request)
    {
        $taskService = $this->container->get('task_Service');
        $data = $request->get('data');

        $taskService->bulkChangeColumns($data);

        return new Response();
    }

    /**
     * Changes the position of several tasks
     *
     * @param Resquest $request the http request
     *
     * @return Response
     */
    public function bulkPositionChangeAction(Request $request)
    {
        $taskService = $this->container->get('task_Service');
        $data = $request->get('data');

        $taskService->reorderTasks($data);

        return new Response();
    }


    public function listAction()
    {
        $boardService = $this->container->get('board_Service');
        $availableBoards = $boardService->getBOards();

        return $this->render('ScrunoBoardBundle:Board:list_boards.html.twig', array(
            'entities'          => $availableBoards,
        ));
    }
}
