<?php
$pagetitle = "";
$meta_keywords = "";
$meta_description = "";
?>
<?php include 'header.php'; ?>


<!-- =========================================================
     GENE THERAPY FORUM 2027 - PARTICIPATION & REGISTRATION
     Bootstrap 5 Compatible
     ========================================================= -->

<section class="gtf-registration" id="participation-formats">
    <div class="container">

        <!-- Section Heading -->
        <div class="gtf-reg-heading text-center">
            <span class="gtf-reg-eyebrow">GENE THERAPY FORUM 2027</span>
            <h2>PARTICIPATION <span>FORMATS</span></h2>
            <p>Choose suitable options to get maximum benefits</p>
            <div class="gtf-reg-heading-line"></div>
        </div>

        <!-- Participation Formats -->
        <div class="row g-4 gtf-format-grid">

            <!-- Delegate -->
            <div class="col-lg-6 col-xl-3">
                <article class="gtf-format-card">
                    <div class="gtf-format-top">
                        <div class="gtf-format-icon">
                            <i class="fa-solid fa-user-tie"></i>
                        </div>
                        <span class="gtf-format-number">01</span>
                    </div>
                    <h3>Delegate Participation</h3>
                    <p class="gtf-format-description">Join scientific discussions and connect with the global community.</p>
                    <ul class="gtf-benefits">
                        <li>1 delegate pass</li>
                        <li>Access to all conference sessions</li>
                        <li>Access to workshops/symposiums</li>
                        <li>Access to exhibitor/sponsors booths</li>
                        <li>Conference materials</li>
                        <li>Lunch/breaks during the conference days</li>
                        <li>Opportunity to invite attendees to one-to-one meetings</li>
                        <li>Post conference materials</li>
                    </ul>
                    <a href="#gtf-registration-form" class="gtf-format-btn">
                        Register Now <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </article>
            </div>

            <!-- Speaker -->
            <div class="col-lg-6 col-xl-3">
                <article class="gtf-format-card gtf-format-featured">
                    <div class="gtf-format-top">
                        <div class="gtf-format-icon">
                            <i class="fa-solid fa-microphone-lines"></i>
                        </div>
                        <span class="gtf-format-number">02</span>
                    </div>
                    <h3>Speaker Opportunity</h3>
                    <p class="gtf-format-description">Share your research and present your work to fellow experts.</p>
                    <ul class="gtf-benefits">
                        <li>Speaker slot in the program</li>
                        <li>Access to all conference sessions</li>
                        <li>Access to workshops/symposiums</li>
                        <li>Access to exhibitor/sponsors booths</li>
                        <li>Conference materials</li>
                        <li>Lunch/breaks during the conference days</li>
                        <li>Post conference materials</li>
                        <li>Branding package</li>
                    </ul>
                    <a href="#gtf-registration-form" class="gtf-format-btn">
                        Apply to Speak <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </article>
            </div>

            <!-- Exhibition -->
            <div class="col-lg-6 col-xl-3">
                <article class="gtf-format-card">
                    <div class="gtf-format-top">
                        <div class="gtf-format-icon">
                            <i class="fa-solid fa-store"></i>
                        </div>
                        <span class="gtf-format-number">03</span>
                    </div>
                    <h3>Exhibition Booth Space</h3>
                    <p class="gtf-format-description">Showcase your products, technologies, and services.</p>
                    <ul class="gtf-benefits">
                        <li>1 delegate pass</li>
                        <li>3*2 meter exhibition booth space</li>
                        <li>Access to all conference sessions</li>
                        <li>Access to workshops/symposiums</li>
                        <li>Access to exhibitor/sponsors booths</li>
                        <li>Conference materials</li>
                        <li>Lunch/breaks during the conference days</li>
                        <li>Post conference materials</li>
                        <li>Exclusive branding package</li>
                    </ul>
                    <a href="#gtf-registration-form" class="gtf-format-btn">
                        Book Exhibition <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </article>
            </div>

            <!-- Sponsorship -->
            <div class="col-lg-6 col-xl-3">
                <article class="gtf-format-card">
                    <div class="gtf-format-top">
                        <div class="gtf-format-icon">
                            <i class="fa-solid fa-handshake-angle"></i>
                        </div>
                        <span class="gtf-format-number">04</span>
                    </div>
                    <h3>Sponsorship Opportunities</h3>
                    <p class="gtf-format-description">Build your brand and strengthen your industry presence.</p>
                    <ul class="gtf-benefits">
                        <li>Extended number of delegate passes</li>
                        <li>Speaker slot in the program</li>
                        <li>Prescheduled 1-to-1 meetings</li>
                        <li>Access to all conference sessions</li>
                        <li>Access to workshops/symposiums</li>
                        <li>Access to exhibitor/sponsors booths</li>
                        <li>Conference materials</li>
                        <li>Lunch/breaks during the conference days</li>
                        <li>Post conference materials</li>
                        <li>Exclusive branding package</li>
                    </ul>
                    <a href="mailto:chairs@genetherapyconference.com" class="gtf-format-btn">
                        Enquire Now <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </article>
            </div>

        </div>

        <!-- Registration Form Heading -->
        <div class="gtf-registration-heading text-center" id="gtf-registration-form">
            <span class="gtf-reg-eyebrow">SECURE YOUR PARTICIPATION</span>
            <h2>Registration <span>Form</span></h2>
            <p>Complete your details and select your preferred registration category.</p>
        </div>

        <form id="gtf-registration-form-element" action="" method="post">
            <div class="row g-4">

                <!-- Main Form -->
                <div class="col-lg-8">
                    <div class="gtf-form-panel">
                        <div class="gtf-panel-heading">
                            <div class="gtf-panel-heading-icon">
                                <i class="fa-solid fa-address-card"></i>
                            </div>
                            <div>
                                <h3>Personal Information</h3>
                                <p>Please provide your registration details.</p>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="gtf-label" for="gtf-title">Title:</label>
                                <select class="form-select gtf-input" id="gtf-title" name="title">
                                    <option selected>Dr.</option>
                                    <option>Prof.</option>
                                    <option>Mr.</option>
                                    <option>Ms.</option>
                                    <option>Mrs.</option>
                                    <option>Other</option>
                                </select>
                            </div>

                            <div class="col-md-9">
                                <label class="gtf-label" for="gtf-name">Name:</label>
                                <input class="form-control gtf-input" type="text" id="gtf-name"
                                    name="name" placeholder="Enter your name" required>
                            </div>

                            <div class="col-md-6">
                                <label class="gtf-label" for="gtf-email">Email:</label>
                                <input class="form-control gtf-input" type="email" id="gtf-email"
                                    name="email" placeholder="Enter your email" required>
                            </div>

                            <div class="col-md-6">
                                <label class="gtf-label" for="gtf-organization">Organization:</label>
                                <input class="form-control gtf-input" type="text" id="gtf-organization"
                                    name="organization" placeholder="Organization/Institution">
                            </div>

                            <div class="col-md-6">
                                <label class="gtf-label" for="gtf-phone">Telephone:</label>
                                <input class="form-control gtf-input" type="tel" id="gtf-phone"
                                    name="telephone" placeholder="Enter your phone number">
                            </div>

                            <div class="col-md-6">
                                <label class="gtf-label" for="gtf-city">City:</label>
                                <input class="form-control gtf-input" type="text" id="gtf-city"
                                    name="city" placeholder="Enter your city name">
                            </div>

                            <div class="col-md-6">
                                <label class="gtf-label" for="gtf-country">Country:</label>
                                <select class="form-select gtf-input" id="gtf-country" name="country" required>
                                    <option value="">Select country</option>
                                    <option>Australia</option>
                                    <option>Canada</option>
                                    <option>China</option>
                                    <option>France</option>
                                    <option>Germany</option>
                                    <option>India</option>
                                    <option>Japan</option>
                                    <option>Singapore</option>
                                    <option>United Kingdom</option>
                                    <option>United States</option>
                                    <option>Other</option>
                                </select>
                                <!-- Add your complete country list here if required. -->
                            </div>

                            <div class="col-md-6">
                                <label class="gtf-label" for="gtf-participants">Participants:</label>
                                <input class="form-control gtf-input" type="number" id="gtf-participants"
                                    name="participants" min="1" value="1" required>
                            </div>

                            <div class="col-12">
                                <label class="gtf-label" for="gtf-address">Billing Address:</label>
                                <textarea class="form-control gtf-input" id="gtf-address"
                                    name="billing_address" rows="3" placeholder="Enter your billing address"></textarea>
                            </div>
                        </div>

                        <!-- Pricing -->
                        <div class="gtf-pricing-heading">
                            <h3><i class="fa-solid fa-ticket"></i> Select Registration Category</h3>
                            <p>Choose a registration period and category to update the price summary.</p>
                        </div>

                        <div class="gtf-pricing-periods">

                            <!-- Early Bird -->
                            <div class="gtf-price-period">
                                <div class="gtf-price-period-heading">
                                    <div>
                                        <h4>Early Bird Registration</h4>
                                        <span>TBA</span>
                                    </div>
                                    <i class="fa-solid fa-calendar-check"></i>
                                </div>

                                <div class="gtf-price-options">
                                    <label class="gtf-price-option">
                                        <input type="radio" name="registration_category"
                                            value="Therapeutic Developer" data-price="1150" required>
                                        <span class="gtf-price-option-info">
                                            <span>Therapeutic Developer</span>
                                            <strong>USD 1150</strong>
                                        </span>
                                    </label>

                                    <!-- <label class="gtf-price-option">
                                        <input type="radio" name="registration_category"
                                            value="1-Day Registration" data-price="420">
                                        <span class="gtf-price-option-info">
                                            <span>1-Day Registration</span>
                                            <strong>USD 420</strong>
                                        </span>
                                    </label> -->

                                    <label class="gtf-price-option">
                                        <input type="radio" name="registration_category"
                                            value="Student" data-price="570">
                                        <span class="gtf-price-option-info">
                                            <span>Student</span>
                                            <strong>USD 570</strong>
                                        </span>
                                    </label>

                                    <label class="gtf-price-option">
                                        <input type="radio" name="registration_category"
                                            value="Academic & Non-Profits" data-price="930">
                                        <span class="gtf-price-option-info">
                                            <span>Academic &amp; Non-Profits</span>
                                            <strong>USD 930</strong>
                                        </span>
                                    </label>

                                    <label class="gtf-price-option">
                                        <input type="radio" name="registration_category"
                                            value="Service & Tool Providers" data-price="1240">
                                        <span class="gtf-price-option-info">
                                            <span>Service &amp; Tool Providers</span>
                                            <strong>USD 1240</strong>
                                        </span>
                                    </label>

                                    <label class="gtf-price-option">
                                        <input type="radio" name="registration_category"
                                            value="Exhibition Booth Space" data-price="4160">
                                        <span class="gtf-price-option-info">
                                            <span>Exhibition Booth Space</span>
                                            <strong>USD 4160</strong>
                                        </span>
                                    </label>

                                    <label class="gtf-price-option">
                                        <input type="radio" name="registration_category"
                                            value="Online Talk" data-price="310">
                                        <span class="gtf-price-option-info">
                                            <span>Online Talk</span>
                                            <strong>USD 310</strong>
                                        </span>
                                    </label>
                                </div>
                            </div>

                            <!-- Standard -->
                            <div class="gtf-price-period">
                                <div class="gtf-price-period-heading">
                                    <div>
                                        <h4>Standard Registration</h4>
                                        <span>TBA</span>
                                    </div>
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>

                                <div class="gtf-price-options">
                                    <label class="gtf-price-option">
                                        <input type="radio" name="registration_category"
                                            value="Therapeutic Developer" data-price="1460">
                                        <span class="gtf-price-option-info">
                                            <span>Therapeutic Developer</span>
                                            <strong>USD 1460</strong>
                                        </span>
                                    </label>

                                    <!-- <label class="gtf-price-option">
                                        <input type="radio" name="registration_category"
                                            value="1-Day Registration" data-price="420">
                                        <span class="gtf-price-option-info">
                                            <span>1-Day Registration</span>
                                            <strong>USD 420</strong>
                                        </span>
                                    </label> -->

                                    <label class="gtf-price-option">
                                        <input type="radio" name="registration_category"
                                            value="Student" data-price="730">
                                        <span class="gtf-price-option-info">
                                            <span>Student</span>
                                            <strong>USD 730</strong>
                                        </span>
                                    </label>

                                    <label class="gtf-price-option">
                                        <input type="radio" name="registration_category"
                                            value="Academic & Non-Profits" data-price="1130">
                                        <span class="gtf-price-option-info">
                                            <span>Academic &amp; Non-Profits</span>
                                            <strong>USD 1130</strong>
                                        </span>
                                    </label>

                                    <label class="gtf-price-option">
                                        <input type="radio" name="registration_category"
                                            value="Service & Tool Providers" data-price="1450">
                                        <span class="gtf-price-option-info">
                                            <span>Service &amp; Tool Providers</span>
                                            <strong>USD 1450</strong>
                                        </span>
                                    </label>

                                    <label class="gtf-price-option">
                                        <input type="radio" name="registration_category"
                                            value="Exhibition Booth Space" data-price="4370">
                                        <span class="gtf-price-option-info">
                                            <span>Exhibition Booth Space</span>
                                            <strong>USD 4370</strong>
                                        </span>
                                    </label>

                                    <label class="gtf-price-option">
                                        <input type="radio" name="registration_category"
                                            value="Online Talk" data-price="360">
                                        <span class="gtf-price-option-info">
                                            <span>Online Talk</span>
                                            <strong>USD 360</strong>
                                        </span>
                                    </label>
                                </div>
                            </div>

                        </div>

                        <!-- Promo Code -->
                        <div class="gtf-promo-box">
                            <label class="gtf-label" for="gtf-promo">Have a promo code?</label>
                            <div class="input-group">
                                <input class="form-control gtf-input" type="text" id="gtf-promo"
                                    name="promo_code" placeholder="Enter promo code">
                                <button class="btn gtf-promo-btn" type="button" id="gtf-apply-promo">
                                    Apply
                                </button>
                            </div>
                            <small id="gtf-promo-message" aria-live="polite">
                                Promo code validation will be confirmed by the registration system.
                            </small>
                        </div>

                    </div>
                </div>

                <!-- Summary Sidebar -->
                <div class="col-lg-4">
                    <div class="gtf-summary-card">
                        <div class="gtf-summary-header">
                            <div class="gtf-summary-icon">
                                <i class="fa-solid fa-receipt"></i>
                            </div>
                            <div>
                                <h3>Summary</h3>
                                <p>Your registration overview</p>
                            </div>
                        </div>

                        <div class="gtf-summary-body">
                            <div class="gtf-summary-line">
                                <span>Registration Price:</span>
                                <strong id="gtf-registration-price">USD 1150</strong>
                            </div>
                            <div class="gtf-summary-line">
                                <span>Accommodation:</span>
                                <strong>USD 0.00</strong>
                            </div>
                            <div class="gtf-summary-line">
                                <span>Participants:</span>
                                <strong id="gtf-summary-participants">1</strong>
                            </div>
                            <div class="gtf-summary-line">
                                <span>Total No. Nights:</span>
                                <strong id="gtf-summary-nights">0</strong>
                            </div>

                            <div class="gtf-summary-total">
                                <span>Total Price:</span>
                                <strong id="gtf-total-price">USD 1150</strong>
                            </div>

                            <div class="gtf-inclusive-note">
                                <i class="fa-solid fa-circle-check"></i>
                                Inclusive of all Taxes
                            </div>

                            <div class="gtf-selected-price">
                                <span>Selected Price USD:</span>
                                <strong id="gtf-selected-price">1150</strong>
                            </div>

                            <div class="gtf-payment-note">
                                <i class="fa-solid fa-shield-halved"></i>
                                <span>By clicking "pay", you agree to the privacy policy, terms &amp; conditions and cancellation policy</span>
                            </div>

                            <button type="submit" class="gtf-pay-btn" id="gtf-pay-button">
                                Pay Now <i class="fa-solid fa-arrow-right"></i>
                            </button>

                            <p class="gtf-secure-note">
                                <i class="fa-solid fa-lock"></i> Secure registration
                            </p>
                        </div>
                    </div>

                    <!-- Group Discount -->
                    <div class="gtf-group-box">
                        <div class="gtf-group-icon">
                            <i class="fa-solid fa-people-group"></i>
                        </div>
                        <div>
                            <h4>Group Registration Discount</h4>
                            <p>Groups of three or more will receive a 10% discount by using the group code.</p>
                            <p>For a group code please contact us at</p>
                            <a href="mailto:chairs@genetherapyconference.com">
                                chairs@genetherapyconference.com
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </form>

        <!-- Important Hotel Alert -->
        <!-- <div class="gtf-hotel-alert">
            <div class="gtf-alert-icon">
                <i class="fa-solid fa-triangle-exclamation"></i>
            </div>
            <div>
                <h3>Important Hotel Booking Alert</h3>
                <p>
                    <strong>ALERT :</strong> Gene forum has learned that a variety of travel companies are contacting
                    our attendees and exhibitors to assist with hotel reservations at BOSTON, USA area for the
                    Gene Forum Conference 2027. These companies ARE NOT affiliated with Gene forum in any capacity.
                    If you are contacted by travel booking agencies, we strongly urge you not to utilize their
                    services. Please only book hotel accommodations through this web page or contact
                    <a href="mailto:chairs@genetherapyconference.com">chairs@genetherapyconference.com</a>
                </p>
                <p class="gtf-hotel-reminder">
                    <i class="fa-solid fa-circle-info"></i>
                    Note: We do not work with any third party agencies for booking the hotel stay for the conference;
                    please do not share any confidential information / details with them if they ask so by telephone or email.
                </p>
            </div>
        </div> -->

        <!-- Policies -->
        <div class="gtf-policy-section">
            <div class="gtf-policy-heading">
                <span class="gtf-reg-eyebrow">PLEASE READ CAREFULLY</span>
                <h2>Policies &amp; <span>Conditions</span></h2>
            </div>

            <div class="accordion gtf-policy-accordion" id="gtf-policy-accordion">

                <!-- Cancellation Policy -->
                <div class="accordion-item">
                    <h3 class="accordion-header" id="gtf-cancellation-heading">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#gtf-cancellation"
                            aria-expanded="false" aria-controls="gtf-cancellation">
                            <span class="gtf-policy-icon"><i class="fa-solid fa-calendar-xmark"></i></span>
                            Cancellation policy
                        </button>
                    </h3>
                    <div id="gtf-cancellation" class="accordion-collapse collapse"
                        aria-labelledby="gtf-cancellation-heading" data-bs-parent="#gtf-policy-accordion">
                        <div class="accordion-body">
                            <p>Cancellation policy is strictly followed and all cancellations must be made in writing.</p>
                            <ul>
                                <li>Cancellation before 120 days of the conference start date will receive a full refund, less a USD 100 towards administrative fee.</li>
                                <li>Cancellations within 120 days of the conference start date will not receive any refunds. The registration fee can be transferred to subsequent annual conferences.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Terms and Conditions -->
                <div class="accordion-item">
                    <h3 class="accordion-header" id="gtf-terms-heading">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#gtf-terms"
                            aria-expanded="false" aria-controls="gtf-terms">
                            <span class="gtf-policy-icon"><i class="fa-solid fa-file-contract"></i></span>
                            Terms and conditions
                        </button>
                    </h3>
                    <div id="gtf-terms" class="accordion-collapse collapse"
                        aria-labelledby="gtf-terms-heading" data-bs-parent="#gtf-policy-accordion">
                        <div class="accordion-body">
                            <p>By completing the registration process, you agree to these terms.</p>
                            <ul>
                                <li>Organizer reserves the right to make last minute changes without prior notice, should the need arise.</li>
                                <li>The organizers reserve the right to cancel the conference in case of any unpredictable event. In that case, payments made towards registration and/or lodging will be refunded. Organizer will have no further liability to the client.</li>
                                <li>Registrations remain valid if the conference has to be postponed.</li>
                                <li>The organizers will not accept any liability for personal injuries or for loss or damage to property belonging to the delegates, either during, or as a result of the conference.</li>
                                <li>Lost and found will be located at registration desk during the events. Participants can drop off found items at the registration desk during the events. All items are turned into the venue’s local security office at the end of each day.</li>
                                <li>Conference participants are expected to behave responsibly and to treat each other - and treat the community - with respect, kindness, and compassion. Gene forum reserves the right, without refund, to revoke the participation of the attendee whose conduct is deemed inappropriate, disorderly, or offensive by Gene forum, affiliated third parties or the local authorities.</li>
                                <li>Gene forum reserves the right to make changes to the terms at any time without notice to each participant, so please check back and review the terms from time to time. In the event that any term or provision of the terms shall be deemed invalid, illegal or unenforceable in any respect, such term or provision shall be deemed severable and shall not affect the validity and enforceability of any remaining term or provision.</li>
                                <li>Access to the conference room is available only to registered participants and their accompanying persons.</li>
                                <li>Accommodation Providers (Hotels) have their own cancellation policies, and they generally apply when cancellations are made less than 30 days prior to arrival. Please contact us as soon as possible, if you wish to cancel or amend your accommodation.</li>
                                <li>Press permission must be obtained from Gene forum and conferences organizing committee prior to the event. The press will not quote speakers or delegates unless they have obtained their approval in writing.</li>
                                <li>Please note that any (or) all transportation and parking is the responsibility of the registrant.</li>
                                <li>Registration fees do not include insurance of any kind.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Privacy Policy -->
                <div class="accordion-item">
                    <h3 class="accordion-header" id="gtf-privacy-heading">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#gtf-privacy"
                            aria-expanded="false" aria-controls="gtf-privacy">
                            <span class="gtf-policy-icon"><i class="fa-solid fa-user-shield"></i></span>
                            Privacy policy
                        </button>
                    </h3>
                    <div id="gtf-privacy" class="accordion-collapse collapse"
                        aria-labelledby="gtf-privacy-heading" data-bs-parent="#gtf-policy-accordion">
                        <div class="accordion-body">
                            By clicking "pay", you agree to the privacy policy, terms &amp; conditions and cancellation policy.
                            <p class="mt-2 mb-0">
                                <a href="privacy-policy.php">Read the privacy policy</a>
                                <!-- Update this URL to your actual privacy policy page. -->
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<style>
/* =========================================================
   GTF PARTICIPATION & REGISTRATION - SCOPED STYLES
   ========================================================= */

