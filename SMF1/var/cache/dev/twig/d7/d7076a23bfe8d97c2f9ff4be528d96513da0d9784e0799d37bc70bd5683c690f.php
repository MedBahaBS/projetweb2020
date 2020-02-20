<?php

/* @Scolarite/Matiere/ajoutm.html.twig */
class __TwigTemplate_40a3d4fab130760b18eddb167bd8d003f0959aede6215dc2a11c1a445b5dd95e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseback.html.twig", "@Scolarite/Matiere/ajoutm.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Scolarite/Matiere/ajoutm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Scolarite/Matiere/ajoutm.html.twig"));

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
        echo "    <div class=\"page-content-wrapper\">
        <div class=\"page-content\">
            <div class=\"page-bar\">
                <div class=\"page-title-breadcrumb\">
                    <div class=\" pull-left\">
                        <div class=\"page-title\">Ajouter Matiére</div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"card-box\">
                        <div class=\"card-head\">
                            <header>Ajouter Matiére</header>
                        </div>
                        <div class=\"card-body row\">
                            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                            <div class=\"card-body row\">
                                <div class=\"col-lg-6 p-t-20\">
                                    <div
                                            class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width\"><b><i>nom : </i></b>

                                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Nom", []), 'widget', ["attr" => ["class" => "mdl-textfield__input"]]);
        echo "

                                    </div>
                                </div>
                                <div class=\"col-lg-6 p-t-20\">
                                    <div
                                            class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width\"><b><i>Nombre de seance : </i></b>

                                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbrseance", []), 'widget', ["attr" => ["class" => "mdl-textfield__input"]]);
        echo "

                                    </div>
                                </div>
                                <div class=\"col-lg-6 p-t-20\">
                                    <div
                                            class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width\"><b><i>Description : </i></b>

                                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", []), 'widget', ["attr" => ["class" => "mdl-textfield__input"]]);
        echo "

                                    </div>
                                </div>
                                <div class=\"col-lg-6 p-t-20\">
                                    <div
                                            class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width\"><b><i>Coéfficient : </i></b>

                                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "coefficient", []), 'widget', ["attr" => ["class" => "mdl-textfield__input"]]);
        echo "

                                    </div>
                                </div>
                                <div class=\"col-lg-12 p-t-20 text-center\">
                                    <button type=\"submit\"
                                            class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink\">Ajouter </button>
                                    <button type=\"button\"
                                            class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default\">Annuler </button>
                                </div>
                            </div>

                            ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
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
        return "@Scolarite/Matiere/ajoutm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 61,  109 => 49,  98 => 41,  87 => 33,  76 => 25,  67 => 19,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseback.html.twig' %}
{% block container %}
    <div class=\"page-content-wrapper\">
        <div class=\"page-content\">
            <div class=\"page-bar\">
                <div class=\"page-title-breadcrumb\">
                    <div class=\" pull-left\">
                        <div class=\"page-title\">Ajouter Matiére</div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"card-box\">
                        <div class=\"card-head\">
                            <header>Ajouter Matiére</header>
                        </div>
                        <div class=\"card-body row\">
                            {{ form_start(form) }}
                            <div class=\"card-body row\">
                                <div class=\"col-lg-6 p-t-20\">
                                    <div
                                            class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width\"><b><i>nom : </i></b>

                                        {{ form_widget(form.Nom, { 'attr': {'class': 'mdl-textfield__input'} }) }}

                                    </div>
                                </div>
                                <div class=\"col-lg-6 p-t-20\">
                                    <div
                                            class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width\"><b><i>Nombre de seance : </i></b>

                                        {{ form_widget(form.nbrseance, { 'attr': {'class': 'mdl-textfield__input'} }) }}

                                    </div>
                                </div>
                                <div class=\"col-lg-6 p-t-20\">
                                    <div
                                            class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width\"><b><i>Description : </i></b>

                                        {{ form_widget(form.description, { 'attr': {'class': 'mdl-textfield__input'} }) }}

                                    </div>
                                </div>
                                <div class=\"col-lg-6 p-t-20\">
                                    <div
                                            class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width\"><b><i>Coéfficient : </i></b>

                                        {{ form_widget(form.coefficient, { 'attr': {'class': 'mdl-textfield__input'} }) }}

                                    </div>
                                </div>
                                <div class=\"col-lg-12 p-t-20 text-center\">
                                    <button type=\"submit\"
                                            class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink\">Ajouter </button>
                                    <button type=\"button\"
                                            class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default\">Annuler </button>
                                </div>
                            </div>

                            {{ form_end(form) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "@Scolarite/Matiere/ajoutm.html.twig", "C:\\wamp64\\www\\SMF1\\SMF1\\src\\ScolariteBundle\\Resources\\views\\Matiere\\ajoutm.html.twig");
    }
}
