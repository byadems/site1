<div class="col-md-10">

    <div class="card">
        <div class="card-header p-0">
            <div class="row align-items-center">
                <div class="col-md-12">
                     <?php if( $success ): ?>
          <div class="alert alert-success "><?php echo $successText; ?></div>
        <?php endif; ?>
           <?php if( $error ): ?>
          <div class="alert alert-danger "><?php echo $errorText; ?></div>
        <?php endif; ?>
                    <div class="card-header-title"><?= lang('Admin.alertsetting'); ?></div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="glycon-module-card">
                        <div class="glycon-module-image">
                            <p>API Düşük Bakiye</p>
                            <?php if ($settings["alert_apibalance"] == 1) { ?>
                                <a href="<?= base_url() ?>/<?= $settings['adminkey']; ?>/settings/alert/on/alert_apibalance"
                                   class="btn-glycon btn-glycon-success btn-glycon-module"><i class="fas fa-check"
                                                                                              aria-hidden="true"></i>
                                    <?= lang('Admin.alertactive'); ?></a>
                            <?php } else { ?>
                                <a href="<?= base_url() ?>/<?= $settings['adminkey']; ?>/settings/alert/off/alert_apibalance"
                                   class="btn-glycon btn-glycon-danger btn-glycon-module"><i class="fas fa-times"
                                                                                             aria-hidden="true"></i>
                                    <?= lang('Admin.alertpasive'); ?></a>

                            <?php } ?>
                        </div>
                        <div class="glycon-module-info">
                            <p class="glycon-module-desc"><?= lang('Admin.alertbalanceinfo'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="glycon-module-card">
                        <div class="glycon-module-image">
                            <p>Yeni Manuel Sipariş Bildirimi</p>
                            <?php if ($settings["alert_newmanuelservice"] == 1) { ?>
                                <a href="<?= base_url() ?>/<?= $settings['adminkey']; ?>/settings/alert/on/alert_newmanuelservice"
                                   class="btn-glycon btn-glycon-success btn-glycon-module"><i class="fas fa-check"
                                                                                              aria-hidden="true"></i>
                                    <?= lang('Admin.alertactive'); ?></a>
                            <?php } else { ?>
                                <a href="<?= base_url() ?>/<?= $settings['adminkey']; ?>/settings/alert/off/alert_newmanuelservice"
                                   class="btn-glycon btn-glycon-danger btn-glycon-module"><i class="fas fa-times"
                                                                                             aria-hidden="true"></i>
                                    <?= lang('Admin.alertpasive'); ?></a>

                            <?php } ?></div>
                        <div class="glycon-module-info">
                            <p class="glycon-module-desc"><?= lang('Admin.alertnewmanuelservices'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="glycon-module-card">
                        <div class="glycon-module-image">
                            <p>Yeni Ödeme Bildirimi</p>
                            <?php if ($settings["alert_newpayment"] == 1) { ?>
                                <a href="<?= base_url() ?>/<?= $settings['adminkey']; ?>/settings/alert/on/alert_newpayment"
                                   class="btn-glycon btn-glycon-success btn-glycon-module"><i class="fas fa-check"
                                                                                              aria-hidden="true"></i>
                                    <?= lang('Admin.alertactive'); ?></a>
                            <?php } else { ?>
                                <a href="<?= base_url() ?>/<?= $settings['adminkey']; ?>/settings/alert/off/alert_newpayment"
                                   class="btn-glycon btn-glycon-danger btn-glycon-module"><i class="fas fa-times"
                                                                                             aria-hidden="true"></i>
                                    <?= lang('Admin.alertpasive'); ?></a>

                            <?php } ?>
                        </div>
                        <div class="glycon-module-info">
                            <p class="glycon-module-desc"><?= lang('Admin.alertnewpayments'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="glycon-module-card">
                        <div class="glycon-module-image">
                            <p>Yeni Banka Ödeme Talebi Bildirimi</p>
                            <?php if ($settings["alert_newbankpayment"] == 1) { ?>
                                <a href="<?= base_url() ?>/<?= $settings['adminkey']; ?>/settings/alert/on/alert_newbankpayment"
                                   class="btn-glycon btn-glycon-success btn-glycon-module"><i class="fas fa-check"
                                                                                              aria-hidden="true"></i>
                                    <?= lang('Admin.alertactive'); ?></a>
                            <?php } else { ?>
                                <a href="<?= base_url() ?>/<?= $settings['adminkey']; ?>/settings/alert/off/alert_newbankpayment"
                                   class="btn-glycon btn-glycon-danger btn-glycon-module"><i class="fas fa-times"
                                                                                             aria-hidden="true"></i>
                                    <?= lang('Admin.alertpasive'); ?></a>

                            <?php } ?>
                        </div>
                        <div class="glycon-module-info">
                            <p class="glycon-module-desc"><?= lang('Admin.alertnewpaymentsinfo'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="glycon-module-card">
                        <div class="glycon-module-image">
                            <p>Yeni Başarısız Sipariş Bildirimi</p>
                            <?php if ($settings["alert_failorder"] == 1) { ?>
                                <a href="<?= base_url() ?>/<?= $settings['adminkey']; ?>/settings/alert/on/alert_failorder"
                                   class="btn-glycon btn-glycon-success btn-glycon-module"><i class="fas fa-check"
                                                                                              aria-hidden="true"></i>
                                    <?= lang('Admin.alertactive'); ?></a>
                            <?php } else { ?>
                                <a href="<?= base_url() ?>/<?= $settings['adminkey']; ?>/settings/alert/off/alert_failorder"
                                   class="btn-glycon btn-glycon-danger btn-glycon-module"><i class="fas fa-times"
                                                                                             aria-hidden="true"></i>
                                    <?= lang('Admin.alertpasive'); ?></a>

                            <?php } ?>
                        </div>
                        <div class="glycon-module-info">
                            <p class="glycon-module-desc"><?= lang('Admin.alertfailinfo'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="glycon-module-card">
                        <div class="glycon-module-image">
                            <p>Yeni Destek Bildirimi</p>
                            <?php if ($settings["alert_newticket"] == 1) { ?>
                                <a href="<?= base_url() ?>/<?= $settings['adminkey']; ?>/settings/alert/on/alert_newticket"
                                   class="btn-glycon btn-glycon-success btn-glycon-module"><i class="fas fa-check"
                                                                                              aria-hidden="true"></i>
                                    <?= lang('Admin.alertactive'); ?></a>
                            <?php } else { ?>
                                <a href="<?= base_url() ?>/<?= $settings['adminkey']; ?>/settings/alert/off/alert_newticket"
                                   class="btn-glycon btn-glycon-danger btn-glycon-module"><i class="fas fa-times"
                                                                                             aria-hidden="true"></i>
                                    <?= lang('Admin.alertpasive'); ?></a>

                            <?php } ?>
                        </div>
                        <div class="glycon-module-info">
                            <p class="glycon-module-desc"><?= lang('Admin.alertticketinfo'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="glycon-module-card">
                        <div class="glycon-module-image">
                            <p>Değişen Sağlayıcı Bilgileri</p>
                            <?php if ($settings["alert_serviceapialert"] == 1) { ?>
                                <a href="<?= base_url() ?>/<?= $settings['adminkey']; ?>/settings/alert/on/alert_serviceapialert"
                                   class="btn-glycon btn-glycon-success btn-glycon-module"><i class="fas fa-check"
                                                                                              aria-hidden="true"></i>
                                    <?= lang('Admin.alertactive'); ?></a>
                            <?php } else { ?>
                                <a href="<?= base_url() ?>/<?= $settings['adminkey']; ?>/settings/alert/off/alert_serviceapialert"
                                   class="btn-glycon btn-glycon-danger btn-glycon-module"><i class="fas fa-times"
                                                                                             aria-hidden="true"></i>
                                    <?= lang('Admin.alertpasive'); ?></a>

                            <?php } ?>
                        </div>
                        <div class="glycon-module-info">
                            <p class="glycon-module-desc"><?= lang('Admin.alertticketinfo'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="alertposttype" value="general"> 
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="control-label"><?= lang('Admin.alertmailinfo'); ?></label>
                            <input type="text" class="form-control" name="admin_mail"
                                   value="<?= $settings["admin_mail"] ?>">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label"><?= lang('Admin.alertsmsinfo'); ?></label>
                            <input type="text" class="form-control" name="admin_telephone"
                                   value="<?= $settings["admin_telephone"] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group mb-2">

                            <label class="form-label fw-bold"><?= lang('Admin.alerttype'); ?></label>
                            <select class="form-control" name="alert_type">
                                <option value="3" <?= $settings["alert_type"] == 3 ? "selected" : null; ?> ><?= lang('Admin.alertmailandsms'); ?>
                                </option>
                                <option value="2" <?= $settings["alert_type"] == 2 ? "selected" : null; ?>><?= lang('Admin.alertmail'); ?></option>
                                <option value="1" <?= $settings["alert_type"] == 1 ? "selected" : null; ?>><?= lang('Admin.alertsms'); ?></option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label fw-bold">SMS İle Şifre Yenileme</label>
                            <select class="form-control" name="resetsms">
                                <option value="2" <?= $settings["resetpass_sms"] == 2 ? "selected" : null; ?> ><?= lang('Admin.alertactived'); ?>
                                </option>
                                <option value="1" <?= $settings["resetpass_sms"] == 1 ? "selected" : null; ?>><?= lang('Admin.alertpassives'); ?>
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label fw-bold">Mail İle Şifre Yenileme</label>
                            <select class="form-control" name="resetmail">
                                <option value="2" <?= $settings["resetpass_email"] == 2 ? "selected" : null; ?> ><?= lang('Admin.alertactived'); ?>
                                </option>
                                <option value="1" <?= $settings["resetpass_email"] == 1 ? "selected" : null; ?>><?= lang('Admin.alertpassives'); ?>
                                </option>
                            </select>
                        </div>

                        <div class="col-md-12 help-block">
                            <small><?= lang('Admin.alertsmsalert'); ?></small>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-md-3 form-group">
                            <label class="form-label fw-bold"><?= lang('Admin.alertsmsproviders'); ?></label>
                            <select class="form-control" name="sms_provider">
                                <option value="bizimsms" <?= $settings["sms_provider"] == "bizimsms" ? "selected" : null; ?> >
                                    Bizimsms
                                </option>
                                <option value="netgsm" <?= $settings["sms_provider"] == "netgsm" ? "selected" : null; ?> >
                                    NetGSM
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="form-label fw-bold"><?= lang('Admin.alertsmstitle'); ?></label>
                            <input type="text" class="form-control" name="sms_title"
                                   value="<?= $settings["sms_title"] ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="form-label fw-bold"><?= lang('Admin.alertsmsusername'); ?></label>
                            <input type="text" class="form-control" name="sms_user"
                                   value="<?= $settings["sms_user"] ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="form-label fw-bold"><?= lang('Admin.alertsmspass'); ?></label>
                            <input type="text" class="form-control" name="sms_pass"
                                   value="<?= $settings["sms_pass"] ?>">
                        </div>
                        <div class="col-md-12 help-block">
                            <small><i class="fa fa-warning"></i> <code>Bizim SMS</code> <?= lang('Admin.alertsmsbizimsmsinfo'); ?></small><br>
                            <small><?= lang('Admin.alertsmstitleinfo'); ?></small>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <hr>
                    </div>
                    <div class="bg-glycon bg-gradient fw-bold rounded p-2 text-white text-center m-0 mb-2">Bildirim Ayarları</div>

                    <div class="row">
                        <div class="form-group col-md-6 mb-2">
                            <label class="form-label fw-bold">E-Posta</label>
                            <input type="text" class="form-control" name="smtp_user"
                                   value="<?= $settings["smtp_user"] ?>">
                        </div>
                        <div class="form-group col-md-6 mb-2">
                            <label class="form-label fw-bold">E-Posta Şifre</label>
                            <input type="text" class="form-control" name="smtp_pass"
                                   value="<?= $settings["smtp_pass"] ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label fw-bold">SMTP Server</label>
                            <input type="text" class="form-control" name="smtp_server"
                                   value="<?= $settings["smtp_server"] ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="form-label fw-bold">SMTP Port</label>
                            <input type="text" class="form-control" name="smtp_port"
                                   value="<?= $settings["smtp_port"] ?>">
                        </div>
                        <div class="col-md-3 form-group">
                            <label class="form-label fw-bold">SMTP Protokol</label>
                            <select class="form-control" name="smtp_protocol">
                                <option value="0" <?= $settings["smtp_protocol"] == 0 ? "selected" : null; ?> >Yok
                                </option>
                                <option value="tls" <?= $settings["smtp_protocol"] == "tls" ? "selected" : null; ?>>
                                    TLS
                                </option>
                                <option value="ssl" <?= $settings["smtp_protocol"] == "ssl" ? "selected" : null; ?>>
                                    SSL
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label class="form-label fw-bold">Mail Type</label>
                            <select class="form-control" name="smtp_type">
                                <option value="smtp" <?= $settings["smtp_type"] == "smtp" ? "selected" : null; ?> >SMTP
                                </option>
                                <option value="send_mail" <?= $settings["smtp_type"] == "send_mail" ? "selected" : null; ?>>
                                    SEND MAİL
                                </option>
                                <option value="mail" <?= $settings["smtp_type"] == "mail" ? "selected" : null; ?>>
                                    MAİL
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <hr>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn-glycon btn-glycon-success text-center"><i
                                        class="fas fa-cogs"></i> Güncelle
                            </button>
                        </div>
                    </div>
                </form>
                <div class="col-md-12">
                        <hr>
                    </div>
                <form action="" method="post">
                    <input type="hidden" name="alertposttype" value="tester"> 
                <div class="row">
                    <div class="col-md-6 form-group">
                            <label class="form-label fw-bold">Kontrol Tipi</label>
                            <select class="form-control" name="alert_type" id="alert_type">
                                <option value="mail" >Mail Test</option>
                                <option value="sms" >SMS Test</option>
                            </select>
                        </div>
                    <div class="col-md-6 form-group testshow" id="testmail" style="display:block;">
                        <label class="form-label fw-bold">Bildirim Gönderilecek Mail Adresi</label>
                        <input type="email" class="form-control" name="alertmail" placeholder="ornek-mail@glycon.com.tr">
                    </div>
                    <div class="col-md-6 form-group testshow" id="testsms" style="display:none;">
                        <label class="form-label fw-bold">Bildirim Gönderilecek Telefon Numarası</label>
                        <input type="tel" class="form-control" name="alertsms"  minlength="10" maxlength="10" placeholder="8508888875">
                    </div>
                </div>
                <div class="col-md-12">
                    <br>
                        <div class="d-grid gap-2">
                        <button type="submit" class="btn-glycon btn-glycon-success text-center"><i class="fas fa-cogs"></i> Kontrol et</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>

$(document).ready(function(){
    $('#alert_type').on('change', function(){
    	var alertvalue = $(this).val(); 
        $("div.testshow").hide();
        $("#test"+alertvalue).show();
    });
});

</script>

