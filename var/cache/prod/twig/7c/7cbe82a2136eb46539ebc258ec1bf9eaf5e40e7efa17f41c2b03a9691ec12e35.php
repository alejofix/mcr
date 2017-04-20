<?php

/* neon/body/chat.html.twig */
class __TwigTemplate_0ce953b9fdc977966e30de8525fa79674c5900de894ff4698f9bfccf9fba6d0e extends Twig_Template
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
        echo "            <div id=\"chat\" class=\"fixed\" data-current-user=\"Art Ramadani\" data-order-by-status=\"1\" data-max-chat-history=\"25\">
            
            \t<div class=\"chat-inner\">
            
            \t\t<h2 class=\"chat-header\">
            \t\t\t<a href=\"#\" class=\"chat-close\"><i class=\"entypo-cancel\"></i></a>
            
            \t\t\t<i class=\"entypo-users\"></i>
            \t\t\tChat MCR
            \t\t\t<span class=\"badge badge-success is-hidden\">0</span>
            \t\t</h2>
            
            
            \t\t<div class=\"chat-group\" id=\"group-1\">
            \t\t\t<strong>Mejoramiento</strong>
            
            \t\t\t<a href=\"#\" id=\"sample-user-123\" data-conversation-history=\"#sample_history\"><span class=\"user-status is-online\"></span> <em>Freddy Igua</em></a>
            \t\t\t<a href=\"#\"><span class=\"user-status is-online\"></span> <em>Mauricio Vecino </em></a>
            \t\t\t<a href=\"#\"><span class=\"user-status is-busy\"></span> <em>Daniel Zorro</em></a>
            \t\t\t<a href=\"#\"><span class=\"user-status is-offline\"></span> <em>Cristian Vesga</em></a>
            \t\t\t<a href=\"#\"><span class=\"user-status is-idle\"></span> <em>Luis Castillo</em></a>
            \t\t</div>
            
            \t</div>
            
            \t<!-- conversation template -->
            \t<div class=\"chat-conversation\">
            
            \t\t<div class=\"conversation-header\">
            \t\t\t<a href=\"#\" class=\"conversation-close\"><i class=\"entypo-cancel\"></i></a>
            
            \t\t\t<span class=\"user-status\"></span>
            \t\t\t<span class=\"display-name\"></span>
            \t\t\t<small></small>
            \t\t</div>
            
            \t\t<ul class=\"conversation-body\">
            \t\t</ul>
            
            \t\t<div class=\"chat-textarea\">
            \t\t\t<textarea class=\"form-control autogrow\" placeholder=\"Type your message\"></textarea>
            \t\t</div>
            
            \t</div>
            
            </div>
\t";
    }

    public function getTemplateName()
    {
        return "neon/body/chat.html.twig";
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
        return new Twig_Source("", "neon/body/chat.html.twig", "D:\\xampp\\htdocs\\_fix\\mcr\\app\\Resources\\views\\neon\\body\\chat.html.twig");
    }
}
