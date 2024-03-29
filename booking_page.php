<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking Page</title>
  <link rel="stylesheet" href="booking_page_style.css">
  <script src="booking_page_scripts.js" defer></script>
</head>

<body>
  <?php
  if (!isset($_COOKIE["name"])) {
    header("Location: login.php");
  }
  ?>
  <header>
    <section id="header-top">
      <a href="index.html"><img src="images/BB_Logo.jpg" alt="missing_logo"></a>
    </section>
    <br>
    <!-- Nav bar -->
    <div class="topnav">
      <a href="contact_page.html">Contact Us</a>
      <a href="booking_page.php">Booking</a>
      <a href="menu.pdf" target="_blank">Menu</a>
    </div>
  </header>
  <!-- Ordering Tool-->
  <h2 id="formTitle">Browse Our Selection</h2>
  <form action="recipt.php" method="POST" id="orderForm">
    <section id="appetizers">
      <h2>Appetizers</h1>
        <div>
          <img src="images/potatoSkins.jpeg" alt="Potato Skins" width="300px" height="300px">
          <p>Potato Skins</p>
          <p>Price: $8.00</p>
          <p>*Contains Pork*</p>
          <input id="potatoSkinOrder" type="number" name="potatoSkinOrder">
        </div>
        <div>
          <img src="images/jalapenoPoppers.jpeg" alt="Jalapeno Poppers" width="300px" height="300px">
          <p>Jalapeño Poppers</p>
          <p>Price: $7.50</p>
          <input id="jalapenoPoppersOrder" type="number" name="jalapenoPoppersOrder">
        </div>
    </section>
    <section id="entrees">
      <h2>Entrees</h2>
      <div>
        <img src="images/brisket.jpeg" alt="Brisket" width="300px" height="300px">
        <p>Brisket</p>
        <p>Price: $15.00</p>
        <input id="brisketOrder" type="number" name="brisketOrder">
      </div>
      <div>
        <img src="images/ribs.jpeg" alt="Beef Ribs" width="300px" height="300px">
        <p>Beef Ribs</p>
        <p>Price: $20.00</p>
        <input id="ribsOrder" type="number" name="ribsOrder">
      </div>
      <div>
        <img src="images/sausages.jpeg" alt="Pork Sasuages" width="300px" height="300px">
        <p>Sausages</p>
        <p>Price: $12.00</p>
        <p>*Contains Pork*</p>
        <input id="sausageOrder" type="number" name="sausageOrder">
      </div>
    </section>
    <section id="sides">
      <h2>Sides</h2>
      <div>
        <img src="images/macAndCheese.jpeg" alt="Mac & Cheese" width="300px" height="300px">
        <p>Mac & Cheese</p>
        <p>Price: $6.00</p>
        <input id="macAndCheeseOrder" type="number" name="macAndCheeseOrder">
      </div>
      <div>
        <img src="images/greenBeans.webp" alt="Green Beans" width="300px" height="300px">
        <p>Green Beans</p>
        <p>Price: $5.00</p>
        <input id="greenBeansOrder" type="number" name="greenBeansOrder">
      </div>
      <div>
        <img src="images/grilledCorn.jpeg" alt="Grilled Corn" width="300px" height="300px">
        <p>Grilled Corn</p>
        <p>Price: $5.00</p>
        <input id="grilledCornOrder" type="number" name="grilledCornOrder">
      </div>
    </section>
    <section id="additionalInfo">
      <div style="margin: 20px;">
        <label for="month">Month: </label>
        <select name="month" id="month">
          <option value="January">January</option>
          <option value="February">February</option>
          <option value="March">March</option>
          <option value="April">April</option>
          <option value="May">May</option>
          <option value="June">June</option>
          <option value="July">July</option>
          <option value="August">August</option>
          <option value="September">September</option>
          <option value="October">October</option>
          <option value="November">November</option>
          <option value="December">December</option>
        </select>
      </div>
      <div style="margin: 20px;">
        <label for="day">Day: </label>
        <select name="day" id="day">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
        </select>
      </div>
      <div style="margin: 20px;">
        <label for="year">Year: <input name='year' id="year" type="number" required></label>
      </div>
      <div style="margin: 20px;">
        <label>Address:<input id="address" type="text" size="50" name="address"></label>
      </div>
      <div style="margin: 20px;">
        <label>Tell Us About The Venue:<input id="venueInformation" type="text" size="75" rows="4" name="venueInformation"></label>
      </div>
      <div style="margin: 20px;">
        <label>Special Instructions:<input id="specialInstructions" type="text" size="75" rows="4"></label>
      </div>
    </section>
    <input style="font-size: 20pt;" type="button" value="Submit Order" id="enter">
    <input style="font-size: 20pt;" type="button" value="Calculate Cost" id="calculate">
    <input style="font-size: 20pt;" type="reset" value="Clear">
    <!-- Tally up the total cost and order-->
    <table align="left" style="margin: 25px;">
      <caption align="left"> <u>Price Summary</u> </caption>
      <tr>
        <td>Order Amount:</td>
        <td><span id="preTaxSum"></span></td>
      </tr>
      <tr>
        <td>Tax Amount:</td>
        <td><span id="plusTax"></span></td>
      </tr>
      <tr>
        <td>Total Amount:</td>
        <td><span id="totalSum"></span></td>
      </tr>
    </table>
  </form>
</body>

</html>