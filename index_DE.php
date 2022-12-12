<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <title>MoneyForAbla</title>
  <?php include 'head.php';?>
  </head>

  <body>

  <?php include 'navbar.php';?>

  <main>

    <div class="w3-container w3-center w3-hide-small w3-margin-top w3-">
      <img src="pictures/3522433.jpg" alt="Logo" style="width: 50%;">
    </div>

    <div class="w3-container w3-center w3-hide-large w3-hide-medium w3-margin-top">
      <img src="pictures/3522433.jpg" alt="Logo" style="width: 100%;">
    </div>

    <div class="row">
      <div class="w3-card-4 w3-margin cardKNDL w3-round-large w3-center">
        <h1 class"w3-center">Be like Abla, be rich!</h1>
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div class="tradingview-widget-container__widget"></div>
          <div class="tradingview-widget-copyright"><a href="https://de.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">Ticker Tape</span></a> von TradingView</div>
          <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
              "symbols": [{
                  "proName": "FOREXCOM:SPXUSD",
                  "title": "S&P 500"
                },
                {
                  "proName": "FOREXCOM:NSXUSD",
                  "title": "Nasdaq 100"
                },
                {
                  "proName": "FX_IDC:EURUSD",
                  "title": "EUR/USD"
                },
                {
                  "proName": "BITSTAMP:BTCUSD",
                  "title": "BTC/USD"
                },
                {
                  "proName": "BITSTAMP:ETHUSD",
                  "title": "ETH/USD"
                }
              ],
              "showSymbolLogo": true,
              "colorTheme": "dark",
              "isTransparent": true,
              "displayMode": "adaptive",
              "locale": "de_DE"
            }
          </script>
        </div>
        <!-- TradingView Widget END -->
      </div>
    </div>

    <div class="row">
      <div class="w3-card-4 w3-margin cardKNDL w3-round-large w3-center">
        <div class="w3-row">
          <div class="w3-half w3-container ">
            <h3>Version 1.0.3</h3>
        </div>
        <div class="w3-half w3-container ">
          <ul class="w3-ul w3-center">
              <li>Value Depot mit verbesserten Daten</li>
              <li>Growth Depot mit verbesserten Daten</li>
              <li>Design überarbeitet</li>
              <li>Transparente und responsive Charts</li>
          </ul>
        </div>
        <div class="w3-container w3-center">
          <a>___</a>
        </div>
       </div>
      </div>
    </div>

    <div class="row">
      <div class="w3-card-4 w3-margin cardKNDL w3-round-large w3-center">
        <div class="w3-row">
          <div class="w3-half w3-container ">
            <h3>Marktsituation</h3>
            <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://de.tradingview.com/markets/" rel="noopener" target="_blank"><span class="blue-text">Finanzmärkte</span></a> von TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
  {
  "colorTheme": "dark",
  "dateRange": "12M",
  "showChart": true,
  "locale": "de_DE",
  "width": "100%",
  "height": "600",
  "largeChartUrl": "",
  "isTransparent": true,
  "showSymbolLogo": true,
  "plotLineColorGrowing": "rgba(0, 255, 0, 1)",
  "plotLineColorFalling": "rgba(25, 118, 210, 1)",
  "gridLineColor": "rgba(42, 46, 57, 1)",
  "scaleFontColor": "rgba(120, 123, 134, 1)",
  "belowLineFillColorGrowing": "rgba(106, 168, 79, 0.12)",
  "belowLineFillColorFalling": "rgba(204, 0, 0, 0.12)",
  "symbolActiveColor": "rgba(33, 150, 243, 0.12)",
  "tabs": [
    {
      "title": "Indizes",
      "symbols": [
        {
          "s": "FOREXCOM:NSXUSD",
          "d": "Nasdaq 100"
        },
        {
          "s": "FOREXCOM:DJI",
          "d": "Dow 30"
        },
        {
          "s": "INDEX:NKY",
          "d": "Nikkei 225"
        },
        {
          "s": "INDEX:DEU30",
          "d": "DAX Index"
        }
      ],
      "originalTitle": "Indices"
    },
    {
      "title": "Rohstoffe",
      "symbols": [
        {
          "s": "CME_MINI:ES1!",
          "d": "S&P 500"
        },
        {
          "s": "CME:6E1!",
          "d": "Euro"
        },
        {
          "s": "COMEX:GC1!",
          "d": "Gold"
        },
        {
          "s": "NYMEX:CL1!",
          "d": "Crude Oil"
        },
        {
          "s": "NYMEX:NG1!",
          "d": "Natural Gas"
        },
        {
          "s": "CBOT:ZC1!",
          "d": "Corn"
        }
      ],
      "originalTitle": "Commodities"
    },
    {
      "title": "Bonds",
      "symbols": [
        {
          "s": "CME:GE1!",
          "d": "Eurodollar"
        },
        {
          "s": "CBOT:ZB1!",
          "d": "T-Bond"
        },
        {
          "s": "CBOT:UB1!",
          "d": "Ultra T-Bond"
        },
        {
          "s": "EUREX:FGBL1!",
          "d": "Euro Bund"
        },
        {
          "s": "EUREX:FBTP1!",
          "d": "Euro BTP"
        },
        {
          "s": "EUREX:FGBM1!",
          "d": "Euro BOBL"
        }
      ],
      "originalTitle": "Bonds"
    },
    {
      "title": "Devisen",
      "symbols": [
        {
          "s": "FX:EURUSD"
        },
        {
          "s": "FX:GBPUSD"
        },
        {
          "s": "FX:USDJPY"
        },
        {
          "s": "FX:USDCHF"
        },
        {
          "s": "FX:AUDUSD"
        },
        {
          "s": "FX:USDCAD"
        }
      ],
      "originalTitle": "Forex"
    }
  ]
}
  </script>
