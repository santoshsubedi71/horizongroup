<?php

namespace App\Models;

use App\Enums\Gender;
use App\Enums\jlptLevel;
use App\Enums\LicenseStatus;
use App\Enums\visaStatus;
use App\Enums\WorkingStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Customers extends Model 
{
    use HasFactory;

    protected $fillable = [
        'registration_number', 'first_name', 'last_name', 'first_name_kana', 
        'last_name_kana', 'dob', 'gender', 'phone', 'email', 'marital_status', 
        'postal_code', 'visa_status', 'visa_expiry', 'education_level', 'faculty', 
        'jlpt_level', 'driving_license', 'status', 'process', 'address', 'memo'
    ];

    public static function insertCustomer($data) {
        
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

    public static function getAllCustomersAttributes(string $customerId){

        $customer = self::findorfail($customerId);
        $customers = [$customer];

        $customerAttributes = collect($customers)->map(function ($customer){

            return [
            'id' => $customer->id,
            'registration_number' => $customer->registration_number, 
            'firstName' => $customer->first_name,
            'lastName' => $customer->last_name,
            'firstNameKana' => $customer->first_name_kana,
            'lastNameKana' => $customer->last_name_kana,
            'dateOfBirth' => $customer->dob,
            'gender' => $customer->gender, 
            'phone' => $customer->phone,
            'email' => $customer->email,
            'maritalStatus' => $customer->marital_status,
            'postalCode' => $customer->postal_code,
            'visaStatus' => $customer->visa_status,
            'visaExpiry' => $customer->visa_expiry,
            'educationLevel' => $customer->education_level,
            'faculty' => $customer->faculty,
            'jlptLevel' => $customer->jlpt_level,
            'licenseStatus' => $customer->driving_license,
            'status' => $customer->status,
            'process'=>0,
            'address' => $customer->address,
            'memo' => $customer->memo

            ];
        })->toArray();

        return $customerAttributes;
    }



}
