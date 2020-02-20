<?php

/* baseback.html.twig */
class __TwigTemplate_6ebbb6550b8b11527856405b46d2cc06b47bd2c0f9ce43fc2323c7c3242c29f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'container' => [$this, 'block_container'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseback.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseback.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<!-- BEGIN HEAD -->


<!-- Mirrored from radixtouch.in/templates/admin/smart/source/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Jan 2020 11:27:28 GMT -->
<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
    <meta name=\"description\" content=\"Responsive Admin Template\" />
    <meta name=\"author\" content=\"SmartUniversity\" />
    <title>Genius University | Bootstrap Responsive Admin Template</title>
    <!-- google font -->
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- icons -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/fonts/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/fonts/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\"rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/fonts/material-design-icons/material-icon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!--bootstrap -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/summernote/summernote.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Material Design Lite CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/material/material.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/css/material_style.css"), "html", null, true);
        echo "\">
    <!-- inbox style -->
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/css/pages/inbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Theme Styles -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/css/theme/light/theme_style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"rt_style_components\" type=\"text/css\" />
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/css/theme/light/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/css/theme/light/theme-color.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- favicon -->
    <link rel=\"shortcut icon\" href=\"http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico\" />
</head>
<!-- END HEAD -->

<body
        class=\"page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo\">
<div class=\"page-wrapper\">
    <!-- start header -->
    <div class=\"page-header navbar navbar-fixed-top\">
        <div class=\"page-header-inner \">
            <!-- logo start -->
            <div class=\"page-logo\">
                <a href=\"index-2.html\">
                    <span class=\"logo-icon material-icons fa-rotate-45\">school</span>
                    <span class=\"logo-default\">Smart</span> </a>
            </div>
            <!-- logo end -->
            <ul class=\"nav navbar-nav navbar-left in\">
                <li><a href=\"#\" class=\"menu-toggler sidebar-toggler\"><i class=\"icon-menu\"></i></a></li>
            </ul>
            <form class=\"search-form-opened\" action=\"#\" method=\"GET\">
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search...\" name=\"query\">
                    <span class=\"input-group-btn\">
\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"btn submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-magnifier\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</span>
                </div>
            </form>
            <!-- start mobile menu -->
            <a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\"
               data-target=\".navbar-collapse\">
                <span></span>
            </a>
            <!-- end mobile menu -->
            <!-- start header menu -->
            <div class=\"top-menu\">
                <ul class=\"nav navbar-nav pull-right\">
                    <li><a href=\"javascript:;\" class=\"fullscreen-btn\"><i class=\"fa fa-arrows-alt\"></i></a></li>
                    <!-- start language menu -->
                    <li class=\"dropdown language-switch\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"> <img
                                    src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/img/flags/gb.png"), "html", null, true);
        echo "\" class=\"position-left\" alt=\"\"> English <span
                                    class=\"fa fa-angle-down\"></span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a class=\"deutsch\"><img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/img/flags/de.png"), "html", null, true);
        echo "\" alt=\"\"> Deutsch</a>
                            </li>
                            <li>
                                <a class=\"ukrainian\"><img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/img/flags/ua.png"), "html", null, true);
        echo "\" alt=\"\"> Українська</a>
                            </li>
                            <li>
                                <a class=\"english\"><img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/img/flags/gb.png"), "html", null, true);
        echo "\" alt=\"\"> English</a>
                            </li>
                            <li>
                                <a class=\"espana\"><img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/img/flags/es.png"), "html", null, true);
        echo "\" alt=\"\"> España</a>
                            </li>
                            <li>
                                <a class=\"russian\"><img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/img/flags/ru.png"), "html", null, true);
        echo "\" alt=\"\"> Русский</a>
                            </li>
                        </ul>
                    </li>
                    <!-- end language menu -->
                    <!-- start notification dropdown -->
                    <li class=\"dropdown dropdown-extended dropdown-notification\" id=\"header_notification_bar\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\"
                           data-close-others=\"true\">
                            <i class=\"fa fa-bell-o\"></i>
                            <span class=\"badge headerBadgeColor1\"> 6 </span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"external\">
                                <h3><span class=\"bold\">Notifications</span></h3>
                                <span class=\"notification-label purple-bgcolor\">New 6</span>
                            </li>
                            <li>
                                <ul class=\"dropdown-menu-list small-slimscroll-style\" data-handle-color=\"#637283\">
                                    <li>
                                        <a href=\"javascript:;\">
                                            <span class=\"time\">just now</span>
                                            <span class=\"details\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon circle deepPink-bgcolor\"><i
                                                                class=\"fa fa-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\tCongratulations!. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <span class=\"time\">3 mins</span>
                                            <span class=\"details\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon circle purple-bgcolor\"><i
                                                                class=\"fa fa-user o\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<b>John Micle </b>is now following you. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <span class=\"time\">7 mins</span>
                                            <span class=\"details\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon circle blue-bgcolor\"><i
                                                                class=\"fa fa-comments-o\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Sneha Jogi </b>sent you a message. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <span class=\"time\">12 mins</span>
                                            <span class=\"details\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon circle pink\"><i
                                                                class=\"fa fa-heart\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Ravi Patel </b>like your photo. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <span class=\"time\">15 mins</span>
                                            <span class=\"details\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon circle yellow\"><i
                                                                class=\"fa fa-warning\"></i></span> Warning! </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <span class=\"time\">10 hrs</span>
                                            <span class=\"details\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon circle red\"><i
                                                                class=\"fa fa-times\"></i></span> Application error. </span>
                                        </a>
                                    </li>
                                </ul>
                                <div class=\"dropdown-menu-footer\">
                                    <a href=\"javascript:void(0)\"> All notifications </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- end notification dropdown -->
                    <!-- start message dropdown -->
                    <li class=\"dropdown dropdown-extended dropdown-inbox\" id=\"header_inbox_bar\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\"
                           data-close-others=\"true\">
                            <i class=\"fa fa-envelope-o\"></i>
                            <span class=\"badge headerBadgeColor2\"> 2 </span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"external\">
                                <h3><span class=\"bold\">Messages</span></h3>
                                <span class=\"notification-label cyan-bgcolor\">New 2</span>
                            </li>
                            <li>
                                <ul class=\"dropdown-menu-list small-slimscroll-style\" data-handle-color=\"#637283\">
                                    <li>
                                        <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"photo\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/img/prof/prof2.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"subject\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"from\"> Sarah Smith </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">Just Now </span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"message\"> Jatin I found you on LinkedIn... </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"photo\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/img/prof/prof3.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"subject\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"from\"> John Deo </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">16 mins </span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"message\"> Fwd: Important Notice Regarding Your Domain
