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

/* centresdebeaute/index.html.twig */
class __TwigTemplate_b122524bbf24e380e64b567f91546b6a4bc888c68c3620ee8cfeaa511181ac88 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "centresdebeaute/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "centresdebeaute/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "centresdebeaute/index.html.twig", 1);
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

        echo " Centres de beaute";
        
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
        echo " <header>
       
       <div class=\"content-width\" style=\"margin-top:100px;\">
  <div class=\"slideshow\">
    <!-- Slideshow Items -->
    <div class=\"slideshow-items\">
      <div class=\"item\">
        <div class=\"item-image-container\">
          <img class=\"item-image\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slide/s2.jpg"), "html", null, true);
        echo "\" alt=\"image\" style=\"height: 500px;width: 100%;\" />
        </div>
        <!-- Staggered Header Elements -->
        <div class=\"item-header\">
          <span class=\"vertical-part\"><b>Bienvenu : <em style=\"color:#8c0c3c;\">Lilia Ben Aziza</em></b></span>
        </div>
        <!-- Staggered Description Elements -->
        <div class=\"item-description\">
          <span class=\"vertical-part\">
            <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services");
        echo "\"style=\"color:#fff;\" ><b>Réserver en ligne un RDV avec un centre de beauté</b> </a> 
          </span>  
        </div>
      </div>
      <div class=\"item\">
        <div class=\"item-image-container\">
          <img class=\"item-image\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slide/s3.jpg"), "html", null, true);
        echo "\" alt=\"image\" style=\"height: 500px;width: 100%;\" />
        </div>
        <!-- Staggered Header Elements -->
        <div class=\"item-header\">
          <span class=\"vertical-part\"><b>Bienvenu : <em style=\"color:#8c0c3c;\">Fleur De Lys</em></b></span>
        </div>
        <!-- Staggered Description Elements -->
        <div class=\"item-description\">
          <span class=\"vertical-part\">
             <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services");
        echo "\" style=\"color:#fff;\" ><b>Réserver en ligne un RDV avec un centre de beauté</b> </a> 
          </span>
        </div>
      </div>
      <div class=\"item\">
        <div class=\"item-image-container\">
          <img class=\"item-image\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slide/s1.jpg"), "html", null, true);
        echo "\" alt=\"image\" style=\"height: 500px;width: 100%;\" />
        </div>
        <!-- Staggered Header Elements -->
        <div class=\"item-header\">
          <span class=\"vertical-part\"><b>Bienvenu :<em style=\"color:#8c0c3c;\">Violette</b></span>
        </div>
        <!-- Staggered Description Elements -->
        <div class=\"item-description\">
          <span class=\"vertical-part\">
             <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services");
        echo "\" style=\"color:#fff;\" ><b>Réserver en ligne un RDV avec un centre de beauté</b> </a> 
          </span>
        </div>
      </div>
    </div>
    <div class=\"controls\">
      <ul>
        <li class=\"control\" data-index=\"0\"></li>
        <li class=\"control\" data-index=\"1\"></li>
        <li class=\"control\" data-index=\"2\"></li>
      </ul>
    </div>
  </div>
</div>
  
 
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
body{
  margin:0;
  overflow-x:hidden;
  font-family: 'Poppins', sans-serif;
}

.content-width {
  width: 100%;
  height: 90vh;
  margin: 0 auto;
}

.slideshow {
  position: relative;
  width: 100%;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
}

.slideshow-items {
  position: relative;
  width: 100%;
  height: 100vh;
}

.item {
  position: absolute;
  width: 100%;
  height: auto;
}

.item-image-container {
  position: relative;
  width: 100%;
  height:100vh;
}

.item-image-container::before {
  content: '';
  position: absolute;
  top: -1px;
  left: 0;
  width: 101%;
  height: 90vh;
  background: #22222A;
  opacity: 0;
 
}

.item-image {
  position: relative;
  width: 100%;
  height: 100%;
  opacity: 0;
  display: block;
  /* transition: property name | duration | timing-function | delay  */
  transition: opacity .3s ease-out .45s;
}

.item.active .item-image {
  opacity: 1;
}

.item.active .item-image-container::before {
  opacity: .0;
}

.item-description {
  position: absolute;
  top: 50vh;
  left: 1.8%;
  width: 50%;
  color:#fff;
  padding-right: 4%;
  line-height: 1.8;
  font-family: 'Exo 2', sans-serif;
}

