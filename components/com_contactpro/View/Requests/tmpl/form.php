<form class="uk-form" method="POST" action="index.php?option=com_contactpro&view=Requests">
    <fieldset data-uk-margin>
        <div class="uk-form-row">
            <label class="uk-form-label" for=""><?php echo JText::_("COM_CONTACTPRO_FIRSTNAME_LABEL"); ?></label>
            <div class="uk-form-controls">
                <input type="text" name="firstname" placeholder="<?php echo JText::_("COM_CONTACTPRO_FIRSTNAME_PLACEHOLDER"); ?>">
            </div>
        </div>
        <div class="uk-form-row">
        <label class="uk-form-label" for=""><?php echo JText::_("COM_CONTACTPRO_SURNAME_LABEL"); ?></label>
            <div class="uk-form-controls">
                <input type="text" name="lastname" placeholder="<?php echo JText::_("COM_CONTACTPRO_SURNAME_PLACEHOLDER"); ?>">
            </div>
        </div>
        <div class="uk-form-row">
            <label class="uk-form-label" for=""><?php echo JText::_("COM_CONTACTPRO_PHONE_LABEL"); ?></label>
            <div class="uk-form-controls">
                <input type="text" name="phone" placeholder="<?php echo JText::_("COM_CONTACTPRO_PHONE_PLACEHOLDER"); ?>">
            </div>
        </div>

        <div class="uk-form-row">
            <label class="uk-form-label" for=""><?php echo JText::_("COM_CONTACTPRO_EMAIL_LABEL"); ?></label>
            <div class="uk-form-controls">
                <input type="text" name="email" placeholder="<?php echo JText::_("COM_CONTACTPRO_EMAIL_PLACEHOLDER"); ?>">
            </div>
        </div>

        <div class="uk-form-row">
            <label class="uk-form-label" for=""><?php echo JText::_("COM_CONTACTPRO_SUBJECT_LABEL"); ?></label>
            <div class="uk-form-controls">
                <input type="text" name="subject" placeholder="<?php echo JText::_("COM_CONTACTPRO_SUBJECT_PLACEHOLDER"); ?>">
            </div>
        </div>

        <div class="uk-form-row">
            <label class="uk-form-label" for=""><?php echo JText::_("COM_CONTACTPRO_MESSAGE_LABEL"); ?></label>
            <div class="uk-form-controls">
                <textarea name="message" placeholder="<?php echo JText::_("COM_CONTACTPRO_MESSAGE_PLACEHOLDER"); ?>"></textarea>
            </div>
        </div>
        <button class="uk-button uk-button-primary"><?php echo JText::_("COM_CONTACTPRO_SUBMIT"); ?></button>
    </fieldset>
    <input type="hidden" name="contact_id" value="<?php echo $this->getModel()->getState('contact_id'); ?>" />
    <input type="hidden" name="returnurl" value="<?php echo base64_encode(JRoute::_("index.php?Itemid=".$this->getModel()->getState("redirect_url"))); ?>" />
    <?php echo JHtml::_( 'form.token' ); ?>
</form>