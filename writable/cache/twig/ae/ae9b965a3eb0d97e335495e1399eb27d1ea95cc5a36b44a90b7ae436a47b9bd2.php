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

/* main/painite/login.twig */
class __TwigTemplate_e760552db19e249dbf58a61110a24e01d9103bf16e1973265dbf756bd479be7e extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["site"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["languages"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 3
            if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["lang"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["active"] ?? null) : null)) {
                // line 4
                echo "<html lang=\"";
                echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["lang"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["code"] ?? null) : null), "html", null, true);
                echo "\">
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "<head>
  <base href=\"";
        // line 8
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["site"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["url"] ?? null) : null), "html", null, true);
        echo "/\">
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>";
        // line 12
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
  <meta name=\"keywords\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["keywords"] ?? null), "html", null, true);
        echo "\">
  <meta name=\"description\" content=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo "\">
  ";
        // line 15
        if ((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["site"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["favicon"] ?? null) : null)) {
            // line 16
            echo "    <link rel=\"shortcut icon\" type=\"image/ico\" href=\"";
            echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["site"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["favicon"] ?? null) : null), "html", null, true);
            echo "\" />
  ";
        }
        // line 18
        echo "
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
  <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
  <![endif]-->
  
    ";
        // line 25
        echo twig_escape_filter($this->env, ($context["headerCode"] ?? null), "html", null, true);
        echo "
     
  <!-- Bootstrap 4.5 -->
  <link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\" type=\"text/css\" />
  <!-- animate -->
  <link rel=\"stylesheet\" href=\"assets/css/animate.css\" type=\"text/css\" />
  <!-- Swiper -->
  <link rel=\"stylesheet\" href=\"assets/css/swiper.min.css\" />
  <!-- icons -->
  <link rel=\"stylesheet\" href=\"assets/css/icons.css\" type=\"text/css\" />
  <!-- aos -->
  <link rel=\"stylesheet\" href=\"assets/css/aos.css\" type=\"text/css\" />
  <!-- main css -->
  <link rel=\"stylesheet\" href=\"assets/css/main.css\" type=\"text/css\" />
  <!-- normalize -->
  <link rel=\"stylesheet\" href=\"assets/css/normalize.css\" type=\"text/css\" />

 

</head>

<body class=\"dark-currency\">
  <div id=\"wrapper\">
    <div id=\"content\">
      <div id=\"particles-js\"></div>
      <!-- Start header -->
      <header class=\"header-nav-center crypto_dark\" id=\"myNavbar\">
        <div class=\"container\">
          <!-- navbar -->
          <nav class=\"navbar navbar-expand-lg navbar-light\">
            <a class=\"navbar-brand c-white\" href=\"/\">
              ";
        // line 56
        if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["site"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["logo"] ?? null) : null)) {
            // line 57
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["site"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["logo"] ?? null) : null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["site"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["site_name"] ?? null) : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["site"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["site_name"] ?? null) : null), "html", null, true);
            echo "\" width=\"%100\" height=\"50\">
          ";
        } else {
            // line 59
            echo "            ";
            echo twig_escape_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["site"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["site_name"] ?? null) : null), "html", null, true);
            echo "
          ";
        }
        // line 61
        echo "            </a>
            <button class=\"navbar-toggler menu ripplemenu\" type=\"button\" data-toggle=\"collapse\"
              data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\"
              aria-label=\"Toggle navigation\">
              <svg viewBox=\"0 0 64 48\">
                <path d=\"M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37\"></path>
                <path d=\"M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24\"></path>
                <path d=\"M45,33 L19,33 C-8,33 6,-2 22,14 L45,37\"></path>
              </svg>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

              <div class=\"nav_account ml-auto\">
            <ul class=\"nav navbar-nav navbar-left-block\">
                <li>
