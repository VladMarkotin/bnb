<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.html */
class __TwigTemplate_77e1a89f22c782423622b3fdf11653640bfd7e259952db2c4c6f4d41181f6492 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">

    <title>Справочник сотрудников компании</title>
</head>
<body>

<div class=\"container\">

    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Добавить информацию</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <form action=\"add\" method=\"post\" id=\"add-form\">
                    <div class=\"modal-body\">

                        <div class=\"form-group\">
                            <label for=\"fio\" class=\"col-form-label\">ФИО (Введите фамилию,имя и отчество через пробел):</label>
                            <input type=\"text\" class=\"form-control\" id=\"fio\" name=\"fio\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"email\" class=\"col-form-label\">Email:</label>
                            <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\"/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"phone\" class=\"col-form-label\">Телефон/ы:(\";\" - разделитель)</label>
                            <input type=\"text\" class=\"form-control\" id=\"phone\" name=\"phone\"/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"office_num\" class=\"col-form-label\">Id офиса:</label>
                            <select class=\"form-control\" id=\"office_num\" name=\"office_num\">
                                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["office_ids"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
            // line 45
            echo "                                    <option>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["id"], "office_id", []), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                            </select>
                        </div>
                        <p class=\"info\">Время принятия на работу будет добавлено автоматически</p>

                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Закрыть</button>
                        <button type=\"submit\" class=\"btn btn-primary\" id=\"final_add_emp\">Добавить работниика</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"edit_window\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"editModalLabel\">Окончание работы</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <form action=\"edit\" method=\"post\">
                    <div class=\"modal-body\">

                        <div class=\"form-group\">
                            <input type=\"hidden\" class=\"form-control\" id=\"id\" name=\"id\">
                        </div>

                        <div class=\"form-group\">
                            <label for=\"edit-end-time\" class=\"col-form-label\">Время окончания работы:</label>
                            <input type=\"datetime-local\" class=\"form-control\" id=\"edit-end-time\" name=\"edit-end-time\">
                        </div>


                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Закрыть</button>
                        <button type=\"submit\" class=\"btn btn-primary\" id=\"edit-form\">Закончить работу</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class = \"row\">
        <div class = \"col-md-12\">
            <h2>Справочник сотрудников компании</h2>
        </div>
    </div>
    <div class=\"row\">
        <div class = \"col-md-12\">

        </div>
    </div>
    <table class=\"table table-bordered table-striped\" id=\"table\">
        <thead>
        <tr>
            <th>ФИО</th>
            <th>Email</th>
            <th>Телефон/ы</th>
            <th>Id офиса</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["emps"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["emp"]) {
            // line 113
            echo "        <tr>
            <td>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["emp"], "fname", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["emp"], "lname", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["emp"], "sname", []), "html", null, true);
            echo "</td>
            <td>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["emp"], "email", []), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["phone_nums"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ph"]) {
                // line 118
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["ph"]);
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    // line 119
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["p"]);
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 120
                        echo "                            ";
                        if ((($this->getAttribute($context["p"], "emp_id", []) == $this->getAttribute($context["emp"], "employer_id", [])) && ($context["k"] == "phone_num"))) {
                            // line 121
                            echo "                                ";
                            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                            echo "
                            ";
                        }
                        // line 123
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 124
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ph'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "            </td>
            <td>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["emp"], "office_id", []), "html", null, true);
            echo " </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "        </tbody>
    </table>
    <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\" data-whatever=\"@mdo\">
        Добавить работника
    </button>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script
        src=\"https://code.jquery.com/jquery-3.3.1.js\"
        integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
<script src=\"app/views/templates/js/add.js\"></script>
<!--<script src=\"app/views/templates/js/edit.js\"></script>-->
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 130,  219 => 127,  216 => 126,  210 => 125,  204 => 124,  198 => 123,  192 => 121,  189 => 120,  184 => 119,  179 => 118,  175 => 117,  170 => 115,  162 => 114,  159 => 113,  155 => 112,  88 => 47,  79 => 45,  75 => 44,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "index.html", "E:\\OpenServer\\OpenServer\\domains\\bnb.by\\app\\views\\templates\\index.html");
    }
}
