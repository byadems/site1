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

/* main/platinum/login.twig */
class __TwigTemplate_11b2798c6a65bcd1479e7bc46e14e6e219705f20e2e89797375446add2b116a3 extends Template
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
        echo "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
  <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
  <![endif]-->
  
    ";
        // line 25
        echo twig_escape_filter($this->env, ($context["headerCode"] ?? null), "html", null, true);
        echo "
     
    <!--google fonts-->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans&display=swap\"
          rel=\"stylesheet\">

    <!--Bootstrap css-->
    <link rel=\"stylesheet\" href=\"assets/platinum/css/bootstrap.min.css\">
    <!--Magnific popup css-->
    <link rel=\"stylesheet\" href=\"assets/platinum/css/magnific-popup.css\">
    <!--Themify icon css-->
    <link rel=\"stylesheet\" href=\"assets/platinum/css/themify-icons.css\">
    <!--animated css-->
    <link rel=\"stylesheet\" href=\"assets/platinum/css/animate.min.css\">
    <!--ytplayer css-->
    <link rel=\"stylesheet\" href=\"assets/platinum/css/jquery.mb.YTPlayer.min.css\">
    <!--Owl carousel css-->
    <link rel=\"stylesheet\" href=\"assets/platinum/css/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"assets/platinum/css/owl.theme.default.min.css\">
    <!--custom css-->
    <link rel=\"stylesheet\" href=\"assets/platinum/css/style.css\">
    <!--responsive css-->
    <link rel=\"stylesheet\" href=\"assets/platinum/css/responsive.css\">

</head>
<body>


<!--loader start-->
<div id=\"preloader\">
    <div class=\"loader1\">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!--loader end-->

