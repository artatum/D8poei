<?php

/* themes/contrib/bootstrap/templates/views/views-view-table.html.twig */
class __TwigTemplate_732ba830901b2eb84be3931832a6ad69684ce3c76301e565584ecf82134b255c extends Twig_Template
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
        $__internal_b8fc325f743871ef6962ed2882b3385a4f79a2a4810888120370b8681fbe1bad = $this->env->getExtension("native_profiler");
        $__internal_b8fc325f743871ef6962ed2882b3385a4f79a2a4810888120370b8681fbe1bad->enter($__internal_b8fc325f743871ef6962ed2882b3385a4f79a2a4810888120370b8681fbe1bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/contrib/bootstrap/templates/views/views-view-table.html.twig"));

        $tags = array("if" => 30, "set" => 33, "for" => 64);
        $filters = array("merge" => 101);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set', 'for'),
                array('merge'),
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

        // line 30
        if ((isset($context["responsive"]) ? $context["responsive"] : null)) {
            // line 31
            echo "  <div class=\"table-responsive\">
";
        }
        // line 33
        $context["classes"] = array(0 => "table", 1 => ((( !twig_test_empty($this->getAttribute(        // line 35
(isset($context["context"]) ? $context["context"] : null), "bordered", array())) || $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "table_bordered", array()))) ? ("table-bordered") : ("")), 2 => ((( !twig_test_empty($this->getAttribute(        // line 36
(isset($context["context"]) ? $context["context"] : null), "condensed", array())) || $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "table_condensed", array()))) ? ("table-condensed") : ("")), 3 => ((( !twig_test_empty($this->getAttribute(        // line 37
(isset($context["context"]) ? $context["context"] : null), "hover", array())) || $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "table_hover", array()))) ? ("table-hover") : ("")), 4 => ((( !twig_test_empty($this->getAttribute(        // line 38
(isset($context["context"]) ? $context["context"] : null), "striped", array())) || $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "table_striped", array()))) ? ("table-striped") : ("")), 5 => ((        // line 39
(isset($context["sticky"]) ? $context["sticky"] : null)) ? ("sticky-enabled") : ("")));
        // line 41
        echo "<table";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 42
        if ((isset($context["caption_needed"]) ? $context["caption_needed"] : null)) {
            // line 43
            echo "    <caption>
      ";
            // line 44
            if ((isset($context["caption"]) ? $context["caption"] : null)) {
                // line 45
                echo "        ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["caption"]) ? $context["caption"] : null), "html", null, true));
                echo "
      ";
            } else {
                // line 47
                echo "        ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
                echo "
      ";
            }
            // line 49
            echo "      ";
            if (( !twig_test_empty((isset($context["summary"]) ? $context["summary"] : null)) ||  !twig_test_empty((isset($context["description"]) ? $context["description"] : null)))) {
                // line 50
                echo "        <details>
          ";
                // line 51
                if ( !twig_test_empty((isset($context["summary"]) ? $context["summary"] : null))) {
                    // line 52
                    echo "            <summary>";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["summary"]) ? $context["summary"] : null), "html", null, true));
                    echo "</summary>
          ";
                }
                // line 54
                echo "          ";
                if ( !twig_test_empty((isset($context["description"]) ? $context["description"] : null))) {
                    // line 55
                    echo "            ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true));
                    echo "
          ";
                }
                // line 57
                echo "        </details>
      ";
            }
            // line 59
            echo "    </caption>
  ";
        }
        // line 61
        echo "  ";
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 62
            echo "    <thead>
    <tr>
      ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["header"]) ? $context["header"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 65
                echo "        ";
                if ($this->getAttribute($context["column"], "default_classes", array())) {
                    // line 66
                    echo "          ";
                    // line 67
                    $context["column_classes"] = array(0 => "views-field", 1 => ("views-field-" . $this->getAttribute(                    // line 69
(isset($context["fields"]) ? $context["fields"] : null), $context["key"], array(), "array")));
                    // line 72
                    echo "        ";
                }
                // line 73
                echo "      <th";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["column"], "attributes", array()), "addClass", array(0 => (isset($context["column_classes"]) ? $context["column_classes"] : null)), "method"), "setAttribute", array(0 => "scope", 1 => "col"), "method"), "html", null, true));
                echo ">";
                // line 74
                if ($this->getAttribute($context["column"], "wrapper_element", array())) {
                    // line 75
                    echo "<";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "wrapper_element", array()), "html", null, true));
                    echo ">";
                    // line 76
                    if ($this->getAttribute($context["column"], "url", array())) {
                        // line 77
                        echo "<a href=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "url", array()), "html", null, true));
                        echo "\" title=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "title", array()), "html", null, true));
                        echo "\">";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true));
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "sort_indicator", array()), "html", null, true));
                        echo "</a>";
                    } else {
                        // line 79
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true));
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "sort_indicator", array()), "html", null, true));
                    }
                    // line 81
                    echo "</";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "wrapper_element", array()), "html", null, true));
                    echo ">";
                } else {
                    // line 83
                    if ($this->getAttribute($context["column"], "url", array())) {
                        // line 84
                        echo "<a href=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "url", array()), "html", null, true));
                        echo "\" title=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "title", array()), "html", null, true));
                        echo "\">";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true));
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "sort_indicator", array()), "html", null, true));
                        echo "</a>";
                    } else {
                        // line 86
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true));
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "sort_indicator", array()), "html", null, true));
                    }
                }
                // line 89
                echo "</th>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "    </tr>
    </thead>
  ";
        }
        // line 94
        echo "  <tbody>
  ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 96
            echo "    <tr";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true));
            echo ">
      ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "columns", array()));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 98
                echo "        ";
                if ($this->getAttribute($context["column"], "default_classes", array())) {
                    // line 99
                    echo "          ";
                    $context["column_classes"] = array(0 => "views-field");
                    // line 100
                    echo "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "fields", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 101
                        echo "            ";
                        $context["column_classes"] = twig_array_merge((isset($context["column_classes"]) ? $context["column_classes"] : null), array(0 => ("views-field-" . $context["field"])));
                        // line 102
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 103
                    echo "        ";
                }
                // line 104
                echo "      <td";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["column"], "attributes", array()), "addClass", array(0 => (isset($context["column_classes"]) ? $context["column_classes"] : null)), "method"), "html", null, true));
                echo ">";
                // line 105
                if ($this->getAttribute($context["column"], "wrapper_element", array())) {
                    // line 106
                    echo "<";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "wrapper_element", array()), "html", null, true));
                    echo ">
          ";
                    // line 107
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "content", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 108
                        echo "            ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["content"], "separator", array()), "html", null, true));
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["content"], "field_output", array()), "html", null, true));
                        echo "
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 110
                    echo "          </";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "wrapper_element", array()), "html", null, true));
                    echo ">";
                } else {
                    // line 112
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "content", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 113
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["content"], "separator", array()), "html", null, true));
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["content"], "field_output", array()), "html", null, true));
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 116
                echo "        </td>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "  </tbody>
