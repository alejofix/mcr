<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_45dce907d27a40e6934735514931f4cfa806c6c8455173bf727c6611838b4700 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0f0b71d8333e2c23f5f2350a3e7e5abe1c08e0552e8e45652fb41ad5fe3bdd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0f0b71d8333e2c23f5f2350a3e7e5abe1c08e0552e8e45652fb41ad5fe3bdd9->enter($__internal_d0f0b71d8333e2c23f5f2350a3e7e5abe1c08e0552e8e45652fb41ad5fe3bdd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3ad0600f7b2cd70983b639987f73ebc12e223c029ea794ad2439f1f5ecbe3a75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad0600f7b2cd70983b639987f73ebc12e223c029ea794ad2439f1f5ecbe3a75->enter($__internal_3ad0600f7b2cd70983b639987f73ebc12e223c029ea794ad2439f1f5ecbe3a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0f0b71d8333e2c23f5f2350a3e7e5abe1c08e0552e8e45652fb41ad5fe3bdd9->leave($__internal_d0f0b71d8333e2c23f5f2350a3e7e5abe1c08e0552e8e45652fb41ad5fe3bdd9_prof);

        
        $__internal_3ad0600f7b2cd70983b639987f73ebc12e223c029ea794ad2439f1f5ecbe3a75->leave($__internal_3ad0600f7b2cd70983b639987f73ebc12e223c029ea794ad2439f1f5ecbe3a75_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7103f9174a186049ee4c0186f1b9250a8946971e7ace0ccaeddf9de60a192459 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7103f9174a186049ee4c0186f1b9250a8946971e7ace0ccaeddf9de60a192459->enter($__internal_7103f9174a186049ee4c0186f1b9250a8946971e7ace0ccaeddf9de60a192459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cd06591f1dcc91218135370fb952e38c12117ca051823ac0e7044fc3658d6ad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd06591f1dcc91218135370fb952e38c12117ca051823ac0e7044fc3658d6ad9->enter($__internal_cd06591f1dcc91218135370fb952e38c12117ca051823ac0e7044fc3658d6ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_cd06591f1dcc91218135370fb952e38c12117ca051823ac0e7044fc3658d6ad9->leave($__internal_cd06591f1dcc91218135370fb952e38c12117ca051823ac0e7044fc3658d6ad9_prof);

        
        $__internal_7103f9174a186049ee4c0186f1b9250a8946971e7ace0ccaeddf9de60a192459->leave($__internal_7103f9174a186049ee4c0186f1b9250a8946971e7ace0ccaeddf9de60a192459_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9c8d7cc0e9bbac741855e3c39871f9b85546dbf35f769ec1f9a9bdad7e3a2b27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c8d7cc0e9bbac741855e3c39871f9b85546dbf35f769ec1f9a9bdad7e3a2b27->enter($__internal_9c8d7cc0e9bbac741855e3c39871f9b85546dbf35f769ec1f9a9bdad7e3a2b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4fc909d290fb9ba9d4f0d4afb06ecbfcc96cf07dd6db0d9d38fbf4d5e75dad5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc909d290fb9ba9d4f0d4afb06ecbfcc96cf07dd6db0d9d38fbf4d5e75dad5c->enter($__internal_4fc909d290fb9ba9d4f0d4afb06ecbfcc96cf07dd6db0d9d38fbf4d5e75dad5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4fc909d290fb9ba9d4f0d4afb06ecbfcc96cf07dd6db0d9d38fbf4d5e75dad5c->leave($__internal_4fc909d290fb9ba9d4f0d4afb06ecbfcc96cf07dd6db0d9d38fbf4d5e75dad5c_prof);

        
        $__internal_9c8d7cc0e9bbac741855e3c39871f9b85546dbf35f769ec1f9a9bdad7e3a2b27->leave($__internal_9c8d7cc0e9bbac741855e3c39871f9b85546dbf35f769ec1f9a9bdad7e3a2b27_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5408d59edbe739a123068c20dc25d68778819c84fdae3733ff6ea9339023da36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5408d59edbe739a123068c20dc25d68778819c84fdae3733ff6ea9339023da36->enter($__internal_5408d59edbe739a123068c20dc25d68778819c84fdae3733ff6ea9339023da36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7ee7ae46f8a0b4c0ea23fd273c3b148f6ac9b3fbd10e37457c88c35cd0e19d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee7ae46f8a0b4c0ea23fd273c3b148f6ac9b3fbd10e37457c88c35cd0e19d75->enter($__internal_7ee7ae46f8a0b4c0ea23fd273c3b148f6ac9b3fbd10e37457c88c35cd0e19d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7ee7ae46f8a0b4c0ea23fd273c3b148f6ac9b3fbd10e37457c88c35cd0e19d75->leave($__internal_7ee7ae46f8a0b4c0ea23fd273c3b148f6ac9b3fbd10e37457c88c35cd0e19d75_prof);

        
        $__internal_5408d59edbe739a123068c20dc25d68778819c84fdae3733ff6ea9339023da36->leave($__internal_5408d59edbe739a123068c20dc25d68778819c84fdae3733ff6ea9339023da36_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\Servidor\\xampp\\htdocs\\_fix\\mcr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
