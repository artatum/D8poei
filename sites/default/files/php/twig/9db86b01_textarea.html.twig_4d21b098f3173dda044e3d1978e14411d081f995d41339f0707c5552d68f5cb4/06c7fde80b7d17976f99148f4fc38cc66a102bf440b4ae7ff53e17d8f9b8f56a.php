<?php

/* core/themes/classy/templates/form/textarea.html.twig */
class __TwigTemplate_b818fd0bcfdc56d6e2a4e17786bb4ed492595ccfdc920292776c1dfc37068cd3 extends Twig_Template
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
        $__internal_d29925c112a73806cd7eaa1c7b8d6074460b2208ead5a723cc76be91cfca4ef3 = $this->env->getExtension("native_profiler");
        $__internal_d29925c112a73806cd7eaa1c7b8d6074460b2208ead5a723cc76be91cfca4ef3->enter($__internal_d29925c112a73806cd7eaa1c7b8d6074460b2208ead5a723cc76be91cfca4ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/form/textarea.html.twig"));

        $tags = array("set" => 17);
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

        // line 17
        $context["classes"] = array(0 => "form-textarea", 1 => ((        // line 19
(isset($context["resizable"]) ? $context["resizable"] : null)) ? (("resize-" . (isset($context["resizable"]) ? $context["resizable"] : null))) : ("")), 2 => ((        // line 20
(isset($context["required"]) ? $context["required"] : null)) ? ("required") : ("")));
        // line 23
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["wrapper_attributes"]) ? $context["wrapper_attributes"] : null), "addClass", array(0 => "form-textarea-wrapper"), "method"), "html", null, true));
        echo ">
  <textarea";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true));
        echo "</textarea>
</div>
";
        
        $__internal_d29925c112a73806cd7eaa1c7b8d6074460b2208ead5a723cc76be91cfca4ef3->leave($__internal_d29925c112a73806cd7eaa1c7b8d6074460b2208ead5a723cc76be91cfca4ef3_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/textarea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 24,  50 => 23,  48 => 20,  47 => 19,  46 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a 'textarea' #type form element.*/
/*  **/
/*  * Available variables*/
/*  * - wrapper_attributes: A list of HTML attributes for the wrapper element.*/
/*  * - attributes: A list of HTML attributes for the <textarea> element.*/
/*  * - resizable: An indicator for whether the textarea is resizable.*/
/*  * - required: An indicator for whether the textarea is required.*/
/*  * - value: The textarea content.*/
/*  **/
/*  * @see template_preprocess_textarea()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'form-textarea',*/
/*     resizable ? 'resize-' ~ resizable,*/
/*     required ? 'required',*/
/*   ]*/
/* %}*/
/* <div{{ wrapper_attributes.addClass('form-textarea-wrapper') }}>*/
/*   <textarea{{ attributes.addClass(classes) }}>{{ value }}</textarea>*/
/* </div>*/
/* */