/* Staggered Vertical Items ------------------------------------------------------*/
.item-header {
  position: absolute;
  top: 40vh;
  left: 1.8%;
  font-family: 'Montserrat', sans-serif;
}

.item-header .vertical-part {
  margin: 0 -4px;
  font-family: 'Montserrat', sans-serif;
  -webkit-font-smoothing: auto;
  font-size: 2vw;
  color: #fff;
}
@media (max-width:600px){
.item-header .vertical-part {
font-size:3vw;
}
.content-width{
height:50vh;
}
.slideshow {
  position: relative;
  width: 100%;
  min-height: 50vh;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
}

.slideshow-items {
  min-height: 60vh;
}
.item-image-container {
  height:60vh;
}

.item-image-container::before {
  height: 60vh;
}
.item-description {
  position: absolute;
  top: 40vh;
  width: 90%;
  font-size:14px;
}
.item-header {
  position: absolute;
  top: 30vh;
}
}
.vertical-part {
  overflow: hidden;
  display: inline-block;
}

.vertical-part b {
  display: inline-block;
  transform: translateY(100%);
}

.item-header .vertical-part b {
  transition: .5s;
}

.item-description .vertical-part b {
  transition: .21s;
}

.item.active .item-header .vertical-part b {
  transform: translateY(0);
}

.item.active .item-description .vertical-part b {
  transform: translateY(0);
}

/* Controls ----------------------------------------------------------------------*/
.controls {
  position: relative;
  text-align: right;
  display:block;
}

.controls ul {
  list-style: none;
  float:left;
}

.controls ul li {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 3px;
  background:#bdbdd5;;
  cursor: pointer;
}

.controls ul li.active {
  background:#6a6a77;;
}


@media (max-width:600px){
.controls ul {
  list-style: none;
  position:absolute;
  top:-50vh;
}
}


</style>
<script>

    const items = document.querySelectorAll('.item'),
controls = document.querySelectorAll('.control'),
headerItems = document.querySelectorAll('.item-header'),
descriptionItems = document.querySelectorAll('.item-description'),
activeDelay = .76,
interval = 5000;

let current = 0;

const slider = {
  init: () => {
    controls.forEach(control => control.addEventListener('click', e => {slider.clickedControl(e);}));
    controls[current].classList.add('active');
    items[current].classList.add('active');
  },
  nextSlide: () => {// Increment current slide and add active class
    slider.reset();
    if (current === items.length - 1) current = -1; // Check if current slide is last in array
    current++;
    controls[current].classList.add('active');
    items[current].classList.add('active');
    slider.transitionDelay(headerItems);
    slider.transitionDelay(descriptionItems);
  },
  clickedControl: e => {// Add active class to clicked control and corresponding slide
    slider.reset();
    clearInterval(intervalF);

    const control = e.target,
    dataIndex = Number(control.dataset.index);

    control.classList.add('active');
    items.forEach((item, index) => {
      if (index === dataIndex) {// Add active class to corresponding slide
        item.classList.add('active');
      }
    });
    current = dataIndex; // Update current slide
    slider.transitionDelay(headerItems);
    slider.transitionDelay(descriptionItems);
    intervalF = setInterval(slider.nextSlide, interval); // Fire that bad boi back up
  },
  reset: () => {// Remove active classes
    items.forEach(item => item.classList.remove('active'));
    controls.forEach(control => control.classList.remove('active'));
  },
  transitionDelay: items => {// Set incrementing css transition-delay for .item-header & .item-description, .vertical-part, b elements
    let seconds;

    items.forEach(item => {
      const children = item.childNodes; // .vertical-part(s)
      let count = 1,
      delay;

      item.classList.value === 'item-header' ? seconds = .015 : seconds = .007;

      children.forEach(child => {// iterate through .vertical-part(s) and style b element
        if (child.classList) {
          item.parentNode.classList.contains('active') ? delay = count * seconds + activeDelay : delay = count * seconds;
          child.firstElementChild.style.transitionDelay = `\${delay}s`; // b element
          count++;
        }
      });
    });
  } };


