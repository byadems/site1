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

/* main/bootstrap/login.twig */
class __TwigTemplate_11a21a6700ee144b81a123cb43836231baa7874ab918085c8d821e45fa540f49 extends Template
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
        $this->loadTemplate("main/bootstrap/header.twig", "main/bootstrap/login.twig", 1)->display($context);
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
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
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
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
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
        <form  method=\"post\" action=\"\">

          <div class=\"form-group\">
            <label for=\"username\" class=\"control-label\">";
        // line 24
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["lang"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["signin.username"] ?? null) : null), "html", null, true);
        echo "</label>
            <input type=\"text\" class=\"form-control\" name=\"username\">
          </div>
          <div class=\"form-group  form-group__password\">
            <label for=\"password\" class=\"control-label\">";
        // line 28
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["lang"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["signin.password"] ?? null) : null), "html", null, true);
        echo "</label>
            <input type=\"password\" class=\"form-control\" name=\"password\">
            ";
        // line 30
        if (($context["resetPage"] ?? null)) {
            // line 31
            echo "             <a href=\"resetpassword\" class=\"forgot-password\"> ";
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["lang"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["signin.password.lost"] ?? null) : null), "html", null, true);
            echo "</a>
            ";
        }
        // line 33
        echo "          </div>
          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"remember\" value=\"1\">";
        // line 36
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["lang"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["signin.remember"] ?? null) : null), "html", null, true);
        echo "
            </label>
          </div>

          ";
        // line 40
        if (($context["captcha"] ?? null)) {
            // line 41
            echo "            <div class=\"form-group\">
              <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 42
            echo twig_escape_filter($this->env, ($context["captchaKey"] ?? null), "html", null, true);
            echo "\"></div>
            </div>
          ";
        }
        // line 45
        echo "
          <button type=\"submit\" class=\"btn btn-primary click\">";
        // line 46
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["lang"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["signin.button"] ?? null) : null), "html", null, true);
        echo "</button>
          </form>
      </div>
    </div>
  </div>
</div>

";
        // line 53
        if (($context["contentText"] ?? null)) {
            // line 54
            echo "<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-8 col-md-offset-2\">
      <div class=\"well \">
        ";
            // line 58
            echo twig_escape_filter($this->env, ($context["contentText"] ?? null), "html", null, true);
            echo "
      </div>
    </div>
  </div>
</div>
";
        }
        // line 64
        echo "
";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["site"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["languages"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 66
            echo "  ";
            if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["lang"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["active"] ?? null) : null)) {
                // line 67
                echo "    <script src=\"https://www.google.com/recaptcha/api.js?hl=";
                echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["lang"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["code"] ?? null) : null), "html", null, true);
                echo "\"></script>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
";
        // line 71
        $this->loadTemplate("main/bootstrap/footer.twig", "main/bootstrap/login.twig", 71)->display($context);
    }

    public function getTemplateName()
    {
        return "main/bootstrap/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 71,  171 => 70,  161 => 67,  158 => 66,  154 => 65,  151 => 64,  142 => 58,  136 => 54,  134 => 53,  124 => 46,  121 => 45,  115 => 42,  112 => 41,  110 => 40,  103 => 36,  98 => 33,  92 => 31,  90 => 30,  85 => 28,  78 => 24,  71 => 19,  65 => 16,  61 => 14,  58 => 13,  52 => 10,  48 => 8,  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/bootstrap/login.twig", "/home/glycoktb/test.glycondns.co/app/Views/main/bootstrap/login.twig");
    }
}
