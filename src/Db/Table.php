<?php

namespace App\Db;

use PDO;

abstract class Table
{
    protected PDO $connection;

    public function __construct(
        protected string $name
    ) {
        $this->connection = Connection::getPDOInstance();
    }

    abstract public function insert(array $data);

    public function findAll(): array
    {
        $stmt = $this->connection->query("SELECT * FROM " . $this->name);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find(int $id): ?array
    {
        $stmt = $this->connection->prepare("SELECT * FROM " . $this->name . " WHERE id=:id");
        $stmt->execute(['id' => $id]);
        $product = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($product === false) {
            return null;
        }

        return $product;
    }
}