\t\t\t\t <a href=\"#\">
\t\t\t\t  <button class=\"btn btn-default c-white\" data-toggle=\"modal\" data-target=\"#mdllLogin\">
         ";
        // line 79
        echo twig_escape_filter($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["lang"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["signin.title"] ?? null) : null), "html", null, true);
        echo "
        </button> </a>
       </li>
       <li>
        ";
        // line 83
        if (($context["servicesPage"] ?? null)) {
            // line 84
            echo "       <a href=\"/services\">
      \t\t\t\t  <button class=\"btn btn-default c-white\">

          ";
            // line 87
            echo twig_escape_filter($this->env, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["lang"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["services.title"] ?? null) : null), "html", null, true);
            echo "
          </button>
          </a>
        ";
        }
        // line 91
        echo "      </li>
              <li>
        ";
        // line 93
        if (($context["blogPage"] ?? null)) {
            // line 94
            echo "          <a href=\"/blog\">\t\t\t\t  <button class=\"btn btn-default c-white\">
";
            // line 95
            echo twig_escape_filter($this->env, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["lang"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["blog.title"] ?? null) : null), "html", null, true);
            echo "</button></a>
        
        ";
        }
        // line 98
        echo "                </li>
              <li>
        ";
        // line 100
        if (($context["faqPage"] ?? null)) {
            // line 101
            echo "          <a href=\"/faq\">\t\t\t\t  <button class=\"btn btn-default c-white\">
";
            // line 102
            echo twig_escape_filter($this->env, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["lang"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["faq.title"] ?? null) : null), "html", null, true);
            echo "</button></a>
        ";
        }
        // line 104
        echo "                </li>
              <li>
        ";
        // line 106
        if (($context["termsPage"] ?? null)) {
            // line 107
            echo "          <a href=\"/terms\">\t\t
          <button class=\"btn btn-default c-white\">
";
            // line 109
            echo twig_escape_filter($this->env, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["lang"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["terms.title"] ?? null) : null), "html", null, true);
            echo "</button></a>
        ";
        }
        // line 111
        echo "                </li>
              <li>
        ";
        // line 113
        if (($context["apiPage"] ?? null)) {
            // line 114
            echo "          <a href=\"/api\">
              \t\t\t\t  <button class=\"btn btn-default c-white\">
";
            // line 116
            echo twig_escape_filter($this->env, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["lang"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["api.title"] ?? null) : null), "html", null, true);
            echo "</button></a>
        ";
        }
        // line 118
        echo "        </li>
              <li>
\t\t\t\t  ";
        // line 120
        if (($context["registerPage"] ?? null)) {
            // line 121
            echo "         <a href=\"/signup\" class=\"btn scale btn_sm_primary c-white btn_try effect-letter rounded-8\">
                   ";
            // line 122
            echo twig_escape_filter($this->env, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["lang"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["signup.title"] ?? null) : null), "html", null, true);
            echo "
                </a>
        
        ";
        }
        // line 126
        echo "               </li>
              </ul>
