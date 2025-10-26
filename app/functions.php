<?php

function obtenerClasePrioridad($prioridad)
{
    switch ($prioridad) {
        case 'alta':
            return 'priority-alta';
        case 'media':
            return 'priority-media';
        case 'baja':
            return 'priority-baja';
    }
}

function renderizarTarea($tarea)
{
    $clases = 'task-item';

    if ($tarea['completado']) {
        $clases .= ' completed';
    }

    $prioridadClase = '';
    if (isset($tarea['prioridad'])) {
        $prioridadClase = obtenerClasePrioridad($tarea['prioridad']);
        if ($prioridadClase !== '') {
            $clases .= ' ' . $prioridadClase;
        }
    }

    $titulo = isset($tarea['titulo']) ? htmlspecialchars($tarea['titulo'], ENT_QUOTES, 'UTF-8') : '';

    return '<li class="' . $clases . '">' . $titulo . '</li>';
}

?>