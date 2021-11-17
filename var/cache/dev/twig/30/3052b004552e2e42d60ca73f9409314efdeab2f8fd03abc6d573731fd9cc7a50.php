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

/* home/index.html.twig */
class __TwigTemplate_a6a7d6ed7a1eebd36d27e7763bb450972e92fc272a5d4dff7c209801261026f4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accuiel";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<main style=\"margin-top:80px;\">
 
<img  src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slide/Rare-Beauty-by-Selena-Gomes.jpg"), "html", null, true);
        echo "\" alt=\"image\" style=\"height: 500px;width: 100%;\">
         
       
<div class=\"slider-info-wrap clearfix pdlr0\">
  <div class=\"slider-info-content\">
     
      <div class=\"slider-info-item\">
        <div class=\"info-item-media\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slide/Honest-Beauty-by-Jessica-Alba.jpg"), "html", null, true);
        echo "\" data-at2x=\"pic/slider-info-3@2x.jpg\"   alt=\"\">
          <div class=\"info-item-text\">
            <div class=\"info-price font-4\"><span></span></div>
            <div class=\"info-temp font-4\"><span>Honest-Beauty</span> by-Jessica-Alba</div>
            <p class=\"info-text\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
          </div>
        </div>
        <div class=\"info-item-content\">
          <div class=\"main-title\">
            <h3 class=\"title\"><span class=\"font-4\"></span>Honest-Beauty</h3>
            <div class=\"price\"><span>Jessica-Alba</span></div>
            <span class=\"button\">Jessica-Alba</span>
          </div>
        </div>
      </div>

      <div class=\"slider-info-item\">
        <div class=\"info-item-media\"><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slide/Fenty-Beauty-by-Fenty-1536x846.png"), "html", null, true);
        echo "\" data-at2x=\"pic/slider-info-2@2x.jpg\" alt=\"\">
          <div class=\"info-item-text\">
            <div class=\"info-price font-4\"><span></span></div>
            <div class=\"info-temp font-4\"><span>Fenty-Beauty</span> Fenty</div>
            <p class=\"info-text\">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>
          </div>
        </div>
        <div class=\"info-item-content\">
          <div class=\"main-title\">
            <h3 class=\"title\"><span class=\"font-4\"></span>Fenty-Beauty</h3>
            <div class=\"price\"><span>Fenty</span></div>
            <span class=\"button\">Fenty</span>
          </div>
        </div>
      </div>
      <div class=\"slider-info-item\">
        <div class=\"info-item-media\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slide/Florence-By-Mills-by-Millie-Bobby-Brown-1536x1025.jpg"), "html", null, true);
        echo "\" data-at2x=\"pic/slider-info-2@2x.jpg\" alt=\"\">
          <div class=\"info-item-text\">
            <div class=\"info-price font-4\"><span></span></div>
            <div class=\"info-temp font-4\"><span>Florence</span> Millie</div>
            <p class=\"info-text\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
          </div>
        </div>
        <div class=\"info-item-content\">
          <div class=\"main-title\">
            <h3 class=\"title\"><span class=\"font-4\"></span> Florence</h3>
            <div class=\"price\"><span>Millie</span></div>
            <span class=\"button\">Millie</span>
          </div>
        </div>
      </div>
      <div class=\"slider-info-item\">
        <div class=\"info-item-media\"><img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slide/Lauren-Conrad-Beauty-by-Lauren-Conrad-1536x1024.jpg"), "html", null, true);
        echo "\" data-at2x=\"pic/slider-info-2@2x.jpg\" alt=\"\">
          <div class=\"info-item-text\">
            <div class=\"info-price font-4\"><span></span></div>
            <div class=\"info-temp font-4\"><span>Conrad-Beauty</span> Lauren-Conrad</div>
            <p class=\"info-text\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
          </div>
        </div>
        <div class=\"info-item-content\">
          <div class=\"main-title\">
            <h3 class=\"title\"><span class=\"font-4\"></span> Conrad-Beauty</h3>
            <div class=\"price\"><span>Lauren-Conrad</span></div>
            <span class=\"button\">Lauren-Conrad</span>
          </div>
        </div>
      </div>
    </div>
      <style> 
             .slider-info-wrap{position:relative;z-index:20;width:100%;}
