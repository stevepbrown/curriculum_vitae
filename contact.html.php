
<div id="div-contact" class="class="content-page">
    <h3> <?php echo $salutation ?></h3>
    <form action="send_email.php" method="post" id='contact_form'>
    <div id="div-widget-wrapper" class="widget">
        <fieldset id="fldst-contact-details">
        <h4>Contact Details</h4>
        <div id="div-firstName" class="ui-field-contain"><label for="firstname" class="mandatory">First Name</label><input type="text" id="firstname" name="firstname" placeholder="Your given name (max 20 chars)" autocomplete="on" minlength=2></div>
        <div id="div-surname" class="ui-field-contain"><label for="surname" class="mandatory">Surname</label><input type="text" id="surname" name="surname" placeholder="Your given name (max 20 chars)" autocomplete="on" maxlength="20" ></div>
        <div id="div-tel" class="ui-field-contain"><label for="tel">Telephone</label><input type="text" id="tel" name="tel" placeholder="Mobile or landline number" autocomplete="on" maxlength="20" ></div>
        <div id="div-email" class="ui-field-contain"><label for="email" class="mandatory">Email</label><input type="email" id="email" name="email" placeholder="Enter a valid email address" autocomplete="on" maxlength="20" ></div>
      </fieldset>
      <fieldset id="fldst-enq">
        <h4>Referral</h4>
        <div id="div-referer" class="controlgroup">
          <label>How did you hear about me?</label>
          <label for="radio-email">Introductory email</label><input id="radio-email" type="radio" name="referrer" value="Email"></input>
          <label for="radio-linkedin">Linked-in</label><input id="radio-linkedin" type="radio" name="referrer" value="Linkedin"></input>
          <label for="radio-google">Search engine: Google</label><input id="radio-google" type="radio" name="referrer" value="Google"></input>
          <label for="radio-bing">Search engine: Bing</label><input id="radio-bing" type="radio" name="referrer" value="Bing"></input>
          <label for="radio-jobsite">Jobsite (specify)</label>
          <input id="radio-jobsite" type="radio" name="referrer" value="jobsite"></input>
          <input type="text" id="specify-jobsite" class="enabledisable" name="specify-jobsite" placeholder="Please specify the job-site"></input>
          <label for="radio-wordofmouth">Word-of-mouth</label><input id="radio-wordofmouth" type="radio" name="referrer" value="wordofmouth"></input>
          <label for="radio-other">Other (specify)</label><input id="radio-other" type="radio" name="referrer" value="other"></input>
          <input type="text" id="specify-other" class="enabledisable" name="specify-other" placeholder="Please specify the other source"></input>

          <h4>Enquiry</h4>
          <div id="div-msg" class="ui-field-contain">
            <label for="msg" class="mandatory">Message</label>
            <!-- //TODO: Width & border wrong -->
            <input type="textarea" id="msg" name="msg" placeholder="Please enter a brief description, outlining your enquiry" maxlength="500" required><span class="ui-icon-check"></span>
          </div>
      </fieldset>
      <input type="submit" id="btn-submit" name="btn-submit" value="submit">
  </div></form>
</div>

<!-- //TODO: Add pattern matching validation -->
<!-- //TODO: Add icons -->
<!-- //TODO: Get field sizing (including responsive) -->
<!-- //TODO: Font selection, sizing, relative sizing -->
<!-- //TODO: PHP send mail -->
<!-- //TODO: Typography -->