\t\t\t\t\t\t\t\t\t\t\t\t\tName... </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"photo\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/img/prof/prof1.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"subject\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"from\"> Rajesh </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">2 hrs </span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"message\"> pls take a print of attachments. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"photo\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/img/prof/prof8.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"subject\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"from\"> Lina Smith </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">40 mins </span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"message\"> Apply for Ortho Surgeon </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"photo\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/img/prof/prof5.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"subject\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"from\"> Jacob Ryan </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">46 mins </span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"message\"> Request for leave application. </span>
                                        </a>
                                    </li>
                                </ul>
                                <div class=\"dropdown-menu-footer\">
                                    <a href=\"#\"> All Messages </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- end message dropdown -->
                    <!-- start manage user dropdown -->
                    <li class=\"dropdown dropdown-user\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\"
                           data-close-others=\"true\">
                            <img alt=\"\" class=\"img-circle \" src=\"../assets/img/dp.jpg\" />
                            <span class=\"username username-hide-on-mobile\"> ";
        // line 262
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
        echo " </span>
                            <i class=\"fa fa-angle-down\"></i>
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-default\">
                            <li>
                                <a href=\"user_profile.html\">
                                    <i class=\"icon-user\"></i> Profile </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"icon-settings\"></i> Settings
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"icon-directions\"></i> Help
                                </a>
                            </li>
                            <li class=\"divider\"> </li>
                            <li>
                                <a href=\"lock_screen.html\">
                                    <i class=\"icon-lock\"></i> Lock
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 287
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">
                                    <i class=\"icon-logout\"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- end manage user dropdown -->
                    <li class=\"dropdown dropdown-quick-sidebar-toggler\">
                        <a id=\"headerSettingButton\" class=\"mdl-button mdl-js-button mdl-button--icon pull-right\"
                           data-upgraded=\",MaterialButton\">
                            <i class=\"material-icons\">more_vert</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- start color quick setting -->
    <div class=\"settingSidebar\">
        <a href=\"javascript:void(0)\" class=\"settingPanelToggle\"> <i class=\"fa fa-spin fa-cog\"></i>
        </a>
        <div class=\"settingSidebar-body ps-container ps-theme-default\">
            <div class=\" fade show active\">
                <div class=\"setting-panel-header\">Setting Panel
                </div>
                <div class=\"quick-setting slimscroll-style\">
                    <ul id=\"themecolors\">
                        <li>
                            <p class=\"sidebarSettingTitle\">Sidebar Color</p>
                        </li>
                        <li class=\"complete\">
                            <div class=\"theme-color sidebar-theme\">
                                <a href=\"#\" data-theme=\"white\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"dark\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"blue\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"indigo\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"cyan\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"green\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"red\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                            </div>
                        </li>
                        <li>
                            <p class=\"sidebarSettingTitle\">Header Brand color</p>
                        </li>
                        <li class=\"theme-option\">
                            <div class=\"theme-color logo-theme\">
                                <a href=\"#\" data-theme=\"logo-white\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"logo-dark\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"logo-blue\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"logo-indigo\"><span class=\"head\"></span><span
                                            class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"logo-cyan\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"logo-green\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"logo-red\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                            </div>
                        </li>
                        <li>
                            <p class=\"sidebarSettingTitle\">Header color</p>
                        </li>
                        <li class=\"theme-option\">
                            <div class=\"theme-color header-theme\">
                                <a href=\"#\" data-theme=\"header-white\"><span class=\"head\"></span><span
                                            class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"header-dark\"><span class=\"head\"></span><span
                                            class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"header-blue\"><span class=\"head\"></span><span
                                            class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"header-indigo\"><span class=\"head\"></span><span
                                            class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"header-cyan\"><span class=\"head\"></span><span
                                            class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"header-green\"><span class=\"head\"></span><span
                                            class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"header-red\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end color quick setting -->
    <!-- start page container -->
    <div class=\"page-container\">
        <!-- start sidebar menu -->
        <div class=\"sidebar-container\">
            <div class=\"sidemenu-container navbar-collapse collapse fixed-menu\">
                <div id=\"remove-scroll\" class=\"left-sidemenu\">
                    <ul class=\"sidemenu  page-header-fixed slimscroll-style\" data-keep-expanded=\"false\"
                        data-auto-scroll=\"true\" data-slide-speed=\"200\" style=\"padding-top: 20px\">
                        <li class=\"sidebar-toggler-wrapper hide\">
                            <div class=\"sidebar-toggler\">
                                <span></span>
                            </div>
                        </li>
                        <li class=\"sidebar-user-panel\">
                            <div class=\"user-panel\">
                                <div class=\"pull-left image\">
                                    <img src=\"http://radixtouch.in/templates/admin/smart/source/assets/img/dp.jpg\" class=\"img-circle user-img-circle\"
                                         alt=\"User Image\" />
                                </div>
                                <div class=\"pull-left info\">
                                    <p> ";
        // line 389
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
        echo "</p>
                                    <a href=\"#\"><i class=\"fa fa-circle user-online\"></i><span class=\"txtOnline\">
\t\t\t\t\t\t\t\t\t\t\t\tOnline</span></a>
                                </div>
                            </div>
                        </li>



                        <li class=\"nav-item   \">
                            <a href=\"index.html\" class=\"nav-link \">
                                <span class=\"title\">Acceuil</span>
                            </a>
                        </li>



                        <li class=\"nav-item\">
                            <a href=\"event.html\" class=\"nav-link nav-toggle\">
                                <span class=\"title\">Evenements</span><span class=\"arrow\"></span>
                            </a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"all_professors.html\" class=\"nav-link \"> <span class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\tliste des evenements</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"add_professor.html\" class=\"nav-link \"> <span class=\"title\">ajouter
\t\t\t\t\t\t\t\t\t\t\t\tevenement</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"add_professor_bootstrap.html\" class=\"nav-link \"> <span
                                                class=\"title\">ajouter evenement Bootstrap</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"edit_professor.html\" class=\"nav-link \"> <span class=\"title\">modifier
\t\t\t\t\t\t\t\t\t\t\t\tevenement</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"professor_profile.html\" class=\"nav-link \"> <span class=\"title\">profile
\t\t\t\t\t\t\t\t\t\t\t\tevenement</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link nav-toggle\">
                                <span class=\"title\">Gestion Scolarité</span> <span class=\"arrow\"></span>
                            </a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"afficherM\" class=\"nav-link \"> <span class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\tliste des Matieress</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"";
        // line 449
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("scolarite_ajoutm");
        echo "\" class=\"nav-link \"> <span class=\"title\">ajouter une
\t\t\t\t\t\t\t\t\t\t\t\tmatiere</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"";
        // line 454
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("scolarite_readn");
        echo "\" class=\"nav-link \"> <span
                                                class=\"title\">liste des notes</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"ajoutN\" class=\"nav-link \"> <span class=\"title\">ajouter une note
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"professor_profile.html\" class=\"nav-link \"> <span class=\"title\">profile
\t\t\t\t\t\t\t\t\t\t\t\tenseignant</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link nav-toggle\">
                                <span class=\"title\">Classe&reclamation</span><span class=\"arrow\"></span></a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"";
        // line 475
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_afficheC");
        echo "\" class=\"nav-link \"> <span class=\"title\">liste
\t\t\t\t\t\t\t\t\t\t\t\tdes classes</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"";
        // line 480
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_ajouterC");
        echo "\" class=\"nav-link \"> <span class=\"title\">ajouter
\t\t\t\t\t\t\t\t\t\t\t\tclasse</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"afficheR\" class=\"nav-link \"> <span class=\"title\">Afficher les réclamations</span>
                                    </a>
                                </li>

                                <li class=\"nav-item\">
                                    <a href=\"";
        // line 490
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("statistique_reclamation");
        echo "\" > <span class=\"fa fa-pie-chart\">Statistiques réclamations</span>
                                    </a>
                                </li>






                            </ul>
                        </li>

                        <li class=\"nav-item active open\">
                            <a href=\"#\" class=\"nav-link nav-toggle\">
                                <span class=\"title\"> Gestion des Cours</span><span class=\"arrow\"></span></a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"listcour\" class=\"nav-link \"> <span class=\"title\">liste
\t\t\t\t\t\t\t\t\t\t\t\tdes cours</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"ajoutcour\" class=\"nav-link \"> <span class=\"title\">ajouter
\t\t\t\t\t\t\t\t\t\t\t\tcours</span>
                                    </a>
                                </li>
                                <li class=\"nav-item active open\">
                                    <a href=\"add_course_bootstrap.html\" class=\"nav-link \"> <span class=\"title\">ajouter
\t\t\t\t\t\t\t\t\t\t\t\tCours Bootstrap</span>
                                        <span class=\"selected\"></span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"modifiercour\" class=\"nav-link \"> <span class=\"title\">modifier
\t\t\t\t\t\t\t\t\t\t\t\tCours</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        </li>
                        <li class=\"nav-item active open\">
                        <li class=\"nav-item active open\">
                            <a href=\"#\" class=\"nav-link nav-toggle\">
                                <span class=\"title\"> Gestion des Series</span><span class=\"arrow\"></span></a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"listserie\" class=\"nav-link \"> <span class=\"title\">liste
\t\t\t\t\t\t\t\t\t\t\t\tdes series </span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"ajoutserie\" class=\"nav-link \"> <span class=\"title\">ajouter
\t\t\t\t\t\t\t\t\t\t\t\tserie </span>
                                    </a>
                                </li>
                                <li class=\"nav-item active open\">
                                    <a href=\"ajoutserie\" class=\"nav-link \"> <span class=\"title\"> ajout
                                            serie Bootstrap</span>
                                        <span class=\"selected\"></span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"modifierserie\" class=\"nav-link \"> <span class=\"title\">modifier
\t\t\t\t\t\t\t\t\t\t\t\tserie </span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class=\"nav-item active open\">
                            <a href=\"#\" class=\"nav-link nav-toggle\">
                                <span class=\"title\"> Gestion des avis </span><span class=\"arrow\"></span></a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"listavis\" class=\"nav-link \"> <span class=\"title\">liste
\t\t\t\t\t\t\t\t\t\t\t\tdes avis</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"ajoutavis\" class=\"nav-link \"> <span class=\"title\">ajouter
\t\t\t\t\t\t\t\t\t\t\t\tavis</span>
                                    </a>
                                </li>
                                <li class=\"nav-item active open\">
                                    <a href=\"add_course_bootstrap.html\" class=\"nav-link \"> <span class=\"title\">ajouter
\t\t\t\t\t\t\t\t\t\t\t\tavis Bootstrap</span>
                                        <span class=\"selected\"></span>
                                    </a>
                                </li>


                            </ul>
                        </li>
                        </li>
                        <li class=\"nav-item active open\">
                            <a href=\"#\" class=\"nav-link nav-toggle\">
                                <span class=\"title\">Cantine</span><span class=\"arrow\"></span></a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"all_courses.html\" class=\"nav-link \"> <span class=\"title\">liste
