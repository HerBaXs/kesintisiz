<div class="container-contact100">
    <div class="wrap-contact100">
        <form action="<?php echo base_url('Form_Add'); ?>" class="contact100-form validate-form" method="post">
            <span class="contact100-form-title">
                Contact Us
            </span>

            <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
                <span class="label-input100">NAME *</span>
                <input class="input100" type="text" name="name" placeholder="Enter Your Name">
            </div>

            <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@a.x)">
                <span class="label-input100">Email *</span>
                <input class="input100" type="text" name="email" placeholder="Enter Your Email ">
            </div>

            <div class="wrap-input100 bg1 rs1-wrap-input100">
                <span class="label-input100">Phone</span>
                <input class="input100" type="text" name="phone" placeholder="Enter Number Phone">
            </div>

            <div class="wrap-input100 input100-select bg1">
                <span class="label-input100">Needed Services *</span>
                <div>
                    <select class="js-select2" name="service">
                        <option>Please chooses</option>
                        <option>Landing Page Design</option>
                        <option>Online Branding</option>
                        <option>Google Ads</option>
                        <option>Pay-Per-Click</option>
                        <option>Social Media</option>
                        <option>SEO</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>

            <div class="w-full dis-none js-show-service">
                <div class="wrap-contact100-form-radio">
                    <span class="label-input100">What type of products do you sell?</span>

                    <div class="contact100-form-radio m-t-15">
                        <input class="input-radio100" id="radio1" type="radio" name="type-product" value="physical" checked="checked">
                        <label class="label-radio100" for="radio1">
                            Phycical Products
                        </label>
                    </div>

                    <div class="contact100-form-radio">
                        <input class="input-radio100" id="radio2" type="radio" name="type-product" value="digital">
                        <label class="label-radio100" for="radio2">
                            Digital Products
                        </label>
                    </div>

                    <div class="contact100-form-radio">
                        <input class="input-radio100" id="radio3" type="radio" name="type-product" value="service">
                        <label class="label-radio100" for="radio3">
                            Services Consulting
                        </label>
                    </div>
                </div>
            </div>

            <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
                <span class="label-input100">Message</span>
                <textarea class="input100" name="message" placeholder="Your message here..."></textarea>
            </div>

            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
                    <span>
                        Submit
                        <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>
