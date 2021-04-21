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

/* C:\xampp\htdocs\tradesmartconsult\TradeSmart/themes/tradesmart/partials/site/footer.htm */
class __TwigTemplate_ba5c8bf2120440dbb23031cae9db9cf5300ee76f69ae88baf72d343589cab638 extends \Twig\Template
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
        $filters = array("theme" => 13);
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
        echo "<!-- ======= Clients Section ======= -->
          <section id=\"clients\" class=\" section-bg\">
            <div class=\"container\">
      
            <div class=\"section-title\">
                <h2>Our Partners</h2>
                <!-- <p>What we do</p> -->
              </div>
      
              <div class=\"row customer-logos\">
      
                <div class=\"slider col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center\">
                  <img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/site/img/partners/awcict.jpg");
        echo "\" class=\"img-fluid\" alt=\"\">
                </div>
      
                <div class=\"slider col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center\">
                  <img src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/site/img/partners/commonwomen.png");
        echo "\" class=\"img-fluid\" alt=\"\">
                </div>
      
                <div class=\"slider col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center\">
                  <img src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/site/img/partners/un-eca-og.png");
        echo "\" class=\"img-fluid\" alt=\"\">
                </div>
      
                <div class=\"slider col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center\">
                  <img src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/site/img/partners/instituteecomonicaffairs.jfif");
        echo "\" class=\"img-fluid\" alt=\"\">
                </div>
      
                <div class=\"slider col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center\">
                  <img src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/site/img/partners/internationaltradecenter.jfif");
        echo "\" class=\"img-fluid\" alt=\"\">
                </div>
      
                <div class=\"slider col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center\">
                  <img src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/site/img/partners/witnairobi.png");
        echo "\" class=\"img-fluid\" alt=\"\">
                </div>
      
                <div class=\"slider col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center\">
                  <img src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/site/img/partners/SOMINVEST-L.png");
        echo "\" class=\"img-fluid\" alt=\"\">
                </div>
      
              </div>
      
            </div>
          </section><!-- End Clients Section -->
  
  <!-- ======= Footer ======= -->
  <footer id=\"footer\">
    <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6\">
            <div class=\"footer-info\">
            <div class=\"footer-img\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/site/img/logo/logob_edited.png");
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t\t\t</div>
              <p>
                Diani CI Street <br>
                Ngong Road, Kenya<br><br>
                <strong>Phone:</strong> +254724418153<br>
                <strong>Email:</strong> info@tradesmartconsult.co.ke<br>
              </p>
              <div class=\"social-links mt-3\">
                <a href=\"https://twitter.com/TradesmartC\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
                <a href=\"https://www.facebook.com/TradeSmart.co.ke\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
                <a href=\"https://www.instagram.com/tradesmart_consultltd/?hl=en\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
                <!-- <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a> -->
                <a href=\"https://www.linkedin.com/company/75159461/\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
              </div>
            </div>
          </div>

          <div class=\"col-lg-2 col-md-6 footer-links\">
            <h4>Useful Links</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"\">Home</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"\">About us</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"\">Services</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"\">Contact Us</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"\">Media</a></li>


            </ul>
          </div>

          <div class=\"col-lg-3 col-md-6 footer-links\">
            <h4>Our Services</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"\">Trade Hub</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"\">Research and Innovation</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"\">Capacity Building and Training</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"\">Policy, Advocacy and Networking</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"\">Energy and Environment</a></li>
              <!-- <li><i class=\"bx bx-chevron-right\"></i> <a href=\"\">Environment</a></li> -->

            </ul>
          </div>

          <div class=\"col-lg-4 col-md-6 footer-newsletter\">
            <h4>Our Newsletter</h4>
            <p>We would like to invite you to subscribe to our newsletter</p>
            <form action=\"\" method=\"post\">
            @csrf
              <input type=\"email\" name=\"email\" placeholder=\"Enter your email\">
              <input type=\"submit\" value=\"Subscribe\">
            </form>
            <br>

          </div>

        </div>
      </div>
    </div>

    <div class=\"container\">
      <div class=\"copyright\">
        &copy; Copyright<strong><span> </span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href=\"#\" class=\"back-to-top\"><i class=\"icofont-simple-up\"></i></a>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tradesmartconsult\\TradeSmart/themes/tradesmart/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 54,  118 => 37,  111 => 33,  104 => 29,  97 => 25,  90 => 21,  83 => 17,  76 => 13,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ======= Clients Section ======= -->
          <section id=\"clients\" class=\" section-bg\">
            <div class=\"container\">
      
            <div class=\"section-title\">
                <h2>Our Partners</h2>
                <!-- <p>What we do</p> -->
              </div>
      
              <div class=\"row customer-logos\">
      
                <div class=\"slider col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center\">
                  <img src=\"{{ 'assets/site/img/partners/awcict.jpg'|theme }}\" class=\"img-fluid\" alt=\"\">
                </div>
      
                <div class=\"slider col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center\">
                  <img src=\"{{ 'assets/site/img/partners/commonwomen.png'|theme }}\" class=\"img-fluid\" alt=\"\">
                </div>
      
                <div class=\"slider col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center\">
                  <img src=\"{{ 'assets/site/img/partners/un-eca-og.png'|theme }}\" class=\"img-fluid\" alt=\"\">
                </div>
      
                <div class=\"slider col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center\">
                  <img src=\"{{ 'assets/site/img/partners/instituteecomonicaffairs.jfif'|theme }}\" class=\"img-fluid\" alt=\"\">
                </div>
      
                <div class=\"slider col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center\">
                  <img src=\"{{ 'assets/site/img/partners/internationaltradecenter.jfif'|theme }}\" class=\"img-fluid\" alt=\"\">
                </div>
      
                <div class=\"slider col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center\">
                  <img src=\"{{ 'assets/site/img/partners/witnairobi.png'|theme }}\" class=\"img-fluid\" alt=\"\">
                </div>
      
                <div class=\"slider col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center\">
                  <img src=\"{{ 'assets/site/img/partners/SOMINVEST-L.png'|theme }}\" class=\"img-fluid\" alt=\"\">
                </div>
      
              </div>
      
            </div>
          </section><!-- End Clients Section -->
  
  <!-- ======= Footer ======= -->
  <footer id=\"footer\">
    <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6\">
            <div class=\"footer-info\">
            <div class=\"footer-img\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"{{ 'assets/site/img/logo/logob_edited.png'|theme }}\" alt=\"\"/></a>
