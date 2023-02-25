<?php require_once 'header.php'; ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ayarlari Guncelle<small>Site ayarlarini guncelleyip kaydedin</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

                    <!--id="demo-form2" data-parsley-validate-->

                    <?php 

                    $sql=$db->prepare("SELECT * FROM ayar WHERE ayar_id=:id");
                    
                    //$sql->execute(array('id' => 1));
                    $sql->execute(
                      [
                        'id' => 1
                      ]
                    );

                    $ayarcek=$sql->fetch(PDO::FETCH_ASSOC);

                    //echo "<pre>";
                    //print_r($ayarcek);
                    //echo "</pre>";

                     ?>

                     <?php 

                     //echo '<pre>';
                     //print_r($_GET);
                     //echo "</pre";
                     //echo "<pre>";
                    // print_r($_SESSION);

                     if ($_SESSION['durum']==ok) {?>
                      <div class="alert alert-success">
                       <p>Guncelleme Basarilidir</p>
                     </div>
                      
                     <?php 
                     unset($_SESSION['durum']);
                   }

                     else if ($_SESSION['durum']==no) { ?>

                      <div class="alert alert-danger">
                       <p>Guncelleme Basarisizdir</p>
                     </div>

                    <?php unset($_SESSION['durum']);
                     }

                      ?>

                     

                    <form action="../netting/islem.php" class="form-horizontal form-label-left" method="POST">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Basligi <span class="required">*</span>
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="ayar_title" 
                      placeholder="Içerik bilgisi:" value="<?php echo $ayarcek['ayar_title']; ?>" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Açiklamasi <span class="required">*</span>
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                       <!-- <input type="text" name="ayar_description" 
                      placeholder="Içerik bilgisi:" value="" required class="form-control col-md-7 col-xs-12">-->
                      <textarea class="form-control" required name="ayar_description"><?php echo $ayarcek['ayar_description']; ?></textarea>
                        </div>
                      </div>

                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yazar <span class="required">*</span>
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="ayar_author" value="<?php echo $ayarcek['ayar_author']; ?>" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sabit Tel <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="ayar_tel" value="<?php echo $ayarcek['ayar_tel']; ?>" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">GSM Tel <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="ayar_gsm" value="<?php echo $ayarcek['ayar_gsm']; ?>" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Fax <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="ayar_faks" value="<?php echo $ayarcek['ayar_faks']; ?>" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">E-mail <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="mail" name="ayar_mail" value="<?php echo $ayarcek['ayar_mail']; ?>" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ilçe <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="ayar_ilce" value="<?php echo $ayarcek['ayar_ilce']; ?>" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ii <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="ayar_il" value="<?php echo $ayarcek['ayar_il']; ?>" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Adres <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                       <!-- <input type="text" name="ayar_description" 
                      placeholder="Içerik bilgisi:" value="" required class="form-control col-md-7 col-xs-12">-->
                      <textarea class="form-control" required name="ayar_adres"><?php echo $ayarcek['ayar_adres']; ?></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mesai <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="ayar_mesai" value="<?php echo $ayarcek['ayar_mesai']; ?>" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Maps API Google <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                       <!-- <input type="text" name="ayar_description" 
                      placeholder="Içerik bilgisi:" value="" required class="form-control col-md-7 col-xs-12">-->
                      <textarea class="form-control" name="ayar_maps"><?php echo $ayarcek['ayar_maps']; ?></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Google Analistic <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                       <!-- <input type="text" name="ayar_description" 
                      placeholder="Içerik bilgisi:" value="" required class="form-control col-md-7 col-xs-12">-->
                      <textarea class="form-control" name="ayar_analystic"><?php echo $ayarcek['ayar_analystic']; ?></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Zopim <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                       <!-- <input type="text" name="ayar_description" 
                      placeholder="Içerik bilgisi:" value="" required class="form-control col-md-7 col-xs-12">-->
                      <textarea class="form-control" name="ayar_zopin"><?php echo $ayarcek['ayar_zopin']; ?></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Facebook <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="ayar_facebook" value="<?php echo $ayarcek['ayar_facebook']; ?>" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Twitter <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="ayar_twitter" value="<?php echo $ayarcek['ayar_twitter']; ?>" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Google <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="ayar_google" value="<?php echo $ayarcek['ayar_google']; ?>" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">YouTube <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="ayar_youtube" value="<?php echo $ayarcek['ayar_youtube']; ?>" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SMTP Host <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="ayar_smtphost" value="<?php echo $ayarcek['ayar_smtphost']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SMTP Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="password" name=" ayar_smtppassword" value="<?php echo $ayarcek['ayar_smtppassword']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SMTP Port <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="ayar_smtpport" value="<?php echo $ayarcek['ayar_smtpport']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


   
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         
                          <button type="submit" name="ayar_kaydet" class="btn btn-primary">Kaydet</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

            
          </div>
        </div>
        <!-- /page content -->
<?php require_once 'footer.php'; ?>
 