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

/* core/themes/stable/templates/admin/update-project-status.html.twig */
class __TwigTemplate_fd5bccaaa9711d050a6a8bce345a98966012d1496c6232bb402d38bc40f6a228 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 29
        $context["status_classes"] = [0 => ((($this->getAttribute(        // line 30
($context["project"] ?? null), "status", []) == twig_constant("Drupal\\update\\UpdateManagerInterface::NOT_SECURE"))) ? ("project-update__status--security-error") : ("")), 1 => ((($this->getAttribute(        // line 31
($context["project"] ?? null), "status", []) == twig_constant("Drupal\\update\\UpdateManagerInterface::REVOKED"))) ? ("project-update__status--revoked") : ("")), 2 => ((($this->getAttribute(        // line 32
($context["project"] ?? null), "status", []) == twig_constant("Drupal\\update\\UpdateManagerInterface::NOT_SUPPORTED"))) ? ("project-update__status--not-supported") : ("")), 3 => ((($this->getAttribute(        // line 33
($context["project"] ?? null), "status", []) == twig_constant("Drupal\\update\\UpdateManagerInterface::NOT_CURRENT"))) ? ("project-update__status--not-current") : ("")), 4 => ((($this->getAttribute(        // line 34
($context["project"] ?? null), "status", []) == twig_constant("Drupal\\update\\UpdateManagerInterface::CURRENT"))) ? ("project-update__status--current") : (""))];
        // line 37
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["status"] ?? null), "attributes", []), "addClass", [0 => "project-update__status", 1 => ($context["status_classes"] ?? null)], "method")), "html", null, true);
        echo ">";
        // line 38
        if ($this->getAttribute(($context["status"] ?? null), "label", [])) {
            // line 39
            echo "<span>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status"] ?? null), "label", [])), "html", null, true);
            echo "</span>";
        } else {
            // line 41
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status"] ?? null), "reason", [])), "html", null, true);
        }
        // line 43
        echo "  <span class=\"project-update__status-icon\">
    ";
        // line 44
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status"] ?? null), "icon", [])), "html", null, true);
        echo "
  </span>
</div>

<div class=\"project-update__title\">";
        // line 49
        if (($context["url"] ?? null)) {
            // line 50
            echo "<a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</a>";
        } else {
            // line 52
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        }
        // line 54
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["existing_version"] ?? null)), "html", null, true);
        echo "
  ";
        // line 55
        if (((($context["install_type"] ?? null) == "dev") && ($context["datestamp"] ?? null))) {
            // line 56
            echo "    <span class=\"project-update__version-date\">(";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["datestamp"] ?? null)), "html", null, true);
            echo ")</span>
  ";
        }
        // line 58
        echo "</div>

";
        // line 60
        if (($context["versions"] ?? null)) {
            // line 61
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["versions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                // line 62
                echo "    ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["version"]), "html", null, true);
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 65
        echo "
";
        // line 67
        $context["extra_classes"] = [0 => ((($this->getAttribute(        // line 68
($context["project"] ?? null), "status", []) == twig_constant("Drupal\\update\\UpdateManagerInterface::NOT_SECURE"))) ? ("project-not-secure") : ("")), 1 => ((($this->getAttribute(        // line 69
($context["project"] ?? null), "status", []) == twig_constant("Drupal\\update\\UpdateManagerInterface::REVOKED"))) ? ("project-revoked") : ("")), 2 => ((($this->getAttribute(        // line 70
($context["project"] ?? null), "status", []) == twig_constant("Drupal\\update\\UpdateManagerInterface::NOT_SUPPORTED"))) ? ("project-not-supported") : (""))];
        // line 73
        echo "<div class=\"project-updates__details\">
  ";
        // line 74
        if (($context["extras"] ?? null)) {
            // line 75
            echo "    <div class=\"extra\">
      ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["extras"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                // line 77
                echo "        <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["extra"], "attributes", []), "addClass", [0 => ($context["extra_classes"] ?? null)], "method")), "html", null, true);
                echo ">
          ";
                // line 78
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["extra"], "label", [])), "html", null, true);
                echo ": ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["extra"], "data", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "    </div>
  ";
        }
        // line 83
        echo "  ";
        $context["includes"] = twig_join_filter($this->sandbox->ensureToStringAllowed(($context["includes"] ?? null)), ", ");
        // line 84
        echo "  ";
        if (($context["disabled"] ?? null)) {
            // line 85
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Includes:"));
            echo "
    <ul>
      <li>
        ";
            // line 88
            echo t("Enabled: %includes", array("%includes" =>             // line 89
($context["includes"] ?? null), ));
            // line 91
            echo "      </li>
      <li>
        ";
            // line 93
            $context["disabled"] = twig_join_filter($this->sandbox->ensureToStringAllowed(($context["disabled"] ?? null)), ", ");
            // line 94
            echo "        ";
            echo t("Disabled: %disabled", array("%disabled" =>             // line 95
($context["disabled"] ?? null), ));
            // line 97
            echo "      </li>
    </ul>
  ";
        } else {
            // line 100
            echo "    ";
            echo t("Includes: %includes", array("%includes" =>             // line 101
($context["includes"] ?? null), ));
            // line 103
            echo "  ";
        }
        // line 104
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/update-project-status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 104,  184 => 103,  182 => 101,  180 => 100,  175 => 97,  173 => 95,  171 => 94,  169 => 93,  165 => 91,  163 => 89,  162 => 88,  155 => 85,  152 => 84,  149 => 83,  145 => 81,  134 => 78,  129 => 77,  125 => 76,  122 => 75,  120 => 74,  117 => 73,  115 => 70,  114 => 69,  113 => 68,  112 => 67,  109 => 65,  99 => 62,  94 => 61,  92 => 60,  88 => 58,  82 => 56,  80 => 55,  75 => 54,  72 => 52,  65 => 50,  63 => 49,  56 => 44,  53 => 43,  50 => 41,  45 => 39,  43 => 38,  39 => 37,  37 => 34,  36 => 33,  35 => 32,  34 => 31,  33 => 30,  32 => 29,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/stable/templates/admin/update-project-status.html.twig", "/var/www/drupal/web/core/themes/stable/templates/admin/update-project-status.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 29, "if" => 38, "for" => 61, "trans" => 88];
        static $filters = ["escape" => 37, "join" => 83, "t" => 85, "placeholder" => 89];
        static $functions = ["constant" => 30];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'trans'],
                ['escape', 'join', 't', 'placeholder'],
                ['constant']
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
