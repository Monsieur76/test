<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/belgrade/templates/form/fieldset--accordion.html.twig */
class __TwigTemplate_082b0241e0daac812bd2c63ece0cfe9dadf83a7f97f23bf18ec677cdfa631d81 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $context["classes"] = [0 => "js-form-item", 1 => "form-item", 2 => "js-form-wrapper", 3 => "form-wrapper", 4 => "accordion", 5 => "accordion-flush", 6 => "my-2"];
        // line 35
        echo "
<div";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 36), 36, $this->source), "html", null, true);
        echo ">
  <fieldset class=\"accordion-item\">
    ";
        // line 39
        $context["legend_span_classes"] = [0 => "fieldset-legend", 1 => ((        // line 41
($context["required"] ?? null)) ? ("js-form-required") : ("")), 2 => ((        // line 42
($context["required"] ?? null)) ? ("form-required") : ("")), 3 => "accordion-button", 4 => "border-bottom"];
        // line 47
        echo "    ";
        // line 48
        echo "    <legend";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["legend"] ?? null), "attributes", [], "any", false, false, true, 48), "addClass", [0 => "accordion-header"], "method", false, false, true, 48), 48, $this->source), "html", null, true);
        echo ">
      <span";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["legend_span"] ?? null), "attributes", [], "any", false, false, true, 49), "addClass", [0 => ($context["legend_span_classes"] ?? null)], "method", false, false, true, 49), 49, $this->source), "html", null, true);
        echo " type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 49), 49, $this->source) . "-item"), "html", null, true);
        echo "\" aria-expanded=\"true\" aria-controls=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["legend"] ?? null), "title", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "</span>
    </legend>
    <div class=\"collapse show\" id=\"";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 51), 51, $this->source) . "-item"), "html", null, true);
        echo "\">
      <div class=\"accordion-body fieldset-wrapper\">
        ";
        // line 53
        if (($context["errors"] ?? null)) {
            // line 54
            echo "          <div>
            ";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 55, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 58
        echo "        ";
        if (($context["prefix"] ?? null)) {
            // line 59
            echo "          <span class=\"field-prefix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 59, $this->source), "html", null, true);
            echo "</span>
        ";
        }
        // line 61
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 61, $this->source), "html", null, true);
        echo "
        ";
        // line 62
        if (($context["suffix"] ?? null)) {
            // line 63
            echo "          <span class=\"field-suffix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 63, $this->source), "html", null, true);
            echo "</span>
        ";
        }
        // line 65
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 65)) {
            // line 66
            echo "          <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 66), "addClass", [0 => "description"], "method", false, false, true, 66), 66, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
            echo "</div>
        ";
        }
        // line 68
        echo "      </div>
    </div>
  </fieldset>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/form/fieldset--accordion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 68,  112 => 66,  109 => 65,  103 => 63,  101 => 62,  96 => 61,  90 => 59,  87 => 58,  81 => 55,  78 => 54,  76 => 53,  71 => 51,  60 => 49,  55 => 48,  53 => 47,  51 => 42,  50 => 41,  49 => 39,  44 => 36,  41 => 35,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/form/fieldset--accordion.html.twig", "C:\\wamp64\\www\\commerce-kickstart-project\\web\\themes\\contrib\\belgrade\\templates\\form\\fieldset--accordion.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 25, "if" => 53);
        static $filters = array("escape" => 36);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
