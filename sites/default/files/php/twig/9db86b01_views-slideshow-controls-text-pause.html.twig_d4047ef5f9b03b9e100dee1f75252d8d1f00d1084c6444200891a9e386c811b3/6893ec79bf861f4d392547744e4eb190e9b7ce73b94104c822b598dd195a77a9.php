<?php

/* modules/contrib/views_slideshow/templates/views-slideshow-controls-text-pause.html.twig */
class __TwigTemplate_976f77da063306c6f003b215b65643f731637515d9514df8f6d9f9c935321743 extends Twig_Template
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
        $__internal_845a0742819e27b84af4cbc540a334c81c9536237400e47d7df3d9760a03078e = $this->env->getExtension("native_profiler");
        $__internal_845a0742819e27b84af4cbc540a334c81c9536237400e47d7df3d9760a03078e->enter($__internal_845a0742819e27b84af4cbc540a334c81c9536237400e47d7df3d9760a03078e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/views_slideshow/templates/views-slideshow-controls-text-pause.html.twig"));

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

        // line 16
        echo "<span id=\"views_slideshow_controls_text_pause_";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["vss_id"]) ? $context["vss_id"] : null), "html", null, true));
        echo "\" ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  <a href=\"#\">";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["start_text"]) ? $context["start_text"] : null), "html", null, true));
        echo "</a>
</span>
";
        
        $__internal_845a0742819e27b84af4cbc540a334c81c9536237400e47d7df3d9760a03078e->leave($__internal_845a0742819e27b84af4cbc540a334c81c9536237400e47d7df3d9760a03078e_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/views_slideshow/templates/views-slideshow-controls-text-pause.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 17,  46 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a views slideshow text pause control.*/
/*  **/
/*  * Available variables:*/
/*  * - classes: Classes to apply to the control.*/
/*  * - start_text: Text to display while playing.*/
/*  * - vss_id: The slideshow's id.*/
/*  **/
/*  * @see template_preprocess_views_slideshow_controls_text_pause()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <span id="views_slideshow_controls_text_pause_{{ vss_id }}" {{ attributes.addClass(classes) }}>*/
/*   <a href="#">{{ start_text }}</a>*/
/* </span>*/
/* */
