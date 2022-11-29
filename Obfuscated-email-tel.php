<?php

echo "<a href=".base64_encode('mailto:'.$email)." class='obfuscated header-mail'>".$email."</a>";

echo "<a href=tel:".preg_replace("/[^a-zA-Z0-9+]+/", "",$contact_number)." class='header-call'>".$contact_number."</a>";

?>

<script type="text/javascript">

//Obfuscated Email
$ (document).on ('click', '.obfuscated', function (e) {
    var enc = $ (this).attr ('href');
    var dec = window.atob (enc);
    $ (this).attr ('href', dec);
});

</script>
