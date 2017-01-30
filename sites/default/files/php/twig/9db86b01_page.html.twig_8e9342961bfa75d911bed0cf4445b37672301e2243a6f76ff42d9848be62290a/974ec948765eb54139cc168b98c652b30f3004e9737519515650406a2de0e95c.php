<?php

/* themes/custom/mybootstrap/templates/system/page.html.twig */
class __TwigTemplate_c25cf6aab0d827239d3ea14b5574baf7e62ad013df43462b2010562bd2de11e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5655277490e62ebe2bc6f7c6d02575d456ae117d015a147ca4f6d6f1cc0762dd = $this->env->getExtension("native_profiler");
        $__internal_5655277490e62ebe2bc6f7c6d02575d456ae117d015a147ca4f6d6f1cc0762dd->enter($__internal_5655277490e62ebe2bc6f7c6d02575d456ae117d015a147ca4f6d6f1cc0762dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/custom/mybootstrap/templates/system/page.html.twig"));

        $tags = array("set" => 59, "if" => 61, "block" => 62);
        $filters = array("clean_class" => 67, "t" => 79);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
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

        // line 59
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 61
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 62
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 99
        echo "
";
        // line 101
        $this->displayBlock('main', $context, $blocks);
        // line 180
        echo "
";
        // line 181
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 182
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
        
        $__internal_5655277490e62ebe2bc6f7c6d02575d456ae117d015a147ca4f6d6f1cc0762dd->leave($__internal_5655277490e62ebe2bc6f7c6d02575d456ae117d015a147ca4f6d6f1cc0762dd_prof);

    }

    // line 62
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_2bc276228041ee4f0f91763296739eef462e23daf0a10d41963251c88fba8457 = $this->env->getExtension("native_profiler");
        $__internal_2bc276228041ee4f0f91763296739eef462e23daf0a10d41963251c88fba8457->enter($__internal_2bc276228041ee4f0f91763296739eef462e23daf0a10d41963251c88fba8457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 63
        echo "    ";
        // line 64
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 66
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 67
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 70
        echo "    <header";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 71
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => "container"), "method")) {
            // line 72
            echo "        <div class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
            echo "\">
      ";
        }
        // line 74
        echo "      <div class=\"navbar-header\">
        ";
        // line 75
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 77
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 78
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 79
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 85
        echo "      </div>

      ";
        // line 88
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 89
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 90
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 93
        echo "      ";
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => "container"), "method")) {
            // line 94
            echo "        </div>
      ";
        }
        // line 96
        echo "    </header>
  ";
        
        $__internal_2bc276228041ee4f0f91763296739eef462e23daf0a10d41963251c88fba8457->leave($__internal_2bc276228041ee4f0f91763296739eef462e23daf0a10d41963251c88fba8457_prof);

    }

    // line 101
    public function block_main($context, array $blocks = array())
    {
        $__internal_28860b81ad80169d1b61a723ccc8ee1d10a40ba12841b62c0ec211837fc20921 = $this->env->getExtension("native_profiler");
        $__internal_28860b81ad80169d1b61a723ccc8ee1d10a40ba12841b62c0ec211837fc20921->enter($__internal_28860b81ad80169d1b61a723ccc8ee1d10a40ba12841b62c0ec211837fc20921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 102
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 106
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 107
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 112
            echo "      ";
        }
        // line 113
        echo "
      ";
        // line 115
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 116
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 121
            echo "      ";
        }
        // line 122
        echo "
      ";
        // line 124
        echo "      ";
        // line 125
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 126
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 127
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 128
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 129
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 132
        echo "      <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

        ";
        // line 135
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 136
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 139
            echo "        ";
        }
        // line 140
        echo "
        ";
        // line 142
        echo "        ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 143
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 146
            echo "        ";
        }
        // line 147
        echo "
        ";
        // line 149
        echo "        ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 150
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 153
            echo "        ";
        }
        // line 154
        echo "
        ";
        // line 156
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 157
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 160
            echo "        ";
        }
        // line 161
        echo "
        ";
        // line 163
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 167
        echo "      </section>

      ";
        // line 170
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 171
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 176
            echo "      ";
        }
        // line 177
        echo "    </div>
  </div>
