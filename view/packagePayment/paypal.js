paypal.Buttons({
        // Sets up the transaction when a payment button is clicked
        createOrder: (data, actions) => {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: packagePrice // Can also reference a variable or function
              }
            }]
          });
        },
        // Finalize the transaction after payer approval
        onApprove: (data, actions) => {
          return actions.order.capture().then(function(orderData) 
          {
            // Successful capture! For dev/demo purposes:
            //console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            //const transaction = orderData.purchase_units[0].payments.captures[0];
            //alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
            // When ready to go live, remove the alert and show a success message within this page. For example:
            // const element = document.getElementById('paypal-button-container');
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');


            console.log('Capture result', orderData);
            console.log("Datas are : \n");
            console.log("Id : " + orderData['id'] + "\n");
            console.log("status: " + orderData['status'] + "\n"); 
            console.log("amount: " + orderData['purchase_units'][0]['amount']['value']);
            console.log("Payment Time: " + orderData['update_time'] + "\n");
            
            let id = orderData['id'];
            let status = orderData['status'];
            let amount = orderData['purchase_units'][0]['amount']['value'];
            let paymentTime = orderData['create_time'];

            let payerEmail = orderData['payer']['address']['email_address'];
            let payerGivenName = orderData['payer']['name']['given_name'];
            let payerSurname = orderData['payer']['name']['surname'];
            let payerId = orderData['payer']['payer_id'];


            window.location = "index.php?action=purchaseSuccess&id="+id+"&status="+status+"&amount="+amount+"&paymentTime="+paymentTime
            +"&payerEmail="+payerEmail+"&payerGivenName="+payerGivenName+"&payerSurname="+payerSurname+"&payerId="+payerId;
          });
        }
      }).render('center');