<?php
$userDetails = $this->getRequest()->getSession()->read('SESS_USER');
?>

<div class="page_content_wrap scheme_default">
    <div class="content_wrap">
        <div class="content" style="float: right !important; width: 770px;">
            <div class="list_products shop_mode_thumbs">

                <div class="woocommerce-notices-wrapper"></div>

                <article id="post-49" class="post_item_single post_type_page post-49 page type-page status-publish hentry">
                    <div class="post_content entry-content">
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                                <div class="vc_column-inner vc_custom_1477912247150">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <h5>Hello, <?= ucfirst($userDetails->first_name) ?></h5>
                                                <p>Welcome to UnitedTune!</p>

                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>

        <div class="sidebar sidebar_left widget_area" role="complementary" style="margin-top: 150px !important; margin-bottom: 150px !important;">
            <div class="sidebar_inner">
                <aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
                    <h5 class="widget_title">User Account</h5>

                    <?php if ($userDetails->role_id === CUSTOMER_ROLE_ID) { ?>

                        <ul class="product-categories">
                            <li class="cat-item cat-item-38"><a href="#">Manage Account Details</a></li>
                            <li class="cat-item cat-item-36"><a href="#">Manage Address</a></li>
                            <li class="cat-item cat-item-36"><a href="#">Manage Payment Method</a></li>
                            <li class="cat-item cat-item-36"><a href="#">View Booking History</a></li>
                            <li class="cat-item cat-item-39"><a href="#">Change Password</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Users', 'action' => 'logout']) ?>">Logout</a></li>
                        </ul>

                    <?php } else if ($userDetails->role_id === MUSICIAN_ROLE_ID) { ?>

                        <ul class="product-categories">
                            <li class="cat-item cat-item-38"><a href="#">Manage Account Details</a></li>
                            <li class="cat-item cat-item-36"><a href="#">Manage Address</a></li>
                            <li class="cat-item cat-item-36"><a href="#">Manage Music Genres</a></li>
                            <li class="cat-item cat-item-36"><a href="#">Manage Music Services</a></li>
                            <li class="cat-item cat-item-36"><a href="#">Manage Service Locations</a></li>
                            <li class="cat-item cat-item-36"><a href="#">Manage Payment Method</a></li>
                            <li class="cat-item cat-item-36"><a href="#">View Booking Requests</a></li>
                            <li class="cat-item cat-item-36"><a href="#">View Booking History</a></li>
                            <li class="cat-item cat-item-39"><a href="#">Change Password</a></li>
                            <li class="cat-item cat-item-36"><a href="<?= $this->Url->Build(['controller' => 'Users', 'action' => 'logout']) ?>">Logout</a></li>
                        </ul>

                    <?php } else { } ?>
                </aside>
            </div>
        </div>
    </div>
</div>
