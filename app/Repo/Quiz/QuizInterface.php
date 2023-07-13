<?php

namespace App\Repo\Quiz;

interface QuizInterface
{
    public function storeOrUpdate($data, $id);
}
