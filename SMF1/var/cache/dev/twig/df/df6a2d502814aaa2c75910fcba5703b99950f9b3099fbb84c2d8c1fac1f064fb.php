<?php

/* @Scolarite/Note/readn.html.twig */
class __TwigTemplate_e0c69bbcc3774d8a8658748a43d6335f1866b5069265a8af628ee814362b6f81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseback.html.twig", "@Scolarite/Note/readn.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Scolarite/Note/readn.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Scolarite/Note/readn.html.twig"));

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
                        <div class=\"page-title\">Liste des notes</div>
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
                                                <header>Liste des notes</header>
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
                                                            <th> Matiére </th>
                                                            <th> ID </th>
                                                            <th>Note 1 </th>
                                                            <th>Note 2 </th>
                                                            <th> Moyenne </th>

                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["notes"]);
        foreach ($context['_seq'] as $context["_key"] => $context["notes"]) {
            // line 52
            echo "                                                            <tr class=\"odd gradeX\">
                                                                <td class=\"left\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["notes"], "Matiere", []), "nom", []), "html", null, true);
            echo " </td>
                                                                <td class=\"patient-img\">
                                                                    ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["notes"], "idnote", []), "html", null, true);
            echo "
                                                                </td>
                                                                <td class=\"left\"> ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["notes"], "note1", []), "html", null, true);
            echo " </td>
                                                                <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["notes"], "note2", []), "html", null, true);
            echo "</td>
                                                                <td class=\"left\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["notes"], "moyenne", []), "html", null, true);
            echo " </td>
                                                                <td><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("scolarite_modifiern", ["idnote" => $this->getAttribute($context["notes"], "idnote", [])]), "html", null, true);
            echo "\"> Modifier </a></td>




                                                            </tr>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
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
        return "@Scolarite/Note/readn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 67,  128 => 60,  124 => 59,  120 => 58,  116 => 57,  111 => 55,  106 => 53,  103 => 52,  99 => 51,  49 => 3,  40 => 2,  11 => 1,);
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
                        <div class=\"page-title\">Liste des notes</div>
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
                                                <header>Liste des notes</header>
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
                                                            <th> Matiére </th>
                                                            <th> ID </th>
                                                            <th>Note 1 </th>
                                                            <th>Note 2 </th>
                                                            <th> Moyenne </th>

                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        {% for notes in notes %}
                                                            <tr class=\"odd gradeX\">
                                                                <td class=\"left\">{{ notes.Matiere.nom }} </td>
                                                                <td class=\"patient-img\">
                                                                    {{ notes.idnote }}
                                                                </td>
                                                                <td class=\"left\"> {{ notes.note1 }} </td>
                                                                <td>{{ notes.note2 }}</td>
                                                                <td class=\"left\">{{ notes.moyenne }} </td>
                                                                <td><a href=\"{{  path('scolarite_modifiern',{'idnote':notes.idnote}) }}\"> Modifier </a></td>




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

{% endblock %}", "@Scolarite/Note/readn.html.twig", "C:\\wamp64\\www\\SMF1\\SMF1\\src\\ScolariteBundle\\Resources\\views\\Note\\readn.html.twig");
    }
}
