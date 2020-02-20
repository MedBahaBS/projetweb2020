<?php

/* @Gestion/Reclamation/afficheRfront.html.twig */
class __TwigTemplate_fd4d367b2d3992c887b1c40772321dc425ee366272b969d462c2501ab49e34fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Main/Default/index.html.twig", "@Gestion/Reclamation/afficheRfront.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Gestion/Reclamation/afficheRfront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Gestion/Reclamation/afficheRfront.html.twig"));

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
<!DOCTYPE html>
<html lang=\"en\">
<h1><center>La liste des réclamations</center></h1>
<!-- BEGIN HEAD -->






<div class=\"table-scrollable\">
    <table
            class=\"table table-striped table-bordered table-hover table-checkable order-column valign-middle\"
            id=\"example4\">
        <thead>



        <tr>

            <th> Id  </th>

            <th> Date de la réclamation </th>
            <th> Type de la réclamation </th>
            <th> Le contenu de la réclamation </th>
            <th>Action</th>


        </tr>
        </thead>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["r"] ?? $this->getContext($context, "r")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 35
            echo "

            <tr class=\"odd gradeX\">


                <td class=\"left\"> ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", []), "html", null, true);
            echo "</td>
                <td class=\"left\">";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "dateReclamation", []), "m/d/y"), "html", null, true);
            echo "</td>
                <td class=\"left\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "typeReclamation", []), "html", null, true);
            echo "</td>
                <td class=\"left\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "contenuReclamation", []), "html", null, true);
            echo "</td>



                <td>



                    <a href =\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_deleteRfront", ["id" => $this->getAttribute($context["i"], "id", [])]), "html", null, true);
            echo "\">
                        <button class=\"btn btn-danger btn-xs\">
                            <i class=\"fa fa-trash-o \"></i>
                        </button>
                    </a>

                </td>



            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
        </tbody>
    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Gestion/Reclamation/afficheRfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 64,  116 => 51,  105 => 43,  101 => 42,  97 => 41,  93 => 40,  86 => 35,  82 => 34,  49 => 3,  40 => 2,  11 => 1,);
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

<!DOCTYPE html>
<html lang=\"en\">
<h1><center>La liste des réclamations</center></h1>
<!-- BEGIN HEAD -->






<div class=\"table-scrollable\">
    <table
            class=\"table table-striped table-bordered table-hover table-checkable order-column valign-middle\"
            id=\"example4\">
        <thead>



        <tr>

            <th> Id  </th>

            <th> Date de la réclamation </th>
            <th> Type de la réclamation </th>
            <th> Le contenu de la réclamation </th>
            <th>Action</th>


        </tr>
        </thead>
        {% for i in r  %}


            <tr class=\"odd gradeX\">


                <td class=\"left\"> {{i.id }}</td>
                <td class=\"left\">{{ i.dateReclamation|date(\"m/d/y\")}}</td>
                <td class=\"left\">{{ i.typeReclamation }}</td>
                <td class=\"left\">{{ i.contenuReclamation }}</td>



                <td>



                    <a href =\"{{ path ('gestion_deleteRfront',{'id':i.id}) }}\">
                        <button class=\"btn btn-danger btn-xs\">
                            <i class=\"fa fa-trash-o \"></i>
                        </button>
                    </a>

                </td>



            </tr>

        {% endfor %}

        </tbody>
    </table>
</div>
{% endblock %}


", "@Gestion/Reclamation/afficheRfront.html.twig", "C:\\wamp64\\www\\SMF1\\SMF1\\src\\GestionBundle\\Resources\\views\\Reclamation\\afficheRfront.html.twig");
    }
}
