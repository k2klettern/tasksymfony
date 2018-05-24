<?php

/* index.html.twig */
class __TwigTemplate_840dddc7d02c9a763df1db59e492f61022798af55119d6ee3ff0559db5113fb4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    <ul>
    ";
        // line 3
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 4
            echo "        <li><a href=\"/logout\">Ausloggen</a></li>
    ";
        } else {
            // line 6
            echo "        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\"> Einloggen</a></li>
    ";
        }
        // line 8
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 9
            echo "        <li><a href=\"/admin\">Admin</a></li>
    ";
        }
        // line 11
        echo "    </ul>
    <h5>Wählen Sie eine Kategorie</h5>
    ";
        // line 13
        echo (isset($context["cats"]) || array_key_exists("cats", $context) ? $context["cats"] : (function () { throw new Twig_Error_Runtime('Variable "cats" does not exist.', 13, $this->source); })());
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  74 => 13,  70 => 11,  66 => 9,  63 => 8,  57 => 6,  53 => 4,  51 => 3,  48 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block body %}
    <ul>
    {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
        <li><a href=\"/logout\">Ausloggen</a></li>
    {% else %}
        <li><a href=\"{{ path('security_login')}}\"> Einloggen</a></li>
    {% endif %}
    {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
        <li><a href=\"/admin\">Admin</a></li>
    {% endif %}
    </ul>
    <h5>Wählen Sie eine Kategorie</h5>
    {{ cats|raw }}
{% endblock %}", "index.html.twig", "/Users/ericzeidan/Sites/task-projekt/templates/index.html.twig");
    }
}
