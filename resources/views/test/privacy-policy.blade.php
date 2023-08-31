<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    /> -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap_css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/style/privacy-policy.css') }}" />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />

    <title>Privacy Policy</title>
  </head>
  <body>
    @include('frontend.studentdashboard.layouts.navbar')


    <div class="privacy-policy px-5 mt-5">
      <h1 data-translate="privacy-policy">Privacy Policy</h1>
      <p>
        This Privacy Policy describes how we collect, use, and disclose your
        personal information when you use our online education application.
      </p>

      <h2 data-translate="information-we-collect">1. Information We Collect</h2>
      <ul>
        <li> 
           We may collect personal information such as your name, email
          address, and other contact details when you register for an account.
        </li>
        <li>
           We may collect information about your usage of the application,
          including the courses you enroll in, your progress, and interactions
          with instructors and other users.
        </li>
      </ul>

      <h2 data-translate="use-of-information">2. Use of Information</h2>
      <ul>
        <li>We use the collected information to provide and improve our online
          education services, personalize your experience, and communicate with
          you.</li>
        <li>
          We may use your email address to send you updates, announcements,
          and promotional offers related to the application.
        </li>
      </ul>

      <h2 data-translate="disclosure-of-Information">3. Disclosure of Information</h2>
      <ul>
        <li>
          We may disclose your personal information to instructors and other
          users in connection with the courses you enroll in or interact with.
        </li>
        <li>
          We may share your information with service providers who assist us
          in operating and managing the application.
        </li>
        <li>
          We may disclose your information if required by law or in response
          to valid requests by public authorities.
        </li>
      </ul>

      <h2 data-translate="data-security">4. Data Security</h2>
      <ul>
        <li>
          We take reasonable measures to protect your personal information
          from unauthorized access, disclosure, alteration, and destruction.
        </li>
        <li>
          However, please note that no method of transmission over the
          internet or electronic storage is 100% secure and reliable.
        </li>
      </ul>

      <h2 data-translate="your-choices">5. Your Choices</h2>
      <ul>
        <li>
          You may update or correct your personal information by accessing
          your account settings.
        </li>
        <li>
          You may opt-out of receiving promotional emails from us by following
          the instructions provided in the emails.
        </li>
      </ul>

      <h2 data-translate="children's-privacy">6. Children's Privacy</h2>
      <ul>
        <li>
          Our application is not intended for children under the age of 13. We
          do not knowingly collect personal information from children under 13.
        </li>
      </ul>

      <h2 data-translate="changes-to-this-privacy-policy">7. Changes to this Privacy Policy</h2>
      <ul>
        <li>
          We may update this Privacy Policy from time to time. The updated
          version will be posted on this page.
        </li>
      </ul>

      <h2 data-translate="contact-us">8. Contact Us</h2>
      <ul>
        <li>
          If you have any questions or concerns regarding this Privacy Policy,
          please contact us at [email address].
        </li>
      </ul>
    </div>

    <!-- footer code -->
    <div>
    <footer>
    <div class="footer-line-1">
      <!-- <div>
        <a>
          <span class="border-class" data-translate="careers">
            {{ __('lang.footer.careers') }}
          </span>
        </a>
      </div> -->
      <div style="margin-left:3.5rem;">
        <a href="./privacy-policy" style="text-decoration:none">
          <span class="border-class" data-translate="privacy-policy">
            {{ __('lang.footer.privacy_policy') }}
          </span>
        </a>
      </div>
      <div>
        <a href="./terms-conditions" style="text-decoration:none">
          <span class="" data-translate="terms-conditions">
            {{ __('lang.footer.terms_conditions') }}
          </span>
        </a>
      </div>
    </div>
    <div class="footer-line-2">
      <div>
        <span>© <span id="year_span">{{ date('Y') }}</span> {{ __('lang.footer.angez_inc') }} </span>
      </div>
    </div>
  </footer>
  </div>
    <!-- <script src="./assets/js/privacy-policy.js"></script>
    <script src="./assets/js/placeholder.js"></script> -->
    <!-- <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script> -->
    <script src="{{ asset('assets/bootstrap_js/bootstrap.bundle.min.js') }}"></script>
    <script>
       function updateTextLanguage() {
            const path = window.location.pathname;
            const langSelectElement = document.getElementById('lang-select');

            const splits = path.split('/')
// console.log(splits);
            if (splits[1] === 'en') {
                langSelectElement.textContent = 'English ';
                console.log(path)
            } else if (splits[1] === 'ar') {
              langSelectElement.textContent = 'Arabic ';
            }
        }
        window.addEventListener('load', updateTextLanguage);
    </script>
  </body>
</html>
