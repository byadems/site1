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

/* main/aqua/services.twig */
class __TwigTemplate_2cfaeadae1221535493c5d77795e241c81cc5abd0a38c1b169153553691a81f1 extends Template
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
        $this->loadTemplate("main/aqua/header.twig", "main/aqua/services.twig", 1)->display($context);
        // line 2
        echo "<style> .dugme{
  cursor:pointer;
  display:inline-block;
  padding:5px 10px;
  background:#eee;
  border:1px solid #d8d8d8;
  font-family:Helvetica, Arial, sans-serif;font-size:14px;color:#444; 
  -webkit-border-radius: 3px; border-radius: 3px; } 
  [name=\"kapat\"]{position: relative;bottom:20px;left:150px;} 
  .pencere{ 
  position:fixed;
  top:-50%;
  left:-50%;
  width:500px;
  height:auto;
  overflow:auto;
  box-sizing:border-box;
  background:#2e3338;
  box-shadow:0 0 6px 2px rgba(0,0,0,0.4); 
  opacity:0; 
  transition:opacity 0.6s ease-out; 
  z-index:10; 
  padding:10px 15px 0px 25px; 
  -webkit-border-radius: 3px; border-radius: 3px; margin:-150px 0 0 -200px; } .Pencereac{width:1px;height:1px;visibility:hidden;transition:20000ms all;} 
  .Pencereac:checked + 
  .pencere
  { 
left:47%;
top:30%;
  display:block; 
  z-index:9; 
  opacity:1;
  }
     @media only screen and (max-width:768px){
    
    .masaustu{
        display:None;
    }
    
}
@media only screen and (min-width:768px){
    
    .mobil{
        display:None;
    }
    
}
@media only screen and (max-width:768px){
    
    .web{
        display:None;
    }
    
}
</style>
<div class=\"masaustu\">
   <div class=\"bosluk\">
      <div class=\"container\">
         <div class=\"col-lg-6 col-md-offset-3\">
            ";
        // line 61
        if ((0 === twig_compare((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["site"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["service_speed"] ?? null) : null), 2))) {
            // line 62
            echo "            <div class=\"well\">
               <div class=\"top justify-content-center text-center\">
                  <span class=\"list\">
                  <span class=\"\">
                  <span style=\"color: #f24236;font-weight: 500; font-size:13px;\" class=\"fa fa-arrow-down\"></span>
                  <span style=\"color: #f24236;font-weight: 500; font-size:13px;\"><b><u>: ";
            // line 67
            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["lang"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["services.speed.veryslow"] ?? null) : null), "html", null, true);
            echo " </u></b></span></span><br>
                  <span class=\"ml-4x\">
                  <span style=\"color: #fe6d86;font-weight: 500; font-size:13px;\" class=\"fa fa-arrow-down\"></span>
                  <span style=\"color: #fe6d86;font-weight: 500; font-size:13px;\"><b><u>: ";
            // line 70
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["lang"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["services.speed.slow"] ?? null) : null), "html", null, true);
            echo " </u></b></span></span><br>
                  <span class=\"ml-4x\">
                  <span style=\"color: #5696c9;font-weight: 500; font-size:13px;\" class=\"fa fa-compress\"></span>
                  <span style=\"color: #5696c9;font-weight: 500; font-size:13px;\"><b><u>: ";
            // line 73
            echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["lang"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["services.speed.normal"] ?? null) : null), "html", null, true);
            echo " </u></b></span></span><br>
                  <span class=\"ml-4x\">
                  <span style=\"color: #0dd887;font-weight: 500; font-size:13px;\" class=\"fa fa-arrow-up\"></span>
                  <span style=\"color: #0dd887;font-weight: 500; font-size:13px;\"><b><u>: ";
            // line 76
            echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["lang"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["services.speed.fast"] ?? null) : null), "html", null, true);
            echo " </u></b></span></span>
                  </span>
               </div>
            </div>
            ";
        }
        // line 81
        echo "         </div>
         <div class=\"row\">
            <div class=\"hidden-xs col-sm-12 col-md-12 col-lg-12\">
               <div class=\"well\">
                  <div class=\"servisbilgi\">
                     <div class=\"scroll\">
                        <table class=\"table \">
                           <thead>
                              <tr>
                                 <th>";
        // line 90
        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["lang"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["services.id"] ?? null) : null), "html", null, true);
        echo "</th>
                                 <th class=\"width-service-name\">";
        // line 91
        echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["lang"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["services.name"] ?? null) : null), "html", null, true);
        echo "</th>
                                 <th class=\"nowrap t-r\">";
        // line 92
        echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["lang"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["services.price"] ?? null) : null), "html", null, true);
        echo "</th>
                                 <th class=\"nowrap t-r\">";
        // line 93
        echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["lang"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["services.min"] ?? null) : null), "html", null, true);
        echo "</th>
                                 <th class=\"nowrap t-r\">";
        // line 94
        echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["lang"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["services.max"] ?? null) : null), "html", null, true);
        echo "</th>
                                 ";
        // line 95
        if (($context["avarageTime"] ?? null)) {
            // line 96
            echo "                                 <th class=\"nowrap t-r\">";
            echo twig_escape_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["lang"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["services.avarage"] ?? null) : null), "html", null, true);
            echo " <i class=\"fa fa-exclamation-circle\"></i></th>
                                 ";
        }
        // line 98
        echo "                                 <th class=\"nowrap t-r\">";
        echo twig_escape_filter($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["lang"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["neworder.description"] ?? null) : null), "html", null, true);
        echo "</th>
                              </tr>
                           </thead>
                           <tbody>
                              ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["serviceCategory"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 103
            echo "                              <tr>
                                 <td colspan=\"7\" class=\"sc\"><strong>";
            // line 104
            echo twig_escape_filter($this->env, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["category"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["category_name"] ?? null) : null), "html", null, true);
            echo "</strong></td>
                              </tr>
                              ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["category"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["services"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 107
                echo "                              <tr class=\"aralama servie-data-panel\">
                                 <td>";
                // line 108
                echo twig_escape_filter($this->env, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["service"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["service_id"] ?? null) : null), "html", null, true);
                echo "</td>
                                 <td>";
                // line 109
                echo twig_escape_filter($this->env, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["service"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["service_name"] ?? null) : null), "html", null, true);
                echo "</td>
                                 <td class=\"t-r\">";
                // line 110
                echo twig_escape_filter($this->env, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["service"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["service_price"] ?? null) : null), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["site"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["currency"] ?? null) : null), "html", null, true);
                echo "</td>
                                 <td class=\"t-r\">";
                // line 111
                echo twig_escape_filter($this->env, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["service"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["service_min"] ?? null) : null), "html", null, true);
                echo "</td>
                                 <td class=\"t-r\">";
                // line 112
                echo twig_escape_filter($this->env, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["service"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["service_max"] ?? null) : null), "html", null, true);
                echo "</td>
                                 ";
                // line 113
                if (($context["avarageTime"] ?? null)) {
                    // line 114
                    echo "                                 <td class=\"t-r\">";
                    echo twig_escape_filter($this->env, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["service"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["service_speed"] ?? null) : null), "html", null, true);
                    echo "</td>
                                 ";
                }
                // line 116
                echo "                                 <td class=\"t-r\">
                                    <button class=\"btn btn-primary btn-xs\"  data-toggle=\"modal\" data-target=\"#service_desc-";
                // line 117
                echo twig_escape_filter($this->env, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["service"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["service_id"] ?? null) : null), "html", null, true);
                echo "\"><i class=\"fa fa-eye\"></i></button>
                                 </td>
                              </tr>
                              
                            
                            <div id=\"service_desc-";
                // line 122
                echo twig_escape_filter($this->env, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["service"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["service_id"] ?? null) : null), "html", null, true);
                echo "\" class=\"modal fade\" role=\"dialog\">
                              <div class=\"modal-dialog\">
                               <div class=\"modal-content\">
                                  <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
                                    <h4 class=\"modal-title\">";
                // line 127
                echo twig_escape_filter($this->env, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["service"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["service_name"] ?? null) : null), "html", null, true);
                echo "</h4>
                                  </div>
                                  <div class=\"modal-body\">
                                    <p>";
                // line 130
                echo twig_escape_filter($this->env, (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["service"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["service_description"] ?? null) : null), "html", null, true);
                echo "</p>
                                  </div>
                                  <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Kapat</button>
                                  </div>
                                </div>
                            
                              </div>
                            </div>
                                                          
                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class=\"mobil\">
   <div class=\"bosluk\">
      <div class=\"container\">
         <div class=\"row\">
                  ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["serviceCategory"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 157
            echo "                 <div class=\"col-md-12\"><h5 class=\"sc\"><font color=\"white\"><i class=\"fa fa-";
            echo twig_escape_filter($this->env, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["category"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["category_icon"] ?? null) : null), "html", null, true);
            echo "\"></i><b><u> ";
            echo twig_escape_filter($this->env, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["category"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["category_name"] ?? null) : null), "html", null, true);
            echo " </u></b><i class=\"fa fa-";
            echo twig_escape_filter($this->env, (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["category"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["category_icon"] ?? null) : null), "html", null, true);
            echo "\"></i></font></h5>
               </div> ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["category"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["services"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                echo "      
               <div class=\"col-lg-12\">
                  <div class=\"well-box pshadow\">
                     <div class=\"w-title\">
                        <h5 class=\"sc\">";
                // line 162
                echo twig_escape_filter($this->env, (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["category"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["category_name"] ?? null) : null), "html", null, true);
                echo "</h5>
                        <b>#";
                // line 163
                echo twig_escape_filter($this->env, (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["service"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["service_id"] ?? null) : null), "html", null, true);
                echo "</b>
                        <br>
                        <b>";
                // line 165
                echo twig_escape_filter($this->env, (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["service"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["service_name"] ?? null) : null), "html", null, true);
                echo "</b>
                        <br>
                        <small style=\"color: #c4c5c4\">
                        Minimum:<b><font style=\"color:#c4c5c4\"> ";
                // line 168
                echo twig_escape_filter($this->env, (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["service"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["service_min"] ?? null) : null), "html", null, true);
                echo "</font></b> - Maksimum:<b><font style=\"color:#c4c5c4\"> ";
                echo twig_escape_filter($this->env, (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["service"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["service_max"] ?? null) : null), "html", null, true);
                echo "</font></b>
                        </small>
                        <br><br>
                        <strong style=\"text-align: center;font-size: 16px;font-weight: bolder;border: 1px solid #cacaca;padding: 4px;border-radius: 5px;\">
                        <b>
                        ";
                // line 173
                echo twig_escape_filter($this->env, (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["service"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["service_price"] ?? null) : null), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["site"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["currency"] ?? null) : null), "html", null, true);
                echo "
                        <small style=\"color: #c4c5c4;font-size: 10px;\"></b>/ 1.000 Adet</small>
                        </strong>
                        </center>
                        </p>   
                     </div>
                  </div>
               </div>
            <br>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "         </div>
      </div>
   </div>
</div>
</div>
";
        // line 189
        $this->loadTemplate("main/aqua/footer.twig", "main/aqua/services.twig", 189)->display($context);
    }

    public function getTemplateName()
    {
        return "main/aqua/services.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 189,  366 => 184,  360 => 183,  342 => 173,  332 => 168,  326 => 165,  321 => 163,  317 => 162,  308 => 158,  299 => 157,  295 => 156,  279 => 142,  273 => 141,  256 => 130,  250 => 127,  242 => 122,  234 => 117,  231 => 116,  225 => 114,  223 => 113,  219 => 112,  215 => 111,  209 => 110,  205 => 109,  201 => 108,  198 => 107,  194 => 106,  189 => 104,  186 => 103,  182 => 102,  174 => 98,  168 => 96,  166 => 95,  162 => 94,  158 => 93,  154 => 92,  150 => 91,  146 => 90,  135 => 81,  127 => 76,  121 => 73,  115 => 70,  109 => 67,  102 => 62,  100 => 61,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/aqua/services.twig", "/home/glycoktb/test.glycondns.co/app/Views/main/aqua/services.twig");
    }
}
