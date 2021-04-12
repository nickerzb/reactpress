<?php

/**
 * Provide a view for an sinlge react app in the admin
 *
 * @link       https://rockiger.com
 * @since      1.0.0
 *
 * @package    Reactpress
 * @subpackage Reactpress/admin/partials
 */
?>

<div id="<?php echo $appname ?>" class="card col flex fullwidth m0 p2">
              <h3 class="title flex m0 mb-05 row"><?php echo REPR_REACT_ICON_SVG ?><?php echo $appname ?></h3>
              <table class="form-table" role="presentation">
              <tbody>
                  <tr>
                    <th scope="row">URL Slug</th>
                    <td>
                      <a href="<?php echo $pageslug ?>"><?php echo $pageslug ?></a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">Type</th>
                    <td>
                      <span style="text-transform: capitalize;"> <?php echo esc_html($app['type']) ?>
                    </td>
                  </tr>
                <?php if ($app['type'] === 'development') : ?>
                  <tr>
                    <th scope="row">Update Dev-Environtment</th>
                    <td>
                      <button class="button button-primary button-start-stop" data-appname="<?php echo $appname ?>" data-pageslug="<?php echo $pageslug ?>">Update Dev-Environment</button>
                  <span id="rp-start-spinner-<?php echo $appname ?>" class="crpw-button-spinner spinner"></span>
                  <p class="description">TODO: This does update ...</p>
                 
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">Build App</th>
                    <td>
                       <span id="rp-build-spinner-<?php echo $appname ?>" class="crpw-button-spinner spinner"></span>
                  <button class="button button-build mr025" data-appname="<?php echo $appname ?>" data-pageslug="<?php echo $pageslug ?>">Build App</button>
                  <p class="description">TODO: This builds the app. All changes are reflected in....</p>

                    </td>
                  </tr>
                  <?php endif; ?>
                  </tbody>
              </table>
              <div><button class="button-link button-delete" data-appname="<?php echo $appname ?>" data-pageslug="<?php echo $pageslug ?>">Delete App</button></div>


              <!-- <div class="grow1 mb1">
                <p><b>URL Slug: </b><a href="<?php echo $pageslug ?>"><?php echo $pageslug ?></a></p>
                <?php if ($app['type'] === 'development') : ?>
                  <p><b>Status:</b> <b id="status-<?php echo $appname ?>" class=" fg-<?php echo $is_running ? 'green' : 'red' ?>"><?php echo $is_running ? "Running at port: <a href=\"{$protocol}://{$ip}:{$port}\" rel=\"noopener\" target=\"_blank\">{$port}<i class=\"external-link\"></i></a>" : 'Stopped' ?></b></p>
                <?php endif; ?>
                <p><b>Type:</b> <span style="text-transform: capitalize;"> <?php echo esc_html($app['type']) ?></p>
              </div>
              <div class="flex">
                <?php if ($app['type'] === 'development') : ?>
                  <button class="button button-primary button-start-stop" data-appname="<?php echo $appname ?>" data-pageslug="<?php echo $pageslug ?>">Update Dev-Environment</button>
                  <span id="rp-start-spinner-<?php echo $appname ?>" class="crpw-button-spinner spinner"></span>
                  <div class="grow1"></div>
                  <span id="rp-build-spinner-<?php echo $appname ?>" class="crpw-button-spinner spinner"></span>
                  <button class="button button-build mr025" data-appname="<?php echo $appname ?>" data-pageslug="<?php echo $pageslug ?>">Build App</button>
                <?php endif; ?>
                <button class="button-link button-delete" data-appname="<?php echo $appname ?>" data-pageslug="<?php echo $pageslug ?>">Delete App</button>
              </div> -->
            </div>