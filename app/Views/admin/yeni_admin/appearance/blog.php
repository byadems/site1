<?php if (!route(4)): ?>
    <div class="col-md-10">
         <?php if( $success ): ?>
          <div class="alert alert-success "><?php echo $successText; ?></div>
        <?php endif; ?>
           <?php if( $error ): ?>
          <div class="alert alert-danger "><?php echo $errorText; ?></div>
        <?php endif; ?>
        <div class="card">
            <div class="card-header p-0">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="card-header-title"><?= lang('Admin.blog'); ?></div>
                        <a href="javascript:;" onclick="showMe('gizlebeni');" class="btn-glycon btn-glycon-success btn-card-header"><i class="fas fa-plus"></i>
                            <?= lang('Admin.create_new_post'); ?></a>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table border table-striped m-0">
                    <thead class="card-glycon text-white">
                    <tr>
                        <th><?= lang('Admin.blogname'); ?></th>
                        <th><?= lang('Admin.blogdate'); ?></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody class="icon-animation">
                    <?php foreach($postList as $post): ?>
                    <tr>
                        <td><?php echo $post["blog_title"]; ?> <a href="<?= base_url()?>/blog/<?php echo $post["url"]; ?> " class="order-link" target="_blank">
                                <span class="fa fa-external-link"></span>
                            </a></td>
                        <td><?php echo $post["blog_created"]; ?></td>
                        <td>
                            <a href="<?php echo base_url($settings['adminkey'].'/appearance/blog/edit/'.$post["id"]) ?>" class="btn btn-glycon py-0">
                                <?= lang('Admin.edit'); ?>
                            </a>
                            <a href="<?php echo base_url($settings['adminkey'].'/appearance/blog/delete/'.$post["id"]) ?>" class="btn btn-glycon py-0">
                                <?= lang('Admin.delete'); ?>
                            </a>
                        </td>
                    </tr>
    <?php endforeach; ?>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<div class="col-md-12">
    <div class="panel panel-default" id="gizlebeni" style="display: none;">
    <div class="card">
  <div class="card-body">

   <form action="<?php echo base_url($settings['adminkey'].'/appearance/blog') ?>" method="post" enctype="multipart/form-data">

     <div class="form-group relative">
      <div class="row">
        <div class="col-md-10">
          <label for="preferenceLogo" class="control-label"><?= lang('Admin.blogimage'); ?></label>
          <input type="file" name="logo" id="preferenceLogo">
          <p class="help-block"><?= lang('Admin.blogimagedetail'); ?></p>
        </div>
        <div class="col-md-2">
        </div>
      </div>
    </div>

    <div class="form-group ">
      <label for="" class="control-label"><?= lang('Admin.blogname'); ?></label>
      <input type="text" class="form-control" name="name">
    </div>

    <div class="form-group">
     <label class="control-label"><?= lang('Admin.blogcontent'); ?></label>
     <textarea class="form-control" id="editor" rows="5" name="content" placeholder=""></textarea>
   </div>

   <button type="submit" class="btn btn-primary"><?= lang('Admin.add'); ?></button>
   <a href="<?= base_url()?>/<?= $settings['adminkey']; ?>/appearance/blog" class="btn btn-default"><?= lang('Admin.back'); ?></a>
 </form>

</div>
</div>
    </div>
</div>
<script type="text/javascript">
// göster/gizle
function showMe(blockId) {
     if ( document.getElementById(blockId).style.display == 'none' ) {
          document.getElementById(blockId).style.display = ''; }
else if ( document.getElementById(blockId).style.display == '' ) {
          document.getElementById(blockId).style.display = 'none'; }
}
</script>
<?php elseif( route(4) == "edit" ): ?>
<div class="col-md-10">
    <div class="panel panel-default" id="gizlebeni">
    <div class="card">
  <div class="card-body">

   <form action="<?php echo base_url($settings['adminkey'].'/appearance/blog/edit/'.route(5)) ?>" method="post" enctype="multipart/form-data">

     <div class="form-group relative">
      <div class="row">
        <div class="col-md-10">
          <label for="preferenceLogo" class="control-label"><?= lang('Admin.blogimage'); ?></label>
          <input type="file" name="logo" id="preferenceLogo">
          <p class="help-block"><?= lang('Admin.blogimagedetail'); ?></p>
        </div>
          <div class="col-md-2">
              <?php if( $post["blog_image"] ):  ?>
                <div class="setting-block__image">
                      <img class="img-thumbnail" src="<?=base_url('assets/uploads/blog/'.$post["blog_image"])?>">
                    <div class="setting-block__image-remove">
                      <a href="" data-bs-toggle="modal" data-bs-target="#confirmChange" data-href="<?=base_url($settings['adminkey']."/appearance/blog/delete-image")?>"><span class="fa fa-remove"></span></a>
                    </div>
                </div>
              <?php endif; ?>
            </div>
      </div>
    </div>

    <div class="form-group ">
      <label for="" class="control-label"><?= lang('Admin.blogname'); ?></label>
      <input type="text" class="form-control" name="name" value="<?=$post["blog_title"]?>">
    </div>

    <div class="form-group">
     <label class="control-label"><?= lang('Admin.blogcontent'); ?></label>
     <textarea class="form-control" id="editor" rows="5" name="content" placeholder=""><?php echo $post["blog_content"]; ?></textarea>
   </div>

   <button type="submit" class="btn btn-primary"><?= lang('Admin.update'); ?></button>
   <a href="<?= base_url()?>/<?= $settings['adminkey']; ?>/appearance/blog" class="btn btn-default"><?= lang('Admin.back'); ?></a>
 </form>

</div>
</div>
    </div>
</div>
<?php
endif; ?>