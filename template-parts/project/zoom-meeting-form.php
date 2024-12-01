
<form class="zoomMeetingForm">
  <h1>حدد موعد اجتماع زووم</h1>
  <p>املأ بياناتك لتحديد موعد للاجابة علي الاستفسار الخاص بكم</p>

  <div>
    <input class="zoomMeetingInput" type="text" id="input1" name="input1" placeholder="<?php _e('Full Name', 'veelinvestments'); ?>" required>
  </div>

  <div>
    <input class="zoomMeetingInput" type="text" id="input2" name="input2" placeholder="<?php _e('Phone Number', 'veelinvestments'); ?>"  required>
  </div>

  <label><?php _e('Choose the date', 'veelinvestments'); ?></label>
  <div class="dateButtons">
    <button class="zoomMeetingButton" type="button">الاثنين 23 ديسمبر</button>
    <button class="zoomMeetingButton" type="button">الاثنين 23 ديسمبر</button>
    <button class="zoomMeetingButton" type="button">الاثنين 23 ديسمبر</button>
  </div>

  <label for="zoomMeetingDropdown"><?php _e('Select time', 'veelinvestments'); ?></label>
  <select id="zoomMeetingDropdown" name="zoomMeetingDropdown" required>
    <option value="10:00 AM"><?php _e('10:00 AM', 'veelinvestments'); ?></option>
    <option value="11:00 AM"><?php _e('11:00 AM', 'veelinvestments'); ?></option>
    <option value="12:00 PM"><?php _e('12:00 PM', 'veelinvestments'); ?></option>
    <option value="1:00 PM"><?php _e('1:00 PM', 'veelinvestments'); ?></option>
    <option value="2:00 PM"><?php _e('2:00 PM', 'veelinvestments'); ?></option>
    <option value="3:00 PM"><?php _e('3:00 PM', 'veelinvestments'); ?></option>
    <option value="4:00 PM"><?php _e('4:00 PM', 'veelinvestments'); ?></option>
    <option value="5:00 PM"><?php _e('5:00 PM', 'veelinvestments'); ?></option>
    <option value="6:00 PM"><?php _e('6:00 PM', 'veelinvestments'); ?></option>
    <option value="7:00 PM"><?php _e('7:00 PM', 'veelinvestments'); ?></option>
    <option value="8:00 PM"><?php _e('8:00 PM', 'veelinvestments'); ?></option>
    <option value="9:00 PM"><?php _e('9:00 PM', 'veelinvestments'); ?></option>
    <option value="10:00 PM"><?php _e('10:00 PM', 'veelinvestments'); ?></option>
    <option value="11:00 PM"><?php _e('11:00 PM', 'veelinvestments'); ?></option>
    <option value="12:00 PM"><?php _e('12:00 PM', 'veelinvestments'); ?></option>
  </select>

  <div>
    <button class="zoomMeetingSubmit" type="submit"><?php _e('Send', 'veelinvestments'); ?></button>
  </div>

  <div class="zoomMeetingLogo">
  <img src="<?php echo get_template_directory_uri(); ?>/src/img/veel-logo.webp">
  </div>
</form>