<!--header section start-->
<header class=\"header\">
    <!--start navbar-->
    <nav class=\"navbar navbar-expand-lg fixed-top bg-transparent\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"/\">
                 ";
        // line 71
        if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["site"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["logo"] ?? null) : null)) {
            // line 72
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["site"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["logo"] ?? null) : null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["site"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["site_name"] ?? null) : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["site"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["site_name"] ?? null) : null), "html", null, true);
            echo "\" width=\"%100\" height=\"50\">
          ";
        } else {
            // line 74
            echo "            ";
            echo twig_escape_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["site"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["site_name"] ?? null) : null), "html", null, true);
            echo "
          ";
        }
        // line 76
        echo "            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                    aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"ti-menu\"></span>
            </button>
            <div class=\"collapse navbar-collapse h-auto\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav ml-auto menu\">
                  <li ";
        // line 83
        if ((0 === twig_compare(($context["active_menu"] ?? null), "auth"))) {
            echo " class=\"active\" ";
        }
        echo ">
          <a href=\"/\" class=\"page-scroll\">";
        // line 84
        echo twig_escape_filter($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["lang"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["signin.title"] ?? null) : null), "html", null, true);
        echo "</a>
        </li> 
        ";
        // line 86
        if (($context["servicesPage"] ?? null)) {
            // line 87
            echo "        <li ";
            if ((0 === twig_compare(($context["active_menu"] ?? null), "services"))) {
                echo " class=\"active\" ";
            }
            echo ">
          <a class=\"page-scroll\" href=\"/services\">";
            // line 88
            echo twig_escape_filter($this->env, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["lang"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["services.title"] ?? null) : null), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 91
        echo "        ";
        if (($context["registerPage"] ?? null)) {
            // line 92
            echo "        <li ";
            if ((0 === twig_compare(($context["active_menu"] ?? null), "signup"))) {
                echo " class=\"active\" ";
            }
            echo ">
          <a class=\"page-scroll\" href=\"/signup\">";
            // line 93
            echo twig_escape_filter($this->env, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["lang"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["signup.title"] ?? null) : null), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 96
        echo "        ";
        if (($context["blogPage"] ?? null)) {
            // line 97
            echo "        <li ";
            if ((0 === twig_compare(($context["active_menu"] ?? null), "blog"))) {
                echo " class=\"active\" ";
            }
            echo ">
          <a class=\"page-scroll\" href=\"/blog\">";
            // line 98
            echo twig_escape_filter($this->env, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["lang"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["blog.title"] ?? null) : null), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 101
        echo "        ";
        if (($context["faqPage"] ?? null)) {
            // line 102
            echo "        <li ";
            if ((0 === twig_compare(($context["active_menu"] ?? null), "faq"))) {
                echo " class=\"active\" ";
            }
            echo ">
          <a class=\"page-scroll\" href=\"/faq\">";
            // line 103
            echo twig_escape_filter($this->env, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["lang"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["faq.title"] ?? null) : null), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 106
        echo "        ";
        if (($context["termsPage"] ?? null)) {
            // line 107
            echo "        <li ";
            if ((0 === twig_compare(($context["active_menu"] ?? null), "terms"))) {
                echo " class=\"active\" ";
            }
            echo ">
          <a class=\"page-scroll\" href=\"/terms\">";
            // line 108
            echo twig_escape_filter($this->env, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["lang"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["terms.title"] ?? null) : null), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 111
        echo "        ";
        if (($context["apiPage"] ?? null)) {
            // line 112
            echo "        <li ";
            if ((0 === twig_compare(($context["active_menu"] ?? null), "api"))) {
                echo " class=\"active\" ";
            }
            echo ">
          <a class=\"page-scroll\" href=\"/api\">";
            // line 113
            echo twig_escape_filter($this->env, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["lang"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["api.title"] ?? null) : null), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 116
        echo "                </ul>
            </div>
        </div>
    </nav>
</header>
<!--header section end-->


<!--body content wrap start-->
<div class=\"main\">

    <!--hero section start-->
    <section class=\"hero-equal-height pt-100 gradient-overlay\"
             style=\"background: url('assets/platinum/img/hero-bg-4.jpg')no-repeat center center / cover\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-between\">
                <div class=\"col-md-6 col-lg-6\">
                    <div class=\"hero-content-left text-white pb-100 mt-lg-0 mt-md-5 mt-sm-5 mt-5\">
                        <h1 class=\"text-white\">Türkiye'nin En Gelişmiş SMM Paneli</h1>
                        <p class=\"lead\">
                            7/24 Tam otomatik alt yapısı sayesinde bütün işlemlerinizi hızlı ve kolayca halledebileceğiniz panelimize hoşgeldiniz.
                        </p>
                        
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-5\">
                    <div class=\"sign-up-form-wrap position-relative z-index shadow-lg rounded p-5 w-100 gray-light-bg\">
                        <div class=\"sign-up-form-header text-center mb-4\">
                            <h4 class=\"mb-0\">";
        // line 144
        echo twig_escape_filter($this->env, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["site"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["site_name"] ?? null) : null), "html", null, true);
        echo "’e Hoş Geldiniz! </h4>
                            <p>Türkiye’nin En Hızlı Sosyal Medya Paneli</p>
                        </div>
                        <form method=\"post\" action=\"\" class=\"login-signup-form\">
                                  ";
        // line 148
        if (($context["errorText"] ?? null)) {
            // line 149
            echo "        <div class=\"alert alert-dismissible alert-danger\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
          ";
            // line 151
            echo twig_escape_filter($this->env, ($context["errorText"] ?? null), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 154
        echo "      ";
        if (($context["successText"] ?? null)) {
            // line 155
            echo "        <div class=\"alert alert-dismissible alert-success\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
          ";
            // line 157
            echo twig_escape_filter($this->env, ($context["successText"] ?? null), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 160
        echo "                              <div class=\"form-group\">
            <label for=\"username\" class=\"control-label\">";
        // line 161
        echo twig_escape_filter($this->env, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["lang"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["signin.username"] ?? null) : null), "html", null, true);
        echo "</label>
            <input type=\"text\" class=\"form-control\" name=\"username\">
          </div>
          <div class=\"form-group  form-group__password\">
            <label for=\"password\" class=\"control-label\">";
        // line 165
        echo twig_escape_filter($this->env, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["lang"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["signin.password"] ?? null) : null), "html", null, true);
        echo "</label>
            <input type=\"password\" class=\"form-control\" name=\"password\">
            ";
        // line 167
        if (($context["resetPage"] ?? null)) {
            // line 168
            echo "             <a href=\"resetpassword\" class=\"forgot-password\"> ";
            echo twig_escape_filter($this->env, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["lang"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["signin.password.lost"] ?? null) : null), "html", null, true);
            echo "</a>
            ";
        }
        // line 170
        echo "       <br>
<b>Üyeliğiniz yok ise hemen <a href=\"/signup\"> buraya tıklayarak  </a> ücretsiz üye olabilirsiniz! </b>
\t\t\t


\t   </div>

          ";
        // line 177
        if (($context["captcha"] ?? null)) {
            // line 178
            echo "            <div class=\"form-group\">
              <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 179
            echo twig_escape_filter($this->env, ($context["captchaKey"] ?? null), "html", null, true);
            echo "\"></div>
            </div>
          ";
        }
        // line 182
        echo "
          <button type=\"submit\" class=\"btn btn-primary click\">";
        // line 183
        echo twig_escape_filter($this->env, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["lang"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["signin.button"] ?? null) : null), "html", null, true);
        echo "</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"shape-bottom overflow-hidden\">
            <img src=\"assets/platinum/img/hero-shape.svg\" alt=\"shape\" class=\"bottom-shape\">
\t\t\t
\t\t\t   
        </div>
    </section>
    <!--hero section end-->

    <!--how it work start-->
    <section class=\"work-process-new ptb-100\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-lg-8\">
                    <div class=\"section-heading\">
                        <h4>Gelişmiş Ayrıcalıklar</h4>
                      <h2>En Hızlı SMM Panel</h2>
                        <p>Türkiye'nin en hızlı SMM Paneli ile hemen tanışın. Kalitenin keyfini çıkartın.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"work-process-wrap\">
                        <div class=\"single-work-process mt-lg-5 mt-md-5 mt-sm-5 mt-5\">
                            <div class=\"work-process-icon-wrap secondary-bg rounded\">
                                <i class=\"fa fa-pencil-square-o\" style=\"font-size:44px;color:white\"></i>
                                <span class=\"process-step color-secondary white-bg shadow-sm\">1</span>
                            </div>
                            <span class=\"work-process-divider\"></span>
                            <div class=\"work-process-content mt-4\">
                                <h5>Kayıt Ol</h5>
                                <p>Sitemize üyelikler tamamen ücretsizdir ve her zaman ücretsiz kalacaktır.</p>
                            </div>
                        </div>
                        <div class=\"single-work-process mt-lg-5 mt-md-5 mt-sm-5 mt-5\">
                            <div class=\"work-process-icon-wrap secondary-bg rounded\">
                                <i class=\"fa fa-credit-card-alt\" style=\"font-size:44px;color:white\"></i>
                                <span class=\"process-step color-secondary white-bg shadow-sm\">2</span>
                            </div>
                            <span class=\"work-process-divider\"></span>
                            <div class=\"work-process-content mt-4\">
                                <h5>Bakiye Yükle</h5>
                                <p>3D Secure ile online ödeme yapabilir. Dilerseniz anlaşmalı bankalar üzerinden Havale ve EFT yapabilirsiniz.</p>
                            </div>
                        </div>
                        <div class=\"single-work-process mt-lg-5 mt-md-5 mt-sm-5 mt-5\">
                            <div class=\"work-process-icon-wrap secondary-bg rounded\">
                                <i class=\"fa fa-shopping-basket\" style=\"font-size:44px;color:white\"></i>
                                <span class=\"process-step color-secondary white-bg shadow-sm\">3</span>
                            </div>
                            <span class=\"work-process-divider\"></span>
                            <div class=\"work-process-content mt-4\">
                                <h5>Sipariş Ver</h5>
                                <p>İstediğiniz servisi seçip, formu doldurduktan sonra kolaylıkla sipariş verebilirsiniz.</p>
                            </div>
                        </div>
                        <div class=\"single-work-process mt-lg-5 mt-md-5 mt-sm-5 mt-5\">
                            <div class=\"work-process-icon-wrap secondary-bg rounded\">
                                <i class=\"fa fa-star\" style=\"font-size:44px;color:white\"></i>
                                <span class=\"process-step color-secondary white-bg shadow-sm\">4</span>
                            </div>
                            <span class=\"work-process-divider\"></span>
                            <div class=\"work-process-content mt-4\">
                                <h5>Fenomen Ol!</h5>
                                <p>Sosyal Medya da fenomen olmaya başlayın.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--how it work end-->

    <!--features section start-->
    <section id=\"features\" class=\"feature-section ptb-100 gray-light-bg\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-9 col-lg-9\">
                    <div class=\"section-heading text-center mb-5\">
                        <h2>";
        // line 269
        echo twig_escape_filter($this->env, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["site"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["site_name"] ?? null) : null), "html", null, true);
        echo "</h2>
                        <p>Türkiye'nin en kaliteli SMM Panelinin öne çıkan özellikleri ile tanışın.</p>

                    </div>
                </div>
            </div>

            <!--feature new style start-->
            <div class=\"row align-items-center\">
                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"d-flex align-items-start mb-sm-0 mb-md-5 mb-lg-5\">
                                <span class=\"icon-sm color-1 color-1-bg p-3 mr-4 mt-1 rounded\"><i class=\"fa fa-mobile-phone\" style=\"font-size:43px\"></i></span>
                                <div class=\"icon-text\">
                                    <h5 class=\"mb-2\">Responsive Uyumlu</h5>
                                    <p>Mobil cihazlarınız üzerinde kolay kullanım sunar.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex align-items-start mb-sm-0 mb-md-5 mb-lg-5\">
                                <span class=\"icon-sm color-2 color-2-bg p-3 mr-4 mt-1 rounded\"><i class=\"fa fa-language\" style=\"font-size:35px\"></i></span>
                                <div class=\"icon-text\">
                                    <h5 class=\"mb-2\">Multi Dil</h5>
                                    <p>İstediğiniz dili seçip kullanabilirsiniz.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex align-items-start mb-sm-0 mb-md-5 mb-lg-5\">
                                <span class=\"ti-headphone-alt icon-sm color-5 color-5-bg p-3 mr-4 mt-1 rounded\"></span>
                                <div class=\"icon-text\">
                                    <h5 class=\"mb-2\">7/24 Canlı Destek</h5>
                                    <p>İstek,soru ve şikayetlerinizi bildirebilirsiniz.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12 d-none d-sm-none d-md-block d-lg-block\">
                    <div class=\"position-relative pb-md-5 py-lg-0\">
                        <img alt=\"Image placeholder\" src=\"assets/img/phone-2.png\" class=\"img-center img-fluid\">
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"d-flex align-items-start mb-sm-0 mb-md-5 mb-lg-5\">
                                <span class=\"icon-sm color-4 color-4-bg p-3 mr-4 mt-1 rounded\"><i class=\"fa fa-recycle\" style=\"font-size:35px\"></i></span>
                                <div class=\"icon-text\">
                                    <h5 class=\"mb-2\">Güncel Servisler</h5>
                                    <p>Servislerimiz sürekli güncel ve aktiftir.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex align-items-start mb-sm-0 mb-md-5 mb-lg-5\">
                                <span class=\"icon-sm color-3 color-3-bg p-3 mr-4 mt-1 rounded\"><i class=\"fa fa-heartbeat\" style=\"font-size:35px\"></i></span>
                                <div class=\"icon-text\">
                                    <h5 class=\"mb-2\">Kaliteli Servisler</h5>
                                    <p>Sürekli test ettiğimiz kaliteli servisleri sizlere sunuyoruz.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex align-items-start mb-sm-0 mb-md-5 mb-lg-5\">
                                <span class=\"icon-sm color-6 color-6-bg p-3 mr-4 mt-1 rounded\"><i class=\"fa fa-bolt\" style=\"font-size:43px\"></i></span>
                                <div class=\"icon-text\">
                                    <h5 class=\"mb-2\">Hızlı Servisler</h5>
                                    <p>Hızlı başlayıp çabuk tamamlanan servisleri sunuyoruz.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--feature new style end-->
        </div>
    </section>
    <!--features section end-->

    <!--feature section tab style start-->
    <section id=\"how-it-work\" class=\"feature-tab-section ptb-100\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"feature-content-wrap\">
                        <ul class=\"nav nav-tabs feature-tab justify-content-center border-bottom-0\" data-tabs=\"tabs\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link active h6 d-flex align-items-center\" href=\"#tab6-1\" data-toggle=\"tab\">
                                    <span class=\"d-inline-block color-1 mr-2 icon-sm p-1\"><i class=\"fa fa-pencil-square-o\" style=\"font-size:44px\"></i></span>
                                    Kayıt Ol
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link h6 d-flex align-items-center\" href=\"#tab6-2\" data-toggle=\"tab\">
                                    <span class=\"d-inline-block color-2 mr-2 icon-sm p-1\"><i class=\"fa fa-credit-card-alt\" style=\"font-size:44px\"></i></span>
                                    Bakiye Yükle
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link h6 d-flex align-items-center\" href=\"#tab6-3\" data-toggle=\"tab\">
                                    <span class=\"d-inline-block color-3 mr-2 icon-sm p-1\"><i class=\"fa fa-shopping-basket\" style=\"font-size:44px\"></i></span>
                                    Sipariş Ver
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link h6 d-flex align-items-center\" href=\"#tab6-4\" data-toggle=\"tab\">
                                    <span class=\"d-inline-block color-4 mr-2 icon-sm p-1\"><i class=\"fa fa-star\" style=\"font-size:44px\"></i></span>
                                    Fenomen Ol!
                                </a>
                            </li>
                        </ul>
                        <div class=\"tab-content feature-tab-content\">
                            <div class=\"tab-pane active\" id=\"tab6-1\">
                                <div class=\"row align-items-center justify-content-between pt-5\">
                                    <div class=\"col-md-5 col-lg-4\">
                                        <div class=\"tab-content-wrap\">
                                            <span class=\"h1 display-3 color-secondary font-weight-bold mb-3 d-block\">01.</span>
                                            <h3>Kayıt Nasıl Olunur?</h3>
                                            <p>Sitemize üyelikler tamamen ücretsizdir ve her zaman ücretsiz kalacaktır.</p>
                                            <p>Kayıt ol butonuna tıklayıp karşınıza çıkan kayıt formunu eksiksiz doldurmanız durumunda kaydınız başarılı bir şekilde gerçekleşir.</p>
                                            <a href=\"signup\" class=\"mt-3 d-flex align-items-center\">Kayıt Olmak İçin Tıklayınız.<span class=\"ti-angle-right ml-2\"></span></a>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-lg-7\">
                                        <div class=\"img-wrap\">
                                            <img src=\"./assets/img/slider.png\" alt=\"feature\" class=\"img-fluid rounded\"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane\" id=\"tab6-2\">
                                <div class=\"row align-items-center justify-content-between pt-5\">
                                    <div class=\"col-md-5 col-lg-4\">
                                        <div class=\"tab-content-wrap\">
                                            <span class=\"h1 display-3 color-secondary font-weight-bold mb-3 d-block\">02.</span>
                                            <h3>Bakiye Nasıl Yüklenir?</h3>
                                            <p>3D Secure ile online ödeme yapabilir. Dilerseniz anlaşmalı bankalar üzerinden Havale ve EFT yapabilirsiniz.</p>
                                            <p>Bakiye yükle butonuna tıklayıp karşınıza çıkan ödeme yöntemlerinden dilediğinizi seçerek bakiyenizi yükleyebilirsiniz. Online ödemeler anında yüklenir fakat Havale ve EFT ödemeleriniz için Ödeme Bildirimi oluşturmalısınız.</p>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-lg-7\">
                                        <div class=\"img-wrap\">
                                            <img src=\"assets/img/phone-2.png\" alt=\"feature\" class=\"img-fluid rounded\"/>
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane\" id=\"tab6-3\">
                                <div class=\"row align-items-center justify-content-between pt-5\">
                                    <div class=\"col-md-5 col-lg-4\">
                                        <div class=\"tab-content-wrap\">
                                            <span class=\"h1 display-3 color-secondary font-weight-bold mb-3 d-block\">03.</span>
                                            <h3>Sipariş Nasıl Verilir?</h3>
                                            <p>İstediğiniz servisi seçip, formu doldurduktan sonra kolaylıkla sipariş verebilirsiniz.

</p>
                                            <p>İstediğiniz kategoriyi ve servisi seçerek ilgili servisin açıklamasındaki örnek linki baz alarak sipariş vermek istediğiniz linki yazarak ve miktarını girerek siparişinizi verebilirsiniz.</p>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-lg-7\">
                                        <div class=\"img-wrap\">
                                            <img src=\"assets/img/customers.png\" alt=\"feature\" class=\"img-fluid rounded\"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane\" id=\"tab6-4\">
                                <div class=\"row align-items-center justify-content-between pt-5\">
                                    <div class=\"col-md-5 col-lg-4\">
                                        <div class=\"tab-content-wrap\">
                                            <span class=\"h1 display-3 color-secondary font-weight-bold mb-3 d-block\">04.</span>
                                            <h3>Fenomen Olun!</h3>
                                            <p>Sosyal Medya da fenomen olmaya başlayın.</p>
                                            <p>Satın almış olduğunuz etkileşimlerin hızlı bir şekilde teslim edilmesinin ardından sosyal medyada fenomen olabilir. Geniş kitlelere adınızı duyurabilirsiniz.</p>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-lg-7\">
                                        <div class=\"img-wrap\">
                                            <img src=\"assets/img/home-image (1).png\" alt=\"feature\" class=\"img-fluid rounded\"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--feature section tab style end-->


    <!--testimonial section start-->
    <section id=\"reviews\" class=\"testimonial-section ptb-100 gray-light-bg\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-9 col-lg-8\">
                    <div class=\"section-heading mb-5 text-center\">
                        <h2>Müşteri Yorumları</h2>
                        <p class=\"lead\">
                            10.000+ Mutlu Müşterinin Yorumları </p>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-4 col-lg-4\">
                    <div class=\"testimonial-single shadow-sm gray-light-bg rounded p-4\">
                        <blockquote>
                            Güvenilir, kaliteli ve hızlı servisler ile her zaman müşteri memnuniyeti odaklı çalıştıkları için teşekkürler ";
        // line 482
        echo twig_escape_filter($this->env, (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["site"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["site_name"] ?? null) : null), "html", null, true);
        echo ".
                        </blockquote>
                        <div class=\"client-ratting mt-2\">
                            <ul class=\"list-inline\">
                                <li class=\"list-inline-item\"><span class=\"ti-star ratting-color\"></span></li>
                                <li class=\"list-inline-item\"><span class=\"ti-star ratting-color\"></span></li>
                                <li class=\"list-inline-item\"><span class=\"ti-star ratting-color\"></span></li>
                                <li class=\"list-inline-item\"><span class=\"ti-star ratting-color\"></span></li>
                                <li class=\"list-inline-item\"><span class=\"ti-star ratting-color\"></span></li>
                            </ul>
                            <h6 class=\"font-weight-bold\">5.0 <small class=\"font-weight-lighter\">Yıldız</small></h6>
                        </div>
                    </div>
                    <div class=\"client-info-wrap d-flex align-items-center mt-5\">
                        <div class=\"client-img mr-3\">
                            <img src=\"assets/platinum/img/client-1.jpg\" alt=\"client\" width=\"60\" class=\"img-fluid rounded-circle shadow-sm\"/>
                        </div>
                        <div class=\"client-info\">
                            <h5 class=\"mb-0\">Abdullah Uçkun</h5>
                            <p class=\"mb-0\">R10.net</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-lg-4\">
                    <div class=\"testimonial-single shadow-sm gray-light-bg rounded p-4\">
                        <blockquote>
                           ";
        // line 508
        echo twig_escape_filter($this->env, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["site"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["site_name"] ?? null) : null), "html", null, true);
        echo " ile çalışmaya başladığımdan beri hizmetlerinden son derece memnunum.
                        </blockquote>
                        <div class=\"client-ratting mt-2\">
                            <ul class=\"list-inline\">
                                <li class=\"list-inline-item\"><span class=\"ti-star ratting-color\"></span></li>
                                <li class=\"list-inline-item\"><span class=\"ti-star ratting-color\"></span></li>
                                <li class=\"list-inline-item\"><span class=\"ti-star ratting-color\"></span></li>
                                <li class=\"list-inline-item\"><span class=\"ti-star ratting-color\"></span></li>
                                <li class=\"list-inline-item\"><span class=\"ti-star ratting-color\"></span></li>
                            </ul>
                            <h6 class=\"font-weight-bold\">5.0 <small class=\"font-weight-lighter\">Yıldız</small></h6>
                        </div>
                    </div>
                    <div class=\"client-info-wrap d-flex align-items-center mt-5\">
                        <div class=\"client-img mr-3\">
                            <img src=\"assets/platinum/img/client-2.jpg\" alt=\"client\" width=\"60\" class=\"img-fluid rounded-circle shadow-sm\"/>
                        </div>
                        <div class=\"client-info\">
                            <h5 class=\"mb-0\">Dilara Kurt</h5>
                            <p class=\"mb-0\">Virgul.net</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-lg-4\">
                    <div class=\"testimonial-single shadow-sm gray-light-bg rounded p-4\">
                        <blockquote>
                            İşini gerçekten hakkıyla yapan bir panel. Teşekkürler ";
        // line 534
        echo twig_escape_filter($this->env, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["site"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["site_name"] ?? null) : null), "html", null, true);
        echo ".
                        </blockquote>
                        <div class=\"client-ratting mt-2\">
                            <ul class=\"list-inline\">
                                <li class=\"list-inline-item\"><span class=\"ti-star ratting-color\"></span></li>
                                <li class=\"list-inline-item\"><span class=\"ti-star ratting-color\"></span></li>
                                <li class=\"list-inline-item\"><span class=\"ti-star ratting-color\"></span></li>
                                <li class=\"list-inline-item\"><span class=\"ti-star ratting-color\"></span></li>
                                <li class=\"list-inline-item\"><span class=\"ti-star ratting-color\"></span></li>
                            </ul>
                            <h6 class=\"font-weight-bold\">5.0 <small class=\"font-weight-lighter\">Yıldız</small></h6>
                        </div>
                    </div>
                    <div class=\"client-info-wrap d-flex align-items-center mt-5\">
                        <div class=\"client-img mr-3\">
                            <img src=\"assets/platinum/img/client-3.jpg\" alt=\"client\" width=\"60\" class=\"img-fluid rounded-circle shadow-sm\"/>
                        </div>
                        <div class=\"client-info\">
                            <h5 class=\"mb-0\">Şemsi Ovacı</h5>
                            <p class=\"mb-0\">WMAraci.com</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--testimonial section end-->

    <!--download section start-->
    <section id=\"download\" class=\"gradient-overlay\" style=\"background: url('assets/platinum/img/hero-bg-4.jpg')no-repeat center center / cover\">
        <div class=\"container\">
            <div class=\"row justify-content-around align-items-end\">
                <div class=\"col-md-6 col-lg-5\">
                    <div class=\"download-txt text-white ptb-100\">
                        <h2 class=\"text-white\">
                            Kaliteyi Ucuza Almak İster Misin?
                        </h2>
                        <p class=\"lead\">Hemen aşağıdan servis listemize ve fiyatlarımıza ulaşabilirsin.</p>
                        <div class=\"action-btns download-btn mt-4\">
                            <a href=\"services\" class=\"btn solid-white-btn mr-3\">Servis Listesi</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-7\">
                    <div class=\"d-flex align-items-end\">
                        <img src=\"assets/img/home-image (1).png\" alt=\"download\"  width=\"%100\" height=\"400\"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--download section end-->

    

    <!--faq section start-->
    <div id=\"faq\" class=\"ptb-100\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-9 col-lg-8\">
                    <div class=\"section-heading mb-5\">
                        <h2>Sık Sorulan Sorular</h2>
                        <p>Merak ettiğiniz tüm herşey burada. Eğer sorunlarınız hakkında daha detaylı bilgi almak isterseniz bizimle iletişime geçiniz.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12 col-lg-12\">
                    <div id=\"accordion\" class=\"accordion\">
                        <div class=\"card mb-0\">
                            <a class=\"card-header collapsed\" data-toggle=\"collapse\" href=\"#collapseOne\">
                                <h6 class=\"mb-0 d-inline-block\"><span class=\"ti-receipt mr-3\"></span> ÖDEMEYİ NASIL YAPABİLİRİM ?</h6>
                            </a>
                            <div id=\"collapseOne\" class=\"collapse\" data-parent=\"#accordion\" style=\"\">
                                <div class=\"card-body\">
                                    <p>Havale ve EFT , Mobil veya Kredi Kartı üzerinden ödeme yapabilirsiniz.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"card mb-0\">
                            <a class=\"card-header collapsed\" data-toggle=\"collapse\" href=\"#collapseTwo\">
                                <h6 class=\"mb-0 d-inline-block\"><span class=\"ti-gallery mr-3\"></span> SMM PANELİM MEVCUT , SİZE NASIL SERVİSLERİ BAĞLAYABİLİRİM ?</h6>
                            </a>
                            <div id=\"collapseTwo\" class=\"collapse\" data-parent=\"#accordion\" style=\"\">
                                <div class=\"card-body\">
                                    <p>SMM Paneliniz mevcut ise , üye girişi yaptıktan sonra sağ üstteki ayarlar kısmından api key mevcuttur. Api keyi kendi panelinize girerek sistemden servisleri otomatik olarak kendi sisteminize bağlayabilir , satış yapabilirsiniz.Detaylı bilgi için site içi destek kısmından ulaşabilirsiniz.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"card mb-0\">
                            <a class=\"card-header collapsed\" data-toggle=\"collapse\" href=\"#collapseThree\">
                                <h6 class=\"mb-0 d-inline-block\"><span class=\"ti-wallet mr-3\"></span> ŞİFRE VERMEM GEREKİYOR MU ?</h6>
                            </a>
                            <div id=\"collapseThree\" class=\"collapse\" data-parent=\"#accordion\" style=\"\">
                                <div class=\"card-body\">
                                    <p>Sistem içerisinde olan tüm servislerde şifreniz gerekmemektedir. Şifrenizi istemiyoruz.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"card mb-0\">
                            <a class=\"card-header collapsed\" data-toggle=\"collapse\" href=\"#collapseFour\">
                                <h6 class=\"mb-0 d-inline-block\"><span class=\"ti-headphone-alt mr-3\"></span> BENİM PROFİLİMDEN PAYLAŞIM YAPILACAK MI ? BAŞKASINI BEĞENİR MİYİM ?</h6>
                            </a>
                            <div id=\"collapseFour\" class=\"collapse\" data-parent=\"#accordion\" style=\"\">
                                <div class=\"card-body\">
                                    <p>Kesinlikle başkasını beğenmez veya takip etmezsiniz. Diğer uygulamalar gibi herhangir bir uygulamaya giriş izinli sistem değildir.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--faq section end-->

    <!--download section start-->
    <section class=\"gradient-overlay ptb-100\" style=\"background: url('assets/platinum/img/hero-bg-1.jpg')no-repeat center center / cover fixed\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-9 col-lg-8\">
                    <div class=\"section-heading text-center\">
                        <h2 class=\"text-white\">Fenomen Olmaya Hazır Mısın?<br>O Halde Ne Duruyorsun?</h2>
                        <div class=\"action-btns download-btn mt-4\">
                            <a href=\"/\" class=\"btn outline-white-btn mr-3 page-scroll\"> Giriş Yap</a>
                            <a href=\"signup\" class=\"btn solid-white-btn page-scroll\"> Kayıt Ol</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--download section end-->

 <!--kayit yeri baslangic-->
    <div class=\"container\">
  <div class=\"row\">
    <div class=\"col-lg-12\">
      <br><br>
      ";
        // line 674
        if (($context["errorText"] ?? null)) {
            // line 675
            echo "        <div class=\"alert alert-dismissible alert-danger\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
          ";
            // line 677
            echo twig_escape_filter($this->env, ($context["errorText"] ?? null), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 680
        echo "      ";
        if (($context["successText"] ?? null)) {
            // line 681
            echo "        <div class=\"alert alert-dismissible alert-success\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
          ";
            // line 683
            echo twig_escape_filter($this->env, ($context["successText"] ?? null), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 686
        echo "
<div class=\"contact-us-form gray-light-bg rounded p-5\">
<h4>Kayıt Formu</h4>
  <div class=\"kayit_form_div\">
       <form method=\"post\" action=\"signup\">
         <div class=\"form-group\">
            <label for=\"username\" class=\"control-label\">";
        // line 692
        echo twig_escape_filter($this->env, (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["lang"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["signup.username"] ?? null) : null), "html", null, true);
        echo "</label>
            <input type=\"text\" class=\"form-control\" name=\"username\" value=\"";
        // line 693
        echo twig_escape_filter($this->env, (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["data"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["username"] ?? null) : null), "html", null, true);
        echo "\">
         </div>  <br>
        ";
        // line 695
        if ((0 === twig_compare((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["settings"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["name_secret"] ?? null) : null), 2))) {
            // line 696
            echo "          <div class=\"form-group\">
            <label for=\"username\" class=\"control-label\">";
            // line 697
            echo twig_escape_filter($this->env, (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["lang"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["signup.first_name"] ?? null) : null), "html", null, true);
            echo "</label>
            <input type=\"text\" class=\"form-control\"  name=\"first_name\" value=\"";
            // line 698
            echo twig_escape_filter($this->env, (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["data"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["first_name"] ?? null) : null), "html", null, true);
            echo "\">
          </div><br>
          <div class=\"form-group\">
            <label for=\"username\" class=\"control-label\">";
            // line 701
            echo twig_escape_filter($this->env, (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["lang"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["signup.last_name"] ?? null) : null), "html", null, true);
            echo "</label>
            <input type=\"text\" class=\"form-control\"  name=\"last_name\" value=\"";
            // line 702
            echo twig_escape_filter($this->env, (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["data"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["last_name"] ?? null) : null), "html", null, true);
            echo "\">
          </div>
\t\t";
        }
        // line 705
        echo "          <br>
          <div class=\"form-group\">
            <label for=\"username\" class=\"control-label\">";
        // line 707
        echo twig_escape_filter($this->env, (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["lang"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["signup.email"] ?? null) : null), "html", null, true);
        echo "</label>
            <input type=\"text\" class=\"form-control\" name=\"email\" value=\"";
        // line 708
        echo twig_escape_filter($this->env, (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["data"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["email"] ?? null) : null), "html", null, true);
        echo "\">
          </div><br>
        ";
        // line 710
        if ((0 === twig_compare((($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["settings"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["skype_area"] ?? null) : null), 2))) {
            // line 711
            echo "          <div class=\"form-group\">
            <label for=\"username\" class=\"control-label\">";
            // line 712
            echo twig_escape_filter($this->env, (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = ($context["lang"] ?? null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["signup.telephone"] ?? null) : null), "html", null, true);
            echo "</label>
            <input type=\"text\" class=\"form-control\" name=\"telephone\" value=\"";
            // line 713
            echo twig_escape_filter($this->env, (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = ($context["data"] ?? null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["telephone"] ?? null) : null), "html", null, true);
            echo "\">
          </div>
\t\t";
        }
        // line 715
        echo "<br>
          <div class=\"form-group\">
            <label for=\"password\" class=\"control-label\">";
        // line 717
        echo twig_escape_filter($this->env, (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["lang"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["signup.password"] ?? null) : null), "html", null, true);
        echo "</label>
            <input type=\"password\" class=\"form-control\" name=\"password\">
          </div><br>
          <div class=\"form-group\">
            <label for=\"password\" class=\"control-label\">";
        // line 721
        echo twig_escape_filter($this->env, (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = ($context["lang"] ?? null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["signup.confirm"] ?? null) : null), "html", null, true);
        echo "</label>
            <input type=\"password\" class=\"form-control\" name=\"password_again\">
          </div><br>
        ";
        // line 724
        if ((0 === twig_compare((($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = ($context["settings"] ?? null)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["terms_checkbox"] ?? null) : null), 2))) {
            // line 725
            echo "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"terms\" value=\"1\"> ";
            // line 727
            echo twig_escape_filter($this->env, (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = ($context["lang"] ?? null)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["signup.accept_terms_text"] ?? null) : null), "html", null, true);
            echo "
            </label>
          </div>
        ";
        }
        // line 731
        echo "<br>
          <div class=\"form-group\">
             <div class=\"g-recaptcha\" data-sitekey=\"";
        // line 733
        echo twig_escape_filter($this->env, ($context["captchaKey"] ?? null), "html", null, true);
        echo "\"></div>
          </div>
<br>
            <button type=\"submit\" class=\"btn btn-primary click\">";
        // line 736
        echo twig_escape_filter($this->env, (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = ($context["lang"] ?? null)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["signup.button"] ?? null) : null), "html", null, true);
        echo "</button>
        </form>
</div>

</div>
</div>
</div>
";
        // line 743
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = ($context["site"] ?? null)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["languages"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 744
            echo "  ";
            if ((($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = $context["lang"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["active"] ?? null) : null)) {
                // line 745
                echo "    <script src=\"https://www.google.com/recaptcha/api.js?hl=";
                echo twig_escape_filter($this->env, (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = $context["lang"]) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["code"] ?? null) : null), "html", null, true);
                echo "\"></script>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 748
        echo "      <br><br>
 <!--kayit yeri bitis-->

</div>
<!--body content wrap end-->

<!--footer section start-->
<footer class=\"footer-section\">
    <!--footer top start-->
    <div class=\"footer-top gradient-bg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-12\">
                    <div class=\"footer-nav-wrap text-white mb-0 mb-md-4 mb-lg-0\">
                        <center><a class=\"navbar-brand\" href=\"/\">
                 ";
        // line 763
        if ((($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = ($context["site"] ?? null)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["logo"] ?? null) : null)) {
            // line 764
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = ($context["site"] ?? null)) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["logo"] ?? null) : null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = ($context["site"] ?? null)) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["site_name"] ?? null) : null), "html", null, true);
            echo "\" class=\"img-fluid\" title=\"";
            echo twig_escape_filter($this->env, (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = ($context["site"] ?? null)) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["site_name"] ?? null) : null), "html", null, true);
            echo "\">
          ";
        } else {
            // line 766
            echo "            ";
            echo twig_escape_filter($this->env, (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = ($context["site"] ?? null)) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["site_name"] ?? null) : null), "html", null, true);
            echo "
          ";
        }
        // line 768
        echo "            </a></center>
                        <p>İnternette Öne Çıkmanız İçin, Sizlere 10 Yıldır 7/24 Kesintisiz Hizmet Vermekteyiz. Web Site Tasarımı, Arama Motoru Optimizasyonu (SEO), Sosyal Medya Yönetimi ve Facebook, Twitter, Instagram, Youtube Başta Olmak Üzere Birçok Platform İçin; Takipçi, Abone, Beğeni, İzlenme, Etkileşim Hizmetleri Sunmaktayız. Referanslarımıza Göz Atmak ve Daha Fazla Bilgi Almak İçin Sitemizi Ziyaret Edin.</p>
                    </div>
                </div>

                <div class=\"col-lg-2 col-md-6 col-12\">
                    <div class=\"footer-nav-wrap text-white\">
                        <h5 class=\"text-white\">Site Bağlantıları</h5>
                        <ul class=\"list-unstyled footer-nav-list mt-3\">
                            <li><a href=\"/\" class=\"text-foot\"><span class=\"ti-angle-double-right\"></span> ";
        // line 777
        echo twig_escape_filter($this->env, (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = ($context["lang"] ?? null)) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["signin.title"] ?? null) : null), "html", null, true);
        echo "</a></li>
                            <li><a href=\"signup\" class=\"text-foot\"><span class=\"ti-angle-double-right\"></span> ";
        // line 778
        echo twig_escape_filter($this->env, (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = ($context["lang"] ?? null)) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["signup.title"] ?? null) : null), "html", null, true);
        echo "</a></li>
                            <li><a href=\"blog\" class=\"text-foot\"><span class=\"ti-angle-double-right\"></span> ";
        // line 779
        echo twig_escape_filter($this->env, (($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = ($context["lang"] ?? null)) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["blog.title"] ?? null) : null), "html", null, true);
        echo "</a></li>
                            <li><a href=\"faq\" class=\"text-foot\"><span class=\"ti-angle-double-right\"></span> ";
        // line 780
        echo twig_escape_filter($this->env, (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = ($context["lang"] ?? null)) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da["faq.title"] ?? null) : null), "html", null, true);
        echo "</a></li>
                            <li><a href=\"terms\" class=\"text-foot\"><span class=\"ti-angle-double-right\"></span> ";
        // line 781
        echo twig_escape_filter($this->env, (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = ($context["lang"] ?? null)) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["terms.title"] ?? null) : null), "html", null, true);
        echo "</a></li>
                          <li><a href=\"api\" class=\"text-foot\"><span class=\"ti-angle-double-right\"></span> ";
        // line 782
        echo twig_escape_filter($this->env, (($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = ($context["lang"] ?? null)) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["api.title"] ?? null) : null), "html", null, true);
        echo "</a></li>
                        </ul>
                    </div>
              </div>
              <div class=\"col-lg-4 col-md-4 col-12\">
                    <div class=\"footer-nav-wrap text-white\">
                        <h5 class=\"text-light footer-head\">Bize Ulaşın</h5>
                        <p>Takıldığınız bir yer mi var? Hemen ulaşın sorununuzu beraber çözelim.</p>
                        <ul class=\"list-unstyled social-list mb-0\">
                          <li class=\"list-inline-item\"><a href=\"tel:05000000000\" class=\"rounded\"><span class=\"white-bg color-2 shadow rounded-circle\"><i class=\"fa fa-phone\"></i></span></a></li>
                          <li class=\"list-inline-item\"><a href=\"mailto:mail@mail.com\" class=\"rounded\"><span class=\"white-bg color-2 shadow rounded-circle\"><i class=\"fa fa-envelope\"></i></span></a></li>
                          <li class=\"list-inline-item\"><a href=\"https://wa.me/+905000000000\" class=\"rounded\"><span class=\"white-bg color-2 shadow rounded-circle\"><i class=\"fa fa-whatsapp\"></i></span></a></li>
                          <li class=\"list-inline-item\"><a href=\"/\" class=\"rounded\"><span class=\"white-bg color-2 shadow rounded-circle\"><i class=\"fa fa-skype\"></i></span></a></li>
                         <br><br>
                            <li class=\"list-inline-item\"><a href=\"https://www.facebook.com/\" class=\"rounded\"><span class=\"white-bg color-2 shadow rounded-circle\"><i class=\"fa fa-facebook-square\"></i></span></a></li>
                            <li class=\"list-inline-item\"><a href=\"https://www.twitter.com/\" class=\"rounded\"><span class=\"white-bg color-2 shadow rounded-circle\"><i class=\"fa fa-twitter\"></i></span></a></li>
                            <li class=\"list-inline-item\"><a href=\"https://www.instagram.com/\" class=\"rounded\"><span class=\"white-bg color-2 shadow rounded-circle\"><i class=\"fa fa-instagram\"></i></span></a></li>
                          <li class=\"list-inline-item\"><a href=\"https://t.me/\" class=\"rounded\"><span class=\"white-bg color-2 shadow rounded-circle\"><i class=\"fa fa-telegram\"></i></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer top end-->

    <!--footer copyright start-->
    <div class=\"footer-bottom gray-light-bg py-3\">
        <div class=\"container\">
            <div class=\"row text-center justify-content-center\">
                <div class=\"col-md-6 col-lg-5\"><p class=\"copyright-text pb-0 mb-0\"><a href=\"/\">";
        // line 812
        echo twig_escape_filter($this->env, (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = ($context["site"] ?? null)) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574["site_name"] ?? null) : null), "html", null, true);
        echo "</a> © Copyright 2020
