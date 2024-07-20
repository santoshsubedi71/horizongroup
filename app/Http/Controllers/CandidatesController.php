<?php

namespace App\Http\Controllers;

use App\Services\CandidatesService;
use Illuminate\Http\Request;
use App\Enums\Gender;
use App\Models\Candidates;
use App\Enums\WorkingStatus;

class CandidatesController extends Controller
{
    //

    protected $CandidatesService;

    public function __construct(CandidatesService $CandidatesService)
    {
        $this->CandidatesService = $CandidatesService;
    }

    public function index(){

        $candidates = $this->CandidatesService->getAllCandidates();
        return view('candidates.index', compact('candidates'));
    }

    public function mapGenderStringToInt(string $genderLabel): ?int {
        return match ($genderLabel) {
            'MALE' => Gender::MALE->value,
            'FEMALE' => Gender::FEMALE->value,
            'OTHERS' => Gender::OTHERS->value,
            default => null 
        };
    }

    public function mapMaritalStatusToInteger(string $statusLabel): int {
        return match ($statusLabel) {
            'single' => 1,  
            'marriage' => 2,  
            default => 0 
        };
    }
    

 
    public function create()
    {
        // Fetch enum cases to pass to the Blade view
        $statuses = WorkingStatus::cases();
        return view('candidates.registration', compact('statuses'));
    }
    
    
    public function store(Request $request)
{
    
    $data = $request->validate([
        
        'firstName' => 'required|string|max:255',
        'lastName' => 'required|string|max:255',
        'firstNameKana' => 'required|string|max:255',
        'lastNameKana' => 'required|string|max:255',
        'birthDate' => 'required|date',
        'gender' => 'required|string',
        'phone' => 'required|string',
        'maritalStatus' => 'required',
        'email' => 'required|email',
        'postalCode' => 'required|string',
        'address' => 'required|string',
        'visaExpiry' => 'required|date',
        'visaStatus' => 'required|string',
        'educationLevel' => 'string',
        'faculty' => 'nullable|string',
        'WorkingStatus' => 'nullable|string',
        'jlptLevel' => 'string', 
        'licenseStatus' => 'string',
        'process'=>'string',
        'memo' => 'nullable|string',
    ]);

   
   
    $data['gender'] = $this->mapGenderStringToInt($data['gender']); 
    $data['maritalStatus'] = $this->mapMaritalStatusToInteger($data['maritalStatus']);

    // Generate registration number based on working status
    $data['registration_number'] = $this->generateRegistrationNumber($data['WorkingStatus']);

    // Pass the data to the service
    $this->CandidatesService->store($data);

    return redirect()->back()->with('success', 'Registration successful');
}



private function generateRegistrationNumber($workingStatusValue)
    {
        // Convert the incoming value to an enum case
        $workingStatus = WorkingStatus::from($workingStatusValue);
    
        // Get the prefix from the enum
        $prefix = $workingStatus->prefix();
    
        // Fetch the latest registration number that starts with this prefix
        $latestNumber = Candidates::where('registration_number', 'LIKE', "$prefix%")
                                ->orderBy('registration_number', 'desc')
                                ->value('registration_number');
    
        if ($latestNumber) {
            $number = intval(substr($latestNumber, 2)) + 1;
            return $prefix . str_pad($number, 4, '0', STR_PAD_LEFT);
        } else {
            return $prefix . '0001';
        }
    }



    public function show($id)
    {
        $candidates = $this->CandidatesService->getDetail($id);
        return view('candidates.details', ['candidates' => $candidates]);
    
    }

    public function edit(string $id)
    {
        // Get the candidate details
        //here is using [0] , if we doesnot use 0 there is show undefine error, becouse 
        //in the model file we use toArray for getting data 
        $candidate = $this->CandidatesService->show($id)[0];
    


        // Return the edit view with the candidate details
        return view('candidates.edit', [
            'candidate' => $candidate, 
            'candidatesId' => $id
        ]);
    }


}




