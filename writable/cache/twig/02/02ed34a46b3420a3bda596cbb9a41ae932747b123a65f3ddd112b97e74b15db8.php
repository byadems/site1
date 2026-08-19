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

/* main/sandstone/footer.twig */
class __TwigTemplate_f26dd77f9871eb49033e6798a34554ee9d2a1285a15e88fe2162055cae8a121f extends Template
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
        echo twig_escape_filter($this->env, ($context["footerCode"] ?? null), "html", null, true);
        echo "

";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scriptList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 4
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $context["script"], "html", null, true);
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "main/sandstone/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/sandstone/footer.twig", "/var/www/vhosts/glycondemo.com/httpdocs/app/Views/main/sandstone/footer.twig");
    }
}
