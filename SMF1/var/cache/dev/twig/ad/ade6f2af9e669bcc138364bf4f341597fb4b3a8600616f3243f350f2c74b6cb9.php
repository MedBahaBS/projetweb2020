<?php

/* default/index.html.twig */
class __TwigTemplate_aad935231b7e4a7db571f151331d6264fc2d8ee62a43fd35485d02803de165ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("basefront.html.twig", "default/index.html.twig", 1);
        $this->blocks = [
            'header' => [$this, 'block_header'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "      <div class=\"py-2 bg-primary\">
          <div class=\"container\">
              <div class=\"row no-gutters d-flex align-items-start align-items-center px-3 px-md-0\">
                  <div class=\"col-lg-12 d-block\">
                      <div class=\"row d-flex\">
                          <div class=\"col-md-5 pr-4 d-flex topper align-items-center\">
                              <div class=\"icon bg-fifth mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-map\"></span></div>
                              <span class=\"text\">Ariana City</span>
                          </div>
                          <div class=\"col-md pr-4 d-flex topper align-items-center\">
                              <div class=\"icon bg-secondary mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-paper-plane\"></span></div>
                              <span class=\"text\">youremail@email.com</span>
                          </div>
                          <div class=\"col-md pr-4 d-flex topper align-items-center\">
                              <div class=\"icon bg-tertiary mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-phone2\"></span></div>
                              <span class=\"text\">+216 22 222 222</span>
                          </div>
                          <div class=\"col-md pr-4 d-flex topper align-items-center\">
                              <div class=\"icon bg-tertiary mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-user\"></span></div>
                              ";
        // line 23
        if (( !(null === $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED"))) {
            // line 24
            echo "                                  <li ><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">se deconnecter</a></li>

                              ";
        } else {
            // line 27
            echo "                                  <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">se connecter</a></li>

                              ";
        }
        // line 30
        echo "                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light\" id=\"ftco-navbar\">
          <div class=\"container d-flex align-items-center\">
              <a class=\"navbar-brand\" href=\"#\">Genius</a>
              <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                  <span class=\"oi oi-menu\"></span> Menu
              </button>
              <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
                  <ul class=\"navbar-nav ml-auto\">
                      <li class=\"nav-item active\"><a href=\"#\" class=\"nav-link pl-0\">Accueil</a></li>
                      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">A propos</a></li>
                      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Professeur</a></li>
                      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Cours</a></li>
                      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Cantine</a></li>
                      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Evenement</a></li>
                      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Club</a></li>
                      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Don</a></li>
                      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Contact</a></li>
                  </ul>
              </div>
          </div>
      </nav>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 61
        echo "      <section class=\"home-slider owl-carousel\">
          <div class=\"slider-item\" style=\"background-image:url(";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg_1.jpg"), "html", null, true);
        echo " );\">
              <div class=\"overlay\"></div>
              <div class=\"container\">
                  <div class=\"row no-gutters slider-text align-items-center justify-content-center\" data-scrollax-parent=\"true\">
                      <div class=\"col-md-8 text-center ftco-animate\">
                          <h1 class=\"mb-4\">Les enfants sont les meilleurs <span>Explorateurs dans le monde</span></h1>
                          <p><a href=\"#\" class=\"btn btn-secondary px-4 py-3 mt-3\">Lire la suite</a></p>
                      </div>
                  </div>
              </div>
          </div>

          <div class=\"slider-item\" style=\"background-image:url(";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg_2.jpg"), "html", null, true);
        echo " );\">
              <div class=\"overlay\"></div>
              <div class=\"container\">
                  <div class=\"row no-gutters slider-text align-items-center justify-content-center\" data-scrollax-parent=\"true\">
                      <div class=\"col-md-8 text-center ftco-animate\">
                          <h1 class=\"mb-4\">Parfaitement appris<span> Pour votre enfant</span></h1>
                          <p><a href=\"#\" class=\"btn btn-secondary px-4 py-3 mt-3\">Lire la suite</a></p>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section class=\"ftco-services ftco-no-pb\">
          <div class=\"container-wrap\">
              <div class=\"row no-gutters\">
                  <div class=\"col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary\">
                      <div class=\"media block-6 d-block text-center\">
                          <div class=\"icon d-flex justify-content-center align-items-center\">
                              <span class=\"flaticon-teacher\"></span>
                          </div>
                          <div class=\"media-body p-2 mt-3\">
                              <h3 class=\"heading\">Enseignants certifiés</h3>
                              <p>Même le pointage tout-puissant n'a aucun contrôle sur les textes aveugles, il est presque orthographique.</p>
                          </div>
                      </div>
                  </div>
                  <div class=\"col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary\">
                      <div class=\"media block-6 d-block text-center\">
                          <div class=\"icon d-flex justify-content-center align-items-center\">
                              <span class=\"flaticon-reading\"></span>
                          </div>
                          <div class=\"media-body p-2 mt-3\">
                              <h3 class=\"heading\">Éducation spéciale</h3>
                              <p>Même le pointage tout-puissant n'a aucun contrôle sur les textes aveugles, il est presque orthographique.</p>
                          </div>
                      </div>
                  </div>
                  <div class=\"col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth\">
                      <div class=\"media block-6 d-block text-center\">
                          <div class=\"icon d-flex justify-content-center align-items-center\">
                              <span class=\"flaticon-books\"></span>
                          </div>
                          <div class=\"media-body p-2 mt-3\">
                              <h3 class=\"heading\">Livre &amp; Bibliothèque</h3>
                              <p>Même le pointage tout-puissant n'a aucun contrôle sur les textes aveugles, il est presque orthographique.</p>
                          </div>
                      </div>
                  </div>
                  <div class=\"col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary\">
                      <div class=\"media block-6 d-block text-center\">
                          <div class=\"icon d-flex justify-content-center align-items-center\">
                              <span class=\"flaticon-diploma\"></span>
                          </div>
                          <div class=\"media-body p-2 mt-3\">
                              <h3 class=\"heading\">Certification</h3>
                              <p>Même le pointage tout-puissant n'a aucun contrôle sur les textes aveugles, il est presque orthographique.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section class=\"ftco-section ftco-no-pt ftc-no-pb\">
          <div class=\"container\">
              <div class=\"row\">
                  <div class=\"col-md-5 order-md-last wrap-about py-5 wrap-about bg-light\">
                      <div class=\"text px-4 ftco-animate\">
                          <h2 class=\"mb-4\">Welcome to Kiddos Learning School</h2>
                          <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
                          <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. And if she hasn’t been rewritten, then they are still using her.</p>
                          <p><a href=\"#\" class=\"btn btn-secondary px-4 py-3\">Read More</a></p>
                      </div>
                  </div>
                  <div class=\"col-md-7 wrap-about py-5 pr-md-4 ftco-animate\">
                      <h2 class=\"mb-4\">What We Offer</h2>
                      <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
                      <div class=\"row mt-5\">
                          <div class=\"col-lg-6\">
                              <div class=\"services-2 d-flex\">
                                  <div class=\"icon mt-2 mr-3 d-flex justify-content-center align-items-center\"><span class=\"flaticon-security\"></span></div>
                                  <div class=\"text\">
                                      <h3>Safety First</h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                  </div>
                              </div>
                          </div>
                          <div class=\"col-lg-6\">
                              <div class=\"services-2 d-flex\">
                                  <div class=\"icon mt-2 mr-3 d-flex justify-content-center align-items-center\"><span class=\"flaticon-reading\"></span></div>
                                  <div class=\"text\">
                                      <h3>Regular Classes</h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                  </div>
                              </div>
                          </div>
                          <div class=\"col-lg-6\">
                              <div class=\"services-2 d-flex\">
                                  <div class=\"icon mt-2 mr-3 d-flex justify-content-center align-items-center\"><span class=\"flaticon-diploma\"></span></div>
                                  <div class=\"text\">
                                      <h3>Certified Teachers</h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                  </div>
                              </div>
                          </div>
                          <div class=\"col-lg-6\">
                              <div class=\"services-2 d-flex\">
                                  <div class=\"icon mt-2 mr-3 d-flex justify-content-center align-items-center\"><span class=\"flaticon-education\"></span></div>
                                  <div class=\"text\">
                                      <h3>Sufficient Classrooms</h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                  </div>
                              </div>
                          </div>
                          <div class=\"col-lg-6\">
                              <div class=\"services-2 d-flex\">
                                  <div class=\"icon mt-2 mr-3 d-flex justify-content-center align-items-center\"><span class=\"flaticon-jigsaw\"></span></div>
                                  <div class=\"text\">
                                      <h3>Creative Lessons</h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                  </div>
                              </div>
                          </div>
                          <div class=\"col-lg-6\">
                              <div class=\"services-2 d-flex\">
                                  <div class=\"icon mt-2 mr-3 d-flex justify-content-center align-items-center\"><span class=\"flaticon-kids\"></span></div>
                                  <div class=\"text\">
                                      <h3>Sports Facilities</h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section class=\"ftco-intro\" style=\"background-image: url( ";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg_3.jpg"), "html", null, true);
        echo " );\" data-stellar-background-ratio=\"0.5\">
          <div class=\"overlay\"></div>
          <div class=\"container\">
              <div class=\"row\">
                  <div class=\"col-md-9\">
                      <h2>Teaching Your Child Some Good Manners</h2>
                      <p class=\"mb-0\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                  </div>
                  <div class=\"col-md-3 d-flex align-items-center\">
                      <p class=\"mb-0\"><a href=\"#\" class=\"btn btn-secondary px-4 py-3\">Take a Course</a></p>
                  </div>
              </div>
          </div>
      </section>


      <section class=\"ftco-section ftco-no-pb\">
          <div class=\"container\">
              <div class=\"row justify-content-center mb-5 pb-2\">
                  <div class=\"col-md-8 text-center heading-section ftco-animate\">
                      <h2 class=\"mb-4\"><span>Certified</span> Teachers</h2>
                      <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                  </div>
              </div>
              <div class=\"row\">
                  <div class=\"col-md-6 col-lg-3 ftco-animate\">
                      <div class=\"staff\">
                          <div class=\"img-wrap d-flex align-items-stretch\">
                              <div class=\"img align-self-stretch\" style=\"background-image: url( ";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/teacher-1.jpg"), "html", null, true);
        echo " );\"></div>
                          </div>
                          <div class=\"text pt-3 text-center\">
                              <h3>Bianca Wilson</h3>
                              <span class=\"position mb-2\">Teacher</span>
                              <div class=\"faded\">
                                  <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                  <ul class=\"ftco-social text-center\">
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-google-plus\"></span></a></li>
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class=\"col-md-6 col-lg-3 ftco-animate\">
                      <div class=\"staff\">
                          <div class=\"img-wrap d-flex align-items-stretch\">
                              <div class=\"img align-self-stretch\" style=\"background-image: url(";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(" images/teacher-2.jpg"), "html", null, true);
        echo " );\"></div>
                          </div>
                          <div class=\"text pt-3 text-center\">
                              <h3>Mitch Parker</h3>
                              <span class=\"position mb-2\">English Teacher</span>
                              <div class=\"faded\">
                                  <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                  <ul class=\"ftco-social text-center\">
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-google-plus\"></span></a></li>
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class=\"col-md-6 col-lg-3 ftco-animate\">
                      <div class=\"staff\">
                          <div class=\"img-wrap d-flex align-items-stretch\">
                              <div class=\"img align-self-stretch\" style=\"background-image: url(";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(" images/teacher-3.jpg"), "html", null, true);
        echo " );\"></div>
                          </div>
                          <div class=\"text pt-3 text-center\">
                              <h3>Stella Smith</h3>
                              <span class=\"position mb-2\">Art Teacher</span>
                              <div class=\"faded\">
                                  <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                  <ul class=\"ftco-social text-center\">
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-google-plus\"></span></a></li>
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class=\"col-md-6 col-lg-3 ftco-animate\">
                      <div class=\"staff\">
                          <div class=\"img-wrap d-flex align-items-stretch\">
                              <div class=\"img align-self-stretch\" style=\"background-image: url(";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/teacher-4.jpg"), "html", null, true);
        echo " );\"></div>
                          </div>
                          <div class=\"text pt-3 text-center\">
                              <h3>Monshe Henderson</h3>
                              <span class=\"position mb-2\">Science Teacher</span>
                              <div class=\"faded\">
                                  <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                  <ul class=\"ftco-social text-center\">
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-google-plus\"></span></a></li>
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section class=\"ftco-section\">
          <div class=\"container\">
              <div class=\"row justify-content-center mb-5 pb-2\">
                  <div class=\"col-md-8 text-center heading-section ftco-animate\">
                      <h2 class=\"mb-4\"><span>Our</span> Courses</h2>
                      <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                  </div>
              </div>
              <div class=\"row\">
                  <div class=\"col-md-6 course d-lg-flex ftco-animate\">
                      <div class=\"img\" style=\"background-image: url( ";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/course-1.jpg"), "html", null, true);
        echo " );\"></div>
                      <div class=\"text bg-light p-4\">
                          <h3><a href=\"#\">Arts Lesson</a></h3>
                          <p class=\"subheading\"><span>Class time:</span> 9:00am - 10am</p>
                          <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                      </div>
                  </div>
                  <div class=\"col-md-6 course d-lg-flex ftco-animate\">
                      <div class=\"img\" style=\"background-image: url(";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/course-2.jpg"), "html", null, true);
        echo " );\"></div>
                      <div class=\"text bg-light p-4\">
                          <h3><a href=\"#\">Language Lesson</a></h3>
                          <p class=\"subheading\"><span>Class time:</span> 9:00am - 10am</p>
                          <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                      </div>
                  </div>
                  <div class=\"col-md-6 course d-lg-flex ftco-animate\">
                      <div class=\"img\" style=\"background-image: url( ";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/course-3.jpg"), "html", null, true);
        echo "  );\"></div>
                      <div class=\"text bg-light p-4\">
                          <h3><a href=\"#\">Music Lesson</a></h3>
                          <p class=\"subheading\"><span>Class time:</span> 9:00am - 10am</p>
                          <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                      </div>
                  </div>
                  <div class=\"col-md-6 course d-lg-flex ftco-animate\">
                      <div class=\"img\" style=\"background-image: url(";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(" images/course-4.jpg"), "html", null, true);
        echo " );\"></div>
                      <div class=\"text bg-light p-4\">
                          <h3><a href=\"#\">Sports Lesson</a></h3>
                          <p class=\"subheading\"><span>Class time:</span> 9:00am - 10am</p>
                          <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section class=\"ftco-section ftco-counter img\" id=\"section-counter\" style=\"background-image: url(";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg_4.jpg"), "html", null, true);
        echo " );\" data-stellar-background-ratio=\"0.5\">
          <div class=\"container\">
              <div class=\"row justify-content-center mb-5 pb-2\">
                  <div class=\"col-md-8 text-center heading-section heading-section-black ftco-animate\">
                      <h2 class=\"mb-4\"><span>20 Years of</span> Experience</h2>
                      <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                  </div>
              </div>
              <div class=\"row d-md-flex align-items-center justify-content-center\">
                  <div class=\"col-lg-10\">
                      <div class=\"row d-md-flex align-items-center\">
                          <div class=\"col-md d-flex justify-content-center counter-wrap ftco-animate\">
                              <div class=\"block-18\">
                                  <div class=\"icon\"><span class=\"flaticon-doctor\"></span></div>
                                  <div class=\"text\">
                                      <strong class=\"number\" data-number=\"18\">0</strong>
                                      <span>Certified Teachers</span>
                                  </div>
                              </div>
                          </div>
                          <div class=\"col-md d-flex justify-content-center counter-wrap ftco-animate\">
                              <div class=\"block-18\">
                                  <div class=\"icon\"><span class=\"flaticon-doctor\"></span></div>
                                  <div class=\"text\">
                                      <strong class=\"number\" data-number=\"351\">0</strong>
                                      <span>Successful Kids</span>
                                  </div>
                              </div>
                          </div>
                          <div class=\"col-md d-flex justify-content-center counter-wrap ftco-animate\">
                              <div class=\"block-18\">
                                  <div class=\"icon\"><span class=\"flaticon-doctor\"></span></div>
                                  <div class=\"text\">
                                      <strong class=\"number\" data-number=\"564\">0</strong>
                                      <span>Happy Parents</span>
                                  </div>
                              </div>
                          </div>
                          <div class=\"col-md d-flex justify-content-center counter-wrap ftco-animate\">
                              <div class=\"block-18\">
                                  <div class=\"icon\"><span class=\"flaticon-doctor\"></span></div>
                                  <div class=\"text\">
                                      <strong class=\"number\" data-number=\"300\">0</strong>
                                      <span>Awards Won</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section class=\"ftco-gallery\">
          <div class=\"container-wrap\">
              <div class=\"row no-gutters\">
                  <div class=\"col-md-3 ftco-animate\">
                      <a href=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(" images/image_1.jpg"), "html", null, true);
        echo " \" class=\"gallery image-popup img d-flex align-items-center\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/course-1.jpg"), "html", null, true);
        echo " );\">
                          <div class=\"icon mb-4 d-flex align-items-center justify-content-center\">
                              <span class=\"icon-instagram\"></span>
                          </div>
                      </a>
                  </div>
                  <div class=\"col-md-3 ftco-animate\">
                      <a href=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(" images/image_2.jpg"), "html", null, true);
        echo "\" class=\"gallery image-popup img d-flex align-items-center\" style=\"background-image: url( ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/image_2.jpg"), "html", null, true);
        echo " );\">
                          <div class=\"icon mb-4 d-flex align-items-center justify-content-center\">
                              <span class=\"icon-instagram\"></span>
                          </div>
                      </a>
                  </div>
                  <div class=\"col-md-3 ftco-animate\">
                      <a href=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/image_3.jpg"), "html", null, true);
        echo "\" class=\"gallery image-popup img d-flex align-items-center\" style=\"background-image: url( ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/image_3.jpg"), "html", null, true);
        echo " );\">
                          <div class=\"icon mb-4 d-flex align-items-center justify-content-center\">
                              <span class=\"icon-instagram\"></span>
                          </div>
                      </a>
                  </div>
                  <div class=\"col-md-3 ftco-animate\">
                      <a href=\" ";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/image_4.jpg"), "html", null, true);
        echo " \" class=\"gallery image-popup img d-flex align-items-center\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(" images/image_4.jpg"), "html", null, true);
        echo " );\">
                          <div class=\"icon mb-4 d-flex align-items-center justify-content-center\">
                              <span class=\"icon-instagram\"></span>
                          </div>
                      </a>
                  </div>
              </div>
          </div>
      </section>

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  570 => 445,  558 => 438,  546 => 431,  534 => 424,  474 => 367,  460 => 356,  449 => 348,  438 => 340,  427 => 332,  393 => 301,  370 => 281,  347 => 261,  324 => 241,  293 => 213,  151 => 74,  136 => 62,  133 => 61,  124 => 60,  87 => 30,  80 => 27,  73 => 24,  71 => 23,  50 => 4,  41 => 3,  11 => 1,);
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

  {% block header %}
      <div class=\"py-2 bg-primary\">
          <div class=\"container\">
              <div class=\"row no-gutters d-flex align-items-start align-items-center px-3 px-md-0\">
                  <div class=\"col-lg-12 d-block\">
                      <div class=\"row d-flex\">
                          <div class=\"col-md-5 pr-4 d-flex topper align-items-center\">
                              <div class=\"icon bg-fifth mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-map\"></span></div>
                              <span class=\"text\">Ariana City</span>
                          </div>
                          <div class=\"col-md pr-4 d-flex topper align-items-center\">
                              <div class=\"icon bg-secondary mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-paper-plane\"></span></div>
                              <span class=\"text\">youremail@email.com</span>
                          </div>
                          <div class=\"col-md pr-4 d-flex topper align-items-center\">
                              <div class=\"icon bg-tertiary mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-phone2\"></span></div>
                              <span class=\"text\">+216 22 222 222</span>
                          </div>
                          <div class=\"col-md pr-4 d-flex topper align-items-center\">
                              <div class=\"icon bg-tertiary mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-user\"></span></div>
                              {% if app.user is not null and is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                  <li ><a href=\"{{ path('fos_user_security_logout') }}\">se deconnecter</a></li>

                              {% else %}
                                  <li><a href=\"{{ path('fos_user_security_login') }}\">se connecter</a></li>

                              {% endif %}
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light\" id=\"ftco-navbar\">
          <div class=\"container d-flex align-items-center\">
              <a class=\"navbar-brand\" href=\"#\">Genius</a>
              <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                  <span class=\"oi oi-menu\"></span> Menu
              </button>
              <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
                  <ul class=\"navbar-nav ml-auto\">
                      <li class=\"nav-item active\"><a href=\"#\" class=\"nav-link pl-0\">Accueil</a></li>
                      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">A propos</a></li>
                      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Professeur</a></li>
                      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Cours</a></li>
                      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Cantine</a></li>
                      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Evenement</a></li>
                      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Club</a></li>
                      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Don</a></li>
                      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Contact</a></li>
                  </ul>
              </div>
          </div>
      </nav>
  {% endblock %}


  {% block content %}
      <section class=\"home-slider owl-carousel\">
          <div class=\"slider-item\" style=\"background-image:url({{ asset('images/bg_1.jpg')}} );\">
              <div class=\"overlay\"></div>
              <div class=\"container\">
                  <div class=\"row no-gutters slider-text align-items-center justify-content-center\" data-scrollax-parent=\"true\">
                      <div class=\"col-md-8 text-center ftco-animate\">
                          <h1 class=\"mb-4\">Les enfants sont les meilleurs <span>Explorateurs dans le monde</span></h1>
                          <p><a href=\"#\" class=\"btn btn-secondary px-4 py-3 mt-3\">Lire la suite</a></p>
                      </div>
                  </div>
              </div>
          </div>

          <div class=\"slider-item\" style=\"background-image:url({{ asset('images/bg_2.jpg')}} );\">
              <div class=\"overlay\"></div>
              <div class=\"container\">
                  <div class=\"row no-gutters slider-text align-items-center justify-content-center\" data-scrollax-parent=\"true\">
                      <div class=\"col-md-8 text-center ftco-animate\">
                          <h1 class=\"mb-4\">Parfaitement appris<span> Pour votre enfant</span></h1>
                          <p><a href=\"#\" class=\"btn btn-secondary px-4 py-3 mt-3\">Lire la suite</a></p>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section class=\"ftco-services ftco-no-pb\">
          <div class=\"container-wrap\">
              <div class=\"row no-gutters\">
                  <div class=\"col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary\">
                      <div class=\"media block-6 d-block text-center\">
                          <div class=\"icon d-flex justify-content-center align-items-center\">
                              <span class=\"flaticon-teacher\"></span>
                          </div>
                          <div class=\"media-body p-2 mt-3\">
                              <h3 class=\"heading\">Enseignants certifiés</h3>
                              <p>Même le pointage tout-puissant n'a aucun contrôle sur les textes aveugles, il est presque orthographique.</p>
                          </div>
                      </div>
                  </div>
                  <div class=\"col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary\">
                      <div class=\"media block-6 d-block text-center\">
                          <div class=\"icon d-flex justify-content-center align-items-center\">
                              <span class=\"flaticon-reading\"></span>
                          </div>
                          <div class=\"media-body p-2 mt-3\">
                              <h3 class=\"heading\">Éducation spéciale</h3>
                              <p>Même le pointage tout-puissant n'a aucun contrôle sur les textes aveugles, il est presque orthographique.</p>
                          </div>
                      </div>
                  </div>
                  <div class=\"col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth\">
                      <div class=\"media block-6 d-block text-center\">
                          <div class=\"icon d-flex justify-content-center align-items-center\">
                              <span class=\"flaticon-books\"></span>
                          </div>
                          <div class=\"media-body p-2 mt-3\">
                              <h3 class=\"heading\">Livre &amp; Bibliothèque</h3>
                              <p>Même le pointage tout-puissant n'a aucun contrôle sur les textes aveugles, il est presque orthographique.</p>
                          </div>
                      </div>
                  </div>
                  <div class=\"col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary\">
                      <div class=\"media block-6 d-block text-center\">
                          <div class=\"icon d-flex justify-content-center align-items-center\">
                              <span class=\"flaticon-diploma\"></span>
                          </div>
                          <div class=\"media-body p-2 mt-3\">
                              <h3 class=\"heading\">Certification</h3>
                              <p>Même le pointage tout-puissant n'a aucun contrôle sur les textes aveugles, il est presque orthographique.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section class=\"ftco-section ftco-no-pt ftc-no-pb\">
          <div class=\"container\">
              <div class=\"row\">
                  <div class=\"col-md-5 order-md-last wrap-about py-5 wrap-about bg-light\">
                      <div class=\"text px-4 ftco-animate\">
                          <h2 class=\"mb-4\">Welcome to Kiddos Learning School</h2>
                          <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
                          <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. And if she hasn’t been rewritten, then they are still using her.</p>
                          <p><a href=\"#\" class=\"btn btn-secondary px-4 py-3\">Read More</a></p>
                      </div>
                  </div>
                  <div class=\"col-md-7 wrap-about py-5 pr-md-4 ftco-animate\">
                      <h2 class=\"mb-4\">What We Offer</h2>
                      <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
                      <div class=\"row mt-5\">
                          <div class=\"col-lg-6\">
                              <div class=\"services-2 d-flex\">
                                  <div class=\"icon mt-2 mr-3 d-flex justify-content-center align-items-center\"><span class=\"flaticon-security\"></span></div>
                                  <div class=\"text\">
                                      <h3>Safety First</h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                  </div>
                              </div>
                          </div>
                          <div class=\"col-lg-6\">
                              <div class=\"services-2 d-flex\">
                                  <div class=\"icon mt-2 mr-3 d-flex justify-content-center align-items-center\"><span class=\"flaticon-reading\"></span></div>
                                  <div class=\"text\">
                                      <h3>Regular Classes</h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                  </div>
                              </div>
                          </div>
                          <div class=\"col-lg-6\">
                              <div class=\"services-2 d-flex\">
                                  <div class=\"icon mt-2 mr-3 d-flex justify-content-center align-items-center\"><span class=\"flaticon-diploma\"></span></div>
                                  <div class=\"text\">
                                      <h3>Certified Teachers</h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                  </div>
                              </div>
                          </div>
                          <div class=\"col-lg-6\">
                              <div class=\"services-2 d-flex\">
                                  <div class=\"icon mt-2 mr-3 d-flex justify-content-center align-items-center\"><span class=\"flaticon-education\"></span></div>
                                  <div class=\"text\">
                                      <h3>Sufficient Classrooms</h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                  </div>
                              </div>
                          </div>
                          <div class=\"col-lg-6\">
                              <div class=\"services-2 d-flex\">
                                  <div class=\"icon mt-2 mr-3 d-flex justify-content-center align-items-center\"><span class=\"flaticon-jigsaw\"></span></div>
                                  <div class=\"text\">
                                      <h3>Creative Lessons</h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                  </div>
                              </div>
                          </div>
                          <div class=\"col-lg-6\">
                              <div class=\"services-2 d-flex\">
                                  <div class=\"icon mt-2 mr-3 d-flex justify-content-center align-items-center\"><span class=\"flaticon-kids\"></span></div>
                                  <div class=\"text\">
                                      <h3>Sports Facilities</h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section class=\"ftco-intro\" style=\"background-image: url( {{ asset('images/bg_3.jpg')}} );\" data-stellar-background-ratio=\"0.5\">
          <div class=\"overlay\"></div>
          <div class=\"container\">
              <div class=\"row\">
                  <div class=\"col-md-9\">
                      <h2>Teaching Your Child Some Good Manners</h2>
                      <p class=\"mb-0\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                  </div>
                  <div class=\"col-md-3 d-flex align-items-center\">
                      <p class=\"mb-0\"><a href=\"#\" class=\"btn btn-secondary px-4 py-3\">Take a Course</a></p>
                  </div>
              </div>
          </div>
      </section>


      <section class=\"ftco-section ftco-no-pb\">
          <div class=\"container\">
              <div class=\"row justify-content-center mb-5 pb-2\">
                  <div class=\"col-md-8 text-center heading-section ftco-animate\">
                      <h2 class=\"mb-4\"><span>Certified</span> Teachers</h2>
                      <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                  </div>
              </div>
              <div class=\"row\">
                  <div class=\"col-md-6 col-lg-3 ftco-animate\">
                      <div class=\"staff\">
                          <div class=\"img-wrap d-flex align-items-stretch\">
                              <div class=\"img align-self-stretch\" style=\"background-image: url( {{ asset('images/teacher-1.jpg')}} );\"></div>
                          </div>
                          <div class=\"text pt-3 text-center\">
                              <h3>Bianca Wilson</h3>
                              <span class=\"position mb-2\">Teacher</span>
                              <div class=\"faded\">
                                  <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                  <ul class=\"ftco-social text-center\">
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-google-plus\"></span></a></li>
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class=\"col-md-6 col-lg-3 ftco-animate\">
                      <div class=\"staff\">
                          <div class=\"img-wrap d-flex align-items-stretch\">
                              <div class=\"img align-self-stretch\" style=\"background-image: url({{ asset(' images/teacher-2.jpg')}} );\"></div>
                          </div>
                          <div class=\"text pt-3 text-center\">
                              <h3>Mitch Parker</h3>
                              <span class=\"position mb-2\">English Teacher</span>
                              <div class=\"faded\">
                                  <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                  <ul class=\"ftco-social text-center\">
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-google-plus\"></span></a></li>
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class=\"col-md-6 col-lg-3 ftco-animate\">
                      <div class=\"staff\">
                          <div class=\"img-wrap d-flex align-items-stretch\">
                              <div class=\"img align-self-stretch\" style=\"background-image: url({{ asset(' images/teacher-3.jpg')}} );\"></div>
                          </div>
                          <div class=\"text pt-3 text-center\">
                              <h3>Stella Smith</h3>
                              <span class=\"position mb-2\">Art Teacher</span>
                              <div class=\"faded\">
                                  <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                  <ul class=\"ftco-social text-center\">
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-google-plus\"></span></a></li>
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class=\"col-md-6 col-lg-3 ftco-animate\">
                      <div class=\"staff\">
                          <div class=\"img-wrap d-flex align-items-stretch\">
                              <div class=\"img align-self-stretch\" style=\"background-image: url({{ asset('images/teacher-4.jpg')}} );\"></div>
                          </div>
                          <div class=\"text pt-3 text-center\">
                              <h3>Monshe Henderson</h3>
                              <span class=\"position mb-2\">Science Teacher</span>
                              <div class=\"faded\">
                                  <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                  <ul class=\"ftco-social text-center\">
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-google-plus\"></span></a></li>
                                      <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section class=\"ftco-section\">
          <div class=\"container\">
              <div class=\"row justify-content-center mb-5 pb-2\">
                  <div class=\"col-md-8 text-center heading-section ftco-animate\">
                      <h2 class=\"mb-4\"><span>Our</span> Courses</h2>
                      <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                  </div>
              </div>
              <div class=\"row\">
                  <div class=\"col-md-6 course d-lg-flex ftco-animate\">
                      <div class=\"img\" style=\"background-image: url( {{ asset('images/course-1.jpg')}} );\"></div>
                      <div class=\"text bg-light p-4\">
                          <h3><a href=\"#\">Arts Lesson</a></h3>
                          <p class=\"subheading\"><span>Class time:</span> 9:00am - 10am</p>
                          <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                      </div>
                  </div>
                  <div class=\"col-md-6 course d-lg-flex ftco-animate\">
                      <div class=\"img\" style=\"background-image: url({{ asset('images/course-2.jpg')}} );\"></div>
                      <div class=\"text bg-light p-4\">
                          <h3><a href=\"#\">Language Lesson</a></h3>
                          <p class=\"subheading\"><span>Class time:</span> 9:00am - 10am</p>
                          <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                      </div>
                  </div>
                  <div class=\"col-md-6 course d-lg-flex ftco-animate\">
                      <div class=\"img\" style=\"background-image: url( {{ asset('images/course-3.jpg')}}  );\"></div>
                      <div class=\"text bg-light p-4\">
                          <h3><a href=\"#\">Music Lesson</a></h3>
                          <p class=\"subheading\"><span>Class time:</span> 9:00am - 10am</p>
                          <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                      </div>
                  </div>
                  <div class=\"col-md-6 course d-lg-flex ftco-animate\">
                      <div class=\"img\" style=\"background-image: url({{ asset(' images/course-4.jpg')}} );\"></div>
                      <div class=\"text bg-light p-4\">
                          <h3><a href=\"#\">Sports Lesson</a></h3>
                          <p class=\"subheading\"><span>Class time:</span> 9:00am - 10am</p>
                          <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section class=\"ftco-section ftco-counter img\" id=\"section-counter\" style=\"background-image: url({{ asset('images/bg_4.jpg')}} );\" data-stellar-background-ratio=\"0.5\">
          <div class=\"container\">
              <div class=\"row justify-content-center mb-5 pb-2\">
                  <div class=\"col-md-8 text-center heading-section heading-section-black ftco-animate\">
                      <h2 class=\"mb-4\"><span>20 Years of</span> Experience</h2>
                      <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                  </div>
              </div>
              <div class=\"row d-md-flex align-items-center justify-content-center\">
                  <div class=\"col-lg-10\">
                      <div class=\"row d-md-flex align-items-center\">
                          <div class=\"col-md d-flex justify-content-center counter-wrap ftco-animate\">
                              <div class=\"block-18\">
                                  <div class=\"icon\"><span class=\"flaticon-doctor\"></span></div>
                                  <div class=\"text\">
                                      <strong class=\"number\" data-number=\"18\">0</strong>
                                      <span>Certified Teachers</span>
                                  </div>
                              </div>
                          </div>
                          <div class=\"col-md d-flex justify-content-center counter-wrap ftco-animate\">
                              <div class=\"block-18\">
                                  <div class=\"icon\"><span class=\"flaticon-doctor\"></span></div>
                                  <div class=\"text\">
                                      <strong class=\"number\" data-number=\"351\">0</strong>
                                      <span>Successful Kids</span>
                                  </div>
                              </div>
                          </div>
                          <div class=\"col-md d-flex justify-content-center counter-wrap ftco-animate\">
                              <div class=\"block-18\">
                                  <div class=\"icon\"><span class=\"flaticon-doctor\"></span></div>
                                  <div class=\"text\">
                                      <strong class=\"number\" data-number=\"564\">0</strong>
                                      <span>Happy Parents</span>
                                  </div>
                              </div>
                          </div>
                          <div class=\"col-md d-flex justify-content-center counter-wrap ftco-animate\">
                              <div class=\"block-18\">
                                  <div class=\"icon\"><span class=\"flaticon-doctor\"></span></div>
                                  <div class=\"text\">
                                      <strong class=\"number\" data-number=\"300\">0</strong>
                                      <span>Awards Won</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section class=\"ftco-gallery\">
          <div class=\"container-wrap\">
              <div class=\"row no-gutters\">
                  <div class=\"col-md-3 ftco-animate\">
                      <a href=\"{{ asset(' images/image_1.jpg')}} \" class=\"gallery image-popup img d-flex align-items-center\" style=\"background-image: url({{ asset('images/course-1.jpg')}} );\">
                          <div class=\"icon mb-4 d-flex align-items-center justify-content-center\">
                              <span class=\"icon-instagram\"></span>
                          </div>
                      </a>
                  </div>
                  <div class=\"col-md-3 ftco-animate\">
                      <a href=\"{{ asset(' images/image_2.jpg')}}\" class=\"gallery image-popup img d-flex align-items-center\" style=\"background-image: url( {{ asset('images/image_2.jpg')}} );\">
                          <div class=\"icon mb-4 d-flex align-items-center justify-content-center\">
                              <span class=\"icon-instagram\"></span>
                          </div>
                      </a>
                  </div>
                  <div class=\"col-md-3 ftco-animate\">
                      <a href=\"{{ asset('images/image_3.jpg')}}\" class=\"gallery image-popup img d-flex align-items-center\" style=\"background-image: url( {{ asset('images/image_3.jpg')}} );\">
                          <div class=\"icon mb-4 d-flex align-items-center justify-content-center\">
                              <span class=\"icon-instagram\"></span>
                          </div>
                      </a>
                  </div>
                  <div class=\"col-md-3 ftco-animate\">
                      <a href=\" {{ asset('images/image_4.jpg')}} \" class=\"gallery image-popup img d-flex align-items-center\" style=\"background-image: url({{ asset(' images/image_4.jpg')}} );\">
                          <div class=\"icon mb-4 d-flex align-items-center justify-content-center\">
                              <span class=\"icon-instagram\"></span>
                          </div>
                      </a>
                  </div>
              </div>
          </div>
      </section>

  {% endblock %}

", "default/index.html.twig", "C:\\wamp64\\www\\SMF1\\SMF1\\app\\Resources\\views\\default\\index.html.twig");
    }
}
