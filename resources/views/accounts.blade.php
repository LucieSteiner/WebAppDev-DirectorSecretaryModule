@extends('layouts.dashboard')
@section('page_heading','Accounts')
@section('section')


    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table ">
                <tr>
                    <th>Name</th>
                    <th>Finished</th>
                    <th>Audited</th>
                </tr>
                @foreach ($accounts as $account)
                    <tr>
                        <td class="table-text">
                            <div>{{ $account->name }}</div>
                        </td>
                        <td>
                            <div>
                                @if ($account->finished == true)
                                    Yes
                                @else No
                                @endif

                            </div>
                        </td>
                        <td>
                            <div>
                                @if ($account->audited == true)
                                    Yes
                                @else No
                                @endif

                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@stop
