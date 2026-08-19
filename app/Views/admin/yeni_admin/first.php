<?= view('admin/yeni_admin/static/header'); ?>
<form action="" method="post">
    <div class="container-fluid px-sm-5">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-info" style="text-align: center;">
                    Hesabınıza ilk kez admin girişi yapıyorsunuz Lütfen tüm bilgileri kendinize göre değiştiriniz.
                </div>
                <?php if($error){ ?>
                <div class="alert alert-danger" style="text-align: center;">
                    <?php echo $errorText; ?>
                </div>
                <?php } ?>
                <div class="row">
                    <input type="hidden" name="firstsetup" value="firstsetups">
                    <div class="col-6"><strong>Ad</strong><input type="text" class="form-control" name="firstad" value="<?=$user['first_name']?>"></div>
                    <div class="col-6"><strong>Soyad</strong><input type="text" class="form-control" name="firstsoyad" value="<?=$user['last_name']?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-12"><strong>Kullanıcı Adı</strong><input type="text" class="form-control" name="firstusername" value="<?=$user['username']?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-6"><strong>E-Posta Adresi</strong><input type="email" class="form-control" name="firstmail" value="<?=$user['email']?>"></div>
                    <div class="col-6"><strong>Telefon Numarası</strong><input type="text" class="form-control" name="firsttel" value="<?=$user['telephone']?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-6"><strong>Yeni Şifre</strong><input type="text" class="form-control" placeholder="Yeni Şifrenizi Giriniz" name="firstpass"></div>
                    <div class="col-6"><strong>Tekrar Yeni Şifre</strong><input type="text" class="form-control" placeholder="Tekrar Yeni Şifrenizi Giriniz" name="firstrepass"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <strong>Admin Linki (Kesinlikle kopyalayınız aksi takdirde giriş yapamazsınız)</strong>
                        <input type="text" class="form-control" value="<?=$settings['adminkey']?>" name="admin_url"></div>
                    <div class="col-6">
                        <strong>Admin Dili</strong>
                        <select class="form-select" name="admin_lang">
                            <option value="tr" selected="">Türkçe</option>
                            <option value="en">İngilizce(Tam Entegreli Değildir Seçmeyiniz)</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12"><button class="btn btn-primary" style="width: 100%;">Güncelle</button></div>
                </div>
            </div>
        </div>
    </div>
</form>
<?= view('admin/yeni_admin/static/footer'); ?>