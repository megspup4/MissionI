<?php

namespace App\Http\Controllers;

use App\Vote;
use App\Voters;
use Illuminate\Http\Request;

class VotesController extends Controller
{

    public function vote(Request $request) {

        $voter = Voters::where('voterid', $request->input('voterid'))->first();

        if(!$voter->isEmpty()) {

            $votedFor = $request->input('canidate1');

            $recordVote = new Vote();

            $recordVote->votedid = $voter->id;
            $recordVote->candidateid = $votedFor;

            $recordVote->save();

            return view('welcome', [
                'validVoterID' => true,
                'voteRecorded' => true,
            ]);

        } else {

            return view('welcome', [
                'validVoterID' => false,
            ]);

        }

    }

}
