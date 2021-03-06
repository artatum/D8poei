<?php

/* themes/contrib/bootstrap/templates/system/image.html.twig */
class __TwigTemplate_56c08dbbdbdb4e654b0e8bee246f805cadc37907ab00ea06c47868384f30499d extends Twig_Template
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
        $__internal_0402b65e88f8d5fdd37ae5927747c5caeb0b66b6a92325ded039e58413d9c704 = $this->env->getExtension("native_profiler");
        $__internal_0402b65e88f8d5fdd37ae5927747c5caeb0b66b6a92325ded039e58413d9c704->enter($__internal_0402b65e88f8d5fdd37ae5927747c5caeb0b66b6a92325ded039e58413d9c704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/contrib/bootstrap/templates/system/image.html.twig"));

        $tags = array("set" => 15);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
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

        // line 15
        $context["classes"] = array(0 => (($this->getAttribute($this->getAttribute(        // line 16
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "image_shape", array())) ? ($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "image_shape", array())) : ("")), 1 => (($this->getAttribute($this->getAttribute(        // line 17
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "image_responsive", array())) ? ("img-responsive") : ("")));
        // line 19
        echo "<img";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo " />
";
        
        $__internal_0402b65e88f8d5fdd37ae5927747c5caeb0b66b6a92325ded039e58413d9c704->leave($__internal_0402b65e88f8d5fdd37ae5927747c5caeb0b66b6a92325ded039e58413d9c704_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/system/image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 19,  48 => 17,  47 => 16,  46 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation of an image.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the img tag.*/
/*  * - style_name: (optional) The name of the image style applied.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_image()*/
/*  *//* */
/* #}*/
/* {% set classes = [*/
/*   theme.settings.image_shape ? theme.settings.image_shape,*/
/*   theme.settings.image_responsive ? 'img-responsive',*/
/* ] %}*/
/* <img{{ attributes.addClass(classes) }} />*/
/* */
