<?php

/* @Scolarite/Note/readfrontn.html.twig */
class __TwigTemplate_50bd9f42cbd54c50d6b52c72b72d8238786bb0061a2015247186fb0344079780 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("basefront.html.twig", "@Scolarite/Note/readfrontn.html.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "basefront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Scolarite/Note/readfrontn.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Scolarite/Note/readfrontn.html.twig"));

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
                                                <div class=\"table-scrollable\">
                                                    <table
                                                            class=\"table table-striped table-bordered table-hover table-checkable order-column valign-middle\"
                                                            id=\"example4\">
                                                        <thead>
                                                        <tr>
                                                            <th> Matiére </th>

                                                            <th>Note 1 </th>
                                                            <th>Note 2 </th>
                                                            <th> Moyenne </th>

                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["notes"]);
        foreach ($context['_seq'] as $context["_key"] => $context["notes"]) {
            // line 21
            echo "                                                            <tr class=\"odd gradeX\">
                                                                <td class=\"left\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["notes"], "Matiere", []), "nom", []), "html", null, true);
            echo " </td>

                                                                <td class=\"left\"> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["notes"], "note1", []), "html", null, true);
            echo " </td>
                                                                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["notes"], "note2", []), "html", null, true);
            echo "</td>
                                                                <td class=\"left\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["notes"], "moyenne", []), "html", null, true);
            echo " </td>
                                                                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("scolarite_modifierfrontn", ["idnote" => $this->getAttribute($context["notes"], "idnote", [])]), "html", null, true);
            echo "\"> Modifier </a></td>





                                                            </tr>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                                                        </tbody>
                                                    </table>
                                                    <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pdf");
        echo "\">Télécharger en pdf</a>
                                                </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Scolarite/Note/readfrontn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 37,  106 => 35,  92 => 27,  88 => 26,  84 => 25,  80 => 24,  75 => 22,  72 => 21,  68 => 20,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'basefront.html.twig' %}
{% block content %}

                                                <div class=\"table-scrollable\">
                                                    <table
                                                            class=\"table table-striped table-bordered table-hover table-checkable order-column valign-middle\"
                                                            id=\"example4\">
                                                        <thead>
                                                        <tr>
                                                            <th> Matiére </th>

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

                                                                <td class=\"left\"> {{ notes.note1 }} </td>
                                                                <td>{{ notes.note2 }}</td>
                                                                <td class=\"left\">{{ notes.moyenne }} </td>
                                                                <td><a href=\"{{  path('scolarite_modifierfrontn',{'idnote':notes.idnote}) }}\"> Modifier </a></td>





                                                            </tr>
                                                        {% endfor %}
                                                        </tbody>
                                                    </table>
                                                    <a href=\"{{ path('pdf') }}\">Télécharger en pdf</a>
                                                </div>


{% endblock %}", "@Scolarite/Note/readfrontn.html.twig", "C:\\wamp64\\www\\SMF1\\SMF1\\src\\ScolariteBundle\\Resources\\views\\Note\\readfrontn.html.twig");
    }
}
