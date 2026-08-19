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

/* main/aqua/login.twig */
class __TwigTemplate_43daaf6208d26c634f8c67d5a7d74309fd2a4502018d8eb9ac98a7972801182a extends Template
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
            echo "        <link rel=\"shortcut icon\" type=\"image/ico\" href=\"";
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
      
        <!-- CSS here -->
        <link rel=\"stylesheet\" href=\"assets/css/aqua/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"assets/css/aqua/animate.min.css\">
        <link rel=\"stylesheet\" href=\"assets/css/aqua/magnific-popup.css\">
        <link rel=\"stylesheet\" href=\"assets/css/aqua/dripicons.css\">
        <link rel=\"stylesheet\" href=\"assets/css/aqua/slick.css\">
        <link rel=\"stylesheet\" href=\"assets/css/aqua/default.css\">
        <link rel=\"stylesheet\" href=\"assets/css/aqua/swiper.css\">
        <link rel=\"stylesheet\" href=\"assets/css/aqua/majer.css\">
        <link rel=\"stylesheet\" href=\"assets/css/aqua/responsive.css\">
        <link rel=\"stylesheet\" href=\"https://cdn.mypanel.link/css/font-awesome/css/all.min.css\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
      
          ";
        // line 39
        echo twig_escape_filter($this->env, ($context["headerCode"] ?? null), "html", null, true);
        echo "
    </head>
    <body>
        <!-- header -->
        <header class=\"header-area\">            
            <div id=\"header-sticky\" class=\"menu-area\">
                <div class=\"container\">
                    <div class=\"second-menu\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-xl-2 col-lg-2\">
                                <div class=\"logo\">
                                    
                                    <a href=\"/\">
                                        ";
        // line 52
        if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["site"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["logo"] ?? null) : null)) {
            // line 53
            echo "                                      <img src=\"";
            echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["site"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["logo"] ?? null) : null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["site"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["site_name"] ?? null) : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["site"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["site_name"] ?? null) : null), "html", null, true);
            echo "\" height=\"50\" width=\"%100\">
                                    ";
        } else {
            // line 55
            echo "                                      ";
            echo twig_escape_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["site"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["site_name"] ?? null) : null), "html", null, true);
            echo "
                                    ";
        }
        // line 56
        echo "   
                                    </a>
                                    
                                </div>
                            </div>
                            <div class=\"col-xl-8 col-lg-9\">
                                <div class=\"responsive\" style=\"margin-top: 1px;\"><i class=\"fa fa-bars\"></i></div>
                                <div class=\"main-menu text-right text-xl-right\">
                                     <nav id=\"mobile-menu\">
                                        <ul>
                                                           <li ";
        // line 66
        if ((0 === twig_compare(($context["active_menu"] ?? null), "auth"))) {
            echo " class=\"active\" ";
        }
        echo ">
          <a href=\"#contact\">";
        // line 67
        echo twig_escape_filter($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["lang"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["signin.title"] ?? null) : null), "html", null, true);
        echo "</a>
        </li> 
        ";
        // line 69
        if (($context["registerPage"] ?? null)) {
            // line 70
            echo "        <li >
          <a href=\"/signup\">";
            // line 71
            echo twig_escape_filter($this->env, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["lang"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["signup.title"] ?? null) : null), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 74
        echo "          ";
        if (($context["servicesPage"] ?? null)) {
            // line 75
            echo "        <li ";
            if ((0 === twig_compare(($context["active_menu"] ?? null), "services"))) {
                echo " class=\"active\" ";
            }
            echo ">
          <a href=\"/services\">";
            // line 76
            echo twig_escape_filter($this->env, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["lang"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["services.title"] ?? null) : null), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 79
        echo "        
        ";
        // line 80
        if (($context["blogPage"] ?? null)) {
            // line 81
            echo "        <li ";
            if ((0 === twig_compare(($context["active_menu"] ?? null), "blog"))) {
                echo " class=\"active\" ";
            }
            echo ">
          <a href=\"/blog\">";
            // line 82
            echo twig_escape_filter($this->env, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["lang"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["blog.title"] ?? null) : null), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 85
        echo "        ";
        if (($context["faqPage"] ?? null)) {
            // line 86
            echo "        <li ";
            if ((0 === twig_compare(($context["active_menu"] ?? null), "faq"))) {
                echo " class=\"active\" ";
            }
            echo ">
          <a href=\"/faq\">";
            // line 87
            echo twig_escape_filter($this->env, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["lang"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["faq.title"] ?? null) : null), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 90
        echo "        ";
        if (($context["termsPage"] ?? null)) {
            // line 91
            echo "        <li ";
            if ((0 === twig_compare(($context["active_menu"] ?? null), "terms"))) {
                echo " class=\"active\" ";
            }
            echo ">
          <a href=\"/terms\">";
            // line 92
            echo twig_escape_filter($this->env, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["lang"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["terms.title"] ?? null) : null), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 95
        echo "        ";
        if (($context["apiPage"] ?? null)) {
            // line 96
            echo "        <li ";
            if ((0 === twig_compare(($context["active_menu"] ?? null), "api"))) {
                echo " class=\"active\" ";
            }
            echo ">
          <a href=\"/api\">";
            // line 97
            echo twig_escape_filter($this->env, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["lang"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["api.title"] ?? null) : null), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 99
        echo "                                          
                                        </ul>
                                    </nav>
                                </div>
                            </div>       
                            ";
        // line 104
        if (($context["registerPage"] ?? null)) {
            // line 105
            echo "                            <div class=\"col-xl-2 text-right d-none d-xl-block\">
                                <div class=\"header-btn second-header-btn\">
                                    <a href=\"signup\" class=\"btn\">";
            // line 107
            echo twig_escape_filter($this->env, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["lang"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["signup.title"] ?? null) : null), "html", null, true);
            echo "</a>
                                </div>
                            </div>
                                    ";
        }
        // line 110
        echo "                                          

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-end -->
        <!-- main-area -->
        <main>
            <!-- slider-area -->
            <section id=\"parallax\" class=\"slider-area slider-bg2 second-slider-bg d-flex fix\" style=\"background-image: url(assets/img/aqua/bg/pink-header-bg.png); background-position:right 0; background-repeat: no-repeat; background-size: 65%;\">
                
                <div class=\"slider-shape ss-one layer\" data-depth=\"0.10\"><img src=\"assets/img/aqua/shape/header-sape.png\" alt=\"shape\"></div>
               
                 <div class=\"slider-shape ss-eight layer\" data-depth=\"0.50\"></div>
                
                
               
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <div class=\"slider-content second-slider-content left-center\">         
                                        <ul class=\"small-title mb-30\">
                                            <li>";
        // line 134
        echo twig_escape_filter($this->env, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["site"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["site_name"] ?? null) : null), "html", null, true);
        echo "</li>
                                      </ul>
                                        <h2 data-animation=\"fadeInUp\" data-delay=\".4s\">Türkiye'nin <span>Lider</span> SMM Paneli</h2>
                                        
                                        <p data-animation=\"fadeInUp\" data-delay=\".6s\">Siz müşterilerimize her zaman %100 Kalite ve uygun fiyatlı hizmet vermek için 7/24 Çalışıyoruz.</p>
                                      
                                      <br>
                                      <form method=\"POST\" action=\"/auth\" class=\"contact-form\">
                            <div class=\"row\">
                            <div class=\"col-lg-8\">
                                <div class=\"contact-field p-relative c-name mb-20\">                                    
                                    <input type=\"text\" name=\"username\" placeholder=\"Kullanıcı Adı\">
                                </div>                               
                            </div>
                             <div class=\"col-lg-8\">                    
                                <div class=\"contact-field p-relative c-email mb-20\">                                    
                                    <input type=\"password\" name=\"password\" placeholder=\"Şifre\">
                                </div>                                
                            </div>                          
                            <div class=\"col-lg-12\">
                                   ";
        // line 154
        if (($context["captcha"] ?? null)) {
            // line 155
            echo "            <div class=\"form-group\">
              <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 156
            echo twig_escape_filter($this->env, ($context["captchaKey"] ?? null), "html", null, true);
            echo "\"></div>
            </div>
          ";
        }
        // line 159
        echo "                                <button class=\"btn\">Giriş Yap</button>  <a href=\"signup\">  Üye Ol</a>
                            </div>
                            </div>
                        
                    </form>
        
                                    </div> 
                                    ";
        // line 166
        if (($context["errorText"] ?? null)) {
            // line 167
            echo "        <div class=\"alert alert-dismissible alert-danger\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
          ";
            // line 169
            echo twig_escape_filter($this->env, ($context["errorText"] ?? null), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 172
        echo "      ";
        if (($context["successText"] ?? null)) {
            // line 173
            echo "        <div class=\"alert alert-dismissible alert-success\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
          ";
            // line 175
            echo twig_escape_filter($this->env, ($context["successText"] ?? null), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 178
        echo "                                </div>     
                                 <div class=\"col-lg-6\">
                                     <img src=\"assets/img/aqua/bg/output-onlinepngtools (2).png\" alt=\"shape\" class=\"s-img\">
                                </div>
                            </div>
                   
                </div>
            </section>
            <!-- slider-area-end -->
             <!-- services-area -->
            <section id=\"about\" class=\"services-area services-bg pt-25 pb-20\" style=\"background-image: url(assets/img/aqua/shape/header-sape2.png); background-position: right top; background-size: auto;background-repeat: no-repeat;\">
                <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-7 col-lg-10\">
                            <div class=\"section-title text-center pl-40 pr-40 mb-45\">
                                <h2>Kullanım Kolaylığı</h2>
                                <p>Servis detayları servislerin altında yer almaktadır. Sadece kullanıcı id veya link girerek kolay alışveriş yapabilirsiniz. Sosyal Medya Paneli destek ekibimiz ve kullanım kolaylığıyla sizlere kolay kullanım sunuyoruz.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-4 col-md-12 mb-30\">
                            <div class=\"s-single-services active text-center\">
                              <ul class=\"small-title mb-30\">
                                            <li>1</li>
                                      </ul>
                                <div class=\"services-icon\">
                                   <img src=\"assets/img/aqua/icon/f-icon1.png\"/>
                                </div>
                                <div class=\"second-services-content\">
                                    <h5>Güvenli Ödeme Seçenekleri</h5>
                                    <p>SMMPanel Ödeme seçeneklerinde kredi kartı , banka kartı , eft gibi bir çok seçenek bulunmaktadır. Hesabınıza Maximum 10 dk içinde paranız yatmaktadır. Online ve güvenli ödeme mevcuttur.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-12 mb-30\">
                            <div class=\"s-single-services text-center\">
                              <ul class=\"small-title mb-30\">
                                            <li>2</li>
                                      </ul>
                                 <div class=\"services-icon\">
                                  <img src=\"assets/img/aqua/icon/f-icon3.png\"/>
                                </div>
                                <div class=\"second-services-content\">
                                    <h5>Güler Yüzlü Müşteri Desteği</h5>
                                    <p>Müşterilerimizin her türlü sorunlarıyla birebir olarak ilgilenip tüm sıkıntılarını çözmelerinde yardımcı oluyoruz.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-12 mb-30\">
                           <div class=\"s-single-services text-center\">
                             <ul class=\"small-title mb-30\">
                                            <li>3</li>
                                      </ul>
                                <div class=\"services-icon\">
                                  <img src=\"assets/img/aqua/icon/f-icon2.png\"/>
                                </div>
                                <div class=\"second-services-content\">
                                    <h5>Ucuz Servisler</h5>
                                    <p>Genellikle ucuz sosyal medya servisleri bulunmaktadır. Kalite servisler bir iki tık daha pahalıdır. Aralarındaki farklar ise hız ve özenli iş farkı vardır. Ucuz Servisler diğerlerine göre daha yavaştır.</p>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                  
                </div>
            </section>
            <!-- services-area-end -->
            <!-- choose-area -->
            <section class=\"choose-area pt-100 pb-60 p-relative\" style=\"background-image: url(assets/img/aqua/shape/header-sape3.png); background-position: right center; background-size: auto;background-repeat: no-repeat;\">
                <div class=\"chosse-img\" style=\"background-image:url(assets/img/aqua/bg/easy-m-bg.png)\"></div>
                <div class=\"chosse-img2\"><img src=\"assets/img/aqua/bg/Ehc4a4.png\" alt=\"mobile\"/></div>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-5\">
                        </div>
                        <div class=\"col-xl-7\">
                            <div class=\"choose-wrap\">
                                <div class=\"section-title w-title left-align mb-25\">
                                    <h2>Vizyonumuz</h2>
                                </div>
                                <div class=\"choose-content\">
                                    <p>Bütün müşterilerimizi sorunsuz ve hızlı servisler ile buluşturup ucuz fiyat politikamız ile düzenli ve kaliteli hizmet vermek.</p>
                                  <p>İnternette Öne Çıkmanız İçin, Sizlere 10 Yıldır 7/24 Kesintisiz Hizmet Vermekteyiz. Web Site Tasarımı, Arama Motoru Optimizasyonu (SEO), Sosyal Medya Yönetimi ve Facebook, Twitter, Instagram, Youtube Başta Olmak Üzere Birçok Platform İçin; Takipçi, Abone, Beğeni, İzlenme, Etkileşim Hizmetleri Sunmaktayız. Referanslarımıza Göz Atmak ve Daha Fazla Bilgi Almak İçin Sitemizi Ziyaret Edin.</p>
                              </div>
                                   
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- choose-area-end -->
            <!-- how-app-work -->
            <section id=\"features\" class=\"app-work pt-70 pb-100 p-relative\" style=\"background-image: url(assets/img/aqua/shape/header-sape4.png); background-position: right center; background-size: auto;background-repeat: no-repeat;\">            
                <div class=\"container\">
                    <div class=\"row align-items-center \">
                       
                        <div class=\"col-xl-6\">
                            <div class=\"choose-wrap\">
                                <div class=\"section-title w-title left-align mb-15\">
                                    <h2>Peki Nasıl Çalışır?</h2>
                                </div>
                                <div class=\"app-work-content mt-20\">
                                    <ul>
                                        <li>
                                            <div class=\"icon\"><img src=\"assets/img/aqua/icon/apw-Icon1.png\"></div> 
                                            <div class=\"text\">
                                                <h4>Kayıt Ol</h4>
                                                <p>Sitemize üyelikler tamamen ücretsizdir ve her zaman ücretsiz kalacaktır.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"icon\"><img src=\"assets/img/aqua/icon/apw-Icon2.png\"></div> 
                                            <div class=\"text\">
                                                <h4>Bakiye Yükle</h4>
                                                <p>3D Secure ile online ödeme yapabilir. Dilerseniz anlaşmalı bankalar üzerinden Havale ve EFT yapabilirsiniz.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"icon\"><img src=\"assets/img/aqua/icon/apw-Icon3.png\"></div> 
                                            <div class=\"text\">
                                                <h4>Sipariş Ver</h4>
                                                <p>İstediğiniz servisi seçip, formu doldurduktan sonra kolaylıkla sipariş verebilirsiniz.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                         <div class=\"col-xl-6\">
                            <img src=\"assets/img/aqua/bg/app-work-img.png\" alt=\"app-work-img\" class=\"img\">
                        </div>
                    </div>
                </div>
            </section>
            <!-- how-app-work -->
            <!-- video-area -->
            <section class=\"video-area pt-100 pb-100 p-relative\">                
                <div class=\"video-img2\">
                    
                    <img src=\"assets/img/aqua/bg/204072 (1).jpg\" alt=\"mobile\"/>
                
                    <a href=\"https://www.youtube.com/watch?v=ioNng23DkIM\" class=\"popup-video\"><img src=\"assets/img/aqua/bg/play-btn.png\" alt=\"play-btn.png\"></a>
                </div>
                <div class=\"video-img3\">
                    <img src=\"assets/img/aqua/shape/header-sape5.png\" alt=\"header-sape4\">
                </div>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                        </div>
                        <div class=\"col-xl-6\">
                            <div class=\"video-wrap\">
                                <div class=\"section-title w-title left-align mb-25\">
                                    <h2>";
        // line 333
        echo twig_escape_filter($this->env, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["site"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["site_name"] ?? null) : null), "html", null, true);
        echo "</h2>
                                </div>
                                <div class=\"video-content\">
                                    <p>Türkiye'nin en kaliteli SMM Panelinin öne çıkan özellikleri ile tanışın.</p>
                                     <ul>
                                        <li>
                                            <div class=\"icon\"><img src=\"assets/img/aqua/icon/vs-icon.png\"></div> 
                                            <div class=\"text\">İstediğiniz dili seçip kullanabilirsiniz.</div>
                                        </li>
                                        <li>
                                            <div class=\"icon\"><img src=\"assets/img/aqua/icon/vs-icon.png\"></div> 
                                            <div class=\"text\">7/24 Canlı Destek mevcut. İstek,soru ve şikayetlerinizi bildirebilirsiniz.</div>
                                        </li>
                                        <li>
                                            <div class=\"icon\"><img src=\"assets/img/aqua/icon/vs-icon.png\"></div> 
                                            <div class=\"text\">Responsive Uyumludur. Mobil cihazlarınız üzerinde kolay kullanım sunar.   </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- video-area-end -->
           
            
            <!-- faq-area -->
            <section class=\"faq-area pb-100\" style=\"background-image: url(assets/img/aqua/shape/header-sape6.png); background-position: right center; background-size: auto;background-repeat: no-repeat;\">
                <div class=\"container\">
                    <div class=\"row align-items-end\">                        
                        <div class=\"col-lg-6\">
                            <div class=\"faq-img text-right\">
                                <img src=\"assets/img/aqua/bg/feel-img.png\" alt=\"img\" class=\"img\">
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"section-title left-align mb-50\">                               
                                <h2>Sık Sorulan Sorular</h2>
                                <p>Merak ettiğiniz tüm herşey burada. Eğer sorunlarınız hakkında daha detaylı bilgi almak isterseniz bizimle iletişime geçiniz.</p>
                            </div>
                            <div class=\"faq-wrap\">
                                <div class=\"accordion\" id=\"accordionExample\">
                                    <div class=\"card\">
                                        <div class=\"card-header\" id=\"headingThree\">
                                            <h2 class=\"mb-0\">
                                                <button class=\"faq-btn\" type=\"button\" data-toggle=\"collapse\"
                                                    data-target=\"#collapseThree\" aria-expanded=\"true\" aria-controls=\"collapseThree\">
                                                    SMM PANELİM MEVCUT , SİZE NASIL SERVİSLERİ BAĞLAYABİLİRİM ?
                                                </button>
                                            </h2>
                                        </div>
                                        <div id=\"collapseThree\" class=\"collapse show\" aria-labelledby=\"headingThree\"
                                            data-parent=\"#accordionExample\">
                                            <div class=\"card-body\">
                                                SMM Paneliniz mevcut ise , üye girişi yaptıktan sonra sağ üstteki ayarlar kısmından api key mevcuttur. Api keyi kendi panelinize girerek sistemden servisleri otomatik olarak kendi sisteminize bağlayabilir , satış yapabilirsiniz.Detaylı bilgi için site içi destek kısmından ulaşabilirsiniz.
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"card\">
                                        <div class=\"card-header\" id=\"headingOne\">
                                            <h2 class=\"mb-0\">
                                                <button class=\"faq-btn collapsed\" type=\"button\" data-toggle=\"collapse\"
                                                    data-target=\"#collapseOne\" aria-expanded=\"false\" aria-controls=\"collapseOne\">
                                                   ŞİFRE VERMEM GEREKİYOR MU ?
                                                </button>
                                            </h2>
                                        </div>
                                        <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                                            <div class=\"card-body\">
                                               Sistem içerisinde olan tüm servislerde şifreniz gerekmemektedir. Şifrenizi istemiyoruz.
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"card\">
                                        <div class=\"card-header\" id=\"headingTwo\">
                                            <h2 class=\"mb-0\">
                                                <button class=\"faq-btn collapsed\" type=\"button\" data-toggle=\"collapse\"
                                                    data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                                   BENİM PROFİLİMDEN PAYLAŞIM YAPILACAK MI ? BAŞKASINI BEĞENİR MİYİM ?
                                                </button>
                                            </h2>
                                        </div>
                                        <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionExample\">
                                            <div class=\"card-body\">
                                               Kesinlikle başkasını beğenmez veya takip etmezsiniz. Diğer uygulamalar gibi herhangir bir uygulamaya giriş izinli sistem değildir.
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- faq-aread-end -->
            
       
          
        
            
            <!-- testimonial-area -->
            <section id=\"testimonios\" class=\"testimonial-area testimonial-p  pt-100 pb-70\" style=\"background-image:url(assets/img/aqua/bg/client-bg.png); background-repeat: no-repeat; background-position: right center;\">
                <div class=\"container\">
                    <div class=\"row\">    
                        <div class=\"col-lg-6\">
                             <div class=\"section-title center-align\">                              
                                <h2>Müşteri Yorumları</h2>
                                <p>5000+ Mutlu Müşterinin Yorumları</p>
                            </div>
                        </div>
                       <div class=\"col-lg-12\">
                           
                            <div class=\"testimonial-active\">
         
                                 <div class=\"col-xl-4\">
                                    <div class=\"single-testimonial\">
                                       <div class=\"testi-author text-left\">
                                            <img src=\"assets/img/aqua/testimonial/testi_avatar2.png\" alt=\"img\">
                                            <div class=\"ta-info\">
                                                <h6>Alev Zorlu</h6>
                                                <span>R10.net</span>
                                            </div>
                                        </div>
                                         <div class=\"qutation\"><img src=\"assets/img/aqua/bg/qutation.png\" alt=\"qutation.png\"></div>
                                         <p>";
        // line 459
        echo twig_escape_filter($this->env, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["site"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["site_name"] ?? null) : null), "html", null, true);
        echo " ile çalışmaya başladığımdan beri hizmetlerinden son derece memnunum</p>
                                        
                                       
                                    </div>
                                </div>
                                 <div class=\"col-xl-4\">
                                    <div class=\"single-testimonial\">
                                         <div class=\"testi-author text-left\">
                                            <img src=\"assets/img/aqua/testimonial/testi_avatar3.png\" alt=\"img\">
                                            <div class=\"ta-info\">
                                                <h6>Fethi Çetin</h6>
                                                <span>WMAraci.com</span>
                                            </div>
                                        </div>
                                         <div class=\"qutation\"><img src=\"assets/img/aqua/bg/qutation.png\" alt=\"qutation.png\"></div>
                                        <p>Güvenilir, kaliteli ve hızlı servisler ile her zaman müşteri memnuniyeti odaklı çalıştıkları için teşekkürler ";
        // line 474
        echo twig_escape_filter($this->env, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["site"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["site_name"] ?? null) : null), "html", null, true);
        echo "</p>
                                        
                                    </div>
                                </div>
                                 <div class=\"col-xl-4\">
                                    <div class=\"single-testimonial\">
                                        <div class=\"testi-author text-left\">
                                            <img src=\"assets/img/aqua/testimonial/testi_avatar.png\" alt=\"img\">
                                            <div class=\"ta-info\">
                                                <h6>Baran Alp Yılmaz</h6>
                                                <span>Virgul.net</span>
                                            </div>
                                        </div>
                                        <div class=\"qutation\"><img src=\"assets/img/aqua/bg/qutation.png\" alt=\"qutation.png\"></div>
                                         <p>İşini gerçekten hakkıyla yapan bir panel. Teşekkürler ";
        // line 488
        echo twig_escape_filter($this->env, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["site"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["site_name"] ?? null) : null), "html", null, true);
        echo "</p>
                                        
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->
           
           
       
            <!-- contact-area -->
            <section id=\"contact\" class=\"contact-area contact-bg  pt-50 pb-100 p-relative fix\"  style=\"background-image: url(assets/img/aqua/shape/header-sape8.png); background-position: right center; background-size: auto;background-repeat: no-repeat;\">
                <div class=\"container\">
             
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"contact-img2\">
                                <img src=\"assets/img/aqua/bg/illustration.png\" alt=\"test\">
                            </div>                      
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"section-title mb-40\">                              
                                <h2>Fenomen Olmaya Hazır Mısın?</h2>
                                  <p>O Halde Ne Duruyorsun?
Hemen Giriş Yap ve Fenomenlik Yolunda İlk Adımı At.</p>
                            </div>
                        <form method=\"POST\" action=\"/auth\" class=\"contact-form\">
                            <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"contact-field p-relative c-name mb-20\">                                    
                                    <input type=\"text\" name=\"username\" placeholder=\"Kullanıcı Adı\">
                                </div>                               
                            </div>
                             <div class=\"col-lg-12\">                    
                                <div class=\"contact-field p-relative c-email mb-20\">                                    
                                    <input type=\"password\" name=\"password\" placeholder=\"Şifre\">
                                </div>                                
                            </div>
                                      

          ";
        // line 534
        if (($context["captcha"] ?? null)) {
            // line 535
            echo "            <div class=\"form-group\">
              <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 536
            echo twig_escape_filter($this->env, ($context["captchaKey"] ?? null), "html", null, true);
            echo "\"></div>
            </div>
          ";
        }
        // line 539
        echo "                            
                            <div class=\"col-lg-12\">
                         
                                <button class=\"btn\">Giriş Yap</button>
                            </div>
                            </div>
                        
                    </form>
                        </div>
                    </div>
                    
                </div>
               
            </section>
            <!-- contact-area-end -->
        </main>
        <!-- main-area-end -->
        <!-- footer -->
        <footer class=\"footer-bg footer-p pt-60\" style=\"background-image: url(assets/img/aqua/bg/f-bg.png); background-position: center top; background-size: auto;background-repeat: no-repeat;\">            
  
            <div class=\"footer-top\">
                <div class=\"container\">
                    <div class=\"row justify-content-between\">
                        <div class=\"col-xl-3 col-lg-3 col-sm-6\">
                            <div class=\"footer-widget mb-30\">
                                <div class=\"logo mt-15 mb-15\">
                                    <a href=\"#\">
  ";
        // line 566
        if ((($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["site"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["logo"] ?? null) : null)) {
            // line 567
            echo "                                      <img src=\"";
            echo twig_escape_filter($this->env, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["site"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["logo"] ?? null) : null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["site"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["site_name"] ?? null) : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["site"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["site_name"] ?? null) : null), "html", null, true);
            echo "\" height=\"50\" width=\"%100\">
                                    ";
        } else {
            // line 569
            echo "                                      ";
            echo twig_escape_filter($this->env, (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["site"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["site_name"] ?? null) : null), "html", null, true);
            echo "
                                    ";
        }
        // line 570
        echo "                                       </a>
                                </div>
                                <div class=\"footer-text mb-20\">
                                    <p>7/24 Tam otomatik alt yapısı sayesinde bütün işlemlerinizi hızlı ve kolayca halledebileceğiniz SMM panelidir.</p>
                                </div>
                                <div class=\"footer-social\">
                                    <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                    <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                                    <a href=\"#\"><i class=\"fab fa-google-plus-g\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-2 col-lg-3 col-sm-6\">
                            <div class=\"footer-widget mb-30\">
                                <div class=\"f-widget-title\">
                                    <h5>Site Bağlantıları
</h5>
                                </div>
                                <div class=\"footer-link\">
                                    <ul>                                        
                                        <li><a href=\"#contact\">";
        // line 591
        echo twig_escape_filter($this->env, (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["lang"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["signin.title"] ?? null) : null), "html", null, true);
        echo "</a></li>
                                        <li><a href=\"signup\">";
        // line 592
        echo twig_escape_filter($this->env, (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["lang"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["signup.title"] ?? null) : null), "html", null, true);
        echo "</a></li>
                                        <li><a href=\"blog\">";
        // line 593
        echo twig_escape_filter($this->env, (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["lang"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["blog.title"] ?? null) : null), "html", null, true);
        echo "</a></li>
                                        <li><a href=\"faq\">";
        // line 594
        echo twig_escape_filter($this->env, (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["lang"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["faq.title"] ?? null) : null), "html", null, true);
        echo "</a></li>
                                        <li><a href=\"terms\">";
        // line 595
        echo twig_escape_filter($this->env, (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["lang"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["terms.title"] ?? null) : null), "html", null, true);
        echo "</a></li>                                <li><a href=\"api\">";
        echo twig_escape_filter($this->env, (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["lang"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["api.title"] ?? null) : null), "html", null, true);
        echo "</a></li>                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-3 col-sm-6\">
                            <div class=\"footer-widget mb-30\">
                                <div class=\"f-widget-title\">
                                    <h5>Bize Ulaşın</h5>
                                </div>
                                  <div class=\"footer-social\">
                                   <a href=\"https://wa.me+905555555555\">
                    <i class=\"fa fa-whatsapp\"></i></a>
                                    <a href=\"mailto:mail@mail.com\"> 
                     <i class=\"fa fa-envelope\"></i></a>
                                    <a href=\"https://t.me/\">
                     <i class=\"fa fa-telegram\"></i></a>
                                    
                                    
                                    </div>
                                   
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"copyright-wrap text-center\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"copyright-text\">
                                <p>";
        // line 628
        echo twig_escape_filter($this->env, (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["site"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["site_name"] ?? null) : null), "html", null, true);
        echo " © Copyright 2020 Tüm Hakları Saklıdır.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->

    ";
        // line 637
        echo twig_escape_filter($this->env, ($context["footerCode"] ?? null), "html", null, true);
        echo "



";
        // line 641
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["site"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["languages"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 642
            echo "  ";
            if ((($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["lang"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["active"] ?? null) : null)) {
                // line 643
                echo "    <script src=\"https://www.google.com/recaptcha/api.js?hl=";
                echo twig_escape_filter($this->env, (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["lang"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["code"] ?? null) : null), "html", null, true);
                echo "\"></script>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 646
        echo "
        <!-- JS here -->
        <script src=\"js/aqua/aqua/modernizr-3.5.0.min.js\"></script>
        <script src=\"js/aqua/vendor/jquery-1.12.4.min.js\"></script>
        <script src=\"js/aqua/popper.min.js\"></script>
        <script src=\"js/aqua/bootstrap.min.js\"></script>
        <script src=\"js/aqua/one-page-nav-min.js\"></script>
        <script src=\"js/aqua/slick.min.js\"></script>
        <script src=\"js/aqua/ajax-form.js\"></script>
        <script src=\"js/aqua/paroller.js\"></script>
        <script src=\"js/aqua/wow.min.js\"></script>
        <script src=\"js/aqua/js_isotope.pkgd.min.js\"></script>
        <script src=\"js/aqua/imagesloaded.min.js\"></script>
        <script src=\"js/aqua/parallax.min.js\"></script>
        <script src=\"js/aqua/jquery.waypoints.min.js\"></script>
        <script src=\"js/aqua/jquery.counterup.min.js\"></script>
        <script src=\"js/aqua/jquery.scrollUp.min.js\"></script>
        <script src=\"js/aqua/typed.js\"></script>
        <script src=\"js/aqua/parallax-scroll.js\"></script>
        <script src=\"js/aqua/jquery.magnific-popup.min.js\"></script>
        <script src=\"js/aqua/element-in-view.js\"></script>
        <script src=\"js/aqua/swiper.min.js\"></script>
        <script src=\"js/aqua/main.js\"></script>
      
        
        
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "main/aqua/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  914 => 646,  904 => 643,  901 => 642,  897 => 641,  890 => 637,  878 => 628,  840 => 595,  836 => 594,  832 => 593,  828 => 592,  824 => 591,  801 => 570,  795 => 569,  785 => 567,  783 => 566,  754 => 539,  748 => 536,  745 => 535,  743 => 534,  694 => 488,  677 => 474,  659 => 459,  530 => 333,  373 => 178,  367 => 175,  363 => 173,  360 => 172,  354 => 169,  350 => 167,  348 => 166,  339 => 159,  333 => 156,  330 => 155,  328 => 154,  305 => 134,  279 => 110,  272 => 107,  268 => 105,  266 => 104,  259 => 99,  253 => 97,  246 => 96,  243 => 95,  237 => 92,  230 => 91,  227 => 90,  221 => 87,  214 => 86,  211 => 85,  205 => 82,  198 => 81,  196 => 80,  193 => 79,  187 => 76,  180 => 75,  177 => 74,  171 => 71,  168 => 70,  166 => 69,  161 => 67,  155 => 66,  143 => 56,  137 => 55,  127 => 53,  125 => 52,  109 => 39,  86 => 18,  80 => 16,  78 => 15,  74 => 14,  70 => 13,  66 => 12,  59 => 8,  56 => 7,  46 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/aqua/login.twig", "/var/www/vhosts/glycondemo.com/httpdocs/app/Views/main/aqua/login.twig");
    }
}
