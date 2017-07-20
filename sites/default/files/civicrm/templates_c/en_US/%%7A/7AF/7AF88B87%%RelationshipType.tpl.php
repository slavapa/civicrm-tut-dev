<?php /* Smarty version 2.6.27, created on 2017-07-18 20:31:48
         compiled from CRM/Admin/Form/RelationshipType.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Admin/Form/RelationshipType.tpl', 1, false),array('block', 'ts', 'CRM/Admin/Form/RelationshipType.tpl', 32, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-block crm-form-block crm-relationship-type-form-block">
      <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
  <?php if ($this->_tpl_vars['action'] == 8): ?>
      <div class="messages status no-popup">
          <div class="icon inform-icon"></div>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>WARNING: Deleting this option will result in the loss of all Relationship records of this type.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This may mean the loss of a substantial amount of data, and the action cannot be undone.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Do you want to continue?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>


      </div>
     <?php else: ?>
      <table class="form-layout-compressed">
            <tr class="crm-relationship-type-form-block-label_a_b">
                <td class="label"><?php echo $this->_tpl_vars['form']['label_a_b']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_relationship_type','field' => 'label_a_b','id' => $this->_tpl_vars['relationship_type_id'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
                <td><?php echo $this->_tpl_vars['form']['label_a_b']['html']; ?>
<br />
                <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Label for the relationship from Contact A to Contact B. EXAMPLE: Contact A is 'Parent of' Contact B.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
            </tr>
            <tr class="crm-relationship-type-form-block-label_b_a">
                <td class="label"><?php echo $this->_tpl_vars['form']['label_b_a']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_relationship_type','field' => 'label_b_a','id' => $this->_tpl_vars['relationship_type_id'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
                <td><?php echo $this->_tpl_vars['form']['label_b_a']['html']; ?>
<br />
                <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Label for the relationship from Contact B to Contact A. EXAMPLE: Contact B is 'Child of' Contact A. You may leave this blank for relationships where the name is the same in both directions (e.g. Spouse).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
            </tr>
            <tr class="crm-relationship-type-form-block-contact_types_a">
                <td class="label"><?php echo $this->_tpl_vars['form']['contact_types_a']['label']; ?>
</td>
                <td><?php echo $this->_tpl_vars['form']['contact_types_a']['html']; ?>
</td>
            </tr>
            <tr class="crm-relationship-type-form-block-contact_types_b">
                <td class="label"><?php echo $this->_tpl_vars['form']['contact_types_b']['label']; ?>
</td>
                <td><?php echo $this->_tpl_vars['form']['contact_types_b']['html']; ?>
</td>
            </tr>
            <tr class="crm-relationship-type-form-block-description">
                <td class="label"><?php echo $this->_tpl_vars['form']['description']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_relationship_type','field' => 'description','id' => $this->_tpl_vars['relationship_type_id'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
                <td><?php echo $this->_tpl_vars['form']['description']['html']; ?>
</td>
            </tr>
            <tr class="crm-relationship-type-form-block-is_active">
                <td class="label"><?php echo $this->_tpl_vars['form']['is_active']['label']; ?>
</td>
                <td><?php echo $this->_tpl_vars['form']['is_active']['html']; ?>
</td>
            </tr>
        </table>
    <?php endif; ?>
    <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>