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

/* main/spacelab/neworder.twig */
class __TwigTemplate_d2391bae059cbdde35ac51f12be4e70fa12dfa3dee26571e9fad6b4d546052ea extends Template
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
        $this->loadTemplate("main/spacelab/header.twig", "main/spacelab/neworder.twig", 1)->display($context);
        // line 2
        echo "<div class=\"row\">
  <div class=\"col-lg-12\">
    ";
        // line 4
        if ((-1 === twig_compare((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["user"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["balance"] ?? null) : null), 5))) {
            // line 5
            echo "    <div class=\"alert alert-dismissible alert-danger\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
      <strong>@";
            // line 7
            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["user"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["username"] ?? null) : null), "html", null, true);
            echo ", </strong> <br>";
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["lang"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["error.neworder.balance.low"] ?? null) : null), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 10
        echo "
    ";
        // line 11
        if (($context["error"] ?? null)) {
            // line 12
            echo "    <div class=\"alert alert-dismissible alert-danger\">
      ";
            // line 13
            echo twig_escape_filter($this->env, ($context["errorText"] ?? null), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if ((0 === twig_compare((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["data"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["order"] ?? null) : null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["success"] ?? null) : null), 1))) {
            // line 18
            echo "    <div class=\"alert alert-dismissible alert-success\">
      <strong> ";
            // line 19
            echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["lang"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["neworder.success.id"] ?? null) : null), "html", null, true);
            echo ": </strong> ";
            echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["data"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["order"] ?? null) : null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["id"] ?? null) : null), "html", null, true);
            echo " <br>
      <strong> ";
            // line 20
            echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["lang"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["neworder.success.service"] ?? null) : null), "html", null, true);
            echo ": </strong> ";
            echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["data"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["order"] ?? null) : null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["service"] ?? null) : null), "html", null, true);
            echo " <br>
      <strong> ";
            // line 21
            echo twig_escape_filter($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["lang"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["neworder.success.link"] ?? null) : null), "html", null, true);
            echo ": </strong> ";
            echo twig_escape_filter($this->env, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["data"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["order"] ?? null) : null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["link"] ?? null) : null), "html", null, true);
            echo " <br>
      <strong> ";
            // line 22
            echo twig_escape_filter($this->env, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["lang"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["neworder.success.quantity"] ?? null) : null), "html", null, true);
            echo ": </strong> ";
            echo twig_escape_filter($this->env, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["data"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["order"] ?? null) : null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["quantity"] ?? null) : null), "html", null, true);
            echo " <br>
      <strong> ";
            // line 23
            echo twig_escape_filter($this->env, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["lang"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["neworder.success.link"] ?? null) : null), "html", null, true);
            echo ": </strong> ";
            echo twig_escape_filter($this->env, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["data"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["order"] ?? null) : null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["price"] ?? null) : null), "html", null, true);
            echo " <br>
      <strong> ";
            // line 24
            echo twig_escape_filter($this->env, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["lang"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["neworder.success.balance"] ?? null) : null), "html", null, true);
            echo ": </strong>";
            echo twig_escape_filter($this->env, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["data"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["order"] ?? null) : null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["balance"] ?? null) : null), "html", null, true);
            echo " <br>
    </div>
    ";
        }
        // line 27
        echo "    ";
        if ((0 === twig_compare((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["data"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["order"] ?? null) : null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["success"] ?? null) : null), 2))) {
            // line 28
            echo "    <div class=\"alert alert-dismissible alert-success\">
      <strong> ";
            // line 29
            echo twig_escape_filter($this->env, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["lang"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["neworder.success.id"] ?? null) : null), "html", null, true);
            echo ": </strong> ";
            echo twig_escape_filter($this->env, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["data"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["order"] ?? null) : null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["id"] ?? null) : null), "html", null, true);
            echo " <br>
      <strong> ";
            // line 30
            echo twig_escape_filter($this->env, (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["lang"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["neworder.success.service"] ?? null) : null), "html", null, true);
            echo ": </strong> ";
            echo twig_escape_filter($this->env, (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["data"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["order"] ?? null) : null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["service"] ?? null) : null), "html", null, true);
            echo " <br>
      <strong> ";
            // line 31
            echo twig_escape_filter($this->env, (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["lang"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["neworder.success.username"] ?? null) : null), "html", null, true);
            echo ": </strong> ";
            echo twig_escape_filter($this->env, (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["data"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["order"] ?? null) : null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["link"] ?? null) : null), "html", null, true);
            echo " <br>
      <strong> ";
            // line 32
            echo twig_escape_filter($this->env, (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["lang"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["neworder.success.quantity"] ?? null) : null), "html", null, true);
            echo ": </strong> ";
            echo twig_escape_filter($this->env, (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["data"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["order"] ?? null) : null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["min"] ?? null) : null), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = ($context["data"] ?? null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["order"] ?? null) : null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["max"] ?? null) : null), "html", null, true);
            echo " <br>
      <strong> ";
            // line 33
            echo twig_escape_filter($this->env, (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["lang"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["neworder.success.posts"] ?? null) : null), "html", null, true);
            echo ": </strong> ";
            echo twig_escape_filter($this->env, (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = ($context["data"] ?? null)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["order"] ?? null) : null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["posts"] ?? null) : null), "html", null, true);
            echo " <br>
      <strong> ";
            // line 34
            echo twig_escape_filter($this->env, (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = ($context["lang"] ?? null)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["neworder.success.delay"] ?? null) : null), "html", null, true);
            echo ": </strong>";
            echo twig_escape_filter($this->env, (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = ($context["data"] ?? null)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["order"] ?? null) : null)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["delay"] ?? null) : null), "html", null, true);
            echo " <br>
    </div>
    ";
        }
        // line 37
        echo "  </div>
  <div class=\"col-lg-12\">
    <section class=\"dash-home-status\">
      <div class=\"row\">
        <div class=\"col-lg-3 col-md-6 col-6 mb-4 mb-lg-0\">
          <div class=\"dhs-item dhs-item--1\">
            <div class=\"row\">
              <div class=\"col-auto align-self-center d-none d-md-block\">
                <div class=\"dhs-item--icon\">
                  <img src=\"../img/badge1.png\" class=\"dhs-item--icon-img\" alt=\"\">
                </div>
              </div>
              <div class=\"col align-self-center\">
                <div class=\"dhs-item--title\">
                  Güncel Bakiyeniz
                </div>
                <div class=\"dhs-item--text\">
                  ";
        // line 54
        echo twig_escape_filter($this->env, (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = ($context["user"] ?? null)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["balance"] ?? null) : null), "html", null, true);
        echo "
                </div>
              </div>
            </div>
            <!-- row end -->
          </div>
          <!-- dhs-item end -->
        </div>
        <!-- dhs-item col end -->
        <div class=\"col-lg-3 col-md-6 col-6 mb-4 mb-lg-0\">
          <div class=\"dhs-item dhs-item--2\">
            <div class=\"row\">
              <div class=\"col-auto align-self-center d-none d-md-block\">
                <div class=\"dhs-item--icon\">
                  <img src=\"../img/badge2.png\" class=\"dhs-item--icon-img\" alt=\"\">
                </div>
              </div>
              <div class=\"col align-self-center\">
                <div class=\"dhs-item--title\">
                  Harcanan Tutar
                </div>
                <div class=\"dhs-item--text\">
                  ";
        // line 76
        echo twig_escape_filter($this->env, (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = ($context["user"] ?? null)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["spent"] ?? null) : null), "html", null, true);
        echo "
                </div>
              </div>
            </div>
            <!-- row end -->
          </div>
          <!-- dhs-item end -->
        </div>
        <!-- dhs-item col end -->
        <div class=\"col-lg-3 col-md-6 col-6 mb-4 mb-lg-0\">
          <div class=\"dhs-item dhs-item--3\">
            <div class=\"row\">
              <div class=\"col-auto align-self-center d-none d-md-block\">
                <div class=\"dhs-item--icon\">
                  <img src=\"../img/badge3.png\" class=\"dhs-item--icon-img\" alt=\"\">
                </div>
              </div>
              <div class=\"col align-self-center\">
                <div class=\"dhs-item--title\">
                  Bakiye Durumu
                </div>
                ";
        // line 97
        if ((1 === twig_compare((($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = ($context["user"] ?? null)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["balance"] ?? null) : null), 10))) {
            // line 98
            echo "                <div class=\"dhs-item--text\">
                  Normal
                </div>
                ";
        } else {
            // line 102
            echo "                <div class=\"dhs-item--text\">
                  Düşük
                </div>
                ";
        }
        // line 106
        echo "              </div>
            </div>
            <!-- row end -->
          </div>
          <!-- dhs-item end -->
        </div>
        <!-- dhs-item col end -->
        <div class=\"col-lg-3 col-md-6 col-6 mb-4 mb-lg-0\">
          <div class=\"dhs-item dhs-item--4\">
            <div class=\"row\">
              <div class=\"col-auto align-self-center d-none d-md-block\">
                <div class=\"dhs-item--icon\">
                  <img src=\"../img/badge4.png\" class=\"dhs-item--icon-img\" alt=\"\">
                </div>
              </div>
              <div class=\"col align-self-center\">
                <div class=\"dhs-item--title\">
                  Üyelik Statüsü
                </div>
                <div class=\"dhs-item--text\">
                  <span id=\"accStats\"></span>
                  <p id=\"spentBalance\" style=\"display:none\">";
        // line 127
        echo twig_escape_filter($this->env, (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = ($context["user"] ?? null)) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["spent"] ?? null) : null), "html", null, true);
        echo "</p>
                  <script>
                    const cBalance = document.getElementById(\"spentBalance\").innerText;
                    var text;
                    if (500 < cBalance && cBalance < 999) { text = \"Gümüş\"; }    
                    else if (1000 < cBalance && cBalance < 99999) { text = \"Altın\"; }    
                    else {
                      text = \"Bronz\";
                    }
                    document.getElementById(\"accStats\").innerText = text;
                  </script> 
                </div>
              </div>
            </div>
            <!-- row end -->
          </div>
          <!-- dhs-item end -->
        </div>
        <!-- dhs-item col end -->
      </div>
      <!-- dhs items row end -->
    </section>
  </div>
  <div class=\"col-lg-7\">
    <div class=\"card mb-4\">
      <div class=\"card-body text-light p-4\">
        <form method=\"post\" action=\"/\">
          <div class=\"form-group\">
            <label for=\"orderform-category\" class=\"form-label\">";
        // line 155
        echo twig_escape_filter($this->env, (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = ($context["lang"] ?? null)) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["neworder.category"] ?? null) : null), "html", null, true);
        echo "</label>
            <select class=\"form-control\" id=\"neworder_category\" name=\"categories\">
              ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 158
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = $context["category"]) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["category_id"] ?? null) : null), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = $context["category"]) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["category_name"] ?? null) : null), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "            </select>
          </div>
          <div class=\"form-group\">
            <label for=\"orderform-service\" class=\"form-label\">";
        // line 163
        echo twig_escape_filter($this->env, (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = ($context["lang"] ?? null)) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["neworder.service"] ?? null) : null), "html", null, true);
        echo "</label>
            <select class=\"form-control\" id=\"neworder_services\" name=\"services\">

            </select>
          </div>

          <div id=\"neworder_fields\"></div>

          <div class=\"form-group\" id=\"charge_div\">
            <label for=\"charge\" class=\"form-label\">";
        // line 172
        echo twig_escape_filter($this->env, (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = ($context["lang"] ?? null)) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["neworder.charge"] ?? null) : null), "html", null, true);
        echo "</label>
            <input type=\"text\" class=\"form-control\" id=\"charge\" readonly>
          </div>

          ";
        // line 176
        if (($context["neworderTerms"] ?? null)) {
            // line 177
            echo "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"neworder_check\">";
            // line 179
            echo twig_escape_filter($this->env, (($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = ($context["lang"] ?? null)) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["neworder.recheck"] ?? null) : null), "html", null, true);
            echo "
            </label>
          </div>
          ";
        }
        // line 183
        echo "
          <button type=\"submit\" class=\"btn btn-primary\">";
        // line 184
        echo twig_escape_filter($this->env, (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = ($context["lang"] ?? null)) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da["neworder.button"] ?? null) : null), "html", null, true);
        echo "</button>

        </form>
      </div>
    </div>
  </div>
  <div class=\"col-lg-5 col-12 mb-5 mb-lg-0\">
    <div class=\"d-card dc-dblue\">
      <ul class=\"nav nav-pills fastside\">
        <li class=\"nav-item col-6 mb-2\" style=\"padding:0\">
          <a class=\"nav-link active\" data-toggle=\"pill\" href=\"#timeline\" role=\"tab\" aria-controls=\"pills-timeline\" aria-selected=\"true\"><i class=\"fas fa-random mr-1\"></i>Zaman Tüneli</a>
        </li>
        <li class=\"nav-item col-6 mb-2\" style=\"padding:0\">
          <a class=\"nav-link second\" data-toggle=\"pill\" href=\"#fastdesk\" role=\"tab\" aria-controls=\"pills-fastdesk\" aria-selected=\"false\"><i class=\"fas fa-headset mr-1\"></i>Hızlı Destek</a>
        </li>
      </ul>
      <div class=\"d-card-body\" id=\"dc2-body\" style=\"overflow-y: auto;\"> 
        <div class=\"tab-content mt-3\">
          <div class=\"tab-pane fade active show\" id=\"timeline\" role=\"tabpanel\" aria-labelledby=\"timeline\">
            <ul class=\"notification\">
              ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["newsList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 205
            echo "              <li>
                <div class=\"icons\">
                  <img width=\"30\" class=\"mr-1\" src=\"/img/icons/";
            // line 207
            echo twig_escape_filter($this->env, (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = $context["new"]) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["news_icon"] ?? null) : null), "html", null, true);
            echo ".png\">
                </div>
                <div class=\"text\">
                  <div class=\"title\"><a href=\"\">";
            // line 210
            echo twig_escape_filter($this->env, (($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = $context["new"]) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["news_title"] ?? null) : null), "html", null, true);
            echo "</a></div>
                  <div class=\"text\"> ";
            // line 211
            echo twig_escape_filter($this->env, (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = $context["new"]) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574["news_content"] ?? null) : null), "html", null, true);
            echo "</div>
                  <div class=\"date mt-1\"><i class=\"fas fa-clock\"></i> ";
            // line 212
            echo twig_escape_filter($this->env, (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = $context["new"]) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c["news_date"] ?? null) : null), "html", null, true);
            echo " </div>
                </div>
              </li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo " 
            </ul>
          </div>
          <div class=\"tab-pane fade\" id=\"fastdesk\" role=\"tabpanel\" aria-labelledby=\"fastdesk-tab\">
            <form method=\"post\" action=\"tickets\" id=\"ticketsend\">
              <div class=\"form-group\">
                <label class=\"ticket-label\">";
        // line 221
        echo twig_escape_filter($this->env, (($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = ($context["lang"] ?? null)) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["tickets.subject"] ?? null) : null), "html", null, true);
        echo "</label>
                <div class=\"select\">
                  <select class=\"form-control\" id=\"Konu\" name=\"subject\" onchange=\"handleOrderType(this)\">
                    <option value=\"Sipariş\" selected=\"\">Sipariş</option>
                    <option value=\"Ödeme\">Ödeme</option>
                    <option value=\"Diğer\">Diğer</option>
                  </select>
                </div>
              </div>
              <div class=\"form-group\" id=\"siparis-grubu\">
                <label class=\"mt-3\">Sipariş Numaranız</label>
                <input type=\"text\" class=\"form-control\" id=\"orderid\" placeholder=\"Birden çok siparişiniz varsa virgül ile ayırın (Örn: 100,1001,3246)\" />
                <label class=\"mt-3\">Probleminizi Belirtin</label>
                <div class=\"select\">
                  <select class=\"form-control\" id=\"istek\">
                    <option value=\"Gönderilen Miktar Düştü\">Gönderilen Miktar Düştü</option>
                    <option value=\"Siparişim Yükleniyorda Kaldı\">Siparişim Yükleniyorda Kaldı</option>
                    <option value=\"Siparişim Tamamlanmadı\">Siparişim Tamamlanmadı</option>
                    <option value=\"Siparişim Neden İptal Edildi?\">Siparişim Neden İptal Edildi?</option>
                    <option value=\"Diğer\">Diğer</option>
                  </select>
                </div>
              </div>
              <div class=\"form-group\" id=\"odeme-grubu\" style=\"display: none;\">
                <label class=\"mt-3\">Probleminizi Belirtin</label>
                <div class=\"select\">
                  <select class=\"form-control\" id=\"odeme\">
                    <option value=\"Nasıl Bakiye Yüklerim?\" selected=\"\">Nasıl Bakiye Yüklerim?</option>
                    <option value=\"Bakiyem Onaylanmadı\">Bakiyem Onaylanmadı</option>
                    <option value=\"Bakiyem Yükleyemiyorum\">Bakiyem Yükleyemiyorum</option>
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"mt-3\">";
        // line 255
        echo twig_escape_filter($this->env, (($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = ($context["lang"] ?? null)) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["tickets.message"] ?? null) : null), "html", null, true);
        echo "<span id=\"diger-grubu\"></span></label>
                <textarea name=\"message\" class=\"form-control mb-3\" rows=\"4\" cols=\"50\" id=\"mesaj\" placeholder=\"Size yardımcı olabilmemiz için açıklamanızı olabildiğince detaylandırın.\"></textarea>
                <input type=\"hidden\" id=\"tmessage\" name=\"message\">
              </div>
              <div class=\"form-group\">
                <div id=\"alertArea\" class=\"flash flash-hata mb-3\" role=\"alert\" style=\"\"></div>
                <div id=\"successArea\" class=\"flash flash-basarili mb-3\" role=\"alert\" style=\"\">Desteğiniz bize ulaştı! En kısa sürede bilgilendirileceksiniz.</div>
                <button id=\"send-ticket\" type=\"button\" class=\"btn btn-secondary btn-lg btn-block mt-4\"> ";
        // line 262
        echo twig_escape_filter($this->env, (($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = ($context["lang"] ?? null)) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["tickets.button"] ?? null) : null), "html", null, true);
        echo "</button>
              </div>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