Tüm Hakları Saklıdır.</p>
                </div>
            </div>
        </div>
    </div>
    <!--footer copyright end-->
</footer>
<!--footer section end-->

<!--bottom to top button start-->
<button class=\"scroll-top scroll-to-target\" data-target=\"html\">
    <span class=\"ti-angle-up\"></span>
</button>
<!--bottom to top button end-->
";
        // line 827
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = ($context["site"] ?? null)) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c["languages"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 828
            echo "  ";
            if ((($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = $context["lang"]) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["active"] ?? null) : null)) {
                // line 829
                echo "    <script src=\"https://www.google.com/recaptcha/api.js?hl=";
                echo twig_escape_filter($this->env, (($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = $context["lang"]) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["code"] ?? null) : null), "html", null, true);
                echo "\"></script>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 832
        echo twig_escape_filter($this->env, ($context["footerCode"] ?? null), "html", null, true);
        echo "

<!--jQuery-->
<script src=\"assets/platinum/js/jquery-3.4.1.min.js\"></script>
<!--Popper js-->
<script src=\"assets/platinum/js/popper.min.js\"></script>
<!--Bootstrap js-->
<script src=\"assets/platinum/js/bootstrap.min.js\"></script>
<!--Magnific popup js-->
<script src=\"assets/platinum/js/jquery.magnific-popup.min.js\"></script>
<!--jquery easing js-->
<script src=\"assets/platinum/js/jquery.easing.min.js\"></script>
<!--wow js-->
<script src=\"assets/platinum/js/wow.min.js\"></script>
<!--owl carousel js-->
<script src=\"assets/platinum/js/owl.carousel.min.js\"></script>
<!--countdown js-->
<script src=\"assets/platinum/js/jquery.countdown.min.js\"></script>
<!--custom js-->
<script src=\"assets/platinum/js/scripts.js\"></script>
</body>





