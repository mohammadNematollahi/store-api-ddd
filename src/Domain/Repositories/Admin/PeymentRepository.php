<?php

namespace Domain\Repositories\Admin;


interface PeymentRepository
{
    public function all();
    public function show($peyment);
}