\t\t\t  </div>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>
        <!-- end container -->
      </header>
      <!-- End header -->
      <!-- Fixed side menu -->
      
      <!-- End. Fixed side menu -->
      <!-- Stat main -->
      <main data-spy=\"scroll\" data-target=\"#navbar-example2\" data-offset=\"0\">
        <!-- Start Banner Section -->
        <section class=\"demo_2 demo_4 banner_section\" id=\"Vision\">
          <div class=\"container\">
            <div class=\"row justify-content-md-center text-center\">
              <div class=\"col-md-10 col-lg-6\">
                <div class=\"banner_title\">
                  <div class=\"offer\">
                    <span class=\"c-magenta\">";
        // line 148
        echo twig_escape_filter($this->env, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["site"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["site_name"] ?? null) : null), "html", null, true);
        echo "</span>
                  </div>
                  <h1 class=\"c-white\">Türkiye'nin En Gelişmiş SMM Paneli</h1>
                  <p>
                    7/24 Tam otomatik alt yapısı sayesinde bütün işlemlerinizi hızlı ve kolayca halledebileceğiniz panelimize hoşgeldiniz.
                  </p>
                </div>
                <div class=\"button--click\">
                    ";
        // line 156
        if (($context["errorText"] ?? null)) {
            // line 157
            echo "        <div class=\"alert alert-dismissible alert-danger\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
          ";
            // line 159
            echo twig_escape_filter($this->env, ($context["errorText"] ?? null), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 162
        echo "      ";
        if (($context["successText"] ?? null)) {
            // line 163
            echo "        <div class=\"alert alert-dismissible alert-success\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
          ";
            // line 165
            echo twig_escape_filter($this->env, ($context["successText"] ?? null), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 168
        echo "
                  <button type=\"button\"
                    class=\"btn btn-token wd-140 btn_md_primary scale effect-letter c-gradient mb-3 mb-sm-0\" data-toggle=\"modal\" data-target=\"#mdllLogin\">
                    ";
        // line 171
        echo twig_escape_filter($this->env, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["lang"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["signin.title"] ?? null) : null), "html", null, true);
        echo "
                  </button>
                  <a href=\"/signup\" class=\"btn btn-token wd-140 btn_md_primary effect-letter mb-3 mb-sm-0 defalult\">
                    ";
        // line 174
        echo twig_escape_filter($this->env, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["lang"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["signup.title"] ?? null) : null), "html", null, true);
        echo "
                  </a>
                </div>
              </div>
              <div class=\"img__head\">
                <img class=\"illy\" src=\"assets/img/crypto/crypto-head02.png\" />
              </div>
              
            <div class=\"about_currency padding-t-12\">
              <div class=\"row justify-content-md-center\">
                <div class=\"col-md-10 col-lg-6 text-center\">
                  <div class=\"title_sections mb-0\">
                    <h2>Vizyonumuz</h2>
                    <p>
                      Bütün müşterilerimizi sorunsuz ve hızlı servisler ile buluşturup ucuz fiyat politikamız ile düzenli ve kaliteli hizmet vermek.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Banner -->

        <!-- Start form Contact -->
       <section class=\"contact_section padding-t-2\" id=\"Contact\">
          <img class=\"img-fluid\" src=\"assets/img/crypto/02.png\" />
          <div class=\"container\">
            <div class=\"row justify-content-md-center\">
              <div class=\"col-md-8 col-lg-3 text-center\">
                <div class=\"title_sections\">
                  <h2 class=\"c-white\">Fenomen Olmaya Hazır Mısın?</h2>
                  <p class=\"c-currency-p\">
                    O Halde Ne Duruyorsun?
Hemen Kayıt Ol ve Fenomenlik Yolunda İlk Adımı At.
                  </p>
                </div>
              </div>
            </div>
            <div class=\"form-row justify-content-md-center margin-t-2\">
              <form method=\"post\" action=\"signup\">
         <div class=\"form-group dark-form\">
            <label for=\"username\" class=\"control-label\" style=\"color:#fff;\">";
        // line 216
        echo twig_escape_filter($this->env, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["lang"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["signup.username"] ?? null) : null), "html", null, true);
        echo "</label>
            <input type=\"text\" class=\"form-control\" name=\"username\" value=\"";
        // line 217
        echo twig_escape_filter($this->env, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["data"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["username"] ?? null) : null), "html", null, true);
        echo "\">
         </div>  
        ";
        // line 219
        if ((0 === twig_compare((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["settings"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["name_secret"] ?? null) : null), 2))) {
            // line 220
            echo "          <div class=\"form-group dark-form\">
            <label for=\"username\" class=\"control-label\" style=\"color:#fff;\">";
            // line 221
            echo twig_escape_filter($this->env, (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["lang"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["signup.first_name"] ?? null) : null), "html", null, true);
            echo "</label>
            <input type=\"text\" class=\"form-control\"  name=\"first_name\" value=\"";
            // line 222
            echo twig_escape_filter($this->env, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["data"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["first_name"] ?? null) : null), "html", null, true);
            echo "\">
          </div>
          <div class=\"form-group dark-form\">
            <label for=\"username\" class=\"control-label\" style=\"color:#fff;\">";
            // line 225
            echo twig_escape_filter($this->env, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["lang"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["signup.last_name"] ?? null) : null), "html", null, true);
            echo "</label>
            <input type=\"text\" class=\"form-control\"  name=\"last_name\" value=\"";
            // line 226
            echo twig_escape_filter($this->env, (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["data"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["last_name"] ?? null) : null), "html", null, true);
            echo "\">
          </div>
