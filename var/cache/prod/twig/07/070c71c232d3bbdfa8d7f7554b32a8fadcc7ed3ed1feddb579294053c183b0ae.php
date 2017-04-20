<?php

/* FixServicemeBundle:Default:index.html.twig */
class __TwigTemplate_f21e4bde2181c802aad1be4d372cc287e00c62f619eb985c4527e3373d6f2c30 extends Twig_Template
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
        echo "<!DOCTYPE HTML>
\t<html>
\t\t<head></head>
\t\t<body></body>
\t\t<script language=\"javascript\">
            window.location.href = \"serviceme/index\"
\t\t</script>
\t</html>";
    }

    public function getTemplateName()
    {
        return "FixServicemeBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FixServicemeBundle:Default:index.html.twig", "D:\\xampp\\htdocs\\_fix\\mcr\\src\\Fix\\ServicemeBundle/Resources/views/Default/index.html.twig");
    }
}
