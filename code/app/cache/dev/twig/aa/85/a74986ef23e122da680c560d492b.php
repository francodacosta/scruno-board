<?php

/* ScrunoBoardBundle:Template:base.html.twig */
class __TwigTemplate_aa85a74986ef23e122da680c560d492b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'topnav' => array($this, 'block_topnav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>



        ";
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ec1a8e2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ec1a8e2_0") : $this->env->getExtension('assets')->getAssetUrl("/assets/css/base_bootstrap.min_1.css");
            // line 18
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "ec1a8e2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ec1a8e2_1") : $this->env->getExtension('assets')->getAssetUrl("/assets/css/base_bootstrap-responsive.min_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "ec1a8e2_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ec1a8e2_2") : $this->env->getExtension('assets')->getAssetUrl("/assets/css/base_font-awesome.min_3.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "ec1a8e2_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ec1a8e2_3") : $this->env->getExtension('assets')->getAssetUrl("/assets/css/base_jquery-ui-1.10.0.custom_4.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "ec1a8e2_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ec1a8e2_4") : $this->env->getExtension('assets')->getAssetUrl("/assets/css/base_template_5.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "ec1a8e2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ec1a8e2") : $this->env->getExtension('assets')->getAssetUrl("/assets/css/base.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 20
        echo "
        ";
        // line 21
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f692472_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f692472_0") : $this->env->getExtension('assets')->getAssetUrl("/assets/js/base_jquery-1.9.1.min_1.js");
            // line 27
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "f692472_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f692472_1") : $this->env->getExtension('assets')->getAssetUrl("/assets/js/base_jquery-ui-1.10.2.min_2.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "f692472_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f692472_2") : $this->env->getExtension('assets')->getAssetUrl("/assets/js/base_bootstrap.min_3.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "f692472"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f692472") : $this->env->getExtension('assets')->getAssetUrl("/assets/js/base.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 29
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <div class=\"navbar\">
            <div class=\"navbar-inner\">
                <a class=\"brand\" href=\"#\">Scruno</a>
                <ul class=\"nav\">
                    <li class=\"active\"><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home"), "html", null, true);
        echo "\">Home</a></li>
                    <li><a href=\"#\">Link</a></li>
                    <li><a href=\"#\">Link</a></li>
                </ul>

                ";
        // line 43
        $this->displayBlock('topnav', $context, $blocks);
        // line 44
        echo "            </div>
        </div>


        ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Scruno";
    }

    // line 29
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 43
    public function block_topnav($context, array $blocks = array())
    {
    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ScrunoBoardBundle:Template:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 49,  170 => 48,  165 => 43,  154 => 5,  148 => 50,  145 => 49,  143 => 48,  137 => 44,  135 => 43,  127 => 38,  115 => 30,  112 => 29,  82 => 21,  79 => 20,  41 => 18,  37 => 9,  30 => 5,  24 => 1,  160 => 29,  156 => 70,  147 => 64,  141 => 61,  133 => 58,  123 => 55,  117 => 52,  114 => 51,  108 => 47,  106 => 46,  98 => 41,  92 => 38,  86 => 27,  77 => 31,  65 => 22,  59 => 21,  53 => 17,  50 => 13,  42 => 8,  36 => 7,  32 => 5,  29 => 4,);
    }
}
