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
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td>$320,800</td>
          </tr>

          </tfoot>
      </table>
    </div>
  </div>
</div>

<div class="box">
  <div class="box-inner">
    <div class="col-12 col-xl-12" style="height:100%;padding:0">
      <div class="card" style="height:100%;border-radius:0">
        <div class="card-header">
          <h5 class="card-title">Şöför Ekleme Formu</h5>
        </div>
        <div class="card-body">
          <form>
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
                <div class="col-6">
                    <label class="form-label">Marka</label>
                    <select name="make" class="form-control" id="make">
                        <option value="0">Seçiniz</option>
                        <?php foreach ($make as $val){ ?>
                        <option value="<?=$val->markaid?>"><?=$val->markaname?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-6" >
                    <label class="form-label">Model</label>
                    <select id="model" class="form-control"  name="model" style="display: none">
                        <option value="0" selected>Seçiniz</option>
                    </select>
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
                  <label class="form-label">Özellikler</label>
                  <div class="row">
                        <?php foreach ($attribute as $val){ ?>
                          <label class="custom-control custom-checkbox m-0 col-4">
                              <input type="checkbox" class="custom-control-input" value="<?=$val->id?>">
                              <span class="custom-control-label"><?=$val->name?></span>
                          </label>
                      <?php } ?></div>
               </div>
            <div class="form-group">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
              <label class="form-label">Textarea</label>
              <textarea class="form-control" placeholder="Textarea" rows="1"></textarea>
            </div>
            <div class="form-group">
              <label class="form-label w-100">File input</label>
              <input type="file">
              <small class="form-text text-muted">Example block-level help text here.</small>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-primary slide-left">Kapat</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  $(function() {
    // Datatables basic
    $('#datatables-basic').DataTable({
      responsive: true
    });
    // Datatables with Buttons
    var datatablesButtons = $('#datatables-buttons').DataTable({
      lengthChange: !1,
      buttons: ["copy", "print"],
      responsive: true
    });
    datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)")
  });
</script>

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