.gtf-registration {
    --gtf-navy: #10233f;
    --gtf-blue: #174a7e;
    --gtf-cyan: #27c5d9;
    --gtf-text: #526176;
    --gtf-border: #e4eaf1;
    --gtf-light: #f5f8fc;
    background: #fff;
    padding: 95px 0;
    color: var(--gtf-navy);
    font-family: inherit;
}

.gtf-registration *,
.gtf-registration *::before,
.gtf-registration *::after {
    box-sizing: border-box;
}

.gtf-registration .gtf-reg-heading {
    margin-bottom: 48px;
}

.gtf-registration .gtf-reg-eyebrow {
    display: inline-block;
    color: #148da7;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 2.2px;
    margin-bottom: 13px;
}

.gtf-registration .gtf-reg-heading h2,
.gtf-registration .gtf-registration-heading h2,
.gtf-registration .gtf-policy-heading h2 {
    margin: 0;
    color: var(--gtf-navy);
    font-size: clamp(28px, 3.4vw, 42px);
    font-weight: 850;
    letter-spacing: -1px;
}

.gtf-registration .gtf-reg-heading h2 span,
.gtf-registration .gtf-registration-heading h2 span,
.gtf-registration .gtf-policy-heading h2 span {
    color: #168ba8;
}

.gtf-registration .gtf-reg-heading > p,
.gtf-registration .gtf-registration-heading > p {
    color: var(--gtf-text);
    font-size: 15px;
    margin: 13px 0 0;
}

