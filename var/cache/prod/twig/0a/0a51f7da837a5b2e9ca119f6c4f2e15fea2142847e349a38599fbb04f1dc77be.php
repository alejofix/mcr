<?php

/* FixServicemeBundle:Usuarios:mensajes/exito.html.twig */
class __TwigTemplate_cdb6bfae96b930b760fecfc1b74162f4f319ddc96244ff20518bc61d93d3f81d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "mensajecreado"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 2
            echo "            <div class=\"row\">
    \t\t\t
    \t\t\t<div class=\"col-md-12\">
    \t\t\t\t<div class=\"alert alert-success\"><strong>Bien hecho!</strong> ";
            // line 5
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</div>
    \t\t\t</div>
    \t\t\t
    \t\t</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "FixServicemeBundle:Usuarios:mensajes/exito.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FixServicemeBundle:Usuarios:mensajes/exito.html.twig", "D:\\xampp\\htdocs\\_fix\\mcr\\src\\Fix\\ServicemeBundle/Resources/views/Usuarios/mensajes/exito.html.twig");
    }
}
