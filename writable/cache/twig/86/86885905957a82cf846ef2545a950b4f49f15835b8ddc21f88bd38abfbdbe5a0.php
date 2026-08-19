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

/* main/spacelab/login.twig */
class __TwigTemplate_2deb733c65241d78991f231a43b56caebc507c8eb671d837473f7c2965021343 extends Template
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
        $this->loadTemplate("main/spacelab/header.twig", "main/spacelab/login.twig", 1)->display($context);
        // line 2
        echo "
  <section class=\"homepage-section mb-5\" style=\"background: url('https://i.hizliresim.com/i7a7vgg.jpg');\">
    <div class=\"container homepage-section-content\">
      <div class=\"row d-flex justify-content-center align-items-center\">
        <div class=\"col-lg-6 d-none d-lg-block\">
          <small>Kaliteli Hizmetin Adresi ";
        // line 7
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["site"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["site_name"] ?? null) : null), "html", null, true);
        echo "!</small>
          <h3>Sosyal medya hesaplarınızı ";
        // line 8
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["site"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["site_name"] ?? null) : null), "html", null, true);
        echo " sayesinde yükseltin!</h3>
          <ul class=\"list-group list-group-horizontal mb-3\">
            <li class=\"list-group-item\"><i class=\"fas fa-home\"></i> Kaliteli Hizmet</li>
            <li class=\"list-group-item\"><i class=\"fas fa-home\"></i> Hızlı Destek</li>
            <li class=\"list-group-item\"><i class=\"fas fa-home\"></i> Gerçek Takipçiler</li>
          </ul>
          <p>";
        // line 14
        echo twig_escape_filter($this->env, ($context["contentText"] ?? null), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col-lg-5 offset-md-1\">
          <div class=\"login-form\">
            <div class=\"login-form-title\">Giriş Yap</div>
            ";
        // line 19
        if (($context["errorText"] ?? null)) {
            // line 20
            echo "            <div class=\"alert alert-primary text-light mb-4\" role=\"alert\">
              ";
            // line 21
            echo twig_escape_filter($this->env, ($context["errorText"] ?? null), "html", null, true);
            echo "
            </div>
            ";
        }
        // line 24
        echo "            ";
        if (($context["successText"] ?? null)) {
            // line 25
            echo "            <div class=\"alert alert-primary text-light mb-4\" role=\"alert\">
              ";
            // line 26
            echo twig_escape_filter($this->env, ($context["successText"] ?? null), "html", null, true);
            echo "
            </div>
            ";
        }
        // line 29
        echo "            <div class=\"alert alert-primary text-light mb-4\" role=\"alert\">
              Parolanızı üçüncü kişiler ile paylaşmayınız.
            </div>
            <form method=\"post\" action=\"\">
              <div class=\"mb-4 fc-home\">
                <label for=\"loginUsername\"><span class=\"label-text\">";
        // line 34
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["lang"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["signin.username"] ?? null) : null), "html", null, true);
        echo "</span></label>
                <input type=\"text\" class=\"form-control\" name=\"username\">
              </div>
              <div class=\"mb-3 fc-home\">
                <label for=\"loginPass\"><span class=\"label-text\">";
        // line 38
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["lang"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["signin.password"] ?? null) : null), "html", null, true);
        echo "</span></label>
                <input type=\"password\" class=\"form-control\" name=\"password\">
                ";
        // line 40
        if (($context["resetPage"] ?? null)) {
            // line 41
            echo "                <a href=\"resetpassword\">";
            echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["lang"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["signin.password.lost"] ?? null) : null), "html", null, true);
            echo "</a>
                ";
        }
        // line 43
        echo "              </div>
              <div class=\"row mb-3\">
                <div class=\"col-md-6\">
                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"remember\" value=\"1\">
                    <label class=\"form-check-label\" for=\"exampleCheck1\">";
        // line 48
        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["lang"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["signin.remember"] ?? null) : null), "html", null, true);
        echo "</label>
                  </div>
                </div>
                <div class=\"col-md-6\">
                  
                </div>
              </div>
              ";
        // line 55
        if (($context["captcha"] ?? null)) {
            // line 56
            echo "              <div class=\"mb-3\">
                <div class=\"form-group\">
                  <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 58
            echo twig_escape_filter($this->env, ($context["captchaKey"] ?? null), "html", null, true);
            echo "\"></div>
                </div>
              </div>    
              ";
        }
        // line 62
        echo "              <button type=\"submit\" class=\"login-form-button\">";
        echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["lang"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["signin.button"] ?? null) : null), "html", null, true);
        echo "</button>
            </form>
          </div>
        </div>
        <div class=\"col-lg-12 mt-3\">
          <div class=\"row g-4 py-5 row-cols-1 row-cols-lg-3\">
            <div class=\"col d-flex align-items-start\">
              <div class=\"homepage-section-card-icon flex-shrink-0 me-3\">
                <i class=\"fas fa-home\"></i>
              </div>
              <div class=\"homepage-section-card\">
                <h2>800+ Servis</h2>
                <p>Her gün güncellenen ve size özel hazırladığımız kategorilerimizde yüzlerce servis bulunmakta. Sizin için en uygununu seçip işlem yapabilirsiniz.</p>
              </div>
            </div>
            <div class=\"col d-flex align-items-start\">
              <div class=\"homepage-section-card-icon flex-shrink-0 me-3\">
                <i class=\"fas fa-home\"></i>
              </div>
              <div class=\"homepage-section-card\">
                <h2>Kullanıcı Dostu Arayüz</h2>
                <p>Tüm panelimiz hızlı işlem yapmanız için tasarlandı. Size en uygun servisi en hızlı şekilde bulabilir ve işlemlerinizi anında gerçekleştirebilirsiniz.</p>
              </div>
            </div>
            <div class=\"col d-flex align-items-start\">
              <div class=\"homepage-section-card-icon flex-shrink-0 me-3\">
                <i class=\"fas fa-home\"></i>
              </div>
              <div class=\"homepage-section-card\">
                <h2>Tüm Cihazlarla Uyumlu</h2>
                <p>İster masaüstü ister mobil cihazınızdan işlemlerinizi kontrol edebilir ve özel olarak hazırladığımız arayüzümüzle panelimizi kolay bir şekilde kullanabilirsiniz.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"clearfix\"></div>
  </section>
  <section class=\"homepage-content\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"p-5 mb-4 custom-jumbotron rounded-3\">
            <div class=\"container-fluid py-5\">
              <div class=\"row\">
                <div class=\"col-md-7\">
                  <h1 class=\"display-5 fw-bold\">Otomatik işlemler & Süreli siparişler</h1>
                  <p class=\"col-md-12 fs-5\">Otomatik işlemler ve süreli siparişler işlemlerinizi planlamak, az işlem yaparak çok etki elde etmeniz için oluşturulmuştur. Otomatik işlemler ve süreli siparişler sayesinde işlemlerinizi panele girmeden otomatik olarak çözebilirsiniz.</p>
                  <button class=\"btn btn-primary btn-lg\" type=\"button\">Example button</button>
                </div>
                <div class=\"col-md-5\">
                  <img class=\"img-fluid\" src=\"https://cdn.sosyalatom.com/images/SosyalAtom_Likes.png\"></img>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-md-4\">
          <div class=\"feature\">
            <div class=\"feature-icon bg-primary bg-gradient\">
              <i class=\"fas fa-home\"></i>
            </div>
            <h2>Kontrolünüz Altında</h2>
            <p>Sosyal Bayim'de her şey kontrolünüz altında. İstediğiniz linke gönderim sağlayabilirsiniz.</p>
          </div>
        </div>
        <div class=\"col-md-4\">
          <div class=\"feature\">
            <div class=\"feature-icon bg-primary bg-gradient\">
              <i class=\"fas fa-home\"></i>
            </div>
            <h2>Lider Fiyatlar</h2>
            <p>Sektörün önde gelen paneli Sosyal Bayim'de sektörde bulacağınız en iyi fiyatlar mevcuttur.</p>
          </div>
        </div>
        <div class=\"col-md-4\">
          <div class=\"feature\">
            <div class=\"feature-icon bg-primary bg-gradient\">
              <i class=\"fas fa-home\"></i>
            </div>
            <h2>7/24 Destek</h2>
            <p>Destek ekibimiz size yardımcı olabilmek için 7/24 çalışıyor ve sorularınızı cevaplıyor.</p>
          </div>
        </div>
        <div class=\"col-md-12\">
          <div class=\"p-5 mb-4 custom-jumbotron rounded-3\">
            <div class=\"container-fluid py-5\">
              <div class=\"row\">
                <div class=\"col-md-5\">
                  <img class=\"img-fluid\" src=\"https://cdn.sosyalatom.com/images/SosyalAtom_Likes.png\"></img>
                </div>
                <div class=\"col-md-7\">
                  <h1 class=\"display-5 fw-bold\">Nabza göre şerbet! İstatistikleri kendiniz belirleyin</h1>
                  <p class=\"col-md-12 fs-5\">İstediğiniz kadar erişime, etkileşime sahip olabilirsiniz. İçeriğinize göre etkileşim sayısını seçebilir bu sayede organik olarak büyüyebilirsiniz. Unutmayın her şey zehirdir, zehri belirleyen dozdur.</p>
                  <button class=\"btn btn-primary btn-lg\" type=\"button\">Example button</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

";
        // line 167
        $this->loadTemplate("main/spacelab/footer.twig", "main/spacelab/login.twig", 167)->display($context);
    }

    public function getTemplateName()
    {
        return "main/spacelab/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 167,  147 => 62,  140 => 58,  136 => 56,  134 => 55,  124 => 48,  117 => 43,  111 => 41,  109 => 40,  104 => 38,  97 => 34,  90 => 29,  84 => 26,  81 => 25,  78 => 24,  72 => 21,  69 => 20,  67 => 19,  59 => 14,  50 => 8,  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/spacelab/login.twig", "/var/www/vhosts/glycondemo.com/httpdocs/app/Views/main/spacelab/login.twig");
    }
}
