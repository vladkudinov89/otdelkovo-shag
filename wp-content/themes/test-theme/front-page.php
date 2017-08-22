<?php get_header(); ?>

<?php
$urls = GetTemplatePath();
?>


<div class="smetaWrap">
    <div class="container">
        <div class="smetaTitle title inlineBlock">
            <h1>Ремонт, которому не нужен Контроль</h1>
            <p>Ремонтируем по проверенным технологиям, а если что-то не так, переделываем бесплатно</p>
        </div>
        <div class="smetaForm form inlineBlock">
            <h2>Бесплатно составим подробную смету</h2>
            <p class="subTitle">оставьте заявку</p>
            <input type="text" class="inputText" placeholder="Имя">
            <input type="text" class="inputText" placeholder="Номер телефона для связи">
            <input type="button" class="formButton" value="Составить смету">
        </div>
    </div>
</div>

<div class="method topPadding">
    <div class="container">
        <h2>Наш подход</h2>
    </div>
    <div class="greyLine"></div>
    <div class="container">
        <div class="methodElem methodElem1">
            <h2>Говорим точную цену «на берегу»</h2>
            <img src="<?php echo $urls['template']; ?>/images/money.png" alt="">
            <p>Цена ремонта не изменится <br/>в ходе работ. Мы возьмем ровно столько на сколько договорились</p>
        </div>
        <div class="methodElem methodElem2">
            <h2>Тщательно<br/> отбираем мастеров</h2>
            <img src="<?php echo $urls['template']; ?>/images/profile.png" alt="">
            <p>Что бы работать у нас,<br/> сотрудники проходят <br/>3 отборочных этапа. <br/>Это позволило собрать <br/>в
                команде мастеров, за работу которых мы уверены</p>
        </div>
        <div class="methodElem methodElem3">
            <h2>Ремонтируем <br/>сразу как нужно</h2>
            <img src="<?php echo $urls['template']; ?>/images/like.png" alt="">
            <p>Все мастера придерживаются технологии строительства, <br/>а если что то не получается, <br/>то
                переделывают за свой счет</p>
        </div>
        <div class="methodElem methodElem4">
            <h2>Укладываемся <br/>в сроки</h2>
            <img src="<?php echo $urls['template']; ?>/images/calendar.png" alt="">
            <p>Благодаря подробной смете, мы заранее позаботимся <br/>о наличии необходимых материалов и комплектующих
                на объекте. А это значит, что <br/>в работе не будет простоя.</p>
        </div>
    </div>
</div>

