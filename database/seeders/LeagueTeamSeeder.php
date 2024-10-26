<?php

namespace Database\Seeders;

use App\Models\League;
use App\Models\Team\Team;
use Illuminate\Database\Seeder;

class LeagueTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $serieA = League::where('name', 'Serie A')->first();
        $premierLeague = League::where('name', 'Premier League')->first();

        $teams = Team::all();

        $serieATeams = $teams->take(4);
        $premierLeagueTeams = $teams->skip(4)->take(4);

        foreach ($serieATeams as $team) {
            $serieA->teams()->attach($team->id);
        }

        foreach ($premierLeagueTeams as $team) {
            $premierLeague->teams()->attach($team->id);
        }
    }
}