";
        
        $__internal_28860b81ad80169d1b61a723ccc8ee1d10a40ba12841b62c0ec211837fc20921->leave($__internal_28860b81ad80169d1b61a723ccc8ee1d10a40ba12841b62c0ec211837fc20921_prof);

    }

    // line 107
    public function block_header($context, array $blocks = array())
    {
        $__internal_30527dc577e136a96152cab6d51bc6b30bcfda248d1a2ee70bc0278a8f7aef04 = $this->env->getExtension("native_profiler");
        $__internal_30527dc577e136a96152cab6d51bc6b30bcfda248d1a2ee70bc0278a8f7aef04->enter($__internal_30527dc577e136a96152cab6d51bc6b30bcfda248d1a2ee70bc0278a8f7aef04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 108
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 109
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
        
        $__internal_30527dc577e136a96152cab6d51bc6b30bcfda248d1a2ee70bc0278a8f7aef04->leave($__internal_30527dc577e136a96152cab6d51bc6b30bcfda248d1a2ee70bc0278a8f7aef04_prof);

    }

    // line 116
    public function block_sidebar_first($context, array $blocks = array())
    {
        $__internal_2dbbd0249d16e9fcbd0a223cbd861dbf16f7c1da664babd9864e3185aacb868b = $this->env->getExtension("native_profiler");
        $__internal_2dbbd0249d16e9fcbd0a223cbd861dbf16f7c1da664babd9864e3185aacb868b->enter($__internal_2dbbd0249d16e9fcbd0a223cbd861dbf16f7c1da664babd9864e3185aacb868b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_first"));

        // line 117
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 118
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
        
        $__internal_2dbbd0249d16e9fcbd0a223cbd861dbf16f7c1da664babd9864e3185aacb868b->leave($__internal_2dbbd0249d16e9fcbd0a223cbd861dbf16f7c1da664babd9864e3185aacb868b_prof);

    }

    // line 136
    public function block_highlighted($context, array $blocks = array())
    {
        $__internal_85b09909c4f337f65af5b8e28d51ad0747147dc3cdfc4a917df71b7f0be68912 = $this->env->getExtension("native_profiler");
        $__internal_85b09909c4f337f65af5b8e28d51ad0747147dc3cdfc4a917df71b7f0be68912->enter($__internal_85b09909c4f337f65af5b8e28d51ad0747147dc3cdfc4a917df71b7f0be68912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "highlighted"));

        // line 137
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
        
        $__internal_85b09909c4f337f65af5b8e28d51ad0747147dc3cdfc4a917df71b7f0be68912->leave($__internal_85b09909c4f337f65af5b8e28d51ad0747147dc3cdfc4a917df71b7f0be68912_prof);

    }

    // line 143
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_d73462c97bf09f029dc2d6a16bf828856b963521c8b0fbe6aed166916ed79ff0 = $this->env->getExtension("native_profiler");
        $__internal_d73462c97bf09f029dc2d6a16bf828856b963521c8b0fbe6aed166916ed79ff0->enter($__internal_d73462c97bf09f029dc2d6a16bf828856b963521c8b0fbe6aed166916ed79ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 144
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
          ";
        
        $__internal_d73462c97bf09f029dc2d6a16bf828856b963521c8b0fbe6aed166916ed79ff0->leave($__internal_d73462c97bf09f029dc2d6a16bf828856b963521c8b0fbe6aed166916ed79ff0_prof);

    }

    // line 150
    public function block_action_links($context, array $blocks = array())
    {
        $__internal_96747db0fe77657d5a1c226b186aa7153e88f8ca12b4370fbeaa8cd3a6856c79 = $this->env->getExtension("native_profiler");
        $__internal_96747db0fe77657d5a1c226b186aa7153e88f8ca12b4370fbeaa8cd3a6856c79->enter($__internal_96747db0fe77657d5a1c226b186aa7153e88f8ca12b4370fbeaa8cd3a6856c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "action_links"));

        // line 151
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
          ";
        
        $__internal_96747db0fe77657d5a1c226b186aa7153e88f8ca12b4370fbeaa8cd3a6856c79->leave($__internal_96747db0fe77657d5a1c226b186aa7153e88f8ca12b4370fbeaa8cd3a6856c79_prof);

    }

    // line 157
    public function block_help($context, array $blocks = array())
    {
        $__internal_14598ce82430c8449c02157c1e1da8f5e9c64771045da15361200e87762b4915 = $this->env->getExtension("native_profiler");
        $__internal_14598ce82430c8449c02157c1e1da8f5e9c64771045da15361200e87762b4915->enter($__internal_14598ce82430c8449c02157c1e1da8f5e9c64771045da15361200e87762b4915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        // line 158
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
          ";
        
        $__internal_14598ce82430c8449c02157c1e1da8f5e9c64771045da15361200e87762b4915->leave($__internal_14598ce82430c8449c02157c1e1da8f5e9c64771045da15361200e87762b4915_prof);

    }

    // line 163
    public function block_content($context, array $blocks = array())
    {
        $__internal_cca7f3f4d3e7372c7d9511356b6e16ea58659f71932b8d599a14f2a103101413 = $this->env->getExtension("native_profiler");
        $__internal_cca7f3f4d3e7372c7d9511356b6e16ea58659f71932b8d599a14f2a103101413->enter($__internal_cca7f3f4d3e7372c7d9511356b6e16ea58659f71932b8d599a14f2a103101413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 164
        echo "          <a id=\"main-content\"></a>
          ";
        // line 165
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        ";
        
        $__internal_cca7f3f4d3e7372c7d9511356b6e16ea58659f71932b8d599a14f2a103101413->leave($__internal_cca7f3f4d3e7372c7d9511356b6e16ea58659f71932b8d599a14f2a103101413_prof);

    }

    // line 171
    public function block_sidebar_second($context, array $blocks = array())
    {
        $__internal_19913ca434e574f0c7257e16f8e9e9b3c6e7b00ac446050bba7ee659debbc3ca = $this->env->getExtension("native_profiler");
        $__internal_19913ca434e574f0c7257e16f8e9e9b3c6e7b00ac446050bba7ee659debbc3ca->enter($__internal_19913ca434e574f0c7257e16f8e9e9b3c6e7b00ac446050bba7ee659debbc3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_second"));

        // line 172
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 173
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
        
        $__internal_19913ca434e574f0c7257e16f8e9e9b3c6e7b00ac446050bba7ee659debbc3ca->leave($__internal_19913ca434e574f0c7257e16f8e9e9b3c6e7b00ac446050bba7ee659debbc3ca_prof);

    }

    // line 182
    public function block_footer($context, array $blocks = array())
    {
        $__internal_813b195e4814395069f1f24ca5fa0901a519fe8ef043f6b810f9822c9f50bd95 = $this->env->getExtension("native_profiler");
        $__internal_813b195e4814395069f1f24ca5fa0901a519fe8ef043f6b810f9822c9f50bd95->enter($__internal_813b195e4814395069f1f24ca5fa0901a519fe8ef043f6b810f9822c9f50bd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 183
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 184
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
        
        $__internal_813b195e4814395069f1f24ca5fa0901a519fe8ef043f6b810f9822c9f50bd95->leave($__internal_813b195e4814395069f1f24ca5fa0901a519fe8ef043f6b810f9822c9f50bd95_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/mybootstrap/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 184,  431 => 183,  425 => 182,  415 => 173,  412 => 172,  406 => 171,  397 => 165,  394 => 164,  388 => 163,  378 => 158,  372 => 157,  362 => 151,  356 => 150,  346 => 144,  340 => 143,  330 => 137,  324 => 136,  314 => 118,  311 => 117,  305 => 116,  295 => 109,  292 => 108,  286 => 107,  277 => 177,  274 => 176,  271 => 171,  268 => 170,  264 => 167,  261 => 163,  258 => 161,  255 => 160,  252 => 157,  249 => 156,  246 => 154,  243 => 153,  240 => 150,  237 => 149,  234 => 147,  231 => 146,  228 => 143,  225 => 142,  222 => 140,  219 => 139,  216 => 136,  213 => 135,  207 => 132,  205 => 129,  204 => 128,  203 => 127,  202 => 126,  201 => 125,  199 => 124,  196 => 122,  193 => 121,  190 => 116,  187 => 115,  184 => 113,  181 => 112,  178 => 107,  175 => 106,  168 => 102,  162 => 101,  154 => 96,  150 => 94,  147 => 93,  141 => 90,  138 => 89,  135 => 88,  131 => 85,  122 => 79,  119 => 78,  116 => 77,  112 => 75,  109 => 74,  103 => 72,  101 => 71,  96 => 70,  94 => 67,  93 => 66,  92 => 64,  90 => 63,  84 => 62,  75 => 182,  73 => 181,  70 => 180,  68 => 101,  65 => 99,  61 => 62,  59 => 61,  57 => 59,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  **/
/*  * Navigation:*/
/*  * - breadcrumb: The breadcrumb trail for the current page.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title: The page title, for use in the actual content.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the*/
/*  *   view and edit tabs when displaying a node).*/
/*  * - action_links: Actions local to the page, such as "Add menu" on the menu*/
/*  *   administration interface.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.navigation: Items for the navigation region.*/
/*  * - page.navigation_collapsible: Items for the navigation (collapsible) region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.footer: Items for the footer region.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* {% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}*/
/* {# Navbar #}*/
/* {% if page.navigation or page.navigation_collapsible %}*/
/*   {% block navbar %}*/
/*     {%*/
/*       set navbar_classes = [*/
/*         'navbar',*/
/*         theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',*/
/*         theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,*/
/*       ]*/
/*     %}*/
/*     <header{{ navbar_attributes.addClass(navbar_classes) }} id="navbar" role="banner">*/
/*       {% if not navbar_attributes.hasClass('container') %}*/
/*         <div class="{{ container }}">*/
/*       {% endif %}*/
/*       <div class="navbar-header">*/
/*         {{ page.navigation }}*/
/*         {# .btn-navbar is used as the toggle for collapsed navbar content #}*/
/*         {% if page.navigation_collapsible %}*/
/*           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">*/
/*             <span class="sr-only">{{ 'Toggle navigation'|t }}</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*           </button>*/
/*         {% endif %}*/
/*       </div>*/
/* */
/*       {# Navigation (collapsible) #}*/
/*       {% if page.navigation_collapsible %}*/
/*         <div id="navbar-collapse" class="navbar-collapse collapse">*/
/*           {{ page.navigation_collapsible }}*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if not navbar_attributes.hasClass('container') %}*/
/*         </div>*/
/*       {% endif %}*/
/*     </header>*/
/*   {% endblock %}*/
/* {% endif %}*/
/* */
/* {# Main #}*/
/* {% block main %}*/
/*   <div role="main" class="main-container {{ container }} js-quickedit-main-content">*/
/*     <div class="row">*/
/* */
/*       {# Header #}*/
/*       {% if page.header %}*/
/*         {% block header %}*/
/*           <div class="col-sm-12" role="heading">*/
/*             {{ page.header }}*/
/*           </div>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* */
/*       {# Sidebar First #}*/
/*       {% if page.sidebar_first %}*/
/*         {% block sidebar_first %}*/
/*           <aside class="col-sm-3" role="complementary">*/
/*             {{ page.sidebar_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* */
/*       {# Content #}*/
/*       {%*/
/*         set content_classes = [*/
/*           page.sidebar_first and page.sidebar_second ? 'col-sm-6',*/
/*           page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',*/
/*           page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',*/
/*           page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'*/
/*         ]*/
/*       %}*/
/*       <section{{ content_attributes.addClass(content_classes) }}>*/
/* */
/*         {# Highlighted #}*/
/*         {% if page.highlighted %}*/
/*           {% block highlighted %}*/
/*             <div class="highlighted">{{ page.highlighted }}</div>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Breadcrumbs #}*/
/*         {% if breadcrumb %}*/
/*           {% block breadcrumb %}*/
/*             {{ breadcrumb }}*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Action Links #}*/
/*         {% if action_links %}*/
/*           {% block action_links %}*/
/*             <ul class="action-links">{{ action_links }}</ul>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Help #}*/
/*         {% if page.help %}*/
/*           {% block help %}*/
/*             {{ page.help }}*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Content #}*/
/*         {% block content %}*/
/*           <a id="main-content"></a>*/
/*           {{ page.content }}*/
/*         {% endblock %}*/
/*       </section>*/
/* */
/*       {# Sidebar Second #}*/
/*       {% if page.sidebar_second %}*/
/*         {% block sidebar_second %}*/
/*           <aside class="col-sm-3" role="complementary">*/
/*             {{ page.sidebar_second }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
/* {% if page.footer %}*/
/*   {% block footer %}*/
/*     <footer class="footer {{ container }}" role="contentinfo">*/
/*       {{ page.footer }}*/
/*     </footer>*/
/*   {% endblock %}*/
/* {% endif %}*/
/* */
