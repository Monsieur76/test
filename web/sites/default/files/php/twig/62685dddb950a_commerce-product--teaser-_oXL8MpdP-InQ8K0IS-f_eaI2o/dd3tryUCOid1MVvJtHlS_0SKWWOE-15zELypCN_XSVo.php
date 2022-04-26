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

/* themes/contrib/belgrade/templates/commerce/teasers/commerce-product--teaser--belgrade.html.twig */
class __TwigTemplate_f838fa615554f97a3587e2287c1dbcdbcde814f5a619ede8bcd958cbf7aa5448 extends \Twig\Template
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
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("belgrade/product-teaser.belgrade"), "html", null, true);
        echo "

";
        // line 24
        $macros["svg"] = $this->macros["svg"] = $this->loadTemplate("@belgrade/macros.twig", "themes/contrib/belgrade/templates/commerce/teasers/commerce-product--teaser--belgrade.html.twig", 24)->unwrap();
        // line 25
        echo "
";
        // line 27
        $context["classes"] = [0 => "product", 1 => "position-relative", 2 => "mb-3"];
        // line 33
        echo "
<article";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 34), 34, $this->source), "html", null, true);
        echo ">
  <div class=\"product-image position-relative text-white bg-primary\">
    <div class=\"product-hover d-flex flex-column align-items-center justify-content-center position-absolute top-0 w-100 h-100\">
      ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["svg"], "macro_getIcon", ["eye-fill", 34, 34, "mb-2"], 37, $context, $this->getSourceContext()));
        echo "
      <div class=\"fs-md\">";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar("View product");
        echo "</div>
    </div>";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "images", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation_images", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        // line 42
        echo "</div>
  <div class=\"product-info d-flex align-items-center justify-content-between\">
    <div class=\"product-title fw-bold\">";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "</div>
    <a href=\"";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_url"] ?? null), 45, $this->source), "html", null, true);
        echo "\" class=\"stretched-link\"></a>";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["product"] ?? null), 46, $this->source), "title", "variation_attributes", "images", "variation_images"), "html", null, true);
        // line 47
        echo "</div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/commerce/teasers/commerce-product--teaser--belgrade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 47,  83 => 46,  80 => 45,  76 => 44,  72 => 42,  70 => 41,  68 => 40,  64 => 38,  60 => 37,  54 => 34,  51 => 33,  49 => 27,  46 => 25,  44 => 24,  39 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/commerce/teasers/commerce-product--teaser--belgrade.html.twig", "C:\\wamp64\\www\\commerce-kickstart-project\\web\\themes\\contrib\\belgrade\\templates\\commerce\\teasers\\commerce-product--teaser--belgrade.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 24, "set" => 27);
        static $filters = array("escape" => 22, "without" => 46);
        static $functions = array("attach_library" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set'],
                ['escape', 'without'],
                ['attach_library']
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