\t\t\t\t\t\t\t\t\t\t\t\tdes menus</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"add_course.html\" class=\"nav-link \"> <span class=\"title\">ajouter
\t\t\t\t\t\t\t\t\t\t\t\tMenu</span>
                                    </a>
                                </li>
                                <li class=\"nav-item active open\">
                                    <a href=\"add_course_bootstrap.html\" class=\"nav-link \"> <span class=\"title\">ajouter
\t\t\t\t\t\t\t\t\t\t\t\tMenu Bootstrap</span>
                                        <span class=\"selected\"></span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"edit_course.html\" class=\"nav-link \"> <span class=\"title\">modifier
\t\t\t\t\t\t\t\t\t\t\t\tMenu</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"all_courses.html\" class=\"nav-link \"> <span class=\"title\">liste
\t\t\t\t\t\t\t\t\t\t\t\tdes plats</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"add_course.html\" class=\"nav-link \"> <span class=\"title\">ajouter
\t\t\t\t\t\t\t\t\t\t\t\tplat</span>
                                    </a>
                                </li>
                                <li class=\"nav-item active open\">
                                    <a href=\"add_course_bootstrap.html\" class=\"nav-link \"> <span class=\"title\">ajouter
\t\t\t\t\t\t\t\t\t\t\t\tplat Bootstrap</span>
                                        <span class=\"selected\"></span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"edit_course.html\" class=\"nav-link \"> <span class=\"title\">modifier
\t\t\t\t\t\t\t\t\t\t\t\tplat</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link nav-toggle\">
                                <span class=\"title\">Clubs</span><span class=\"arrow\"></span></a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"all_students.html\" class=\"nav-link \"> <span class=\"title\">liste
\t\t\t\t\t\t\t\t\t\t\t\tdes clubs</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"add_student.html\" class=\"nav-link \"> <span class=\"title\">ajouter
\t\t\t\t\t\t\t\t\t\t\t\tclub</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"add_student_bootstrap.html\" class=\"nav-link \"> <span class=\"title\">ajouter
\t\t\t\t\t\t\t\t\t\t\t\tclub Bootstrap</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"edit_student.html\" class=\"nav-link \"> <span class=\"title\">modifier
\t\t\t\t\t\t\t\t\t\t\t\tclub</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"student_profile.html\" class=\"nav-link \"> <span class=\"title\">profile
\t\t\t\t\t\t\t\t\t\t\t\tclubs</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"widget.html\" class=\"nav-link nav-toggle\"> <i class=\"material-icons\">widgets</i>
                                <span class=\"title\">Widget</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end sidebar menu -->
        <!-- start page content -->
        <div class=\"page-content-wrapper\">
            <div class=\"page-content\">
                <div class=\"page-bar\">
                    ";
        // line 678
        $this->displayBlock('container', $context, $blocks);
        // line 681
        echo "                </div>
            </div>    </div>
        <!-- end page content -->
        <!-- start chat sidebar -->
        <div class=\"chat-sidebar-container\" data-close-on-body-click=\"false\">
            <div class=\"chat-sidebar\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"nav-item\">
                        <a href=\"#quick_sidebar_tab_1\" class=\"nav-link active tab-icon\" data-toggle=\"tab\"> <i
                                    class=\"material-icons\">chat</i>Chat
                            <span class=\"badge badge-danger\">4</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#quick_sidebar_tab_3\" class=\"nav-link tab-icon\" data-toggle=\"tab\"> <i
                                    class=\"material-icons\">settings</i>
                            Settings
                        </a>
                    </li>
                </ul>
                <div class=\"tab-content\">
                    <!-- Start Doctor Chat -->
                    <div class=\"tab-pane active chat-sidebar-chat in active show\" role=\"tabpanel\"
                         id=\"quick_sidebar_tab_1\">
                        <div class=\"chat-sidebar-list\">
                            <div class=\"chat-sidebar-chat-users slimscroll-style\" data-rail-color=\"#ddd\"
                                 data-wrapper-class=\"chat-sidebar-list\">
                                <div class=\"chat-header\">
                                    <h5 class=\"list-heading\">Online</h5>
                                </div>
                                <ul class=\"media-list list-items\">
                                    <li class=\"media\"><img class=\"media-object\" src=\"";
        // line 712
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/assets/img/prof/prof3.jpg"), "html", null, true);
        echo "\"
                                                           width=\"35\" height=\"35\" alt=\"...\">
                                        <i class=\"online dot\"></i>
                                        <div class=\"media-body\">
                                            <h5 class=\"media-heading\">John Deo</h5>
                                            <div class=\"media-heading-sub\">Spine Surgeon</div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <div class=\"media-status\">
                                            <span class=\"badge badge-success\">5</span>
                                        </div> <img class=\"media-object\" src=\"";
        // line 723
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/img/prof/prof1.jpg"), "html", null, true);
        echo "\"
                                                    width=\"35\" height=\"35\" alt=\"...\">
                                        <i class=\"busy dot\"></i>
                                        <div class=\"media-body\">
                                            <h5 class=\"media-heading\">Rajesh</h5>
                                            <div class=\"media-heading-sub\">Director</div>
                                        </div>
                                    </li>
                                    <li class=\"media\"><img class=\"media-object\" src=\"";
        // line 731
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/img/prof/prof5.jpg"), "html", null, true);
        echo "\"
                                                           width=\"35\" height=\"35\" alt=\"...\">
                                        <i class=\"away dot\"></i>
                                        <div class=\"media-body\">
                                            <h5 class=\"media-heading\">Jacob Ryan</h5>
                                            <div class=\"media-heading-sub\">Ortho Surgeon</div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <div class=\"media-status\">
                                            <span class=\"badge badge-danger\">8</span>
                                        </div> <img class=\"media-object\" src=\"";
        // line 742
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back//prof/prof4.jpg"), "html", null, true);
        echo "\"
                                                    width=\"35\" height=\"35\" alt=\"...\">
                                        <i class=\"online dot\"></i>
                                        <div class=\"media-body\">
                                            <h5 class=\"media-heading\">Kehn Anderson</h5>
                                            <div class=\"media-heading-sub\">CEO</div>
                                        </div>
                                    </li>
                                    <li class=\"media\"><img class=\"media-object\" src=\"";
        // line 750
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/img/prof/prof2.jpg"), "html", null, true);
        echo "\"
                                                           width=\"35\" height=\"35\" alt=\"...\">
                                        <i class=\"busy dot\"></i>
                                        <div class=\"media-body\">
                                            <h5 class=\"media-heading\">Sarah Smith</h5>
                                            <div class=\"media-heading-sub\">Anaesthetics</div>
                                        </div>
                                    </li>
                                    <li class=\"media\"><img class=\"media-object\" src=\"";
        // line 758
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/img/prof/prof7.jpg"), "html", null, true);
        echo "\"
                                                           width=\"35\" height=\"35\" alt=\"...\">
                                        <i class=\"online dot\"></i>
                                        <div class=\"media-body\">
                                            <h5 class=\"media-heading\">Vlad Cardella</h5>
                                            <div class=\"media-heading-sub\">Cardiologist</div>
                                        </div>
                                    </li>
                                </ul>
                                <div class=\"chat-header\">
                                    <h5 class=\"list-heading\">Offline</h5>
                                </div>
                                <ul class=\"media-list list-items\">
                                    <li class=\"media\">
                                        <div class=\"media-status\">
                                            <span class=\"badge badge-warning\">4</span>
                                        </div> <img class=\"media-object\" src=\"";
        // line 774
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/img/prof/prof6.jpg"), "html", null, true);
        echo "\"
                                                    width=\"35\" height=\"35\" alt=\"...\">
                                        <i class=\"offline dot\"></i>
                                        <div class=\"media-body\">
                                            <h5 class=\"media-heading\">Jennifer Maklen</h5>
                                            <div class=\"media-heading-sub\">Nurse</div>
                                            <div class=\"media-heading-small\">Last seen 01:20 AM</div>
                                        </div>
                                    </li>
                                    <li class=\"media\"><img class=\"media-object\" src=\"";
        // line 783
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/img/prof/prof8.jpg"), "html", null, true);
        echo "\"
                                                           width=\"35\" height=\"35\" alt=\"...\">
                                        <i class=\"offline dot\"></i>
                                        <div class=\"media-body\">
                                            <h5 class=\"media-heading\">Lina Smith</h5>
                                            <div class=\"media-heading-sub\">Ortho Surgeon</div>
                                            <div class=\"media-heading-small\">Last seen 11:14 PM</div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <div class=\"media-status\">
                                            <span class=\"badge badge-success\">9</span>
                                        </div> <img class=\"media-object\" src=\"";
        // line 795
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/img/prof/prof9.jpg"), "html", null, true);
        echo "\"
                                                    width=\"35\" height=\"35\" alt=\"...\">
                                        <i class=\"offline dot\"></i>
                                        <div class=\"media-body\">
                                            <h5 class=\"media-heading\">Jeff Adam</h5>
                                            <div class=\"media-heading-sub\">Compounder</div>
                                            <div class=\"media-heading-small\">Last seen 3:31 PM</div>
                                        </div>
                                    </li>
                                    <li class=\"media\"><img class=\"media-object\" src=\"";
        // line 804
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/img/prof/prof10.jpg"), "html", null, true);
        echo "\"
                                                           width=\"35\" height=\"35\" alt=\"...\">
                                        <i class=\"offline dot\"></i>
                                        <div class=\"media-body\">
                                            <h5 class=\"media-heading\">Anjelina Cardella</h5>
                                            <div class=\"media-heading-sub\">Physiotherapist</div>
                                            <div class=\"media-heading-small\">Last seen 7:45 PM</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Doctor Chat -->
                    <!-- Start Setting Panel -->
                    <div class=\"tab-pane chat-sidebar-settings\" role=\"tabpanel\" id=\"quick_sidebar_tab_3\">
                        <div class=\"chat-sidebar-settings-list slimscroll-style\">
                            <div class=\"chat-header\">
                                <h5 class=\"list-heading\">Layout Settings</h5>
                            </div>
                            <div class=\"chatpane inner-content \">
                                <div class=\"settings-list\">
                                    <div class=\"setting-item\">
                                        <div class=\"setting-text\">Sidebar Position</div>
                                        <div class=\"setting-set\">
                                            <select
                                                    class=\"sidebar-pos-option form-control input-inline input-sm input-small \">
                                                <option value=\"left\" selected=\"selected\">Left</option>
                                                <option value=\"right\">Right</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"setting-item\">
                                        <div class=\"setting-text\">Header</div>
                                        <div class=\"setting-set\">
                                            <select
                                                    class=\"page-header-option form-control input-inline input-sm input-small \">
                                                <option value=\"fixed\" selected=\"selected\">Fixed</option>
                                                <option value=\"default\">Default</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"setting-item\">
                                        <div class=\"setting-text\">Footer</div>
                                        <div class=\"setting-set\">
                                            <select
                                                    class=\"page-footer-option form-control input-inline input-sm input-small \">
                                                <option value=\"fixed\">Fixed</option>
                                                <option value=\"default\" selected=\"selected\">Default</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"chat-header\">
                                    <h5 class=\"list-heading\">Account Settings</h5>
                                </div>
                                <div class=\"settings-list\">
                                    <div class=\"setting-item\">
                                        <div class=\"setting-text\">Notifications</div>
                                        <div class=\"setting-set\">
                                            <div class=\"switch\">
                                                <label class=\"mdl-switch mdl-js-switch mdl-js-ripple-effect\"
                                                       for=\"switch-1\">
                                                    <input type=\"checkbox\" id=\"switch-1\" class=\"mdl-switch__input\"
                                                           checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"setting-item\">
                                        <div class=\"setting-text\">Show Online</div>
                                        <div class=\"setting-set\">
                                            <div class=\"switch\">
                                                <label class=\"mdl-switch mdl-js-switch mdl-js-ripple-effect\"
                                                       for=\"switch-7\">
                                                    <input type=\"checkbox\" id=\"switch-7\" class=\"mdl-switch__input\"
                                                           checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"setting-item\">
                                        <div class=\"setting-text\">Status</div>
                                        <div class=\"setting-set\">
                                            <div class=\"switch\">
                                                <label class=\"mdl-switch mdl-js-switch mdl-js-ripple-effect\"
                                                       for=\"switch-2\">
                                                    <input type=\"checkbox\" id=\"switch-2\" class=\"mdl-switch__input\"
                                                           checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"setting-item\">
                                        <div class=\"setting-text\">2 Steps Verification</div>
                                        <div class=\"setting-set\">
                                            <div class=\"switch\">
                                                <label class=\"mdl-switch mdl-js-switch mdl-js-ripple-effect\"
                                                       for=\"switch-3\">
                                                    <input type=\"checkbox\" id=\"switch-3\" class=\"mdl-switch__input\"
                                                           checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"chat-header\">
                                    <h5 class=\"list-heading\">General Settings</h5>
                                </div>
                                <div class=\"settings-list\">
                                    <div class=\"setting-item\">
                                        <div class=\"setting-text\">Location</div>
                                        <div class=\"setting-set\">
                                            <div class=\"switch\">
                                                <label class=\"mdl-switch mdl-js-switch mdl-js-ripple-effect\"
                                                       for=\"switch-4\">
                                                    <input type=\"checkbox\" id=\"switch-4\" class=\"mdl-switch__input\"
                                                           checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"setting-item\">
                                        <div class=\"setting-text\">Save Histry</div>
                                        <div class=\"setting-set\">
                                            <div class=\"switch\">
                                                <label class=\"mdl-switch mdl-js-switch mdl-js-ripple-effect\"
                                                       for=\"switch-5\">
                                                    <input type=\"checkbox\" id=\"switch-5\" class=\"mdl-switch__input\"
                                                           checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"setting-item\">
                                        <div class=\"setting-text\">Auto Updates</div>
                                        <div class=\"setting-set\">
                                            <div class=\"switch\">
                                                <label class=\"mdl-switch mdl-js-switch mdl-js-ripple-effect\"
                                                       for=\"switch-6\">
                                                    <input type=\"checkbox\" id=\"switch-6\" class=\"mdl-switch__input\"
                                                           checked>
                                                </label>
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
        <!-- end chat sidebar -->
    </div>
    <!-- end page container -->
    <!-- start footer -->
    <div class=\"page-footer\">
        <div class=\"page-footer-inner\"> 2017 &copy; Smart University Theme By
            <a href=\"mailto:redstartheme@gmail.com\" target=\"_top\" class=\"makerCss\">Redstar Theme</a>
        </div>
        <div class=\"scroll-to-top\">
            <i class=\"icon-arrow-up\"></i>
        </div>
    </div>
    <!-- end footer -->
