@extends('layout.mainLayout')

@section('title', 'Checkerboard')

@section('main_content')
    <h1 style="text-align: center;">8x8 Checkerboard</h1>

    <div class="board-container">
        <table class="checkerboard">
            @for ($row = 1; $row <= 8; $row++)
                <tr>
                    @for ($col = 1; $col <= 8; $col++)
                        @php
                            $isEven = (($row + $col) % 2 == 0);
                        @endphp
                        
                        <td class="{{ $isEven ? 'box-even' : 'box-odd' }}">
                            {{ $row }}.{{ $col }}
                        </td>
                    @endfor
                </tr>
            @endfor
        </table>
    </div>
@endsection