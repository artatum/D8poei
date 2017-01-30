<?php

/* core/modules/system/templates/block--system-messages-block.html.twig */
class __TwigTemplate_56cf24c39ed9c85ca8fa6b4072327b7f7280c0946c866b590a4a36c2216d0f28 extends Twig_Template
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
        $__internal_755e1a0668d67ba245bf45e5426de9a9c6aab0431f58cfe455617da832aeba41 = $this->env->getExtension("native_profiler");
        $__internal_755e1a0668d67ba245bf45e5426de9a9c6aab0431f58cfe455617da832aeba41->enter($__internal_755e1a0668d67ba245bf45e5426de9a9c6aab0431f58cfe455617da832aeba41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/modules/system/templates/block--system-messages-block.html.twig"));

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

        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
";
        
        $__internal_755e1a0668d67ba245bf45e5426de9a9c6aab0431f58cfe455617da832aeba41->leave($__internal_755e1a0668d67ba245bf45e5426de9a9c6aab0431f58cfe455617da832aeba41_prof);

    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/block--system-messages-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for the messages block.*/
/*  **/
/*  * Removes wrapper elements from block so that empty block does not appear when*/
/*  * there are no messages.*/
/*  **/
/*  * Available variables:*/
/*  * - content: The content of this block.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {{ content }}*/
/* */
