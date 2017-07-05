<div id="mc4wp-admin" class="wrap mc4wp-settings">

  <h1 class="page-title">WPML Settings</h1>
  <?php settings_errors(); ?>

  <form method="POST" action="options.php">
    <?php settings_fields( 'mc4wp_wpml' ); ?>


    <table>
      <thead>
        <tr>
          <th style="width: auto; text-align: left;">Language</th>
          <th style="width: 20px;"></th>
          <th style="width: auto; text-align: left;">MailChimp list</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach( $languages as $language_code => $language ) { ?>
          <tr>
            <td style="padding-left: 0; padding-right: 0;">
              <?php echo $language['display_name']; ?>
            </td>
            <td>&rarr;</td>
            <td style="padding-left: 0;">
              <select name="mc4wp_wpml[language_map][<?php echo esc_attr($language_code ); ?>]">
                <option value="">-- use form or integration setting</option>
                <?php foreach( $mailchimp_lists as $list ) { ?>
                  <option value="<?php echo $list->id; ?>" <?php selected( isset( $opts['language_map'][$language_code] ) && $opts['language_map'][$language_code] == $list->id, true ); ?>><?php echo $list->name; ?></option>
                  <?php } ?>
                </select>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        <p class="help">Configure which site languages should subscribe to which lists. Please note that this will override all form or integration settings.</p>

        <?php submit_button(); ?>
      </form>
    </div>