</div>
<!-- start js include path -->
<script src=\"";
        // line 972
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 973
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/popper/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 974
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/jquery-blockui/jquery.blockui.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 975
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/jquery-slimscroll/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
<!-- bootstrap -->
<script src=\"";
        // line 977
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 978
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 979
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/sparkline/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 980
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/pages/sparkline/sparkline-data.js"), "html", null, true);
        echo "\"></script>
<!-- Common js-->
<script src=\"";
        // line 982
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/app.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 983
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/layout.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 984
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/theme-color.js"), "html", null, true);
        echo "\"></script>
<!-- material -->
<script src=\"";
        // line 986
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/material/material.min.js"), "html", null, true);
        echo "\"></script>
<!-- chart js -->
<script src=\"";
        // line 988
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/chart-js/Chart.bundle.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 989
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/chart-js/utils.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 990
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/pages/chart/chartjs/home-data.js"), "html", null, true);
        echo "\"></script>
<!-- summernote -->
<script src=\"";
        // line 992
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/summernote/summernote.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 993
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/pages/summernote/summernote-data.js"), "html", null, true);
        echo "\"></script>
<!-- end js include path -->
</body>


<!-- Mirrored from radixtouch.in/templates/admin/smart/source/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Jan 2020 11:29:59 GMT -->
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 678
    public function block_container($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 679
        echo "
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1222 => 679,  1213 => 678,  1195 => 993,  1191 => 992,  1186 => 990,  1182 => 989,  1178 => 988,  1173 => 986,  1168 => 984,  1164 => 983,  1160 => 982,  1155 => 980,  1151 => 979,  1147 => 978,  1143 => 977,  1138 => 975,  1134 => 974,  1130 => 973,  1126 => 972,  955 => 804,  943 => 795,  928 => 783,  916 => 774,  897 => 758,  886 => 750,  875 => 742,  861 => 731,  850 => 723,  836 => 712,  803 => 681,  801 => 678,  610 => 490,  597 => 480,  589 => 475,  565 => 454,  557 => 449,  494 => 389,  389 => 287,  361 => 262,  336 => 240,  321 => 228,  306 => 216,  290 => 203,  275 => 191,  176 => 95,  170 => 92,  164 => 89,  158 => 86,  152 => 83,  144 => 78,  96 => 33,  92 => 32,  88 => 31,  84 => 30,  80 => 29,  75 => 27,  70 => 25,  66 => 24,  61 => 22,  57 => 21,  52 => 19,  48 => 18,  44 => 17,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<!-- BEGIN HEAD -->


<!-- Mirrored from radixtouch.in/templates/admin/smart/source/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Jan 2020 11:27:28 GMT -->
<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
    <meta name=\"description\" content=\"Responsive Admin Template\" />
    <meta name=\"author\" content=\"SmartUniversity\" />
    <title>Genius University | Bootstrap Responsive Admin Template</title>
    <!-- google font -->
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- icons -->
    <link href=\"{{ asset ('back/fonts/simple-line-icons/simple-line-icons.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset ('back/fonts/font-awesome/css/font-awesome.min.css')}}\"rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset ('back/fonts/material-design-icons/material-icon.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <!--bootstrap -->
    <link href=\"{{ asset ('back/plugins/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset ('back/plugins/summernote/summernote.css')}}\" rel=\"stylesheet\">
    <!-- Material Design Lite CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset ('back/plugins/material/material.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset ('back/css/material_style.css')}}\">
    <!-- inbox style -->
    <link href=\"{{ asset ('back/css/pages/inbox.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Theme Styles -->
    <link href=\"{{ asset ('back/css/theme/light/theme_style.css')}}\" rel=\"stylesheet\" id=\"rt_style_components\" type=\"text/css\" />
    <link href=\"{{ asset ('back/css/plugins.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset ('back/css/theme/light/style.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset ('back/css/responsive.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset ('back/css/theme/light/theme-color.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- favicon -->
    <link rel=\"shortcut icon\" href=\"http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico\" />
</head>
<!-- END HEAD -->

<body
        class=\"page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo\">
<div class=\"page-wrapper\">
    <!-- start header -->
    <div class=\"page-header navbar navbar-fixed-top\">
        <div class=\"page-header-inner \">
            <!-- logo start -->
            <div class=\"page-logo\">
                <a href=\"index-2.html\">
                    <span class=\"logo-icon material-icons fa-rotate-45\">school</span>
                    <span class=\"logo-default\">Smart</span> </a>
            </div>
            <!-- logo end -->
            <ul class=\"nav navbar-nav navbar-left in\">
                <li><a href=\"#\" class=\"menu-toggler sidebar-toggler\"><i class=\"icon-menu\"></i></a></li>
            </ul>
            <form class=\"search-form-opened\" action=\"#\" method=\"GET\">
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search...\" name=\"query\">
                    <span class=\"input-group-btn\">
\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"btn submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-magnifier\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</span>
                </div>
            </form>
            <!-- start mobile menu -->
            <a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\"
               data-target=\".navbar-collapse\">
                <span></span>
            </a>
            <!-- end mobile menu -->
            <!-- start header menu -->
            <div class=\"top-menu\">
                <ul class=\"nav navbar-nav pull-right\">
                    <li><a href=\"javascript:;\" class=\"fullscreen-btn\"><i class=\"fa fa-arrows-alt\"></i></a></li>
                    <!-- start language menu -->
                    <li class=\"dropdown language-switch\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"> <img
                                    src=\"{{ asset ('back/img/flags/gb.png')}}\" class=\"position-left\" alt=\"\"> English <span
                                    class=\"fa fa-angle-down\"></span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a class=\"deutsch\"><img src=\"{{ asset ('back/img/flags/de.png')}}\" alt=\"\"> Deutsch</a>
                            </li>
                            <li>
                                <a class=\"ukrainian\"><img src=\"{{ asset ('back/img/flags/ua.png')}}\" alt=\"\"> Українська</a>
                            </li>
                            <li>
                                <a class=\"english\"><img src=\"{{ asset ('back/img/flags/gb.png')}}\" alt=\"\"> English</a>
                            </li>
                            <li>
                                <a class=\"espana\"><img src=\"{{ asset ('back/img/flags/es.png')}}\" alt=\"\"> España</a>
                            </li>
                            <li>
                                <a class=\"russian\"><img src=\"{{ asset ('back/img/flags/ru.png')}}\" alt=\"\"> Русский</a>
                            </li>
                        </ul>
                    </li>
                    <!-- end language menu -->
                    <!-- start notification dropdown -->
                    <li class=\"dropdown dropdown-extended dropdown-notification\" id=\"header_notification_bar\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\"
                           data-close-others=\"true\">
                            <i class=\"fa fa-bell-o\"></i>
                            <span class=\"badge headerBadgeColor1\"> 6 </span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"external\">
                                <h3><span class=\"bold\">Notifications</span></h3>
                                <span class=\"notification-label purple-bgcolor\">New 6</span>
                            </li>
                            <li>
                                <ul class=\"dropdown-menu-list small-slimscroll-style\" data-handle-color=\"#637283\">
                                    <li>
                                        <a href=\"javascript:;\">
                                            <span class=\"time\">just now</span>
                                            <span class=\"details\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon circle deepPink-bgcolor\"><i
                                                                class=\"fa fa-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\tCongratulations!. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <span class=\"time\">3 mins</span>
                                            <span class=\"details\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon circle purple-bgcolor\"><i
                                                                class=\"fa fa-user o\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<b>John Micle </b>is now following you. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <span class=\"time\">7 mins</span>
                                            <span class=\"details\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon circle blue-bgcolor\"><i
                                                                class=\"fa fa-comments-o\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Sneha Jogi </b>sent you a message. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <span class=\"time\">12 mins</span>
                                            <span class=\"details\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon circle pink\"><i
                                                                class=\"fa fa-heart\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Ravi Patel </b>like your photo. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <span class=\"time\">15 mins</span>
                                            <span class=\"details\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon circle yellow\"><i
                                                                class=\"fa fa-warning\"></i></span> Warning! </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <span class=\"time\">10 hrs</span>
                                            <span class=\"details\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon circle red\"><i
                                                                class=\"fa fa-times\"></i></span> Application error. </span>
                                        </a>
                                    </li>
                                </ul>
                                <div class=\"dropdown-menu-footer\">
                                    <a href=\"javascript:void(0)\"> All notifications </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- end notification dropdown -->
                    <!-- start message dropdown -->
                    <li class=\"dropdown dropdown-extended dropdown-inbox\" id=\"header_inbox_bar\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\"
                           data-close-others=\"true\">
                            <i class=\"fa fa-envelope-o\"></i>
                            <span class=\"badge headerBadgeColor2\"> 2 </span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"external\">
                                <h3><span class=\"bold\">Messages</span></h3>
                                <span class=\"notification-label cyan-bgcolor\">New 2</span>
                            </li>
                            <li>
                                <ul class=\"dropdown-menu-list small-slimscroll-style\" data-handle-color=\"#637283\">
                                    <li>
                                        <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"photo\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset ('back/img/prof/prof2.jpg')}}\" class=\"img-circle\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"subject\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"from\"> Sarah Smith </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">Just Now </span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"message\"> Jatin I found you on LinkedIn... </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"photo\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset ('back/img/prof/prof3.jpg')}}\" class=\"img-circle\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"subject\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"from\"> John Deo </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">16 mins </span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"message\"> Fwd: Important Notice Regarding Your Domain
