

<?php

function wpplugin_custom_admin_responsive( ) {
?>
<meta name="viewport" content="width=1024">
<?php
}
add_filter( 'addmeta', 'wpplugin_custom_admin_responsive', 10 );



