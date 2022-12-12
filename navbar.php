<?php
echo '<div class="w3-bar w3-2021-inkwell w3-round-large">
  <a href="index_DE.php" class="w3-bar-item w3-button w3-large" style="width:23.5%" height="25">Board</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="minimising()">&#9776;</a>

  <div class="w3-dropdown-click w3-2021-inkwell w3-mobile" style="width:24.35%" height="25">
    <button class="w3-block w3-button w3-large w3-hide-small" onclick="dropdownMain1()">
      Watchlist <i class="fa fa-caret-down"></i>
    </button>
    <div id="dd1" class="w3-dropdown-content w3-bar-block w3-2021-inkwell" style="width:23.5%" height="25">
      <a href="tech.php" class="w3-bar-item w3-2021-inkwell w3-large w3-button w3-mobile">Tech</a>
      <a href="Energie.php" class="w3-bar-item w3-2021-inkwell w3-large w3-button w3-mobile">Energie</a>
      <a href="Mobilitaet.php" class="w3-bar-item w3-2021-inkwell w3-large w3-button w3-mobile">Mobilität</a>
      <a href="nahrung.php" class="w3-bar-item w3-2021-inkwell w3-large w3-button w3-mobile">Nahrung & Landwirtschaft</a>
      <a href="PharmaMedizintechnik.php" class="w3-bar-item w3-large w3-button w3-mobile">Pharma & Medizintechnik</a>
      <a href="sales.php" class="w3-bar-item w3-large w3-2021-inkwell w3-button w3-mobile">Sales & Konsum</a>
      <a href="versicherung.php" class="w3-bar-item w3-2021-inkwell w3-large w3-button w3-mobile">Versicherung & HedgeFonds</a>
      <a href="industrie.php" class="w3-bar-item w3-2021-inkwell w3-large w3-button w3-mobile">Industrie</a>
      <a href="gaming.php" class="w3-bar-item w3-2021-inkwell w3-large w3-button w3-mobile">Gaming</a>
      <a href="risiko.php" class="w3-bar-item w3-2021-inkwell w3-large w3-button w3-mobile">Risiko</a>
    </div>
  </div>
  <div class="w3-dropdown-click w3-mobile" style="width:24.35%" height="25">
    <button class="w3-block w3-button w3-large w3-hide-small" onclick="dropdownMain2()">
      Märkte <i class="fa fa-caret-down"></i>
    </button>
    <div id="dd2" class="w3-dropdown-content w3-bar-block w3-2021-inkwell" style="width:23.5%" height="25">
      <a href="crypto.php" class="w3-bar-item w3-2021-inkwell w3-large w3-button w3-mobile">Crypto</a>
    </div>
  </div>
  <div class="w3-dropdown-click w3-mobile" style="width:24.35%" height="25">
    <button class="w3-block w3-button w3-large w3-hide-small" onclick="dropdownMain3()">
      Depots <i class="fa fa-caret-down"></i>
    </button>
    <div id="dd3" class="w3-dropdown-content w3-bar-block w3-2021-inkwell" style="width:23.5%" height="25">
      <a href="value.php" class="w3-bar-item w3-2021-inkwell w3-large w3-button w3-mobile">Value</a>
      <a href="growth.php" class="w3-bar-item w3-2021-inkwell w3-large w3-button w3-mobile">Growth</a>
      <a href="riskant.php" class="w3-bar-item w3-2021-inkwell w3-large w3-button w3-mobile">Riskant</a>
    </div>
  </div>
</div>


<div id="smallDD" class="w3-bar-block w3-2021-inkwell w3-hide w3-hide-large w3-hide-medium w3-round-large">
  <div class="w3-dropdown-click w3-mobile">
    <button class="w3-button w3-large" onclick="dropdownSmall1()">
      Watchlist<i class="fa fa-caret-down"></i>
    </button>
    <div id="dds1" class="w3-dropdown-content w3-bar-block w3-2021-inkwell">
      <a href="tech.php" class="w3-bar-item w3-2021-inkwell w3-large w3-button w3-mobile">Tech</a>
      <a href="Energie.php" class="w3-bar-item w3-2021-inkwell w3-large w3-button w3-mobile">Energie</a>
      <a href="Mobilitaet.php" class="w3-bar-item w3-2021-inkwell w3-large w3-button w3-mobile">Mobilität</a>
      <a href="nahrung.php" class="w3-bar-item w3-2021-inkwell w3-large w3-button w3-mobile">Nahrung & Landwirtschaft</a>
      <a href="PharmaMedizintechnik.php" class="w3-bar-item w3-2021-inkwell w3-large w3-button w3-mobile">Pharma & Medizintechnik</a>
      <a href="sales.php" class="w3-bar-item w3-2021-inkwell w3-large w3-button w3-mobile">Sales & Konsum</a>
      <a href="versicherung.php" class="w3-bar-item w3-2021-inkwell w3-large w3-button w3-mobile">Versicherung & HedgeFonds</a>
      <a href="industrie.php" class="w3-bar-item w3-2021-inkwell w3-large w3-button w3-mobile">Industrie</a>
      <a href="gaming.php" class="w3-bar-item w3-2021-inkwell w3-large w3-button w3-mobile">Gaming</a>
      <a href="risiko.php" class="w3-bar-item w3-2021-inkwell w3-large w3-button w3-mobile">Risiko</a>
    </div>
  </div>
  <div class="w3-dropdown-click w3-mobile">
    <button class="w3-button w3-large" onclick="dropdownSmall2()">
      Märkte<i class="fa fa-caret-down"></i>
    </button>
    <div id="dds2" class="w3-dropdown-content w3-bar-block w3-2021-inkwell">
      <a href="crypto.php" class="w3-bar-item w3-2021-inkwell w3-large w3-button w3-mobile">Crypto</a>
    </div>
  </div>
  <div class="w3-dropdown-click w3-mobile">
    <button class="w3-button w3-large" onclick="dropdownSmall3()">
      Depots <i class="fa fa-caret-down"></i>
    </button>
    <div id="dds3" class="w3-dropdown-content w3-bar-block w3-2021-inkwell">
      <a href="value.php" class="w3-bar-item w3-2021-inkwell w3-large w3-button w3-mobile">Value</a>
      <a href="growth.php" class="w3-bar-item w3-2021-inkwell w3-large w3-button w3-mobile">Growth</a>
      <a href="riskant.php" class="w3-bar-item w3-2021-inkwell w3-large w3-button w3-mobile">Riskant</a>
    </div>
  </div>
</div>

<script src="dropdown.js">
</script>';
?>