\t\t";
        }
        // line 229
        echo "          <div class=\"form-group dark-form\">
            <label for=\"username\" class=\"control-label\" style=\"color:#fff;\">";
        // line 230
        echo twig_escape_filter($this->env, (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["lang"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["signup.email"] ?? null) : null), "html", null, true);
        echo "</label>
            <input type=\"text\" class=\"form-control\" name=\"email\" value=\"";
        // line 231
        echo twig_escape_filter($this->env, (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["data"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["email"] ?? null) : null), "html", null, true);
        echo "\">
          </div>
        ";
        // line 233
        if ((0 === twig_compare((($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["settings"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["skype_area"] ?? null) : null), 2))) {
            // line 234
            echo "          <div class=\"form-group dark-form\">
            <label for=\"username\" class=\"control-label\" style=\"color:#fff;\">";
            // line 235
            echo twig_escape_filter($this->env, (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["lang"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["signup.telephone"] ?? null) : null), "html", null, true);
            echo "</label>
            <input type=\"text\" class=\"form-control\" name=\"telephone\" value=\"";
            // line 236
            echo twig_escape_filter($this->env, (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["data"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["telephone"] ?? null) : null), "html", null, true);
            echo "\">
          </div>
\t\t";
        }
        // line 239
        echo "          <div class=\"form-group dark-form\">
            <label for=\"password\" class=\"control-label\" style=\"color:#fff;\">";
        // line 240
        echo twig_escape_filter($this->env, (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["lang"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["signup.password"] ?? null) : null), "html", null, true);
        echo "</label>
            <input type=\"password\" class=\"form-control\" name=\"password\">
          </div>
          <div class=\"form-group dark-form\">
            <label for=\"password\" class=\"control-label\" style=\"color:#fff;\">";
        // line 244
        echo twig_escape_filter($this->env, (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["lang"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["signup.confirm"] ?? null) : null), "html", null, true);
        echo "</label>
            <input type=\"password\" class=\"form-control\" name=\"password_again\">
          </div>
        ";
        // line 247
        if ((0 === twig_compare((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["settings"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["terms_checkbox"] ?? null) : null), 2))) {
            // line 248
            echo "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"terms\" value=\"1\"><font style=\"color:#fff;\">  ";
            // line 250
            echo twig_escape_filter($this->env, (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["lang"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["signup.accept_terms_text"] ?? null) : null), "html", null, true);
            echo "</font>
            </label>
          </div>
        ";
        }
        // line 254
        echo "
          <div class=\"form-group\">
             <div class=\"g-recaptcha\" data-sitekey=\"";
        // line 256
        echo twig_escape_filter($this->env, ($context["captchaKey"] ?? null), "html", null, true);
        echo "\"></div>
          </div>

            <button type=\"submit\" class=\"btn btn-primary btn-lg\">";
        // line 259
        echo twig_escape_filter($this->env, (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = ($context["lang"] ?? null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["signup.button"] ?? null) : null), "html", null, true);
        echo "</button>
        </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End. form Contact -->

      </main>
      <!-- end main -->
    </div>
    <!-- [id] content -->
    <footer class=\"footer_short theme_crypto padding-t-2 margin-t-10\">
      <div class=\"container\">
        <div class=\"row justify-content-md-center text-center\">
          <div class=\"col-md-8\">
            <a class=\"logo c-white\" href=\"/\">
              ";
        // line 277
        if ((($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = ($context["site"] ?? null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["logo"] ?? null) : null)) {
            // line 278
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["site"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["logo"] ?? null) : null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = ($context["site"] ?? null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["site_name"] ?? null) : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = ($context["site"] ?? null)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["site_name"] ?? null) : null), "html", null, true);
            echo "\">
          ";
        } else {
            // line 280
            echo "            ";
            echo twig_escape_filter($this->env, (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = ($context["site"] ?? null)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["site_name"] ?? null) : null), "html", null, true);
            echo "
          ";
        }
        // line 282
        echo "            </a>
            <div class=\"social--media\">
              <a href=\"#\" class=\"btn so-link\">
                <i class=\"tio appstore\"></i>
              </a>
              <a href=\"#\" class=\"btn so-link\">
                <i class=\"tio github\"></i>
              </a>
              <a href=\"#\" class=\"btn so-link\">
                <i class=\"tio instagram\"></i>
              </a>
              <a href=\"#\" class=\"btn so-link\">
                <i class=\"tio google\"></i>
              </a>
              <a href=\"#\" class=\"btn so-link\">
                <i class=\"tio twitter\"></i>
              </a>
              <a href=\"#\" class=\"btn so-link\">
                <i class=\"tio facebook_square\"></i>
              </a>
            </div>
            <div class=\"other--links\">
              <a href=\"#\">";
        // line 304
        echo twig_escape_filter($this->env, (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = ($context["lang"] ?? null)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["signin.title"] ?? null) : null), "html", null, true);
        echo "</a>
              <a href=\"signup\">";
        // line 305
        echo twig_escape_filter($this->env, (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = ($context["lang"] ?? null)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["signup.title"] ?? null) : null), "html", null, true);
        echo "</a>
              <a href=\"blog\">";
        // line 306
        echo twig_escape_filter($this->env, (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = ($context["lang"] ?? null)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["blog.title"] ?? null) : null), "html", null, true);
        echo "</a>
              <a href=\"faq\">";
        // line 307
        echo twig_escape_filter($this->env, (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = ($context["lang"] ?? null)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["faq.title"] ?? null) : null), "html", null, true);
        echo "</a>
              <a href=\"terms\">";
        // line 308
        echo twig_escape_filter($this->env, (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = ($context["lang"] ?? null)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["terms.title"] ?? null) : null), "html", null, true);
        echo "</a>
               <a href=\"api\">";
        // line 309
        echo twig_escape_filter($this->env, (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = ($context["lang"] ?? null)) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["api.title"] ?? null) : null), "html", null, true);
        echo "</a>
            </div>
            <br>
            <br>
            <div class=\"copyright\">
              <p style=\"color:white;\">
               <a style=\"color:white;\" href=\"/\" rel=\"nofollow\"><u>";
        // line 315
        echo twig_escape_filter($this->env, (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = ($context["settings"] ?? null)) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["site_name"] ?? null) : null), "html", null, true);
        echo "</u></a> © Copyright 2020<br>Tüm Hakları Saklıdır.
              </p>
            </div>
          </div>
        </div>
      </div>
      <img class=\"img-fluid img-footer\" src=\"assets/img/crypto/footer_grid.png\" />
    </footer>

    <!-- Back to top with progress indicator-->
    <div class=\"prgoress_indicator\">
      <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
        <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" />
      </svg>
    </div>


    <!-- Login Modal  -->
    <div class=\"modal mdllaccount fade\" id=\"mdllLogin\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
      aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
              <i class=\"tio clear\"></i>
            </button>
          </div>
          <div class=\"modal-body\">
            <div class=\"form_account\">
              <div class=\"head_account\">
                <div class=\"img_profile\">
                  <img src=\"assets/img/gif/avatar_01.jpg\" />
                </div>
                <div class=\"title\">
                  <h4>Merhaba.</h4>
                  <p>
                    Hoşgeldiniz,<br />
                    Lütfen giriş yapınız
                  </p>
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col-12\">
                  <div class=\"row\">
              <form  method=\"post\" action=\"\" class=\"col-md-12\">

          <div class=\"form-group col-md-12\">
            <label for=\"username\" class=\"control-label\">";
        // line 362
        echo twig_escape_filter($this->env, (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = ($context["lang"] ?? null)) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["signin.username"] ?? null) : null), "html", null, true);
        echo "</label>
            <input type=\"text\" class=\"form-control\" name=\"username\">
          </div>
          <div class=\"form-group col-md-12\">
            <label for=\"password\" class=\"control-label\">";
        // line 366
        echo twig_escape_filter($this->env, (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = ($context["lang"] ?? null)) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["signin.password"] ?? null) : null), "html", null, true);
        echo "</label>
            <input type=\"password\" class=\"form-control\" name=\"password\">
            ";
        // line 368
        if (($context["resetPage"] ?? null)) {
            // line 369
            echo "             <a href=\"resetpassword\" class=\"forgot-password\"> ";
            echo twig_escape_filter($this->env, (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = ($context["lang"] ?? null)) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["signin.password.lost"] ?? null) : null), "html", null, true);
            echo "</a>
            ";
        }
        // line 371
        echo "          </div>
     

          ";
        // line 374
        if (($context["captcha"] ?? null)) {
            // line 375
            echo "            <div class=\"form-group\">
              <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 376
            echo twig_escape_filter($this->env, ($context["captchaKey"] ?? null), "html", null, true);
            echo "\"></div>
            </div>
          ";
        }
        // line 379
        echo "
   
          <div class=\"button--click\">
                          
                  <button type=\"submit\" class=\"btn btn-token wd-140 btn_md_primary scale effect-letter c-gradient mb-3 mb-sm-0\">";
        // line 383
        echo twig_escape_filter($this->env, (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = ($context["lang"] ?? null)) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["signin.button"] ?? null) : null), "html", null, true);
        echo "</button>
                
                </div>
          
          </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End. Modal -->
  </div>
  <!-- End. warapper -->

  ";
        // line 400
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = ($context["site"] ?? null)) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["languages"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 401
            echo "  ";
            if ((($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = $context["lang"]) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da["active"] ?? null) : null)) {
                // line 402
                echo "    <script src=\"https://www.google.com/recaptcha/api.js?hl=";
                echo twig_escape_filter($this->env, (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = $context["lang"]) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["code"] ?? null) : null), "html", null, true);
                echo "\"></script>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 405
        echo "  
  <!-- jquery -->
  <script src=\"assets/js/jquery-3.5.0.js\" type=\"text/javascript\"></script>
  <!-- jquery-migrate -->
  <script src=\"assets/js/jquery-migrate.min.js\" type=\"text/javascript\"></script>
  <!-- popper -->
  <script src=\"assets/js/popper.min.js\" type=\"text/javascript\"></script>
  <!-- bootstrap -->
  <script src=\"assets/js/bootstrap.min.js\" type=\"text/javascript\"></script>
  <!--
  ============
  vendor file
  ============
   -->
  <!-- particles -->
  <script src=\"assets/js/vendor/particles.min.js\" type=\"text/javascript\"></script>
  <!-- TweenMax -->
  <script src=\"assets/js/vendor/TweenMax.min.js\" type=\"text/javascript\"></script>
  <!-- ScrollMagic -->
  <script src=\"assets/js/vendor/ScrollMagic.js\" type=\"text/javascript\"></script>
  <!-- animation.gsap -->
  <script src=\"assets/js/vendor/animation.gsap.js\" type=\"text/javascript\"></script>
  <!-- addIndicators -->
  <script src=\"assets/js/vendor/debug.addIndicators.min.js\" type=\"text/javascript\"></script>
  <!-- Swiper js -->
  <script src=\"assets/js/vendor/swiper.min.js\" type=\"text/javascript\"></script>
  <!-- countdown -->
  <script src=\"assets/js/vendor/countdown.js\" type=\"text/javascript\"></script>
  <!-- simpleParallax -->
  <script src=\"assets/js/vendor/simpleParallax.min.js\" type=\"text/javascript\"></script>
  <!-- counterup -->
  <script src=\"assets/js/vendor/jquery.counterup.min.js\" type=\"text/javascript\"></script>
  <!-- charming -->
  <script src=\"assets/js/vendor/charming.min.js\" type=\"text/javascript\"></script>
  <!-- imagesloaded -->
  <script src=\"assets/js/vendor/imagesloaded.pkgd.min.js\" type=\"text/javascript\"></script>
  <!-- BX-Slider -->
  <script src=\"assets/js/vendor/jquery.bxslider.min.js\" type=\"text/javascript\"></script>
  <!-- Aos -->
  <script src=\"assets/js/vendor/aos.js\" type=\"text/javascript\"></script>
  <!-- main file -->
  <script src=\"assets/js/main.js\" type=\"text/javascript\"></script>

  <script type=\"text/javascript\">
    /*-----------------------------
  Particles
-----------------------------*/
    particlesJS(\"particles-js\", {
      particles: {
        number: {
          value: 80,
          density: {
            enable: true,
            value_area: 800,
          },
        },
        color: {
          value: \"#ffffff\",
        },
        shape: {
          type: \"circle\",
          stroke: {
            width: 0,
            color: \"#000000\",
          },
          polygon: {
            nb_sides: 5,
          },
        },
        opacity: {
          value: 0.5,
          random: true,
          anim: {
            enable: true,
            speed: 1,
            opacity_min: 0,
            sync: false,
          },
        },
        size: {
          value: 2,
          random: true,
          anim: {
            enable: true,
            speed: 2,
            size_min: 0.3,
            sync: false,
          },
        },
        line_linked: {
          enable: false,
          distance: 150,
          color: \"#ffffff\",
          opacity: 0.4,
          width: 1,
        },
        move: {
          enable: true,
          speed: 0.9,
          direction: \"none\",
          random: true,
          straight: false,
          out_mode: \"out\",
          bounce: false,
          attract: {
            enable: false,
            rotateX: 600,
            rotateY: 600,
          },
        },
      },
    });
  </script>
