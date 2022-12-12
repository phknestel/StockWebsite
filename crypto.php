<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <title>Crypto</title>
  <?php include 'head.php';?>
</head>

<body>

  <?php include 'navbar.php';?>

  <main>

    <div class="w3-container w3-center w3-hide-small w3-margin-top w3-">
      <img src="pictures/bitcoin.jpg" alt="Logo" style="width: 50%;">
    </div>

    <div class="w3-container w3-center w3-hide-large w3-hide-medium w3-margin-top">
      <img src="pictures/bitcoin.jpg" alt="Logo" style="width: 100%;">
    </div>

    <div class="row">
      <div class="card w3-round-large w3-center">
        <h1 class="w3-center">Crypto</h1>
        <br>
      </div>
    </div>

    <div class="row">
      <div class="w3-card-4 w3-margin cardKNDL w3-round-large w3-center">
        <div class="w3-container w3-center">
          <a>___</a>
        </div>
        <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://de.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text">Kryptowährungsmärkte</span></a> von TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
  {
  "width": "100%",
  "height": "700",
  "defaultColumn": "overview",
  "screener_type": "crypto_mkt",
  "displayCurrency": "USD",
  "colorTheme": "dark",
  "locale": "de_DE"
}
  </script>
</div>
<!-- TradingView Widget END -->
      </div>
    </div>

  </main>

  <div class="slideshow">
    <?php include 'slideshow.php';?>
  </div>

  <?php include 'footer.php';?>

</body>

</html>
