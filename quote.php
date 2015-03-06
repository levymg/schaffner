<?php session_start(); ?>
<?php 

if (isset($_POST['Submit'])) {
include_once ('securimage/securimage.php');
	$securimage = new Securimage();
	
// In Case Globals are turned off
	
	$name = $_POST['name'];
	$position = $_POST['position'];
	$company = $_POST['company'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$country = $_POST['country'];
	$phone = $_POST['phone'];
	$fax = $_POST['fax'];
	$email = $_POST['email'];
	$volume = $_POST['volume'];
	$specs = $_POST['specs'];
	$found = $_POST['found'];
	$comments = $_POST['comments'];

//Begin validation and print the variables
	
	$vreason = "<p>The following errors occured:</p>
		<ul>";
	
	if ($name == "") {
		$vname = false;
		$vreason .= '<li>Please fill in the <strong>Name</strong> field</li>';
	} else {
		$vname = true;
	}
	if ($company == "") {
		$vcompany = false;
		$vreason .= '<li>Please fill in the <strong>Company</strong> field</li>';
	} else {
		$vcompany = true;
	}
	if ($address == "") {
		$vaddress = false;
		$vreason .= '<li>Please fill in the <strong>Address</strong> field</li>';
	} else {
		$vaddress = true;
	}
	if ($city == "") {
		$vcity = false;
		$vreason .= '<li>Please fill in the <strong>City</strong> field</li>';
	} else {
		$vcity = true;
	}
	if ($state == "") {
		$vstate = false;
		$vreason .= '<li>Please fill in the <strong>State</strong> field</li>';
	} else {
		$vstate = true;
	}
	if ($zip == "") {
		$vzip = false;
		$vreason .= '<li>Please fill in the <strong>Zip Code</strong> field</li>';
	} else {
		$vzip = true;
	}
	if ($phone == "") {
		$vphone = false;
		$vreason .= '<li>Please fill in the <strong>Phone</strong> field</li>';
	} else {
		$vphone = true;
	}
	if ($email == "") {
		$vemail = false;
		$vreason .= '<li>Please fill in the <strong>Email</strong> field</li>';
	} else {
		$vemail = true;
	}
	
	
	if ($securimage->check($_POST['captcha_code']) == false) {
		$vcaptcha = false;
		$vreason .= '<li>Please try entering the <strong>Captcha</strong> again.</li>';
	} else { 
		$vcaptcha = true;
	}
		
$headers = 'From: info@schaffnermfg.com' . "\r\n" .
'Reply-To: info@schaffnermfg.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
	
$emailmessage = "Schaffner Manufacturing Quote Submission\r
Name: ".$name."\r
Title/Position: ".$position."\r
Company: ".$company."\r
Address: ".$address."\r
City : ".$city."\r
State: ".$state."\r
Zip  : ".$zip."\r
Country : ".$country."\r
Phone: ".$phone."\r
Fax: ".$fax."\r
Email: ".$email."\r
";

$emailmessage .= "\rI would like a quotation for the following: ";
$products = implode(', ', $_POST['products']);
if (isset($_POST['pother']) && $_POST['pother'] !=='') { $pother = ", ".$_POST['pother']."\r"; }
$emailmessage .= $products.$pother;

$emailmessage .="
Volume Needed: ".$volume."\r
Product & Performance Specs: ".$specs."\r
How did you find us? ".$found."\r
Comments: ".$comments;"\r
";

//Send the mail
if ($vname !== false && $vcompany !== false && $vaddress !== false && $vcity !== false && $vstate !== false && $vzip !== false && $vphone !== false && $vemail !== false && $vcaptcha !== false) {
	mail ("info@schaffnermfg.com", "Schaffner Manufacturing Request A Quote Form", $emailmessage, $headers);
	$confirmation = "<p style=\"font: bold 1.25em/1.5 'Arimo', Arial, sans-serif; color:#d2232a; margin: 1em 0; \">Thank you. We will respond shortly.</p>";
} else {
	$confirmation = $vreason ."</ul>";
}

} else {
	$confirmation ="";
	$displayform = true;
}

?>

<?php 
$cat = "Request A Quote";
$title = "Request A Quote";
include_once ('includes/header.php'); 
?>
    
    <div class="content">
    	<div class="col-left">

        	<h1><?php echo $title; ?></h1>
            <p>Schaffner Manufacturing welcomes your quote requests and have prepared an online form to facilitate your quote request needs. Please complete the form below making sure that required areas are completed. You may also attach your drawing in the form below. Schaffner Manufacturing respects your privacy while on our web site and invites you to review our <a href="privacy-policy.php">privacy policy</a>.</p>
            
            <?php echo $confirmation; ?>
            <form action="quote.php" class="cmxform" method="post">
            <p>Required fields marked <em>*</em></p>
        
            <fieldset>
                <legend> </legend>
                <ol>
                    <li><label for="name"> Name <em>*</em></label> <input name="name" id="name" value="<?php echo $name; ?>" type="text" /></li>
                    <li><label for="position"> Title/Position </label> <input name="position" id="position" value="<?php echo $position ?>" type="text" /></li>
                    <li><label for="company"> Company <em>*</em></label> <input name="company" id="company" value="<?php echo $company ?>" type="text" /></li>
                    <li><label for="address"> Address <em>*</em></label> <input name="address" id="address" value="<?php echo $address; ?>" type="text" /></li>
                    <li><label for="city"> City <em>*</em></label> <input name="city" id="city" value="<?php echo $city; ?>" type="text" /></li>
                    <li><label for="state"> State <em>*</em></label> 
                        <select name="state" id="state">
                          <option value="" selected="selected">Select state/province</option>
                          <option value="AL">Alabama</option>
                          <option value="AK">Alaska</option>
                          <option value="AB">Alberta</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option value="BC">British Columbia</option>
                          <option value="CA">California</option>
                          <option value="CO">Colorado</option>
                          <option value="CT">Connecticut</option>
                          <option value="DE">Delaware</option>
                          <option value="DC">District of Columbia</option>
                          <option value="FL">Florida</option>
                          <option value="GA">Georgia</option>
                          <option value="HI">Hawaii</option>
                          <option value="ID">Idaho</option>
                          <option value="IL">Illinois</option>
                          <option value="IN">Indiana</option>
                          <option value="IA">Iowa</option>
                          <option value="KS">Kansas</option>
                          <option value="KY">Kentucky</option>
                          <option value="LA">Louisiana</option>
                          <option value="ME">Maine</option>
                          <option value="MB">Manitoba</option>
                          <option value="MD">Maryland</option>
                          <option value="MA">Massachusetts</option>
                          <option value="MI">Michigan</option>
                          <option value="MN">Minnesota</option>
                          <option value="MS">Mississippi</option>
                          <option value="MO">Missouri</option>
                          <option value="MT">Montana</option>
                          <option value="NE">Nebraska</option>
                          <option value="NV">Nevada</option>
                          <option value="NB">New Brunswick</option>
                          <option value="NH">New Hampshire</option>
                          <option value="NJ">New Jersey</option>
                          <option value="NM">New Mexico</option>
                          <option value="NY">New York</option>
                          <option value="NF">Newfoundland</option>
                          <option value="NC">North Carolina</option>
                          <option value="ND">North Dakota</option>
                          <option value="NT">Northwest Territories</option>
                          <option value="NS">Nova Scotia</option>
                          <option value="OH">Ohio</option>
                          <option value="OK">Oklahoma</option>
                          <option value="ON">Ontario</option>
                          <option value="OR">Oregon</option>
                          <option value="PA">Pennsylvania</option>
                          <option value="PE">Prince Edward Island</option>
                          <option value="PR">Puerto Rico</option>
                          <option value="QC">Quebec</option>
                          <option value="RI">Rhode Island</option>
                          <option value="SK">Saskatchewan</option>
                          <option value="SC">South Carolina</option>
                          <option value="SD">South Dakota</option>
                          <option value="TN">Tennessee</option>
                          <option value="TX">Texas</option>
                          <option value="UT">Utah</option>
                          <option value="VT">Vermont</option>
                          <option value="VA">Virginia</option>
                          <option value="WA">Washington</option>
                          <option value="WV">West Virginia</option>
                          <option value="WI">Wisconsin</option>
                          <option value="WY">Wyoming</option>
                          <option value="YT">Yukon Territories</option>
                          <option value="AA">Military -- AA</option>
                          <option value="AE">Military -- AE</option>
                          <option value="AP">Military -- AP</option>
                          <option>Not Applicable</option>
                        </select>
                    </li>
                    <li><label for="zip"> Zip/Postal Code <em>*</em></label> <input name="zip" id="zip" value="<?php echo $zip; ?>" type="text" /></li>
                    <li><label for="country">Country </label> 
                         <select name="country"> 
                              <option value="" selected="selected">Select Country</option> 
                              <option selected="selected" value="United States">United States</option> 
                              <option value="Afghanistan">Afghanistan</option> 
                              <option value="Albania">Albania</option> 
                              <option value="Algeria">Algeria</option> 
                              <option value="American Samoa">American Samoa</option> 
                              
                              <option value="Andorra">Andorra</option> 
                              <option value="Angola">Angola</option> 
                              <option value="Anguilla">Anguilla</option> 
                              <option value="Antarctica">Antarctica</option> 
                              <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
                              <option value="Argentina">Argentina</option> 
                              <option value="Armenia">Armenia</option> 
                              <option value="Aruba">Aruba</option> 
                              <option value="Australia">Australia</option> 
                              
                              <option value="Austria">Austria</option> 
                              <option value="Azerbaijan">Azerbaijan</option> 
                              <option value="Bahamas">Bahamas</option> 
                              <option value="Bahrain">Bahrain</option> 
                              <option value="Bangladesh">Bangladesh</option> 
                              <option value="Barbados">Barbados</option> 
                              <option value="Belarus">Belarus</option> 
                              <option value="Belgium">Belgium</option> 
                              <option value="Belize">Belize</option> 
                              
                              <option value="Benin">Benin</option> 
                              <option value="Bermuda">Bermuda</option> 
                              <option value="Bhutan">Bhutan</option> 
                              <option value="Bolivia">Bolivia</option> 
                              <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
                              <option value="Botswana">Botswana</option> 
                              <option value="Bouvet Island">Bouvet Island</option> 
                              <option value="Brazil">Brazil</option> 
                              <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
                              
                              <option value="Brunei Darussalam">Brunei Darussalam</option> 
                              <option value="Bulgaria">Bulgaria</option> 
                              <option value="Burkina Faso">Burkina Faso</option> 
                              <option value="Burundi">Burundi</option> 
                              <option value="Cambodia">Cambodia</option> 
                              <option value="Cameroon">Cameroon</option> 
                              <option value="Canada">Canada</option> 
                              <option value="Cape Verde">Cape Verde</option> 
                              <option value="Cayman Islands">Cayman Islands</option> 
                              
                              <option value="Central African Republic">Central African Republic</option> 
                              <option value="Chad">Chad</option> 
                              <option value="Chile">Chile</option> 
                              <option value="China">China</option> 
                              <option value="Christmas Island">Christmas Island</option> 
                              <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
                              <option value="Colombia">Colombia</option> 
                              <option value="Comoros">Comoros</option> 
                              <option value="Congo">Congo</option> 
                              
                              <option value="Cook Islands">Cook Islands</option> 
                              <option value="Costa Rica">Costa Rica</option> 
                              <option value="Cote D'ivoire">Cote D'ivoire</option> 
                              <option value="Croatia">Croatia</option> 
                              <option value="Cuba">Cuba</option> 
                              <option value="Cyprus">Cyprus</option> 
                              <option value="Czech Republic">Czech Republic</option> 
                              <option value="Denmark">Denmark</option> 
                              <option value="Djibouti">Djibouti</option> 
                              
                              <option value="Dominica">Dominica</option> 
                              <option value="Dominican Republic">Dominican Republic</option> 
                              <option value="Ecuador">Ecuador</option> 
                              <option value="Egypt">Egypt</option> 
                              <option value="El Salvador">El Salvador</option> 
                              <option value="Equatorial Guinea">Equatorial Guinea</option> 
                              <option value="Eritrea">Eritrea</option> 
                              <option value="Estonia">Estonia</option> 
                              <option value="Ethiopia">Ethiopia</option> 
                              
                              <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
                              <option value="Faroe Islands">Faroe Islands</option> 
                              <option value="Fiji">Fiji</option> 
                              <option value="Finland">Finland</option> 
                              <option value="France">France</option> 
                              <option value="French Guiana">French Guiana</option> 
                              <option value="French Polynesia">French Polynesia</option> 
                              <option value="French Southern Territories">French Southern Territories</option> 
                              <option value="Gabon">Gabon</option> 
                              
                              <option value="Gambia">Gambia</option> 
                              <option value="Georgia">Georgia</option> 
                              <option value="Germany">Germany</option> 
                              <option value="Ghana">Ghana</option> 
                              <option value="Gibraltar">Gibraltar</option> 
                              <option value="Greece">Greece</option> 
                              <option value="Greenland">Greenland</option> 
                              <option value="Grenada">Grenada</option> 
                              <option value="Guadeloupe">Guadeloupe</option> 
                              
                              <option value="Guam">Guam</option> 
                              <option value="Guatemala">Guatemala</option> 
                              <option value="Guinea">Guinea</option> 
                              <option value="Guinea-bissau">Guinea-bissau</option> 
                              <option value="Guyana">Guyana</option> 
                              <option value="Haiti">Haiti</option> 
                              <option value="Honduras">Honduras</option> 
                              <option value="Hong Kong">Hong Kong</option> 
                              <option value="Hungary">Hungary</option> 
                              
                              <option value="Iceland">Iceland</option> 
                              <option value="India">India</option> 
                              <option value="Indonesia">Indonesia</option> 
                              <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
                              <option value="Iraq">Iraq</option> 
                              <option value="Ireland">Ireland</option> 
                              <option value="Israel">Israel</option> 
                              <option value="Italy">Italy</option> 
                              <option value="Jamaica">Jamaica</option> 
                              
                              <option value="Japan">Japan</option> 
                              <option value="Jordan">Jordan</option> 
                              <option value="Kazakhstan">Kazakhstan</option> 
                              <option value="Kenya">Kenya</option> 
                              <option value="Kiribati">Kiribati</option> 
                              <option value="Korea, Republic of">Korea, Republic of</option> 
                              <option value="Kuwait">Kuwait</option> 
                              <option value="Kyrgyzstan">Kyrgyzstan</option> 
                              <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
                              
                              <option value="Latvia">Latvia</option> 
                              <option value="Lebanon">Lebanon</option> 
                              <option value="Lesotho">Lesotho</option> 
                              <option value="Liberia">Liberia</option> 
                              <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
                              <option value="Liechtenstein">Liechtenstein</option> 
                              <option value="Lithuania">Lithuania</option> 
                              <option value="Luxembourg">Luxembourg</option> 
                              <option value="Macao">Macao</option> 
                              
                              <option value="Madagascar">Madagascar</option> 
                              <option value="Malawi">Malawi</option> 
                              <option value="Malaysia">Malaysia</option> 
                              <option value="Maldives">Maldives</option> 
                              <option value="Mali">Mali</option> 
                              <option value="Malta">Malta</option> 
                              <option value="Marshall Islands">Marshall Islands</option> 
                              <option value="Martinique">Martinique</option> 
                              <option value="Mauritania">Mauritania</option> 
                              
                              <option value="Mauritius">Mauritius</option> 
                              <option value="Mayotte">Mayotte</option> 
                              <option value="Mexico">Mexico</option> 
                              <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
                              <option value="Moldova, Republic of">Moldova, Republic of</option> 
                              <option value="Monaco">Monaco</option> 
                              <option value="Mongolia">Mongolia</option> 
                              <option value="Montserrat">Montserrat</option> 
                              <option value="Morocco">Morocco</option> 
                              
                              <option value="Mozambique">Mozambique</option> 
                              <option value="Myanmar">Myanmar</option> 
                              <option value="Namibia">Namibia</option> 
                              <option value="Nauru">Nauru</option> 
                              <option value="Nepal">Nepal</option> 
                              <option value="Netherlands">Netherlands</option> 
                              <option value="Netherlands Antilles">Netherlands Antilles</option> 
                              <option value="New Caledonia">New Caledonia</option> 
                              <option value="New Zealand">New Zealand</option> 
                              
                              <option value="Nicaragua">Nicaragua</option> 
                              <option value="Niger">Niger</option> 
                              <option value="Nigeria">Nigeria</option> 
                              <option value="Niue">Niue</option> 
                              <option value="Norfolk Island">Norfolk Island</option> 
                              <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
                              <option value="Norway">Norway</option> 
                              <option value="Oman">Oman</option> 
                              <option value="Pakistan">Pakistan</option> 
                              
                              <option value="Palau">Palau</option> 
                              <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
                              <option value="Panama">Panama</option> 
                              <option value="Papua New Guinea">Papua New Guinea</option> 
                              <option value="Paraguay">Paraguay</option> 
                              <option value="Peru">Peru</option> 
                              <option value="Philippines">Philippines</option> 
                              <option value="Pitcairn">Pitcairn</option> 
                              <option value="Poland">Poland</option> 
                              
                              <option value="Portugal">Portugal</option> 
                              <option value="Puerto Rico">Puerto Rico</option> 
                              <option value="Qatar">Qatar</option> 
                              <option value="Reunion">Reunion</option> 
                              <option value="Romania">Romania</option> 
                              <option value="Russian Federation">Russian Federation</option> 
                              <option value="Rwanda">Rwanda</option> 
                              <option value="Saint Helena">Saint Helena</option> 
                              <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                              
                              <option value="Saint Lucia">Saint Lucia</option> 
                              <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                              <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
                              <option value="Samoa">Samoa</option> 
                              <option value="San Marino">San Marino</option> 
                              <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                              <option value="Saudi Arabia">Saudi Arabia</option> 
                              <option value="Senegal">Senegal</option> 
                              <option value="Serbia and Montenegro">Serbia and Montenegro</option> 
                              
                              <option value="Seychelles">Seychelles</option> 
                              <option value="Sierra Leone">Sierra Leone</option> 
                              <option value="Singapore">Singapore</option> 
                              <option value="Slovakia">Slovakia</option> 
                              <option value="Slovenia">Slovenia</option> 
                              <option value="Solomon Islands">Solomon Islands</option> 
                              <option value="Somalia">Somalia</option> 
                              <option value="South Africa">South Africa</option> 
                              <option value="Spain">Spain</option> 
                              
                              <option value="Sri Lanka">Sri Lanka</option> 
                              <option value="Sudan">Sudan</option> 
                              <option value="Suriname">Suriname</option> 
                              <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                              <option value="Swaziland">Swaziland</option> 
                              <option value="Sweden">Sweden</option> 
                              <option value="Switzerland">Switzerland</option> 
                              <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                              <option value="Taiwan, Province of China">Taiwan, Province of China</option> 
                              
                              <option value="Tajikistan">Tajikistan</option> 
                              <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
                              <option value="Thailand">Thailand</option> 
                              <option value="Timor-leste">Timor-leste</option> 
                              <option value="Togo">Togo</option> 
                              <option value="Tokelau">Tokelau</option> 
                              <option value="Tonga">Tonga</option> 
                              <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
                              <option value="Tunisia">Tunisia</option> 
                              
                              <option value="Turkey">Turkey</option> 
                              <option value="Turkmenistan">Turkmenistan</option> 
                              <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
                              <option value="Tuvalu">Tuvalu</option> 
                              <option value="Uganda">Uganda</option> 
                              <option value="Ukraine">Ukraine</option> 
                              <option value="United Arab Emirates">United Arab Emirates</option> 
                              <option value="United Kingdom">United Kingdom</option> 
                              <option value="United States">United States</option> 
                              
                              <option value="Uruguay">Uruguay</option> 
                              <option value="Uzbekistan">Uzbekistan</option> 
                              <option value="Vanuatu">Vanuatu</option> 
                              <option value="Venezuela">Venezuela</option> 
                              <option value="Viet Nam">Viet Nam</option> 
                              <option value="Virgin Islands, British">Virgin Islands, British</option> 
                              <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
                              <option value="Wallis and Futuna">Wallis and Futuna</option> 
                              <option value="Western Sahara">Western Sahara</option> 
                              
                              <option value="Yemen">Yemen</option> 
                              <option value="Zambia">Zambia</option> 
                              <option value="Zimbabwe">Zimbabwe</option>
                          </select>
                     </li>
                    <li><label for="phone"> Phone <em>*</em></label> <input name="phone" id="phone" value="<?php echo $phone; ?>" type="text" /></li>
                    <li><label for="fax"> Fax</label> <input name="fax" id="fax" value="<?php echo $fax; ?>" type="text" /></li>
                    <li><label for="email"> Email <em>*</em></label> <input name="email" id="email" value="<?php echo $email; ?>" type="text" /></li>
                    <li class="checkboxes"><p>I would like a quotation for the following products:</p>
                     <label><input type="checkbox" name="products[]" value="Buffing Wheels" /> Buffing Wheels</label>
                     <label><input type="checkbox" name="products[]" value="Buffing Compounds" /> Buffing Compounds</label>
                     <label><input type="checkbox" name="products[]" value="Flap Wheels" /> Flap Wheels</label>
                     <label><input type="checkbox" name="products[]" value="Custom Product" /> Custom Product</label>
                     </li>
                     <li><label for="products-other"> Other - Please Specify </label> <input name="pother" id="pother" value="<?php echo $pother; ?>" type="text" /></li>
                     <li><label for="volume"> Volume Needed </label> <input name="volume" id="volume" value="<?php echo $volume; ?>" type="text" /></li>
                     <li><label for="specs"> Product &amp; Performance Specs - Profile Description/Utilization of Metal Finishing Product</label> <textarea name="specs"></textarea></li>  
                     <!--UPLOAD--> 
                     <li><label for="comments"> Additional Comments</label> <textarea name="comments"></textarea></li>
                     <li><label for="found"> How did you find us? </label> 
                         <select name="found"> 
                              <option value="" selected="selected">Select Option</option> 
                              <option value="Referral">Referral</option> 
                              <option value="Magazine Ad">Magazine Ad</option>
                              <option value="Google">Google</option>
                              <option value="Yahoo">Yahoo</option>
                              <option value="MSN">MSN</option>
                              <option value="Industry Website">Industry Website</option>
                         </select>
                     </li>
                     <li>
			  <img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" /><a style="color:#000;" href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false"><br />
              <div style="font-size:.8em">[ Different Image ]</div></a> 
			  Enter the Captcha shown above: <input type="text" name="captcha_code" size="10" maxlength="6" />
			</li>
                     <li><input type="submit" name="Submit" value="Send" style="margin-left:163px;" /></li>
                </ol>
                <input type="hidden" name="Submit" value="true" />
            </fieldset>
        </form>

            
            
        </div><!--col-left-->
        
        <div class="col-right">
        <div class="right-bgd">
<div class="col-right-info">
    <a href="engineers-buffinghints.php"><img src="images/buff-hints.jpg" width="100" height="93" alt="Buffing Hints" /></a>
    <h4><a href="engineers-buffinghints.php">Buffing Hints</a></h4>
    <p>Take advantage of our extensive Buffing Hints Library that provides easy-to-understand reference materials on all aspects of buffing. </p>
</div><!--col-right-info-->
    
<div class="col-right-info">
    <a href="http://schaffnermfg.thomasnet-navigator.com/category/all-categories"><img src="images/order.jpg" width="100" height="83" alt="Order Online!" /></a>
    <h4><a href="http://schaffnermfg.thomasnet-navigator.com/category/all-categories">Order Online!</a></h4>
    <p>Purchase our Flap Wheels, Buffing Wheels and Buffing Compounds quickly and easily.</p>
</div><!--col-right-info-->

<div class="col-right-info iso">
    <img src="images/iso.jpg" width="178" height="38" alt="ISO Certified" />
    <img src="images/cards.jpg" width="115" height="30" alt="We accept Visa, Mastercard, and American Express payments" />
    <a href="#"><img src="images/facebook.jpg" width="30" height="30" alt="Like us on Facebook" /></a>
    <a href="#"><img src="images/linkedin.jpg" width="30" height="30" alt="Connect with us on LinkedIn" /></a>
    <a href="http://www.youtube.com/user/SchaffnerMfg"><img src="images/youtube.jpg" width="30" height="30" alt="Watch us on YouTube" /></a>
    
    <ul class="col-right-list">
        <li><a href="terms.php">Terms and Conditions</a></li><li> | </li>
        <li><a href="privacy-policy.php">Privacy Policy</a></li>
    </ul>
</div><!--col-right-info-->
</div><!--right-bgd-->

<!--updates also need to be made on:
engineers-buffinghints.php
-->
        </div><!--col-right-->
<?php include_once ('includes/footer.php'); ?>        