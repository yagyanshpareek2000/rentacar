<div class="card">
    <div class="card-body">
        <table class="table table-bordered">
            <tbody>
            <div class="temizle sol bottom10 right14" style="width:72px; text-align:center; margin-left:55px;">OCAK
            </div>
            <div class="sol  right14" style="width:55px; text-align:center;">ŞUBAT</div>
            <div class="sol  right14" style="width:55px; text-align:center;">MART</div>
            <div class="sol  right14" style="width:55px; text-align:center;">NİSAN</div>
            <div class="sol  right14" style="width:55px; text-align:center;">MAYIS</div>
            <div class="sol  right14" style="width:55px; text-align:center;">HAZ.</div>
            <div class="sol  right14" style="width:55px; text-align:center;">TEMMUZ</div>
            <div class="sol  right14" style="width:55px; text-align:center;">AGUS.</div>
            <div class="sol  right14" style="width:55px; text-align:center;">EYLÜL</div>
            <div class="sol  right14" style="width:55px; text-align:center;">EKİM</div>
            <div class="sol  right14" style="width:55px; text-align:center;">KASIM</div>
            <div class="sol  " style="width:55px; text-align:center;">ARALIK</div>

            <div class="sol temizle genelwidth" id="genelperiyot">

                <div class="sol">
                    <div class="temizle sol input_text" style="width:60px; margin-bottom:21px;">1-3</div>
                    <div class="temizle sol input_text" style="width:60px; margin-bottom:21px;">4-6</div>
                    <div class="temizle sol input_text" style="width:60px; margin-bottom:21px;">7-13</div>
                    <div class="temizle sol input_text" style="width:60px; margin-bottom:21px;">14-20</div>
                    <div class="temizle sol input_text" style="width:60px; margin-bottom:21px;">21-27</div>
                    <div class="temizle sol input_text" style="width:60px; margin-bottom:21px;">28-99</div>
                </div>
                <form method="post" style="     height: 1px;   width: 90%;" id="periyot1" action="javascript:;"
                      enctype="multipart/form-data" class="sol  ">
                    <input form="periyot1" type="hidden" name="periyot" id="periyot" value="1">
                    <input form="periyot1" type="hidden" name="day1" id="day1" value="1">
                    <input form="periyot1" type="hidden" name="day2" id="day2" value="3">
                    <input form="periyot1" type="hidden" name="id_rentacar" id="id_rentacar" value="<?=$id?>">
                    <div class="sol right5 form-group" style="width:55px">
                        <input form="periyot1" type="text" name="ay1" id="guntl1ay1" class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?=$this->car->get_car_periyot_price(1, 1, 3,$id,"ocak")?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px">
                        <input form="periyot1" type="text" name="ay2"
                                                                                 id="guntl1ay2" class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(1, 1, 3, $id, "subat") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot1" type="text" name="ay3"
                                                                                 id="guntl1ay3" class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(1, 1, 3, $id, "mart") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot1" type="text" name="ay4"
                                                                                 id="guntl1ay4" class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(1, 1, 3, $id, "nisan") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot1" type="text" name="ay5"
                                                                                 id="guntl1ay5" class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(1, 1, 3, $id, "mayis") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot1" type="text" name="ay6"
                                                                                 id="guntl1ay6" class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(1, 1, 3, $id, "haziran") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot1" type="text" name="ay7"
                                                                                 id="guntl1ay7" class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(1, 1, 3, $id, "temmuz") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot1" type="text" name="ay8"
                                                                                 id="guntl1ay8" class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(1, 1, 3, $id, "agustos") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot1" type="text" name="ay9"
                                                                                 id="guntl1ay9" class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(1, 1, 3, $id, "eylul") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot1" type="text" name="ay10"
                                                                                 id="guntl1ay10" class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(1, 1, 3, $id, "ekim") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot1" type="text" name="ay11"
                                                                                 id="guntl1ay11" class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(1, 1, 3, $id, "kasim") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot1" type="text" name="ay12"
                                                                                 id="guntl1ay12" class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(1, 1, 3, $id, "aralik") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px">
                        <button form="periyot1" id="periyot1submit" class="btn btn-sm btn-danger"
                                style="width:65px !important; padding-left:0px !important; text-align:center;">KAYDET
                        </button>
                    </div>
                </form>
                <form method="post" style="     height: 1px;   width: 90%;" id="periyot2" action="javascript:;"
                      enctype="multipart/form-data" class="sol  ">
                    <input form="periyot2" type="hidden" name="periyot" id="periyot" value="2">
                    <input form="periyot2" type="hidden" name="day1" id="day1" value="4">
                    <input form="periyot2" type="hidden" name="day2" id="day2" value="6">
                    <input form="periyot3" type="hidden" name="id_rentacar" id="id_rentacar" value="<?=$id?>">
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot2" type="text" name="ay1"
                                                                                 id="guntl1ay1" class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(2, 4, 6, $id, "ocak") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot2" type="text" name="ay2"
                                                                                 id="guntl1ay2" class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(2, 4, 6, $id, "subat") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot2" type="text" name="ay3"
                                                                                 id="guntl1ay3" class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(2, 4, 6, $id, "mart") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot2" type="text" name="ay4"
                                                                                 id="guntl1ay4" class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(2, 4, 6, $id, "nisan") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot2" type="text" name="ay5"
                                                                                 id="guntl1ay5" class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(2, 4, 6, $id, "mayis") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot2" type="text" name="ay6"
                                                                                 id="guntl1ay6" class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(2, 4, 6, $id, "haziran") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot2" type="text" name="ay7"
                                                                                 id="guntl1ay7" class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(2, 4, 6,$id, "temmuz") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot2" type="text" name="ay8"
                                                                                 id="guntl1ay8" class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(2, 4, 6, $id, "agustos") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot2" type="text" name="ay9"
                                                                                 id="guntl1ay9" class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(2, 4, 6, $id, "eylul") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot2" type="text" name="ay10"
                                                                                 id="guntl1ay10" class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(2, 4, 6,$id, "ekim") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot2" type="text" name="ay11"
                                                                                 id="guntl1ay11" class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(2, 4, 6, $id, "kasim") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot2" type="text" name="ay12"
                                                                                 id="guntl1ay12" class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(2, 4, 6, $id, "aralik") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px">
                        <button form="periyot2" id="periyot2submit" class="btn btn-sm btn-danger"
                                style="width:65px !important; padding-left:0px !important; text-align:center;">KAYDET
                        </button>
                    </div>
                </form>
                <form method="post" style="      height: 1px;  width: 90%;" id="periyot3" action="javascript:;"
                      enctype="multipart/form-data" class="sol  ">
                    <input form="periyot3" type="hidden" name="periyot" id="periyot" value="3">
                    <input form="periyot3" type="hidden" name="day1" id="day1" value="7">
                    <input form="periyot3" type="hidden" name="day2" id="day2" value="13">
                    <input form="periyot3" type="hidden" name="id_rentacar" id="id_rentacar" value="<?=$id?>">
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot3" type="text"
                                                                                 name="gun3ay1" id="guntl1ay1"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(3, 7, 13,$id, "ocak") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot3" type="text"
                                                                                 name="gun3ay2" id="guntl1ay2"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(3, 7, 13, $id, "subat") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot3" type="text"
                                                                                 name="gun3ay3" id="guntl1ay3"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(3, 7, 13, $id, "mart") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot3" type="text"
                                                                                 name="gun3ay4" id="guntl1ay4"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(3, 7, 13, $id, "nisan") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot3" type="text"
                                                                                 name="gun3ay5" id="guntl1ay5"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(3, 7, 13, $id, "mayis") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot3" type="text"
                                                                                 name="gun3ay6" id="guntl1ay6"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(3, 7, 13, $id, "haziran") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot3" type="text"
                                                                                 name="gun3ay7" id="guntl1ay7"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(3, 7, 13, $id, "temmuz") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot3" type="text"
                                                                                 name="gun3ay8" id="guntl1ay8"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(3, 7, 13, $id, "agustos") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot3" type="text"
                                                                                 name="gun3ay9" id="guntl1ay9"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(3, 7, 13, $id, "eylul") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot3" type="text"
                                                                                 name="gun3ay10" id="guntl1ay10"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(3, 7, 13, $id, "ekim") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot3" type="text"
                                                                                 name="gun3ay11" id="guntl1ay11"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(3, 7, 13, $id, "kasim") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot3" type="text"
                                                                                 name="gun3ay12" id="guntl1ay12"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off"
                                                                                 value="<?= $this->car->get_car_periyot_price(3, 7, 13, $id, "aralik") ?>">
                    </div>
                    <div class="sol right5 form-group" style="width:55px">
                        <button form="periyot3" id="periyot3submit" class="btn btn-sm btn-danger"
                                style="width:65px !important; padding-left:0px !important; text-align:center;">KAYDET
                        </button>
                    </div>
                </form>
                <form method="post" style="      height: 1px;  width: 90%;" id="periyot4" action="javascript:;"
                      enctype="multipart/form-data" class="sol  ">
                    <input form="periyot4" type="hidden" name="periyot" id="periyot" value="4">
                    <input form="periyot4" type="hidden" name="day1" id="day1" value="14">
                    <input form="periyot4" type="hidden" name="day2" id="day2" value="20">
                    <input form="periyot4" type="hidden" name="id_rentacar" id="id_rentacar" value="<?=$id?>">
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot4" type="text"
                                                                                 name="ay1" id="guntl1ay1"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(4,14, 20, $id, "ocak") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot4" type="text"
                                                                                 name="ay2" id="guntl1ay2"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(4,14, 20, $id, "subat") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot4" type="text"
                                                                                 name="ay3" id="guntl1ay3"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(4,14, 20, $id, "mart") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot4" type="text"
                                                                                 name="ay4" id="guntl1ay4"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(4,14, 20, $id, "nisan") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot4" type="text"
                                                                                 name="ay5" id="guntl1ay5"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(4,14, 20, $id, "mayis") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot4" type="text"
                                                                                 name="ay6" id="guntl1ay6"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(4,14, 20, $id, "haziran") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot4" type="text"
                                                                                 name="ay7" id="guntl1ay7"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(4,14, 20, $id, "temmuz") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot4" type="text"
                                                                                 name="ay8" id="guntl1ay8"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(4,14, 20, $id, "agustos") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot4" type="text"
                                                                                 name="ay9" id="guntl1ay9"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(4,14, 20, $id, "eylul") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot4" type="text"
                                                                                 name="ay10" id="guntl1ay10"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(4,14, 20, $id, "ekim") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot4" type="text"
                                                                                 name="ay11" id="guntl1ay11"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(4,14, 20, $id, "kasim") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot4" type="text"
                                                                                 name="ay12" id="guntl1ay12"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(4,14, 20, $id, "aralik") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px">
                        <button form="periyot4" id="periyot4submit" class="btn btn-sm btn-danger"
                                style="width:65px !important; padding-left:0px !important; text-align:center;">KAYDET
                        </button>
                    </div>
                </form>
                <form method="post" style="      height: 1px;  width: 90%;" id="periyot5" action="javascript:;"
                      enctype="multipart/form-data" class="sol  ">
                    <input form="periyot5" type="hidden" name="periyot" id="periyot" value="5">
                    <input form="periyot5" type="hidden" name="day1" id="day1" value="21">
                    <input form="periyot5" type="hidden" name="day2" id="day2" value="27">
                    <input form="periyot5" type="hidden" name="id_rentacar" id="id_rentacar" value="<?=$id?>">
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot5" type="text"
                                                                                 name="ay1" id="guntl1ay1"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(5, 21, 27, $id, "ocak") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot5" type="text"
                                                                                 name="ay2" id="guntl1ay2"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(5, 21, 27, $id, "subat") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot5" type="text"
                                                                                 name="ay3" id="guntl1ay3"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(5, 21, 27,  $id, "mart") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot5" type="text"
                                                                                 name="ay4" id="guntl1ay4"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(5, 21, 27,  $id, "nisan") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot5" type="text"
                                                                                 name="ay5" id="guntl1ay5"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(5, 21, 27,  $id, "mayis") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot5" type="text"
                                                                                 name="ay6" id="guntl1ay6"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(5, 21, 27,  $id, "haziran") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot5" type="text"
                                                                                 name="ay7" id="guntl1ay7"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(5, 21, 27,  $id, "temmuz") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot5" type="text"
                                                                                 name="ay8" id="guntl1ay8"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(5, 21, 27,  $id, "agustos") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot5" type="text"
                                                                                 name="ay9" id="guntl1ay9"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(5, 21, 27,  $id, "eylul") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot5" type="text"
                                                                                 name="ay10" id="guntl1ay10"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(5, 21, 27,  $id, "ekim") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot5" type="text"
                                                                                 name="ay11" id="guntl1ay11"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(5, 21, 27,  $id, "kasim") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot5" type="text"
                                                                                 name="ay12" id="guntl1ay12"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(5, 21, 27,  $id, "aralik") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px">
                        <button form="periyot5" id="periyot5submit" class="btn btn-sm btn-danger"
                                style="width:65px !important; padding-left:0px !important; text-align:center;">KAYDET
                        </button>
                    </div>
                </form>
                <form method="post" style="      height: 1px;  width: 90%;" id="periyot6" action="javascript:;"
                      enctype="multipart/form-data" class="sol  ">
                    <input form="periyot6" type="hidden" name="periyot" id="periyot" value="6">
                    <input form="periyot6" type="hidden" name="day1" id="day1" value="28">
                    <input form="periyot6" type="hidden" name="day2" id="day2" value="99">
                    <input form="periyot6" type="hidden" name="id_rentacar" id="id_rentacar" value="<?=$id?>">
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot6" type="text"
                                                                                 name="ay1" id="guntl1ay1"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(6, 28, 99, $id, "ocak") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot6" type="text"
                                                                                 name="ay2" id="guntl1ay2"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(6, 28, 99,$id, "subat") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot6" type="text"
                                                                                 name="ay3" id="guntl1ay3"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(6, 28, 99, $id, "mart") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot6" type="text"
                                                                                 name="ay4" id="guntl1ay4"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(6, 28, 99,$id, "nisan") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot6" type="text"
                                                                                 name="ay5" id="guntl1ay5"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(6, 28, 99, $id, "mayis") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot6" type="text"
                                                                                 name="ay6" id="guntl1ay6"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(6, 28, 99, $id, "haziran") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot6" type="text"
                                                                                 name="ay7" id="guntl1ay7"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(6, 28, 99, $id, "temmuz") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot6" type="text"
                                                                                 name="ay8" id="guntl1ay8"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(6, 28, 99, $id, "agustos") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot6" type="text"
                                                                                 name="ay9" id="guntl1ay9"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(6, 28, 99, $id, "eylul") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot6" type="text"
                                                                                 name="ay10" id="guntl1ay10"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(6, 28, 99,$id, "ekim") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot6" type="text"
                                                                                 name="ay11" id="guntl1ay11"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(6, 28, 99, $id, "kasim") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px"><input form="periyot6" type="text"
                                                                                 name="ay12" id="guntl1ay12"
                                                                                 class="form-control"
                                                                                 style="width:55px !important; padding-left:0px !important; text-align:center;"
                                                                                 autocomplete="off" value="<?= $this->car->get_car_periyot_price(6, 28, 99, $id, "aralik") ?>"></div>
                    <div class="sol right5 form-group" style="width:55px">
                        <button form="periyot6" id="periyot6submit" class="btn btn-sm btn-danger"
                                style="width:65px !important; padding-left:0px !important; text-align:center;">KAYDET
                        </button>
                    </div>
                </form>
            </div>
            </tbody>
        </table>
    </div>
