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

/* C:\xampp\htdocs\tradesmartconsult\TradeSmart/themes/tradesmart/partials/site/sticky.htm */
class __TwigTemplate_05b3ee204d8a76eb31d7e0a875461f26b77ffbbf49c5a318168cfde6aea07911 extends \Twig\Template
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
        $tags = array();
        $filters = array("theme" => 4);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"sticky-container\">
    <ul class=\"sticky\">
        <li><a href=\"https://www.facebook.com/TradeSmart.co.ke\">
            <img width=\"32\" height=\"32\" title=\"\" alt=\"\" src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/frontend/assets/img/sticky/facebook.png");
        echo "\" />
            <p>Facebook</p></a>
        </li>
        <li><a href=\"https://twitter.com/TradesmartC\">
            <img width=\"32\" height=\"32\" title=\"\" alt=\"\" src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/frontend/assets/img/sticky/twitter.png");
        echo "\" />
            <p>Twitter</p>
        </li></a>
        <li><a href=\"https://www.linkedin.com/company/75159461/\">
            <img width=\"32\" height=\"32\" title=\"\" alt=\"\" src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/frontend/assets/img/sticky/linkedin.png");
        echo "\" />
            <p>Linkedin</p>
        </li></a>
        <li><a href=\"https://www.instagram.com/tradesmart_consultltd/?hl=en\">
            <img width=\"32\" height=\"32\" title=\"\" alt=\"\" src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/frontend/assets/img/sticky/instagram.png");
        echo "\" />
            <p>Instagram</p>
        </li></a>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tradesmartconsult\\TradeSmart/themes/tradesmart/partials/site/sticky.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 16,  81 => 12,  74 => 8,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"sticky-container\">
    <ul class=\"sticky\">
        <li><a href=\"https://www.facebook.com/TradeSmart.co.ke\">
            <img width=\"32\" height=\"32\" title=\"\" alt=\"\" src=\"{{ 'assets/frontend/assets/img/sticky/facebook.png'|theme }}\" />
            <p>Facebook</p></a>
        </li>
        <li><a href=\"https://twitter.com/TradesmartC\">
            <img width=\"32\" height=\"32\" title=\"\" alt=\"\" src=\"{{ 'assets/frontend/assets/img/sticky/twitter.png'|theme }}\" />
            <p>Twitter</p>
        </li></a>
        <li><a href=\"https://www.linkedin.com/company/75159461/\">
            <img width=\"32\" height=\"32\" title=\"\" alt=\"\" src=\"{{ 'assets/frontend/assets/img/sticky/linkedin.png'|theme }}\" />
            <p>Linkedin</p>
        </li></a>
        <li><a href=\"https://www.instagram.com/tradesmart_consultltd/?hl=en\">
            <img width=\"32\" height=\"32\" title=\"\" alt=\"\" src=\"{{ 'assets/frontend/assets/img/sticky/instagram.png'|theme }}\" />
            <p>Instagram</p>
        </li></a>
    </ul>
</div>", "C:\\xampp\\htdocs\\tradesmartconsult\\TradeSmart/themes/tradesmart/partials/site/sticky.htm", "");
    }
}
