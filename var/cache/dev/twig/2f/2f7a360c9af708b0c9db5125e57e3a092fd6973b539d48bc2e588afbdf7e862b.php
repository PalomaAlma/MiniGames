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

/* home/index.html.twig */
class __TwigTemplate_9d614654dafee5200bedf99c61440913374bbfacb9c939d932758e8cff280583 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mini Game";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container-fluid text-center\">
        <h1 class=\"m-5\">Guess the number in my mind</h1>

        <div id=\"mainGame\" class=\"p-5 my-4 w-50 container rounded-pill\">
            <p>Choose a number between 1 and 5</p>
            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form');
        echo "
        </div>
        <div>
            ";
        // line 14
        if ((0 !== twig_compare((isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new RuntimeError('Variable "num" does not exist.', 14, $this->source); })()), null))) {
            // line 15
            echo "            <p>Your number is ";
            echo twig_escape_filter($this->env, (isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new RuntimeError('Variable "num" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "<br>The number in my mind is ";
            echo twig_escape_filter($this->env, (isset($context["randomNumber"]) || array_key_exists("randomNumber", $context) ? $context["randomNumber"] : (function () { throw new RuntimeError('Variable "randomNumber" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "</p>
            <p class=\"display-4\">";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "</p>
                ";
            // line 17
            if ((0 !== twig_compare((isset($context["gain"]) || array_key_exists("gain", $context) ? $context["gain"] : (function () { throw new RuntimeError('Variable "gain" does not exist.', 17, $this->source); })()), null))) {
                // line 18
                echo "                <p class=\"m-2\">Your gain = <a href=\"http://palomavacheron.com/\" class=\"btn btn-lg rounded-pill\">";
                echo twig_escape_filter($this->env, (isset($context["gain"]) || array_key_exists("gain", $context) ? $context["gain"] : (function () { throw new RuntimeError('Variable "gain" does not exist.', 18, $this->source); })()), "html", null, true);
                echo "</a></p>
                ";
            }
            // line 20
            echo "            ";
        }
        // line 21
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 21,  107 => 20,  101 => 18,  99 => 17,  95 => 16,  88 => 15,  86 => 14,  80 => 11,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mini Game{% endblock %}

{% block body %}
    <div class=\"container-fluid text-center\">
        <h1 class=\"m-5\">Guess the number in my mind</h1>

        <div id=\"mainGame\" class=\"p-5 my-4 w-50 container rounded-pill\">
            <p>Choose a number between 1 and 5</p>
            {{ form(form) }}
        </div>
        <div>
            {% if num != null %}
            <p>Your number is {{ num }}<br>The number in my mind is {{ randomNumber }}</p>
            <p class=\"display-4\">{{ notification }}</p>
                {% if gain != null %}
                <p class=\"m-2\">Your gain = <a href=\"http://palomavacheron.com/\" class=\"btn btn-lg rounded-pill\">{{ gain }}</a></p>
                {% endif %}
            {% endif %}
        </div>
    </div>
{% endblock %}", "home/index.html.twig", "C:\\Users\\Paloma\\MiniGames\\templates\\home\\index.html.twig");
    }
}
