<?php

/* default.html.twig */
class __TwigTemplate_2b5301f1d10af57b757cde589e7f1a5638f624ded7e0cf2b08228360e9192291 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1 style=\"color:";
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "balltoro", array()), "color", array());
        echo "\">";
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "balltoro", array()), "info", array());
        echo "</h1>
    <nav class=\"navbar-top bg-inverse\">
        <div class=\"nav-bar\">
            <a href=\"#\">
                <img class=\"nav-bar__logo \" src=\"https://balltoro.com/ui/web/images/main-logo.png\">
            </a>
            <button class=\"navbar-toggler pull-xs-right nav-bar__toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#exCollapsingNavbar\">
                <i class=\"fa fa-bars\"></i>
            </button>
        </div>
    </nav>

    <div class=\"collapse\" id=\"exCollapsingNavbar\">
        <div class=\"bg-inverse nav-bar\">
            <ul class=\"nav-bar__dropdown--position\">
                <li>
                    <a href=\"#\" class=\"nav-list__menu\">ผลบอลวันนี้</a>
                </li>
                <li>
                    <a href=\"#\" class=\"nav-list__menu\">ตารางการแข่งขัน</a>
                </li>
                <li>
                    <a href=\"#\" class=\"nav-list__menu\" data-toggle=\"collapse\" data-target=\"#drilldown-1\">
                        ข่าวฟุตบอล
                        <i class=\"fa fa-chevron-down\"></i>
                    </a>
                    <ul id=\"drilldown-1\" class=\"nav nav-pills nav-stacked collapse\">
                        <li>
                            <a href=\"#\" class=\"nav-list__collapse\">
                                <i class=\"fa fa-angle-right nav-list__collapse--icon\"></i>
                                English Premier League
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"nav-list__collapse\">
                                <i class=\"fa fa-angle-right nav-list__collapse--icon\"></i>
                                Thai Premier League
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"nav-list__collapse\">
                                <i class=\"fa fa-angle-right nav-list__collapse--icon\"></i>
                                ข่าวทั้งหมด
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href=\"#\" class=\"nav-list__menu\" data-toggle=\"collapse\" data-target=\"#drilldown-2\">
                        สกู๊ปฟุตบอล
                        <i class=\"fa fa-chevron-down\"></i>
                    </a>
                    <ul id=\"drilldown-2\" class=\"nav nav-pills nav-stacked collapse\">
                        <li>
                            <a href=\"#\" class=\"nav-list__collapse\">
                                <i class=\"fa fa-angle-right nav-list__collapse--icon\"></i>
                                English Premier League
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"nav-list__collapse\">
                                <i class=\"fa fa-angle-right nav-list__collapse--icon\"></i>
                                Thai Premier League
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"nav-list__collapse\">
                                <i class=\"fa fa-angle-right nav-list__collapse--icon\"></i>
                                สกู๊ปทั้งหมด
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href=\"#\" class=\"nav-list__menu\" type=\"button\"><i class=\"fa fa-sign-in fa-2x\"></i> เข้าสู่ระบบ</a>
                </li>
            </ul>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"col-xs-12\">
            <div class=\"row ad-box text-xs-center\">ADVERTISE HERE</div>
            <div class=\"row social social__border\">
                <a href=\"#\" class=\"col-xs-3 social__button social__button--facebook fa fa-2x fa-facebook\"></a>
                <a href=\"#\" class=\"col-xs-3 social__button social__button--twitter fa fa-2x fa-twitter\"></a>
                <a href=\"#\" class=\"col-xs-3 social__button social__button--google-plus fa fa-2x fa-google-plus\"></a>
                <a href=\"#\" class=\"col-xs-3 social__button social__button--line fa-2x icon-line\"></a>
            </div>
            <div class=\"row carousel slide\" id=\"featured\" data-ride=\"carousel\" data-interval=\"3000\">
                <div class=\"carousel-inner\" role=\"listbox\">
                    <div class=\"carousel-item active\">
                        <div class=\"featured-content\">
                            <div class=\"featured-content__image\">
                                <img src=\"";
        // line 97
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/featured-demo-img-2.png");
        echo "\" alt=\"DEMO 1\">
                            </div>
                            <div class=\"featured-content__date\">
                                14 มิ.ย. 2559 20:00
                            </div>
                            <div class=\"featured-content__headline\">
                                <a href=\"#\">HEADLINE</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"featured-content\">
                            <div class=\"featured-content__image\">
                                <img src=\"";
        // line 110
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/featured-demo-img-2.png");
        echo "\" alt=\"DEMO 1\">
                            </div>
                            <div class=\"featured-content__date\">
                                14 มิ.ย. 2559 20:00
                            </div>
                            <div class=\"featured-content__headline\">
                                <a href=\"#\">HEADLINE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"featured-content__separator\"></div>
            </div>
            <div class=\"row scoop m-t-2\">
                <div class=\"category__header\">
                    <div class=\"pull-xs-left\">
                        <h5>Special Scoops</h5>
                        <p>สกู๊ปพิเศษ</p>
                    </div>
                    <div class=\"pull-xs-right\">
                        <a href=\"#\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a>
                    </div>
                </div>
                <div class=\"scoop__content\">
                    <div class=\"scoop__content--image\">
                        <img src=\"";
        // line 135
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/featured-demo-img-2.png");
        echo "\" alt=\"DEMO SCOOP\">
                    </div>
                    <div class=\"scoop__content--date\">
                        14 มิ.ย. 2559 20:00
                    </div>
                    <div class=\"scoop__content--headline\">
                        <a href=\"#\">HEADLINE</a>
                    </div>
                </div>
                <div class=\"scoop__content\">
                    <div class=\"scoop__content--image\">
                        <img src=\"";
        // line 146
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/featured-demo-img-2.png");
        echo "\" alt=\"DEMO SCOOP\">
                    </div>
                    <div class=\"scoop__content--date\">
                        14 มิ.ย. 2559 20:00
                    </div>
                    <div class=\"scoop__content--headline\">
                        <a href=\"#\">HEADLINE</a>
                    </div>
                </div>
                <div>
                    <div class=\"col-xs-6 p-l-0\">
                        <div class=\"scoop__content\">
                            <div class=\"scoop__content--image\">
                                <img src=\"";
        // line 159
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/featured-demo-img-2.png");
        echo "\" alt=\"DEMO SCOOP\">
                            </div>
                            <div class=\"scoop__content--date\">
                                14 มิ.ย. 2559 20:00
                            </div>
                            <div class=\"scoop__content--headline\">
                                <a href=\"#\">HEADLINE</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-6 p-r-0\">
                        <div class=\"scoop__content\">
                            <div class=\"scoop__content--image\">
                                <img src=\"";
        // line 172
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/featured-demo-img-2.png");
        echo "\" alt=\"DEMO SCOOP\">
                            </div>
                            <div class=\"scoop__content--date\">
                                14 มิ.ย. 2559 20:00
                            </div>
                            <div class=\"scoop__content--headline\">
                                <a href=\"#\">HEADLINE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class=\"col-xs-6 p-l-0\">
                        <div class=\"scoop__content\">
                            <div class=\"scoop__content--image\">
                                <img src=\"";
        // line 187
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/featured-demo-img-2.png");
        echo "\" alt=\"DEMO SCOOP\">
                            </div>
                            <div class=\"scoop__content--date\">
                                14 มิ.ย. 2559 20:00
                            </div>
                            <div class=\"scoop__content--headline\">
                                <a href=\"#\">HEADLINE</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-6 p-r-0\">
                        <div class=\"scoop__content\">
                            <div class=\"scoop__content--image\">
                                <img src=\"";
        // line 200
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/featured-demo-img-2.png");
        echo "\" alt=\"DEMO SCOOP\">
                            </div>
                            <div class=\"scoop__content--date\">
                                14 มิ.ย. 2559 20:00
                            </div>
                            <div class=\"scoop__content--headline\">
                                <a href=\"#\">HEADLINE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-xs-right\">
                    <a href=\"#\">สกู๊ปทั้งหมด <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a>
                </div>
            </div>
            <div class=\"row news m-t-2\">
                <div class=\"category__header\">
                    <div class=\"pull-xs-left\">
                        <h5>News</h5>
                        <p>ข่าวและความเคลื่อนไหวล่าสุด</p>
                    </div>
                    <div class=\"pull-xs-right\">
                        <a href=\"#\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a>
                    </div>
                </div>
                <div class=\"news__content\">
                    <div class=\"col-xs-3 p-x-0\">
                        <div class=\"news__content--image\">
                            <img src=\"";
        // line 228
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/featured-demo-img-2.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"col-xs-9\">
                        <div class=\"news__content--date\">14 มิ.ย. 2559 20:00</div>
                        <div class=\"news__content--headline\"><a href=\"#\">HEADLINE</a></div>
                    </div>
                </div>
                <div class=\"news__content\">
                    <div class=\"col-xs-3 p-x-0\">
                        <div class=\"news__content--image\">
                            <img src=\"";
        // line 239
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/featured-demo-img-2.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"col-xs-9\">
                        <div class=\"news__content--date\">14 มิ.ย. 2559 20:00</div>
                        <div class=\"news__content--headline\"><a href=\"#\">HEADLINE</a></div>
                    </div>
                </div>
                <div class=\"text-xs-right p-y-1\">
                    <a href=\"#\">ข่าวทั้งหมด <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a>
                </div>
            </div>
            <div class=\"row result-board\">
                <div class=\"row result-board__button collapsed\" data-toggle=\"collapse\" href=\"#collapse-dropdown\" aria-expanded=\"false\" aria-controls=\"collapse-dropdown\">
                    <span>ผลบอล</span>
                </div>
                <div class=\"collapse\" id=\"collapse-dropdown\">
                    <div class=\"dropdown\" >
                        <div  type=\"button\" id=\"menu-toggler\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-chevron-down pull-xs-right result-board__league-dropdown--icon\"></i>
                            <div class=\"result-board__league-dropdown\">
                                <span>English Premier League</span>
                            </div>
                        </div>
                        <div class=\"dropdown-menu result-board__league-dropdown--list\" role=\"menu\" aria-labelledby=\"menu-toggler\">
                            <p>league result</p>
                        </div>
                    </div>
                    <div class=\"result-board__league-result\">
                        <p>No Match Result.</p>
                    </div>
                </div>
            </div>

            <div class=\"row result-board\">
                <div class=\"row result-board__button collapsed\" data-toggle=\"collapse\" href=\"#collapse-dropdown1\" aria-expanded=\"false\" aria-controls=\"collapse-dropdown\">
                    <span>ตารางแข่งวันนี้</span>
                </div>
                <div class=\"collapse\" id=\"collapse-dropdown1\">
                    <div class=\"dropdown\">
                        <div  type=\"button\" id=\"menu-toggler1\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-chevron-down pull-xs-right result-board__league-dropdown--icon\"></i>
                            <div class=\"result-board__league-dropdown \">
                                <span>English Premier League</span>
                            </div>
                        </div>
                        <div class=\"dropdown-menu result-board__league-dropdown--list\" role=\"menu\" aria-labelledby=\"menu-toggler1\">
                            <p>league result</p>
                        </div>
                    </div>
                    <div class=\"result-board__league-result\">
                        <p>No Match Result.</p>
                    </div>
                </div>
            </div>
            <div class=\"row result-board\">
                <div class=\"table-description\">
                    <span>ตารางคะแนน</span><span>อัพเดท 20 มิ.ย. 2559 15:10</span>
                </div>
                <div class=\"dropdown\" >
                        <span  type=\"button\" id=\"menu-toggler2\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-chevron-down pull-xs-right result-board__league-dropdown--icon\"></i>
                            <span class=\"result-board__league-dropdown\">
                                <span class=\"\">Premier League</span>
                            </span>
                        </span>
                    <div class=\"dropdown-menu result-board__league-dropdown--list\" role=\"menu\" aria-labelledby=\"menu-toggler2\" >
                        <p>league result</p>
                    </div>
                </div>
                <div class=\"result-board__league-result league-table\">
                    <table class =\"table-sm league-table--box\">
                        <thead class=\"league-table__header\">
                        <tr>
                            <th>Pos</th>
                            <th>Teams</th>
                            <th>P</th>
                            <th>+/-</th>
                            <th>Pts</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class=\"rank-1 league-table\">
                            <td>1</td>
                            <td class=\"league-table__team-names\">
                                <a href=\"#\">เลสเตอร์ ซิตี้</a>
                            </td>
                            <td>38</td>
                            <td>32</td>
                            <td>81</td>
                        </tr>
                        <tr class=\"rank-2 league-table\">
                            <td>2</td>
                            <td class=\"league-table__team-names\">
                                <a href=\"#\">อาร์เซนอล</a>
                            </td>
                            <td>38</td>
                            <td>29</td>
                            <td>71</td>
                        </tr>
                        <tr class=\"rank-3 league-table\">
                            <td>3</td>
                            <td class=\"league-table__team-names\">
                                <a href=\"#\">ทอตนัมฮอตสเปอร์</a>
                            </td>
                            <td>38</td>
                            <td>34</td>
                            <td>70</td>
                        </tr>
                        <tr class=\"rank-4 league-table\">
                            <td>4</td>
                            <td class=\"league-table__team-names\">
                                <a href=\"#\">แมนเชสเตอร์ซิตี</a>
                            </td>
                            <td>38</td>
                            <td>30</td>
                            <td>66</td>
                        </tr>
                        <tr class=\"league-table\">
                            <td>5</td>
                            <td class=\"league-table__team-names\">
                                <a href=\"#\">แมนเชสเตอร์ ยูไนเต็ท</a>
                            </td>
                            <td>38</td>
                            <td>14</td>
                            <td>66</td>
                        </tr>
                        <tr class=\"league-table\">
                            <td>6</td>
                            <td class=\"league-table__team-names\">
                                <a href=\"#\">เซาแทมป์ตัน</a>
                            </td>
                            <td>38</td>
                            <td>18</td>
                            <td>63</td>
                        </tr>
                        <tr class=\"league-table\">
                            <td>7</td>
                            <td class=\"league-table__team-names\">
                                <a href=\"#\">เวสต์แฮมยูไนเต็ด</a>
                            </td>
                            <td>38</td>
                            <td>14</td>
                            <td>62</td>
                        </tr>
                        <tr class=\"league-table\">
                            <td>8</td>
                            <td class=\"league-table__team-names\">
                                <a href=\"#\">ลิเวอร์พูล</a>
                            </td>
                            <td>38</td>
                            <td>13</td>
                            <td>60</td>
                        </tr>
                        <tr class=\"league-table\">
                            <td>9</td>
                            <td class=\"league-table__team-names\">
                                <a href=\"#\">สโตกซิตี</a>
                            </td>
                            <td>38</td>
                            <td>-14</td>
                            <td>51</td>
                        </tr>
                        <tr class=\"league-table\">
                            <td>10</td>
                            <td class=\"league-table__team-names\">
                                <a href=\"#\">เชลซี</a>
                            </td>
                            <td>38</td>
                            <td>6</td>
                            <td>50</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"row ad-box text-xs-center\">ADVERTISE HERE</div>
            <div class=\"row ad-box text-xs-center\">ADVERTISE HERE</div>
            <div class=\"row ad-box text-xs-center\">ADVERTISE HERE</div>
        </div>
    </div>
    <!---------- FOOTER BELOW ---------->
    <footer class=\"footer\">
        <ul>
            <li><a href=\"#\" class=\"footer__link\">หน้าแรก</a></li>
            <li><a href=\"#\" class=\"footer__link\">ผลบอลวันนี้</a></li>
            <li><a href=\"#\" class=\"footer__link\">ตารางการแข่งขัน</a></li>
            <li><a href=\"#\" class=\"footer__link\">ข่าวฟุตบอล</a></li>
            <li><a href=\"#\" class=\"footer__link\">สกู๊ปทั้งหมด</a></li>
            <li><a href=\"#\" class=\"footer__link\">กฎและข้อตกลง</a></li>
            <li><a href=\"#\" class=\"footer__link\">เกี่ยวกับเรา</a></li>
        </ul>
        <div class=\"footer-social text-xs-center\">
            <a href=\"#\" class=\"footer-social__icon footer-social__icon--facebook\"><i class=\"fa fa-facebook\"></i></a>
            <a href=\"#\" class=\"footer-social__icon footer-social__icon--twitter\"><i class=\"fa fa-twitter\"></i></a>
            <a href=\"#\" class=\"footer-social__icon footer-social__icon--pinterest\"><i class=\"fa fa-pinterest-p\"></i></a>
            <a href=\"#\" class=\"footer-social__icon footer-social__icon--google-plus\"><i class=\"fa fa-google-plus\"></i></a>
            <p>Copyright © 2015</p>
        </div>
    </footer>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 239,  285 => 228,  254 => 200,  238 => 187,  220 => 172,  204 => 159,  188 => 146,  174 => 135,  146 => 110,  130 => 97,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <h1 style="color:{{ config.themes.balltoro.color }}">{{ config.themes.balltoro.info }}</h1>*/
