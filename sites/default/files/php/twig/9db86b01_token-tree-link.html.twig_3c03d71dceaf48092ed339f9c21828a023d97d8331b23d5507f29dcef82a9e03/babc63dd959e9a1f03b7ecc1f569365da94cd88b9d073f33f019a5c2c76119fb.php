<?php

/* modules/contrib/token/templates/token-tree-link.html.twig */
class __TwigTemplate_ab02e22ebbcfefa99ebad96c5b57f9a5526f2521bd290fbd0de88aa14c717c5b extends Twig_Template
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
        $__internal_ae08f7c93e64491a0687638799399d83f2c7b0e85ee81cd461a3f65830dd2dd6 = $this->env->getExtension("native_profiler");
        $__internal_ae08f7c93e64491a0687638799399d83f2c7b0e85ee81cd461a3f65830dd2dd6->enter($__internal_ae08f7c93e64491a0687638799399d83f2c7b0e85ee81cd461a3f65830dd2dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/token/templates/token-tree-link.html.twig"));

        $tags = array("if" => 17);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 17
        if ((isset($context["link"]) ? $context["link"] : null)) {
            // line 18
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true));
        }
        
        $__internal_ae08f7c93e64491a0687638799399d83f2c7b0e85ee81cd461a3f65830dd2dd6->leave($__internal_ae08f7c93e64491a0687638799399d83f2c7b0e85ee81cd461a3f65830dd2dd6_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/token/templates/token-tree-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  46 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for the token tree link.*/
/*  **/
/*  * Available variables:*/
/*  * - url: The URL to the token tree page.*/
/*  * - text: The text to be displayed in the link.*/
/*  * - attributes: Attributes for the anchor tag.*/
/*  * - link: The complete link.*/
/*  **/
/*  * @see template_preprocess_token_tree_link()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if link -%}*/
/*   {{ link }}*/
/* {%- endif %}*/
/* */
