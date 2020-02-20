<?php

/* @Scolarite/Note/ajoutfrontn.html.twig */
class __TwigTemplate_5a74340184035b63e21f60ff9320cc5af579f2fc0c70cde23c06fffcae708e32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Main/Default/index.html.twig", "@Scolarite/Note/ajoutfrontn.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Scolarite/Note/ajoutfrontn.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Scolarite/Note/ajoutfrontn.html.twig"));

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
        echo "    <div class=\"page-content-wrapper\">
        <div class=\"page-content\">
            <div class=\"page-bar\">
                <div class=\"page-title-breadcrumb\">
                    <div class=\" pull-left\">
                        <div class=\"page-title\">Ajouter Note</div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"card-box\">
                        <div class=\"card-head\">
                            <header>Ajouter Note</header>
                        </div>
                        <div class=\"card-body row\">
                            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                            <div class=\"card-body row\">
                                <div class=\"col-lg-6 p-t-20\">
                                    <div
                                            class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width\"><b><i>note 1 : </i></b>

                                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "note1", []), 'widget', ["attr" => ["class" => "mdl-textfield__input"]]);
        echo "

                                    </div>
                                </div>
                                <div class=\"col-lg-6 p-t-20\">
                                    <div
                                            class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width\"><b><i>Note2 : </i></b>

                                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "note2", []), 'widget', ["attr" => ["class" => "mdl-textfield__input"]]);
        echo "

                                    </div>
                                </div>
                                <div class=\"col-lg-6 p-t-20\">
                                    <div
                                            class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width\"><b><i>Moyenne : </i></b>

                                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "moyenne", []), 'widget', ["attr" => ["class" => "mdl-textfield__input"]]);
        echo "

                                    </div>
                                </div>
                                <div class=\"col-lg-6 p-t-20\">
                                    <div
                                            class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width\"><b><i>Matiére : </i></b>

                                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "matiere", []), 'widget', ["attr" => ["class" => "mdl-textfield__input"]]);
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
        // line 62
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
        return "@Scolarite/Note/ajoutfrontn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 62,  109 => 49,  98 => 41,  87 => 33,  76 => 25,  67 => 19,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Main/Default/index.html.twig' %}
{% block content %}
    <div class=\"page-content-wrapper\">
        <div class=\"page-content\">
            <div class=\"page-bar\">
                <div class=\"page-title-breadcrumb\">
                    <div class=\" pull-left\">
                        <div class=\"page-title\">Ajouter Note</div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"card-box\">
                        <div class=\"card-head\">
                            <header>Ajouter Note</header>
                        </div>
                        <div class=\"card-body row\">
                            {{ form_start(form) }}
                            <div class=\"card-body row\">
                                <div class=\"col-lg-6 p-t-20\">
                                    <div
                                            class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width\"><b><i>note 1 : </i></b>

                                        {{ form_widget(form.note1, { 'attr': {'class': 'mdl-textfield__input'} }) }}

                                    </div>
                                </div>
                                <div class=\"col-lg-6 p-t-20\">
                                    <div
                                            class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width\"><b><i>Note2 : </i></b>

                                        {{ form_widget(form.note2, { 'attr': {'class': 'mdl-textfield__input'} }) }}

                                    </div>
                                </div>
                                <div class=\"col-lg-6 p-t-20\">
                                    <div
                                            class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width\"><b><i>Moyenne : </i></b>

                                        {{ form_widget(form.moyenne, { 'attr': {'class': 'mdl-textfield__input'} }) }}

                                    </div>
                                </div>
                                <div class=\"col-lg-6 p-t-20\">
                                    <div
                                            class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width\"><b><i>Matiére : </i></b>

                                        {{ form_widget(form.matiere, { 'attr': {'class': 'mdl-textfield__input'} }) }}

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
{% endblock %}", "@Scolarite/Note/ajoutfrontn.html.twig", "C:\\wamp64\\www\\SMF1\\SMF1\\src\\ScolariteBundle\\Resources\\views\\Note\\ajoutfrontn.html.twig");
    }
}
