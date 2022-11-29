
$accessToken = $result['access_token'];

$refreshToken = $result['refresh_token'];





$curl2 = curl_init();



curl_setopt_array($curl2, array(

  CURLOPT_URL => 'https://api.parasut.com/v4/567890/sales_invoices',

  CURLOPT_RETURNTRANSFER => true,

  CURLOPT_ENCODING => '',

  CURLOPT_MAXREDIRS => 10,

  CURLOPT_TIMEOUT => 0,

  CURLOPT_FOLLOWLOCATION => true,

  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

  CURLOPT_CUSTOMREQUEST => 'POST',

  CURLOPT_POSTFIELDS =>'{

  "data": {

    "id": "",

    "type": "sales_invoices",

    "attributes": {

      "item_type": "invoice",

      "description": "Alici Firma",

      "issue_date": "2022-04-28",

      "due_date": "2022-04-28",

      "invoice_series": "string",

      "invoice_id": "30252",

      "currency": "TRL",

      "exchange_rate": 0,

      "withholding_rate": 0,

      "vat_withholding_rate": 0,

      "invoice_discount_type": "percentage",

      "invoice_discount": 0,

      "billing_address": "deniz cad",

      "billing_phone": "5445555555",

      "billing_fax": "string",

      "tax_office": "",

      "tax_number": "18564",

      "country": "Turkiye",

      "city": "İstanbul",

      "district": "string",

      "is_abroad": false,

      "order_no": "30252",

      "order_date": "2022-04-28",

      "shipment_addres": "net caddesi",

      "shipment_included": true,

      "cash_sale": false

  

    },

    "relationships": {

      "details": {

        "data": [

          {

            "id": "",

            "type": "sales_invoice_details",

            "attributes": {

              "quantity": 1,

              "unit_price": 10,

              "vat_rate": 0,

              "discount_type": "percentage",

              "discount_value": 0,

              "excise_duty_type": "percentage",

              "excise_duty_value": 0,

              "communications_tax_rate": 0,

              "description": "string",

              "delivery_method": "CFR",

              "shipping_method": "Çok araçlı"

            },

            "relationships": {

              "product": {

                "data": {

                  "id": "73645481",

                  "type": "products"

                }

              }

            }

          }

        ]

      },

      "contact": {

        "data": {

          "id": "82961097",

          "type": "contacts"

        }

      }

    }

  }

}',

  CURLOPT_HTTPHEADER => array(

    'Authorization: Bearer '.$accessToken.'',

    'Content-Type: application/json',

    

  ),

));



$response = curl_exec($curl2);



curl_close($curl2);

echo $response;

// Paraşüt entegrasyonu icin ulaşabilirsiniz -> oscartestudio@gmail.com Erhan
