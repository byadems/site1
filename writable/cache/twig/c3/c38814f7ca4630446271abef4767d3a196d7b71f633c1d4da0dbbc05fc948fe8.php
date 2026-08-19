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

/* main/aqua/signup.twig */
class __TwigTemplate_eb0c4f6677082d9d99b2d2a83451a48c58fb1d7dc2cb460f07093ea7491fc41a extends Template
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
        $this->loadTemplate("main/aqua/header.twig", "main/aqua/signup.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-8 col-md-offset-2\">

      ";
        // line 7
        if (($context["errorText"] ?? null)) {
            // line 8
            echo "        <div class=\"alert alert-dismissible alert-danger\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
          ";
            // line 10
            echo twig_escape_filter($this->env, ($context["errorText"] ?? null), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 13
        echo "      ";
        if (($context["successText"] ?? null)) {
            // line 14
            echo "        <div class=\"alert alert-dismissible alert-success\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
          ";
            // line 16
            echo twig_escape_filter($this->env, ($context["successText"] ?? null), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 19
        echo "
      <div class=\"well\">
        <form method=\"post\" action=\"\">
         <div class=\"form-group\">
            <label for=\"username\" class=\"control-label\">";
        // line 23
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["lang"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["signup.username"] ?? null) : null), "html", null, true);
        echo "</label>
            <input type=\"text\" class=\"form-control\" name=\"username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["data"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["username"] ?? null) : null), "html", null, true);
        echo "\">
         </div>  
        ";
        // line 26
        if ((0 === twig_compare((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["settings"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["name_secret"] ?? null) : null), 2))) {
            // line 27
            echo "          <div class=\"form-group\">
            <label for=\"username\" class=\"control-label\">";
            // line 28
            echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["lang"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["signup.first_name"] ?? null) : null), "html", null, true);
            echo "</label>
            <input type=\"text\" class=\"form-control\"  name=\"first_name\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["data"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["first_name"] ?? null) : null), "html", null, true);
            echo "\">
          </div>
          <div class=\"form-group\">
            <label for=\"username\" class=\"control-label\">";
            // line 32
            echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["lang"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["signup.last_name"] ?? null) : null), "html", null, true);
            echo "</label>
            <input type=\"text\" class=\"form-control\"  name=\"last_name\" value=\"";
            // line 33
            echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["data"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["last_name"] ?? null) : null), "html", null, true);
            echo "\">
          </div>
\t\t";
        }
        // line 36
        echo "          <div class=\"form-group\">
            <label for=\"username\" class=\"control-label\">";
        // line 37
        echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["lang"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["signup.email"] ?? null) : null), "html", null, true);
        echo "</label>
            <input type=\"text\" class=\"form-control\" name=\"email\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["data"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["email"] ?? null) : null), "html", null, true);
        echo "\">
          </div>
        ";
        // line 40
        if ((0 === twig_compare((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["settings"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["skype_area"] ?? null) : null), 2))) {
            // line 41
            echo "          <div class=\"form-group\">
            <label for=\"username\" class=\"control-label\">";
            // line 42
            echo twig_escape_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["lang"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["signup.telephone"] ?? null) : null), "html", null, true);
            echo "</label>
            <input type=\"text\" class=\"form-control\" name=\"telephone\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["data"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["telephone"] ?? null) : null), "html", null, true);
            echo "\">
          </div>
\t\t";
        }
        // line 46
        echo "          <div class=\"form-group\">
            <label for=\"password\" class=\"control-label\">";
        // line 47
        echo twig_escape_filter($this->env, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["lang"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["signup.password"] ?? null) : null), "html", null, true);
        echo "</label>
            <input type=\"password\" class=\"form-control\" name=\"password\">
          </div>
          <div class=\"form-group\">
            <label for=\"password\" class=\"control-label\">";
        // line 51
        echo twig_escape_filter($this->env, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["lang"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["signup.confirm"] ?? null) : null), "html", null, true);
        echo "</label>
            <input type=\"password\" class=\"form-control\" name=\"password_again\">
          </div>
        ";
        // line 54
        if ((0 === twig_compare((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["settings"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["terms_checkbox"] ?? null) : null), 2))) {
            // line 55
            echo "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"terms\" value=\"1\">";
            // line 57
            echo twig_escape_filter($this->env, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["lang"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["signup.accept_terms_text"] ?? null) : null), "html", null, true);
            echo "
            </label>
          </div>
        ";
        }
        // line 61
        echo "
          <div class=\"form-group\">
             <div class=\"g-recaptcha\" data-sitekey=\"";
        // line 63
        echo twig_escape_filter($this->env, ($context["captchaKey"] ?? null), "html", null, true);
        echo "\"></div>
          </div>

            <button type=\"submit\" class=\"btn btn-primary click\">";
        // line 66
        echo twig_escape_filter($this->env, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["lang"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["signup.button"] ?? null) : null), "html", null, true);
        echo "</button>
        </form>
      </div>
    </div>
  </div>
</div>

";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["site"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["languages"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 74
            echo "  ";
            if ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["lang"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["active"] ?? null) : null)) {
                // line 75
                echo "    <script src=\"https://www.google.com/recaptcha/api.js?hl=";
                echo twig_escape_filter($this->env, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["lang"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["code"] ?? null) : null), "html", null, true);
                echo "\"></script>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
";
        // line 79
        $this->loadTemplate("main/aqua/footer.twig", "main/aqua/signup.twig", 79)->display($context);
    }

    public function getTemplateName()
    {
        return "main/aqua/signup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 79,  204 => 78,  194 => 75,  191 => 74,  187 => 73,  177 => 66,  171 => 63,  167 => 61,  160 => 57,  156 => 55,  154 => 54,  148 => 51,  141 => 47,  138 => 46,  132 => 43,  128 => 42,  125 => 41,  123 => 40,  118 => 38,  114 => 37,  111 => 36,  105 => 33,  101 => 32,  95 => 29,  91 => 28,  88 => 27,  86 => 26,  81 => 24,  77 => 23,  71 => 19,  65 => 16,  61 => 14,  58 => 13,  52 => 10,  48 => 8,  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/aqua/signup.twig", "/home/glycoktb/test.glycondns.co/app/Views/main/aqua/signup.twig");
    }
}
