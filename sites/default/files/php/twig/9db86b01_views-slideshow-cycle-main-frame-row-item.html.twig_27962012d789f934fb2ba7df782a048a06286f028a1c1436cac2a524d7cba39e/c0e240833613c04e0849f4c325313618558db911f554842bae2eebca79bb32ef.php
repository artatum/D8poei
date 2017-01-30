<?php

/* modules/contrib/views_slideshow/modules/views_slideshow_cycle/templates/views-slideshow-cycle-main-frame-row-item.html.twig */
class __TwigTemplate_b94f93b9805f8b0c57778e50065fb4eaf0f11d473d6f4fc4c6694e804fb9604f extends Twig_Template
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
        $__internal_9ebac25624ddedf8b6a5ae0ba941e1d53a4efc458e0d15b60bd0dec231c12503 = $this->env->getExtension("native_profiler");
        $__internal_9ebac25624ddedf8b6a5ae0ba941e1d53a4efc458e0d15b60bd0dec231c12503->enter($__internal_9ebac25624ddedf8b6a5ae0ba941e1d53a4efc458e0d15b60bd0dec231c12503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/views_slideshow/modules/views_slideshow_cycle/templates/views-slideshow-cycle-main-frame-row-item.html.twig"));

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

        // line 19
        echo "<div ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["item"]) ? $context["item"] : null), "html", null, true));
        echo "
</div>
";
        
        $__internal_9ebac25624ddedf8b6a5ae0ba941e1d53a4efc458e0d15b60bd0dec231c12503->leave($__internal_9ebac25624ddedf8b6a5ae0ba941e1d53a4efc458e0d15b60bd0dec231c12503_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/views_slideshow/modules/views_slideshow_cycle/templates/views-slideshow-cycle-main-frame-row-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 20,  46 => 19,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for an item on a views slideshow cycle slide.*/
/*  **/
/*  * Available variables:*/
/*  * - classes: Classes to apply to the element.*/
/*  * - count: The slide number.*/
/*  * - item: Rendeder field(s) making up item.*/
/*  * - item_count: nth item on slide.*/
/*  * - length: Total number of slides.*/
/*  * - view: The view.*/
/*  **/
/*  * @see template_preprocess_views_slideshow_cycle_main_frame_row_item()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <div {{ attributes.addClass(classes) }}>*/
/*   {{ item }}*/
/* </div>*/
/* */
