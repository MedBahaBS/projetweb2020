<?php

/* MainBundle:Default:index.html.twig */
class __TwigTemplate_b8bdd0fa8e304ec4c61f988ed3097003c13acdb37049b2f36b1a39958fab5e4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("basefront.html.twig", "MainBundle:Default:index.html.twig", 1);
        $this->blocks = [
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "basefront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Default:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "      <div class=\"py-2 bg-primary\">
          <div class=\"container\">
              <div class=\"row no-gutters d-flex align-items-start align-items-center px-3 px-md-0\">
                  <div class=\"col-lg-12 d-block\">
                      <div class=\"row d-flex\">
                          <div class=\"col-md-5 pr-4 d-flex topper align-items-center\">
                              <div class=\"icon bg-fifth mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-map\"></span></div>
                              <span class=\"text\">Ariana City</span>
                          </div>
                          <div class=\"col-md pr-4 d-flex topper align-items-center\">
                              <div class=\"icon bg-secondary mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-paper-plane\"></span></div>
                              <span class=\"text\">youremail@email.com</span>
                          </div>
                          <div class=\"col-md pr-4 d-flex topper align-items-center\">
                              <div class=\"icon bg-tertiary mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-phone2\"></span></div>
                              <span class=\"text\">+216 22 222 222</span>
                          </div>
                          <div class=\"col-md pr-4 d-flex topper align-items-center\">
                              <div class=\"icon bg-tertiary mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-user\"></span></div>
                              ";
        // line 23
        if (( !(null === $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED"))) {
            // line 24
            echo "                                  <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">se deconnecter</a></li>

                              ";
        } else {
            // line 27
            echo "                                  <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">se connecter</a></li>

                              ";
        }
        // line 30
        echo "                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light\" id=\"ftco-navbar\">
          <div class=\"container d-flex align-items-center\">
              <a class=\"navbar-brand\" href=\"#\">Genius</a>
              <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                  <span class=\"oi oi-menu\"></span> Menu
              </button>
              <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
                  <ul class=\"navbar-nav ml-auto\">
                      ";
        // line 44
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PARENT")) {
            // line 45
            echo "                      <li class=\"nav-item active\"><a href=\"#\" class=\"nav-link pl-0\">Accueil</a></li>
                      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Professeur</a></li>
                      <li class=\"nav-item\"><a href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_ajouterR");
            echo "\" class=\"nav-link\">Réclamation</a></li>
                      ";
        }
        // line 49
        echo "                      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Cantine</a></li>
                      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Evenement</a></li>
                      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Club</a></li>
                      ";
        // line 52
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ENSEIGNANT")) {
            // line 53
            echo "                      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Matiére</a></li>
                          <li class=\"nav-item\"><a href=\"";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("scolariteajoutfrontn");
            echo "\" class=\"nav-link\">Ajouter Note</a></li>
                          <li class=\"nav-item\"><a href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("scolaritereadfrontn");
            echo "\" class=\"nav-link\">Consulter Notes</a></li>



                      ";
        }
        // line 60
        echo "                      <li class=\"nav-item\"><a href=\"\" class=\"nav-link\">Contact</a></li>
                  </ul>
              </div>
          </div>
      </nav>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 69
        echo "    <h4 align=\"center\" style=\"margin-top: 50px;margin-bottom: 50px;\">ici page principale</h4>
    <h4 align=\"center\" style=\"margin-top: 50px;margin-bottom: 50px;\">ici page principale</h4>
    <h4 align=\"center\" style=\"margin-top: 50px;margin-bottom: 50px;\">ici page principale</h4>
    <h4 align=\"center\" style=\"margin-top: 50px;margin-bottom: 50px;\">ici page principale</h4>
    <h4 align=\"center\" style=\"margin-top: 50px;margin-bottom: 50px;\">ici page principale</h4>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 69,  151 => 68,  136 => 60,  128 => 55,  124 => 54,  121 => 53,  119 => 52,  114 => 49,  109 => 47,  105 => 45,  103 => 44,  87 => 30,  80 => 27,  73 => 24,  71 => 23,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'basefront.html.twig' %}

  {% block header %}
      <div class=\"py-2 bg-primary\">
          <div class=\"container\">
              <div class=\"row no-gutters d-flex align-items-start align-items-center px-3 px-md-0\">
                  <div class=\"col-lg-12 d-block\">
                      <div class=\"row d-flex\">
                          <div class=\"col-md-5 pr-4 d-flex topper align-items-center\">
                              <div class=\"icon bg-fifth mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-map\"></span></div>
                              <span class=\"text\">Ariana City</span>
                          </div>
                          <div class=\"col-md pr-4 d-flex topper align-items-center\">
                              <div class=\"icon bg-secondary mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-paper-plane\"></span></div>
                              <span class=\"text\">youremail@email.com</span>
                          </div>
                          <div class=\"col-md pr-4 d-flex topper align-items-center\">
                              <div class=\"icon bg-tertiary mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-phone2\"></span></div>
                              <span class=\"text\">+216 22 222 222</span>
                          </div>
                          <div class=\"col-md pr-4 d-flex topper align-items-center\">
                              <div class=\"icon bg-tertiary mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-user\"></span></div>
                              {% if app.user is not null and is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                  <li><a href=\"{{ path('fos_user_security_logout') }}\">se deconnecter</a></li>

                              {% else %}
                                  <li><a href=\"{{ path('fos_user_security_login') }}\">se connecter</a></li>

                              {% endif %}
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light\" id=\"ftco-navbar\">
          <div class=\"container d-flex align-items-center\">
              <a class=\"navbar-brand\" href=\"#\">Genius</a>
              <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                  <span class=\"oi oi-menu\"></span> Menu
              </button>
              <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
                  <ul class=\"navbar-nav ml-auto\">
                      {% if is_granted('ROLE_PARENT') %}
                      <li class=\"nav-item active\"><a href=\"#\" class=\"nav-link pl-0\">Accueil</a></li>
                      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Professeur</a></li>
                      <li class=\"nav-item\"><a href=\"{{ path ('gestion_ajouterR') }}\" class=\"nav-link\">Réclamation</a></li>
                      {% endif %}
                      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Cantine</a></li>
                      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Evenement</a></li>
                      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Club</a></li>
                      {% if is_granted('ROLE_ENSEIGNANT') %}
                      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Matiére</a></li>
                          <li class=\"nav-item\"><a href=\"{{ path('scolariteajoutfrontn') }}\" class=\"nav-link\">Ajouter Note</a></li>
                          <li class=\"nav-item\"><a href=\"{{ path('scolaritereadfrontn') }}\" class=\"nav-link\">Consulter Notes</a></li>



                      {% endif %}
                      <li class=\"nav-item\"><a href=\"\" class=\"nav-link\">Contact</a></li>
                  </ul>
              </div>
          </div>
      </nav>
  {% endblock %}


{% block content %}
    <h4 align=\"center\" style=\"margin-top: 50px;margin-bottom: 50px;\">ici page principale</h4>
    <h4 align=\"center\" style=\"margin-top: 50px;margin-bottom: 50px;\">ici page principale</h4>
    <h4 align=\"center\" style=\"margin-top: 50px;margin-bottom: 50px;\">ici page principale</h4>
    <h4 align=\"center\" style=\"margin-top: 50px;margin-bottom: 50px;\">ici page principale</h4>
    <h4 align=\"center\" style=\"margin-top: 50px;margin-bottom: 50px;\">ici page principale</h4>


{% endblock %}

", "MainBundle:Default:index.html.twig", "C:\\wamp64\\www\\SMF1\\SMF1\\src\\MainBundle/Resources/views/Default/index.html.twig");
    }
}
