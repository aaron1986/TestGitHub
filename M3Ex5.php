<?php

function getName($Christianname, $Surname, $middlename = "") {

    return ucwords($Surname . ", " . $Christianname . " " . $middlename) ;
}
echo  getName('john', 'smith', 'k.');

?>