</body>


</html>";
    }

    public function getTemplateName()
    {
        return "main/painite/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  700 => 405,  690 => 402,  687 => 401,  683 => 400,  663 => 383,  657 => 379,  651 => 376,  648 => 375,  646 => 374,  641 => 371,  635 => 369,  633 => 368,  628 => 366,  621 => 362,  571 => 315,  562 => 309,  558 => 308,  554 => 307,  550 => 306,  546 => 305,  542 => 304,  518 => 282,  512 => 280,  502 => 278,  500 => 277,  479 => 259,  473 => 256,  469 => 254,  462 => 250,  458 => 248,  456 => 247,  450 => 244,  443 => 240,  440 => 239,  434 => 236,  430 => 235,  427 => 234,  425 => 233,  420 => 231,  416 => 230,  413 => 229,  407 => 226,  403 => 225,  397 => 222,  393 => 221,  390 => 220,  388 => 219,  383 => 217,  379 => 216,  334 => 174,  328 => 171,  323 => 168,  317 => 165,  313 => 163,  310 => 162,  304 => 159,  300 => 157,  298 => 156,  287 => 148,  263 => 126,  256 => 122,  253 => 121,  251 => 120,  247 => 118,  242 => 116,  238 => 114,  236 => 113,  232 => 111,  227 => 109,  223 => 107,  221 => 106,  217 => 104,  212 => 102,  209 => 101,  207 => 100,  203 => 98,  197 => 95,  194 => 94,  192 => 93,  188 => 91,  181 => 87,  176 => 84,  174 => 83,  167 => 79,  147 => 61,  141 => 59,  131 => 57,  129 => 56,  95 => 25,  86 => 18,  80 => 16,  78 => 15,  74 => 14,  70 => 13,  66 => 12,  59 => 8,  56 => 7,  46 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/painite/login.twig", "/home/glycoktb/test.glycondns.co/app/Views/main/painite/login.twig");
    }
}
