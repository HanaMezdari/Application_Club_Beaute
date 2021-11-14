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

/* base.html.twig */
class __TwigTemplate_3da0ce71d5816bf02eb7ad03d0ac14246d358ef022a1fb021327401d9eb4f319 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
         <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
         <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, \">
         <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
         <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">

         <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.css\"
         integrity=\"sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==\"
         crossorigin=\"\"/>

    </head>
    <body>
     
    <header>
        
   <nav class=\"navbar navbar-expand-lg navbar-white fixed-top \" >
        
  <a class=\"navbar-brand text-dark\"  href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"> <img  src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/logo/logo.png"), "html", null, true);
        echo "\" alt=\"image\" style=\"height: 50px;width:80px;margin-left:10px;border-radius: 50%;\"></a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mx-auto mb-2 mb-lg-0\">
      <li class=\"nav-item \">
        <a class=\"nav-link\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accuiel</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("centresdebeaute");
        echo "\">Centres de beaute</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services");
        echo "\">Nos services</a>
      </li>
      
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">Reservation</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">Contact</a>
      </li>
    </ul>
      <ul class=\"navbar-nav d-flex justify-content-end\">

       ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48)) {
            // line 49
            echo "                      
       <li class=\"nav-item \">
        <a class=\"nav-link\" >";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "nom", [], "any", false, false, false, 51), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "prenom", [], "any", false, false, false, 51), "html", null, true);
            echo "</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
      </li>
      

       ";
        } else {
            // line 59
            echo "       <li class=\"nav-item \">
        <a class=\"nav-link\" href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Inscription</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
      </li>
      
       ";
        }
        // line 67
        echo "     
    </ul>
    
  </div>
