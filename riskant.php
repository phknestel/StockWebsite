<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <title>Riskant</title>
<?php include 'head.php';?>
</head>

<body>

<?php include 'navbar.php';?>

  <main>

    <div class="w3-container w3-center w3-hide-small w3-margin-top w3-">
      <img src="pictures/land.jpg" alt="Logo" style="width: 50%;">
    </div>
    <div class="w3-container w3-center w3-hide-large w3-hide-medium w3-margin-top">
      <img src="pictures/land.jpg" alt="Logo" style="width: 100%;">
    </div>

      <div class="w3-card-4 w3-margin cardKNDL w3-round-large w3-center">
        <h1 class="w3-center">Growth Depot Vorschlag</h1>
        <p>Growth  = Wachstumsaktien die durch den Ausblick und Investitionen in (bsp.) noch nicht erschlossene Märkte an Wert gewinnen.</p>
        <p>Derartige Entwicklungen können jedoch auch durch stetige Zukäufe von (bsp.) Startups erfolgen.</p>
      </div>

      <div class="w3-card-4 w3-margin cardKNDL w3-round-large w3-center">
        <div class="w3-container w3-center">
          <a>___</a>
        </div>
        <div class="w3-responsive">
        <table class="w3-table w3-bordered w3-margin-top w3-margin-bottom">
          <tr>
            <th>Firmenname</th>
            <th class="w3-center">Marktkapitalisierung</th>
            <th class="w3-center">Anteil Depot</th>
          </tr>
          <tr>
            <td>Sartorius</td>
            <td class="w3-center">29,3 Mrd. €</td>
            <td class="w3-center">10%</td>
          </tr>
          <tr>
            <td>Coinbase</td>
            <td class="w3-center"> --- </td>
            <td class="w3-center">10%</td>
          </tr>
          <tr>
            <td>PUMA</td>
            <td class="w3-center">13,76 Mrd. €</td>
            <td class="w3-center">10%</td>
          </tr>
          <tr>
            <td>Varta</td>
            <td class="w3-center">4,96 Mrd. €</td>
            <td class="w3-center">10%</td>
          </tr>
          <tr class="w3-hover-light-grey">
            <td>Embracer Group</td>
            <td class="w3-center">11,03 Mrd. €</td>
            <td class="w3-center">10%</td>
          </tr>
          <tr>
            <td>Carl Zeiss Meditec</td>
            <td class="w3-center">12,74 Mrd. €</td>
            <td class="w3-center">8%</td>
          </tr>
          <tr>
            <td>The Trade Desk</td>
            <td class="w3-center">28,8 Mrd. €</td>
            <td class="w3-center">8%</td>
          </tr>
          <tr>
            <td>Teladoc Health</td>
            <td class="w3-center">24,47 Mrd. €</td>
            <td class="w3-center">8%</td>
          </tr>
          <tr>
            <td>GSX Techedu ADR</td>
            <td class="w3-center">5,298 Mrd. €</td>
            <td class="w3-center">6%</td>
          </tr>
          <tr>
            <td>BioNTech</td>
            <td class="w3-center">26,24 Mrd. €</td>
            <td class="w3-center">5%</td>
          </tr>
          <tr>
            <td>Siemens Gamesa</td>
            <td class="w3-center">20,29 Mrd. €</td>
            <td class="w3-center">5%</td>
          </tr>
          <tr>
            <td>Baidu ADR</td>
            <td class="w3-center">64,19 Mrd. €</td>
            <td class="w3-center">5%</td>
          </tr>
          <tr>
            <td>SMA Solar</td>
            <td class="w3-center">1,71 Mrd. €</td>
            <td class="w3-center">5%</td>
          </tr>
        </table>
      </div>
     </div>

    <div class="row">
      <div class="w3-card-4 w3-margin cardKNDL w3-round-large w3-center">
        <div class="w3-responsive">
        <h3>Jahresverläufe der Einzelwerte</h3>
        <br>
        <br>
        <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_98dce"></div>
  <div class="tradingview-widget-copyright"><a href="https://de.tradingview.com/symbols/XETR-SRT/" rel="noopener" target="_blank"><span class="blue-text">Sartorius</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.MediumWidget(
  {
  "symbols": [
    [
      "Sartorius",
      "XETR:SRT|12M"
    ],
    [
      "Coinbase",
      "NASDAQ:COIN|12M"
    ],
    [
      "PUMA",
      "XETR:PUM|12M"
    ],
    [
      "Varta",
      "XETR:VAR1|12M"
    ],
    [
      "Embracer Group",
      "SWB:TH9A|12M"
    ],
    [
      "Carl Zeiss Meditec",
      "XETR:AFX|12M"
    ],
    [
      "The Trade Desk",
      "NASDAQ:TTD|12M"
    ],
    [
      "Teladoc Health",
      "NYSE:TDOC|12M"
    ],
    [
      "GSX Techedu",
      "NYSE:GSX|12M"
    ],
    [
      "BioNTech",
      "SWB:22UA|12M"
    ],
    [
      "Siemens Gamesa",
      "BME:SGRE|12M"
    ],
    [
      "Baidu",
      "NASDAQ:BIDU|12M"
    ],
    [
      "SMA Solar",
      "XETR:S92|12M"
    ]
  ],
  "chartOnly": false,
  "width": "90%",
  "height": "400",
 "locale": "de_DE",
 "colorTheme": "dark",
 "gridLineColor": "#2a2e39",
 "trendLineColor": "rgba(0, 255, 0, 1)",
 "fontColor": "#787b86",
 "underLineColor": "rgba(106, 168, 79, 0.15)",
 "isTransparent": true,
 "autosize": false,
 "container_id": "tradingview_685b4"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->
<div class="w3-container w3-center">
  <p>___</p>
</div>
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