.gtf-registration .gtf-reg-heading-line {
    width: 65px;
    height: 4px;
    border-radius: 5px;
    background: var(--gtf-cyan);
    margin: 22px auto 0;
}

/* Participation cards */

.gtf-registration .gtf-format-grid {
    align-items: stretch;
}

.gtf-registration .gtf-format-card {
    position: relative;
    display: flex;
    flex-direction: column;
    height: 100%;
    padding: 28px 23px 24px;
    background: #fff;
    border: 1px solid var(--gtf-border);
    border-radius: 17px;
    box-shadow: 0 8px 30px rgba(16, 35, 63, .045);
    transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease;
    overflow: hidden;
}

.gtf-registration .gtf-format-card::before {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(90deg, #164d80, #27c5d9);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform .3s ease;
}

.gtf-registration .gtf-format-card:hover {
    transform: translateY(-7px);
    border-color: #c6e8ee;
    box-shadow: 0 18px 45px rgba(16, 35, 63, .10);
}

.gtf-registration .gtf-format-card:hover::before {
    transform: scaleX(1);
}

.gtf-registration .gtf-format-featured {
    background: linear-gradient(160deg, #f3fbfd 0%, #fff 60%);
    border-color: #bce6ed;
}

.gtf-registration .gtf-format-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 23px;
}

.gtf-registration .gtf-format-icon {
    width: 54px;
    height: 54px;
    display: grid;
    place-items: center;
    border-radius: 14px;
    color: #147d9d;
    background: #e9f8fb;
    font-size: 22px;
}

.gtf-registration .gtf-format-number {
    color: #dbe4ed;
    font-size: 28px;
    font-weight: 850;
}

.gtf-registration .gtf-format-card h3 {
    color: var(--gtf-navy);
    font-size: 19px;
    font-weight: 800;
    line-height: 1.4;
    margin: 0 0 10px;
}

.gtf-registration .gtf-format-description {
    color: var(--gtf-text);
    font-size: 13px;
    line-height: 1.8;
    min-height: 70px;
    margin-bottom: 18px;
}

.gtf-registration .gtf-benefits {
    list-style: none;
    padding: 0;
    margin: 0 0 25px;
    flex: 1;
}

.gtf-registration .gtf-benefits li {
    position: relative;
    padding: 0 0 0 23px;
    margin-bottom: 12px;
    color: #526176;
    font-size: 12.5px;
    line-height: 1.65;
}

.gtf-registration .gtf-benefits li::before {
    content: "\f00c";
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    position: absolute;
    top: 2px;
    left: 0;
    color: #1599ad;
    font-size: 12px;
}

.gtf-registration .gtf-format-btn {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
    padding: 13px 15px;
    border: 1px solid #d9e5ee;
    border-radius: 9px;
    background: #f8fafc;
    color: var(--gtf-navy);
    text-decoration: none;
    font-size: 13px;
    font-weight: 750;
    transition: all .25s ease;
}

.gtf-registration .gtf-format-btn:hover {
    color: #fff;
    background: #164d80;
    border-color: #164d80;
}

.gtf-registration .gtf-format-btn i {
    transition: transform .25s ease;
}

.gtf-registration .gtf-format-btn:hover i {
    transform: translateX(4px);
}

/* Form heading */

.gtf-registration .gtf-registration-heading {
    margin: 100px 0 42px;
    scroll-margin-top: 35px;
}

/* Form panels */

.gtf-registration .gtf-form-panel {
    padding: 34px;
    background: #fff;
    border: 1px solid var(--gtf-border);
    border-radius: 17px;
    box-shadow: 0 10px 35px rgba(16, 35, 63, .05);
}

.gtf-registration .gtf-panel-heading,
.gtf-registration .gtf-summary-header {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 30px;
}

.gtf-registration .gtf-panel-heading-icon,
.gtf-registration .gtf-summary-icon {
    display: grid;
    place-items: center;
    flex: 0 0 49px;
    width: 49px;
    height: 49px;
    color: #148ba5;
    background: #e9f8fb;
    border-radius: 13px;
    font-size: 20px;
}

.gtf-registration .gtf-panel-heading h3,
.gtf-registration .gtf-summary-header h3 {
    color: var(--gtf-navy);
    font-size: 21px;
    font-weight: 800;
    margin: 0 0 5px;
}

.gtf-registration .gtf-panel-heading p,
.gtf-registration .gtf-summary-header p {
    color: #78869a;
    font-size: 13px;
    margin: 0;
}

.gtf-registration .gtf-label {
    display: block;
    color: #283b54;
    font-size: 13px;
    font-weight: 750;
    margin-bottom: 8px;
}

.gtf-registration .gtf-input {
    min-height: 47px;
    border: 1px solid #dfe6ee;
    border-radius: 8px;
    background-color: #fbfcfe;
    color: var(--gtf-navy);
    font-size: 13px;
    box-shadow: none;
    transition: border-color .2s ease, box-shadow .2s ease;
}

.gtf-registration textarea.gtf-input {
    min-height: 100px;
    resize: vertical;
}

.gtf-registration .gtf-input:focus {
    background: #fff;
    border-color: #1c9ab2;
    box-shadow: 0 0 0 3px rgba(39, 197, 217, .12);
}

.gtf-registration .gtf-input::placeholder {
    color: #9aa7b7;
}

/* Pricing */

.gtf-registration .gtf-pricing-heading {
    border-top: 1px solid var(--gtf-border);
    margin-top: 35px;
    padding-top: 30px;
}

.gtf-registration .gtf-pricing-heading h3 {
    font-size: 19px;
    font-weight: 800;
    margin: 0 0 7px;
}

.gtf-registration .gtf-pricing-heading h3 i {
    color: #168ba8;
    margin-right: 8px;
}

.gtf-registration .gtf-pricing-heading p {
    color: var(--gtf-text);
    font-size: 13px;
    line-height: 1.7;
    margin-bottom: 22px;
}

.gtf-registration .gtf-pricing-periods {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 18px;
}

.gtf-registration .gtf-price-period {
    min-width: 0;
    border: 1px solid var(--gtf-border);
    border-radius: 12px;
    overflow: hidden;
}

.gtf-registration .gtf-price-period-heading {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    padding: 18px;
    background: #f3f8fc;
    border-bottom: 1px solid var(--gtf-border);
}

.gtf-registration .gtf-price-period-heading h4 {
    font-size: 15px;
    font-weight: 800;
    line-height: 1.4;
    margin: 0 0 5px;
}

.gtf-registration .gtf-price-period-heading span {
    color: #168ba8;
    font-size: 12px;
    font-weight: 700;
}

.gtf-registration .gtf-price-period-heading > i {
    color: #168ba8;
    font-size: 21px;
}

.gtf-registration .gtf-price-options {
    padding: 8px 14px;
}

.gtf-registration .gtf-price-option {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 13px 4px;
    border-bottom: 1px solid #edf1f5;
    cursor: pointer;
    transition: background .2s ease;
}

.gtf-registration .gtf-price-option:last-child {
    border-bottom: 0;
}

.gtf-registration .gtf-price-option:hover {
    background: #f5fbfd;
}

.gtf-registration .gtf-price-option:has(input:checked) {
    background: #eaf9fb;
}

.gtf-registration .gtf-price-option input {
    flex: 0 0 auto;
    width: 16px;
    height: 16px;
    accent-color: #168ba8;
    cursor: pointer;
}

.gtf-registration .gtf-price-option-info {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 8px;
    width: 100%;
    color: #506077;
    font-size: 12px;
    line-height: 1.5;
}

.gtf-registration .gtf-price-option-info strong {
    flex: 0 0 auto;
    color: var(--gtf-navy);
    font-size: 12px;
    white-space: nowrap;
}

/* Promo */

.gtf-registration .gtf-promo-box {
    margin-top: 27px;
    padding: 21px;
    background: #f7f9fc;
    border: 1px dashed #cdd8e5;
    border-radius: 11px;
}

.gtf-registration .gtf-promo-btn {
    padding: 0 22px;
    background: var(--gtf-navy);
    border-color: var(--gtf-navy);
    color: #fff;
    font-size: 13px;
    font-weight: 750;
}

.gtf-registration .gtf-promo-btn:hover {
    background: #17648c;
    border-color: #17648c;
    color: #fff;
}

.gtf-registration #gtf-promo-message {
    display: block;
    color: #7b899b;
    font-size: 11px;
    line-height: 1.6;
    margin-top: 9px;
}

