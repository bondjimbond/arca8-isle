<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/solid/templates/system/page.html.twig */
class __TwigTemplate_e202d0887fb12a8d92bba47ac1d0f287a52fd6588bacca555e4514a2d46ada23 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'header' => [$this, 'block_header'],
            'banner' => [$this, 'block_banner'],
            'main' => [$this, 'block_main'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar' => [$this, 'block_sidebar'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 58
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 60
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", []))) {
            // line 61
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 94
        echo "
";
        // line 96
        if ( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "header", [])), "div,p,table,span,a")))) {
            // line 97
            echo "  <div id=\"header\">
    <div class=\"";
            // line 98
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">
      <div class=\"row\">
        ";
            // line 100
            $this->displayBlock('header', $context, $blocks);
            // line 105
            echo "      </div>
    </div>
  </div>
";
        }
        // line 109
        echo "
";
        // line 111
        if ( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "banner", [])), "div,p,table,span,a")))) {
            // line 112
            echo "  <div id=\"banner\">
    ";
            // line 113
            $this->displayBlock('banner', $context, $blocks);
            // line 116
            echo "  </div>
";
        }
        // line 118
        echo "
";
        // line 120
        $this->displayBlock('main', $context, $blocks);
        // line 169
        echo "
";
        // line 170
        if ( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "footer", [])), "div,p,table,span,a")))) {
            // line 171
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 61
    public function block_navbar($context, array $blocks = [])
    {
        // line 62
        echo "    ";
        // line 63
        $context["navbar_classes"] = [0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 65
($context["theme"] ?? null), "settings", []), "navbar_inverse", [])) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 66
($context["theme"] ?? null), "settings", []), "navbar_position", [])) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "navbar_position", []))))) : (($context["container"] ?? null)))];
        // line 69
        echo "    <header";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method")), "html", null, true);
        echo " id=\"navbar\" role=\"navigation\">
      <div class=\"";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">
        <div class=\"navbar-header\">
          ";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
        echo "
          ";
        // line 74
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 75
            echo "            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
              <span class=\"sr-only\">";
            // line 76
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation"));
            echo "</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
          ";
        }
        // line 82
        echo "        </div>

        ";
        // line 85
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 86
            echo "          <div class=\"navbar-collapse collapse navbar-right\">
            ";
            // line 87
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 90
        echo "      </div>
    </header>
  ";
    }

    // line 100
    public function block_header($context, array $blocks = [])
    {
        // line 101
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 102
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 113
    public function block_banner($context, array $blocks = [])
    {
        // line 114
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "banner", [])), "html", null, true);
        echo "
    ";
    }

    // line 120
    public function block_main($context, array $blocks = [])
    {
        // line 121
        echo "  <div id=\"main\" role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " js-quickedit-main-content\">
    <div class=\"row\">
      ";
        // line 124
        echo "      ";
        // line 125
        $context["content_classes"] = [0 => (($this->getAttribute(        // line 126
($context["page"] ?? null), "sidebar", [])) ? ("col-md-8") : ("col-xs-12"))];
        // line 129
        echo "      <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">
        ";
        // line 131
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 132
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 135
            echo "        ";
        }
        // line 136
        echo "
        ";
        // line 138
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 139
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 142
            echo "        ";
        }
        // line 143
        echo "
        ";
        // line 145
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 146
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 149
            echo "        ";
        }
        // line 150
        echo "
        ";
        // line 152
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 156
        echo "      </section>

      ";
        // line 159
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar", [])) {
            // line 160
            echo "        ";
            $this->displayBlock('sidebar', $context, $blocks);
            // line 165
            echo "      ";
        }
        // line 166
        echo "    </div>
  </div>
";
    }

    // line 132
    public function block_breadcrumb($context, array $blocks = [])
    {
        // line 133
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null)), "html", null, true);
        echo "
          ";
    }

    // line 139
    public function block_action_links($context, array $blocks = [])
    {
        // line 140
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null)), "html", null, true);
        echo "</ul>
          ";
    }

    // line 146
    public function block_help($context, array $blocks = [])
    {
        // line 147
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 152
    public function block_content($context, array $blocks = [])
    {
        // line 153
        echo "          <a id=\"main-content\"></a>
          ";
        // line 154
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        ";
    }

    // line 160
    public function block_sidebar($context, array $blocks = [])
    {
        // line 161
        echo "          <aside class=\"col-md-4\" role=\"complementary\">
            ";
        // line 162
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 171
    public function block_footer($context, array $blocks = [])
    {
        // line 172
        echo "    <footer id=\"footer\" class=\"footer\" role=\"contentinfo\">
      <div class=\"";
        // line 173
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">
        ";
        // line 174
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
      </div>
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/solid/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 174,  322 => 173,  319 => 172,  316 => 171,  309 => 162,  306 => 161,  303 => 160,  297 => 154,  294 => 153,  291 => 152,  284 => 147,  281 => 146,  274 => 140,  271 => 139,  264 => 133,  261 => 132,  255 => 166,  252 => 165,  249 => 160,  246 => 159,  242 => 156,  239 => 152,  236 => 150,  233 => 149,  230 => 146,  227 => 145,  224 => 143,  221 => 142,  218 => 139,  215 => 138,  212 => 136,  209 => 135,  206 => 132,  203 => 131,  198 => 129,  196 => 126,  195 => 125,  193 => 124,  187 => 121,  184 => 120,  177 => 114,  174 => 113,  167 => 102,  164 => 101,  161 => 100,  155 => 90,  149 => 87,  146 => 86,  143 => 85,  139 => 82,  130 => 76,  127 => 75,  124 => 74,  120 => 72,  115 => 70,  110 => 69,  108 => 66,  107 => 65,  106 => 63,  104 => 62,  101 => 61,  95 => 171,  93 => 170,  90 => 169,  88 => 120,  85 => 118,  81 => 116,  79 => 113,  76 => 112,  74 => 111,  71 => 109,  65 => 105,  63 => 100,  58 => 98,  55 => 97,  53 => 96,  50 => 94,  46 => 61,  44 => 60,  42 => 58,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/solid/templates/system/page.html.twig", "/var/www/drupal/web/themes/contrib/solid/templates/system/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 58, "if" => 60, "block" => 61];
        static $filters = ["trim" => 96, "striptags" => 96, "render" => 96, "escape" => 98, "clean_class" => 66, "t" => 76];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['trim', 'striptags', 'render', 'escape', 'clean_class', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
