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

/* C:\xampp\htdocs\tradesmartconsult\TradeSmart/themes/tradesmart/partials/site/header.htm */
class __TwigTemplate_84deb05dffaf53979412fcf9baa0d180ba5e2ec2fe87defcb35af3bf226b9abf extends \Twig\Template
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
        $filters = array("theme" => 6);
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
        echo "<!-- ======= Header ======= -->
  <header id=\"header\" class=\"fixed-top \">
    <div class=\"container d-flex align-items-center\">

      <!-- Uncomment below if you prefer to use an image logo -->
      <a href=\"\" class=\"logo\"><img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/site/img/logo/logow_edited.png");
        echo "\" alt=\"\" class=\"\"></a>

      <nav class=\"nav-menu d-none d-lg-block ml-auto\" style=\"\">

        <ul class=\"\">
          <li class=\"active\"><a href=\"\">Home</a></li>
          <li><a href=\"\">About</a></li>


          <li class=\"drop-down\"><a href=\"\">Services</a>
            <ul>
              <li class=\"\"><a href=\"\">Trade Hub</a>
                <!-- <ul>
                    <li><a href=\"#\">Cross Border Trade</a></li>
                    <li><a href=\"#\">Digital Trade Content</a></li>
                    <li><a href=\"#\">International Trade</a></li>
                    <li><a href=\"#\">Customs</a></li>
                    <li><a href=\"#\">Trade Disputes Resolution</a></li>
                  </ul> -->
              </li>
             <li class=\"\"><a href=\"\">Capacity Building and Training</a>
                <!-- <ul>
                    <li><a href=\"#\">Capacity Building for Business Women</a></li>
                    <li><a href=\"#\">Digital Trade Regulatory Intergration</a></li>
                    <li><a href=\"#\">Trade Regulations and Policies</a></li>
                    <li><a href=\"#\">Advocacy and Networking</a></li>
                  </ul> -->
              </li>
                <li class=\"\"><a href=\"\">Policy, Advocacy and Networking</a>
                <!-- <ul>
                    <li><a href=\"#\">Drafting and development of policies</a></li>
                    <li><a href=\"#\">Development of Communication Strategy</a></li>
                    <li><a href=\"#\">Development business & strategic plans</a></li>
                    <li><a href=\"#\">Digital Media management</a></li>
                    <li><a href=\"#\">Development of business proposal</a></li>
                </ul> -->
              </li>
              <li class=\"\"><a href=\"\">Research and Innovation</a>
                <!-- <ul>
                    <li><a href=\"#\">Employee Work load Analysis</a></li>
                    <li><a href=\"#\">Job Evaluation</a></li>
                    <li><a href=\"#\">New Product Testing</a></li>
                    <li><a href=\"#\">Competitor Analysis</a></li>
                  </ul> -->
              </li>


            </ul>
          </li>

\t\t  <li class=\"drop-down\"><a href=\"\">Media</a>
\t\t    <ul>
              <li class=\"\"><a href=\"\">Latest News</a>
                <!-- <ul>
                    <li><a href=\"#\">Cross Border Trade</a></li>
                    <li><a href=\"#\">Digital Trade Content</a></li>
                    <li><a href=\"#\">International Trade</a></li>
                    <li><a href=\"#\">Customs</a></li>
                    <li><a href=\"#\">Trade Disputes Resolution</a></li>
                  </ul> -->
              </li>
             <li class=\"\"><a href=\"\">Gallery</a>
                <!-- <ul>
                    <li><a href=\"#\">Capacity Building for Business Women</a></li>
                    <li><a href=\"#\">Digital Trade Regulatory Intergration</a></li>
                    <li><a href=\"#\">Trade Regulations and Policies</a></li>
                    <li><a href=\"#\">Advocacy and Networking</a></li>
                  </ul> -->
              </li>
                <li class=\"\"><a href=\"\">Video</a>
                <!-- <ul>
                    <li><a href=\"#\">Drafting and development of policies</a></li>
                    <li><a href=\"#\">Development of Communication Strategy</a></li>
                    <li><a href=\"#\">Development business & strategic plans</a></li>
                    <li><a href=\"#\">Digital Media management</a></li>
                    <li><a href=\"#\">Development of business proposal</a></li>
                </ul> -->
              </li>
              <li class=\"\"><a href=\"\">Newsletter</a>
                <!-- <ul>
                    <li><a href=\"#\">Employee Work load Analysis</a></li>
                    <li><a href=\"#\">Job Evaluation</a></li>
                    <li><a href=\"#\">New Product Testing</a></li>
                    <li><a href=\"#\">Competitor Analysis</a></li>
                  </ul> -->
              </li>

            </ul>
