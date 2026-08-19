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

/* main/spacelab/services.twig */
class __TwigTemplate_1a6f23a6735ef51012a5cd1fe1d35c1d58841a38be2175988d79665943eab0c5 extends Template
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
        $this->loadTemplate("header.twig", "main/spacelab/services.twig", 1)->display($context);
        // line 2
        echo "<div class=\"";
        if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["user"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["auth"] ?? null) : null)) {
            echo " container-fluid ";
        } else {
            echo " container ";
        }
        echo "\">
    <div class=\"row\">
        <div class=\"col-lg-12 mb-5\">
            <div class=\"d-card mb-3\">
                <div class=\"d-card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-4 mb-3 mb-md-0\">
                            <div class=\"dropdown\">
                                <select onchange=\"filtereKategori()\" id=\"kategori_filtre\" class=\"form-control\" style=\"width:100%!important;\">
                                    <option value=\"All\">Kategori Filtrele (Filtre Seçilmedi)</option>
                                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["serviceCategory"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 13
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["category"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["category_name"] ?? null) : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["category"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["category_name"] ?? null) : null), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-8 mb-3\">
                            <div class=\"input-group\">
                                <input type=\"text\" onkeyup=\"filtrele()\" id=\"serv-inp\"
                                class=\"form-control\"
                                placeholder=\"Aramak istediğiniz servisi yazınız.\">
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-12 col-12\">
                            <div class=\"table-service-head\">
                                <div class=\"table-services-row\">
                                    <div class=\"table-service-id\">";
        // line 30
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["lang"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["services.id"] ?? null) : null), "html", null, true);
        echo "</div>
                                    <div class=\"table-service-name\">";
        // line 31
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["lang"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["services.name"] ?? null) : null), "html", null, true);
        echo "</div>
                                    <div class=\"table-service-per\">";
        // line 32
        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["lang"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["services.price"] ?? null) : null), "html", null, true);
        echo "</div>
                                    <div class=\"table-service-min\">Min</div>
                                    <div class=\"table-service-max\">Max</div>
                                    ";
        // line 35
        if (($context["avarageTime"] ?? null)) {
            // line 36
            echo "                                    <div class=\"table-service-avg\">";
            echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["lang"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["services.avarage"] ?? null) : null), "html", null, true);
            echo "</div>
                                    ";
        }
        // line 38
        echo "                                    <div class=\"table-service-des\">";
        echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["lang"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["neworder.description"] ?? null) : null), "html", null, true);
        echo "</div>
                                </div>
                            </div>
                            <div class=\"services-all\">
                                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["serviceCategory"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 43
            echo "                                    <div class=\"table-service-title\">
                                        <span>";
            // line 44
            echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["category"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["category_name"] ?? null) : null), "html", null, true);
            echo "</span>
                                    </div>
                                    ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["category"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["services"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 47
                echo "                                    <div class=\"table-service-item\" id=\"servisDetay\" data-kategori=\"";
                echo twig_escape_filter($this->env, twig_replace_filter((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["category"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["category_name"] ?? null) : null), [" " => "-"]), "html", null, true);
                echo "\">
                                        <div class=\"table-services-row\">
                                            <div class=\"table-service-id\">
                                                <div class=\"table-service-id-box\">";
                // line 50
                echo twig_escape_filter($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["service"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["service_id"] ?? null) : null), "html", null, true);
                echo "</div>
                                            </div>
                                            <div class=\"table-service-name\">
                                                <div class=\"table-service-m-title\">";
                // line 53
                echo twig_escape_filter($this->env, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["lang"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["services.name"] ?? null) : null), "html", null, true);
                echo "</div>
                                                ";
                // line 54
                echo twig_escape_filter($this->env, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["service"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["service_name"] ?? null) : null), "html", null, true);
                echo "
                                            </div>
                                            <div class=\"table-service-per\">
                                                <div class=\"table-service-m-title\">";
                // line 57
                echo twig_escape_filter($this->env, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["lang"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["services.price"] ?? null) : null), "html", null, true);
                echo "</div>
                                                ";
                // line 58
                echo twig_escape_filter($this->env, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["service"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["service_price"] ?? null) : null), "html", null, true);
                echo "
                                            </div>
                                            <div class=\"table-service-min\">
                                                <div class=\"table-service-m-title\">Min</div>
                                                ";
                // line 62
                echo twig_escape_filter($this->env, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["service"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["service_min"] ?? null) : null), "html", null, true);
                echo "
                                            </div>
                                            <div class=\"table-service-max\">
                                                <div class=\"table-service-m-title\">Max</div>
                                                ";
                // line 66
                echo twig_escape_filter($this->env, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["service"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["service_max"] ?? null) : null), "html", null, true);
                echo "
                                            </div>
                                            ";
                // line 68
                if (($context["avarageTime"] ?? null)) {
                    // line 69
                    echo "                                            <div class=\"table-service-avg\">
                                                <div class=\"table-service-m-title\">";
                    // line 70
                    echo twig_escape_filter($this->env, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["lang"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["services.avarage"] ?? null) : null), "html", null, true);
                    echo "</div>
                                                ";
                    // line 71
                    echo twig_escape_filter($this->env, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["service"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["service_speed"] ?? null) : null), "html", null, true);
                    echo "
                                            </div>
                                            ";
                }
                // line 74
                echo "                                            <div class=\"table-service-desc\">
                                                <button data-toggle=\"modal\"
                                                data-target=\"#servModal";
                // line 76
                echo twig_escape_filter($this->env, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["service"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["service_id"] ?? null) : null), "html", null, true);
                echo "\"
                                                class=\"btn btn-dark btn-sm\"><i
                                                class=\"fas fa-bars\"></i></button>
                                            </div>
                                        </div>
                                        <div class=\"modal fade\" id=\"servModal";
                // line 81
                echo twig_escape_filter($this->env, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["service"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["service_id"] ?? null) : null), "html", null, true);
                echo "\">
                                            <div class=\"modal-dialog\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <h4 class=\"modal-title\">";
                // line 85
                echo twig_escape_filter($this->env, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["service"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["service_name"] ?? null) : null), "html", null, true);
                echo "</h4>
                                                    </div>
                                                    <div class=\"modal-body\">
                                                        ";
                // line 88
                echo twig_escape_filter($this->env, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["service"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["service_description"] ?? null) : null), "html", null, true);
                echo "
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                        <button type=\"button\" class=\"btn btn-danger\"
                                                        data-dismiss=\"modal\">Kapat</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 108
        if (($context["contentText"] ?? null)) {
            // line 109
            echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-2\">
            <div class=\"well \">
                ";
            // line 113
            echo twig_escape_filter($this->env, ($context["contentText"] ?? null), "html", null, true);
            echo "
            </div>
        </div>
    </div>
</div>
";
        }
        // line 119
        $this->loadTemplate("footer.twig", "main/spacelab/services.twig", 119)->display($context);
        // line 120
        echo "<script>
    var rows = \$('table tr').each(function () {
        var row = \$(this);
        var columns = row.children('td');

        row.data('name-chars', [
            columns.eq(0).html()[0].toUpperCase(),
            columns.eq(1).html()[0].toUpperCase(),
        ]);
    });

    \$('select').change(function () {
        var char = \$(this).val().toUpperCase();

        rows.each(function () {
            var row = \$(this);
            var chars_to_match = row.data('name-chars');
            if (\$.inArray(char, chars_to_match) > -1) {
                row.show();
            } else {
                row.hide();
            }
        });
    });
