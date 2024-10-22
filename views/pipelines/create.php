<?php 
// Caminho: /public_html/modules/multi_pipeline/views/pipelines/create.php

defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel_s">
                    <div class="panel-body">
                        <h4 class="no-margin">
                            <?php echo _l('create_pipeline'); ?>
                        </h4>
                        <hr class="hr-panel-heading" />
                        <?php echo form_open(admin_url('multi_pipeline/create_pipeline')); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <?php echo render_input('name', 'pipeline_name'); ?>
                            </div>
                            <div class="col-md-6">
                                <?php echo render_textarea('description', 'pipeline_description'); ?>
                            </div>
                        </div>

                        <!-- Adicionando os campos de seleção de membros e funções -->
                        <div class="form-group">
    <label for="assigned"><?php echo _l('assigned'); ?></label>
    <select name="assigned" id="assigned" class="form-control selectpicker" data-live-search="true">
        <option value=""><?php echo _l('none'); ?></option>
        <?php foreach($staff as $member){ ?>
            <option value="<?php echo $member['staffid']; ?>"><?php echo $member['firstname'] . ' ' . $member['lastname']; ?></option>
        <?php } ?>
    </select>
</div>

<div class="form-group">
    <label for="roles"><?php echo _l('roles'); ?></label>
    <select name="roles[]" id="roles" class="form-control selectpicker" multiple data-live-search="true">
        <?php foreach($roles as $role){ ?>
            <option value="<?php echo $role['roleid']; ?>"><?php echo $role['name']; ?></option>
        <?php } ?>
    </select>
</div>

                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">
                                    <?php echo _l('submit'); ?>
                                </button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php init_tail(); ?>
<script>
$(function() {
    appValidateForm($('form'), {
        name: 'required',
    });
});
</script>
<script>
$(function() {
    $('.selectpicker').selectpicker();
});
</script>
