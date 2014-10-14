<?php

// Custom Options
function setup_theme_admin_menus() {
  add_submenu_page('themes.php', 'Options Elements', 'Options', 'manage_options', 'options-elements', 'theme_options_settings'); 
}

add_action('admin_menu', 'setup_theme_admin_menus');

function theme_options_settings() { ?>
  <div class="wrap">
    <h2>Social media</h2>
    <form method="POST" action="">
      <table class="form-table">
          <tr valign="top">
            <th scope="row">
              <label for="profile1">Profile 1</label> 
            </th>
            <td>
              <select id="profile1" name="profile1">
                <option value="<?php echo $profile1;?>" selected>Please choose</option>
                <option value="facebook">Facebook</option>
                <option value="twitter">Twitter</option>
                <option value="linkedin">LinkedIn</option>
                <option value="googleplus">Google+</option>
                <option value="flickr">Flickr</option>
                <option value="youtube">YouTube</option>
              <select>
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">
              <label for="profileURL1">Profile 1 URL</label> 
            </th>
            <td>
              <input type="text" id="profileURL1" name="profileURL1" size="50" />
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">
              <label for="profile2">Profile 2</label> 
            </th>
            <td>
              <select id="profile2" name="profile2">
                <option value="" selected>Please choose</option>
                <option value="facebook">Facebook</option>
                <option value="twitter">Twitter</option>
                <option value="linkedin">LinkedIn</option>
                <option value="googleplus">Google+</option>
                <option value="flickr">Flickr</option>
                <option value="youtube">YouTube</option>
              <select>
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">
              <label for="profileURL2">Profile 2 URL</label> 
            </th>
            <td>
              <input type="text" id="profileURL2" name="profileURL2" size="50" />
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">
              <label for="profile3">Profile 3</label> 
            </th>
            <td>
              <select id="profile3" name="profile3">
                <option value="" selected>Please choose</option>
                <option value="facebook">Facebook</option>
                <option value="twitter">Twitter</option>
                <option value="linkedin">LinkedIn</option>
                <option value="googleplus">Google+</option>
                <option value="flickr">Flickr</option>
                <option value="youtube">YouTube</option>
              <select>
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">
              <label for="profileURL3">Profile 3 URL</label> 
            </th>
            <td>
              <input type="text" id="profileURL3" name="profileURL3" size="50" />
            </td>
          </tr>
      </table>
      <p class="submit">
        <input type="hidden" name="update_settings" value="Y" />
        <input type="submit" name="submit" id="submit" class="button button-primary" value="Save Options">
      </p>
    </form>
  </div>
<?php }

if (!current_user_can('manage_options')) {
  wp_die('You do not have sufficient permissions to access this page.');
}

if (isset($_POST["update_settings"])) {
  $profile1 = esc_attr($_POST["profile1"]);   
  update_option("theme_name_profile1", $profile1);
  $profile1 = get_option("theme_name_profile1");
}