let intervalF = setInterval(slider.nextSlide, interval);
slider.init();
</script>
 
 </header> 
 <section>
  <div class=\"container-fluid\" >
     <div class=\"row\">
        <div class=\"column col-lg-4 col-md-8 col-sm-12\" style=\"float:right;\" >
 <div id=\"maCarte\" style=\"border-radius: 5px;border: 20px solid #fff;margin-top:25px;\"></div>
   </div>

 <script src=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.js\"
integrity=\"sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==\"
crossorigin=\"\"></script>
<script>
   var carte = L.map('maCarte').setView([36.8064835, 10.1815426], 13);
       
       // On charge les \"tuiles\"
       L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
           // Il est toujours bien de laisser le lien vers la source des données
           attribution: 'données © <a href=\"//osm.org/copyright\">OpenStreetMap</a>/ODbL - rendu <a href=\"//openstreetmap.fr\">OSM France</a>',
           minZoom: 1,
           maxZoom: 20
       }).addTo(carte);

       ";
        // line 360
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["centresdebeaute"]) || array_key_exists("centresdebeaute", $context) ? $context["centresdebeaute"] : (function () { throw new RuntimeError('Variable "centresdebeaute" does not exist.', 360, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "  
           // On crée le marqueur et on lui attribue une popup
           var marqueur = L.marker([";
            // line 362
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "lat", [], "any", false, false, false, 362), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "lon", [], "any", false, false, false, 362), "html", null, true);
            echo "]).addTo(carte); //.addTo(carte);
           marqueur.bindPopup(\"<h3>";
            // line 363
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 363), "html", null, true);
            echo "</h3>\");

       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 366
        echo "</script>
  <div class=\"column col-lg-8 col-md-10 col-sm-12\" style=\"float:left;\" >    
  <div class=\"cardcontainer\">
     <div class=\"row\"  >
                      
    <div class=\"column col-lg-4 col-md-6 col-sm-12\"> 
        ";
        // line 372
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["centresdebeaute"]) || array_key_exists("centresdebeaute", $context) ? $context["centresdebeaute"] : (function () { throw new RuntimeError('Variable "centresdebeaute" does not exist.', 372, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 373
            echo "   
   <div class=\"card\" style=\"margin-top:35px;\">
       
        <img src=\"/centre/";
            // line 376
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 376), "html", null, true);
            echo "\" alt=\"image\">
        <div class=\"con-text\">
            <h3>";
            // line 378
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 378), "html", null, true);
            echo "</h3>
            <p>";
            // line 379
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 379), "html", null, true);
            echo "</p>   
        </div>
     </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 383
        echo "    </div>
    <div class=\"column col-lg-4 col-md-6 col-sm-12\"> 
        ";
        // line 385
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["centresdebeaute"]) || array_key_exists("centresdebeaute", $context) ? $context["centresdebeaute"] : (function () { throw new RuntimeError('Variable "centresdebeaute" does not exist.', 385, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 386
            echo "       <div class=\"content\" style=\"margin-top:35px;\" >
           <br>
           <h3>";
            // line 388
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 388), "html", null, true);
            echo "</h3><br>
           <h6>";
            // line 389
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 389), "html", null, true);
            echo "</h6>
       </div>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 392
        echo "    </div>
    
    <div class=\"column col-lg-4 col-md-6 col-sm-12\">
        ";
        // line 395
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["centresdebeaute"]) || array_key_exists("centresdebeaute", $context) ? $context["centresdebeaute"] : (function () { throw new RuntimeError('Variable "centresdebeaute" does not exist.', 395, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "  
       <div class=\"detail\"  >
            <br><br><br><br>
            <h6>Adresse : ";
            // line 398
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "adresse", [], "any", false, false, false, 398), "html", null, true);
            echo "</h6><br>
            <h6>Email : ";
            // line 399
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 399), "html", null, true);
            echo "</h6><br>
             <a href=\"";
            // line 400
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services");
            echo "\" class=\"btn btn-secondary \">Prendre RDV </a> 
              <a href=\"";
            // line 401
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("centresdebeaute_show", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 401)]), "html", null, true);
            echo "\" class=\"btn btn-secondary \"style=\"float:right;\">Commenter ! </a> 
       </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 404
        echo "    </div>
   </div> 
  </div> 
 </div>
