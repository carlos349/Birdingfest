<center>
    <img src="views/images/core-img/opcion1.jpg" alt=""> <br>
</center>

<div id="paypal-button-container"></div>
<script src="https://www.paypal.com/sdk/js?client-id=ASy-KW8vpXnf6s2xG6W_4VoEJ3Ub-1PobuQHhLD_qp-wu3rtKYb18mGa7mVwyW_N7l9WnyEjXQDImRif&currency=USD" data-sdk-integration-source="button-factory"></script>
<script>
  paypal.Buttons({
      style: {
          shape: 'pill',
          color: 'black',
          layout: 'vertical',
          label: 'buynow',
          
      },
      createOrder: function(data, actions) {
          return actions.order.create({
              purchase_units: [{
                  amount: {
                      value: '6'
                  }
              }]
          });
      },
      onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
              alert('Transaction completed by ' + details.payer.name.given_name + '!');
          });
      }
  }).render('#paypal-button-container');
</script>