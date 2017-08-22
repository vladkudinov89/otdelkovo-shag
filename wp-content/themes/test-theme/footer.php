<?php
$urls = GetTemplatePath();
?>
<footer>
    <div class="container clearfix">
        <div class="footerText footerTLeft">
            (c) Copyright 2016 ООО «Отделково»<br/>
            ИНН 4027123166<br/>
            ОГРН 1154027000962
        </div>
        <div class="footerText footerTCenter">
            <img class="footerSocialWrap" src="<?php echo $urls['template']; ?>/images/socialIcons.png" alt="">
            <a href="#">Политика конфидециальности</a>
        </div>

        <div class="footerText footerTRight">
            Подробности по телефону:<br/>
            8-4842-40-10-07<br/>
            <a href="#">Пожаловаться директору</a>
        </div>

    </div>
</footer>
<div class="modal modalWrap">
    <div class="modalContent">
        <h3>Спасибо, Все прошло удачно</h3>
        <p>Ваша заявка успешно отправлена и через пару минут, с вами свяжется наш специалист, для выяснения подробностей</p>
        <input type="button" class="formButton" value="Хорошо">
    </div>
</div>