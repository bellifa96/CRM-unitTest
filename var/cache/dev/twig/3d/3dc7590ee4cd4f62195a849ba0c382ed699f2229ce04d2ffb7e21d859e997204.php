<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_7d06a6e3972ce848c9523e41110542a745f8dd2b4e67f28ac2f978b7ecf57597 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <style>
      @import url(\"//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\");

      .navbar-icon-top .navbar-nav .nav-link > .fa {
        position: relative;
        width: 36px;
        font-size: 24px;
      }

      .navbar-icon-top .navbar-nav .nav-link > .fa > .badge {
        font-size: 0.75rem;
        position: absolute;
        right: 0;
        font-family: sans-serif;
      }

      .navbar-icon-top .navbar-nav .nav-link > .fa {
        top: 3px;
        line-height: 12px;
      }

      .navbar-icon-top .navbar-nav .nav-link > .fa > .badge {
        top: -10px;
      }

      @media (min-width: 576px) {
        .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link {
          text-align: center;
          display: table-cell;
          height: 70px;
          vertical-align: middle;
          padding-top: 0;
          padding-bottom: 0;
        }

        .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link > .fa {
          display: block;
          width: 48px;
          margin: 2px auto 4px auto;
          top: 0;
          line-height: 24px;
        }

        .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link > .fa > .badge {
          top: -7px;
        }
      }

      @media (min-width: 768px) {
        .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link {
          text-align: center;
          display: table-cell;
          height: 70px;
          vertical-align: middle;
          padding-top: 0;
          padding-bottom: 0;
        }

        .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link > .fa {
          display: block;
          width: 48px;
          margin: 2px auto 4px auto;
          top: 0;
          line-height: 24px;
        }

        .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link > .fa > .badge {
          top: -7px;
        }
      }

      @media (min-width: 992px) {
        .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link {
          text-align: center;
          display: table-cell;
          height: 70px;
          vertical-align: middle;
          padding-top: 0;
          padding-bottom: 0;
        }

        .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link > .fa {
          display: block;
          width: 48px;
          margin: 2px auto 4px auto;
          top: 0;
          line-height: 24px;
        }

        .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link > .fa > .badge {
          top: -7px;
        }
      }

      @media (min-width: 1200px) {
        .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link {
          text-align: center;
          display: table-cell;
          height: 70px;
          vertical-align: middle;
          padding-top: 0;
          padding-bottom: 0;
        }

        .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link > .fa {
          display: block;
          width: 48px;
          margin: 2px auto 4px auto;
          top: 0;
          line-height: 24px;
        }

        .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link > .fa > .badge {
          top: -7px;
        }
      }

    </style>
    <body>
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->

    <nav class=\"navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark\">
      <a class=\"navbar-brand\" href=\"#\">Menu</a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"anav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile");
        echo "\">
              <i class=\"fa fa-home\"></i>
              Home
              <span class=\"sr-only\">(current)</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_new");
        echo "\">
              <i class=\"fa fa-envelope-o\">
                <span class=\"badge badge-danger\">+</span>
              </i>
              Contact
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link disabled\" href=\"";
        // line 156
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_index");
        echo "\">
              <i class=\"fa fa-envelope-o\">
                <span class=\"badge badge-warning\">";
        // line 158
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "user", [], "any", false, false, false, 158), "contacts", [], "any", false, false, false, 158)), "html", null, true);
        echo "</span>
              </i>
              Contacts Liste
            </a>
          </li>
        </ul>

      </div>
    </nav>


    ";
        // line 169
        $this->displayBlock('body', $context, $blocks);
        // line 172
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 173
        echo "    </body>

    </div>





</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 169
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 170
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 172
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 172,  306 => 170,  296 => 169,  278 => 6,  259 => 5,  240 => 173,  237 => 172,  235 => 169,  221 => 158,  216 => 156,  205 => 148,  195 => 141,  59 => 7,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <style>
      @import url(\"//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\");

      .navbar-icon-top .navbar-nav .nav-link > .fa {
        position: relative;
        width: 36px;
        font-size: 24px;
      }

      .navbar-icon-top .navbar-nav .nav-link > .fa > .badge {
        font-size: 0.75rem;
        position: absolute;
        right: 0;
        font-family: sans-serif;
      }

      .navbar-icon-top .navbar-nav .nav-link > .fa {
        top: 3px;
        line-height: 12px;
      }

      .navbar-icon-top .navbar-nav .nav-link > .fa > .badge {
        top: -10px;
      }

      @media (min-width: 576px) {
        .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link {
          text-align: center;
          display: table-cell;
          height: 70px;
          vertical-align: middle;
          padding-top: 0;
          padding-bottom: 0;
        }

        .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link > .fa {
          display: block;
          width: 48px;
          margin: 2px auto 4px auto;
          top: 0;
          line-height: 24px;
        }

        .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link > .fa > .badge {
          top: -7px;
        }
      }

      @media (min-width: 768px) {
        .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link {
          text-align: center;
          display: table-cell;
          height: 70px;
          vertical-align: middle;
          padding-top: 0;
          padding-bottom: 0;
        }

        .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link > .fa {
          display: block;
          width: 48px;
          margin: 2px auto 4px auto;
          top: 0;
          line-height: 24px;
        }

        .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link > .fa > .badge {
          top: -7px;
        }
      }

      @media (min-width: 992px) {
        .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link {
          text-align: center;
          display: table-cell;
          height: 70px;
          vertical-align: middle;
          padding-top: 0;
          padding-bottom: 0;
        }

        .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link > .fa {
          display: block;
          width: 48px;
          margin: 2px auto 4px auto;
          top: 0;
          line-height: 24px;
        }

        .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link > .fa > .badge {
          top: -7px;
        }
      }

      @media (min-width: 1200px) {
        .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link {
          text-align: center;
          display: table-cell;
          height: 70px;
          vertical-align: middle;
          padding-top: 0;
          padding-bottom: 0;
        }

        .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link > .fa {
          display: block;
          width: 48px;
          margin: 2px auto 4px auto;
          top: 0;
          line-height: 24px;
        }

        .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link > .fa > .badge {
          top: -7px;
        }
      }

    </style>
    <body>
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->

    <nav class=\"navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark\">
      <a class=\"navbar-brand\" href=\"#\">Menu</a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"anav-item active\">
            <a class=\"nav-link\" href=\"{{ path('user_profile') }}\">
              <i class=\"fa fa-home\"></i>
              Home
              <span class=\"sr-only\">(current)</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('contact_new') }}\">
              <i class=\"fa fa-envelope-o\">
                <span class=\"badge badge-danger\">+</span>
              </i>
              Contact
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link disabled\" href=\"{{ path('contact_index') }}\">
              <i class=\"fa fa-envelope-o\">
                <span class=\"badge badge-warning\">{{ app.user.contacts|length }}</span>
              </i>
              Contacts Liste
            </a>
          </li>
        </ul>

      </div>
    </nav>


    {% block body %}

        {% endblock %}
        {% block javascripts %}{% endblock %}
    </body>

    </div>





</html>
", "base.html.twig", "/var/www/project/templates/base.html.twig");
    }
}