\t\t\t\t\t\t\t\t</div>
              <p>
                Diani CI Street <br>
                Ngong Road, Kenya<br><br>
                <strong>Phone:</strong> +254724418153<br>
                <strong>Email:</strong> info@tradesmartconsult.co.ke<br>
              </p>
              <div class=\"social-links mt-3\">
                <a href=\"https://twitter.com/TradesmartC\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
                <a href=\"https://www.facebook.com/TradeSmart.co.ke\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
                <a href=\"https://www.instagram.com/tradesmart_consultltd/?hl=en\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
                <!-- <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a> -->
                <a href=\"https://www.linkedin.com/company/75159461/\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
              </div>
            </div>
          </div>

          <div class=\"col-lg-2 col-md-6 footer-links\">
            <h4>Useful Links</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"\">Home</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"\">About us</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"\">Services</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"\">Contact Us</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"\">Media</a></li>


            </ul>
          </div>

          <div class=\"col-lg-3 col-md-6 footer-links\">
            <h4>Our Services</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"\">Trade Hub</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"\">Research and Innovation</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"\">Capacity Building and Training</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"\">Policy, Advocacy and Networking</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"\">Energy and Environment</a></li>
              <!-- <li><i class=\"bx bx-chevron-right\"></i> <a href=\"\">Environment</a></li> -->

            </ul>
          </div>

          <div class=\"col-lg-4 col-md-6 footer-newsletter\">
            <h4>Our Newsletter</h4>
            <p>We would like to invite you to subscribe to our newsletter</p>
            <form action=\"\" method=\"post\">
            @csrf
              <input type=\"email\" name=\"email\" placeholder=\"Enter your email\">
              <input type=\"submit\" value=\"Subscribe\">
            </form>
            <br>

          </div>

        </div>
      </div>
    </div>

    <div class=\"container\">
      <div class=\"copyright\">
        &copy; Copyright<strong><span> </span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href=\"#\" class=\"back-to-top\"><i class=\"icofont-simple-up\"></i></a>", "C:\\xampp\\htdocs\\tradesmartconsult\\TradeSmart/themes/tradesmart/partials/site/footer.htm", "");
    }
}