.slider-info-wrap .slider-info-content .slider-info-item{float:left;width:25%;height:60px;position:relative;z-index:1;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-media{position:absolute;z-index:1;bottom:0;height:60px;width:100%;overflow:hidden;-webkit-transition:all 0.75s;-moz-transition:all 0.75s;-o-transition:all 0.75s;transition:all 0.75s;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-media:before{content:'';position:absolute;z-index:2;width:100%;height:100%;top:0;left:0;background:rgba(235, 174, 114, 0.5);}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-media img{position:absolute;z-index:1;bottom:0;top:0;width:100%;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-media .info-item-text{position:absolute;z-index:2;top:0;width:100%;padding:10px 20px;line-height:1;color:#ffffff;opacity:0;-webkit-transition:all 0.5s;-moz-transition:all 0.5s;-o-transition:all 0.5s;transition:all 0.5s;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-media .info-item-text .info-price, .slider-info-wrap .slider-info-content .slider-info-item .info-item-media .info-item-text .info-temp{font-size:22px;display:inline-block;width:49%;-webkit-transform:translateY(40%);-moz-transform:translateY(40%);-ms-transform:translateY(40%);-o-transform:translateY(40%);transform:translateY(40%);-webkit-transition:all 0.35s;-moz-transition:all 0.35s;-o-transition:all 0.35s;transition:all 0.35s;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-media .info-item-text .info-price span, .slider-info-wrap .slider-info-content .slider-info-item .info-item-media .info-item-text .info-temp span{color:#ffc107;font-size:12px;text-transform:uppercase;display:block;margin-bottom:5px;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-media .info-item-text .info-temp{text-align:right;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-media .info-item-text p.info-text{margin-top:30px;line-height:1.55;-webkit-transform:translateY(60%);-moz-transform:translateY(60%);-ms-transform:translateY(60%);-o-transform:translateY(60%);transform:translateY(60%);-webkit-transition:all 0.35s;-moz-transition:all 0.35s;-o-transition:all 0.35s;transition:all 0.35s;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-content{position:absolute;z-index:1;bottom:0;width:100%;height:100%;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-content .main-title{-webkit-transition:all 0.3s;-moz-transition:all 0.3s;-o-transition:all 0.3s;transition:all 0.3s;height:100%;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-content .main-title .title{font-size:18px;color:#ffffff;text-transform:uppercase;margin-top:13px;display:inline-block;padding-left:20px;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-content .main-title .title span{font-size:12px;display:block;margin-bottom:0px;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-content .main-title .price{font-size:13px;color:#ffffff;line-height:58px;display:block;float:right;margin-right:20px;-webkit-transition:0.5s;-moz-transition:0.5s;-o-transition:0.5s;transition:0.5s;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-content .main-title .price span{color:#FFFF00;font-size:18px;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-content .main-title .button{position:absolute;z-index:1;top:50%;right:15px;font-size:13px;color:#FFFF00;padding:1px 10px;margin-right:10px;-webkit-transition:0.5s;-moz-transition:0.5s;-o-transition:0.5s;transition:0.5s;text-transform:uppercase;font-weight:700;-webkit-transform:translateY(20%);-moz-transform:translateY(20%);-ms-transform:translateY(20%);-o-transform:translateY(20%);transform:translateY(20%);opacity:0;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-content .main-title .button:hover{color:#FFFF00;}
.slider-info-wrap .slider-info-content .slider-info-item:not(.mobile-on):hover .info-item-media, .slider-info-wrap .slider-info-content .slider-info-item.active .info-item-media{padding-top:60%;}
.slider-info-wrap .slider-info-content .slider-info-item:not(.mobile-on):hover .info-item-media .info-item-text, .slider-info-wrap .slider-info-content .slider-info-item.active .info-item-media .info-item-text{opacity:1;-webkit-transition-delay:0.25s;-moz-transition-delay:0.25s;-o-transition-delay:0.25s;transition-delay:0.25s;}
.slider-info-wrap .slider-info-content .slider-info-item:not(.mobile-on):hover .info-item-media .info-item-text .info-price, .slider-info-wrap .slider-info-content .slider-info-item:not(.mobile-on):hover .info-item-media .info-item-text .info-temp, .slider-info-wrap .slider-info-content .slider-info-item.active .info-item-media .info-item-text .info-price, .slider-info-wrap .slider-info-content .slider-info-item.active .info-item-media .info-item-text .info-temp{-webkit-transform:translateY(0);-moz-transform:translateY(0);-ms-transform:translateY(0);-o-transform:translateY(0);transform:translateY(0);-webkit-transition-delay:0.25s;-moz-transition-delay:0.25s;-o-transition-delay:0.25s;transition-delay:0.25s;}
.slider-info-wrap .slider-info-content .slider-info-item:not(.mobile-on):hover .info-item-media .info-item-text p.info-text, .slider-info-wrap .slider-info-content .slider-info-item.active .info-item-media .info-item-text p.info-text{-webkit-transform:translateY(0);-moz-transform:translateY(0);-ms-transform:translateY(0);-o-transform:translateY(0);transform:translateY(0);-webkit-transition-delay:0.25s;-moz-transition-delay:0.25s;-o-transition-delay:0.25s;transition-delay:0.25s;}
.slider-info-wrap .slider-info-content .slider-info-item:not(.mobile-on):hover .info-item-content .main-title, .slider-info-wrap .slider-info-content .slider-info-item.active .info-item-content .main-title{-webkit-transition-delay:0.5s;-moz-transition-delay:0.5s;-o-transition-delay:0.5s;transition-delay:0.5s;-webkit-transform:translateY(-15px);-moz-transform:translateY(-15px);-ms-transform:translateY(-15px);-o-transform:translateY(-15px);transform:translateY(-15px);}
.slider-info-wrap .slider-info-content .slider-info-item:not(.mobile-on):hover .info-item-content .main-title .price, .slider-info-wrap .slider-info-content .slider-info-item.active .info-item-content .main-title .price{opacity:0;-webkit-transform:translateY(-50%);-moz-transform:translateY(-50%);-ms-transform:translateY(-50%);-o-transform:translateY(-50%);transform:translateY(-50%);}
.slider-info-wrap .slider-info-content .slider-info-item:not(.mobile-on):hover .info-item-content .main-title .button, .slider-info-wrap .slider-info-content .slider-info-item.active .info-item-content .main-title .button{opacity:1;-webkit-transform:translateY(-50%);-moz-transform:translateY(-50%);-ms-transform:translateY(-50%);-o-transform:translateY(-50%);transform:translateY(-50%);}
@media (max-width:1400px){.slider-info-wrap .slider-info-content .slider-info-item .info-item-media .info-item-text p.info-text{margin-top:0;}
}
@media(max-width:1024px){.th5{font-size:15px;line-height:25px;}
}
@media (max-width:1200px){.slider-info-wrap .slider-info-content .slider-info-item{width:50%;}
 .slider-info-wrap .slider-info-content .slider-info-item .info-item-media .info-item-text p.info-text{margin-top:30px;}
}
@media (max-width:698px){.slider-info-wrap .slider-info-content .slider-info-item{width:100%;}
 .slider-info-wrap .slider-info-content .slider-info-item .info-item-media .info-item-text p.info-text{margin-top:5px;}
}
 
      
      </style>

</main>
<section>
  <center> <h2>Découvrez Nos Professionnels</h2></center>
  <div class=\"container\">
    
       ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 125, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 126
            echo "   <div class=\"card\">
      
        <img src=\"/services/";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 128), "html", null, true);
            echo "\" alt=\"film\">
        <div class=\"con-text\">
            <h4>";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 130), "html", null, true);
            echo "</h4>
            <p>
              
                <a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("centresdebeaute", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 133)]), "html", null, true);
            echo "\" class=\"btn btn-secondary float-left\">Lire la suite </a>
                
            </p>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "  </div>  
