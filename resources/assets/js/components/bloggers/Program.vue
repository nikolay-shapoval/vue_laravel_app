<template>
<div id="main-block" class="main-block">
  <div id="main-scroll" class="main-block_inner">
    <div class="subheader_cnt subheader-mob">
      <!--title-->
      <h1 class="subheader_t">Добавить программу</h1>
    </div>
    <!--content-->
    <form class="content form create-progr" role="form">
      <div class="row">
        <div class="col-lg-6 lev-1">
          <div class="box">
            <div class="row">
              <div class="col-lg-6 lev-3">
                <div class="form-group __nom">
                  <label for="prog-name">Название программы</label>
                  <input type="text" class="form-control" id="prog-name">
                </div>
                <div class="row">
                  <div class="col-lg-6 lev-3">
                    <div class="form-group">
                      <label for="prog-price">Цена</label>
                      <input type="text" class="form-control" id="prog-price">
                    </div>
                  </div>
                  <div class="col-lg-6 lev-3">
                    <div class="form-group">
                      <label for="prog-val">Валюта</label>
                      <select class="form-control" id="prog-val">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 lev-3">
                <div class="row">
                  <div class="col-lg-6 lev-3">
                    <div class="form-group __nomlg">
                      <label for="prog-type">Тип программы</label>
                      <select class="form-control" id="prog-type">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6 lev-3">
                    <div class="form-group __nomlg">
                      <label for="prog-quote">Квота</label>
                      <input type="text" class="form-control" id="prog-quote">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="prog-contract">Контракт</label>
                  <select class="form-control" id="prog-contract">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 lev-2">
              <div class="box">
                <h2 class="box_t">туда</h2>
                <div class="row">
                  <div class="col-lg-12 lev-3">
                    <div class="form-group">
                      <label for="tuda-exit">Аэропорт вылета</label>
                      <select class="form-control" id="tuda-exit">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="tuda-trans">Аэропорт транзита</label>
                      <select class="form-control" id="tuda-trans">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="tuda-arrival">Аэропорт прибытия</label>
                      <select class="form-control" id="tuda-arrival">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
                    <div class="form-group check-box">
                      <input class="check-box_in" id="tuda-istrans" type="checkbox" checked>
                      <label class="check-box_label" for="tuda-istrans">Транзит</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 lev-2">
              <div class="box">
                <h2 class="box_t">обратно</h2>
                <div class="row">
                  <div class="col-lg-12 lev-3">
                    <div class="form-group">
                      <label for="back-exit">Аэропорт вылета</label>
                      <select class="form-control" id="back-exit">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="back-arr">Аэропорт прибытия</label>
                      <select class="form-control" id="back-arr">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 lev-3">
              <button type="submit" class="btn bt-sub">Сохранить</button>
            </div>
          </div>
        </div>
        <div class="col-lg-6 lev-1">
          <div class="box">
            <h2 class="box_t">гостиница в мекке</h2>
            <div class="row">
              <div class="col-lg-6 lev-3">
                <div class="form-group">
                  <label for="date-com1">Дата заезда</label>
                  <input type="text" class="form-control" id="date-com1">
                </div>
                <div class="form-group">
                  <label for="date-exit">Дата выезда</label>
                  <input type="text" class="form-control" id="date-exit1">
                </div>
              </div>
              <div class="col-lg-6 lev-3">
                <div class="row one-line">
                  <div class="col-lg-6 lev-3">
                    <div class="form-group">
                      <label for="hotel-name1">Название</label>
                      <input type="text" class="form-control" id="hotel-name1">
                    </div>
                  </div>
                  <div class="col-lg-6 lev-3">
                    <div class="form-group">
                      <label for="hotel-price1">Цена</label>
                      <div class="form_field-w">
                        <input type="text" class="form-control" id="hotel-price1">
                        <a class="btn btn-del" href="#">X</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row one-line">
                  <div class="col-lg-6 lev-3">
                    <div class="form-group">
                      <label for="hotel-name2">Название</label>
                      <input type="text" class="form-control" id="hotel-name2">
                    </div>
                  </div>
                  <div class="col-lg-6 lev-3">
                    <div class="form-group">
                      <label for="hotel-price2">Цена</label>
                      <div class="form_field-w">
                        <input type="text" class="form-control" id="hotel-price2">
                        <a class="btn btn-del" href="#">X</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row one-line">
                  <div class="col-lg-6 lev-3">
                    <div class="form-group">
                      <label for="hotel-name3">Название</label>
                      <input type="text" class="form-control" id="hotel-name3">
                    </div>
                  </div>
                  <div class="col-lg-6 lev-3">
                    <div class="form-group">
                      <label for="hotel-price3">Цена</label>
                      <div class="form_field-w">
                        <input type="text" class="form-control" id="hotel-price3">
                        <a class="btn btn-del" href="#">X</a>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="btn btn-dashed">Добавить</a>
              </div>
            </div>
            <hr/>

            <h2 class="box_t">гостиница в медине</h2>
            <div class="row">
              <div class="col-lg-6 lev-3">
                <div class="form-group">
                  <label for="date-com">Дата заезда</label>
                  <input type="text" class="form-control" id="date-com">
                </div>
                <div class="form-group">
                  <label for="date-exit">Дата выезда</label>
                  <input type="text" class="form-control" id="date-exit">
                </div>
              </div>
              <div class="col-lg-6 lev-3">
                <div class="row one-line">
                  <div class="col-lg-6 lev-3">
                    <div class="form-group">
                      <label for="hotel-name">Название</label>
                      <input type="text" class="form-control" id="hotel-name">
                    </div>
                  </div>
                  <div class="col-lg-6 lev-3">
                    <div class="form-group">
                      <label for="hotel-price">Цена</label>
                      <div class="form_field-w">
                        <input type="text" class="form-control" id="hotel-price">
                        <a class="btn btn-del" href="#">X</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row one-line">
                  <div class="col-lg-6 lev-3">
                    <div class="form-group">
                      <label for="hotel-name7">Название</label>
                      <input type="text" class="form-control" id="hotel-name7">
                    </div>
                  </div>
                  <div class="col-lg-6 lev-3">
                    <div class="form-group">
                      <label for="hotel-price7">Цена</label>
                      <div class="form_field-w">
                        <input type="text" class="form-control" id="hotel-price7">
                        <a class="btn btn-del" href="#">X</a>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="btn btn-dashed">Добавить</a>
              </div>
            </div>
            <hr/>

            <h2 class="box_t">прочее</h2>
            <div class="row">
              <div class="col-lg-6 lev-3">
                <h3 class="box_sub-t">Питание</h3>
                <div class="row one-line">
                  <div class="col-lg-6 lev-3">
                    <div class="form-group">
                      <label for="hotel-name5">Название</label>
                      <input type="text" class="form-control" id="hotel-name5">
                    </div>
                  </div>
                  <div class="col-lg-6 lev-3">
                    <div class="form-group">
                      <label for="hotel-price5">Цена</label>
                      <div class="form_field-w">
                        <input type="text" class="form-control" id="hotel-price5">
                        <a class="btn btn-del" href="#">X</a>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="btn btn-dashed">Добавить</a>
              </div>
              <div class="col-lg-6 lev-3">
                <h3 class="box_sub-t">Дополнительные услуги</h3>
                <div class="row one-line">
                  <div class="col-lg-6 lev-3">
                    <div class="form-group">
                      <label for="hotel-name6">Название</label>
                      <input type="text" class="form-control" id="hotel-name6">
                    </div>
                  </div>
                  <div class="col-lg-6 lev-3">
                    <div class="form-group">
                      <label for="hotel-price6">Цена</label>
                      <div class="form_field-w">
                        <input type="text" class="form-control" id="hotel-price6">
                        <a class="btn btn-del" href="#">X</a>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="btn btn-dashed">Добавить</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
</template>