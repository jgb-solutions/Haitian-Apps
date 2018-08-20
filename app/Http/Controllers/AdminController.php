<?php

namespace App\Http\Controllers;

use OneSignal;

use App\Models\Team;
use App\Models\Push;
use App\Models\Level;
use App\Models\Match;
use App\Models\Group;
use App\Models\Player;
use App\Models\Sponsor;
use App\Models\MatchDate;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect(route('admin.matches.index'));
        // return view('admin.index', [
        //     'title' => 'Administration',
        //     'teams' => Team::orderBy('name')->take(10)->get(),
        //     'matches' => Match::orderBy('match_day', 'desc')->take(10)->get(),
        //     'groups' => Group::orderBy('name')->get(),
        //     'players' => Player::orderBy('name', 'desc')->take(10)->get(),
        //     'sponsors' => Sponsor::orderBy('name', 'desc')->take(10)->get(),
        //     'match_dates' => MatchDate::orderBy('name', 'desc')->take(10)->get()
        // ]);
    }

    public function teams_index()
    {
        // $collection = Team::get()->groupBy('group');
        // $sorted = $collection->sortBy(function($teams, $group) {
        //     return $group;
        // });

        // return $sorted;
        return view('admin.teams.index', [
            'title' => 'Toutes les Équipes',
            'teams' => Team::orderBy('name')->get(),
        ]);
    }

    public function teams_create()
    {
        return view('admin.teams.create', [
            'title' => 'Ajouter Une Équipe',
            'groups' => Group::orderBy('name')->get()
        ]);
    }

    public function teams_store(Request $request)
    {
        $data = $this->validateTeam($request);

        $team = Team::Create($data);

        return redirect(route('admin.teams.show', $team->id));
    }

    public function teams_edit(Team $team)
    {
        return view('admin.teams.edit', [
            'title' => 'Modifier ' . $team->name,
            'team' => $team,
            'groups' => Group::orderBy('name')->get()
        ]);
    }

    public function teams_update(Team $team, Request $request)
    {
        $updated_team = $this->validateTeam($request);

        $team->update($updated_team);

        return redirect(route('admin.teams.show', $team->id));
    }

    public function teams_show(Team $team)
    {
        return view('admin.teams.show', [
            'title' => $team->name,
            'team' => $team,
            'matches' => Match::with('team1', 'team2')
                ->where('team1_code', $team->code)
                ->orWhere('team2_code', $team->code)
                ->get()
        ]);
    }

    public function teams_delete(Team $team)
    {
       Match::where('team1_code', $team->code)
            ->orWhere('team2_code', $team->code)
            ->delete();

        $team->delete();

        return redirect(route('admin.teams.index'));
    }

    private function validateTeam(Request $request)
    {
        return $request->validate([
            'name' => 'required',
            'code' => 'required',
            'group' => 'required',
            'presentation' => 'required'
        ]);
    }

    public function groups_index()
    {
        return view('admin.groups.index', [
            'title' => 'Toutes Les Équipes Par Groupe',
            'groups' => Group::with(['teams' => function($query) {
                $query->orderBy('name', 'asc');
            }])->orderBy('name', 'asc')->get()
        ]);
    }

    public function players_index()
    {
        return view('admin.players.index', [
            'title' => 'Tous Les Joueurs Par Équipe',
            'teams' => Team::with(['players' => function($query) {
                $query->orderBy('name', 'asc');
            }])->orderBy('name', 'asc')->paginate(2)
        ]);
    }

    public function players_edit(Player $player)
    {
        return view('admin.players.edit', [
            'title' => 'Modifier ' . $player->name,
            'player' => $player,
            'teams' => Team::orderBy('name')->get()
        ]);
    }

    public function players_update(Player $player, Request $request)
    {
        $data = $this->validatePlayer($request);

        if ($request->has('photo')) {
            $data['photo'] = $request->photo->store('images');
        }

        // dd($data);

        $player->update($data);

        return redirect(route('admin.players.show', $player->id));
    }

    public function players_show(Player $player)
    {
        return view('admin.players.show', [
            'title' => $player->name,
            'player' => $player
        ]);
    }

    private function validatePlayer(Request $request)
    {
        return $request->validate([
            'name'          => 'required|string',
            'nationality'   => 'required|string',
            'birthday'      => 'required|date',
            'height'        => 'required|string',
            'pro_period'    => 'required|string',
            'position'      => 'required|string',
            'strong_leg'    => 'required|string',
            'team_code'     => 'required|string',
            'photo'         => 'image'
        ]);
    }

    public function matches_index()
    {
        return view('admin.matches.index', [
            'title' => 'Tous Les Matchs',
            'matches' => Match::with(['team1', 'team2'])->orderBy('match_day', 'asc')->get()
        ]);
    }

    public function matches_create()
    {
        return view('admin.matches.create', [
            'title' => 'Ajouter Un Match',
            'teams' => Team::with(['players' => function($query) {
                $query->orderBy('name', 'asc');
            }])->orderBy('name', 'asc')->get()
        ]);
    }

    public function matches_store(Request $request)
    {
        $data = $this->validateMatch($request);

        $match = Match::create($data);

        return redirect(route('admin.matches.show', $match->id));
    }

    public function matches_edit(Match $match)
    {
        return view('admin.matches.edit', [
            'title' => 'Modifier le match du ' . $match->match_day_format,
            'match' => $match,
            'teams' => Team::with(['players' => function($query) {
                $query->orderBy('name', 'asc');
            }])->orderBy('name', 'asc')->get()
        ]);
    }

    public function matches_update(Match $match, Request $request)
    {
        $data = $this->validateMatch($request);


        $match->update($data);

        return redirect(route('admin.matches.show', $match->id));
    }

    public function matches_show(Match $match)
    {
        return view('admin.matches.show', [
            'title' => 'Match du ' . $match->match_day_format,
            'match' => $match->load('team1', 'team2')
        ]);
    }

    public function matches_delete(Match $match)
    {
        $match->delete();

        return redirect(route('admin.matches.index'));
    }

    private function validateMatch($request) {
        return $request->validate([
            'match_day'         => 'required|date',
            'team1_code'        => 'required|string',
            'team2_code'        => 'required|string|different:team1_code',
            'score'             => 'nullable|string',
            'name'              => 'string',
            'stadium'           => 'required|string',
            'city'              => 'required|string',
            'summary'           => 'nullable|string',
            // 'team1_scorers'   => 'required|array',
            // 'team1_scores'   => 'required|array',
            // 'team2_scorers'   => 'required|array',
            // 'team2_scores'   => 'required|array',
        ]);
    }

    public function sponsors_index()
    {
        return view('admin.sponsors.index', [
            'title' => 'Nos Sponseurs',
            'sponsors' => Sponsor::orderBy('name')->paginate(6),
        ]);
    }

    public function sponsors_create()
    {
        return view('admin.sponsors.create', [
            'title' => 'Ajouter Une Équipe',
            'levels' => Level::orderBy('name')->get()
        ]);
    }

    public function sponsors_store(Request $request)
    {
        $data = $this->validateSponsor($request);

        if ($request->has('logo')) {
            $updated_player['logo'] = $request->logo->store('images');
        }

        $sponsor = Sponsor::Create($data);

        return redirect(route('admin.sponsors.show', $sponsor->id));
    }

    public function sponsors_edit(Sponsor $sponsor)
    {
        return view('admin.sponsors.edit', [
            'title' => 'Modifier ' . $sponsor->name,
            'sponsor' => $sponsor,
            'levels' => Level::orderBy('name')->get()
        ]);
    }

    public function sponsors_update(Sponsor $sponsor, Request $request)
    {
        $data = $this->validateSponsor($request);

        if ($request->has('logo')) {
            $data['logo'] = $request->logo->store('images');
        }

        $sponsor->update($data);

        return redirect(route('admin.sponsors.show', $sponsor->id));
    }

    public function sponsors_show(Sponsor $sponsor)
    {
        return view('admin.sponsors.show', [
            'title' => $sponsor->name,
            'sponsor' => $sponsor,
        ]);
    }

    public function sponsors_delete(Sponsor $sponsor)
    {
        $sponsor->delete();

        return redirect(route('admin.sponsors.index'));
    }

    private function validateSponsor(Request $request)
    {
        return $request->validate([
            'name'          => 'required|string',
            'weight'         => 'required',
            'description'   => 'required|string',
            'photo'         => 'image',
            'phones'        => 'nullable|string'
        ]);
    }

    public function push_index()
    {
        return view('admin.pushes.index', [
            'title' => 'Notifications Push',
            'notifications' => Push::latest()->paginate(2),
        ]);
    }
    public function push_send(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'message' => 'required|string',
        ]);

        OneSignal::setParam('headings', ['en' => $data['title']])
            ->sendNotificationToAll(
                $data['message'],
                $url = null,
                $data = null,
                $buttons = null,
                $schedule = null
            );

        Push::create($request->only('title', 'message'));

        return redirect(route('admin.pushes.index'));
    }
}
