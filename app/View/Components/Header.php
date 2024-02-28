<?php 

use Illuminate\View\Component;

class Header extends Component
{
    public $headerTitle;
    public function __construct($data){
        $this->headerTitle = $data;
    }

    public function render(){
        return view('components.header');
    }
}
?>