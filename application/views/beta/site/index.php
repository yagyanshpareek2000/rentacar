<form action="<?=base_url()?>Backend/Site/update" method="post" enctype='multipart/form-data'>
   <input type="hidden"   name="id" value="1">
    <div class="row">
  <div class="col-6 col-xl-6 pull-left">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Site Ayarları</h5>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label class="form-label">Site Title</label>
          <input type="text" class="form-control" name="title" placeholder="Site Başlığı" value="<?=$site[0]->title?>">
        </div>
        <hr>
        <div class="form-group">
          <label class="form-label">Site Keywords</label>
          <input type="text" class="form-control" name="keywords" placeholder="Site Kelimeler" value="<?=$site[0]->keywords?>">
        </div>
        <hr>
        <div class="form-group">
          <label class="form-label">Telefon</label>
          <input type="text" class="form-control" name="phone" placeholder="Telefon" value="<?=$site[0]->phone?>">
        </div>
        <hr>
        <div class="form-group">
          <label class="form-label">Telefon 1</label>
          <input type="text" class="form-control" name="phone1" placeholder="Telefon 1" value="<?=$site[0]->phone1?>">
        </div>
        <hr>
        <div class="form-group">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" name="email" placeholder="Email" value="<?=$site[0]->email?>">
        </div>
        <div class="form-group">
          <label class="form-label">Email Şifresi</label>
          <input type="text" class="form-control" name="email_password" placeholder="Email Şifresi" value="<?=$site[0]->email_password?>">
        </div>
    
        <hr>

      </div>
    </div>
  </div>
  <div class="col-6 col-xl-6">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Site Ayarları</h5>
      </div>
      <div class="card-body">
            <hr>
        <div class="form-group">
          <label class="form-label w-100">Logo</label>
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-2">
              <img src="<?=base_url()?>images/site/<?=$site[0]->logo?>" style="width:50px;height:50px;" />
             </div>
            <div class="col-md-10">
              <input type="file" name="logo" id="logo">
            </div>
            </div>
           </div>
        </div>
        <hr>
        <div class="form-group">
          <label class="form-label w-100">Favicon</label>
                 <div class="col-md-12">
            <div class="row">
              <div class="col-md-2">
              <img src="<?=base_url()?>images/site/<?=$site[0]->favicon?>" style="width:50px;height:50px;" />
             </div>
            <div class="col-md-10">
              <input type="file" name="favicon" id="favicon">
            </div>
            </div>
           </div>
        </div>
         <div class="form-group">
          <label class="form-label">Adres</label>
          <textarea  class="form-control" name="address" > <?=$site[0]->address?></textarea>
         </div>
        <div class="form-group">
          <label class="form-label">Language</label>
          <select name="language" class="form-control" >
            <option value="1" <?php if($site[0]->language == 1){echo"selected";} ?> >Türkçe</option>
            <option value="2" <?php if($site[0]->language == 2){echo"selected";} ?> >İngilizce</option>
           </select>
        </div>
        <div class="form-group">
          <label class="form-label">Para Birimi</label>
           <select name="currency" class="form-control" >
            <option value="1" <?php if($site[0]->currency == 1){echo"selected";} ?> >TL</option>
            <option value="2" <?php if($site[0]->currency == 2){echo"selected";} ?> >USD</option>
            <option value="3" <?php if($site[0]->currency == 3){echo"selected";} ?> >EUR</option>
           </select>
        </div>
     <hr>
         <div class="form-group">
          <label class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input">
              <span class="custom-control-label">Check me out</span>
            </label>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-xl-12">
    <div class="card">
      <div class="card-body">
                <div class="form-group">
          <label class="form-label">Site Description</label>
          <div class="clearfix">
             <textarea style="height:200px" class="form-control" rows="4" cols="50" id="basic-example" name="description"><?=$site[0]->description?></textarea>
           </div>
        </div>
         <button style="width:100%;" type="submit" class="btn btn-primary">KAYDET</button>
      </div>
    </div>
  </div>
</div>


</form>
  <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=oj6zyoqfb6eqi7142vqs78p5k23x3vdo28svzv867z9cd3fu"></script>
   <script>
    tinymce.init({
      selector: 'textarea#basic-example',
      height: 500,
      menubar: false,
      plugins: [
        'advlist autolink lists link image charmap print preview anchor textcolor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table paste code help wordcount'
      ],
      toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
      content_css: [
        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
        '//www.tiny.cloud/css/codepen.min.css'
      ]
    });
  </script>
 