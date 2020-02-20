<?php

/* @Gestion/Classe/ajouterC.html.twig */
class __TwigTemplate_5c4d60120d03db3a37eef5a4ea437b59256597992c3766a41063211e26c4a540 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseback.html.twig", "@Gestion/Classe/ajouterC.html.twig", 1);
        $this->blocks = [
            'container' => [$this, 'block_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "baseback.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Gestion/Classe/ajouterC.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Gestion/Classe/ajouterC.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_container($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "

    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12\">
            <div class=\"card card-box\">
                <div class=\"card-head\">
                  <center><header><h1>Ajouter une classe</h1></header></center>
                    <button id=\"panel-button\"
                            class=\"mdl-button mdl-js-button mdl-button--icon pull-right\"
                            data-upgraded=\",MaterialButton\">
                        <i class=\"material-icons\">more_vert</i>
                    </button>
                    <ul class=\"mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect\"
                        data-mdl-for=\"panel-button\">
                        <li class=\"mdl-menu__item\"><i class=\"material-icons\">assistant_photo</i>Action
                        </li>
                        <li class=\"mdl-menu__item\"><i class=\"material-icons\">print</i>Another action
                        </li>
                        <li class=\"mdl-menu__item\"><i class=\"material-icons\">favorite</i>Something else
                            here</li>
                    </ul>
                </div>
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

                <div class=\"card-body\" id=\"bar-parent\">
                    <form action=\"#\" id=\"form_sample_1\" class=\"form-horizontal\">

                        <div class=\"form-body\" >
                            <div class=\"form-group row\">

                                Libellé        <span class=\"required\"> *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>

                                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "libelle", []), 'widget', ["attr" => ["class" => "col-md-5 form-control input-height"]]);
        echo "

                            </div>
                            <div class=\"form-group row\">

                                Nombre d'éleves   <span class=\"required\"> *&nbsp;&nbsp;&nbsp;&nbsp; </span>
                                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Nombreeleve", []), 'widget', ["attr" => ["class" => "col-md-5 form-control input-heigh"]]);
        echo "


                            </div>
                        </div>

                        <div class=\"form-group row\">

                            Numéro du salle   <span class=\"required\"> *&nbsp;&nbsp;&nbsp;&nbsp; </span>
                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Numsalle", []), 'widget', ["attr" => ["class" => "col-md-5 form-control input-heigh"]]);
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
                </div></div>
            ";
        // line 65
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
        return "@Gestion/Classe/ajouterC.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 65,  107 => 50,  95 => 41,  86 => 35,  73 => 25,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"baseback.html.twig\" %}
{% block container  %}


    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12\">
            <div class=\"card card-box\">
                <div class=\"card-head\">
                  <center><header><h1>Ajouter une classe</h1></header></center>
                    <button id=\"panel-button\"
                            class=\"mdl-button mdl-js-button mdl-button--icon pull-right\"
                            data-upgraded=\",MaterialButton\">
                        <i class=\"material-icons\">more_vert</i>
                    </button>
                    <ul class=\"mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect\"
                        data-mdl-for=\"panel-button\">
                        <li class=\"mdl-menu__item\"><i class=\"material-icons\">assistant_photo</i>Action
                        </li>
                        <li class=\"mdl-menu__item\"><i class=\"material-icons\">print</i>Another action
                        </li>
                        <li class=\"mdl-menu__item\"><i class=\"material-icons\">favorite</i>Something else
                            here</li>
                    </ul>
                </div>
                {{ form_start(form) }}

                <div class=\"card-body\" id=\"bar-parent\">
                    <form action=\"#\" id=\"form_sample_1\" class=\"form-horizontal\">

                        <div class=\"form-body\" >
                            <div class=\"form-group row\">

                                Libellé        <span class=\"required\"> *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>

                                {{ form_widget( form.libelle, {'attr' : {'class':'col-md-5 form-control input-height'}}) }}

                            </div>
                            <div class=\"form-group row\">

                                Nombre d'éleves   <span class=\"required\"> *&nbsp;&nbsp;&nbsp;&nbsp; </span>
                                {{ form_widget( form.Nombreeleve, {'attr' : {'class':'col-md-5 form-control input-heigh'}}) }}


                            </div>
                        </div>

                        <div class=\"form-group row\">

                            Numéro du salle   <span class=\"required\"> *&nbsp;&nbsp;&nbsp;&nbsp; </span>
                            {{ form_widget( form.Numsalle, {'attr' : {'class':'col-md-5 form-control input-heigh'}}) }}


                        </div>
                </div>

                <div class=\"form-actions\">
                    <div class=\"row\">
                        <div class=\"offset-md-3 col-md-9\">
                            <button type=\"submit\"
                                    class=\"btn btn-info m-r-20\">Ajouter</button>

                        </div>
                    </div>
                </div></div>
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
{% endblock %}", "@Gestion/Classe/ajouterC.html.twig", "C:\\wamp64\\www\\SMF1\\SMF1\\src\\GestionBundle\\Resources\\views\\Classe\\ajouterC.html.twig");
    }
}
