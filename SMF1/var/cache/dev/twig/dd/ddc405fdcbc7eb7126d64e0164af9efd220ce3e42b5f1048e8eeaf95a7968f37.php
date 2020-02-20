<?php

/* @Scolarite/Matiere/readm.html.twig */
class __TwigTemplate_d8aaa49bf1d2847d5792e9a5966904caa9ddfe704d936f54245486c82fdbc6a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseback.html.twig", "@Scolarite/Matiere/readm.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Scolarite/Matiere/readm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Scolarite/Matiere/readm.html.twig"));

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
                        <div class=\"page-title\">Liste des matieres</div>
                    </div>

                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"tabbable-line\">

                        <div class=\"tab-content\">
                            <div class=\"tab-pane active fontawesome-demo\" id=\"tab1\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"card card-box\">
                                            <div class=\"card-head\">
                                                <header>Liste des matieres</header>
                                                <div class=\"tools\">
                                                    <a class=\"fa fa-repeat btn-color box-refresh\"
                                                       href=\"javascript:\"></a>
                                                    <a class=\"t-collapse btn-color fa fa-chevron-down\"
                                                       href=\"javascript:\"></a>
                                                    <a class=\"t-close btn-color fa fa-times\"
                                                       href=\"javascript:\"></a>
                                                </div>
                                            </div>
                                            <div class=\"card-body \">

                                                <div class=\"table-scrollable\">
                                                    <table
                                                            class=\"table table-striped table-bordered table-hover table-checkable order-column valign-middle\"
                                                            id=\"example4\">
                                                        <thead>
                                                        <tr>
                                                            <th> ID </th>
                                                            <th> Nom </th>
                                                            <th> Nombre de Seance </th>
                                                            <th> Description </th>
                                                            <th> Coéfficient </th>
                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["matieres"]);
        foreach ($context['_seq'] as $context["_key"] => $context["matieres"]) {
            // line 51
            echo "                                                            <tr class=\"odd gradeX\">
                                                                <td class=\"patient-img\">
                                                                    ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["matieres"], "idmatiere", []), "html", null, true);
            echo "
                                                                </td>
                                                                <td class=\"left\"> ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["matieres"], "nom", []), "html", null, true);
            echo " </td>
                                                                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["matieres"], "nbrseance", []), "html", null, true);
            echo "</td>
                                                                <td class=\"left\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["matieres"], "description", []), "html", null, true);
            echo " </td>
                                                                <td class=\"left\">";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["matieres"], "coefficient", []), "html", null, true);
            echo " </td>
                                                                <td><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("scolarite_delete", ["idmatiere" => $this->getAttribute($context["matieres"], "idmatiere", [])]), "html", null, true);
            echo "\"> Supprimer </a></td>
                                                                <td><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("scolarite_modifier", ["idmatiere" => $this->getAttribute($context["matieres"], "idmatiere", [])]), "html", null, true);
            echo "\"> Modifier </a></td>


                                                            </tr>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matieres'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
        return "@Scolarite/Matiere/readm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 65,  131 => 60,  127 => 59,  123 => 58,  119 => 57,  115 => 56,  111 => 55,  106 => 53,  102 => 51,  98 => 50,  49 => 3,  40 => 2,  11 => 1,);
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
                        <div class=\"page-title\">Liste des matieres</div>
                    </div>

                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"tabbable-line\">

                        <div class=\"tab-content\">
                            <div class=\"tab-pane active fontawesome-demo\" id=\"tab1\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"card card-box\">
                                            <div class=\"card-head\">
                                                <header>Liste des matieres</header>
                                                <div class=\"tools\">
                                                    <a class=\"fa fa-repeat btn-color box-refresh\"
                                                       href=\"javascript:\"></a>
                                                    <a class=\"t-collapse btn-color fa fa-chevron-down\"
                                                       href=\"javascript:\"></a>
                                                    <a class=\"t-close btn-color fa fa-times\"
                                                       href=\"javascript:\"></a>
                                                </div>
                                            </div>
                                            <div class=\"card-body \">

                                                <div class=\"table-scrollable\">
                                                    <table
                                                            class=\"table table-striped table-bordered table-hover table-checkable order-column valign-middle\"
                                                            id=\"example4\">
                                                        <thead>
                                                        <tr>
                                                            <th> ID </th>
                                                            <th> Nom </th>
                                                            <th> Nombre de Seance </th>
                                                            <th> Description </th>
                                                            <th> Coéfficient </th>
                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        {% for matieres in matieres %}
                                                            <tr class=\"odd gradeX\">
                                                                <td class=\"patient-img\">
                                                                    {{ matieres.idmatiere }}
                                                                </td>
                                                                <td class=\"left\"> {{ matieres.nom }} </td>
                                                                <td>{{ matieres.nbrseance }}</td>
                                                                <td class=\"left\">{{ matieres.description }} </td>
                                                                <td class=\"left\">{{ matieres.coefficient }} </td>
                                                                <td><a href=\"{{  path('scolarite_delete',{'idmatiere':matieres.idmatiere}) }}\"> Supprimer </a></td>
                                                                <td><a href=\"{{  path('scolarite_modifier',{'idmatiere':matieres.idmatiere}) }}\"> Modifier </a></td>


                                                            </tr>
                                                        {% endfor %}
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "@Scolarite/Matiere/readm.html.twig", "C:\\wamp64\\www\\SMF1\\SMF1\\src\\ScolariteBundle\\Resources\\views\\Matiere\\readm.html.twig");
    }
}