/* Summary */

.gtf-registration .gtf-summary-card {
    position: sticky;
    top: 25px;
    overflow: hidden;
    border: 1px solid #dce6f0;
    border-radius: 16px;
    background: #fff;
    box-shadow: 0 12px 38px rgba(16, 35, 63, .08);
}

.gtf-registration .gtf-summary-header {
    padding: 25px 24px;
    margin: 0;
    color: #fff;
    background: linear-gradient(130deg, #10233f, #174a7e);
}

.gtf-registration .gtf-summary-header h3,
.gtf-registration .gtf-summary-header p {
    color: #fff;
}

.gtf-registration .gtf-summary-header p {
    opacity: .75;
}

.gtf-registration .gtf-summary-icon {
    color: #fff;
    background: rgba(255, 255, 255, .13);
}

.gtf-registration .gtf-summary-body {
    padding: 25px 23px;
}

.gtf-registration .gtf-summary-line {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 12px;
    padding: 14px 0;
    border-bottom: 1px solid #edf1f5;
    color: #69778b;
    font-size: 12px;
    line-height: 1.6;
}

.gtf-registration .gtf-summary-line strong {
    color: var(--gtf-navy);
    font-weight: 800;
    text-align: right;
    white-space: nowrap;
}

.gtf-registration .gtf-summary-total {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    margin-top: 18px;
    padding: 18px;
    border-radius: 10px;
    background: #eaf8fb;
    color: var(--gtf-navy);
    font-size: 13px;
    font-weight: 800;
}

.gtf-registration .gtf-summary-total strong {
    color: #117e9a;
    font-size: 19px;
    white-space: nowrap;
}

.gtf-registration .gtf-inclusive-note {
    display: flex;
    gap: 8px;
    align-items: center;
    color: #278267;
    font-size: 11px;
    margin-top: 15px;
}

.gtf-registration .gtf-selected-price {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 10px;
    padding: 17px 0;
    margin-top: 10px;
    border-bottom: 1px solid var(--gtf-border);
    color: #68768a;
    font-size: 12px;
}

.gtf-registration .gtf-selected-price strong {
    color: var(--gtf-navy);
    font-size: 19px;
}

.gtf-registration .gtf-payment-note {
    display: flex;
    gap: 10px;
    margin-top: 18px;
    color: #738095;
    font-size: 11px;
    line-height: 1.7;
}

.gtf-registration .gtf-payment-note i {
    color: #148ba5;
    font-size: 16px;
    margin-top: 2px;
}

.gtf-registration .gtf-pay-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    width: 100%;
    margin-top: 22px;
    padding: 16px;
    border: 0;
    border-radius: 9px;
    background: linear-gradient(110deg, #117e9a, #21b4c7);
    color: #fff;
    font-size: 14px;
    font-weight: 800;
    box-shadow: 0 8px 20px rgba(20, 155, 178, .2);
    cursor: pointer;
    transition: transform .25s ease, box-shadow .25s ease;
}

.gtf-registration .gtf-pay-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 25px rgba(20, 155, 178, .3);
}

