<?php

/* core/themes/classy/templates/block/block--local-tasks-block.html.twig */
class __TwigTemplate_ccdc361469f73a75b60cb243634fabc2cbf54f7284c351f2efd9b3c5a59bad1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "core/themes/classy/templates/block/block--local-tasks-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86926b10115b0c0666a5cf5ce076259a7d36fdc59e8b36d58df755c0e2d74ddf = $this->env->getExtension("native_profiler");
        $__internal_86926b10115b0c0666a5cf5ce076259a7d36fdc59e8b36d58df755c0e2d74ddf->enter($__internal_86926b10115b0c0666a5cf5ce076259a7d36fdc59e8b36d58df755c0e2d74ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/block/block--local-tasks-block.html.twig"));

        $tags = array("if" => 9);
        $filters = array("t" => 10);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86926b10115b0c0666a5cf5ce076259a7d36fdc59e8b36d58df755c0e2d74ddf->leave($__internal_86926b10115b0c0666a5cf5ce076259a7d36fdc59e8b36d58df755c0e2d74ddf_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_c2f6648ae9344c24aa58e61a6426f8b5edce4fdbcbbac240b2d3f4543227c211 = $this->env->getExtension("native_profiler");
        $__internal_c2f6648ae9344c24aa58e61a6426f8b5edce4fdbcbbac240b2d3f4543227c211->enter($__internal_c2f6648ae9344c24aa58e61a6426f8b5edce4fdbcbbac240b2d3f4543227c211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "  ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 10
            echo "    <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Tabs")));
            echo "\">
      ";
            // line 11
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
    </nav>
  ";
        }
        
        $__internal_c2f6648ae9344c24aa58e61a6426f8b5edce4fdbcbbac240b2d3f4543227c211->leave($__internal_c2f6648ae9344c24aa58e61a6426f8b5edce4fdbcbbac240b2d3f4543227c211_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/block/block--local-tasks-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  67 => 10,  64 => 9,  58 => 8,  11 => 1,);
    }
}
/* {% extends "block.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for tabs.*/
/*  *//* */
/* #}*/
/* {% block content %}*/
/*   {% if content %}*/
/*     <nav class="tabs" role="navigation" aria-label="{{ 'Tabs'|t }}">*/
/*       {{ content }}*/
/*     </nav>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
