<?php

/* ScrunoBoardBundle:Task:show.html.twig */
class __TwigTemplate_c5b1579762fc0334faf9e7794c18d0b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ScrunoBoardBundle:Template:base.html.twig");

        $this->blocks = array(
            'topnav' => array($this, 'block_topnav'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ScrunoBoardBundle:Template:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_topnav($context, array $blocks = array())
    {
        // line 5
        echo "
    <div class=\"pull-right nav\">
     <a class=\"btn\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("board_view", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "backlog"), "id"))), "html", null, true);
        echo "\"><i class=\"icon-th\"></i> to ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "backlog"), "html", null, true);
        echo "</a>
    <a class=\"btn btn-primary\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"icon-edit\"></i> edit</a>
    </div>

";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "<div class=\"row task-header\">

<!--
        <div class=\"actions span3 offset1\">
            <a class=\"btn\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("board_view", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "backlog"), "id"))), "html", null, true);
        echo "\"><i class=\"icon-th\"></i> to ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "backlog"), "html", null, true);
        echo "</a>
            <a class=\"btn btn-primary\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"icon-edit\"></i> edit</a>
        </div >-->

    </div>

    <div class=\"row task-body\">

        <div class=\"description  span8\">
            <div class=\"page-header\">
                <a class=\"btn btn-primary pull-right\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"icon-edit\"></i> edit</a>
                <h1>#";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title"), "html", null, true);
        echo "</small></h1>
            </div>




            <div class=\"description clearfix\">
                ";
        // line 39
        echo $this->env->getExtension('markdown')->markdown($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"));
        echo "
            </div>

            <a class=\"btn btn-primary pull-right\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"icon-edit\"></i> edit</a>
        </div>

        <div class=\"task-info  offset1 span3\">
            <div class=\"info\">
                ";
        // line 47
        if ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status"), "isBlocked")) {
            // line 48
            echo "                    <div class=\"alert alert-error\">
                        <i class=\"icon-warning-sign\"></i> Item is Blocked
                    </div>
                ";
        }
        // line 52
        echo "                <p>
                    <span class=\"badge points\" title=\"complexity\"><i class=\"icon-lightbulb\"></i> ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "complexity"), "html", null, true);
        echo "</span>
                </p>
                <p>
                    <span class=\"badge badge-info\" title=\"priority\"><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("board_view", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "backlog"), "id"))), "html", null, true);
        echo "\"><i class=\"icon-sort\"></i> #";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position"), "html", null, true);
        echo " @ ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "backlog"), "html", null, true);
        echo "</a></span>
                </p>
                <p>
                    <span class=\"badge\" title=\"type\" style=\"background-color: #";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "color"), "html", null, true);
        echo ";\"><i class=\"icon-star-empty\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "html", null, true);
        echo "</span>
                </p>
                <p>

                     ";
        // line 63
        $context["color"] = "#999999";
        // line 64
        echo "
                  ";
        // line 65
        if ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status"), "isBlocked")) {
            // line 66
            echo "                    ";
            $context["color"] = "#f00";
            // line 67
            echo "                  ";
        }
        // line 68
        echo "
                  ";
        // line 69
        if ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status"), "isComplete")) {
            // line 70
            echo "                    ";
            $context["color"] = "#0f0";
            // line 71
            echo "                  ";
        }
        // line 72
        echo "
                  ";
        // line 73
        if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status"), "isInProgress") && (!$this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status"), "isBlocked")))) {
            // line 74
            echo "                    ";
            $context["color"] = "#FAA732";
            // line 75
            echo "                  ";
        }
        // line 76
        echo "
                    <span class=\"badge\" title=\"status\" style=\"background-color: ";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
        echo ";\"><i class=\"icon-heart-empty\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status"), "html", null, true);
        echo "</span>
                </p>
                <p>
                    <span class=\"badge\" title=\"owner\"><i class=\"icon-user\"></i> ";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "owner"), "html", null, true);
        echo "</span>
                </p>
            </div>

            <div class=\"info\">
                <h6><i class=\"icon-calendar\"></i> Dates:</h6>
                <p>created: ";
        // line 86
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "created"), "Y-m-d H:i:s"), "html", null, true);
        echo "</p>
                <p>changed: ";
        // line 87
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "changed"), "Y-m-d H:i:s"), "html", null, true);
        echo "</p>
            </div>
        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "ScrunoBoardBundle:Task:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 87,  198 => 86,  189 => 80,  181 => 77,  178 => 76,  175 => 75,  172 => 74,  170 => 73,  167 => 72,  164 => 71,  161 => 70,  159 => 69,  156 => 68,  153 => 67,  150 => 66,  148 => 65,  145 => 64,  143 => 63,  134 => 59,  124 => 56,  118 => 53,  115 => 52,  109 => 48,  107 => 47,  99 => 42,  93 => 39,  81 => 32,  77 => 31,  65 => 22,  59 => 21,  53 => 17,  50 => 13,  42 => 8,  36 => 7,  32 => 5,  29 => 4,);
    }
}
