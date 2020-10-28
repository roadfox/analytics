<?php

declare(strict_types=1);

namespace OCA\Analytics\Datasource;

class FunnyData implements IDatasource
{

    public function getName(): string
    {
        return 'FunnyData';
    }

    public function getTemplates(): array
    {
        $template = array();
        array_push($template, ['id' => 'datatype', 'name' => 'Type of data', 'placeholder' => 'absolute/adaptation']);
        array_push($template, ['id' => 'delete', 'name' => 'Delete all data before load', 'placeholder' => 'true/false']);
        return $template;
    }

    public function readData(): string
    {
        // do all the database related stuff
        return 'test';
    }

}
