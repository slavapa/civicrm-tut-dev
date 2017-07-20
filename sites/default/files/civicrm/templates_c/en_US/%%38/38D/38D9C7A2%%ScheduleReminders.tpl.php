<?php /* Smarty version 2.6.27, created on 2017-07-18 18:45:54
         compiled from CRM/Admin/Page/ScheduleReminders.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Admin/Page/ScheduleReminders.tpl', 1, false),array('block', 'ts', 'CRM/Admin/Page/ScheduleReminders.tpl', 38, false),array('block', 'crmButton', 'CRM/Admin/Page/ScheduleReminders.tpl', 58, false),array('function', 'docURL', 'CRM/Admin/Page/ScheduleReminders.tpl', 36, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['setTab'] == 1): ?>
  <?php if ($this->_tpl_vars['component'] == 'event'): ?>
     <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Event/Form/ManageEvent/Tab.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php endif; ?>
<?php else: ?>
<?php if ($this->_tpl_vars['action'] == 1 || $this->_tpl_vars['action'] == 2 || $this->_tpl_vars['action'] == 8 || $this->_tpl_vars['action'] == 16384): ?>
   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Admin/Form/ScheduleReminders.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
  <?php if (! $this->_tpl_vars['component']): ?>
    <?php ob_start(); ?><?php echo smarty_function_docURL(array('page' => "user/email/scheduled-reminders/"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('schedRemindersDocLink', ob_get_contents());ob_end_clean(); ?>
    <div class="help">
      <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Scheduled reminders allow you to automatically send messages to contacts regarding their memberships, participation in events, or other activities.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo $this->_tpl_vars['schedRemindersDocLink']; ?>

    </div>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['rows']): ?>
    <div id="reminder">
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Admin/Page/Reminders.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
  <?php else: ?>
    <div class="messages status no-popup">
      <div class="icon inform-icon"></div>
      <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>None found.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
  <?php endif; ?>
  <div class="action-link">
    <?php $this->assign('link', "civicrm/admin/scheduleReminders"); ?>
    <?php if ($this->_tpl_vars['component']): ?>
      <?php $this->assign('urlParams', "action=add&context=".($this->_tpl_vars['component'])."&compId=".($this->_tpl_vars['id'])."&reset=1"); ?>
    <?php else: ?>
      <?php $this->assign('urlParams', "action=add&reset=1"); ?>
    <?php endif; ?>
    <?php $this->_tag_stack[] = array('crmButton', array('p' => $this->_tpl_vars['link'],'q' => $this->_tpl_vars['urlParams'],'id' => 'newScheduleReminder','icon' => "plus-circle")); $_block_repeat=true;smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add Reminder<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  </div>
<?php endif; ?>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>