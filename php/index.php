<?php
    /**
     * Các bạn nhớ thay PUB_ID và TOKEN phù hợp nhé.
     * Liên hệ với hỗ trợ để được nhận token phù hợp.
     */
    $PUB_ID = 'masofferdemo';
    $TOKEN = 'pMPjGuvSlNjiBx7AkXZ4bKyFKemSayMdOQFjsFXUc_Y';
    $BASED_API_URL = "https://api.masoffer.com/offer/all?";
    $API_URL = $BASED_API_URL . "pub_id=$PUB_ID&token=$TOKEN";

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $API_URL,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    if ($err) {
        $offer_data = array();
    } else {
        $data_response = json_decode($response, true);
        $offer_data = $data_response['data'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-pink.min.css" />
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <style>
        .shop_img {
            max-height: 80px;
        }
    </style>
</head>
<body>
    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
        <thead>
        <tr>
            <th></th>
            <th class="mdl-data-table__cell--non-numeric">Shop Id</th>
            <th class="mdl-data-table__cell--non-numeric">Tên shop</th>
            <th class="mdl-data-table__cell--non-numeric">Domain</th>
            <th class="mdl-data-table__cell--non-numeric">Loại sản phẩm</th>
            <th class="mdl-data-table__cell--non-numeric">Address</th>
        </tr>
        </thead>
        <tbody>
        <?php
            foreach ($offer_data as $offer) :
        ?>
            <tr>
                <td class="mdl-data-table__cell--non-numeric"><img class="shop_img" src="<?php echo $offer['avatar']?>"/></td>
                <td class="mdl-data-table__cell--non-numeric"><?php echo $offer['offer_id']?></td>
                <td class="mdl-data-table__cell--non-numeric"><?php echo $offer['name']?></td>
                <td class="mdl-data-table__cell--non-numeric"><a href="<?php echo $offer['domain']?>"><?php echo $offer['domain']?></a></td>
                <td class="mdl-data-table__cell--non-numeric"><?php echo $offer['product_type']?></td>
                <td class="mdl-data-table__cell--non-numeric"><?php echo $offer['address']?></td>
            </tr>
        <?php
            endforeach;
        ?>
        </tbody>
    </table>
</body>
</html>