</section>
<style>
.cardcontainer
{
  max-width: 1300px;
  margin: 10px auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
.card {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 80%;
    height: 220px;
    background: #000;
    border-radius: 30px;
     margin-top:10px;
    overflow: hidden;
    cursor: pointer;
    transition: all 0.5s ease;
    backface-visibility: hidden;
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
    width:90%;
    background: linear-gradient(280deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.9) 100%);
}
.card .con-text p {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    font-size: 15px;
    opacity: 0;
    margin-bottom: -400px;
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
    font-size: 1.5rem;
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
</style>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "centresdebeaute/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  579 => 404,  570 => 401,  566 => 400,  562 => 399,  558 => 398,  550 => 395,  545 => 392,  536 => 389,  532 => 388,  528 => 386,  524 => 385,  520 => 383,  510 => 379,  506 => 378,  501 => 376,  496 => 373,  492 => 372,  484 => 366,  475 => 363,  469 => 362,  462 => 360,  152 => 53,  140 => 44,  131 => 38,  119 => 29,  110 => 23,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Centres de beaute{% endblock %}

{% block body %}
 <header>
       
       <div class=\"content-width\" style=\"margin-top:100px;\">
  <div class=\"slideshow\">
    <!-- Slideshow Items -->
    <div class=\"slideshow-items\">
      <div class=\"item\">
        <div class=\"item-image-container\">
          <img class=\"item-image\" src=\"{{ asset('css/slide/s2.jpg') }}\" alt=\"image\" style=\"height: 500px;width: 100%;\" />
        </div>
        <!-- Staggered Header Elements -->
        <div class=\"item-header\">
          <span class=\"vertical-part\"><b>Bienvenu : <em style=\"color:#8c0c3c;\">Lilia Ben Aziza</em></b></span>
        </div>
        <!-- Staggered Description Elements -->
        <div class=\"item-description\">
          <span class=\"vertical-part\">
            <a href=\"{{ path('services') }}\"style=\"color:#fff;\" ><b>Réserver en ligne un RDV avec un centre de beauté</b> </a> 
          </span>  
        </div>
      </div>
      <div class=\"item\">
        <div class=\"item-image-container\">
          <img class=\"item-image\" src=\"{{ asset('css/slide/s3.jpg') }}\" alt=\"image\" style=\"height: 500px;width: 100%;\" />
        </div>
        <!-- Staggered Header Elements -->
        <div class=\"item-header\">
          <span class=\"vertical-part\"><b>Bienvenu : <em style=\"color:#8c0c3c;\">Fleur De Lys</em></b></span>
        </div>
        <!-- Staggered Description Elements -->
        <div class=\"item-description\">
          <span class=\"vertical-part\">
             <a href=\"{{ path('services') }}\" style=\"color:#fff;\" ><b>Réserver en ligne un RDV avec un centre de beauté</b> </a> 
          </span>
        </div>
      </div>
      <div class=\"item\">
        <div class=\"item-image-container\">
          <img class=\"item-image\" src=\"{{ asset('css/slide/s1.jpg') }}\" alt=\"image\" style=\"height: 500px;width: 100%;\" />
        </div>
        <!-- Staggered Header Elements -->
        <div class=\"item-header\">
          <span class=\"vertical-part\"><b>Bienvenu :<em style=\"color:#8c0c3c;\">Violette</b></span>
        </div>
        <!-- Staggered Description Elements -->
        <div class=\"item-description\">
          <span class=\"vertical-part\">
             <a href=\"{{ path('services') }}\" style=\"color:#fff;\" ><b>Réserver en ligne un RDV avec un centre de beauté</b> </a> 
          </span>
        </div>
      </div>
    </div>
    <div class=\"controls\">
      <ul>
        <li class=\"control\" data-index=\"0\"></li>
        <li class=\"control\" data-index=\"1\"></li>
        <li class=\"control\" data-index=\"2\"></li>
      </ul>
    </div>
  </div>
</div>
  
 
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
body{
  margin:0;
  overflow-x:hidden;
  font-family: 'Poppins', sans-serif;
}

.content-width {
  width: 100%;
  height: 90vh;
  margin: 0 auto;
}

.slideshow {
  position: relative;
  width: 100%;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
}

.slideshow-items {
  position: relative;
  width: 100%;
  height: 100vh;
}

.item {
  position: absolute;
  width: 100%;
  height: auto;
}

.item-image-container {
  position: relative;
  width: 100%;
  height:100vh;
}

.item-image-container::before {
  content: '';
  position: absolute;
  top: -1px;
  left: 0;
  width: 101%;
  height: 90vh;
  background: #22222A;
  opacity: 0;
 
}

.item-image {
  position: relative;
  width: 100%;
  height: 100%;
  opacity: 0;
  display: block;
  /* transition: property name | duration | timing-function | delay  */
  transition: opacity .3s ease-out .45s;
}

.item.active .item-image {
  opacity: 1;
}

.item.active .item-image-container::before {
  opacity: .0;
}

.item-description {
  position: absolute;
  top: 50vh;
  left: 1.8%;
  width: 50%;
  color:#fff;
  padding-right: 4%;
  line-height: 1.8;
  font-family: 'Exo 2', sans-serif;
}

/* Staggered Vertical Items ------------------------------------------------------*/
.item-header {
  position: absolute;
  top: 40vh;
  left: 1.8%;
  font-family: 'Montserrat', sans-serif;
}

.item-header .vertical-part {
  margin: 0 -4px;
  font-family: 'Montserrat', sans-serif;
  -webkit-font-smoothing: auto;
  font-size: 2vw;
  color: #fff;
}
@media (max-width:600px){
.item-header .vertical-part {
font-size:3vw;
}
.content-width{
height:50vh;
}
.slideshow {
  position: relative;
  width: 100%;
  min-height: 50vh;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
}

.slideshow-items {
  min-height: 60vh;
}
.item-image-container {
  height:60vh;
}

.item-image-container::before {
  height: 60vh;
}
.item-description {
  position: absolute;
  top: 40vh;
  width: 90%;
  font-size:14px;
}
.item-header {
  position: absolute;
  top: 30vh;
}
}
.vertical-part {
  overflow: hidden;
  display: inline-block;
}

.vertical-part b {
  display: inline-block;
  transform: translateY(100%);
}

.item-header .vertical-part b {
  transition: .5s;
}

.item-description .vertical-part b {
  transition: .21s;
}

.item.active .item-header .vertical-part b {
  transform: translateY(0);
}

.item.active .item-description .vertical-part b {
  transform: translateY(0);
}

/* Controls ----------------------------------------------------------------------*/
.controls {
  position: relative;
  text-align: right;
  display:block;
}

.controls ul {
  list-style: none;
  float:left;
}

.controls ul li {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 3px;
  background:#bdbdd5;;
  cursor: pointer;
}

.controls ul li.active {
  background:#6a6a77;;
}


@media (max-width:600px){
.controls ul {
  list-style: none;
  position:absolute;
  top:-50vh;
}
}


</style>
<script>

    const items = document.querySelectorAll('.item'),
controls = document.querySelectorAll('.control'),
headerItems = document.querySelectorAll('.item-header'),
descriptionItems = document.querySelectorAll('.item-description'),
activeDelay = .76,
interval = 5000;

let current = 0;

const slider = {
  init: () => {
    controls.forEach(control => control.addEventListener('click', e => {slider.clickedControl(e);}));
    controls[current].classList.add('active');
    items[current].classList.add('active');
  },
  nextSlide: () => {// Increment current slide and add active class
    slider.reset();
    if (current === items.length - 1) current = -1; // Check if current slide is last in array
    current++;
    controls[current].classList.add('active');
    items[current].classList.add('active');
    slider.transitionDelay(headerItems);
    slider.transitionDelay(descriptionItems);
  },
  clickedControl: e => {// Add active class to clicked control and corresponding slide
    slider.reset();
    clearInterval(intervalF);

    const control = e.target,
    dataIndex = Number(control.dataset.index);

    control.classList.add('active');
    items.forEach((item, index) => {
      if (index === dataIndex) {// Add active class to corresponding slide
        item.classList.add('active');
      }
    });
    current = dataIndex; // Update current slide
    slider.transitionDelay(headerItems);
    slider.transitionDelay(descriptionItems);
    intervalF = setInterval(slider.nextSlide, interval); // Fire that bad boi back up
  },
  reset: () => {// Remove active classes
    items.forEach(item => item.classList.remove('active'));
    controls.forEach(control => control.classList.remove('active'));
  },
  transitionDelay: items => {// Set incrementing css transition-delay for .item-header & .item-description, .vertical-part, b elements
    let seconds;

    items.forEach(item => {
      const children = item.childNodes; // .vertical-part(s)
      let count = 1,
      delay;

      item.classList.value === 'item-header' ? seconds = .015 : seconds = .007;

      children.forEach(child => {// iterate through .vertical-part(s) and style b element
        if (child.classList) {
          item.parentNode.classList.contains('active') ? delay = count * seconds + activeDelay : delay = count * seconds;
          child.firstElementChild.style.transitionDelay = `\${delay}s`; // b element
          count++;
        }
      });
    });
  } };


let intervalF = setInterval(slider.nextSlide, interval);
slider.init();
</script>
 
 </header> 
 <section>
  <div class=\"container-fluid\" >
     <div class=\"row\">
        <div class=\"column col-lg-4 col-md-8 col-sm-12\" style=\"float:right;\" >
 <div id=\"maCarte\" style=\"border-radius: 5px;border: 20px solid #fff;margin-top:25px;\"></div>
   </div>

 <script src=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.js\"
integrity=\"sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==\"
crossorigin=\"\"></script>
<script>
   var carte = L.map('maCarte').setView([36.8064835, 10.1815426], 13);
       
       // On charge les \"tuiles\"
       L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
           // Il est toujours bien de laisser le lien vers la source des données
           attribution: 'données © <a href=\"//osm.org/copyright\">OpenStreetMap</a>/ODbL - rendu <a href=\"//openstreetmap.fr\">OSM France</a>',
           minZoom: 1,
           maxZoom: 20
       }).addTo(carte);

       {% for item in centresdebeaute %}  
           // On crée le marqueur et on lui attribue une popup
           var marqueur = L.marker([{{ item.lat }}, {{ item.lon }}]).addTo(carte); //.addTo(carte);
           marqueur.bindPopup(\"<h3>{{ item.nom }}</h3>\");

       {% endfor %}
</script>
  <div class=\"column col-lg-8 col-md-10 col-sm-12\" style=\"float:left;\" >    
  <div class=\"cardcontainer\">
     <div class=\"row\"  >
                      
    <div class=\"column col-lg-4 col-md-6 col-sm-12\"> 
        {% for item in centresdebeaute %}
   
   <div class=\"card\" style=\"margin-top:35px;\">
       
        <img src=\"/centre/{{ item.image }}\" alt=\"image\">
        <div class=\"con-text\">
            <h3>{{ item.nom }}</h3>
            <p>{{ item.email }}</p>   
        </div>
     </div>
      {% endfor %}
    </div>
    <div class=\"column col-lg-4 col-md-6 col-sm-12\"> 
        {% for item in centresdebeaute %}
       <div class=\"content\" style=\"margin-top:35px;\" >
           <br>
           <h3>{{ item.nom }}</h3><br>
           <h6>{{ item.description }}</h6>
       </div>
       {% endfor %}
    </div>
    
    <div class=\"column col-lg-4 col-md-6 col-sm-12\">
        {% for item in centresdebeaute %}  
       <div class=\"detail\"  >
            <br><br><br><br>
            <h6>Adresse : {{ item.adresse }}</h6><br>
            <h6>Email : {{ item.email }}</h6><br>
             <a href=\"{{ path('services') }}\" class=\"btn btn-secondary \">Prendre RDV </a> 
              <a href=\"{{ path('centresdebeaute_show', {'id':item.id } ) }}\" class=\"btn btn-secondary \"style=\"float:right;\">Commenter ! </a> 
       </div>
        {% endfor %}
    </div>
   </div> 
  </div> 
 </div>
</section>
<style>
.cardcontainer
{
  max-width: 1300px;
  margin: 10px auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
.card {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 80%;
    height: 220px;
    background: #000;
    border-radius: 30px;
     margin-top:10px;
    overflow: hidden;
    cursor: pointer;
    transition: all 0.5s ease;
    backface-visibility: hidden;
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
    width:90%;
    background: linear-gradient(280deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.9) 100%);
}
.card .con-text p {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    font-size: 15px;
    opacity: 0;
    margin-bottom: -400px;
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
    font-size: 1.5rem;
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
</style>


{% endblock %}
", "centresdebeaute/index.html.twig", "/opt/lampp/htdocs/ClubBeaute/templates/centresdebeaute/index.html.twig");
    }
}
