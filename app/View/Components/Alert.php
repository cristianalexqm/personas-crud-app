<?php
namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public string $type;
    public string $message;

    public function __construct(string $type, string $message)
    {
        $this->type = $type;
        $this->message = $message;
    }

    /**
     * Devuelve las clases CSS según el tipo de alerta.
     */
    public function alertClass(): string
    {
        return match ($this->type) {
            'success' => 'bg-green-500 text-white',
            'danger' => 'bg-red-500 text-white',
            'warning' => 'bg-yellow-500 text-black',
            'info' => 'bg-blue-500 text-white',
            default => 'bg-gray-500 text-white',
        };
    }

    public function render()
    {
        return view('components.alert');
    }
}
