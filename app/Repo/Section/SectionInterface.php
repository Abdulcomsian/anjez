<?php

namespace App\Repo\Section;

interface SectionInterface
{
    public function storeOrUpdate($request, $id);
}
