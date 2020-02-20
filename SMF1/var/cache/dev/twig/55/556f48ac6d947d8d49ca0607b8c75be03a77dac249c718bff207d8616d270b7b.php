<?php

/* PdfBundle:Pdf:notes_pdf.html.twig */
class __TwigTemplate_abd7d9b3e35e71c623cd2fa682986108418b3b3313c8e47a29a2795a5610d1d3 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PdfBundle:Pdf:notes_pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PdfBundle:Pdf:notes_pdf.html.twig"));

        // line 1
        echo "
<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\">
</head>


<div class=\"col-lg-3 col-md-3 col-sm-12 title-area\">


 <h4>


  <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["webp"] ?? $this->getContext($context, "webp")), "html", null, true);
        echo "img/";
        echo "logo.png";
        echo "\" alt=\"author\" style=\"width: 20%;\">

 </h4>

</div>




<br>
<br>
<br>

<center><h1><u>Notes</u></h1></center>
<br>
<br>
<br>


<body>

 <h4>Cher enseignant ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", [], "method"), "html", null, true);
        echo ",</h4>
Voici toutes les notes




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


   </tr>
   </thead>
   <tbody>
   ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["notes"]);
        foreach ($context['_seq'] as $context["_key"] => $context["notes"]) {
            // line 59
            echo "    <tr class=\"odd gradeX\">
     <td class=\"left\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["notes"], "Matiere", []), "nom", []), "html", null, true);
            echo " </td>

     <td class=\"left\"> ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["notes"], "note1", []), "html", null, true);
            echo " </td>
     <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["notes"], "note2", []), "html", null, true);
            echo "</td>
     <td class=\"left\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["notes"], "moyenne", []), "html", null, true);
            echo " </td>





    </tr>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "   </tbody>
  </table>
 </div>


 <br><br>






</body>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>




<hr>
<b>.Genius.</b>


</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PdfBundle:Pdf:notes_pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 72,  112 => 64,  108 => 63,  104 => 62,  99 => 60,  96 => 59,  92 => 58,  67 => 36,  41 => 15,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\">
</head>


<div class=\"col-lg-3 col-md-3 col-sm-12 title-area\">


 <h4>


  <img src=\"{{ webp }}img/{{ 'logo.png' }}\" alt=\"author\" style=\"width: 20%;\">

 </h4>

</div>




<br>
<br>
<br>

<center><h1><u>Notes</u></h1></center>
<br>
<br>
<br>


<body>

 <h4>Cher enseignant {{ app.user.username() }},</h4>
Voici toutes les notes




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


   </tr>
   </thead>
   <tbody>
   {% for notes in notes %}
    <tr class=\"odd gradeX\">
     <td class=\"left\">{{ notes.Matiere.nom }} </td>

     <td class=\"left\"> {{ notes.note1 }} </td>
     <td>{{ notes.note2 }}</td>
     <td class=\"left\">{{ notes.moyenne }} </td>





    </tr>
   {% endfor %}
   </tbody>
  </table>
 </div>


 <br><br>






</body>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>




<hr>
<b>.Genius.</b>


</html>", "PdfBundle:Pdf:notes_pdf.html.twig", "C:\\wamp64\\www\\SMF1\\SMF1\\src\\PdfBundle/Resources/views/Pdf/notes_pdf.html.twig");
    }
}
