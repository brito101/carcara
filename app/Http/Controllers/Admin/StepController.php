<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\CheckPermission;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StepRequest;
use App\Models\Step;
use App\Models\Views\Step as ViewsStep;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Str;

class StepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        CheckPermission::checkAuth('Acessar Fases');

        $step = ViewsStep::get();

        if ($request->ajax()) {

            $token = csrf_token();

            return Datatables::of($step)
                ->addIndexColumn()
                ->addColumn('action', function ($row) use ($token) {
                    $btn = '<a class="btn btn-xs btn-primary mx-1 shadow" title="Editar" href="steps/' . $row->id . '/edit"><i class="fa fa-lg fa-fw fa-pen"></i></a>' .
                        '<form method="POST" action="steps/' . $row->id . '" class="btn btn-xs px-0"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="' . $token . '"><button class="btn btn-xs btn-danger mx-1 shadow" title="Excluir" onclick="return confirm(\'Confirma a exclusão desta fase?\')"><i class="fa fa-lg fa-fw fa-trash"></i></button></form>';
                    return $btn;
                })
                ->addColumn('description', function ($row) {
                    $text = Str::limit($row->description, 100, '...');
                    return $text;
                })
                ->addColumn('color', function ($row) {
                    $btn = "<i style=\"color: {$row->color}\" class=\"fa fa-square fa-2x\"></i>";
                    return $btn;
                })
                ->rawColumns(['description', 'action', 'color'])
                ->make(true);
        }

        return view('admin.steps.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        CheckPermission::checkAuth('Criar Fases');
        return view('admin.steps.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StepRequest $request)
    {
        CheckPermission::checkAuth('Criar Fases');


        $step = Step::create($request->all());

        if ($step->save()) {
            return redirect()
                ->route('admin.steps.index')
                ->with('success', 'Cadastro realizado!');
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Erro ao cadastrar!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        CheckPermission::checkAuth('Listar Fases');
        return redirect()->route('admin.steps.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        CheckPermission::checkAuth('Editae Fases');

        $step = Step::find($id);

        if (!$step) {
            abort(403, 'Acesso não autorizado');
        }

        return view('admin.steps.edit', compact('step'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StepRequest $request, $id)
    {
        CheckPermission::checkAuth('Editae Fases');

        $step = Step::find($id);

        if (!$step) {
            abort(403, 'Acesso não autorizado');
        }

        if ($step->update($request->all())) {
            return redirect()
                ->route('admin.steps.index')
                ->with('success', 'Atualização realizada!');
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Erro ao atualizar!');
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
        CheckPermission::checkAuth('Excluir Fases');

        $step = Step::find($id);

        if (!$step) {
            abort(403, 'Acesso não autorizado');
        }

        if ($step->delete()) {
            return redirect()
                ->route('admin.steps.index')
                ->with('success', 'Exclusão realizada!');
        } else {
            return redirect()
                ->back()
                ->with('error', 'Erro ao excluir!');
        }
    }
}