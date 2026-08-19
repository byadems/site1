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

/* main/antimatter/login.twig */
class __TwigTemplate_aa6a9df0072194dd9f2baf4f387eb3ea91aaf0fb48b55d5177bfc88cd8d8afdd extends Template
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
        echo "  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
  <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
  <![endif]-->
  

    <link rel=\"stylesheet\" href=\"assets/css/antimatter/minified.css\">

      <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.mypanel.link/css/font-awesome/css/all.min.css\">

    ";
        // line 31
        echo twig_escape_filter($this->env, ($context["headerCode"] ?? null), "html", null, true);
        echo "

</head>

<body>
    <!--============= ScrollToTop Section Starts Here ============= -->
    <div class=\"preloader\">
        <div class=\"preloader-inner\">
            <div class=\"preloader-icon\">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <a href=\"#0\" class=\"scrollToTop\"><i class=\"fas fa-angle-up\"></i></a>
    <div class=\"overlay\"></div>
    <!--============= ScrollToTop Section Ends Here =============-->


    <!--============= Header Section Starts Here =============-->
    <header class=\"header-section header-white-dark\">
        <div class=\"container\">
            <div class=\"header-wrapper\">
                <div class=\"logo\">
                    <a href=\"/\">
  ";
        // line 56
        if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["site"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["logo"] ?? null) : null)) {
            // line 57
            echo "                                      <img src=\"";
            echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["site"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["logo"] ?? null) : null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["site"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["site_name"] ?? null) : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["site"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["site_name"] ?? null) : null), "html", null, true);
            echo "\">
                                    ";
        } else {
            // line 59
            echo "                                      ";
            echo twig_escape_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["site"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["site_name"] ?? null) : null), "html", null, true);
            echo "
                                    ";
        }
        // line 60
        echo "                       </a>
                </div>
                <ul class=\"menu\">
         <li ";
        // line 63
        if ((0 === twig_compare(($context["active_menu"] ?? null), "auth"))) {
            echo " class=\"active\" ";
        }
        echo ">
          <a href=\"/\">";
        // line 64
        echo twig_escape_filter($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["lang"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["signin.title"] ?? null) : null), "html", null, true);
        echo "</a>
        </li> 
        ";
        // line 66
        if (($context["registerPage"] ?? null)) {
            // line 67
            echo "        <li ";
            if ((0 === twig_compare(($context["active_menu"] ?? null), "signup"))) {
                echo " class=\"active\" ";
            }
            echo ">
          <a href=\"/signup\">";
            // line 68
            echo twig_escape_filter($this->env, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["lang"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["signup.title"] ?? null) : null), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 71
        echo "                  ";
        if (($context["servicesPage"] ?? null)) {
            // line 72
            echo "        <li ";
            if ((0 === twig_compare(($context["active_menu"] ?? null), "services"))) {
                echo " class=\"active\" ";
            }
            echo ">
          <a href=\"/services\">";
            // line 73
            echo twig_escape_filter($this->env, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["lang"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["services.title"] ?? null) : null), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 76
        echo "        ";
        if (($context["blogPage"] ?? null)) {
            // line 77
            echo "        <li ";
            if ((0 === twig_compare(($context["active_menu"] ?? null), "blog"))) {
                echo " class=\"active\" ";
            }
            echo ">
          <a href=\"/blog\">";
            // line 78
            echo twig_escape_filter($this->env, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["lang"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["blog.title"] ?? null) : null), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 81
        echo "        ";
        if (($context["faqPage"] ?? null)) {
            // line 82
            echo "        <li ";
            if ((0 === twig_compare(($context["active_menu"] ?? null), "faq"))) {
                echo " class=\"active\" ";
            }
            echo ">
          <a href=\"/faq\">";
            // line 83
            echo twig_escape_filter($this->env, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["lang"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["faq.title"] ?? null) : null), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 86
        echo "        ";
        if (($context["termsPage"] ?? null)) {
            // line 87
            echo "        <li ";
            if ((0 === twig_compare(($context["active_menu"] ?? null), "terms"))) {
                echo " class=\"active\" ";
            }
            echo ">
          <a href=\"/terms\">";
            // line 88
            echo twig_escape_filter($this->env, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["lang"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["terms.title"] ?? null) : null), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 91
        echo "        ";
        if (($context["apiPage"] ?? null)) {
            // line 92
            echo "        <li ";
            if ((0 === twig_compare(($context["active_menu"] ?? null), "api"))) {
                echo " class=\"active\" ";
            }
            echo ">
          <a href=\"/api\">";
            // line 93
            echo twig_escape_filter($this->env, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["lang"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["api.title"] ?? null) : null), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 96
        echo " 
                            
                </ul>
                <div class=\"header-bar d-lg-none\">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class=\"header-right\">
                              ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["site"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["languages"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 106
            echo "              ";
            if ((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["lang"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["active"] ?? null) : null)) {
                // line 107
                echo "                    <select class=\"select-bar\">
                   
                        ";
                // line 109
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["site"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["languages"] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                    // line 110
                    echo "                <option ";
                    if ((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["lang"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["active"] ?? null) : null)) {
                        echo " selected ";
                    }
                    echo "><a href=\"?lang=";
                    echo twig_escape_filter($this->env, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["lang"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["code"] ?? null) : null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["lang"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["name"] ?? null) : null), "html", null, true);
                    echo "</a></li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                echo "                    </select>
                        ";
            }
            // line 114
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "               
             
                     
                    ";
        // line 118
        if (($context["registerPage"] ?? null)) {
            // line 119
            echo "                        <a href=\"/signup\" class=\"header-button d-none d-sm-inline-block light\">";
            echo twig_escape_filter($this->env, (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["lang"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["signup.title"] ?? null) : null), "html", null, true);
            echo "</a>
                    ";
        }
        // line 121
        echo "                </div>
            </div>
        </div>
    </header>
    <!--============= Header Section Ends Here =============-->


    <!--============= Banner Section Starts Here =============-->
    <section class=\"banner-11 oh pos-rel\">
        <div class=\"extra-bg bg_img\" data-background=\"assets/images/banner/banner11/banner11-bg.jpg\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"banner-content-11\">
                        <h1 class=\"title\">Sosyal Medyada Fenomen Olun</h1>
                        <p>
                            Bütün işlemlerinizi otomatik ve güvenilir bir şekilde yapın.
                        </p>
                        <form method=\"post\" action=\"\" class=\"banner-search-form style-two\">
                                  ";
        // line 140
        if (($context["errorText"] ?? null)) {
            // line 141
            echo "        <div class=\"alert alert-dismissible alert-danger\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
          ";
            // line 143
            echo twig_escape_filter($this->env, ($context["errorText"] ?? null), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 146
        echo "      ";
        if (($context["successText"] ?? null)) {
            // line 147
            echo "        <div class=\"alert alert-dismissible alert-success\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
          ";
            // line 149
            echo twig_escape_filter($this->env, ($context["successText"] ?? null), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 152
        echo "                              <div class=\"form-group\">
            <label for=\"username\" class=\"control-label\">";
        // line 153
        echo twig_escape_filter($this->env, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["lang"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["signin.username"] ?? null) : null), "html", null, true);
        echo "</label>
            <input type=\"text\" class=\"form-control\" name=\"username\">
          </div>
          <div class=\"form-group  form-group__password\">
            <label for=\"password\" class=\"control-label\">";
        // line 157
        echo twig_escape_filter($this->env, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["lang"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["signin.password"] ?? null) : null), "html", null, true);
        echo "</label>
            <input type=\"password\" class=\"form-control\" name=\"password\">
            ";
        // line 159
        if (($context["resetPage"] ?? null)) {
            // line 160
            echo "             <a href=\"resetpassword\" class=\"forgot-password\"> ";
            echo twig_escape_filter($this->env, (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["lang"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["signin.password.lost"] ?? null) : null), "html", null, true);
            echo "</a>
            ";
        }
        // line 162
        echo "          </div>


          ";
        // line 165
        if (($context["captcha"] ?? null)) {
            // line 166
            echo "            <div class=\"form-group\">
              <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 167
            echo twig_escape_filter($this->env, ($context["captchaKey"] ?? null), "html", null, true);
            echo "\"></div>
            </div>
          ";
        }
        // line 170
        echo "
          <button type=\"submit\"><i class=\"fa fa-sign-in\"></i></button>
                            
                            
                        </form>
                    </div>
                    <div class=\"banner-odometer-two\">
                        <div class=\"counter-item\">
                            <div class=\"counter-thumb\">
                                <img src=\"assets/images/icon/counter1.png\" alt=\"icon\">
                            </div>
                            <div class=\"counter-content\">
                                <h2 class=\"title\"><span class=\"counter\">1750</span></h2>
                                <span>Kullanıcı</span>
                            </div>
                        </div>
                        <div class=\"counter-item\">
                            <div class=\"counter-thumb\">
                                <img src=\"assets/images/icon/counter2.png\" alt=\"icon\">
                            </div>
                            <div class=\"counter-content\">
                                <h2 class=\"title\"><span class=\"counter\">1987</span></h2>
                                <span>Günlük Ziyaret</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 d-none d-lg-block\">
                    <div class=\"banner-thumb-11\">
                        <div class=\"main-thumb wow slideInLeft\">
                            <img src=\"assets/images/banner/banner11/banner11.png\" alt=\"banner\">
                        </div>
                        <div class=\"graph wow bounceInDown\" data-wow-delay=\"3s\" data-wow-duration=\"1s\"><img src=\"assets/images/banner/banner11/graph.png\" alt=\"banner\"></div>
                        <div class=\"boy wow slideInRight\" data-wow-delay=\"1s\" data-wow-duration=\"1s\"><img src=\"assets/images/banner/banner11/boy.png\" alt=\"banner\"></div>
                        <div class=\"girl wow slideInUp\" data-wow-delay=\"1.5s\" data-wow-duration=\"1s\"><img src=\"assets/images/banner/banner11/girl.png\" alt=\"banner\"></div>
                        <div class=\"tree1 wow slideInUp\" data-wow-delay=\"2s\" data-wow-duration=\"1s\"><img src=\"assets/images/banner/banner11/tree1.png\" alt=\"banner\"></div>
                        <div class=\"tree2 wow slideInUp\" data-wow-delay=\"2.5s\" data-wow-duration=\"1s\"><img src=\"assets/images/banner/banner11/tree2.png\" alt=\"banner\"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Banner Section Ends Here =============-->


    <!--============= How It Works Section Starts Here =============-->
    <div class=\"amazing-feature padding-top padding-bottom pos-rel oh\" id=\"feature\">
        <div class=\"rocket d-none d-xl-block\" data-paroller-factor=\"0.70\" data-paroller-factor-lg=\"-0.70\"
        data-paroller-type=\"foreground\" data-paroller-direction=\"horizontal\"><img src=\"assets/images/feature/rocket.png\" alt=\"feature\"></div>
        <div class=\"am-obj\"><img src=\"assets/images/feature/am-obj2.png\" alt=\"feature\"></div>
        <div class=\"am-obj two\"><img src=\"assets/images/feature/am-obj.png\" alt=\"feature\"></div>
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8 col-xl-7\">
                    <div class=\"section-header\">
                        <h5 class=\"cate\">Gelişmiş Özellikler</h5>
                        <h2 class=\"title\">En Hızlı SMM Panel</h2>
                      <p class=\"mw-100\">Türkiye'nin en hızlı <strong>SMM Paneli</strong> ile hemen tanışın. Kalitenin keyfini çıkartın.</p>
                    </div>
                </div>
                <div class=\"col-12\">
                    <div class=\"row justify-content-center mb-30-none\">
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"am-item\">
                                <div class=\"am-thumb\">
                                    <img src=\"assets/images/feature/am-fea2.png\" alt=\"feature\">
                                </div>
                                <div class=\"am-content\">
                                    <h5 class=\"title\">Güvenilir</h5>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"am-item\">
                                <div class=\"am-thumb\">
                                    <img src=\"assets/images/feature/am-fea3.png\" alt=\"feature\">
                                </div>
                                <div class=\"am-content\">
                                    <h5 class=\"title\">Hızlı Servisler</h5>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"am-item\">
                                <div class=\"am-thumb\">
                                    <img src=\"assets/images/feature/am-fea4.png\" alt=\"feature\">
                                </div>
                                <div class=\"am-content\">
                                    <h5 class=\"title\">7/24 Destek</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============= How It Works Section Starts Here =============-->


    <!--============= How It Works Section Starts Here =============-->
    <section class=\"work-section padding-bottom bg_img mb-md-95 pb-md-0\" data-background=\"./assets/images/work/work-bg2.jpg\" id=\"how\">
        
        <div class=\"container\">
            <div class=\"count-slider owl-thumbs\" data-slider-id=\"2\">
                <div class=\"count-item\">
                    <span class=\"serial\">01</span>
                    <h5 class=\"title\">Kayıt Ol</h5>
                </div>
                <div class=\"count-item\">
                    <span class=\"serial\">02</span>
                    <h5 class=\"title\">Bakiye Yükle</h5>
                </div>
                <div class=\"count-item\">
                    <span class=\"serial\">03</span>
                    <h5 class=\"title\">Sipariş Ver</h5>
                </div>
                <div class=\"count-item\">
                    <span class=\"serial\">04</span>
                    <h5 class=\"title\">Fenomen Ol!</h5>
                </div>
            </div>
        </div>
    </section>
    <!--============= How It Works Section Ends Here =============-->


    <!--============= Tool Section Starts Here =============-->
    <section class=\"tool-section padding-bottom padding-top\">
        <div class=\"container\">
            <div class=\"row justify-content-between\">
                <div class=\"col-lg-6 col-xl-5 rtl d-none d-lg-block\">
                    <img src=\"assets/images/recharge/tool.png\" alt=\"recharge\">
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"section-header left-style\">
                        <h5 class=\"cate\">";
        // line 306
        echo twig_escape_filter($this->env, (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["site"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["site_name"] ?? null) : null), "html", null, true);
        echo "</h5>
                        <h2 class=\"title\">Özellikleri</h2>
                        <p>Türkiye'nin en kaliteli SMM Panelinin öne çıkan özellikleri ile tanışın.</p>
                    </div>
                    <div class=\"tool-wrapper mb-40\">
                        <div class=\"tool-slider mb-30-none owl-carousel owl-theme\">
                            
                            <div class=\"to-access-item style-two\">
                                
                                <div class=\"to-access-thumb\">
                                    <span class=\"anime\"></span>
                                    <div class=\"thumb\">
                                        <img src=\"assets/images/recharge/2.png\" alt=\"recharge\">
                                    </div>
                                </div>
                                <h5 class=\"title\">Hızlı Servisler</h5>
                            </div>
                            <div class=\"to-access-item style-two\">
                                <div class=\"to-access-thumb\">
                                    <span class=\"anime\"></span>
                                    <div class=\"thumb\">
                                        <img src=\"assets/images/recharge/3.png\" alt=\"recharge\">
                                    </div>
                                </div>
                                <h5 class=\"title\">Güvenilir</h5>
                            </div>
                            <div class=\"to-access-item style-two\">
                                <div class=\"to-access-thumb\">
                                    <span class=\"anime\"></span>
                                    <div class=\"thumb\">
                                        <img src=\"assets/images/recharge/4.png\" alt=\"recharge\">
                                    </div>
                                </div>
                                <h5 class=\"title\">Kaliteli</h5>
                            </div>
                            <div class=\"to-access-item style-two\">
                                <div class=\"to-access-thumb\">
                                    <span class=\"anime\"></span>
                                    <div class=\"thumb\">
                                        <img src=\"assets/images/recharge/8.png\" alt=\"recharge\">
                                    </div>
                                </div>
                                <h5 class=\"title\">Multi Dil</h5>
                            </div>
                        </div>
                    </div>
                    <a href=\"/signup\" class=\"button-3 long-light\">Kayıt Ol <i class=\"fa fa-pencil-square-o\"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--============= Tool Section Ends Here =============-->




    <!--============= Testimonial Section Starts Here =============-->
    <section class=\"testimonial-section padding-top pt-lg-half padding-bottom pos-rel oh\">
        <div class=\"container\">
            <div class=\"ball-3 style2 d-none d-lg-block\" data-paroller-factor=\"0.30\" data-paroller-factor-lg=\"-0.30\" data-paroller-type=\"foreground\" data-paroller-direction=\"horizontal\">
                <img src=\"assets/images/client/circle2.png\" alt=\"client\">
            </div>
            <div class=\"ball-6 style2 d-none d-lg-block\" data-paroller-factor=\"-0.30\" data-paroller-factor-lg=\"0.60\" data-paroller-type=\"foreground\" data-paroller-direction=\"horizontal\">
                <img src=\"assets/images/client/circle1.png\" alt=\"client\">
            </div>
            <div class=\"row justify-content-between flex-wrap-reverse align-items-center\">
                <div class=\"col-lg-7\">
                    <div class=\"testimonial-wrapper style-two\">
                        <a href=\"#0\" class=\"testi-next trigger\">
                            <img src=\"assets/images/client/left.png\" alt=\"client\">
                        </a>
                        <a href=\"#0\" class=\"testi-prev trigger\">
                            <img src=\"assets/images/client/right.png\" alt=\"client\">
                        </a>
                        <div class=\"testimonial-area testimonial-slider owl-carousel owl-theme\">
                            <div class=\"testimonial-item\">
                                <div class=\"testimonial-thumb\">
                                    <div class=\"thumb\">
                                        <img src=\"assets/images/client/client1.jpg\" alt=\"client\">
                                    </div>
                                </div>
                                <div class=\"testimonial-content\">
                                    <div class=\"ratings\">
                                        <span><i class=\"fas fa-star\"></i></span>
                                        <span><i class=\"fas fa-star\"></i></span>
                                        <span><i class=\"fas fa-star\"></i></span>
                                        <span><i class=\"fas fa-star\"></i></span>
                                        <span><i class=\"fas fa-star\"></i></span>
                                    </div>
                                    <p>
                                        ";
        // line 396
        echo twig_escape_filter($this->env, (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["site"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["site_name"] ?? null) : null), "html", null, true);
        echo " ile çalışmaya başladığımdan beri hizmetlerinden son derece memnunum
                                    </p>
                                    <h5 class=\"title\"><a href=\"#0\">Abdullah Mücahit USTA</a></h5>
                                </div>
                            </div>
                            <div class=\"testimonial-item\">
                                <div class=\"testimonial-thumb\">
                                    <div class=\"thumb\">
                                        <img src=\"assets/images/client/client1.jpg\" alt=\"client\">
                                    </div>
                                </div>
                                <div class=\"testimonial-content\">
                                    <div class=\"ratings\">
                                        <span><i class=\"fas fa-star\"></i></span>
                                        <span><i class=\"fas fa-star\"></i></span>
                                        <span><i class=\"fas fa-star\"></i></span>
                                        <span><i class=\"fas fa-star\"></i></span>
                                        <span><i class=\"fas fa-star\"></i></span>
                                    </div>
                                    <p>
                                        Güvenilir, kaliteli ve hızlı servisler ile her zaman müşteri memnuniyeti odaklı çalıştıkları için teşekkürler ";
        // line 416
        echo twig_escape_filter($this->env, (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["site"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["site_name"] ?? null) : null), "html", null, true);
        echo "
                                    </p>
                                    <h5 class=\"title\"><a href=\"#0\">Mehmet UÇAR</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"testi-wrapper\">
                        <div class=\"testi-header\">
                            <div class=\"section-header left-style\">
                                <h5 class=\"cate\">Müşteri Yorumları</h5>
                                <h2 class=\"title\">10.000+ Mutlu Müşterinin Yorumları</h2>
                            </div>
                            <a href=\"/signup\" class=\"button-3 active\">Kayıt Ol <i class=\"fa fa-pencil-square-o\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Testimonial Section Ends Here =============-->


    <!--============= Custom-Plan Section Starts Here =============-->
    <section class=\"custom-plan bg_img oh\" data-background=\"assets/images/bg/line-bg.png\">
        <div class=\"container\">
            <div class=\"custom-wrapper\">
                <span class=\"circle\"></span>
                <span class=\"circle two\"></span>
                <div class=\"calculate-bg\">
                    <img src=\"assets/images/bg/calculate-bg.png\" alt=\"bg\">
                </div>
                <div class=\"custom-area\">
                    <div class=\"section-header cl-white\">
                        <h5 class=\"cate\">";
        // line 452
        echo twig_escape_filter($this->env, (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["site"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["site_name"] ?? null) : null), "html", null, true);
        echo "</h5>
                        <h2 class=\"title\">Kalite ile Tanışın!</h2>
                        <p>
                            Sorunsuz, hızlı ve ucuz servislerden hizmet almak için hemen şimdi kayıt olun.
                        </p>
                    </div>
                    <div class=\"text-center\">
                        <a href=\"/signup\" class=\"custom-button large-button theme-shadow\">Kayıt Ol <i class=\"fa fa-pencil-square-o\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Custom-Plan Section Ends Here =============-->


    <!--============= Custom-Plan Section Starts Here =============-->
    <section class=\"help-section padding-bottom padding-top oh\">
        <div class=\"container\">
            <div class=\"section-header\">
                <h5 class=\"cate\">";
        // line 472
        echo twig_escape_filter($this->env, (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["site"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["site_name"] ?? null) : null), "html", null, true);
        echo "</h5>
                <h2 class=\"title\">Yardıma mı ihtiyaç var?</h2>
            </div>
            <div class=\"row justify-content-between\">
                <div class=\"col-lg-6 rtl d-none d-lg-block\">
                    <img src=\"assets/images/feature/help.png\" alt=\"feature\">
                </div>
                <div class=\"col-lg-6 col-xl-5 mb-30-none\">
                    <div class=\"help-item\">
                        <div class=\"help-thumb\">
                            <img src=\"assets/images/feature/help1.png\" alt=\"help\">
                        </div>
                        <div class=\"help-content\">
                            <h5 class=\"title\">Canlı Destek</h5>
                            <p>Çevrimiçi müşteri hizmetleri ile sorununuzu paylaşın.</p>
                        </div>
                    </div>
                    <div class=\"help-item\">
                        <div class=\"help-thumb\">
                            <img src=\"assets/images/feature/help2.png\" alt=\"help\">
                        </div>
                        <div class=\"help-content\">
                            <h5 class=\"title\">Destek Sistemi</h5>
                            <p>Siparişleriniz ile ilgili oluşan sorunlar için Destek Sistemini kullanın.</p>
                        </div>
                    </div>
                    <div class=\"help-item\">
                        <div class=\"help-thumb\">
                            <img src=\"assets/images/feature/help3.png\" alt=\"help\">
                        </div>
                        <div class=\"help-content\">
                            <h5 class=\"title\">Sıkça Sorulan Sorular</h5>
                            <p><a href=\"/faq\">S.S.S.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Custom-Plan Section Ends Here =============-->

    
    <!--============= Footer Section Starts Here =============-->
    <footer class=\"footer-section bg_img\" data-background=\"assets/images/footer/footer-bg.jpg\">
        <div class=\"container\">
            <div class=\"footer-top padding-top padding-bottom\">
                <div class=\"logo\">
                    <a href=\"#0\">
  ";
        // line 520
        if ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["site"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["logo"] ?? null) : null)) {
            // line 521
            echo "                                      <img src=\"";
            echo twig_escape_filter($this->env, (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["site"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["logo"] ?? null) : null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["site"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["site_name"] ?? null) : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["site"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["site_name"] ?? null) : null), "html", null, true);
            echo "\">
                                    ";
        } else {
            // line 523
            echo "                                      ";
            echo twig_escape_filter($this->env, (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = ($context["site"] ?? null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["site_name"] ?? null) : null), "html", null, true);
            echo "
                                    ";
        }
        // line 524
        echo "                       </a>
                </div>
                <ul class=\"social-icons\">
                    <li>
                        <a href=\"#0\"><i class=\"fab fa-facebook-f\"></i></a>
                    </li>
                    <li>
                        <a href=\"#0\" class=\"active\"><i class=\"fab fa-twitter\"></i></a>
                    </li>
                    <li>
                        <a href=\"#0\"><i class=\"fab fa-pinterest-p\"></i></a>
                    </li>
                    <li>
                        <a href=\"#0\"><i class=\"fab fa-google-plus-g\"></i></a>
                    </li>
                    <li>
                        <a href=\"#0\"><i class=\"fab fa-instagram\"></i></a>
                    </li>
                </ul>
            </div>
            <div class=\"footer-bottom\">
                <ul class=\"footer-link\">
                    <li>
                        <a href=\"#\">SMM Panel</a>
                    </li>
                    <li>
                        <a href=\"#\">Sosyal Medya Paneli</a>
                    </li>
                    <li>
                        <a href=\"#\">";
        // line 553
        echo twig_escape_filter($this->env, (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = ($context["site"] ?? null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["site_name"] ?? null) : null), "html", null, true);
        echo "</a>
                    </li>
                </ul>
            </div>
            <div class=\"copyright\">
                <p><a style=\"color:white;\" href=\"/\" rel=\"nofollow\"><u>";
        // line 558
        echo twig_escape_filter($this->env, (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["settings"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["site_name"] ?? null) : null), "html", null, true);
        echo "</u></a> © Copyright 2020<br>Tüm Hakları Saklıdır.
                </p>
            </div>
        </div>
    </footer>
    <!--============= Footer Section Ends Here =============-->

";
        // line 565
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = ($context["site"] ?? null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["languages"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 566
            echo "  ";
            if ((($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = $context["lang"]) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["active"] ?? null) : null)) {
                // line 567
                echo "    <script src=\"https://www.google.com/recaptcha/api.js?hl=";
                echo twig_escape_filter($this->env, (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = $context["lang"]) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["code"] ?? null) : null), "html", null, true);
                echo "\"></script>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 570
        echo "

    <script src=\"assets/js/minified.js\"></script>
    <script src=\"assets/js/main.js\"></script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "main/antimatter/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  858 => 570,  848 => 567,  845 => 566,  841 => 565,  831 => 558,  823 => 553,  792 => 524,  786 => 523,  776 => 521,  774 => 520,  723 => 472,  700 => 452,  661 => 416,  638 => 396,  545 => 306,  407 => 170,  401 => 167,  398 => 166,  396 => 165,  391 => 162,  385 => 160,  383 => 159,  378 => 157,  371 => 153,  368 => 152,  362 => 149,  358 => 147,  355 => 146,  349 => 143,  345 => 141,  343 => 140,  322 => 121,  316 => 119,  314 => 118,  309 => 115,  303 => 114,  299 => 112,  284 => 110,  280 => 109,  276 => 107,  273 => 106,  269 => 105,  258 => 96,  252 => 93,  245 => 92,  242 => 91,  236 => 88,  229 => 87,  226 => 86,  220 => 83,  213 => 82,  210 => 81,  204 => 78,  197 => 77,  194 => 76,  188 => 73,  181 => 72,  178 => 71,  172 => 68,  165 => 67,  163 => 66,  158 => 64,  152 => 63,  147 => 60,  141 => 59,  131 => 57,  129 => 56,  101 => 31,  86 => 18,  80 => 16,  78 => 15,  74 => 14,  70 => 13,  66 => 12,  59 => 8,  56 => 7,  46 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/antimatter/login.twig", "/var/www/vhosts/glycondemo.com/httpdocs/app/Views/main/antimatter/login.twig");
    }
}
