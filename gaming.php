<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <title>Gaming</title>
  <?php include 'head.php';?>
</head>

<body>

  <?php include 'navbar.php';?>

  <main>

    <div class="w3-container w3-center w3-hide-small w3-margin-top w3-">
      <img src="pictures/gaming.jpg" alt="Logo" style="width: 50%;">
    </div>

    <div class="w3-container w3-center w3-hide-large w3-hide-medium w3-margin-top">
      <img src="pictures/gaming.jpg" alt="Logo" style="width: 100%;">
    </div>

    <div class="row">
      <div class="w3-card-4 w3-margin cardKNDL w3-round-large w3-center">
        <h1 class="w3-center">Gaming</h1>
        <br>
      </div>
    </div>

    <div class="row">
      <div class="w3-card-4 w3-margin cardKNDL w3-round-large w3-center">
        <div class="w3-container w3-center">
          <a>___</a>
        </div>
        <div class="w3-third w3-container w3-center">

          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"><a href="https://de.tradingview.com/symbols/FWB-TH9A/" rel="noopener" target="_blank"><span class="blue-text">TH9A Kurse</span></a> von TradingView</div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
              {
                "symbol": "FWB:TH9A",
                "width": "100%",
                "height": "100%",
                "locale": "de_DE",
                "dateRange": "12M",
                "colorTheme": "dark",
                "trendLineColor": "#37a6ef",
                "underLineColor": "rgba(55, 166, 239, 0.15)",
                "isTransparent": true,
                "autosize": true,
                "largeChartUrl": ""
              }
            </script>
          </div>
          <!-- TradingView Widget END -->

          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"><a href="https://de.tradingview.com/symbols/FWB-5RZ/" rel="noopener" target="_blank"><span class="blue-text">5RZ Kurse</span></a> von TradingView</div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
              {
                "symbol": "FWB:5RZ",
                "width": "100%",
                "height": "100%",
                "locale": "de_DE",
                "dateRange": "12M",
                "colorTheme": "dark",
                "trendLineColor": "#37a6ef",
                "underLineColor": "rgba(55, 166, 239, 0.15)",
                "isTransparent": true,
                "autosize": true,
                "largeChartUrl": ""
              }
            </script>
          </div>
          <!-- TradingView Widget END -->

        </div>
        <div class="w3-third w3-container w3-center">

          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"><a href="https://de.tradingview.com/symbols/FWB-7CD/" rel="noopener" target="_blank"><span class="blue-text">7CD Kurse</span></a> von TradingView</div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
              {
                "symbol": "FWB:7CD",
                "width": "100%",
                "height": "100%",
                "locale": "de_DE",
                "dateRange": "12M",
                "colorTheme": "dark",
                "trendLineColor": "#37a6ef",
                "underLineColor": "rgba(55, 166, 239, 0.15)",
                "isTransparent": true,
                "autosize": true,
                "largeChartUrl": ""
              }
            </script>
          </div>
          <!-- TradingView Widget END -->

          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"><a href="https://de.tradingview.com/symbols/OTC-EVVTY/" rel="noopener" target="_blank"><span class="blue-text">EVVTY Kurse</span></a> von TradingView</div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
              {
                "symbol": "OTC:EVVTY",
                "width": "100%",
                "height": "100%",
                "locale": "de_DE",
                "dateRange": "12M",
                "colorTheme": "dark",
                "trendLineColor": "#37a6ef",
                "underLineColor": "rgba(55, 166, 239, 0.15)",
                "isTransparent": true,
                "autosize": true,
                "largeChartUrl": ""
              }
            </script>
          </div>
          <!-- TradingView Widget END -->



        </div>
        <div class="w3-third w3-container w3-center">

          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"><a href="https://de.tradingview.com/symbols/OTC-GMWKF/" rel="noopener" target="_blank"><span class="blue-text">GMWKF Kurse</span></a> von TradingView</div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
              {
                "symbol": "OTC:GMWKF",
                "width": "100%",
                "height": "100%",
                "locale": "de_DE",
                "dateRange": "12M",
                "colorTheme": "dark",
                "trendLineColor": "#37a6ef",
                "underLineColor": "rgba(55, 166, 239, 0.15)",
                "isTransparent": true,
                "autosize": true,
                "largeChartUrl": ""
              }
            </script>
          </div>
          <!-- TradingView Widget END -->

        </div>
        <div class="w3-container w3-center">
          <a>___</a>
        </div>
      </div>
    </div>

  </main>

  <div class="slideshow">
    <?php include 'slideshow.php';?>
  </div>

  <?php include 'footer.php';?>


</body>

</html>
