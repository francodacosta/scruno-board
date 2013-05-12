<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/assets')) {
            if (0 === strpos($pathinfo, '/assets/css/base')) {
                // _assetic_ec1a8e2
                if ($pathinfo === '/assets/css/base.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec1a8e2',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_ec1a8e2',);
                }

                if (0 === strpos($pathinfo, '/assets/css/base_')) {
                    if (0 === strpos($pathinfo, '/assets/css/base_bootstrap')) {
                        // _assetic_ec1a8e2_0
                        if ($pathinfo === '/assets/css/base_bootstrap.min_1.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec1a8e2',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_ec1a8e2_0',);
                        }

                        // _assetic_ec1a8e2_1
                        if ($pathinfo === '/assets/css/base_bootstrap-responsive.min_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec1a8e2',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_ec1a8e2_1',);
                        }

                    }

                    // _assetic_ec1a8e2_2
                    if ($pathinfo === '/assets/css/base_font-awesome.min_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec1a8e2',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_ec1a8e2_2',);
                    }

                    // _assetic_ec1a8e2_3
                    if ($pathinfo === '/assets/css/base_jquery-ui-1.10.0.custom_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec1a8e2',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_ec1a8e2_3',);
                    }

                    // _assetic_ec1a8e2_4
                    if ($pathinfo === '/assets/css/base_template_5.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec1a8e2',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_ec1a8e2_4',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/assets/js/base')) {
                // _assetic_f692472
                if ($pathinfo === '/assets/js/base.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f692472',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_f692472',);
                }

                if (0 === strpos($pathinfo, '/assets/js/base_')) {
                    if (0 === strpos($pathinfo, '/assets/js/base_jquery-')) {
                        // _assetic_f692472_0
                        if ($pathinfo === '/assets/js/base_jquery-1.9.1.min_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'f692472',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_f692472_0',);
                        }

                        // _assetic_f692472_1
                        if ($pathinfo === '/assets/js/base_jquery-ui-1.10.2.min_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'f692472',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_f692472_1',);
                        }

                    }

                    // _assetic_f692472_2
                    if ($pathinfo === '/assets/js/base_bootstrap.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f692472',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_f692472_2',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user
            if (rtrim($pathinfo, '/') === '/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user');
                }

                return array (  '_controller' => 'Scruno\\AuthBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
            }

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'Scruno\\AuthBundle\\Controller\\UserController::showAction',));
            }

            // user_new
            if ($pathinfo === '/user/new') {
                return array (  '_controller' => 'Scruno\\AuthBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }

            // user_create
            if ($pathinfo === '/user/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_create;
                }

                return array (  '_controller' => 'Scruno\\AuthBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
            }
            not_user_create:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'Scruno\\AuthBundle\\Controller\\UserController::editAction',));
            }

            // user_update
            if (preg_match('#^/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'Scruno\\AuthBundle\\Controller\\UserController::updateAction',));
            }
            not_user_update:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'Scruno\\AuthBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/task/type')) {
                // task_type
                if (rtrim($pathinfo, '/') === '/admin/task/type') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'task_type');
                    }

                    return array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\TaskTypeController::indexAction',  '_route' => 'task_type',);
                }

                // task_type_show
                if (preg_match('#^/admin/task/type/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_type_show')), array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\TaskTypeController::showAction',));
                }

                // task_type_new
                if ($pathinfo === '/admin/task/type/new') {
                    return array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\TaskTypeController::newAction',  '_route' => 'task_type_new',);
                }

                // task_type_create
                if ($pathinfo === '/admin/task/type/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_task_type_create;
                    }

                    return array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\TaskTypeController::createAction',  '_route' => 'task_type_create',);
                }
                not_task_type_create:

                // task_type_edit
                if (preg_match('#^/admin/task/type/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_type_edit')), array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\TaskTypeController::editAction',));
                }

                // task_type_update
                if (preg_match('#^/admin/task/type/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_task_type_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_type_update')), array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\TaskTypeController::updateAction',));
                }
                not_task_type_update:

                // task_type_delete
                if (preg_match('#^/admin/task/type/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_task_type_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_type_delete')), array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\TaskTypeController::deleteAction',));
                }
                not_task_type_delete:

            }

            if (0 === strpos($pathinfo, '/admin/backlog')) {
                // backlog
                if (rtrim($pathinfo, '/') === '/admin/backlog') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'backlog');
                    }

                    return array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\BacklogController::indexAction',  '_route' => 'backlog',);
                }

                // backlog_show
                if (preg_match('#^/admin/backlog/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backlog_show')), array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\BacklogController::showAction',));
                }

                // backlog_new
                if ($pathinfo === '/admin/backlog/new') {
                    return array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\BacklogController::newAction',  '_route' => 'backlog_new',);
                }

                // backlog_create
                if ($pathinfo === '/admin/backlog/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_backlog_create;
                    }

                    return array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\BacklogController::createAction',  '_route' => 'backlog_create',);
                }
                not_backlog_create:

                // backlog_edit
                if (preg_match('#^/admin/backlog/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backlog_edit')), array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\BacklogController::editAction',));
                }

                // backlog_update
                if (preg_match('#^/admin/backlog/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_backlog_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backlog_update')), array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\BacklogController::updateAction',));
                }
                not_backlog_update:

                // backlog_delete
                if (preg_match('#^/admin/backlog/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_backlog_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backlog_delete')), array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\BacklogController::deleteAction',));
                }
                not_backlog_delete:

            }

            if (0 === strpos($pathinfo, '/admin/task/status')) {
                // admin_task_status
                if (rtrim($pathinfo, '/') === '/admin/task/status') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_task_status');
                    }

                    return array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\TaskStatusController::indexAction',  '_route' => 'admin_task_status',);
                }

                // admin_task_status_show
                if (preg_match('#^/admin/task/status/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_task_status_show')), array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\TaskStatusController::showAction',));
                }

                // admin_task_status_new
                if ($pathinfo === '/admin/task/status/new') {
                    return array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\TaskStatusController::newAction',  '_route' => 'admin_task_status_new',);
                }

                // admin_task_status_create
                if ($pathinfo === '/admin/task/status/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_task_status_create;
                    }

                    return array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\TaskStatusController::createAction',  '_route' => 'admin_task_status_create',);
                }
                not_admin_task_status_create:

                // admin_task_status_edit
                if (preg_match('#^/admin/task/status/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_task_status_edit')), array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\TaskStatusController::editAction',));
                }

                // admin_task_status_update
                if (preg_match('#^/admin/task/status/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_task_status_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_task_status_update')), array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\TaskStatusController::updateAction',));
                }
                not_admin_task_status_update:

                // admin_task_status_delete
                if (preg_match('#^/admin/task/status/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_task_status_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_task_status_delete')), array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\TaskStatusController::deleteAction',));
                }
                not_admin_task_status_delete:

            }

            if (0 === strpos($pathinfo, '/admin/board/column')) {
                // admin_board_column
                if (rtrim($pathinfo, '/') === '/admin/board/column') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_board_column');
                    }

                    return array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\BoardColumnController::indexAction',  '_route' => 'admin_board_column',);
                }

                // admin_board_column_show
                if (preg_match('#^/admin/board/column/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_board_column_show')), array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\BoardColumnController::showAction',));
                }

                // admin_board_column_new
                if ($pathinfo === '/admin/board/column/new') {
                    return array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\BoardColumnController::newAction',  '_route' => 'admin_board_column_new',);
                }

                // admin_board_column_create
                if ($pathinfo === '/admin/board/column/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_board_column_create;
                    }

                    return array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\BoardColumnController::createAction',  '_route' => 'admin_board_column_create',);
                }
                not_admin_board_column_create:

                // admin_board_column_edit
                if (preg_match('#^/admin/board/column/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_board_column_edit')), array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\BoardColumnController::editAction',));
                }

                // admin_board_column_update
                if (preg_match('#^/admin/board/column/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_board_column_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_board_column_update')), array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\BoardColumnController::updateAction',));
                }
                not_admin_board_column_update:

                // admin_board_column_delete
                if (preg_match('#^/admin/board/column/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_board_column_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_board_column_delete')), array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\BoardColumnController::deleteAction',));
                }
                not_admin_board_column_delete:

            }

        }

        if (0 === strpos($pathinfo, '/task')) {
            // task
            if (rtrim($pathinfo, '/') === '/task') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'task');
                }

                return array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\TaskController::indexAction',  '_route' => 'task',);
            }

            // task_show
            if (preg_match('#^/task/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_show')), array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\TaskController::showAction',));
            }

            // task_new
            if ($pathinfo === '/task/new') {
                return array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\TaskController::newAction',  '_route' => 'task_new',);
            }

            // task_create
            if ($pathinfo === '/task/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_task_create;
                }

                return array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\TaskController::createAction',  '_route' => 'task_create',);
            }
            not_task_create:

            // task_edit
            if (preg_match('#^/task/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_edit')), array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\TaskController::editAction',));
            }

            // task_update
            if (preg_match('#^/task/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_task_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_update')), array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\TaskController::updateAction',));
            }
            not_task_update:

            // task_delete
            if (preg_match('#^/task/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_task_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_delete')), array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\TaskController::deleteAction',));
            }
            not_task_delete:

        }

        if (0 === strpos($pathinfo, '/board')) {
            // board_view
            if (preg_match('#^/board/(?P<id>\\d+)(?:/(?P<output>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_board_view;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'board_view')), array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\BoardController::indexAction',  'output' => 'list',));
            }
            not_board_view:

            if (0 === strpos($pathinfo, '/board/bulk/task')) {
                // board_bulk_status_change
                if ($pathinfo === '/board/bulk/task/column') {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_board_bulk_status_change;
                    }

                    return array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\BoardController::bulkColumnChangeAction',  '_route' => 'board_bulk_status_change',);
                }
                not_board_bulk_status_change:

                // board_bulk_task_position_change
                if ($pathinfo === '/board/bulk/task/order') {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_board_bulk_task_position_change;
                    }

                    return array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\BoardController::bulkPositionChangeAction',  '_route' => 'board_bulk_task_position_change',);
                }
                not_board_bulk_task_position_change:

            }

        }

        if (0 === strpos($pathinfo, '/foo')) {
            // foo
            if (rtrim($pathinfo, '/') === '/foo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'foo');
                }

                return array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\fooController::indexAction',  '_route' => 'foo',);
            }

            // foo_show
            if (preg_match('#^/foo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'foo_show')), array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\fooController::showAction',));
            }

            // foo_new
            if ($pathinfo === '/foo/new') {
                return array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\fooController::newAction',  '_route' => 'foo_new',);
            }

            // foo_create
            if ($pathinfo === '/foo/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_foo_create;
                }

                return array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\fooController::createAction',  '_route' => 'foo_create',);
            }
            not_foo_create:

            // foo_edit
            if (preg_match('#^/foo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'foo_edit')), array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\fooController::editAction',));
            }

            // foo_update
            if (preg_match('#^/foo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_foo_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'foo_update')), array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\fooController::updateAction',));
            }
            not_foo_update:

            // foo_delete
            if (preg_match('#^/foo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_foo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'foo_delete')), array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\fooController::deleteAction',));
            }
            not_foo_delete:

        }

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'Scruno\\BoardBundle\\Controller\\BoardController::listAction',  '_route' => 'home',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
