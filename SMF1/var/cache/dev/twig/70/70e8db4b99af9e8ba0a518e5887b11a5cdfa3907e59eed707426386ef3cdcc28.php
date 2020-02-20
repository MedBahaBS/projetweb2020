<?php

/* basefront.html.twig */
class __TwigTemplate_c0f3d1b27ce86d4705499a6abc76577acd5cfab4695cee54c9f08ba60972c34e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basefront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basefront.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/open-iconic-bootstrap.min.css"), "html", null, true);
        echo " \" >
        <link  rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.theme.default.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/aos.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/ionicons.min.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/icomoon.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    </head>

    <body>
         ";
        // line 28
        $this->displayBlock('header', $context, $blocks);
        // line 84
        echo "
        ";
        // line 85
        $this->displayBlock('content', $context, $blocks);
        // line 88
        echo "
        ";
        // line 89
        $this->displayBlock('footer', $context, $blocks);
        // line 131
        echo "

        ";
        // line 133
        $this->displayBlock('javascripts', $context, $blocks);
        // line 152
        echo "
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Genius";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <meta charset=\"utf-8\">
            <meta content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" name=\"viewport\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 29
        echo "
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
                                     ";
        // line 49
        if (( !(null === $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED"))) {
            // line 50
            echo "                                         <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">se deconnecter</a></li>

                                     ";
        } else {
            // line 53
            echo "                                         <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">se connecter</a></li>

                                     ";
        }
        // line 56
        echo "                                 </div>
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
                             <li class=\"nav-item active\"><a href=\"#\" class=\"nav-link pl-0\">Accueil</a></li>
                             <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">A propos</a></li>
                             <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Professeur</a></li>
                             <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Cours</a></li>
                             <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Cantine</a></li>
                             <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Evenement</a></li>
                             <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Club</a></li>
                             <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Don</a></li>
                             <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Contact</a></li>
                         </ul>
                     </div>
                 </div>
             </nav>
         ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 86
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 89
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 90
        echo "
            <footer class=\"ftco-footer ftco-bg-dark ftco-section\">
                <div class=\"container\">
                    <div class=\"row mb-5\">
                        <div class=\"col-md-6 col-lg-3\">
                            <div class=\"ftco-footer-widget mb-5\">
                                <h2 class=\"ftco-heading-2\">Vous avez des questions?</h2>
                                <div class=\"block-23 mb-3\">
                                    <ul>
                                        <li><span class=\"icon icon-map-marker\"></span><span class=\"text\">Ariana</span></li>
                                        <li><a href=\"#\"><span class=\"icon icon-phone\"></span><span class=\"text\">+216 22 222 222</span></a></li>
                                        <li><a href=\"#\"><span class=\"icon icon-envelope\"></span><span class=\"text\">info@yourdomain.com</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-md-6 col-lg-3\">
                            <div class=\"ftco-footer-widget mb-5 ml-md-4\">
                                <h2 class=\"ftco-heading-2\">Liens</h2>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"#\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>Accueil</a></li>
                                    <li><a href=\"#\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>A propos</a></li>
                                    <li><a href=\"#\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>Contact</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12 text-center\">

                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"icon-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </footer>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 133
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
        echo "
            <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"  ></script>
            <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-migrate-3.0.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/aos.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.animateNumber.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scrollax.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>
            <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/google-map.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "basefront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 149,  386 => 148,  381 => 146,  377 => 145,  373 => 144,  369 => 143,  365 => 142,  361 => 141,  357 => 140,  353 => 139,  349 => 138,  345 => 137,  341 => 136,  337 => 135,  334 => 134,  325 => 133,  275 => 90,  266 => 89,  255 => 86,  246 => 85,  209 => 56,  202 => 53,  195 => 50,  193 => 49,  171 => 29,  162 => 28,  150 => 8,  141 => 7,  123 => 6,  110 => 152,  108 => 133,  104 => 131,  102 => 89,  99 => 88,  97 => 85,  94 => 84,  92 => 28,  85 => 24,  81 => 23,  77 => 22,  72 => 20,  67 => 18,  62 => 16,  58 => 15,  54 => 14,  49 => 12,  44 => 11,  42 => 7,  38 => 6,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">

    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Genius{% endblock %}</title>
        {% block stylesheets %}
            <meta charset=\"utf-8\">
            <meta content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" name=\"viewport\">
        {% endblock %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/open-iconic-bootstrap.min.css') }} \" >
        <link  rel=\"stylesheet\" href=\"{{ asset('css/animate.css') }}\">

        <link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/owl.theme.default.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/magnific-popup.css') }}\">

        <link rel=\"stylesheet\" href=\"{{ asset('css/aos.css') }}\">

        <link rel=\"stylesheet\" href=\"{{ asset('css/ionicons.min.css') }}\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/flaticon.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/icomoon.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/style.css') }}\">
    </head>

    <body>
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
                             <li class=\"nav-item active\"><a href=\"#\" class=\"nav-link pl-0\">Accueil</a></li>
                             <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">A propos</a></li>
                             <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Professeur</a></li>
                             <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Cours</a></li>
                             <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Cantine</a></li>
                             <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Evenement</a></li>
                             <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Club</a></li>
                             <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Don</a></li>
                             <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Contact</a></li>
                         </ul>
                     </div>
                 </div>
             </nav>
         {% endblock %}

        {% block content %}

        {% endblock %}

        {% block footer %}

            <footer class=\"ftco-footer ftco-bg-dark ftco-section\">
                <div class=\"container\">
                    <div class=\"row mb-5\">
                        <div class=\"col-md-6 col-lg-3\">
                            <div class=\"ftco-footer-widget mb-5\">
                                <h2 class=\"ftco-heading-2\">Vous avez des questions?</h2>
                                <div class=\"block-23 mb-3\">
                                    <ul>
                                        <li><span class=\"icon icon-map-marker\"></span><span class=\"text\">Ariana</span></li>
                                        <li><a href=\"#\"><span class=\"icon icon-phone\"></span><span class=\"text\">+216 22 222 222</span></a></li>
                                        <li><a href=\"#\"><span class=\"icon icon-envelope\"></span><span class=\"text\">info@yourdomain.com</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-md-6 col-lg-3\">
                            <div class=\"ftco-footer-widget mb-5 ml-md-4\">
                                <h2 class=\"ftco-heading-2\">Liens</h2>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"#\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>Accueil</a></li>
                                    <li><a href=\"#\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>A propos</a></li>
                                    <li><a href=\"#\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>Contact</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12 text-center\">

                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"icon-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </footer>

        {% endblock %}


        {% block javascripts %}

            <script src=\"{{ asset('js/jquery.min.js') }}\"  ></script>
            <script src=\"{{ asset('js/jquery-migrate-3.0.1.min.js') }}\"></script>
            <script src=\"{{ asset('js/popper.min.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
            <script src=\"{{ asset('js/jquery.easing.1.3.js') }}\"></script>
            <script src=\"{{ asset('js/jquery.waypoints.min.js') }}\"></script>
            <script src=\"{{ asset('js/jquery.stellar.min.js') }}\"></script>
            <script src=\"{{ asset('js/owl.carousel.min.js') }}\"></script>
            <script src=\"{{ asset('js/jquery.magnific-popup.min.js') }}\"></script>
            <script src=\"{{ asset('js/aos.js') }}\"></script>
            <script src=\"{{ asset('js/jquery.animateNumber.min.js') }}\"></script>
            <script src=\"{{ asset('js/scrollax.min.js') }}\"></script>
            <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>
            <script src=\"{{ asset('js/google-map.js') }}\"></script>
            <script src=\"{{ asset('js/main.js') }}\"></script>

        {% endblock %}

    </body>
</html>
", "basefront.html.twig", "C:\\wamp64\\www\\SMF1\\SMF1\\app\\Resources\\views\\basefront.html.twig");
    }
}