</section>

<div class=\"container-fluid\" >
     <div class=\"row\">
        <div class=\"column col-lg-4 col-md-8 col-sm-12\" style=\"float:right;\" >
<h1 style=\"font-family: Verdana, Geneva, Tahoma, sans-serif;\" >Les questions fréquentes </h1></div>
<div class=\"column col-lg-8 col-md-10 col-sm-12\" style=\"float:left;\" >  
<section class=\"information container\">
    <div class=\"information__container\" style=\"font-size:20px;\">
        <div class=\"information__item\">
            <header class=\"information__header\">
                <i class='bx bx-plus information__icon'></i>
                <h3 class=\"information__title\">Qu'est-ce que Club Beauté ?</h3>
            </header>

            <div class=\"information__content\">
                <p class=\"information__description\">
                   -Club Beauté est l'application de prise de rendez-vous beauté qui va changer votre facon de vous organiser.L'idée,vous éviter de perdre un temps précieux en vous permettant de prendre rendez-vous dans l'un de nos centres de beauté partenaire,en quelques clics et 24h/24h!<br>
                   -Terminé l'attente au téléphone ou les déplacements,
                   CLUB BEAUTE vous offre la possibilité de réserver un rendez-vous chezun centre de beauté sans avoir à sortir de chez vous. 
                </p>
            </div>
        </div>

        <div class=\"information__item\">
            <header class=\"information__header\">
                <i class='bx bx-plus information__icon'></i>
                <h3 class=\"information__title\">Comment prendre rendez vous sur CLUB BEAUTE ?</h3>
            </header>

            <div class=\"information__content\">
                <p class=\"information__description\">
                    -Vous connaissez le nom de votre établissement de beauté :<br>
                    -Cliquez sur l'établissement,choisissez la service puis l'horaire qui vous convient.<br>
                    -Renseignez vos coordonnées personnelles.<br>
                    -

                </p>
            </div>
        </div>

        <div class=\"information__item\">
            <header class=\"information__header\">
                <i class='bx bx-plus information__icon'></i>
                <h3 class=\"information__title\">Comment puis-je déplacer un rendez-vous ?</h3>
            </header>

            <div class=\"information__content\">
                <p class=\"information__description\">
                    -Cliquez sur Mon compte en haute à droite.<br>
                    -Indiquez votre email et mot de passe CLUB BEAUTE si vous n'étes pas connecté.<br>
                    -Pour déplacer un rendez-vous, vous devez d'abord l'annuler, pour cela, cliquer sur annuler mon rdv que vous souhaitez déplacer.
                    -Cliquez ensuite sur prendre RDV et reprenez rendez-vous.
                </p>
            </div>
        </div>

        <div class=\"information__item\">
            <header class=\"information__header\">
                <i class='bx bx-plus information__icon'></i>
                <h3 class=\"information__title\">Comment faire apparaitre mon centre?</h3>
            </header>

            <div class=\"information__content\">
                <p class=\"information__description\">
                  -Il vous suffit de nous contacter par téléphone de lund au vendredi de 9h à 18h et le samedi de 10h à 7h au 25 202 207 pour nous envoyer plus d'informations sur notre offre à distination des professionnels de la beauté.
                </p>
            </div>
        </div>
    </div>
    </div>
  </div>
</div>
</section>


<style> 
.container
{
  max-width: 1300px;
  margin: 20px auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
}
.card {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 300px;
    height: 400px;
    background: #000;
    border-radius: 30px;
    overflow: hidden;
    cursor: pointer;
    transition: all 0.5s ease;
    backface-visibility: hidden;
    margin-top:10px;
}
.card:hover {
    transform: scale(0.9);
}

