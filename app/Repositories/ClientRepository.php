<?php

namespace App\Repositories;

use App\Models\Client;

class ClientRepository
{
    public function getClientById(int $id, array $relations = []): Client
    {
        return Client::findOrFail($id);
    }

    public function storeClient(array $request): Client
    {
        $client = Client::create($request);

        return $client;
    }
}