/*     <nav class="navbar-top bg-inverse">*/
/*         <div class="nav-bar">*/
/*             <a href="#">*/
/*                 <img class="nav-bar__logo " src="https://balltoro.com/ui/web/images/main-logo.png">*/
/*             </a>*/
/*             <button class="navbar-toggler pull-xs-right nav-bar__toggler" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">*/
/*                 <i class="fa fa-bars"></i>*/
/*             </button>*/
/*         </div>*/
/*     </nav>*/
/* */
/*     <div class="collapse" id="exCollapsingNavbar">*/
/*         <div class="bg-inverse nav-bar">*/
/*             <ul class="nav-bar__dropdown--position">*/
/*                 <li>*/
/*                     <a href="#" class="nav-list__menu">ผลบอลวันนี้</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="#" class="nav-list__menu">ตารางการแข่งขัน</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="#" class="nav-list__menu" data-toggle="collapse" data-target="#drilldown-1">*/
/*                         ข่าวฟุตบอล*/
/*                         <i class="fa fa-chevron-down"></i>*/
/*                     </a>*/
/*                     <ul id="drilldown-1" class="nav nav-pills nav-stacked collapse">*/
/*                         <li>*/
/*                             <a href="#" class="nav-list__collapse">*/
/*                                 <i class="fa fa-angle-right nav-list__collapse--icon"></i>*/
/*                                 English Premier League*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#" class="nav-list__collapse">*/
/*                                 <i class="fa fa-angle-right nav-list__collapse--icon"></i>*/
/*                                 Thai Premier League*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#" class="nav-list__collapse">*/
/*                                 <i class="fa fa-angle-right nav-list__collapse--icon"></i>*/
/*                                 ข่าวทั้งหมด*/
/*                             </a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="#" class="nav-list__menu" data-toggle="collapse" data-target="#drilldown-2">*/
/*                         สกู๊ปฟุตบอล*/
/*                         <i class="fa fa-chevron-down"></i>*/
/*                     </a>*/
/*                     <ul id="drilldown-2" class="nav nav-pills nav-stacked collapse">*/
/*                         <li>*/
/*                             <a href="#" class="nav-list__collapse">*/
/*                                 <i class="fa fa-angle-right nav-list__collapse--icon"></i>*/
/*                                 English Premier League*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#" class="nav-list__collapse">*/
/*                                 <i class="fa fa-angle-right nav-list__collapse--icon"></i>*/
/*                                 Thai Premier League*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#" class="nav-list__collapse">*/
/*                                 <i class="fa fa-angle-right nav-list__collapse--icon"></i>*/
/*                                 สกู๊ปทั้งหมด*/
/*                             </a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="#" class="nav-list__menu" type="button"><i class="fa fa-sign-in fa-2x"></i> เข้าสู่ระบบ</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container">*/
/*         <div class="col-xs-12">*/
/*             <div class="row ad-box text-xs-center">ADVERTISE HERE</div>*/
/*             <div class="row social social__border">*/
/*                 <a href="#" class="col-xs-3 social__button social__button--facebook fa fa-2x fa-facebook"></a>*/
/*                 <a href="#" class="col-xs-3 social__button social__button--twitter fa fa-2x fa-twitter"></a>*/
/*                 <a href="#" class="col-xs-3 social__button social__button--google-plus fa fa-2x fa-google-plus"></a>*/
/*                 <a href="#" class="col-xs-3 social__button social__button--line fa-2x icon-line"></a>*/
/*             </div>*/
/*             <div class="row carousel slide" id="featured" data-ride="carousel" data-interval="3000">*/
/*                 <div class="carousel-inner" role="listbox">*/
/*                     <div class="carousel-item active">*/
/*                         <div class="featured-content">*/
/*                             <div class="featured-content__image">*/
/*                                 <img src="{{ url('theme://images/featured-demo-img-2.png') }}" alt="DEMO 1">*/
/*                             </div>*/
/*                             <div class="featured-content__date">*/
/*                                 14 มิ.ย. 2559 20:00*/
/*                             </div>*/
/*                             <div class="featured-content__headline">*/
/*                                 <a href="#">HEADLINE</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="carousel-item">*/
/*                         <div class="featured-content">*/
/*                             <div class="featured-content__image">*/
/*                                 <img src="{{ url('theme://images/featured-demo-img-2.png') }}" alt="DEMO 1">*/
/*                             </div>*/
/*                             <div class="featured-content__date">*/
/*                                 14 มิ.ย. 2559 20:00*/
/*                             </div>*/
/*                             <div class="featured-content__headline">*/
/*                                 <a href="#">HEADLINE</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="featured-content__separator"></div>*/
/*             </div>*/
/*             <div class="row scoop m-t-2">*/
/*                 <div class="category__header">*/
/*                     <div class="pull-xs-left">*/
/*                         <h5>Special Scoops</h5>*/
/*                         <p>สกู๊ปพิเศษ</p>*/
/*                     </div>*/
/*                     <div class="pull-xs-right">*/
/*                         <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="scoop__content">*/
/*                     <div class="scoop__content--image">*/
/*                         <img src="{{ url('theme://images/featured-demo-img-2.png') }}" alt="DEMO SCOOP">*/
/*                     </div>*/
/*                     <div class="scoop__content--date">*/
/*                         14 มิ.ย. 2559 20:00*/
/*                     </div>*/
/*                     <div class="scoop__content--headline">*/
/*                         <a href="#">HEADLINE</a>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="scoop__content">*/
/*                     <div class="scoop__content--image">*/
/*                         <img src="{{ url('theme://images/featured-demo-img-2.png') }}" alt="DEMO SCOOP">*/
/*                     </div>*/
/*                     <div class="scoop__content--date">*/
/*                         14 มิ.ย. 2559 20:00*/
/*                     </div>*/
/*                     <div class="scoop__content--headline">*/
/*                         <a href="#">HEADLINE</a>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div>*/
/*                     <div class="col-xs-6 p-l-0">*/
/*                         <div class="scoop__content">*/
/*                             <div class="scoop__content--image">*/
/*                                 <img src="{{ url('theme://images/featured-demo-img-2.png') }}" alt="DEMO SCOOP">*/
/*                             </div>*/
/*                             <div class="scoop__content--date">*/
/*                                 14 มิ.ย. 2559 20:00*/
/*                             </div>*/
/*                             <div class="scoop__content--headline">*/
/*                                 <a href="#">HEADLINE</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-xs-6 p-r-0">*/
/*                         <div class="scoop__content">*/
/*                             <div class="scoop__content--image">*/
/*                                 <img src="{{ url('theme://images/featured-demo-img-2.png') }}" alt="DEMO SCOOP">*/
/*                             </div>*/
/*                             <div class="scoop__content--date">*/
/*                                 14 มิ.ย. 2559 20:00*/
/*                             </div>*/
/*                             <div class="scoop__content--headline">*/
/*                                 <a href="#">HEADLINE</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div>*/
/*                     <div class="col-xs-6 p-l-0">*/
/*                         <div class="scoop__content">*/
/*                             <div class="scoop__content--image">*/
/*                                 <img src="{{ url('theme://images/featured-demo-img-2.png') }}" alt="DEMO SCOOP">*/
/*                             </div>*/
/*                             <div class="scoop__content--date">*/
/*                                 14 มิ.ย. 2559 20:00*/
/*                             </div>*/
/*                             <div class="scoop__content--headline">*/
/*                                 <a href="#">HEADLINE</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-xs-6 p-r-0">*/
/*                         <div class="scoop__content">*/
/*                             <div class="scoop__content--image">*/
/*                                 <img src="{{ url('theme://images/featured-demo-img-2.png') }}" alt="DEMO SCOOP">*/
/*                             </div>*/
/*                             <div class="scoop__content--date">*/
/*                                 14 มิ.ย. 2559 20:00*/
/*                             </div>*/
/*                             <div class="scoop__content--headline">*/
/*                                 <a href="#">HEADLINE</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="text-xs-right">*/
/*                     <a href="#">สกู๊ปทั้งหมด <i class="fa fa-angle-right" aria-hidden="true"></i></a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row news m-t-2">*/
/*                 <div class="category__header">*/
/*                     <div class="pull-xs-left">*/
/*                         <h5>News</h5>*/
/*                         <p>ข่าวและความเคลื่อนไหวล่าสุด</p>*/
/*                     </div>*/
/*                     <div class="pull-xs-right">*/
/*                         <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="news__content">*/
/*                     <div class="col-xs-3 p-x-0">*/
/*                         <div class="news__content--image">*/
/*                             <img src="{{ url('theme://images/featured-demo-img-2.png') }}" alt="">*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-xs-9">*/
/*                         <div class="news__content--date">14 มิ.ย. 2559 20:00</div>*/
/*                         <div class="news__content--headline"><a href="#">HEADLINE</a></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="news__content">*/
/*                     <div class="col-xs-3 p-x-0">*/
/*                         <div class="news__content--image">*/
/*                             <img src="{{ url('theme://images/featured-demo-img-2.png') }}" alt="">*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-xs-9">*/
/*                         <div class="news__content--date">14 มิ.ย. 2559 20:00</div>*/
/*                         <div class="news__content--headline"><a href="#">HEADLINE</a></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="text-xs-right p-y-1">*/
/*                     <a href="#">ข่าวทั้งหมด <i class="fa fa-angle-right" aria-hidden="true"></i></a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row result-board">*/
/*                 <div class="row result-board__button collapsed" data-toggle="collapse" href="#collapse-dropdown" aria-expanded="false" aria-controls="collapse-dropdown">*/
/*                     <span>ผลบอล</span>*/
/*                 </div>*/
/*                 <div class="collapse" id="collapse-dropdown">*/
/*                     <div class="dropdown" >*/
/*                         <div  type="button" id="menu-toggler" data-toggle="dropdown">*/
/*                             <i class="fa fa-chevron-down pull-xs-right result-board__league-dropdown--icon"></i>*/
/*                             <div class="result-board__league-dropdown">*/
/*                                 <span>English Premier League</span>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="dropdown-menu result-board__league-dropdown--list" role="menu" aria-labelledby="menu-toggler">*/
/*                             <p>league result</p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="result-board__league-result">*/
/*                         <p>No Match Result.</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row result-board">*/
/*                 <div class="row result-board__button collapsed" data-toggle="collapse" href="#collapse-dropdown1" aria-expanded="false" aria-controls="collapse-dropdown">*/
/*                     <span>ตารางแข่งวันนี้</span>*/
/*                 </div>*/
/*                 <div class="collapse" id="collapse-dropdown1">*/
/*                     <div class="dropdown">*/
/*                         <div  type="button" id="menu-toggler1" data-toggle="dropdown">*/
/*                             <i class="fa fa-chevron-down pull-xs-right result-board__league-dropdown--icon"></i>*/
/*                             <div class="result-board__league-dropdown ">*/
/*                                 <span>English Premier League</span>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="dropdown-menu result-board__league-dropdown--list" role="menu" aria-labelledby="menu-toggler1">*/
/*                             <p>league result</p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="result-board__league-result">*/
/*                         <p>No Match Result.</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row result-board">*/
/*                 <div class="table-description">*/
/*                     <span>ตารางคะแนน</span><span>อัพเดท 20 มิ.ย. 2559 15:10</span>*/
/*                 </div>*/
/*                 <div class="dropdown" >*/
/*                         <span  type="button" id="menu-toggler2" data-toggle="dropdown">*/
/*                             <i class="fa fa-chevron-down pull-xs-right result-board__league-dropdown--icon"></i>*/
/*                             <span class="result-board__league-dropdown">*/
/*                                 <span class="">Premier League</span>*/
/*                             </span>*/
/*                         </span>*/
/*                     <div class="dropdown-menu result-board__league-dropdown--list" role="menu" aria-labelledby="menu-toggler2" >*/
/*                         <p>league result</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="result-board__league-result league-table">*/
/*                     <table class ="table-sm league-table--box">*/
/*                         <thead class="league-table__header">*/
/*                         <tr>*/
/*                             <th>Pos</th>*/
/*                             <th>Teams</th>*/
/*                             <th>P</th>*/
/*                             <th>+/-</th>*/
/*                             <th>Pts</th>*/
/*                         </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                         <tr class="rank-1 league-table">*/
/*                             <td>1</td>*/
/*                             <td class="league-table__team-names">*/
/*                                 <a href="#">เลสเตอร์ ซิตี้</a>*/
/*                             </td>*/
/*                             <td>38</td>*/
/*                             <td>32</td>*/
/*                             <td>81</td>*/
/*                         </tr>*/
/*                         <tr class="rank-2 league-table">*/
/*                             <td>2</td>*/
/*                             <td class="league-table__team-names">*/
/*                                 <a href="#">อาร์เซนอล</a>*/
/*                             </td>*/
/*                             <td>38</td>*/
/*                             <td>29</td>*/
/*                             <td>71</td>*/
/*                         </tr>*/
/*                         <tr class="rank-3 league-table">*/
/*                             <td>3</td>*/
/*                             <td class="league-table__team-names">*/
/*                                 <a href="#">ทอตนัมฮอตสเปอร์</a>*/
/*                             </td>*/
/*                             <td>38</td>*/
/*                             <td>34</td>*/
/*                             <td>70</td>*/
/*                         </tr>*/
/*                         <tr class="rank-4 league-table">*/
/*                             <td>4</td>*/
/*                             <td class="league-table__team-names">*/
/*                                 <a href="#">แมนเชสเตอร์ซิตี</a>*/
/*                             </td>*/
/*                             <td>38</td>*/
/*                             <td>30</td>*/
/*                             <td>66</td>*/
/*                         </tr>*/
/*                         <tr class="league-table">*/
/*                             <td>5</td>*/
/*                             <td class="league-table__team-names">*/
/*                                 <a href="#">แมนเชสเตอร์ ยูไนเต็ท</a>*/
/*                             </td>*/
/*                             <td>38</td>*/
/*                             <td>14</td>*/
/*                             <td>66</td>*/
/*                         </tr>*/
/*                         <tr class="league-table">*/
/*                             <td>6</td>*/
/*                             <td class="league-table__team-names">*/
/*                                 <a href="#">เซาแทมป์ตัน</a>*/
/*                             </td>*/
/*                             <td>38</td>*/
/*                             <td>18</td>*/
/*                             <td>63</td>*/
/*                         </tr>*/
/*                         <tr class="league-table">*/
/*                             <td>7</td>*/
/*                             <td class="league-table__team-names">*/
/*                                 <a href="#">เวสต์แฮมยูไนเต็ด</a>*/
/*                             </td>*/
/*                             <td>38</td>*/
/*                             <td>14</td>*/
/*                             <td>62</td>*/
/*                         </tr>*/
/*                         <tr class="league-table">*/
/*                             <td>8</td>*/
/*                             <td class="league-table__team-names">*/
/*                                 <a href="#">ลิเวอร์พูล</a>*/
/*                             </td>*/
/*                             <td>38</td>*/
/*                             <td>13</td>*/
/*                             <td>60</td>*/
/*                         </tr>*/
/*                         <tr class="league-table">*/
/*                             <td>9</td>*/
/*                             <td class="league-table__team-names">*/
/*                                 <a href="#">สโตกซิตี</a>*/
/*                             </td>*/
/*                             <td>38</td>*/
/*                             <td>-14</td>*/
/*                             <td>51</td>*/
/*                         </tr>*/
/*                         <tr class="league-table">*/
/*                             <td>10</td>*/
/*                             <td class="league-table__team-names">*/
/*                                 <a href="#">เชลซี</a>*/
/*                             </td>*/
/*                             <td>38</td>*/
/*                             <td>6</td>*/
/*                             <td>50</td>*/
/*                         </tr>*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row ad-box text-xs-center">ADVERTISE HERE</div>*/
/*             <div class="row ad-box text-xs-center">ADVERTISE HERE</div>*/
/*             <div class="row ad-box text-xs-center">ADVERTISE HERE</div>*/
/*         </div>*/
/*     </div>*/
/*     <!---------- FOOTER BELOW ---------->*/
/*     <footer class="footer">*/
/*         <ul>*/
/*             <li><a href="#" class="footer__link">หน้าแรก</a></li>*/
/*             <li><a href="#" class="footer__link">ผลบอลวันนี้</a></li>*/
/*             <li><a href="#" class="footer__link">ตารางการแข่งขัน</a></li>*/
/*             <li><a href="#" class="footer__link">ข่าวฟุตบอล</a></li>*/
/*             <li><a href="#" class="footer__link">สกู๊ปทั้งหมด</a></li>*/
/*             <li><a href="#" class="footer__link">กฎและข้อตกลง</a></li>*/
/*             <li><a href="#" class="footer__link">เกี่ยวกับเรา</a></li>*/
/*         </ul>*/
/*         <div class="footer-social text-xs-center">*/
/*             <a href="#" class="footer-social__icon footer-social__icon--facebook"><i class="fa fa-facebook"></i></a>*/
/*             <a href="#" class="footer-social__icon footer-social__icon--twitter"><i class="fa fa-twitter"></i></a>*/
/*             <a href="#" class="footer-social__icon footer-social__icon--pinterest"><i class="fa fa-pinterest-p"></i></a>*/
/*             <a href="#" class="footer-social__icon footer-social__icon--google-plus"><i class="fa fa-google-plus"></i></a>*/
/*             <p>Copyright © 2015</p>*/
/*         </div>*/
/*     </footer>*/
/* {% endblock %}*/
/* */
