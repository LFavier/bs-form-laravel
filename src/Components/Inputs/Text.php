<?php
    
    namespace Regnilk\BsFormLaravel\Components\Inputs;
    
    use Illuminate\View\Component;
    
    class Text extends Component
    {
        public $name;
        public $value;
        public $errorName;
        public $errorBag;
        
        /**
         * Create a new component instance.
         *
         * @return void
         */
        public function __construct($name, $value = '', $errorName = null, $errorBag = null)
        {
            $this->name = $name;
            $this->value = $value;
            $this->errorName = $errorName ?? $this->name;
            $this->errorBag = $errorBag;
        }
        
        /**
         * Get the view / contents that represent the component.
         *
         * @return \Illuminate\Contracts\View\View|string
         */
        public function render()
        {
            return view('bs-form-laravel::inputs.text');
        }
        
        public function clean($data)
        {
            $retour = [];
            
            foreach($data as $key => $value):
                $retour[$key] = $value;
            endforeach;
            
            return $retour;
        }
    }
