<?php

/* @Gestion/Classe/afficheC.html.twig */
class __TwigTemplate_76fac855118806530310f4534dcc27c565eab15f74e8ad4daa9ac97fd87c8e7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseback.html.twig", "@Gestion/Classe/afficheC.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Gestion/Classe/afficheC.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Gestion/Classe/afficheC.html.twig"));

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
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>

<!DOCTYPE html>
<html lang=\"en\">
<h1><center>La liste des classes</center></h1>
<!-- BEGIN HEAD -->
<form class=\"navbar-form\">
    <th> <input type=\"text\" id=\"search\" placeholder=\"Rechercher  ...\"></th>
    <button type=\"submit\" class=\"btn btn-white btn-round btn-just-icon\">
        <i class=\"material-icons\">search</i>
    </button>
</form>

<div class=\"row\">
    <div class=\"col-md-6 col-sm-6 col-6\">
        <div class=\"btn-group\">
            <a href =\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_ajouterC");
        echo "\" id='addRow'
               class=\"btn btn-info\">
                Add New <i class=\"fa fa-plus\"></i>
            </a>
        </div>
    </div>



    <div class=\"table-scrollable\">
        <table
                class=\"table table-striped table-bordered table-hover table-checkable order-column valign-middle\"
                id=\"tableacc\">
            <thead>



            <tr>

                <th> Id classe </th>

                <th> Libelle </th>
                <th> Nombreeleve </th>
                <th> Numsalle </th>
                <th>Action</th>


            </tr>
            </thead>
            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["c"] ?? $this->getContext($context, "c")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 49
            echo "

                <tr class=\"odd gradeX\">


                    <td class=\"left\"> ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "idclasse", []), "html", null, true);
            echo "</td>
                    <td class=\"left\"> ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "libelle", []), "html", null, true);
            echo "</td>
                    <td class=\"left\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "Nombreeleve", []), "html", null, true);
            echo "</td>
                    <td class=\"left\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "Numsalle", []), "html", null, true);
            echo "</td>

                    <td>

                        <a href =\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_modifierC", ["id" => $this->getAttribute($context["i"], "idclasse", [])]), "html", null, true);
            echo "\"
                           class=\"btn btn-primary btn-xs\">
                            <i class=\"fa fa-pencil\"></i></a>
                        </a>
                        <a href =\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_deleteC", ["id" => $this->getAttribute($context["i"], "idclasse", [])]), "html", null, true);
            echo "\"
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
        // line 75
        echo "
            </tbody>
        </table>

    </div>

    <script>
        \$(document).ready(function(){
            \$('#search').keyup(function(){
                search_table(\$(this).val());
            });
            function search_table(value){
                \$('#tableacc tbody tr').each(function(){
                    var found = 'false';
                    \$(this).each(function(){
                        if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                        {
                            found = 'true';
                        }
                    });
                    if(found == 'true')
                    {
                        \$(this).show();

                    }
                    else
                    {
                        \$(this).hide();

                    }
                });
            }
        });
    </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Gestion/Classe/afficheC.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 75,  138 => 65,  131 => 61,  124 => 57,  120 => 56,  116 => 55,  112 => 54,  105 => 49,  101 => 48,  69 => 19,  49 => 3,  40 => 2,  11 => 1,);
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
<script src=\"{{ asset('js/jquery.min.js') }}\"></script>

<!DOCTYPE html>
<html lang=\"en\">
<h1><center>La liste des classes</center></h1>
<!-- BEGIN HEAD -->
<form class=\"navbar-form\">
    <th> <input type=\"text\" id=\"search\" placeholder=\"Rechercher  ...\"></th>
    <button type=\"submit\" class=\"btn btn-white btn-round btn-just-icon\">
        <i class=\"material-icons\">search</i>
    </button>
</form>

<div class=\"row\">
    <div class=\"col-md-6 col-sm-6 col-6\">
        <div class=\"btn-group\">
            <a href =\"{{ path ('gestion_ajouterC')}}\" id='addRow'
               class=\"btn btn-info\">
                Add New <i class=\"fa fa-plus\"></i>
            </a>
        </div>
    </div>



    <div class=\"table-scrollable\">
        <table
                class=\"table table-striped table-bordered table-hover table-checkable order-column valign-middle\"
                id=\"tableacc\">
            <thead>



            <tr>

                <th> Id classe </th>

                <th> Libelle </th>
                <th> Nombreeleve </th>
                <th> Numsalle </th>
                <th>Action</th>


            </tr>
            </thead>
            {% for i in c %}


                <tr class=\"odd gradeX\">


                    <td class=\"left\"> {{ i.idclasse }}</td>
                    <td class=\"left\"> {{ i.libelle }}</td>
                    <td class=\"left\">{{ i.Nombreeleve }}</td>
                    <td class=\"left\">{{ i.Numsalle }}</td>

                    <td>

                        <a href =\"{{ path ('gestion_modifierC',{'id':i.idclasse}) }}\"
                           class=\"btn btn-primary btn-xs\">
                            <i class=\"fa fa-pencil\"></i></a>
                        </a>
                        <a href =\"{{ path ('gestion_deleteC',{'id':i.idclasse}) }}\"
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

    <script>
        \$(document).ready(function(){
            \$('#search').keyup(function(){
                search_table(\$(this).val());
            });
            function search_table(value){
                \$('#tableacc tbody tr').each(function(){
                    var found = 'false';
                    \$(this).each(function(){
                        if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                        {
                            found = 'true';
                        }
                    });
                    if(found == 'true')
                    {
                        \$(this).show();

                    }
                    else
                    {
                        \$(this).hide();

                    }
                });
            }
        });
    </script>
    {% endblock %}

", "@Gestion/Classe/afficheC.html.twig", "C:\\wamp64\\www\\SMF1\\SMF1\\src\\GestionBundle\\Resources\\views\\Classe\\afficheC.html.twig");
    }
}
