



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayPal JS SDK Standard Integration</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f3f3f3;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .checkout-header {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }

        .amazon-logo {
            width: 120px;
            margin-right: 30px;
        }

        .checkout-steps {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .step {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .step-circle {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background-color: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .step.active .step-circle {
            background-color: #ff9900;
            color: white;
        }

        .checkout-main {
            display: flex;
            gap: 30px;
        }

        .checkout-form {
            flex: 2;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
        }

        .order-summary {
            flex: 1;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            height: fit-content;
        }

        .section-title {
            font-size: 20px;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #ddd;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        .payment-options {
            margin-top: 30px;
        }

        .payment-method {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .order-item {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .item-image {
            width: 80px;
            height: 80px;
            object-fit: contain;
        }

        .price-summary {
            margin-top: 20px;
        }

        .price-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .total {
            font-weight: bold;
            font-size: 18px;
            border-top: 1px solid #ddd;
            padding-top: 15px;
        }

        .place-order-btn {
            width: 100%;
            background-color: #ff9900;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }

        .place-order-btn:hover {
            background-color: #ff8400;
        }

        @media (max-width: 768px) {
            .checkout-main {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container">



        <!-- Main Checkout Content -->
        <div class="checkout-main">
            <!-- Shipping Address Form -->
            <div class="checkout-form">
                <h2 class="section-title">Shipping Address</h2>
                
                <form>
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" required>
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" required>
                    </div>

                    <div class="form-group">
                        <label>City</label>
                        <input type="text" required>
                    </div>

                    <div class="row">
                        <div class="form-group" style="flex: 1; margin-right: 15px;">
                            <label>country</label>
                            <select required>
                                <option value="">Yemen </option>
                                <option value="">Saudi Arabia</option>
                                <option value="">UAE</option>
                                <option value="">Egypt</option>
                                <option value="">Oman</option>
                                <!-- Add state options -->
                            </select>
                        </div>
                        <div class="form-group" style="flex: 1; margin-right: 15px;">
                            <label>region</label>
                            <input list="regions">
                            <datalist id="regions">
                                <option value="taiz">
                                <option value="adn">
                                <option value="aeb">
                                <option value="snaa">
                                
                            </datalist>
                        </div>


                        <div class="form-group" style="flex: 1;">
                            <label>ZIP/Postal Code</label>
                            <input type="text" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="tel" required>
                    </div>

                    <div class="payment-options">
                        <h2 class="section-title">Payment Method</h2>
                        
                        <!-- payment method butoon !-->
                        <div id="paypal-button-container"></div>
                        <p id="result-message"></p>


                    </div>
                </form>
            </div>





    <!-- Initialize the JS-SDK -->
    <script
        src="https://www.paypal.com/sdk/js?client-id=ARFXik-u5Tx7mk_2lkiE17Wy1piKgNQcErwnzhNdSseFH0msVVFjKr_LW3TJBd8Lf7pPy4Npveip1yvC&buyer-country=US&currency=USD&components=buttons&enable-funding=venmo,paylater,card"
        data-sdk-integration-source="developer-studio"></script>
    <!-- <script src="app.js"></script> !-->





            <!-- Order Summary -->
            <div class="order-summary">
                <h2 class="section-title">Order Summary</h2>
                
                <div class="order-item">
                    <img src="product.jpg" alt="Product" class="item-image">
                    <div>
                        <h3>Wireless Headphones</h3>
                        <p>Quantity: 1</p>
                        <p class="price">$149.99</p>
                    </div>
                </div>

                <div class="price-summary">
                    <div class="price-row">
                        <span>Subtotal:</span>
                        <span>$149.99</span>
                    </div>
                    <div class="price-row">
                        <span>Shipping:</span>
                        <span>$0.00</span>
                    </div>
                    <div class="price-row">
                        <span>Tax:</span>
                        <span>$12.00</span>
                    </div>
                    <div class="price-row total">
                        <span>Total:</span>
                        <span>$161.99</span>
                    </div>
                </div>

                <button class="place-order-btn">Place Your Order</button>

            </div>
        </div>
    </div>



</body>
<script>
        window.paypal
            .Buttons({
                style: {
                    shape: "rect",
                    layout: "vertical",
                    color: "gold",
                    label: "paypal",
                },
                message: {
                    amount: 100,
                },

                async createOrder() {
                    try {
                        const response = await fetch("/api/orders", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                            },
                            // use the "body" param to optionally pass additional order information
                            // like product ids and quantities
                            body: JSON.stringify({
                                cart: [{
                                    id: "YOUR_PRODUCT_ID",
                                    quantity: "YOUR_PRODUCT_QUANTITY",
                                }, ],
                            }),
                        });

                        const orderData = await response.json();

                        if (orderData.id) {
                            return orderData.id;
                        }
                        const errorDetail = orderData?.details?.[0];
                        const errorMessage = errorDetail ?
                            `${errorDetail.issue} ${errorDetail.description} (${orderData.debug_id})` :
                            JSON.stringify(orderData);

                        throw new Error(errorMessage);
                    } catch (error) {
                        console.error(error);
                        // resultMessage(`Could not initiate PayPal Checkout...<br><br>${error}`);
                    }
                },

                async onApprove(data, actions) {
                    try {
                        const response = await fetch(
                            `/api/orders/${data.orderID}/capture`, {
                                method: "POST",
                                headers: {
                                    "Content-Type": "application/json",
                                },
                            }
                        );

                        const orderData = await response.json();
                        // Three cases to handle:
                        //   (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()
                        //   (2) Other non-recoverable errors -> Show a failure message
                        //   (3) Successful transaction -> Show confirmation or thank you message

                        const errorDetail = orderData?.details?.[0];

                        if (errorDetail?.issue === "INSTRUMENT_DECLINED") {
                            // (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()
                            // recoverable state, per
                            // https://developer.paypal.com/docs/checkout/standard/customize/handle-funding-failures/
                            return actions.restart();
                        } else if (errorDetail) {
                            // (2) Other non-recoverable errors -> Show a failure message
                            throw new Error(
                                `${errorDetail.description} (${orderData.debug_id})`
                            );
                        } else if (!orderData.purchase_units) {
                            throw new Error(JSON.stringify(orderData));
                        } else {
                            // (3) Successful transaction -> Show confirmation or thank you message
                            // Or go to another URL:  actions.redirect('thank_you.html');
                            const transaction =
                                orderData?.purchase_units?.[0]?.payments
                                ?.captures?.[0] ||
                                orderData?.purchase_units?.[0]?.payments
                                ?.authorizations?.[0];
                            resultMessage(
                                `Transaction ${transaction.status}: ${transaction.id}<br>
          <br>See console for all available details`
                            );
                            console.log(
                                "Capture result",
                                orderData,
                                JSON.stringify(orderData, null, 2)
                            );
                        }
                    } catch (error) {
                        console.error(error);
                        resultMessage(
                            `Sorry, your transaction could not be processed...<br><br>${error}`
                        );
                    }
                },
            })
            .render("#paypal-button-container");
    </script>
</html>