<?php

/* modules/contrib/views_slideshow/templates/views-view-slideshow.html.twig */
class __TwigTemplate_bca33ebfbba6ff6611e06ad7f5fceb7ba7d85a1e98ada151a2441d87e664d679 extends Twig_Template
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
        $__internal_fcda8d82c22c38b05e0cca7044896c4cebed8219bf49b4f2bdf6bb2e9c77d16d = $this->env->getExtension("native_profiler");
        $__internal_fcda8d82c22c38b05e0cca7044896c4cebed8219bf49b4f2bdf6bb2e9c77d16d->enter($__internal_fcda8d82c22c38b05e0cca7044896c4cebed8219bf49b4f2bdf6bb2e9c77d16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/views_slideshow/templates/views-view-slideshow.html.twig"));

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
        if ((isset($context["slideshow"]) ? $context["slideshow"] : null)) {
            // line 18
            echo "  <div class=\"skin-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["skin"]) ? $context["skin"] : null), "html", null, true));
            echo "\">
    ";
            // line 19
            if ((isset($context["top_widget_rendered"]) ? $context["top_widget_rendered"] : null)) {
                // line 20
                echo "      <div class=\"views-slideshow-controls-top clearfix\">
        ";
                // line 21
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["top_widget_rendered"]) ? $context["top_widget_rendered"] : null), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 24
            echo "
    ";
            // line 25
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["slideshow"]) ? $context["slideshow"] : null), "html", null, true));
            echo "

    ";
            // line 27
            if ((isset($context["bottom_widget_rendered"]) ? $context["bottom_widget_rendered"] : null)) {
                // line 28
                echo "      <div class=\"views-slideshow-controls-bottom clearfix\">
        ";
                // line 29
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_widget_rendered"]) ? $context["bottom_widget_rendered"] : null), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 32
            echo "    </div>
";
        }
        
        $__internal_fcda8d82c22c38b05e0cca7044896c4cebed8219bf49b4f2bdf6bb2e9c77d16d->leave($__internal_fcda8d82c22c38b05e0cca7044896c4cebed8219bf49b4f2bdf6bb2e9c77d16d_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/views_slideshow/templates/views-view-slideshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 32,  77 => 29,  74 => 28,  72 => 27,  67 => 25,  64 => 24,  58 => 21,  55 => 20,  53 => 19,  48 => 18,  46 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a views slideshow.*/
/*  **/
/*  * Available variables:*/
/*  * - bottom_widget_rendered: Widget under the slideshow with controls/data.*/
/*  * - skin: The skin being applied to the slideshow.*/
/*  * - slideshow: The slideshow.*/
/*  * - top_widget_rendered: Widget above the slideshow with controls/data.*/
/*  **/
/*  * @see _views_slideshow_preprocess_views_view_slideshow()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if slideshow %}*/
/*   <div class="skin-{{ skin }}">*/
/*     {% if top_widget_rendered %}*/
/*       <div class="views-slideshow-controls-top clearfix">*/
/*         {{ top_widget_rendered }}*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     {{ slideshow }}*/
/* */
/*     {% if bottom_widget_rendered %}*/
/*       <div class="views-slideshow-controls-bottom clearfix">*/
/*         {{ bottom_widget_rendered }}*/
/*       </div>*/
/*     {% endif %}*/
/*     </div>*/
/* {% endif %}*/
/* */
