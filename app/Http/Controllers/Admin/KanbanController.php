<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\CheckPermission;
use App\Http\Controllers\Controller;
use App\Models\Operation;
use App\Models\OperationTeam;
use App\Models\Step;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KanbanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        CheckPermission::checkAuth('Acessar Operações');

        if (Auth::user()->hasRole('Programador|Administrador')) {
            $operation = Operation::find($id);
        } else {
            $teamsUser = TeamMember::where('user_id', Auth::user()->id)->pluck('team_id');
            $operationTeams = OperationTeam::whereIn('team_id', $teamsUser)->pluck('operation_id');
            $operation = Operation::whereIn('id', $operationTeams)->where('id', $id)->first();
        }

        if (!$operation) {
            abort(403, 'Acesso não autorizado');
        }

        return view('admin.kanban.index', compact('operation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        CheckPermission::checkAuth('Acessar Operações');

        if (!$id && !$request->area) {
            abort(403, 'Acesso não autorizado');
        }

        if (Auth::user()->hasRole('Programador|Administrador')) {
            $operation = Operation::find($id);
        } else {
            $teamsUser = TeamMember::where('user_id', Auth::user()->id)->pluck('team_id');
            $operationTeams = OperationTeam::whereIn('team_id', $teamsUser)->pluck('operation_id');
            $operation = Operation::whereIn('id', $operationTeams)->where('id', $id)->first();
        }

        if (!$operation) {
            abort(403, 'Acesso não autorizado');
        }

        if (in_array($request->area, $operation->operationSteps->pluck('step_id')->toArray())) {
            $operation->step_id = $request->area;
            if ($operation->update()) {
                return response()->json(['message' => 'success']);
            } else {
                return response()->json(['message' => 'fail']);
            }
        } else {
            return response()->json(['message' => 'fail']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