\t\t  </li>
          <li><a href=\"\">Blog</a></li>
          <li><a href=\"\">Experts</a></li>
          <li><a href=\"\">Contact Us</a></li>

        </ul>

      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tradesmartconsult\\TradeSmart/themes/tradesmart/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ======= Header ======= -->
  <header id=\"header\" class=\"fixed-top \">
    <div class=\"container d-flex align-items-center\">

      <!-- Uncomment below if you prefer to use an image logo -->
      <a href=\"\" class=\"logo\"><img src=\"{{ 'assets/site/img/logo/logow_edited.png'|theme }}\" alt=\"\" class=\"\"></a>

      <nav class=\"nav-menu d-none d-lg-block ml-auto\" style=\"\">

        <ul class=\"\">
          <li class=\"active\"><a href=\"\">Home</a></li>
          <li><a href=\"\">About</a></li>


          <li class=\"drop-down\"><a href=\"\">Services</a>
            <ul>
              <li class=\"\"><a href=\"\">Trade Hub</a>
                <!-- <ul>
                    <li><a href=\"#\">Cross Border Trade</a></li>
                    <li><a href=\"#\">Digital Trade Content</a></li>
                    <li><a href=\"#\">International Trade</a></li>
                    <li><a href=\"#\">Customs</a></li>
                    <li><a href=\"#\">Trade Disputes Resolution</a></li>
                  </ul> -->
              </li>
             <li class=\"\"><a href=\"\">Capacity Building and Training</a>
                <!-- <ul>
                    <li><a href=\"#\">Capacity Building for Business Women</a></li>
                    <li><a href=\"#\">Digital Trade Regulatory Intergration</a></li>
                    <li><a href=\"#\">Trade Regulations and Policies</a></li>
                    <li><a href=\"#\">Advocacy and Networking</a></li>
                  </ul> -->
              </li>
                <li class=\"\"><a href=\"\">Policy, Advocacy and Networking</a>
                <!-- <ul>
                    <li><a href=\"#\">Drafting and development of policies</a></li>
                    <li><a href=\"#\">Development of Communication Strategy</a></li>
                    <li><a href=\"#\">Development business & strategic plans</a></li>
                    <li><a href=\"#\">Digital Media management</a></li>
                    <li><a href=\"#\">Development of business proposal</a></li>
                </ul> -->
              </li>
              <li class=\"\"><a href=\"\">Research and Innovation</a>
                <!-- <ul>
                    <li><a href=\"#\">Employee Work load Analysis</a></li>
                    <li><a href=\"#\">Job Evaluation</a></li>
                    <li><a href=\"#\">New Product Testing</a></li>
                    <li><a href=\"#\">Competitor Analysis</a></li>
                  </ul> -->
              </li>


            </ul>
          </li>

\t\t  <li class=\"drop-down\"><a href=\"\">Media</a>
\t\t    <ul>
              <li class=\"\"><a href=\"\">Latest News</a>
                <!-- <ul>
                    <li><a href=\"#\">Cross Border Trade</a></li>
                    <li><a href=\"#\">Digital Trade Content</a></li>
                    <li><a href=\"#\">International Trade</a></li>
                    <li><a href=\"#\">Customs</a></li>
                    <li><a href=\"#\">Trade Disputes Resolution</a></li>
                  </ul> -->
              </li>
             <li class=\"\"><a href=\"\">Gallery</a>
                <!-- <ul>
                    <li><a href=\"#\">Capacity Building for Business Women</a></li>
                    <li><a href=\"#\">Digital Trade Regulatory Intergration</a></li>
                    <li><a href=\"#\">Trade Regulations and Policies</a></li>
                    <li><a href=\"#\">Advocacy and Networking</a></li>
                  </ul> -->
              </li>
                <li class=\"\"><a href=\"\">Video</a>
                <!-- <ul>
                    <li><a href=\"#\">Drafting and development of policies</a></li>
                    <li><a href=\"#\">Development of Communication Strategy</a></li>
                    <li><a href=\"#\">Development business & strategic plans</a></li>
                    <li><a href=\"#\">Digital Media management</a></li>
                    <li><a href=\"#\">Development of business proposal</a></li>
                </ul> -->
              </li>
              <li class=\"\"><a href=\"\">Newsletter</a>
                <!-- <ul>
                    <li><a href=\"#\">Employee Work load Analysis</a></li>
                    <li><a href=\"#\">Job Evaluation</a></li>
                    <li><a href=\"#\">New Product Testing</a></li>
                    <li><a href=\"#\">Competitor Analysis</a></li>
                  </ul> -->
              </li>

            </ul>
\t\t  </li>
          <li><a href=\"\">Blog</a></li>
          <li><a href=\"\">Experts</a></li>
          <li><a href=\"\">Contact Us</a></li>

        </ul>

      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->", "C:\\xampp\\htdocs\\tradesmartconsult\\TradeSmart/themes/tradesmart/partials/site/header.htm", "");
    }
}
