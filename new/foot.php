<?php

function foot($num) {
    $active = array();
    for ($i = 0; $i < 11; $i++) {
        if ($i === $num) {
            $active[$i] = " class=\"active\"";
        } 
    }
    echo "
        </div>
        <!--<div class=\"pagenavi\"><span class=\"pages\">Page 1 of 2</span><span class=\"current\">1</span><a href=\"#\" title=\"2\">2</a><a href=\"#\" >&raquo;</a></div>-->
    </div>                        
<div class=\"sidebar\">
                            <div class=\"gadget\">
                                <h2>Работодателю</h2>
                                <div class=\"clr\"></div>
                                <ul class=\"sb_menu\">
                                    <li$active[0]><a href=\"index.php#index\">Главная</a></li>
                                    <li$active[1]><a href=\"podbor.php#podbor\">Подбор персонала</a></li>
                                    <li$active[2]><a href=\"mass_recruit.php#recruit\">Массовый рекрутмент</a></li>
                                    <li$active[3]><a href=\"exp.php#exp\">Наш опыт</a></li>
                                    <li$active[4]><a href=\"recommend.php#recommend\">Нас рекомендуют</a></li>
                                    <li$active[5]><a href=\"research.php#research\">Исследование рынка</a></li>
                                </ul>
                            </div>
                            <div class=\"gadget\">
                                <h2><span>Соискателю</span></h2>
                                <div class=\"clr\"></div>
                                <ul class=\"ex_menu\">
                                  <li$active[6]><a href=\"vacance.php#vacance\">Список вакансий</a></li>
                                  <li$active[7]><a href=\"gala-terapy.php#terapy\">ГАЛА-терапия</a> </li>
                                  <li$active[8]><a href=\"school.php#school\">Школа рекрутеров</a> </li>
                                  <li$active[9]><a href=\"career.php#career\">Карьера у нас</a> </li>
                                  <li$active[10]><a href=\"resume.php#resume\">Отправить резюме</a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"clr\"></div>
                    </div>
                </div>
            </div>
            <div class=\"fbg\">
                <div class=\"fbg_resize\">
                    <div class=\"col c1\">
                        <h2><span>Наши клиенты</span></h2>
                        <a href=\"http://www.sberbank.ru/\" target=\"_blank\"><img src=\"images/sberlogo.jpg\" width=\"58\" height=\"58\" alt=\"pix\" /></a>
                        <a href=\"http://www.bm.ru/\" target=\"_blank\"><img src=\"images/bank_mos_logo.jpg\" width=\"58\" height=\"58\" alt=\"pix\" /></a>
                        <a href=\"http://www.rosatom.ru/\" target=\"_blank\"><img src=\"images/rosatom_logo.png\" width=\"58\" height=\"58\" alt=\"pix\" /></a> 
                        <a href=\"http://www.raiffeisen.ru/\" target=\"_blank\"><img src=\"images/raif_logo.jpg\" width=\"58\" height=\"58\" alt=\"pix\" /></a> 
                        <a href=\"http://www.rusal.ru/\" target=\"_blank\"><img src=\"images/logo_big_rusal.jpg\" width=\"58\" height=\"58\" alt=\"pix\" /></a> 
                        <a href=\"http://www.croc.ru/\" target=\"_blank\"><img src=\"images/croclogo.jpg\" width=\"58\" height=\"58\" alt=\"pix\" /></a> 
                    </div>
                    <div class=\"col c2\">
                        <h2><span>Москва</span></h2>
                        <p>Бизнес-Центр «РОССИЯ» 109316, Волгоградский пр-т, д 26, стр.1,  9 этаж, офис 907<br />
                            <a href=\"mailto:mikerova@gala-persona.ru\">Генеральный директор<br />Ольга Микерова</a><br />
                            8 (909) 996-90-04
                            <br />8 (903) 798-11-74</p>
                    </div>
                    <div class=\"col c3\">
                        <h2><span>Санкт-петербург</span></h2>
                        <p>В.О., 4-я линия, д.11, лит.А, пом. 1-Н<br /><br /><br />
                        <a href=\"mailto:hr20@gala-persona.ru\">Руководитель офиса<br />в Санкт-Петербурге<br />Юлия Байдалакова</a><br />
                            (921) 566-77-52</p>
                    </div>
                    <div class=\"clr\"></div>
                </div>
            </div>
            <div class=\"clr\"></div>
        </div>
        <div class=\"footer\">
            <div class=\"footer_resize\">
              <p class=\"lf\">Компания «ГАЛА-персона» основана в 2005 году © 2005-2015 All Rights Reserved.</p>
<div class=\"clr\"></div>
            </div>
        </div>
    </body>
</html>        
";
}
