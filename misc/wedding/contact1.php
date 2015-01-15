<!DOCTYPE html>
<!--
Customer Contact Form - created and Maintained By Bryce Franzen
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Announcement Request</title>
        <link href="style.css" type="text/css" rel="stylesheet" media="all"/>
    </head>
    <body>
        <img id="coupleIMG" src="images/Bryce-and-Candice.png" alt="Photo of the Couple"/>
        <main>
            <form method="post" action="." id="announcement">
            <h2>Wedding Announcement Request</h2>
            <div id="errors"><?php echo $errors?></div>
            
             <!--/////////////////////-->
            
            <div class='left'>
            <label for="firstname">First Name<span class="required">*</span></label>
            <input type="text" name="firstname" style="<?php echo $firsterror?>" id="firstname" class="field" value="<?php echo $firstName?>">
            </div>
            <div class='right'>
            <label for="lastname">Last Name<span class="required">*</span></label>
            <input type="text" name="lastname" style="<?php echo $lasterror?>" id="lastname" class="field" value="<?php echo $lastName?>">
            </div>
             
             <!--////////////////////////-->
            
             <label for="email">Email Address</label>
            <input type="email" name="email" id="email" style="<?php echo $emailerror?>" class="field" value="<?php echo $email?>" placeholder="example@gmail.com">
            
            <!--/////////////////////-->
            <div class="left">
                <label for="address1">Street Address 1</label>
                <input type="text" name="address1" id="address1" style="<?php echo $address1error?>" class="field" value="<?php echo $address1?>">
            </div>
            <div class="right">
                <label for="address2">Street Address 2 / Suburb</label>
                <input type='text' name='address2' id='address2' class='field' value='<?php echo $address2?>'>
            </div>
            
            <div class='left'>
                <label for='city'>City</label>
                <input type='text' name='city' id='city' style="<?php echo $cityerror?>" class='field2' value='<?php echo $city?>'>
            </div>
            <div class='right'>
                <label>State / Country</label>
                <select name="state" style="<?php echo $stateerror?>">
                    <option value="NA" <?php if($state == 'NONE'){echo 'selected';}?>>Choose One</option>
                    <option value="N/A">---------------</option>
                    <option value="OR" <?php if($state == 'OR'){echo 'selected';}?>>Oregon</option>
                    <option value="ZA" <?php if($state == 'ZA'){echo 'selected';}?>>South Africa</option>
                    <option value="N/A">---------------</option>
                    <option value="AL" <?php if($state == 'AL'){echo 'selected';}?>>Alabama</option>
                    <option value="AK" <?php if($state == 'AK'){echo 'selected';}?>>Alaska</option>
                    <option value="AZ" <?php if($state == 'AZ'){echo 'selected';}?>>Arizona</option>
                    <option value="AR" <?php if($state == 'AR'){echo 'selected';}?>>Arkansas</option>
                    <option value="CA" <?php if($state == 'CA'){echo 'selected';}?>>California</option>
                    <option value="CO" <?php if($state == 'CO'){echo 'selected';}?>>Colorado</option>
                    <option value="CT" <?php if($state == 'CT'){echo 'selected';}?>>Connecticut</option>
                    <option value="DE" <?php if($state == 'DE'){echo 'selected';}?>>Delaware</option>
                    <option value="DC" <?php if($state == 'DC'){echo 'selected';}?>>District Of Columbia</option>
                    <option value="FL" <?php if($state == 'FL'){echo 'selected';}?>>Florida</option>
                    <option value="GA" <?php if($state == 'GA'){echo 'selected';}?>>Georgia</option>
                    <option value="HI" <?php if($state == 'HI'){echo 'selected';}?>>Hawaii</option>
                    <option value="ID" <?php if($state == 'ID'){echo 'selected';}?>>Idaho</option>
                    <option value="IL" <?php if($state == 'IL'){echo 'selected';}?>>Illinois</option>
                    <option value="IN" <?php if($state == 'IN'){echo 'selected';}?>>Indiana</option>
                    <option value="IA" <?php if($state == 'IA'){echo 'selected';}?>>Iowa</option>
                    <option value="KS" <?php if($state == 'KS'){echo 'selected';}?>>Kansas</option>
                    <option value="KY" <?php if($state == 'KY'){echo 'selected';}?>>Kentucky</option>
                    <option value="LA" <?php if($state == 'LA'){echo 'selected';}?>>Louisiana</option>
                    <option value="ME" <?php if($state == 'ME'){echo 'selected';}?>>Maine</option>
                    <option value="MD" <?php if($state == 'MD'){echo 'selected';}?>>Maryland</option>
                    <option value="MA" <?php if($state == 'MA'){echo 'selected';}?>>Massachusetts</option>
                    <option value="MI" <?php if($state == 'MI'){echo 'selected';}?>>Michigan</option>
                    <option value="MN" <?php if($state == 'MN'){echo 'selected';}?>>Minnesota</option>
                    <option value="MS" <?php if($state == 'MS'){echo 'selected';}?>>Mississippi</option>
                    <option value="MO" <?php if($state == 'MO'){echo 'selected';}?>>Missouri</option>
                    <option value="MT" <?php if($state == 'MT'){echo 'selected';}?>>Montana</option>
                    <option value="NE" <?php if($state == 'NE'){echo 'selected';}?>>Nebraska</option>
                    <option value="NV" <?php if($state == 'NV'){echo 'selected';}?>>Nevada</option>
                    <option value="NH" <?php if($state == 'NH'){echo 'selected';}?>>New Hampshire</option>
                    <option value="NJ" <?php if($state == 'NJ'){echo 'selected';}?>>New Jersey</option>
                    <option value="NM" <?php if($state == 'NM'){echo 'selected';}?>>New Mexico</option>
                    <option value="NY" <?php if($state == 'NY'){echo 'selected';}?>>New York</option>
                    <option value="NC" <?php if($state == 'NC'){echo 'selected';}?>>North Carolina</option>
                    <option value="ND" <?php if($state == 'ND'){echo 'selected';}?>>North Dakota</option>
                    <option value="OH" <?php if($state == 'OH'){echo 'selected';}?>>Ohio</option>
                    <option value="OK" <?php if($state == 'OK'){echo 'selected';}?>>Oklahoma</option>
                    <option value="PA" <?php if($state == 'PA'){echo 'selected';}?>>Pennsylvania</option>
                    <option value="RI" <?php if($state == 'RI'){echo 'selected';}?>>Rhode Island</option>
                    <option value="SC" <?php if($state == 'SC'){echo 'selected';}?>>South Carolina</option>
                    <option value="SD" <?php if($state == 'SD'){echo 'selected';}?>>South Dakota</option>
                    <option value="TN" <?php if($state == 'TN'){echo 'selected';}?>>Tennessee</option>
                    <option value="TX" <?php if($state == 'TX'){echo 'selected';}?>>Texas</option>
                    <option value="UT" <?php if($state == 'UT'){echo 'selected';}?>>Utah</option>
                    <option value="VT" <?php if($state == 'VT'){echo 'selected';}?>>Vermont</option>
                    <option value="VA" <?php if($state == 'VA'){echo 'selected';}?>>Virginia</option>
                    <option value="WA" <?php if($state == 'WA'){echo 'selected';}?>>Washington</option>
                    <option value="WV" <?php if($state == 'WV'){echo 'selected';}?>>West Virginia</option>
                    <option value="WI" <?php if($state == 'WI'){echo 'selected';}?>>Wisconsin</option>
                    <option value="WY" <?php if($state == 'WY'){echo 'selected';}?>>Wyoming</option>
            </select>				
        </div>
            <div class='right'>
                <label for='zip'>Zip / Postal Code</label>
                <input type='text' name='zip' id='zip' style="<?php echo $ziperror?>" class='field2' maxlength="5" value='<?php echo $zip?>'>
            </div>
            
            <!--/////////////////////-->
            
            <div class='left'>
            <label for='type'>Type of Announcement Desired<span class="required">*</span></label>
            <select name="type" id='type' style="<?php echo $typeerror?>">
                <option value="NONE" <?php if($type == 'NONE'){echo 'selected';}?>>Choose One</option>
                <option value="Print" <?php if($type == 'Print'){echo 'selected';}?>>Print (US Mail)</option>
                <option value="Email" <?php if($type == 'Email'){echo 'selected';}?>>Email (Sends Now)</option>
                <option value="Both" <?php if($type == 'Both'){echo 'selected';}?>>Both (Email & Print)</option>
            </select>
            </div>
            
            <!--/////////////////////-->
            
            <label for='coupleMessage'>Want to leave a message for the couple? Advice? Here's your chance!</label>
            <textarea id='coupleMessage' name='coupleMessage' placeholder="Type your message here..."><?php echo $coupleMessage?></textarea>
            
            <!--///////////////////-->
            
            <label for="action">&nbsp;</label>
            <input type="submit" name="action" id="action" value="Request An Announcement">
        </form>
        </main>
    </body>
</html>