</nav>
       </header>   
        ";
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "      

       <footer class=\"main-footer\">
        <div class=\"container\">
            <!--Widgets Section-->
            <div class=\"widgets-section\">
                <div class=\"row clearfix\">
                    
                    <!--Column-->
                    <div class=\"big-column col-lg-6 col-md-12 col-sm-12\">
                        <div class=\"row clearfix\">
                        
                            <!--Footer Column-->
                            <div class=\"footer-column col-lg-7 col-md-6 col-sm-12\">
                                <div class=\"footer-widget about-widget\">
                                    <div class=\"logo\">
                                        <a href=\"#\"><img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/logo/logo.png"), "html", null, true);
        echo "\" style=\"width: 180px;height:150px;border-radius: 50%;\" alt=\"image\" /></a>
                                    </div>
                                    <div class=\"text\">
                                        <p>Club Beauté est l'application de prise de rendez-vous beauté qui va changer votre facon de vous organiser.L'idée,vous éviter de perdre un temps précieux en vous permettant de prendre rendez-vous dans l'un de nos centres de beauté partenaire,en quelques clics et 24h/24h!</p>
                                       
                                    </div>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class=\"footer-column col-lg-5 col-md-6 col-sm-12\">
                                <div class=\"footer-widget links-widget\">
                                    <h2>Services</h2>
                                    <ul class=\"footer-list\">
                                        <li><a href=\"#\">Coiffeur</a></li>
                                        <li><a href=\"#\">Maquillage</a></li>
                                        <li><a href=\"#\">Esthetique&Soin</a></li>
                                        <li><a href=\"#\">Hammam&SPA</a></li>
                                        <li><a href=\"#\">Offre De Mariage</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                     <!--Column-->
                    <div class=\"big-column col-lg-6 col-md-12 col-sm-12\">
                        <div class=\"row clearfix\">
                        
                            <!--Footer Column-->
                            <div class=\"footer-column col-lg-6 col-md-6 col-sm-12\">
                                <div class=\"footer-widget gallery-widget\">
                                    <h2>Liens Rapides</h2>
                                   <ul class=\"footer-list\">
                                        <li><a href=\"#\">Accueil</a></li>
                                        <li><a href=\"#\">Services</a></li>
                                        <li><a href=\"#\">Sous-Services</a></li>
                                        <li><a href=\"#\">Reservation</a></li>
                                        <li><a href=\"#\">Contact</a></li>
                                      
                                    </ul>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class=\"footer-column col-lg-6 col-md-6 col-sm-12\">
                                <div class=\"footer-widget info-widget\">
                                    <h2>Contact Info</h2>
                                    <ul class=\"info-list\">
                                        <li>Rue 06, City Marcy, Douar Hicher, code postale 2086</li>
                                        <li>+216 202-207</li>
                                        <li>hanamezdarip4@gmail.com</li>
                                    </ul>
                                    <!-- Social Links -->
                                    <ul class=\"social-links\">
                                        <li class=\"google\"><a href=\"#\"><span class=\"fab fa-google-plus-g\"></span></a></li>
                                        <li class=\"facebook\"><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                                        <li class=\"instagram\"><a href=\"#\"><span class=\"fab fa-instagram\"></span></a></li>
                                        <li class=\"twitter\"><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    
        <!-- Footer Bottom -->
        <div class=\"footer-bottom\">
            <div class=\"container\">
                <div class=\"row clearfix\">
                    
                    <div class=\"column col-lg-6 col-md-12 col-sm-12\">
                        <div class=\"copyright\"><span class=\"theme_color\">Ak Web Designer</span> &copy; 2022 All Right Reserved</div>
                    </div>
                    <div class=\"column col-lg-6 col-md-12 col-sm-12\">
                        <ul class=\"footer-nav\">
                            <li><a href=\"#\">Terms of Service</a></li>
                            <li><a href=\"#\">Privacy Policy</a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    
    </footer>

       


      <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.5.1.slim.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>  
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Music8a";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 73,  307 => 5,  293 => 188,  289 => 187,  285 => 186,  281 => 185,  183 => 90,  165 => 74,  163 => 73,  155 => 67,  148 => 63,  142 => 60,  139 => 59,  131 => 54,  123 => 51,  119 => 49,  117 => 48,  102 => 36,  96 => 33,  90 => 30,  77 => 22,  61 => 9,  57 => 8,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Music8a{% endblock %}</title>
         <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
         <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, \">
         <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
         <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">

         <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.css\"
         integrity=\"sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==\"
         crossorigin=\"\"/>

    </head>
    <body>
     
    <header>
        
   <nav class=\"navbar navbar-expand-lg navbar-white fixed-top \" >
        
  <a class=\"navbar-brand text-dark\"  href=\"{{ path('home') }}\"> <img  src=\"{{ asset('css/logo/logo.png') }}\" alt=\"image\" style=\"height: 50px;width:80px;margin-left:10px;border-radius: 50%;\"></a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mx-auto mb-2 mb-lg-0\">
      <li class=\"nav-item \">
        <a class=\"nav-link\" href=\"{{ path('home') }}\">Accuiel</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('centresdebeaute') }}\">Centres de beaute</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('services') }}\">Nos services</a>
      </li>
      
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">Reservation</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">Contact</a>
      </li>
    </ul>
      <ul class=\"navbar-nav d-flex justify-content-end\">

       {% if app.user %}
                      
       <li class=\"nav-item \">
        <a class=\"nav-link\" >{{ app.user.nom }} {{ app.user.prenom }}</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
      </li>
      

       {% else %}
       <li class=\"nav-item \">
        <a class=\"nav-link\" href=\"{{ path('register') }}\">Inscription</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Connexion</a>
      </li>
      
       {% endif %}
     
    </ul>
    
  </div>
