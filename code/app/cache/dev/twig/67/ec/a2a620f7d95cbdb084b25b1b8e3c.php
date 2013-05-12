<?php

/* ScrunoBoardBundle:Board:index_list.html.twig */
class __TwigTemplate_67eca2a620f7d95cbdb084b25b1b8e3c extends Twig_Template
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
        // line 13
        echo "<div class=\"page-header\">
        <h1>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["backlog"]) ? $context["backlog"] : $this->getContext($context, "backlog")), "html", null, true);
        echo " <small><i class=\"icon-list\"></i> list view</small></h1>
    </div>

    <ul id=\"task-list\" class=\"\">
        <li class=\"title\">
                 <span class=\"span1\">
                </span>

                <span class=\"span5\">
                   title
                </span>

                <span class=\"span1\">
                  complexity
                </span>

                <span class=\"span2\">
                   Status
                </span>

                <span class=\"span2\">
                   Owner
                </span>
            </li>
        ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 39
            echo "            <li class=\"sortable\" data=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\">
                 <span class=\"span1\">
                    <i class=\"handle icon-certificate\"></i>
                    <span class=\"label\" style=\"background-color: #";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "color"), "html", null, true);
            echo ";\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "html", null, true);
            echo "</span>
                </span>

                <span class=\"span5\" >
                    ";
            // line 46
            if ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status"), "isBlocked")) {
                // line 47
                echo "                        <i class=\"icon-warning-sign blocked\" title=\"Item is Blocked\"></i>
                     ";
            }
            // line 49
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title"), "html", null, true);
            echo "</a>
                </span>

                <span class=\"span1 text-center\">
                   <span class=\"badge\" _style=\"background-color: #";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "color"), "html", null, true);
            echo ";\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "complexity"), "html", null, true);
            echo "</span>
                </span>

                <span class=\"span2\">
                  ";
            // line 57
            $context["color"] = "#999999";
            // line 58
            echo "
                  ";
            // line 59
            if ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status"), "isBlocked")) {
                // line 60
                echo "                    ";
                $context["color"] = "#f00";
                // line 61
                echo "                  ";
            }
            // line 62
            echo "
                  ";
            // line 63
            if ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status"), "isComplete")) {
                // line 64
                echo "                    ";
                $context["color"] = "#0f0";
                // line 65
                echo "                  ";
            }
            // line 66
            echo "
                  ";
            // line 67
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status"), "isInProgress") && (!$this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status"), "isBlocked")))) {
                // line 68
                echo "                    ";
                $context["color"] = "#FAA732";
                // line 69
                echo "                  ";
            }
            // line 70
            echo "

                   <span class=\"label\" style=\"background-color: ";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
            echo ";\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status"), "html", null, true);
            echo "</span>
                </span>

                <span class=\"span2\">
                   <i class=\"icon-user\"></i> ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "owner"), "html", null, true);
            echo "
                </span>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 80
        echo "
    </ul>




  <script>
\$(function() {
\$( \"#task-list\" ).sortable({ cursor: \"move\", items: \"> li.sortable\" ,  revert: true,  opacity: 0.5 , placeholder: \"placeholder\", forceHelperSizeType: true,helper: \"clone\" , axis: \"y\", stop: function(event, ui) {

  var position = 1;
  var order = {};
  \$('#task-list li.sortable').each( function (index, obj) {
    order[\$(obj).attr('data')] = position;
    position += 1;
  });

  \$.ajax({
        url: '/board/bulk/task/order',
        type: 'PUT',
        cache: false,
        data: {data: order},
        success: function(data, status, jqXHR) {
            console.log(status);
        },
        error: function (jqXHR, status, error) {
            alert(status + ' ' + error);
        }

    });

} });
// \$( \"#task-list\" ).sortable({ cursor: \"move\", items: \"> li.sortable\" ,  revert: true,  opacity: 0.5 , placeholder: \"placeholder\", forceHelperSizeType: true,helper: \"clone\" , handle: \".handle\",   axis: \"y\" });
// \$( \"\" ).disableSelection();
});
</script>


    ";
    }

    public function getTemplateName()
    {
        return "ScrunoBoardBundle:Board:index_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 80,  168 => 76,  159 => 72,  155 => 70,  152 => 69,  149 => 68,  147 => 67,  144 => 66,  141 => 65,  138 => 64,  136 => 63,  133 => 62,  130 => 61,  127 => 60,  125 => 59,  122 => 58,  120 => 57,  111 => 53,  101 => 49,  97 => 47,  95 => 46,  86 => 42,  79 => 39,  75 => 38,  48 => 14,  45 => 13,  42 => 11,  32 => 5,  29 => 4,);
    }
}
