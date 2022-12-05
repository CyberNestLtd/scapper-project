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

/* @OldSoundRabbitMq/Collector/collector.html.twig */
class __TwigTemplate_59ad97b7b1c048a989368d76b14a98f4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OldSoundRabbitMq/Collector/collector.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OldSoundRabbitMq/Collector/collector.html.twig"));

        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "@OldSoundRabbitMq/Collector/collector.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "publishedMessagesCount", [], "any", false, false, false, 4)) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            <img width=\"28\" height=\"28\" alt=\"RabbitMQ\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAqlJREFUeNrsV01oE0EU/maz2U1tUFqtAY1QsaQVJKmHFjEF0R5E9CQIHhQF0UNBBL2IJ3tUevGiIOjFg0IpiErRXppD0VOpJCohQqWNYmzVtknaZtP9cWaTtKadDU3cmB76wUvCzJt5386+970JMQwDDMZQ3wmkf/bAIQKqAuz23yKHzkfAgRF/78Zo/9PlAZ3u4T95hbQEv6NMiOZnrL+bPO8dhKQBhACaDmzZ6kWL/xh2BGZWLyJDt+9g9M0pyEJuQKH+8bcDuBY6XC6B3A5fPnRiNg0sLALzC/Q7A/yYasfnsYPcVePhdtOH+Rb8J2IBVIDcCTicikmFFB4xT00QVe4qh5Q1ff72FyWlEgICaoxNApsENjgBqzIkgs4Z0+wjwOqahVica+DOZ1LuZQ0o+CvJxsqFiEeAUXt99ybi4QCVZx2GIdA+oSIRbcPvr3uKVrLf6V8C+o6OwBt4B21JtozI+oarPo0jl3ux06eIlo5OaonxLkzc7ypWQWp1HMJsPBIKYoxaKbDel6WmZWWcvXdDLOnozNt64VqnH20dmP3WXNsqEBxL1jnwLzA4r6fsJKwUyqraUvMRJA4x2wmwYL7OFwhefARRzpi6kEzswvCDq5ie7LDKJdG24PWNUVx6cgYeX7ZorsE7iYcXQtB1bsbZk4RMtOq2za0JzuBpjUKSLV+BfVVg6Py9dDZO/kMzYmrJLzc1d0TVJMBUMDXtQWTwwJq58MvTyGQsI4m2EVDmm/H43AD2H38FyUVzgXbM1FQTPtLru2itB/aVIdspNePDyLPrRSIklT5ne4WI16g27o3IcKycgEpbo4ZSyWovWCxNda4QaNr3CRLJXRZItR88f+57O4bNNCn8O0Ys1EavYNsLbbJ6BDQnZHcSrd2RYgI1wh8BBgAR2M5KdN1kRwAAAABJRU5ErkJggg==\" />
            <span class=\"sf-toolbar-status\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 7, $this->source); })()), "publishedMessagesCount", [], "any", false, false, false, 7), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 9
            echo "        ";
            ob_start();
            // line 10
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Messages</b>
                <span>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 12, $this->source); })()), "publishedMessagesCount", [], "any", false, false, false, 12), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 15
            echo "        ";
            $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "@OldSoundRabbitMq/Collector/collector.html.twig", 15)->display(twig_array_merge($context, ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 15, $this->source); })())]));
            // line 16
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 20
        echo "<span class=\"label\">
    <span class=\"icon\"><img alt=\"RabbitMQ\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAqlJREFUeNrsV01oE0EU/maz2U1tUFqtAY1QsaQVJKmHFjEF0R5E9CQIHhQF0UNBBL2IJ3tUevGiIOjFg0IpiErRXppD0VOpJCohQqWNYmzVtknaZtP9cWaTtKadDU3cmB76wUvCzJt5386+970JMQwDDMZQ3wmkf/bAIQKqAuz23yKHzkfAgRF/78Zo/9PlAZ3u4T95hbQEv6NMiOZnrL+bPO8dhKQBhACaDmzZ6kWL/xh2BGZWLyJDt+9g9M0pyEJuQKH+8bcDuBY6XC6B3A5fPnRiNg0sLALzC/Q7A/yYasfnsYPcVePhdtOH+Rb8J2IBVIDcCTicikmFFB4xT00QVe4qh5Q1ff72FyWlEgICaoxNApsENjgBqzIkgs4Z0+wjwOqahVica+DOZ1LuZQ0o+CvJxsqFiEeAUXt99ybi4QCVZx2GIdA+oSIRbcPvr3uKVrLf6V8C+o6OwBt4B21JtozI+oarPo0jl3ux06eIlo5OaonxLkzc7ypWQWp1HMJsPBIKYoxaKbDel6WmZWWcvXdDLOnozNt64VqnH20dmP3WXNsqEBxL1jnwLzA4r6fsJKwUyqraUvMRJA4x2wmwYL7OFwhefARRzpi6kEzswvCDq5ie7LDKJdG24PWNUVx6cgYeX7ZorsE7iYcXQtB1bsbZk4RMtOq2za0JzuBpjUKSLV+BfVVg6Py9dDZO/kMzYmrJLzc1d0TVJMBUMDXtQWTwwJq58MvTyGQsI4m2EVDmm/H43AD2H38FyUVzgXbM1FQTPtLru2itB/aVIdspNePDyLPrRSIklT5ne4WI16g27o3IcKycgEpbo4ZSyWovWCxNda4QaNr3CRLJXRZItR88f+57O4bNNCn8O0Ys1EavYNsLbbJ6BDQnZHcSrd2RYgI1wh8BBgAR2M5KdN1kRwAAAABJRU5ErkJggg==\" /></span>
    <strong>RabbitMQ</strong>
    <span class=\"count\">
        <span>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 24, $this->source); })()), "publishedMessagesCount", [], "any", false, false, false, 24), "html", null, true);
        echo "</span>
    </span>
