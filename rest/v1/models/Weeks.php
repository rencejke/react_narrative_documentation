<?php

Class Weeks {
    public $weeks_aid;
    public $weeks_title;
    public $weeks_article;
    public $weeks_publish_date;
    public $weeks_is_active;
    public $weeks_datetime;
    public $weeks_created;
    public $weeks_search;

    public $connection;
    public $lastInsertedId;
    public $tblWeeks;
    

    public function __construct($db) {
        $this->connection = $db;
        $this->tblWeeks = "weeks";
    }

    public function create() {
        try {
            $sql = "insert into {$this->tblWeeks} ";
            $sql .= "( weeks_article, ";
            $sql .= "weeks_title, ";
            $sql .= "weeks_publish_date, ";
            $sql .= "weeks_is_active, ";
            $sql .= "weeks_created, ";
            $sql .= "weeks_datetime ) values ( ";
            $sql .= ":weeks_article, ";
            $sql .= ":weeks_title, ";
            $sql .= ":weeks_publish_date, ";
            $sql .= ":weeks_is_active, ";
            $sql .= ":weeks_created, ";
            $sql .= ":weeks_datetime ) ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "weeks_article" => $this->weeks_article,
                "weeks_title" => $this->weeks_title,
                "weeks_publish_date" => $this->weeks_publish_date,
                "weeks_is_active" => $this->weeks_is_active,
                "weeks_created" => $this->weeks_created,
                "weeks_datetime" => $this->weeks_datetime,
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
            $sql .= "from {$this->tblWeeks} ";
            $sql .= "order by weeks_is_active desc ";
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
            $sql .= "from {$this->tblWeeks} ";
            $sql .= "where weeks_aid = :weeks_aid ";
            $sql .= "order by weeks_aid asc ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "weeks_aid" => $this->weeks_aid,
            ]);
        } catch (PDOException $ex) {
            $query = false;
        }
        return $query;
    }
    public function delete()
    {
        try {
            $sql = "delete from {$this->tblWeeks} ";
            $sql .= "where weeks_aid = :weeks_aid ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "weeks_aid" => $this->weeks_aid,
            ]);
        } catch (PDOException $ex) {
            $query = false;
        }
        return $query;
    }

    public function update()
    {
        try {
            $sql = "update {$this->tblWeeks} set ";
            $sql .= "weeks_article = :weeks_article, ";
            $sql .= "weeks_title = :weeks_title, ";
            $sql .= "weeks_publish_date = :weeks_publish_date, ";
            $sql .= "weeks_datetime = :weeks_datetime ";
            $sql .= "where weeks_aid  = :weeks_aid ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "weeks_article" => $this->weeks_article,
                "weeks_title" => $this->weeks_title,
                "weeks_publish_date" => $this->weeks_publish_date,
                "weeks_datetime" => $this->weeks_datetime,
                "weeks_aid" => $this->weeks_aid,
            ]);
        } catch (PDOException $ex) {
            $query = false;
        }
        return $query;
    }

    public function active()
    {
        try {
            $sql = "update {$this->tblWeeks} set ";
            $sql .= "weeks_is_active = :weeks_is_active, ";
            $sql .= "weeks_datetime = :weeks_datetime ";
            $sql .= "where weeks_aid  = :weeks_aid ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "weeks_is_active" => $this->weeks_is_active,
                "weeks_datetime" => $this->weeks_datetime,
                "weeks_aid" => $this->weeks_aid,
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
            $sql .= "from {$this->tblWeeks} ";
            $sql .= "where weeks_article like :weeks_article ";
            $sql .= "order by weeks_is_active desc, ";
            $sql .= "weeks_article asc ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "weeks_article" => "%{$this->weeks_search}%",
            ]);
        } catch (PDOException $ex) {
            $query = false;
        }
        return $query;
    }
}