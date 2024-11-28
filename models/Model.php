<?php

class Model
{
    public $db;
    protected $table;

    /**
     * Model constructor.
     * Initializes the database connection.
     */
    public function __construct()
    {
        $this->db = new mysqli('localhost', 'root', '', 'linkbud');
    }

    /**
     * Set the table name for the model.
     *
     * @param string $table The name of the table.
     */
    public function setTable($table)
    {
        $this->table = $table;
    }

    /**
     * Insert a new record into the table.
     *
     * @param array $data An associative array of column-value pairs.
     * @return bool True on success, false on failure.
     */
    public function create($data)
    {
        $columns = implode(',', array_keys($data));
        $placeholders = implode(',', array_fill(0, count($data), '?'));
        $types = str_repeat('s', count($data));
        $stmt = $this->db->prepare("INSERT INTO {$this->table} ($columns) VALUES ($placeholders)");
        $stmt->bind_param($types, ...array_values($data));
        return $stmt->execute();
    }

    /**
     * Retrieve records from the table.
     *
     * @param array $conditions An associative array of column-value pairs for the WHERE clause.
     * @return array An array of records.
     */
    public function read($conditions = [])
    {
        $sql = "SELECT * FROM {$this->table}";
        $params = [];
        $types = '';

        if ($conditions) {
            $clauses = [];
            foreach ($conditions as $column => $value) {
                $clauses[] = "$column = ?";
                $types .= 's';
                $params[] = $value;
            }
            $sql .= ' WHERE ' . implode(' AND ', $clauses);
        }

        $stmt = $this->db->prepare($sql);
        if ($params) {
            $stmt->bind_param($types, ...$params);
        }
        $stmt->execute();

        $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        $objects = [];
        foreach ($result as $record) {
            $object = new static();
            foreach ($record as $field => $value) {
                $object->$field = $value;
            }
            $objects[] = $object;
        }
        return $objects;
    }

    /**
     * Update records in the table.
     *
     * @param array $data An associative array of column-value pairs to update.
     * @param array $conditions An associative array of column-value pairs for the WHERE clause.
     * @return bool True on success, false on failure.
     */
    public function update($data, $conditions)
    {
        error_log(print_r($data, true));
        $set = [];
        $params = [];
        $types = '';

        foreach ($data as $column => $value) {
            $set[] = "$column = ?";
            $types .= 's';
            $params[] = $value;
        }

        $sql = "UPDATE {$this->table} SET " . implode(', ', $set);

        if ($conditions) {
            $clauses = [];
            foreach ($conditions as $column => $value) {
                $clauses[] = "$column = ?";
                $types .= 's';
                $params[] = $value;
            }
            $sql .= ' WHERE ' . implode(' AND ', $clauses);
        } else {
            return false; // Prevent updating all records without conditions
        }

        $stmt = $this->db->prepare($sql);
        $stmt->bind_param($types, ...$params);
        return $stmt->execute();
    }

    /**
     * Delete records from the table.
     *
     * @param array $conditions An associative array of column-value pairs for the WHERE clause.
     * @return bool True on success, false on failure.
     */
    public function delete($conditions)
    {
        $sql = "DELETE FROM {$this->table}";
        $params = [];
        $types = '';

        if ($conditions) {
            $clauses = [];
            foreach ($conditions as $column => $value) {
                $clauses[] = "$column = ?";
                $types .= 's';
                $params[] = $value;
            }
            $sql .= ' WHERE ' . implode(' AND ', $clauses);
        } else {
            return false; // Prevent deleting all records without conditions
        }

        $stmt = $this->db->prepare($sql);
        $stmt->bind_param($types, ...$params);
        return $stmt->execute();
    }

    /**
     * Execute a custom SQL query.
     *
     * @param string $sql The SQL query string.
     * @param array $params An array of parameters to bind to the query.
     * @return mysqli_result|bool The result set on success, or false on failure.
     */
    public function query($sql, $params = [])
    {
        $stmt = $this->db->prepare($sql);
        if ($params) {
            $types = str_repeat('s', count($params));
            $stmt->bind_param($types, ...$params);
        }
        $stmt->execute();
        return $stmt->get_result();
    }

    // function to refetch the current object from the database
    public function refresh()
    {
        try {
            $result = $this->read(['id' => $this->id]);
            return $result[0];
        } catch (Exception $e) {
            throw new Exception('Error: You must set the ID before refreshing the object.');
        }
    }
}
