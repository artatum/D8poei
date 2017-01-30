<?php

/* modules/contrib/views_slideshow/templates/views-slideshow-controls-text-next.html.twig */
class __TwigTemplate_5c3259fede1591e48c6cae54f9cfa1a7fb083898ba207cac3caeb3c56efd7627 extends Twig_Template
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
        $__internal_f2e12244d1235cdb062c87bc39751d8dcf4fa6040e2a736eb3aa1471f8fe29ad = $this->env->getExtension("native_profiler");
        $__internal_f2e12244d1235cdb062c87bc39751d8dcf4fa6040e2a736eb3aa1471f8fe29ad->enter($__internal_f2e12244d1235cdb062c87bc39751d8dcf4fa6040e2a736eb3aa1471f8fe29ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/views_slideshow/templates/views-slideshow-controls-text-next.html.twig"));

        $tags = array();
        $filters = array("t" => 16);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 15
        echo "<span id=\"views_slideshow_controls_text_next_";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["vss_id"]) ? $context["vss_id"] : null), "html", null, true));
        echo "\" ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  <a href=\"#\">";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Next")));
        echo "</a>
</span>
";
        
        $__internal_f2e12244d1235cdb062c87bc39751d8dcf4fa6040e2a736eb3aa1471f8fe29ad->leave($__internal_f2e12244d1235cdb062c87bc39751d8dcf4fa6040e2a736eb3aa1471f8fe29ad_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/views_slideshow/templates/views-slideshow-controls-text-next.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 16,  46 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a views slideshow text next control.*/
/*  **/
/*  * Available variables:*/
/*  * - classes: Classes to apply to the control.*/
/*  * - vss_id: The slideshow's id.*/
/*  **/
/*  * @see template_preprocess_views_slideshow_controls_text_next()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <span id="views_slideshow_controls_text_next_{{ vss_id }}" {{ attributes.addClass(classes) }}>*/
/*   <a href="#">{{ 'Next'|t }}</a>*/
/* </span>*/
/* */
