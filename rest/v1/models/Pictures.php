<?php

Class Pictures {
    public $pictures_aid;
    public $pictures_article;
    public $pictures_publish_date;
    public $pictures_is_active;
    public $pictures_datetime;
    public $pictures_created;
    public $pictures_search;

    public $connection;
    public $lastInsertedId;
    public $tblPictures;
    

    public function __construct($db) {
        $this->connection = $db;
        $this->tblPictures = "pictures";
    }

    public function create() {
        try {
            $sql = "insert into {$this->tblPictures} ";
            $sql .= "( pictures_article, ";
            $sql .= "pictures_publish_date, ";
            $sql .= "pictures_is_active, ";
            $sql .= "pictures_created, ";
            $sql .= "pictures_datetime ) values ( ";
            $sql .= ":pictures_article, ";
            $sql .= ":pictures_publish_date, ";
            $sql .= ":pictures_is_active, ";
            $sql .= ":pictures_created, ";
            $sql .= ":pictures_datetime ) ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "pictures_article" => $this->pictures_article,
                "pictures_publish_date" => $this->pictures_publish_date,
                "pictures_is_active" => $this->pictures_is_active,
                "pictures_created" => $this->pictures_created,
                "pictures_datetime" => $this->pictures_datetime,
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
            $sql .= "from {$this->tblPictures} ";
            $sql .= "order by pictures_is_active desc ";
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
            $sql .= "from {$this->tblPictures} ";
            $sql .= "where pictures_aid = :pictures_aid ";
            $sql .= "order by pictures_aid asc ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "pictures_aid" => $this->pictures_aid,
            ]);
        } catch (PDOException $ex) {
            $query = false;
        }
        return $query;
    }
    public function delete()
    {
        try {
            $sql = "delete from {$this->tblPictures} ";
            $sql .= "where pictures_aid = :pictures_aid ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "pictures_aid" => $this->pictures_aid,
            ]);
        } catch (PDOException $ex) {
            $query = false;
        }
        return $query;
    }

    public function update()
    {
        try {
            $sql = "update {$this->tblPictures} set ";
            $sql .= "pictures_article = :pictures_article, ";
            $sql .= "pictures_publish_date = :pictures_publish_date, ";
            $sql .= "pictures_datetime = :pictures_datetime ";
            $sql .= "where pictures_aid  = :pictures_aid ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "pictures_article" => $this->pictures_article,
                "pictures_publish_date" => $this->pictures_publish_date,
                "pictures_datetime" => $this->pictures_datetime,
                "pictures_aid" => $this->pictures_aid,
            ]);
        } catch (PDOException $ex) {
            $query = false;
        }
        return $query;
    }

    public function active()
    {
        try {
            $sql = "update {$this->tblPictures} set ";
            $sql .= "pictures_is_active = :pictures_is_active, ";
            $sql .= "pictures_datetime = :pictures_datetime ";
            $sql .= "where pictures_aid  = :pictures_aid ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "pictures_is_active" => $this->pictures_is_active,
                "pictures_datetime" => $this->pictures_datetime,
                "pictures_aid" => $this->pictures_aid,
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
            $sql .= "from {$this->tblPictures} ";
            $sql .= "where pictures_article like :pictures_article ";
            $sql .= "order by pictures_is_active desc, ";
            $sql .= "pictures_article asc ";
            $query = $this->connection->prepare($sql);
            $query->execute([
                "pictures_article" => "%{$this->pictures_search}%",
            ]);
        } catch (PDOException $ex) {
            $query = false;
        }
        return $query;
    }
}