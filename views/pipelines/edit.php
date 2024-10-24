<?php 
// Caminho: /public_html/modules/multi_pipeline/views/pipelines/edit.php

defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel_s">
                    <div class="panel-body">
                        <h4 class="no-margin"><?php echo _l('edit_pipeline'); ?></h4>
                        <hr class="hr-panel-heading" />
                        <?php echo form_open(admin_url('multi_pipeline/pipelines/edit/' . $pipeline['id'])); ?>
                        <div class="form-group">
                            <label for="name"><?php echo _l('pipeline_name'); ?></label>
                            <input type="text" class="form-control" name="name" value="<?php echo set_value('name', $pipeline['name']); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="description"><?php echo _l('pipeline_description'); ?></label>
                            <textarea class="form-control" name="description"><?php echo set_value('description', $pipeline['description']); ?></textarea>
                        </div>

                        <!-- Adicionando os campos de seleção de membros e funções -->
                        <div class="form-group">
    <label for="staff_ids">Atribuir a Membros da Equipe</label>
    <select name="staff_ids[]" class="form-control" multiple>
        <?php foreach ($staff_and_roles['staff'] as $staff): ?>
            <option value="<?php echo $staff['staffid']; ?>"><?php echo $staff['firstname'] . ' ' . $staff['lastname']; ?></option>
        <?php endforeach; ?>
    </select>
</div>

<div class="form-group">
    <label for="role_ids">Atribuir a Funções</label>
    <select name="role_ids[]" class="form-control" multiple>
        <?php foreach ($staff_and_roles['roles'] as $role): ?>
            <option value="<?php echo $role['roleid']; ?>"><?php echo $role['name']; ?></option>
        <?php endforeach; ?>
    </select>
</div>

                        <button type="submit" class="btn btn-primary"><?php echo _l('submit'); ?></button>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php init_tail(); ?>
