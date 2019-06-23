<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>JAM Conf QC</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdn.snipcart.com/scripts/2.0/snipcart.js" id="snipcart" data-api-key="MzMxN2Y0ODMtOWNhMy00YzUzLWFiNTYtZjMwZTRkZDcxYzM4"></script>
    <link href="https://cdn.snipcart.com/themes/2.0/base/snipcart.min.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript">
        document.addEventListener('snipcart.ready', function() {
            Snipcart.subscribe('item.adding', function(ev, item) {
                if(item.id == 'jam-conf-qc' && item.metadata && item.metadata.fromHtml) {
                    ev.preventDefault();

                    var quantity = item.quantity;
                    item.quantity = 1;

                    Snipcart.api.configure('show_cart_automatically', false);

                    var items = new Array(quantity).fill({
                        id: item.id,
                        name: item.name,
                        price: item.price,
                        url: item.url,
                        customFields: item.customFields,
                        stackable: false,
                        shippable: item.shippable,
                    });

                    Snipcart.api.items.add(items).then(function(){
                        Snipcart.api.configure('show_cart_automatically', true);
                        Snipcart.api.modal.show();
                    }, function() {
                        console.warn(arguments)
                    });
                }
            });
        });
        $(function() {
            var btn = $('#buy-button');
            $('#qnt').change(function() {
                btn.attr('data-item-quantity', this.value);
            })
        });
    </script>
    <style type="text/css">
        html, body {
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
        }
        html {
            position: relative;
            overflow: hidden;
        }
        html:before {
            display: block;
            position: fixed;
            content: ' ';
            width: 105%;
            height: 105%;
            margin: -2.5%;
            z-index: -1;

            background-image: url(./bg2.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;

            -webkit-filter: blur(5px);
            -moz-filter: blur(5px);
            -o-filter: blur(5px);
            -ms-filter: blur(5px);
            filter: blur(4px);
        }
        body {
            overflow-y: scroll;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .main {
            max-width: 90%;
            width: 23em;
            margin: auto;

            background-color: rgba(255, 255, 255, 0.62);
            box-sizing: border-box;
            padding-top: 0.5em;
            border-radius: 1em;

            text-align: center;
            color: #E9524D;
            font-family: 'Helvetica', 'Arial';
        }
        h1 {
            background-image: url(./logo.svg);
            background-repeat: no-repeat;
            background-position: top right;
            text-indent: -999em;
            overflow: hidden;
            height: 9em;
            margin: 0;
            display: block;
            box-sizing: border-box;
            padding: 1em 2em;
            background-origin: content-box;
            margin: 0;
        }

        section {
            background-color: white;
            padding: 1em;
            border-radius: 0 0 1em 1em;
        }

        h2 {
            font-size: 1.5em;
            margin: 0;
        }

        h2 span {
            font-size: .5em;
            display: block;
            text-align: left;
        }
        button {
            font-family: inherit;
            font-size: 0.8em;
        }
    </style>
</head>
<body>
<div class="main">
    <h1>JAM Conf Qc 2018</h1>
    <section>
        <h2><span>Register for</span> JAM Conf 2018!</h2>
        <p>
            <label>Number of attendees:
                <select id="qnt">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                </select>
            </label>
        </p>
        <p>
            <button class="snipcart-add-item" id="buy-button"
                    data-item-id="jam-conf-qc"
                    data-item-name="JAM Conf QC"
                    data-item-price="245.99"
                    data-item-url="https://snipcart.github.io/event-tickets/"

                    data-item-custom1-name="Name"
                    data-item-custom2-name="Company"

                    data-item-shippable="false"
                    data-item-metadata='{"fromHtml":true}'
            >
                Buy tickets
            </button>
        </p>
    </section>
</div>

</body>
</html>
