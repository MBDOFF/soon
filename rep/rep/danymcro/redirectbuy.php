<?php

echo "";


$price = $_GET['p'];

$link="https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=hnatiucdanielmc%40gmail%2ecom&lc=RO&item_name=DanyMcRo_%20Service&amount=".$price."&currency_code=EUR&button_subtype=services&no_note=1&no_shipping=2&tax_rate=0%2e000&shipping=0%2e00&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted";

header("Location: ".$link);


?>