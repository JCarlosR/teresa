@foreach (range(0, 11) as $i)
    <td class="text-center">
        @if (isset($details[$type][$i]))
            @if ($details[$type][$i] == 0)
                <i class="ion-clock text-default big-icon"></i>
            @elseif ($details[$type][$i] == +1)
                <i class="ion-checkmark-round text-success big-icon"></i>
            @elseif ($details[$type][$i] == -1)
                <i class="ion-close-round text-danger big-icon"></i>
            @endif
        @endif
    </td>
@endforeach