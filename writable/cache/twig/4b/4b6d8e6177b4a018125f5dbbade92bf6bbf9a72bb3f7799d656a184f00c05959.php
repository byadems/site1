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

/* main/diamond/login.twig */
class __TwigTemplate_94448333d6c3b9bec02f3e4ad861dc58dd2dc953632b01280c43a87387a64ca5 extends Template
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
  

    <link rel=\"stylesheet\" href=\"assets/css/minified.css\">

      <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.mypanel.link/css/font-awesome/css/all.min.css\">

    ";
        // line 31
        echo twig_escape_filter($this->env, ($context["headerCode"] ?? null), "html", null, true);
        echo "

</head>

<body>
    <!--============= ScrollToTop Section Starts Here =============-->
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
    <header class=\"header-section header-cl-black\">
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
        if (($context["servicesPage"] ?? null)) {
            // line 67
            echo "        <li ";
            if ((0 === twig_compare(($context["active_menu"] ?? null), "services"))) {
                echo " class=\"active\" ";
            }
            echo ">
          <a href=\"/services\">";
            // line 68
            echo twig_escape_filter($this->env, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["lang"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["services.title"] ?? null) : null), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 71
        echo "        ";
        if (($context["blogPage"] ?? null)) {
            // line 72
            echo "        <li ";
            if ((0 === twig_compare(($context["active_menu"] ?? null), "blog"))) {
                echo " class=\"active\" ";
            }
            echo ">
          <a href=\"/blog\">";
            // line 73
            echo twig_escape_filter($this->env, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["lang"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["blog.title"] ?? null) : null), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 76
        echo "        ";
        if (($context["faqPage"] ?? null)) {
            // line 77
            echo "        <li ";
            if ((0 === twig_compare(($context["active_menu"] ?? null), "faq"))) {
                echo " class=\"active\" ";
            }
            echo ">
          <a href=\"/faq\">";
            // line 78
            echo twig_escape_filter($this->env, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["lang"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["faq.title"] ?? null) : null), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 81
        echo "        ";
        if (($context["termsPage"] ?? null)) {
            // line 82
            echo "        <li ";
            if ((0 === twig_compare(($context["active_menu"] ?? null), "terms"))) {
                echo " class=\"active\" ";
            }
            echo ">
          <a href=\"/terms\">";
            // line 83
            echo twig_escape_filter($this->env, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["lang"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["terms.title"] ?? null) : null), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 86
        echo "        ";
        if (($context["apiPage"] ?? null)) {
            // line 87
            echo "        <li ";
            if ((0 === twig_compare(($context["active_menu"] ?? null), "api"))) {
                echo " class=\"active\" ";
            }
            echo ">
          <a href=\"/api\">";
            // line 88
            echo twig_escape_filter($this->env, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["lang"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["api.title"] ?? null) : null), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 91
        echo " 
                            
                </ul>
                <div class=\"header-bar d-lg-none\">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class=\"header-right\">
                              ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["site"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["languages"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 101
            echo "              ";
            if ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["lang"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["active"] ?? null) : null)) {
                // line 102
                echo "                    <select class=\"select-bar\">
                   
                        ";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["site"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["languages"] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                    // line 105
                    echo "                <option ";
                    if ((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["lang"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["active"] ?? null) : null)) {
                        echo " selected ";
                    }
                    echo "><a href=\"?lang=";
                    echo twig_escape_filter($this->env, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["lang"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["code"] ?? null) : null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["lang"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["name"] ?? null) : null), "html", null, true);
                    echo "</a></li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "                    </select>
                        ";
            }
            // line 109
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "               
             
                     
                    ";
        // line 113
        if (($context["registerPage"] ?? null)) {
            // line 114
            echo "                        <a href=\"/signup\" class=\"header-button d-none d-sm-inline-block light\">";
            echo twig_escape_filter($this->env, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["lang"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["signup.title"] ?? null) : null), "html", null, true);
            echo "</a>
                    ";
        }
        // line 116
        echo "                    </div>
            </div>
        </div>
    </header>
    <!--============= Header Section Ends Here =============-->


    <!--============= Banner Section Starts Here =============-->
    <section class=\"banner-7 bg_img oh bottom_right\" data-background=\"./assets/images/banner/banner-bg-7.jpg\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6\">
                    <div class=\"banner-content-7\">
                        <h1 class=\"title\">Sosyal Medyada Fenomen Olun</h1>
                        <p>
                            Bütün işlemlerinizi otomatik ve güvenilir bir şekilde yapın.
                        </p>    ";
        // line 132
        if (($context["errorText"] ?? null)) {
            // line 133
            echo "        <div class=\"alert alert-dismissible alert-danger\">
          ";
            // line 134
            echo twig_escape_filter($this->env, ($context["errorText"] ?? null), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 137
        echo "      ";
        if (($context["successText"] ?? null)) {
            // line 138
            echo "        <div class=\"alert alert-dismissible alert-success\">
          ";
            // line 139
            echo twig_escape_filter($this->env, ($context["successText"] ?? null), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 142
        echo "                        <div class=\"banner-button-group\">
                            <a href=\"/\"   class=\"button-4\" data-toggle=\"modal\" data-target=\"#exampleModal\">Giriş Yap</a>
                            <a href=\"signup\" class=\"button-4 active\">Kayıt Ol</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 d-lg-block d-none\">
                    <img src=\"./assets/img/slider.png\" alt=\"banner\">
                </div>
                <div class=\"col-12\">
                    <div class=\"counter-wrapper-3\">
                        <div class=\"counter-item\">
                            <div class=\"counter-thumb\">
                                <img src=\"./assets/images/icon/counter1.png\" alt=\"icon\">
                            </div>
                            <div class=\"counter-content\">
                                <h2 class=\"title\"><span class=\"counter\">+1000</span></h2>
                                <span class=\"name\">Kullanıcı</span>
                            </div>
                        </div>
                        <div class=\"counter-item\">
                            <div class=\"counter-thumb\">
                                <img src=\"./assets/images/icon/counter2.png\" alt=\"icon\">
                            </div>
                            <div class=\"counter-content\">
                                <h2 class=\"title\"><span class=\"counter\">";
        // line 167
        echo twig_escape_filter($this->env, ($context["ordersCount"] ?? null), "html", null, true);
        echo "</span></h2>
                                <span class=\"name\">Toplam Sipariş</span>
                            </div>
                        </div>
                        <div class=\"counter-item\">
                            <div class=\"counter-thumb\">
                                <img src=\"./assets/images/icon/counter5.png\" alt=\"icon\">
                            </div>
                            <div class=\"counter-content\">
                                <h2 class=\"title\"><span class=\"counter\">95</span><span>%</span></h2>
                                <span class=\"name\">Müşteri Memnuniyeti</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- Modal -->
<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">";
        // line 192
        echo twig_escape_filter($this->env, (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["lang"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["signin.title"] ?? null) : null), "html", null, true);
        echo "</h5>

      </div>
      <div class=\"modal-body\">
        
      <form  method=\"post\" action=\"\">

          <div class=\"form-group\">
            <label for=\"username\" class=\"control-label\">";
        // line 200
        echo twig_escape_filter($this->env, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["lang"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["signin.username"] ?? null) : null), "html", null, true);
        echo "</label>
            <input type=\"text\" class=\"form-control\" name=\"username\">
          </div>
          <div class=\"form-group  form-group__password\">
            <label for=\"password\" class=\"control-label\">";
        // line 204
        echo twig_escape_filter($this->env, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["lang"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["signin.password"] ?? null) : null), "html", null, true);
        echo "</label>
            <input type=\"password\" class=\"form-control\" name=\"password\">
            ";
        // line 206
        if (($context["resetPage"] ?? null)) {
            // line 207
            echo "             <a href=\"resetpassword\" class=\"forgot-password\"> ";
            echo twig_escape_filter($this->env, (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["lang"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["signin.password.lost"] ?? null) : null), "html", null, true);
            echo "</a>
            ";
        }
        // line 209
        echo "          </div>


          ";
        // line 212
        if (($context["captcha"] ?? null)) {
            // line 213
            echo "            <div class=\"form-group\">
              <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 214
            echo twig_escape_filter($this->env, ($context["captchaKey"] ?? null), "html", null, true);
            echo "\"></div>
            </div>
          ";
        }
        // line 216
        echo " </div>
   
   <div class=\"modal-footer\">
          <button type=\"submit\" class=\"btn btn-primary click\">";
        // line 219
        echo twig_escape_filter($this->env, (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["lang"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["signin.button"] ?? null) : null), "html", null, true);
        echo "</button>
          </form>        
        
     
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Kapat</button>

      </div>
    </div>
  </div>
</div>
    <!--============= Banner Section Ends Here =============-->


    <!--============= To Access Section Starts Here =============-->
    <section class=\"to-access-section padding-top padding-bottom bg_img mb-lg-5\" data-background=\"./assets/images/feature/to-access-bg.png\" id=\"feature\">
        <div class=\"container\">
            <div class=\"section-header\">
                <h5 class=\"cate\"><a href=\"/\">";
        // line 236
        echo twig_escape_filter($this->env, (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["site"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["site_name"] ?? null) : null), "html", null, true);
        echo "</a></h5>
                <h2 class=\"title\">En Hızlı SMM Panel</h2>
                <p>Türkiye'nin en hızlı SMM Paneli ile hemen tanışın. Kalitenin keyfini çıkartın.</p>
            </div>
            <div class=\"row mb-30 justify-content-center\">
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"to-access-item\">
                        <div class=\"to-access-thumb\">
                            <span class=\"anime\"></span>
                            <div class=\"thumb\">
                                <img src=\"./assets/images/icon/access1.png\" alt=\"access\">
                            </div>
                        </div>
                        <h5 class=\"title\">Hızlı Servisler</h5>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"to-access-item\">
                        <div class=\"to-access-thumb\">
                            <span class=\"anime\"></span>
                            <div class=\"thumb\">
                                <img src=\"./assets/images/icon/access2.png\" alt=\"access\">
                            </div>
                        </div>
                        <h5 class=\"title\">Güncel</h5>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"to-access-item\">
                        <div class=\"to-access-thumb\">
                            <span class=\"anime\"></span>
                            <div class=\"thumb\">
                                <img src=\"./assets/images/icon/access3.png\" alt=\"access\">
                            </div>
                        </div>
                        <h5 class=\"title\">Güvenilir</h5>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"to-access-item\">
                        <div class=\"to-access-thumb\">
                            <span class=\"anime\"></span>
                            <div class=\"thumb\">
                                <img src=\"./assets/images/icon/access4.png\" alt=\"access\">
                            </div>
                        </div>
                        <h5 class=\"title\">7/24 Destek</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= To Access Section Ends Here =============-->


    <!--============= How It Works Section Starts Here =============-->
    <section class=\"work-section padding-bottom bg_img mb-md-95 pb-md-0\" data-background=\"./assets/images/work/work-bg.jpg\" id=\"how\">
        <div class=\"oh padding-top pos-rel\">
            <div class=\"top-shape d-none d-lg-block\">
                <img src=\"./assets/css/img/work-shape.png\" alt=\"css\">
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-xl-7\">
                        <div class=\"section-header left-style cl-white\">
                            <h5 class=\"cate\"><a href=\"/\">";
        // line 301
        echo twig_escape_filter($this->env, (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["site"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["site_name"] ?? null) : null), "html", null, true);
        echo "</a></h5>
                            <h3>Peki Nasıl Çalışır?</h3>
                        </div>
                    </div>
                </div>
                <div class=\"work-slider owl-carousel owl-theme\" data-slider-id=\"2\">
                    <div class=\"work-item\">
                        <div class=\"work-content cl-white\">
                            <h3 class=\"title\">?Kayıt Nasıl Olunur</h3>
                            <p>Sitemize üyelikler tamamen ücretsizdir ve her zaman ücretsiz kalacaktır
<br>
Kayıt ol butonuna tıklayıp karşınıza çıkan kayıt formunu eksiksiz doldurmanız durumunda kaydınız başarılı bir şekilde gerçekleşir</p>
                            <a href=\"signup\" class=\"get-button white light\"><i class=\"fa fa-pencil-square-o\"></i> Kayıt Olmak İçin Tıklayınız</a>
                        </div>
                    </div>
                    <div class=\"work-item\">
               
                        <div class=\"work-content cl-white\">
                            <h3 class=\"title\">?Bakiye Nasıl Yüklenir</h3>
                            <p>3D Secure ile online ödeme yapabilir Dilerseniz anlaşmalı bankalar üzerinden Havale ve EFT yapabilirsiniz
<br>
Bakiye yükle butonuna tıklayıp karşınıza çıkan ödeme yöntemlerinden dilediğinizi seçerek bakiyenizi yükleyebilirsiniz Online ödemeler anında yüklenir fakat Havale ve EFT ödemeleriniz için Ödeme Bildirimi oluşturmalısınız</p>
                      </div>
                    </div>
                    <div class=\"work-item\">

                        <div class=\"work-content cl-white\">
                            <h3 class=\"title\">?Sipariş Nasıl Verilir</h3>
                            <p>İstediğiniz servisi seçip formu doldurduktan sonra kolaylıkla sipariş verebilirsiniz
<br>
İstediğiniz kategoriyi ve servisi seçerek ilgili servisin açıklamasındaki örnek linki baz alarak sipariş vermek istediğiniz linki yazarak ve miktarını girerek siparişinizi verebilirsiniz</p>
                        </div>
                    </div>
                    <div class=\"work-item\">
                        <div class=\"work-thumb\">
                            <img src=\"assets/platinum/img/dasboard-screen-4.png\" alt=\"work\">
                        </div>
                        <div class=\"work-content cl-white\">
                            <h3 class=\"title\">!Fenomen Olun</h3>
                            <p>Sosyal Medya da fenomen olmaya başlayın
<br>
Satın almış olduğunuz etkileşimlerin hızlı bir şekilde teslim edilmesinin ardından sosyal medyada fenomen olabilir geniş kitlelere adınızı duyurabilirsiniz</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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






    <!--============= Advance Feature Section Starts Here =============-->
    <section class=\"advance-feature-section padding-top-2 padding-bottom-2\">
        <div class=\"container\">
          <div class=\"advance-feature-item padding-top-2 padding-bottom-2\">
                <div class=\"advance-feature-thumb\">
                    <img src=\"./assets/images/access/access1.png\" alt=\"feature\">
                </div>
          <div class=\"advance-feature-content\">
                    <div class=\"section-header left-style mb-olpo\">
                      <h5 class=\"cate\">Herşey Bir Arada</h5>
                            <h2 class=\"title\">Kullanım Kolaylığı</h2>
                            <p>Servis detayları servislerin altında yer almaktadır. Sadece kullanıcı id veya link girerek kolay alışveriş yapabilirsiniz. Sosyal Medya Paneli destek ekibimiz ve kullanım kolaylığıyla sizlere kolay kullanım sunuyoruz.</p>
                    </div>
                </div>
            </div>
            <div class=\"advance-feature-item padding-top-2 padding-bottom-2\">
                <div class=\"advance-feature-thumb\">
                    <img src=\"./assets/images/feature/advance1.png\" alt=\"feature\">
                </div>
                <div class=\"advance-feature-content\">
                    <div class=\"section-header left-style mb-olpo\">
                      <h5 class=\"cate\">Güvenli Ödeme</h5>
                            <h2 class=\"title\">Ödeme Seçenekleri</h2>
                            <p>";
        // line 399
        echo twig_escape_filter($this->env, (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["site"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["site_name"] ?? null) : null), "html", null, true);
        echo " Ödeme seçeneklerinde kredi kartı , banka kartı , eft gibi bir çok seçenek bulunmaktadır. Hesabınıza Maximum 10 dk içinde paranız yatmaktadır. Online ve güvenli ödeme mevcuttur.</p>
                    </div>
                </div>
            </div>
            <div class=\"advance-feature-item padding-top-2 padding-bottom-2\">
                <div class=\"advance-feature-thumb\">
                    <img src=\"./assets/images/feature/advance2.png\" alt=\"feature\">
                </div>
                <div class=\"advance-feature-content\">
                    <div class=\"section-header left-style mb-olpo\">
                      <h5 class=\"cate\">Sosyal Medya</h5>
                            <h2 class=\"title\">Ucuz Servisler</h2>
                            <p>Genellikle ucuz sosyal medya servisleri bulunmaktadır. Kalite servisler bir iki tık daha pahalıdır. Aralarındaki farklar ise hız ve özenli iş farkı vardır. Ucuz Servisler diğerlerine göre daha yavaştır.</p>
                    </div>
                </div>
            </div>
            <div class=\"advance-feature-item padding-top-2 padding-bottom-2\">
                <div class=\"advance-feature-thumb\">
                    <img src=\"./assets/images/feature/advance3.png\" alt=\"feature\">
                </div>
                <div class=\"advance-feature-content\">
                    <div class=\"section-header left-style mb-olpo\">
                        <h5 class=\"cate\">7/24 Tam Destek</h5>
                        <h2 class=\"title\">Güler Yüzlü Müşteri Desteği</h2>
                        <p>Müşterilerimizin her türlü sorunlarıyla birebir olarak ilgilenip tüm sıkıntılarını çözmelerinde yardımcı oluyoruz.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Advance Feature Section Ends Here =============-->



    <!--============= Testimonial Section Starts Here =============-->
    <section class=\"testimonial-section padding-top pt-lg-half\" id=\"client\">
        <div class=\"container\">
            <div class=\"section-header\">
                <h5 class=\"cate\">Müşteri Yorumları</h5>
                <h2 class=\"title\">5000+ Mutlu Müşterinin Yorumları</h2>
            </div>
            <div class=\"testimonial-wrapper\">
                <a href=\"#0\" class=\"testi-next trigger\">
                    <img src=\"./assets/images/client/left.png\" alt=\"client\">
                </a>
                <a href=\"#0\" class=\"testi-prev trigger\">
                    <img src=\"./assets/images/client/right.png\" alt=\"client\">
                </a>
                <div class=\"testimonial-area testimonial-slider owl-carousel owl-theme\">
                    <div class=\"testimonial-item\">
                        <div class=\"testimonial-thumb\">
                            <div class=\"thumb\">
                                <img src=\"./assets/images/client/client1.jpg\" alt=\"client\">
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
        // line 463
        echo twig_escape_filter($this->env, (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["site"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["site_name"] ?? null) : null), "html", null, true);
        echo " ile çalışmaya başladığımdan beri hizmetlerinden son derece memnunum
                            </p>
                            <h5 class=\"title\">Hanife Şen</h5>
                        </div>
                    </div>
                    <div class=\"testimonial-item\">
                        <div class=\"testimonial-thumb\">
                            <div class=\"thumb\">
                                <img src=\"./assets/images/client/client1.jpg\" alt=\"client\">
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
        // line 483
        echo twig_escape_filter($this->env, (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["site"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["site_name"] ?? null) : null), "html", null, true);
        echo "
                            </p>
                            <h5 class=\"title\">Cemal Kaşık</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Testimonial Section Ends Here =============-->


    <!--============= Faq Section Starts Here =============-->
    <section class=\"faq-section padding-top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"faq-header\">
                        <div class=\"cate\">
                            <img src=\"./assets/images/cate.png\" alt=\"cate\">
                        </div>
                        <h2 class=\"title\">Sık Sorulan Sorular</h2>
                        
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"faq-wrapper mb--38\">
                        <div class=\"faq-item\">
                            <div class=\"faq-thumb\">
                                <i class=\"fa fa-question\"></i>
                            </div>
                            <div class=\"faq-content\">
                                <h4 class=\"title\">ÖDEMEYİ NASIL YAPABİLİRİM ?</h4>
                                <p>
                                    Havale ve EFT , Mobil veya Kredi Kartı üzerinden ödeme yapabilirsiniz.
                                </p>
                            </div>
                        </div>
                        <div class=\"faq-item\">
                            <div class=\"faq-thumb\">
                                <i class=\"fa fa-question\"></i>
                            </div>
                            <div class=\"faq-content\">
                                <h4 class=\"title\">SMM PANELİM MEVCUT , SİZE NASIL SERVİSLERİ BAĞLAYABİLİRİM ?</h4>
                                <p>SMM Paneliniz mevcut ise , üye girişi yaptıktan sonra sağ üstteki ayarlar kısmından api key mevcuttur. Api keyi kendi panelinize girerek sistemden servisleri otomatik olarak kendi sisteminize bağlayabilir , satış yapabilirsiniz.Detaylı bilgi için site içi destek kısmından ulaşabilirsiniz.
                                </p>
                            </div>
                        </div>
                        <div class=\"faq-item\">
                            <div class=\"faq-thumb\">
                                <i class=\"fa fa-question\"></i>
                            </div>
                            <div class=\"faq-content\">
                                <h4 class=\"title\">ŞİFRE VERMEM GEREKİYOR MU ?</h4>
                                <p>Sistem içerisinde olan tüm servislerde şifreniz gerekmemektedir. Şifrenizi istemiyoruz. </p>
                            </div>
                        </div>
                        <div class=\"faq-item\">
                            <div class=\"faq-thumb\">
                                <i class=\"fa fa-question\"></i>
                            </div>
                            <div class=\"faq-content\">
                                <h4 class=\"title\">BENİM PROFİLİMDEN PAYLAŞIM YAPILACAK MI ? BAŞKASINI BEĞENİR MİYİM ? </h4>
                                <p>Kesinlikle başkasını beğenmez veya takip etmezsiniz. Diğer uygulamalar gibi herhangir bir uygulamaya giriş izinli sistem değildir. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Faq Section Ends Here =============-->


    <!--============= Trial Section Starts Here =============-->
    <section class=\"trial-section padding-bottom padding-top\">
        <div class=\"container\">
            <div class=\"trial-wrapper padding-top padding-bottom pr\">
                <div class=\"ball-1\">
                    <img src=\"./assets/images/balls/balls.png\" alt=\"balls\">
                </div>
                <div class=\"trial-content cl-white\">
                    <h3 class=\"title\">Fenomen Olmaya Hazır Mısın?</h3>
                    <p>
                        O Halde Ne Duruyorsun?<br>Hemen Kayıt Ol ve Fenomenlik Yolunda İlk Adımı At.
                    </p>
                </div>
                <div class=\"trial-button\">
                    <a href=\"signup\" class=\"transparent-button\">Kayıt Ol <i class=\"fa fa-pencil-square-o\"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--============= Trial Section Ends Here =============-->


    <!--============= Footer Section Starts Here =============-->
    <footer class=\"footer-section bg_img\" data-background=\"./assets/images/footer/footer-bg.jpg\">
        <div class=\"container\">
            <div class=\"footer-top padding-top padding-bottom\">
                <div class=\"logo\">
                    <a href=\"/\">
  ";
        // line 585
        if ((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["site"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["logo"] ?? null) : null)) {
            // line 586
            echo "                                      <img src=\"";
            echo twig_escape_filter($this->env, (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["site"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["logo"] ?? null) : null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["site"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["site_name"] ?? null) : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = ($context["site"] ?? null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["site_name"] ?? null) : null), "html", null, true);
            echo "\">
                                    ";
        } else {
            // line 588
            echo "                                      ";
            echo twig_escape_filter($this->env, (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = ($context["site"] ?? null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["site_name"] ?? null) : null), "html", null, true);
            echo "
                                    ";
        }
        // line 589
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
                        <a href=\"/\">";
        // line 612
        echo twig_escape_filter($this->env, (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["lang"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["signin.title"] ?? null) : null), "html", null, true);
        echo "</a>
                    </li>
                    <li>
                        <a href=\"signup\">";
        // line 615
        echo twig_escape_filter($this->env, (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = ($context["lang"] ?? null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["signup.title"] ?? null) : null), "html", null, true);
        echo "</a>
                    </li>
                    <li>
                        <a href=\"blog\">";
        // line 618
        echo twig_escape_filter($this->env, (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = ($context["lang"] ?? null)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["blog.title"] ?? null) : null), "html", null, true);
        echo "</a>
                    </li>
                    <li>
                        <a href=\"faq\">";
        // line 621
        echo twig_escape_filter($this->env, (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = ($context["lang"] ?? null)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["faq.title"] ?? null) : null), "html", null, true);
        echo "</a>
                    </li>
                    <li>
                        <a href=\"terms\">";
        // line 624
        echo twig_escape_filter($this->env, (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = ($context["lang"] ?? null)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["terms.title"] ?? null) : null), "html", null, true);
        echo "</a>
                    </li>
                  <li>
                        <a href=\"api\">";
        // line 627
        echo twig_escape_filter($this->env, (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = ($context["lang"] ?? null)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["api.title"] ?? null) : null), "html", null, true);
        echo "</a>
                    </li>
                </ul>
            </div>
            <div class=\"copyright\">
                <p>
                    <a href=\"/\">";
        // line 633
        echo twig_escape_filter($this->env, (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = ($context["site"] ?? null)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["site_name"] ?? null) : null), "html", null, true);
        echo "</a> © Copyright 2020 Tüm Hakları Saklıdır.
                </p>
            </div>
        </div>
    </footer>
    <!--============= Footer Section Ends Here =============-->

