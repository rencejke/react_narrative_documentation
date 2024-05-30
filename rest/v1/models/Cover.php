<?php

Class Cover {
    public $cover_aid;
    public $cover_header;
    public $cover_article;
    public $cover_publish_date;
    public $cover_is_active;
    public $cover_datetime;
    public $cover_created;
    public $cover_search;

    public $connection;
    public $lastInsertedId;
    public $tblcover;
    

    public function __construct($db) {
        $this->connection = $db;
        $this->tblcover = "cover";
    }

    public function create() {
        try {
            $sql = "insert into {$this->tblcover} ";
            $sql .= "( cover_article, ";
            $sql .= "cover_header, ";
            $sql .= "cover_publish_date, ";
            $sql .= "cover_is_active, ";
            $sql .= "cover_created, ";
            $sql .= "cover_datetime ) values ( ";
            $sql .= ":cover_article, ";
            $sql .= ":cover_header, ";
            $sql .= ":cover_publish_date, ";
            $sql .= ":cover_is_active, ";
            $sql .= ":cover_created, ";
            $sql .= ":cover_datetime ) ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "cover_article" => $this->cover_article,
                "cover_header" => $this->cover_header,
                "cover_publish_date" => $this->cover_publish_date,
                "cover_is_active" => $this->cover_is_active,
                "cover_created" => $this->cover_created,
                "cover_datetime" => $this->cover_datetime,
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
            $sql .= "from {$this->tblcover} ";
            $sql .= "order by cover_is_active desc ";
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
            $sql .= "from {$this->tblcover} ";
            $sql .= "where cover_aid = :cover_aid ";
            $sql .= "order by cover_aid asc ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "cover_aid" => $this->cover_aid,
            ]);
        } catch (PDOException $ex) {
            $query = false;
        }
        return $query;
    }
    public function delete()
    {
        try {
            $sql = "delete from {$this->tblcover} ";
            $sql .= "where cover_aid = :cover_aid ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "cover_aid" => $this->cover_aid,
            ]);
        } catch (PDOException $ex) {
            $query = false;
        }
        return $query;
    }

    public function update()
    {
        try {
            $sql = "update {$this->tblcover} set ";
            $sql .= "cover_article = :cover_article, ";
            $sql .= "cover_header = :cover_header, ";
            $sql .= "cover_publish_date = :cover_publish_date, ";
            $sql .= "cover_datetime = :cover_datetime ";
            $sql .= "where cover_aid  = :cover_aid ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "cover_article" => $this->cover_article,
                "cover_header" => $this->cover_header,
                "cover_publish_date" => $this->cover_publish_date,
                "cover_datetime" => $this->cover_datetime,
                "cover_aid" => $this->cover_aid,
            ]);
        } catch (PDOException $ex) {
            $query = false;
        }
        return $query;
    }

    public function active()
    {
        try {
            $sql = "update {$this->tblcover} set ";
            $sql .= "cover_is_active = :cover_is_active, ";
            $sql .= "cover_datetime = :cover_datetime ";
            $sql .= "where cover_aid  = :cover_aid ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "cover_is_active" => $this->cover_is_active,
                "cover_datetime" => $this->cover_datetime,
                "cover_aid" => $this->cover_aid,
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
            $sql .= "from {$this->tblcover} ";
            $sql .= "where cover_article like :cover_article ";
            $sql .= "order by cover_is_active desc, ";
            $sql .= "cover_article asc ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "cover_article" => "%{$this->cover_search}%",
            ]);
        } catch (PDOException $ex) {
            $query = false;
        }
        return $query;
    }
}