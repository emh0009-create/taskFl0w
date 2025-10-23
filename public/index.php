<?php
$tasks = [
	['title' => 'Ejercicio 1', 'completed' => false, 'priority' => 'media'],
	['title' => 'Ejercicio 2', 'completed' => true,  'priority' => 'baja'],
	['title' => 'Ejercicio 3', 'completed' => false, 'priority' => 'alta'],
	['title' => 'Ejercicio 4', 'completed' => true,  'priority' => 'media'],
	['title' => 'Ejercicio 5', 'completed' => false, 'priority' => 'alta'],
];

include_once __DIR__ . '/../app/views/header.php';
?>

  <h2>Tareas pendientes</h2>
  <ul>
	<?php foreach ($tasks as $task):
		$taskClasses = 'task-item';

		if (!empty($task['completed'])) {
			$taskClasses .= ' completed';
		}

		switch (isset($task['priority']) ? $task['priority'] : '') {
			case 'alta':
				$taskClasses .= ' priority-alta';
				break;
			case 'media':
				$taskClasses .= ' priority-media';
				break;
			case 'baja':
				$taskClasses .= ' priority-baja';
				break;
		}
		echo '<li class="' . htmlspecialchars($taskClasses) . '">' . htmlspecialchars($task['title']) . '</li>';
	endforeach; ?>
  </ul>

<?php include_once __DIR__ . '/../app/views/footer.php'; ?>
