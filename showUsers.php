<?php

include_once './navbar/header.php';

include_once './functions/db.php';

include_once './functions/functions.php';

?>

<h2 class="text-center">
All users
</h2>

<?php

showAllUsers($connection);

?>


<?php

include_once './navbar/footer.php';

?>