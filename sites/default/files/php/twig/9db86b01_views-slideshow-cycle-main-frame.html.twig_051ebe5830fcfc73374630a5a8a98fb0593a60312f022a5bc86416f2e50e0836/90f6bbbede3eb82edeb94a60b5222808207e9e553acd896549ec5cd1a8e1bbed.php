<?php

/* modules/contrib/views_slideshow/modules/views_slideshow_cycle/templates/views-slideshow-cycle-main-frame.html.twig */
class __TwigTemplate_2916282f3060903881631ecab441deb7ea7884f97b82d21acf063c0d0afac0f2 extends Twig_Template
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
        $__internal_3ea132e95ddd7e956dbbf3ebeae3b655582c90db071ee26bb83becbda679fa36 = $this->env->getExtension("native_profiler");
        $__internal_3ea132e95ddd7e956dbbf3ebeae3b655582c90db071ee26bb83becbda679fa36->enter($__internal_3ea132e95ddd7e956dbbf3ebeae3b655582c90db071ee26bb83becbda679fa36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/views_slideshow/modules/views_slideshow_cycle/templates/views-slideshow-cycle-main-frame.html.twig"));

        $tags = array("for" => 17);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for'),
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
        echo "<div id=\"views_slideshow_cycle_teaser_section_";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["vss_id"]) ? $context["vss_id"] : null), "html", null, true));
        echo "\" ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rendered_rows"]) ? $context["rendered_rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["rendered_row"]) {
            // line 18
            echo "   ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["rendered_row"], "html", null, true));
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rendered_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</div>
";
        
        $__internal_3ea132e95ddd7e956dbbf3ebeae3b655582c90db071ee26bb83becbda679fa36->leave($__internal_3ea132e95ddd7e956dbbf3ebeae3b655582c90db071ee26bb83becbda679fa36_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/views_slideshow/modules/views_slideshow_cycle/templates/views-slideshow-cycle-main-frame.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 20,  57 => 18,  53 => 17,  46 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for an views slideshow cycle main frame.*/
/*  **/
/*  * Available variables:*/
/*  * - classes: Classes to apply to the element.*/
/*  * - rendered_rows: The slides.*/
/*  * - vss_id: The slideshow id.*/
/*  **/
/*  * @see template_preprocess_views_slideshow_cycle_main_frame()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <div id="views_slideshow_cycle_teaser_section_{{ vss_id }}" {{ attributes.addClass(classes) }}>*/
/*   {% for rendered_row in rendered_rows %}*/
/*    {{ rendered_row }}*/
/*   {% endfor %}*/
/* </div>*/
/* */
