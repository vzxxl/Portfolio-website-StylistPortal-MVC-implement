<?php
include('views/layouts/header.php');
include('views/layouts/title.php');
?>

<!--WOW.js-->
<script>
    new WOW().init();
</script>
<!--WOW.js END-->

<div class="main-wrapper clearfix">
    <div class="main-section clearfix">

        <div class="div-of-stylists clearfix wow fadeInUp" data-wow-duration="0.7s">

            <img src="img/stilisty.jpg" alt="">

            <p class="p-horiz-st p-horiz-st1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, nostrum, magnam. Molestias voluptas dolor inventore aliquam fuga. Animi fuga, vitae id quam deleniti facere quaerat libero fugiat repellendus quidem adipisci!</p>

        </div>


        <div class="div-of-stylists clearfix wow fadeInUp" data-wow-duration="0.7s" data-wow-offset="100">

            <p class="p-horiz-st p-horiz-st4">Nostrum esse optio delectus, et quo voluptas facere vero laborum quam fugit non voluptatibus est, reiciendis voluptatem aut ut ex odio repudiandae. Aspernatur officiis, ducimus distinctio perferendis numquam eos nostrum.</p>

            <img src="img/vip-stilisty.jpg" alt="">

        </div>


        <div class="div-of-stylists clearfix wow fadeInUp" data-wow-duration="0.7s" data-wow-offset="100">

            <img src="img/top-stilisty.jpg" alt="">
            <p class="p-horiz-st p-horiz-st1">Mollitia incidunt natus, nemo doloribus! Quisquam, possimus, error. Mollitia corporis amet vitae ipsam quibusdam, tempore repellat, fugiat ullam laborum, nostrum deserunt libero laboriosam modi esse? Itaque asperiores blanditiis, odit et.</p>


        </div>


        <div class="div-of-stylists clearfix wow fadeInUp" data-wow-duration="0.7s" data-wow-offset="100">

            <p class="p-horiz-st p-horiz-st4">Corporis consequatur eum molestiae veniam molestias excepturi numquam earum dolorem reprehenderit. Iste voluptatem voluptas obcaecati culpa vitae, optio laudantium, blanditiis quod, veritatis deleniti eveniet officiis amet, qui nam quaerat aliquid.</p>
            <img src="img/vedushie-stilisty.jpg" alt="">

        </div>

    </div>


    <aside class="side-bar clearfix">
        <div class="callback">
            <p class="callback-title">Вы также можете заказать бесплатную консультацию по телефону или skype</p>
            <p class="callback-skype">Ваш ник в skype<input class="input-skype" type="text"></p>или
            <p class="callback-phone">Ваш мобильный телефон<input class="input-phone" type="text"></p>
            <input class="submit" type="submit" value="Отправить">
        </div>
        <div class="feedback">
            <div class="longline clearfix">
                <div class="feedback-slide slide1">
                    <img src="img/feedback1.jpg" alt="" class="feedback-img">
                    <h3>Мария Карасева</h3>
                    <p class="feedback-text">К свадьбе готовились очень серьезно и к поиску стилиста тоже подхоили оснвательно. В Андриане нам очень помогли, сделали все грамотно. Один день был выделен для репетиция. На самой свадьбе все сделали как и репетировали. Я очень довольна!</p>
                </div>

                <div class="feedback-slide slide2">
                    <img src="img/feedback1.jpg" alt="" class="feedback-img">
                    <h3>Мария Карасева</h3>
                    <p class="feedback-text">К свадьбе готовились очень серьезно и к поиску стилиста тоже подхоили оснвательно. В Андриане нам очень помогли, сделали все грамотно. Один день был выделен для репетиция. На самой свадьбе все сделали как и репетировали. Я очень довольна!</p>
                </div>

                <div class="feedback-slide slide3">
                    <img src="img/feedback1.jpg" alt="" class="feedback-img">
                    <h3>Мария Карасева</h3>
                    <p class="feedback-text">К свадьбе готовились очень серьезно и к поиску стилиста тоже подхоили оснвательно. В Андриане нам очень помогли, сделали все грамотно. Один день был выделен для репетиция. На самой свадьбе все сделали как и репетировали. Я очень довольна!</p>
                </div>


            </div>

            <div class="button-left button"></div>
            <div class="button-right button"></div>
        </div>
    </aside>

</div>


<?php include('views/layouts/footer.php'); ?>