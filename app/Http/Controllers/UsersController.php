<?php

namespace App\Http\Controllers;

use App\DataTables\InactiveUsersDataTableHtml;
use App\DataTables\UsersDataTable;

class UsersController extends Controller
{
    public function index(UsersDataTable $dataTable)
    {
        $inactive = InactiveUsersDataTableHtml::make();

        return $dataTable->render('active', compact('inactive'));
    }
}
