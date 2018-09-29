<template>
  <div>
    <div id="main-block" class="main-block">
      <div id="main-scroll" class="main-block_inner">
        <div class="subheader_cnt subheader-mob">
          <!--title-->
          <h1 class="subheader_t">Расписание рейсов</h1>
        </div>
        <!--content-->
        <form class="content form shedule" role="form">
          <div class="row">
            <div class="col-lg-5 lev-1">
              <p class="shedule_ctrl">
                <a class="btn btn-white" href="#"><i class="shedule_ico ico-airplane"></i>Добавить рейс</a>
              </p>
              <div class="box">
                <h2 class="box_t">туда</h2>
                <div class="table-bl_w">
                  <table class="shedule_flight table-bl table table-striped">
                    <thead>
                    <tr>
                      <th class="shedule_flight_num">№</th>
                      <th class="shedule_flight_numfl">№ Рейса</th>
                      <th class="shedule_flight_route">Маршрут</th>
                      <th class="shedule_flight_date">Дата</th>
                      <th class="shedule_flight_time">Время</th>
                      <th class="shedule_flight_amount">Кол.пр</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td class="to-left">LKJ-86</td>
                      <td>HBH-LLJ</td>
                      <td>02.05.2015</td>
                      <td>11:45</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td class="to-left">JHU 985</td>
                      <td>BH-JKKN</td>
                      <td>02.05.2015</td>
                      <td>12:48</td>
                      <td>150</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td class="to-left">JHU 985</td>
                      <td>BH-JKKN</td>
                      <td>02.05.2015</td>
                      <td>19:20</td>
                      <td>200</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td class="to-left">LKJ-86</td>
                      <td>BH-JKKN</td>
                      <td>02.05.2015</td>
                      <td>23:48</td>
                      <td>147</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td class="to-left">LKJ-86</td>
                      <td>BH-JKKN</td>
                      <td>02.05.2015</td>
                      <td>23:48</td>
                      <td>186</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td class="to-left">JHU 985</td>
                      <td>HBH-LLJ</td>
                      <td>02.05.2015</td>
                      <td>23:48</td>
                      <td>110</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="box">
                <h2 class="box_t">обратно</h2>
                <div class="table-bl_w">
                  <table class="table-bl table table-striped">
                    <thead>
                    <tr>
                      <th class="shedule_flight_num">№</th>
                      <th class="shedule_flight_numfl">№ Рейса</th>
                      <th class="shedule_flight_route">Маршрут</th>
                      <th class="shedule_flight_date">Дата</th>
                      <th class="shedule_flight_time">Время</th>
                      <th class="shedule_flight_amount">Кол.пр</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td class="to-left">LKJ-86</td>
                      <td>HBH-LLJ</td>
                      <td>02.05.2015</td>
                      <td>11:45</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td class="to-left">JHU 985</td>
                      <td>BH-JKKN</td>
                      <td>02.05.2015</td>
                      <td>12:48</td>
                      <td>150</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td class="to-left">JHU 985</td>
                      <td>BH-JKKN</td>
                      <td>02.05.2015</td>
                      <td>19:20</td>
                      <td>200</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td class="to-left">LKJ-86</td>
                      <td>BH-JKKN</td>
                      <td>02.05.2015</td>
                      <td>23:48</td>
                      <td>147</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td class="to-left">LKJ-86</td>
                      <td>BH-JKKN</td>
                      <td>02.05.2015</td>
                      <td>23:48</td>
                      <td>186</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td class="to-left">JHU 985</td>
                      <td>HBH-LLJ</td>
                      <td>02.05.2015</td>
                      <td>23:48</td>
                      <td>110</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-7 lev-1">
              <p class="shedule_ctrl">
                <a class="btn btn-white" href="#"><i class="shedule_ico ico-add"></i>добавить блок</a>
              </p>
              <div class="box">
                <h2 class="box_t">блок №1</h2>
                <div class="table-bl_w">
                  <table class="table-bl table table-striped">
                    <thead>
                    <tr>
                      <th class="shedule_block_num">№</th>
                      <th class="shedule_block_name">Название</th>
                      <th class="shedule_block_amount">Кол. Пал</th>
                      <th class="shedule_block_get">Сдали</th>
                      <th class="shedule_block_rem">Осталось</th>
                      <th class="shedule_block_comment">Комментарий</th>
                      <th class="shedule_block_change">Изменить</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td class="to-left">ЕХЦ</td>
                      <td>200</td>
                      <td>2</td>
                      <td>198</td>
                      <td></td>
                      <td>
                        <a class="table-bl_ctrl" href="#"><i class="ico-underline"></i></a>
                        <a class="table-bl_ctrl" href="#"><i class="ico-clear"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td class="to-left">ООО "Марва-тур"</td>
                      <td>200</td>
                      <td>5</td>
                      <td>198</td>
                      <td></td>
                      <td>
                        <a class="table-bl_ctrl" href="#"><i class="ico-underline"></i></a>
                        <a class="table-bl_ctrl" href="#"><i class="ico-clear"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td class="to-left">ООО "Равза-тур"</td>
                      <td>100</td>
                      <td>3</td>
                      <td>200</td>
                      <td></td>
                      <td>
                        <a class="table-bl_ctrl" href="#"><i class="ico-underline"></i></a>
                        <a class="table-bl_ctrl" href="#"><i class="ico-clear"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td class="to-left">ООО "Караван-тревел"</td>
                      <td>100</td>
                      <td>3</td>
                      <td>200</td>
                      <td></td>
                      <td>
                        <a class="table-bl_ctrl" href="#"><i class="ico-underline"></i></a>
                        <a class="table-bl_ctrl" href="#"><i class="ico-clear"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td class="to-left">Дополнительно</td>
                      <td>100</td>
                      <td>3</td>
                      <td>200</td>
                      <td></td>
                      <td>
                        <a class="table-bl_ctrl" href="#"><i class="ico-underline"></i></a>
                        <a class="table-bl_ctrl" href="#"><i class="ico-clear"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td class="to-left">ООО "Караван-тревел"</td>
                      <td>100</td>
                      <td>3</td>
                      <td>200</td>
                      <td></td>
                      <td>
                        <a class="table-bl_ctrl" href="#"><i class="ico-underline"></i></a>
                        <a class="table-bl_ctrl" href="#"><i class="ico-clear"></i></a>
                      </td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                      <td></td>
                      <td class="to-left">Итого:</td>
                      <td>1200</td>
                      <td>10</td>
                      <td>1190</td>
                      <td></td>
                      <td></td>
                    </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>