

<div class="veelBlackForm">
  <div class="veelHelp">
    <div class="img">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/src/img/formimg.svg'); ?>">

    </div>
    <div class="formContent">
    <div class="formHeader">
      <h2><?php _e('Need Real Estate Help?', 'veelinvestments'); ?></h2>
      <p><?php _e('Fill in your details, and a real estate expert will contact you shortly.', 'veelinvestments'); ?></p>
    </div>
    <div class="helpForm">
      <form class="formInputs">
        <div class="nameLocPhone">
        <input type="text" placeholder="<?php esc_attr_e('Name', 'veelinvestments'); ?>" id="name" name="name" required>

        <select id="options" name="options">
          <option value="" disabled selected><?php _e('Preferred Location', 'veelinvestments'); ?></option>
          <option value="option1">Option 1</option>
          <option value="option2">Option 2</option>
          <option value="option3">Option 3</option>
        </select>

        <input placeholder="<?php esc_attr_e('Phone Number', 'veelinvestments'); ?>" type="number" id="phone" name="phone" required>
        </div>
    <div class="msgSubmit">
        <textarea  placeholder="<?php esc_attr_e('Your Message', 'veelinvestments'); ?>" id="message" name="message" rows="4" cols="50" required></textarea>

        <button type="submit"><?php _e('Submit', 'veelinvestments'); ?></button>
    </div>
        <div class="vellLogo">
          <img src="<?php echo get_template_directory_uri(); ?>/src/img/veel-logo.webp">
        </div>
      </form>
    </div>
    </div>
  </div>
</div>