";
        // line 273
        $this->loadTemplate("main/spacelab/footer.twig", "main/spacelab/neworder.twig", 273)->display($context);
        // line 274
        echo "


<script type=\"text/javascript\">
    \$(document).ready(function () {
        setInterval(function () {
            const leftWell = document.getElementById(\"left-well\");
            const rightWell = document.getElementById(\"right-well\");
        if(leftWell && rightWell)
              rightWell.style.height = leftWell.clientHeight - 68 + \"px\";
        }, 100);
    });

    const alertArea = document.getElementById(\"alertArea\");
    const successArea = document.getElementById(\"successArea\");
  if(successArea){
      successArea.style.display = \"none\";
      successArea.style.marginTop = \"8px\";
    }
    if(alertArea){
      alertArea.style.display = \"none\";
      alertArea.style.marginTop = \"8px\";
  }
    function handleOrderType(selectObject) {
        var element = document.getElementById(\"siparis-grubu\");
        var element2 = document.getElementById(\"odeme-grubu\");
        var optional = document.getElementById(\"diger-grubu\");
        if (selectObject.value == \"Sipariş\" || selectObject.value == \"VIP - Sipariş\") {
            element.style.display = \"block\";
            element2.style.display = \"none\";
            optional.style.display = \"inline\";
        } else if (selectObject.value == \"Ödeme\" || selectObject.value == \"VIP - Ödeme\") {
            element.style.display = \"none\";
            element2.style.display = \"block\";
            optional.style.display = \"none\";
        } else if (selectObject.value == \"Diğer\" || selectObject.value == \"VIP - Diğer\") {
            element.style.display = \"none\";
            element2.style.display = \"none\";
            optional.style.display = \"none\";
        }
    }

    function validateOrderId() {
        const status = document.getElementById(\"orderid\").value.trim() !== \"\";
        if (status === false) {
            document.getElementById(\"orderid\").className += \" is-invalid\";
            alertChild = document.createElement(\"span\");
            alertChild.style.display = \"block\";
            alertChild.innerHTML = \"Sipariş numarasını girmek zorunludur!\";
            alertArea.appendChild(alertChild);
            alertArea.style.display = \"block\";
        }
        return status;
    }

    function validateMessage() {
        var status = document.getElementById(\"mesaj\").value.trim() !== \"\";
      const statuss = document.getElementById(\"mesaj\").value.length;
        if (status === false) {
            document.getElementById(\"mesaj\").className += \" is-invalid\";
            alertChild = document.createElement(\"span\");
            alertChild.style.display = \"block\";
            alertChild.innerHTML = \"Mesajı girmek zorunludur!\";
            alertArea.appendChild(alertChild);
            alertArea.style.display = \"block\";
        }
      else if (statuss < 10) {
        status = false;
            document.getElementById(\"mesaj\").className += \" is-invalid\";
            alertChild = document.createElement(\"span\");
            alertChild.style.display = \"block\";
            alertChild.innerHTML = \"Mesajınızı en az 10 karakter ile belirtmelisiniz!\";
            alertArea.appendChild(alertChild);
            alertArea.style.display = \"block\";
        }
        return status;
    }

    \$(\"#send-ticket\").click(function (event) {
        event.preventDefault();
        alertArea.innerHTML = \"\";
        alertArea.style.display = \"none\";
        successArea.style.display = \"none\";

        document.getElementById(\"orderid\").className = document.getElementById(\"orderid\").className.replace(\"is-invalid\", \"\");

        document.getElementById(\"mesaj\").className = document.getElementById(\"mesaj\").className.replace(\"is-invalid\", \"\");

        var subject = document.getElementById(\"Konu\").value;
        var message = \"\";
        if (subject == \"Sipariş\" || subject == \"VIP - Sipariş\") {
            var status = true;
            if (!validateOrderId()) status = false;
            if (!validateMessage()) status = false;
            if (!status) return;

            message = \"Sipariş Numarası: \" + document.getElementById(\"orderid\").value + \"\\n\" + \"İstek: \" + document.getElementById(\"istek\").value + \"\\n Detaylı Açıklama: \" + document.getElementById(\"mesaj\").value;
        } else if (subject == \"Ödeme\" || subject == \"VIP - Ödeme\") {
            if (!validateMessage()) return;

            message = \"Ödeme Problemi: \" + document.getElementById(\"odeme\").value + \"\\n Detaylı Açıklama: \" + document.getElementById(\"mesaj\").value;
        } else {
            if (!validateMessage()) return;

            message = document.getElementById(\"mesaj\").value;
        }
    document.getElementById(\"tmessage\").value = message;
        \$(\"#ticketsend\").submit();
        return false;
    });
</script>

";
    }

    public function getTemplateName()
    {
        return "main/spacelab/neworder.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  485 => 274,  483 => 273,  469 => 262,  459 => 255,  422 => 221,  414 => 215,  404 => 212,  400 => 211,  396 => 210,  390 => 207,  386 => 205,  382 => 204,  359 => 184,  356 => 183,  349 => 179,  345 => 177,  343 => 176,  336 => 172,  324 => 163,  319 => 160,  308 => 158,  304 => 157,  299 => 155,  268 => 127,  245 => 106,  239 => 102,  233 => 98,  231 => 97,  207 => 76,  182 => 54,  163 => 37,  155 => 34,  149 => 33,  141 => 32,  135 => 31,  129 => 30,  123 => 29,  120 => 28,  117 => 27,  109 => 24,  103 => 23,  97 => 22,  91 => 21,  85 => 20,  79 => 19,  76 => 18,  74 => 17,  71 => 16,  65 => 13,  62 => 12,  60 => 11,  57 => 10,  49 => 7,  45 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/spacelab/neworder.twig", "/var/www/vhosts/glycondemo.com/httpdocs/app/Views/main/spacelab/neworder.twig");
    }
}
