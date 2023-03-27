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

/* modules/contrib/webform/templates/webform-element-base-text.html.twig */
class __TwigTemplate_41ea788daff0281799b81ada33266d8b6aeb1e2495b3fadf819692652d5ff49f extends \Twig\Template
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
        // line 19
        if (($context["title"] ?? null)) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 19, $this->source), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "multiline", [], "any", false, false, true, 19)) {
                echo ":
";
            } else {
                // line 20
                echo ": ";
            }
        }
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 20, $this->source), "html", null, true);
        echo "
";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "multiline", [], "any", false, false, true, 21) &&  !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "last", [], "any", false, false, true, 21))) {
            // line 22
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-element-base-text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 22,  53 => 21,  46 => 20,  39 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a webform base element as text.
 *
 * Available variables:
 * - element: The webform element.
 * - title: The label for the element.
 * - value: The content for the element.
 * - options Associative array of options for element.
 *   - email: Flag to determine if element is for an email.
 *   - multiline: Flag to determine if value spans multiple lines.
 *   - first: Flag to determine if the element is that first element in its container.
 *   - last: Flag to determine if the element is that last element in its container.
 *
 * @see \\Drupal\\webform\\WebformSubmissionViewBuilder::buildElements
 */
#}
{% if title %}{{ title }}{% if options.multiline %}:
{% else %}: {% endif %}{% endif %}{{ value }}
{% if options.multiline and not options.last %}

{% endif %}
", "modules/contrib/webform/templates/webform-element-base-text.html.twig", "/var/www/html/web/modules/contrib/webform/templates/webform-element-base-text.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19);
        static $filters = array("escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
