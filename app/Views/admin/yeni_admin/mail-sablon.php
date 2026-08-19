<?= view('admin/yeni_admin/static/header'); ?>
<style>
    .note-editor .dropdown-toggle::after {
	display: none;
}
</style>


<div class="container-fluid px-sm-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card integration-p">
                <div class="card-header">
                    Mail Şablon Ayarı
                    <small>
                        Mail içeriği otomatik çekilir. Otomatik çekilcek yeri belirtmek için {mail_icerik_cek} kısaltmasını kullanın
                    </small>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <textarea id="editor" name="sablon"><?= $settings['mail_sablon'] ?></textarea>

                        <div class="edit-theme-body-buttons text-right">
                            <button class="btn btn-primary click">Güncelle</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<?= view('admin/yeni_admin/static/footer'); ?>