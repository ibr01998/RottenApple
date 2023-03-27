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

/* themes/contrib/electra/templates/system/page--404.html.twig */
class __TwigTemplate_6db8249e61e81f2baa57859ed3fa285813ee26b8418058bd1f8c3082169e8ba7 extends \Twig\Template
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
        // line 8
        $this->loadTemplate("@electra/includes/header.html.twig", "themes/contrib/electra/templates/system/page--404.html.twig", 8)->display($context);
        // line 9
        echo "<div class=\"page-404\">
  <h1>404</h1>
  <h2>Page Not Found</h2>
  <p>Please return back to the site's <a href=\"/\" class=\"home-link\">homepage</a></p>
</div>
";
        // line 14
        $this->loadTemplate("@electra/includes/footer.html.twig", "themes/contrib/electra/templates/system/page--404.html.twig", 14)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/contrib/electra/templates/system/page--404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  41 => 9,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for 404 page.
 *
 */
#}
{% include '@electra/includes/header.html.twig' %}
<div class=\"page-404\">
  <h1>404</h1>
  <h2>Page Not Found</h2>
  <p>Please return back to the site's <a href=\"/\" class=\"home-link\">homepage</a></p>
</div>
{% include '@electra/includes/footer.html.twig' %}
", "themes/contrib/electra/templates/system/page--404.html.twig", "/var/www/html/web/themes/contrib/electra/templates/system/page--404.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 8);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                [],
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