.gtf-registration .gtf-secure-note {
    text-align: center;
    color: #8491a3;
    font-size: 11px;
    margin: 14px 0 0;
}

.gtf-registration .gtf-secure-note i {
    margin-right: 5px;
    color: #278267;
}

/* Group discount */

.gtf-registration .gtf-group-box {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    padding: 21px;
    margin-top: 22px;
    border: 1px solid #d8eaf2;
    border-radius: 13px;
    background: #f1f9fc;
}

.gtf-registration .gtf-group-icon {
    display: grid;
    place-items: center;
    flex: 0 0 43px;
    width: 43px;
    height: 43px;
    color: #147d9d;
    background: #fff;
    border-radius: 12px;
    font-size: 18px;
}

.gtf-registration .gtf-group-box h4 {
    font-size: 14px;
    font-weight: 800;
    line-height: 1.5;
    margin: 0 0 8px;
}

.gtf-registration .gtf-group-box p {
    color: #66758a;
    font-size: 11.5px;
    line-height: 1.7;
    margin-bottom: 8px;
}

.gtf-registration .gtf-group-box a {
    color: #137f9b;
    font-size: 11px;
    font-weight: 750;
    overflow-wrap: anywhere;
    text-decoration: none;
}

.gtf-registration .gtf-group-box a:hover {
    text-decoration: underline;
}

