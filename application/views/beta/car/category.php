<div class="col-12 col-xl-12">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title" style="    width: 50%; float: left;">Kategoriler</h5>
            <button class="btn btn-sm btn-success slide-right" style="    width: 10%; float: right;">  Yeni Kategori Ekle  </button>
        </div>
        <div class="card-body">
            <table id="datatables-basic" class="table table-striped" style="width:100%">
                <thead>
                <tr>
                    <th>Kategori Adı</th>
                    <th>İşlemler</th>

                </tr>
                </thead>
                <tbody>
                <?php foreach($category as $val){ ?>
                    <tr>
                        <td><?=$val->name?></td>
                        <td><a class="btn btn-sm btn-danger" href="<?=base_url()?>Backend/Car/deletecategory/<?=$val->id?>" onclick="return confirm('Silmek istediğinizden eminmisiniz?');"><i class="ion ion-ios-trash"></i></a> </td>
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
            <div class="card" style="height:100%;border-radius:0">
                <div class="card-header">
                    <h5 class="card-title">Kategori Ekleme Formu</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="<?=base_url()?>Backend/Car/categoryadd" enctype='multipart/form-data'>
                        <div class="form-group">
                            <label class="form-label">Kategori Adı</label>
                            <input type="text" class="form-control" name="name" placeholder="Örn : Ekonomi">
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="form-label">Kategori keywords</label>
                            <input type="text" class="form-control" name="keywords" placeholder="Max 255 Kelime reno,temiz">
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="form-label">Kategori description</label>
                            <textarea class="form-control" name="description" ></textarea>
                        </div>
                        <hr>

                        <button type="submit" class="btn btn-primary">Kaydet</button>
                        <button type="button" class="btn btn-primary slide-left">Kapat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- <span class="icon-solid icon--sm icon-solid--big-bag"></span>
<style>
.icon-solid {
    display: inline-block;
    width: 16px;
    height: 16px;
    padding-left: 8px;
    background-repeat: no-repeat;
}
  .icon-solid--big-bag {
    background: url(https://cdn2.rcstatic.com/images/site_graphics/newsite/solid--big-bag.png);
    background: url(https://cdn2.rcstatic.com/images/site_graphics/newsite/solid--big-bag.svg), none;
}
</style> -->

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