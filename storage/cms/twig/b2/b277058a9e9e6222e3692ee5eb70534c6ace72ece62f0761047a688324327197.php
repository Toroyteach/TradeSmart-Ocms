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

/* C:\xampp\htdocs\tradesmartconsult\TradeSmart/themes/tradesmart/layouts/default.htm */
class __TwigTemplate_cae884f75a615fc7e5300e60c0d808f10dbe31d8006124269063707ef8fb0b4f extends \Twig\Template
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
        $tags = array("partial" => 122, "page" => 124);
        $filters = array("theme" => 19);
        $functions = array("asset" => 134);

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'page'],
                ['theme'],
                ['asset']
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>TradeSmart Consult</title>
  <meta http-equiv=\"pragma\" content=\"no-cache\" />
        <meta http-equiv=\"cache-control\" content=\"max-age=604800\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <meta name=\"description\" content=\" Trade smart consult cross border trade east africa energy consultation afcfta\">
        <meta name=\"keywords\" content=\"Trade smart consult cross border trade east africa energy consultation afcfta\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">


  <!-- Favicons -->
  <link href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/site/img/logo/logob_edited.png");
        echo "\" rel=\"icon\">
  <link href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/site/img/logo/logob_edited.png");
        echo "\" rel=\"apple-touch-icon\">
  <link href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/site/img/logo/logob_edited.png");
        echo "\" rel=\"shortcut icon\" type=\"image/x-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">

  <!-- Vendor CSS Files -->
  <link href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/frontend/assets/vendor/bootstrap/css/bootstrap.min.css");
        echo " \" rel=\"stylesheet\">
  <link href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/frontend/assets/vendor/icofont/icofont.min.css");
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/frontend/assets/vendor/boxicons/css/boxicons.min.css");
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/frontend/assets/vendor/animatecss/animate.min.css");
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/frontend/assets/vendor/remixicon/remixicon.css");
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/frontend/assets/vendor/venobox/venobox.css");
        echo "\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/frontend/assets/css/style.css");
        echo "\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/frontend/custom.css");
        echo "\">

  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/site/css/owl.carousel.css");
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/site/css/owl.carousel.min.css");
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/site/css/owl.theme.default.min.css");
        echo "\">

  <link rel=\"stylesheet\" href=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/site/css/magnific-popup.css");
        echo "\">

  <style>
    .section-title > h2{
      font-size: 20px;
    }

    .fa-check{
      text-shadow: 1px 1px 1px #ccc;
      font-size: 30px !important;
    }

    /*sticky social icons */
    .sticky-container{
\t\t/*background-color: #333;*/
\t\tpadding: 0px;
\t\tmargin: 0px;
\t\tposition: fixed;
\t\tright: -119px;
\t\ttop:130px;
\t\twidth: 200px;

\t}

  .sticky > a{
    text-decoration: none !important;
  }

