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

/* modules/contrib/ds/templates/ds-2col.html.twig */
class __TwigTemplate_d02b529305e987c6336aa17ca6fd0c150304f199b6c7fb3ddba13d4632f0e96b extends \Twig\Template
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
        // line 17
        echo "<";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["outer_wrapper"] ?? null), 17, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "ds-2col", 1 => "clearfix"], "method", false, false, true, 17), 17, $this->source), "html", null, true);
        echo ">

  ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_suffix"] ?? null), "contextual_links", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "

  <";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["left_wrapper"] ?? null), 21, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["left_attributes"] ?? null), "addClass", [0 => "group-left"], "method", false, false, true, 21), 21, $this->source), "html", null, true);
        echo ">
    ";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["left"] ?? null), 22, $this->source), "html", null, true);
        echo "
  </";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["left_wrapper"] ?? null), 23, $this->source), "html", null, true);
        echo ">

  <";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["right_wrapper"] ?? null), 25, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["right_attributes"] ?? null), "addClass", [0 => "group-right"], "method", false, false, true, 25), 25, $this->source), "html", null, true);
        echo ">
    ";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["right"] ?? null), 26, $this->source), "html", null, true);
        echo "
  </";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["right_wrapper"] ?? null), 27, $this->source), "html", null, true);
        echo ">

</";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["outer_wrapper"] ?? null), 29, $this->source), "html", null, true);
        echo ">
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/ds/templates/ds-2col.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  74 => 27,  70 => 26,  65 => 25,  60 => 23,  56 => 22,  51 => 21,  46 => 19,  39 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Display Suite 2 column template.
 *
 * Available variables:
 * - outer_wrapper: outer wrapper element
 * - left_wrapper: wrapper element around left region
 * - right_wrapper: wrapper element around right region
 * - attributes: layout attributes
 * - left_attributes: attributes for left region
 * - right_attributes: attributes for right region
 * - left: content of left region
 * - right: content of right region
 */
#}
<{{ outer_wrapper }}{{ attributes.addClass('ds-2col', 'clearfix') }}>

  {{ title_suffix.contextual_links }}

  <{{ left_wrapper }}{{ left_attributes.addClass('group-left') }}>
    {{ left }}
  </{{ left_wrapper }}>

  <{{ right_wrapper }}{{ right_attributes.addClass('group-right') }}>
    {{ right }}
  </{{ right_wrapper }}>

</{{ outer_wrapper }}>
", "modules/contrib/ds/templates/ds-2col.html.twig", "/var/www/html/web/modules/contrib/ds/templates/ds-2col.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 17);
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
