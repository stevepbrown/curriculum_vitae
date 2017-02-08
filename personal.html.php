
  <div id="div-personal" class="ui-content"><main itemscope itemtype="http://schema.org/Person">
    <h3> <?php echo $salutation ?></h3>
        <dl>
          <dt>Name</dt>
              <dd itemprop="name">
                  <span itemprop="givenName">Steve</span>
                  <span itemprop="familyName">Brown</span>
              </dd>
          <!-- <dt>Date of birth</dt>
              <dd itemprop="birthDate">01/01/1980</dd> -->
              <dt class="float-lft">Nationality</dt>
              <dd itemprop="nationality" class="clearfix">British</dd>
          <dt>Location</dt>
              <dd itemprop="homeLocation">Perth, Western Australia</dd>
          <dt>Telephone</dt>
              <dd>
                  <a itemprop="telephone" href="tel:0061402694803">+61402694803</a>
              </dd>
          <dt>Email</dt>
              <dd>
                  <a itemprop="email" href="mailto:steve.p.brown@outlook.com">steve.p.brown@outlook.com</a>

              </dd>
          <dt>Affiliation</dt>
            <dd itemprop="memberOf">
              Member of the Australian Computer Society since 2016
            </dd>
      </dl>

      <ul id="links">
          <!-- <li><a itemprop="url" rel="me" href="https://github.com/danielanteloagra">github</a></li> -->
          <li><a itemprop="url" rel="me" href="https://au.linkedin.com/in/steve-brown-064065127">linkedin</a></li>
          <li><a itemprop="url" href="resume.pdf">pdf resume</a></li>
      </ul>
  </div>
  <!-- END #div-personal -->
