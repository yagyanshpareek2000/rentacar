<div class="col-12 col-xl-12">
  <div class="card">
    <div class="card-header">
      <h5 class="card-title" style="    width: 50%; float: left;">Araçlar</h5>
      <button class="btn btn-sm btn-success slide-right" style="    width: 10%; float: right;">  Yeni Araç Ekle  </button>
    </div>
    <div class="card-body">
      <table id="datatables-basic" class="table table-striped" style="width:100%">
        <thead>
          <tr>
            <th>Kategori</th>
            <th>Marka</th>
            <th>Model</th>
            <th>Motor</th>
              <th>Durum</th>
            <th>İşlemler</th>
          </tr>
        </thead>
        <tbody> 

        <?php foreach($car as $val){ ?>
          <tr>
            <td><?=$val->category?></td>
            <td><?=$this->car->get_make_car($val->make)?></td>
            <td><?=$this->car->get_model_car($val->model)?></td>
            <td><?=$val->engine?></td>
              <td><button class="btn btn-success btn-sm"><i class="fa fa-play"></i></button></td>
            <td>
                <buttom type="button"  data-toggle="modal" data-backdrop="false" data-target="#periodModal"  class="btn btn-success btn-sm"  data-placement="bottom" data-original-title="Period Ekle"><i class="fa fa-bug"></i></button>
                <button type="button"  class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="bottom" data-original-title="Ekstra Ekle"><i class="fa fa-plus-circle"></i></button>
                <button type="button"  class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" data-original-title="Düzenle"><i class="fa fa-edit"></i></button>
                <button type="button"  class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" data-original-title="Sil"><i class="fa fa-trash"></i></button>
            </td>
           </tr>
         <?php } ?>
          </tfoot>
      </table>
    </div>
  </div>
</div>

