<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductoFormBody extends Component
{
    private $producto;
    /**
     * Create a new component instance.
     * @param \App\Models\Producto $producto
     * @return void
     */
    public function __construct($producto = null)
    {
        $this->producto = $producto;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params =
            [
                'producto' => $this->producto,
            ];
        return view('components.producto-form-body', $params);
    }
}
