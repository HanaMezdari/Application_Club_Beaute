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
        echo "<section>
  <center> <h2>Découvrez Nos Professionnels</h2></center>
  <div class=\"container\">
    
       ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "   <div class=\"card\">
      
        <img src=\"/services/";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 13), "html", null, true);
            echo "\" alt=\"film\">
        <div class=\"con-text\">
            <h4>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 15), "html", null, true);
            echo "</h4>
            <p>
              
                <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("centresdebeaute", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\" class=\"btn btn-secondary float-left\">Lire la suite </a>
                
            </p>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "  </div>  
</section>

<section class=\"information container\">
    <div class=\"information__container\">
        <div class=\"information__item\">
            <header class=\"information__header\">
                <i class='bx bx-plus information__icon'></i>
                <h3 class=\"information__title\">What's an accordion?</h3>
            </header>

            <div class=\"information__content\">
                <p class=\"information__description\">
                    An accordion always contains the category title, an expanded and a collapsed state, 
                    an icon indicating expansion, and the spacing between them.
                </p>
            </div>
        </div>

        <div class=\"information__item\">
            <header class=\"information__header\">
                <i class='bx bx-plus information__icon'></i>
                <h3 class=\"information__title\">When and how should it be used?</h3>
            </header>

            <div class=\"information__content\">
                <p class=\"information__description\">
                    It should be used when users only need a few key concepts or descriptions 
                    of the content on a single page.
                </p>
            </div>
        </div>

        <div class=\"information__item\">
            <header class=\"information__header\">
                <i class='bx bx-plus information__icon'></i>
                <h3 class=\"information__title\">What happens if the user clicks on a collapsed card while another card is open?</h3>
            </header>

            <div class=\"information__content\">
                <p class=\"information__description\">
                    It happens that the open card was closed, to give way to the information of the next 
                    open card, but there are different designs that prefer it the other way around.
                </p>
            </div>
        </div>

        <div class=\"information__item\">
            <header class=\"information__header\">
                <i class='bx bx-plus information__icon'></i>
                <h3 class=\"information__title\">How to choose an icon to indicate expansion?</h3>
            </header>

            <div class=\"information__content\">
                <p class=\"information__description\">
                    You must choose a different icon to open and close, so that the user 
                    understands what action he took.
                </p>
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
  padding: 2rem 1rem;
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
        return array (  125 => 24,  113 => 18,  107 => 15,  102 => 13,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accuiel{% endblock %}

{% block body %}
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

<section class=\"information container\">
    <div class=\"information__container\">
        <div class=\"information__item\">
            <header class=\"information__header\">
                <i class='bx bx-plus information__icon'></i>
                <h3 class=\"information__title\">What's an accordion?</h3>
            </header>

            <div class=\"information__content\">
                <p class=\"information__description\">
                    An accordion always contains the category title, an expanded and a collapsed state, 
                    an icon indicating expansion, and the spacing between them.
                </p>
            </div>
        </div>

        <div class=\"information__item\">
            <header class=\"information__header\">
                <i class='bx bx-plus information__icon'></i>
                <h3 class=\"information__title\">When and how should it be used?</h3>
            </header>

            <div class=\"information__content\">
                <p class=\"information__description\">
                    It should be used when users only need a few key concepts or descriptions 
                    of the content on a single page.
                </p>
            </div>
        </div>

        <div class=\"information__item\">
            <header class=\"information__header\">
                <i class='bx bx-plus information__icon'></i>
                <h3 class=\"information__title\">What happens if the user clicks on a collapsed card while another card is open?</h3>
            </header>

            <div class=\"information__content\">
                <p class=\"information__description\">
                    It happens that the open card was closed, to give way to the information of the next 
                    open card, but there are different designs that prefer it the other way around.
                </p>
            </div>
        </div>

        <div class=\"information__item\">
            <header class=\"information__header\">
                <i class='bx bx-plus information__icon'></i>
                <h3 class=\"information__title\">How to choose an icon to indicate expansion?</h3>
            </header>

            <div class=\"information__content\">
                <p class=\"information__description\">
                    You must choose a different icon to open and close, so that the user 
                    understands what action he took.
                </p>
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
  padding: 2rem 1rem;
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


  ", "home/index.html.twig", "/opt/lampp/htdocs/ClubBeaute/templates/home/index.html.twig");
    }
}
