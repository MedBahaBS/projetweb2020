<?php

/* @Gestion/Reclamation/ajouterR.html.twig */
class __TwigTemplate_ef851c26f387666f89f42859e63e8f6ea12f3f9dcbcb64fe216615fe9b60e33f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Main/Default/index.html.twig", "@Gestion/Reclamation/ajouterR.html.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@Main/Default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Gestion/Reclamation/ajouterR.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Gestion/Reclamation/ajouterR.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "

    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12\">
            <div class=\"card card-box\">
                <div class=\"card-head\">
                    <header><h1><center>Ajouter une réclamation</center></h1></header>


                </div>
                ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

                <div class=\"card-body\" id=\"bar-parent\">
                    <form action=\"#\" id=\"form_sample_1\" class=\"form-horizontal\">

                        <div class=\"form-body\" >
                            <div class=\"form-group row\">

                                date reclamation        <span class=\"required\"> *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>

                                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateReclamation", []), 'widget', ["attr" => ["class" => "col-md-5 form-control input-height"]]);
        echo "

                            </div>
                            <div class=\"form-group row\">

                                Type de la reclamation  <span class=\"required\"> *&nbsp;&nbsp;&nbsp;&nbsp; </span>
                                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeReclamation", []), 'widget', ["attr" => ["class" => "col-md-5 form-control input-heigh"]]);
        echo "


                            </div>
                        </div>

                        <div class=\"form-group row\">

                            Contenu de la reclamation   <span class=\"required\"> *&nbsp;&nbsp;&nbsp;&nbsp; </span>
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contenuReclamation", []), 'widget', ["attr" => ["class" => "col-md-5 form-control input-heigh"]]);
        echo "


                        </div>
                </div>

                <div class=\"form-actions\">
                    <div class=\"row\">
                        <div class=\"offset-md-3 col-md-9\">
                            <button type=\"submit\"
                                    class=\"btn btn-info m-r-20\">Ajouter</button>






                        </div>
                    </div>
                </div>







            </div>
            ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Gestion/Reclamation/ajouterR.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 66,  95 => 38,  83 => 29,  74 => 23,  61 => 13,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@Main/Default/index.html.twig\" %}
{% block content  %}


    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12\">
            <div class=\"card card-box\">
                <div class=\"card-head\">
                    <header><h1><center>Ajouter une réclamation</center></h1></header>


                </div>
                {{ form_start(form) }}

                <div class=\"card-body\" id=\"bar-parent\">
                    <form action=\"#\" id=\"form_sample_1\" class=\"form-horizontal\">

                        <div class=\"form-body\" >
                            <div class=\"form-group row\">

                                date reclamation        <span class=\"required\"> *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>

                                {{ form_widget( form.dateReclamation, {'attr' : {'class':'col-md-5 form-control input-height'}}) }}

                            </div>
                            <div class=\"form-group row\">

                                Type de la reclamation  <span class=\"required\"> *&nbsp;&nbsp;&nbsp;&nbsp; </span>
                                {{ form_widget( form.typeReclamation, {'attr' : {'class':'col-md-5 form-control input-heigh'}}) }}


                            </div>
                        </div>

                        <div class=\"form-group row\">

                            Contenu de la reclamation   <span class=\"required\"> *&nbsp;&nbsp;&nbsp;&nbsp; </span>
                            {{ form_widget( form.contenuReclamation, {'attr' : {'class':'col-md-5 form-control input-heigh'}}) }}


                        </div>
                </div>

                <div class=\"form-actions\">
                    <div class=\"row\">
                        <div class=\"offset-md-3 col-md-9\">
                            <button type=\"submit\"
                                    class=\"btn btn-info m-r-20\">Ajouter</button>






                        </div>
                    </div>
                </div>







            </div>
            {{ form_end(form) }}
        </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
{% endblock %}
", "@Gestion/Reclamation/ajouterR.html.twig", "C:\\wamp64\\www\\SMF1\\SMF1\\src\\GestionBundle\\Resources\\views\\Reclamation\\ajouterR.html.twig");
    }
}
