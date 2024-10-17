<html>
<head>
    <title>Client List</title>
</head>
<body>
    <h1>Client List</h1>
    <table border="1">
        <tr>
            <td> Id </td>
            <td> Product Name </td>
            <td> Client Name </td>
            <td> Team Leader Name </td>
            <td> Employee Name </td>
            <td> Status </td>
            <td> Estimated Time </td>
            <td> Spent Time </td>
            <td> Contract Start Date </td>
            <td> Contract End Date </td>
        </tr>

    @foreach($clients as $client)
<tr>
    <td> {{ $client->id }} </td>
    <td> {{ $client->product_name }} </td>
    <td> {{ $client->client_name }} </td>
    <td> {{ $client->team_leader_name }} </td>
    <td> {{ $client->employee_name }} </td>
    <td> {{ $client->status }} </td>
    <td> {{ $client->estimated_time }} </td>
    <td> {{ $client->spent_time }} </td>
    <td> {{ $client->contract_start_date }} </td>
    <td> {{ $client->contract_end_date }} </td>
</tr>
        @endforeach
        </table>

    </body>

</html>