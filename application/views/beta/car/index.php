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
                <a class="btn btn-success btn-sm"  href="<?=base_url()?>Backend/Car/periyot_modal/<?=$val->id?>"><i class="fa fa-bug"></i></button>
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
