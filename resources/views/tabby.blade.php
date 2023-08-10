{{-- @extends('layouts.app')
@section('content')
<div id="TabbyPromo"></div>
<script src="https://checkout.tabby.ai/tabby-promo.js"></script>
<script>
      new TabbyPromo({
        installmentsCount: 4,
        selector: '#tabby'
      });
    </script>
<script src="https://checkout.tabby.ai/tabby-promo.js"></script>
<script>
new TabbyPromo({
  selector: '#TabbyPromo', // required, content of tabby Promo Snippet will be placed in element with that selector.
  currency: 'AED', // required, currency of your product. AED|SAR|KWD|BHD|QAR only supported, with no spaces or lowercase.
  price: '500.00', // required, price or the product. 2 decimals max for AED|SAR|QAR and 3 decimals max for KWD|BHD.
  installmentsCount: 4, // Optional, for non-standard plans.
  lang: 'en', // Optional, language of snippet and popups, if the property is not set, then it is based on the attribute 'lang' of your html tag.
  source: 'product', // Optional, snippet placement; `product` for product page and `cart` for cart page.
  publicKey: 'pk_test_cc29d87d-852a-4d37-bca8-5f07f87101b7', // required, store Public Key which identifies your account when communicating with tabby.
  merchantCode: 'Elite Students Paylinks' // required
});
</script>
@endsection --}}

@extends('layouts.app')
@section('content')
<div id="tabbyCard"></div>
<script src="https://checkout.tabby.ai/tabby-card.js"></script>
<script>
new TabbyCard({
  selector: '#tabbyCard', // empty div for TabbyCard.
  currency: 'AED', // required, currency of your product. AED|SAR|KWD|BHD|QAR only supported, with no spaces or lowercase.
  lang: 'en', // Optional, language of snippet and popups.
  price: 1200, // required, total price or the cart. 2 decimals max for AED|SAR|QAR and 3 decimals max for KWD|BHD.
  size: 'narrow', // required, can be also 'wide', depending on the width.
  theme: 'black', // required, can be also 'default'.
  header: false // if a Payment method name present already. 
//   publicKey: '', // required, store Public Key which identifies your account when communicating with tabby.
//   merchantCode: 'Elite Students Paylinks' // required
});
</script>
<button type="button" data-tabby-info="installments" data-tabby-price="700" data-tabby-currency="AED">Click me</button>
    <script src="https://checkout.tabby.ai/tabby-promo.js"></script>
    <script>
      new TabbyPromo({});
    </script>
@endsection