/* Hotel alert */

.gtf-registration .gtf-hotel-alert {
    display: flex;
    align-items: flex-start;
    gap: 19px;
    padding: 28px;
    margin-top: 60px;
    border: 1px solid #f1d9b0;
    border-left: 5px solid #e5a33d;
    border-radius: 12px;
    background: #fffaf0;
}

.gtf-registration .gtf-alert-icon {
    display: grid;
    place-items: center;
    flex: 0 0 45px;
    width: 45px;
    height: 45px;
    border-radius: 12px;
    background: #fff0d5;
    color: #b87816;
    font-size: 20px;
}

.gtf-registration .gtf-hotel-alert h3 {
    color: #694715;
    font-size: 18px;
    font-weight: 800;
    margin: 0 0 12px;
}

.gtf-registration .gtf-hotel-alert p {
    color: #725d3c;
    font-size: 12.5px;
    line-height: 1.9;
    margin-bottom: 13px;
}

.gtf-registration .gtf-hotel-alert a {
    color: #95620d;
    font-weight: 750;
    overflow-wrap: anywhere;
}

.gtf-registration .gtf-hotel-alert .gtf-hotel-reminder {
    padding-top: 13px;
    margin: 0;
    border-top: 1px solid #f0dfc1;
}

.gtf-registration .gtf-hotel-reminder i {
    margin-right: 5px;
}

