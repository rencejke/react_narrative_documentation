<?php

Class Code {
    public $code_aid;
    public $code_article;
    public $code_publish_date;
    public $code_is_active;
    public $code_datetime;
    public $code_created;
    public $code_search;

    public $connection;
    public $lastInsertedId;
    public $tblCode;
    

    public function __construct($db) {
        $this->connection = $db;
        $this->tblCode = "code";
    }

    public function create() {
        try {
            $sql = "insert into {$this->tblCode} ";
            $sql .= "( code_article, ";
            $sql .= "code_publish_date, ";
            $sql .= "code_is_active, ";
            $sql .= "code_created, ";
            $sql .= "code_datetime ) values ( ";
            $sql .= ":code_article, ";
            $sql .= ":code_publish_date, ";
            $sql .= ":code_is_active, ";
            $sql .= ":code_created, ";
            $sql .= ":code_datetime ) ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "code_article" => $this->code_article,
                "code_publish_date" => $this->code_publish_date,
                "code_is_active" => $this->code_is_active,
                "code_created" => $this->code_created,
                "code_datetime" => $this->code_datetime,
            ]);
            $this->lastInsertedId = $this->connection->lastInsertId();
        } catch (PDOException $ex) {
            $query = false;
        }

        return $query;
    }

    public function readAll()
    {
        try {
            $sql = "select * ";
            $sql .= "from {$this->tblCode} ";
            $sql .= "order by code_is_active desc ";
            $query = $this->connection->query($sql);
        } catch (PDOException $ex) {
            $query = false;
        }
        return $query;
    }

    public function readById()
    {
        try {
            $sql = "select * ";
            $sql .= "from {$this->tblCode} ";
            $sql .= "where code_aid = :code_aid ";
            $sql .= "order by code_aid asc ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "code_aid" => $this->code_aid,
            ]);
        } catch (PDOException $ex) {
            $query = false;
        }
        return $query;
    }
    public function delete()
    {
        try {
            $sql = "delete from {$this->tblCode} ";
            $sql .= "where code_aid = :code_aid ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "code_aid" => $this->code_aid,
            ]);
        } catch (PDOException $ex) {
            $query = false;
        }
        return $query;
    }

    public function update()
    {
        try {
            $sql = "update {$this->tblCode} set ";
            $sql .= "code_article = :code_article, ";
            $sql .= "code_publish_date = :code_publish_date, ";
            $sql .= "code_datetime = :code_datetime ";
            $sql .= "where code_aid  = :code_aid ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "code_article" => $this->code_article,
                "code_publish_date" => $this->code_publish_date,
                "code_datetime" => $this->code_datetime,
                "code_aid" => $this->code_aid,
            ]);
        } catch (PDOException $ex) {
            $query = false;
        }
        return $query;
    }

    public function active()
    {
        try {
            $sql = "update {$this->tblCode} set ";
            $sql .= "code_is_active = :code_is_active, ";
            $sql .= "code_datetime = :code_datetime ";
            $sql .= "where code_aid  = :code_aid ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "code_is_active" => $this->code_is_active,
                "code_datetime" => $this->code_datetime,
                "code_aid" => $this->code_aid,
            ]);
        } catch (PDOException $ex) {
            $query = false;
        }
        return $query;
    }

    public function search()
    {
        try {
            $sql = "select ";
            $sql .= "* ";
            $sql .= "from {$this->tblCode} ";
            $sql .= "where code_article like :code_article ";
            $sql .= "order by code_is_active desc, ";
            $sql .= "code_article asc ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "code_article" => "%{$this->code_search}%",
            ]);
        } catch (PDOException $ex) {
            $query = false;
        }
        return $query;
    }
}