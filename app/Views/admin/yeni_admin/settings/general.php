<div class="col-md-10">
    <?php if ($success) : ?>
        <div class="alert alert-success "><?php echo $successText; ?></div>
    <?php endif; ?>
    <?php if ($error) : ?>
        <div class="alert alert-danger "><?php echo $errorText; ?></div>
    <?php endif; ?>
    <div class="card">
        <div class="card-header">
            Genel Ayarlar
        </div>

        <div class="card-body settings-form">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-6">
                        <?php if ($settings['site_logo'] != "") : ?>
                            <img style="width:200px;height:80px;" src="<?= base_url('assets/uploads/sites/' . $settings['site_logo']) ?>" alt="">
                            <br>
                            <div class="setting-block__image-remove">
                                <a href="" data-bs-toggle="modal" data-bs-target="#confirmChange" data-href="<?= base_url($settings['adminkey']."/settings/general/delete-logo") ?>"><span class="fa fa-remove"></span></a>
                            </div>
                        <?php endif; ?>
                        <strong>Logo</strong><span> (200x80 önerilir)</span>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="logo" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Yükle</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <?php if ($settings['favicon'] != "") : ?>
                            <img style="width:100px;height:80px;" src="<?= base_url('assets/uploads/sites/' . $settings['favicon']) ?>" alt="">
                            <br>
                            <div class="setting-block__image-remove">
                                <a href="" data-bs-toggle="modal" data-bs-target="#confirmChange" data-href="<?= base_url($settings['adminkey']."/settings/general/delete-favicon") ?>"><span class="fa fa-remove"></span></a>
                            </div>
                        <?php endif; ?>
                        <strong>Favicon</strong><span> (100x100 önerilir)</span>
                        <div class="input-group mb-3">
                            <input type="file" name="favicon" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Yükle</label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <strong>Panel Adı</strong>
                        <input type="text" class="form-control" name="name" value="<?= $settings["site_name"] ?>">
                    </div>
                    <div class="col-6">
                        <strong>Para Birimi</strong>
                        <select class="form-select" name="site_currency">
                            <option value="USD" <?php if ($settings["site_currency"] == "USD") : echo "selected";
                                                endif; ?>>
                                United States Dollars (USD)
                            </option>
                            <option value="TRY" <?php if ($settings["site_currency"] == "TRY") : echo "selected";
                                                endif; ?>>
                                Türk Lirası (TRY)
                            </option>
                            <option value="EUR" <?php if ($settings["site_currency"] == "EUR") : echo "selected";
                                                endif; ?>>
                                Euro (EUR)
                            </option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <strong>Zaman Dilimi</strong>
                        <select class="form-select" name="timezonedefault">
                            <option <?= $settings["site_default_timezone"] == "Africa/Abidjan" ? "selected" : null; ?> value="Africa/Abidjan">Africa/Abidjan</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Accra" ? "selected" : null; ?> value="Africa/Accra">Africa/Accra</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Addis_Ababa" ? "selected" : null; ?> value="Africa/Addis_Ababa">Africa/Addis_Ababa</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Algiers" ? "selected" : null; ?> value="Africa/Algiers">Africa/Algiers</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Asmara" ? "selected" : null; ?> value="Africa/Asmara">Africa/Asmara</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Asmera" ? "selected" : null; ?> value="Africa/Asmera">Africa/Asmera</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Bamako" ? "selected" : null; ?> value="Africa/Bamako">Africa/Bamako</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Bangui" ? "selected" : null; ?> value="Africa/Bangui">Africa/Bangui</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Banjul" ? "selected" : null; ?> value="Africa/Banjul">Africa/Banjul</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Bissau" ? "selected" : null; ?> value="Africa/Bissau">Africa/Bissau</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Blantyre" ? "selected" : null; ?> value="Africa/Blantyre">Africa/Blantyre</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Brazzaville" ? "selected" : null; ?> value="Africa/Brazzaville">Africa/Brazzaville</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Bujumbura" ? "selected" : null; ?> value="Africa/Bujumbura">Africa/Bujumbura</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Cairo" ? "selected" : null; ?> value="Africa/Cairo">Africa/Cairo</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Casablanca" ? "selected" : null; ?> value="Africa/Casablanca">Africa/Casablanca</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Ceuta" ? "selected" : null; ?> value="Africa/Ceuta">Africa/Ceuta</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Conakry" ? "selected" : null; ?> value="Africa/Conakry">Africa/Conakry</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Dakar" ? "selected" : null; ?> value="Africa/Dakar">Africa/Dakar</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Dar_es_Salaam" ? "selected" : null; ?> value="Africa/Dar_es_Salaam">Africa/Dar_es_Salaam</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Djibouti" ? "selected" : null; ?> value="Africa/Djibouti">Africa/Djibouti</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Douala" ? "selected" : null; ?> value="Africa/Douala">Africa/Douala</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/El_Aaiun" ? "selected" : null; ?> value="Africa/El_Aaiun">Africa/El_Aaiun</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Freetown" ? "selected" : null; ?> value="Africa/Freetown">Africa/Freetown</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Gaborone" ? "selected" : null; ?> value="Africa/Gaborone">Africa/Gaborone</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Harare" ? "selected" : null; ?> value="Africa/Harare">Africa/Harare</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Johannesburg" ? "selected" : null; ?> value="Africa/Johannesburg">Africa/Johannesburg</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Juba" ? "selected" : null; ?> value="Africa/Juba">Africa/Juba</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Kampala" ? "selected" : null; ?> value="Africa/Kampala">Africa/Kampala</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Khartoum" ? "selected" : null; ?> value="Africa/Khartoum">Africa/Khartoum</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Kigali" ? "selected" : null; ?> value="Africa/Kigali">Africa/Kigali</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Kinshasa" ? "selected" : null; ?> value="Africa/Kinshasa">Africa/Kinshasa</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Lagos" ? "selected" : null; ?> value="Africa/Lagos">Africa/Lagos</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Libreville" ? "selected" : null; ?> value="Africa/Libreville">Africa/Libreville</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Lome" ? "selected" : null; ?> value="Africa/Lome">Africa/Lome</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Luanda" ? "selected" : null; ?> value="Africa/Luanda">Africa/Luanda</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Lubumbashi" ? "selected" : null; ?> value="Africa/Lubumbashi">Africa/Lubumbashi</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Lusaka" ? "selected" : null; ?> value="Africa/Lusaka">Africa/Lusaka</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Malabo" ? "selected" : null; ?> value="Africa/Malabo">Africa/Malabo</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Maputo" ? "selected" : null; ?> value="Africa/Maputo">Africa/Maputo</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Maseru" ? "selected" : null; ?> value="Africa/Maseru">Africa/Maseru</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Mbabane" ? "selected" : null; ?> value="Africa/Mbabane">Africa/Mbabane</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Mogadishu" ? "selected" : null; ?> value="Africa/Mogadishu">Africa/Mogadishu</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Monrovia" ? "selected" : null; ?> value="Africa/Monrovia">Africa/Monrovia</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Nairobi" ? "selected" : null; ?> value="Africa/Nairobi">Africa/Nairobi</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Ndjamena" ? "selected" : null; ?> value="Africa/Ndjamena">Africa/Ndjamena</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Niamey" ? "selected" : null; ?> value="Africa/Niamey">Africa/Niamey</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Nouakchott" ? "selected" : null; ?> value="Africa/Nouakchott">Africa/Nouakchott</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Ouagadougou" ? "selected" : null; ?> value="Africa/Ouagadougou">Africa/Ouagadougou</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Porto" ? "selected" : null; ?> value="Africa/Porto-Novo">Africa/Porto-Novo</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Sao_Tome" ? "selected" : null; ?> value="Africa/Sao_Tome">Africa/Sao_Tome</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Timbuktu" ? "selected" : null; ?> value="Africa/Timbuktu">Africa/Timbuktu</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Tripoli" ? "selected" : null; ?> value="Africa/Tripoli">Africa/Tripoli</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Tunis" ? "selected" : null; ?> value="Africa/Tunis">Africa/Tunis</option>
                            <option <?= $settings["site_default_timezone"] == "Africa/Windhoek" ? "selected" : null; ?> value="Africa/Windhoek">Africa/Windhoek</option>
                            <option <?= $settings["site_default_timezone"] == "America/Adak" ? "selected" : null; ?> value="America/Adak">America/Adak</option>
                            <option <?= $settings["site_default_timezone"] == "America/Anchorage" ? "selected" : null; ?> value="America/Anchorage">America/Anchorage</option>
                            <option <?= $settings["site_default_timezone"] == "America/Anguilla" ? "selected" : null; ?> value="America/Anguilla">America/Anguilla</option>
                            <option <?= $settings["site_default_timezone"] == "America/Antigua" ? "selected" : null; ?> value="America/Antigua">America/Antigua</option>
                            <option <?= $settings["site_default_timezone"] == "America/Araguaina" ? "selected" : null; ?> value="America/Araguaina">America/Araguaina</option>
                            <option <?= $settings["site_default_timezone"] == "America/Argentina/Buenos_Aires" ? "selected" : null; ?> value="America/Argentina/Buenos_Aires">America/Argentina/Buenos_Aires</option>
                            <option <?= $settings["site_default_timezone"] == "America/Argentina/Catamarca" ? "selected" : null; ?> value="America/Argentina/Catamarca">America/Argentina/Catamarca</option>
                            <option <?= $settings["site_default_timezone"] == "America/Argentina/ComodRivadavia" ? "selected" : null; ?> value="America/Argentina/ComodRivadavia">America/Argentina/ComodRivadavia</option>
                            <option <?= $settings["site_default_timezone"] == "America/Argentina/Cordoba" ? "selected" : null; ?> value="America/Argentina/Cordoba">America/Argentina/Cordoba</option>
                            <option <?= $settings["site_default_timezone"] == "America/Argentina/Jujuy" ? "selected" : null; ?> value="America/Argentina/Jujuy">America/Argentina/Jujuy</option>
                            <option <?= $settings["site_default_timezone"] == "America/Argentina/La_Rioja" ? "selected" : null; ?> value="America/Argentina/La_Rioja">America/Argentina/La_Rioja</option>
                            <option <?= $settings["site_default_timezone"] == "America/Argentina/Mendoza" ? "selected" : null; ?> value="America/Argentina/Mendoza">America/Argentina/Mendoza</option>
                            <option <?= $settings["site_default_timezone"] == "America/Argentina/Rio_Gallegos" ? "selected" : null; ?> value="America/Argentina/Rio_Gallegos">America/Argentina/Rio_Gallegos</option>
                            <option <?= $settings["site_default_timezone"] == "America/Argentina/Salta" ? "selected" : null; ?> value="America/Argentina/Salta">America/Argentina/Salta</option>
                            <option <?= $settings["site_default_timezone"] == "America/Argentina/San_Juan" ? "selected" : null; ?> value="America/Argentina/San_Juan">America/Argentina/San_Juan</option>
                            <option <?= $settings["site_default_timezone"] == "America/Argentina/San_Luis" ? "selected" : null; ?> value="America/Argentina/San_Luis">America/Argentina/San_Luis</option>
                            <option <?= $settings["site_default_timezone"] == "America/Argentina/Tucuman" ? "selected" : null; ?> value="America/Argentina/Tucuman">America/Argentina/Tucuman</option>
                            <option <?= $settings["site_default_timezone"] == "America/Argentina/Ushuaia" ? "selected" : null; ?> value="America/Argentina/Ushuaia">America/Argentina/Ushuaia</option>
                            <option <?= $settings["site_default_timezone"] == "America/Aruba" ? "selected" : null; ?> value="America/Aruba">America/Aruba</option>
                            <option <?= $settings["site_default_timezone"] == "America/Asuncion" ? "selected" : null; ?> value="America/Asuncion">America/Asuncion</option>
                            <option <?= $settings["site_default_timezone"] == "America/Atikokan" ? "selected" : null; ?> value="America/Atikokan">America/Atikokan</option>
                            <option <?= $settings["site_default_timezone"] == "America/Atka" ? "selected" : null; ?> value="America/Atka">America/Atka</option>
                            <option <?= $settings["site_default_timezone"] == "America/Bahia" ? "selected" : null; ?> value="America/Bahia">America/Bahia</option>
                            <option <?= $settings["site_default_timezone"] == "America/Bahia_Banderas" ? "selected" : null; ?> value="America/Bahia_Banderas">America/Bahia_Banderas</option>
                            <option <?= $settings["site_default_timezone"] == "America/Barbados" ? "selected" : null; ?> value="America/Barbados">America/Barbados</option>
                            <option <?= $settings["site_default_timezone"] == "America/Belem" ? "selected" : null; ?> value="America/Belem">America/Belem</option>
                            <option <?= $settings["site_default_timezone"] == "America/Belize" ? "selected" : null; ?> value="America/Belize">America/Belize</option>
                            <option <?= $settings["site_default_timezone"] == "America/Blanc-Sablon" ? "selected" : null; ?> value="America/Blanc-Sablon">America/Blanc-Sablon</option>
                            <option <?= $settings["site_default_timezone"] == "America/Boa_Vista" ? "selected" : null; ?> value="America/Boa_Vista">America/Boa_Vista</option>
                            <option <?= $settings["site_default_timezone"] == "America/Bogota" ? "selected" : null; ?> value="America/Bogota">America/Bogota</option>
                            <option <?= $settings["site_default_timezone"] == "America/Boise" ? "selected" : null; ?> value="America/Boise">America/Boise</option>
                            <option <?= $settings["site_default_timezone"] == "America/Buenos_Aires" ? "selected" : null; ?> value="America/Buenos_Aires">America/Buenos_Aires</option>
                            <option <?= $settings["site_default_timezone"] == "America/Cambridge_Bay" ? "selected" : null; ?> value="America/Cambridge_Bay">America/Cambridge_Bay</option>
                            <option <?= $settings["site_default_timezone"] == "America/Campo_Grande" ? "selected" : null; ?> value="America/Campo_Grande">America/Campo_Grande</option>
                            <option <?= $settings["site_default_timezone"] == "America/Cancun" ? "selected" : null; ?> value="America/Cancun">America/Cancun</option>
                            <option <?= $settings["site_default_timezone"] == "America/Caracas" ? "selected" : null; ?> value="America/Caracas">America/Caracas</option>
                            <option <?= $settings["site_default_timezone"] == "America/Catamarca" ? "selected" : null; ?> value="America/Catamarca">America/Catamarca</option>
                            <option <?= $settings["site_default_timezone"] == "America/Cayenne" ? "selected" : null; ?> value="America/Cayenne">America/Cayenne</option>
                            <option <?= $settings["site_default_timezone"] == "America/Cayman" ? "selected" : null; ?> value="America/Cayman">America/Cayman</option>
                            <option <?= $settings["site_default_timezone"] == "America/Chicago" ? "selected" : null; ?> value="America/Chicago">America/Chicago</option>
                            <option <?= $settings["site_default_timezone"] == "America/Chihuahua" ? "selected" : null; ?> value="America/Chihuahua">America/Chihuahua</option>
                            <option <?= $settings["site_default_timezone"] == "America/Ciudad_Juarez" ? "selected" : null; ?> value="America/Ciudad_Juarez">America/Ciudad_Juarez</option>
                            <option <?= $settings["site_default_timezone"] == "America/Coral_Harbour" ? "selected" : null; ?> value="America/Coral_Harbour">America/Coral_Harbour</option>
                            <option <?= $settings["site_default_timezone"] == "America/Cordoba" ? "selected" : null; ?> value="America/Cordoba">America/Cordoba</option>
                            <option <?= $settings["site_default_timezone"] == "America/Costa_Rica" ? "selected" : null; ?> value="America/Costa_Rica">America/Costa_Rica</option>
                            <option <?= $settings["site_default_timezone"] == "America/Creston" ? "selected" : null; ?> value="America/Creston">America/Creston</option>
                            <option <?= $settings["site_default_timezone"] == "America/Cuiaba" ? "selected" : null; ?> value="America/Cuiaba">America/Cuiaba</option>
                            <option <?= $settings["site_default_timezone"] == "America/Curacao" ? "selected" : null; ?> value="America/Curacao">America/Curacao</option>
                            <option <?= $settings["site_default_timezone"] == "America/Danmarkshavn" ? "selected" : null; ?> value="America/Danmarkshavn">America/Danmarkshavn</option>
                            <option <?= $settings["site_default_timezone"] == "America/Dawson" ? "selected" : null; ?> value="America/Dawson">America/Dawson</option>
                            <option <?= $settings["site_default_timezone"] == "America/Dawson_Creek" ? "selected" : null; ?> value="America/Dawson_Creek">America/Dawson_Creek</option>
                            <option <?= $settings["site_default_timezone"] == "America/Denver" ? "selected" : null; ?> value="America/Denver">America/Denver</option>
                            <option <?= $settings["site_default_timezone"] == "America/Detroit" ? "selected" : null; ?> value="America/Detroit">America/Detroit</option>
                            <option <?= $settings["site_default_timezone"] == "America/Dominica" ? "selected" : null; ?> value="America/Dominica">America/Dominica</option>
                            <option <?= $settings["site_default_timezone"] == "America/Edmonton" ? "selected" : null; ?> value="America/Edmonton">America/Edmonton</option>
                            <option <?= $settings["site_default_timezone"] == "America/Eirunepe" ? "selected" : null; ?> value="America/Eirunepe">America/Eirunepe</option>
                            <option <?= $settings["site_default_timezone"] == "America/El_Salvador" ? "selected" : null; ?> value="America/El_Salvador">America/El_Salvador</option>
                            <option <?= $settings["site_default_timezone"] == "America/Ensenada" ? "selected" : null; ?> value="America/Ensenada">America/Ensenada</option>
                            <option <?= $settings["site_default_timezone"] == "America/Fort_Nelson" ? "selected" : null; ?> value="America/Fort_Nelson">America/Fort_Nelson</option>
                            <option <?= $settings["site_default_timezone"] == "America/Fort_Wayne" ? "selected" : null; ?> value="America/Fort_Wayne">America/Fort_Wayne</option>
                            <option <?= $settings["site_default_timezone"] == "America/Fortaleza" ? "selected" : null; ?> value="America/Fortaleza">America/Fortaleza</option>
                            <option <?= $settings["site_default_timezone"] == "America/Glace_Bay" ? "selected" : null; ?> value="America/Glace_Bay">America/Glace_Bay</option>
                            <option <?= $settings["site_default_timezone"] == "America/Godthab" ? "selected" : null; ?> value="America/Godthab">America/Godthab</option>
                            <option <?= $settings["site_default_timezone"] == "America/Goose_Bay" ? "selected" : null; ?> value="America/Goose_Bay">America/Goose_Bay</option>
                            <option <?= $settings["site_default_timezone"] == "America/Grand_Turk" ? "selected" : null; ?> value="America/Grand_Turk">America/Grand_Turk</option>
                            <option <?= $settings["site_default_timezone"] == "America/Grenada" ? "selected" : null; ?> value="America/Grenada">America/Grenada</option>
                            <option <?= $settings["site_default_timezone"] == "America/Guadeloupe" ? "selected" : null; ?> value="America/Guadeloupe">America/Guadeloupe</option>
                            <option <?= $settings["site_default_timezone"] == "America/Guatemala" ? "selected" : null; ?> value="America/Guatemala">America/Guatemala</option>
                            <option <?= $settings["site_default_timezone"] == "America/Guayaquil" ? "selected" : null; ?> value="America/Guayaquil">America/Guayaquil</option>
                            <option <?= $settings["site_default_timezone"] == "America/Guyana" ? "selected" : null; ?> value="America/Guyana">America/Guyana</option>
                            <option <?= $settings["site_default_timezone"] == "America/Halifax" ? "selected" : null; ?> value="America/Halifax">America/Halifax</option>
                            <option <?= $settings["site_default_timezone"] == "America/Havana" ? "selected" : null; ?> value="America/Havana">America/Havana</option>
                            <option <?= $settings["site_default_timezone"] == "America/Hermosillo" ? "selected" : null; ?> value="America/Hermosillo">America/Hermosillo</option>
                            <option <?= $settings["site_default_timezone"] == "America/Indiana/Indianapolis" ? "selected" : null; ?> value="America/Indiana/Indianapolis">America/Indiana/Indianapolis</option>
                            <option <?= $settings["site_default_timezone"] == "America/Indiana/Knox" ? "selected" : null; ?> value="America/Indiana/Knox">America/Indiana/Knox</option>
                            <option <?= $settings["site_default_timezone"] == "America/Indiana/Marengo" ? "selected" : null; ?> value="America/Indiana/Marengo">America/Indiana/Marengo</option>
                            <option <?= $settings["site_default_timezone"] == "America/Indiana/Petersburg" ? "selected" : null; ?> value="America/Indiana/Petersburg">America/Indiana/Petersburg</option>
                            <option <?= $settings["site_default_timezone"] == "America/Indiana/Tell_City" ? "selected" : null; ?> value="America/Indiana/Tell_City">America/Indiana/Tell_City</option>
                            <option <?= $settings["site_default_timezone"] == "America/Indiana/Vevay" ? "selected" : null; ?> value="America/Indiana/Vevay">America/Indiana/Vevay</option>
                            <option <?= $settings["site_default_timezone"] == "America/Indiana/Vincennes" ? "selected" : null; ?> value="America/Indiana/Vincennes">America/Indiana/Vincennes</option>
                            <option <?= $settings["site_default_timezone"] == "America/Indiana/Winamac" ? "selected" : null; ?> value="America/Indiana/Winamac">America/Indiana/Winamac</option>
                            <option <?= $settings["site_default_timezone"] == "America/Indianapolis" ? "selected" : null; ?> value="America/Indianapolis">America/Indianapolis</option>
                            <option <?= $settings["site_default_timezone"] == "America/Inuvik" ? "selected" : null; ?> value="America/Inuvik">America/Inuvik</option>
                            <option <?= $settings["site_default_timezone"] == "America/Iqaluit" ? "selected" : null; ?> value="America/Iqaluit">America/Iqaluit</option>
                            <option <?= $settings["site_default_timezone"] == "America/Jamaica" ? "selected" : null; ?> value="America/Jamaica">America/Jamaica</option>
                            <option <?= $settings["site_default_timezone"] == "America/Jujuy" ? "selected" : null; ?> value="America/Jujuy">America/Jujuy</option>
                            <option <?= $settings["site_default_timezone"] == "America/Juneau" ? "selected" : null; ?> value="America/Juneau">America/Juneau</option>
                            <option <?= $settings["site_default_timezone"] == "America/Kentucky/Louisville" ? "selected" : null; ?> value="America/Kentucky/Louisville">America/Kentucky/Louisville</option>
                            <option <?= $settings["site_default_timezone"] == "America/Kentucky/Monticello" ? "selected" : null; ?> value="America/Kentucky/Monticello">America/Kentucky/Monticello</option>
                            <option <?= $settings["site_default_timezone"] == "America/Knox_IN" ? "selected" : null; ?> value="America/Knox_IN">America/Knox_IN</option>
                            <option <?= $settings["site_default_timezone"] == "America/Kralendijk" ? "selected" : null; ?> value="America/Kralendijk">America/Kralendijk</option>
                            <option <?= $settings["site_default_timezone"] == "America/La_Paz" ? "selected" : null; ?> value="America/La_Paz">America/La_Paz</option>
                            <option <?= $settings["site_default_timezone"] == "America/Lima" ? "selected" : null; ?> value="America/Lima">America/Lima</option>
                            <option <?= $settings["site_default_timezone"] == "America/Los_Angeles" ? "selected" : null; ?> value="America/Los_Angeles">America/Los_Angeles</option>
                            <option <?= $settings["site_default_timezone"] == "America/Louisville" ? "selected" : null; ?> value="America/Louisville">America/Louisville</option>
                            <option <?= $settings["site_default_timezone"] == "America/Lower_Princes" ? "selected" : null; ?> value="America/Lower_Princes">America/Lower_Princes</option>
                            <option <?= $settings["site_default_timezone"] == "America/Maceio" ? "selected" : null; ?> value="America/Maceio">America/Maceio</option>
                            <option <?= $settings["site_default_timezone"] == "America/Managua" ? "selected" : null; ?> value="America/Managua">America/Managua</option>
                            <option <?= $settings["site_default_timezone"] == "America/Manaus" ? "selected" : null; ?> value="America/Manaus">America/Manaus</option>
                            <option <?= $settings["site_default_timezone"] == "America/Marigot" ? "selected" : null; ?> value="America/Marigot">America/Marigot</option>
                            <option <?= $settings["site_default_timezone"] == "America/Martinique" ? "selected" : null; ?> value="America/Martinique">America/Martinique</option>
                            <option <?= $settings["site_default_timezone"] == "America/Matamoros" ? "selected" : null; ?> value="America/Matamoros">America/Matamoros</option>
                            <option <?= $settings["site_default_timezone"] == "America/Mazatlan" ? "selected" : null; ?> value="America/Mazatlan">America/Mazatlan</option>
                            <option <?= $settings["site_default_timezone"] == "America/Mendoza" ? "selected" : null; ?> value="America/Mendoza">America/Mendoza</option>
                            <option <?= $settings["site_default_timezone"] == "America/Menominee" ? "selected" : null; ?> value="America/Menominee">America/Menominee</option>
                            <option <?= $settings["site_default_timezone"] == "America/Merida" ? "selected" : null; ?> value="America/Merida">America/Merida</option>
                            <option <?= $settings["site_default_timezone"] == "America/Metlakatla" ? "selected" : null; ?> value="America/Metlakatla">America/Metlakatla</option>
                            <option <?= $settings["site_default_timezone"] == "America/Mexico_City" ? "selected" : null; ?> value="America/Mexico_City">America/Mexico_City</option>
                            <option <?= $settings["site_default_timezone"] == "America/Miquelon" ? "selected" : null; ?> value="America/Miquelon">America/Miquelon</option>
                            <option <?= $settings["site_default_timezone"] == "America/Moncton" ? "selected" : null; ?> value="America/Moncton">America/Moncton</option>
                            <option <?= $settings["site_default_timezone"] == "America/Monterrey" ? "selected" : null; ?> value="America/Monterrey">America/Monterrey</option>
                            <option <?= $settings["site_default_timezone"] == "America/Montevideo" ? "selected" : null; ?> value="America/Montevideo">America/Montevideo</option>
                            <option <?= $settings["site_default_timezone"] == "America/Montreal" ? "selected" : null; ?> value="America/Montreal">America/Montreal</option>
                            <option <?= $settings["site_default_timezone"] == "America/Montserrat" ? "selected" : null; ?> value="America/Montserrat">America/Montserrat</option>
                            <option <?= $settings["site_default_timezone"] == "America/Nassau" ? "selected" : null; ?> value="America/Nassau">America/Nassau</option>
                            <option <?= $settings["site_default_timezone"] == "America/New_York" ? "selected" : null; ?> value="America/New_York">America/New_York</option>
                            <option <?= $settings["site_default_timezone"] == "America/Nipigon" ? "selected" : null; ?> value="America/Nipigon">America/Nipigon</option>
                            <option <?= $settings["site_default_timezone"] == "America/Nome" ? "selected" : null; ?> value="America/Nome">America/Nome</option>
                            <option <?= $settings["site_default_timezone"] == "America/Noronha" ? "selected" : null; ?> value="America/Noronha">America/Noronha</option>
                            <option <?= $settings["site_default_timezone"] == "America/North_Dakota/Beulah" ? "selected" : null; ?> value="America/North_Dakota/Beulah">America/North_Dakota/Beulah</option>
                            <option <?= $settings["site_default_timezone"] == "America/North_Dakota/Center" ? "selected" : null; ?> value="America/North_Dakota/Center">America/North_Dakota/Center</option>
                            <option <?= $settings["site_default_timezone"] == "America/North_Dakota/New_Salem" ? "selected" : null; ?> value="America/North_Dakota/New_Salem">America/North_Dakota/New_Salem</option>
                            <option <?= $settings["site_default_timezone"] == "America/Nuuk" ? "selected" : null; ?> value="America/Nuuk">America/Nuuk</option>
                            <option <?= $settings["site_default_timezone"] == "America/Ojinaga" ? "selected" : null; ?> value="America/Ojinaga">America/Ojinaga</option>
                            <option <?= $settings["site_default_timezone"] == "America/Panama" ? "selected" : null; ?> value="America/Panama">America/Panama</option>
                            <option <?= $settings["site_default_timezone"] == "America/Pangnirtung" ? "selected" : null; ?> value="America/Pangnirtung">America/Pangnirtung</option>
                            <option <?= $settings["site_default_timezone"] == "America/Paramaribo" ? "selected" : null; ?> value="America/Paramaribo">America/Paramaribo</option>
                            <option <?= $settings["site_default_timezone"] == "America/Phoenix" ? "selected" : null; ?> value="America/Phoenix">America/Phoenix</option>
                            <option <?= $settings["site_default_timezone"] == "America/Port-au-Prince" ? "selected" : null; ?> value="America/Port-au-Prince">America/Port-au-Prince</option>
                            <option <?= $settings["site_default_timezone"] == "America/Port_of_Spain" ? "selected" : null; ?> value="America/Port_of_Spain">America/Port_of_Spain</option>
                            <option <?= $settings["site_default_timezone"] == "America/Porto_Acre" ? "selected" : null; ?> value="America/Porto_Acre">America/Porto_Acre</option>
                            <option <?= $settings["site_default_timezone"] == "America/Porto_Velho" ? "selected" : null; ?> value="America/Porto_Velho">America/Porto_Velho</option>
                            <option <?= $settings["site_default_timezone"] == "America/Puerto_Rico" ? "selected" : null; ?> value="America/Puerto_Rico">America/Puerto_Rico</option>
                            <option <?= $settings["site_default_timezone"] == "America/Punta_Arenas" ? "selected" : null; ?> value="America/Punta_Arenas">America/Punta_Arenas</option>
                            <option <?= $settings["site_default_timezone"] == "America/Rainy_River" ? "selected" : null; ?> value="America/Rainy_River">America/Rainy_River</option>
                            <option <?= $settings["site_default_timezone"] == "America/Rankin_Inlet" ? "selected" : null; ?> value="America/Rankin_Inlet">America/Rankin_Inlet</option>
                            <option <?= $settings["site_default_timezone"] == "America/Recife" ? "selected" : null; ?> value="America/Recife">America/Recife</option>
                            <option <?= $settings["site_default_timezone"] == "America/Regina" ? "selected" : null; ?> value="America/Regina">America/Regina</option>
                            <option <?= $settings["site_default_timezone"] == "America/Resolute" ? "selected" : null; ?> value="America/Resolute">America/Resolute</option>
                            <option <?= $settings["site_default_timezone"] == "America/Rio_Branco" ? "selected" : null; ?> value="America/Rio_Branco">America/Rio_Branco</option>
                            <option <?= $settings["site_default_timezone"] == "America/Rosario" ? "selected" : null; ?> value="America/Rosario">America/Rosario</option>
                            <option <?= $settings["site_default_timezone"] == "America/Santa_Isabel" ? "selected" : null; ?> value="America/Santa_Isabel">America/Santa_Isabel</option>
                            <option <?= $settings["site_default_timezone"] == "America/Santarem" ? "selected" : null; ?> value="America/Santarem">America/Santarem</option>
                            <option <?= $settings["site_default_timezone"] == "America/Santiago" ? "selected" : null; ?> value="America/Santiago">America/Santiago</option>
                            <option <?= $settings["site_default_timezone"] == "America/Santo_Domingo" ? "selected" : null; ?> value="America/Santo_Domingo">America/Santo_Domingo</option>
                            <option <?= $settings["site_default_timezone"] == "America/Sao_Paulo" ? "selected" : null; ?> value="America/Sao_Paulo">America/Sao_Paulo</option>
                            <option <?= $settings["site_default_timezone"] == "America/Scoresbysund" ? "selected" : null; ?> value="America/Scoresbysund">America/Scoresbysund</option>
                            <option <?= $settings["site_default_timezone"] == "America/Shiprock" ? "selected" : null; ?> value="America/Shiprock">America/Shiprock</option>
                            <option <?= $settings["site_default_timezone"] == "America/Sitka" ? "selected" : null; ?> value="America/Sitka">America/Sitka</option>
                            <option <?= $settings["site_default_timezone"] == "America/St_Barthelemy" ? "selected" : null; ?> value="America/St_Barthelemy">America/St_Barthelemy</option>
                            <option <?= $settings["site_default_timezone"] == "America/St_Johns" ? "selected" : null; ?> value="America/St_Johns">America/St_Johns</option>
                            <option <?= $settings["site_default_timezone"] == "America/St_Kitts" ? "selected" : null; ?> value="America/St_Kitts">America/St_Kitts</option>
                            <option <?= $settings["site_default_timezone"] == "America/St_Lucia" ? "selected" : null; ?> value="America/St_Lucia">America/St_Lucia</option>
                            <option <?= $settings["site_default_timezone"] == "America/St_Thomas" ? "selected" : null; ?> value="America/St_Thomas">America/St_Thomas</option>
                            <option <?= $settings["site_default_timezone"] == "America/St_Vincent" ? "selected" : null; ?> value="America/St_Vincent">America/St_Vincent</option>
                            <option <?= $settings["site_default_timezone"] == "America/Swift_Current" ? "selected" : null; ?> value="America/Swift_Current">America/Swift_Current</option>
                            <option <?= $settings["site_default_timezone"] == "America/Tegucigalpa" ? "selected" : null; ?> value="America/Tegucigalpa">America/Tegucigalpa</option>
                            <option <?= $settings["site_default_timezone"] == "America/Thule" ? "selected" : null; ?> value="America/Thule">America/Thule</option>
                            <option <?= $settings["site_default_timezone"] == "America/Thunder_Bay" ? "selected" : null; ?> value="America/Thunder_Bay">America/Thunder_Bay</option>
                            <option <?= $settings["site_default_timezone"] == "America/Tijuana" ? "selected" : null; ?> value="America/Tijuana">America/Tijuana</option>
                            <option <?= $settings["site_default_timezone"] == "America/Toronto" ? "selected" : null; ?> value="America/Toronto">America/Toronto</option>
                            <option <?= $settings["site_default_timezone"] == "America/Tortola" ? "selected" : null; ?> value="America/Tortola">America/Tortola</option>
                            <option <?= $settings["site_default_timezone"] == "America/Vancouver" ? "selected" : null; ?> value="America/Vancouver">America/Vancouver</option>
                            <option <?= $settings["site_default_timezone"] == "America/Virgin" ? "selected" : null; ?> value="America/Virgin">America/Virgin</option>
                            <option <?= $settings["site_default_timezone"] == "America/Whitehorse" ? "selected" : null; ?> value="America/Whitehorse">America/Whitehorse</option>
                            <option <?= $settings["site_default_timezone"] == "America/Winnipeg" ? "selected" : null; ?> value="America/Winnipeg">America/Winnipeg</option>
                            <option <?= $settings["site_default_timezone"] == "America/Yakutat" ? "selected" : null; ?> value="America/Yakutat">America/Yakutat</option>
                            <option <?= $settings["site_default_timezone"] == "America/Yellowknife" ? "selected" : null; ?> value="America/Yellowknife">America/Yellowknife</option>
                            <option <?= $settings["site_default_timezone"] == "Antarctica/Casey" ? "selected" : null; ?> value="Antarctica/Casey">Antarctica/Casey</option>
                            <option <?= $settings["site_default_timezone"] == "Antarctica/Davis" ? "selected" : null; ?> value="Antarctica/Davis">Antarctica/Davis</option>
                            <option <?= $settings["site_default_timezone"] == "Antarctica/DumontDUrville" ? "selected" : null; ?> value="Antarctica/DumontDUrville">Antarctica/DumontDUrville</option>
                            <option <?= $settings["site_default_timezone"] == "Antarctica/Macquarie" ? "selected" : null; ?> value="Antarctica/Macquarie">Antarctica/Macquarie</option>
                            <option <?= $settings["site_default_timezone"] == "Antarctica/Mawson" ? "selected" : null; ?> value="Antarctica/Mawson">Antarctica/Mawson</option>
                            <option <?= $settings["site_default_timezone"] == "Antarctica/McMurdo" ? "selected" : null; ?> value="Antarctica/McMurdo">Antarctica/McMurdo</option>
                            <option <?= $settings["site_default_timezone"] == "Antarctica/Palmer" ? "selected" : null; ?> value="Antarctica/Palmer">Antarctica/Palmer</option>
                            <option <?= $settings["site_default_timezone"] == "Antarctica/Rothera" ? "selected" : null; ?> value="Antarctica/Rothera">Antarctica/Rothera</option>
                            <option <?= $settings["site_default_timezone"] == "Antarctica/South_Pole" ? "selected" : null; ?> value="Antarctica/South_Pole">Antarctica/South_Pole</option>
                            <option <?= $settings["site_default_timezone"] == "Antarctica/Syowa" ? "selected" : null; ?> value="Antarctica/Syowa">Antarctica/Syowa</option>
                            <option <?= $settings["site_default_timezone"] == "Antarctica/Troll" ? "selected" : null; ?> value="Antarctica/Troll">Antarctica/Troll</option>
                            <option <?= $settings["site_default_timezone"] == "Antarctica/Vostok" ? "selected" : null; ?> value="Antarctica/Vostok">Antarctica/Vostok</option>
                            <option <?= $settings["site_default_timezone"] == "Arctic/Longyearbyen" ? "selected" : null; ?> value="Arctic/Longyearbyen">Arctic/Longyearbyen</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Aden" ? "selected" : null; ?> value="Asia/Aden">Asia/Aden</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Almaty" ? "selected" : null; ?> value="Asia/Almaty">Asia/Almaty</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Amman" ? "selected" : null; ?> value="Asia/Amman">Asia/Amman</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Anadyr" ? "selected" : null; ?> value="Asia/Anadyr">Asia/Anadyr</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Aqtau" ? "selected" : null; ?> value="Asia/Aqtau">Asia/Aqtau</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Aqtobe" ? "selected" : null; ?> value="Asia/Aqtobe">Asia/Aqtobe</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Ashgabat" ? "selected" : null; ?> value="Asia/Ashgabat">Asia/Ashgabat</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Ashkhabad" ? "selected" : null; ?> value="Asia/Ashkhabad">Asia/Ashkhabad</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Atyrau" ? "selected" : null; ?> value="Asia/Atyrau">Asia/Atyrau</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Baghdad" ? "selected" : null; ?> value="Asia/Baghdad">Asia/Baghdad</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Bahrain" ? "selected" : null; ?> value="Asia/Bahrain">Asia/Bahrain</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Baku" ? "selected" : null; ?> value="Asia/Baku">Asia/Baku</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Bangkok" ? "selected" : null; ?> value="Asia/Bangkok">Asia/Bangkok</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Barnaul" ? "selected" : null; ?> value="Asia/Barnaul">Asia/Barnaul</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Beirut" ? "selected" : null; ?> value="Asia/Beirut">Asia/Beirut</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Bishkek" ? "selected" : null; ?> value="Asia/Bishkek">Asia/Bishkek</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Brunei" ? "selected" : null; ?> value="Asia/Brunei">Asia/Brunei</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Calcutta" ? "selected" : null; ?> value="Asia/Calcutta">Asia/Calcutta</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Chita" ? "selected" : null; ?> value="Asia/Chita">Asia/Chita</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Choibalsan" ? "selected" : null; ?> value="Asia/Choibalsan">Asia/Choibalsan</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Chongqing" ? "selected" : null; ?> value="Asia/Chongqing">Asia/Chongqing</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Chungking" ? "selected" : null; ?> value="Asia/Chungking">Asia/Chungking</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Colombo" ? "selected" : null; ?> value="Asia/Colombo">Asia/Colombo</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Dacca" ? "selected" : null; ?> value="Asia/Dacca">Asia/Dacca</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Damascus" ? "selected" : null; ?> value="Asia/Damascus">Asia/Damascus</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Dhaka" ? "selected" : null; ?> value="Asia/Dhaka">Asia/Dhaka</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Dili" ? "selected" : null; ?> value="Asia/Dili">Asia/Dili</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Dubai" ? "selected" : null; ?> value="Asia/Dubai">Asia/Dubai</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Dushanbe" ? "selected" : null; ?> value="Asia/Dushanbe">Asia/Dushanbe</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Famagusta" ? "selected" : null; ?> value="Asia/Famagusta">Asia/Famagusta</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Gaza" ? "selected" : null; ?> value="Asia/Gaza">Asia/Gaza</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Harbin" ? "selected" : null; ?> value="Asia/Harbin">Asia/Harbin</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Hebron" ? "selected" : null; ?> value="Asia/Hebron">Asia/Hebron</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Ho_Chi_Minh" ? "selected" : null; ?> value="Asia/Ho_Chi_Minh">Asia/Ho_Chi_Minh</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Hong_Kong" ? "selected" : null; ?> value="Asia/Hong_Kong">Asia/Hong_Kong</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Hovd" ? "selected" : null; ?> value="Asia/Hovd">Asia/Hovd</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Irkutsk" ? "selected" : null; ?> value="Asia/Irkutsk">Asia/Irkutsk</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Istanbul" ? "selected" : null; ?> value="Asia/Istanbul">Asia/Istanbul</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Jakarta" ? "selected" : null; ?> value="Asia/Jakarta">Asia/Jakarta</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Jayapura" ? "selected" : null; ?> value="Asia/Jayapura">Asia/Jayapura</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Jerusalem" ? "selected" : null; ?> value="Asia/Jerusalem">Asia/Jerusalem</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Kabul" ? "selected" : null; ?> value="Asia/Kabul">Asia/Kabul</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Kamchatka" ? "selected" : null; ?> value="Asia/Kamchatka">Asia/Kamchatka</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Karachi" ? "selected" : null; ?> value="Asia/Karachi">Asia/Karachi</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Kashgar" ? "selected" : null; ?> value="Asia/Kashgar">Asia/Kashgar</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Kathmandu" ? "selected" : null; ?> value="Asia/Kathmandu">Asia/Kathmandu</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Katmandu" ? "selected" : null; ?> value="Asia/Katmandu">Asia/Katmandu</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Khandyga" ? "selected" : null; ?> value="Asia/Khandyga">Asia/Khandyga</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Kolkata" ? "selected" : null; ?> value="Asia/Kolkata">Asia/Kolkata</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Krasnoyarsk" ? "selected" : null; ?> value="Asia/Krasnoyarsk">Asia/Krasnoyarsk</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Kuala_Lumpur" ? "selected" : null; ?> value="Asia/Kuala_Lumpur">Asia/Kuala_Lumpur</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Kuching" ? "selected" : null; ?> value="Asia/Kuching">Asia/Kuching</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Kuwait" ? "selected" : null; ?> value="Asia/Kuwait">Asia/Kuwait</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Macao" ? "selected" : null; ?> value="Asia/Macao">Asia/Macao</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Macau" ? "selected" : null; ?> value="Asia/Macau">Asia/Macau</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Magadan" ? "selected" : null; ?> value="Asia/Magadan">Asia/Magadan</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Makassar" ? "selected" : null; ?> value="Asia/Makassar">Asia/Makassar</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Manila" ? "selected" : null; ?> value="Asia/Manila">Asia/Manila</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Muscat" ? "selected" : null; ?> value="Asia/Muscat">Asia/Muscat</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Nicosia" ? "selected" : null; ?> value="Asia/Nicosia">Asia/Nicosia</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Novokuznetsk" ? "selected" : null; ?> value="Asia/Novokuznetsk">Asia/Novokuznetsk</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Novosibirsk" ? "selected" : null; ?> value="Asia/Novosibirsk">Asia/Novosibirsk</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Omsk" ? "selected" : null; ?> value="Asia/Omsk">Asia/Omsk</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Oral" ? "selected" : null; ?> value="Asia/Oral">Asia/Oral</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Phnom_Penh" ? "selected" : null; ?> value="Asia/Phnom_Penh">Asia/Phnom_Penh</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Pontianak" ? "selected" : null; ?> value="Asia/Pontianak">Asia/Pontianak</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Pyongyang" ? "selected" : null; ?> value="Asia/Pyongyang">Asia/Pyongyang</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Qatar" ? "selected" : null; ?> value="Asia/Qatar">Asia/Qatar</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Qostanay" ? "selected" : null; ?> value="Asia/Qostanay">Asia/Qostanay</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Qyzylorda" ? "selected" : null; ?> value="Asia/Qyzylorda">Asia/Qyzylorda</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Rangoon" ? "selected" : null; ?> value="Asia/Rangoon">Asia/Rangoon</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Riyadh" ? "selected" : null; ?> value="Asia/Riyadh">Asia/Riyadh</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Saigon" ? "selected" : null; ?> value="Asia/Saigon">Asia/Saigon</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Sakhalin" ? "selected" : null; ?> value="Asia/Sakhalin">Asia/Sakhalin</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Samarkand" ? "selected" : null; ?> value="Asia/Samarkand">Asia/Samarkand</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Seoul" ? "selected" : null; ?> value="Asia/Seoul">Asia/Seoul</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Shanghai" ? "selected" : null; ?> value="Asia/Shanghai">Asia/Shanghai</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Singapore" ? "selected" : null; ?> value="Asia/Singapore">Asia/Singapore</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Srednekolymsk" ? "selected" : null; ?> value="Asia/Srednekolymsk">Asia/Srednekolymsk</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Taipei" ? "selected" : null; ?> value="Asia/Taipei">Asia/Taipei</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Tashkent" ? "selected" : null; ?> value="Asia/Tashkent">Asia/Tashkent</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Tbilisi" ? "selected" : null; ?> value="Asia/Tbilisi">Asia/Tbilisi</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Tehran" ? "selected" : null; ?> value="Asia/Tehran">Asia/Tehran</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Tel_Aviv" ? "selected" : null; ?> value="Asia/Tel_Aviv">Asia/Tel_Aviv</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Thimbu" ? "selected" : null; ?> value="Asia/Thimbu">Asia/Thimbu</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Thimphu" ? "selected" : null; ?> value="Asia/Thimphu">Asia/Thimphu</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Tokyo" ? "selected" : null; ?> value="Asia/Tokyo">Asia/Tokyo</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Tomsk" ? "selected" : null; ?> value="Asia/Tomsk">Asia/Tomsk</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Ujung_Pandang" ? "selected" : null; ?> value="Asia/Ujung_Pandang">Asia/Ujung_Pandang</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Ulaanbaatar" ? "selected" : null; ?> value="Asia/Ulaanbaatar">Asia/Ulaanbaatar</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Ulan_Bator" ? "selected" : null; ?> value="Asia/Ulan_Bator">Asia/Ulan_Bator</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Urumqi" ? "selected" : null; ?> value="Asia/Urumqi">Asia/Urumqi</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Ust-Nera" ? "selected" : null; ?> value="Asia/Ust-Nera">Asia/Ust-Nera</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Vientiane" ? "selected" : null; ?> value="Asia/Vientiane">Asia/Vientiane</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Vladivostok" ? "selected" : null; ?> value="Asia/Vladivostok">Asia/Vladivostok</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Yakutsk" ? "selected" : null; ?> value="Asia/Yakutsk">Asia/Yakutsk</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Yangon" ? "selected" : null; ?> value="Asia/Yangon">Asia/Yangon</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Yekaterinburg" ? "selected" : null; ?> value="Asia/Yekaterinburg">Asia/Yekaterinburg</option>
                            <option <?= $settings["site_default_timezone"] == "Asia/Yerevan" ? "selected" : null; ?> value="Asia/Yerevan">Asia/Yerevan</option>
                            <option <?= $settings["site_default_timezone"] == "Atlantic/Azores" ? "selected" : null; ?> value="Atlantic/Azores">Atlantic/Azores</option>
                            <option <?= $settings["site_default_timezone"] == "Atlantic/Bermuda" ? "selected" : null; ?> value="Atlantic/Bermuda">Atlantic/Bermuda</option>
                            <option <?= $settings["site_default_timezone"] == "Atlantic/Canary" ? "selected" : null; ?> value="Atlantic/Canary">Atlantic/Canary</option>
                            <option <?= $settings["site_default_timezone"] == "Atlantic/Cape_Verde" ? "selected" : null; ?> value="Atlantic/Cape_Verde">Atlantic/Cape_Verde</option>
                            <option <?= $settings["site_default_timezone"] == "Atlantic/Faeroe" ? "selected" : null; ?> value="Atlantic/Faeroe">Atlantic/Faeroe</option>
                            <option <?= $settings["site_default_timezone"] == "Atlantic/Faroe" ? "selected" : null; ?> value="Atlantic/Faroe">Atlantic/Faroe</option>
                            <option <?= $settings["site_default_timezone"] == "Atlantic/Jan_Mayen" ? "selected" : null; ?> value="Atlantic/Jan_Mayen">Atlantic/Jan_Mayen</option>
                            <option <?= $settings["site_default_timezone"] == "Atlantic/Madeira" ? "selected" : null; ?> value="Atlantic/Madeira">Atlantic/Madeira</option>
                            <option <?= $settings["site_default_timezone"] == "Atlantic/Reykjavik" ? "selected" : null; ?> value="Atlantic/Reykjavik">Atlantic/Reykjavik</option>
                            <option <?= $settings["site_default_timezone"] == "Atlantic/South_Georgia" ? "selected" : null; ?> value="Atlantic/South_Georgia">Atlantic/South_Georgia</option>
                            <option <?= $settings["site_default_timezone"] == "Atlantic/St_Helena" ? "selected" : null; ?> value="Atlantic/St_Helena">Atlantic/St_Helena</option>
                            <option <?= $settings["site_default_timezone"] == "Atlantic/Stanley" ? "selected" : null; ?> value="Atlantic/Stanley">Atlantic/Stanley</option>
                            <option <?= $settings["site_default_timezone"] == "Australia/ACT" ? "selected" : null; ?> value="Australia/ACT">Australia/ACT</option>
                            <option <?= $settings["site_default_timezone"] == "Australia/Adelaide" ? "selected" : null; ?> value="Australia/Adelaide">Australia/Adelaide</option>
                            <option <?= $settings["site_default_timezone"] == "Australia/Brisbane" ? "selected" : null; ?> value="Australia/Brisbane">Australia/Brisbane</option>
                            <option <?= $settings["site_default_timezone"] == "Australia/Broken_Hill" ? "selected" : null; ?> value="Australia/Broken_Hill">Australia/Broken_Hill</option>
                            <option <?= $settings["site_default_timezone"] == "Australia/Canberra" ? "selected" : null; ?> value="Australia/Canberra">Australia/Canberra</option>
                            <option <?= $settings["site_default_timezone"] == "Australia/Currie" ? "selected" : null; ?> value="Australia/Currie">Australia/Currie</option>
                            <option <?= $settings["site_default_timezone"] == "Australia/Darwin" ? "selected" : null; ?> value="Australia/Darwin">Australia/Darwin</option>
                            <option <?= $settings["site_default_timezone"] == "Australia/Eucla" ? "selected" : null; ?> value="Australia/Eucla">Australia/Eucla</option>
                            <option <?= $settings["site_default_timezone"] == "Australia/Hobart" ? "selected" : null; ?> value="Australia/Hobart">Australia/Hobart</option>
                            <option <?= $settings["site_default_timezone"] == "Australia/LHI" ? "selected" : null; ?> value="Australia/LHI">Australia/LHI</option>
                            <option <?= $settings["site_default_timezone"] == "Australia/Lindeman" ? "selected" : null; ?> value="Australia/Lindeman">Australia/Lindeman</option>
                            <option <?= $settings["site_default_timezone"] == "Australia/Lord_Howe" ? "selected" : null; ?> value="Australia/Lord_Howe">Australia/Lord_Howe</option>
                            <option <?= $settings["site_default_timezone"] == "Australia/Melbourne" ? "selected" : null; ?> value="Australia/Melbourne">Australia/Melbourne</option>
                            <option <?= $settings["site_default_timezone"] == "Australia/North" ? "selected" : null; ?> value="Australia/North">Australia/North</option>
                            <option <?= $settings["site_default_timezone"] == "Australia/NSW" ? "selected" : null; ?> value="Australia/NSW">Australia/NSW</option>
                            <option <?= $settings["site_default_timezone"] == "Australia/Perth" ? "selected" : null; ?> value="Australia/Perth">Australia/Perth</option>
                            <option <?= $settings["site_default_timezone"] == "Australia/Queensland" ? "selected" : null; ?> value="Australia/Queensland">Australia/Queensland</option>
                            <option <?= $settings["site_default_timezone"] == "Australia/South" ? "selected" : null; ?> value="Australia/South">Australia/South</option>
                            <option <?= $settings["site_default_timezone"] == "Australia/Sydney" ? "selected" : null; ?> value="Australia/Sydney">Australia/Sydney</option>
                            <option <?= $settings["site_default_timezone"] == "Australia/Tasmania" ? "selected" : null; ?> value="Australia/Tasmania">Australia/Tasmania</option>
                            <option <?= $settings["site_default_timezone"] == "Australia/Victoria" ? "selected" : null; ?> value="Australia/Victoria">Australia/Victoria</option>
                            <option <?= $settings["site_default_timezone"] == "Australia/West" ? "selected" : null; ?> value="Australia/West">Australia/West</option>
                            <option <?= $settings["site_default_timezone"] == "Australia/Yancowinna" ? "selected" : null; ?> value="Australia/Yancowinna">Australia/Yancowinna</option>
                            <option <?= $settings["site_default_timezone"] == "Brazil/Acre" ? "selected" : null; ?> value="Brazil/Acre">Brazil/Acre</option>
                            <option <?= $settings["site_default_timezone"] == "Brazil/DeNoronha" ? "selected" : null; ?> value="Brazil/DeNoronha">Brazil/DeNoronha</option>
                            <option <?= $settings["site_default_timezone"] == "Brazil/East" ? "selected" : null; ?> value="Brazil/East">Brazil/East</option>
                            <option <?= $settings["site_default_timezone"] == "Brazil/West" ? "selected" : null; ?> value="Brazil/West">Brazil/West</option>
                            <option <?= $settings["site_default_timezone"] == "Canada/Atlantic" ? "selected" : null; ?> value="Canada/Atlantic">Canada/Atlantic</option>
                            <option <?= $settings["site_default_timezone"] == "Canada/Central" ? "selected" : null; ?> value="Canada/Central">Canada/Central</option>
                            <option <?= $settings["site_default_timezone"] == "Canada/Eastern" ? "selected" : null; ?> value="Canada/Eastern">Canada/Eastern</option>
                            <option <?= $settings["site_default_timezone"] == "Canada/Mountain" ? "selected" : null; ?> value="Canada/Mountain">Canada/Mountain</option>
                            <option <?= $settings["site_default_timezone"] == "Canada/Newfoundland" ? "selected" : null; ?> value="Canada/Newfoundland">Canada/Newfoundland</option>
                            <option <?= $settings["site_default_timezone"] == "Canada/Pacific" ? "selected" : null; ?> value="Canada/Pacific">Canada/Pacific</option>
                            <option <?= $settings["site_default_timezone"] == "Canada/Saskatchewan" ? "selected" : null; ?> value="Canada/Saskatchewan">Canada/Saskatchewan</option>
                            <option <?= $settings["site_default_timezone"] == "Canada/Yukon" ? "selected" : null; ?> value="Canada/Yukon">Canada/Yukon</option>
                            <option <?= $settings["site_default_timezone"] == "CET" ? "selected" : null; ?> value="CET">CET</option>
                            <option <?= $settings["site_default_timezone"] == "Chile/Continental" ? "selected" : null; ?> value="Chile/Continental">Chile/Continental</option>
                            <option <?= $settings["site_default_timezone"] == "Chile/EasterIsland" ? "selected" : null; ?> value="Chile/EasterIsland">Chile/EasterIsland</option>
                            <option <?= $settings["site_default_timezone"] == "CST6CDT" ? "selected" : null; ?> value="CST6CDT">CST6CDT</option>
                            <option <?= $settings["site_default_timezone"] == "Cuba" ? "selected" : null; ?> value="Cuba">Cuba</option>
                            <option <?= $settings["site_default_timezone"] == "EET" ? "selected" : null; ?> value="EET">EET</option>
                            <option <?= $settings["site_default_timezone"] == "Egypt" ? "selected" : null; ?> value="Egypt">Egypt</option>
                            <option <?= $settings["site_default_timezone"] == "Eire" ? "selected" : null; ?> value="Eire">Eire</option>
                            <option <?= $settings["site_default_timezone"] == "EST" ? "selected" : null; ?> value="EST">EST</option>
                            <option <?= $settings["site_default_timezone"] == "EST5EDT" ? "selected" : null; ?> value="EST5EDT">EST5EDT</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT" ? "selected" : null; ?> value="Etc/GMT">Etc/GMT</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT+0" ? "selected" : null; ?> value="Etc/GMT+0">Etc/GMT+0</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT+1" ? "selected" : null; ?> value="Etc/GMT+1">Etc/GMT+1</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT+10" ? "selected" : null; ?> value="Etc/GMT+10">Etc/GMT+10</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT+11" ? "selected" : null; ?> value="Etc/GMT+11">Etc/GMT+11</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT+12" ? "selected" : null; ?> value="Etc/GMT+12">Etc/GMT+12</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT+2" ? "selected" : null; ?> value="Etc/GMT+2">Etc/GMT+2</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT+3" ? "selected" : null; ?> value="Etc/GMT+3">Etc/GMT+3</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT+4" ? "selected" : null; ?> value="Etc/GMT+4">Etc/GMT+4</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT+5" ? "selected" : null; ?> value="Etc/GMT+5">Etc/GMT+5</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT+6" ? "selected" : null; ?> value="Etc/GMT+6">Etc/GMT+6</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT+7" ? "selected" : null; ?> value="Etc/GMT+7">Etc/GMT+7</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT+8" ? "selected" : null; ?> value="Etc/GMT+8">Etc/GMT+8</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT+9" ? "selected" : null; ?> value="Etc/GMT+9">Etc/GMT+9</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT-0" ? "selected" : null; ?> value="Etc/GMT-0">Etc/GMT-0</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT-1" ? "selected" : null; ?> value="Etc/GMT-1">Etc/GMT-1</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT-10" ? "selected" : null; ?> value="Etc/GMT-10">Etc/GMT-10</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT-11" ? "selected" : null; ?> value="Etc/GMT-11">Etc/GMT-11</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT-12" ? "selected" : null; ?> value="Etc/GMT-12">Etc/GMT-12</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT-13" ? "selected" : null; ?> value="Etc/GMT-13">Etc/GMT-13</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT-14" ? "selected" : null; ?> value="Etc/GMT-14">Etc/GMT-14</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT-2" ? "selected" : null; ?> value="Etc/GMT-2">Etc/GMT-2</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT-3" ? "selected" : null; ?> value="Etc/GMT-3">Etc/GMT-3</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT-4" ? "selected" : null; ?> value="Etc/GMT-4">Etc/GMT-4</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT-5" ? "selected" : null; ?> value="Etc/GMT-5">Etc/GMT-5</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT-6" ? "selected" : null; ?> value="Etc/GMT-6">Etc/GMT-6</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT-7" ? "selected" : null; ?> value="Etc/GMT-7">Etc/GMT-7</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT-8" ? "selected" : null; ?> value="Etc/GMT-8">Etc/GMT-8</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT-9" ? "selected" : null; ?> value="Etc/GMT-9">Etc/GMT-9</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/GMT0" ? "selected" : null; ?> value="Etc/GMT0">Etc/GMT0</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/Greenwich" ? "selected" : null; ?> value="Etc/Greenwich">Etc/Greenwich</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/UCT" ? "selected" : null; ?> value="Etc/UCT">Etc/UCT</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/Universal" ? "selected" : null; ?> value="Etc/Universal">Etc/Universal</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/UTC" ? "selected" : null; ?> value="Etc/UTC">Etc/UTC</option>
                            <option <?= $settings["site_default_timezone"] == "Etc/Zulu" ? "selected" : null; ?> value="Etc/Zulu">Etc/Zulu</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Amsterdam" ? "selected" : null; ?> value="Europe/Amsterdam">Europe/Amsterdam</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Andorra" ? "selected" : null; ?> value="Europe/Andorra">Europe/Andorra</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Astrakhan" ? "selected" : null; ?> value="Europe/Astrakhan">Europe/Astrakhan</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Athens" ? "selected" : null; ?> value="Europe/Athens">Europe/Athens</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Belfast" ? "selected" : null; ?> value="Europe/Belfast">Europe/Belfast</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Belgrade" ? "selected" : null; ?> value="Europe/Belgrade">Europe/Belgrade</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Berlin" ? "selected" : null; ?> value="Europe/Berlin">Europe/Berlin</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Bratislava" ? "selected" : null; ?> value="Europe/Bratislava">Europe/Bratislava</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Brussels" ? "selected" : null; ?> value="Europe/Brussels">Europe/Brussels</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Bucharest" ? "selected" : null; ?> value="Europe/Bucharest">Europe/Bucharest</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Budapest" ? "selected" : null; ?> value="Europe/Budapest">Europe/Budapest</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Busingen" ? "selected" : null; ?> value="Europe/Busingen">Europe/Busingen</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Chisinau" ? "selected" : null; ?> value="Europe/Chisinau">Europe/Chisinau</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Copenhagen" ? "selected" : null; ?> value="Europe/Copenhagen">Europe/Copenhagen</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Dublin" ? "selected" : null; ?> value="Europe/Dublin">Europe/Dublin</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Gibraltar" ? "selected" : null; ?> value="Europe/Gibraltar">Europe/Gibraltar</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Guernsey" ? "selected" : null; ?> value="Europe/Guernsey">Europe/Guernsey</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Helsinki" ? "selected" : null; ?> value="Europe/Helsinki">Europe/Helsinki</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Isle_of_Man" ? "selected" : null; ?> value="Europe/Isle_of_Man">Europe/Isle_of_Man</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Istanbul" ? "selected" : null; ?> value="Europe/Istanbul">Europe/Istanbul</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Jersey" ? "selected" : null; ?> value="Europe/Jersey">Europe/Jersey</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Kaliningrad" ? "selected" : null; ?> value="Europe/Kaliningrad">Europe/Kaliningrad</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Kiev" ? "selected" : null; ?> value="Europe/Kiev">Europe/Kiev</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Kirov" ? "selected" : null; ?> value="Europe/Kirov">Europe/Kirov</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Kyiv" ? "selected" : null; ?> value="Europe/Kyiv">Europe/Kyiv</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Lisbon" ? "selected" : null; ?> value="Europe/Lisbon">Europe/Lisbon</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Ljubljana" ? "selected" : null; ?> value="Europe/Ljubljana">Europe/Ljubljana</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/London" ? "selected" : null; ?> value="Europe/London">Europe/London</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Luxembourg" ? "selected" : null; ?> value="Europe/Luxembourg">Europe/Luxembourg</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Madrid" ? "selected" : null; ?> value="Europe/Madrid">Europe/Madrid</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Malta" ? "selected" : null; ?> value="Europe/Malta">Europe/Malta</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Mariehamn" ? "selected" : null; ?> value="Europe/Mariehamn">Europe/Mariehamn</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Minsk" ? "selected" : null; ?> value="Europe/Minsk">Europe/Minsk</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Monaco" ? "selected" : null; ?> value="Europe/Monaco">Europe/Monaco</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Moscow" ? "selected" : null; ?> value="Europe/Moscow">Europe/Moscow</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Nicosia" ? "selected" : null; ?> value="Europe/Nicosia">Europe/Nicosia</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Oslo" ? "selected" : null; ?> value="Europe/Oslo">Europe/Oslo</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Paris" ? "selected" : null; ?> value="Europe/Paris">Europe/Paris</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Podgorica" ? "selected" : null; ?> value="Europe/Podgorica">Europe/Podgorica</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Prague" ? "selected" : null; ?> value="Europe/Prague">Europe/Prague</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Riga" ? "selected" : null; ?> value="Europe/Riga">Europe/Riga</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Rome" ? "selected" : null; ?> value="Europe/Rome">Europe/Rome</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Samara" ? "selected" : null; ?> value="Europe/Samara">Europe/Samara</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/San_Marino" ? "selected" : null; ?> value="Europe/San_Marino">Europe/San_Marino</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Sarajevo" ? "selected" : null; ?> value="Europe/Sarajevo">Europe/Sarajevo</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Saratov" ? "selected" : null; ?> value="Europe/Saratov">Europe/Saratov</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Simferopol" ? "selected" : null; ?> value="Europe/Simferopol">Europe/Simferopol</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Skopje" ? "selected" : null; ?> value="Europe/Skopje">Europe/Skopje</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Sofia" ? "selected" : null; ?> value="Europe/Sofia">Europe/Sofia</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Stockholm" ? "selected" : null; ?> value="Europe/Stockholm">Europe/Stockholm</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Tallinn" ? "selected" : null; ?> value="Europe/Tallinn">Europe/Tallinn</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Tirane" ? "selected" : null; ?> value="Europe/Tirane">Europe/Tirane</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Tiraspol" ? "selected" : null; ?> value="Europe/Tiraspol">Europe/Tiraspol</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Ulyanovsk" ? "selected" : null; ?> value="Europe/Ulyanovsk">Europe/Ulyanovsk</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Uzhgorod" ? "selected" : null; ?> value="Europe/Uzhgorod">Europe/Uzhgorod</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Vaduz" ? "selected" : null; ?> value="Europe/Vaduz">Europe/Vaduz</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Vatican" ? "selected" : null; ?> value="Europe/Vatican">Europe/Vatican</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Vienna" ? "selected" : null; ?> value="Europe/Vienna">Europe/Vienna</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Vilnius" ? "selected" : null; ?> value="Europe/Vilnius">Europe/Vilnius</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Volgograd" ? "selected" : null; ?> value="Europe/Volgograd">Europe/Volgograd</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Warsaw" ? "selected" : null; ?> value="Europe/Warsaw">Europe/Warsaw</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Zagreb" ? "selected" : null; ?> value="Europe/Zagreb">Europe/Zagreb</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Zaporozhye" ? "selected" : null; ?> value="Europe/Zaporozhye">Europe/Zaporozhye</option>
                            <option <?= $settings["site_default_timezone"] == "Europe/Zurich" ? "selected" : null; ?> value="Europe/Zurich">Europe/Zurich</option>
                            <option <?= $settings["site_default_timezone"] == "Factory" ? "selected" : null; ?> value="Factory">Factory</option>
                            <option <?= $settings["site_default_timezone"] == "GB" ? "selected" : null; ?> value="GB">GB</option>
                            <option <?= $settings["site_default_timezone"] == "GB-Eire" ? "selected" : null; ?> value="GB-Eire">GB-Eire</option>
                            <option <?= $settings["site_default_timezone"] == "GMT" ? "selected" : null; ?> value="GMT">GMT</option>
                            <option <?= $settings["site_default_timezone"] == "GMT+0" ? "selected" : null; ?> value="GMT+0">GMT+0</option>
                            <option <?= $settings["site_default_timezone"] == "GMT-0" ? "selected" : null; ?> value="GMT-0">GMT-0</option>
                            <option <?= $settings["site_default_timezone"] == "GMT0" ? "selected" : null; ?> value="GMT0">GMT0</option>
                            <option <?= $settings["site_default_timezone"] == "Greenwich" ? "selected" : null; ?> value="Greenwich">Greenwich</option>
                            <option <?= $settings["site_default_timezone"] == "Hongkong" ? "selected" : null; ?> value="Hongkong">Hongkong</option>
                            <option <?= $settings["site_default_timezone"] == "HST" ? "selected" : null; ?> value="HST">HST</option>
                            <option <?= $settings["site_default_timezone"] == "Iceland" ? "selected" : null; ?> value="Iceland">Iceland</option>
                            <option <?= $settings["site_default_timezone"] == "Indian/Antananarivo" ? "selected" : null; ?> value="Indian/Antananarivo">Indian/Antananarivo</option>
                            <option <?= $settings["site_default_timezone"] == "Indian/Chagos" ? "selected" : null; ?> value="Indian/Chagos">Indian/Chagos</option>
                            <option <?= $settings["site_default_timezone"] == "Indian/Christmas" ? "selected" : null; ?> value="Indian/Christmas">Indian/Christmas</option>
                            <option <?= $settings["site_default_timezone"] == "Indian/Cocos" ? "selected" : null; ?> value="Indian/Cocos">Indian/Cocos</option>
                            <option <?= $settings["site_default_timezone"] == "Indian/Comoro" ? "selected" : null; ?> value="Indian/Comoro">Indian/Comoro</option>
                            <option <?= $settings["site_default_timezone"] == "Indian/Kerguelen" ? "selected" : null; ?> value="Indian/Kerguelen">Indian/Kerguelen</option>
                            <option <?= $settings["site_default_timezone"] == "Indian/Mahe" ? "selected" : null; ?> value="Indian/Mahe">Indian/Mahe</option>
                            <option <?= $settings["site_default_timezone"] == "Indian/Maldives" ? "selected" : null; ?> value="Indian/Maldives">Indian/Maldives</option>
                            <option <?= $settings["site_default_timezone"] == "Indian/Mauritius" ? "selected" : null; ?> value="Indian/Mauritius">Indian/Mauritius</option>
                            <option <?= $settings["site_default_timezone"] == "Indian/Mayotte" ? "selected" : null; ?> value="Indian/Mayotte">Indian/Mayotte</option>
                            <option <?= $settings["site_default_timezone"] == "Indian/Reunion" ? "selected" : null; ?> value="Indian/Reunion">Indian/Reunion</option>
                            <option <?= $settings["site_default_timezone"] == "Iran" ? "selected" : null; ?> value="Iran">Iran</option>
                            <option <?= $settings["site_default_timezone"] == "Israel" ? "selected" : null; ?> value="Israel">Israel</option>
                            <option <?= $settings["site_default_timezone"] == "Jamaica" ? "selected" : null; ?> value="Jamaica">Jamaica</option>
                            <option <?= $settings["site_default_timezone"] == "Japan" ? "selected" : null; ?> value="Japan">Japan</option>
                            <option <?= $settings["site_default_timezone"] == "Kwajalein" ? "selected" : null; ?> value="Kwajalein">Kwajalein</option>
                            <option <?= $settings["site_default_timezone"] == "Libya" ? "selected" : null; ?> value="Libya">Libya</option>
                            <option <?= $settings["site_default_timezone"] == "MET" ? "selected" : null; ?> value="MET">MET</option>
                            <option <?= $settings["site_default_timezone"] == "Mexico/BajaNorte" ? "selected" : null; ?> value="Mexico/BajaNorte">Mexico/BajaNorte</option>
                            <option <?= $settings["site_default_timezone"] == "Mexico/BajaSur" ? "selected" : null; ?> value="Mexico/BajaSur">Mexico/BajaSur</option>
                            <option <?= $settings["site_default_timezone"] == "Mexico/General" ? "selected" : null; ?> value="Mexico/General">Mexico/General</option>
                            <option <?= $settings["site_default_timezone"] == "MST" ? "selected" : null; ?> value="MST">MST</option>
                            <option <?= $settings["site_default_timezone"] == "MST7MDT" ? "selected" : null; ?> value="MST7MDT">MST7MDT</option>
                            <option <?= $settings["site_default_timezone"] == "Navajo" ? "selected" : null; ?> value="Navajo">Navajo</option>
                            <option <?= $settings["site_default_timezone"] == "NZ" ? "selected" : null; ?> value="NZ">NZ</option>
                            <option <?= $settings["site_default_timezone"] == "NZ-CHAT" ? "selected" : null; ?> value="NZ-CHAT">NZ-CHAT</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Apia" ? "selected" : null; ?> value="Pacific/Apia">Pacific/Apia</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Auckland" ? "selected" : null; ?> value="Pacific/Auckland">Pacific/Auckland</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Bougainville" ? "selected" : null; ?> value="Pacific/Bougainville">Pacific/Bougainville</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Chatham" ? "selected" : null; ?> value="Pacific/Chatham">Pacific/Chatham</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Chuuk" ? "selected" : null; ?> value="Pacific/Chuuk">Pacific/Chuuk</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Easter" ? "selected" : null; ?> value="Pacific/Easter">Pacific/Easter</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Efate" ? "selected" : null; ?> value="Pacific/Efate">Pacific/Efate</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Enderbury" ? "selected" : null; ?> value="Pacific/Enderbury">Pacific/Enderbury</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Fakaofo" ? "selected" : null; ?> value="Pacific/Fakaofo">Pacific/Fakaofo</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Fiji" ? "selected" : null; ?> value="Pacific/Fiji">Pacific/Fiji</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Funafuti" ? "selected" : null; ?> value="Pacific/Funafuti">Pacific/Funafuti</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Galapagos" ? "selected" : null; ?> value="Pacific/Galapagos">Pacific/Galapagos</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Gambier" ? "selected" : null; ?> value="Pacific/Gambier">Pacific/Gambier</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Guadalcanal" ? "selected" : null; ?> value="Pacific/Guadalcanal">Pacific/Guadalcanal</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Guam" ? "selected" : null; ?> value="Pacific/Guam">Pacific/Guam</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Honolulu" ? "selected" : null; ?> value="Pacific/Honolulu">Pacific/Honolulu</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Johnston" ? "selected" : null; ?> value="Pacific/Johnston">Pacific/Johnston</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Kanton" ? "selected" : null; ?> value="Pacific/Kanton">Pacific/Kanton</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Kiritimati" ? "selected" : null; ?> value="Pacific/Kiritimati">Pacific/Kiritimati</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Kosrae" ? "selected" : null; ?> value="Pacific/Kosrae">Pacific/Kosrae</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Kwajalein" ? "selected" : null; ?> value="Pacific/Kwajalein">Pacific/Kwajalein</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Majuro" ? "selected" : null; ?> value="Pacific/Majuro">Pacific/Majuro</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Marquesas" ? "selected" : null; ?> value="Pacific/Marquesas">Pacific/Marquesas</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Midway" ? "selected" : null; ?> value="Pacific/Midway">Pacific/Midway</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Nauru" ? "selected" : null; ?> value="Pacific/Nauru">Pacific/Nauru</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Niue" ? "selected" : null; ?> value="Pacific/Niue">Pacific/Niue</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Norfolk" ? "selected" : null; ?> value="Pacific/Norfolk">Pacific/Norfolk</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Noumea" ? "selected" : null; ?> value="Pacific/Noumea">Pacific/Noumea</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Pago_Pago" ? "selected" : null; ?> value="Pacific/Pago_Pago">Pacific/Pago_Pago</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Palau" ? "selected" : null; ?> value="Pacific/Palau">Pacific/Palau</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Pitcairn" ? "selected" : null; ?> value="Pacific/Pitcairn">Pacific/Pitcairn</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Pohnpei" ? "selected" : null; ?> value="Pacific/Pohnpei">Pacific/Pohnpei</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Ponape" ? "selected" : null; ?> value="Pacific/Ponape">Pacific/Ponape</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Port_Moresby" ? "selected" : null; ?> value="Pacific/Port_Moresby">Pacific/Port_Moresby</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Rarotonga" ? "selected" : null; ?> value="Pacific/Rarotonga">Pacific/Rarotonga</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Saipan" ? "selected" : null; ?> value="Pacific/Saipan">Pacific/Saipan</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Samoa" ? "selected" : null; ?> value="Pacific/Samoa">Pacific/Samoa</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Tahiti" ? "selected" : null; ?> value="Pacific/Tahiti">Pacific/Tahiti</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Tarawa" ? "selected" : null; ?> value="Pacific/Tarawa">Pacific/Tarawa</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Tongatapu" ? "selected" : null; ?> value="Pacific/Tongatapu">Pacific/Tongatapu</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Truk" ? "selected" : null; ?> value="Pacific/Truk">Pacific/Truk</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Wake" ? "selected" : null; ?> value="Pacific/Wake">Pacific/Wake</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Wallis" ? "selected" : null; ?> value="Pacific/Wallis">Pacific/Wallis</option>
                            <option <?= $settings["site_default_timezone"] == "Pacific/Yap" ? "selected" : null; ?> value="Pacific/Yap">Pacific/Yap</option>
                            <option <?= $settings["site_default_timezone"] == "Poland" ? "selected" : null; ?> value="Poland">Poland</option>
                            <option <?= $settings["site_default_timezone"] == "Portugal" ? "selected" : null; ?> value="Portugal">Portugal</option>
                            <option <?= $settings["site_default_timezone"] == "PRC" ? "selected" : null; ?> value="PRC">PRC</option>
                            <option <?= $settings["site_default_timezone"] == "PST8PDT" ? "selected" : null; ?> value="PST8PDT">PST8PDT</option>
                            <option <?= $settings["site_default_timezone"] == "ROC" ? "selected" : null; ?> value="ROC">ROC</option>
                            <option <?= $settings["site_default_timezone"] == "ROK" ? "selected" : null; ?> value="ROK">ROK</option>
                            <option <?= $settings["site_default_timezone"] == "Singapore" ? "selected" : null; ?> value="Singapore">Singapore</option>
                            <option <?= $settings["site_default_timezone"] == "Turkey" ? "selected" : null; ?> value="Turkey">Turkey</option>
                            <option <?= $settings["site_default_timezone"] == "UCT" ? "selected" : null; ?> value="UCT">UCT</option>
                            <option <?= $settings["site_default_timezone"] == "Universal" ? "selected" : null; ?> value="Universal">Universal</option>
                            <option <?= $settings["site_default_timezone"] == "US/Alaska" ? "selected" : null; ?> value="US/Alaska">US/Alaska</option>
                            <option <?= $settings["site_default_timezone"] == "US/Aleutian" ? "selected" : null; ?> value="US/Aleutian">US/Aleutian</option>
                            <option <?= $settings["site_default_timezone"] == "US/Arizona" ? "selected" : null; ?> value="US/Arizona">US/Arizona</option>
                            <option <?= $settings["site_default_timezone"] == "US/Central" ? "selected" : null; ?> value="US/Central">US/Central</option>
                            <option <?= $settings["site_default_timezone"] == "US/East-Indiana" ? "selected" : null; ?> value="US/East-Indiana">US/East-Indiana</option>
                            <option <?= $settings["site_default_timezone"] == "US/Eastern" ? "selected" : null; ?> value="US/Eastern">US/Eastern</option>
                            <option <?= $settings["site_default_timezone"] == "US/Hawaii" ? "selected" : null; ?> value="US/Hawaii">US/Hawaii</option>
                            <option <?= $settings["site_default_timezone"] == "US/Indiana-Starke" ? "selected" : null; ?> value="US/Indiana-Starke">US/Indiana-Starke</option>
                            <option <?= $settings["site_default_timezone"] == "US/Michigan" ? "selected" : null; ?> value="US/Michigan">US/Michigan</option>
                            <option <?= $settings["site_default_timezone"] == "US/Mountain" ? "selected" : null; ?> value="US/Mountain">US/Mountain</option>
                            <option <?= $settings["site_default_timezone"] == "US/Pacific" ? "selected" : null; ?> value="US/Pacific">US/Pacific</option>
                            <option <?= $settings["site_default_timezone"] == "US/Samoa" ? "selected" : null; ?> value="US/Samoa">US/Samoa</option>
                            <option <?= $settings["site_default_timezone"] == "UTC" ? "selected" : null; ?> value="UTC">UTC</option>
                            <option <?= $settings["site_default_timezone"] == "W-SU" ? "selected" : null; ?> value="W-SU">W-SU</option>
                            <option <?= $settings["site_default_timezone"] == "WET" ? "selected" : null; ?> value="WET">WET</option>
                            <option <?= $settings["site_default_timezone"] == "Zulu" ? "selected" : null; ?> value="Zulu">Zulu</option>
                        </select>


                        <!--<select class="form-select" name="timezone">
                            <?php
                            /*foreach ($timezones as $timezoneKey => $timezoneVal) {
                                if ($settings["site_timezone"] == $timezoneVal["timezone"]) {
                                    echo '<option selected value="' . $timezoneVal["timezone"] . '">' . $timezoneVal["label"] . '</option>';
                                } else {
                                    echo '<option value="' . $timezoneVal["timezone"] . '">' . $timezoneVal["label"] . '</option>';
                                }
                            }*/

                            ?>
                        </select>-->
                    </div>
                    <div class="col-6">
                        <strong>Bakım Modu</strong>
                        <select class="form-select" name="site_maintenance">
                            <option value="1" <?= $settings["site_maintenance"] == 1 ? "selected" : null; ?>>Açık</option>
                            <option value="2" <?= $settings["site_maintenance"] == 2 ? "selected" : null; ?>>Kapalı
                            </option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <strong>Destek Sistemi</strong>
                        <select class="form-select" name="ticket_system">
                            <option value="2" <?= $settings["ticket_system"] == 2 ? "selected" : null; ?>>Açık</option>
                            <option value="1" <?= $settings["ticket_system"] == 1 ? "selected" : null; ?>>Kapalı</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <strong>Aktif Max Ticket</strong>
                        <select class="form-select" name="max_ticket">
                            <option value="1" <?= $settings["max_ticket"] == 1 ? "selected" : null; ?>>1</option>
                            <option value="2" <?= $settings["max_ticket"] == 2 ? "selected" : null; ?>>2 (Önerilen)</option>
                            <option value="3" <?= $settings["max_ticket"] == 3 ? "selected" : null; ?>>3</option>
                            <option value="4" <?= $settings["max_ticket"] == 4 ? "selected" : null; ?>>4</option>
                            <option value="5" <?= $settings["max_ticket"] == 5 ? "selected" : null; ?>>5</option>
                            <option value="6" <?= $settings["max_ticket"] == 6 ? "selected" : null; ?>>6</option>
                            <option value="7" <?= $settings["max_ticket"] == 7 ? "selected" : null; ?>>7</option>
                            <option value="8" <?= $settings["max_ticket"] == 8 ? "selected" : null; ?>>8</option>
                            <option value="9" <?= $settings["max_ticket"] == 9 ? "selected" : null; ?>>9</option>
                            <option value="99" <?= $settings["max_ticket"] == 99 ? "selected" : null; ?>>Sınırsız</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <strong>Yeni Üyelik</strong>
                        <select class="form-select" name="registration_page">
                            <option value="2" <?= $settings["register_page"] == 2 ? "selected" : null; ?>>Açık</option>
                            <option value="1" <?= $settings["register_page"] == 1 ? "selected" : null; ?>>Kapalı</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <strong>Numara Alanı</strong>
                        <select class="form-select" name="skype_area">
                            <option value="2" <?= $settings["skype_area"] == 2 ? "selected" : null; ?>>Aktif</option>
                            <option value="1" <?= $settings["skype_area"] == 1 ? "selected" : null; ?>>Pasif</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <strong>İsim Alanı</strong>
                        <select class="form-select" name="name_secret">
                            <option value="2" <?= $settings["name_secret"] == 2 ? "selected" : null; ?>>Aktif</option>
                            <option value="1" <?= $settings["name_secret"] == 1 ? "selected" : null; ?>>Pasif</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <strong>Kayıt Sözleşmesi</strong>
                        <select class="form-select" name="terms_checkbox">
                            <option value="2" <?= $settings["terms_checkbox"] == 2 ? "selected" : null; ?>>Aktif</option>
                            <option value="1" <?= $settings["terms_checkbox"] == 1 ? "selected" : null; ?>>Pasif</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <strong>Sipariş Sözleşmesi</strong>
                        <select class="form-select" name="neworder_terms">
                            <option value="2" <?= $settings["neworder_terms"] == 2 ? "selected" : null; ?>>Aktif</option>
                            <option value="1" <?= $settings["neworder_terms"] == 1 ? "selected" : null; ?>>Pasif</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <strong>Şifremi Unuttum</strong>
                        <select class="form-select" name="resetpass">
                            <option value="2" <?= $settings["resetpass_page"] == 2 ? "selected" : null; ?>>Aktif</option>
                            <option value="1" <?= $settings["resetpass_page"] == 1 ? "selected" : null; ?>>Pasif</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <strong>Servis Listesi</strong>
                        <select class="form-select" name="service_list">
                            <option value="2" <?php if ($settings["service_list"] == 2) {
                                                    echo "selected";
                                                } ?>>Herkese açık</option>
                            <option value="1" <?php if ($settings["service_list"] == 1) {
                                                    echo "selected";
                                                } ?>>Sadece üyeler</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <strong>Otomatik Refill</strong>
                        <select class="form-select" name="auto_refill">
                            <option value="2" <?php if ($settings["auto_refill"] == 2) {
                                                    echo "selected";
                                                } ?>>Aktif</option>
                            <option value="1" <?php if ($settings["auto_refill"] == 1) {
                                                    echo "selected";
                                                } ?>>Pasif</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <strong>Ortalama tamamlanma süreleri</strong>
                        <select class="form-select" name="avarage">
                            <option value="2" <?php if ($settings["avarage"] == 2) {
                                                    echo "selected";
                                                } ?>>Aktif</option>
                            <option value="1" <?php if ($settings["avarage"] == 1) {
                                                    echo "selected";
                                                } ?>>Pasif</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <strong>Sağlayıcı Değişen Servis</strong>
                        <select class="form-select" name="ser_sync">
                            <option value="2" <?= $settings["ser_sync"] == 2 ? "selected" : null; ?>>Sadece Uyar</option>
                            <option value="1" <?= $settings["ser_sync"] == 1 ? "selected" : null; ?>>Uyar & Servisi Pasifleştir</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <strong>SMS Doğrulama</strong>
                        <select class="form-select" name="sms_verify">
                            <option value="2" <?= $settings["sms_verify"] == 2 ? "selected" : null; ?>>Aktif</option>
                            <option value="1" <?= $settings["sms_verify"] == 1 ? "selected" : null; ?>>Pasif</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <strong>Mail Doğrulama</strong>
                        <select class="form-select" name="mail_verify">
                            <option value="2" <?php if ($settings["mail_verify"] == 2) {
                                                    echo "selected";
                                                } ?>>Aktif</option>
                            <option value="1" <?php if ($settings["mail_verify"] == 1) {
                                                    echo "selected";
                                                } ?>>Pasif</option>
                        </select>
                    </div>
                </div>
                <hr>
				<div class="row">
					<div class="col-md-4">
						<strong>Sipariş Başlangıç <i class="fas fa-question-circle"  data-bs-toggle="tooltip" data-bs-placement="top" title="Bu özellik sayesinde sipariş sayınızın başlangıcını arttırabilirsiniz."></i></strong>
                            <input type="text" class="form-control" name="siparis_baslangic" value="<?= $baslangic['orderid'] ?>">
                	</div>
					<div class="col-md-4">
                    	<strong>Müşteri Başlangıç <i class="fas fa-question-circle"  data-bs-toggle="tooltip" data-bs-placement="top" title="Bu özellik sayesinde müşteri sayınızın başlangıcını arttırabilirsiniz."></i></strong>
						<input type="text" class="form-control" name="musteri_baslangic" value="<?= $baslangic['clientid'] ?>">
                	</div>
					<div class="col-md-4">
                    	<strong>Servis Başlangıç <i class="fas fa-question-circle"  data-bs-toggle="tooltip" data-bs-placement="top" title="Bu özellik sayesinde servis sayınızın başlangıcını arttırabilirsiniz."></i></strong>
						<input type="text" class="form-control" name="servis_baslangic" value="<?= $baslangic['serviceid'] ?>">
                	</div>
				</div>
                <div class="bg-glycon bg-gradient fw-bold rounded p-2 text-white text-center m-0 mb-2">1 kere güncelledikten sonra yeni veri eklenince bu alan da otomatik güncellenecektir, veri eklendikten (arttırıldıktan) sonra tekrar değeri düşürülemez.</div>
                <br>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <strong>Header Kod Alanı <i class="fas fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Bu alana gireceğiniz kodlar temanın üst kısmında yer alır."></i></strong>
                        <div>
                            <textarea class="form-control" name="custom_header" id="exampleFormControlTextarea1" rows="3"><?= $settings["custom_header"] ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <strong>Footer Kod Alanı <i class="fas fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Bu alana gireceğiniz kodlar temanın alt kısmında yer alır."></i></strong>
                        <div>
                            <textarea class="form-control" name="custom_footer" id="exampleFormControlTextarea1" rows="3"><?= $settings["custom_footer"] ?></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <strong>Google Ads Veri Gönderme (Her yer) <i class="fas fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Bu alana gireceğiniz kodlar Google adsye siteye giren herkesin verisini yollar."></i></strong>
                        <div>
                            <textarea class="form-control" name="google_ads_all" id="exampleFormControlTextarea1" rows="3"><?= $settings["google_ads_all"] ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <strong>Google Ads Veri Gönderme (Sadece Siparişler) <i class="fas fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Bu alana gireceğiniz kodlar Google adsye sitenizden sipariş veren herkesin verisini yollar ."></i></strong>
                        <div>
                            <textarea class="form-control" name="google_ads_odeme" id="exampleFormControlTextarea1" rows="3"><?= $settings["google_ads_odeme"] ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <strong>Referans Komisyon Oranı:</strong>
                        <div>
                            <input class="form-control" value="<?= $settings["ref_bonus"] ?>" name="ref_bonus" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <strong>Referans Minimum Ödeme Eşiği:</strong>
                        <div>
                            <input class="form-control" name="ref_max" value="<?= $settings["ref_max"] ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <strong>111.XXXX (Kaç X sonrası gösterilmesin?):</strong>
                        <div>
                            <input class="form-control" name="price_rlimit" value="<?= $settings["price_rlimit"] ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <strong>Fiyat Yuvarlama Sistemi</strong>
                        <select class="form-select" name="price_round">
                            <option value="0" <?php if ($settings["price_round"] == 0) {
                                echo "selected";
                            } ?>>Pasif</option>
                            <option value="1" <?php if ($settings["price_round"] == 1) {
                                echo "selected";
                            } ?>>Aktif</option>
                        </select>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <strong>Güncelleme Sistemi (Son kaç güncelleme gösterilsin?):</strong>
                        <div>
                            <input class="form-control" name="up_limiti" value="<?= $settings["up_limiti"] ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <strong>Proxy Sistemi (Satın almazsanız çalışmaz):</strong>
                        <select class="form-select" name="proxy_mode">
                            <option value="0" <?php if ($settings["proxy_mode"] == 0) {
                                                    echo "selected";
                                                } ?>>Pasif</option>
                            <option value="1" <?php if ($settings["proxy_mode"] == 1) {
                                                    echo "selected";
                                                } ?>>Aktif</option>
                        </select>

                    </div>
                </div>

                <button class="btn btn-primary">Güncelle</button>
            </form>
        </div>
    </div>
</div>