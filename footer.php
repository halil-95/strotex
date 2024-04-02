<footer id="footer" style="background-image:url(dist/img/slide/ГЛАВНАЯ-ЗАВОД-ПО-СУШКЕ-И-КЛАССИФ-ПЕСКА\ \(1\).jpg);">
    <div class="footer__block container flex">
        <div class="footer__block__left flex">
            <div class="equepment left">
                <h4>Оборудование</h4>
                <ul>
                    <li>Каталог</li>
                    <li>Опросный лист</li>
                    <ul class="child__list">
                        <li>Заказ и поставка</li>
                        <li>Изготовление</li>
                        <li>Поставка</li>
                    </ul>
                </ul>
            </div>
            <div class="accompaniment left">
                <h4>Сопровождение</h4>
                <ul>
                    <li>Каталог</li>
                    <li>Опросный лист</li>
                    <ul class="child__list">
                        <li>Заказ и поставка</li>
                        <li>Изготовление</li>
                        <li>Поставка</li>
                    </ul>
                </ul>
            </div>
            <div class="warranty left">
                <h4>Гарантия</h4>
                <ul>
                    <li>Каталог</li>
                    <li>Опросный лист</li>
                    <ul class="child__list">
                        <li>Заказ и поставка</li>
                        <li>Изготовление</li>
                        <li>Поставка</li>
                    </ul>
                </ul>
            </div>
            <div class="about left">
                <h4>О компании</h4>
                <ul>
                    <li>Каталог</li>
                    <li>Опросный лист</li>
                    <ul class="child__list">
                        <li>Заказ и поставка</li>
                        <li>Изготовление</li>
                        <li>Поставка</li>
                    </ul>
                </ul>
            </div>
        </div>
        <div class="footer__block__right flex">
            <form action="" class="form flex_column">
                <h4>Запросите коммерческое предложение</h4>
                <div class="form__name">
                    <input placeholder="Имя" type="text" name="name" id="name" aria-label="Напишите ваше имя" />
                </div>
                <div class="form__phone">
                    <input placeholder="номер телефона" type="text" name="name" id="name"
                        aria-label="Напишите ваше номер телефона" />
                </div>
                <div class="form__email">
                    <input placeholder="email" type="text" name="name" id="name"
                        aria-label="Напишите ваше email адресс" />
                </div>
                <div class="form__textarea">
                    <textarea placeholder="предложение" name="" readonly
                        aria-level="Напишите ваше предложение"></textarea>
                </div>
                <div class="form__textarea__btn ">
                    <input type="submit" class="button" value="Отправить" />
                </div>
            </form>
        </div>
    </div>
    <div class="footer__block__bootoom">
        <div class="footer__block__bootoom__logo"></div>
        <div class="footer__block__bootoom__rights"></div>
    </div>
</footer>
    <script src="dist/script/script.js"></script>
    <!-- <script src="dist/script/node_modules/@fancyapps/ui/dist/fancybox/fancybox.umd.js"></script> -->
    <script src="node_modules/@splidejs/splide/dist/js/splide.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var splide = new Splide('.splide', {
                type: 'loop',
                autoplay: 'play',
            });
            splide.mount();
        });
    </script>
    <?php wp_footer();?>
</body>

</html>