<?php

/* @Main/FOSBundleuser/Security/login_content.html.twig */
class __TwigTemplate_0a8d087e66e9be5a34a880ed6770f1331dc77fb681d752a5ac296cc6316e2854 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/FOSBundleuser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/FOSBundleuser/Security/login_content.html.twig"));

        // line 2
        echo "<script type=\"text/javascript\">
    function visible(id1,id2) {
        var e1 = document.getElementById(id1);
        var e2 = document.getElementById(id2);
        e1.hidden = true;
        e2.hidden = false;
    }
</script>



<div class=\"limiter\">
    <div class=\"container-login100 page-background\">
        <div class=\"wrap-login100\">
            <form action=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"login100-form validate-form\">
                ";
        // line 17
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 18
            echo "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                ";
        }
        // line 20
        echo "                <span class=\"login100-form-logo\">
\t\t\t\t\t\t<img alt=\"\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/logo-2.png"), "html", null, true);
        echo "\">
\t\t\t\t\t</span>
                <span class=\"login100-form-title p-b-34 p-t-27\">
\t\t\t\t\t\tS'authentifier
\t\t\t\t\t</span>
                <div class=\"wrap-input100 validate-input\" data-validate=\"Enter username\">
                    <span class=\"fa fa-user\" data-placeholder=\"&#xf207;\"></span>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"
                           autocomplete=\"username\"
                           class=\"input100\"
                           placeholder=\"Nom d'utilisateur\" />
                </div>
                <div class=\"wrap-input100 validate-input\" data-validate=\"Enter password\">
                    <span class=\"fa fa-lock\" data-placeholder=\"&#xf191;\"></span>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\"
                           class=\"input100\"
                           placeholder=\"Mot de passe\"/>
                </div>

                <div class=\"container-login1000-form-btn\" >
                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"CONNEXION\" class=\"login100-form-btn\"/></br>

                    <span class=\"login100-form-title p-b-34 p-t-27\">
\t\t\t\t <p class=\"message\">Pas encore inscrit sur Genius?</br>Créer votre compte:</br>
                     <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">en tant que Parent</a></br>
                     <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register2");
        echo "\"> en tant que Eleve</a></br>
                     <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register1");
        echo "\"> en tant que Enseignant</a></p>
\t\t\t\t\t</span>

                </div>

            </form>
        </div>
    </div>
</div>








";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Main/FOSBundleuser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 47,  90 => 46,  86 => 45,  66 => 28,  56 => 21,  53 => 20,  47 => 18,  45 => 17,  41 => 16,  25 => 2,);
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
<script type=\"text/javascript\">
    function visible(id1,id2) {
        var e1 = document.getElementById(id1);
        var e2 = document.getElementById(id2);
        e1.hidden = true;
        e2.hidden = false;
    }
</script>



<div class=\"limiter\">
    <div class=\"container-login100 page-background\">
        <div class=\"wrap-login100\">
            <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" class=\"login100-form validate-form\">
                {% if csrf_token %}
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                {% endif %}
                <span class=\"login100-form-logo\">
\t\t\t\t\t\t<img alt=\"\" src=\"{{asset('assets/img/logo-2.png')}}\">
\t\t\t\t\t</span>
                <span class=\"login100-form-title p-b-34 p-t-27\">
\t\t\t\t\t\tS'authentifier
\t\t\t\t\t</span>
                <div class=\"wrap-input100 validate-input\" data-validate=\"Enter username\">
                    <span class=\"fa fa-user\" data-placeholder=\"&#xf207;\"></span>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\"
                           autocomplete=\"username\"
                           class=\"input100\"
                           placeholder=\"Nom d'utilisateur\" />
                </div>
                <div class=\"wrap-input100 validate-input\" data-validate=\"Enter password\">
                    <span class=\"fa fa-lock\" data-placeholder=\"&#xf191;\"></span>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\"
                           class=\"input100\"
                           placeholder=\"Mot de passe\"/>
                </div>

                <div class=\"container-login1000-form-btn\" >
                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"CONNEXION\" class=\"login100-form-btn\"/></br>

                    <span class=\"login100-form-title p-b-34 p-t-27\">
\t\t\t\t <p class=\"message\">Pas encore inscrit sur Genius?</br>Créer votre compte:</br>
                     <a href=\"{{ path('fos_user_registration_register') }}\">en tant que Parent</a></br>
                     <a href=\"{{ path('fos_user_registration_register2') }}\"> en tant que Eleve</a></br>
                     <a href=\"{{ path('fos_user_registration_register1') }}\"> en tant que Enseignant</a></p>
\t\t\t\t\t</span>

                </div>

            </form>
        </div>
    </div>
</div>








{#<div id=\"choix\" hidden=\"true\">#}
{#    <div style=\"text-align: center;margin-top: 8%;margin-bottom: 8%;\">#}
{#        <a href=\"{{ path('fos_user_registration_register') }}\" style=\"\" class=\"test\">#}
{#            <img src=\"{{ asset('img/parent.png') }}\" alt=\"\" style=\"margin-right: 40px;width: 20%;\">#}
{#        </a>#}
{#        <a href=\"{{ path('fos_user_registration_register2') }}\" style=\"\" class=\"test\">#}
{#            <img src=\"{{ asset('img/eleve.png') }}\" alt=\"\" style=\"margin-right: 40px;width: 20%;\">#}
{#        </a>#}
{#        <a href=\"{{ path('fos_user_registration_register1') }}\" style=\"\" class=\"test\">#}
{#            <img src=\"{{ asset('img/enseignant.png') }}\" alt=\"\" style=\"margin-left: 40px;width: 20%;\">#}
{#        </a>#}
{#    </div>#}
{#</div>#}", "@Main/FOSBundleuser/Security/login_content.html.twig", "C:\\wamp64\\www\\SMF1\\SMF1\\src\\MainBundle\\Resources\\views\\FOSBundleUser\\Security\\login_content.html.twig");
    }
}