<div class="box">
  <div class="box-inner">
    <div class="col-12 col-xl-12" style="height:100%;padding:0">
      <div class="card" style="height:100%;border-radius:0;overflow: overlay;">
        <div class="card-header">
          <h5 class="card-title">Araç Ekleme Formu</h5>
        </div>
        <div class="card-body">
            <form method="post" action="<?=base_url()?>Backend/Car/add" enctype='multipart/form-data'>
            <div class="form-group">
                  <label class="form-label">Kategori</label>
                  <select name="category" class="form-control" id="category">
                      <option value="0">Seçiniz</option>
                      <?php foreach ($category as $val){ ?>
                          <option value="<?=$val->id?>"><?=$val->name?></option>
                      <?php } ?>
                  </select>
              </div>
            <div class="form-group">
                <div class="row">
                <div class="col-4">
                    <label class="form-label">Marka</label>
                    <select name="make" class="form-control" id="make">
                        <option value="0">Seçiniz</option>
                        <?php foreach ($make as $val){ ?>
                        <option value="<?=$val->markaid?>"><?=$val->markaname?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-4" >
                    <label class="form-label">Model</label>
                    <select id="model" class="form-control"  name="model" style="display: none">
                        <option value="0" selected>Seçiniz</option>
                    </select>
                 </div>
                    <div class="col-4" >
                        <label class="form-label">Motor</label>
                        <input class="form-control" name="engine" placeholder="Örn : 1800">
                    </div>
                </div>
            </div>
              <div class="form-group">
                  <div class="row">
                      <div class="col-6">
                          <label class="form-label">Yakıt</label>
                          <select name="fuel" class="form-control" id="fuel">
                              <?php foreach ($fuel as $val){ ?>
                                  <option value="<?=$val->id?>"><?=$val->fuel?></option>
                              <?php } ?>
                           </select>
                      </div>
                      <div class="col-6" >
                          <label class="form-label">Vites</label>
                          <select id="gear" class="form-control"  name="gear">
                              <?php foreach ($gear as $val){ ?>
                                  <option value="<?=$val->id?>"><?=$val->gear?></option>
                              <?php } ?>
                          </select>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="row">
                      <div class="col-6">
                          <label class="form-label">Kasa</label>
                          <select name="case" class="form-control" id="case">
                              <?php foreach ($case as $val){ ?>
                                  <option value="<?=$val->id?>"><?=$val->case?></option>
                              <?php } ?>
                          </select>
                      </div>
                      <div class="col-6" >
                          <label class="form-label">Sınıf</label>
                          <select id="class" class="form-control"  name="class">
                              <?php foreach ($class as $val){ ?>
                                  <option value="<?=$val->id?>"><?=$val->class?></option>
                              <?php } ?>
                           </select>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="row">
                      <div class="col-6">
                          <label class="form-label">Ehliyet yılı</label>
                          <select name="driverlicanceage" class="form-control" id="driverlicanceage">
                               <?php for($i=1; $i < 10; $i++){ ?>
                                  <option value="<?=$i?>"><?=$i?></option>
                              <?php } ?>
                          </select>
                      </div>
                      <div class="col-6" >
                          <label class="form-label">Sürücü Yaşı</label>
                          <select name="age" class="form-control" id="age">
                               <?php for($i=20; $i < 31; $i++){ ?>
                                  <option value="<?=$i?>"><?=$i?></option>
                              <?php } ?>
                          </select>
                      </div>
                  </div>
              </div>
<!--              <div class="form-group">-->
<!--                  <label class="form-label">Özellikler</label>-->
<!--                  <div class="row">-->
<!--                        --><?php //foreach ($attribute as $val){ ?>
<!--                          <label class="custom-control custom-checkbox m-0 col-4">-->
<!--                              <input type="checkbox" class="custom-control-input"  name="attribute[]" value="--><?//=$val->id?><!--">-->
<!--                              <span class="custom-control-label">--><?//=$val->name?><!--</span>-->
<!--                          </label>-->
<!--                      --><?php //} ?><!--</div>-->
<!--               </div>-->
            <div class="form-group">
              <label class="form-label">Adet</label>
              <input type="text" class="form-control" placeholder="Adet">
            </div>
           <div class="form-group">
              <label class="form-label">Araç Yaşı</label>
              <input type="text" class="form-control" name="carage" placeholder="Adet">
            </div>
            <div class="form-group">
              <label class="form-label w-100">Resim</label>
              <input type="file" name="file">
             </div>
                <div class="form-group">
                    <label class="form-label">Açıklama</label>
                    <textarea class="form-control" name="description"></textarea>
                </div>
            <button type="submit" class="btn btn-primary">Kaydet</button>
            <button type="button" class="btn btn-primary slide-left">Kapat</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
    $("#make").change(function () {
       var id = $ (this).val();
       if(id == 0)
       {
           alert("Lütfen Seçim Yapınız");
       }else{
           $("select#model").html("");
           $.ajax({
               url: '<?=base_url()?>Backend/Car/get_model/'+id+'',
               dataType: 'text',
               type: 'post',
               contentType: 'application/x-www-form-urlencoded',

               success: function( data, textStatus, jQxhr ){
                   $("select#model").show();

                    $.each(JSON.parse(data), function(i, item) {
                        $("select#model").append('<option value=' + item.modelid + '>' + item.modelname + '</option>');
                    });
               }

           });
        }
    });

</script>
 
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
 
<tbody>
 

					<div class="temizle sol bottom10 right14" style="width:72px; text-align:center; margin-left:55px;">OCAK</div>
					<div class="sol  right14" style="width:72px; text-align:center;">ŞUBAT</div>
					<div class="sol  right14" style="width:72px; text-align:center;">MART</div>
					<div class="sol  right14" style="width:72px; text-align:center;">NİSAN</div>
					<div class="sol  right14" style="width:72px; text-align:center;">MAYIS</div>
					<div class="sol  right14" style="width:72px; text-align:center;">HAZİRAN</div>
					<div class="sol  right14" style="width:72px; text-align:center;">TEMMUZ</div>
					<div class="sol  right14" style="width:72px; text-align:center;">AĞUSTOS</div>
					<div class="sol  right14" style="width:72px; text-align:center;">EYLÜL</div>
					<div class="sol  right14" style="width:72px; text-align:center;">EKİM</div>
					<div class="sol  right14" style="width:72px; text-align:center;">KASIM</div>
					<div class="sol  " style="width:72px; text-align:center;">ARALIK</div>

					<div class="sol temizle genelwidth">

						<div class="sol">
							<div class="temizle sol input_text" style="width:60px; margin-bottom:21px;">1-3</div>
							<div class="temizle sol input_text" style="width:60px; margin-bottom:21px;">4-6</div>
							<div class="temizle sol input_text" style="width:60px; margin-bottom:21px;">7-13</div>
							<div class="temizle sol input_text" style="width:60px; margin-bottom:21px;">14-20</div>
							<div class="temizle sol input_text" style="width:60px; margin-bottom:21px;">21-27</div>
							<div class="temizle sol input_text" style="width:60px; margin-bottom:21px;">28-99</div>
						</div>
												<div class="sol bottom5">
														<div class="sol right5" style="width:61px"><input type="text" name="gun1ay1" id="guntl1ay1" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun1ay2" id="guntl1ay2" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun1ay3" id="guntl1ay3" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun1ay4" id="guntl1ay4" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun1ay5" id="guntl1ay5" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun1ay6" id="guntl1ay6" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun1ay7" id="guntl1ay7" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun1ay8" id="guntl1ay8" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun1ay9" id="guntl1ay9" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun1ay10" id="guntl1ay10" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun1ay11" id="guntl1ay11" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun1ay12" id="guntl1ay12" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
													</div>
												<div class="sol bottom5">
														<div class="sol right5" style="width:61px"><input type="text" name="gun2ay1" id="guntl2ay1" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun2ay2" id="guntl2ay2" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun2ay3" id="guntl2ay3" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun2ay4" id="guntl2ay4" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun2ay5" id="guntl2ay5" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun2ay6" id="guntl2ay6" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun2ay7" id="guntl2ay7" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun2ay8" id="guntl2ay8" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun2ay9" id="guntl2ay9" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun2ay10" id="guntl2ay10" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun2ay11" id="guntl2ay11" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun2ay12" id="guntl2ay12" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
													</div>
												<div class="sol bottom5">
														<div class="sol right5" style="width:61px"><input type="text" name="gun3ay1" id="guntl3ay1" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun3ay2" id="guntl3ay2" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun3ay3" id="guntl3ay3" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun3ay4" id="guntl3ay4" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun3ay5" id="guntl3ay5" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun3ay6" id="guntl3ay6" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun3ay7" id="guntl3ay7" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun3ay8" id="guntl3ay8" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun3ay9" id="guntl3ay9" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun3ay10" id="guntl3ay10" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun3ay11" id="guntl3ay11" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun3ay12" id="guntl3ay12" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
													</div>
												<div class="sol bottom5">
														<div class="sol right5" style="width:61px"><input type="text" name="gun4ay1" id="guntl4ay1" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun4ay2" id="guntl4ay2" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun4ay3" id="guntl4ay3" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun4ay4" id="guntl4ay4" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun4ay5" id="guntl4ay5" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun4ay6" id="guntl4ay6" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun4ay7" id="guntl4ay7" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun4ay8" id="guntl4ay8" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun4ay9" id="guntl4ay9" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun4ay10" id="guntl4ay10" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun4ay11" id="guntl4ay11" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun4ay12" id="guntl4ay12" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
													</div>
												<div class="sol bottom5">
														<div class="sol right5" style="width:61px"><input type="text" name="gun5ay1" id="guntl5ay1" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun5ay2" id="guntl5ay2" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun5ay3" id="guntl5ay3" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun5ay4" id="guntl5ay4" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun5ay5" id="guntl5ay5" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun5ay6" id="guntl5ay6" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun5ay7" id="guntl5ay7" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun5ay8" id="guntl5ay8" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun5ay9" id="guntl5ay9" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun5ay10" id="guntl5ay10" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun5ay11" id="guntl5ay11" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun5ay12" id="guntl5ay12" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
													</div>
												<div class="sol bottom5">
														<div class="sol right5" style="width:61px"><input type="text" name="gun6ay1" id="guntl6ay1" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun6ay2" id="guntl6ay2" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun6ay3" id="guntl6ay3" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun6ay4" id="guntl6ay4" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun6ay5" id="guntl6ay5" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun6ay6" id="guntl6ay6" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun6ay7" id="guntl6ay7" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun6ay8" id="guntl6ay8" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun6ay9" id="guntl6ay9" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun6ay10" id="guntl6ay10" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun6ay11" id="guntl6ay11" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
														<div class="sol right5" style="width:61px"><input type="text" name="gun6ay12" id="guntl6ay12" class="validate[required,maxSize[3],custom[integer],min[20]]" style="width:65px !important; padding-left:0px !important; text-align:center;" autocomplete="off"></div>
													</div>
											</div>
</tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<style>
.genelwidth {
    width: 100%;
    min-height: 1px;
}
  .right14 {
    margin-right:-5px;
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
  <?php foreach($period as $val){ ?>
      <tr>
          <td><input class="form-control" name="<?=$val->name?>"></td>
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