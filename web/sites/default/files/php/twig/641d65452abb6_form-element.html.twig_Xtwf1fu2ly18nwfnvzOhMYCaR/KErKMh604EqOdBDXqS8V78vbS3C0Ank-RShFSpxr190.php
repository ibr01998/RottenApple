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

/* themes/contrib/electra/templates/form/form-element.html.twig */
class __TwigTemplate_63a2baa034337dd2fd3e3ef42eac8b17390ce194b0729497b8320b349dd7389c extends \Twig\Template
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
        // line 48
        $context["classes"] = [0 => "js-form-item", 1 => "form-item", 2 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 51
($context["type"] ?? null), 51, $this->source))), 3 => ("form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 52
($context["type"] ?? null), 52, $this->source))), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 53
($context["name"] ?? null), 53, $this->source))), 5 => ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 54
($context["name"] ?? null), 54, $this->source))), 6 => ((!twig_in_filter(        // line 55
($context["title_display"] ?? null), [0 => "after", 1 => "before"])) ? ("form-no-label") : ("")), 7 => (((        // line 56
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 8 => ((        // line 57
($context["errors"] ?? null)) ? ("form-item--error") : (""))];
        // line 60
        echo "
";
        // line 61
        if (!twig_in_filter(($context["type"] ?? null), [0 => "checkbox", 1 => "radio"])) {
            // line 62
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 62, $this->source), [0 => "form-group"]);
        }
        // line 64
        echo "
";
        // line 66
        $context["description_classes"] = [0 => "description", 1 => "text-muted", 2 => (((        // line 69
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden sr-only") : (""))];
        // line 72
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 72), 72, $this->source), "html", null, true);
        echo ">
  ";
        // line 73
        if (twig_in_filter(($context["label_display"] ?? null), [0 => "before", 1 => "invisible"])) {
            // line 74
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 74, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 76
        echo "  ";
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 77
            echo "    <span class=\"field-prefix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 77, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 79
        echo "  ";
        if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 79))) {
            // line 80
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo ">
      ";
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 84
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 84, $this->source), "html", null, true);
        echo "
  ";
        // line 85
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 86
            echo "    <span class=\"field-suffix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 86, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 88
        echo "  ";
        if ((($context["label_display"] ?? null) == "after")) {
            // line 89
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 89, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 91
        echo "  ";
        if (($context["errors"] ?? null)) {
            // line 92
            echo "    <div class=\"form-item--error-message\">
      <strong>";
            // line 93
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 93, $this->source), "html", null, true);
            echo "</strong>
    </div>
  ";
        }
        // line 96
        echo "  ";
        if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 96))) {
            // line 97
            echo "    <small";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 97), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 97), 97, $this->source), "html", null, true);
            echo ">
      ";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
            echo "
    </small>
  ";
        }
        // line 101
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/electra/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 101,  140 => 98,  135 => 97,  132 => 96,  126 => 93,  123 => 92,  120 => 91,  114 => 89,  111 => 88,  105 => 86,  103 => 85,  98 => 84,  92 => 81,  87 => 80,  84 => 79,  78 => 77,  75 => 76,  69 => 74,  67 => 73,  62 => 72,  60 => 69,  59 => 66,  56 => 64,  53 => 62,  51 => 61,  48 => 60,  46 => 57,  45 => 56,  44 => 55,  43 => 54,  42 => 53,  41 => 52,  40 => 51,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a form element.
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - errors: (optional) Any errors for this form element, may not be set.
 * - prefix: (optional) The form element prefix, may not be set.
 * - suffix: (optional) The form element suffix, may not be set.
 * - required: The required marker, or empty if the associated form element is
 *   not required.
 * - type: The type of the element.
 * - name: The name of the element.
 * - label: A rendered label element.
 * - label_display: Label display setting. It can have these values:
 *   - before: The label is output before the element. This is the default.
 *     The label includes the #title and the required marker, if #required.
 *   - after: The label is output after the element. For example, this is used
 *     for radio and checkbox #type elements. If the #title is empty but the
 *     field is #required, the label will contain only the required marker.
 *   - invisible: Labels are critical for screen readers to enable them to
 *     properly navigate through forms but can be visually distracting. This
 *     property hides the label for everyone except screen readers.
 *   - attribute: Set the title attribute on the element to create a tooltip but
 *     output no label element. This is supported only for checkboxes and radios
 *     in \\Drupal\\Core\\Render\\Element\\CompositeFormElementTrait::preRenderCompositeFormElement().
 *     It is used where a visual label is not needed, such as a table of
 *     checkboxes where the row and column provide the context. The tooltip will
 *     include the title and required marker.
 * - description: (optional) A list of description properties containing:
 *    - content: A description of the form element, may not be set.
 *    - attributes: (optional) A list of HTML attributes to apply to the
 *      description content wrapper. Will only be set when description is set.
 * - description_display: Description display setting. It can have these values:
 *   - before: The description is output before the element.
 *   - after: The description is output after the element. This is the default
 *     value.
 *   - invisible: The description is output after the element, hidden visually
 *     but available to screen readers.
 * - disabled: True if the element is disabled.
 * - title_display: Title display setting.
 *
 * @see template_preprocess_form_element()
 */
#}
{%
  set classes = [
    'js-form-item',
    'form-item',
    'js-form-type-' ~ type|clean_class,
    'form-type-' ~ type|clean_class,
    'js-form-item-' ~ name|clean_class,
    'form-item-' ~ name|clean_class,
    title_display not in ['after', 'before'] ? 'form-no-label',
    disabled == 'disabled' ? 'form-disabled',
    errors ? 'form-item--error',
  ]
%}

{% if type not in ['checkbox', 'radio'] %}
{% set classes = classes|merge(['form-group']) %}
{% endif %}

{%
  set description_classes = [
    'description',
    'text-muted',
    description_display == 'invisible' ? 'visually-hidden sr-only',
  ]
%}
<div{{ attributes.addClass(classes) }}>
  {% if label_display in ['before', 'invisible'] %}
    {{ label }}
  {% endif %}
  {% if prefix is not empty %}
    <span class=\"field-prefix\">{{ prefix }}</span>
  {% endif %}
  {% if description_display == 'before' and description.content %}
    <div{{ description.attributes }}>
      {{ description.content }}
    </div>
  {% endif %}
  {{ children }}
  {% if suffix is not empty %}
    <span class=\"field-suffix\">{{ suffix }}</span>
  {% endif %}
  {% if label_display == 'after' %}
    {{ label }}
  {% endif %}
  {% if errors %}
    <div class=\"form-item--error-message\">
      <strong>{{ errors }}</strong>
    </div>
  {% endif %}
  {% if description_display in ['after', 'invisible'] and description.content %}
    <small{{ description.attributes.addClass(description_classes) }}>
      {{ description.content }}
    </small>
  {% endif %}
</div>
", "themes/contrib/electra/templates/form/form-element.html.twig", "/var/www/html/web/themes/contrib/electra/templates/form/form-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 48, "if" => 61);
        static $filters = array("clean_class" => 51, "merge" => 62, "escape" => 72);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'merge', 'escape'],
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
