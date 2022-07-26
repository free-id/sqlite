<?php

declare(strict_types=1);

namespace FreeId\Sqlite;

use FreeId\Core\Concerns\Database;
use FreeId\Contracts\SqliteDatabase as SqliteDatabaseContract;
use FreeId\Core\Parser as BaseParser;

class Parser extends BaseParser implements SqliteDatabaseContract
{
    use Database;

    public function __construct(
        string $path,
        string $table,
        string $column = 'id',
        int $start_id = 1,
    ) {
        parent::__construct([], $start_id);
        $this->path = $path;
        $this->table = $table;
        $this->column = $column;
    }

    public function find(): int
    {
        $this->data = $this->getData(
            'sqlite:' . $this->path,
            ['username' => null, 'password' => null],
            $this->table,
            $this->column,
        );

        return $this->enumerate();
    }
}
