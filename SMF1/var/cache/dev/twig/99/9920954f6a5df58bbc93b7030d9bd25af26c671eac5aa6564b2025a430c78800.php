<?php

/* @Main/FOSBundleuser/Registration/register_content.html.twig */
class __TwigTemplate_e7bbf2c5138336843cbf9581e99185cd6a35072e17db4c7edcc79ed33a8d37e6 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/FOSBundleuser/Registration/register_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/FOSBundleuser/Registration/register_content.html.twig"));

        // line 2
        echo "





<link  href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/signUp.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"></link>
<div class=\"login-page\">
    <h2 style=\"text-align: center\">Inscription Parent/Eléve</h2>
    <div class=\"form\">
        ";
        // line 12
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? $this->getContext($context, "form")), [0 => "foundation_5_layout.html.twig"], true);
        // line 13
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register")]);
        echo "

        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", []), 'label');
        echo "
        <div class=\"errr\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", []), 'errors');
        echo "
        </div>
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", []), 'widget', ["attr" => ["pattern" => ".{6,}"]]);
        echo "
        ";
        // line 22
        echo "
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'label');
        echo "
        <div class=\"errr\">
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'errors');
        echo "
        </div>
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget');
        echo "

        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'label');
        echo "
        <div class=\"errr\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'errors');
        echo "
        </div>
        ";
        // line 34
        echo "        ";
        // line 35
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'widget');
        echo "
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'label');
        echo "
        <div class=\"errr\">
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'errors');
        echo "
        </div>
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'widget');
        echo "

        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'label');
        echo "
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'widget');
        echo "

        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pays", []), 'label');
        echo "
        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pays", []), 'widget');
        echo "

        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", []), 'label');
        echo "
        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", []), 'widget');
        echo "

        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), 'label');
        echo "
        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), 'widget');
        echo "

        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", []), 'label', ["label" => "Telephone"]);
        echo "
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", []), 'widget');
        echo "

        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sexe", []), 'label');
        echo "
        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sexe", []), 'widget');
        echo "

        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nivexper", []), 'row', ["attr" => ["disabled" => "disabled", "style" => "display:none"], "label" => false]);
        echo "
        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nivetud", []), 'row', ["attr" => ["disabled" => "disabled", "style" => "display:none"], "label" => false]);
        echo "

        <button type=\"submit\">S'inscrire</button>
        <p class=\"message\">Avez-vous un <a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">compte déja?</a></p>
        ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Main/FOSBundleuser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 65,  176 => 64,  170 => 61,  166 => 60,  161 => 58,  157 => 57,  152 => 55,  148 => 54,  143 => 52,  139 => 51,  134 => 49,  130 => 48,  125 => 46,  121 => 45,  116 => 43,  112 => 42,  107 => 40,  102 => 38,  97 => 36,  92 => 35,  90 => 34,  85 => 31,  80 => 29,  75 => 27,  70 => 25,  65 => 23,  62 => 22,  58 => 19,  53 => 17,  48 => 15,  42 => 13,  40 => 12,  33 => 8,  25 => 2,);
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
    <h2 style=\"text-align: center\">Inscription Parent/Eléve</h2>
    <div class=\"form\">
        {% form_theme form 'foundation_5_layout.html.twig' %}
        {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register')}) }}

        {{ form_label(form.username) }}
        <div class=\"errr\">
            {{ form_errors(form.username) }}
        </div>
        {{ form_widget(form.username,{'attr':{'pattern':'.{6,}'}}) }}
        {#pattern=\".{6,}\"
        Six or more characters#}

        {{ form_label(form.email) }}
        <div class=\"errr\">
            {{ form_errors(form.email) }}
        </div>
        {{ form_widget(form.email) }}

        {{ form_label(form.plainPassword.first) }}
        <div class=\"errr\">
            {{ form_errors(form.plainPassword.first) }}
        </div>
        {#{{ form_widget(form.plainPassword.first,{'attr':{'pattern':'(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}'}}) }}#}
        {#\"Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters\"#}
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

        {{ form_row(form.nivexper,{'attr':{'disabled':'disabled','style':'display:none'},'label':false}) }}
        {{ form_row(form.nivetud,{'attr':{'disabled':'disabled','style':'display:none'},'label':false}) }}

        <button type=\"submit\">S'inscrire</button>
        <p class=\"message\">Avez-vous un <a href=\"{{ path('fos_user_security_login') }}\">compte déja?</a></p>
        {{ form_end(form) }}
    </div>
</div>

", "@Main/FOSBundleuser/Registration/register_content.html.twig", "C:\\wamp64\\www\\SMF1\\SMF1\\src\\MainBundle\\Resources\\views\\FOSBundleUser\\Registration\\register_content.html.twig");
    }
}
