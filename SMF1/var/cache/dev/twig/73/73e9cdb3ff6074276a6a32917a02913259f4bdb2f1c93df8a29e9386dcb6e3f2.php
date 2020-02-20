<?php

/* @Main/FOSBundleuser/Registration/register_content1.html.twig */
class __TwigTemplate_f833f1238c166098147ed020cd2b83b4b5a53a2e06ba079fe15777ab462e6ca4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/FOSBundleuser/Registration/register_content1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/FOSBundleuser/Registration/register_content1.html.twig"));

        // line 2
        echo "


<link  href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/signUp.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"></link>
<div class=\"login-page\">
    <h2 style=\"text-align: center\">Inscription Enseignant</h2>
    <div class=\"form\">
        ";
        // line 9
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? $this->getContext($context, "form")), [0 => "foundation_5_layout.html.twig"], true);
        // line 10
        echo "
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register1")]);
        echo "

        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", []), 'label');
        echo "
        <div class=\"errr\">
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", []), 'errors');
        echo "
        </div>
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", []), 'widget');
        echo "

        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'label');
        echo "
        <div class=\"errr\">
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'errors');
        echo "
        </div>
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget');
        echo "

        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'label');
        echo "
        <div class=\"errr\">
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'errors');
        echo "
        </div>
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'widget');
        echo "

        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'label');
        echo "
        <div class=\"errr\">
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'errors');
        echo "
        </div>
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'widget');
        echo "

        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'label');
        echo "
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'widget');
        echo "

        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pays", []), 'label');
        echo "
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pays", []), 'widget');
        echo "

        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", []), 'label');
        echo "
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", []), 'widget');
        echo "

        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), 'label');
        echo "
        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), 'widget');
        echo "

        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", []), 'label', ["label" => "Telephone"]);
        echo "
        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", []), 'widget');
        echo "

        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sexe", []), 'label');
        echo "
        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sexe", []), 'widget');
        echo "

        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nivexper", []), 'label', ["label" => "Niveau d'éxpérience"]);
        echo "
        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nivexper", []), 'widget');
        echo "

        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nivetud", []), 'label', ["label" => "Niveau d'étude"]);
        echo "
        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nivetud", []), 'widget');
        echo "




";
        // line 65
        echo "
        <button type=\"submit\" >S'inscrire</button>
        <p class=\"message\">Avez-vous un <a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">compte déja?</a></p>
        ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Main/FOSBundleuser/Registration/register_content1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 68,  186 => 67,  182 => 65,  174 => 59,  170 => 58,  165 => 56,  161 => 55,  156 => 53,  152 => 52,  147 => 50,  143 => 49,  138 => 47,  134 => 46,  129 => 44,  125 => 43,  120 => 41,  116 => 40,  111 => 38,  107 => 37,  102 => 35,  97 => 33,  92 => 31,  87 => 29,  82 => 27,  77 => 25,  72 => 23,  67 => 21,  62 => 19,  57 => 17,  52 => 15,  47 => 13,  42 => 11,  39 => 10,  37 => 9,  30 => 5,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}



<link  href=\"{{ asset('css/signUp.css') }}\" rel=\"stylesheet\"></link>
<div class=\"login-page\">
    <h2 style=\"text-align: center\">Inscription Enseignant</h2>
    <div class=\"form\">
        {% form_theme form 'foundation_5_layout.html.twig' %}

        {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register1')}) }}

        {{ form_label(form.username) }}
        <div class=\"errr\">
            {{ form_errors(form.username) }}
        </div>
        {{ form_widget(form.username) }}

        {{ form_label(form.email) }}
        <div class=\"errr\">
            {{ form_errors(form.email) }}
        </div>
        {{ form_widget(form.email) }}

        {{ form_label(form.plainPassword.first) }}
        <div class=\"errr\">
            {{ form_errors(form.plainPassword.first) }}
        </div>
        {{ form_widget(form.plainPassword.first) }}

        {{ form_label(form.plainPassword.second) }}
        <div class=\"errr\">
            {{ form_errors(form.plainPassword.second) }}
        </div>
        {{ form_widget(form.plainPassword.second) }}

        {{ form_label(form.nom) }}
        {{ form_widget(form.nom) }}

        {{ form_label(form.pays) }}
        {{ form_widget(form.pays) }}

        {{ form_label(form.ville) }}
        {{ form_widget(form.ville) }}

        {{ form_label(form.adresse) }}
        {{ form_widget(form.adresse) }}

        {{ form_label(form.tel,'Telephone') }}
        {{ form_widget(form.tel) }}

        {{ form_label(form.sexe) }}
        {{ form_widget(form.sexe) }}

        {{ form_label(form.nivexper,'Niveau d\\'éxpérience') }}
        {{ form_widget(form.nivexper) }}

        {{ form_label(form.nivetud,'Niveau d\\'étude') }}
        {{ form_widget(form.nivetud) }}




{#        {{ form_row(form.sexe,{'attr':{'disabled':'disabled','style':'display:none'},'label':false}) }}#}

        <button type=\"submit\" >S'inscrire</button>
        <p class=\"message\">Avez-vous un <a href=\"{{ path('fos_user_security_login') }}\">compte déja?</a></p>
        {{ form_end(form) }}
    </div>
</div>", "@Main/FOSBundleuser/Registration/register_content1.html.twig", "C:\\wamp64\\www\\SMF1\\SMF1\\src\\MainBundle\\Resources\\views\\FOSBundleUser\\Registration\\register_content1.html.twig");
    }
}
