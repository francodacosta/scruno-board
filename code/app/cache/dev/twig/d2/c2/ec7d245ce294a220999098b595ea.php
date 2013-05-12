<?php

/* ScrunoBoardBundle:Task:edit.html.twig */
class __TwigTemplate_d2c2ec7d245ce294a220999098b595ea extends Twig_Template
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

    // line 3
    public function block_topnav($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"pull-right nav\">
     <a class=\"btn\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("board_view", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "backlog"), "id"))), "html", null, true);
        echo "\"><i class=\"icon-th\"></i> to ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "backlog"), "html", null, true);
        echo "</a>
    <a class=\"btn\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"icon-chevron-left\"></i> back</a>
    </div>

";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"page-header\">
        <h1>#";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title"), "html", null, true);
        echo "</small></h1>
    </div>

    <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "

        <div class=\"row\">
            <div class=\"span8\">
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title"), 'row', array("attr" => array("class" => "span8")));
        echo "


                <label for=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description"), "get", array(0 => "id"), "method"), "html", null, true);
        echo "\">Description <a class=\"btn-preview btn btn-small pull-right\"><i class=\"icon-retweet\"></i> preview</a></label>
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description"), 'widget', array("attr" => array("class" => "span8 height", "style" => "min-height: 300px")));
        echo "

                <p>
                    <button class=\"btn btn-primary\" type=\"submit\"><i class=\"icon-save\"></i> Save</button>
                    <a class=\"btn\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"icon-chevron-left\"></i> Back</a>
                </p>
            </div>

            <div class=\"span3 offset1 \">
                <label for=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "status"), "get", array(0 => "id"), "method"), "html", null, true);
        echo "\"><i class=\"icon-heart-empty\"></i> Status</label>
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "status"), 'widget');
        echo "

                <label for=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "complexity"), "get", array(0 => "id"), "method"), "html", null, true);
        echo "\"><i class=\"icon-lightbulb\"></i> Complexity</label>
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "complexity"), 'widget');
        echo "

                <label for=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "owner"), "get", array(0 => "id"), "method"), "html", null, true);
        echo "\"><i class=\"icon-user\"></i> Owner</label>
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "owner"), 'widget');
        echo "

                <label for=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "type"), "get", array(0 => "id"), "method"), "html", null, true);
        echo "\"><i class=\"icon-star-empty\"></i> Type</label>
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "type"), 'widget');
        echo "

                <label for=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "backlog"), "get", array(0 => "id"), "method"), "html", null, true);
        echo "\"><i class=\"icon-th\"></i> Backlog</label>
                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "backlog"), 'widget');
        echo "

                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token"), 'widget');
        echo "


                <div style=\"display: none;\">
                    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
                </div>
            </div>
        <!-- ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo " -->

        </div>
    </form>


";
    }

    public function getTemplateName()
    {
        return "ScrunoBoardBundle:Task:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 58,  155 => 55,  148 => 51,  143 => 49,  139 => 48,  134 => 46,  130 => 45,  125 => 43,  121 => 42,  116 => 40,  112 => 39,  107 => 37,  103 => 36,  95 => 31,  88 => 27,  84 => 26,  78 => 23,  71 => 19,  64 => 17,  56 => 14,  53 => 13,  50 => 12,  42 => 7,  36 => 6,  32 => 4,  29 => 3,);
    }
}