";
        // line 640
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = ($context["site"] ?? null)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["languages"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 641
            echo "  ";
            if ((($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = $context["lang"]) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["active"] ?? null) : null)) {
                // line 642
                echo "    <script src=\"https://www.google.com/recaptcha/api.js?hl=";
                echo twig_escape_filter($this->env, (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = $context["lang"]) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["code"] ?? null) : null), "html", null, true);
                echo "\"></script>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 645
        echo "

    <script src=\"./assets/js/minified.js\"></script>
    <script src=\"./assets/js/main.js\"></script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "main/diamond/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  947 => 645,  937 => 642,  934 => 641,  930 => 640,  920 => 633,  911 => 627,  905 => 624,  899 => 621,  893 => 618,  887 => 615,  881 => 612,  856 => 589,  850 => 588,  840 => 586,  838 => 585,  733 => 483,  710 => 463,  643 => 399,  542 => 301,  474 => 236,  454 => 219,  449 => 216,  443 => 214,  440 => 213,  438 => 212,  433 => 209,  427 => 207,  425 => 206,  420 => 204,  413 => 200,  402 => 192,  374 => 167,  347 => 142,  341 => 139,  338 => 138,  335 => 137,  329 => 134,  326 => 133,  324 => 132,  306 => 116,  300 => 114,  298 => 113,  293 => 110,  287 => 109,  283 => 107,  268 => 105,  264 => 104,  260 => 102,  257 => 101,  253 => 100,  242 => 91,  236 => 88,  229 => 87,  226 => 86,  220 => 83,  213 => 82,  210 => 81,  204 => 78,  197 => 77,  194 => 76,  188 => 73,  181 => 72,  178 => 71,  172 => 68,  165 => 67,  163 => 66,  158 => 64,  152 => 63,  147 => 60,  141 => 59,  131 => 57,  129 => 56,  101 => 31,  86 => 18,  80 => 16,  78 => 15,  74 => 14,  70 => 13,  66 => 12,  59 => 8,  56 => 7,  46 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/diamond/login.twig", "/home/glycoktb/test.glycondns.co/app/Views/main/diamond/login.twig");
    }
}