<div class="work">
    <div class="container">
        <h2>Как мы работаем?</h2>
    </div>
    <div class="greyLine"></div>
    <div class="container">
        <p class="subTitleWork">
            5 простых способа для комфортной работы над проектом.
        </p>
        <div class="stepWrap clearfix">
            <div class="stepColumn">
                <div class="step step1">
                    <span class="stepNumber">этап 01\</span>
                    <h2>Составление проекта <br/>и расчёт сметы</h2>
                    <a href="#">Узнать подробнее и посмотреть примерную смету ></a>
                </div>
                <div class="step step2">
                    <span class="stepNumber">этап 02\</span>
                    <h2>Заключение договора <br/>и внесение аванса <br/>на материалы</h2>
                    <a href="#">Узнать подробнее и посмотреть примерную смету ></a>
                </div>
                <div class="step step3">
                    <span class="stepNumber">этап 03\</span>
                    <h2>Закуп материалов <br/>и строительные работы</h2>
                    <a href="#">Узнать подробнее и посмотреть примерную смету ></a>
                </div>
            </div>
            <div class="stepColumn">
                <div class="step step4">
                    <span class="stepNumber">этап 04\</span>
                    <h2>Контроль качества</h2>
                    <a href="#">Узнать подробнее и посмотреть примерную смету ></a>
                </div>
                <div class="step step5">
                    <span class="stepNumber">этап 05\</span>
                    <h2>Сдача и примем работ</h2>
                    <p>При приемке работ не все знаю как правильно <br/>проверять качество работы и на что следует <br/>обратить
                        внимание.Что бы вы смоги проверить <br/>качество ремонта, мы разработали простой лист <br/>проверки
                        выполненных работ, который расскажет<br/> как правильно проверять работы и на что <br/>следует
                        обратить внимание.</p>
                    <p>С помощью это простого инструмента вы сможете <br/>самостоятельно проверить качество работы.</p>
                    <a href="#">Распечатать инструкцию ></a>
                </div>

            </div>
        </div>
    </div>
    <div class="greyLine"></div>
    <div class="container topPadding">
        <div class="stepWrap stepWrapPartners clearfix">
            <div class="stepColumn">
                <div class="step stepGarant">
                    <span class="stepNumber">Гарантия и страховка</span>
                    <h2>По окончанию<br/> ремонта мы <br/>выдаем сертификат <br/>на гарантийное<br/> обслуживание <br/>и
                        страховой <br/>полис на 1 год</h2>
                    <p>Узнать подробнее <br/>о условии предоставлении<br/> гаранции и страховки</p>
                    <div class="formButton stepButton">Возникла спорная ситуация? <br/>Напишите директору</div>
                </div>
            </div>
            <div class="stepColumn">
                <div class="stepColumn stepColumnPrice">
                    <div class="step stepPrice clearfix">
                        <h2>Рассчитать<br/> стоимость<br/> работ</h2>
                    </div>
                </div>
                <div class="stepColumn stepColumnPrice">
                    <div class="step stepPrice stepPrice2">
                        <h2>Ремонт <br/>в рассрочку</h2>
                    </div>
                </div>

                <div class="step partners">
                    <h2>Наши скидки — ваши скидки</h2>
                    <p>За 3 года мы работали с (200) поставщиками <br/>в нашем городе, и заключили партнерские<br/>
                        договора только с надежными и проверенными компаниями.</p>
                    <div class="partnersWrap">
                        <div class="partner">
                            <img src="<?php echo $urls['template']; ?>/images/partner1.jpg" alt="">
                        </div>
                        <div class="partner partner2 partnerText">
                            <p>
                                выгоднее на <br/>500 руб/м2
                            </p>
                        </div>
                        <div class="partner partner3">
                            <img src="<?php echo $urls['template']; ?>/images/partner3.jpg" alt="">
                        </div>
                        <div class="partner partner4">
                            <img src="<?php echo $urls['template']; ?>/images/partner3.jpg" alt="">
                        </div>
                    </div>
                    <a href="#">Стать партнёром ></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio">
    <div class="container">
        <h2 class="boldTitle">Как мы работаем?</h2>
        <p class="subBoldTitle">Мы отобрали для вас несколько знаковых проекта, которые <br/>помогут вам
            сориентироваьтся в услугах нашей компании</p>
        <div class="examplesWrap clearfix">

            <?php

            $posts = get_posts(array(
                'post_type' => 'flats ',
                'post_status' => 'publish'
            ));

            foreach ($posts as $post) { ?>

                <div class="example exampleSmall mr">
                    <div class="imgExample"
                        <?php

                        $args = array(
                            'post_parent' => $post->ID,
                            'post_mime_type' => 'image'
                        );

                        $childrens = get_children($args);

                        if ($childrens) {
                            foreach ($childrens as $children) { ?>

                                style="background-image:
                                        url(<?php echo $children->guid; ?>)"

                            <?php }
                        }
                        ?>
                    >
                    </div>

                    <div class="exampleText">
                        <h3><?php echo $post->post_title; ?></h3>
                        <p><?php echo $post->post_content; ?></p>
                    </div>
                </div>
            <?php } ?>


        </div>
    </div>
</div>

<div class="onlinePayment">
    <div class="container">
        <h2 class="boldTitle">Оплатить онлайн</h2>
        <p class="subBoldTitle">Если наши специалисты уже произвели вам все расчеты, вы сможете<br/> просто и быстро
            оплатить смету через наш сайт.<br/>Вам понадобится номер договора.</p>
        <div class="pButtns clearfix">
            <div class="pBtn stepButton formButton">
                перейти на страницу оплаты
            </div>
            <div class="pHref">
                <img src="<?php echo $urls['template']; ?>/images/visa.png" alt="">
            </div>
            <div class="pHref">
                <img src="<?php echo $urls['template']; ?>/images/master.png" alt="">
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
