<?php

namespace App\Models;

use App\Enums\Gender;
use App\Enums\jlptLevel;
use App\Enums\LicenseStatus;
use App\Enums\visaStatus;
use App\Enums\WorkingStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Candidates extends Model 
{
    use HasFactory;

    protected $fillable = [
        'registration_number', 'first_name', 'last_name', 'first_name_kana', 
        'last_name_kana', 'dob', 'gender', 'phone', 'email', 'marital_status', 
        'postal_code', 'visa_status', 'visa_expiry', 'education_level', 'faculty', 
        'jlpt_level', 'driving_license', 'status', 'process', 'address', 'memo'
    ];

    public static function insertCandidate($data) {
        
        return self::create([
            'registration_number' => $data['registration_number'], 
            'first_name' => $data['firstName'],
            'last_name' => $data['lastName'],
            'first_name_kana' => $data['firstNameKana'],
            'last_name_kana' => $data['lastNameKana'],
            'dob' => $data['birthDate'],
            'gender' => Gender::tryFrom($data['gender'])->value, 
            'phone' => $data['phone'],
            'email' => $data['email'],
            'marital_status' => $data['maritalStatus'],
            'postal_code' => $data['postalCode'],
            'visa_status' => visaStatus::tryFrom($data['visaStatus'])->value,
            'visa_expiry' => $data['visaExpiry'],
            'education_level' => $data['educationLevel'],
            'faculty' => $data['faculty'],
            'jlpt_level' => jlptLevel::tryFrom($data['jlptLevel'])->value,
            'driving_license' => LicenseStatus::tryFrom($data['licenseStatus'])->value, 
            'status' => WorkingStatus::tryFrom($data['WorkingStatus'])->value,
            'process'=>0,
            'address' => $data['address'],
            'memo' => $data['memo']
        ]);
    }

    public static function getAllCandidatesAttributes(string $candidateId){

        $candidate = self::findorfail($candidateId);
        $candidates = [$candidate];

        $candidateAttributes = collect($candidates)->map(function ($candidate){

            return [
            'id' => $candidate->id,
            'registration_number' => $candidate->registration_number, 
            'firstName' => $candidate->first_name,
            'lastName' => $candidate->last_name,
            'firstNameKana' => $candidate->first_name_kana,
            'lastNameKana' => $candidate->last_name_kana,
            'dateOfBirth' => $candidate->dob,
            'gender' => $candidate->gender, 
            'phone' => $candidate->phone,
            'email' => $candidate->email,
            'maritalStatus' => $candidate->marital_status,
            'postalCode' => $candidate->postal_code,
            'visaStatus' => $candidate->visa_status,
            'visaExpiry' => $candidate->visa_expiry,
            'educationLevel' => $candidate->education_level,
            'faculty' => $candidate->faculty,
            'jlptLevel' => $candidate->jlpt_level,
            'licenseStatus' => $candidate->driving_license,
            'status' => $candidate->status,
            'process'=>0,
            'address' => $candidate->address,
            'memo' => $candidate->memo

            ];
        })->toArray();

        return $candidateAttributes;
    }



}