/* Policies */

.gtf-registration .gtf-policy-section {
    padding-top: 90px;
}

.gtf-registration .gtf-policy-heading {
    margin-bottom: 30px;
}

.gtf-registration .gtf-policy-accordion {
    display: grid;
    gap: 13px;
}

.gtf-registration .gtf-policy-accordion .accordion-item {
    overflow: hidden;
    border: 1px solid var(--gtf-border);
    border-radius: 12px;
    background: #fff;
}

.gtf-registration .gtf-policy-accordion .accordion-button {
    display: flex;
    gap: 14px;
    align-items: center;
    padding: 20px 23px;
    color: var(--gtf-navy);
    background: #fff;
    box-shadow: none;
    font-size: 14px;
    font-weight: 800;
}

.gtf-registration .gtf-policy-accordion .accordion-button:not(.collapsed) {
    background: #f3fafc;
    color: #117f9c;
}

.gtf-registration .gtf-policy-accordion .accordion-button::after {
    width: 15px;
    height: 15px;
    background-size: 15px;
}

.gtf-registration .gtf-policy-icon {
    display: grid;
    place-items: center;
    flex: 0 0 39px;
    width: 39px;
    height: 39px;
    border-radius: 10px;
    background: #eaf8fb;
    color: #168ba8;
    font-size: 16px;
}

.gtf-registration .gtf-policy-accordion .accordion-body {
    padding: 24px 28px;
    border-top: 1px solid #e9eff5;
    color: #5e6d81;
    font-size: 13px;
    line-height: 1.9;
}