\t.sticky li{
\t\tlist-style-type: none;
\t\tbackground-color: #333;
\t\tcolor: #efefef;
\t\theight: 43px;
\t\tpadding: 0px;
\t\tmargin: 0px 0px 1px 0px;
\t\t-webkit-transition:all 0.25s ease-in-out;
\t\t-moz-transition:all 0.25s ease-in-out;
\t\t-o-transition:all 0.25s ease-in-out;
\t\ttransition:all 0.25s ease-in-out;
\t\tcursor: pointer;
\t\tfilter: url(\"data:image/svg+xml;utf8,<svg xmlns=\\'http://www.w3.org/2000/svg\\'><filter id=\\'grayscale\\'><feColorMatrix type=\\'matrix\\' values=\\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\\'/></filter></svg>#grayscale\"); 
                filter: gray; 
                -webkit-filter: grayscale(100%); 

\t}

\t.sticky li:hover{
\t\tmargin-left: -115px;
\t\t/*-webkit-transform: translateX(-115px);
\t\t-moz-transform: translateX(-115px);
\t\t-o-transform: translateX(-115px);
\t\t-ms-transform: translateX(-115px);
\t\ttransform:translateX(-115px);*/
\t\t/*background-color: #8e44ad;*/
\t\tfilter: url(\"data:image/svg+xml;utf8,<svg xmlns=\\'http://www.w3.org/2000/svg\\'><filter id=\\'grayscale\\'><feColorMatrix type=\\'matrix\\' values=\\'1 0 0 0 0, 0 1 0 0 0, 0 0 1 0 0, 0 0 0 1 0\\'/></filter></svg>#grayscale\");
                -webkit-filter: grayscale(0%);
\t}

\t.sticky li img{
\t\tfloat: left;
\t\tmargin: 5px 5px;
\t\tmargin-right: 10px;

\t}

\t.sticky li p{
\t\tpadding: 0px;
\t\tmargin: 0px;
\t\ttext-transform: uppercase;
\t\tline-height: 43px;

\t}
    </style>

</head>

<body>

    ";
        // line 122
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 123
        echo "
    ";
        // line 124
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 125
        echo "
    ";
        // line 126
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sticky"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 127
        echo "
    ";
        // line 128
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 129
        echo "
    
\t\t<!-- footer end -->
\t\t<!-- all js here -->
  <!-- Vendor JS Files -->
  <!-- <script src=\"";
        // line 134
        echo asset("/frontend/assets/vendor/jquery/jquery.min.js");
        echo "\"></script> -->
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\" integrity=\"sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==\" crossorigin=\"anonymous\"></script>
  <script src=\"";
        // line 136
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js");
        echo "\"></script>
  <!-- <script src=\"";
        // line 137
        echo asset("/frontend/assets/owl/owlcarousel/owl.carousel.min.js");
        echo "\"></script> -->
  <script src=\"";
        // line 138
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/site/js/owl.carousel.min.js");
        echo "\"></script>
  <script src=\"";
        // line 139
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/site/js/jquery.magnific-popup.min.js");
        echo "\"></script>
  <script src=\"";
        // line 140
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/frontend/assets/vendor/jqueryeasing/jquery.easing.min.js");
        echo "\"></script>
  <script src=\"";
        // line 141
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/frontend/assets/vendor/php-email-form/validate.js");
        echo "\"></script>
  <script src=\"";
        // line 142
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js");
        echo "\"></script>
  <script src=\"";
        // line 143
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/frontend/assets/vendor/venobox/venobox.min.js");
        echo "\"></script>
  <script src=\"";
        // line 144
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/frontend/assets/vendor/waypoints/jquery.waypoints.min.js");
        echo "\"></script>
  <script src=\"";
        // line 145
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/frontend/assets/vendor/owlcarousel/owl.carousel.min.js");
        echo "\"></script>

  <script src=\"";
        // line 147
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/frontend/assets/logo.js");
        echo "\"></script>
  

  <!-- Template Main JS File -->
  <script src=\"";
        // line 151
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/frontend/assets/js/main.js");
        echo "\"></script>

  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js\"></script>

  <script src=\"";
        // line 156
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/frontend/assets/gallery.js");
        echo "\"></script>


</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tradesmartconsult\\TradeSmart/themes/tradesmart/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 156,  313 => 151,  306 => 147,  301 => 145,  297 => 144,  293 => 143,  289 => 142,  285 => 141,  281 => 140,  277 => 139,  273 => 138,  269 => 137,  265 => 136,  260 => 134,  253 => 129,  249 => 128,  246 => 127,  242 => 126,  239 => 125,  237 => 124,  234 => 123,  230 => 122,  149 => 44,  144 => 42,  140 => 41,  136 => 40,  130 => 37,  126 => 36,  120 => 33,  116 => 32,  112 => 31,  108 => 30,  104 => 29,  100 => 28,  90 => 21,  86 => 20,  82 => 19,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>TradeSmart Consult</title>
  <meta http-equiv=\"pragma\" content=\"no-cache\" />
        <meta http-equiv=\"cache-control\" content=\"max-age=604800\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <meta name=\"description\" content=\" Trade smart consult cross border trade east africa energy consultation afcfta\">
        <meta name=\"keywords\" content=\"Trade smart consult cross border trade east africa energy consultation afcfta\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">


  <!-- Favicons -->
  <link href=\"{{ 'assets/site/img/logo/logob_edited.png'|theme }}\" rel=\"icon\">
  <link href=\"{{ 'assets/site/img/logo/logob_edited.png'|theme }}\" rel=\"apple-touch-icon\">
  <link href=\"{{ 'assets/site/img/logo/logob_edited.png'|theme }}\" rel=\"shortcut icon\" type=\"image/x-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">

  <!-- Vendor CSS Files -->
  <link href=\"{{ 'assets/frontend/assets/vendor/bootstrap/css/bootstrap.min.css'|theme }} \" rel=\"stylesheet\">
  <link href=\"{{ 'assets/frontend/assets/vendor/icofont/icofont.min.css'|theme }}\" rel=\"stylesheet\">
  <link href=\"{{ 'assets/frontend/assets/vendor/boxicons/css/boxicons.min.css'|theme }}\" rel=\"stylesheet\">
  <link href=\"{{ 'assets/frontend/assets/vendor/animatecss/animate.min.css'|theme }}\" rel=\"stylesheet\">
  <link href=\"{{ 'assets/frontend/assets/vendor/remixicon/remixicon.css'|theme }}\" rel=\"stylesheet\">
  <link href=\"{{ 'assets/frontend/assets/vendor/venobox/venobox.css'|theme }}\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"{{ 'assets/frontend/assets/css/style.css'|theme }}\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"{{ 'assets/frontend/custom.css'|theme }}\">

  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css\">
  <link rel=\"stylesheet\" href=\"{{ 'assets/site/css/owl.carousel.css'|theme }}\">
  <link rel=\"stylesheet\" href=\"{{ 'assets/site/css/owl.carousel.min.css'|theme }}\">
  <link rel=\"stylesheet\" href=\"{{ 'assets/site/css/owl.theme.default.min.css'|theme }}\">

  <link rel=\"stylesheet\" href=\"{{ 'assets/site/css/magnific-popup.css'|theme }}\">

  <style>
    .section-title > h2{
      font-size: 20px;
    }

    .fa-check{
      text-shadow: 1px 1px 1px #ccc;
      font-size: 30px !important;
    }

    /*sticky social icons */
    .sticky-container{
\t\t/*background-color: #333;*/
\t\tpadding: 0px;
\t\tmargin: 0px;
\t\tposition: fixed;
\t\tright: -119px;
\t\ttop:130px;
\t\twidth: 200px;

\t}

  .sticky > a{
    text-decoration: none !important;
  }

\t.sticky li{
\t\tlist-style-type: none;
\t\tbackground-color: #333;
\t\tcolor: #efefef;
\t\theight: 43px;
\t\tpadding: 0px;
\t\tmargin: 0px 0px 1px 0px;
\t\t-webkit-transition:all 0.25s ease-in-out;
\t\t-moz-transition:all 0.25s ease-in-out;
\t\t-o-transition:all 0.25s ease-in-out;
\t\ttransition:all 0.25s ease-in-out;
\t\tcursor: pointer;
\t\tfilter: url(\"data:image/svg+xml;utf8,<svg xmlns=\\'http://www.w3.org/2000/svg\\'><filter id=\\'grayscale\\'><feColorMatrix type=\\'matrix\\' values=\\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\\'/></filter></svg>#grayscale\"); 
                filter: gray; 
                -webkit-filter: grayscale(100%); 

\t}

\t.sticky li:hover{
\t\tmargin-left: -115px;
\t\t/*-webkit-transform: translateX(-115px);
\t\t-moz-transform: translateX(-115px);
\t\t-o-transform: translateX(-115px);
\t\t-ms-transform: translateX(-115px);
\t\ttransform:translateX(-115px);*/
\t\t/*background-color: #8e44ad;*/
\t\tfilter: url(\"data:image/svg+xml;utf8,<svg xmlns=\\'http://www.w3.org/2000/svg\\'><filter id=\\'grayscale\\'><feColorMatrix type=\\'matrix\\' values=\\'1 0 0 0 0, 0 1 0 0 0, 0 0 1 0 0, 0 0 0 1 0\\'/></filter></svg>#grayscale\");
                -webkit-filter: grayscale(0%);
\t}

\t.sticky li img{
\t\tfloat: left;
\t\tmargin: 5px 5px;
\t\tmargin-right: 10px;

\t}

\t.sticky li p{
\t\tpadding: 0px;
\t\tmargin: 0px;
\t\ttext-transform: uppercase;
\t\tline-height: 43px;

\t}
    </style>

</head>

<body>

    {% partial 'site/header' %}

    {% page %}

    {% partial 'site/sticky' %}

    {% partial 'site/footer' %}

    
\t\t<!-- footer end -->
\t\t<!-- all js here -->
  <!-- Vendor JS Files -->
  <!-- <script src=\"{{ asset('/frontend/assets/vendor/jquery/jquery.min.js') }}\"></script> -->
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\" integrity=\"sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==\" crossorigin=\"anonymous\"></script>
  <script src=\"{{ 'assets/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'|theme }}\"></script>
  <!-- <script src=\"{{ asset('/frontend/assets/owl/owlcarousel/owl.carousel.min.js') }}\"></script> -->
  <script src=\"{{ 'assets/site/js/owl.carousel.min.js'|theme }}\"></script>
  <script src=\"{{ 'assets/site/js/jquery.magnific-popup.min.js'|theme }}\"></script>
  <script src=\"{{ 'assets/frontend/assets/vendor/jqueryeasing/jquery.easing.min.js'|theme }}\"></script>
  <script src=\"{{ 'assets/frontend/assets/vendor/php-email-form/validate.js'|theme }}\"></script>
  <script src=\"{{ 'assets/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js'|theme }}\"></script>
  <script src=\"{{ 'assets/frontend/assets/vendor/venobox/venobox.min.js'|theme }}\"></script>
  <script src=\"{{ 'assets/frontend/assets/vendor/waypoints/jquery.waypoints.min.js'|theme }}\"></script>
  <script src=\"{{ 'assets/frontend/assets/vendor/owlcarousel/owl.carousel.min.js'|theme }}\"></script>

  <script src=\"{{ 'assets/frontend/assets/logo.js'|theme }}\"></script>
  

  <!-- Template Main JS File -->
  <script src=\"{{ 'assets/frontend/assets/js/main.js'|theme }}\"></script>

  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js\"></script>

  <script src=\"{{ 'assets/frontend/assets/gallery.js'|theme }}\"></script>


</body>

</html>", "C:\\xampp\\htdocs\\tradesmartconsult\\TradeSmart/themes/tradesmart/layouts/default.htm", "");
    }
}
