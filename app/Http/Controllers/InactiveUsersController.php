<?php

namespace App\Http\Controllers;

use App\DataTables\InactiveUsersDataTable;

class InactiveUsersController extends Controller
{
    public function index(InactiveUsersDataTable $dataTable)
    {
        return $dataTable->render('inactive');
    }
}