.gtf-registration .gtf-policy-accordion .accordion-body p {
    margin-bottom: 12px;
}

.gtf-registration .gtf-policy-accordion .accordion-body ul {
    padding-left: 20px;
    margin-bottom: 0;
}

.gtf-registration .gtf-policy-accordion .accordion-body li {
    padding-left: 4px;
    margin-bottom: 10px;
}

.gtf-registration .gtf-policy-accordion .accordion-body li:last-child {
    margin-bottom: 0;
}

.gtf-registration .gtf-policy-accordion .accordion-body a {
    color: #117f9c;
    font-weight: 750;
}

/* Responsive */

@media (max-width: 1199.98px) {
    .gtf-registration .gtf-format-card {
        padding: 25px 21px;
    }

    .gtf-registration .gtf-format-description {
        min-height: auto;
    }
}

@media (max-width: 991.98px) {
    .gtf-registration {
        padding: 70px 0;
    }

    .gtf-registration .gtf-registration-heading {
        margin-top: 75px;
    }

    .gtf-registration .gtf-summary-card {
        position: static;
    }

    .gtf-registration .gtf-pricing-periods {
        grid-template-columns: 1fr;
    }

    .gtf-registration .gtf-policy-section {
        padding-top: 70px;
    }
}

@media (max-width: 575.98px) {
    .gtf-registration {
        padding: 55px 0;
    }

    .gtf-registration .gtf-reg-heading {
        margin-bottom: 35px;
    }

    .gtf-registration .gtf-form-panel {
        padding: 22px 17px;
    }

    .gtf-registration .gtf-panel-heading h3 {
        font-size: 18px;
    }

    .gtf-registration .gtf-price-option-info {
        font-size: 11.5px;
    }

    .gtf-registration .gtf-price-option-info strong {
        font-size: 11.5px;
    }

    .gtf-registration .gtf-hotel-alert {
        flex-direction: column;
        padding: 21px 18px;
        margin-top: 40px;
    }

    .gtf-registration .gtf-policy-accordion .accordion-button {
        padding: 16px;
        font-size: 13px;
    }

    .gtf-registration .gtf-policy-accordion .accordion-body {
        padding: 19px 17px;
    }

    .gtf-registration .gtf-group-box {
        padding: 17px;
    }

    .gtf-registration .gtf-summary-body {
        padding: 20px 17px;
    }
}

@media (prefers-reduced-motion: reduce) {
    .gtf-registration *,
    .gtf-registration *::before,
    .gtf-registration *::after {
        scroll-behavior: auto !important;
        transition-duration: .01ms !important;
        animation-duration: .01ms !important;
    }
}
</style>

<script>
(function () {
    "use strict";

    const form = document.getElementById("gtf-registration-form-element");

    if (!form) return;

    const participantInput = document.getElementById("gtf-participants");
    const registrationPrice = document.getElementById("gtf-registration-price");
    const totalPrice = document.getElementById("gtf-total-price");
    const selectedPrice = document.getElementById("gtf-selected-price");
    const summaryParticipants = document.getElementById("gtf-summary-participants");
    const promoInput = document.getElementById("gtf-promo");
    const promoButton = document.getElementById("gtf-apply-promo");
    const promoMessage = document.getElementById("gtf-promo-message");

    let appliedPromo = false;

    function formatUSD(amount) {
        return "USD " + Number(amount).toLocaleString("en-US", {
            minimumFractionDigits: 0,
            maximumFractionDigits: 2
        });
    }

    function getSelectedPrice() {
        const selected = form.querySelector(
            'input[name="registration_category"]:checked'
        );

        return selected ? Number(selected.dataset.price) : 1150;
    }

    function updateSummary() {
        let participants = parseInt(participantInput.value, 10);

        if (!Number.isFinite(participants) || participants < 1) {
            participants = 1;
        }

        const unitPrice = getSelectedPrice();
        const subtotal = unitPrice * participants;

        // Promo codes and group discounts must be validated by your backend.
        // This front-end preview does not apply an unverified discount.
        const total = subtotal;

        registrationPrice.textContent = formatUSD(unitPrice);
        selectedPrice.textContent = Number(unitPrice).toLocaleString("en-US");
        totalPrice.textContent = formatUSD(total);
        summaryParticipants.textContent = participants;
    }

    form.querySelectorAll('input[name="registration_category"]').forEach(function (radio) {
        radio.addEventListener("change", updateSummary);
    });

    participantInput.addEventListener("input", updateSummary);

    promoButton.addEventListener("click", function () {
        const code = promoInput.value.trim();

        if (!code) {
            promoMessage.textContent = "Please enter a promo code.";
            promoMessage.style.color = "#b45309";
            return;
        }

        appliedPromo = false;
        promoMessage.textContent =
            "Promo code validation is not connected yet. Please contact chairs@genetherapyconference.com to verify your code.";
        promoMessage.style.color = "#7b899b";
    });

    form.addEventListener("submit", function (event) {
        const selected = form.querySelector(
            'input[name="registration_category"]:checked'
        );

        if (!selected) {
            event.preventDefault();
            alert("Please select a registration category.");
            return;
        }

        /*
         * Connect this form to your real PHP registration/payment endpoint.
         * Do not process a payment from client-side JavaScript alone.
         *
         * Example:
         * <form action="registration_process.php" method="post">
         *
         * The backend must recalculate the category price, validate
         * discounts, verify the participant count and create the payment
         * session securely.
         */
        if (!form.getAttribute("action")) {
            event.preventDefault();
            alert("The registration form is ready for integration. Please connect it to your PHP registration and payment processing endpoint.");
        }
    });

    updateSummary();
})();
</script>


<?php include 'footer.php'; ?>
