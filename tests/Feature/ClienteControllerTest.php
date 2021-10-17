<?php

namespace Tests\Feature;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Controllers\ClienteController;
use Illuminate\Http\Request;

class ClienteControllerTest extends TestCase
{
    public function testIndex()
    {
        $atual = [];
        $cliente = new ClienteController;
        $dados = $cliente->index();
        foreach ($dados->cliente as $key => $value) {
            $atual[$key][1] = $value['nome'];
            $atual[$key][2] = $value['telefone'];
            $atual[$key][3] = $value['email'];
        }


        $esperado = [
            1 => "Julio Cesar",
            2 => "999999999999",
            3 => "julio@gmail.com",
        ];

        $this->assertEquals($esperado, $atual[0]);
    }

    public function testCadastrarCliente()
    {
        $clienteCadastrado = new Cliente;
        $this->assertTrue($clienteCadastrado->save());
    }

    public function testVisualizar()
    {

        $cliente = new ClienteController;
        $esperado = [
            1 => "JOAO PEDRO FERRAZ SOARES",
            2 => "31971694273",
            3 => "jpferrazsoares@gmail.com"
        ];
        $dados = $cliente->visualizar($id = "616c8d70e703033c9f62d96d");
        $atual[1] = $dados->cliente['nome'];
        $atual[2] = $dados->cliente['telefone'];
        $atual[3] = $dados->cliente['email'];

        $this->assertEquals($esperado, $atual);

    }

    public function testDestroy()
    {
        $id = "616c927c21873a49af604d72";
        $this->assertTrue(Cliente::findOrFail($id)->delete());

    }

    public function testUpdate()
    {
        $id = "616c8d70e703033c9f62d96d";
        $esperado = ["nome" => "Julio Cesar"];
        $this->assertTrue(Cliente::findOrFail($id)->update($esperado));
    }

}


