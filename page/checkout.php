<div class="banner-wrapper has_background">
    <img src="assets/images/banner-for-all2.jpg" class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title">Checkout</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.php"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Checkout</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<main class="site-main  main-container no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="page-main-content">
                    <div class="lynessa">
                        <div class="lynessa-notices-wrapper"></div>
                        <div class="checkout-before-top">
                            <div class="lynessa-checkout-login">

                                <form class="lynessa-form lynessa-form-login login lynessa-form-show" method="post"
                                    style="display:none;" action="?sp=order">
                                    <p>If you have shopped with us before, please enter your details below. If you are a
                                        new customer, please proceed to the Billing &amp; Shipping section.</p>
                                    <p class="form-row form-row-first">
                                        <label for="username">Username or email&nbsp;<span
                                                class="required">*</span></label>
                                        <input type="text" class="input-text" name="username" id="username"
                                            autocomplete="username">
                                    </p>
                                    <p class="form-row form-row-last">
                                        <label for="password">Password&nbsp;<span class="required">*</span></label>
                                        <input class="input-text" type="password" name="password" id="password"
                                            autocomplete="current-password">
                                    </p>
                                    <div class="clear"></div>
                                    <p class="form-row">
                                        <input type="hidden" id="lynessa-login-nonce" name="lynessa-login-nonce"
                                            value="832993cb93"><input type="hidden" name="_wp_http_referer"
                                            value="/lynessa/checkout/">
                                        <button type="submit" class="button" name="login" value="Login">Login</button>
                                        <label class="lynessa-form__label lynessa-form__label-for-checkbox inline">
                                            <input class="lynessa-form__input lynessa-form__input-checkbox"
                                                name="rememberme" type="checkbox" id="rememberme" value="forever">
                                            <span>Remember me</span>
                                        </label>
                                    </p>
                                    <p class="lost_password">
                                        <a href="#">Lost your
                                            password?</a>
                                    </p>
                                    <div class="clear"></div>
                                </form>
                            </div>
                            <div class="lynessa-checkout-coupon">
                                <div class="lynessa-notices-wrapper"></div>
                                <div class="lynessa-form-coupon-toggle lynessa-form-toggle">

                                </div>
                                <form class="checkout_coupon lynessa-form-coupon lynessa-form-show" method="post"
                                    style="display:none">
                                    <p>If you have a coupon code, please apply it below.</p>
                                    <p class="form-row form-row-first">
                                        <input type="text" name="coupon_code" class="input-text"
                                            placeholder="Coupon code" id="coupon_code" value="">
                                    </p>
                                    <p class="form-row form-row-last">
                                        <button type="submit" class="button" name="apply_coupon" value="Apply coupon">
                                            Apply coupon
                                        </button>
                                    </p>
                                    <div class="clear"></div>
                                </form>
                            </div>
                        </div>
                        <form  method="post" class="checkout lynessa-checkout" action="?sp=order"
                            enctype="multipart/form-data" novalidate="novalidate">

                            <div class="col2-set" id="customer_details">
                                <div class="col-1">
                                    <?php if (isset($_SESSION['user'])) {
                                        ?>
                                        <div class="lynessa-billing-fields">
                                            <h3>Billing details</h3>
                                            <div class="lynessa-billing-fields__field-wrapper">
                                                <p class="form-row form-row-wide" id="billing_company_field"
                                                    data-priority="30"><label for="billing_company" class="">Full
                                                        name&nbsp;<span class="optional"><abbr class="required"
                                                                title="required">*</abbr></span></label><span
                                                        class="lynessa-input-wrapper"><input type="text" class="input-text "
                                                            name="name" id="billing_company" placeholder=""
                                                            value="<?= $nameUser ?>" autocomplete="organization"></span>
                                                </p>
                                                <p class="form-row form-row-wide" id="billing_company_field"
                                                    data-priority="30"><label for="billing_company" class="">Company
                                                        name&nbsp;<span class="optional">(optional)</span></label><span
                                                        class="lynessa-input-wrapper"><input type="text" class="input-text "
                                                            name="billing_company" id="billing_company" placeholder=""
                                                            value="" autocomplete="organization"></span>
                                                </p>

                                                <p class="form-row form-row-wide address-field validate-required"
                                                    id="billing_address_1_field" data-priority="50"><label
                                                        for="billing_address_1" class="">Street address&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label><span
                                                        class="lynessa-input-wrapper"><input type="text" class="input-text "
                                                            name="address" id="billing_address_1"
                                                            value="<?= ($address != '') ? $address : 'Vui lòng nhập địa chỉ' ?>"
                                                            placeholder="House number and street name" value=""
                                                            autocomplete="address-line1"
                                                            data-placeholder="House number and street name"></span>
                                                </p>
                                                <p class="form-row form-row-wide validate-required validate-phone"
                                                    id="billing_phone_field" data-priority="100"><label for="billing_phone"
                                                        class="">Phone&nbsp;<abbr class="required"
                                                            title="required">*</abbr></label><span
                                                        class="lynessa-input-wrapper"><input type="tel" class="input-text "
                                                            name="phone" id="billing_phone" placeholder=""
                                                            value="<?= ($phone != '') ? $phone : 'Vui lòng số điện thoại' ?>"" autocomplete="
                                                            tel"></span>
                                                </p>
                                                <p class="form-row form-row-wide validate-required validate-email"
                                                    id="billing_email_field" data-priority="110"><label for="billing_email"
                                                        class="">Email
                                                        address&nbsp;<abbr class="required"
                                                            title="required">*</abbr></label><span
                                                        class="lynessa-input-wrapper"><input type="email"
                                                            class="input-text " name="email" id="billing_email"
                                                            placeholder="" value="<?= $email ?>"
                                                            autocomplete="email username"></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="lynessa-account-fields">
                                            <p class="form-row form-row-wide create-account lynessa-validated">

                                            </p>
                                        </div>
                                        <?php
                                    } else {
                                        ?>
                                        <div class="lynessa-account-fields" style="padding-top:10px;">
                                            <p class="form-row form-row-wide create-account lynessa-validated">
                                                <label
                                                    class="lynessa-form__label lynessa-form__label-for-checkbox checkbox">

                                                    <span>Please login account to accept !!</span>
                                                    <br>
                                                    <span>You don't have account? <a style="color: blueviolet;"
                                                            href="?sp=login_resign"> Creat now</a></span>
                                                </label>
                                            </p>
                                        </div>
                                        <?php
                                    } ?>
                                </div>
                                <div class="col-2">
                                    <div class="lynessa-shipping-fields">
                                    </div>
                                    <div class="lynessa-additional-fields">
                                        <h3>Additional information</h3>
                                        <div class="lynessa-additional-fields__field-wrapper">
                                            <p class="form-row notes" id="order_comments_field" data-priority=""><label
                                                    for="order_comments" class="">Order notes&nbsp;<span
                                                        class="optional">(optional)</span></label><span
                                                    class="lynessa-input-wrapper"><textarea name="order_comments"
                                                        class="input-text " id="order_comments"
                                                        placeholder="Notes about your order, e.g. special notes for delivery."
                                                        rows="2" cols="5"></textarea></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 id="order_review_heading">Your order</h3>
                            <div id="order_review" class="lynessa-checkout-review-order">
                                <table class="shop_table lynessa-checkout-review-order-table">
                                    <thead>
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($_SESSION['mycart'] as $cart): ?>
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    <?= $cart[1] ?> <strong class="product-quantity">×
                                                        <?= $cart[4] ?>
                                                    </strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="lynessa-Price-amount amount"><span
                                                            class="lynessa-Price-currencySymbol">$</span>
                                                        <?= $cart[3] ?>
                                                    </span>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <?php
                                            $tong = 0;
                                            if (isset($_SESSION['mycart'])) {
                                                foreach ($_SESSION['mycart'] as $cart) {
                                                    $tong += $cart[3]*$cart[4];
                                                }
                                                echo '
                                                <td><span class="lynessa-Price-amount amount"><span
                                                class="lynessa-Price-currencySymbol">$</span>' . $tong . '</span></td>';
                                            }
                                            ?>

                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td><strong><span class="lynessa-Price-amount amount"><span
                                                            class="lynessa-Price-currencySymbol">$</span>
                                                        <?php
                                                        $tong = 0;
                                                        if (isset($_SESSION['mycart'])) {
                                                            foreach ($_SESSION['mycart'] as $cart) {
                                                                $tong += $cart[3]*$cart[4];
                                                            }
                                                            echo
                                                                $tong;
                                                        }
                                                        ?>
                                                    </span></strong>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <input type="hidden" name="lang" value="en">
                                <div id="payment" class="lynessa-checkout-payment">
                                    <ul class="wc_payment_methods payment_methods methods">
                                        <li class="wc_payment_method payment_method_cheque">
                                            <input id="payment_method_cheque" type="radio" class="input-radio"
                                                name="payment_method" value="cheque" data-order_button_text="">
                                            <label for="payment_method_cheque">
                                                Check payments </label>
                                            <div class="payment_box payment_method_cheque" style="display:none;">
                                                <p>Please send a check to Store Name, Store Street, Store Town, Store
                                                    State / County, Store Postcode.</p>
                                            </div>
                                        </li>
                                        <li class="wc_payment_method payment_method_cod">
                                            <input id="payment_method_cod" type="radio" class="input-radio"
                                                name="payment_method" value="cod" data-order_button_text="">
                                            <label for="payment_method_cod">
                                                Cash on delivery </label>
                                            <div class="payment_box payment_method_cod" style="display:none;">
                                                <p>Pay with cash upon delivery.</p>
                                            </div>
                                        </li>

                                    </ul>
                                    <div class="form-row place-order">
                                        <noscript>
                                            Since your browser does not support JavaScript, or it is disabled, please
                                            ensure you click the <em>Update Totals</em> button before placing your
                                            order. You may be charged more than the amount stated above if you fail to
                                            do so. <br />
                                            <button type="submit" class="button alt"
                                                name="lynessa_checkout_update_totals" value="Update totals">
                                                Update totals
                                            </button>
                                        </noscript>
                                        <div class="lynessa-terms-and-conditions-wrapper">
                                            <div class="lynessa-privacy-policy-text">
                                                <p>Your personal data will be
                                                    used to process your order, support your experience throughout this
                                                    website, and for other purposes described in our <a href="#"
                                                        class="lynessa-privacy-policy-link" target="_blank">privacy
                                                        policy</a>.</p>
                                            </div>
                                        </div>
                                        <?php if (isset($_SESSION['user'])) { ?>
                                            <button type="submit" class="button alt" name="place_order" id="place_order"
                                                value="Place order" data-value="Place order">Place order
                                            </button>
                                            <?php
                                        } else { ?>
                                            <button type="submit" class="button alt" name="lynessa_checkout_place_order"
                                                id="place_order" disabled value="Place order" data-value="Place order">Place
                                                order
                                            </button>
                                        <?php } ?>
                                        <input type="hidden" id="lynessa-process-checkout-nonce"
                                            name="lynessa-process-checkout-nonce" value="634590c981"><input
                                            type="hidden" name="_wp_http_referer"
                                            value="/lynessa/?lynessa-ajax=update_order_review">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>