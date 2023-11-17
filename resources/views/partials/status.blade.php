@php
    $bgClass = 'bg-warning';

    switch($task->status) {
        case 'Pending':
            $bgClass = 'bg-warning';
            break;
        case 'In Progress':
            $bgClass = 'bg-primary';
            break;
        case 'Done':
            $bgClass = 'bg-success';
            break;
        case 'In Testing':
            $bgClass = 'bg-info';
            break;
        case 'In Review':
            $bgClass = 'bg-secondary';
            break;

        default:
            break;
    }
@endphp
<h6 class="mb-0"><span class="badge {{ $bgClass }}">{{ $task->status }}</span></h6>
