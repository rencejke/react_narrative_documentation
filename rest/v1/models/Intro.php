<?php

Class Intro {
    public $intro_aid;
    public $intro_article;
    public $intro_publish_date;
    public $intro_is_active;
    public $intro_datetime;
    public $intro_created;
    public $intro_search;

    public $connection;
    public $lastInsertedId;
    public $tblintro;
    

    public function __construct($db) {
        $this->connection = $db;
        $this->tblintro = "intro";
    }

    public function create() {
        try {
            $sql = "insert into {$this->tblintro} ";
            $sql .= "( intro_article, ";
            $sql .= "intro_publish_date, ";
            $sql .= "intro_is_active, ";
            $sql .= "intro_created, ";
            $sql .= "intro_datetime ) values ( ";
            $sql .= ":intro_article, ";
            $sql .= ":intro_publish_date, ";
            $sql .= ":intro_is_active, ";
            $sql .= ":intro_created, ";
            $sql .= ":intro_datetime ) ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "intro_article" => $this->intro_article,
                "intro_publish_date" => $this->intro_publish_date,
                "intro_is_active" => $this->intro_is_active,
                "intro_created" => $this->intro_created,
                "intro_datetime" => $this->intro_datetime,
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
            $sql .= "from {$this->tblintro} ";
            $sql .= "order by intro_is_active desc ";
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
            $sql .= "from {$this->tblintro} ";
            $sql .= "where intro_aid = :intro_aid ";
            $sql .= "order by intro_aid asc ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "intro_aid" => $this->intro_aid,
            ]);
        } catch (PDOException $ex) {
            $query = false;
        }
        return $query;
    }
    public function delete()
    {
        try {
            $sql = "delete from {$this->tblintro} ";
            $sql .= "where intro_aid = :intro_aid ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "intro_aid" => $this->intro_aid,
            ]);
        } catch (PDOException $ex) {
            $query = false;
        }
        return $query;
    }

    public function update()
    {
        try {
            $sql = "update {$this->tblintro} set ";
            $sql .= "intro_article = :intro_article, ";
            $sql .= "intro_publish_date = :intro_publish_date, ";
            $sql .= "intro_datetime = :intro_datetime ";
            $sql .= "where intro_aid  = :intro_aid ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "intro_article" => $this->intro_article,
                "intro_publish_date" => $this->intro_publish_date,
                "intro_datetime" => $this->intro_datetime,
                "intro_aid" => $this->intro_aid,
            ]);
        } catch (PDOException $ex) {
            $query = false;
        }
        return $query;
    }

    public function active()
    {
        try {
            $sql = "update {$this->tblintro} set ";
            $sql .= "intro_is_active = :intro_is_active, ";
            $sql .= "intro_datetime = :intro_datetime ";
            $sql .= "where intro_aid  = :intro_aid ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "intro_is_active" => $this->intro_is_active,
                "intro_datetime" => $this->intro_datetime,
                "intro_aid" => $this->intro_aid,
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
            $sql .= "from {$this->tblintro} ";
            $sql .= "where intro_article like :intro_article ";
            $sql .= "order by intro_is_active desc, ";
            $sql .= "intro_article asc ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "intro_article" => "%{$this->intro_search}%",
            ]);
        } catch (PDOException $ex) {
            $query = false;
        }
        return $query;
    }
}