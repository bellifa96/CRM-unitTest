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

/* contact/_form.html.twig */
class __TwigTemplate_78961ac585c29ffa5a659f1ba0ab12b17a52ac34900ebc4af8a47375883d5e9a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"row\">
        <div class=\"col-md-6\">
         Prénom ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "firstName", [], "any", false, false, false, 7), 'widget', ["attr" => ["class" => "form-control mb-2"]]);
        echo "
        </div>
        <div class=\"col-md-6\">
        Nom  ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "lastName", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "form-control mb-2"]]);
        echo "
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-md-6\">
       Email   ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "email", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control mb-2"]]);
        echo "

        </div>
        <div class=\"col-md-6\">
         Phone ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "phone", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control mb-2"]]);
        echo "

        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-md-12\">
         Tag ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "tag", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control mb-2"]]);
        echo "
        </div>
      </div>
    </div>
  </div>
</div>
    <button class=\"btn btn-info ml-3\">";
        // line 31
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 31, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contact/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 32,  91 => 31,  82 => 25,  73 => 19,  66 => 15,  58 => 10,  52 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"row\">
        <div class=\"col-md-6\">
         Prénom {{ form_widget(form.firstName,{'attr':{'class':'form-control mb-2'}}) }}
        </div>
        <div class=\"col-md-6\">
        Nom  {{ form_widget(form.lastName,{'attr':{'class':'form-control mb-2'}}) }}
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-md-6\">
       Email   {{ form_widget(form.email,{'attr':{'class':'form-control mb-2'}}) }}

        </div>
        <div class=\"col-md-6\">
         Phone {{ form_widget(form.phone,{'attr': {'class':'form-control mb-2'}}) }}

        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-md-12\">
         Tag {{ form_widget(form.tag,{'attr':{'class':'form-control mb-2'}}) }}
        </div>
      </div>
    </div>
  </div>
</div>
    <button class=\"btn btn-info ml-3\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }}
", "contact/_form.html.twig", "/var/www/project/templates/contact/_form.html.twig");
    }
}