</div>


<style>
    .form-group {
        margin-bottom: .5rem;
    }

    .genelwidth {
        width: 100%;
        min-height: 1px;
    }

    .right14 {
        margin-right: 5.5px;
    }

    .bottom10 {
        margin-bottom: 10px;
    }

    .temizle {
        clear: both;
        min-height: 1px;
    }

    .sol {
        float: left;
    }

    .bottom5 {
        margin-bottom: 12px;
    }

    .right5 {
        margin-right: 5px;
    }

    input[type=text] {
        padding: 2px 5px;
        height: 25px;
        line-height: 25px;
        border: 1px solid #ccc;
        box-shadow: 0 0 2px #ddd;
        outline: none;
        border-radius: 4px;
        margin-bottom: 5px;
        width: 336px;
    }
</style>

<!--
<div class="modal" id="periodModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document" style="    box-shadow: 1px 6px 16px 5px #064475;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Araç Fiyat Periyodu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
  <thead>
    <tr>
          <td>Ocak</td>
          <td>Şubat</td>
          <td>Mart</td>
          <td>Nisan</td>
          <td>Mayıs</td>
          <td>Haziran</td>
          <td>Temmuz</td>
          <td>Ağustos</td>
          <td>Eylül</td>
          <td>Ekim</td>
          <td>Kasım</td>
          <td>Aralık</td>
      </tr>
  </thead>