</table>
";
        // line 122
        if ((isset($context["responsive"]) ? $context["responsive"] : null)) {
            // line 123
            echo "  </div>
";
        }
        
        $__internal_b8fc325f743871ef6962ed2882b3385a4f79a2a4810888120370b8681fbe1bad->leave($__internal_b8fc325f743871ef6962ed2882b3385a4f79a2a4810888120370b8681fbe1bad_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/views/views-view-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 123,  295 => 122,  291 => 120,  284 => 118,  277 => 116,  269 => 113,  265 => 112,  260 => 110,  250 => 108,  246 => 107,  241 => 106,  239 => 105,  235 => 104,  232 => 103,  226 => 102,  223 => 101,  218 => 100,  215 => 99,  212 => 98,  208 => 97,  203 => 96,  199 => 95,  196 => 94,  191 => 91,  184 => 89,  179 => 86,  169 => 84,  167 => 83,  162 => 81,  158 => 79,  148 => 77,  146 => 76,  142 => 75,  140 => 74,  136 => 73,  133 => 72,  131 => 69,  130 => 67,  128 => 66,  125 => 65,  121 => 64,  117 => 62,  114 => 61,  110 => 59,  106 => 57,  100 => 55,  97 => 54,  91 => 52,  89 => 51,  86 => 50,  83 => 49,  77 => 47,  71 => 45,  69 => 44,  66 => 43,  64 => 42,  59 => 41,  57 => 39,  56 => 38,  55 => 37,  54 => 36,  53 => 35,  52 => 33,  48 => 31,  46 => 30,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for displaying a view as a table.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: Remaining HTML attributes for the element.*/
/*  *   - class: HTML classes that can be used to style contextually through CSS.*/
/*  * - title : The title of this group of rows.*/
/*  * - header: The table header columns.*/
/*  *   - attributes: Remaining HTML attributes for the element.*/
/*  *   - content: HTML classes to apply to each header cell, indexed by*/
/*  *   the header's key.*/
/*  * - caption_needed: Is the caption tag needed.*/
/*  * - caption: The caption for this table.*/
/*  * - accessibility_description: Extended description for the table details.*/
/*  * - accessibility_summary: Summary for the table details.*/
/*  * - responsive: Whether or not to use the .table-responsive wrapper.*/
/*  * - rows: Table row items. Rows are keyed by row number.*/
/*  *   - attributes: HTML classes to apply to each row.*/
/*  *   - columns: Row column items. Columns are keyed by column number.*/
/*  *     - attributes: HTML classes to apply to each column.*/
/*  *     - content: The column content.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_views_view_table()*/
/*  *//* */
/* #}*/
/* {% if responsive %}*/
/*   <div class="table-responsive">*/
/* {% endif %}*/
/* {% set classes = [*/
/*   'table',*/
/*   context.bordered is not empty or theme.settings.table_bordered ? 'table-bordered',*/
/*   context.condensed is not empty or theme.settings.table_condensed ? 'table-condensed',*/
/*   context.hover is not empty or theme.settings.table_hover ? 'table-hover',*/
/*   context.striped is not empty or theme.settings.table_striped ? 'table-striped',*/
/*   sticky ? 'sticky-enabled',*/
/* ] %}*/
/* <table{{ attributes.addClass(classes) }}>*/
/*   {% if caption_needed %}*/
/*     <caption>*/
/*       {% if caption %}*/
/*         {{ caption }}*/
/*       {% else %}*/
/*         {{ title }}*/
/*       {% endif %}*/
/*       {% if (summary is not empty) or (description is not empty) %}*/
/*         <details>*/
/*           {% if summary is not empty %}*/
/*             <summary>{{ summary }}</summary>*/
/*           {% endif %}*/
/*           {% if description is not empty %}*/
/*             {{ description }}*/
/*           {% endif %}*/
/*         </details>*/
/*       {% endif %}*/
/*     </caption>*/
/*   {% endif %}*/
/*   {% if header %}*/
/*     <thead>*/
/*     <tr>*/
/*       {% for key, column in header %}*/
/*         {% if column.default_classes %}*/
/*           {%*/
/*           set column_classes = [*/
/*           'views-field',*/
/*           'views-field-' ~ fields[key],*/
/*           ]*/
/*           %}*/
/*         {% endif %}*/
/*       <th{{ column.attributes.addClass(column_classes).setAttribute('scope', 'col') }}>*/
/*         {%- if column.wrapper_element -%}*/
/*           <{{ column.wrapper_element }}>*/
/*           {%- if column.url -%}*/
/*             <a href="{{ column.url }}" title="{{ column.title }}">{{ column.content }}{{ column.sort_indicator }}</a>*/
/*           {%- else -%}*/
/*             {{ column.content }}{{ column.sort_indicator }}*/
/*           {%- endif -%}*/
/*           </{{ column.wrapper_element }}>*/
/*         {%- else -%}*/
/*           {%- if column.url -%}*/
/*             <a href="{{ column.url }}" title="{{ column.title }}">{{ column.content }}{{ column.sort_indicator }}</a>*/
/*           {%- else -%}*/
/*             {{- column.content }}{{ column.sort_indicator }}*/
/*           {%- endif -%}*/
/*         {%- endif -%}*/
/*         </th>*/
/*       {% endfor %}*/
/*     </tr>*/
/*     </thead>*/
/*   {% endif %}*/
/*   <tbody>*/
/*   {% for row in rows %}*/
/*     <tr{{ row.attributes }}>*/
/*       {% for key, column in row.columns %}*/
/*         {% if column.default_classes %}*/
/*           {% set column_classes = [ 'views-field' ] %}*/
/*           {% for field in column.fields %}*/
/*             {% set column_classes = column_classes|merge(['views-field-' ~ field]) %}*/
/*           {% endfor %}*/
/*         {% endif %}*/
/*       <td{{ column.attributes.addClass(column_classes) }}>*/
/*         {%- if column.wrapper_element -%}*/
/*           <{{ column.wrapper_element }}>*/
/*           {% for content in column.content %}*/
/*             {{ content.separator }}{{ content.field_output }}*/
/*           {% endfor %}*/
/*           </{{ column.wrapper_element }}>*/
/*         {%- else -%}*/
/*           {% for content in column.content %}*/
/*             {{- content.separator }}{{ content.field_output -}}*/
/*           {% endfor %}*/
/*         {%- endif %}*/
/*         </td>*/
/*       {% endfor %}*/
/*     </tr>*/
/*   {% endfor %}*/
/*   </tbody>*/
/* </table>*/
/* {% if responsive %}*/
/*   </div>*/
/* {% endif %}*/
/* */