</div>
<!-- TradingView Widget END -->
          </div>
          <div class="w3-half w3-container w3-display-container">
            <h3>Anstehende Termine</h3>
            <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://de.tradingview.com/markets/currencies/economic-calendar/" rel="noopener" target="_blank"><span class="blue-text">Wirtschaftskalender</span></a> von TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-events.js" async>
  {
  "colorTheme": "dark",
  "isTransparent": true,
  "width": "100%",
  "height": "600",
  "locale": "de_DE",
  "importanceFilter": "0,1"
}
  </script>
</div>
<!-- TradingView Widget END -->
          </div>
        </div>
      </div>
    </div>

<div class="row">
      <div class="w3-card-4 w3-margin cardKNDL w3-round-large w3-center">
        <h1>Favoriten</h1>
      </div>
      <div class="w3-card-4 w3-margin cardKNDL w3-round-large w3-center">
        <div class="w3-container w3-display-container">
          <h3>Apple</h3>
          <div class="w3-third w3-container w3-display-container">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
              <div class="tradingview-widget-container__widget"></div>
              <div class="tradingview-widget-copyright"><a href="https://de.tradingview.com/symbols/NASDAQ-AAPL/financials-overview/" rel="noopener" target="_blank"><span class="blue-text">AAPL Fundamental Daten</span></a> von TradingView</div>
              <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-financials.js" async>
                {
                  "symbol": "NASDAQ:AAPL",
                  "colorTheme": "dark",
                  "isTransparent": true,
                  "largeChartUrl": "",
                  "displayMode": "regular",
                  "width": "100%",
                  "height": "650",
                  "locale": "de_DE"
                }
              </script>
            </div>
            <!-- TradingView Widget END -->
          </div>
          <div class="w3-third w3-container w3-display-container">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
              <div class="tradingview-widget-container__widget"></div>
              <div class="tradingview-widget-copyright"><a href="https://de.tradingview.com/symbols/NASDAQ-AAPL/" rel="noopener" target="_blank"><span class="blue-text">AAPL Profil</span></a> von TradingView</div>
              <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-profile.js" async>
                {
                  "symbol": "NASDAQ:AAPL",
                  "width": "100%",
                  "height": "650",
                  "colorTheme": "dark",
                  "isTransparent": true,
                  "locale": "de_DE"
                }
              </script>
            </div>
            <!-- TradingView Widget END -->
          </div>
          <div class="w3-third w3-container w3-display-container">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
              <div class="tradingview-widget-container__widget"></div>
              <div class="tradingview-widget-copyright"><a href="https://de.tradingview.com/symbols/NASDAQ-AAPL/technicals/" rel="noopener" target="_blank"><span class="blue-text">Technische Analyse für AAPL</span></a> von TradingView</div>
              <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
                {
                  "interval": "1M",
                  "width": "100%",
                  "isTransparent": true,
                  "height": "650",
                  "symbol": "NASDAQ:AAPL",
                  "showIntervalTabs": true,
                  "locale": "de_DE",
                  "colorTheme": "dark"
                }
              </script>
            </div>
            <!-- TradingView Widget END -->
          </div>
        </div>
      </div>
      <div class="w3-card-4 w3-margin cardKNDL w3-round-large w3-center">
        <div class="w3-container w3-display-container">
          <h3>BioNTech</h3>
          <div class="w3-third w3-container w3-display-container">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
              <div class="tradingview-widget-container__widget"></div>
              <div class="tradingview-widget-copyright"><a href="https://de.tradingview.com/symbols/NASDAQ-BNTX/financials-overview/" rel="noopener" target="_blank"><span class="blue-text">BNTX Fundamental Daten</span></a> von TradingView</div>
              <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-financials.js" async>
                {
                  "symbol": "NASDAQ:BNTX",
                  "colorTheme": "dark",
                  "isTransparent": true,
                  "largeChartUrl": "",
                  "displayMode": "regular",
                  "width": "100%",
                  "height": "650",
                  "locale": "de_DE"
                }
              </script>
            </div>
			</div>
			  <div class="w3-third w3-container w3-display-container">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
              <div class="tradingview-widget-container__widget"></div>
              <div class="tradingview-widget-copyright"><a href="https://de.tradingview.com/symbols/NASDAQ-BNTX/" rel="noopener" target="_blank"><span class="blue-text">BNTX Profil</span></a> von TradingView</div>
              <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-profile.js" async>
                {
                  "symbol": "NASDAQ:BNTX",
                  "width": "100%",
                  "height": "650",
                  "colorTheme": "dark",
                  "isTransparent": true,
                  "locale": "de_DE"
                }
              </script>
            </div>
            <!-- TradingView Widget END -->
          </div>
          <div class="w3-third w3-container w3-display-container">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
              <div class="tradingview-widget-container__widget"></div>
              <div class="tradingview-widget-copyright"><a href="https://de.tradingview.com/symbols/NASDAQ-BNTX/technicals/" rel="noopener" target="_blank"><span class="blue-text">Technische Analyse für BNTX</span></a> von TradingView</div>
              <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
                {
                  "interval": "1M",
                  "width": "100%",
                  "isTransparent": true,
                  "height": "650",
                  "symbol": "NASDAQ:BNTX",
                  "showIntervalTabs": true,
                  "locale": "de_DE",
                  "colorTheme": "dark"
                }
              </script>
            </div>
            <!-- TradingView Widget END -->
          </div>
        </div>
      </div>
      <div class="w3-card-4 w3-margin cardKNDL w3-round-large w3-center">
        <div class="w3-container w3-display-container">
          <h3>Varta</h3>
          <div class="w3-third w3-container w3-display-container">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
              <div class="tradingview-widget-container__widget"></div>
              <div class="tradingview-widget-copyright"><a href="https://de.tradingview.com/symbols/XETR-VAR1/financials-overview/" rel="noopener" target="_blank"><span class="blue-text">VAR1 Fundamental Daten</span></a> von TradingView</div>
              <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-financials.js" async>
                {
                  "symbol": "XETR:VAR1",
                  "colorTheme": "dark",
                  "isTransparent": true,
                  "largeChartUrl": "",
                  "displayMode": "regular",
                  "width": "100%",
                  "height": "650",
                  "locale": "de_DE"
                }
              </script>
            </div>
            <!-- TradingView Widget END -->
          </div>
          <div class="w3-third w3-container w3-display-container">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
              <div class="tradingview-widget-container__widget"></div>
              <div class="tradingview-widget-copyright"><a href="https://de.tradingview.com/symbols/XETR-VAR1/" rel="noopener" target="_blank"><span class="blue-text">VAR1 Profil</span></a> von TradingView</div>
              <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-profile.js" async>
                {
                  "symbol": "XETR:VAR1",
                  "width": "100%",
                  "height": "650",
                  "colorTheme": "dark",
                  "isTransparent": true,
                  "locale": "de_DE"
                }
              </script>
            </div>
            <!-- TradingView Widget END -->
          </div>
          <div class="w3-third w3-container w3-display-container">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
              <div class="tradingview-widget-container__widget"></div>
              <div class="tradingview-widget-copyright"><a href="https://de.tradingview.com/symbols/XETR-VAR1/technicals/" rel="noopener" target="_blank"><span class="blue-text">Technische Analyse für VAR1</span></a> von TradingView</div>
              <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
                {
                  "interval": "1M",
                  "width": "100%",
                  "isTransparent": true,
                  "height": "650",
                  "symbol": "XETR:VAR1",
                  "showIntervalTabs": true,
                  "locale": "de_DE",
                  "colorTheme": "dark"
                }
              </script>
            </div>
            <!-- TradingView Widget END -->
          </div>

          <a>___</a>
          <h5>Bitte gewünschte Favoriten mitteilen<h5>
              <br>
        </div>
      </div>
  </main>

  <div class="slideshow">
    <?php include 'slideshow.php';?>
  </div>

<?php include 'footer.php';?>

</body>

</html>
