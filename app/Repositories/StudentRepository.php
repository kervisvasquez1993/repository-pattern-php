<?php

namespace App\Repositories;

use App\Interfaces\StudentRepositoryInterface;
use App\Models\Studen;

class StudentRepository implements StudentRepositoryInterface
{
    public function getAll()
    {
        return Studen::all();
    }
    public function getById($id)
    {
        return Studen::findOrFail($id);
    }
    public function store(array $data)
    {
        return Studen::create($data);
    }
    public function update($id, array $data)
    {
        $student = Studen::findOrFail($id);
        $student->update($data);
        return $student;
    }
    public function destroy($id)
    {
        $student = Studen::findOrFail($id);
        $student->delete();
        return $student;
    }
}