</nav>
       </header>   
        {% block body %}{% endblock %}
      

       <footer class=\"main-footer\">
        <div class=\"container\">
            <!--Widgets Section-->
            <div class=\"widgets-section\">
                <div class=\"row clearfix\">
                    
                    <!--Column-->
                    <div class=\"big-column col-lg-6 col-md-12 col-sm-12\">
                        <div class=\"row clearfix\">
                        
                            <!--Footer Column-->
                            <div class=\"footer-column col-lg-7 col-md-6 col-sm-12\">
                                <div class=\"footer-widget about-widget\">
                                    <div class=\"logo\">
                                        <a href=\"#\"><img src=\"{{ asset('css/logo/logo.png') }}\" style=\"width: 180px;height:150px;border-radius: 50%;\" alt=\"image\" /></a>
                                    </div>
                                    <div class=\"text\">
                                        <p>Club Beauté est l'application de prise de rendez-vous beauté qui va changer votre facon de vous organiser.L'idée,vous éviter de perdre un temps précieux en vous permettant de prendre rendez-vous dans l'un de nos centres de beauté partenaire,en quelques clics et 24h/24h!</p>
                                       
                                    </div>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class=\"footer-column col-lg-5 col-md-6 col-sm-12\">
                                <div class=\"footer-widget links-widget\">
                                    <h2>Services</h2>
                                    <ul class=\"footer-list\">
                                        <li><a href=\"#\">Coiffeur</a></li>
                                        <li><a href=\"#\">Maquillage</a></li>
                                        <li><a href=\"#\">Esthetique&Soin</a></li>
                                        <li><a href=\"#\">Hammam&SPA</a></li>
                                        <li><a href=\"#\">Offre De Mariage</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                     <!--Column-->
                    <div class=\"big-column col-lg-6 col-md-12 col-sm-12\">
                        <div class=\"row clearfix\">
                        
                            <!--Footer Column-->
                            <div class=\"footer-column col-lg-6 col-md-6 col-sm-12\">
                                <div class=\"footer-widget gallery-widget\">
                                    <h2>Liens Rapides</h2>
                                   <ul class=\"footer-list\">
                                        <li><a href=\"#\">Accueil</a></li>
                                        <li><a href=\"#\">Services</a></li>
                                        <li><a href=\"#\">Sous-Services</a></li>
                                        <li><a href=\"#\">Reservation</a></li>
                                        <li><a href=\"#\">Contact</a></li>
                                      
                                    </ul>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class=\"footer-column col-lg-6 col-md-6 col-sm-12\">
                                <div class=\"footer-widget info-widget\">
                                    <h2>Contact Info</h2>
                                    <ul class=\"info-list\">
                                        <li>Rue 06, City Marcy, Douar Hicher, code postale 2086</li>
                                        <li>+216 202-207</li>
                                        <li>hanamezdarip4@gmail.com</li>
                                    </ul>
                                    <!-- Social Links -->
                                    <ul class=\"social-links\">
                                        <li class=\"google\"><a href=\"#\"><span class=\"fab fa-google-plus-g\"></span></a></li>
                                        <li class=\"facebook\"><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                                        <li class=\"instagram\"><a href=\"#\"><span class=\"fab fa-instagram\"></span></a></li>
                                        <li class=\"twitter\"><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    
        <!-- Footer Bottom -->
        <div class=\"footer-bottom\">
            <div class=\"container\">
                <div class=\"row clearfix\">
                    
                    <div class=\"column col-lg-6 col-md-12 col-sm-12\">
                        <div class=\"copyright\"><span class=\"theme_color\">Ak Web Designer</span> &copy; 2022 All Right Reserved</div>
                    </div>
                    <div class=\"column col-lg-6 col-md-12 col-sm-12\">
                        <ul class=\"footer-nav\">
                            <li><a href=\"#\">Terms of Service</a></li>
                            <li><a href=\"#\">Privacy Policy</a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    
    </footer>

       


      <script src=\"{{ asset('js/index.js')}}\"></script>
      <script src=\"{{ asset('js/bootstrap.bundle.min.js')}}\"></script>
      <script src=\"{{ asset('js/jquery-3.5.1.slim.min.js')}}\"></script>
      <script src=\"{{ asset('js/popper.min.js')}}\"></script>  
    </body>
</html>
", "base.html.twig", "/opt/lampp/htdocs/App_Beaute/templates/base.html.twig");
    }
}
