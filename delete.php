<?php

use Helpers\Database;

require 'autoload.php';

Database::query('DELETE FROM `students` WHERE `id` = ' . e($_GET['id']));

return redirect(url('/?delete=true&id=' . e($_GET['id'])));
