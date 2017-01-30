<?php

/* themes/contrib/bootstrap/templates/system/region.html.twig */
class __TwigTemplate_796ab821083023bb4299e5a9e27b5740a848a07174968866217f3ff844d037b4 extends Twig_Template
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
        $__internal_a69de58eb120f4b16e26db7744f20ed8ef2cbf11e7bab23830af350e7705f22a = $this->env->getExtension("native_profiler");
        $__internal_a69de58eb120f4b16e26db7744f20ed8ef2cbf11e7bab23830af350e7705f22a->enter($__internal_a69de58eb120f4b16e26db7744f20ed8ef2cbf11e7bab23830af350e7705f22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/contrib/bootstrap/templates/system/region.html.twig"));

        $tags = array("set" => 18, "if" => 23);
        $filters = array("clean_class" => 20);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class'),
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
        $context["classes"] = array(0 => "region", 1 => ("region-" . \Drupal\Component\Utility\Html::getClass(        // line 20
(isset($context["region"]) ? $context["region"] : null))));
        // line 23
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 24
            echo "  <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
    ";
            // line 25
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
  </div>
";
        }
        
        $__internal_a69de58eb120f4b16e26db7744f20ed8ef2cbf11e7bab23830af350e7705f22a->leave($__internal_a69de58eb120f4b16e26db7744f20ed8ef2cbf11e7bab23830af350e7705f22a_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/system/region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 25,  51 => 24,  49 => 23,  47 => 20,  46 => 18,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a region.*/
/*  **/
/*  * Available variables:*/
/*  * - content: The content for this region, typically blocks.*/
/*  * - attributes: HTML attributes for the region div.*/
/*  * - region: The name of the region variable as defined in the theme's*/
/*  *   .info.yml file.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_region()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'region',*/
/*     'region-' ~ region|clean_class,*/
/*   ]*/
/* %}*/
/* {% if content %}*/
/*   <div{{ attributes.addClass(classes) }}>*/
/*     {{ content }}*/
/*   </div>*/
/* {% endif %}*/
/* */
