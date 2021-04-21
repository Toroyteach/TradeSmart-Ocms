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

/* C:\xampp\htdocs\tradesmartconsult\TradeSmart/themes/tradesmart/pages/blog/category.htm */
class __TwigTemplate_f8a0f234a59bd17570cba06a4383792506a0b331bf5645163c25d8036ef82935 extends \Twig\Template
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
        $tags = array("component" => 7);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- ======= Blog Section ======= -->
 <section id=\"blog\" class=\"blog\">
    <div class=\"container\">  
      <div class=\"row\">                          
          <div class=\"col-lg-8  col-md-8 d-flex align-items-stretch\" data-aos=\"fade-up\">

            ";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "
            </div>
          <div class=\"col-lg-4  col-md-4 d-flex align-items-stretch\" data-aos=\"fade-up\">

            ";
        // line 12
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 13
        echo "
            </div>
      </div>
    </div>
  </section><!-- End Blog Section -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tradesmartconsult\\TradeSmart/themes/tradesmart/pages/blog/category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 13,  80 => 12,  74 => 8,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ======= Blog Section ======= -->
 <section id=\"blog\" class=\"blog\">
    <div class=\"container\">  
      <div class=\"row\">                          
          <div class=\"col-lg-8  col-md-8 d-flex align-items-stretch\" data-aos=\"fade-up\">

            {% component 'blogPosts' %}

            </div>
          <div class=\"col-lg-4  col-md-4 d-flex align-items-stretch\" data-aos=\"fade-up\">

            {% component 'blogCategories' %}

            </div>
      </div>
    </div>
  </section><!-- End Blog Section -->", "C:\\xampp\\htdocs\\tradesmartconsult\\TradeSmart/themes/tradesmart/pages/blog/category.htm", "");
    }
}
