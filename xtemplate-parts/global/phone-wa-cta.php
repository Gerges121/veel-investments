<?php
$theme_settings = wp_cache_get('veel_theme_settings', 'options');
if ($theme_settings === false) {
  $theme_settings = get_option('veel_theme_settings');
  wp_cache_set('veel_theme_settings', $theme_settings, 'options');
}

$phone_number = isset($theme_settings['phone_number']) ? esc_attr($theme_settings['phone_number']) : '01040300143';
$whatsapp_number = isset($theme_settings['whatsapp_number']) ? esc_attr($theme_settings['whatsapp_number']) : '01040300143';
$whatsapp_message = rawurlencode("اريد الاستفسار عن " . get_the_title() . " قادم من " . get_permalink());
$whatsapp_link = "https://wa.me/2{$whatsapp_number}?text={$whatsapp_message}";

?>
<div class="veelWaPhoneCta">
  <a class="veelWa" href="<?php echo esc_attr($whatsapp_link);?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
      <path d="M10.4998 18.536C14.9378 18.536 18.5355 14.9383 18.5355 10.5003C18.5355 6.06231 14.9378 2.4646 10.4998 2.4646C6.06182 2.4646 2.46411 6.06231 2.46411 10.5003C2.46411 11.6084 2.68836 12.664 3.09397 13.6244C3.31813 14.155 3.43021 14.4205 3.44409 14.621C3.45797 14.8216 3.39894 15.0422 3.28088 15.4834L2.46411 18.536L5.51669 17.7193C5.95794 17.6012 6.17857 17.5422 6.37913 17.5561C6.57969 17.5699 6.84506 17.682 7.37582 17.9062C8.33617 18.3118 9.39178 18.536 10.4998 18.536Z" stroke="white" stroke-width="1.20536" stroke-linejoin="round"/>
      <path d="M7.75837 10.8037L8.45823 9.93449C8.7532 9.56814 9.11781 9.2271 9.14642 8.7393C9.15357 8.6161 9.06695 8.06295 8.89353 6.95666C8.8254 6.52189 8.41948 6.48267 8.06788 6.48267C7.6097 6.48267 7.38061 6.48267 7.15312 6.58658C6.86559 6.71791 6.5704 7.0872 6.50562 7.39659C6.45437 7.64138 6.49246 7.81006 6.56863 8.14742C6.89218 9.58027 7.65122 10.9954 8.82819 12.1724C10.0052 13.3493 11.4203 14.1084 12.8531 14.4319C13.1905 14.5081 13.3591 14.5462 13.604 14.4949C13.9134 14.4301 14.2826 14.135 14.414 13.8474C14.5179 13.6199 14.5179 13.3909 14.5179 12.9327C14.5179 12.581 14.4787 12.1752 14.0439 12.107C12.9376 11.9336 12.3845 11.847 12.2612 11.8541C11.7735 11.8827 11.4324 12.2473 11.0661 12.5423L10.1968 13.2421" stroke="white" stroke-width="1.20536"/>
    </svg>
  </a>
  <a class="veelPhoneCall" href="<?php echo 'tel:+2' . $phone_number; ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M6.21097 2.76565C6.5918 3.18781 6.47106 3.66606 6.13432 4.11985C6.05449 4.22744 5.96246 4.33345 5.85132 4.45026C5.79797 4.50633 5.75637 4.54849 5.66936 4.63559C5.47176 4.83339 5.30564 4.9996 5.17101 5.13422C5.10573 5.1995 5.55147 6.09021 6.41652 6.95612C7.28111 7.82156 8.17178 8.2676 8.23737 8.20197L8.73538 7.70369C9.00963 7.42917 9.15486 7.29673 9.35444 7.16579C9.76933 6.8936 10.2219 6.81963 10.6035 7.16092C11.8497 8.05232 12.5549 8.59933 12.9004 8.9583C13.5743 9.65847 13.4859 10.7362 12.9042 11.3511C12.7025 11.5643 12.4467 11.8202 12.1447 12.1114C10.3173 13.9397 6.46084 12.8271 3.50526 9.86859C0.549006 6.90943 -0.563051 3.05257 1.26044 1.22811C1.58781 0.895593 1.69574 0.787711 2.01457 0.473557C2.60817 -0.111339 3.73566 -0.202922 4.42105 0.474136C4.78157 0.830271 5.35634 1.56979 6.21097 2.76565ZM9.65412 8.62274L9.15601 9.12112C8.30934 9.96826 6.86743 9.24615 5.49769 7.87507C4.12701 6.50304 3.4057 5.06167 4.25266 4.21478C4.38711 4.08034 4.55307 3.91429 4.75053 3.71664C4.83019 3.63689 4.86664 3.59995 4.91038 3.55398C4.96998 3.49135 5.01895 3.43633 5.05816 3.38766C4.30075 2.33259 3.78587 1.67333 3.5083 1.39914C3.36496 1.25754 3.04398 1.28361 2.92615 1.39972C2.61187 1.70939 2.50857 1.81264 2.18252 2.14378C1.00983 3.31711 1.90756 6.43064 4.4241 8.94964C6.93984 11.4679 10.0529 12.366 11.2345 11.1839C11.5319 10.8971 11.7742 10.6546 11.9608 10.4575C12.0955 10.315 12.1196 10.021 11.9646 9.85994C11.7063 9.59161 11.0741 9.09867 9.98244 8.31471C9.90287 8.37876 9.80505 8.47166 9.65412 8.62274Z" fill="white"/>
    </svg>
    <p><?php echo $phone_number; ?></p>
  </a>
</div>
