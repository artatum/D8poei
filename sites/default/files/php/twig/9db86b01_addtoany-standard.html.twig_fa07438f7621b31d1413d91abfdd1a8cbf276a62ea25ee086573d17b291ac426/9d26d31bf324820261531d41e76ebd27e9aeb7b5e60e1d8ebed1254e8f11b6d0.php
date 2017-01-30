<?php

/* modules/contrib/addtoany/templates/addtoany-standard.html.twig */
class __TwigTemplate_f2ef01b9dd7f41b8d93e864303b6862423b05292eae561a35485f22ebfecad6e extends Twig_Template
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
        $__internal_b82d9f195c9369b6dbcd8608b4426e718c332a0a85a55671c6e412f33771d20d = $this->env->getExtension("native_profiler");
        $__internal_b82d9f195c9369b6dbcd8608b4426e718c332a0a85a55671c6e412f33771d20d->enter($__internal_b82d9f195c9369b6dbcd8608b4426e718c332a0a85a55671c6e412f33771d20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/addtoany/templates/addtoany-standard.html.twig"));

        $tags = array();
        $filters = array("raw" => 12);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('raw'),
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

        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["addtoany_html"]) ? $context["addtoany_html"] : null)));
        echo "
";
        
        $__internal_b82d9f195c9369b6dbcd8608b4426e718c332a0a85a55671c6e412f33771d20d->leave($__internal_b82d9f195c9369b6dbcd8608b4426e718c332a0a85a55671c6e412f33771d20d_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/addtoany/templates/addtoany-standard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 12,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to standard AddToAny buttons.*/
/*  **/
/*  * Available variables:*/
/*  * - addtoany_html: HTML for AddToAny buttons.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {{ addtoany_html|raw }}*/
/* */
