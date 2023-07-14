<?php

namespace App\Repo\Quiz;

interface QuizInterface
{
    public function storeOrUpdate($data, $id);
    public function delete($id);
    public function edit($id);
}
