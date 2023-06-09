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

/* modules/contrib/rate/templates/rate-widget.html.twig */
class __TwigTemplate_a8b885cb7ca06bb7b5d9405bb50740ad000ae375464bad256da5bfa2b0267f81 extends \Twig\Template
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
        echo "<table class=\"rating-table\">
  ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, ($context["display_settings"] ?? null), "display_label", [], "any", false, false, true, 18) && (twig_get_attribute($this->env, $this->source, ($context["display_settings"] ?? null), "label_position", [], "any", false, false, true, 18) == "above"))) {
            // line 19
            echo "    <tr class=\"rating-table-tr\">
      <td ";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attributes"] ?? null), "addClass", [0 => "rating-table-td"], "method", false, false, true, 20), 20, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["display_settings"] ?? null), "display_label", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "</td>
    </tr>
  ";
        }
        // line 23
        echo "<tr class=\"rating-table-tr\">
  ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, ($context["display_settings"] ?? null), "display_label", [], "any", false, false, true, 24) && (twig_get_attribute($this->env, $this->source, ($context["display_settings"] ?? null), "label_position", [], "any", false, false, true, 24) == "inline"))) {
            // line 25
            echo "    <td ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attributes"] ?? null), "addClass", [0 => "rating-table-td"], "method", false, false, true, 25), 25, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["display_settings"] ?? null), "display_label", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "</td>
  ";
        }
        // line 27
        echo "  <td class=\"rating-table-td\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 27, $this->source), "result"), "html", null, true);
        echo "</td>
  ";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, ($context["results_settings"] ?? null), "result_position", [], "any", false, false, true, 28) == "right")) {
            // line 29
            echo "    <td ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["result_attributes"] ?? null), "addClass", [0 => "rating-table-td"], "method", false, false, true, 29), 29, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "result", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "</td>
  ";
        }
        // line 31
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, ($context["display_settings"] ?? null), "description_position", [], "any", false, false, true, 31) == "right")) {
            // line 32
            echo "    <td";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description_attributes"] ?? null), "addClass", [0 => "rating-table-td"], "method", false, false, true, 32), 32, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["display_settings"] ?? null), "description", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "</td>
  ";
        }
        // line 34
        echo "</tr>
";
        // line 35
        if ((twig_get_attribute($this->env, $this->source, ($context["display_settings"] ?? null), "description", [], "any", false, false, true, 35) && (twig_get_attribute($this->env, $this->source, ($context["display_settings"] ?? null), "description_position", [], "any", false, false, true, 35) == "below"))) {
            // line 36
            echo "  <tr class=\"rating-table-tr\">
    ";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, ($context["display_settings"] ?? null), "display_label", [], "any", false, false, true, 37) && (twig_get_attribute($this->env, $this->source, ($context["display_settings"] ?? null), "label_position", [], "any", false, false, true, 37) == "inline"))) {
                // line 38
                echo "    <td class=\"rating-table-td\"></td>
    ";
            }
            // line 40
            echo "    <td";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description_attributes"] ?? null), "addClass", [0 => "rating-table-td"], "method", false, false, true, 40), 40, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["display_settings"] ?? null), "description", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "</td>
  </tr>
";
        }
        // line 43
        if ((twig_get_attribute($this->env, $this->source, ($context["results_settings"] ?? null), "result_position", [], "any", false, false, true, 43) == "below")) {
            // line 44
            echo "  <tr class=\"rating-table-tr\">
    ";
            // line 45
            if ((twig_get_attribute($this->env, $this->source, ($context["display_settings"] ?? null), "display_label", [], "any", false, false, true, 45) && (twig_get_attribute($this->env, $this->source, ($context["display_settings"] ?? null), "label_position", [], "any", false, false, true, 45) == "inline"))) {
                // line 46
                echo "    <td class=\"rating-table-td\"></td>
    ";
            }
            // line 48
            echo "    <td";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["result_attributes"] ?? null), "addClass", [0 => "rating-table-td"], "method", false, false, true, 48), 48, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "result", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "</td>
  </tr>
";
        }
        // line 51
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/rate/templates/rate-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 51,  128 => 48,  124 => 46,  122 => 45,  119 => 44,  117 => 43,  108 => 40,  104 => 38,  102 => 37,  99 => 36,  97 => 35,  94 => 34,  86 => 32,  83 => 31,  75 => 29,  73 => 28,  68 => 27,  60 => 25,  58 => 24,  55 => 23,  47 => 20,  44 => 19,  42 => 18,  39 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a voting widget.
 *
 * Available variables:
 * - widget_template: name of the template.
 * - display_settings: the display settings of the rate widget.
 * - results_settings: settings for the resulsts of the rate widget.
 * - label_attributes: class and collspan for the label.
 * - description_attributes: class and collspan for the label.
 * - result_attributes: class and collspan for the label.
 *
 * @ingroup themeable
 */
#}
<table class=\"rating-table\">
  {% if display_settings.display_label and display_settings.label_position == 'above' %}
    <tr class=\"rating-table-tr\">
      <td {{ label_attributes.addClass('rating-table-td') }}>{{ display_settings.display_label }}</td>
    </tr>
  {% endif %}
<tr class=\"rating-table-tr\">
  {% if display_settings.display_label and display_settings.label_position == 'inline' %}
    <td {{ label_attributes.addClass('rating-table-td') }}>{{ display_settings.display_label }}</td>
  {% endif %}
  <td class=\"rating-table-td\">{{ form|without('result') }}</td>
  {% if results_settings.result_position == 'right' %}
    <td {{ result_attributes.addClass('rating-table-td')}}>{{ form.result }}</td>
  {% endif %}
  {% if display_settings.description_position == 'right' %}
    <td{{ description_attributes.addClass('rating-table-td') }}>{{ display_settings.description }}</td>
  {% endif %}
</tr>
{% if display_settings.description and display_settings.description_position == 'below' %}
  <tr class=\"rating-table-tr\">
    {% if display_settings.display_label and display_settings.label_position == 'inline' %}
    <td class=\"rating-table-td\"></td>
    {% endif %}
    <td{{ description_attributes.addClass('rating-table-td') }}>{{ display_settings.description }}</td>
  </tr>
{% endif %}
{% if results_settings.result_position == 'below' %}
  <tr class=\"rating-table-tr\">
    {% if display_settings.display_label and display_settings.label_position == 'inline' %}
    <td class=\"rating-table-td\"></td>
    {% endif %}
    <td{{result_attributes.addClass('rating-table-td')}}>{{ form.result }}</td>
  </tr>
{% endif %}
</table>", "modules/contrib/rate/templates/rate-widget.html.twig", "/var/www/html/web/modules/contrib/rate/templates/rate-widget.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18);
        static $filters = array("escape" => 20, "without" => 27);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'without'],
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