.card:hover .con-text p {
    margin-bottom: 0;
    opacity: 1;
    transition: all 0.5s ease;
}
.card img {
    position: absolute;
    width: 100%;
    height:100%;
    z-index: 10;
    transition: all 0.5s ease;
}
.card .con-text {
    position: absolute;
    z-index: 30;
    bottom: 0;
    color: #fff;
    padding: 20px;
    padding-bottom: 30px;
    background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.9) 100%);
}
.card .con-text p {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    font-size: 0.8rem;
    opacity: 0;
    margin-bottom: -150px;
    transition: all 0.5s ease;
}
.card .con-text p a {
    padding: 7px 17px;
    border-radius: 12px;
    background: transparent;
    border: 2px solid #fff;
    color: #fff;
    margin-top: 10px;
    margin-left: auto;
    cursor: pointer;
    transition: all 0.5s ease;
    font-family: poppins;
    font-size: 0.75rem;
    outline: none;
}
.card .con-text p button:hover {
    background: #fff;
    color: #000;
}

.img {
    position: absolute;
    width: 100%;
}
@import url(\"https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap\");
/*=============== VARIABLES CSS ===============*/
:root {
  /*========== Colors ==========*/
  --hue-color: 225;
  --first-color: hsl(var(--hue-color), 48%, 35%);
  --title-color: hsl(var(--hue-color), 48%, 22%);
  --text-color: hsl(var(--hue-color), 12%, 35%);
  --body-color: hsl(var(--hue-color), 49%, 98%);
  --container-color: #FFF;
  /*========== Font and typography ==========*/
  --body-font: 'Poppins', sans-serif;
  --normal-font-size: .938rem;
  --small-font-size: .813rem;
  --smaller-font-size: .75rem;
}

@media screen and (min-width: 968px) {
  :root {
    --normal-font-size: 1rem;
    --small-font-size: .875rem;
    --smaller-font-size: .813rem;
  }
}

/*=============== BASE ===============*/
* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}


/*=============== information ===============*/

.information__container {
  display: grid;
  row-gap: .75rem;
  
  background-color: var(--container-color);
  border-radius: 5px;
  box-shadow: 0 20px 40px rgba(51, 51, 51, 0.1);
}

.information__title {
  font-size: var(--small-font-size);
  color: var(--title-color);
  font-weight: 400;
  margin-top: 10px;
  transition: .2s;
}

.information__header {
  display: flex;
  column-gap: .5rem;
  padding: 1.25rem 1.25rem 1.25rem 1rem;
  cursor: pointer;
}

.information__description {
  padding: 0 1.25rem 1.25rem 3rem;
  font-size: var(--smaller-font-size);
}

.information__icon {
  font-size: 1.5rem;
  height: max-content;
  color: var(--title-color);
  transition: .3s;
}

.information__item {
  box-shadow: 0 2px 6px rgba(38, 38, 38, 0.1);
  background-color: var(--container-color);
  border-radius: .25rem;
  position: relative;
  transition: all .25s ease;
}

.information__item::after {
  content: '';
  background-color: var(--first-color);
  width: 5px;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  border-radius: .25rem 0 0 .25rem;
}

.information__item:nth-child(1) {
  background-color: #fff7f0;
}

.information__item:nth-child(1)::after {
  background-color: #ffc08a;
}

.information__item:nth-child(2) {
  background-color: #f0f0ff;
}

.information__item:nth-child(2)::after {
  background-color: #e7d082;
}

.information__item:nth-child(3) {
  background-color: #fff0f3;
}

.information__item:nth-child(3)::after {
  background-color: #e4a8b4;
}

.information__item:nth-child(4) {
  background-color: #f0faff;
}

.information__item:nth-child(4)::after {
  background-color: #ffea8a;
}

.information__content {
  overflow: hidden;
  height: 0;
  transition: all .25s ease;
}

/*Rotate icon and add font weight to titles*/
.information-open .information__icon {
  transform: rotate(45deg);
}

.ainformation-open .information__title {
  font-weight: 600;
}

/*=============== MEDIA QUERIES ===============*/
/* For medium devices */
@media screen and (min-width: 576px) {
  .information__container {
    width: 850px;
    padding: 2.5rem;
    justify-self: center;
    border-radius: .75rem;
  }
  .information__header {
    padding: 1.5rem;
  }
  .information__title {
    padding-right: 3.5rem;
  }
  .information__description {
    padding: 0 4rem 1.25rem 3.5rem;
  }
}

/* For large devices */
@media screen and (min-width: 968px) {
  .container {
    margin-left: auto;
    margin-right: auto;
  }
}

</style>
<script>
    const informationItems = document.querySelectorAll('.information__item')

// 1. Selecionar cada item
informationItems.forEach((item) =>{
    const informationHeader = item.querySelector('.information__header')

    // 2. Seleccionar cada click del header
    informationHeader.addEventListener('click', () =>{
        // 7. Crear la variable
        const openItem = document.querySelector('.information-open')
        
        // 5. Llamar a la funcion toggle item
        toggleItem(item)

        // 8. Validar si existe la clase
        if(openItem && openItem!== item){
            toggleItem(openItem)
        }
    })
})

// 3. Crear una funcion tipo constante
const toggleItem = (item) =>{
    // 3.1 Crear la variable
    const informationContent = item.querySelector('.information__content')

    // 6. Si existe otro elemento que contenga la clase accorion-open que remueva su clase
    if(item.classList.contains('information-open')){
        informationContent.removeAttribute('style')
        item.classList.remove('information-open')
    }else{
        // 4. Agregar el height maximo del content
        informationContent.style.height = informationContent.scrollHeight + 'px'
        item.classList.add('information-open')
    }
}
</script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 139,  243 => 133,  237 => 130,  232 => 128,  228 => 126,  224 => 125,  160 => 64,  141 => 48,  122 => 32,  102 => 15,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accuiel{% endblock %}

