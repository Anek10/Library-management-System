
	<form method="post" action="process.php">
		First name:<br>
		<input type="text" name="first_name">
		<br>
		Last name:<br>
		<input type="text" name="last_name">
		<br>
		City name:<br>
		<input type="text" name="city_name">
		<br>
		Email Id:<br>
		<input type="email" name="email">
		<br><br>
                Card No:<br>
		<input type="number" pattern="0000-0000-0000" name="cardno">
		<br><br>
                Expiry Date :<br>
		<input type="date"  name="expdate">
		<br><br>
                CVV :<br>
		<input type="number"  size="3" name="cvvno">
		<br><br>
		<input type="submit" name="save" value="submit">
	</form>
  </body>
</html>
















<h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text"  name="first_name" placeholder="John More ">
            <input type="text"  name="last_name" placeholder="Doe ">
            <label for="city">City</label>
            <input type="text"  name="city_name" placeholder="Mumbai">
            <label for="email">Email</label>
            <input type="text"  name="email" placeholder="abcd@gmail.com">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardno" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Date</label>
            <input type="date"  min="2020-08" max="2029-8" "id="expmonth" name="expdate" placeholder="YYYY/MM">
            
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvvno" placeholder="352">