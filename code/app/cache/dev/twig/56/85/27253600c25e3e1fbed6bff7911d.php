<?php

/* ScrunoBoardBundle:Board:base.html.twig */
class __TwigTemplate_568527253600c25e3e1fbed6bff7911d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ScrunoBoardBundle:Template:base.html.twig");

        $this->blocks = array(
            'topnav' => array($this, 'block_topnav'),
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

    // line 3
    public function block_topnav($context, array $blocks = array())
    {
        // line 4
        echo "
    <ul class=\"nav pull-right\">
        <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                Change view
                <b class=\"caret\"></b>
            </a>
            <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("board_view", array("id" => $this->getAttribute((isset($context["backlog"]) ? $context["backlog"] : $this->getContext($context, "backlog")), "id"), "output" => "list")), "html", null, true);
        echo "\"><i class=\"icon-list\"></i> List</a></li>
                <li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("board_view", array("id" => $this->getAttribute((isset($context["backlog"]) ? $context["backlog"] : $this->getContext($context, "backlog")), "id"), "output" => "cards")), "html", null, true);
        echo "\"><i class=\"icon-th\"></i> Scrum Board</a></li>
                <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("board_view", array("id" => $this->getAttribute((isset($context["backlog"]) ? $context["backlog"] : $this->getContext($context, "backlog")), "id"), "output" => "stats")), "html", null, true);
        echo "\"><i class=\"icon-bar-chart\"></i> Stats</a></li>
            </ul>
        </li>
        <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                Swtich backlog:
                <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu\">
                ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["availableBacklogs"]) ? $context["availableBacklogs"] : $this->getContext($context, "availableBacklogs")));
        foreach ($context['_seq'] as $context["_key"] => $context["bklog"]) {
            // line 24
            echo "                    ";
            if (($this->getAttribute((isset($context["backlog"]) ? $context["backlog"] : $this->getContext($context, "backlog")), "id") != $this->getAttribute((isset($context["bklog"]) ? $context["bklog"] : $this->getContext($context, "bklog")), "id"))) {
                // line 25
                echo "                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("board_view", array("id" => $this->getAttribute((isset($context["bklog"]) ? $context["bklog"] : $this->getContext($context, "bklog")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["bklog"]) ? $context["bklog"] : $this->getContext($context, "bklog")), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 27
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bklog'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 28
        echo "            </ul>
        </li>
    </ul>



";
    }

    public function getTemplateName()
    {
        return "ScrunoBoardBundle:Board:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 28,  76 => 27,  68 => 25,  65 => 24,  61 => 23,  49 => 14,  41 => 12,  31 => 4,  28 => 3,  178 => 80,  168 => 76,  159 => 72,  155 => 70,  152 => 69,  149 => 68,  147 => 67,  144 => 66,  141 => 65,  138 => 64,  136 => 63,  133 => 62,  130 => 61,  127 => 60,  125 => 59,  122 => 58,  120 => 57,  111 => 53,  101 => 49,  97 => 47,  95 => 46,  86 => 42,  79 => 39,  75 => 38,  48 => 14,  45 => 13,  42 => 11,  32 => 5,  29 => 4,);
    }
}
