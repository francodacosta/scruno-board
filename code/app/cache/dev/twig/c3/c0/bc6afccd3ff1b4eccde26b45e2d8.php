<?php

/* ScrunoBoardBundle:Board:index_cards.html.twig */
class __TwigTemplate_c3c0bc6afccd3ff1b4eccde26b45e2d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ScrunoBoardBundle:Board:base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ScrunoBoardBundle:Board:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["backlog"]) ? $context["backlog"] : $this->getContext($context, "backlog")), "html", null, true);
        echo " @  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 15
        $context["columnIds"] = array();
        // line 16
        echo "
    ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["availableColumns"]) ? $context["availableColumns"] : $this->getContext($context, "availableColumns")));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 18
            echo "            ";
            $context["columnIds"] = twig_array_merge((isset($context["columnIds"]) ? $context["columnIds"] : $this->getContext($context, "columnIds")), array(0 => $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id")));
            // line 19
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "
    ";
        // line 21
        $context["tasksOfDefaultColumn"] = array();
        // line 22
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "        ";
            if (!twig_in_filter($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "boardColumn"), "id"), (isset($context["columnIds"]) ? $context["columnIds"] : $this->getContext($context, "columnIds")))) {
                // line 24
                echo "            ";
                $context["tasksOfDefaultColumn"] = twig_array_merge((isset($context["tasksOfDefaultColumn"]) ? $context["tasksOfDefaultColumn"] : $this->getContext($context, "tasksOfDefaultColumn")), array(0 => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))));
                // line 25
                echo "        ";
            }
            // line 26
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "
    <div class=\"page-header\">
        <h1>";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["backlog"]) ? $context["backlog"] : $this->getContext($context, "backlog")), "html", null, true);
        echo " <small><i class=\"icon-th\"></i> scrum board view</small></h1>
    </div>

    <!-- <div class=\"row\">
        ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["availableColumns"]) ? $context["availableColumns"] : $this->getContext($context, "availableColumns")));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 34
            echo "            ";
            $context["colWidth"] = abs((12 / twig_length_filter($this->env, (isset($context["availableColumns"]) ? $context["availableColumns"] : $this->getContext($context, "availableColumns")))));
            // line 35
            echo "            <div class=\"column span";
            echo twig_escape_filter($this->env, (isset($context["colWidth"]) ? $context["colWidth"] : $this->getContext($context, "colWidth")), "html", null, true);
            echo "\" data=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "id"), "html", null, true);
            echo "\">
                 <h1>";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "html", null, true);
            echo "</h1>
                <div class=\"card dummy\" data=\"0\"></div>
                 ";
            // line 38
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 39
                echo "                    ";
                if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status"), "id") == $this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "id"))) {
                    // line 40
                    echo "                        <div class=\"card\" data=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                    echo "\">
                            <p class=\"header\" style=\"background: #";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "color"), "html", null, true);
                    echo ";\"># ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                    echo "</p>
                            <p>";
                    // line 42
                    echo twig_escape_filter($this->env, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "html", null, true);
                    echo "</p>
                            <p class=\"info\">

                                <span class=\"badge complexity\">";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "complexity"), "html", null, true);
                    echo "</span>
                                <span class=\"label\" style=\"background: #";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "color"), "html", null, true);
                    echo ";\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "html", null, true);
                    echo "</span>
                                <spam class=\"pull-right\"><i class=\"icon-user\"></i> ";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "owner"), "html", null, true);
                    echo "</span>
                            </p>
                        </div>
                    ";
                }
                // line 51
                echo "                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 52
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 54
        echo "    </div> -->