\t\t\t\t\t\t\t\t\t\t\t\t\tName... </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"photo\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset ('back/img/prof/prof1.jpg')}}\" class=\"img-circle\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"subject\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"from\"> Rajesh </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">2 hrs </span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"message\"> pls take a print of attachments. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"photo\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset ('back/img/prof/prof8.jpg')}}\" class=\"img-circle\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"subject\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"from\"> Lina Smith </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">40 mins </span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"message\"> Apply for Ortho Surgeon </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"photo\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset ('back/img/prof/prof5.jpg')}}\" class=\"img-circle\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"subject\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"from\"> Jacob Ryan </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">46 mins </span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"message\"> Request for leave application. </span>
                                        </a>
                                    </li>
                                </ul>
                                <div class=\"dropdown-menu-footer\">
                                    <a href=\"#\"> All Messages </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- end message dropdown -->
                    <!-- start manage user dropdown -->
                    <li class=\"dropdown dropdown-user\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\"
                           data-close-others=\"true\">
                            <img alt=\"\" class=\"img-circle \" src=\"../assets/img/dp.jpg\" />
                            <span class=\"username username-hide-on-mobile\"> {{app.user.username}} </span>
                            <i class=\"fa fa-angle-down\"></i>
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-default\">
                            <li>
                                <a href=\"user_profile.html\">
                                    <i class=\"icon-user\"></i> Profile </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"icon-settings\"></i> Settings
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"icon-directions\"></i> Help
                                </a>
                            </li>
                            <li class=\"divider\"> </li>
                            <li>
                                <a href=\"lock_screen.html\">
                                    <i class=\"icon-lock\"></i> Lock
                                </a>
                            </li>
                            <li>
                                <a href=\"{{path ('fos_user_security_logout')}}\">
                                    <i class=\"icon-logout\"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- end manage user dropdown -->
                    <li class=\"dropdown dropdown-quick-sidebar-toggler\">
                        <a id=\"headerSettingButton\" class=\"mdl-button mdl-js-button mdl-button--icon pull-right\"
                           data-upgraded=\",MaterialButton\">
                            <i class=\"material-icons\">more_vert</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- start color quick setting -->
    <div class=\"settingSidebar\">
        <a href=\"javascript:void(0)\" class=\"settingPanelToggle\"> <i class=\"fa fa-spin fa-cog\"></i>
        </a>
        <div class=\"settingSidebar-body ps-container ps-theme-default\">
            <div class=\" fade show active\">
                <div class=\"setting-panel-header\">Setting Panel
                </div>
                <div class=\"quick-setting slimscroll-style\">
                    <ul id=\"themecolors\">
                        <li>
                            <p class=\"sidebarSettingTitle\">Sidebar Color</p>
                        </li>
                        <li class=\"complete\">
                            <div class=\"theme-color sidebar-theme\">
                                <a href=\"#\" data-theme=\"white\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"dark\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"blue\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"indigo\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"cyan\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"green\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"red\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                            </div>
                        </li>
                        <li>
                            <p class=\"sidebarSettingTitle\">Header Brand color</p>
                        </li>
                        <li class=\"theme-option\">
                            <div class=\"theme-color logo-theme\">
                                <a href=\"#\" data-theme=\"logo-white\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"logo-dark\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"logo-blue\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"logo-indigo\"><span class=\"head\"></span><span
                                            class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"logo-cyan\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"logo-green\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"logo-red\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                            </div>
                        </li>
                        <li>
                            <p class=\"sidebarSettingTitle\">Header color</p>
                        </li>
                        <li class=\"theme-option\">
                            <div class=\"theme-color header-theme\">
                                <a href=\"#\" data-theme=\"header-white\"><span class=\"head\"></span><span
                                            class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"header-dark\"><span class=\"head\"></span><span
                                            class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"header-blue\"><span class=\"head\"></span><span
                                            class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"header-indigo\"><span class=\"head\"></span><span
                                            class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"header-cyan\"><span class=\"head\"></span><span
                                            class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"header-green\"><span class=\"head\"></span><span
                                            class=\"cont\"></span></a>
                                <a href=\"#\" data-theme=\"header-red\"><span class=\"head\"></span><span class=\"cont\"></span></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end color quick setting -->
    <!-- start page container -->
    <div class=\"page-container\">
        <!-- start sidebar menu -->
        <div class=\"sidebar-container\">
            <div class=\"sidemenu-container navbar-collapse collapse fixed-menu\">
                <div id=\"remove-scroll\" class=\"left-sidemenu\">
                    <ul class=\"sidemenu  page-header-fixed slimscroll-style\" data-keep-expanded=\"false\"
                        data-auto-scroll=\"true\" data-slide-speed=\"200\" style=\"padding-top: 20px\">
                        <li class=\"sidebar-toggler-wrapper hide\">
                            <div class=\"sidebar-toggler\">
                                <span></span>
                            </div>
                        </li>
                        <li class=\"sidebar-user-panel\">
                            <div class=\"user-panel\">
                                <div class=\"pull-left image\">
                                    <img src=\"http://radixtouch.in/templates/admin/smart/source/assets/img/dp.jpg\" class=\"img-circle user-img-circle\"
                                         alt=\"User Image\" />
                                </div>
                                <div class=\"pull-left info\">
                                    <p> {{app.user.username}}</p>
                                    <a href=\"#\"><i class=\"fa fa-circle user-online\"></i><span class=\"txtOnline\">
