<?php

namespace App\Repo\Section;

interface SectionInterface
{
    public function storeOrUpdate($request, $id);
    public function edit($request);
    public function delete($id);
}
