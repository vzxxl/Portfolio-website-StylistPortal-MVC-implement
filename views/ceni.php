<?php include('views/layouts/header.php'); ?>

<?php include('views/layouts/title.php'); ?>

  <div class="main-wrapper clearfix">

    <div class="main-section clearfix">

  <!--POP UP FORM-->
      <div id="overlay"></div>

      <!--Card1-->
       <div id="form-messages"></div>
      <div id="overlay-form1" class="overlay-form animated flipInY">
       <form id="ajax-mailer1" action="orders.php" method="post">
      <h2 class="heading-md">Введите информацию для заказа</h2>
      <label for="name"> <p class="input-title">Ваше имя</p></label>
      <input type="text" class="input-name" name="name">
      <label><p class="input-title">Телефон для связи</p>
      <input type="text" class="input-tel" name="phonenum"></label>
      <label class="day-check"><input type="radio" checked="checked" id='day1' name="day1">Пятница, Суббота</label><br>
      <label class="day-check"><input type="radio" name="day1">Другие дни</label>
      <select class="select-field">
         <option>Стилист (4500р)</option>
         <option>VIP-стилист (6500р)</option>
         <option>TOP-стилист (10500р)</option>
         <option>Ведущий стилист (11500р)</option>
       </select>
      <button type="submit" id="submit-btn" class="btn">ОТПРАВИТЬ</button>
      <!--<div id="btn-close" class="btn-close1">x</div>--></form></div>
      <!--Card1 END-->

      <!--Card2-->
      <div id="overlay-form2" class="overlay-form animated flipInY">
      <form id='ajax-mailer2' method='post' action="orders.php">
      <h2 class="heading-md">Введите информацию для заказа</h2>
      <label for="name"> <p class="input-title">Ваше имя</p></label>
      <input type="text" class="input-name" name="name">
      <label><p class="input-title">Телефон для связи</p>
      <input type="text" class="input-tel" name="phonenum"></label>
      <label class="day-check"><input type="radio" checked="checked" name="day2">Пятница, Суббота</label><br>
      <label class="day-check"><input type="radio" name="day2">Другие дни</label>
      <select class="select-field">
         <option>Стилист (6500р)</option>
         <option>VIP-стилист (8500р)</option>
         <option>TOP-стилист (11500р)</option>
         <option>Ведущий стилист (13500)</option>
       </select>
      <button class="btn">ОТПРАВИТЬ</button>
      <!--<div id="btn-close" class="btn-close1">x</div>--></form></div>
      <!--Card2 END-->

      <!--Card3-->
      <div id="overlay-form3" class="overlay-form animated flipInY">
      <form id='ajax-mailer3' method='post' action="orders.php">
      <h2 class="heading-md">Введите информацию для заказа</h2>
      <label for="name"> <p class="input-title">Ваше имя</p></label>
      <input type="text" class="input-name" name="name">
      <label><p class="input-title">Телефон для связи</p>
      <input type="text" class="input-tel" name="phonenum" required></label>
      <label class="day-check"><input type="radio" name="day3">Пятница, Суббота</label><br>
      <label class="day-check"><input type="radio" checked="checked" name="day3">Другие дни</label>
      <select class="select-field">
         <option>Стилист (3500р)</option>
         <option>VIP-стилист (4500р)</option>
         <option>TOP-стилист (6500р)</option>
         <option>Ведущий стилист (8500р)</option>
       </select>
      <button class="btn">ОТПРАВИТЬ</button>
      <!--<div id="btn-close" class="btn-close1">x</div>--></form></div>
      <!--Card3 END-->

      <!--Card4-->
      <div id="overlay-form4" class="overlay-form animated flipInY">
      <form id='ajax-mailer4' method='post' action="orders.php">
      <h2 class="heading-md">Введите информацию для заказа</h2>
      <p class="input-title">Ваше имя</p>
      <label for="name"><input type="text" class="input-name" name="name" id="name"></label>
      <p class="input-title">Телефон для связи</p>
      <label for="phonenum"><input type="text" class="input-tel" name="phonenum" required id="phonenum"></label>
      <label for="day4" class="day-check"><input type="radio" name="day4" id="day4">Пятница, Суббота</label><br>
      <label for="day4-1"class="day-check"><input type="radio" checked="checked" name="day4" id="day4-1">Другие дни</label>
      <select class="select-field">
         <option>Стилист (5300р)</option>
         <option>VIP-стилист (7000р)</option>
         <option>TOP-стилист (9500р)</option>
         <option>Ведущий стилист (11500р)</option>
       </select>
      <button class="btn">ОТПРАВИТЬ</button>
      <!--<div id="btn-close" class="btn-close1">x</div>--></form></div>
      <!--Card4 END-->

   <!--POP UP FORM END-->

      <div class="row margin-tb-30 clearfix">
        <h2>Если Ваше торжество состоится <span>в пятницу или субботу</span></h2><br>

        <div class="col-md-6">
          <div class="pricing-table-v6 v6-plus">
            <div class="service-block service-block-sea animated flipInY">
              <h2 class="heading-md first-card">Прическа+Макияж</h2>
              <h3>
                <span class="pr">от 4 500</span>
                <span class="cr">руб.</span>
              </h3>
              <ul class="list-unstyled pricing-v4-content">
                <li><p>Cтилист</p>.........................4500р</li>
                <li><p>VIP-стилист</p>.................6500р</li>
                <li><p>TOP-стилист</p>.............10500р</li>
                <li><p>Ведущий стилист</p>....11500р</li>
              </ul>
              <button class="btn btn-price btn-price1">Заказать</button>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="pricing-table-v6 v6-plus">
            <div class="service-block service-block-sea animated flipInY">
              <h2 class="heading-md">Прическа+Макияж с Репетицией</h2>
              <h3>
                <span class="pr">от 6 500</span>
                <span class="cr">руб.</span>
              </h3>
              <ul class="list-unstyled pricing-v4-content">
                <li><p>Cтилист</p>.........................6500р</li>
                <li><p>VIP-стилист</p>.................8500р</li>
                <li><p>TOP-стилист</p>.............11500р</li>
                <li><p>Ведущий стилист</p>....13500р</li>
              </ul>
              <button class="btn btn-price btn-price2">Заказать</button>
            </div>
          </div>
        </div>
      </div>
      <br><br>

        

        <div class="row margin-tb-30 clearfix">
          <h2>Если Ваше торжество состоится <span>в другие дни</span></h2><br>
          
          <div class="col-md-6">
            <div class="pricing-table-v6 v6-plus">
              <div class="service-block service-block-sea animated flipInY">
                <h2 class="heading-md first-card">Прическа+Макияж</h2>
                <h3>
                  <span class="pr">от 3 500</span>
                  <span class="cr">руб.</span>
                </h3>
                <ul class="list-unstyled pricing-v4-content">
                  <li><p>Cтилист</p>.........................3500р</li>
                  <li><p>VIP-стилист</p>.................4500р</li>
                  <li><p>TOP-стилист</p>...............6500р</li>
                  <li><p>Ведущий стилист</p>......8500р</li>
                </ul>
                <button class="btn btn-price btn-price3 animated flipInY">Заказать</button>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="pricing-table-v6 v6-plus">
              <div class="service-block service-block-sea">
                <h2 class="heading-md">Прическа+Макияж с Репетиией</h2>
                <h3>
                  <span class="pr">от 5 300</span>
                  <span class="cr">руб.</span>
                </h3>
                <ul class="list-unstyled pricing-v4-content">
                  <li><p>Cтилист</p>.........................5300р</li>
                  <li><p>VIP-стилист</p>.................7000р</li>
                  <li><p>TOP-стилист</p>...............9500р</li>
                  <li><p>Ведущий стилист</p>....11500р</li>
                </ul>
                <button class="btn btn-price btn-price4">Заказать</button>
              </div>
            </div>
          </div>
        </div>

      </div>

    

          <aside class="side-bar clearfix" role="complementary">
            <div class="callback">
              <p class="callback-title">
                Вы также можете заказать бесплатную консультацию по телефону или skype
              </p>
              <p class="callback-skype">
                <label>Ваш ник в skype
                <input class="input-skype" type="text"></p></label>
              или
              <p class="callback-phone">
                <label>Ваш мобильный телефон
                <input id="tel-callback" class="input-phone" type="text"></p></label>
              <input class="submit" type="submit" value="Отправить"></div>
            <div class="feedback">
              <div class="longline clearfix">
                <div class="feedback-slide slide1">
                  <img src="img/feedback1.jpg" alt="" class="feedback-img">
                  <h3>Мария Карасева</h3>
                  <p class="feedback-text">
                    К свадьбе готовились очень серьезно и к поиску стилиста тоже подхоили оснвательно. В Андриане нам очень помогли, сделали все грамотно. Один день был выделен для репетиция. На самой свадьбе все сделали как и репетировали. Я очень довольна!
                  </p>
                </div>

                <div class="feedback-slide slide2">
                  <img src="img/feedback1.jpg" alt="" class="feedback-img">
                  <h3>Мария Карасева</h3>
                  <p class="feedback-text">
                    К свадьбе готовились очень серьезно и к поиску стилиста тоже подхоили оснвательно. В Андриане нам очень помогли, сделали все грамотно. Один день был выделен для репетиция. На самой свадьбе все сделали как и репетировали. Я очень довольна!
                  </p>
                </div>

                <div class="feedback-slide slide3">
                  <img src="img/feedback1.jpg" alt="" class="feedback-img">
                  <h3>Мария Карасева</h3>
                  <p class="feedback-text">
                    К свадьбе готовились очень серьезно и к поиску стилиста тоже подхоили оснвательно. В Андриане нам очень помогли, сделали все грамотно. Один день был выделен для репетиция. На самой свадьбе все сделали как и репетировали. Я очень довольна!
                  </p>
                </div>

              </div>

              <div class="button-left button"></div>
              <div class="button-right button"></div>
            </div>
          </aside>
       
        </div>
      

<?php include('views/layouts/footer.php'); ?>