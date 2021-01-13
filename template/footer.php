</main>
<footer id="contacts">

    <div class="footer">
        <div class="container">
            <p class="h5 text-center footer-head">Контакты</p>
            <div class="row footer-body">
                <div class="col-12 col-md-6">
                    <div class="d-table mr-auto ml-auto">

                        <p class="h5 bold text-body">Директор</p>
                        <?php
                        $sql = mysqli('SELECT * FROM `contacts`');
                        $array = mysqli_fetch_array($sql);
                        //print_r($array);

                        ?>
                        <p><?php echo $array['fio']; ?></p>
                        <p class="h5 bold text-body">Email:</p><a href="mailto:<?php echo $array['email']; ?>" class="d-block text-light"> <?php echo $array['email']; ?></a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="d-table mr-auto ml-auto">

                        <p class="h5 bold text-body">Время работы</p>
                        <p class="text-light text-uppercase">пн-вс: 10:00-22:00</p>
                        <div class="info">
                            <ul class="d-flex">
                                <li class="item">
                                    <a href="https://api.whatsapp.com/send?phone=<?php echo $array['phone']; ?>"
                                       target="_blank">
                                        <object data="/images/icons/whatsapp.svg" width="32" height="32"></object>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="viber://chat?number=<?php echo $array['phone']; ?>" class=""
                                       target="_blank">
                                        <object data="/images/icons/viber.svg" width="32" height="32"></object>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="border-top border-bottom">
                <p class="text-body">Все права защищены &copy;2019  - <?php echo date("Y")?> </p>
            </div>
        </div>
    </div>
</footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

<script src="https://kit.fontawesome.com/e9ba925aad.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="/library/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!--<script src="/js/jquery.fsscroll.js"></script>-->
<!--<script src="/js/fullpage.extensions.min.js"></script>-->
<script src="/js/fullpage.min.js"></script>
<script src="/js/scroll.js?t=<?php echo(microtime(true) . rand()); ?>"></script>
<script src="/js/fileinput.js"></script>
<script src="/js/aos.js"></script>
<script src="/js/swiper.js?t=<?php echo(microtime(true) . rand()); ?>"></script>
<script src="/js/input.js?t=<?php echo(microtime(true) . rand()); ?>"></script>
<script src="/js/main.js?t=<?php echo(microtime(true) . rand()); ?>"></script>
<script src="/js/side.js?t=<?php echo(microtime(true) . rand()); ?>"></script>
</body>
</html>