<?php

namespace Drupal\application\Model;

use Drupal\Core\Database\Connection;

/**
 * Created by PhpStorm.
 * User: Asus-PC
 * Date: 23.01.2017
 * Time: 0:19
 */
class ServiceModel
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
		   'table_name' => $position['table_name'],
		   'parent' => $position['parent'],
           'field_name' => $position['field_name'],
           'value' => $position['value'],
           'title' => $position['title'],
           'service' => $position['service'],
           'type' => $position['type'],
	   ));

	   return $query->execute();
    }

	public function getPreview($service) {
		$query = $this->database->select('preview', 't');

		$query->fields('t');

		$query->condition('service', $service);

		$response = $query->execute();

		$result = array();

		while ( $row = $response->fetchAssoc() ) {
			array_push($result, $row);
		}

		return $result;
	}

//	public function sortByTableName($a, $b) {
//		return strnatcmp($a['table'], $b['table']);
//	}

	public function saveApplication($service_name) {

//		function sortByParent($a, $b) {
//			return strcmp($a['parent'], $b['parent']);
//		}

		$preview_data = $this->getPreview($service_name);

		$divided_fields = array();

		for ($key = 0; $key < count($preview_data) - 1; $key++) {
			$current_field = $preview_data[$key];
			$next_field = $preview_data[$key + 1];

			if (!$divided_fields[$current_field['parent']]) {
				$divided_fields[$current_field['parent']] = array();

				array_push($divided_fields[$current_field['parent']], $current_field);
			}

			if ($current_field['parent'] === $next_field['parent']) {
				array_push($divided_fields[$current_field['parent']], $next_field);
			}
		}


//		usort($preview_data, "sortByParent");
//		var_dump($preview_data, 'sortByTableName'));
		foreach ($divided_fields as $key => $field) {
			var_dump($key);
		}

	}
}