@component('mail::message')
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
    </style>

# Contact Us Message from {{ $data->first_name." ".$data->last_name }}




<table style="width:100%">
    <tr>
        <th>First Name:</th>
        <td>{{ $data->first_name }}</td>
    </tr>
    <tr>
        <th>Last Name:</th>
        <td>{{ $data->last_name }}</td>
    </tr>
    <tr>
        <th>Email:</th>
        <td>{{ $data->email }}</td>
    </tr>
    <tr>
        <th>Phone:</th>
        <td>{{ $data->phone }}</td>
    </tr>
    <tr>
        <th>Message:</th>
        <td><p>{{ $data->message }}</p></td>
    </tr>


</table>


@endcomponent