{% block body %}
<main style=\"margin-top:80px;\">
 
<img  src=\"{{ asset('css/slide/Rare-Beauty-by-Selena-Gomes.jpg') }}\" alt=\"image\" style=\"height: 500px;width: 100%;\">
         
       
<div class=\"slider-info-wrap clearfix pdlr0\">
  <div class=\"slider-info-content\">
     
      <div class=\"slider-info-item\">
        <div class=\"info-item-media\"><img src=\"{{ asset('css/slide/Honest-Beauty-by-Jessica-Alba.jpg') }}\" data-at2x=\"pic/slider-info-3@2x.jpg\"   alt=\"\">
          <div class=\"info-item-text\">
            <div class=\"info-price font-4\"><span></span></div>
            <div class=\"info-temp font-4\"><span>Honest-Beauty</span> by-Jessica-Alba</div>
            <p class=\"info-text\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
          </div>
        </div>
        <div class=\"info-item-content\">
          <div class=\"main-title\">
            <h3 class=\"title\"><span class=\"font-4\"></span>Honest-Beauty</h3>
            <div class=\"price\"><span>Jessica-Alba</span></div>
            <span class=\"button\">Jessica-Alba</span>
          </div>
        </div>
      </div>

      <div class=\"slider-info-item\">
        <div class=\"info-item-media\"><img src=\"{{ asset('css/slide/Fenty-Beauty-by-Fenty-1536x846.png') }}\" data-at2x=\"pic/slider-info-2@2x.jpg\" alt=\"\">
          <div class=\"info-item-text\">
            <div class=\"info-price font-4\"><span></span></div>
            <div class=\"info-temp font-4\"><span>Fenty-Beauty</span> Fenty</div>
            <p class=\"info-text\">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>
          </div>
        </div>
        <div class=\"info-item-content\">
          <div class=\"main-title\">
            <h3 class=\"title\"><span class=\"font-4\"></span>Fenty-Beauty</h3>
            <div class=\"price\"><span>Fenty</span></div>
            <span class=\"button\">Fenty</span>
          </div>
        </div>
      </div>
      <div class=\"slider-info-item\">
        <div class=\"info-item-media\"><img src=\"{{ asset('css/slide/Florence-By-Mills-by-Millie-Bobby-Brown-1536x1025.jpg') }}\" data-at2x=\"pic/slider-info-2@2x.jpg\" alt=\"\">
          <div class=\"info-item-text\">
            <div class=\"info-price font-4\"><span></span></div>
            <div class=\"info-temp font-4\"><span>Florence</span> Millie</div>
            <p class=\"info-text\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
          </div>
        </div>
        <div class=\"info-item-content\">
          <div class=\"main-title\">
            <h3 class=\"title\"><span class=\"font-4\"></span> Florence</h3>
            <div class=\"price\"><span>Millie</span></div>
            <span class=\"button\">Millie</span>
          </div>
        </div>
      </div>
      <div class=\"slider-info-item\">
        <div class=\"info-item-media\"><img src=\"{{ asset('css/slide/Lauren-Conrad-Beauty-by-Lauren-Conrad-1536x1024.jpg') }}\" data-at2x=\"pic/slider-info-2@2x.jpg\" alt=\"\">
          <div class=\"info-item-text\">
            <div class=\"info-price font-4\"><span></span></div>
            <div class=\"info-temp font-4\"><span>Conrad-Beauty</span> Lauren-Conrad</div>
            <p class=\"info-text\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
          </div>
        </div>
        <div class=\"info-item-content\">
          <div class=\"main-title\">
            <h3 class=\"title\"><span class=\"font-4\"></span> Conrad-Beauty</h3>
            <div class=\"price\"><span>Lauren-Conrad</span></div>
            <span class=\"button\">Lauren-Conrad</span>
          </div>
        </div>
      </div>
    </div>
      <style> 
             .slider-info-wrap{position:relative;z-index:20;width:100%;}
