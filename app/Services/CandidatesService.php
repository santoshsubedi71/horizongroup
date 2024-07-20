<?php

namespace App\Services;




use App\Models\Candidates;
use App\Models\User;


class CandidatesService
{


    protected $table = 'registrations';


    public function store($data){

        candidates::insertcandidate($data);
    }


    public function getAllCandidates()
    {
        return Candidates::all();
    }

    public  function getDetail($id){
        
        return Candidates::findorfail($id);

    }

    public function show(string $candidateId)
    {
        return Candidates::getAllCandidatesAttributes($candidateId);
    }



}









?>