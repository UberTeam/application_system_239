<?php

namespace Drupal\application\Model;

use Drupal\Core\Database\Connection;

/**
 * Created by PhpStorm.
 * User: Asus-PC
 * Date: 23.01.2017
 * Time: 0:19
 */
class RallyModel
{
    /**
     * The database connection.
     *
     * @var \Drupal\Core\Database\Connection
     */
    protected $database;

    /**
     * Constructs a MyPageDbLogic object.
     *
     * @param \Drupal\Core\Database\Connection $database
     *   The database connection.
     */

    // Переменная $database прилетела к нам из аргумента сервиса.
    public function __construct(Connection $database) {
        $this->database = $database;
    }

    public function add($position) {
	   if (empty($position)) {
	     return FALSE;
	   }

	   $query = $this->database->insert('preview');

	   $query->fields(array(
           'field_name' => $position['field_name'],
           'value' => $position['value'],
           'title' => $position['title'],
           'service' => 'rally',
	   ));

	   return $query->execute();
    }
}