<tbody>
  <?php foreach ($period as $val) { ?>
      <tr>
          <td><input class="form-control" name="<?= $val->name ?>"></td>
          <td><input class="form-control"></td>
          <td><input class="form-control"></td>
          <td><input class="form-control"></td>
          <td><input class="form-control"></td>
          <td><input class="form-control"></td>
          <td><input class="form-control"></td>
          <td><input class="form-control"></td>
          <td><input class="form-control"></td>
          <td><input class="form-control"></td>
          <td><input class="form-control"></td>
          <td><input class="form-control"></td>
      </tr>
  <?php } ?>
</tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> -->

<script>
    $("#periyot1submit").click(function () {
        var periyot1 = $("#periyot1").serialize();
        console.log(periyot1);
        $.ajax({
            url: "<?=base_url()?>Backend/Car/periyot_add_car",
            type: "post",
            data: periyot1,
            success: function (response) {
                alert("Güncellendi");
            }
        });
    });
    $("#periyot2submit").click(function () {
        var periyot2 = $("#periyot2").serialize();
        $.ajax({
            url: "<?=base_url()?>Backend/Car/periyot_add_car",
            type: "post",
            data: periyot2,
            success: function (response) {
               alert("Güncellendi");
            }
        });
    });
    $("#periyot3submit").click(function () {
        var periyot3 = $("#periyot3").serialize();
        $.ajax({
            url: "<?=base_url()?>Backend/Car/periyot_add_car",
            type: "post",
            data: periyot3,
            success: function (response) {
                alert("Güncellendi");
            }
        });
    });
    $("#periyot4submit").click(function () {
        var periyot4 = $("#periyot4").serialize();
        $.ajax({
            url: "<?=base_url()?>Backend/Car/periyot_add_car",
            type: "post",
            data: periyot4,
            success: function (response) {
                alert("Güncellendi");
            }
        });
    });
    $("#periyot5submit").click(function () {
        var periyot5 = $("#periyot5").serialize();
        $.ajax({
            url: "<?=base_url()?>Backend/Car/periyot_add_car",
            type: "post",
            data: periyot5,
            success: function (response) {
                alert("Güncellendi");
            }
        });
    });
    $("#periyot6submit").click(function () {
        var periyot6 = $("#periyot6").serialize();
        $.ajax({
            url: "<?=base_url()?>Backend/Car/periyot_add_car",
            type: "post",
            data: periyot6,
            success: function (response) {
                alert("Güncellendi");
            }
        });
    });


</script>