\t\t\t\t\t\t\t\t\t\t\t\tOnline</span></a>
                                </div>
                            </div>
                        </li>



                        <li class=\"nav-item   \">
                            <a href=\"index.html\" class=\"nav-link \">
                                <span class=\"title\">Acceuil</span>
                            </a>
                        </li>



                        <li class=\"nav-item\">
                            <a href=\"event.html\" class=\"nav-link nav-toggle\">
                                <span class=\"title\">Evenements</span><span class=\"arrow\"></span>
                            </a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"all_professors.html\" class=\"nav-link \"> <span class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\tliste des evenements</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"add_professor.html\" class=\"nav-link \"> <span class=\"title\">ajouter
\t\t\t\t\t\t\t\t\t\t\t\tevenement</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"add_professor_bootstrap.html\" class=\"nav-link \"> <span
                                                class=\"title\">ajouter evenement Bootstrap</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"edit_professor.html\" class=\"nav-link \"> <span class=\"title\">modifier
\t\t\t\t\t\t\t\t\t\t\t\tevenement</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"professor_profile.html\" class=\"nav-link \"> <span class=\"title\">profile
\t\t\t\t\t\t\t\t\t\t\t\tevenement</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link nav-toggle\">
                                <span class=\"title\">Gestion Scolarité</span> <span class=\"arrow\"></span>
                            </a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"afficherM\" class=\"nav-link \"> <span class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\tliste des Matieress</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('scolarite_ajoutm') }}\" class=\"nav-link \"> <span class=\"title\">ajouter une
\t\t\t\t\t\t\t\t\t\t\t\tmatiere</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"{{ path ('scolarite_readn') }}\" class=\"nav-link \"> <span
                                                class=\"title\">liste des notes</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"ajoutN\" class=\"nav-link \"> <span class=\"title\">ajouter une note
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"professor_profile.html\" class=\"nav-link \"> <span class=\"title\">profile
\t\t\t\t\t\t\t\t\t\t\t\tenseignant</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link nav-toggle\">
                                <span class=\"title\">Classe&reclamation</span><span class=\"arrow\"></span></a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('gestion_afficheC') }}\" class=\"nav-link \"> <span class=\"title\">liste
\t\t\t\t\t\t\t\t\t\t\t\tdes classes</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('gestion_ajouterC') }}\" class=\"nav-link \"> <span class=\"title\">ajouter
\t\t\t\t\t\t\t\t\t\t\t\tclasse</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"afficheR\" class=\"nav-link \"> <span class=\"title\">Afficher les réclamations</span>
                                    </a>
                                </li>

                                <li class=\"nav-item\">
                                    <a href=\"{{ path('statistique_reclamation') }}\" > <span class=\"fa fa-pie-chart\">Statistiques réclamations</span>
                                    </a>
                                </li>






                            </ul>
                        </li>

                        <li class=\"nav-item active open\">
                            <a href=\"#\" class=\"nav-link nav-toggle\">
                                <span class=\"title\"> Gestion des Cours</span><span class=\"arrow\"></span></a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"listcour\" class=\"nav-link \"> <span class=\"title\">liste
\t\t\t\t\t\t\t\t\t\t\t\tdes cours</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"ajoutcour\" class=\"nav-link \"> <span class=\"title\">ajouter
\t\t\t\t\t\t\t\t\t\t\t\tcours</span>
                                    </a>
                                </li>
                                <li class=\"nav-item active open\">
                                    <a href=\"add_course_bootstrap.html\" class=\"nav-link \"> <span class=\"title\">ajouter
\t\t\t\t\t\t\t\t\t\t\t\tCours Bootstrap</span>
                                        <span class=\"selected\"></span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"modifiercour\" class=\"nav-link \"> <span class=\"title\">modifier
\t\t\t\t\t\t\t\t\t\t\t\tCours</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        </li>
                        <li class=\"nav-item active open\">
                        <li class=\"nav-item active open\">
                            <a href=\"#\" class=\"nav-link nav-toggle\">
                                <span class=\"title\"> Gestion des Series</span><span class=\"arrow\"></span></a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"listserie\" class=\"nav-link \"> <span class=\"title\">liste
\t\t\t\t\t\t\t\t\t\t\t\tdes series </span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"ajoutserie\" class=\"nav-link \"> <span class=\"title\">ajouter
\t\t\t\t\t\t\t\t\t\t\t\tserie </span>
                                    </a>
                                </li>
                                <li class=\"nav-item active open\">
                                    <a href=\"ajoutserie\" class=\"nav-link \"> <span class=\"title\"> ajout
                                            serie Bootstrap</span>
                                        <span class=\"selected\"></span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"modifierserie\" class=\"nav-link \"> <span class=\"title\">modifier
\t\t\t\t\t\t\t\t\t\t\t\tserie </span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class=\"nav-item active open\">
                            <a href=\"#\" class=\"nav-link nav-toggle\">
                                <span class=\"title\"> Gestion des avis </span><span class=\"arrow\"></span></a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"listavis\" class=\"nav-link \"> <span class=\"title\">liste
