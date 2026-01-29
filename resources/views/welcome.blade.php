@extends("layouts.master")
@section("content")

<div class="  zimalert-hero">
    <div class="container">
        <div class="row align-items-center">
            <!-- Text Column -->
            <div class="col-xl-7 col-lg-6 col-md-12 d-flex flex-column justify-content-center">
                <!-- Section Title Start -->
                <div class="section-title">
                    <div class="zimalert-badge wow fadeInUp">
                        <span class="badge-dot"></span>
                        <span class="badge-text">Launching Q2 2026 • Google Play Beta</span>
                    </div>

                    <h1 class="text-anime-style-3" data-cursor="-opaque">Silence Protects Crime. Report It.</h1>

                    <p class="wow fadeInUp" data-wow-delay="0.2s" style="font-size: 20px">
                        Report Drug Abuse & Gender-Based Violence. Get Emergency Help and Access Rehabilitation Resources, All While Protecting Your Identity.
                    </p>

                </div>
                <!-- Section Title End -->

                <!-- CTA Section Start -->
                <div class="zimalert-cta-section wow fadeInUp" data-wow-delay="0.4s">
                    <div class="zimalert-cta-container">
                        <a href="#" class="zimalert-btn-primary" id="openWaitlistModal">
                            <span class="btn-text">Join the Waitlist</span>
                            <svg class="btn-arrow" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>

                        <a href="#beta-testing" class="zimalert-btn-secondary">
                            <svg class="btn-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 2L3 8L9 14M15 10L21 4L15 -2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M3 8H16C17.0609 8 18.0783 8.42143 18.8284 9.17157C19.5786 9.92172 20 10.9391 20 12V22" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="btn-text">Apply for Beta Testing</span>
                        </a>
                    </div>

                    <!-- Social Proof -->
                    <div class="zimalert-social-proof">
                        <div class="proof-avatars">
                            <div class="avatar"></div>
                            <div class="avatar"></div>
                            <div class="avatar"></div>
                            <div class="avatar-count">+500</div>
                        </div>
                        <p class="proof-text">
                            <strong>500+ Zimbabweans</strong> already registered for early access
                        </p>
                    </div>
                </div>
                <!-- CTA Section End -->

                <!-- App Download Buttons Start -->
                <div class="app-download-buttons-royal wow fadeInUp d-flex" data-wow-delay="0.6s">
                    <div class="app-download-btn-royal me-2">
                        <a href="#"><img src="images/app-store-badge.svg" alt="Download on App Store" style="height:60px"></a>
                    </div>
                    <div class="app-download-btn-royal">
                        <a href="#"><img src="images/icon-play-store.svg" alt="Get it on Google Play" style="height:60px"></a>
                    </div>
                </div>
                <!-- App Download Buttons End -->
            </div>

            <!-- Image Column -->
            <div class="col-xl-5 col-lg-6 col-md-12 d-flex justify-content-center align-items-center">
                <div class="hero-image-box-royal zimalert-visual-container">
                    <div class="zimalert-visual-wrapper wow fadeInUp" data-wow-delay="0.3s">
                        <div class="zimalert-phone-mockup">
                            <div>
                                <img src="images/screenshots/hero2.png" alt="ZimAlert App Interface">
                            </div>

                            <!-- Floating Feature Cards -->
                            <div class="floating-card card-1">
                                <div class="card-icon">🚨</div>
                                <div class="card-text">
                                    <strong>Emergency Alert</strong>
                                    <span>Instant Response</span>
                                </div>
                            </div>

                            <div class="floating-card card-2">
                                <div class="card-icon">🔒</div>
                                <div class="card-text">
                                    <strong>Anonymous</strong>
                                    <span>100% Private</span>
                                </div>
                            </div>

                            <div class="floating-card card-3">
                                <div class="card-icon">🏥</div>
                                <div class="card-text">
                                    <strong>Get Help</strong>
                                    <span>Rehab Resources</span>
                                </div>
                            </div>
                        </div>

                        <!-- Decorative Elements -->
                        <div class="zimalert-decoration decoration-1"></div>
                        <div class="zimalert-decoration decoration-2"></div>
                        <div class="zimalert-decoration decoration-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Background Elements -->
    <div class="zimalert-bg-grid"></div>
    <div class="zimalert-bg-gradient"></div>
</div>

<!-- Waitlist Modal -->
<div id="waitlistModal" class="zimalert-modal">
    <div class="zimalert-modal-overlay"></div>
    <div class="zimalert-modal-container">
        <div class="zimalert-modal-content">
            <!-- Close Button -->
            <button class="zimalert-modal-close" id="closeWaitlistModal" aria-label="Close modal">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>

            <!-- Modal Header -->
            <div class="zimalert-modal-header">
                <div class="modal-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h2>Join Our Waitlist</h2>
                <p>Be among the first to access ZimAlert when we launch in Q2 2026</p>
            </div>

            <!-- Modal Form -->
            <form id="waitlistForm" class="zimalert-modal-form">
                @csrf
                <div class="form-group">
                    <label for="waitlist_email" class="form-label">
                        Email Address <span class="required">*</span>
                    </label>
                    <div class="input-wrapper">
                        <svg class="input-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M22 6L12 13L2 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <input
                            type="email"
                            id="waitlist_email"
                            name="email"
                            class="form-input"
                            placeholder="you@example.com"
                            required
                            autocomplete="email"
                        >
                    </div>
                    <span class="form-error" id="email_error"></span>
                </div>

                <div class="form-group checkbox-group">
                    <label class="checkbox-label">
                        <input
                            type="checkbox"
                            id="beta_testing"
                            name="beta_testing"
                            value="1"
                            class="form-checkbox"
                        >
                        <span class="checkbox-custom"></span>
                        <span class="checkbox-text">
                            Add me to closed Beta Testing program
                            <small>Get exclusive early access and help shape ZimAlert</small>
                        </span>
                    </label>
                </div>

                <div class="form-actions">
                    <button type="submit" class="zimalert-modal-btn" id="submitWaitlist">
                        <span class="btn-text">Join Waitlist</span>
                        <svg class="btn-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="btn-loader">
                            <svg class="spinner" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2V6M12 18V22M6 12H2M22 12H18M19.07 4.93L16.24 7.76M7.76 16.24L4.93 19.07M4.93 4.93L7.76 7.76M16.24 16.24L19.07 19.07" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </button>
                </div>
            </form>

            <!-- Success Message (hidden by default) -->
            <div id="successMessage" class="zimalert-success-message">
                <div class="success-icon">
                    <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.7088 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43727 15.628 1.87979 13.4881 2.02168 11.3363C2.16356 9.18455 2.99721 7.13631 4.39828 5.49706C5.79935 3.85781 7.69279 2.71537 9.79619 2.24013C11.8996 1.76489 14.1003 1.98232 16.07 2.86" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M22 4L12 14.01L9 11.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3>You're on the list!</h3>
                <p>Thank you for joining our waitlist. We'll be in touch soon with exclusive updates about ZimAlert's launch.</p>
                <button class="zimalert-modal-btn-secondary" id="closeSuccessModal">
                    Done
                </button>
            </div>
        </div>
    </div>
</div>

@endsection