.slider-info-wrap .slider-info-content .slider-info-item{float:left;width:25%;height:60px;position:relative;z-index:1;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-media{position:absolute;z-index:1;bottom:0;height:60px;width:100%;overflow:hidden;-webkit-transition:all 0.75s;-moz-transition:all 0.75s;-o-transition:all 0.75s;transition:all 0.75s;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-media:before{content:'';position:absolute;z-index:2;width:100%;height:100%;top:0;left:0;background:rgba(235, 174, 114, 0.5);}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-media img{position:absolute;z-index:1;bottom:0;top:0;width:100%;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-media .info-item-text{position:absolute;z-index:2;top:0;width:100%;padding:10px 20px;line-height:1;color:#ffffff;opacity:0;-webkit-transition:all 0.5s;-moz-transition:all 0.5s;-o-transition:all 0.5s;transition:all 0.5s;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-media .info-item-text .info-price, .slider-info-wrap .slider-info-content .slider-info-item .info-item-media .info-item-text .info-temp{font-size:22px;display:inline-block;width:49%;-webkit-transform:translateY(40%);-moz-transform:translateY(40%);-ms-transform:translateY(40%);-o-transform:translateY(40%);transform:translateY(40%);-webkit-transition:all 0.35s;-moz-transition:all 0.35s;-o-transition:all 0.35s;transition:all 0.35s;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-media .info-item-text .info-price span, .slider-info-wrap .slider-info-content .slider-info-item .info-item-media .info-item-text .info-temp span{color:#ffc107;font-size:12px;text-transform:uppercase;display:block;margin-bottom:5px;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-media .info-item-text .info-temp{text-align:right;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-media .info-item-text p.info-text{margin-top:30px;line-height:1.55;-webkit-transform:translateY(60%);-moz-transform:translateY(60%);-ms-transform:translateY(60%);-o-transform:translateY(60%);transform:translateY(60%);-webkit-transition:all 0.35s;-moz-transition:all 0.35s;-o-transition:all 0.35s;transition:all 0.35s;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-content{position:absolute;z-index:1;bottom:0;width:100%;height:100%;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-content .main-title{-webkit-transition:all 0.3s;-moz-transition:all 0.3s;-o-transition:all 0.3s;transition:all 0.3s;height:100%;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-content .main-title .title{font-size:18px;color:#ffffff;text-transform:uppercase;margin-top:13px;display:inline-block;padding-left:20px;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-content .main-title .title span{font-size:12px;display:block;margin-bottom:0px;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-content .main-title .price{font-size:13px;color:#ffffff;line-height:58px;display:block;float:right;margin-right:20px;-webkit-transition:0.5s;-moz-transition:0.5s;-o-transition:0.5s;transition:0.5s;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-content .main-title .price span{color:#FFFF00;font-size:18px;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-content .main-title .button{position:absolute;z-index:1;top:50%;right:15px;font-size:13px;color:#FFFF00;padding:1px 10px;margin-right:10px;-webkit-transition:0.5s;-moz-transition:0.5s;-o-transition:0.5s;transition:0.5s;text-transform:uppercase;font-weight:700;-webkit-transform:translateY(20%);-moz-transform:translateY(20%);-ms-transform:translateY(20%);-o-transform:translateY(20%);transform:translateY(20%);opacity:0;}
.slider-info-wrap .slider-info-content .slider-info-item .info-item-content .main-title .button:hover{color:#FFFF00;}
.slider-info-wrap .slider-info-content .slider-info-item:not(.mobile-on):hover .info-item-media, .slider-info-wrap .slider-info-content .slider-info-item.active .info-item-media{padding-top:60%;}
.slider-info-wrap .slider-info-content .slider-info-item:not(.mobile-on):hover .info-item-media .info-item-text, .slider-info-wrap .slider-info-content .slider-info-item.active .info-item-media .info-item-text{opacity:1;-webkit-transition-delay:0.25s;-moz-transition-delay:0.25s;-o-transition-delay:0.25s;transition-delay:0.25s;}
.slider-info-wrap .slider-info-content .slider-info-item:not(.mobile-on):hover .info-item-media .info-item-text .info-price, .slider-info-wrap .slider-info-content .slider-info-item:not(.mobile-on):hover .info-item-media .info-item-text .info-temp, .slider-info-wrap .slider-info-content .slider-info-item.active .info-item-media .info-item-text .info-price, .slider-info-wrap .slider-info-content .slider-info-item.active .info-item-media .info-item-text .info-temp{-webkit-transform:translateY(0);-moz-transform:translateY(0);-ms-transform:translateY(0);-o-transform:translateY(0);transform:translateY(0);-webkit-transition-delay:0.25s;-moz-transition-delay:0.25s;-o-transition-delay:0.25s;transition-delay:0.25s;}
.slider-info-wrap .slider-info-content .slider-info-item:not(.mobile-on):hover .info-item-media .info-item-text p.info-text, .slider-info-wrap .slider-info-content .slider-info-item.active .info-item-media .info-item-text p.info-text{-webkit-transform:translateY(0);-moz-transform:translateY(0);-ms-transform:translateY(0);-o-transform:translateY(0);transform:translateY(0);-webkit-transition-delay:0.25s;-moz-transition-delay:0.25s;-o-transition-delay:0.25s;transition-delay:0.25s;}
.slider-info-wrap .slider-info-content .slider-info-item:not(.mobile-on):hover .info-item-content .main-title, .slider-info-wrap .slider-info-content .slider-info-item.active .info-item-content .main-title{-webkit-transition-delay:0.5s;-moz-transition-delay:0.5s;-o-transition-delay:0.5s;transition-delay:0.5s;-webkit-transform:translateY(-15px);-moz-transform:translateY(-15px);-ms-transform:translateY(-15px);-o-transform:translateY(-15px);transform:translateY(-15px);}
.slider-info-wrap .slider-info-content .slider-info-item:not(.mobile-on):hover .info-item-content .main-title .price, .slider-info-wrap .slider-info-content .slider-info-item.active .info-item-content .main-title .price{opacity:0;-webkit-transform:translateY(-50%);-moz-transform:translateY(-50%);-ms-transform:translateY(-50%);-o-transform:translateY(-50%);transform:translateY(-50%);}
.slider-info-wrap .slider-info-content .slider-info-item:not(.mobile-on):hover .info-item-content .main-title .button, .slider-info-wrap .slider-info-content .slider-info-item.active .info-item-content .main-title .button{opacity:1;-webkit-transform:translateY(-50%);-moz-transform:translateY(-50%);-ms-transform:translateY(-50%);-o-transform:translateY(-50%);transform:translateY(-50%);}
@media (max-width:1400px){.slider-info-wrap .slider-info-content .slider-info-item .info-item-media .info-item-text p.info-text{margin-top:0;}
}
@media(max-width:1024px){.th5{font-size:15px;line-height:25px;}
}
@media (max-width:1200px){.slider-info-wrap .slider-info-content .slider-info-item{width:50%;}
 .slider-info-wrap .slider-info-content .slider-info-item .info-item-media .info-item-text p.info-text{margin-top:30px;}
}
@media (max-width:698px){.slider-info-wrap .slider-info-content .slider-info-item{width:100%;}
 .slider-info-wrap .slider-info-content .slider-info-item .info-item-media .info-item-text p.info-text{margin-top:5px;}
}
 
      
      </style>

</main>
<section>
  <center> <h2>Découvrez Nos Professionnels</h2></center>
  <div class=\"container\">
    
       {% for item in services %}
   <div class=\"card\">
      
        <img src=\"/services/{{ item.image }}\" alt=\"film\">
        <div class=\"con-text\">
            <h4>{{ item.nom }}</h4>
            <p>
              
                <a href=\"{{ path('centresdebeaute', {'id':item.id } ) }}\" class=\"btn btn-secondary float-left\">Lire la suite </a>
                
            </p>
        </div>
    </div>
    {% endfor %}
  </div>  
</section>

<div class=\"container-fluid\" >
     <div class=\"row\">
        <div class=\"column col-lg-4 col-md-8 col-sm-12\" style=\"float:right;\" >
<h1 style=\"font-family: Verdana, Geneva, Tahoma, sans-serif;\" >Les questions fréquentes </h1></div>
<div class=\"column col-lg-8 col-md-10 col-sm-12\" style=\"float:left;\" >  
<section class=\"information container\">
    <div class=\"information__container\" style=\"font-size:20px;\">
        <div class=\"information__item\">
            <header class=\"information__header\">
                <i class='bx bx-plus information__icon'></i>
                <h3 class=\"information__title\">Qu'est-ce que Club Beauté ?</h3>
            </header>

            <div class=\"information__content\">
                <p class=\"information__description\">
                   -Club Beauté est l'application de prise de rendez-vous beauté qui va changer votre facon de vous organiser.L'idée,vous éviter de perdre un temps précieux en vous permettant de prendre rendez-vous dans l'un de nos centres de beauté partenaire,en quelques clics et 24h/24h!<br>
                   -Terminé l'attente au téléphone ou les déplacements,
                   CLUB BEAUTE vous offre la possibilité de réserver un rendez-vous chezun centre de beauté sans avoir à sortir de chez vous. 
                </p>
            </div>
        </div>

        <div class=\"information__item\">
            <header class=\"information__header\">
                <i class='bx bx-plus information__icon'></i>
                <h3 class=\"information__title\">Comment prendre rendez vous sur CLUB BEAUTE ?</h3>
            </header>

            <div class=\"information__content\">
                <p class=\"information__description\">
                    -Vous connaissez le nom de votre établissement de beauté :<br>
                    -Cliquez sur l'établissement,choisissez la service puis l'horaire qui vous convient.<br>
                    -Renseignez vos coordonnées personnelles.<br>
                    -

                </p>
            </div>
        </div>

        <div class=\"information__item\">
            <header class=\"information__header\">
                <i class='bx bx-plus information__icon'></i>
                <h3 class=\"information__title\">Comment puis-je déplacer un rendez-vous ?</h3>
            </header>

            <div class=\"information__content\">
                <p class=\"information__description\">
                    -Cliquez sur Mon compte en haute à droite.<br>
                    -Indiquez votre email et mot de passe CLUB BEAUTE si vous n'étes pas connecté.<br>
                    -Pour déplacer un rendez-vous, vous devez d'abord l'annuler, pour cela, cliquer sur annuler mon rdv que vous souhaitez déplacer.
                    -Cliquez ensuite sur prendre RDV et reprenez rendez-vous.
                </p>
            </div>
        </div>

        <div class=\"information__item\">
            <header class=\"information__header\">
                <i class='bx bx-plus information__icon'></i>
                <h3 class=\"information__title\">Comment faire apparaitre mon centre?</h3>
            </header>

            <div class=\"information__content\">
                <p class=\"information__description\">
                  -Il vous suffit de nous contacter par téléphone de lund au vendredi de 9h à 18h et le samedi de 10h à 7h au 25 202 207 pour nous envoyer plus d'informations sur notre offre à distination des professionnels de la beauté.
                </p>
            </div>
        </div>
    </div>
    </div>
  </div>
</div>
</section>


<style> 
.container
{
  max-width: 1300px;
  margin: 20px auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
}
.card {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 300px;
    height: 400px;
    background: #000;
    border-radius: 30px;
    overflow: hidden;
    cursor: pointer;
    transition: all 0.5s ease;
    backface-visibility: hidden;
    margin-top:10px;
}
.card:hover {
    transform: scale(0.9);
}

.card:hover .con-text p {
    margin-bottom: 0;
    opacity: 1;
    transition: all 0.5s ease;
}
.card img {
    position: absolute;
    width: 100%;
    height:100%;
    z-index: 10;
    transition: all 0.5s ease;
}
.card .con-text {
    position: absolute;
    z-index: 30;
    bottom: 0;
    color: #fff;
    padding: 20px;
    padding-bottom: 30px;
    background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.9) 100%);
}
.card .con-text p {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    font-size: 0.8rem;
    opacity: 0;
    margin-bottom: -150px;
    transition: all 0.5s ease;
}
.card .con-text p a {
    padding: 7px 17px;
    border-radius: 12px;
    background: transparent;
    border: 2px solid #fff;
    color: #fff;
    margin-top: 10px;
    margin-left: auto;
    cursor: pointer;
    transition: all 0.5s ease;
    font-family: poppins;
    font-size: 0.75rem;
    outline: none;
}
.card .con-text p button:hover {
    background: #fff;
    color: #000;
}

.img {
    position: absolute;
    width: 100%;
}
@import url(\"https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap\");
/*=============== VARIABLES CSS ===============*/
:root {
  /*========== Colors ==========*/
  --hue-color: 225;
  --first-color: hsl(var(--hue-color), 48%, 35%);
  --title-color: hsl(var(--hue-color), 48%, 22%);
  --text-color: hsl(var(--hue-color), 12%, 35%);
  --body-color: hsl(var(--hue-color), 49%, 98%);
  --container-color: #FFF;
  /*========== Font and typography ==========*/
  --body-font: 'Poppins', sans-serif;
  --normal-font-size: .938rem;
  --small-font-size: .813rem;
  --smaller-font-size: .75rem;
}

@media screen and (min-width: 968px) {
  :root {
    --normal-font-size: 1rem;
    --small-font-size: .875rem;
    --smaller-font-size: .813rem;
  }
}

/*=============== BASE ===============*/
* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}


/*=============== information ===============*/

.information__container {
  display: grid;
  row-gap: .75rem;
  
  background-color: var(--container-color);
  border-radius: 5px;
  box-shadow: 0 20px 40px rgba(51, 51, 51, 0.1);
}

.information__title {
  font-size: var(--small-font-size);
  color: var(--title-color);
  font-weight: 400;
  margin-top: 10px;
  transition: .2s;
}

.information__header {
  display: flex;
  column-gap: .5rem;
  padding: 1.25rem 1.25rem 1.25rem 1rem;
  cursor: pointer;
}

.information__description {
  padding: 0 1.25rem 1.25rem 3rem;
  font-size: var(--smaller-font-size);
}

.information__icon {
  font-size: 1.5rem;
  height: max-content;
  color: var(--title-color);
  transition: .3s;
}

.information__item {
  box-shadow: 0 2px 6px rgba(38, 38, 38, 0.1);
  background-color: var(--container-color);
  border-radius: .25rem;
  position: relative;
  transition: all .25s ease;
}

.information__item::after {
  content: '';
  background-color: var(--first-color);
  width: 5px;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  border-radius: .25rem 0 0 .25rem;
}

.information__item:nth-child(1) {
  background-color: #fff7f0;
}

.information__item:nth-child(1)::after {
  background-color: #ffc08a;
}

.information__item:nth-child(2) {
  background-color: #f0f0ff;
}

.information__item:nth-child(2)::after {
  background-color: #e7d082;
}

.information__item:nth-child(3) {
  background-color: #fff0f3;
}

.information__item:nth-child(3)::after {
  background-color: #e4a8b4;
}

.information__item:nth-child(4) {
  background-color: #f0faff;
}

.information__item:nth-child(4)::after {
  background-color: #ffea8a;
}

.information__content {
  overflow: hidden;
  height: 0;
  transition: all .25s ease;
}

/*Rotate icon and add font weight to titles*/
.information-open .information__icon {
  transform: rotate(45deg);
}

.ainformation-open .information__title {
  font-weight: 600;
}

/*=============== MEDIA QUERIES ===============*/
/* For medium devices */
@media screen and (min-width: 576px) {
  .information__container {
    width: 850px;
    padding: 2.5rem;
    justify-self: center;
    border-radius: .75rem;
  }
  .information__header {
    padding: 1.5rem;
  }
  .information__title {
    padding-right: 3.5rem;
  }
  .information__description {
    padding: 0 4rem 1.25rem 3.5rem;
  }
}

/* For large devices */
@media screen and (min-width: 968px) {
  .container {
    margin-left: auto;
    margin-right: auto;
  }
}

</style>
<script>
    const informationItems = document.querySelectorAll('.information__item')

// 1. Selecionar cada item
informationItems.forEach((item) =>{
    const informationHeader = item.querySelector('.information__header')

    // 2. Seleccionar cada click del header
    informationHeader.addEventListener('click', () =>{
        // 7. Crear la variable
        const openItem = document.querySelector('.information-open')
        
        // 5. Llamar a la funcion toggle item
        toggleItem(item)

        // 8. Validar si existe la clase
        if(openItem && openItem!== item){
            toggleItem(openItem)
        }
    })
})

// 3. Crear una funcion tipo constante
const toggleItem = (item) =>{
    // 3.1 Crear la variable
    const informationContent = item.querySelector('.information__content')

    // 6. Si existe otro elemento que contenga la clase accorion-open que remueva su clase
    if(item.classList.contains('information-open')){
        informationContent.removeAttribute('style')
        item.classList.remove('information-open')
    }else{
        // 4. Agregar el height maximo del content
        informationContent.style.height = informationContent.scrollHeight + 'px'
        item.classList.add('information-open')
    }
}
</script>


{% endblock %}


  ", "home/index.html.twig", "/opt/lampp/htdocs/App_Beaute/templates/home/index.html.twig");
    }
}
