<?php /* Smarty version 2.6.27, created on 2017-07-18 18:45:58
         compiled from CRM/Admin/Form/ScheduleReminders.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Admin/Form/ScheduleReminders.tpl', 1, false),array('block', 'ts', 'CRM/Admin/Form/ScheduleReminders.tpl', 33, false),array('block', 'edit', 'CRM/Admin/Form/ScheduleReminders.tpl', 89, false),array('function', 'help', 'CRM/Admin/Form/ScheduleReminders.tpl', 75, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-block crm-form-block crm-scheduleReminder-form-block">
 <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>

<?php if ($this->_tpl_vars['action'] == 8): ?>
  <div class="messages status no-popup">
      <div class="icon inform-icon"></div>
        <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['reminderName'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>WARNING: You are about to delete the Reminder titled <strong>%1</strong>.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Do you want to continue?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  </div>
<?php else: ?>
  <table class="form-layout-compressed">
    <tr class="crm-scheduleReminder-form-block-title">
        <td class="right"><?php echo $this->_tpl_vars['form']['title']['label']; ?>
</td><td colspan="3"><?php echo $this->_tpl_vars['form']['title']['html']; ?>
</td>
    </tr>
     <tr>
        <td class="label"><?php echo $this->_tpl_vars['form']['entity']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['entity']['html']; ?>
</td>
    </tr>

    <tr class="crm-scheduleReminder-form-block-when">
        <td class="right"><?php echo $this->_tpl_vars['form']['start_action_offset']['label']; ?>
</td>
        <td colspan="3"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'absolute_date')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> <strong id='OR'>OR</strong><br /></td>
    </tr>

    <tr id="relativeDate" class="crm-scheduleReminder-form-block-description">
        <td class="right"></td>
        <td colspan="3"><?php echo $this->_tpl_vars['form']['start_action_offset']['html']; ?>
&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['form']['start_action_unit']['html']; ?>
&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['form']['start_action_condition']['html']; ?>
&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['form']['start_action_date']['html']; ?>
</td>
    </tr>
    <tr id="recordActivity" class="crm-scheduleReminder-form-block-record_activity"><td class="label" width="20%"><?php echo $this->_tpl_vars['form']['record_activity']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['record_activity']['html']; ?>
</td>
    </tr>
    <tr id="relativeDateRepeat" class="crm-scheduleReminder-form-block-is_repeat"><td class="label" width="20%"><?php echo $this->_tpl_vars['form']['is_repeat']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['is_repeat']['html']; ?>
&nbsp;&nbsp;<span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Enable repetition.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
    </tr>
    <tr id="repeatFields" class="crm-scheduleReminder-form-block-repeatFields"><td></td><td>
        <table class="form-layout-compressed">
          <tr class="crm-scheduleReminder-form-block-repetition_frequency_interval">
            <td class="label"><?php echo $this->_tpl_vars['form']['repetition_frequency_interval']['label']; ?>
&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['form']['repetition_frequency_interval']['html']; ?>
</td>
          <td><?php echo $this->_tpl_vars['form']['repetition_frequency_unit']['html']; ?>
</td>
          </tr>
          <tr class="crm-scheduleReminder-form-block-repetition_frequency_interval">
             <td class="label"><?php echo $this->_tpl_vars['form']['end_frequency_interval']['label']; ?>
&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['form']['end_frequency_interval']['html']; ?>

           <td><?php echo $this->_tpl_vars['form']['end_frequency_unit']['html']; ?>
&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['form']['end_action']['html']; ?>
&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['form']['end_date']['html']; ?>
</td>
          </tr>
        </table>
     </td>
    </tr>
    <tr>
      <td class="label" width="20%"><?php echo $this->_tpl_vars['form']['from_name']['label']; ?>
</td>
      <td><?php echo $this->_tpl_vars['form']['from_name']['html']; ?>
&nbsp;&nbsp;<?php echo smarty_function_help(array('id' => "id-from_name_email"), $this);?>
</td>
    </tr>
    <tr>
      <td class="label" width="20%"><?php echo $this->_tpl_vars['form']['from_email']['label']; ?>
</td>
      <td><?php echo $this->_tpl_vars['form']['from_email']['html']; ?>
&nbsp;&nbsp;</td>
    </tr>
    <tr class="crm-scheduleReminder-form-block-recipient">
      <td id="recipientLabel" class="right"><?php echo $this->_tpl_vars['form']['recipient']['label']; ?>
</td><td colspan="3"><?php echo $this->_tpl_vars['form']['limit_to']['html']; ?>
&nbsp;<?php echo smarty_function_help(array('id' => 'limit_to','class' => 'limit_to','title' => $this->_tpl_vars['form']['recipient']['label']), $this);?>
<?php echo $this->_tpl_vars['form']['recipient']['html']; ?>
&nbsp;<?php echo smarty_function_help(array('id' => 'recipient','class' => 'recipient','title' => $this->_tpl_vars['recipientLabels']['activity']), $this);?>
</td>
    </tr>
    <tr id="recipientList" class="crm-scheduleReminder-form-block-recipientListing recipient">
        <td class="right"><?php echo $this->_tpl_vars['form']['recipient_listing']['label']; ?>
</td><td colspan="3"><?php echo $this->_tpl_vars['form']['recipient_listing']['html']; ?>
</td>
    </tr>
    <tr id="recipientManual" class="crm-scheduleReminder-form-block-recipient_manual_id recipient">
        <td class="label"><?php echo $this->_tpl_vars['form']['recipient_manual_id']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['recipient_manual_id']['html']; ?>
<?php $this->_tag_stack[] = array('edit', array()); $_block_repeat=true;smarty_block_edit($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You can manually send out the reminders to these recipients.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_edit($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
    </tr>

    <tr id="recipientGroup" class="crm-scheduleReminder-form-block-recipient_group_id recipient">
        <td class="label"><?php echo $this->_tpl_vars['form']['group_id']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['group_id']['html']; ?>
</td>
    </tr>
    <tr id="msgMode" class="crm-scheduleReminder-form-block-mode">
      <td class="label"><?php echo $this->_tpl_vars['form']['mode']['label']; ?>
</td>
      <td><?php echo $this->_tpl_vars['form']['mode']['html']; ?>
</td>
    </tr>
    <?php if ($this->_tpl_vars['multilingual']): ?>
    <tr class="crm-scheduleReminder-form-block-filter-contact-language">
      <td class="label"><?php echo $this->_tpl_vars['form']['filter_contact_language']['label']; ?>
</td>
      <td><?php echo $this->_tpl_vars['form']['filter_contact_language']['html']; ?>
 <?php echo smarty_function_help(array('id' => 'filter_contact_language'), $this);?>
</td>
    </tr>
    <tr class="crm-scheduleReminder-form-block-communication-language">
      <td class="label"><?php echo $this->_tpl_vars['form']['communication_language']['label']; ?>
</td>
      <td><?php echo $this->_tpl_vars['form']['communication_language']['html']; ?>
 <?php echo smarty_function_help(array('id' => 'communication_language'), $this);?>
</td>
    </tr>
    <?php endif; ?>
    <tr class="crm-scheduleReminder-form-block-active">
      <td class="label"></td>
      <td><?php echo $this->_tpl_vars['form']['is_active']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['is_active']['label']; ?>
</td>
    </tr>
  </table>
  <fieldset id="email" class="crm-collapsible" style="display: block;">
    <legend class="collapsible-title"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email Screen<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
      <div>
       <table id="email-field-table" class="form-layout-compressed">
         <tr class="crm-scheduleReminder-form-block-template">
            <td class="label"><?php echo $this->_tpl_vars['form']['template']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['template']['html']; ?>
</td>
         </tr>
         <tr class="crm-scheduleReminder-form-block-subject">
            <td class="label"><?php echo $this->_tpl_vars['form']['subject']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['subject']['html']; ?>
</td>
         </tr>
       </table>
       <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Task/EmailCommon.tpl", 'smarty_include_vars' => array('upload' => 1,'noAttach' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
    </fieldset>
    <?php if ($this->_tpl_vars['sms']): ?>
      <fieldset id="sms" class="crm-collapsible"><legend class="collapsible-title"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>SMS Screen<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
        <div>
        <table id="sms-field-table" class="form-layout-compressed">
          <tr id="smsProvider" class="crm-scheduleReminder-form-block-sms_provider_id">
            <td class="label"><?php echo $this->_tpl_vars['form']['sms_provider_id']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['sms_provider_id']['html']; ?>
</td>
          </tr>
          <tr class="crm-scheduleReminder-form-block-sms-template">
            <td class="label"><?php echo $this->_tpl_vars['form']['SMStemplate']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['SMStemplate']['html']; ?>
</td>
          </tr>
        </table>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Task/SMSCommon.tpl", 'smarty_include_vars' => array('upload' => 1,'noAttach' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div>
  </fieldset>
  <?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'is_repeat','trigger_value' => 'true','target_element_id' => 'repeatFields','target_element_type' => "table-row",'field_type' => 'radio','invert' => 'false')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'recipient','trigger_value' => 'manual','target_element_id' => 'recipientManual','target_element_type' => "table-row",'field_type' => 'select','invert' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'recipient','trigger_value' => 'group','target_element_id' => 'recipientGroup','target_element_type' => "table-row",'field_type' => 'select','invert' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo '
  <script type=\'text/javascript\'>
    CRM.$(function($) {
      var $form = $(\'form.'; ?>
<?php echo $this->_tpl_vars['form']['formClass']; ?>
<?php echo '\'),
        recipientMapping = eval('; ?>
<?php echo $this->_tpl_vars['recipientMapping']; ?>
<?php echo ');

      $(\'#absolute_date_display\', $form).change(function() {
        if($(this).val()) {
          $(\'#relativeDate, #relativeDateRepeat, #repeatFields, #OR\', $form).hide();
        } else {
          $(\'#relativeDate, #relativeDateRepeat, #OR\', $form).show();
        }
      });
      if ($(\'#absolute_date_display\', $form).val()) {
        $(\'#relativeDate, #relativeDateRepeat, #repeatFields, #OR\', $form).hide();
      }

      loadMsgBox();
      $(\'#mode\', $form).change(loadMsgBox);

      function populateRecipient() {
        var mappingID = $(\'#entity_0\', $form).val();
        var recipient = $("#recipient", $form).val();
        $("#recipientList", $form).hide();
        if ($(\'#limit_to\').val() != \'\' ) {
          $.getJSON(CRM.url(\'civicrm/ajax/recipientListing\'), {mappingID: mappingID, recipientType: recipient},
            function (result) {
              if (!CRM._.isEmpty(result.recipients)) {
                CRM.utils.setOptions($(\'#recipient_listing\', $form), result.recipients);
                $("#recipientList", $form).show();
              }
            }
          );
        }

        showHideLimitTo();
      }

      // CRM-14070 Hide limit-to when entity is activity
      function showHideLimitTo() {
        $(\'#limit_to\', $form).toggle(!($(\'#entity_0\', $form).val() == \'1\'));
        if ($(\'#entity_0\', $form).val() != \'1\' || !($(\'#entity_0\').length)) {
          if ($(\'#limit_to\', $form).val() == \'\') {
            $(\'tr.recipient:visible, #recipientList, #recipient, a.recipient\').hide();
            $(\'a.limit_to\').show();
          }
          else {
            $(\'a.limit_to, a.recipient\').show();
            $(\'#recipient\').css("margin-left", "12px");
          }
          $("label[for=\'recipient\']").text(\''; ?>
<?php echo $this->_tpl_vars['recipientLabels']['other']; ?>
<?php echo '\');
        }
        else {
          $(\'#recipient, a.recipient\').show()
          $(\'#recipient\').css("margin-left", "-2px");
          $(\'a.limit_to\').hide();
          $("label[for=\'recipient\']").text(\''; ?>
<?php echo $this->_tpl_vars['recipientLabels']['activity']; ?>
<?php echo '\');
        }
      }

      $(\'#recipient\', $form).change(populateRecipient);

      '; ?>
<?php if (! $this->_tpl_vars['context']): ?><?php echo '
        var entity = $(\'#entity_0\', $form).val();
        if (!(entity === \'2\' || entity === \'3\')) {
          $(\'#recipientList\', $form).hide();
         }

        $(\'#entity_0, #limit_to\', $form).change(buildSelects);

        buildSelects();

        function buildSelects() {
          var mappingID = $(\'#entity_0\', $form).val();
          var isLimit = $(\'#limit_to\', $form).val();

          $.getJSON(CRM.url(\'civicrm/ajax/mapping\'), {mappingID: mappingID, isLimit: isLimit},
            function (result) {
              CRM.utils.setOptions($(\'#start_action_date\', $form), result.sel4);
              CRM.utils.setOptions($(\'#end_date\', $form), result.sel4);
              CRM.utils.setOptions($(\'#recipient\', $form), result.sel5);
              recipientMapping = result.recipientMapping;
              populateRecipient();
            }
          );
        }
      '; ?>
<?php else: ?><?php echo '
        populateRecipient();
        $(\'#limit_to\', $form).change(populateRecipient);
      '; ?>
<?php endif; ?><?php echo '

      function loadMsgBox() {
        if (cj(\'#mode\').val() == \'Email\' || cj(\'#mode\').val() == 0){
          cj(\'#sms\').hide();
          cj(\'#email\').show();
        }
        else if (cj(\'#mode\').val() == \'SMS\'){
          cj(\'#email\').hide();
          cj(\'#sms\').show();
          showSaveUpdateChkBox(\'SMS\');
        }
        else if (cj(\'#mode\').val() == \'User_Preference\'){
          cj(\'#email\').show();
          cj(\'#sms\').show();
          showSaveUpdateChkBox(\'SMS\');
        }
      }

    });
  </script>
'; ?>


<?php endif; ?>

 <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>