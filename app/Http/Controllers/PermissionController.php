<?php

namespace App\Http\Controllers;

use App\Responses\Facades\ResponseFacade;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function index()
    {
        $this->authorize('index', Permission::class);
        return ResponseFacade::respond(
            'Data Loaded Successfully',
            Permission::get()->groupBy('group')
        );
    }
}