<div class=\"row cards\">
        ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["availableColumns"]) ? $context["availableColumns"] : $this->getContext($context, "availableColumns")));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 58
            echo "            ";
            $context["colWidth"] = abs((12 / twig_length_filter($this->env, (isset($context["availableColumns"]) ? $context["availableColumns"] : $this->getContext($context, "availableColumns")))));
            // line 59
            echo "            <div class=\"column span";
            echo twig_escape_filter($this->env, (isset($context["colWidth"]) ? $context["colWidth"] : $this->getContext($context, "colWidth")), "html", null, true);
            echo "\" data=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id"), "html", null, true);
            echo "\">
            <h3 class=\"text-center\">";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "html", null, true);
            echo "</h3>
            <!-- <div class=\"card dummy\" data=\"0\"></div> -->

                 ";
            // line 63
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 64
                echo "                    ";
                if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "boardColumn"), "id") == $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id"))) {
                    // line 65
                    echo "                        <div class=\"card\" data=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                    echo "\">
                            <p class=\"header\" style=\"background: #";
                    // line 66
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "color"), "html", null, true);
                    echo ";\"># ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                    echo "</p>
                            <p>
                                ";
                    // line 68
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title")) > 36)) {
                        // line 69
                        echo "                                    <small><a title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title"), "html", null, true);
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title"), 0, 36), "html", null, true);
                        echo "</a>...</small>
                                ";
                    } else {
                        // line 71
                        echo "                                    <a title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title"), "html", null, true);
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title"), "html", null, true);
                        echo "</a>
                                ";
                    }
                    // line 73
                    echo "
                            </p>
                            <p class=\"info\">

                                <span class=\"badge complexity\">";
                    // line 77
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "complexity"), "html", null, true);
                    echo "</span>
                                <span class=\"label\" style=\"background: #";
                    // line 78
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "color"), "html", null, true);
                    echo ";\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "html", null, true);
                    echo "</span>
                                ";
                    // line 79
                    if ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status"), "isBlocked")) {
                        // line 80
                        echo "                                        <i class=\"icon-warning-sign blocked\" title=\"Item is Blocked\"></i>
                                ";
                    }
                    // line 82
                    echo "                                <spam class=\"pull-right\"><i class=\"icon-user\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "owner"), "html", null, true);
                    echo "</span>
                            </p>
                        </div>
                    ";
                }
                // line 86
                echo "

                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 89
            echo "
                 ";
            // line 90
            if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "isDefault")) {
                // line 91
                echo "                        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["tasksOfDefaultColumn"]) ? $context["tasksOfDefaultColumn"] : $this->getContext($context, "tasksOfDefaultColumn")));
                foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                    // line 92
                    echo "                        <div class=\"card\" data=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                    echo "\">
                            <p class=\"header\" style=\"background: #";
                    // line 93
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "color"), "html", null, true);
                    echo ";\"># ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                    echo "</p>
                            <p>";
                    // line 94
                    echo twig_escape_filter($this->env, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "html", null, true);
                    echo "</p>
                            <p class=\"info\">

                                <span class=\"badge complexity\">";
                    // line 97
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "complexity"), "html", null, true);
                    echo "</span>
                                <span class=\"label\" style=\"background: #";
                    // line 98
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "color"), "html", null, true);
                    echo ";\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "html", null, true);
                    echo "</span>
                                ";
                    // line 99
                    if ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status"), "isBlocked")) {
                        // line 100
                        echo "                                    <div class=\"alert alert-error\">
                                        <i class=\"icon-warning-sign blocked\"></i> Item is Blocked
                                    </div>
                                ";
                    }
                    // line 104
                    echo "                                <spam class=\"pull-right\"><i class=\"icon-user\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "owner"), "html", null, true);
                    echo "</span>
                            </p>
                        </div>

                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 109
                echo "                    ";
            }
            // line 110
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 113
        echo "    </div>



  <script>
\$(function() {
    \$( \".column\" ).sortable({
        dropOnEmpty: true,
        cursor: \"move\",
        items: \".card\" ,
        connectWith:\".column\",
        // accept: \".card\",
        placeholder:\"placeholder\",
        opacity: 0.5 ,
        forcePlaceholderSize: true,
        forceHelperSize: true,
        helper: \"clone\" ,
        axis: \"x\" ,
        revert: \"invalid\",
        receive: function( event, ui ) {
            var taskId = \$(ui.item).attr('data');

            var columnId = \$(ui.item).parent('.column').attr('data');
            // get column id
            var requestBody = {};
            requestBody[taskId] = columnId;

             console.log(taskId, columnId);
             \$.ajax({
                url: '/board/bulk/task/column',
                type: 'PUT',
                cache: false,
                data: {data: requestBody},
                success: function(data, status, jqXHR) {
                    console.log(status);
                },
                error: function (jqXHR, status, error) {
                    alert(status + ' ' + error);
                }

            });
        }

    });
});


// stop: function(event, ui){


//         var tasksInStatus = {};

//         \$('.row .column').each(function(index, obj){
//             var statusId = \$(obj).attr('data');
//             \$('.card', obj).each(function(index, card){
//                 var taskId = \$(card).attr('data');
//                 if (taskId > 0 ) {
//                     tasksInStatus[taskId] = statusId
//                 }
//             });
//         })

//         \$.ajax({
//             url: '/board/bulk/task/column',
//             type: 'PUT',
//             cache: false,
//             data: {data: tasksInStatus},
//             success: function(data, status, jqXHR) {
//                 console.log(status);
//             },
//             error: function (jqXHR, status, error) {
//                 alert(status + ' ' + error);
//             }

//         });
//      }});


</script>



    ";
    }

    public function getTemplateName()
    {
        return "ScrunoBoardBundle:Board:index_cards.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 113,  336 => 110,  333 => 109,  321 => 104,  315 => 100,  313 => 99,  307 => 98,  303 => 97,  297 => 94,  291 => 93,  286 => 92,  281 => 91,  279 => 90,  276 => 89,  268 => 86,  260 => 82,  256 => 80,  254 => 79,  248 => 78,  244 => 77,  238 => 73,  228 => 71,  218 => 69,  216 => 68,  209 => 66,  204 => 65,  201 => 64,  197 => 63,  191 => 60,  184 => 59,  181 => 58,  177 => 57,  172 => 54,  165 => 52,  159 => 51,  152 => 47,  146 => 46,  142 => 45,  136 => 42,  130 => 41,  125 => 40,  122 => 39,  118 => 38,  113 => 36,  106 => 35,  103 => 34,  99 => 33,  92 => 29,  88 => 27,  82 => 26,  79 => 25,  76 => 24,  73 => 23,  68 => 22,  66 => 21,  63 => 20,  57 => 19,  54 => 18,  50 => 17,  47 => 16,  45 => 15,  42 => 11,  32 => 5,  29 => 4,);
    }
}
