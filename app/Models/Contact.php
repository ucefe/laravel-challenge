<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;



class Contact
{

    //TODO DRY for unserialize method
    public static function update_serilized($data)
    {
        $datafile = Storage::path('data.ser');
        file_put_contents($datafile, serialize($data));
    }

    public static function all()
    {
        $datafile = Storage::path('data.ser');
        $contacts = unserialize(file_get_contents($datafile));
        return $contacts;
    }

    public static function create($contact)
    {
        $contacts = self::all();
        $contacts[] = array('firstname' => $contact['firstname'], 'lastname' => $contact['lastname'], 'phone' => $contact['phone']);
        self::update_serilized($contacts);

    }

    public static function delete($contact_index)
    {
        $contacts = self::all();
        unset($contacts[$contact_index]);
        self::update_serilized($contacts);
    }





}