\t\t\t\t\t\t\t\t\t\t\t\tdes avis</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"ajoutavis\" class=\"nav-link \"> <span class=\"title\">ajouter
\t\t\t\t\t\t\t\t\t\t\t\tavis</span>
                                    </a>
                                </li>
                                <li class=\"nav-item active open\">
                                    <a href=\"add_course_bootstrap.html\" class=\"nav-link \"> <span class=\"title\">ajouter
\t\t\t\t\t\t\t\t\t\t\t\tavis Bootstrap</span>
                                        <span class=\"selected\"></span>
                                    </a>
                                </li>


                            </ul>
                        </li>
                        </li>
                        <li class=\"nav-item active open\">
                            <a href=\"#\" class=\"nav-link nav-toggle\">
                                <span class=\"title\">Cantine</span><span class=\"arrow\"></span></a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"all_courses.html\" class=\"nav-link \"> <span class=\"title\">liste
\t\t\t\t\t\t\t\t\t\t\t\tdes menus</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"add_course.html\" class=\"nav-link \"> <span class=\"title\">ajouter
\t\t\t\t\t\t\t\t\t\t\t\tMenu</span>
                                    </a>
                                </li>
                                <li class=\"nav-item active open\">
                                    <a href=\"add_course_bootstrap.html\" class=\"nav-link \"> <span class=\"title\">ajouter
\t\t\t\t\t\t\t\t\t\t\t\tMenu Bootstrap</span>
                                        <span class=\"selected\"></span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"edit_course.html\" class=\"nav-link \"> <span class=\"title\">modifier
\t\t\t\t\t\t\t\t\t\t\t\tMenu</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"all_courses.html\" class=\"nav-link \"> <span class=\"title\">liste
\t\t\t\t\t\t\t\t\t\t\t\tdes plats</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"add_course.html\" class=\"nav-link \"> <span class=\"title\">ajouter
\t\t\t\t\t\t\t\t\t\t\t\tplat</span>
                                    </a>
                                </li>
                                <li class=\"nav-item active open\">
                                    <a href=\"add_course_bootstrap.html\" class=\"nav-link \"> <span class=\"title\">ajouter
\t\t\t\t\t\t\t\t\t\t\t\tplat Bootstrap</span>
                                        <span class=\"selected\"></span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"edit_course.html\" class=\"nav-link \"> <span class=\"title\">modifier
\t\t\t\t\t\t\t\t\t\t\t\tplat</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link nav-toggle\">
                                <span class=\"title\">Clubs</span><span class=\"arrow\"></span></a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item\">
                                    <a href=\"all_students.html\" class=\"nav-link \"> <span class=\"title\">liste
