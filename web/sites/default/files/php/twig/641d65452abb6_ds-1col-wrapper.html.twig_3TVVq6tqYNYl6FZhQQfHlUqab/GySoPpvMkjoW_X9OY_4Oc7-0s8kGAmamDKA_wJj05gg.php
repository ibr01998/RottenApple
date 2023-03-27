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

/* modules/contrib/ds/templates/ds-1col-wrapper.html.twig */
class __TwigTemplate_651aa62c5ff7713a92c7b2f49015b06f70b6e853c7935c8123dc8fc523df72a7 extends \Twig\Template
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
        // line 14
        echo "<";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["outer_wrapper"] ?? null), 14, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "ds-1col", 1 => "clearfix"], "method", false, false, true, 14), 14, $this->source), "html", null, true);
        echo ">

  ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_suffix"] ?? null), "contextual_links", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "

  <";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["ds_content_wrapper"] ?? null), 18, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["ds_content_attributes"] ?? null), 18, $this->source), "html", null, true);
        echo ">
    ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["ds_content"] ?? null), 19, $this->source), "html", null, true);
        echo "
  </";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["ds_content_wrapper"] ?? null), 20, $this->source), "html", null, true);
        echo ">

</";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["outer_wrapper"] ?? null), 22, $this->source), "html", null, true);
        echo ">
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/ds/templates/ds-1col-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  60 => 20,  56 => 19,  51 => 18,  46 => 16,  39 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Display Suite 1 column wrapper template.
 *
 * Available variables:
 * - outer_wrapper: outer wrapper element
 * - ds_content_wrapper: wrapper around content
 * - attributes: outer wrapper attributes
 * - ds_content_attributes: attributes for ds_content region
 * - ds_content: content of ds_content region
 */
#}
<{{ outer_wrapper }}{{ attributes.addClass('ds-1col', 'clearfix') }}>

  {{ title_suffix.contextual_links }}

  <{{ ds_content_wrapper }}{{ ds_content_attributes }}>
    {{ ds_content }}
  </{{ ds_content_wrapper }}>

</{{ outer_wrapper }}>
", "modules/contrib/ds/templates/ds-1col-wrapper.html.twig", "/var/www/html/web/modules/contrib/ds/templates/ds-1col-wrapper.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
