<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap_css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/style/terms-conditions.css') }}" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

  <title>Terms and Conditons</title>
</head>

<body>
  <div>
    <!-- NavBar Code -->
    <div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
        <a class="navbar-brand" href="/"><img src="{{ url('assets/images/Group 6.png') }}" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <div class="dropdown">
              <div class="language-div dropdown-toggle" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                <div>
                  <i class="bi bi-globe"></i>
                </div>
                <div class="language">
                  <span id="lang-select" data-translate="lang"> English </span>
              
                </div>
                <div><i class="bi bi-chevron-down"></i></div>
              </div>
              <ul class="dropdown-menu"  aria-labelledby="dropdownMenu2">

                <li>
                  <a class="eng_btn_bg" style="margin-left:20px;" rel="alternate"  hreflang="en" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">  
                    English
                  </a>
                </li>
                <li>

                  <a class="eng_btn_bg" style="margin-left:20px;" rel="alternate" hreflang="ar" href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
                    Arabic
                  </a>

                </li>
              </ul>
            </div>
          </li>
          @if(!Auth::check())
          <li class="nav-item left-line">
            <a class="nav-link" href="{{ route('login') }}">
              <span data-translate="log-in">{{ __('lang.navbar.login') }}</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('signup-page') }}">
              <button data-translate="sign-up">{{ __('lang.navbar.signup') }}</button>
            </a>
          </li>
          @else
        
          <li class="nav-item">
            @if(Auth::user()->id==1)
            <a href="{{ route('admindashboard.admin-index') }}">
            @else
            <a href="{{ route('studentdashboard.student-dashboard') }}">
            @endif
              <button data-translate="sign-up">Dashboard</button>
            </a>
          </li>
          @endif
        </ul>
      </div>
  </div>
  </nav>
    </div>
  </div>


  <div class="container terms px-5">
    <div class="heading"> <span data-translate="legal-terms-&-conditions"> LEGAL TERMS & CONDITIONS</span> </div>
    <div class="paragraph">
      <p> Our services are provided by “Anjez Interactive” or “Anjez”. <br> By using our product &
        services,
        you are agreeing to the following terms. Please read them carefully.</p>
    </div>
    <div class="heading"> <span data-translate="defination">1. Definitions</span> </div>
    <div class="points">
      <ul>
        <li>“You” means an individual, a company or any other legal entity you represent.</li>
        <li>“Client” means companies registered to use our product & services.</li>
        <li>“Linguist” means third party resources (translators and interpreters) that are engaged under
          contractual terms with Anjez and who are not full time employees.</li>
        <li>“Service” means all of the offerings as indicated on Anjez’s website.</li>
        <li>“Product” means Anjez Interactive; a remote interpretation solution owned by
          Anjez.</li>
        <li>“Request” means any service order put out by the client and accepted by Anjez</li>
        <li>“Contract” means a contractual agreement between Anjez and the client for the use of either
          our product or services, or both.</li>
        <li>“Terms & Conditions” or “T&Cs” means all the clauses mentioned herein.</li>
        <li>“Source File” means the content shared by the client for the purpose of localisation.</li>
        <li>“Turnaround Time” means the estimated delivery time of a request.</li>
      </ul>
    </div>
    <div class="heading"> <span data-translate="using-our-services">2. Using Our Services</span> </div>
    <div class="paragraph">
      <p> If you are entering into a contract with Anjez on behalf of your company or any other legal entity
        with you legally represent, and have the legal authority to enter into a contract with Anjez, “You” and
        “Your” would mean that entity in such case(s). If you are not legally authorized to enter into a contract with
        Anjez, or if you do not accept Anjez’s Terms & Conditions (T&Cs) as stated herein, you may not
        utilize the service/product offerings provided by Anjez.
        <br>
        By accepting these T&Cs, you are confirming that you are at least 18 years of age and agree to the following
        conditions:
      </p>
    </div>
    <div class="points px-3">
      <ul>
        <li>Be accountable and responsible for the interaction with Anjez in relation to our service /
          product offerings.</li>
        <li>Show your compliance with any and all policies made available by Anjez.</li>
        <li>Not conduct any abusive, inappropriate or illegal activity while using our product.</li>
        <li>Not engage with linguists directly and only communicate with your dedicated Account Manager for the purpose
          of any feedback / amendments.</li>
        <li>Not share the financial proposal carefully drafted for you with other existing or potential clients.</li>
        <li>Not defame, wrongfully accuse or harass Anjez, or its employees and linguists.</li>
      </ul>
    </div>
    <div class="paragraph">
      <p>Anjez may suspend of terminate your contract or access to our product & services if you do not comply
        with our T&Cs, or if we suspect misconduct, fraudulent activities and/or payments, or violation of any of the
        clauses mentioned in our T&Cs, with or without notice.</p>
    </div>
    <div class="heading"> <span data-translate="terms-of-use">3. Terms of Use</span> </div>
    <div class="paragraph">
      <p> The use of Anjez’s website are subject to the following terms:</p>
    </div>
    <div class="points px-3">
      <ul>
        <li>The content of our webpages are for general knowledge and subject to change without any notice.</li>
        <li>Our web browser uses “cookies” to monitor browsing preferences.</li>
        <li>We do not offer any warranty or guarantee for the absolute timelines, accuracy, performance and completion
          of the service offering for a particular purpose.</li>
        <li>You acknowledge that as translations/interpretations is a subjective field, certain deliverables may contain
          inaccuracies or stylistic errors, and we explicitly exclude liability for such inaccuracies/errors to the
          fullest extent, as permitted by the respective legislations.</li>
        <li>The use of information, services, product or materials in relation to Anjez is owned and/or licensed
          to us. Such information includes: <br>– Design <br>
          – Layout <br>
          – Style <br>
          – Graphics <br>
          – Terminology <br>
          – Guides
        </li>
        <li>The use of information made available on our website by you shall be entirely at your own risk, for which
          Anjez shall not be liable.</li>
        <li>Unauthorized use of our website may lead to us claiming for damages and/or file it as a criminal Offense.
        </li>
        <li>In case external links are found on our website, we do not take any responsibility for the content made
          available on the linked website and this shall not be regarded as Anjez endorsing any such links.</li>
        <li>Your use of our website and any disputes arising out of such use of the website is subject to the laws of
          either United Arab Emirates or United Kingdom.</li>
      </ul>
    </div>
    <div class="heading"> <span data-translate="requesting-product-7-services">4. Requesting Product & Services</span> </div>
    <div class="paragraph mt-2">
      <p> <span> (a) On-boarding: </span> Before initiating a request to use the product and/or services offered by
        Anjez, you
        must first complete the on-boarding process with your dedicated Account Manager. By accepting our T&Cs, you
        agree to accommodate Anjez with any and all the information requested at the point of on-boarding,
        unless otherwise agreed between both parties.
        <br>
        <span>(b) Payment: </span> It is your responsibility to ensure you are well informed and aware of
        Anjez’s payment policy prior to initiating a request. All payments made to Anjez shall be made
        in cleared funds only, without any deduction of taxes, levies, import duties or withholdings of any nature. In
        case adding such deductions to the payment is compulsory, you are obligated to cover any additional amount as
        necessary to ensure the amount invoiced by Anjez is compensated
        accordingly.
        <br>
        <span> (c) Request:</span> You can initiate a request to for the use of our product directly on Anjez
        Interactive. Request for additional services shall be made via electronic mail to the dedicated Account Manager
        along with the details and nature of the request.
        <br>
        <span>(d) Source File: </span> You are responsible for sharing the source files that required localisation,
        along with additional documents such as Glossary of Words, Style Guide, Translation Memory when making a
        request. Anjez may make suggestions as to which file format shall be accepted and/or preferred. However,
        the quality of the deliverables shall be dependent on the clarity, accuracy and comprehensiveness of the source
        file and any reference documents shared by the client
        <br>
        <span>(e) Cancellation:</span> You may cancel your request at any time, even if part of the request has already
        been completed as part of the localisation process. However, cancellation penalties will be applicable to all
        the requests that are cancelled. In case a request that has already gone into production has been cancelled, the
        client will be subject to cancellation penalties along with an invoice of the amount of localisation completed
        for that particular request.
        <br>
        <span>(f) Turnaround Times: </span> Anjez will aim its best to accommodate the client with accurate
        delivery times however, the client understands that such turnaround times are estimated and not guaranteed to be
        exact. In case a request is delivered earlier or later than the specified turnaround time, the client will be
        notified by their dedicated Account Manager.
        <br>
        <span>(g) Supervision: </span>Anjez allows the client to reserve the right to supervise the activities
        proposed as part of our product & service offerings, as reasonably necessary to ensure the satisfactory and
        timely completion of the services and delivery of the project request. Notwithstanding the supervision of the
        client, Anjez will fulfil its obligations in a professional manner, with a degree of skill and judgement
        that meets the highest international standards as per the languages industry.
        <br>
        <span> (h) Preferences: </span>Since translation is a subjective process through which different individuals may
        express the same meaning using different word choices, Anjez will endeavor to work closely with the
        client in ensuring that the relevant stylistic corrections (if any) are completed within the required timeframe.
        Additionally, there may be “personal preferences” in word selection that may be stylistic or based on a person’s
        familiarity with a company- or industry-specific terminology. Anjez will attempt to utilize reference
        materials and glossaries to a commercially reasonable extent, but there remains the likelihood that the client
        may prefer word insertions or replacements.
        <br>
        <span>(i) Inspection: </span> Upon receipt of the deliverables from Anjez, the client shall immediately
        inspect the same and notify Anjez of any concerns within five (5) business days of receipt of
        deliverables via return receipt or electronic mail to your dedicated Account Manager.
      </p>
    </div>
    <div class="heading"> <span data-translate="linguists">5. Linguists</span> </div>
    <div class="paragraph">
      <p> Anjez may use and retain third party contractors such as translators and interpreters in order to
        provide the service offerings as proposed by Anjez. By accepting our T&Cs, you agree that Anjez
        sublicense its rights to such third party linguists to act on behalf of Anjez, granted that such third
        party linguists have a valid contractual agreement in line with the respective legislations, and strict
        Non-Disclosure Agreements with Anjez </p>
    </div>
    <div class="heading"> <span data-translate="intellectual-property-2">6. Intellectual Propert</span> </div>
    <div class="paragraph">
      <p> All the intellectual property rights in the delivered requests shall be assigned to the client upon their
        approval and compliance to our T&Cs. Nothing contained in these T&Cs shall be construed as granting any license
        or rights to use any trademarks without a written permission from Anjez. All the content delivered is
        strictly protected by intellectual property laws and may not be copied, distributed, modified or transmitted in
        any manner.</p>
    </div>
    <div class="heading"> <span data-translate="warranties-and-covenants">7. Warranties and Covenants</span> </div>
    <div class="paragraph">
      <p>The Client acknowledges, agrees, represents, warrants, and covenants that (i) the Client shall not solicit the
        services of the interpreter(s), either directly or indirectly, for the Client’s benefit, the interpreter(s)
        benefit, or the benefit of any third party, including, without limitation, attempting to hire or independently
        contract with the interpreter(s), and (ii) should the Client require work to be completed beyond this agreement,
        then the Client shall not under any circumstance attempt to contract work from the interpreter(s) directly. The
        foregoing provisions of this paragraph shall cease to apply to the Client in respect of any particular
        interpreter(s) after the second (2nd) anniversary of the last date on which such interpreter(s) performed any
        work for the Client on behalf of Anjez, whether pursuant to this agreement or otherwise.

        At no time will the Client permit (i) any interpreter(s) to remove documents or other materials from the
        Client’s offices, or (ii) any interpreter(s) to retain other interpreters for the purposes of outsourcing any of
        the interpreter’s services being rendered to the Client.</p>
    </div>
    <div class="heading"> <span data-translate="indemnity">8. Indemnity</span> </div>
    <div class="paragraph">
      <p> The client will indemnify and exempt Anjez, its affiliates, current and past management and employees
        from and against all claims, taxes, losses, damage, liabilities, judgements, settlements, costs and expenses of
        all nature, having direct and indirect connection with (i) the client’s breach of obligations, (ii) the client’s
        negligence and wrongful acts and (iii), the client’s failure to perform its obligations in accordance with the
        applicable laws and regulations.</p>
    </div>
    <div class="heading"> <span data-translate="limitations-of-liability">9. Limitations of Liability</span> </div>
    <div class="paragraph">
      <p> Under no circumstance shall either party; Anjez or the client, be liable for any direct or indirect,
        incidental, special or consequential damages, or damages for lost profit and loss of business, regardless of
        either party being advised of the possibility of such damages and notwithstanding the failure of the main
        objective of any limited remedy. In no event shall Anjez’s liability hereunder exceed the amount paid by
        the client to Anjez during the 12-month contractual period before the event giving rise to such
        liability.</p>
    </div>
    <div class="heading"> <span data-translate="non-solicitation">10. Non Solicitation</span> </div>
    <div class="paragraph">
      <p>By accepting our T&Cs, the client agrees that during the contractual term and for a period of 12 months’ post
        contract termination/expiration, the client shall not directly or indirectly canvas with a view of indicating
        employment to, offer an employment contract or entice any staff associated directly or indirectly with
        Anjez without the prior consent of Anjez.</p>
    </div>
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
<!-- 
  <script src="./assets/js/terms-conditions.js"></script>
  <script src="./assets/js/placeholder.js"></script> -->

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script> -->
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