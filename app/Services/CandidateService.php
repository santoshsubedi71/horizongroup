<?php

namespace App\Services;

use App\Models\Candidate;
use App\Models\User;


class CandidateService
{


    protected $table = 'registrations';


    public function store($data){

        candidate::insertcandidate($data);
    }


    public function getAllCandidates()
    {
        return Candidate::all();
    }

    public  function getDetail($id){
        
        return Candidate::findorfail($id);

    }

    public function show(string $candidateId)
    {
        return Candidate::getAllCandidatesAttributes($candidateId);
    }



}









?>