</script>
<script>
    window.secilikategori = \"\";
    function filtrele() {
        var input, chars,input_new, filter, ul, li, e, i, txtValue;
        chars = {'İ': 'I', 'Ü': 'U', 'ü': 'u', 'Ç': 'C', 'ç': 'c', 'Ö': 'O', 'ö': 'o', 'Ğ': 'G', 'ğ': 'g'};
        input = document.getElementById('serv-inp');
        filter = input.value.toUpperCase();

        ul = document.getElementsByClassName(\"table-service-item\");
        for (e = 0; e < ul.length; e++) {
            li = ul[e].getElementsByClassName('table-service-name');
            var b = \$(\"div[data-kategori*=\" + input_new + \"]\");
            for (i = 0; i < li.length; i++) {
                if(window.secilikategori == \"\" || window.secilikategori == ul[e].getAttribute('data-kategori')){
                txtValue = li[i].textContent || li[i].innerText;
                txtValue = txtValue.replaceAll(/[İÜüÇçÖöĞğ]/g, m => chars[m]);
                filter = filter.replaceAll(/[İÜüÇçÖöĞğ]/g, m => chars[m]);



                if (txtValue.toUpperCase().indexOf(filter.toUpperCase()) > -1) {
                    ul[e].style.display = \"\";
                } else {
                    ul[e].style.display = \"none\";
                }
                }
            }
        }
    }

</script>
<script>
    function filtereKategori() {
        var input, input_new, ul, a, e, kat, i;
        input = document.getElementById('kategori_filtre').value;
        input_new = input.replaceAll(' ', '-');

        if (input != 'All') {
            window.secilikategori = input_new;
            var g = \$(\"div[id*='servisDetay']:visible\").hide();
            ul = document.getElementsByClassName(\"table-service-title\");
            for (e = 0; e < ul.length; e++) {
                a = ul[e].getElementsByTagName(\"span\")[0].innerText;


                if (a.toUpperCase().indexOf(input.toUpperCase()) > -1) {

                    var b = \$(\"div[data-kategori*=\" + input_new + \"]\").show();
                    ul[e].style.display = \"\";
                } else {
                    ul[e].style.display = \"none\";
                }
            }
            filtrele();
        } else {
            window.secilikategori = \"\";
            ul = document.getElementsByClassName(\"table-service-title\");
            var g = \$(\"div[id*='servisDetay']\").show();
            for (e = 0; e < ul.length; e++) {

                ul[e].style.display = \"\";

            }
            filtrele();
        }
    }
</script>";
    }

    public function getTemplateName()
    {
        return "main/spacelab/services.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 120,  271 => 119,  262 => 113,  256 => 109,  254 => 108,  244 => 100,  238 => 99,  221 => 88,  215 => 85,  208 => 81,  200 => 76,  196 => 74,  190 => 71,  186 => 70,  183 => 69,  181 => 68,  176 => 66,  169 => 62,  162 => 58,  158 => 57,  152 => 54,  148 => 53,  142 => 50,  135 => 47,  131 => 46,  126 => 44,  123 => 43,  119 => 42,  111 => 38,  105 => 36,  103 => 35,  97 => 32,  93 => 31,  89 => 30,  72 => 15,  61 => 13,  57 => 12,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/spacelab/services.twig", "/var/www/vhosts/glycondemo.com/httpdocs/app/Views/main/spacelab/services.twig");
    }
}
