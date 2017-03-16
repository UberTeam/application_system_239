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
		   'root' => $position['root'],
           'field_name' => $position['field_name'],
           'value' => $position['value'],
           'title' => $position['title'],
           'root_rus' => $position['root_rus'],
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
			preg_replace('_', '-', $row['table_name']);
			preg_replace('_', '-', $row['root']);
			preg_replace('_', '-', $row['parent']);
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

			if (!$divided_fields[$current_field['root']]) {
				$divided_fields[$current_field['root']] = array();

				array_push($divided_fields[$current_field['root']], $current_field);
			}

			if ($current_field['root'] === $next_field['root']) {
				array_push($divided_fields[$current_field['root']], $next_field);
			}
		}

//		var_dump($divided_fields);
		$this->insertValues($divided_fields);
//		usort($preview_data, "sortByParent");
//		var_dump($preview_data, 'sortByTableName'));
//		foreach ($divided_fields as $key => $field) {
//
//		}




	}

	public function insertValues($fields) {

		$tosend = array();
		$table = NULL;

		foreach($fields as $root => $fields) {

			$table = $root;
//			$query = $this->database->insert($root);

			foreach ($fields as $key => $field) {
				if ($field['parent'] === $root) {
					$tosend[$field['field_name']] = $field['value'];
//					$query -> values($value['field_name']);
				}
			}

//			$query = $this->database->insert('eq01-competition');
//
//			$query -> fields($tosend);
//
//			$query -> execute();

//			var_dump($root);
//			var_dump($fields);

			$tosend = array();
		}
	}

	public function getRealTableName($machine_name) {
		$real_tables = array(
			'com01-bonfire',
			'com02-bike-cross',
			'com02-ddm',
			'com04-lunch-competition',
			'com05-ktm',
			'com06-night-rally',
			'com07-orienteering-labyrinth',
			'com08-obstacle-course',
			'com09-tvt',
			'com10-photocross',
			'eq01-competition',
			'eq02-secretary',
			'eq03-electricity',
			'eq04-something-else',
			'eq05-printing-stuff',
			'eq06-tools',
			'eq0701-bonfire',
			'eq0702-bike-cross',
			'eq0703-ddm',
			'eq0704-lunch-competition',
			'eq0705-ktm',
			'eq0706-night-rally',
			'eq0707-orienteering-labyrinth',
			'eq0708-obstacle-course\'',
			'eq0709-tvt',
			'eq0710-photocross',
			'eq0711-info-centre',
			'eq0712-secretariat',
			'eq08-files',
			'eq09-buoy',
			'eq10-flags',
			'pur01-grocery-list',
			'pur02-perishables',
			'ser01-info-centre',
			'ser02-secretariat',
			'tec01-radio-subscribers',
			'tec02-laptops',
			'tr01-transport-time-place',
			'tr02-picker',
			'wor01-banner-installation',
			'wor02-installation-works',
			'wor03-woodworking-volume',
		);
	}

}