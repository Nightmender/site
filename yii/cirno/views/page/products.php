<?php

/* @var $this yii\web\View */

$this->title = 'Список товаров';
?>



<div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 filter">
    			<h3>Фильтры</h3>
    			<form>
    				<label>Цена / руб</label>
            <div class="filter_price">
              <input type="text" value="0">
              -
              <input type="text" value="40000">
            </div>

    				<button type="submit">Подобрать</button>
    			</form>
    		</div>




<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
    			<div class="short_description">

                        


    				<img src="images/<?php echo $categories['img'];?>">
    				<div>
    					<h2><?php echo $categories['name'];?></h2>
    					<p><?php echo $categories['description'];?></p>
    				</div>
    			</div>
          <div class="row content">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header_list_prod">
                <div class="row">
                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <h1>Электроника</h1>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 sortirovka_and_number_prod">
                    <form action="#">
                      <p><strong>Сортировка по:</strong>
                        <select name="sortirovka_prod">
                          <option selected="selected">--</option>
                          <option value="0">Цене, по возрастанию</option>
                          <option value="1">Цене, по убыванию</option>
                          <option value="2">Названию товара, от А до Я</option>
                          <option value="3">Названию товара, от Я до А</option>
                         </select>
                      </p>
                      <button type="submit">Go</button>
                    </form>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs view_list_prod">
                    <p><strong>Вид:</strong>
                      <a href="#"><i class="glyphicon glyphicon-th"></i><span>Сетка</span></a>
                      <a href="#"><i class="glyphicon glyphicon-th-list"></i><span>Список</span></a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-4 col-xs-12">
                <div class="product">
                  <a href="#" class="product_img">
                    <span>-10%</span>
                    <img src="images/prod4.jpg">
                  </a>
                  <a href="#" class="product_title">Телевизор ламповый h12</a>
                  <div class="product_price">
                    <span class="price">21000 руб</span>
                    <span class="price_old">23000 руб</span>
                  </div>
                  <div class="product_btn">
                    <a href="#" class="cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                    <a href="#" class="mylist">Список желаний</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-4 col-xs-12">
                <div class="product">
                  <a href="#" class="product_img">
                    <span>-10%</span>
                    <img src="images/prod2.jpg">
                  </a>
                  <a href="#" class="product_title">Комплектующие для пк</a>
                  <div class="product_price">
                    <span class="price">30000 руб</span>
                    <span class="price_old">31000 руб</span>
                  </div>
                  <div class="product_btn">
                    <a href="#" class="cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                    <a href="#" class="mylist">Список желаний</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-4 col-xs-12">
                <div class="product">
                  <a href="#" class="product_img">
                    <span>-10%</span>
                    <img src="images/prod3.jpg">
                  </a>
                  <a href="#" class="product_title">Телевизор плазменый LG</a>
                  <div class="product_price">
                    <span class="price">30500 руб</span>
                    <span class="price_old">30700 руб</span>
                  </div>
                  <div class="product_btn">
                    <a href="#" class="cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                    <a href="#" class="mylist">Список желаний</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-4 col-xs-12">
                <div class="product">
                  <a href="#" class="product_img">
                    <span>-10%</span>
                    <img src="images/prod1.jpg">
                  </a>
                  <a href="#" class="product_title">Телевизор ламповый h21</a>
                  <div class="product_price">
                    <span class="price">3500 руб</span>
                    <span class="price_old">3700 руб</span>
                  </div>
                  <div class="product_btn">
                    <a href="#" class="cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                    <a href="#" class="mylist">Список желаний</a>
                  </div>
                </div>
              </div>

              </div>
          </div>
</div>

