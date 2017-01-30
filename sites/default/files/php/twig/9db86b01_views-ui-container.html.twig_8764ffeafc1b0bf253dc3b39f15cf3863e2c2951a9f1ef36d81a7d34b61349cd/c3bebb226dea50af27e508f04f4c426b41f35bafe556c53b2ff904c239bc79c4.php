<?php

/* core/themes/stable/templates/admin/views-ui-container.html.twig */
class __TwigTemplate_e37a863c82c5a819bb7c06c9cf7cbcd076379f981f7203058bf50475becfcb78 extends Twig_Template
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
        $__internal_d857e3e44ab1140e7ef7ecdbcc1ed459c33afe7b71d97007c2d66a1ca48ea37a = $this->env->getExtension("native_profiler");
        $__internal_d857e3e44ab1140e7ef7ecdbcc1ed459c33afe7b71d97007c2d66a1ca48ea37a->enter($__internal_d857e3e44ab1140e7ef7ecdbcc1ed459c33afe7b71d97007c2d66a1ca48ea37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/views-ui-container.html.twig"));

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

        // line 11
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "</div>
";
        
        $__internal_d857e3e44ab1140e7ef7ecdbcc1ed459c33afe7b71d97007c2d66a1ca48ea37a->leave($__internal_d857e3e44ab1140e7ef7ecdbcc1ed459c33afe7b71d97007c2d66a1ca48ea37a_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/views-ui-container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a generic views UI container/wrapper.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes to apply to the container element.*/
/*  * - children: The remaining elements such as dropbuttons and tabs.*/
/*  *//* */
/* #}*/
/* <div{{ attributes }}>{{ children }}</div>*/
/* */
