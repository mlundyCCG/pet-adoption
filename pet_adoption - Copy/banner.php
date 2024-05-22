<?php
var_dump($pieces);
  if($pieces[2] == "index.php") {
    echo 'You are on the homepage'; 
  }
    echo '
    <section class="banner">

      <div class="banner-form">
        <h1 class="banner-form-slogan">Begin the search for your life-long best friend.</h1>
';

echo '
            <form id="dog-form">
                <label for="pet-list">I am looking for a:</label>
                <select name="pet-list" id="pet-select">
                <option value="li">Select your pet...</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                </select>

                <label for="zip">What is your zip code:</label>
                <input type="number" name="zip" id="zip"
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                maxlength="5">

                <button type="submit" id="banner-form-submit-btn">Search</button>
            </form>';

echo '
     </div>
  </section>';
?>