\t\t\t\t\t\t\t\t\t\t\t\tdes clubs</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"add_student.html\" class=\"nav-link \"> <span class=\"title\">ajouter
\t\t\t\t\t\t\t\t\t\t\t\tclub</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"add_student_bootstrap.html\" class=\"nav-link \"> <span class=\"title\">ajouter
\t\t\t\t\t\t\t\t\t\t\t\tclub Bootstrap</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"edit_student.html\" class=\"nav-link \"> <span class=\"title\">modifier
\t\t\t\t\t\t\t\t\t\t\t\tclub</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"student_profile.html\" class=\"nav-link \"> <span class=\"title\">profile
\t\t\t\t\t\t\t\t\t\t\t\tclubs</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"widget.html\" class=\"nav-link nav-toggle\"> <i class=\"material-icons\">widgets</i>
                                <span class=\"title\">Widget</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end sidebar menu -->
        <!-- start page content -->
        <div class=\"page-content-wrapper\">
            <div class=\"page-content\">
                <div class=\"page-bar\">
                    {% block container  %}

                    {% endblock %}
                </div>
            </div>    </div>
        <!-- end page content -->
        <!-- start chat sidebar -->
        <div class=\"chat-sidebar-container\" data-close-on-body-click=\"false\">
            <div class=\"chat-sidebar\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"nav-item\">
                        <a href=\"#quick_sidebar_tab_1\" class=\"nav-link active tab-icon\" data-toggle=\"tab\"> <i
                                    class=\"material-icons\">chat</i>Chat
                            <span class=\"badge badge-danger\">4</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#quick_sidebar_tab_3\" class=\"nav-link tab-icon\" data-toggle=\"tab\"> <i
                                    class=\"material-icons\">settings</i>
                            Settings
                        </a>
                    </li>
                </ul>
                <div class=\"tab-content\">
                    <!-- Start Doctor Chat -->
                    <div class=\"tab-pane active chat-sidebar-chat in active show\" role=\"tabpanel\"
                         id=\"quick_sidebar_tab_1\">
                        <div class=\"chat-sidebar-list\">
                            <div class=\"chat-sidebar-chat-users slimscroll-style\" data-rail-color=\"#ddd\"
                                 data-wrapper-class=\"chat-sidebar-list\">
                                <div class=\"chat-header\">
                                    <h5 class=\"list-heading\">Online</h5>
                                </div>
                                <ul class=\"media-list list-items\">
                                    <li class=\"media\"><img class=\"media-object\" src=\"{{ asset ('back/assets/img/prof/prof3.jpg')}}\"
                                                           width=\"35\" height=\"35\" alt=\"...\">
                                        <i class=\"online dot\"></i>
                                        <div class=\"media-body\">
                                            <h5 class=\"media-heading\">John Deo</h5>
                                            <div class=\"media-heading-sub\">Spine Surgeon</div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <div class=\"media-status\">
                                            <span class=\"badge badge-success\">5</span>
                                        </div> <img class=\"media-object\" src=\"{{ asset ('back/img/prof/prof1.jpg')}}\"
                                                    width=\"35\" height=\"35\" alt=\"...\">
                                        <i class=\"busy dot\"></i>
                                        <div class=\"media-body\">
                                            <h5 class=\"media-heading\">Rajesh</h5>
                                            <div class=\"media-heading-sub\">Director</div>
                                        </div>
                                    </li>
                                    <li class=\"media\"><img class=\"media-object\" src=\"{{ asset ('back/img/prof/prof5.jpg')}}\"
                                                           width=\"35\" height=\"35\" alt=\"...\">
                                        <i class=\"away dot\"></i>
                                        <div class=\"media-body\">
                                            <h5 class=\"media-heading\">Jacob Ryan</h5>
                                            <div class=\"media-heading-sub\">Ortho Surgeon</div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <div class=\"media-status\">
                                            <span class=\"badge badge-danger\">8</span>
                                        </div> <img class=\"media-object\" src=\"{{ asset ('back//prof/prof4.jpg')}}\"
                                                    width=\"35\" height=\"35\" alt=\"...\">
                                        <i class=\"online dot\"></i>
                                        <div class=\"media-body\">
                                            <h5 class=\"media-heading\">Kehn Anderson</h5>
                                            <div class=\"media-heading-sub\">CEO</div>
                                        </div>
                                    </li>
                                    <li class=\"media\"><img class=\"media-object\" src=\"{{ asset ('back/img/prof/prof2.jpg')}}\"
                                                           width=\"35\" height=\"35\" alt=\"...\">
                                        <i class=\"busy dot\"></i>
                                        <div class=\"media-body\">
                                            <h5 class=\"media-heading\">Sarah Smith</h5>
                                            <div class=\"media-heading-sub\">Anaesthetics</div>
                                        </div>
                                    </li>
                                    <li class=\"media\"><img class=\"media-object\" src=\"{{ asset ('back/img/prof/prof7.jpg')}}\"
                                                           width=\"35\" height=\"35\" alt=\"...\">
                                        <i class=\"online dot\"></i>
                                        <div class=\"media-body\">
                                            <h5 class=\"media-heading\">Vlad Cardella</h5>
                                            <div class=\"media-heading-sub\">Cardiologist</div>
                                        </div>
                                    </li>
                                </ul>
                                <div class=\"chat-header\">
                                    <h5 class=\"list-heading\">Offline</h5>
                                </div>
                                <ul class=\"media-list list-items\">
                                    <li class=\"media\">
                                        <div class=\"media-status\">
                                            <span class=\"badge badge-warning\">4</span>
                                        </div> <img class=\"media-object\" src=\"{{ asset ('back/img/prof/prof6.jpg')}}\"
                                                    width=\"35\" height=\"35\" alt=\"...\">
                                        <i class=\"offline dot\"></i>
                                        <div class=\"media-body\">
                                            <h5 class=\"media-heading\">Jennifer Maklen</h5>
                                            <div class=\"media-heading-sub\">Nurse</div>
                                            <div class=\"media-heading-small\">Last seen 01:20 AM</div>
                                        </div>
                                    </li>
                                    <li class=\"media\"><img class=\"media-object\" src=\"{{ asset ('back/img/prof/prof8.jpg')}}\"
                                                           width=\"35\" height=\"35\" alt=\"...\">
                                        <i class=\"offline dot\"></i>
                                        <div class=\"media-body\">
                                            <h5 class=\"media-heading\">Lina Smith</h5>
                                            <div class=\"media-heading-sub\">Ortho Surgeon</div>
                                            <div class=\"media-heading-small\">Last seen 11:14 PM</div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <div class=\"media-status\">
                                            <span class=\"badge badge-success\">9</span>
                                        </div> <img class=\"media-object\" src=\"{{ asset ('back/img/prof/prof9.jpg')}}\"
                                                    width=\"35\" height=\"35\" alt=\"...\">
                                        <i class=\"offline dot\"></i>
                                        <div class=\"media-body\">
                                            <h5 class=\"media-heading\">Jeff Adam</h5>
                                            <div class=\"media-heading-sub\">Compounder</div>
                                            <div class=\"media-heading-small\">Last seen 3:31 PM</div>
                                        </div>
                                    </li>
                                    <li class=\"media\"><img class=\"media-object\" src=\"{{ asset ('back/img/prof/prof10.jpg')}}\"
                                                           width=\"35\" height=\"35\" alt=\"...\">
                                        <i class=\"offline dot\"></i>
                                        <div class=\"media-body\">
                                            <h5 class=\"media-heading\">Anjelina Cardella</h5>
                                            <div class=\"media-heading-sub\">Physiotherapist</div>
                                            <div class=\"media-heading-small\">Last seen 7:45 PM</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Doctor Chat -->
                    <!-- Start Setting Panel -->
                    <div class=\"tab-pane chat-sidebar-settings\" role=\"tabpanel\" id=\"quick_sidebar_tab_3\">
                        <div class=\"chat-sidebar-settings-list slimscroll-style\">
                            <div class=\"chat-header\">
                                <h5 class=\"list-heading\">Layout Settings</h5>
                            </div>
                            <div class=\"chatpane inner-content \">
                                <div class=\"settings-list\">
                                    <div class=\"setting-item\">
                                        <div class=\"setting-text\">Sidebar Position</div>
                                        <div class=\"setting-set\">
                                            <select
                                                    class=\"sidebar-pos-option form-control input-inline input-sm input-small \">
                                                <option value=\"left\" selected=\"selected\">Left</option>
                                                <option value=\"right\">Right</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"setting-item\">
                                        <div class=\"setting-text\">Header</div>
                                        <div class=\"setting-set\">
                                            <select
                                                    class=\"page-header-option form-control input-inline input-sm input-small \">
                                                <option value=\"fixed\" selected=\"selected\">Fixed</option>
                                                <option value=\"default\">Default</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"setting-item\">
                                        <div class=\"setting-text\">Footer</div>
                                        <div class=\"setting-set\">
                                            <select
                                                    class=\"page-footer-option form-control input-inline input-sm input-small \">
                                                <option value=\"fixed\">Fixed</option>
                                                <option value=\"default\" selected=\"selected\">Default</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"chat-header\">
                                    <h5 class=\"list-heading\">Account Settings</h5>
                                </div>
                                <div class=\"settings-list\">
                                    <div class=\"setting-item\">
                                        <div class=\"setting-text\">Notifications</div>
                                        <div class=\"setting-set\">
                                            <div class=\"switch\">
                                                <label class=\"mdl-switch mdl-js-switch mdl-js-ripple-effect\"
                                                       for=\"switch-1\">
                                                    <input type=\"checkbox\" id=\"switch-1\" class=\"mdl-switch__input\"
                                                           checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"setting-item\">
                                        <div class=\"setting-text\">Show Online</div>
                                        <div class=\"setting-set\">
                                            <div class=\"switch\">
                                                <label class=\"mdl-switch mdl-js-switch mdl-js-ripple-effect\"
                                                       for=\"switch-7\">
                                                    <input type=\"checkbox\" id=\"switch-7\" class=\"mdl-switch__input\"
                                                           checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"setting-item\">
                                        <div class=\"setting-text\">Status</div>
                                        <div class=\"setting-set\">
                                            <div class=\"switch\">
                                                <label class=\"mdl-switch mdl-js-switch mdl-js-ripple-effect\"
                                                       for=\"switch-2\">
                                                    <input type=\"checkbox\" id=\"switch-2\" class=\"mdl-switch__input\"
                                                           checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"setting-item\">
                                        <div class=\"setting-text\">2 Steps Verification</div>
                                        <div class=\"setting-set\">
                                            <div class=\"switch\">
                                                <label class=\"mdl-switch mdl-js-switch mdl-js-ripple-effect\"
                                                       for=\"switch-3\">
                                                    <input type=\"checkbox\" id=\"switch-3\" class=\"mdl-switch__input\"
                                                           checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"chat-header\">
                                    <h5 class=\"list-heading\">General Settings</h5>
                                </div>
                                <div class=\"settings-list\">
                                    <div class=\"setting-item\">
                                        <div class=\"setting-text\">Location</div>
                                        <div class=\"setting-set\">
                                            <div class=\"switch\">
                                                <label class=\"mdl-switch mdl-js-switch mdl-js-ripple-effect\"
                                                       for=\"switch-4\">
                                                    <input type=\"checkbox\" id=\"switch-4\" class=\"mdl-switch__input\"
                                                           checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"setting-item\">
                                        <div class=\"setting-text\">Save Histry</div>
                                        <div class=\"setting-set\">
                                            <div class=\"switch\">
                                                <label class=\"mdl-switch mdl-js-switch mdl-js-ripple-effect\"
                                                       for=\"switch-5\">
                                                    <input type=\"checkbox\" id=\"switch-5\" class=\"mdl-switch__input\"
                                                           checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"setting-item\">
                                        <div class=\"setting-text\">Auto Updates</div>
                                        <div class=\"setting-set\">
                                            <div class=\"switch\">
                                                <label class=\"mdl-switch mdl-js-switch mdl-js-ripple-effect\"
                                                       for=\"switch-6\">
                                                    <input type=\"checkbox\" id=\"switch-6\" class=\"mdl-switch__input\"
                                                           checked>
                                                </label>
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
        <!-- end chat sidebar -->
    </div>
    <!-- end page container -->
    <!-- start footer -->
    <div class=\"page-footer\">
        <div class=\"page-footer-inner\"> 2017 &copy; Smart University Theme By
            <a href=\"mailto:redstartheme@gmail.com\" target=\"_top\" class=\"makerCss\">Redstar Theme</a>
        </div>
        <div class=\"scroll-to-top\">
            <i class=\"icon-arrow-up\"></i>
        </div>
    </div>
    <!-- end footer -->
</div>
<!-- start js include path -->
<script src=\"{{ asset ('back/plugins/jquery/jquery.min.js')}}\"></script>
<script src=\"{{ asset ('back/plugins/popper/popper.js')}}\"></script>
<script src=\"{{ asset ('back/plugins/jquery-blockui/jquery.blockui.min.js')}}\"></script>
<script src=\"{{ asset ('back/plugins/jquery-slimscroll/jquery.slimscroll.js')}}\"></script>
<!-- bootstrap -->
<script src=\"{{ asset ('back/plugins/bootstrap/js/bootstrap.min.js')}}\"></script>
<script src=\"{{ asset ('back/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}\"></script>
<script src=\"{{ asset ('back/plugins/sparkline/jquery.sparkline.js')}}\"></script>
<script src=\"{{ asset ('back/js/pages/sparkline/sparkline-data.js')}}\"></script>
<!-- Common js-->
<script src=\"{{ asset ('back/js/app.js')}}\"></script>
<script src=\"{{ asset ('back/js/layout.js')}}\"></script>
<script src=\"{{ asset ('back/js/theme-color.js')}}\"></script>
<!-- material -->
<script src=\"{{ asset ('back/plugins/material/material.min.js')}}\"></script>
<!-- chart js -->
<script src=\"{{ asset ('back/plugins/chart-js/Chart.bundle.js')}}\"></script>
<script src=\"{{ asset ('back/plugins/chart-js/utils.js')}}\"></script>
<script src=\"{{ asset ('back/js/pages/chart/chartjs/home-data.js')}}\"></script>
<!-- summernote -->
<script src=\"{{ asset ('back/plugins/summernote/summernote.js')}}\"></script>
<script src=\"{{ asset ('back/js/pages/summernote/summernote-data.js')}}\"></script>
<!-- end js include path -->
</body>


<!-- Mirrored from radixtouch.in/templates/admin/smart/source/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Jan 2020 11:29:59 GMT -->
</html>
", "baseback.html.twig", "C:\\wamp64\\www\\SMF1\\SMF1\\app\\Resources\\views\\baseback.html.twig");
    }
}
