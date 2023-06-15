<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Operation;
use App\Models\OperationTeam;
use App\Models\Team;
use App\Models\TeamMember;
use App\Models\Tool;
use App\Models\User;
use App\Models\Views\Operation as ViewsOperation;
use App\Models\Views\Organization as ViewsOrganization;
use App\Models\Views\Team as ViewsTeam;
use App\Models\Views\Tool as ViewsTool;
use App\Models\Views\User as ViewsUser;
use App\Models\Views\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function index()
    {
        $organizations = ViewsOrganization::count();
        $teams = ViewsTeam::count();
        $programmers = ViewsUser::where('type', 'Programador')->count();
        $administrators = ViewsUser::where('type', 'Administrador')->count();
        $coordinators = ViewsUser::where('type', 'Coordenador')->count();
        $warriors = ViewsUser::where('type', 'Guerreiro')->count();

        $tools = ViewsTool::count();

        if (Auth::user()->hasRole('Programador|Administrador')) {
            $operations = ViewsOperation::orderBy('id', 'desc')->get();
        } else {
            $teamsUser = TeamMember::where('user_id', Auth::user()->id)->pluck('team_id');
            $operationTeams = OperationTeam::whereIn('team_id', $teamsUser)->pluck('operation_id');
            $operations = ViewsOperation::whereIn('id', $operationTeams)->orderBy('id', 'desc')->get();
        }

        $operationsOngoing = ViewsOperation::whereIn('id', $operations->pluck('id'))->where('end', '>=', date('Y-m-d H:i'))->orWhere('end', null)->count();

        $operationsStep = $operations->groupBy('step')->toArray();
        $operationsStepChart = ['label', 'data'];
        foreach ($operationsStep as $key => $value) {
            $operationsStepChart['label'][] = Str::of($key)->words(1);
            $operationsStepChart['data'][] = count($value);
        }

        $operationsClassification = $operations->groupBy('classification')->toArray();
        $operationsClassificationChart = ['label', 'data'];
        foreach ($operationsClassification as $key => $value) {
            $operationsClassificationChart['label'][] = $key;
            $operationsClassificationChart['data'][] = count($value);
        }

        $operationsType = $operations->groupBy('type')->toArray();
        $operationsTypeChart = ['label', 'data'];
        foreach ($operationsType as $key => $value) {
            if ($key == '') {
                $key = 'Sem Tipo';
            }
            $operationsTypeChart['label'][] = $key;
            $operationsTypeChart['data'][] = count($value);
        }


        /** Statistics */
        $statistics = $this->accessStatistics();
        $onlineUsers = $statistics['onlineUsers'];
        $percent = $statistics['percent'];
        $access = $statistics['access'];
        $chart = $statistics['chart'];

        return view('admin.home.index', compact(
            'organizations',
            'teams',
            'programmers',
            'administrators',
            'coordinators',
            'warriors',

            'tools',
            'operations',
            'operationsOngoing',

            'operationsStepChart',
            'operationsClassificationChart',
            'operationsTypeChart',

            'onlineUsers',
            'percent',
            'access',
            'chart',
        ));
    }

    public function chart()
    {
        /** Statistics */
        $statistics = $this->accessStatistics();
        $onlineUsers = $statistics['onlineUsers'];
        $percent = $statistics['percent'];
        $access = $statistics['access'];
        $chart = $statistics['chart'];

        return response()->json([
            'onlineUsers' => $onlineUsers,
            'access' => $access,
            'percent' => $percent,
            'chart' => $chart
        ]);
    }

    private function accessStatistics()
    {
        $onlineUsers = User::online()->count();

        $access = Visit::where('created_at', '>=', date("Y-m-d"))
            ->where('url', '!=', route('admin.home.chart'))
            ->get();
        $accessYesterday = Visit::where('created_at', '>=', date("Y-m-d", strtotime('-1 day')))
            ->where('created_at', '<', date("Y-m-d"))
            ->where('url', '!=', route('admin.home.chart'))
            ->count();

        $totalDaily = $access->count();

        $percent = 0;
        if ($accessYesterday > 0) {
            $percent = number_format((($totalDaily - $accessYesterday) / $totalDaily * 100), 2, ",", ".");
        }

        /** Visitor Chart */
        $data = $access->groupBy(function ($reg) {
            return date('H', strtotime($reg->created_at));
        });

        $dataList = [];
        foreach ($data as $key => $value) {
            $dataList[$key . 'H'] = count($value);
        }

        $chart = new \stdClass();
        $chart->labels = (array_keys($dataList));
        $chart->dataset = (array_values($dataList));

        return array(
            'onlineUsers' => $onlineUsers,
            'access' => $totalDaily,
            'percent' => $percent,
            'chart' => $chart
        );
    }
}
