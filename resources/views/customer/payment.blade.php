@extends('customer.layouts.master')

@section('content')
<style>

#payment-container {
    width:500px;
    margin: 10px auto;
}
#card-number, #cvv, #expiration-date {
  border: 1px solid #333;
  -webkit-transition: border-color 160ms;
  transition: border-color 160ms;
  height: 30px;
  margin-bottom: 10px;
  padding: 5px;
}

#card-number.braintree-hosted-fields-focused {
  border-color: #777;
}

#card-number.braintree-hosted-fields-invalid {
  border-color: tomato;
}

#card-number.braintree-hosted-fields-valid {
  border-color: limegreen;
}
</style>
<section class="product-container">

    <div id="payment-container">
    <h2>Total $231</h2>
    <form action="/payment" id="my-sample-form" method="post">
      @csrf
      <input type="hidden" name="payment_method_nonce" value="">
      <label for="card-number">Card Number</label>
      <div id="card-number"></div>

      <label for="cvv">CVV</label>
      <div id="cvv"></div>

      <label for="expiration-date">Expiration Date</label>
      <div id="expiration-date"></div>

      <input type="submit" value="Pay" disabled />
    </form>
    </div>
    <script src="https://js.braintreegateway.com/web/3.34.0/js/client.min.js"></script>
    <script src="https://js.braintreegateway.com/web/3.34.0/js/hosted-fields.min.js"></script>
    <script>
      var form = document.querySelector('#my-sample-form');
      var submit = document.querySelector('input[type="submit"]');

      braintree.client.create({
        authorization: '{{ $clientToken }}'
      }, function (clientErr, clientInstance) {
        if (clientErr) {
          console.error(clientErr);
          return;
        }

        // This example shows Hosted Fields, but you can also use this
        // client instance to create additional components here, such as
        // PayPal or Data Collector.

        braintree.hostedFields.create({
          client: clientInstance,
          styles: {
            'input': {
              'font-size': '14px'
            },
            'input.invalid': {
              'color': 'red'
            },
            'input.valid': {
              'color': 'green'
            }
          },
          fields: {
            number: {
              selector: '#card-number',
              placeholder: '4111 1111 1111 1111'
            },
            cvv: {
              selector: '#cvv',
              placeholder: '123'
            },
            expirationDate: {
              selector: '#expiration-date',
              placeholder: '10/2019'
            }
          }
        }, function (hostedFieldsErr, hostedFieldsInstance) {
          if (hostedFieldsErr) {
            console.error(hostedFieldsErr);
            return;
          }

          submit.removeAttribute('disabled');

          form.addEventListener('submit', function (event) {
            event.preventDefault();

            hostedFieldsInstance.tokenize(function (tokenizeErr, payload) {
              if (tokenizeErr) {
                console.error(tokenizeErr);
                return;
              }
              document.querySelector('input[name="payment_method_nonce"]').value = payload.nonce;
              form.submit();
            });
          }, false);
        });
      });
    </script>

</section>

@endsection