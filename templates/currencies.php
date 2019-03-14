<?php
//var_dump($_POST);
//$rates = file_get_contents("https://api.exchangeratesapi.io/latest");
//$rates = json_decode($rates,true);
$valutes =
    [
        "MXN",
        "AUD",
        "HKD",
        "RON",
        "HRK",
        "CHF",
        "IDR",
        "CAD",
        "USD",
        "ZAR",
        "JPY",
        "BRL",
        "HUF",
        "CZK",
        "NOK",
        "INR",
        "DKK"
    ];
$baseUrl = "https://api.exchangeratesapi.io/latest";
if (isset($_POST) && !empty($_POST)) {
    $queryParams['base'] = isset($_POST['baseCurrency']) ? $_POST['baseCurrency'] : 'EUR';
    $queryParams['symbols'] = isset($_POST['list']) ? implode(',', $_POST['list']) : '';

    $queryString = http_build_query($queryParams);
    $rates = file_get_contents($baseUrl . "?" . $queryString);
    $rates = json_decode($rates, true);
//    var_dump($rates);

}
?>

<div class="row">
    <div class="col-6">
        <h2>Get currencies</h2>
        <form action="" method="post" >
            <div class="form-group">
                <label for="baseCurrency"> Base currency</label>
                <select name="baseCurrency" id="baseCurrency" class="form-control">
                    <?php foreach ($valutes as $valute) { ?>
                        <option value="<?= $valute ?>"><?= $valute ?></option>
                    <?php } ?>
                </select>
            </div>

                <?php foreach ($valutes as $valute) { ?>
            <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="<?= $valute ?>" name="list[]"
                           value="<?= $valute ?>">
                    <label class="form-check-label" for="<?= $valute ?>"><?= $valute ?></label>
            </div>
                <?php } ?>


            <button type="submit" class="btn btn-info">GET RATES</button>
        </form>
    </div>
    <div class="col-6">
        <h2>Rates</h2>

        <?php
        if (isset($rates) && !empty($rates)) {
            ?>
            <ul class="list-group">
                <?php foreach ($rates['rates'] as $key=>$value) { ?>
                        <li class="list-group-item">1 <?= $queryParams['base']?> =  <?=$value?> <?=$key?> </li>
                <?php } ?>
            </ul>
        <?php } else { ?>
            <p>Форма еще не отправлена</p>
        <?php } ?>
    </div>
</div>