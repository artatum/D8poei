<?php

/* core/themes/classy/templates/field/image-style.html.twig */
class __TwigTemplate_89c6282ed0c5997b527ee272fc617dcbb64308204d5e14a4cceb5fa3c37fea97 extends Twig_Template
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
        $__internal_f4c883bed8bea56fefa954f2aebb02107ff786e8efc14706f83566a2588583d8 = $this->env->getExtension("native_profiler");
        $__internal_f4c883bed8bea56fefa954f2aebb02107ff786e8efc14706f83566a2588583d8->enter($__internal_f4c883bed8bea56fefa954f2aebb02107ff786e8efc14706f83566a2588583d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/field/image-style.html.twig"));

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

        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true));
        echo "
";
        
        $__internal_f4c883bed8bea56fefa954f2aebb02107ff786e8efc14706f83566a2588583d8->leave($__internal_f4c883bed8bea56fefa954f2aebb02107ff786e8efc14706f83566a2588583d8_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/field/image-style.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 18,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for an image using a specific image style.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the image, including the following:*/
/*  *   - src: Full URL or relative path to the image file.*/
/*  *   - class: One or more classes to be applied to the image.*/
/*  *   - width: The width of the image (if known).*/
/*  *   - height: The height of the image (if known).*/
/*  *   - title: The title of the image.*/
/*  *   - alt: The alternative text for the image.*/
/*  **/
/*  * @see template_preprocess_image_style()*/
/*  *//* */
/* #}*/
/* {{ image }}*/
/* */
