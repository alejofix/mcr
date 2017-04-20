<?php

/* FixServicemeBundle:Serviceme:index.html.twig */
class __TwigTemplate_30fc251b68e78ce92a8aa667fab3c3f51f49ca86b8de8b0138b0e25872a63d72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("neon/base.html.twig", "FixServicemeBundle:Serviceme:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "neon/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    
    
    <div>
    
    
    
    </div>    
    ";
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 18
        echo twig_include($this->env, $context, "FixServicemeBundle:Serviceme:mensajes/bienvenida.html.twig");
        echo "
    
    


";
    }

    public function getTemplateName()
    {
        return "FixServicemeBundle:Serviceme:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 18,  46 => 17,  43 => 16,  32 => 6,  29 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FixServicemeBundle:Serviceme:index.html.twig", "D:\\xampp\\htdocs\\_fix\\mcr\\src\\Fix\\ServicemeBundle/Resources/views/Serviceme/index.html.twig");
    }
}
