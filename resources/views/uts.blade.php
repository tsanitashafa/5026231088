<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CARE - Fighting Global Poverty and World Hunger</title>
        <link rel="icon" type="image/x-icon" href="https://www.care.org/wp-content/themes/careorg/assets/favicon/apple-touch-icon.png?v=1" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            function formvalidation(event) {
            event.preventDefault(); // prevent form submission

            var first = document.getElementById("first").value.trim();
            var last = document.getElementById("last").value.trim();
            var email = document.getElementById("email").value.trim();

            // Validasi First Name
            if (first === "") {
                Swal.fire({
                title: "Pesan Kesalahan",
                text: "First Name harus diisi!",
                icon: "error"
                });
                document.getElementById("first").focus();
                return false;
            }

            // Validasi Last Name
            if (last === "") {
                Swal.fire({
                title: "Pesan Kesalahan",
                text: "Last Name harus diisi!",
                icon: "error"
                });
                document.getElementById("last").focus();
                return false;
            }

            // Validasi Email
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (email === "") {
                Swal.fire({
                title: "Pesan Kesalahan",
                text: "Email harus diisi!",
                icon: "error"
                });
                document.getElementById("email").focus();
                return false;
            } else if (!emailPattern.test(email)) {
                Swal.fire({
                title: "Pesan Kesalahan",
                text: "Format email tidak valid!",
                icon: "error"
                });
                document.getElementById("email").focus();
                return false;
            }

            // Jika semua valid, tampilkan alert sukses lalu submit
            Swal.fire({
                title: "Berhasil!",
                text: "Formulir berhasil dikirim.",
                icon: "success"
            }).then(() => {
                event.target.submit(); // submit form setelah alert sukses
            });

            return false;
            }
        </script>
    </head>
    <body id="page-top">
        <!-- Mashead header-->
        <header class="masthead">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <h1 class="display-1 lh-1 mb-3">Your Gift = Helping Families</h1>
                            <p class="lead fw-normal text-muted mb-5">Give moms and children worldwide a gift that provides food, health supplies, and shelter to families in crisis.
                            </p>
                            <!-- Tombol -->
                            <div class="d-flex flex-column flex-lg-row align-items-center">
                                <a class="btn btn-warning py-3 px-4 rounded-pill" href="https://my.care.org/site/Donation2?df_id=47030&mfc_pref=T&47030.donation=form1&s_src=1725201YCB00&s_subsrc=FY25DFMAYCCHERO" target="_blank">Give now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Masthead device mockup feature-->
                        <div class="masthead-device-mockup">
                            <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                        <stop class="gradient-start-color" offset="0%"></stop>
                                        <stop class="gradient-end-color" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <circle cx="50" cy="50" r="50"></circle></svg
                            ><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect></svg
                            ><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"></circle></svg>
                            <div class="device-wrapper">
                                <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                    <div class="screen bg-black">
                                        <!-- PUT CONTENTS HERE:-->
                                        <!-- * * This can be a video, image, or just about anything else.-->
                                        <!-- * * Set the max width of your media to 100% and the height to-->
                                        <!-- * * 100% like the demo example below.-->
                                        <img src="assets/img/RS46535_GTM-2018-NF-67-web1.jpg" style="max-width: 100%; height: 100%">
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Quote/testimonial aside-->
        <aside class="text-center bg-gradient-primary-to-secondary">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xl-8">
                        <div class="h2 fs-1 text-white mb-4">"CARE has been a trusted leader in humanitarian assistance for 80 years, and we won't turn our backs on those in crisis.</div>
                        <div class="h2 fs-1 text-white mb-4">
                          Every day, together with you, CARE saves lives and helps millions of people find the way to a better life worldwide.
                          "</div>
                        <img src="assets/img/primary_logo_horizontal_min.svg" alt="logo" style="height: 3rem" />
                    </div>
                </div>
            </div>
        </aside>
        <!-- App features section-->
        <section id="features">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                        <div class="container-fluid px-5">
                            <div class="row gx-5">
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <img src="assets/img/Efficient_v3_web.avif" height="130px"></i>
                                        <h3 class="font-alt">We're efficient.</h3>
                                        <p class="text-muted mb-0">Your donation does more when you give it to CARE. 90% of the money CARE spends goes toward our lifesaving work that saves and transforms lives.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                      <img src="assets/img/Far-reaching_v3_web.avif" height="130px"></i>
                                      <h3 class="font-alt">We're far-reaching.</h3>
                                      <p class="text-muted mb-0">We are one of the largest networks of humanitarians in the world, working in 121 countries.
                                      </p>
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-5 mb-md-0">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <img src="assets/img/Locally-led_v3_web.avif" height="130px"></i>
                                        <h3 class="font-alt">We're locally led.</h3>
                                        <p class="text-muted mb-0">96% of our staff are from the countries or regions where we work. This means we can respond as soon as emergencies happen, and we stay long after the TV cameras leave.

                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <img src="assets/img/Trusted_v1_web.avif" height="130px"></i>
                                        <h3 class="font-alt">We're trusted.</h3>
                                        <p class="text-muted mb-0">With nearly 80 years of service, CARE has a history of building community trust. We listen to what people want and develop solutions they need.

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-0">
                        <!-- Features section device mockup-->
                        <div class="features-device-mockup">
                            <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                        <stop class="gradient-start-color" offset="0%"></stop>
                                        <stop class="gradient-end-color" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <circle cx="50" cy="50" r="50"></circle></svg
                            ><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect></svg
                            ><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"></circle></svg>
                            <div class="device-wrapper">
                                <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                    <div class="screen bg-black">
                                        <!-- PUT CONTENTS HERE:-->
                                        <!-- * * This can be a video, image, or just about anything else.-->
                                        <!-- * * Set the max width of your media to 100% and the height to-->
                                        <!-- * * 100% like the demo example below.-->
                                        <img src="assets/img/RS61984_190729_BDSH_EWW_Arifa_JC-scr1.jpg" style="max-width: 100%; height: 100%">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Basic features section-->
        <section class="bg-light">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12 col-lg-5">
                        <h2 class="display-4 lh-1 mb-4">Here's how we tackle poverty.</h2>
                        <p class="lead fw-normal text-muted mb-5 mb-lg-0">CARE works on the root causes of poverty – hunger, health care, education, and more - to make the biggest impact possible for women and girls around the world.
                        Learn more about our work</p>
                        <a href="https://www.care.org/our-work/" class="more">Learn more about our work</a>

                    </div>
                    <!-- Kolom gambar -->
                    <div class="col-12 col-lg-6">
                        <img src="https://www.care.org/wp-content/uploads/2020/05/RS65402_MOZ-2019-Estey-2811scr.webp" alt="gambar4" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
    
        <!-- App badge section-->
        <section class="bg-gradient-primary-to-secondary" id="download">
            <div class="container">
                <h2 style="color: #fff;">Sign up for our mailing list.</h2>
            
                <form id="contactfrom" action="https://google.co.id" method="get" onsubmit="return formvalidation(event)">
                  <input type="hidden" name="g-token" id="g-token">
                  <input type="hidden" name="_clientID" value="100002530">
                  <input type="hidden" name="_deExternalKey" value="CAREwebsignups">
                  <input type="hidden" name="_action" value="add">
                  <input type="hidden" name="_returnXML" value="0">
                  <input type="hidden" name="_successURL" value="https://www.care.org/thanks-for-signing-up-for-our-newsletter/">
                  <input type="hidden" name="_errorURL" value="https://www.care.org/could-not-sign-up-for-newsletter/">
            
                  <input type="text" id="first" name="FirstName" placeholder="First Name*" >
                  <input type="text" id="last" name="LastName" placeholder="Last Name*" >
                  <input type="text" id="email" name="EmailAddress" placeholder="Email*" >
                  <button class="button--secondary" type="submit">SUBMIT →</button>
                </form>
            
                <h3 class="home-email-block__sms-mobile" style="color: #fff;">Text CARE to 227387 to stay connected.</h3>
                <small>
                  This site is protected by reCAPTCHA and the Google
                  <a href="https://policies.google.com/privacy" style="color: #e36f1e;">Privacy Policy</a> and
                  <a href="https://policies.google.com/terms" style="color: #e36f1e;">Terms of Service</a> apply.
                </small>
              </div>
        </section>
        <!-- Footer-->
        <footer class="bg-black text-center py-5">
            <div class="container px-5">
                <div class="text-white-50 small">
                    <div class="mb-2">&copy; Tsanita's Website 2025. All Rights Reserved.</div>
                    <a href="#!">Privacy</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">Terms</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">FAQ</a>
                </div>
            </div>
        </footer>
        <!-- Feedback Modal-->
        <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary-to-secondary p-4">
                        <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Send feedback</h5>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 p-4">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
