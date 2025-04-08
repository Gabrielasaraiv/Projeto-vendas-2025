<?php

namespace App\Livewire\Admin\Funcionario;

use App\Models\Funcionario;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $funcionarios = Funcionario::all();
        // variável funcionarios trás os valores da model
        return view('livewire.admin.funcionario.index', compact('funcionarios')); 
        //compact pega os dados da variável e envia para a view
    }
}