</span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 30
        echo "    <h2>Messages</h2>
    ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 31, $this->source); })()), "publishedMessagesCount", [], "any", false, false, false, 31)) {
            // line 32
            echo "        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Exchange</th>
                    <th scope=\"col\">Message body</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 40, $this->source); })()), "publishedMessagesLog", [], "any", false, false, false, 40));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 41
                echo "                <tr>
                    <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "exchange", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
                    <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["log"], "msg", [], "any", false, false, false, 43), "body", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 49
            echo "        <p>
            <em>No messages were sent.</em>
        </p>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@OldSoundRabbitMq/Collector/collector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 49,  186 => 46,  177 => 43,  173 => 42,  170 => 41,  166 => 40,  156 => 32,  154 => 31,  151 => 30,  141 => 29,  127 => 24,  121 => 20,  111 => 19,  100 => 16,  97 => 15,  91 => 12,  87 => 10,  84 => 9,  79 => 7,  76 => 6,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% block toolbar %}
    {% if collector.publishedMessagesCount %}
        {% set icon %}
            <img width=\"28\" height=\"28\" alt=\"RabbitMQ\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAqlJREFUeNrsV01oE0EU/maz2U1tUFqtAY1QsaQVJKmHFjEF0R5E9CQIHhQF0UNBBL2IJ3tUevGiIOjFg0IpiErRXppD0VOpJCohQqWNYmzVtknaZtP9cWaTtKadDU3cmB76wUvCzJt5386+970JMQwDDMZQ3wmkf/bAIQKqAuz23yKHzkfAgRF/78Zo/9PlAZ3u4T95hbQEv6NMiOZnrL+bPO8dhKQBhACaDmzZ6kWL/xh2BGZWLyJDt+9g9M0pyEJuQKH+8bcDuBY6XC6B3A5fPnRiNg0sLALzC/Q7A/yYasfnsYPcVePhdtOH+Rb8J2IBVIDcCTicikmFFB4xT00QVe4qh5Q1ff72FyWlEgICaoxNApsENjgBqzIkgs4Z0+wjwOqahVica+DOZ1LuZQ0o+CvJxsqFiEeAUXt99ybi4QCVZx2GIdA+oSIRbcPvr3uKVrLf6V8C+o6OwBt4B21JtozI+oarPo0jl3ux06eIlo5OaonxLkzc7ypWQWp1HMJsPBIKYoxaKbDel6WmZWWcvXdDLOnozNt64VqnH20dmP3WXNsqEBxL1jnwLzA4r6fsJKwUyqraUvMRJA4x2wmwYL7OFwhefARRzpi6kEzswvCDq5ie7LDKJdG24PWNUVx6cgYeX7ZorsE7iYcXQtB1bsbZk4RMtOq2za0JzuBpjUKSLV+BfVVg6Py9dDZO/kMzYmrJLzc1d0TVJMBUMDXtQWTwwJq58MvTyGQsI4m2EVDmm/H43AD2H38FyUVzgXbM1FQTPtLru2itB/aVIdspNePDyLPrRSIklT5ne4WI16g27o3IcKycgEpbo4ZSyWovWCxNda4QaNr3CRLJXRZItR88f+57O4bNNCn8O0Ys1EavYNsLbbJ6BDQnZHcSrd2RYgI1wh8BBgAR2M5KdN1kRwAAAABJRU5ErkJggg==\" />
            <span class=\"sf-toolbar-status\">{{ collector.publishedMessagesCount }}</span>
        {% endset %}
        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Messages</b>
                <span>{{ collector.publishedMessagesCount }}</span>
            </div>
        {% endset %}
        {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': profiler_url } %}
    {% endif %}
{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\"><img alt=\"RabbitMQ\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAqlJREFUeNrsV01oE0EU/maz2U1tUFqtAY1QsaQVJKmHFjEF0R5E9CQIHhQF0UNBBL2IJ3tUevGiIOjFg0IpiErRXppD0VOpJCohQqWNYmzVtknaZtP9cWaTtKadDU3cmB76wUvCzJt5386+970JMQwDDMZQ3wmkf/bAIQKqAuz23yKHzkfAgRF/78Zo/9PlAZ3u4T95hbQEv6NMiOZnrL+bPO8dhKQBhACaDmzZ6kWL/xh2BGZWLyJDt+9g9M0pyEJuQKH+8bcDuBY6XC6B3A5fPnRiNg0sLALzC/Q7A/yYasfnsYPcVePhdtOH+Rb8J2IBVIDcCTicikmFFB4xT00QVe4qh5Q1ff72FyWlEgICaoxNApsENjgBqzIkgs4Z0+wjwOqahVica+DOZ1LuZQ0o+CvJxsqFiEeAUXt99ybi4QCVZx2GIdA+oSIRbcPvr3uKVrLf6V8C+o6OwBt4B21JtozI+oarPo0jl3ux06eIlo5OaonxLkzc7ypWQWp1HMJsPBIKYoxaKbDel6WmZWWcvXdDLOnozNt64VqnH20dmP3WXNsqEBxL1jnwLzA4r6fsJKwUyqraUvMRJA4x2wmwYL7OFwhefARRzpi6kEzswvCDq5ie7LDKJdG24PWNUVx6cgYeX7ZorsE7iYcXQtB1bsbZk4RMtOq2za0JzuBpjUKSLV+BfVVg6Py9dDZO/kMzYmrJLzc1d0TVJMBUMDXtQWTwwJq58MvTyGQsI4m2EVDmm/H43AD2H38FyUVzgXbM1FQTPtLru2itB/aVIdspNePDyLPrRSIklT5ne4WI16g27o3IcKycgEpbo4ZSyWovWCxNda4QaNr3CRLJXRZItR88f+57O4bNNCn8O0Ys1EavYNsLbbJ6BDQnZHcSrd2RYgI1wh8BBgAR2M5KdN1kRwAAAABJRU5ErkJggg==\" /></span>
    <strong>RabbitMQ</strong>
    <span class=\"count\">
        <span>{{ collector.publishedMessagesCount }}</span>
    </span>
</span>
{% endblock %}

{% block panel %}
    <h2>Messages</h2>
    {% if collector.publishedMessagesCount %}
        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Exchange</th>
                    <th scope=\"col\">Message body</th>
                </tr>
            </thead>
            <tbody>
                {% for log in collector.publishedMessagesLog %}
                <tr>
                    <td>{{ log.exchange }}</td>
                    <td>{{ log.msg.body }}</td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    {% else %}
        <p>
            <em>No messages were sent.</em>
        </p>
    {% endif %}
{% endblock %}
", "@OldSoundRabbitMq/Collector/collector.html.twig", "/Users/usmanjavaid/Projects/php/symphony/scraper/vendor/php-amqplib/rabbitmq-bundle/Resources/views/Collector/collector.html.twig");
    }
}