</html>";
    }

    public function getTemplateName()
    {
        return "main/platinum/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1187 => 832,  1177 => 829,  1174 => 828,  1170 => 827,  1152 => 812,  1119 => 782,  1115 => 781,  1111 => 780,  1107 => 779,  1103 => 778,  1099 => 777,  1088 => 768,  1082 => 766,  1072 => 764,  1070 => 763,  1053 => 748,  1043 => 745,  1040 => 744,  1036 => 743,  1026 => 736,  1020 => 733,  1016 => 731,  1009 => 727,  1005 => 725,  1003 => 724,  997 => 721,  990 => 717,  986 => 715,  980 => 713,  976 => 712,  973 => 711,  971 => 710,  966 => 708,  962 => 707,  958 => 705,  952 => 702,  948 => 701,  942 => 698,  938 => 697,  935 => 696,  933 => 695,  928 => 693,  924 => 692,  916 => 686,  910 => 683,  906 => 681,  903 => 680,  897 => 677,  893 => 675,  891 => 674,  748 => 534,  719 => 508,  690 => 482,  474 => 269,  385 => 183,  382 => 182,  376 => 179,  373 => 178,  371 => 177,  362 => 170,  356 => 168,  354 => 167,  349 => 165,  342 => 161,  339 => 160,  333 => 157,  329 => 155,  326 => 154,  320 => 151,  316 => 149,  314 => 148,  307 => 144,  277 => 116,  271 => 113,  264 => 112,  261 => 111,  255 => 108,  248 => 107,  245 => 106,  239 => 103,  232 => 102,  229 => 101,  223 => 98,  216 => 97,  213 => 96,  207 => 93,  200 => 92,  197 => 91,  191 => 88,  184 => 87,  182 => 86,  177 => 84,  171 => 83,  162 => 76,  156 => 74,  146 => 72,  144 => 71,  95 => 25,  86 => 18,  80 => 16,  78 => 15,  74 => 14,  70 => 13,  66 => 12,  59 => 8,  56 => 7,  46 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/platinum/login.twig", "/home/glycoktb/test.glycondns.co/app/Views/main/platinum/login.twig");
    }
}
