<?php

/* @Gestion/Admin/statisticsReclamation.html.twig */
class __TwigTemplate_ce396a05d0e00ebb9c9a8b3597d63df475adb1608f0e26b879210731176cd204 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseback.html.twig", "@Gestion/Admin/statisticsReclamation.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Gestion/Admin/statisticsReclamation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Gestion/Admin/statisticsReclamation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_container($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back2/back/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
    <script type=\"text/javascript\">
        ";
        // line 8
        echo $this->env->getExtension('CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension')->gcDraw(($context["piechart"] ?? $this->getContext($context, "piechart")), "div_chart");
        echo "
    </script>


    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                Statistiques des réclamations
            </h1>
            <ol class=\"breadcrumb\">


            </ol>
        </section>
        <section class=\"content\">
            <!-- Default box -->
            <div class=\"row\">
                <!-- /.col (LEFT) -->
                <div class=\"col-md-12\">
                    <!-- LINE CHART -->
                    <div class=\"box box-info\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\"></h3>

                            <div class=\"box-tools pull-right\">
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                                </button>
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                            </div>
                        </div>
                        <div class=\"box-body chart-responsive\">
                            <div class=\"chart\" id=\"div_chart\"></div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->



                </div>
                <!-- /.col (RIGHT) -->
            </div>





        </section>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Gestion/Admin/statisticsReclamation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

    <link rel=\"stylesheet\" href=\"{{ asset('back2/back/dist/css/AdminLTE.min.css') }}\">
    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
    <script type=\"text/javascript\">
        {{ gc_draw(piechart, 'div_chart') }}
    </script>


    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                Statistiques des réclamations
            </h1>
            <ol class=\"breadcrumb\">


            </ol>
        </section>
        <section class=\"content\">
            <!-- Default box -->
            <div class=\"row\">
                <!-- /.col (LEFT) -->
                <div class=\"col-md-12\">
                    <!-- LINE CHART -->
                    <div class=\"box box-info\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\"></h3>

                            <div class=\"box-tools pull-right\">
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                                </button>
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                            </div>
                        </div>
                        <div class=\"box-body chart-responsive\">
                            <div class=\"chart\" id=\"div_chart\"></div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->



                </div>
                <!-- /.col (RIGHT) -->
            </div>





        </section>

    </div>

{% endblock %}
", "@Gestion/Admin/statisticsReclamation.html.twig", "C:\\wamp64\\www\\SMF1\\SMF1\\src\\GestionBundle\\Resources\\views\\Admin\\statisticsReclamation.html.twig");
    }
}
