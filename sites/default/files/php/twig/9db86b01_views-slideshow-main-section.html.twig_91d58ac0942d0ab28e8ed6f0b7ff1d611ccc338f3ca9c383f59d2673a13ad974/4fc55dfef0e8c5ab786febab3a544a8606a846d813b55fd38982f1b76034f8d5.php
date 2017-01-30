<?php

/* modules/contrib/views_slideshow/templates/views-slideshow-main-section.html.twig */
class __TwigTemplate_8e293783a125948c7e08d9e0b2c7d9de7408f1c2fc0a5cb20f1f9ed1558bde25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a8fbe315a7bbbb00974600da73176798fa56c25a802e24043e7a2e00a8c760d = $this->env->getExtension("native_profiler");
        $__internal_9a8fbe315a7bbbb00974600da73176798fa56c25a802e24043e7a2e00a8c760d->enter($__internal_9a8fbe315a7bbbb00974600da73176798fa56c25a802e24043e7a2e00a8c760d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/views_slideshow/templates/views-slideshow-main-section.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
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

        // line 14
        echo "<div id=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["plugin"]) ? $context["plugin"] : null), "html", null, true));
        echo "_main_";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["vss_id"]) ? $context["vss_id"] : null), "html", null, true));
        echo "\" class=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["plugin"]) ? $context["plugin"] : null), "html", null, true));
        echo "_main views_slideshow_main\">
    ";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["slides"]) ? $context["slides"] : null), "html", null, true));
        echo "
</div>
";
        
        $__internal_9a8fbe315a7bbbb00974600da73176798fa56c25a802e24043e7a2e00a8c760d->leave($__internal_9a8fbe315a7bbbb00974600da73176798fa56c25a802e24043e7a2e00a8c760d_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/views_slideshow/templates/views-slideshow-main-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  46 => 14,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a views slideshow pager item.*/
/*  **/
/*  * Available variables:*/
/*  * - plugin: The main frame slideshow plugin.*/
/*  * - slides: The slides.*/
/*  * - vss_id: The slideshow's id.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <div id="{{ plugin }}_main_{{ vss_id }}" class="{{ plugin }}_main views_slideshow_main">*/
/*     {{ slides }}*/
/* </div>*/
/* */
