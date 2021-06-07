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

/* input.html.twig */
class __TwigTemplate_24cb4fff7560880150275d339d3bb63bb45e60705093b539d234978f178231e1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 22
        ob_start(function () { return ''; });
        // line 23
        echo "  ";
        if (($context["input_group"] ?? null)) {
            // line 24
            echo "    <div class=\"input-group\">
  ";
        }
        // line 26
        echo "
  ";
        // line 27
        if (($context["prefix"] ?? null)) {
            // line 28
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 30
        echo "
  ";
        // line 31
        $this->displayBlock('input', $context, $blocks);
        // line 34
        echo "
  ";
        // line 35
        if (($context["suffix"] ?? null)) {
            // line 36
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 38
        echo "
  ";
        // line 39
        if (($context["input_group"] ?? null)) {
            // line 40
            echo "    </div>
  ";
        }
        // line 42
        echo "
  ";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 31
    public function block_input($context, array $blocks = [])
    {
        // line 32
        echo "    <input";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo " />
  ";
    }

    public function getTemplateName()
    {
        return "input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 32,  88 => 31,  81 => 43,  78 => 42,  74 => 40,  72 => 39,  69 => 38,  63 => 36,  61 => 35,  58 => 34,  56 => 31,  53 => 30,  47 => 28,  45 => 27,  42 => 26,  38 => 24,  35 => 23,  33 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "input.html.twig", "themes/contrib/bootstrap/templates/input/input.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["spaceless" => 22, "if" => 23, "block" => 31];
        static $filters = ["escape" => 28];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'if', 'block'],
                ['escape'],
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
